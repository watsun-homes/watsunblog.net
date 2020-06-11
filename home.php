<?php get_header(); ?>
<div class="container">
  <div class="contents">
      
      
      
      
      <!-- スライドショー写真 -->
	<div class="cp_cssslider">
	<div class="cp_slidewrapper">
        <div class="cp_slide_item"><a href="https://watsunblog.net/2019/08/18/scarletresearch/"><img src="<?php bloginfo('template_directory'); ?>/images/3.jpg"></a></div>
        <div class="cp_slide_item"><a href="https://watsunblog.net/2019/08/21/シャーロックホームズー緋色の研究を考察%ef%bc%81ホー/"><img src="<?php bloginfo('template_directory'); ?>/images/4.jpg"></a></div>
        <div class="cp_slide_item"><a href="https://watsunblog.net/2019/08/30/シャーロック・ホームズシリーズー空き家の冒険/"><img src="<?php bloginfo('template_directory'); ?>/images/10.jpg"></a></div>
        <div class="cp_slide_item"><a href="https://watsunblog.net/2019/09/01/シャーロック・ホームズのドラマ・映画をまとめ/"><img src="<?php bloginfo('template_directory'); ?>/images/11.jpg"></a></div>
        <div class="cp_slide_item"><a href="https://watsunblog.net/2019/08/27/シャーロック・ホームズー「踊る人形」を考察%ef%bc%81/"><img src="<?php bloginfo('template_directory'); ?>/images/8.jpg"></a></div>
	</div>
</div>
    <!-- スライドショー写真 ここまで -->
      
      
      
      

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article <?php post_class( 'kiji-list' ); ?>>
      <a href="<?php the_permalink(); ?>">
        <!--画像を追加-->
        <?php if( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail('medium'); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img"/>
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
          <!--抜粋-->
          <?php the_excerpt(); ?>
        </div>
      </a>
    </article>

    <?php endwhile; endif; ?><!--ループ終了-->

    <div class="pagination">
    <?php echo paginate_links( array(
      'type' => 'list',
      'mid_size' => '1',
      'prev_text' => '&laquo;',
      'next_text' => '&raquo;'
      ) ); ?>
    </div>

  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
