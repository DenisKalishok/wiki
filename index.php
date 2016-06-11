<?php get_header(); ?>

<?php /*Слайдер*/ ?>
<div class="container">
    <div class="row">
        <div class="carousel slide" id="carousel" data-ride="carousel" data-interval="7000" data-pause="hover">
            <?php /*Индикаторы слайдов*/ ?>
            <ol class="carousel-indicators">
                <li class="actile" data-target="#carousel" data-slide-to="0"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>

            <?php /*Слайды*/ ?>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo get_theme_mod('first_slider_setting') ?>" alt="">
                    <div class="carousel-caption">
                        <h2 class="animated slideInDown">заголовок слайда1</h2>
                        <p class="animated slideInUp"> Описание слайда</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_theme_mod('second_slider_setting') ?>" alt="">
                    <div class="carousel-caption">
                        <h2 class="animated slideInDown">заголовок слайда2</h2>
                        <p class="animated slideInUp"> Описание слайда</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_theme_mod('third_slider_setting') ?>" alt="">
                    <div class="carousel-caption">
                        <h2 class="animated slideInDown">заголовок слайда3</h2>
                        <p class="animated slideInUp"> Описание слайда</p>
                    </div>
                </div>
            </div>

            <?php /*Стрелки переключения слайдов*/ ?>
            <a href="#carousel" class="left carousel-control" data-slide="prev">
                <!--<i style="position:absolute;top:50%;" class="fa fa-chevron-left" aria-hidden="true"></i>-->
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#carousel" class="right carousel-control" data-slide="next">
                <!--<i style="position:absolute;top:50%;" class="fa fa-chevron-right" aria-hidden="true"></i>-->
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</div>
               
<div class="container">
    <?php /*Услуги*/ ?>
	<div class="flex_container">
        <div class="flex_item thumbnail">
            <div>
                <img src="/wordpress/wp-content/themes/wiki/img/360x150.jpg">  
                <!--<p>Файлообменный сервис на высокой скорости. Онлайн видео.</p>-->
            </div>
            <div>
                <h2>Торрент-трекер</h2>
                <a role="button" href="#" class="btn btn-success">
                    Подробнее...
                </a> 
            </div>     
        </div>

        <div class="flex_item thumbnail">
            <div>
                <img src="/wordpress/wp-content/themes/wiki/img/360x150.jpg">  
                <!--<p>Онлайн телевиденье. Настройка на TV, iPad, Adnroid, STB.</p>-->
            </div>
            <div>
                <h2>IPTV</h2>
                <a role="button" href="#" class="btn btn-success">
                Подробнее...
            </a> 
            </div> 
        </div>

        <div class="flex_item thumbnail">
             <div>
                <img src="/wordpress/wp-content/themes/wiki/img/360x150.jpg">  
                <!--<p>Использование технологии WI-FI. Роутер в пользование БЕСПЛАТНО!</p>-->
            </div>
            <div>
                <h2>WI-FI</h2>
                <a role="button" href="#" class="btn btn-success">
                Подробнее...
            </a> 
            </div>
        </div>
        
        <div class="flex_item thumbnail">
            <div>
                <img src="/wordpress/wp-content/themes/wiki/img/360x150.jpg">  
                <!--<p>Файлообменный сервис на высокой скорости. Онлайн видео.</p>-->
            </div>
            <div>
                <h2>Торрент-трекер</h2>
                <a role="button" href="#" class="btn btn-success">
                    Подробнее...
                </a> 
            </div>     
        </div>

        <div class="flex_item thumbnail">
            <div>
                <img src="/wordpress/wp-content/themes/wiki/img/360x150.jpg">  
                <!--<p>Онлайн телевиденье. Настройка на TV, iPad, Adnroid, STB.</p>-->
            </div>
            <div>
                <h2>IPTV</h2>
                <a role="button" href="#" class="btn btn-success">
                Подробнее...
            </a> 
            </div> 
        </div>

        <div class="flex_item thumbnail">
             <div>
                <img src="/wordpress/wp-content/themes/wiki/img/360x150.jpg">  
                <!--<p>Использование технологии WI-FI. Роутер в пользование БЕСПЛАТНО!</p>-->
            </div>
            <div>
                <h2>WI-FI</h2>
                <a role="button" href="#" class="btn btn-success">
                Подробнее...
            </a> 
            </div>
        </div>
	</div>
    
    <?php /*Новостные блоки*/ ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6">
			<fieldset class="scheduler-border">
    			<legend class="scheduler-border">
                    <i class="fa fa-list-alt fa-lg"></i>
                    НОВОСТИ:</legend>
                <div class="news_list">
                    <?php 
					$query = new WP_Query( array(
					    'category_name' => 'news',
					    'posts_per_page' => 3,
					) );
					while($query->have_posts()) : $query->the_post();?>
						<h3>
                            <?php echo get_the_date() ?>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p>
                            <?php do_excerpt(get_the_excerpt(), 15); ?>
                            <a href="<?php the_permalink(); ?>"> >>></a>
                        </p>
                    
                    <hr class="hr">
				    <?php endwhile; ?>
				<h4><a href="/category/news/">>>> Все новости</a></h4>
                </div>
			</fieldset>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<fieldset class="scheduler-border">
    			<legend class="scheduler-border">
                    <i class="fa fa-cogs fa-lg"></i>
                    РАБОТЫ НА СЕТЯХ СВЯЗИ:
                </legend>
                <div class="news_list">
                    <?php 
					$query = new WP_Query( array(
					    'category_name' => 'works',
					    'posts_per_page' => 3,
					) );
					while($query->have_posts()) : $query->the_post();?>
						<h3>
                            <?php the_date() ?>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p>
                            <?php do_excerpt(get_the_excerpt(), 15); ?>
                            <a href="<?php the_permalink(); ?>"> >>></a>
                        </p>
                    <hr class="hr">
				    <?php endwhile; ?>
				    <h4><a href="/category/works/">>>> Все работы на сетях связи</a></h4>
                </div>
			</fieldset>
		</div>
	</div>
</div>

<?php get_footer();?>