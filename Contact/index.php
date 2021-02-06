<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="ContactForm/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="ContactForm/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="ContactForm/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="ContactForm/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="ContactForm/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="ContactForm/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="ContactForm/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="ContactForm/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="ContactForm/css/util.css">
    <link rel="stylesheet" type="text/css" href="ContactForm/css/main.css">
    <!--===============================================================================================-->
</head>
<body>


<div class="container-contact100">

    <div class="wrap-contact100">
        <form class="contact100-form validate-form" action="form.php" method="post">
				<span class="contact100-form-title">
					Mesaj Gönder
				</span>
            <div class="wrap-input100 validate-input" data-validate = "Geçerli bir isim giriniz: e@a.x">
                <input class="input100" type="text" name="name" placeholder="Ad-Soyad">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Geçerli email giriniz: e@a.x">
                <input class="input100" type="text" name="email" placeholder="E-mail">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Geçerli bir isim giriniz">
                <input class="input100" type="text" name="subject" placeholder="Konu">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Geçerli bir mesaj giriniz">
                <textarea class="input100" name="content" placeholder="Mesajınız"></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn" type="submit">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Gönder
						</span>
                </button>
            </div>

               <?php if(@$_GET["err"]=="1"){
                   echo "<p style='color: red'>Gönderim hatası tekrar deneyiniz..</p>";
               }elseif (@$_GET["ok"]=="0"){
                   echo "<p style='color: darkgreen'>Gönderim başarılı..</p>";
               }
               ?>

        </form>
    </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="ContactForm/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="ContactForm/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="ContactForm/vendor/bootstrap/js/popper.js"></script>
<script src="ContactForm/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="ContactForm/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="ContactForm/vendor/daterangepicker/moment.min.js"></script>
<script src="ContactForm/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="ContactForm/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="ContactForm/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
