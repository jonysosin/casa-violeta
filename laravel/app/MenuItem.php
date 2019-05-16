<?php

namespace App;

class MenuItem {
    private $title;
    private $key;
    private $icon;
    
    public function __construct($title, $key, $icon) {
        $this->title = $title;
        $this->key = $key;
        $this->icon = $icon;
    }

    public function getUrl () {
        return '/admin/' . $this->key;
    }

    public function getIcon () {
        return $this->icon;
    }

    public function getTitle () {
        return $this->title;
    }

    public function isSelected () {
        return \Route::current()->parameters['entityName'] == $this->key;
    }

    public static function getEditLink ($id) {
        $entityName = \Route::current()->parameters['entityName'];

        return '/admin/' . $entityName . '/' . $id;
    }
}
