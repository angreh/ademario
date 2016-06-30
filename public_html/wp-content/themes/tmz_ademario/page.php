<?php get_header(); ?>

<div class="news clearfix">

    <div class="single">
        <?php if (have_posts()) : while (have_posts()): the_post(); ?>
            <div class="post">
                <div class="spacer">

                    <div class="pre-news-title">

                        <hr>
                        <div class="down">
                            <?php the_title(); ?>
                        </div>
                        <hr class="shadow">

                    </div><!-- pre-news-title -->

                    <div class="content"><p><?php the_content(); ?></p></div>

                </div>
            </div>
        <?php endwhile; endif; ?>
    </div><!-- .posts -->

</div><!-- .news -->

<?php wpbeginner_numeric_posts_nav(); ?>

<?php get_footer(); ?>