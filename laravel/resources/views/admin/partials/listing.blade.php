<table id="listing-table">
    <thead>
        <?php foreach($fillable as $key => $value): ?>
            <th><?php echo $value; ?></th>
        <?php endforeach; ?>
        <th>Acciones</th>
    </thead>
    <tbody>
        <?php foreach ($data as $item): ?>
            <tr class="listing-item">
                <?php foreach ($fillable as $keyFillable => $valueFillable): ?>
                    <td>
                    <?php
                        $property = null;
                        if (!!strpos($keyFillable, '()'))  {
                            $method = str_replace('()', '', $keyFillable);
                            $property = $item->$method();
                        } else {
                            $property = $item->$keyFillable;
                        }

                        echo $property;
                    ?>
                    </td>   
                <?php endforeach; ?>
                <td>
                    <a href="<?php echo App\MenuItem::getEditLink($item->id); ?>">Editar</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>