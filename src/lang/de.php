<?php

return [

    /* General intro text */
    'intro' => [
        'Der Schutz Ihrer persönlichen Daten ist ' . ($s ? 'mir' : 'uns') . ' ein besonderes Anliegen. In diesem Dokument informiere' . ($s ? ' ich' : 'n wir') . ' Sie über die Erfassung, Verarbeitung und Weitergabe persönlicher Informationen im Rahmen der verschiedenen Funktionen ' . ($s ? 'meiner' : 'unserer') . ' Webseite. Es beinhaltet auch Informationen über Ihre Rechte und wie sie geschützt sind.',
        ($s ? 'Meine' : 'Unsere') . ' Webseite verarbeitet Ihre Daten ausschließlich auf Grundlage der gesetzlichen Bestimmungen - z.B. der Europäischen Datenschutzgrundverordnung ("DSGVO"). Alle gesammelten persönlichen Informationen dienen der Erbringung und Verbesserung ' . ($s ? 'meiner' : 'unserer') . ' Dienstleistungen. ' . ($s ? 'Ich werde' : 'Wir werden') . ' Ihre persönlichen Daten niemals anderweitig nutzen oder teilen, als als in dieser Erklärung beschrieben. Wenn Sie ' . ($s ? 'meine' : 'unsere') . ' Dienstleistungen nutzen, stimmen Sie der Verarbeitung von Daten im Rahmen dieser Datenschutzerklärung zu.'
    ],

    /* Listing of GDPR rights */
    'gdpr_rights' => [
        'header' => 'Ihre Datenschutzrechte',
        'text' => [
            ($s ? 'Ich behandle' : 'Wir behandeln') . ' Ihre Daten in Übereinstimmung mit der Europäischen Datenschutzgrundverordnung ("DSGVO"). Diese gibt Privatpersonen weitgehende Rechte über die Art und Weise, wie ihre persönlichen Daten gesammelt und verarbeitet werden. Diese Rechte beinhalten:',
            [
                '**Recht auf Auskunft** über die gesammelten persönlichen Informationen und wie diese gespeichert, verarbeitet oder geteilt werden.',
                '**Recht auf Berichtigung** Ihrer persönlichen Informationen.',
                '**Recht auf Löschen** Ihrer persönlichen Informationen.',
                '**Recht auf Beschwerde** bei einer Aufsichtsbehörde.',
                '**Recht auf Einschränkung** der Verarbeitung Ihrer persönlichen Informationen.',
                '**Recht auf Widerruf** von Zustimmungen über die Verarbeitung Ihrer Daten.',
                '**Recht auf Übertragung** Ihrer persönlichen Informationen an Sie.'
            ],
            'Sie können ' . ($s ? 'mich' : 'uns') . ' gerne unter ' . $i('privacy_email') . ' kontaktieren, wenn Sie Fragen oder Wünsche in Bezug auf diese Rechte haben.'
        ],
    ],

    /* General data security text */
    'security' => [
        'header' => 'Datensicherheit',
        'text' => [
            ($s ? 'Ich nutze' : 'Wir nutzen') . ' viele technische und organisatorische Maßnahmen für die sichere Übertragung und Speicherung aller gesammelten Daten und um sie gegen Manipulation oder unbefugten Zugriff zu schützen. Jeglicher Datentransfer zwischen Ihrem Endgerät, dieser Webseite und weiterer Dienste findet (SSL-)verschlüsselt statt. Eine verschlüsselte Verbindung erkennen Sie am Schloss-Symbol in Ihrer Adresszeile Ihres Browsers.',
            'Sämtliche Daten werden auf Servern ' . ($s ? 'meiner' : 'unserer') . ' Auftragsverarbeiter gespeichert. Die Sammlung und Verarbeitung dieser Daten basiert auf Verträgen, die ' . ($s ? 'ich' : 'wir') . ' (in Übereinstimmung mit Artikel 28 der DSGVO) mit diesen Anbietern abgeschlossen ' . ($s ? 'habe' : 'haben') . '.'
        ]
    ],

    /* Cookies information */
    'cookies' => [
        'header' => 'Cookies',
        'text' => [
            ($s ? 'Meine' : 'Unsere') . ' Website verwendet so genannte "Cookies". Dabei handelt es sich um kleine Textdateien, die mit Hilfe des Browsers auf Ihrem Endgerät verarbeitet und abgelegt werden. Sie werden von bestimmten Funktionen ' . ($s ? 'meiner' : 'unserer') . ' Webseite zum Zwischenspeichern verschiedenster Informationen verwendet.',
            'Cookies können sowohl direkt von ' . ($s ? 'meiner' : 'unserer') . ' Webseite ("Erstanbieter-Cookies"), als auch durch die Dienste von Auftragsverarbeitern (z.B. beim Senden von E-Mails oder für Webanalyse) gesetzt werden. Beim ersten Aufruf ' . ($s ? 'meiner' : 'unserer') . ' Webseite werden nur technisch notwendige Erstanbieter-Cookies verwendet.',
            'Die meisten Web-Browser bieten Funktionen zur Anzeige und zum Löschen von bereits gesetzten Cookies. Weiters können Sie Ihren Browser auch so konfigurieren, dass keinerlei Cookies gesetzt werden. Bitte beachten Sie aber, dass dadurch ' . ($s ? 'meine' : 'unsere') . ' Webseite nur mehr engeschränkt funktioniert.'
        ],
        'no_cookies' => [
            ($s ? 'Meine' : 'Unsere') . ' Website verwendet keinerlei "Cookies".'
        ],
        'first_party' => [
            'header' => 'Erstanbieter-Cookies',
            'text' => [
                'Hier ist eine komplette Liste aller bei der Benutzung ' . ($s ? 'meiner' : 'unserer') . ' Webseite verwendeten technisch notwendigen **"Erstanbieter-Cookies"**:'
            ],
        ],
        'third_party' => [
            'header' => 'Drittanbieter-Cookies',
            'text' => [
                'Und dies sind die **"Drittanbieter-Cookies"** die bei der Verwendung gewisser Funktionen zur Anwendung kommen:'
            ],
        ],

        'name' => 'Name',
        'origin' => 'Herkunft',

        'purpose' => [
            'title' => 'Zweck',
            'session' => 'Das so genannte "Session"-Cookie erlaubt ' . ($s ? 'meiner' : 'unserer') . ' Webseite das Speichern und Abrufen bestimmter Informationen über Ihren aktuellen Besuch (z.B. ausgewählte Sprache oder Anmeldestatus).',
            'xsrf' => 'Dies ist ein Sicherheits-bezogenes Cookie, um sogenannte "Cross-Site Request Forgery" Attacken zu unterbinden.',
            'hide_alert' => 'Verhindert, dass der Cookie-Hinweis nach dem Ausblenden nochmals angezeigt wird.',
            'analytics' => 'Speichert Ihre Entscheidung bzgl. Web-Analyse im Cookie-Hinweis, der bei Ihrem ersten Besuch angezeigt wird.',
            'maps' => 'Speichert Ihre Entscheidung bzgl. der Verwendung von interaktiven Karten beim Anzeigen einer Karte und verhindert, dass die Webseite Sie erneut fragt.',
            'analytics_third_party' => 'Diese Cookies werden vom Web-Analyse-Tool erstellt, welches ' . ($s ? 'ich' : 'wir') . ' zum verstehen und verbessern des Benutzerverhaltens ' . ($s ? 'nutze' : 'nutzen') . '. (Mehr Informationen hierzu finden Sie weiter unten im Web-Analyse-Abschnitt.)',
            'maps_third_party' => 'Beim Einblenden interaktiver Karten werden verschiedene Cookies vom Dienstanbieter erstellt. (Mehr Informationen hierzu finden Sie weiter unten im Abschnitt für interaktive Karten.)',
        ],

        'written_on' => [
            'title' => 'Erstellt bei',
            'every_visit' => 'Jeder Besuch',
            'hide_alert' => 'Ausblenden des Cookie-Hinweises, der beim ersten Besuch der Webseite erscheint',
            'maps' => 'Klick auf "OK" bei der Einverständniserklärung zur Verwendung von interaktiven Karten',
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
        ]

    ],

    /* Information on data logging of infrastructure (e.g. webhosting, analytics, etc.) */
    'data_collection' => [

        'header' => 'Sammlung und Verwendung von Daten',

        // Webserver-Logging
        'webserver' => [
            'header' => 'Webserver',
            'text' => [
                'Beim Besuch einer Webseite sendet Ihr Web-Browser automatisch Information zum Server und der Infrastruktur, auf dem diese betrieben wird. In ' . ($s ? 'meinem' : 'unseren') . ' Fall werden diese von ' . $i('webhosting_provider') . ' (siehe Liste von Datenverarbeitern weiter unten). Dabei können folgende Arten von Daten übertragen werden:',
                [
                    'IP (Internet Protocol) Adresse Ihres Endgerätes,',
                    'Zeit, Datum und Dauer Ihres Besuchs,',
                    'besuchte Seiten,',
                    'Typ, Version und Sprache Ihres Web-Browsers und Betriebssystems.'
                ],
                'Diese Daten werden automatisch übertragen und geloggt, um die Erreichbarkeit, Funktionalität, Sicherheit und Stabilität ' . ($s ? 'meiner' : 'unserer') . ' Webseite zu gewährleisten. Die Daten bleiben gespeichert bis die Logdatei gelöscht wird. Die gesammelten Daten sind technisch notwendig für den Betrieb und die Wartung dieser Webseite und werden in keiner Weise verwendet, um Sie als Person zu identifizieren oder zu tracken. Die Daten können sowohl in der Europäischen Union als auch in den Vereinigten Staaten gespeichert werden. Alle Datenverarbeitungen werden auf Grundlage des "Privacy Shield" Abkommens zwischen der EU und den USA und eines Vertrags zwischen ' . ($s ? 'mir' : 'uns') . ' und ' . $i('webserver_provider_name') . '. Sammlung und Verarbeitung dieser Daten erfolgt in Übereinstimmung mit Artikel 6 (1) der DSGVO.'
            ],
        ],

        // Analytics
        'analytics' => [
            'header' => 'Web-Analyse',
            'text' => [
                'Wenn Sie Web-Analyse im Cookie-Hinweis akzeptieren, werden Log Daten auch an einen Dienst von ' . $i('analytics_provider') . ' gesendet. Dieser Dienst sammelt Daten über die Verwendung der Webseite für statistische Zwecke und um die Benutzerführung ' . ($s ? 'meiner' : 'unserer') . ' Seite zu verbessern. Sämtliche gesammelten Daten werden pseudonymisiert (durch Löschen eines Teils Ihrer IP Adresse) und können sowohl in der Europäischen Union als auch in den Vereinigten Staaten gespeichert werden. Alle Datenverarbeitungen werden auf Grundlage des "Privacy Shield" Abkommens zwischen der EU und den USA und eines Vertrags zwischen ' . ($s ? 'mir' : 'uns') . ' und ' . $i('analytics_provider_name') . '. Die Daten bleiben für die Dauer von 26 Monaten gespeichert.',
                'Bitte beachten Sie, dass keinerlei Daten zur Webanalyse transferiert werden, sofern Sie nicht explizit im Cookie-Hinweis zustimmen, der bei Ihrem ersten Besuch der Seite erscheint ("OPT-IN"). Die Datenverarbeitung geschieht somit in Übereinstimmung mit Artikel 6 (1a) der DSGVO.'
            ]
        ],

        // Maps
        'maps' => [
            'header' => 'Interaktive Karten',
            'text' => [
                ($s ? 'Meine' : 'Unsere') . ' Webseite bietet auf Anforderung die Funktionalität zur Darstellung interaktiver Karten (z.B. zur Erstellung von Anfahrtsplänen). Dabei wird ein Dienst von ' . $i('maps_provider') . ' verwendet.',
                'Beim (ersten) Einblenden einer interaktiven Karte erscheint ein entsprechender Datenschutz-Hinweis. Wenn Sie diesem zustimmen, wird die Karte eingeblendet. Dabei werden auch persönliche Daten (wie Nutzungs- und Standort-Daten) an den Dritt-Anbieter ' . $i('maps_provider') . ' gesendet sowie diverse Cookies gesetzt.',
                'Bitte beachten Sie, dass keinerlei Daten transferiert werden, sofern Sie nicht explizit im Datenschutz-Hinweis zustimmen, der bei Ihrem ersten Aufruf einer interaktiven Karte erscheint ("OPT-IN"). Die Datenverarbeitung geschieht somit in Übereinstimmung mit Artikel 6 (1a) der DSGVO.'
            ]
        ],

        // Sending of emails (e.g. contact forms)
        'send_emails' => [
            'header' => 'E-Mail Versand',
            'text' => [
                ($s ? 'Meine' : 'Unsere') . ' Webseite verfügt über Formulare, die verwendet werden können, um ' . ($s ? 'mir' : 'uns') . ' eine E-Mail zu senden. Im Formular können Sie Ihren Namen, Ihre E-Mail-Adresse sowie andere Daten eingeben. Beim Absenden der Anfrage werden diese über den Anbieter ' . $i('emails_provider') . ' (siehe Liste von Datenverarbeitern weiter unten) in ' . ($s ? 'meine' : 'unsere') . ' Mailbox zugestellt.'
            ]
        ]

    ],

    /* Info regarding outgoing links */
    'outgoing_links' => [
        'header' => 'Ausgehende Links',
        'text' => [($s ? 'Meine' : 'Unsere') . ' Webseite beinhaltet Links zu anderen Webseiten, die nicht von ' . ($s ? 'mir' : 'uns') . ' betrieben wird. Wenn Sie auf einen solchen ausgehenden Link klicken, werden Sie zu dieser Webseite weitergeleitet. ' . ($s ? 'Ich habe' : 'Wir haben') . ' keinerlei Einfluss auf diese Webseiten und ihren Datenschutz und übernehme' . ($s ? '' : 'n') . ' deshalb keine Verantwortung in Bezug auf deren Inhalt und Verhalten. Weitere Details finden Sie in den Datenschutzerklärungen dieser Seiten.'],
    ],

    /* Listing of all service providers/ sub-processors and their purpose and processeddata categories */
    'service_providers' => [
        'header' => 'Liste von Datenverarbeitern',
        'purpose' => [
            'title' => 'Zweck',
            'webserver' => 'Hosten der Webseite und benötigter Dienste',
            'analytics' => 'Verarbeitung der Daten zur Web-Analyse',
            'maps' => 'Darstellung interaktiver Karten',
            'email' => 'Senden von E-Mails (z.B. via Kontaktformulare)',
            'subscription' => 'Verwalten von Abonnements',
            'payment' => 'Zahlungsabwicklung',
        ],
        'data_categories' => [
            'header' => 'Daten-Kategorien',
            'inventory_data' => 'Stammdaten',
            'usage_data' => 'Nutzungs-Daten',
            'geo_data' => 'Standort-Daten',
            'usage_statistics' => 'Nutzungs-Statistiken',
            'contract_data' => 'Vertragsdaten',
            'payment_data' => 'Zahlungsdaten'
        ],
    ],

];
