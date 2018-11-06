<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */
    'backend' => [
        'access' => [
            'title' => 'Access',
            'roles' => [
                'all' => 'All Roles',
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',
                'main' => 'Roles',
            ],
            'users' => [
                'all' => 'All Users',
                'change-password' => 'Change Password',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'main' => 'Users',
                'view' => 'View User',
            ],
        ],
        'log-viewer' => [
            'main' => 'Log Viewer',
            'dashboard' => 'Dashboard',
            'logs' => 'Logs',
        ],
        'sidebar' => [
            'dashboard' => 'Dashboard',
            'general' => 'General',
            'history'   => 'History',
            'system' => 'System',
        ],
    ],
    'language-picker' => [
        'language' => '語言',
        /*
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar' => '阿拉伯文（Arabic）',
            'zh' => '簡體中文（Chinese Simplified）',
            'zh-TW' => '繁體中文（Chinese Traditional）',
            'da' => '丹麥文（Danish）',
            'de' => '德文（German）',
            'el' => '希臘文（Greek）',
            'en' => '英文（English）',
            'es' => '西班牙文（Spanish）',
            'fa' => '波斯文 (Persian) ',
            'fr' => '法文（French）',
            'he' => '希伯來文 (Hebrew)',
            'id' => '印度尼西亞文（Indonesian）',
            'it' => '義大利文（Italian）',
            'ja' => '日文（Japanese）',
            'nl' => '荷蘭文（Dutch）',
            'no' => '挪威文 (Norwegian)',
            'pt_BR' => '巴西葡萄牙文（Brazilian Portuguese）',
            'ru' => '俄文（Russian）',
            'sv' => '瑞典文（Swedish）',
            'th' => '泰文（Thai）',
            'tr' => '土耳其文（Turkish）',
        ],
    ],
];