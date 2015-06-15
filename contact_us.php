<? require_once './cpad/frontController.php' ?>
<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="UTF-8"/>
        <title>Contact rich International love you </title>
      
    </head>
    <body class="home page">

        <div class="boxed-container">

            <?php include_once('includes/top_navi.php'); ?>


            <div class="main-title" style="background-color: #f2f2f2; padding:20px !important">
                <div class="container">


                </div>
            </div>
            <div class="breadcrumbs " style="margin-bottom:0px !important">
                <div class="container">
                    <span typeof="v:Breadcrumb"><a title="Go to BuildPress." href="index.php" class="home">rich International</a></span>
                    <span typeof="v:Breadcrumb"><span>Contact Us</span></span>	
                </div>
            </div>
            <div class="master-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7919.688862577776!2d79.89860415344239!3d7.0275651910177634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f77315345f49%3A0xd47680c1123e7afb!2sNegombo+Rd%2C+Kandana%2C+Sri+Lanka!5e0!3m2!1sen!2slk!4v1432797846780" width="100%" height="300" frameborder="0" style="border:0"></iframe>



                <div class="hentry container" role="main">
                    <div class="row">

                    </div>
                    <div class="spacer"></div>
                    <div class="row">			
                        <div class="col-md-4">
                            <div class="textwidget panel widget">
                                <span class="icon-container"><span class="fa fa-home"></span></span> <b>rich International </b><br>
                                No.315/D, Negombo Road,<br>
                                Kandana, Sri Lanka.<br><br>
                                <span class="icon-container"><span class="fa fa-phone"></span></span> <b>Hotline : +0777348049 </b><br>

                                <span class="icon-container"><span class="fa fa-phone"></span></span> <b>Tel : +94112239534 </b><br>
                                <span class="icon-container"><span class="fa fa-fax"></span></span> <b>Fax : +94112959064</b><br>
                                <span class="icon-container"><span class="fa fa-envelope"></span></span><a href="mailto:harold@richsuccessinternational.com">harold@richsuccessinternational.com</a> 
                                <br>
                                <span class="icon-container"><span class="fa fa-envelope"></span></span><a href="mailto:sherazade@richsuccessinternational.com">sherazade@richsuccessinternational.com</a> 
                                <br>
                                <span class="icon-container"><span class="fa fa-envelope"></span></span><a href="skype:lhdleon2?call">SKYPE ID : lhdleon2</a> 
                                <br>

                                <br>
                                <span class="icon-container"><span class="fa fa-home"></span></span> <b>Mon - Sat 8.00 - 18.00</b><br>
                                Sunday CLOSED
                            </div>
                            <div class="panel widget widget_pt_social_icons panel-last-child">	
                                <a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-facebook"></i></a>
                                <a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-twitter"></i></a>
                                <a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="wpcf7" id="wpcf7-f5-o1" lang="en-US" dir="ltr">
                                <?= (isset($pro_save_msg)) ? $pro_save_msg : "" ?>
                                <p>Please fill the required field and we'll get back to you ASAP.</p>
                                <form method="post"  class="wpcf7-form" novalidate id="contact_frm" >
                                    <div class="row">
                                        <div class="col-xs-12  col-sm-4">
                                            <span class="wpcf7-form-control-wrap your-name">
                                                <input type="text" name="name" value="<?= ${'name'} ?>" size="40" class="wpcf7-form-control wpcf7-text validate[required]" placeholder="Your Name"/>
                                            </span><br/>
                                            <span class="wpcf7-form-control-wrap your-email">
                                                <input type="email" name="email" value="<?= ${'email'} ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email validate[required,custom[email]]" placeholder="E-mail address"/>
                                            </span><br/>
                                            <span class="wpcf7-form-control-wrap your-subject">
                                                <input type="text" name="subject" value="<?= ${'subject'} ?>" size="40" class="wpcf7-form-control wpcf7-text validate[required]" placeholder="Subject"/>
                                            </span>
                                             <span class="wpcf7-form-control-wrap your-subject">
                                                 <input type="text" id="inputEmail" name="answer" value="" class=" wpcf7-form-control wpcf7-text validate[required,custom[number]]" placeholder="Answer ?">
                                            </span>
                                        </div>

                                        <div class="col-xs-12  col-sm-8">
                                            <span class="wpcf7-form-control-wrap your-message">
                                                <textarea name="massage" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message"><?= ${'massage'} ?></textarea>
                                            </span><br/>
                                                 <table width="200" border="0" cellspacing="0" cellpadding="0" style="">
                                                <tr>
                                                    <td style="width: 150px;" width="150" rowspan="2"><img id="siimage" style="border: 1px solid #000; margin-right: 15px" src="securimage_show.php?sid=<?php echo md5(uniqid()) ?>" alt="CAPTCHA Image" align="left" width="200" /></td>
                                                    <td style="width: 50px;" width="50"><object type="application/x-shockwave-flash" data="flash/securimage_play.swf?bgcol=#ffffff&amp;icon_file=./images/audio_icon.png&amp;audio_file=./securimage_play.php" height="32" width="32">
                                                            <param name="movie" value="./securimage_play.swf?bgcol=#ffffff&amp;icon_file=./images/audio_icon.png&amp;audio_file=./securimage_play.php" />
                                                        </object></td>
                                                </tr>
                                                <tr>
                                                    <td> <a tabindex="-1" style="border-style: none;" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = './securimage_show.php?sid=' + Math.random();
                                                    this.blur();
                                                    return false"><img src="./images/refresh.png" alt="Reload Image" height="30" width="35" onclick="this.blur()" align="bottom" border="0" /></a></td>
                                                </tr>

                                            </table>
                                            <input type="submit" name="contact_send" value="SEND MESSAGE" class="wpcf7-form-control wpcf7-submit btn btn-primary"/>

                                        </div>
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /container -->
            </div>

            <footer>
                <?php include_once('includes/footer.php'); ?>
                <?php include_once('includes/W3S-Solution.php'); ?>

            </footer>
        </div><!-- end of .boxed-container -->


        <script type="text/javascript" src="js/almond.js"></script>
        <script type="text/javascript" src="js/underscore.js"></script>

        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="js/header_carousel.js"></script>
        <script type="text/javascript" src="js/sticky_navbar.js"></script>
        <script type="text/javascript" src="js/simplemap.js"></script>
        <script type="text/javascript" src="js/main.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

        <script type="text/javascript" src="js/require.js"></script>
        <script type="text/javascript" src="style-switcher/assets/js/switcher.js"></script>


        <script type="text/javascript" src="js/validation-engine/jquery.validationEngine.js"></script>
        <link href="js/validation-engine/css/validationEngine.jquery.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="js/validation-engine/languages/jquery.validationEngine-en.js"></script>


        <script>
                                                        $(function () {
                                                            $("#contact_frm").validationEngine();
                                                        })
        </script>

    </body>


</html>