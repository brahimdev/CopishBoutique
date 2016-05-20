<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="We are a social media strategist focusing on Facebook and Email marketing">
    <meta name="author" content="Copish Boutique">

    <title>Payment - Copish Boutique | Digital Marketing Agency</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Retina.js - Load first for faster HQ mobile images. -->
    <script src="assets/js/plugins/retina/retina.min.js"></script>

    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Default Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>

    <!-- Modern Style Fonts (Include these is you are using body.modern!) -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="assets/css/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/jquery.fs.wallpaper.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/animate.min.css" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="assets/css/vitality-red.css" rel="stylesheet" type="text/css">

</head>

<body class="modern" id="page-top">

    <?php include_once 'include/analytics.php'; ?>

    <!-- Composer -->
    <?php require_once('vendor/autoload.php'); ?>

    <!-- Stripe API -->
    <?php require_once('include/config.php'); ?>

<!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. 
        Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <div class="container">
        <div class="row">
            <h1>Copish Boutique Customer Charge</h1>
                <form action="include/paid.php" method="POST">
                    <h3>Enter your information for Copish Boutique Marketing Services</h3>
                    <input type="text" name="first_name" placeholder="First Name" />
                    <input type="text" name="last_name" placeholder="Last Name" />
                    <input type="text" name="company_name" placeholder="Company Name" />
                    <input type="text" name="email" placeholder="Email Address" />
                    <input type="password" name="password" placeholder="Password" />
                    <script src="https://button.stripe.com/v1/button.js" class="stripe-button"
                    data-key="pk_test_ZpFJ7khGK0HEmwEv25ZwC92I"
                    data-amount=53500
                    data-description="One Wilde quote"
                    data-label="Buy"></script>
                </form>
        </div>
    </div>

    <!-- Core Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- jQuery Fallback -->
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.10.2.js"><\/script>')</script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="assets/js/plugins/jquery.easing.min.js"></script>
    <script src="assets/js/plugins/classie.js"></script>
    <script src="assets/js/plugins/cbpAnimatedHeader.js"></script>
    <script src="assets/js/plugins/owl-carousel/owl.carousel.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.fs.wallpaper.js"></script>
    <script src="assets/js/contact_me.js"></script>
    <script src="assets/js/plugins/jqBootstrapValidation.js"></script>
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="assets/js/plugins/wow-init.js"></script>
    
    <!-- Theme Scripts -->
    <script src="assets/js/vitality.js"></script>

    <!-- Quantcast Tag -->
        <script type="text/javascript">
        var _qevents = _qevents || [];

        (function() {
        var elem = document.createElement('script');
        elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
        elem.async = true;
        elem.type = "text/javascript";
        var scpt = document.getElementsByTagName('script')[0];
        scpt.parentNode.insertBefore(elem, scpt);
        })();

        _qevents.push({
        qacct:"p-dVnG_HWsLE0A8"
        });
    </script>

    <noscript>
    <div style="display:none;">
    <img src="//pixel.quantserve.com/pixel/p-dVnG_HWsLE0A8.gif" border="0" height="1" width="1" alt="Quantcast"/>
    </div>
    </noscript>

    <?php include_once 'include/heatmap.php'; ?>
    
</body>

</html>