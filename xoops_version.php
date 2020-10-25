<?php

$modversion['name'] = 'Ephemerids';
$modversion['version'] = 1.0;
$modversion['author'] = 'Venkat Addanki (kumarvja@yahoo.com)';
$modversion['description'] = 'Today in History';
$modversion['credits'] = 'Venkat Addanki';
$modversion['help'] = '';
$modversion['license'] = 'GPL';
$modversion['official'] = 0;
$modversion['image'] = 'logo.png';
$modversion['dirname'] = 'ephemerids';

$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';

// Blocks
$modversion['blocks'][1]['file'] = 'ephemerids.php';
$modversion['blocks'][1]['name'] = 'Today in History';
$modversion['blocks'][1]['description'] = 'Shows Events happened today in History';
$modversion['blocks'][1]['show_func'] = 'b_ephemerids_show';
$modversion['blocks'][1]['template'] = 'ephemerids_block.html';

// Menu
$modversion['hasMain'] = 0;

// Search
$modversion['hasSearch'] = 0;
