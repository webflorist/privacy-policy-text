# Privacy Policy Texts in German and English<!-- omit in toc -->

[![Latest Stable Composer Version](https://poser.pugx.org/webflorist/privacy-policy-text/v)](https://packagist.org/packages/webflorist/privacy-policy-text)
[![Latest Stable npm Version](https://img.shields.io/npm/v/@webflorist/privacy-policy-text.svg)](https://www.npmjs.com/package/@webflorist/privacy-policy-text)
[![License](https://poser.pugx.org/webflorist/privacy-policy-text/license)](https://packagist.org/packages/webflorist/privacy-policy-text)

This package includes open source texts for a GDPR conform privacy policy of a website. They come in php and json files to be used by common translation frameworks.

## Table Of Contents<!-- omit in toc -->

- [Demo](#demo)
- [Features](#features)
- [Ecosystem](#ecosystem)
- [Installation](#installation)
- [Usage](#usage)
  - [In Javascript](#in-javascript)
  - [Interpolations](#interpolations)
  - [Markdown Functionality](#markdown-functionality)
- [Disclaimer](#disclaimer)
- [License](#license)

## Demo

An demo application with the texts included in this package is avaliable at:  
<https://privacy-policy-vue-demo.netlify.app/>

This demo uses the package [`webflorist/privacy-policy-vue`](https://github.com/webflorist/privacy-policy-vue).

## Features

- **Languages**  
  Currently the package includes texts in **german** and **english** language.

- **Singular/Plural**  
  The files are provided both from singular and plural viewpoints.  
  (e.g. `My website...` vs `Our website...`)

- **Formats**  
  Currently the package includes files in `php` as well as `json` format.

- **Included Texts**

  - A general **intro text**
  - Listing of **GDPR rights**
  - Text to introduce **data controller**
  - General **data security** text (SSL, etc.)
  - **Cookies** information
  - Information on **data processing** of third party data processors:
    - Webhosting
    - Web analytics
    - Interactive maps
    - Sending of emails (e.g. contact forms)
  - Disclaimer regarding **outgoing links**

## Ecosystem

This package is mainly meant as a backend package for other implementations, which use it to provide a privacy policy component to a certain framework.

The following companion package is currently available:
| Package | Framework |
| --------------------------------------------------------------------------------- | ------------------------- |
| [webflorist/privacy-policy-vue](https://github.com/webflorist/privacy-policy-vue) | [Vue](https://vuejs.org/) |
| [webflorist/privacy-policy-laravel](https://github.com/webflorist/privacy-policy-laravel) | [Vue](https://laravel.com/) |

## Installation

Using composer:

```shell
composer require webflorist/privacy-policy-text
```

Using npm:

```shell
npm install --save @webflorist/privacy-policy-text
```

Using yarn:

```shell
yarn add @webflorist/privacy-policy-text
```

## Usage

### In Javascript

The ESM module exports the following stuff:

- Objects structured as `{ de: Object, en: Object}` including the translation strings with the corresponding [interpolation](#interpolations) format:

```js
export const colonPrefixSingular : object
export const colonPrefixPlural : object
export const curlyWrapSingular : object
export const curlyWrapPlural : object
export const doubleCurlyWrapSingular : object
export const doubleCurlyWrapPlural : object
```

- An object with information about various processors (see [`processors.json`](https://github.com/webflorist/privacy-policy-text/blob/main/dist/json/processors.json)):

```js
export const defaultProcessors : object
```

- A helper function to render the [markdown functionality](#markdown-functionality) in the language strings:

```js
export function renderText(text: string): string
```

Check out the [Vue component of webflorist/privacy-policy-vue](https://github.com/webflorist/privacy-policy-vue/blob/main/dist/components/PrivacyPolicy.vue) for an example implementation.

Here is and example using a singular viewpoint and a translation library with curly-wrap [interpolations](#interpolations):

```js
import { curlyWrapSingular, renderText } from '@webflorist/privacy-policy-text'
import { translate, provideTranslations } from 'my-favourite-translation-library

provideTranslations({
    de: curlyWrapSingular.de,
    en: curlyWrapSingular.en,
})

const interpolations = {
    'webhosting_processor': 'Netlify Inc.',
    'analytics_service': 'Google Analytics',
    'analytics_processor': 'Google Ireland Limited',
    'maps_service': 'Google Maps',
    'maps_processor': 'Google LLC',
    'send_emails_service': 'Twilio Sendgrid',
    'send_emails_processor': 'Twilio Inc.',
}

// Custom translation function, which uses renderText
// from @webflorist/privacy-policy-text after translation.
const t = (key) => {
    return renderText(translate(key, interpolations))
}

return `
<p>${t('intro_content.p1')}</p>
<p>${t('intro_content.p2')}</p>
<section>
    <h2>${t('gdpr_rights.title')}</h2>
    <p>${t('gdpr_rights.content.p1')}</p>

    ...
`
```

### Interpolations

(Replacing Parameters In Translation Strings)

Any dynamic parts of the language files can be interpolated by the translation-library of your choice. The following formats are supported (each with corresponding json and php files):

- with colon prefix (`:key`)  
   (e.g. used by [Laravel](https://laravel.com/docs/8.x/localization#replacing-parameters-in-translation-strings))
- wrapped with curly braces (`{key}`)  
   (e.g. used by [Vue I18n](https://vue-i18n.intlify.dev/guide/essentials/syntax.html#interpolations))
- wrapped with double curly braces (`{{key}}`)  
   (e.g. used by [i18next](https://www.i18next.com/translation-function/interpolation))

The following interpolations are present in the language files:

```js
{
    // Name of the webhosting service
    'webhosting_service': 'Netlify Platform',
    // Company name of the webhosting processor
    'webhosting_processor': 'Netlify Inc.',

    // Name of the analytics service
    'analytics_service': 'Google Analytics',
    // Company name of the analytics processor
    'analytics_processor': 'Google Ireland Limited',

    // Name of the maps service
    'maps_service': 'Google Maps',
    // Company name of the maps processor
    'maps_processor': 'Google LLC',

    // Name of the email sending service
    'send_emails_service': 'Twilio Sendgrid',
    // Company name of the email sending processor
    'send_emails_processor': 'Twilio Inc.',
}
```

### Markdown Functionality

The language files include some markdown functionality:

- `**Bold Elements**`
- and `[Links to](#anchors)`

The package includes a `renderText(text)` function to render these markdowns. The package exports this function. So usage would be as follows:

In Javascript:

```js
import { renderText } from '@webflorist/privacy-policy-text'

renderText(myTranslatedString)
```

## Disclaimer

The included text _should_ be suitable for a GDPR-compliant website.

**I however do not take any responsibility whatsowever for that.**

## License

This package is open-sourced software licensed under the [MIT license](https://github.com/laravel/framework/blob/8.x/LICENSE.md).
