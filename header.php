<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php if (is_front_page()) : ?>
		<title>
			<?php bloginfo('name'); ?>
		</title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php else : ?>
		<title>
			<?php echo trim(wp_title('', false)); ?>｜
			<?php bloginfo('name'); ?>
		</title>
		<meta name="description" content="<?php echo trim(wp_title('', false)); ?>｜<?php bloginfo('description'); ?>">
	<?php endif; ?>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="email=no,telephone=no,address=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<!-- favicon -->
	<link rel="icon" href="/icon.svg" type="image/svg+xml">
	<!-- css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css?<?php echo date('YmdHi', filemtime(get_template_directory() . '/dist/css/style.css')); ?>">
	<!-- swiper -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/swiper.min.css?<?php echo date('YmdHi', filemtime(get_template_directory() . '/dist/css/swiper.min.css')); ?>">
	<!-- fontawsome -->
	<link href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" rel="stylesheet">
	<!-- form ajax -->
	<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
	<!-- jsconcent -->
	<!-- <link rel="stylesheet" type="text/css"
		href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" /> -->
	<?php wp_head(); ?>
</head>


<?php get_header(); ?>

<body class="<?php body_class(); ?>" id="<?php echo esc_attr($post->post_name); ?>">
	<div class="wrapper">
		<!-- header -->
		<header id="header" class="header">
			<div class="headerLogo">
				<a href="<?php echo esc_url(home_url()); ?>/">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/common/" alt="">
				</a>
			</div>

			<!-- navigation -->
			<nav id="headerNav" class="headerNav">
				<div class="headerNav__container">
					<ul class="headerNav__containerList">
						<li class="headerNav__containerListItem">
							<a href="<?php echo esc_url(home_url()); ?>/about/">
								<span class="jp">私たち</span><span class="en">About</span>
							</a>
						</li>
						<li class="headerNav__containerListItem">
							<a href="<?php echo esc_url(home_url()); ?>/recruit/">
								<span class="jp">採用情報</span><span class="en">Recruit</span>
							</a>
						</li>
						<li class="headerNav__containerListItem">
							<a href="<?php echo esc_url(home_url()); ?>/contact/">
								<span class="jp">お問い合わせ</span><span class="en">Contact</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>

			<div class="headerContent">
				<!-- menu -->
				<div class="headerContent__menu">
					<div id="headerContent__menuBox" class="headerContent__menuBox">
						<span class="menuTop"></span>
						<span class="menuCenter"></span>
						<span class="menuBottom"></span>
					</div>
					<span class="menuText">Menu</span>
				</div>

			</div>




		</header>