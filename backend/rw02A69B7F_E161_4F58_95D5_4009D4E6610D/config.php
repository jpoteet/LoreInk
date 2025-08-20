<?php

return [
    'email' => [
        'enabled' => '1' === '1',
        'to' => 'john.doe@example.com',
        'subject' => 'New Form Submission',
        'template' => 'default',
        'from_email' => 'john.doe@example.com',
        'from_name' => 'John Doe',
        'smtp_host' => 'smtp.example.com',
        'smtp_port' => '587',
        'smtp_username' => '',
        'smtp_password' => '',
        'smtp_encryption' => 'none', // tls, ssl, or none
        'smtp_auth' => '' !== '' && '' !== '',
        'smtp_timeout' => 30,
        'charset' => 'UTF-8',

        // SSL Configuration (for troubleshooting hosting issues)
        'smtp_verify_peer' =>  'true' === 'true', // Set to false if certificate issues
        'smtp_verify_peer_name' => 'true' === 'true', // Set to false if hostname mismatch
        'smtp_allow_self_signed' => 'false' === 'true', // Allow self-signed certificates
    ],

    'webhook' => [
        'enabled' => '0' === '1',
        'url' => '',
        'method' => 'POST',
        'format' => 'json'
    ],

    'validation' => [
        'rules' => [
            // Form validation rules will be added dynamically
        ],
        'messages' => [
            // Custom validation messages
        ]
    ],

    'spam_protection' => [
        'enabled' => 'none' !== 'none',
        'provider' => 'none',
        'providers' => [
            'recaptcha' => [
                'enabled' => 'none' === 'recaptcha',
                'secret_key' => '',
                'site_key' => '',
            ],
            'turnstile' => [
                'enabled' => 'none' === 'turnstile',
                'secret_key' => '',
                'site_key' => '',
            ],
            'hcaptcha' => [
                'enabled' => 'none' === 'hcaptcha',
                'secret_key' => '',
                'site_key' => '',
            ],
            'honeypot' => [
                'enabled' => 'none' === 'honeypot',
            ],
        ],
    ],

    'response' => [
        'message' => 'Thank you! Your form has been submitted successfully.'
    ],

    'logging' => [
        'enabled' => true,
        'level' => 'debug',
        'file' => 'form_rw02A69B7F_E161_4F58_95D5_4009D4E6610D.log'
    ],

    // Component metadata
    'component_id' => 'rw02A69B7F_E161_4F58_95D5_4009D4E6610D',
    'generated_at' => '',
];
