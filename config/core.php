<?php

define('_DEV_MODE_', true);
define('_ROOT_DIR_', __DIR__.'/../');
define('_CONFIG_DIR_', _ROOT_DIR_.'/config/');
define('_DATA_DIR_', _ROOT_DIR_.'/data/');
define('_CACHE_DIR_', _ROOT_DIR_.'cache/');
define('_TEMPLATE_DIR_', _ROOT_DIR_.'/template/');


if (_DEV_MODE_) {
    ini_set('display_errors', true);
} else {
    ini_set('display_errors', false);
}

require_once _ROOT_DIR_.'vendor/autoload.php';

/**
 * Twig Load
 */
$loader = new Twig_Loader_Filesystem(_TEMPLATE_DIR_);
$twig = new Twig_Environment($loader, array(
    'cache' => _CACHE_DIR_.'twig',
    'debug' => _DEV_MODE_
));

if (_DEV_MODE_) {
    $twig->addExtension(new Twig_Extension_Debug());
}

require_once _CONFIG_DIR_.'data.php';