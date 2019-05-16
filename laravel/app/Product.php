<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'name', 'subTitle', 'link', 'isPromo', 'category'
    ];

    public function backendTitles () {
        return [
            'name' => 'Nombre',
            'subTitle' => 'Descripcion Corta',
            'isPromoFront()' => '¿En promocion?',
        ];
    }

    public function getUrl () {
        $productName = Str::slug($this->name, '-');
        return '/producto/' . $productName . '/' . $this->id;
    }
    
    public function isPromoFront () {
        return $this->isPromo ? 'Sí' : 'No';
    }
}
