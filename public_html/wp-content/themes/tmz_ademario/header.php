<html>
<head>

    <meta charset="UTF-8">

    <!-- STYLES -->
    <link href="/wp-content/themes/tmz_ademario/style.css" rel="stylesheet">

</head>

<body>

<div id="mobile_bg"></div>
<div id="mobile_menu">
    <div class="mobile_container">
        <a href="/" id="menu-logo"><img src="/wp-content/themes/tmz_ademario/assets/imgs/header_logo.png"></a>
        <hr>
        <?php

        wp_nav_menu(
            array(
                'menu_class' => 'nav-menu-mobile',
                'menu' => 'header_menu'
            )
        );
        ?>
    </div>
</div><!-- #mobile_menu -->

<div id="header">
    <div class="container">

        <div class="pic"><a href="/">ADEMARIO</a></div>
        <div class="logo"><a href="/">ADEMARIO</a></div>

        <div class="menu-wrapper">
            <a href="#" id="header_mobile_menu">MENU &blacktriangledown;</a>
            <?php wp_nav_menu(array(
                'menu' => 'header_menu'
            )); ?>
            <div class="header-face-icon"><a href="https://www.facebook.com/ademario.silvaoliveira" target="_blank"></a></div>
        </div>


    </div>
</div><!-- #header -->

<div id="body">
    <div class="container">