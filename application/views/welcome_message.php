<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$title = "CI 3.0 Practice";
$sub_title = "A project for practice";
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $title; ?></title>

        <link href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/all.css" rel="stylesheet">

        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/parsley.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/all.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-ui.min.js"></script>

        <script type="text/javascript">var switchTo5x = true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "64b58c40-8aa9-4f39-86fc-f44f5fed0280", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <h1 class="title"><?= $title; ?></h1>
                <h4 class="title"><?= $sub_title; ?></h4>
            </div>
            <div class="container ">
                <form id="servey" data-parsley-validate  class="form-horizontal" action="<?= base_url(); ?>index.php/welcome/submit_servey" method="post">

                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="row" align-center>
                                <textarea rows="10" cols="40" name="post"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="align-center">
                                <input class=" btn btn-info custom-btn" type="submit" value="Submit"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="footer">
                <div class="col-md-4">
                    <h4 class="footer-title"><?= $title; ?></h4>
                </div>
                <div class="col-md-5 sub-title">
                    <h5><?= $sub_title; ?></h5>
                </div>
                <div class="col-md-2 pull-right counter">
                </div>
            </div>
        </div>

    </body>
</html>