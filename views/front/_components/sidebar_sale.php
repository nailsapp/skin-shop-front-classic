<div class="sidebar-filter col-md-3 col-md-pull-9 hidden-xs hidden-sm">
<?php

$oView = \Nails\Factory::service('View');
$oView->load($skin->path . 'views/front/_components/sidebar_searchform');
$oView->load($skin->path . 'views/front/_components/sidebar_basket');
$oView->load($skin->path . 'views/front/_components/sidebar_filters');

?>
</div>