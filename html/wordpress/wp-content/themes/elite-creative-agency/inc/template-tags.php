<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package elite-creative-agency
 */
if ( ! function_exists( 'elite_creative_agency_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function elite_creative_agency_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Posted on %s', 'post date', 'elite-creative-agency' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'elite-creative-agency' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);
	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
}
endif;

if ( ! function_exists( 'elite_creative_agency_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function elite_creative_agency_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'elite-creative-agency' ) );
		if ( $categories_list && elite_creative_agency_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'elite-creative-agency' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'elite-creative-agency' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'elite-creative-agency' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'elite-creative-agency' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'elite-creative-agency' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function elite_creative_agency_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'elite_creative_agency_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'elite_creative_agency_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so elite_creative_agency_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so elite_creative_agency_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in elite_creative_agency_categorized_blog.
 */
function elite_creative_agency_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'elite_creative_agency_categories' );
}
add_action( 'edit_category', 'elite_creative_agency_category_transient_flusher' );
add_action( 'save_post',     'elite_creative_agency_category_transient_flusher' );

/**
 * This Function Check whether Sidebar active or Not
 */
if(!function_exists( 'elite_creative_agency_post_layout' )) :
function elite_creative_agency_post_layout(){
	if(is_active_sidebar('sidebar-primary'))
		{ echo 'col-lg-9 col-md-12'; } 
	else 
		{ echo 'col-lg-12 col-md-12'; }  
} endif; 

/**
 * Register Google fonts for elite-creative-agency.
 */
function elite_creative_agency_google_font() {
	
    $get_fonts_url = '';
		
    $font_families = array();
 
	$font_families = array('Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900');
	$font_families = array('Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900');
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $get_fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

    return $get_fonts_url;
}

function elite_creative_agency_scripts_styles() {
    wp_enqueue_style( 'elite-creative-agency-fonts', elite_creative_agency_google_font(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'elite_creative_agency_scripts_styles' );

// Logo, Title, Description
if ( ! function_exists( 'elite_creative_agency_logo_title_description' ) ) :
function elite_creative_agency_logo_title_description() {
		if(has_custom_logo())
		{	
			the_custom_logo();
		}
		else { 
	?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<h2 class="site-title"><?php echo esc_html(get_bloginfo('name')); ?></h2>
		</a>
	<?php 		
		}
		$elite_creative_agency_description = get_bloginfo( 'description');
		if ($elite_creative_agency_description) : ?>
			<p class="site-description"><?php echo esc_html($elite_creative_agency_description); ?></p>
	<?php endif;
} 
endif;
?>