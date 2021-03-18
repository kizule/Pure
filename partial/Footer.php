<footer class="footer">
    <div class="content has-text-centered">

        <?php foreach ($this->getFooterLinks('flat') as $key) { ?>
            <div class="columns p-0">
                <div class="column is-full p-0">
                    <small><?php $this->html($key) ?></small>
                </div>
            </div>
        <?php } ?>

        <div class="columns is-justify-content-center">
            <?php foreach ($this->getFooterIcons('icononly') as $blockName => $footerIcons) { ?>
                <div class="column is-1">
                    <?php
                    foreach ($footerIcons as $icon) {
                        echo $this->getSkin()->makeFooterIcon($icon);
                    }
                    ?>
                </div>
            <?php } ?>
        </div>
    </div>
</footer>