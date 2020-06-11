<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns#">
<meta charset="utf-8">
<meta name="viewport"　
content="width=device-width, initial-scale=1.0 ">
    

<link rel="canonical" href="https://watsunblog.net/">

    

<?php if(is_tag() || is_date() || is_search() || is_404()) : ?>
  <meta name="robots" content="noindex"/>
<?php endif; ?>

<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
<meta property="og:locale" content="ja_JP">

    
<!--googleadsence-->
   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-6092164536333052",
          enable_page_level_ads: true
     });
</script> 
    <!--googleadsence-->

    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122670438-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122670438-4');
</script>

    
    
    
    
    
<!--個別ページ用のmetaデータ-->
<?php if( is_single() || is_page() ): ?>
  <?php setup_postdata($post) ?>
  <meta name="description" content="<?php echo strip_tags( get_the_excerpt() ); ?>"/>

  <?php if ( has_tag() ): ?>
    <?php $tags = get_the_tags();
    $kwds = array();
    foreach($tags as $tag){
      $kwds[] = $tag->name;
    }	?>
    <meta name="keywords" content="<?php echo implode( ',',$kwds ); ?>">
  <?php endif; ?>
  <meta property="og:type" content="article">
  <meta property="og:title" content="<?php the_title(); ?>">
  <meta property="og:url" content="<?php the_permalink(); ?>">
  <meta property="og:description" content="<?php echo strip_tags( get_the_excerpt() ); ?>">
  <?php if( has_post_thumbnail() ): ?>
    <?php $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
    <meta property="og:image" content="<?php echo $postthumb[0]; ?>">
  <?php endif; ?>
<!--個別ページ用のmetaデータ-->
    
    
    
    
<?php else: ?><!--個別ページ以外のメタデータ-->
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <?php $allcats = get_categories();
  $kwds = array();
  foreach($allcats as $allcat) {
    $kwds[] = $allcat->name;
  } ?>
  <meta name="keywords" content="<?php echo implode( ',',$kwds ); ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
  <?php
  $http = is_ssl() ? 'https' . '://' : 'http' . '://';
  $url = $http . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  ?>
  <meta property="og:url" content="<?php echo $url; ?>">
  <meta property="og:description" content="<?php bloginfo( 'description' ) ?>">
  <!-- <meta property="og:image" content="表示したい画像のパス"> -->
<?php endif; ?>
    <!--個別ページ以外のメタデータ-->
   
    
    

    
<!--ヘッダー画像読み込み-->
  <?php if ( get_header_image() ) : ?>
	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
<?php endif; ?>  
    <!--ヘッダー画像読み込み-->



    
    
    
    
<!--css呼び出し、fontawwesome、アイコン呼び出し-->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/images/webclipicon.png" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" />
<!--css呼び出し、fontawwesome、アイコン呼び出し-->
    
    
    
    
<?php wp_head(); ?>
</head>
    
    
    
<body <?php body_class(); ?>>
<header>

    
    
  <div id="nav-drawer">
      
      
      
<!--タイトルを文字にする場合-->
<div class="site-title">
  <h1><a href="<?php echo home_url(); ?>">
    <?php bloginfo( 'name' ); ?><i class="fas fa-user-secret"></i>
  </a></h1>
</div>
    
      
      
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
          <!--ヘッダーメニュー-->
  <?php wp_nav_menu( array(
        'theme_location' => 'header-nav', 
        'container' => 'nav',
        'container_class' => 'header-nav',
        'container_id' => 'header-nav',
        'fallback_cb' => ''
  ) ); ?>
 <!--ヘッダーメニュー-->
      </div>
      
    </div>
      
    
<!--ヘッダー横スライドメニュー-->
    <nav id="scroll-menu">
<ul class="scroll-menu-inner">
<li><a href="https://watsunblog.net/category/%ef%bc%91/">シャーロック・ホームズシリーズ</a></li>
<li><a href="https://watsunblog.net/category/%ef%bc%94/">推理・考察</a></li>
<li><a href="https://watsunblog.net/シャーロキアンコミュニティ/">コミュニティ</a></li>
<li><a href="">事件</a></li>
<li><a href="https://watsunblog.net/category/%ef%bc%92/">映画・ドラマ</a></li>
<li><a href="https://watsunblog.net/category/%ef%bc%93/">本</a></li>
<li><a href="https://watsunblog.net/category/%ef%bc%95/">謎解き</a></li>
<li><a href="https://watsunblog.net/category/%ef%bc%96/">アプリ</a></li>
<li><a href="">名探偵コナン</a></li>
<li><a href="https://watsunblog.net/集いtwitter/">集い(Twitter)</a></li>
</ul>
</nav>
<!--ヘッダー横スライドメニュー-->

    
    

</header>