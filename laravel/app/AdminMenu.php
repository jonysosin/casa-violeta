<?php

namespace App;

use App\MenuItem;

class AdminMenu {
    public static function getSiteName () {
        return 'CasaVioleta';
    }

    public static function getMenu () {
        return [
            new MenuItem('Gestionar Productos', 'product', 'fa fa-product'),
            new MenuItem('Gestionar Categorías', 'category', 'fa fa-category')
        ];
    }

    public static function getPageTitle () {
        $title = null;
        $i = 0;
        $menuItems = self::getMenu();
        while ($title === null && $i < count($menuItems)) {
            $menuItem = $menuItems[$i];
            if ($menuItem->isSelected()) {
                $title = $menuItem->getTitle();
            }
            $i ++;
        }

        return $title;
    }
}
