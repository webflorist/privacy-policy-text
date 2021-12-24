
export function renderText(text) {
	// Render bold text
	text = text.replaceAll(/\*\*\S[^*]+\S\*\*/g, (match) => {
		return '<strong>'+match.replaceAll('**','')+'</strong>'
	})

	// Render links
	text = text.replaceAll(/\[\S[^\]]+\]\([^)]+\)/g, (match) => {
		const linkData = match.replaceAll(/[[)]/g,'').split('](')
		return '<a href="'+linkData[1]+'">'+linkData[0]+'</a>'
	})

    return text
}