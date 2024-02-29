<?php
return [
    'EMAIL_OTP_LOGIN' => true,
    'MOBILE_OTP_LOGIN' => false,
    'USER_PASSWORD_LOGIN' => false,
    'APP_NAME' => env('APP_NAME', ''),
    //Emails
    'EMAIL'=>[
        'LOCAL' => ['TO'=>['kajal.baldha@tiez.nl'],'CC'=>[]],
        'PRODUCTION'=>['TO'=>['info@zomoamerica.com'],'CC'=>[]],
    ],

    'PER_PAGE' => 10,
    'PER_NEWS_PAGE' => 4,
    'PER_FLAVORS_PAGE' => 12,

    'SUPER_ADMIN' => 'Super Admin',
    // FILE UPLOAD PATH
    'USER_DOC_PATH' => 'public' . DIRECTORY_SEPARATOR . "profile" . DIRECTORY_SEPARATOR,

    'USER_DOC_URL' => 'storage' . DIRECTORY_SEPARATOR . "profile" . DIRECTORY_SEPARATOR,
    // APP VERSION
    'APP_VERSION' => env('APP_VERSION', '1.0'),
    'LOGO_FILE_NAME' => 'logo.webp',
    'DEVELOPED_BY' => '',
    'USER_LOCKED_MINUTES' => 2,
    'ADRESS' => '138 Michigan Avenue, Paterson NJ 07503',
    'HOURS' => 'Mon-Fri 11am to 6pm',
    'PHONE' => '+1 201-778-0188',
    'EMAIL1' => 'info@zomoamerica.com',
    'COPYRIGHT' => '© '.now()->year.' Zomo. All rights reserved. Zomo is a trademark of Flavors of Americas',
    'FOOTER_WARNING' => 'This product contains nicotine. Nicotine is an addictive chemical.',
    'FOOTER_TITLE' => 'Corporate',
    'FOOTER_ADD' => '138 Michigan Avenue, Paterson NJ 07503',
    'FOOTER_TITLE1' => 'Sales',
    'FOOTER_TELEPHONE' => '+1 201-778-0188',
    'FOOTER_GMAIL' => 'info@zomoamerica.com',
    //NEWS IMAGE
    'NEWS_DOC_PATH' =>'public'.DIRECTORY_SEPARATOR."news",
    'NEWS_DOC_URL' =>'storage'.DIRECTORY_SEPARATOR."news",
    'FLAVOR_URL' => 'public'.DIRECTORY_SEPARATOR.'flavors',

];
