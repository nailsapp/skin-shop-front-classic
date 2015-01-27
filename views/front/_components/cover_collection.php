<div class="row cover collection">
    <div class="col-xs-12">
        <?php

            if (!empty($collection->cover_id)) {

                $url   = cdn_scale($collection->cover_id, 1000, 500);
                $style = 'style="background-image:url(' . $url . ');background-size:cover;"';

            } else {

                $style = '';
            }

            echo '<div class="background collection" ' . $style . '>';
                echo '<div class="overlay">';
                    echo '<h2>' . $collection->label . '</h2>';
                echo '</div>';
            echo '</div>';

            // --------------------------------------------------------------------------

            //  Prepare the breadcrumbs
            $crumbs     = array();
            $crumbs[]   = array(
                'id'    => NULL,
                'label' => 'Collections',
                'url'   => app_setting('page_collection_listing', 'shop') ? $shop_url . 'collection' : NULL
            );

            $crumbs[]   = array(
                'id'    => $collection->id,
                'label' => $collection->label,
                'url'   => $collection->url
            );

            $view = $skin->path . 'views/front/_components/browse_breadcrumb';
            $data = array('crumbs' => $crumbs, 'active_id' => $collection->id);
            $this->load->view($view, $data);

            // --------------------------------------------------------------------------

            if (trim(strip_tags($collection->description))) {

                echo '<div class="description">';
                    echo $collection->description;
                echo '</div>';
            }

        ?>
    </div>
</div>