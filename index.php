<?php get_header() ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            
<!--            --><?php
//                if (have_posts()) {
//                	while (have_posts()){
//                		the_post(); ?>
<!--		                <!- Content will be here -->
<!--	              --><?php // }
//                }
//            ?>
	        
	        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		        <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
			        <header class="entry-header">
				        <h3>
					        <?php the_title(); ?>
				        </h3>
			        </header>
			        <div class="entry-content">
				        <p>
					        <?php the_content(); ?>
				        </p>
			        </div>
		        </article>
	        <?php endwhile; else: ?>
	            <p>
		            <?php esc_html_e('No Post Here!', 'mahekarim'); ?>
	            </p>
	        <?php endif; ?>
	        
            
        </main>
    </div>

<?php get_footer()?>
