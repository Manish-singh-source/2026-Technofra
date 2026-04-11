<?php

return [
    'db' => [
        'host' => 'srv1131.hstgr.io',
        'port' => 3306,
        'database' => 'u802703949_technofra',
        'username' => 'u802703949_technofra',
        'password' => 'Technofra@501',
    ],

    'mail' => [
        'host' => 'smtp.gmail.com',
        'port' => 587,
        'username' => 'support@technofra.com',
        'password' => 'kcdivqkodwgvyaku',
        'encryption' => 'tls',
        'from_email' => 'support@technofra.com',
        'from_name' => 'Technofra',
        'admin_email' => 'support@technofra.com',
        'admin_name' => 'Technofra Admin',
    ],

    'google_calendar' => [
        'enabled' => true,
        'client_id' => '526010543199-2fe21es0nt9q2a4vcr9om2nq8l5ufc61.apps.googleusercontent.com',
        'client_secret' => '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',
        'refresh_token' => '1//04edVcmvmESvECgYIARAAGAQSNwF-L9IrtWK74ageMWSnf86rWYns9VrW9VxVw_dU7U53neCyolUTmc6vLcIZICybEvH9-p1RAds',
        'calendar_id' => 'primary',
        'timezone' => 'Asia/Kolkata',
        'meeting_duration_minutes' => 60,
    ],
];
