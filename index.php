<?php include '../system/files/includes/head_php.php';?>

<!DOCTYPE html>
<html lang="ru-RU" prefix="og: http://ogp.me/ns#">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=8; IE=9">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Шоколадные инструменты</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<link href="css/drawer.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/main.css" type="text/css">
		
		
		<link rel="stylesheet" href="fonts/fonts.css" type="text/css">
		<link rel="stylesheet" href="https://cdn.plyr.io/2.0.13/plyr.css">
		<link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
		
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<?php include '../system/files/includes/head_html.php';?>
		
		<script>
			var kmacb_manager_class = "kmacb__manager-woman3",
      		kmacb_form_selector = ".call-form";
    	</script>
	</head>

	<body class="drawer drawer--left">
		<section class="mainScr">
		
			<button type="button" class="drawer-toggle drawer-hamburger hidden-xs">
			  <span class="sr-only">toggle navigation</span>
			  <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
			</button>
			<aside class="aside hidden-xs drawer-nav">
				<img src="img/logo.png" alt="logo" class="logo">
				
				<!--	menu starts	-->
				<div id="menu">
					<nav id="_menu" class="navbar navbar-default">
						<div class="text-center">
							<div class="collapse navbar-collapse" id="men">
								<ul class="nav navbar-nav text-center">
									<li class="first active"><a href="#about">о продукте<span class="sr-only">(current)</span></a></li><br>
									<li><a href="#feedbacks">отзывы</a></li><br>
									<li><a href="#video">видео обзор</a></li><br>
									<li><a href="#order">оформить заказ</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
				</div>
				<!--	menu ends	-->
				
				<button type="button" data-toggle="modal" data-target="#mainModal" class="btn btn-default btnForm upper call-form">заказать звонок</button>
			</aside>
			<div class="logoTop visible-xs text-center">
				<img src="img/logo.png" alt="logo" class="">
			</div>
			<div class="container mainPart">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
						<div class="wrapper text-center">
							<h1 class="big">Шоколадные инструменты</h1>
							<h4 class="upper">шоколадные наборы ручной работы</h4>
							<h1 class="price upper"><span class="zach"><span class="price_land_s4"><?=$land_default_prices['s4']?></span> <span class="price_land_curr"><?=$land_default_prices['curr']?></span> <span class="r"></span></span> <span class="coloured"><span class="price_land_s1"><?=$land_default_prices['s1']?></span> <span class="price_land_curr"><?=$land_default_prices['curr']?></span></span></h1>
							
							<div class="list">
								<div class="dot"></div>
								<p class="text">Оригинальный подарок</p>
							</div>
							<div class="list">
								<div class="dot"></div>
								<p class="text">Доставка по всей России</p>
							</div><br>
							
							<div class="leftSide hidden-xs">
								<div class="timer">
									<p class="timer__heading">До окончания акции осталось:</p>

									<div class="timer__item hours">
										05
									</div>
									<div class="timer__item minutes cent">
										47
									</div>
									<div class="timer__item seconds">
										29
									</div><br>
									<div class="text">Часов</div>
									<div class="text cent">Минут</div>
									<div class="text">Секунд</div>
								</div>

								<form class="text-center form" action="success.php" method="post" name="application">
									<div class="form-group form-group-lg">
										<input required class="form-control" name="name" placeholder="Имя">
										<input required type="tel" class="form-control phoneInp" name="phone" placeholder="Телефон">
										<select required name="country" class="form-select selectCountry country_select">
											<?=$country_list?>
										</select>
										
										<select required name="address" class="form-select selectAdress">
											<option selected>Стандарт</option>
											<option>Шериф</option>
											<option>Жби</option>
											<option>Микс</option>
											<option>Конструкторский</option>
											<option>Офисный</option>
											<option>Энергетический</option>
											<option>Дизайнерский</option>
										</select>
										<button type="submit" class="btn btn-default upper btnForm">заказать со скидкой 50%</button>
									</div>
									
									<input type="hidden" name="s1" class="price_field_s1" value="<?=$land_default_prices['s1']?>" />
									<input type="hidden" name="s2" class="price_field_s2" value="<?=$land_default_prices['s2']?>" />
									<input type="hidden" name="s3" class="price_field_s3" value="<?=$land_default_prices['s3']?>" />
									<?=$form_hidden_fields?>

								</form>
								<p class="podformoy">Сегодня уже купили: <span class="bold count-people">379</span> <span class="bold">человек</span></p>
							</div>
							<div class="rightSide">
								<div class="tovarAndOpis">
									<img src="img/presents/standart.jpg" alt="product" class="tovar">
									<p class="text name">Стандарт</p>
									<div class="sale">
										-50%
									</div>
								</div>
							</div>
							<div class="leftSide visible-xs">
								<div class="timer">
									<p class="timer__heading">До окончания акции осталось:</p>

									<div class="timer__item hours">
										05
									</div>
									<div class="timer__item minutes cent">
										47
									</div>
									<div class="timer__item seconds">
										29
									</div><br>
									<div class="text">Часов</div>
									<div class="text cent">Минут</div>
									<div class="text">Секунд</div>
								</div>

								<form class="text-center form" action="#" method="post" name="application">
									<div class="form-group form-group-lg">
										<input required class="form-control" name="name" placeholder="Имя">
										<input required type="tel" class="form-control phoneInp" name="phone" placeholder="Телефон">
										<select required name="country" class="form-select selectCountry country_select">
											<?=$country_list?>
										</select>
										
										<select required name="address" class="form-select selectAdress">
											<option>Стандарт</option>
											<option>Шериф</option>
											<option>Жби</option>
											<option>Микс</option>
											<option>Конструкторский</option>
											<option>Офисный</option>
											<option>Энергетический</option>
											<option>Дизайнерский</option>
										</select>
										<button type="submit" class="btn btn-default upper btnForm">заказать со скидкой 50%</button>
									</div>
									<input type="hidden" name="s1" class="price_field_s1" value="<?=$land_default_prices['s1']?>" />
									<input type="hidden" name="s2" class="price_field_s2" value="<?=$land_default_prices['s2']?>" />
									<input type="hidden" name="s3" class="price_field_s3" value="<?=$land_default_prices['s3']?>" />
									<?=$form_hidden_fields?>
								</form>
								<p class="podformoy">Сегодня уже купили: <span class="bold count-people">379</span> <span class="bold">человек</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="about" id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-5 hidden-xs">
						<img class="hidden-sm" src="img/image.jpg" alt="image">
						<img class="visible-sm" src="img/image1.jpg" alt="image">
					</div>
					<div class="col-lg-6 col-sm-7 col-xs-12">
						<h1>О продукте</h1>
						<hr>
						<p>Оригинальные шоколадные наборы в подарок – это беспроигрышный вариант для любого праздника. Какой еще презент может быть столь желанным, простым и универсальным?</p>

						<p>Только вкуснейший шоколадный набор ручной работы! Шоколад любят все – и дети, и взрослые, и женщины и мужчины, и босы, и их подчиненные.</p>

						<p>Именно поэтому подарочный шоколад купить можно для каждого.</p>

						<p>Это поистине уникальный и желанный презент, который, помимо прочего, поможет вам выделиться и подарить виновнику торжества здоровую порцию счастья.</p>

						<p>Мы доверяем Вам и не просим от Вас никакой предоплаты. Мы уважаем Ваше время, и поэтому все заказы отправляем в день оформления!  Доставка осуществляется курьерскими службами, охват более 100 городов России Оплата при получении и после проверки Вашего заказа!</p>
					</div>
					<div class="col-xs-12 visible-xs">
						<img src="img/image1.jpg" alt="image">
					</div>
				</div>
			</div>
		</section>
		
		<section class="posterBl text-center">
			<img src="img/poster.jpg" alt="poster">
		</section>
		
		<section class="suite" id="suite">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h1>Наборы</h1>
						<hr>
					</div>
					<div class="col-sm-4 col-xs-12">
						<article class="article">
							<img src="img/var1.jpg" alt="var">
							<h4 class="text-center">Шериф</h4>
							<p class="feed">Хотите попасть точно в цель и угадать с подарком, тогда набор шерифа – отличный вариант! Шоколадный пистолет, который не отличить от настоящего, обрадует любого любителя оружия, а жетон шерифа станет прекрасным дополнением композиции. Дарить пистолет – престижно, дарить вкусный пистолет – престижно и весело!</p>
						</article>						
					</div>
					<div class="col-sm-4 col-xs-12">
						<article class="article">
							<img src="img/var2.jpg" alt="var">
							<h4 class="text-center">Жби</h4>
							<p class="feed">Что может растопить железобетонный характер и удивить даже самого серьезного человека? Конечно же вкусный итальянский шоколад, который звонко ломается и пахнет ванилью! А если этот шоколад выглядит как настоящая арматура – вау-эффект гарантирован!</p>
						</article>						
					</div>
					<div class="col-sm-4 col-xs-12">
						<article class="article">
							<img src="img/var3.jpg" alt="var">
							<h4 class="text-center">Микс</h4>
							<p class="feed">Много небольших шоколадок в форме настоящих предметов, лампочки тюбика и крюка – такое надо дарить обязательно! Ведь не каждый день люди пьют чай, заедая шестигранником. Хотите Удивить человека – подарите ему микс шоколадных инструментов!</p>
						</article>						
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-4 col-xs-12">
						<article class="article">
							<img src="img/var4.jpg" alt="var">
							<h4 class="text-center">Конструкторский</h4>
							<p class="feed">Он конструктор,  инженер и просто хороший человек? Часто ли людям дарят шоколадный штанген-циркуль? Эти вопросы приводят к одному ответу – нужно дарить набор шоколадных инструментов «Конструкторский». Вкусный шоколад, оригинальное исполнение – такое сочетание не оставит равнодушным ни кого.</p>
						</article>						
					</div>
					<div class="col-sm-4 col-xs-12">
						<article class="article">
							<img src="img/var5.jpg" alt="var">
							<h4 class="text-center">Офисный</h4>
							<p class="feed">Когда сидишь в офисе на одном месте и занимаешься рутиной работой, любой знак внимание способен привнести ярких красок в жизнь. Как насчет шоколада? В форме ножниц и степлера? Вкусного тающего во рту темного шоколада, который, к тому же, является источником гормона радости!</p>
						</article>						
					</div>
					<div class="col-sm-4 col-xs-12">
						<article class="article">
							<img src="img/var6.jpg" alt="var">
							<h4 class="text-center">Энергетический</h4>
							<p class="feed">Энергия так и бьет ключом, но она не бесконечна, и конечно, необходимо подпитываться яркими эмоциями, положительными зарядами! Энергетический набор – это то, что надо, ведь дарить людям сладкие необычные подарки – это и есть счастье. Зажгите хорошее настроение шоколадными лампочками!</p>
						</article>						
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-4 col-xs-12">
						<article class="article">
							<img src="img/var7.jpg" alt="var">
							<h4 class="text-center">Стандарт</h4>
							<p class="feed">Нет ничего лучше, чем проверенные временем инструменты, не раз выручавшие нас по хозяйству. Представьте удивление человека, когда ему дарят давно знакомые и родные пассатижи, и вдруг оказывается, что их можно есть! Восторг ? Изумление? Это именно те чувства, которые вы прочтете в его глазах.</p>
						</article>						
					</div>
					<div class="col-sm-4 col-xs-12">
						<article class="article">
							<img src="img/var8.jpg" alt="var">
							<h4 class="text-center">Дизайнерский</h4>
							<p class="feed">Когда нужно дарить креативный подарок человеку, который сам ходячий креатив, можно и голову сломать! Даря набор «Дизайнерский», вы гарантированно удивите творческую личность, а может даже станете источником вдохновений на весь день. Не упустите шанс дарить сладкий подарок вашему Дизайнеру.</p>
						</article>						
					</div>
				</div>
			</div>
		</section>
		
		<section class="posterBl text-center">
			<img src="img/poster1.jpg" alt="poster">
		</section>
		
		<section class="feedbacks" id="feedbacks">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h1>Отзывы <span class="hidden-xs">покупателей</span></h1>
						<hr>
					</div>
					<div class="col-sm-4 col-xs-12">
						<article class="article">
							<div class="imgWrap">
								<img src="img/feed1.png" alt="feedImg" class="feedImg">
							</div>
							<h4>Алексей, 29 лет</h4>
							<p class="feed">Понравилась ваша задумка - делать шоколад в форме степлера) Интересно, оригинально, вкусно, буду рекомендовать друзьям и брать на подарки)) Спасибо за ностальгические воспоминания о детстве, которые пробудил во мне знакомый вкус)))</p>
						</article>						
					</div>
					<div class="col-sm-4 col-xs-12">
						<article class="article">
							<div class="imgWrap">
								<img src="img/feed2.png" alt="feedImg" class="feedImg">
							</div>
							<h4>Александра, 25 лет</h4>
							<p class="feed">Попробовала Вашу новинку - набор энергетический. Безумно вкусный шоколад, я даже не ожидала! Очень напомнил мне шоколад, который мне когда-то в детстве привозили из Австрии.</p>
						</article>						
					</div>
					<div class="col-sm-4 col-xs-12">
						<article class="article">
							<div class="imgWrap">
								<img src="img/feed3.png" alt="feedImg" class="feedImg">
							</div>
							<h4>Вадим, 32 года</h4>
							<p class="feed">Каждый день не поешь, но креативненько и относительно недорого для подарка, доволен))</p>
						</article>						
					</div>
				</div>
			</div>
		</section>
		
		<!-- <section class="video" id="video">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h1>Видео обзор</h1>
						<hr>
						<div class="videoBl">
							<div data-type="youtube" data-video-id="bTqVqk7FSmY"></div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		
		<section class="order" id="order">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h1>Оформить заказ</h1>
						<hr>
					</div>
					
					<div class="col-xs-12 text-center help">
						<div class="arse">
							<div class="mainWrap">
								<div class="iconWrap"><img src="img/icon1.png" alt="icon"></div>
							</div>
							<p class="text">Оставляете<br>
							заявку</p>
						</div>
						<div class="arse">
							<div class="mainWrap">
								<div class="iconWrap"><img src="img/icon2.png" alt="icon"></div>
							</div>
							<p class="text">подтверждаете<br>
							заказ</p>
						</div>
						<div class="arse">
							<div class="mainWrap">
								<div class="iconWrap"><img src="img/icon3.png" alt="icon"></div>
							</div>
							<p class="text">мы отправляем<br>заказ</p>
						</div>
						<div class="arse">
							<div class="mainWrap">
								<div class="iconWrap"><img src="img/icon4.png" alt="icon"></div>
							</div>
							<p class="text">прием и<br>
							оплата</p>
						</div>
						<div class="arse">
							<div class="mainWrap">
								<div class="iconWrap"><img src="img/icon5.png" alt="icon"></div>
							</div>
							<p class="text">заказ<br>
							получен</p>
						</div>
					</div>
					<div class="col-xs-12 text-center">
						<h3>Мы доставим Ваш заказ в любую точку России, СНГ и Европы!</h3>
					</div>
				</div>
			</div>
		</section>
		
		<div class="offerCopy" id="offerCopy">
			<div class="container mainPart">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
						<div class="wrapper text-center">
							<h1 class="big">Шоколадные инструменты</h1>
							<h4 class="upper">шоколадные наборы ручной работы</h4>
							<h1 class="price upper"><span class="zach"><span class="price_land_s4"><?=$land_default_prices['s4']?></span> <span class="price_land_curr"><?=$land_default_prices['curr']?></span> <span class="r"></span></span> <span class="coloured"><span class="price_land_s1"><?=$land_default_prices['s1']?></span> <span class="price_land_curr"><?=$land_default_prices['curr']?></span></span></h1>
							
							<div class="list">
								<div class="dot"></div>
								<p class="text">Оригинальный подарок</p>
							</div>
							<div class="list">
								<div class="dot"></div>
								<p class="text">Доставка по всей России</p>
							</div><br>
							
							<div class="leftSide hidden-xs">
								<div class="timer">
									<p class="timer__heading">До окончания акции осталось:</p>

									<div class="timer__item hours">
										05
									</div>
									<div class="timer__item minutes cent">
										47
									</div>
									<div class="timer__item seconds">
										29
									</div><br>
									<div class="text">Часов</div>
									<div class="text cent">Минут</div>
									<div class="text">Секунд</div>
								</div>

								<form class="text-center form" action="success.php" method="post" name="application">
									<div class="form-group form-group-lg">
										<input required class="form-control" name="name" placeholder="Имя">
										<input required type="tel" class="form-control phoneInp" name="phone" placeholder="Телефон">
										<select required name="country" class="form-select selectCountry country_select">
											<?=$country_list?>
										</select>
										
										<select required name="address" class="form-select selectAdress">
											<option>Стандарт</option>
											<option>Шериф</option>
											<option>Жби</option>
											<option>Микс</option>
											<option>Конструкторский</option>
											<option>Офисный</option>
											<option>Энергетический</option>
											<option>Дизайнерский</option>
										</select>
										<button type="submit" class="btn btn-default upper btnForm">заказать со скидкой 50%</button>
									</div>
									
									<input type="hidden" name="s1" class="price_field_s1" value="<?=$land_default_prices['s1']?>" />
									<input type="hidden" name="s2" class="price_field_s2" value="<?=$land_default_prices['s2']?>" />
									<input type="hidden" name="s3" class="price_field_s3" value="<?=$land_default_prices['s3']?>" />
									<?=$form_hidden_fields?>

								</form>
								<p class="podformoy">Сегодня уже купили: <span class="bold count-people">379</span> <span class="bold">человек</span></p>
							</div>
							<div class="rightSide">
								<div class="tovarAndOpis">
									<img src="img/presents/standart.jpg" alt="product" class="tovar">
									<p class="text name">Стандарт</p>
									<div class="sale">
										-50%
									</div>
								</div>
							</div>
							<div class="leftSide visible-xs">
								<div class="timer">
									<p class="timer__heading">До окончания акции осталось:</p>

									<div class="timer__item hours">
										05
									</div>
									<div class="timer__item minutes cent">
										47
									</div>
									<div class="timer__item seconds">
										29
									</div><br>
									<div class="text">Часов</div>
									<div class="text cent">Минут</div>
									<div class="text">Секунд</div>
								</div>

								<form class="text-center form" action="#" method="post" name="application">
									<div class="form-group form-group-lg">
										<input required class="form-control" name="name" placeholder="Имя">
										<input required type="tel" class="form-control phoneInp" name="phone" placeholder="Телефон">
										<select required name="country" class="form-select selectCountry country_select">
											<?=$country_list?>
										</select>
										
										<select required name="address" class="form-select selectAdress">
											<option>Стандарт</option>
											<option>Шериф</option>
											<option>Жби</option>
											<option>Микс</option>
											<option>Конструкторский</option>
											<option>Офисный</option>
											<option>Энергетический</option>
											<option>Дизайнерский</option>
										</select>
										<button type="submit" class="btn btn-default upper btnForm">заказать со скидкой 50%</button>
									</div>
									<input type="hidden" name="s1" class="price_field_s1" value="<?=$land_default_prices['s1']?>" />
									<input type="hidden" name="s2" class="price_field_s2" value="<?=$land_default_prices['s2']?>" />
									<input type="hidden" name="s3" class="price_field_s3" value="<?=$land_default_prices['s3']?>" />
									<?=$form_hidden_fields?>
								</form>
								<p class="podformoy">Сегодня уже купили: <span class="bold count-people">379</span> <span class="bold">человек</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		<footer class="footer text-center">
			<p><?php include '../system/files/includes/footer_txt.php';?></p>
			
			<a href="#" modal="polit">Политика конфиденциальности</a><br>
			<a href="#" modal="agreement">Пользовательское соглашение</a>
		</footer>
		<!-- <div class="show-message"></div> -->
		
			
		
		<div class="modal fade myModal" id="mainModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  	<div class="modal-dialog" role="document">
				<div class="modal-content">
			  		<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close.png" alt="закрыть"></span></button>
			  		</div>
					<div class="modal-body">
						<h1 class="big">Шоколадные инструменты</h1>
						<h4 class="upper">шоколадные наборы ручной работы</h4>
						<h1 class="price upper"><span class="zach"><span class="price_land_s4"><?=$land_default_prices['s4']?></span> <span class="price_land_curr"><?=$land_default_prices['curr']?></span> <span class="r"></span></span> <span class="coloured"><span class="price_land_s1"><?=$land_default_prices['s1']?></span> <span class="price_land_curr"><?=$land_default_prices['curr']?></span></span></h1>

						<div class="list">
							<div class="dot"></div>
							<p class="text">Оригинальный подарок</p>
						</div>
						<div class="list">
							<div class="dot"></div>
							<p class="text">Доставка по всей России</p>
						</div><br>

						<div class="leftSide hidden-xs">
							<div class="timer">
								<p class="timer__heading">До окончания акции осталось:</p>

								<div class="timer__item hours">
									05
								</div>
								<div class="timer__item minutes cent">
									47
								</div>
								<div class="timer__item seconds">
									29
								</div><br>
								<div class="text">Часов</div>
								<div class="text cent">Минут</div>
								<div class="text">Секунд</div>
							</div>

							<form class="text-center form" action="success.php" method="post" name="application">
								<div class="form-group form-group-lg">
									<input required class="form-control" name="name" placeholder="Имя">
									<input required type="tel" class="form-control phoneInp" name="phone" placeholder="Телефон">
									<select required name="country" class="form-select selectCountry country_select">
										<?=$country_list?>
									</select>

									<select required name="address" class="form-select selectAdress">Стандарт
											<option selected>Стандарт</option>
											<option>Шериф</option>
											<option>Жби</option>
											<option>Микс</option>
											<option>Конструкторский</option>
											<option>Офисный</option>
											<option>Энергетический</option>
											<option>Дизайнерский</option>
										</select>
									<button type="submit" class="btn btn-default upper btnForm">заказать со скидкой 50%</button>
								</div>

								<input type="hidden" name="s1" class="price_field_s1" value="<?=$land_default_prices['s1']?>" />
								<input type="hidden" name="s2" class="price_field_s2" value="<?=$land_default_prices['s2']?>" />
								<input type="hidden" name="s3" class="price_field_s3" value="<?=$land_default_prices['s3']?>" />
								<?=$form_hidden_fields?>

							</form>
							<p class="podformoy">Сегодня уже купили: <span class="bold count-people">379</span> <span class="bold">человек</span></p>
						</div>
						<div class="rightSide">
							<div class="tovarAndOpis">
								<img src="img/presents/standart.jpg" alt="product" class="tovar">
								<p class="text name">Стандарт</p>
								<div class="sale">
									-50%
								</div>
							</div>
						</div>
						<div class="leftSide visible-xs">
							<div class="timer">
								<p class="timer__heading">До окончания акции осталось:</p>

								<div class="timer__item hours">
									05
								</div>
								<div class="timer__item minutes cent">
									47
								</div>
								<div class="timer__item seconds">
									29
								</div><br>
								<div class="text">Часов</div>
								<div class="text cent">Минут</div>
								<div class="text">Секунд</div>
							</div>

							<form class="text-center form" action="#" method="post" name="application">
								<div class="form-group form-group-lg">
									<input required class="form-control" name="name" placeholder="Имя">
									<input required type="tel" class="form-control phoneInp" name="phone" placeholder="Телефон">
									<select required name="country" class="form-select selectCountry country_select">
										<?=$country_list?>
									</select>

									<select required name="address" class="form-select selectAdress">
											<option>Стандарт</option>
											<option>Шериф</option>
											<option>Жби</option>
											<option>Микс</option>
											<option>Конструкторский</option>
											<option>Офисный</option>
											<option>Энергетический</option>
											<option>Дизайнерский</option>
										</select>
									<button type="submit" class="btn btn-default upper btnForm">заказать со скидкой 50%</button>
								</div>
								<input type="hidden" name="s1" class="price_field_s1" value="<?=$land_default_prices['s1']?>" />
								<input type="hidden" name="s2" class="price_field_s2" value="<?=$land_default_prices['s2']?>" />
								<input type="hidden" name="s3" class="price_field_s3" value="<?=$land_default_prices['s3']?>" />
								<?=$form_hidden_fields?>
							</form>
							<p class="podformoy">Сегодня уже купили: <span class="bold count-people">379</span> <span class="bold">человек</span></p>
						</div>
					</div>
				</div>
		  	</div>
		</div>
		
		
	
		<div class="modal fade" id="thanks3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content text-center">
					<div id="thanks3_1">
						<p>Спасибо за заявку. Наш сотрудник свяжется с вами в ближайшее время.</p>
						<button type="button" data-dismiss="modal" aria-label="Close" style="background-color: #f58634;" class="close btn_submit btn btn-default">Закрыть</button>
					</div>
				</div>
			</div>
		</div>



		
		
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.js"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/drawer.min.js" charset="utf-8"></script>


		
		<script src="js/timer.min.js"></script>
		<!-- <script src="js/count.min.js"></script> -->
		<script src="https://cdn.plyr.io/2.0.13/plyr.js"></script>
		<script src="js/init.min.js"></script>
		<?php include '../system/files/includes/footer_html.php';?>
	</body>
</html>
<?php include '../system/files/includes/footer_php.php';?>