<?php if ( true == get_theme_mod( 'elite_creative_agency_slide_on_off', 'off' ) ) : ?>

<?php $slide_count = get_theme_mod('elite_creative_agency_slide_count'); ?>

<section id="home_slider">
	<div class="owl-carousel">
		<?php for ($i=1; $i <= $slide_count; $i++) {
			$elite_creative_agency_slider_image = get_theme_mod('elite_creative_agency_slider_image'.$i);
			$elite_creative_agency_slider_short_heading = get_theme_mod('elite_creative_agency_slider_short_heading'.$i);
			$elite_creative_agency_slider_heading = get_theme_mod('elite_creative_agency_slider_heading'.$i);
			$elite_creative_agency_slider_text = get_theme_mod('elite_creative_agency_slider_text'.$i); 
			$elite_creative_agency_slider_button_link = get_theme_mod('elite_creative_agency_slider_button_link'.$i); 
			$elite_creative_agency_slider_button_text = get_theme_mod('elite_creative_agency_slider_button_text'.$i); ?>

			<div class="slider_main_box">
				<?php if ( ! empty( $elite_creative_agency_slider_image ) ) : ?>
					<img src="<?php echo esc_url( $elite_creative_agency_slider_image ); ?>">
					<div class="slider_content_box">
						<?php if ( ! empty( $elite_creative_agency_slider_short_heading ) ) : ?>
							<h6><?php echo esc_html( $elite_creative_agency_slider_short_heading ); ?></h6>
						<?php endif; ?>
						<?php if ( ! empty( $elite_creative_agency_slider_heading ) ) : ?>
							<h3><?php echo esc_html( $elite_creative_agency_slider_heading ); ?></h3>
						<?php endif; ?>
						<?php if ( ! empty( $elite_creative_agency_slider_text ) ) : ?>
							<p><?php echo esc_html( $elite_creative_agency_slider_text ); ?></p>
						<?php endif; ?>
						<div class="slider_button my-4">
							<?php if ( ! empty( $elite_creative_agency_slider_button_link ) || ! empty( $elite_creative_agency_slider_button_text ) ): ?>
								<a href="<?php echo esc_url( $elite_creative_agency_slider_button_link ); ?>"><?php echo esc_html( $elite_creative_agency_slider_button_text ); ?></a>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		<?php } ?>
	</div>
</section>

<?php endif; ?>