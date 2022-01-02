import colonPrefixSingularDe from '../../dist/js/colon-prefix/singular/de/privacy-policy.js'
import colonPrefixSingularEn from '../../dist/js/colon-prefix/singular/en/privacy-policy.js'
import colonPrefixPluralDe from '../../dist/js/colon-prefix/plural/de/privacy-policy.js'
import colonPrefixPluralEn from '../../dist/js/colon-prefix/plural/en/privacy-policy.js'

import curlyWrapSingularDe from '../../dist/js/curly-wrap/singular/de/privacy-policy.js'
import curlyWrapSingularEn from '../../dist/js/curly-wrap/singular/en/privacy-policy.js'
import curlyWrapPluralDe from '../../dist/js/curly-wrap/plural/de/privacy-policy.js'
import curlyWrapPluralEn from '../../dist/js/curly-wrap/plural/en/privacy-policy.js'

import doubleCurlyWrapSingularDe from '../../dist/js/double-curly-wrap/singular/de/privacy-policy.js'
import doubleCurlyWrapSingularEn from '../../dist/js/double-curly-wrap/singular/en/privacy-policy.js'
import doubleCurlyWrapPluralDe from '../../dist/js/double-curly-wrap/plural/de/privacy-policy.js'
import doubleCurlyWrapPluralEn from '../../dist/js/double-curly-wrap/plural/en/privacy-policy.js'

import processors from '../../dist/js/processors.js'

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
