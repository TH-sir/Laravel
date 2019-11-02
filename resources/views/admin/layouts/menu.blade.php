<?php

use App\Common\Components\MenuData;

$menuData = MenuData::getData();
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"></li>
            <?php foreach ($menuData as $key => $menu) { ?>
                <li class="<?= empty($menu['items']) ? '' : 'treeview ' ?> <?= $menu['enabled'] ? ' active menu-open ' : '' ?>">
                    <a href="<?= empty($menu['url']['href']) ? '#' : url($menu['url']['href']) ?>">
                        <?= $menu['prefix'] ?> <span><?= $menu['title'] ?></span>
                        <?php if (!empty($menu['items'])) { ?>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        <?php } ?>
                    </a>
                    <?php if (!empty($menu['items'])) { ?>
                        <ul class="treeview-menu">
                            <?php foreach ($menu['items'] as $itemKey => $item) { ?>
                                <li class="<?= $item['enabled'] ? 'active' : '' ?>">
                                    <a href="<?= empty($item['url']['href']) ? '#' : url($item['url']['href']) ?>">
                                        <?= $item['prefix'] ?> <?= $item['title'] ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </section>
</aside>