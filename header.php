<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
	<head>
		<meta charset="<?php bloginfo('charset'); ?>"> 
		<title><?php echo wp_get_document_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<?php wp_head(); ?>
 	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8  hidden-xs">
					<div class="row inline_left">
				        <div class="logo">
				            <a href="<?php bloginfo('url')?>">
								<img src="<?php echo get_theme_mod('logo_title_setting') ?>"/>
				            </a>
				        </div>
				        <div class="vertical_line"></div> 
				        <div class="text_info">
				            <a href="/контакты/">
								<span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x" style="color: #197834"></i>
                                    <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span>
                                <?php echo get_option('phone_setting');?>
                            </a>
                            <a href="/контакты/">
				       	        <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x" style="color: #197834"></i>
                                    <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
								</span>
					      	    <?php echo get_option('email_setting');?>
                            </a>	
				        </div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                    <div class="row inline_right">
                        <div class="vertical_line"></div>
                        <div class="private_cabinet">
                            <a href="#myModal" data-toggle="modal">
                                <i class="fa fa-user"></i>
                                Кабинет пользователя
                            </a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
		<div class="container" id="header_nav">
			<div class="row">
				<nav class="navbar navbar-default navbar-static-top" role="navigation">
					<div class="container">
						<div class="row">
							<div class="navbar-header">
								<div class="hidden-lg  hidden-md hidden-sm">

									<a class="navbar-brand" href="<?php bloginfo('url')?>">
										<img src="<?php echo get_theme_mod('logo_menu_setting') ?>"/>
									</a>
									<div class="private_cabinet_menu">
										<a href="#myModal" data-toggle="modal">
											<i class="fa fa-user"></i>
											Кабинет пользователя
								    	</a>
									</div>
								</div>
								
 								<button type="button" class="navbar-toggle" data-toggle="collapse"
 								 data-target=".navbar-ex1-collapse">
                                    <div>
                                        <span>Меню</span>
                                    </div> 
 							        <div>
                                        <span class="icon-bar"></span>
 							            <span class="icon-bar"></span>
 							            <span class="icon-bar"></span>
                                    </div>
								</button>
 							</div>
 							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<?php if (has_nav_menu('header_menu')) : ?>
									<?php wp_nav_menu( array( 
									'menu' => 'header_menu',
	  								'container' => false, 
	 								'depth' => 0,
	  								'menu_class' => 'nav navbar-nav',
	 								'walker' => new BootstrapNavMenuWalker()
									)); ?> 
								<?php endif; ?>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>

<!-- Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
          		<button type="button" class="close" data-dismiss="modal">
          			<i class="fa fa-close"></i>
          		</button>
          		<h4 class="modal-title">Авторизация</h4>
        	</div>
        	<div class="modal-body">
          		<form>
          			<div class="form-group">
   						<label for="input_email">Логин</label>
    					<input type="email" class="form-control" id="input_email" placeholder="Email">
 					</div>
					<div class="form-group">
  			  			<label for="input_password">Пароль</label>
 			   			<input type="password" class="form-control" id="input_password" placeholder="Password">
 					</div>
 					<hr>
 					<div class="text-right">
 						<button type="submit" class="btn btn-success">Отправить</button>
 						<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
 					</div>
          		</form>
        	</div>
      	</div>
    </div>
</div>