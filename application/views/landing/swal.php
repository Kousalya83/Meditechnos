<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="Bgr1_6oNmrrUexgyBB6i7bHMcN0VMCKu5Eg1ICtQsMI" />

    <?php
    $default_title = "MediTechnos Solutions - Incorporate Automation";
    $default_description = "Set up an account or log into MediTechnos to receive updates. Connect with the appropriate service medical specialists.";
    ?>

    <title><?= isset($title)? $title : $default_title; ?></title>
    <meta name="title" content="<?= isset($title)? $title : $default_title; ?>"/>
    <meta name="description" content="<?= isset($description)? $description :$default_description; ?>"/>
    <meta name="keywords" content="claim rejection, claim denial, clean claim, denial management, denial management in rcm, claims denial management, denials in rcm, clean processing, claim submission, rcm denial management">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= isset($title)? $title : $default_title; ?>" />
    <meta property="og:description" content="<?= isset($description)? $description :$default_description; ?>" />
    <meta property="og:url" content="<?php echo base_url(uri_string()); ?>" />
    <meta property="og:image" itemprop="image" content="<?php echo base_url('assets/img/Meditechnos-logo.png'); ?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url('assets/img/Meditechnos-logo.png'); ?>" />

    <link rel="icon" href="<?php echo base_url('assets/img/favicon.png'); ?>" type="image/x-icon">
    <link rel="canonical"  href ="<?php echo base_url(uri_string()); ?>">

    <!-- CSS only -->
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/header.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/footer-style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/top-scroll.css'); ?>">

    <!-- Custom JS -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7CETGZ4Z5C"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-7CETGZ4Z5C');
    </script>
    
    <style type="text/css">

        @font-face {
            font-family: Excon-Medium;
            src: url('<?= base_url('assets/fonts/Excon-Medium.ttf') ?>');
        }

        @font-face {
            font-family: Excon-Light;
            src: url('<?= base_url('assets/fonts/Excon-Light.ttf') ?>');
        }

        @font-face {
            font-family: Excon-Regular;
            src: url('<?= base_url('assets/fonts/Excon-Regular.ttf') ?>');
        }

        @font-face {
            font-family: Excon-Bold;
            src: url('<?= base_url('assets/fonts/Excon-Bold.ttf') ?>');
        }

        @font-face {
            font-family: HindMadurai-SemiBold;
            src: url('<?= base_url('assets/fonts/HindMadurai-SemiBold.ttf') ?>');
        }

        @font-face {
            font-family: HindMadurai-Medium;
            src: url('<?= base_url('assets/fonts/HindMadurai-Medium.ttf') ?>');
        }

        @font-face {
            font-family: HindMadurai-Regular;
            src: url('<?= base_url('assets/fonts/HindMadurai-Regular.ttf') ?>');
        }

        @font-face {
            font-family: HindMadurai-Light;
            src: url('<?= base_url('assets/fonts/HindMadurai-Light.ttf') ?>');
        }

        @font-face {
            font-family: Montserrat-Bold;
            src: url('<?= base_url('assets/fonts/Montserrat-Bold.ttf') ?>');
        }

        @font-face {
            font-family: Montserrat-SemiBold;
            src: url('<?= base_url('assets/fonts/Montserrat-SemiBold.ttf') ?>');
        }

        @font-face {
            font-family: Montserrat-Medium;
            src: url('<?= base_url('assets/fonts/Montserrat-Medium.ttf') ?>');
        }

        @font-face {
            font-family: Montserrat-MediumItalic;
            src: url('<?= base_url('assets/fonts/Montserrat-MediumItalic.ttf') ?>');
        }

        @font-face {
            font-family: Montserrat-Regular;
            src: url('<?= base_url('assets/fonts/Montserrat-Regular.ttf') ?>');
        }

        .banner {
            background-image: url("<?php echo base_url('assets/img/contact/result_bg.png'); ?>");
            background-size: cover;
            width: 100%;
            height: 100vh;
            min-height: 100vh;
            padding: 10% 5% 5%;
        }

        .banner h3,
        .swal2-title{
            font-family: Excon-Bold;
        }

        .banner h5,
        .swal2-content,
        .swal2-confirm{
            font-family: Excon-Regular;
        }

        .content{
            background: #FFFFFF 0% 0% no-repeat padding-box;
            box-shadow: 6px 6px 12px #00000029;
            border-radius: 18px;
            opacity: 1;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        @media (max-width:992px) {
            .banner{
                height: 75vh;
                min-height: 75vh;
                padding: 25% 5% 5%;
            }
        }

        .footer-block{
            padding-top: 2%;
            padding-bottom: 0;
        }

        .arrow-li-foot {
            list-style: none;
            padding-left: 0;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .arrow-li-foot .contact-addr {
            color: #707070;
            font-family: HindMadurai-Regular;
            background: url('<?php echo base_url('assets/img/footer/location.png'); ?>') no-repeat left center;
            padding: 5px 0px 0px 40px;
            list-style: none;
            vertical-align: middle;
            background-size: 20px;
            text-align: left;
        }

        .ul-head-contact {
            color: #707070;
            font-family: HindMadurai-Medium;
        }

        .queries p{
            font-family: HindMadurai-Regular;
            color: #707070;
            margin: 5px 0;
        }

        .social-icons,
        .bottom-ul li,
        .copyright p{
            opacity: 1;
        }

        .bottom-ul {
            list-style: none;
            display: flex;
            justify-content: space-evenly;
        }

        .copyright {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        @media only screen and (min-width: 600px) {
            .image-pad {
                padding-left: 2%;
            }
            .serv-hd {
                margin-top: 38px;
            }

            .copyright p,
            .bottom-ul{
                margin-bottom: 0;
            }

            .queries{
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
        }

        @media only screen and (max-width: 600px) {
            .footer{
                text-align: center;
            }
            .arrow-li-foot {
                padding-left: 0;
                flex-direction: column;
            }

            .bottom-ul {
                display: block;
                margin: 0;
                padding: 0;
            }

            .queries{
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <section class="banner">
                
            </section>
        </div>
    </div>



   


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">
    $(document).ready(function(){
        var baseurl = "<?php echo base_url() ?>";
        console.log(baseurl);

        Swal.fire({
            title: "Request Submitted",
            text: "We will get back to you shortly.",
            type: "success",
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OK',
            allowOutsideClick: false
        }).then((result) => {
            if (result.value) {
                window.close();
                window.location.replace(baseurl);
            }
        })

    });
</script>


</body>

</html>
