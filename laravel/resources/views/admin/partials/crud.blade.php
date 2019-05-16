<form method="POST">
<?php $properties = $data->getFillable();
    foreach ($properties as $property): ?>
        <input type="text" name="edit:<?php echo $property; ?>" value="<?php echo $data->$property; ?>">
    <?php endforeach; ?>
    {{ csrf_field() }}
    <input type="submit" value="Guardar">
</form>