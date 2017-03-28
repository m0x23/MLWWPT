<?php get_header(); ?>
 
 <div id="main">
 
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div id="entry">
		 <p class="post-header"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
		 <p class="post-date"><?php the_date(); ?></p>
         
         <?php the_content(); ?>
         </div>
      <?php endwhile; endif; ?>
<?php comments_template(); ?>
</div><!-- main -->
 
   <div id="sidebar">
		<?php get_sidebar(); ?>
   </div><!-- sidebar --> 
 
 
<?php get_footer(); ?>
