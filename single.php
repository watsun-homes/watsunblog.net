<?php get_header(); ?>
<div class="container">
  <div class="contents">
      
      
      
      
    <?php if(have_posts()): the_post(); ?>
    <article <?php post_class( 'kiji' ); ?>>
        
      <!--投稿日・著者を表示-->
      <div class="kiji-info">
        <!--投稿日を取得-->
        <span class="kiji-date">
          <i class="fas fa-pencil-alt"></i>
          <time
          datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
          <?php echo get_the_date(); ?>
          </time>
        </span>
        <!--カテゴリ取得-->
        <?php if(has_category() ): ?>
        <span class="cat-data">
          <?php echo get_the_category_list( ' ' ); ?>
        </span>
        <?php endif; ?>
      </div>
      <!--タイトル-->
      <h1><?php the_title(); ?></h1>
      <!--本文取得-->
      <?php the_content(); ?>
      <!--タグ-->
      <div class="kiji-tag">
        <?php the_tags('<ul><li>タグ： </li><li>','</li><li>','</li></ul>'
      ); ?>
      </div>
        
         
        
    </article>
    <?php endif; ?>

   
<?php comments_template(); ?>

      
      
      
      
      
  <?php
$categ = get_the_category($post->ID);
$catID = array();
foreach($categ as $cat){
	array_push($catID, $cat -> cat_ID);
}
$args = array(
	'post__not_in' => array($post->ID),
	'category__in' => $catID,
	'posts_per_page' => 6,
	'orderby' => 'rand'
);
$the_query = new WP_Query($args);
if($the_query -> have_posts()) :?>
<div class="relatedposts">
<?php while($the_query -> have_posts()) : $the_query -> the_post();
?>
	<div class="cell">
		<a href="<?php the_permalink(); ?>">
             <!--画像を追加-->
			<?php if(has_post_thumbnail()): the_post_thumbnail('medium');
				else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.jpg" alt="<?php the_title(); ?>">
				<?php endif; ?>
				<div class="text">
                    <!--タイトル-->
                    <h2><?php the_title(); ?></h2>
            <!--投稿日を表示-->
          <span class="kiji-date">
            <i class="fas fa-pencil-alt"></i>
            <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
              <?php echo get_the_date(); ?>
            </time>
          </span>
          <!--カテゴリ-->
          <?php if (!is_category()): ?>
            <?php if( has_category() ): ?>
              <span class="cat-data">
              <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
              </span>
            <?php endif; ?>
          <?php endif; ?>
            </div>
		</a>
	</div>
<?php endwhile; ?>
</div>
<?php endif; wp_reset_postdata(); ?>
      
      
      
    
    
    
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
