<?php if ( true == get_theme_mod( 'elite_creative_agency_team_on_off', 'off' ) ) : ?>

<?php 

$team_count = get_theme_mod('elite_creative_agency_team_count');
$elite_creative_agency_team_extra_heading = get_theme_mod('elite_creative_agency_team_extra_heading');
$elite_creative_agency_team_main_heading = get_theme_mod('elite_creative_agency_team_main_heading');

?>

<section id="home_team" class="py-5">
	<div class="container">
		<div class="text-center mb-4">
			<?php if ( ! empty( $elite_creative_agency_team_extra_heading ) ) : ?>
				<p class="mb-0 extraheading"><?php echo esc_html( $elite_creative_agency_team_extra_heading ); ?></p>
			<?php endif; ?>
			<?php if ( ! empty( $elite_creative_agency_team_main_heading ) ) : ?>
				<h3><?php echo esc_html( $elite_creative_agency_team_main_heading ); ?></h3>
			<?php endif; ?>
		</div>
		<div class="team_main_box">
			<div class="owl-carousel">
				<?php for ($i=1; $i <= $team_count; $i++) {
					$elite_creative_agency_team_image = get_theme_mod('elite_creative_agency_team_image'.$i);
					$elite_creative_agency_team_member_name = get_theme_mod('elite_creative_agency_team_member_name'.$i);
					$elite_creative_agency_team_member_link = get_theme_mod('elite_creative_agency_team_member_link'.$i); 
					$elite_creative_agency_team_designation = get_theme_mod('elite_creative_agency_team_designation'.$i); ?>
					<div class="team_content_box text-center">
						<?php if ( ! empty( $elite_creative_agency_team_image ) ) : ?>
							<img src="<?php echo esc_url( $elite_creative_agency_team_image ); ?>">
						<?php endif; ?>
						<div class="p-3">
							<?php if ( ! empty( $elite_creative_agency_team_designation ) ) : ?>
								<p class="mb-0"><?php echo esc_html( $elite_creative_agency_team_designation ); ?></p>
							<?php endif; ?>
							<?php if ( ! empty( $elite_creative_agency_team_member_name ) ) : ?>
								<strong><a href="<?php echo esc_url( $elite_creative_agency_team_member_link ); ?>"><?php echo esc_html( $elite_creative_agency_team_member_name ); ?></a></strong>
							<?php endif; ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>