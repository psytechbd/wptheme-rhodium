<?php /* Template Name: Home Page Template */ 

get_header();
?>

	    
<div class="row">
        <div class="col-md-12">
            <div class="banner">
			<img alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
                <!-- <img src="BG1.jpg" alt=""> -->
            </div>
        </div>
    </div>
    <div class="row content">
        <div class="col-md-8">
            <?php
            if ( is_front_page() ) :
                get_header( 'home' );
                elseif ( is_page( 'About' ) ) :
                get_header( 'about' );
                else:
                get_header();
                endif;if ( is_front_page() ) :
                get_header( 'home' );
                elseif ( is_page( 'About' ) ) :
                get_header( 'about' );
                else:
                get_header();
                endif;

                
                while ( have_posts() ) :
                    the_post();
        
                    get_template_part( 'template-parts/content', 'page' );
        
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
        
                endwhile; // End of the loop.
                
            ?>
        </div>
        <div class="col-md-4">
		<?php
			get_sidebar();
		?>
		</div>
    </div>
</div>

<?php
get_footer();
