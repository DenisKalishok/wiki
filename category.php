<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9">
            <fieldset class="scheduler1-border">
    			<legend class="scheduler-border">
                    <?php if (in_category('news')) { ?>
                        <i class="fa fa-list-alt fa-lg"></i>
                        ВСЕ НОВОСТИ:
                    <?php ;} elseif (in_category('works')) { ?>
                        <i class="fa fa-cogs fa-lg"></i>
                        ВСЕ РАБОТЫ НА СЕТЯХ СВЯЗИ:
                    <?php ;}?>
                </legend>
                <div class="news_list">
                    <?php if (have_posts()) :while (have_posts()) : the_post();?>
						<h3>
                            <?php echo get_the_date() ?>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p>
                            <?php do_excerpt(get_the_excerpt(), 40); ?>
                            <a href="<?php the_permalink(); ?>"> >>></a>
                        </p>
                    <hr class="hr">
				    <?php endwhile; endif;?>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                            <?php the_posts_pagination(
                            $args = array(
                                'prev_next'    => True,
                                'prev_text'    => __('Назад'),
                                'next_text'    => __('Вперед'),
                            )); ?>
                    </div>
                </div>
			</fieldset>
            
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>