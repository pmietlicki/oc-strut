<?php namespace Pmietlicki\Strut\Components;

use Cms\Classes\ComponentBase;

class Presentation extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Presentation Editor',
            'description' => 'Add the Strut application to your page'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

     public function onRun()
    {
        $this->addCss('assets/styles/main.css');
        $this->addCss('assets/styles/default.css');
        
        $this->addJs('assets/js/swfobject.js');
    }

}