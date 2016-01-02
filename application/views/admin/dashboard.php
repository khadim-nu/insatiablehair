<?php $this->load->view('include/admin/header'); ?>
<div id="main">
    <?php $this->load->view('include/admin/sidebar'); ?>
    <div id="content">
        <div class="page-head">
            <span class="page-heading">Add A Post</span>
            <?php $this->load->view('message'); ?>
        </div>
        <div id="form-wrap">
            <form id="admin-register" method="post" action="<?= base_url(); ?>admin/changepassword">
                <fieldset>
                    <div class="post_wrap">
                        <div class="row">
                            <div class="">
                                <textarea  placeholder="Write here" name="post" data-parsley-required > </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <input class="btn_wrap" class="btn_wrap" type="submit" value="Followers">
                            <input class="btn_wrap" type="submit" value="Follows">
                            <input class="btn_wrap" type="submit" value="Every Where">
                            <input class="btn_wrap" type="submit" value="Clear">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?> 