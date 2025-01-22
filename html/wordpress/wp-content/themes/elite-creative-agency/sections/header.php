<!-- Start: Header
============================= -->
<?php

$elite_creative_agency_header_btn_text = get_theme_mod('elite_creative_agency_header_btn_text');
$elite_creative_agency_header_btn_link = get_theme_mod('elite_creative_agency_header_btn_link');
$elite_creative_agency_header_phone_number_feild = get_theme_mod('elite_creative_agency_header_phone_number_feild');
$elite_creative_agency_header_email_address_feild = get_theme_mod('elite_creative_agency_header_email_address_feild');
$elite_creative_agency_header_opening_time_feild = get_theme_mod('elite_creative_agency_header_opening_time_feild');
$elite_creative_agency_header_social_icon_1_feild = get_theme_mod('elite_creative_agency_header_social_icon_1_feild');
$elite_creative_agency_header_social_icon_2_feild = get_theme_mod('elite_creative_agency_header_social_icon_2_feild');
$elite_creative_agency_header_social_icon_3_feild = get_theme_mod('elite_creative_agency_header_social_icon_3_feild');
$elite_creative_agency_header_social_icon_4_feild = get_theme_mod('elite_creative_agency_header_social_icon_4_feild');
$elite_creative_agency_header_social_icon_5_feild = get_theme_mod('elite_creative_agency_header_social_icon_5_feild');
$elite_creative_agency_header_social_link_1_feild = get_theme_mod('elite_creative_agency_header_social_link_1_feild');
$elite_creative_agency_header_social_link_2_feild = get_theme_mod('elite_creative_agency_header_social_link_2_feild');
$elite_creative_agency_header_social_link_3_feild = get_theme_mod('elite_creative_agency_header_social_link_3_feild');
$elite_creative_agency_header_social_link_4_feild = get_theme_mod('elite_creative_agency_header_social_link_4_feild');
$elite_creative_agency_header_social_link_5_feild = get_theme_mod('elite_creative_agency_header_social_link_5_feild');

?>

<div id="header-top">
   <div class="container">
      <div class="row">
      	<div class="col-lg-3 col-md-3 align-self-center">
				<div class="media-links">
					<?php if ( ! empty( $elite_creative_agency_header_social_icon_1_feild ) || ! empty( $elite_creative_agency_header_social_link_1_feild ) ): ?>
						<a href="<?php echo esc_url( $elite_creative_agency_header_social_link_1_feild ); ?>">
							<span class="dashicons dashicons-<?php echo esc_html( $elite_creative_agency_header_social_icon_1_feild ); ?>"></span>
						</a>
					<?php endif; ?>
					<?php if ( ! empty( $elite_creative_agency_header_social_icon_2_feild ) || ! empty( $elite_creative_agency_header_social_link_2_feild ) ): ?>
						<a href="<?php echo esc_url( $elite_creative_agency_header_social_link_2_feild ); ?>">
							<span class="dashicons dashicons-<?php echo esc_html( $elite_creative_agency_header_social_icon_2_feild ); ?>"></span>
						</a>
					<?php endif; ?>
					<?php if ( ! empty( $elite_creative_agency_header_social_icon_3_feild ) || ! empty( $elite_creative_agency_header_social_link_3_feild ) ) : ?>
						<a href="<?php echo esc_url( $elite_creative_agency_header_social_link_3_feild ); ?>">
							<span class="dashicons dashicons-<?php echo esc_html( $elite_creative_agency_header_social_icon_3_feild ); ?>"></span>
						</a>
					<?php endif; ?>
					<?php if ( ! empty( $elite_creative_agency_header_social_icon_4_feild ) || ! empty( $elite_creative_agency_header_social_link_4_feild ) ) : ?>
						<a href="<?php echo esc_url( $elite_creative_agency_header_social_link_4_feild ); ?>">
							<span class="dashicons dashicons-<?php echo esc_html( $elite_creative_agency_header_social_icon_4_feild ); ?>"></span>
						</a>
					<?php endif; ?>
					<?php if ( ! empty( $elite_creative_agency_header_social_icon_5_feild ) || ! empty( $elite_creative_agency_header_social_link_5_feild ) ) : ?>
						<a href="<?php echo esc_url( $elite_creative_agency_header_social_link_5_feild ); ?>">
							<span class="dashicons dashicons-<?php echo esc_html( $elite_creative_agency_header_social_icon_5_feild ); ?>"></span>
						</a>
					<?php endif; ?>
				</div>
         </div>
         <div class="col-lg-9 col-md-9 align-self-center text-md-right text-center">
         	<ul>         		
					<?php if ( ! empty( $elite_creative_agency_header_email_address_feild ) ) : ?>
						<li class="mr-2"><span class="dashicons dashicons-email mr-2"></span><?php echo esc_html( $elite_creative_agency_header_email_address_feild ); ?></li>
					<?php endif; ?>
					<?php if ( ! empty( $elite_creative_agency_header_opening_time_feild ) ) : ?>
						<li class="mr-2"><span class="dashicons dashicons-clock mr-2"></span><?php echo esc_html( $elite_creative_agency_header_opening_time_feild ); ?></li>
					<?php endif; ?>
					<?php if ( ! empty( $elite_creative_agency_header_phone_number_feild ) ) : ?>
						<li class="mr-2"><span class="dashicons dashicons-phone mr-2"></span><?php echo esc_html( $elite_creative_agency_header_phone_number_feild ); ?></li>
					<?php endif; ?>
         	</ul>
         </div>
      </div>
   </div>
</div>

<header id="header" role="banner" <?php if ( get_header_image() ) { ?> style="background-image: url( <?php esc_url(header_image()); ?> ); background-size: 100%;" <?php } ?> >
	<div class="navbar-area normal-h py-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-8 align-self-center">
					<div class="logo main">
						<?php if ( function_exists( 'elite_creative_agency_logo_title_description' ) ) :	elite_creative_agency_logo_title_description(); endif; ?>
					</div>
				</div>
				<div class="col-lg-7 col-md-4 col-4 align-self-center">
					<?php if(has_nav_menu('primary_menu')){?>
						<div class="toggle-menu gb_menu text-md-left">
							<button onclick="elite_creative_agency_navigation_open()" class="gb_toggle p-2"><p class="mb-0"><?php esc_html_e('Menu','elite-creative-agency'); ?></p></button>
						</div>
					<?php }?>
					<div id="gb_responsive" class="nav side_gb_nav">
						<nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="<?php esc_attr_e( 'Menu', 'elite-creative-agency' ); ?>">
							<?php if(has_nav_menu('primary_menu')){
							    wp_nav_menu( array( 
									'theme_location' => 'primary_menu',
									'container_class' => 'gb_navigation clearfix' ,
									'menu_class' => 'clearfix',
									'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav mb-0 px-0">%3$s</ul>',
									'fallback_cb' => 'wp_page_menu',
							    ) ); 
							} ?>
							<a href="javascript:void(0)" class="closebtn gb_menu" onclick="elite_creative_agency_navigation_close()">x<span class="screen-reader-text"><?php esc_html_e('Close Menu','elite-creative-agency'); ?></span></a>
						</nav>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 align-self-center text-md-right text-center">
					<?php if ( ! empty( $elite_creative_agency_header_btn_text ) ||  ! empty( $elite_creative_agency_header_btn_link )) : ?>
						<div class="topbtn">
							<a href="<?php echo esc_url( $elite_creative_agency_header_btn_link ); ?>"><?php echo esc_html( $elite_creative_agency_header_btn_text ); ?></a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</header>