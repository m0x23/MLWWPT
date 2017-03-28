<?php get_header(); ?>

 
 <div id="main">
 
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div id="entry">
			<p class="post-header"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
			<p class="post-date"><?php the_date(); ?></p>
			<p><?php the_tags($before, $sep, $after); ?></p>
		 
			<?php the_content(); ?>
		 
			<ol class="commentlist">
				<?php wp_list_comments(); ?>
			</ol>
			<?php the_comments_navigation(); ?>

			
         </div>
      <?php endwhile; endif; ?>
 
</div><!-- main -->
 
   <div id="sidebar">
		<?php get_sidebar(); ?>
		<?php dynamic_sidebar( $index ); ?>
		
   </div><!-- sidebar --> 
  
  
  <div>
  <?php
	next_posts_link();
	previous_posts_link();
  ?>
  
  </div>
   
 
 
<?php get_footer(); ?>
