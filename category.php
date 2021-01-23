<?php
get_header();
$description = get_the_archive_description();
?>
<?php if ( have_posts() ) : ?>
<div class="title-header category">
	<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
	<?php if ( $description ) : ?>
			<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		<?php endif; ?>
</div>
<div class="main">
   <ul class="cards">
      <?php 
		global $post;
         if(have_posts()){
         	while(have_posts()){
         		the_post();?>
      <li class="cards_item">
         <div class="card">
            <div class="card_image">
               <a href="<?php the_permalink(); ?>">
               <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
                  } ?></a>
            </div>
            <div class="card_content">
            	<?php $categories = get_the_category();
					foreach ($categories as $category) :
						?><span><a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo $category->name ;?></a></span>
						<?php
					endforeach; ?>
               <a href="<?php the_permalink(); ?>">
                  <h2 class="card_title"><?php the_title(); ?></h2>
               </a>
            </div>
         </div>
      </li>
      <?php
         }
         }
         wp_reset_postdata();
         
          ?>
   </ul>
</div>
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<?php// get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
	<?php endwhile; ?>

	<?php twenty_twenty_one_the_posts_navigation(); ?>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>
<?php
get_footer(); ?>
