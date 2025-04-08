<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:5173'], // Vue frontend
    'allowed_headers' => ['*'],
    'supports_credentials' => true,
];
