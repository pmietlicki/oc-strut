<?php namespace Pmietlicki\Strut;

use System\Classes\PluginBase;

/**
 * Strut Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Strut',
            'description' => 'An impress.js and Bespoke.js Presentation Editor',
            'author'      => 'Pmietlicki',
            'icon'        => 'icon-leaf'
        ];
    }

     public function registerComponents()
    {
        return [
            'Pmietlicki\Strut\Components\Presentation' => 'presentation'
        ];
    }

}
