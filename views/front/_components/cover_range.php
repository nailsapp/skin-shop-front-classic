<div class="row cover range hidden-xs visible-sm visible-md visible-lg">
    <div class="col-xs-12">
        <?php

            if (!empty($range->cover_id)) {

                $url   = cdnScale($range->cover_id, 1000, 500);
                $style = 'style="background-image:url(' . $url . ');background-size:cover;"';

            } else {

                $style = '';
            }

            echo '<div class="background range" ' . $style . '>';
                echo '<div class="overlay">';
                    echo '<h1>' . $range->label . '</h1>';
                echo '</div>';
            echo '</div>';

            // --------------------------------------------------------------------------

            //  Prepare the breadcrumbs
            $crumbs   = array();
            $crumbs[] = array(
                'id'    => NULL,
                'label' => 'Ranges',
                'url'   => appSetting('page_range_listing', 'nailsapp/module-shop') ? $shop_url . 'range' : NULL
            );

            $crumbs[] = array(
                'id'    => $range->id,
                'label' => $range->label,
                'url'   => $range->url
            );

            $view = $skin->path . 'views/front/_components/browse_breadcrumb';
            $data = array('crumbs' => $crumbs, 'active_id' => $range->id);

            $oView = \Nails\Factory::service('View');
            $oView->load($view, $data);

            // --------------------------------------------------------------------------

            if (trim(strip_tags($range->description))) {

                echo '<div class="description">';
                    echo $range->description;
                echo '</div>';
            }

        ?>
    </div>
</div>