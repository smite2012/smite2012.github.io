<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Title</title>
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta property="og:image" content="path/to/image.jpg">
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#000">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#000">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#000">
		
	</head>
	<body>
		<div class="preloader">
			<div class="pulse"></div>
		</div>
		<?php get_header();?>
		<div class="wrapper">
			<section id="as">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="section_head">
								<div class="heading_wrap">
									<h1><?php
										$idObj = get_category_by_slug('s_about');
										$id = $idObj->term_id;
										echo get_cat_name($id);
										?></h1>
										<div class="heading">
											<div class="line"></div>
										</div>
								</div>
								<div class="paragraph_wrap">
									<p><?php echo category_description($id); ?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">

						<?php if ( have_posts() ) : query_posts('cat=' . $id);
						while (have_posts()) : the_post(); 	?>
						<?php the_content(); ?>
						<?php  endwhile; endif; wp_reset_query(); ?>

						
						
					</div>
				</div>
			</section>
			<section id="video">
				
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<div class="left_wrap">
							<div class="left">
								<?php if ( have_posts() ) : query_posts('p=22');
								while (have_posts()) : the_post(); 	?>
								<div class="h3_wrap">
									<h3><?php the_title(); ?></h3>
								</div>
								<div class="p_wrap">
									<p><?php the_content(); ?></p>
								</div>
								<?php  endwhile; endif; wp_reset_query(); ?>
								<div class="button_wrap">
									<button>PLAY NOW</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 align-items-center">
						<div class="video_wrap" >
							
							<?php if ( have_posts() ) : query_posts('p=24');
						while (have_posts()) : the_post(); 	?>	
					<?php the_content(); ?>
					<?php  endwhile; endif; wp_reset_query(); ?>
							
						</div>
						<div class="video_play_wrap" >
								<div class="video_play">
									<div class="playpause">
									<i class="pe-7s-play"></i>
								</div>
								</div>
							</div>
					</div>
				</div>
			</section>
			<section id="ow" class="s_portfolio">
				<div class="white">
					<div class="row">
						<div class="col-12">
							<div class="section_head">
								<div class="heading_wrap">
									<h1><?php
							$idObj = get_category_by_slug('s_works');
							$id = $idObj->term_id;
							echo get_cat_name($id);
							?></h1>
							<div class="heading">
											<div class="line"></div>
										</div>
								</div>
								<div class="paragraph_wrap">
									<p><?php echo category_description($id); ?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="p_nav">
								<div class="nav_wrapper">
									<nav >
										<ul>
											<li class="filter li_active" data-filter="all">ALL PROJECTS</li>
											<li class="filter" data-filter=".PHOTOGRAPHY">PHOTOGRAPHY</li>
											<li class="filter" data-filter=".WEB_DESIGN">WEB DESIGN</li>
											<li class="filter" data-filter=".BRANDING">BRANDING</li>
											<li class="filter" data-filter=".MOBILE_APP">MOBILE APP</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
					<div id="portfolio_grid">
						<?php if ( have_posts() ) : query_posts('cat=' . $id);
						while (have_posts()) : the_post(); 	?>

						<div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 <?php
								$tags = wp_get_post_tags($post->ID);
								if ($tags) {
									foreach($tags as $tag) {
										echo ' ' . $tag->name;
									}
								}
								?>">
							<div class="p_item_wrap">
								<?php the_post_thumbnail(array('full')); ?>
								<div class="port_item_cont">
									<h3><?php the_title(); ?></h3>
									<p><?php the_excerpt(); ?></p>
									<a href="#" class="popup_content">Watch</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3><?php the_title(); ?></h3>
											<p><?php the_content(); ?></p>
											<img src="<?php
												$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
												echo $large_image_url[0];
												?>" alt="<?php the_title(); ?>" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php  endwhile; endif; wp_reset_query(); ?>
						<!-- <div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 category-1">
							<div class="p_item_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p1.jpg" alt="">
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/p1.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 category-1">
							<div class="p_item_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p2.jpg" alt="">
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/p2.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 category-1">
							<div class="p_item_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p3.jpg" alt="">
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/p3.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 category-1">
							<div class="p_item_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p4.jpg" alt="">
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/p4.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 category-1">
							<div class="p_item_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p5.jpg" alt="">
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/p5.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 category-1">
							<div class="p_item_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p6.jpg" alt="">
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/p6.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 category-1">
							<div class="p_item_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p7.jpg" alt="">
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/p7.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 category-1">
							<div class="p_item_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p8.jpg" alt="">
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/p8.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 category-1">
							<div class="p_item_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p9.jpg" alt="">
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/p9.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 category-1">
							<div class="p_item_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p10.jpg" alt="">
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/p10.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 category-1">
							<div class="p_item_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p11.jpg" alt="">
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/p11.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 category-1">
							<div class="p_item_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p12.jpg" alt="">
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/p12.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 category-1">
							<div class="p_item_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p13.jpg" alt="">
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/p13.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 category-1">
							<div class="p_item_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p14.jpg" alt="">
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/p14.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="mix col-12 col-sm-12 col-md-2 col-lg-2 portfolio_item col-xl-2 category-1">
							<div class="p_item_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/img/p15.jpg" alt="">
								<div class="port_item_cont">
									<h3>Заголовок работы</h3>
									<p>Описание работы</p>
									<a href="#" class="popup_content">Посмотреть</a>
								</div>
								<div class="hidden">
									<div class="podrt_descr">
										<div class="modal-box-content">
											<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
											<h3>Заголовок работы</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
											<img src="<?php echo get_template_directory_uri(); ?>/img/p15.jpg" alt="Alt" />
										</div>
									</div>
								</div>
							</div>
						</div> -->
						
					</div>
				</div>
			</section>
			<section class="clients" style="background: url(<?php echo get_template_directory_uri(); ?>/img/ny.jpg);">
				<div class="bl_bg">
					<div class="container">
						<div id="slider">
							<!-- Slides -->
							<div class="item">
								<div class="client_wrap">
									<div class="client">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
												<div class="client_img_wrap">
													<div class="bg_img">
														<img src="<?php echo get_template_directory_uri(); ?>/img/bear.png" alt="">
													</div>
													<div class="text_wrap">
														<span>themeforest</span>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
												<div class="client_img_wrap">
													<div class="bg_img">
														<img src="<?php echo get_template_directory_uri(); ?>/img/fish.png" alt="">
													</div>
													<div class="text_wrap">
														<span>graphicriver</span>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
												<div class="client_img_wrap">
													<div class="bg_img">
														<img src="<?php echo get_template_directory_uri(); ?>/img/bee.png" alt="">
													</div>
													<div class="text_wrap">
														<span>videohive</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="client_wrap">
									<div class="client">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
												<div class="client_img_wrap">
													<div class="bg_img">
														<img src="<?php echo get_template_directory_uri(); ?>/img/bear.png" alt="">
													</div>
													<div class="text_wrap">
														<span>graphicriver</span>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
												<div class="client_img_wrap">
													<div class="bg_img">
														<img src="<?php echo get_template_directory_uri(); ?>/img/fish.png" alt="">
													</div>
													<div class="text_wrap">
														<span>videohive</span>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
												<div class="client_img_wrap">
													<div class="bg_img">
														<img src="<?php echo get_template_directory_uri(); ?>/img/bee.png" alt="">
													</div>
													<div class="text_wrap">
														<span>themeforest</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="client_wrap">
									<div class="client">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
												<div class="client_img_wrap">
													<div class="bg_img">
														<img src="<?php echo get_template_directory_uri(); ?>/img/bear.png" alt="">
													</div>
													<div class="text_wrap">
														<span>videohive</span>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
												<div class="client_img_wrap">
													<div class="bg_img">
														<img src="<?php echo get_template_directory_uri(); ?>/img/fish.png" alt="">
													</div>
													<div class="text_wrap">
														<span>graphicriver</span>
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
												<div class="client_img_wrap">
													<div class="bg_img">
														<img src="<?php echo get_template_directory_uri(); ?>/img/bee.png" alt="">
													</div>
													<div class="text_wrap">
														<span>themeforest</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<section id="wwa">
				<div class="row">
					<div class="col-12">
						<div class="section_head">
							<div class="heading_wrap">
								<h1><?php
							$idObj = get_category_by_slug('s_who');
							$id = $idObj->term_id;
							echo get_cat_name($id);
							?></h1>
							<div class="heading">
											<div class="line"></div>
										</div>
							</div>
							<div class="paragraph_wrap">
								<p><?php
					echo category_description($id);
					?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Slider main container -->
					<div class="swiper-container">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->
							<?php if ( have_posts() ) : query_posts('cat=' . $id);
						while (have_posts()) : the_post(); 	?>
						<?php the_content(); ?>
						<?php  endwhile; endif; wp_reset_query();?>

							
							
							
						</div>
						
					</div>
					
				</div>
			</section>
			<section id="sf">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="head_wrap">
								<h3>SOME FEATURES</h3>
							</div>
						</div>
					</div>
					<div class="row justify-content-between">
						<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
							<div class="sf_item_wrap">
								<div class="sf_item">
									<div class="i_wrap">
										<i class="pe-7s-monitor"></i>
									</div>
									<div class="name_wrap">
										<span>Shortcodes</span>
									</div>
									<div class="number_wrap">
										<span>46</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
							<div class="sf_item_wrap">
								<div class="sf_item">
									<div class="i_wrap">
										<i class="pe-7s-settings"></i>
									</div>
									<div class="name_wrap">
										<span>Integrated Plugins</span>
									</div>
									<div class="number_wrap">
										<span>128</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
							<div class="sf_item_wrap">
								<div class="sf_item">
									<div class="i_wrap">
										<i class="pe-7s-shopbag"></i>
									</div>
									<div class="name_wrap">
										<span>Creative Products</span>
									</div>
									<div class="number_wrap">
										<span>450</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
							<div class="sf_item_wrap">
								<div class="sf_item">
									<div class="i_wrap">
										<i class="pe-7s-medal"></i>
									</div>
									<div class="name_wrap">
										<span>Clients Worldwide</span>
									</div>
									<div class="number_wrap">
										<span>100+</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="bp">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="section_head">
								<div class="heading_wrap">
									<h1><?php
				$idObj = get_category_by_slug('s_blog');
				$id = $idObj->term_id;
				echo get_cat_name($id);
				?></h1>
				<div class="heading">
											<div class="line"></div>
										</div>
								</div>
								<div class="paragraph_wrap">
									<p><?php echo category_description($id); ?></p>
								</div>
							</div>
						</div>
					</div>	
				<div class="row justify-content-center">

							<?php if ( have_posts() ) : query_posts('cat=' . $id);
						while (have_posts()) : the_post(); 	?>
						<?php the_content(); ?>
						<?php  endwhile; endif; wp_reset_query();?>

											
						
					</div>
						
					</div>
				</div>
			</section>
			<section id="cp">
				<div class="row">
					<div class="col-12">
						<div class="head_wrap">
							<h3><?php
				$idObj = get_category_by_slug('s_plan');
				$id = $idObj->term_id;
				echo get_cat_name($id);
				?></h3>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row justify-content-center">
						<?php if ( have_posts() ) : query_posts('cat=' . $id);
						while (have_posts()) : the_post(); 	?>
						<?php the_content(); ?>
						<?php  endwhile; endif; wp_reset_query();?>
						
						
						
					</div>
				</div>
			</section>
			<section id="git">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="section_head">
								<div class="heading_wrap">
									<h1>GET IN TOUCH</h1>
								</div>
								<div class="paragraph_wrap">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt <br> ut labore et dolore  magna aliqua. Ut enim ad minim veniam.</p>
								</div>
							</div>
						</div>
					</div>
					<form action="#" novalidate target="_blank" method="post">
						<div class="row justify-content-between">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="input_wrap">
									<label class="form-group">
										<span class="color_element"></span>
										<div class="text_wrap">NAME<span>*</span></div>
										<input type="text" data-validation-required-message="Enter your name" required name="name" placeholder="">
										<span class="help-block text-danger"></span>
									</label>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="input_wrap">
									<label class="form-group">
										<span class="color_element"></span>
										<div class="text_wrap">MAIL<span>*</span></div>
										<input type="text" data-validation-required-message="Enter your mail" required name="name" placeholder="">
										<span class="help-block text-danger"></span>
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="textarea_wrap">
									<label class="form-group">
										<span class="color_element"></span>
										<div class="text_wrap">MESSAGE<span>*</span></div>
										<textarea name="#" id="" cols="" rows="" data-validation-required-message="Enter your message" required name="name" placeholder=""></textarea>
										<span class="help-block text-danger txt"></span>
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="button_wrap">
									<button>SEND MESSAGE</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</section>
			<?php get_footer(); ?>
		</div>
		<button class="btn-top" title="Go to top">Back to top</button>
		
		
		
		
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		<!--[if lt IE 9]>
		<script src="libs/html5shiv/es5-shim.min.js"></script>
		<script src="libs/html5shiv/html5shiv.min.js"></script>
		<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
		<script src="libs/respond/respond.min.js"></script>
		<![endif]-->
		
		<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/libs/full_page/scrolloverflow.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/libs/full_page/jquery.fullPage.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/libs/mmenu/dist/jquery.mmenu.all.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/libs/swiper/swiper.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/libs/mixitup.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/scroll_to_id/PageScroll2id.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/jqBootstrapValidation.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdP5XPJjD-RIexFg_UmWKZQ_fagaTOF_A&callback=initMap"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
		
	</body>
</html>