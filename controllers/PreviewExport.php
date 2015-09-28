<?php namespace Pmietlicki\Strut\Controllers;

use Response;
use Backend\Classes\Controller;

/**
 * Preview Export Back-end Controller
 */
class PreviewExport extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public static function retrieveFile($path)
    {
        $file = getcwd().'/plugins/pmietlicki/strut/assets/preview_export/'.$path;
        if (file_exists($file))
            readfile($file);
        else
            return Response::make('File '.$path.' does not exist !','404');
    }
}