<div id="admin-sidebar">
    <ul id="admin-menu">
        <?php foreach($menuItems as $menuItem): ?>
            <li <?php echo $menuItem->isSelected() ? 'class="selected"' : ''; ?>>
                <a href="<?php echo $menuItem->getUrl(); ?>">
                    <?php echo $menuItem->getTitle(); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>