<?php
return [
    'EMAIL_OTP_LOGIN' => true,
    'MOBILE_OTP_LOGIN' => false,
    'USER_PASSWORD_LOGIN' => false,
    'APP_NAME' => env('APP_NAME', ''),
    //Emails
    'EMAIL' => [
        'LOCAL' => ['TO' => ['recipient@example.com'], 'CC' => []],
        'PRODUCTION' => ['TO' => ['enquiry@grasi.in'], 'CC' => ['media@buzzmakers.in', 'social@buzzmakers.in', 'seobuzzmakers@gmail.com']],
    ],
    'PER_PAGE' => 10,
    'SUPER_ADMIN' => 'Super Admin',
    // FILE UPLOAD PATH
    'USER_DOC_PATH' => 'public' . DIRECTORY_SEPARATOR . "profile" . DIRECTORY_SEPARATOR,
    'USER_DOC_URL' => 'storage' . DIRECTORY_SEPARATOR . "profile" . DIRECTORY_SEPARATOR,
    // APP VERSION
    'APP_VERSION' => env('APP_VERSION', '1.0'),
    'LOGO_FILE_NAME' => 'logo-dark.png',
    'DEVELOPED_BY' => '',
    'USER_LOCKED_MINUTES' => 2,


];
