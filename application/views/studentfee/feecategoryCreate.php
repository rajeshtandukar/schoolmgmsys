<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?php echo $this->lang->line('general_form_elements'); ?>
            <small><?php echo $this->lang->line('preview'); ?></small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $title; ?></h3>
                    </div>
                    <form id="form1" action="<?php echo site_url('feecategory/create') ?>"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8">
                        <div class="box-body">
                            <?php echo $this->customlib->getCSRF(); ?>
                            <?php echo validation_errors(); ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?php echo $this->lang->line('category'); ?></label>
                                <input autofocus="" id="category" name="category" placeholder="" type="text" class="form-control"  value="<?php echo set_value('category'); ?>" />
                                <span class="text-danger"><?php echo form_error('category'); ?></span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#btnreset").click(function () {
            /* Single line Reset function executes on click of Reset Button */
            $("#form1")[0].reset();
        });
    });
</script>