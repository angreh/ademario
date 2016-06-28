<html>
<head>

    <meta charset="UTF-8">

    <!-- STYLES -->
    <link href="/wp-content/themes/tmz_ademario/style.css" rel="stylesheet">

</head>
<body>
    <div id="header">
        <div class="container">

            <div class="pic"></div>
            <div class="logo"></div>

            <div class="menu-wrapper">
                <?php wp_nav_menu(); ?>
                <div class="header-face-icon"><a href="/"></a></div>
            </div>

        </div>
    </div><!-- #header -->

    <div id="body">
        <div class="container">
            <div class="posts">
            <?php if (have_posts()) : while (have_posts()): the_post(); ?>
                <div class="post">

                    <div class="image"><?php the_post_thumbnail(); ?></div>
                    <div class="title"><?php the_title(); ?></div>
                    <div class="content"><?php the_excerpt(); ?></div>

                </div>
            <?php endwhile; endif; ?>
            </div><!-- .posts -->

            <br />
            <br />

            <?php wpbeginner_numeric_posts_nav(); ?>
        </div>
    </div>


    <div id="footer">
        #footer
    </div><!-- #footer -->
</body>
</html>