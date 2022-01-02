<?php

return [
	/* General text */
	'privacy_policy' => 'Privacy Policy',
	'processor_list' => 'List of Processors',
	'address' => 'Address',

	/* General intro text */
	'intro_content' => [
		'p1' =>
			'The privacy and protection of your data is of great concern to ' .
			($s ? 'me' : 'us') .
			'. This document describes any collection, usage and disclosure of personal information when using various services of ' .
			($s ? 'my' : 'our') .
			' website. It also provides information about your rights and how they are protected.',
		'p2' =>
			($s ? 'My' : 'Our') .
			' website collects and processes your data exclusively based on existing laws - e.g. the European General Data Protection Regulation ("GDPR"). The collected personal information is used to provide and improve ' .
			($s ? 'my' : 'our') .
			' services. ' .
			($s ? 'I' : 'We') .
			' will never use or share any of your personal information except as described in this policy. By choosing to use ' .
			($s ? 'my' : 'our') .
			' services, you agree to the collection and use of information in accordance with this privacy policy.',
	],

	/* Listing of GDPR rights */
	'gdpr_rights' => [
		'title' => 'Your Data Protection Rights',
		'content' => [
			'p1' =>
				($s ? 'I' : 'We') .
				' handle your data in accordance with the European General Data Protection Regulation ("GDPR"), which gives people extensive rights with respect to how their personal data is collected and processed. These rights include:',
			'ul1' => [
				'li1' =>
					'**Right of access** to the personal information we gather about you, and how we the share, store and process that information.',
				'li2' =>
					'**Right to correction** of your personal information.',
				'li3' =>
					'**Right to erasure** of your personal data from our servers.',
				'li4' =>
					'**Right to complain** with a supervisory authority about our handling of your data.',
				'li5' =>
					'**Right to restrict processing** of your personal information.',
				'li6' =>
					'**Right to object** to how your personal information is processed.',
				'li7' =>
					'**Right to portability** of your personal information over to you.',
			],
		],
	],

	/* Data controller */
	'data_controller' => [
		'title' => 'Data Controller',
		'content' => [
			'p1' =>
				'If you have any questions or inquiries regarding the processing of your data, please contact:',
		],
	],

	/* General data security text */
	'security' => [
		'title' => 'Data Security',
		'content' => [
			'p1' =>
				($s ? 'My' : 'Our') .
				' website takes many technical measures to provide a secure transmission and storage of any collected data and to guard it against manipulation or unauthorized access. Any communication between your device, this website and any further backend services will be encrypted via SSL. You can verify the SSL-Encryption in your browser via the lock symbol in the address bar.',
			'p2' =>
				'All data will be stored on servers of ' .
				($s ? 'my' : 'our') .
				' our data processors. Collection and usage of this data is based on contracts with those processors according to Article 28 of the GDPR.',
		],
	],

	/* Cookies information */
	'cookies' => [
		'title' => 'Cookies',
		'content' => [
			'p1' =>
				($s ? 'My' : 'Our') .
				' website uses so called "cookies", which are small text files processed and stored on your device by your web browser. They are used to store various types of information to enable certain functionality of ' .
				($s ? 'my' : 'our') .
				' website.',
			'p2' =>
				'Cookies may be set by ' .
				($s ? 'my' : 'our') .
				' website itself ("first-party cookies"), or by third-party websites whose services ' .
				($s ? 'i' : 'we') .
				' use (e.g. sending of emails or web analytics). On an initial visit to ' .
				($s ? 'my' : 'our') .
				' site, only technically mandatory non-third-party cookies are used.',
			'p3' =>
				'Most browsers allow their users to view and delete already set cookies. Furthermore, you can also configure your browser not to accept any cookies at all. But be aware that this will hinder ' .
				($s ? 'my' : 'our') .
				' website from functioning properly.',
		],
		'no_cookies_content' => [
			'p1' =>
				'Websites often use so called "cookies", which are small text files processed and stored on your device by your web browser to provide certain functionality. ' .
				($s ? 'My' : 'Our') .
				' website does not use any cookies.',
		],
		'first_party' => [
			'title' => 'First Party Cookies',
			'content' => [
				'p1' =>
					'Here is a complete overview of all technically mandatory **"first-party-cookies"** set by ' .
					($s ? 'my' : 'our') .
					' website:',
			],
		],
		'third_party' => [
			'title' => 'Third Party Cookies',
			'content' => [
				'p1' =>
					'And these are the **"third-party-cookies"** set by using various parts of ' .
					($s ? 'my' : 'our') .
					' website:',
			],
		],

		'name' => 'Name',
		'origin' => 'Origin',

		'purpose' => [
			'title' => 'Purpose',
			'session' =>
				'The so called "Session" cookie allows ' .
				($s ? 'my' : 'our') .
				' website to store and retrieve information about your current visit (e.g. the selected language or login-state).',
			'xsrf' =>
				'A security-related cookie used to prevent so called "Cross-Site Request Forgery" attacks.',
			'hide_alert' =>
				'Prevents displaying the cookie dialog again after hiding it.',
			'all_choices' =>
				'Stores your choices regarding various cookies displayed in the cookie dialog on your first visit.',
			'analytics_choice' =>
				'Stores your choice regarding the usage of web analytics in the cookie dialog displayed on your first visit.',
			'maps_choice' =>
				'Stores your choice regarding the usage of interactive maps when displaying a map and prevents asking you again.',
			'analytics_third_party' =>
				'These cookies are written by the web analytics tool, which allows ' .
				($s ? 'me' : 'us') .
				' to understand and improve user experience and is used for statistical purposes. (For more info see the [web analytics section](#process-analytics).)',
			'maps_third_party' =>
				'Various cookies are set on displaying interactive maps. (For more info see the [section on interactive maps](#process-maps).)',
		],

		'written_on' => [
			'title' => 'Written on',
			'every_visit' => 'Every visit',
			'hide_alert' =>
				'Hiding the cookie dialog popping up on your first visit.',
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
		],
	],

	/* Information on data processing (e.g. webhosting, analytics, etc.) */
	'data_processing' => [
		'title' => 'Data Collection, Processing and Usage',

		// Webhosting
		'webhosting' => [
			'title' => 'Webhosting',
			'content' => [
				'p1' =>
					'When visiting any website, your browser is automatically transmitting information to the server and infrastructure it is hosted on, to download the website and any additionally required resources (such as e.g. images or fonts). In ' .
					($s ? 'my' : 'our') .
					' case these are provided by ' .
					$i('webhosting_processor') .
					'. The transmitted information can include the following types of data:',
				'ul1' => [
					'li1' => 'your device\'s IP (Internet Protocol) address,',
					'li2' => 'time, date and duration of your visit,',
					'li3' => 'visited pages,',
					'li4' =>
						'type, version and language of your browser and operating system.',
				],
				'p2' =>
					'This data is transmitted and logged automatically to ensure the connectivity and functionality of ' .
					($s ? 'my' : 'our') .
					' website and enables ' .
					($s ? 'me' : 'us') .
					' to evaluate and ensure its security and stability. The data is kept until the log is deleted. The collected data is essential for running and maintaining this website and is in no way used to identify or track you as a person. Data might be stored in the European Union or the United States and will be processed according to the "Privacy Shield" agreement between EU und USA and based on a data processing contract between ' .
					($s ? 'me' : 'us') .
					' and ' .
					$i('webhosting_processor') .
					'. Collection and processing of this data is in accordance with Article 6 (1) of the GDPR.',
			],
		],

		// Analytics
		'analytics' => [
			'title' => 'Web Analytics',
			'content' => [
				'p1' =>
					'If you accept web analytics in the cookie notification, ' .
					($s ? 'my' : 'our') .
					' website will forward log data to the service **' .
					$i('analytics_service') .
					'** provided by ' .
					$i('analytics_processor') .
					'. This service is used to track and report website traffic for statistical purposes and to understand and improve how visitors are using ' .
					($s ? 'my' : 'our') .
					' website. Any collected data will be pseudonymized (by deleting part of your IP address) and might be stored in the European Union or the United States. Any data will be processed according to the "Privacy Shield" agreement between EU und USA and based on a data processing contract between us and ' .
					$i('analytics_processor') .
					'. Data will be stored for the duration 26 months.',
				'p2' =>
					'Please note, that no data will be transferred to ' .
					$i('analytics_service') .
					' at all, if you do not explicitly accept the cookie notification visible on the page on your first visit ("OPT-IN"). Data processing is therefor according to Article 6 (1a) of the GDPR.',
			],
		],

		// Maps
		'maps' => [
			'title' => 'Interactive Maps',
			'content' => [
				'p1' =>
					($s ? 'My' : 'Our') .
					' website provides the functionality of interactive maps on demand (e.g. for calculating routes) using the service **' .
					$i('maps_service') .
					'** provided by ' .
					$i('maps_processor') .
					'.',
				'p2' =>
					'A corresponding data protection notice will be shown on accessing an interactive map for the first time. The map will only be shown, if you accept this notice. As a result personal data (like usage and location) will be sent to ' .
					$i('maps_service') .
					' and needed cookies will be set.',
				'p3' =>
					'Please note that no data will be transferred, if you do not explicitly consent in the data protection notice shown on first access of an interactive map ("OPT-IN"). Data processing is therefor according to Article 6 (1a) of the GDPR.',
			],
		],

		// Sending of emails (e.g. contact forms)
		'send_emails' => [
			'title' => 'E-Mail Submission',
			'content' => [
				'p1' =>
					($s ? 'My' : 'Our') .
					' website includes forms, that can be used to send ' .
					($s ? 'me' : 'us') .
					' an e-mail. The form collects your name, e-mail-address as well other data. When submitting the form, this data will be transmitted via the service **' .
					$i('send_emails_service') .
					'** of ' .
					($s ? 'my' : 'our') .
					' processor ' .
					$i('send_emails_processor') .
					' into ' .
					($s ? 'my' : 'our') .
					' mailbox.',
			],
		],
	],

	/* Info regarding outgoing links */
	'outgoing_links' => [
		'title' => 'Outgoing Links',
		'content' => [
			'p1' =>
				($s ? 'My' : 'Our') .
				' website includes links to other websites, which are not operated by ' .
				($s ? 'me' : 'us') .
				'. When clicking such an outgoing link, you will be redirected there. ' .
				($s ? 'I' : 'We') .
				' have no control over these websites and their privacy policies. Therefor ' .
				($s ? 'i' : 'we') .
				' assume no responsibility regarding their content or behaviour. ' .
				($s ? 'I' : 'We') .
				' recommend you check their privacy policies for details.',
		],
	],

	/* List of data processing purposes */
	'data_purpose' => [
		'title' => 'Purpose',
		'webhosting' => 'Providing website and depending services',
		'analytics' => 'Processing of data for web analysing purposes',
		'maps' => 'Displaying of interactive maps',
		'send_emails' => 'Sending of e-mails (e.g. via contact form)',
		'subscription' => 'Managing subscriptions',
		'payment' => 'Payment processing',
	],

	/* List of data categories */
	'data_category' => [
		'title' => 'Data Categories',
		'inventory_data' => 'Inventory Data',
		'usage_data' => 'Usage Data',
		'geo_data' => 'Geo Data',
		'usage_statistics' => 'Usage Statistics',
		'contract_data' => 'Contract Data',
		'payment_data' => 'Payment Data',
	],
];
