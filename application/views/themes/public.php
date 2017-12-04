<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta name="resource-type" content="document"/>
    <meta name="robots" content="noindex, nofollow"/>
    <meta name="googlebot" content="noindex, nofollow"/>
    <?php
    /** -- Copy from here -- */
    if (!empty($meta))
        foreach ($meta as $name => $content) { echo "\n\t\t"; ?>
            <meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" />
        <?php }  echo "\n"; ?>

    <?php if (!empty($canonical)) { echo "\n\t\t"; ?>
        <link rel="canonical" href="<?php echo $canonical ?>" />
    <?php } echo "\n\t"; ?>
    <?php foreach ($css as $file) { echo "\n\t\t"; ?>
        <link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" />
    <?php } echo "\n\t"; ?>


    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/themes/default/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/themes/default/css/slick.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/themes/default/css/slick-theme.css" rel="stylesheet">
    
    <script src="<?php echo template_url('js/bookblock'); ?>/modernizr.custom.js"></script>
    <script src="<?php echo template_url('js'); ?>/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="<?php echo template_url('js'); ?>/bootstrap.min.js" type="text/javascript"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/themes/default/images/favicon.png"
          type="image/x-icon"/>
    <meta property="og:image" content="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png"/>
    <link rel="image_src" href="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png"/>


</head>

<body>

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <nav class="right">
                    <a href="<?php echo base_url('index.php'); ?>/book">کتاب‌ها</a>
                    <a href="">فروشگاه</a>
                    <a href="">دیگر محصولات</a>
                    <a href="<?php echo base_url('index.php'); ?>/contact">تماس با ما</a>
                </nav>
            </div>
            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>">
                    <img class="img-fluid mx-auto" id="logo"
                         src="<?php echo base_url(); ?>assets/themes/default/images/logo.png" />
                </a>
            </div>
            <div class="col-md-5">
                <nav class="left">
                    <a href="<?php echo base_url('index.php'); ?>/about">معرفی</a>
                    <a href="<?php echo base_url('index.php'); ?>/news">اخبار</a>
                    <a href="">با کودکان</a>
                    <a href="#">ورود</a>
                </nav>

            </div>
        </div>
    </div>
</header>

<?php echo $output; ?>
<?php echo $this->load->get_section('sidebar'); ?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h3 class="text-center"> تماس با ما</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <form>
                    <div class="row">
                        <div class="col-7">
                            <fieldset style="margin-top: 31px;">
                                <div class="row">
                                    <textarea class="form-control" name="message"
                                              placeholder="نظرات و پیشنهادات خود را از این طریق به دست ما برسانید"></textarea>
                                </div>
                                <div class="row">
                                    <button type="submit" name="submit" class="btn btn-large btn-secondary">ارسال
                                    </button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-5">
                            <fieldset style="margin-top: 31px;">
                                <div class="row">
                                    <input type="text" class="form-control" name="name" placeholder="نام"/>
                                </div>
                                <div class="row">
                                    <input type="text" class="form-control mt-4" name="name" placeholder="ایمیل"/>
                                </div>
                                <div class="row">
                                    <input type="text" class="form-control mt-4" name="name" placeholder="عنوان"/>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-4">
                <div class="row">
                    <p class="col12 text-justify" style="color:#333;">
                        انتشارات لوپه تو از سال 1394 به طور رسمی با مدیر مسئولی افسانه شعبان نژاد، شاعر و نویسنده کودکان و نوجوانان، آغاز به کار نموده است. دست اندرکاران این نشر، با توجه به سابقه کاری خود و تجربه ای که در شناخت مخاطبانشان، طی سی و اندی سال هم صحبتی و همراهی با آنها داشته اند، تصمیم گرفتند تا نشری را پایه گذاری کنند که به طور تخصصی به تولید کتاب برای کودکان و نوجوانان، بالاخص مخاطبان خردسال بپردازند.
                    </p>
                </div>

            </div>
        </div>
    </div>
</footer>

<section class="copy">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p class="text-center">
                    تمامی حقوق این وب سایت محفوظ و متعلق به انتشارات لوپه‌تو است - 2018 <i class="fa fa-copyright"></i>
                </p>
            </div>
        </div>
    </div>
</section>
<?php foreach ($js as $file) { ?>
    <?php echo "\n\t\t"; ?>
    <script src="<?php echo $file; ?>"></script>
<?php } ?>
<?php echo "\n\t"; ?>

<script type="text/javascript">
    function init() {
        window.addEventListener('scroll', function (e) {
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 100,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header, "smaller");
            } else {
                if (classie.has(header, "smaller")) {
                    classie.remove(header, "smaller");
                }
            }
        });
    }
    window.onload = init();
</script>
<script type="text/javascript" src="<?php echo template_url('js'); ?>/slick.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.moto').slick({
            lazyLoad: 'ondemand',
            autoplay: true,
            autoplaySpeed: 10000,
            arrows: false,
            dots: true,
            slideToShow: 1
        });
    });
</script>
<script src="<?php echo template_url('js/bookblock'); ?>/jquerypp.custom.js"></script>
<script async src="<?php echo template_url('js'); ?>/validator.js"></script>
<script async src="<?php echo template_url('js'); ?>/jquery.easing.1.9.1.js"></script>
</body>
</html>