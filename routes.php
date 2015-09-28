<?php

Route::get('plugins/pmietlicki/strut/assets/preview_export/{name}',
	[function($name) { return Pmietlicki\Strut\Controllers\PreviewExport::retrieveFile($name); }]); 
