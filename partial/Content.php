<div class="container mw-body" id="content">
    <div class="columns mt-2 mw-title">
        <div class="column is-full">
            <h1 class="title"><?php $this->html('title'); ?></h1>
        </div>

    </div>
    <div class="columns">
        <div class="column is-full">
            <?php echo $this->getIndicators(); ?>
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