<div class="grid-x">
    <?php if ($this->data['sitenotice']) { ?>
        <div class="cell" id="siteNotice">
            <div class="card">
                <div class="card-section">
                    <?php $this->html('sitenotice'); ?>
                </div>
            </div>
        </div>

    <?php } ?>
</div>