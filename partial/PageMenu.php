<div class="container">
    <div class="is-flex is-justify-content-flex-end mt-2 mb-2">
        <?php
        foreach ($this->data['content_navigation'] as $group => $tabs) {
            $menuId = sprintf('dropdown-menu-%s', $group);
            if (!empty($tabs)) { ?>
                <div class="dropdown is-right is-hoverable ml-2">
                    <div class="dropdown-trigger">
                        <button class="button" aria-haspopup="true" aria-controls="<?php echo $menuId; ?>">
                            <span><?php echo $group; ?></span>
                            <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="<?php echo $menuId; ?>" role="menu">
                        <div class="dropdown-content">
                            <?php
                            foreach ($tabs as $key => $item) {
                                echo $this->makeLink($key, $item, array(
                                    'link-class' => 'dropdown-item'
                                ));
                            }
                            ?>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
</div>