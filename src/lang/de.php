<?php

return [
	/* General text */
	'privacy_policy' => 'Datenschutzerklärung',
	'processor_list' => 'Liste von Auftragsverarbeitern',
	'address' => 'Adresse',

	/* General intro text */
	'intro_content' => [
		'p1' =>
			'Der Schutz Ihrer persönlichen Daten ist ' .
			($s ? 'mir' : 'uns') .
			' ein besonderes Anliegen. In diesem Dokument informiere' .
			($s ? ' ich' : 'n wir') .
			' Sie über die Erfassung, Verarbeitung und Weitergabe persönlicher Informationen im Rahmen der verschiedenen Funktionen ' .
			($s ? 'meiner' : 'unserer') .
			' Webseite. Es beinhaltet auch Informationen über Ihre Rechte und wie sie geschützt sind.',
		'p2' =>
			($s ? 'Meine' : 'Unsere') .
			' Webseite verarbeitet Ihre Daten ausschließlich auf Grundlage der gesetzlichen Bestimmungen - z.B. der Europäischen Datenschutzgrundverordnung ("DSGVO"). Alle gesammelten persönlichen Informationen dienen der Erbringung und Verbesserung ' .
			($s ? 'meiner' : 'unserer') .
			' Dienstleistungen. ' .
			($s ? 'Ich werde' : 'Wir werden') .
			' Ihre persönlichen Daten niemals anderweitig nutzen oder teilen, als in dieser Erklärung beschrieben. Wenn Sie ' .
			($s ? 'meine' : 'unsere') .
			' Dienstleistungen nutzen, stimmen Sie der Verarbeitung von Daten im Rahmen dieser Datenschutzerklärung zu.',
	],

	/* Listing of GDPR rights */
	'gdpr_rights' => [
		'title' => 'Ihre Datenschutzrechte',
		'content' => [
			'p1' =>
				($s ? 'Ich behandle' : 'Wir behandeln') .
				' Ihre Daten in Übereinstimmung mit der Europäischen Datenschutzgrundverordnung ("DSGVO"). Diese gibt Privatpersonen weitgehende Rechte über die Art und Weise, wie ihre persönlichen Daten gesammelt und verarbeitet werden. Diese Rechte beinhalten:',
			'ul1' => [
				'li1' =>
					'**Recht auf Auskunft** über die gesammelten persönlichen Informationen und wie diese gespeichert, verarbeitet oder geteilt werden.',
				'li2' => '**Recht auf Berichtigung** Ihrer persönlichen Informationen.',
				'li3' => '**Recht auf Löschen** Ihrer persönlichen Informationen.',
				'li4' => '**Recht auf Beschwerde** bei einer Aufsichtsbehörde.',
				'li5' =>
					'**Recht auf Einschränkung** der Verarbeitung Ihrer persönlichen Informationen.',
				'li6' =>
					'**Recht auf Widerruf** von Zustimmungen über die Verarbeitung Ihrer Daten.',
				'li7' =>
					'**Recht auf Übertragung** Ihrer persönlichen Informationen an Sie.',
			],
		],
	],

	/* Data controller */
	'data_controller' => [
		'title' => 'Verantwortliche Stelle',
		'content' => [
			'p1' =>
				'Die verantwortliche Stelle ist die natürliche oder juristische Person, die über die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten (z. B. Namen, E-Mail-Adressen o. Ä.) entscheidet. Für ' .
				($s ? 'meine' : 'unsere') .
				' Webseite ist dies:',
		],
	],

	/* General data security text */
	'security' => [
		'title' => 'Datensicherheit',
		'content' => [
			'p1' =>
				($s ? 'Meine' : 'Unsere') .
				' Webseite nutzt viele technische Maßnahmen für die sichere Übertragung und Speicherung aller gesammelten Daten und um sie gegen Manipulation oder unbefugten Zugriff zu schützen. Jeglicher Datentransfer zwischen Ihrem Endgerät, dieser Webseite und weiterer Dienste findet (SSL-)verschlüsselt statt. Eine verschlüsselte Verbindung erkennen Sie am Schloss-Symbol in Ihrer Adresszeile Ihres Browsers.',
			'p2' =>
				'Sämtliche Daten werden auf Servern ' .
				($s ? 'meiner' : 'unserer') .
				' Auftragsverarbeiter gespeichert. Die Sammlung und Verarbeitung dieser Daten basiert auf Verträgen, die ' .
				($s ? 'ich' : 'wir') .
				' (in Übereinstimmung mit Artikel 28 der DSGVO) mit diesen Anbietern abgeschlossen haben.',
		],
	],

	/* Cookies information */
	'cookies' => [
		'title' => 'Cookies',
		'content' => [
			'p1' =>
				($s ? 'Meine' : 'Unsere') .
				' Website verwendet so genannte "Cookies". Dabei handelt es sich um kleine Textdateien, die mit Hilfe des Browsers auf Ihrem Endgerät verarbeitet und abgelegt werden. Sie werden von bestimmten Funktionen ' .
				($s ? 'meiner' : 'unserer') .
				' Webseite zum Zwischenspeichern verschiedenster Informationen verwendet.',
			'p2' =>
				'Cookies können sowohl direkt von ' .
				($s ? 'meiner' : 'unserer') .
				' Webseite ("Erstanbieter-Cookies"), als auch durch die Dienste von Auftragsverarbeitern (z.B. beim Senden von E-Mails oder für Webanalyse) gesetzt werden. Beim ersten Aufruf ' .
				($s ? 'meiner' : 'unserer') .
				' Webseite werden nur technisch notwendige Erstanbieter-Cookies verwendet.',
			'p3' =>
				'Die meisten Web-Browser bieten Funktionen zur Anzeige und zum Löschen von bereits gesetzten Cookies. Weiters können Sie Ihren Browser auch so konfigurieren, dass keinerlei Cookies gesetzt werden. Bitte beachten Sie aber, dass dadurch ' .
				($s ? 'meine' : 'unsere') .
				' Webseite nur mehr eingeschränkt funktioniert.',
		],
		'no_cookies_content' => [
			'p1' =>
				'Websiten verwenden oft so genannte "Cookies". Dabei handelt es sich um kleine Textdateien, die mit Hilfe des Browsers auf Ihrem Endgerät verarbeitet und abgelegt werden, um bestimmte Funktionen der Webseite zu gewährleisten. ' .
				($s ? 'Meine' : 'Unsere') .
				' Website verwendet keinerlei "Cookies".',
		],
		'first_party' => [
			'title' => 'Erstanbieter-Cookies',
			'content' => [
				'p1' =>
					'Hier ist eine komplette Liste aller bei der Benutzung ' .
					($s ? 'meiner' : 'unserer') .
					' Webseite verwendeten technisch notwendigen **"Erstanbieter-Cookies"**:',
			],
		],
		'third_party' => [
			'title' => 'Drittanbieter-Cookies',
			'content' => [
				'p1' =>
					'Und dies sind die **"Drittanbieter-Cookies"** die bei der Verwendung gewisser Funktionen zur Anwendung kommen:',
			],
		],

		'name' => 'Name',
		'origin' => 'Herkunft',

		'purpose' => [
			'title' => 'Zweck',
			'session' =>
				'Das so genannte "Session"-Cookie erlaubt ' .
				($s ? 'meiner' : 'unserer') .
				' Webseite das Speichern und Abrufen bestimmter Informationen über Ihren aktuellen Besuch (z.B. ausgewählte Sprache oder Anmeldestatus).',
			'xsrf' =>
				'Dies ist ein Sicherheits-bezogenes Cookie, um sogenannte "Cross-Site Request Forgery" Attacken zu unterbinden.',
			'hide_alert' =>
				'Verhindert, dass der Cookie-Hinweis nach dem Ausblenden nochmals angezeigt wird.',
			'all_choices' =>
				'Speichert Ihre Entscheidung bzgl. verschiedener Cookies im Cookie-Hinweis, der bei Ihrem ersten Besuch angezeigt wird.',
			'analytics_choice' =>
				'Speichert Ihre Entscheidung bzgl. Web-Analyse im Cookie-Hinweis, der bei Ihrem ersten Besuch angezeigt wird.',
			'maps_choice' =>
				'Speichert Ihre Entscheidung bzgl. der Verwendung von interaktiven Karten beim Anzeigen einer Karte und verhindert, dass die Webseite Sie erneut fragt.',
			'analytics_third_party' =>
				'Diese Cookies werden vom Web-Analyse-Tool erstellt, welches ' .
				($s ? 'ich' : 'wir') .
				' zum Verstehen und Verbessern des Benutzerverhaltens ' .
				($s ? 'nutze' : 'nutzen') .
				'. (Mehr Informationen finden Sie im [Web-Analyse-Abschnitt](#process-analytics).)',
			'maps_third_party' =>
				'Beim Einblenden interaktiver Karten werden verschiedene Cookies vom Dienstanbieter erstellt. (Mehr Informationen finden Sie im [Abschnitt für interaktive Karten](#process-maps).)',
		],

		'written_on' => [
			'title' => 'Erstellt bei',
			'every_visit' => 'Jeder Besuch',
			'hide_alert' =>
				'Ausblenden des Cookie-Hinweises, der beim ersten Besuch der Webseite erscheint',
			'maps' =>
				'Klick auf "OK" bei der Einverständniserklärung zur Verwendung von interaktiven Karten',
			'accept_cookies' => 'Bestätigung der diesbezüglichen Cookies',
		],

		'duration' => [
			'title' => 'Dauer',
			'end_of_session' => 'Ende des Besuchs',
			'1_year' => '1 Jahr',
			'2_years' => '2 Jahre',
			'24_hours' => '24 Stunden',
			'1_minute' => '1 Minute',
			'various' => 'verschieden',
		],
	],

	/* Information on data processing (e.g. webhosting, analytics, etc.) */
	'data_processing' => [
		'title' => 'Sammlung und Verwendung von Daten',

		// Webhosting
		'webhosting' => [
			'title' => 'Webhosting',
			'content' => [
				'p1' =>
					'Beim Besuch einer Webseite sendet Ihr Web-Browser automatisch Information zum Server und der Infrastruktur, auf dem diese betrieben wird, um die Webseite sowie damit verbundene Ressourcen (wie z.B. Bilder oder Schriftarten) herunterzuladen. In ' .
					($s ? 'meinem' : 'unseren') .
					' Fall werden diese Dienste von ' .
					$i('webhosting_processor') .
					' zur Verfügung gestellt. Dabei können folgende Arten von Daten übertragen werden:',
				'ul1' => [
					'li1' => 'IP (Internet Protocol) Adresse Ihres Endgerätes,',
					'li2' => 'Zeit, Datum und Dauer Ihres Besuchs,',
					'li3' => 'besuchte Seiten,',
					'li4' =>
						'Typ, Version und Sprache Ihres Web-Browsers und Betriebssystems.',
				],
				'p2' =>
					'Diese Daten werden automatisch übertragen und geloggt, um die Erreichbarkeit, Funktionalität, Sicherheit und Stabilität ' .
					($s ? 'meiner' : 'unserer') .
					' Webseite zu gewährleisten. Die Daten bleiben gespeichert bis die Logdatei gelöscht wird. Die gesammelten Daten sind technisch notwendig für den Betrieb und die Wartung dieser Webseite und werden in keiner Weise verwendet, um Sie als Person zu identifizieren oder zu tracken. Alle Datenverarbeitungen werden auf Grundlage eines Vertrags zwischen ' .
					($s ? 'mir' : 'uns') .
					' und ' .
					$i('webhosting_processor') .
					'. Sammlung und Verarbeitung dieser Daten erfolgt in Übereinstimmung mit Artikel 6 (1) der DSGVO.',
			],
		],

		// Analytics
		'analytics' => [
			'title' => 'Web-Analyse',
			'content' => [
				'p1' =>
					'Wenn Sie Web-Analyse im Cookie-Hinweis akzeptieren, werden Log Daten auch an ' .
					$i('analytics_processor') .
					' gesendet. Dies dient zur Sammlung von statistischen Daten über die Verwendung der Webseite, um z.B. die Benutzerführung ' .
					($s ? 'meiner' : 'unserer') .
					' Seite zu verbessern. Sämtliche gesammelten Daten werden pseudonymisiert (durch Löschen eines Teils Ihrer IP-Adresse). Alle Datenverarbeitungen werden auf Grundlage eines Vertrags zwischen ' .
					($s ? 'mir' : 'uns') .
					' und ' .
					$i('analytics_processor') .
					'. Die Daten bleiben für die Dauer von 26 Monaten gespeichert.',
				'p2' =>
					'Bitte beachten Sie, dass hierbei keinerlei Daten zu transferiert werden, sofern Sie nicht explizit im Cookie-Hinweis zustimmen, der bei Ihrem ersten Besuch der Seite erscheint ("OPT-IN"). Die Datenverarbeitung geschieht somit in Übereinstimmung mit Artikel 6 (1a) der DSGVO.',
			],
		],

		// Maps
		'maps' => [
			'title' => 'Interaktive Karten',
			'content' => [
				'p1' =>
					($s ? 'Meine' : 'Unsere') .
					' Webseite bietet auf Anforderung die Funktionalität zur Darstellung interaktiver Karten (z.B. zur Erstellung von Anfahrtsplänen). Dabei werden Daten an ' .
					$i('maps_processor') .
					' gesendet.',
				'p2' =>
					'Wenn Sie der damit verbundenen Datenverarbeitung zustimmen, wird die Karte eingeblendet. Dabei werden auch persönliche Daten (wie Nutzungs- und Standort-Daten) an ' .
					$i('maps_processor') .
					' gesendet sowie diverse Cookies gesetzt.',
				'p3' =>
					'Bitte beachten Sie, dass keinerlei Daten transferiert werden, sofern Sie nicht explizit der Datenverarbeitung zum Zweck der Anzeige interaktiver Karten zustimmen ("OPT-IN"). Die Datenverarbeitung geschieht somit in Übereinstimmung mit Artikel 6 (1a) der DSGVO.',
			],
		],

		// Sending of emails (e.g. contact forms)
		'send_emails' => [
			'title' => 'E-Mail-Versand',
			'content' => [
				'p1' =>
					($s ? 'Meine' : 'Unsere') .
					' Webseite verfügt über Formulare, die verwendet werden können, um ' .
					($s ? 'mir' : 'uns') .
					' eine E-Mail zu senden. Im Formular können Sie Ihren Namen, Ihre E-Mail-Adresse sowie andere Daten eingeben. Beim Absenden der Anfrage werden diese über ' .
					$i('send_emails_processor') .
					' in ' .
					($s ? 'meine' : 'unsere') .
					' Mailbox zugestellt.',
			],
		],
	],

	/* Info regarding outgoing links */
	'outgoing_links' => [
		'title' => 'Ausgehende Links',
		'content' => [
			'p1' =>
				($s ? 'Meine' : 'Unsere') .
				' Webseite beinhaltet Links zu anderen Webseiten, die nicht von ' .
				($s ? 'mir' : 'uns') .
				' betrieben werden. Wenn Sie auf einen solchen ausgehenden Link klicken, werden Sie zu dieser Webseite weitergeleitet. ' .
				($s ? 'Ich habe' : 'Wir haben') .
				' keinerlei Einfluss auf diese Webseiten und ihren Datenschutz und übernehme' .
				($s ? '' : 'n') .
				' deshalb keine Verantwortung in Bezug auf deren Inhalt und Verhalten. Weitere Details finden Sie in den Datenschutzerklärungen dieser Seiten.',
		],
	],

	/* List of data processing purposes */
	'data_purpose' => [
		'title' => 'Zweck',
		'webhosting' => 'Hosten der Webseite und benötigter Dienste',
		'analytics' => 'Verarbeitung von Daten zur Web-Analyse',
		'maps' => 'Darstellung interaktiver Karten',
		'send_emails' => 'Senden von E-Mails (z.B. via Kontaktformularen)',
		'subscription' => 'Verwalten von Abonnements',
		'payment' => 'Zahlungsabwicklung',
	],

	/* List of data categories */
	'data_category' => [
		'title' => 'Daten-Kategorien',
		'inventory_data' => 'Stammdaten',
		'usage_data' => 'Nutzungs-Daten',
		'geo_data' => 'Standort-Daten',
		'usage_statistics' => 'Nutzungs-Statistiken',
		'contract_data' => 'Vertragsdaten',
		'payment_data' => 'Zahlungsdaten',
	],
];
