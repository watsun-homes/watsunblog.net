<?php get_header(); ?>
<div class="container">
  <div class="contents">
    
      
      
      
    <!--記事本文-->
    <?php if(have_posts()): the_post(); ?>
    <article <?php post_class( 'kiji' ); ?>>
      <!--タイトル-->
      <h1><?php the_title(); ?></h1>
      <!--本文取得-->
      <?php the_content(); ?>
    </article>
    <?php endif; ?>
      
      
<?php comments_template(); ?>
      
      
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
