<?php  ?>
<div class="conatiner single-layout"><div class="breadcrumb"><?php get_breadcrumb(); ?></div></div>
<div class="title-header">
</div>
<div class="conatiner single-layout">
	<div class="grid">
		<div class="item">
			<div class="post-thumb"><?php if(has_post_thumbnail()){
				the_post_thumbnail();
			} ?>
			<div class="dates">
				 <span class="month"><?php echo get_the_date( 'M' );  ?></span> 
				 <span class="date"><?php echo get_the_date( 'D' );  ?></span>
				 <span class="year"><?php echo get_the_date( 'Y' );  ?></span>
			</div>
			</div>
			<h2><?php the_title(); ?></h2>
			<div class="content-item">
			<?php the_content();?>
		</div>
		<div class="comments">
			<?php 
if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
			 ?>
		</div>
		</div>
	</div>
</div>
<div class="next-prev-posts">
<div class="main">
   <h3>Recent Posts</h3>
   <ul class="cards">
      <?php 
		global $post;
         $args =array(
         	'post_type' => 'post',
         	'posts_per_page' => 3,
         	'orderby' => 'rand',
         );
         $query = new WP_Query( $args );
         if($query->have_posts()){
         	while($query->have_posts()){
         		$query->the_post();?>
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
</div>