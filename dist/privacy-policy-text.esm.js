import colonPrefixSingularDe from './json/colon-prefix/singular/de.json'
import colonPrefixSingularEn from './json/colon-prefix/singular/en.json'
import colonPrefixPluralDe from './json/colon-prefix/plural/de.json'
import colonPrefixPluralEn from './json/colon-prefix/plural/en.json'

import curlyWrapSingularDe from './json/curly-wrap/singular/de.json'
import curlyWrapSingularEn from './json/curly-wrap/singular/en.json'
import curlyWrapPluralDe from './json/curly-wrap/plural/de.json'
import curlyWrapPluralEn from './json/curly-wrap/plural/en.json'

import doubleCurlyWrapSingularDe from './json/double-curly-wrap/singular/de.json'
import doubleCurlyWrapSingularEn from './json/double-curly-wrap/singular/en.json'
import doubleCurlyWrapPluralDe from './json/double-curly-wrap/plural/de.json'
import doubleCurlyWrapPluralEn from './json/double-curly-wrap/plural/en.json'

import defaultProcessors from './json/processors.json'

import { renderText } from './helpers.js'

const colonPrefixSingular = {
	de: colonPrefixSingularDe,
	en: colonPrefixSingularEn,
}
const colonPrefixPlural = {
	de: colonPrefixPluralDe,
	en: colonPrefixPluralEn,
}

const curlyWrapSingular = {
	de: curlyWrapSingularDe,
	en: curlyWrapSingularEn,
}
const curlyWrapPlural = {
	de: curlyWrapPluralDe,
	en: curlyWrapPluralEn,
}

const doubleCurlyWrapSingular = {
	de: doubleCurlyWrapSingularDe,
	en: doubleCurlyWrapSingularEn,
}
const doubleCurlyWrapPlural = {
	de: doubleCurlyWrapPluralDe,
	en: doubleCurlyWrapPluralEn,
}

export {
	colonPrefixSingular,
	colonPrefixPlural,
	curlyWrapSingular,
	curlyWrapPlural,
	doubleCurlyWrapSingular,
	doubleCurlyWrapPlural,
	defaultProcessors,
	renderText,
}
