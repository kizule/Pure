<nav class="navbar container" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="<?php echo $this->data['nav_urls']['mainpage']['href']; ?>">
            <img alt="<?php echo $this->text('sitename'); ?>" class="top-bar-logo" src="<?php echo $this->text('logopath') ?>" height="25">
            <span><?php echo $this->text('sitename'); ?></span>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="main-navbar">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="main-navbar" class="navbar-menu">
        <div class="navbar-start">
            <div class="navbar-item">
                <form action="<?php $this->text('wgScript'); ?>" id="searchform" class="mw-search">
                    <div class="buttons">
                        <div class="field">
                            <div class="control is-small">
                                <?php echo $this->makeSearchInput(array(
                                    'placeholder' => wfMessage('searchsuggest-search')->text(),
                                    'id' => 'searchInput',
                                    'class' => 'input is-small'
                                )); ?>
                            </div>
                        </div>
                        <button type="submit" class="button is-primary is-small">
                            <?php echo wfMessage('search')->text() ?>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="navbar-end">
            <?php foreach ($this->getSidebar() as $boxName => $box) {
                if (($box['header'] != wfMessage('toolbox')->text())) { ?>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link"><?php echo htmlspecialchars($box['header']); ?></a>
                        <?php if (is_array($box['content'])) { ?>
                            <div class="navbar-dropdown">
                                <?php foreach ($box['content'] as $key => $item) { ?>
                                    <a class="navbar-item" href='<?php echo $item['href'] ?>'><?php echo $item['text'] ?></a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</nav>