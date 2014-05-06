<?php

define('_DEV_MODE_', true);
define('_ROOT_DIR_', __DIR__.'/../');
define('_CONFIG_DIR_', _ROOT_DIR_.'/config/');
define('_DATA_DIR_', _ROOT_DIR_.'/data/');
define('_CACHE_DIR_', _ROOT_DIR_.'cache/');
define('_TEMPLATE_DIR_', _ROOT_DIR_.'/template/');
define('_LIB_DIR_', _ROOT_DIR_.'/lib/');
define('_LANG_DIR_', _ROOT_DIR_.'/lang/');

if (_DEV_MODE_) {
    ini_set('display_errors', true);
} else {
    ini_set('display_errors', false);
}

$supportedLangs = array('en-GB', 'fr', 'de');
$select_language = 'en';

if (!isset($_GET['lang'])) {
    $languages = explode(',' , $_SERVER['HTTP_ACCEPT_LANGUAGE']);
    foreach($languages as $lang)
    {
        if(in_array($lang, $supportedLangs))
        {
            // Set the page locale to the first supported language found
            $select_language = $lang;
            break;
        }
    }
} else {
    $select_language = (file_exists(_LANG_DIR_.$_GET['lang'].'.ini')) ? $_GET['lang'] : $select_language;
}

// For now force French
$select_language = 'fr';

require_once _ROOT_DIR_.'vendor/autoload.php';
require_once _LIB_DIR_.'i18n.class.php';

/** @var $i18n */
$i18n = new i18n('lang/'.$select_language.'.ini', 'cache/lang', 'fr');
// Parameters: language file path, cache dir, default language (all optional)

// init object: load language files, parse them if not cached, and so on.
$i18n->init();

/**
 * Twig Load
 */
$loader = new Twig_Loader_Filesystem(_TEMPLATE_DIR_);
$twig = new Twig_Environment($loader, array(
    'cache' => _CACHE_DIR_.'twig',
    'debug' => _DEV_MODE_
));

$function = new Twig_SimpleFunction('__', function ($constant) {
    echo __('L::'.$constant);
});
$twig->addFunction($function);

if (_DEV_MODE_) {
    $twig->addExtension(new Twig_Extension_Debug());
}

require_once _CONFIG_DIR_.'data.php';