<?php
// .scoper.inc.php in plugin root.

use Symfony\Component\Finder\Finder;

include 'vendor/barn2/barn2-lib/.scoper.inc.php';

$config = get_lib_scoper_config( 'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies' );

return $config;