<?php
$format = isset($_GET['format']) ? $_GET['format'] : 'ttf';

switch($format) {
	case 'ttf':
	case 'woff':
	case 'eot':
	case 'svg':
		echo base64_encode(file_get_contents('league-gothic/League_Gothic-webfont.' . $format));
}