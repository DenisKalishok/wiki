<?php /*файл отвечающий за вывод страницы с результатом поиска*/ ?>
<?php get_header() ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h1><?php echo 'Результат поиска: ' . '<span>' . get_search_query() . '</span>'; ?></h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <?php if (have_posts()) :while (have_posts()) : the_post();?>
                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                <div>Автор: <?php the_author() ?></div>
                <div>Дата добавления: <?php the_date() ?></div>
                <div id="clear"></div>
                <p><?php the_content() ?></p>
                <span>Категория: <?php the_category(', ') ?></span>
            <?php endwhile; ?>
            <?php else :
                echo "Извините по вашему запросу ничего не найдено";
                endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer() ?>