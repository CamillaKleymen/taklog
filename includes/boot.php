<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 'On');

if (isset($_GET['locale'])) {
    $_SESSION['locale'] = $_GET['locale'];
}

function non_default(){
    return isset($_SESSION['locale']) && $_SESSION['locale'] != 'ru';
}

function get_lang_map(){
    return [
        'en' => 'English',
        'ru' => 'Русский',
        'tr' => 'Türkçe',
        'de' => 'Deutsch'
    ];
}

function get_locale(){
    return isset($_SESSION['locale']) ? $_SESSION['locale'] : 'ru';
}

function is_eng(){
    return (isset($_GET['locale']) && $_GET['locale'] == 'en') || (isset($_SESSION['locale']) && $_SESSION['locale'] == 'en');
}

function get_switch_link(){
    return sprintf('/?locale=%s', get_locale());
}

function get_language(){
    return get_lang_map(get_locale());
}

function __($text){
    static $translations = null;

    if (non_default()) {
        if ($translations === null) {
            $translations = include(dirname(__DIR__)) . sprintf('/locale/%s.php', get_locale());
        }

        return isset($translations[$text]) ? $translations[$text] : $text;
    } else {
        return $text;
    }
}