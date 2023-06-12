<?php
return [
    'EMAIL_OTP_LOGIN' => false,
    'MOBILE_OTP_LOGIN' => true,
    'USER_PASSWORD_LOGIN' => false,
    'APP_NAME' => env('APP_NAME', ''),
    'CC_EMAILS' => [],
    'PER_PAGE' => 3,
    'SUPER_ADMIN' => 'Super Admin',
    // FILE UPLOAD PATH
    'USER_DOC_PATH' => 'public' . DIRECTORY_SEPARATOR,
    'USER_DOC_URL' => 'storage' . DIRECTORY_SEPARATOR,
    // APP VERSION
    'APP_VERSION' => env('APP_VERSION', '1.0'),
    'LOGO_FILE_NAME' => 'logo-dark.png',
    'DEVELOPED_BY' => '',
];
