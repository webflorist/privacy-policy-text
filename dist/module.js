import colonPrefixSingularDe from './js/colon-prefix/singular/de.js'
import colonPrefixSingularEn from './js/colon-prefix/singular/en.js'
import colonPrefixPluralDe from './js/colon-prefix/plural/de.js'
import colonPrefixPluralEn from './js/colon-prefix/plural/en.js'

import curlyWrapSingularDe from './js/curly-wrap/singular/de.js'
import curlyWrapSingularEn from './js/curly-wrap/singular/en.js'
import curlyWrapPluralDe from './js/curly-wrap/plural/de.js'
import curlyWrapPluralEn from './js/curly-wrap/plural/en.js'

import doubleCurlyWrapSingularDe from './js/double-curly-wrap/singular/de.js'
import doubleCurlyWrapSingularEn from './js/double-curly-wrap/singular/en.js'
import doubleCurlyWrapPluralDe from './js/double-curly-wrap/plural/de.js'
import doubleCurlyWrapPluralEn from './js/double-curly-wrap/plural/en.js'

import processors from './js/processors.js'

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
	processors,
	renderText,
}

export default {
	colonPrefixSingular,
	colonPrefixPlural,
	curlyWrapSingular,
	curlyWrapPlural,
	doubleCurlyWrapSingular,
	doubleCurlyWrapPlural,
	processors,
	renderText,
}
