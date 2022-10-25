<?php

use App\Enums\Roles;

return [
    Roles::SUPER_ADMIN => [
        "create_user",
        "update_user",
        "deactivate_user",
    ],

    Roles::AGENT => [
        "create_user",
    ],

    Roles::NORMAL_USER => [
        "view_user_details",
    ]
];
