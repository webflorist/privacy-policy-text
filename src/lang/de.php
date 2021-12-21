<?php

return [

    /* General intro text */
    'intro' => '
        <p>
            Der Schutz Ihrer persönlichen Daten ist ' . ($s ? 'mir' : 'uns') . ' ein besonderes Anliegen. In diesem Dokument informiere' . ($s ? ' ich' : 'n wir') . ' Sie über die Erfassung, Verarbeitung und Weitergabe persönlicher Informationen im Rahmen der verschiedenen Funktionen ' . ($s ? 'meiner' : 'unserer') . ' Webseite. Es beinhaltet auch Informationen über Ihre Rechte und wie sie geschützt sind.
        </p>
        <p>
            ' . ($s ? 'Meine' : 'Unsere') . ' Webseite verarbeitet Ihre Daten ausschließlich auf Grundlage der gesetzlichen Bestimmungen - z.B. der Europäischen Datenschutzgrundverordnung (&quot;DSGVO&quot;). Alle gesammelten persönlichen Informationen dienen der Erbringung und Verbesserung ' . ($s ? 'meiner' : 'unserer') . ' Dienstleistungen. ' . ($s ? 'Ich werde' : 'Wir werden') . ' Ihre persönlichen Daten niemals anderweitig nutzen oder teilen, als als in dieser Erklärung beschrieben. Wenn Sie ' . ($s ? 'meine' : 'unsere') . ' Dienstleistungen nutzen, stimmen Sie der Verarbeitung von Daten im Rahmen dieser Datenschutzerklärung zu.
        </p>
    ',

    /* Listing of GDPR rights */
    'gdpr_rights' => [
        'header' => 'Ihre Datenschutzrechte',
        'text' => '
            <p>
                ' . ($s ? 'Ich' : 'Wir') . ' behandeln Ihre Daten in Übereinstimmung mit der ' . ($s ? 'Ich' : 'Wir') . ' Europäischen Datenschutzgrundverordnung (&quot;DSGVO&quot;). Diese gibt Privatpersonen weitgehende Rechte über die Art und Weise, wie ihre persönlichen Daten gesammelt und verarbeitet werden. Diese Rechte beinhalten:
            </p>
            <ul>
                <li><strong>Recht auf Auskunft</strong> über die gesammelten persönlichen Informationen und wie diese gespeichert, verarbeitet oder geteilt werden.</li>
                <li><strong>Recht auf Berichtigung</strong> Ihrer persönlichen Informationen.</li>
                <li><strong>Recht auf Löschen</strong> Ihrer persönlichen Informationen.</li>
                <li><strong>Recht auf Beschwerde</strong> bei einer Aufsichtsbehörde.</li>
                <li><strong>Recht auf Einschränkung</strong> der Verarbeitung Ihrer persönlichen Informationen.</li>
                <li><strong>Recht auf Widerruf</strong> von Zustimmungen über die Verarbeitung Ihrer Daten.</li>
                <li><strong>Recht auf Übertragung</strong> Ihrer persönlichen Informationen an Sie.</li>
            </ul>
            <p>
                Sie können ' . ($s ? 'mich' : 'uns') . ' gerne unter <a href="mailto:' . $i('privacy_email') . '">' . $i('privacy_email') . '</a> kontaktieren, wenn Sie Fragen oder Wünsche in Bezug auf diese Rechte haben.
            </p>
        ',
    ],

    /* General data security text */
    'security' => [
        'header' => 'Datensicherheit',
        'text' => '
            <p>
                ' . ($s ? 'Ich nutze' : 'Wir nutzen') . ' viele technische und organisatorische Maßnahmen für die sichere Übertragung und Speicherung aller gesammelten Daten und um sie gegen Manipulation oder unbefugten Zugriff zu schützen. Jeglicher Datentransfer zwischen Ihrem Endgerät, dieser Webseite und weiterer Dienste findet (SSL-)verschlüsselt statt. Eine verschlüsselte Verbindung erkennen Sie am Schloss-Symbol in Ihrer Adresszeile Ihres Browsers.
            </p>
            <p>
                Sämtliche Daten werden auf Servern ' . ($s ? 'meiner' : 'unserer') . ' Auftragsverarbeiter gespeichert. Die Sammlung und Verarbeitung dieser Daten basiert auf Verträgen, die ' . ($s ? 'ich' : 'wir') . ' (in Übereinstimmung mit Artikel 28 der DSGVO) mit diesen Anbietern abgeschlossen haben.
            </p>
        ',
    ],

    /* Cookies information */
    'cookies' => [
        'header' => 'Cookies',
        'text' => '
            <p>
                ' . ($s ? 'Meine' : 'Unsere') . ' Website verwendet so genannte "Cookies". Dabei handelt es sich um kleine Textdateien, die mit Hilfe des Browsers auf Ihrem Endgerät verarbeitet und abgelegt werden. Sie werden von bestimmten Funktionen ' . ($s ? 'meiner' : 'unserer') . ' Webseite zum Zwischenspeichern verschiedenster Informationen verwendet.
            </p>
            <p>
                Cookies können sowohl direkt von ' . ($s ? 'meiner' : 'unserer') . ' Webseite ("Erstanbieter-Cookies"), als auch durch die Dienste von Auftragsverarbeitern (z.B. beim Senden von E-Mails oder für Webanalyse) gesetzt werden. Beim ersten Aufruf ' . ($s ? 'meiner' : 'unserer') . ' Webseite werden nur technisch notwendige Erstanbieter-Cookies verwendet.
            </p>
            <p>
                Die meisten Web-Browser bieten Funktionen zur Anzeige und zum Löschen von bereits gesetzten Cookies. Weiters können Sie Ihren Browser auch so konfigurieren, dass keinerlei Cookies gesetzt werden. Bitte beachten Sie aber, dass dadurch ' . ($s ? 'meine' : 'unsere') . ' Webseite nur mehr engeschränkt funktioniert.
            </p>
        ',
        'no_cookies' => '
            <p>
                ' . ($s ? 'Meine' : 'Unsere') . ' Website verwendet keinerlei "Cookies".
            </p>
        ',
        'first_party' => [
            'header' => 'Erstanbieter-Cookies',
            'text' => '
                <p>
                    Hier ist eine komplette Liste aller bei der Benutzung ' . ($s ? 'meiner' : 'unserer') . ' Webseite verwendeten technisch notwendigen <strong>&quot;Erstanbieter-Cookies&quot;</strong>:
                </p>
            ',
        ],
        'third_party' => [
            'header' => 'Drittanbieter-Cookies',
            'text' => '
                <p>
                Und dies sind die <strong>&quot;Drittanbieter-Cookies&quot;</strong> die bei der Verwendung gewisser Funktionen zur Anwendung kommen:
                </p>
            ',
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
            'analytics_third_party' => 'Diese Cookies werden vom Web-Analyse-Tool "Google Analytics" erstellt, welches ' . ($s ? 'ich' : 'wir') . ' zum verstehen und verbessern des Benutzerverhaltens ' . ($s ? 'nutze' : 'nutzen') . '. (Mehr Informationen hierzu finden Sie weiter unten im Web-Analyse-Abschnitt.)',
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
            'webserver_header' => 'Webserver',
            'webserver_text' => '
                <p>
                    Beim Besuch einer Webseite sendet Ihr Web-Browser automatisch Information zum Server und der Infrastruktur, auf dem diese betrieben wird. In ' . ($s ? 'meinem' : 'unseren') . ' Fall werden diese von <a href="#service-providers-' . $i('webhosting_provider_key') . '">' . $i('webhosting_provider_name') . '</a> (siehe Liste von Datenverarbeitern weiter unten). Dabei können folgende Arten von Daten übertragen werden:
                </p>
                <ul>
                    <li>IP (Internet Protocol) Adresse Ihres Endgerätes,</li>
                    <li>Zeit, Datum und Dauer Ihres Besuchs,</li>
                    <li>besuchte Seiten,</li>
                    <li>Typ, Version und Sprache Ihres Web-Browsers und Betriebssystems.</li>
                </ul>
                <p>
                    Diese Daten werden automatisch übertragen und geloggt, um die Erreichbarkeit, Funktionalität, Sicherheit und Stabilität ' . ($s ? 'meiner' : 'unserer') . ' Webseite zu gewährleisten. Die Daten bleiben gespeichert bis die Logdatei gelöscht wird. Die gesammelten Daten sind technisch notwendig für den Betrieb und die Wartung dieser Webseite und werden in keiner Weise verwendet, um Sie als Person zu identifizieren oder zu tracken. Die Daten können sowohl in der Europäischen Union als auch in den Vereinigten Staaten gespeichert werden. Alle Datenverarbeitungen werden auf Grundlage des &quot;Privacy Shield&quot; Abkommens zwischen der EU und den USA und eines Vertrags zwischen ' . ($s ? 'mir' : 'uns') . ' und ' . $i('webserver_provider_name') . '. Sammlung und Verarbeitung dieser Daten erfolgt in Übereinstimmung mit Artikel 6 (1) der DSGVO.
                </p>
            ',
        ],

        // Analytics
        'analytics' => [
            'header' => 'Web-Analyse',
            'text' => '
                <p>
                    Wenn Sie Web-Analyse im Cookie-Hinweis akzeptieren, werden Log Daten auch an einen Dienst von <a href="#service-providers-' . $i('analytics_provider_key') . '">' . $i('analytics_provider_name') . '</a> gesendet. Dieser Dienst sammelt Daten über die Verwendung der Webseite für statistische Zwecke und um die Benutzerführung ' . ($s ? 'meiner' : 'unserer') . ' Seite zu verbessern. Sämtliche gesammelten Daten werden pseudonymisiert (durch Löschen eines Teils Ihrer IP Adresse) und können sowohl in der Europäischen Union als auch in den Vereinigten Staaten gespeichert werden. Alle Datenverarbeitungen werden auf Grundlage des &quot;Privacy Shield&quot; Abkommens zwischen der EU und den USA und eines Vertrags zwischen ' . ($s ? 'mir' : 'uns') . ' und ' . $i('analytics_provider_name') . '. Die Daten bleiben für die Dauer von 26 Monaten gespeichert.
                </p>
                <p>
                    Bitte beachten Sie, dass keinerlei Daten zur Webanalyse transferiert werden, sofern Sie nicht explizit im Cookie-Hinweis zustimmen, der bei Ihrem ersten Besuch der Seite erscheint (&quot;OPT-IN&quot;). Die Datenverarbeitung geschieht somit in Übereinstimmung mit Artikel 6 (1a) der DSGVO.
                </p>
            ',
        ],

        // Maps
        'maps' => [
            'header' => 'Interaktive Karten',
            'text' => '
                <p>
                    ' . ($s ? 'Meine' : 'Unsere') . ' Webseite bietet auf Anforderung die Funktionalität zur Darstellung interaktiver Karten (z.B. zur Erstellung von Anfahrtsplänen). Dabei wird ein Dienst von <a href="#service-providers-' . $i('maps_provider_key') . '">' . $i('maps_provider_name') . '</a> verwendet.
                </p>
                <p>
                    Beim (ersten) Einblenden einer interaktiven Karte erscheint ein entsprechender Datenschutz-Hinweis. Wenn Sie diesem zustimmen, wird die Karte eingeblendet. Dabei werden auch persönliche Daten (wie Nutzungs- und Standort-Daten) an den Dritt-Anbieter <a href="#service-providers-' . $i('maps_provider_key') . '">' . $i('maps_provider_name') . '</a> gesendet sowie diverse Cookies gesetzt.
                </p>
                <p>
                    Bitte beachten Sie, dass keinerlei Daten transferiert werden, sofern Sie nicht explizit im Datenschutz-Hinweis zustimmen, der bei Ihrem ersten Aufruf einer interaktiven Karte erscheint (&quot;OPT-IN&quot;). Die Datenverarbeitung geschieht somit in Übereinstimmung mit Artikel 6 (1a) der DSGVO.
                </p>
            ',
        ],

        // Sending of emails (e.g. contact forms)
        'emails' => [
            'header' => 'E-Mail Versand',
            'text' => '
                <p>
                    ' . ($s ? 'Meine' : 'Unsere') . ' Webseite verfügt über Formulare, die verwendet werden können, um ' . ($s ? 'mir' : 'uns') . ' eine E-Mail zu senden. Im Formular können Sie Ihren Namen, Ihre E-Mail-Adresse sowie andere Daten eingeben. Beim Absenden der Anfrage werden diese über den Anbieter <a href="#service-providers-' . $i('contact_form_provider_key') . '">' . $i('contact_form_provider_name') . '</a> (siehe Liste von Datenverarbeitern weiter unten) in ' . ($s ? 'meine' : 'unsere') . ' Mailbox zugestellt.
                </p>
            ',
        ]

    ],

    /* Info regarding outgoing links */
    'outgoing_links' => [
        'header' => 'Ausgehende Links',
        'text' => '
            <p>
                ' . ($s ? 'Meine' : 'Unsere') . ' Webseite beinhaltet Links zu anderen Webseiten, die nicht von ' . ($s ? 'mir' : 'uns') . ' betrieben wird. Wenn Sie auf einen solchen ausgehenden Link klicken, werden Sie zu dieser Webseite weitergeleitet. ' . ($s ? 'Ich habe' : 'Wir haben') . ' keinerlei Einfluss auf diese Webseiten und ihren Datenschutz und übernehme' . ($s ? '' : 'n') . ' deshalb keine Verantwortung in Bezug auf deren Inhalt und Verhalten. Weitere Details finden Sie in den Datenschutzerklärungen dieser Seiten.
            </p>
        ',
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
