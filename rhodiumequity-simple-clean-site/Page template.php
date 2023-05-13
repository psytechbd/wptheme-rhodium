<?php /* Template Name: Page Template */ 

get_header();
?>

<hr>

    <div class="row content">
        
        <div class="col-md-4">
        <?php
			get_sidebar();
		?>
        </div>
        <div class="col-md-8">

        <?php
           

                
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
    </div>
</div>

<?php
get_footer();
