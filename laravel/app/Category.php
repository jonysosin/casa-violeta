<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'active', 'img', 'seo',
    ];

    public function backendTitles () {
        return [
            'name' => 'Nombre',
            'isActive()' => 'Activo',
        ];
    }

    public function isActive () {
        return $this->isPromo ? 'Sí' : 'No';
    }

    public function getImage() {
        return asset('img/categories/lociones.png');
    }

    public function getUrl () {
        return '/seccion/' . $this->seo;
    }
}
