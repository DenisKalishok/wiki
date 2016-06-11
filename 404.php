<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-sm-9">
            <fieldset class="scheduler1-border">
    			<legend class="scheduler-border">
                    <i class="fa fa-exclamation-circle fa-lg"></i>
                    ОШИБКА 404 - Страница не найдена
                </legend>
                <div class="error">
                    <h5>Вы могли здесь оказаться по нескольким причинам:</h5>
                    <p>1. Скорее всего URL был вписан с ошибкой;</p>
                    <p>2. Страница, которую вы ищите, была перенесена или переименована;</p>
                    <p>3. Страница возможно была удалена.</p>
                    Вернуться на <a href="<?php bloginfo('home'); ?>" >Главную страницу.</a>
                </div>
			</fieldset>
		</div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <?php get_sidebar(); ?>
        </div>
	</div>
</div>

<?php get_footer(); ?>

<!--
<div class="container">
    <h3>В зону обслуживания Интернет-провайдера WIKILINK входят 5 микрорайонов г.Бреста:</h3>
    <ul class="nav nav-tabs">
        <li class="active">
            <a data-toggle="tab" href="#menu1">
                <i style="color: #005a88;" class="fa fa-building-o fa-lg"></i>КОВАЛЁВО:
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#menu2">
                <i style="color: #a52a2a;" class="fa fa-building-o fa-lg"></i>ВУЛЬКА:
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#menu3">
                <i style="color: #057637;" class="fa fa-building-o fa-lg"></i>ЮЖНЫЙ:
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#menu4">
                <i style="color: #ff4f00;" class="fa fa-building-o fa-lg"></i>ЮГО-ЗАПАД:
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#menu5">
                <i style="color: #464646;" class="fa fa-building-o fa-lg"></i>ЦЕНТР:
            </a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="menu1" class="tab-pane fade in active">
            <br>
            <div class="service_zone">
                <div style="text-align: center;">
                    <span style="color: #005a88;"><strong>УЛ. 28 ИЮЛЯ</strong></span>
                    <hr />
                    1A, 1Б, 1В, 3А, 3б, 3в, 3г, 29, 31, 33а, 33б, 35 ,37, 45, 45/1, 45/2
                </div>
                <div style="text-align: center;">
                    <span style="color: #005a88;"><strong>УЛ. ВОЛГОГРАДСКАЯ</strong></span>
                    <hr />
                    1, 2, 3, 6, 7а, 8, 9, 11, 12, 14, 18, 22, 28, 30, 34, 36, 38, 40, 40/1, 44
                </div>
                    <div style="text-align: center;">
                    <span style="color: #005a88;"><strong>УЛ. КАРЬЕРНАЯ</strong></span>
                    <hr />
                    14, 14/1, 14/2
                </div>
                <div style="text-align: center;">
                    <span style="color: #005a88;"><strong>УЛ. ОКТЯБРЬСКОЙ РЕВОЛЮЦИИ</strong></span>
                    <hr />
                    1, 3, 5, 7, 7а, 9, 17, 19, 21, 23, 25, 27/1, 31, 33, 35, 37
                </div>
                <div style="text-align: center;">
                    <span style="color: #005a88;"><strong>УЛ. СУВОРОВА</strong></span>
                    <hr />
                    59, 63, 63/3, 63/4, 65, 65/1, 65/2, 65/3, 67, 71, 75, 75а, 77, 79, 81, 83, 85, 87, 89, 90/1, 90/2, 90/3, 90/4, 90/5, 90/6, 91, 93, 95, 96, 96/1, 96/2, 96/3, 97, 99, 101, 103, 103а, 104, 106, 108, 110, 112, 114, 116
                </div>
                <div style="text-align: center;">
                    <span style="color: #005a88;"><strong>УЛ. ЯСЕНЕВАЯ</strong></span>
                    <hr />
                    5/2, 8, 8/1, 10, 10/1, 12, 12/1, 14, 18, 20, 20а
                </div>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <br>
            <div class="service_zone">
                <div style="text-align: center;">
                    <span style="color: #a52a2a;"><strong>УЛ. ВУЛЬКОВСКАЯ</strong></span>
                    <hr />
                    54, 56, 57, 58, 59, 61, 62, 64, 65, 66, 67, 69, 70, 72, 73, 74, 75, 76, 77, 80, 82, 84, 86, 90, 92, 94, 96, 98, 98/1, 100, 100/1, 102, 104, 106, 106/1, 108, 108/1, 112, 114, 116, 118, 120, 122
                </div>
                <div style="text-align: center;">
                    <span style="color: #a52a2a;"><strong>УЛ. КРИШТОФОВИЧА</strong></span>
                    <hr />
                    2, 2а, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 22/1, 22/2
                </div>
                <div style="text-align: center;">
                    <span style="color: #a52a2a;"><strong>УЛ. ПОЛЕВАЯ</strong></span>
                    <hr />
                    52, 54, 56, 58, 60, 62
                </div>
                <div style="text-align: center;">
                    <span style="color: #a52a2a;"><strong>УЛ. РЯБИНОВАЯ</strong></span>
                    <hr />
                    1, 3, 4, 6, 7, 11, 14, 15, 18, 19, 20, 23/2, 27, 28, 30, 31, 32, 35, 39, 40, 41, 42, 43, 44
                </div>
                <div style="text-align: center;">
                    <span style="color: #a52a2a;"><strong>УЛ. СЯБРОВСКАЯ</strong></span>
                    <hr /> 
                    53, 55, 57, 59, 61, 63, 67, 69, 71, 73, 75, 77, 79, 81, 83, 85, 89, 91, 93, 95, 97, 99, 101, 103, 105, 107, 109, 111, 113, 115  
                </div>
            </div>
        </div>
        <div id="menu3" class="tab-pane fade">
            <br>
            <div class="service_zone">
                <div style="text-align: center;">
                    <span style="color: #057637;"><strong>УЛ. ГВАРДЕЙСКАЯ</strong></span>
                    <hr />
                    1, 6, 7, 8, 8a, 10, 11, 12
                </div>
                <div style="text-align: center;">
                    <span style="color: #057637;"><strong>УЛ. ЖУКОВА</strong></span>
                    <hr />
                    7, 7/1, 8, 10, 11, 12, 13, 13/1, 14, 15, 15a, 16, 17, 17a, 18, 19, 21, 23
                </div>
                <div style="text-align: center;">
                    <span style="color: #057637;"><strong>ПЕР. ЖУКОВА</strong></span>
                    <hr />
                    1, 2, 3, 6, 8, 10
                </div>
                <div style="text-align: center;">
                    <span style="color: #057637;"><strong>УЛ. ЗАЩИТНИКОВ ОТЕЧЕСТВА</strong></span>
                    <hr />
                    1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12, 13, 15, 17
                </div>
                <div style="text-align: center;">
                    <span style="color: #057637;"><strong>УЛ. ПРОНЯГИНА</strong></span>
                    <hr />
                    54, 54/1, 54/2, 56, 56/1, 56/2
                </div>
                <div style="text-align: center;">
                    <span style="color: #057637;"><strong>УЛ. РОКОССОВСКОГО</strong></span>
                    <hr />
                    1а, 1б, 1в, 2, 3, 4, 6, 7, 8, 9, 10, 11, 13, 14, 15, 16
                </div>
            </div>
        </div>
        <div id="menu4" class="tab-pane fade">
            <br>
            <div class="service_zone">
                <div style="text-align: center;">
                    <span style="color: #ff4f00;"><strong>ВАРШАВСКОЕ ШОССЕ</strong></span>
                    <hr />
                    15, 27, 39, 51а, 55а
                </div>
                <div style="text-align: center;">
                    <span style="color: #ff4f00;"><strong>УЛ. ГРИБОЕДОВА</strong></span>
                    <hr />
                    3, 5, 9, 11, 15, 17, 21, 25, 27, 29, 33, 35, 37
                </div>
                <div style="text-align: center;">
                    <span style="color: #ff4f00;"><strong>УЛ. ЕКЕЛЬЧИКА</strong></span>
                    <hr />
                    1, 5, 7, 11
                </div>
                <div style="text-align: center;">
                    <span style="color: #ff4f00;"><strong>УЛ. КОЛЕСНИКА</strong></span>
                    <hr />
                    1, 2, 4, 7, 8, 9, 10, 15, 17
                </div>
                <div style="text-align: center;">
                    <span style="color: #ff4f00;"><strong>УЛ. КРАСНОЗНАМЕННАЯ</strong></span>
                    <hr />
                    34, 36, 38
                </div>
                <div style="text-align: center;">
                    <span style="color: #ff4f00;"><strong>УЛ. МАХНОВИЧА</strong></span>
                    <hr />
                    15, 16, 17, 18, 19, 23, 25, 27, 31, 33
                </div>
                <div style="text-align: center;">
                    <span style="color: #ff4f00;"><strong>УЛ. МОРОЗОВА</strong></span>
                    <hr />
                    5, 9, 11
                </div>
                <div style="text-align: center;">
                    <span style="color: #ff4f00;"><strong>УЛ. ПОДГОРОДСКАЯ</strong></span>
                    <hr />
                    171, 173
                </div>
                <div style="text-align: center;">
                    <span style="color: #ff4f00;"><strong>УЛ. САЛЬНИКОВА</strong></span>
                    <hr />
                    2, 4, 6, 8, 10, 12, 16, 18, 20, 22, 24, 26, 34, 31, 36
                </div>
            </div>
        </div>
        <div id="menu5" class="tab-pane fade">
        <br>
          <div class="service_zone">
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. 17 СЕНТЯБРЯ</strong></span>
                    <hr />
                    30
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>Б-Р КОСМОНАВТОВ</strong></span>
                    <hr />
                    10, 18, 24, 30, 33, 36, 49/51, 63, 64, 65, 66, 68, 69, 71, 73, 75, 90, 92, 94, 96, 97, 99, 115, 116, 118, 118/1, 120
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>Б-Р ШЕВЧЕНКО</strong></span>
                    <hr />
                    2, 3, 5, 7, 8, 8/1, 9, 10, 11
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. БУДЕННОГО</strong></span>
                    <hr />
                    20, 40, 65
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. ВОРОВСКОГО</strong></span>
                    <hr />
                    15/1, 17, 21, 23, 25, 27, 29
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. ГОГОЛЯ</strong></span>
                    <hr />
                    57, 59, 61, 61/1, 63/1, 65, 66, 67, 68, 72, 73, 76, 77, 78, 80, 82
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. ГОРЬКОГО</strong></span>
                    <hr />
                    4, 17, 27, 33
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. ДЗЕРЖИНСКОГО</strong></span>
                    <hr />
                    3, 48, 49, 63a
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. ИНТЕРНАЦИОНАЛЬНАЯ</strong></span>
                    <hr />
                    2, 5, 7, 15, 19, 21, 23, 25, 38, 38/1, 57, 59, 61, 63
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. КАРБЫШЕВА</strong></span>
                    <hr />
                    6, 14, 35, 37, 38, 42, 65a, 67/1, 69, 74, 76/1, 78, 80, 84, 85, 98, 100, 101, 103, 105, 112, 113
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. КАРЛА МАРКСА</strong></span>
                    <hr />
                    36, 77, 82, 89, 89/1
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. КИРОВА</strong></span>
                    <hr />
                    15, 16, 16/1, 20, 28, 37, 40, 46, 48, 50, 52, 52/1, 62, 64, 82, 86, 91, 103а, 103б, 103в, 107, 109, 116, 118, 129, 131, 133, 133/1, 135, 137, 155, 161, 169
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. КОМСОМОЛЬСКАЯ</strong></span>
                    <hr />
                    44, 46, 56, 52/1, 52/2, 52/3
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. КРАСНОЗНАМЕННАЯ</strong></span>
                    <hr />
                    2, 7, 9/1, 9/2, 9/3, 11, 13
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. КУЙБЫШЕВА</strong></span>
                    <hr />
                    13/2 (торговые ряды "Элма"), 28/1, 30, 38/1, 40, 55, 90
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. ЛЕНИНА</strong></span>
                    <hr />
                    35, 48
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. МАЛАЯ</strong></span>
                    <hr />
                    1, 3, 3/2, 5
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. МАШЕРОВА</strong></span>
                    <hr />
                    11, 15, 17, 26, 30, 34, 36, 39, 40, 40/1, 42, 46, 53, 54, 57, 57/1, 59, 59/1, 61, 63, 64, 65, 66, 67, 70, 72, 76, 80, 82, 84, 86, 88, 90, 92, 94, 96
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. МАЯКОВСКОГО</strong></span>
                    <hr />
                    6, 8, 11, 17/1, 17/2, 17/3, 19/1, 19/2, 19/3, 21, 21/1, 47, 49, 58
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. МЕНЖИНСКОГО</strong></span>
                    <hr />
                    7, 10, 12/1, 16, 30
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. МИЦКЕВИЧА</strong></span>
                    <hr />
                    44, 57, 62, 68, 68/1
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. МОПРА</strong></span>
                    <hr />
                    1, 3, 3/1, 3/2, 4, 4/1, 5, 5/2, 6, 6/1, 6/2, 8, 10, 10/1, 10/2, 12, 17, 19
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. НАБЕРЕЖНАЯ</strong></span>
                    <hr />
                    2, 4, 4/1, 6, 8, 8/1, 14, 16, 16/1, 22, 24, 26, 28, 30, 32, 32/1, 32/2, 34, 34/1, 36, 36/1, 36/2, 38, 40, 40/1
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. ОРДЖОНИКИДЗЕ</strong></span>
                    <hr />
                    37, 39
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. ОСТРОВСКОГО</strong></span>
                    <hr />
                    1, 3
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. ПУШКИНСКАЯ</strong></span>
                    <hr />
                    43, 50, 56, 58, 59, 78, 80, 82, 82/1
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. СОВЕТСКАЯ</strong></span>
                    <hr />
                    41, 48, 54, 53, 56, 58, 67, 68 (ТЦ Атис Холл), 76, 80, 102, 104, 108, 132, 134
                </div>
                <div style="text-align: center;">
                    <span style="color: #464646;"><strong>УЛ. ХАЛТУРИНА</strong></span>
                    <hr />
                    2, 2/1(4 подъезд), 3, 5, 10, 14, 31, 31A, 31Б, 31В
                </div>
            </div>
        </div>
    </div>
</div>-->

