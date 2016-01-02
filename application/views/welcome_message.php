<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$title = "InsatiableHair";
$sub_title = "Our mission is to provide premium quality virgin hair at an affordable price";
?>
<html>
    <head>
        <title><?= $title ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?= base_url(); ?>assets/css/all.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.main.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/main-scrollbar.jss"></script>



        <script>
            $(document).ready(function(e) {
                $('.btn-popup').click(function(event) {
                    event.preventDefault();
                    var btn_popup_id = $(this).attr('href');
                    $(btn_popup_id).css({'transform': 'translate(0,0)', 'opacity': '1', 'z-index': '9999'});
                });
                $('.btn-close').click(function(event) {
                    event.preventDefault(event);
                    $('.popup-holder').css('transform', 'translate(0,-120%)')
                    $('.popup-holder').css({'transform': 'translate(0,-100%)', 'opacity': '0', 'z-index': '-1'});
                });
                $('.btn-popup').click(function() {
                    $('#wrapper').addClass('fixed');
                });
                $('.btn-close').click(function() {
                    $('#wrapper').removeClass('fixed');
                });
            });
        </script>
    </head>
    <body class="admin-panel">
        <div id="wrapper">
            <header id="header">
                <div class="login-area">
                    <div class="img-box">
                        <img src="<?= base_url(); ?>assets/images/twitter.png" alt="images description">
                        <span>SP</span>
                    </div>
                    <a class="logout btn-popup" href="#add-popup"><i class="icon-off"></i></a>
                </div>
                <div class="logo1">
                    <a href="#"><img src="<?= base_url(); ?>assets/images/IHBANN.png" alt="<?= $title ?>"></a>
                </div>
            </header>
            <main id="main" role="main">
                <div class="form-holder">
                    <form class="login-form" method="POST" action="#">
                        <section class="add-section">
                            <h1>Post</h1>
                            <textarea cols="100" rows="10" type="text" name="content" value="<?= ""; ?>"><?= ""; ?></textarea>
                            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
                            <br>
                            <div class="btn-holder">

                                <input class="btn-save" type="submit" value="Post To Followers" name="action"/>
                                <input class="btn-save" type="submit" value="Post To Post To Follows" name="action"/>

                                <input class="btn-save" type="submit" value="Post Every Where" name="action"/>
                                <input class="btn-save" type="submit" value="Clear" name="action"/>


                            </div>
                        </section>
                    </form>
                </div>
            </main>
            <footer id="footer">
                <div class="logo1">
                    <a href="#"><img src="<?= base_url(); ?>assets/images/IHBANN.png" alt="<?= $title ?>"></a>
                </div>
                <span class="copyright">Copyright 2015 All rights reserved</span>
            </footer>
        </div>
        <div id="add-popup" class="popup-holder">
            <div class="popup-area">
                <div class="popup-text">
                    <div class="popup-container">
                        <div class="txt-box">
                            <h2>confirm log out</h2>
                            <a class="btn-txt" href="#">save modifications</a>
                            <a class="btn-txt" href="/admin/logout">ok</a>
                        </div>
                        <a href="#" class="btn-close">X</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>