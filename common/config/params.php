<?php
return [
	'adminEmail' => 'it@uk-proekt.ru',
	'mainEmail' => 'main@uk-proekt.ru',
	'phoneWork' => '+7 (843) 251-18-19',
	'phoneMobile' => '',
	'addressCity' => '420111, Республика Татарстан, г.&nbsp;Казань, ',
	'addressStreet' => 'ул.&nbsp;Хади Такташа, д.&nbsp;41, пом.&nbsp;1023, комната&nbsp;12',
	'supportEmail' => 'support@uk-proekt.ru',
	'senderEmail' => 'noreply@example.com',
	'senderName' => 'Example.com mailer',
	'user.passwordResetTokenExpire' => 3600,
	'user.passwordMinLength' => 8,
//	'cacheLoginTime' => 3600 * 24 * 30,		//кэш логина на месяц
	'cacheLoginTime' => 3600 * 24,			//кэш логина на сутки
	'messages' => [
		'throwNotFound' => 'Запрашиваемая страница отсутствует.',
		'dataDel' => 'Вы действительно хотите удалить данные?',
	],
	'dir' => [
		'files' => 'ukpfiles/',
		'docs' => 'docs/',
	],
	'load_files' => 'png, jpg, pdf',
	'max_load_files' => 5,
	'checkPassword' => CHECK_FROM_UNAME,
//	'checkPassword' => CHECK_FROM_SMS,
//	'checkPassword' => CHECK_FROM_EMAIL,
];
