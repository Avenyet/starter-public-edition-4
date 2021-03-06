<?php defined('BASEPATH') OR exit('No direct script access allowed.');

$config['basePath'] = DEFAULT_BASE_URL.'assets/js/ckeditor/';
$config['config']['baseHref'] = http_build_url(DEFAULT_BASE_URL.'../');
$config['config']['fullPage'] = false;
$config['config']['language'] = get_instance()->lang->ckeditor();
$config['config']['defaultLanguage'] = 'en';
$config['config']['contentsLanguage'] = get_instance()->lang->ckeditor();
$config['config']['contentsLangDirection'] = get_instance()->lang->direction();
$config['config']['contentsCss'] = array();
$config['config']['contentsCss'][] = DEFAULT_BASE_URL.'assets/css/lib/bootstrap-3/bootstrap.css';
$config['config']['contentsCss'][] = DEFAULT_BASE_URL.'assets/css/lib/editor.css';

$config['config']['width'] = '';
$config['config']['height'] = '100';
$config['config']['resize_enabled'] = false;
$config['textareaAttributes'] = array('rows' => 8, 'cols' => 60);

$config['config']['entities_latin'] = false;
$config['config']['entities_greek'] = false;

$config['config']['forcePasteAsPlainText'] = true;
$config['config']['toolbarCanCollapse'] = false;
