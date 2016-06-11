<?php /*файл отвечающий за вывод отвельной страницы например о компании*/ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="page">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h2><?php the_title(); ?></h2>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>		
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>