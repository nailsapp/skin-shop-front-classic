<div class="nails-skin-shop-front-classic browse index">
    <div class="row">
    <?php

    $oView = \Nails\Factory::service('View');
    $oView->load($skin->path . 'views/front/_components/sidebar_home');
    echo '<div class="col-md-9">';
    echo $shopPageData['body'];
    echo '</div>';

    ?>
    </div>
</div>