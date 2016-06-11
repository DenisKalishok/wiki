<?php /*файл отвечающий за вывод отдельного новостного поста*/ ?>
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9">
            <?php if (have_posts()) :while (have_posts()) : the_post();?>
                <h2><?php the_title() ?></h2>
                <hr>
                <p><?php the_content() ?></p>
                <hr>
                <span>Категория: <?php the_category(', ') ?></span>
                <div>Дата добавления: <?php the_date() ?></div>
                <div id="clear"></div>
                <?php //previous_post_link('%link', $link='← %title') ?> <?php// next_post_link('%link', $link='%title → ') ?>
            
            <?php endwhile; endif; ?>
            
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer() ?>