# Privacy Policy Texts in German and English

[![composer version](https://poser.pugx.org/webflorist/privacy-policy-text/v/stable)](https://packagist.org/packages/webflorist/privacy-policy-text)
[![npm version](https://img.shields.io/npm/v/@webflorist/privacy-policy-text.svg)](https://www.npmjs.com/package/@webflorist/privacy-policy-text)

This package includes open source texts for a GDPR conform privacy policy of a website. They come in php and json files to be used by common translation frameworks.

## Features

### Languages

Currently the package includes texts in german and englisch language

### Singular/Plural

The files are provided both in singular and plural viewpoints.
(e.g. `My website...` vs `Our website...`)

### Formats

Currently the package includes files in `php` as well as `json` format.

### Interpolation (Replacing Parameters In Translation Strings)

Any dynamic parts of the language files can be interpolated by the translation-library of your choice. The following formats are supported:

- with colon prefix (`:key`)  
  (e.g. used by [Laravel](https://laravel.com/docs/8.x/localization#replacing-parameters-in-translation-strings))
- wrapped with curly braces (`{key}`)  
  (e.g. used by [Vue I18n](https://vue-i18n.intlify.dev/guide/essentials/syntax.html#interpolations))
- wrapped with double curly braces (`{{key}}`)  
  (e.g. used by [i18next](https://www.i18next.com/translation-function/interpolation))

## Included Texts

- A general intro text
- Listing of GDPR rights
- General data security text (SSL, etc.)
- Cookies information
- Information on data logging of infrastructure (e.g. webhosting, analytics, etc.):
  - Webserver logging
  - Web analytics
  - Interactive maps
  - Sending of emails (e.g. contact forms)
- Info regarding outgoing links

## Disclaimer

The included text *should* be suitable for a GDPR-compliant website.
I however do not take any responsibility whatsowever for that.

## License

This package is open-sourced software licensed under the [MIT license](https://github.com/laravel/framework/blob/8.x/LICENSE.md).