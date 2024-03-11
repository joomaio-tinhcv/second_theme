<form id="filter_form" class="col s6 mb0" action="<?php echo $this->link_list ?>" method="POST">
    <div class="d-flex mt4 w-100 align-items-end">
        <div class="pe-2 pb-2">
            <?php $this->ui->field('search');  ?>
        </div>
        <input type="hidden" name="clear_filter" id="input_clear_filter">
        <div class="pe-2 pb-2">
            <button type='Submit' data-bs-toggle="tooltip" title="Filter" class="valign-wrapper align-middle btn border border-1" type="button">
                <i class="fa-solid fa-filter"></i>
            </button>
        </div>
    </div>
</form>