<?php

use App\Enums\SettingsEnums;

return [

    'title' => [
        'localization_key' => 'general.title',
        'default_value' => env('APP_NAME'),
        'rules' => 'required|string',
        'type' => SettingsEnums::STRING
    ],

    'email' => [
        'localization_key' => 'general.email',
        'default_value' => env('SETTINGS_EMAIL'),
        'rules' => 'required|email',
        'type' => SettingsEnums::STRING
    ],

    'mobile' => [
        'localization_key' => 'general.mobile',
        'default_value' => env('SETTINGS_MOBILE'),
        'rules' => 'required',
        'type' => SettingsEnums::STRING
    ],

    'facebook' => [
        'localization_key' => 'general.facebook',
        'default_value' => env('SETTINGS_FACEBOOK'),
        'rules' => 'required|url',
        'type' => SettingsEnums::STRING
    ],

    'instagram' => [
        'localization_key' => 'general.instagram',
        'default_value' => env('SETTINGS_INSTAGRAM'),
        'rules' => 'required|url',
        'type' => SettingsEnums::STRING
    ],

    'youtube' => [
        'localization_key' => 'general.youtube',
        'default_value' => env('SETTINGS_YOUTUBE'),
        'rules' => 'required|url',
        'type' => SettingsEnums::STRING
    ],

    'tiktok' => [
        'localization_key' => 'التيك توك',
        'default_value' => env('SETTINGS_WHATSAPP'),
        'rules' => 'required|url',
        'type' => SettingsEnums::STRING
    ],
];
