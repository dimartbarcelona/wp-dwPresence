<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    
    <?php wp_head(); ?>
</head>
<body>
	<div id="template-wrapper">
		<header id="main-header">
			<div class="max-width-content">	
				<div id="main-header-row">
					<div id="identity">
						<div id="div-logo">
						<?php 
						// Use function_exists() wrapper to maintain backwards compatibility with older versions of WordPress.
							if ( function_exists( 'the_custom_logo' ) ) {
								if ( has_custom_logo() ) 
									the_custom_logo();
							}
						?>
						</div>
						<div id="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<?php bloginfo( 'name' ); ?>
							</a>
						</div>
						<div id="site-description">
							<?=bloginfo('description');?>
						</div>
					</div>

					<?php if ( has_nav_menu( 'top' ) ) : ?>
					<div id="div-nav">
						<div class="menu_bar">
							<a href="#" class="bt-menu"><span class="icon-menu"></span>Menu</a>
						</div>

				    	<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>

					</div>
					<?php endif; ?>					

				</div>
			</div>
			<div id="header-background-dye">
				<div id="header-background" style="background-image: url('<?php header_image(); ?>')">
					<div class="max-width-content">
		
					</div>
				</div>
			</div>
		</header>