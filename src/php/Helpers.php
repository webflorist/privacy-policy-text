<?php

namespace Webflorist\PrivacyPolicyText;

class Helpers
{
	public static function renderText(string $text)
	{
		// Render bold text
		$text = preg_replace_callback(
			'/\*\*\S[^*]+\S\*\*/',
			function (array $matches) {
				return '<strong>' . str_replace('**', '', $matches[0]) . '</strong>';
			},
			$text
		);

		// Render links
		$text = preg_replace_callback(
			'/\[\S[^\]]+\]\([^)]+\)/',
			function (array $matches) {
				$linkData = explode('](', preg_replace('/[[)]/', '', $matches[0]));
				return '<a href="' . $linkData[1] . '">' . $linkData[0] . '</a>';
			},
			$text
		);

		return $text;
	}

	public static function getProcessors()
	{
		return require_once dirname(__FILE__) . '/../processors.php';
	}
}
