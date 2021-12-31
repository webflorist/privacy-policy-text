export default [
	{
		input: 'dist/module.js',
		output: [
			{
				format: 'cjs',
				file: 'dist/privacy-policy-text.cjs.js',
			},
			{
				format: 'esm',
				file: 'dist/privacy-policy-text.esm.js',
			},
			{
				format: 'iife',
				name: 'webflorist.privacy-policy-text',
				file: 'dist/privacy-policy-text.js',
			},
		],
	},
]
