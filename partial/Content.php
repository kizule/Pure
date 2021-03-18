<div class="container mw-body" id="content">
    <div class="columns mt-2 mw-title">
        <div class="column is-full is-flex is-justify-content-center">
            <h1 class="title"><?php $this->html('title'); ?></h1>
        </div>

    </div>
    <div class="columns">
        <div class="column is-full is-flex is-justify-content-center p-0">
            <?php echo $this->getIndicators(); ?>
        </div>
    </div>
    <div class="columns">
        <div class="column is-full is-flex is-justify-content-center">
            <div class="icon-text">
                <span class="icon has-text-info">
                    <i class="fa fa-info-circle"></i>
                </span>
                <span><small><?php echo $this->data['lastmod']; ?></small></span>
            </div>
        </div>
    </div>
    <div class="columns" id="bodyContent">
        <div class="column is-full" id="bodyContent">
            <?php
            ob_start();
            $this->html('bodytext');
            $out = ob_get_contents();
            ob_end_clean();
            $markers = array("<h1", "<h2", "<h3");
            $tags = array('<h1 class="title is-4"', '<h2 class="title is-5"', '<h3 class="title is-6"');
            $body = str_replace($markers, $tags, $out);
            // $this->html('bodytext'); 
            echo $body;
            ?>
        </div>
    </div>
    <div class="columns">
        <div class="column is-full">
            <?php $this->html('catlinks'); ?>
        </div>
    </div>
    <div class="columns">
        <div class="column is-full">
            <?php $this->html('dataAfterContent'); ?>
        </div>
    </div>
</div>