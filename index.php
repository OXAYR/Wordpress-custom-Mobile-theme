<?php
get_header();
?>
<div class="row">
	
	<div class="col-xs-12 col-sm-8">

		<?php
        // $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1 ; 
        $currentPage = get_query_var('paged') + 1;
        $type = gettype(get_query_var('paged'));
        echo "The type of 'paged' variable is: " . $type;        
        var_dump($currentPage);
        $args = array ('posts_per_page'=>2, 'paged' => $currentPage);
        query_posts( $args );
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
				
		?>
	
	</div>
	
        


	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	<div>
            <?php next_post_link()?>
        </div>
        <div>
            <?php previous_post_link()?>
        </div>
</div>
<?php get_footer(); ?>
