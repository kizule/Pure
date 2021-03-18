<footer class="footer">
    <div class="content has-text-centered">

        <?php foreach ($this->getFooterLinks('flat') as $key) { ?>
            <div class="columns">
                <div class="column is-full">
                    <small><?php $this->html($key) ?></small>
                </div>
            </div>
        <?php } ?>

        <div class="columns">
            <?php foreach ($this->getFooterIcons('icononly') as $blockName => $footerIcons) { ?>
                <div class="column">
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