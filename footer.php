            <div class="container footer">
				<div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h5><strong>Адресс</strong></h5>
                        <div class="container_flex hi-icon-effect-3 hi-icon-effect-3b">
                            <a href="/контакты/">
                                <i class="hi-icon fa fa-building-o"></i>
                                <?php echo get_option('address_setting');?>
                            </a>
                        </div>
                    </div>	
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h5><strong>Мы в социальных сетях</strong></h5>
                        <div class="container_flex hi-icon-effect-3 hi-icon-effect-3b">
                            <a href="https://vk.com/wikilink">
                                <i class="hi-icon fa fa-vk"></i>
                                VKontakte
                            </a>
                            <a href="https://www.youtube.com/channel/UCfpArsEqDrfLOxH-OY37VXQ">
                                <i class="hi-icon fa fa-youtube"></i>
                                YouTube
                            </a>
                            <a href="#">
                                <i class="hi-icon fa fa-facebook"></i>
                                Facebook
                            </a>
                            <a href="#">
                                <i class="hi-icon fa fa-twitter"></i>
                                Twitter
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h5><strong>Call-центр</strong></h5>
                        <div class="container_flex hi-icon-effect-3 hi-icon-effect-3b">
                            <a href="/контакты/">
                                <i class="hi-icon fa fa-phone"></i>
                                <?php echo get_option('phone_setting');?>
                            </a>
                            <a href="/контакты/">
                                <i class="hi-icon fa fa-envelope"></i>
                                <?php echo get_option('email_setting');?>
                            </a>
                            <a href="/контакты/">
                                <i class="hi-icon fa fa fa-skype"></i>
                                <?php echo get_option('skype_setting');?>
                            </a>
                            <a href="/контакты/">
                                <i class="hi-icon fa fa-whatsapp"></i>
                                <?php echo get_option('viber_setting');?>
                            </a>
                        </div>
                    </div>
                    <div class="text-right">
                        <i id="up_button" class="fa fa-arrow-circle-up fa-3x" aria-hidden="true"></i>
                    </div>
                    
                </div>
				<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
						<?php echo get_option('company_setting');?>
                    </div>
				</div>
			</div>
	</body>
</html>