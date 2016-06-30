<?php get_header(); ?>

<div class="news clearfix">

    <div class="pre-news-title">

        <div class="up">
            Notícias <strong>Ademário</strong>
        </div>

        <hr>
        <div class="down">
            GOVERNO QUE GOSTA DA GENTE
        </div>
        <hr class="shadow">

    </div><!-- pre-news-title -->

    <div class="posts">
        <?php if (have_posts()) : while (have_posts()): the_post(); ?>
            <div class="post list clearfix" onclick="window.location.href='<?php the_permalink(); ?>'">
                <div class="spacer">

                    <div class="image"><?php the_post_thumbnail(); ?></div>
                    <div class="title"><?php the_title(); ?></div>
                    <div class="content"><p><?php the_excerpt(); ?></p></div>

                    <div class="controllers">
                        <div class="read-more">Leia mais</div>
                    </div>

                </div>
            </div>
        <?php endwhile; endif; ?>
    </div><!-- .posts -->

</div><!-- .news -->

<?php wpbeginner_numeric_posts_nav(); ?>

<?php get_footer(); ?>