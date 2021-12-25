#!/usr/bin/env bash
bump=$1

valid_bumps=(major minor patch)

if [[ ! " ${valid_bumps[*]} " =~ " ${1} " ]]; then
    echo 'No version bump specified. Call either:'
    echo '$ ./release.sh major'
    echo '$ ./release.sh minor'
    echo '$ ./release.sh patch'
    exit 1
fi

# Check, if we are on 'main' branch
current_branch=$(git rev-parse --abbrev-ref HEAD)
if [[ $current_branch != 'main' ]]
then
    echo "Please switch to main branch before releasing a new version!"
    exit 1
fi

echo
echo "=============="
echo "Pulling branch"
echo "=============="
git pull
if [[ $? > 0 ]]; then exit 1; fi

# Check, if there are uncommited changes
git_status=$(git status)
if [[ $? > 0 ]]; then exit 1; fi
if [[ $string != *"nothing to commit, working tree clean"* ]]
then
    echo
    echo "You seem to have uncommited changes. Please commit them before releasing a new version!"
    exit 1
fi

echo
echo "============"
echo "Pulling tags"
echo "============"
git pull --tags
if [[ $? > 0 ]]; then exit 1; fi

echo
echo "===================="
echo "Getting last version"
echo "===================="
last_tag=$(git describe --tags --abbrev=0)
if [[ $? > 0 ]]; then exit 1; fi
old_version=${last_tag:1}
echo $old_version

echo
echo "======================="
echo "Calculating new version"
echo "======================="
IFS='.' read -r -a version_array <<< "$old_version"
if [[ $bump == 'major' ]]
then
    version_array[0]=$((version_array[0] + 1))
    version_array[1]=0
    version_array[2]=0
elif [[ $bump == 'minor' ]]
then
    version_array[0]=${version_array[0]}
    version_array[1]=$((version_array[1] + 1))
    version_array[2]=0
elif [[ $bump == 'patch' ]]
then
    version_array[0]=${version_array[0]}
    version_array[1]=${version_array[1]}
    version_array[2]=$((version_array[2] + 1))
fi
new_version=${version_array[0]}.${version_array[1]}.${version_array[2]}
echo $new_version

echo
read -p "Do you want to release this version? (y/n)" -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]
then

    echo
    echo "==============================="
    echo "Bumping version in package.json"
    echo "==============================="
    node -p "JSON.stringify({...require('./package.json'), version: '${version}'}, null, 2)" >./package2.json
    if [[ $? > 0 ]]; then exit 1; fi

    echo
    echo "=================="
    echo "Committing changes"
    echo "=================="
    git commit -a -m "PREPARE new release ${new_version}"
    if [[ $? > 0 ]]; then exit 1; fi

    echo
    echo "=============="
    echo "Pushing branch"
    echo "=============="
    git push
    if [[ $? > 0 ]]; then exit 1; fi

    echo
    echo "============"
    echo "Creating tag"
    echo "============"
    git tag -a v${new_version} -m "v${new_version}"
    if [[ $? > 0 ]]; then exit 1; fi

    echo
    echo "==========="
    echo "Pushing tag"
    echo "==========="
    git push --tags
    if [[ $? > 0 ]]; then exit 1; fi

fi
