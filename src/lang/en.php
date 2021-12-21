<?php

return [

    /* General intro text */
    'intro' => '
        <p>
            The privacy and protection of your data is of great concern to '.($s ? 'me' : 'us').'. This document describes any collection, usage and disclosure of personal information when using various services of '.($s ? 'my' : 'our').' website. It also provides information about your rights and how they are protected.
        </p>
        <p>
            '.($s ? 'My' : 'Our').' website collect and process your data exclusively based on existing laws - e.g. the European General Data Protection Regulation (&quot;GDPR&quot;). The collected personal information is used to provide and improve '.($s ? 'my' : 'our').' services. '.($s ? 'I' : 'We').' will never use or share any of your personal information except as described in this policy. By choosing to use '.($s ? 'my' : 'our').' services, you agree to the collection and use of information in accordance with this privacy policy.
        </p>
    ',

    /* Listing of GDPR rights */
    'gdpr_rights' => [
        'header' => 'Your Data Protection Rights',
        'text' => '
            <p>
                '.($s ? 'I' : 'We').' handle your data in accordance with the European General Data Protection Regulation (&quot;GDPR&quot;), which gives people extensive rights with respect to how their personal data is collected and processed. These rights include:
            </p>
            <ul>
                <li><strong>Right of access</strong> to the personal information we gather about you, and how we the share, store and process that information.</li>
                <li><strong>Right to correction</strong> of your personal information.</li>
                <li><strong>Right to erasure</strong> of your personal data from our servers.</li>
                <li><strong>Right to complain</strong> with a supervisory authority about our handling of your data.</li>
                <li><strong>Right to restrict processing</strong> of your personal information.</li>
                <li><strong>Right to object</strong> to how your personal information is processed.</li>
                <li><strong>Right to portability</strong> of your personal information over to you.</li>
            </ul>
            <p>
                If you have questions or requests regarding these rights, feel free to contact '.($s ? 'me' : 'us').' at <a href="mailto:' . $i('privacy_email') . '">' . $i('privacy_email') . '</a>.
            </p>
        ',
    ],

    /* General data security text */
    'security' => [
        'header' => 'Data Security',
        'text' => '
            <p>
                '.($s ? 'I' : 'We').' take many technical and organizational measures to provide a secure transmission and storage of any collected data and to guard it against manipulation or unauthorized access. Any communication between your device, this website and any further backend services will be encrypted via SSL. You can verify the SSL-Encryption in your browser via the lock symbol in the address bar.
            </p>
            <p>
                All data will be stored on servers of '.($s ? 'my' : 'our').' service providers. Collection and usage of this data is based on contracts with those service providers according to Article 28 of the GDPR.
            </p>
        ',
    ],

    /* Cookies information */
    'cookies' => [
        'header' => 'Cookies',
        'text' => '
            <p>
                '.($s ? 'My' : 'Our').' website uses so called &quot;cookies&quot;, which are small text files processed and stored on your device by your web browser. They are used to store various types of information to enable certain functionality of '.($s ? 'my' : 'our').' website.
            </p>
            <p>
                Cookies may be set by '.($s ? 'my' : 'our').' website itself (&quot;first-party cookies&quot;), or by third-party websites whose services '.($s ? 'i' : 'we').' use (e.g. sending of emails or web analytics). On an initial visit to '.($s ? 'my' : 'our').' site, only technically mandatory non-third-party cookies are used.
            </p>
            <p>
                Most browsers allow their users to view and delete already set cookies. Furthermore, you can also configure your browser not to accept any cookies at all. But be aware that this will hinder '.($s ? 'my' : 'our').' website from functioning properly.
            </p>
        ',
        'no_cookies' => '
            <p>
                ' . ($s ? 'My' : 'Our') . ' website does not use any cookies.
            </p>
        ',
        'first_party' => [
            'header' => 'First Party Cookies',
            'text' => '
                <p>
                    Here is a complete overview of all technically mandatory <strong>&quot;first-party-cookies&quot;</strong> set by '.($s ? 'my' : 'our').' website:
                </p>
            ',
        ],
        'third_party' => [
            'header' => 'Third Party Cookies',
            'text' => '
                <p>
                    And these are the <strong>&quot;third-party-cookies&quot;</strong> set by using various parts of '.($s ? 'my' : 'our').' website:
                </p>
            ',
        ],

        'name' => 'Name',
        'origin' => 'Origin',

        'purpose' => [
            'title' => 'Purpose',
            'session' => 'The so called "Session" cookie allows '.($s ? 'me' : 'us').' to store and retrieve information about your current visit (e.g. the selected language or login-state).',
            'xsrf' => 'A security-related cookie used to prevent so called "Cross-Site Request Forgery" attacks.',
            'hide_alert' => 'Prevents displaying the cookie dialog again after hiding it.',
            'analytics' => 'Stores your choice regarding the usage of web analytics in the cookie dialog displayed on your first visit.',
            'maps' => 'Stores your choice regarding the usage of interactive maps when displaying a map and prevents asking you again.',
            'analytics_third_party' => 'These cookies are written by the web analytics provider, which allows '.($s ? 'me' : 'us').' to understand and improve user experience and is used for statistical purposes. (For more info see the web analytics section below.)',
            'maps_third_party' => 'Various cookies are set by the provider on displaying interactive maps. (For more info see the section on interactive maps below.)',
        ],

        'written_on' => [
            'title' => 'Written on',
            'every_visit' => 'Every visit',
            'hide_alert' => 'Hiding the cookie dialog popping up on your first visit.',
            'maps' => 'Acknowledging the usage of Google Maps',
            'accept_cookies' => 'Accepting the corresponding cookies',
        ],

        'duration' => [
            'title' => 'Duration',
            'end_of_session' => 'End of session',
            '1_year' => '1 year',
            '2_years' => '2 years',
            '24_hours' => '24 hours',
            '1_minute' => '1 minute',
            'various' => 'various',
        ]

    ],

    /* Information on data logging of infrastructure (e.g. webhosting, analytics, etc.) */
    'data_collection' => [

        'header' => 'Data Collection and Usage',

        // Webserver-Logging
        'webserver' => [
            'webserver_header' => 'Webserver',
            'webserver_text' => '
                <p>
                    When visiting any website, your browser is automatically transmitting information to the server and infrastructure it is hosted on. In '.($s ? 'my' : 'our').' case these are provided by <a href="#service-providers-' . $i('webserver_provider_key') . '">' . $i('webserver_provider_name') . '</a> (see list of subprocessors below). The transmitted information can include the following types of data:
                </p>
                <ul>
                    <li>your device’s IP (Internet Protocol) address,</li>
                    <li>time, date and duration of your visit,</li>
                    <li>visited pages,</li>
                    <li>type, version and language of your browser and operating system.</li>
                </ul>
                <p>
                    This data is transmitted and logged automatically to ensure the connectivity and functionality of '.($s ? 'my' : 'our').' website and enables '.($s ? 'me' : 'us').' to evaluate and ensure its security and stability. The data is kept until the log is deleted. The collected data is essential for running and maintaining this website and is in no way used to identify or track you as a person. Data might be stored in the European Union or the United States and will be processed according to the &quot;Privacy Shield&quot; agreement between EU und USA and based on a data processing contract between '.($s ? 'me' : 'us').' and <a href="#service-providers-' . $i('webserver_provider_key') . '">' . $i('webserver_provider_name') . '</a>. Collection and processing of this data is in accordance with Article 6 (1) of the GDPR.
                </p>
            ',
        ],

        // Analytics
        'analytics' => [
            'header' => 'Web Analytics',
            'text' => '
                <p>
                    If you accept web analytics in the cookie notification, '.($s ? 'my' : 'our').' website will forward log data to a service provided by <a href="#service-providers-' . $i('analytics_provider_key') . '">' . $i('analytics_provider_name') . '</a>. This service is used to track and report website traffic for statistical purposes and to understand and improve how visitors are using '.($s ? 'my' : 'our').' website. Any collected data will be pseudonymized (by deleting part of your IP address) and might be stored in the European Union or the United States. Any data will be processed according to the &quot;Privacy Shield&quot; agreement between EU und USA and based on a data processing contract between us and <a href="#service-providers-' . $i('analytics_provider_key') . '">' . $i('analytics_provider_name') . '</a>. Data will be stored for the duration 26 months.
                </p>
                <p>
                    Please note, that no data will be transferred to the service provider at all, if you do not explicitly accept the cookie notification visible on the page on your first visit (&quot;OPT-IN&quot;). Data processing is therefor according to Article 6 (1a) of the GDPR.
                </p>
            ',
        ],

        // Maps
        'maps' => [
            'header' => 'Interactive Maps',
            'text' => '
                <p>
                    ' . ($s ? 'My' : 'Our') . ' website provides the functionality of interactive maps on demand (e.g. for calculating routes). This uses a service provided by <a href="#service-providers-' . $i('maps_provider_key') . '">' . $i('maps_provider_name') . '</a>.
                </p>
                <p>
                    A corresponding data protection notice will be shown on accessing an interactive map for the first time. The map will only be shown, if you accept this notice. As a result personal data (like usage and location) will be sent to the service provider <a href="#service-providers-' . $i('maps_provider_key') . '">' . $i('maps_provider_name') . '</a> and needed cookies will be set.
                </p>
                <p>
                    Please note that no data will be transferred, if you do not explicitly consent in the data protection notice shown on first access of an interactive map (&quot;OPT-IN&quot;). Data processing is therefor according to Article 6 (1a) of the GDPR.
                </p>
            ',
        ],

        // Sending of emails (e.g. contact forms)
        'send_emails' => [
            'header' => 'E-Mail Submission',
            'text' => '
                <p>
                    '.($s ? 'My' : 'Our').' website includes forms, that can be used to send '.($s ? 'me' : 'us').' an e-mail. The form collects your name, e-mail-address as well other data. When submitting the contact-request, this data will be transmitted via '.($s ? 'my' : 'our').' service provider <a href="#service-providers-' . $i('contact_form_provider_key') . '">' . $i('contact_form_provider_name') . '</a> (see list of subprocessors below for details) into '.($s ? 'my' : 'our').' mailbox.
                </p>
            ',
        ]

    ],

    /* Info regarding outgoing links */
    'outgoing_links' => [
        'header' => 'Outgoing Links',
        'text' => '
            <p>
                '.($s ? 'My' : 'Our').' website includes links to other websites, which are not operated by '.($s ? 'me' : 'us').'. When clicking such an outgoing link, you will be redirected there. '.($s ? 'I' : 'We').' have no control over these websites and their privacy policies. Therefor '.($s ? 'i' : 'we').' assume no responsibility regarding their content or behaviour. '.($s ? 'I' : 'We').' recommend you check their privacy policies for details.
            </p>
        ',
    ],

    /* Listing of all service providers/ sub-processors and their purpose and processeddata categories */
    'service_providers' => [
        'header' => 'List of Subprocessors',
        'purpose' => [
            'title' => 'Purpose',
            'webserver' => 'Hosting of website and depending services',
            'analytics' => 'Processing of data for web analyzing pupposes',
            'maps' => 'Displaying of interactive maps',
            'send_emails' => 'Sending of e-mails (e.g. via contact form)',
            'subscription' => 'Managing subscriptions',
            'payment' => 'Payment processing',
        ],
        'data_categories' => [
            'header' => 'Daten-Kategorien',
            'inventory_data' => 'Inventory Data',
            'usage_data' => 'Usage Data',
            'geo_data' => 'Geo Data',
            'usage_statistics' => 'Usage Statistics',
            'contract_data' => 'Contract Data',
            'payment_data' => 'Payment Data'
        ],
    ],

];
