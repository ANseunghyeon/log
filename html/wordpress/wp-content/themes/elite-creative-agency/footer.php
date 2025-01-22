<!-- Start: Footer Sidebar
============================= -->
<?php if ( is_active_sidebar( 'footer-widget-area' ) ) { ?>
	<footer id="footer-widgets" class="footer-sidebar footer_bg">
		<div class="footer-widgets">
			<div class="container">
				<div class="row">
					<?php  dynamic_sidebar( 'footer-widget-area' ); ?>
				</div>
			</div>
		</div>
	</footer>
<?php } ?>
<!-- End: Footer Sidebar
============================= -->
<?php 
	$elite_creative_agency_copyright_on_off = get_theme_mod('elite_creative_agency_copyright_on_off','1');	
	$elite_creative_agency_copyright_content   = get_theme_mod('copyright_content','Copyright &copy; [current_year] [site_title] | Privacy Policy [theme_author]');
	$elite_creative_agency_copyright_content_text   = get_theme_mod('elite_creative_agency_copyright_content_text','Graphic Designer WordPress Theme');
?>

<section id="footer-copyright">
	<div class="container">
		<div class="text-center">
			<?php if ( true == get_theme_mod( 'elite_creative_agency_copyright_on_off', 'on' ) ) : ?>
				<p class="mb-0">
					 <?php 
						$elite_creative_agency_copyright_allowed_tags = array(
							'[current_year]' => date_i18n('Y'),
							'[site_title]'   => $elite_creative_agency_copyright_content_text,
							'[theme_author]' => sprintf(__('<a href="http://10.10.10.10/wordpress/privacy.html" target="_blank">Privacy Policy</a>', 'elite-creative-agency')),
						);
						echo apply_filters('elite_creative_agency_footer_copyright', wp_kses_post(elite_creative_agency_str_replace_assoc($elite_creative_agency_copyright_allowed_tags, $elite_creative_agency_copyright_content)));
					?>
				</p>
			<?php endif; ?>
			<a href="#" class="scrollup"><i class="fa fa-arrow-up"></i></a>
		</div>
	</div>
</section>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>