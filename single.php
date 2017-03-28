<?php get_header(); ?>
 
 <div id="main">
 
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         
		 <div id="entry">
		 <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		 <?php the_post_thumbnail(); ?>
		 <p class="post-header"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
		 <p class="post-date"><?php the_date(); ?></p>
         
         <?php the_content(); ?>
		 <br><br><br><br>
		  

		 </div>
		  
		 <?php comments_template(); ?>
         </div>
      <?php endwhile; endif; ?>
</div><!-- main -->
 
   <div id="sidebar">
		<?php get_sidebar(); ?>
   </div><!-- sidebar --> 
 
 
<?php get_footer(); ?>
