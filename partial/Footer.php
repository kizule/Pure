<footer class="footer">
    <div class="content has-text-centered">
        <div class="columns">
            <?php foreach ($this->getFooterLinks('flat') as $key) { ?>
                <div class="column is-full">
                    <small><?php $this->html($key) ?></small>
                </div>
            <?php } ?>
        </div>
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