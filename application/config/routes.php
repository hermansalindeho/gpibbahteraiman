<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['about'] = 'abouts';
$route['event'] = 'events';
$route['contact'] = 'contacts';
//$route['default_controller'] = 'welcome';
$route['default_controller'] = 'homes';
//$route['(:any)'] = 'solutions/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
