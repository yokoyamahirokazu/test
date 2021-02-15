<!DOCTYPE html>
<html lang="ja">
<head>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>

<?php wp_head(); ?>
<?php if ( is_single()): ?>
<?php if ($post->post_excerpt){ ?>
<meta name="description" content="<? echo $post->post_excerpt; ?>" />
<?php } else {
        $summary = strip_tags($post->post_content);
        $summary = str_replace("\n", "", $summary);
        $summary = mb_substr($summary, 0, 120). "…"; ?>
<meta name="description" content="<?php echo $summary; ?>" />
<?php } ?>
<?php elseif ( is_home() || is_front_page() ): ?>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<?php elseif ( is_category() ): ?>
<meta name="description" content="<?php echo category_description(); ?>" />
<?php elseif ( is_tag() ): ?>
<meta name="description" content="<?php echo tag_description(); ?>" />
<?php else: ?>
<meta name="description" content="<?php the_excerpt();?>" />
<?php endif; ?>

<?php if ( is_home() ) {
    $canonical_url=get_bloginfo('url')."/";
}
else if (is_category())
{
    $canonical_url=get_category_link(get_query_var('cat'));
}
else if (is_page()||is_single())
{
    $canonical_url=get_permalink();
}
if ( $paged >= 2 || $page >= 2)
{
$canonical_url=$canonical_url.'page/'.max( $paged, $page ).'/';
}
?>
<?php if(!(is_404())):?>
    <link rel="canonical" href="<?php echo $canonical_url; ?>" />
<?php endif;?>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?v=<?php echo filemtime( get_stylesheet_directory() . '/style.css') ?>">

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script src="https://kit.fontawesome.com/98a9cf3b57.js" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">


<script>
jQuery(function($){
  $('.nav_toggle').click(function(){
    $(this).toggleClass('open');
      $('header').toggleClass('open');
      $('.overlay_nav').toggleClass('opne_nav');
      $('.content').toggleClass('content_noscroll');
  });
  });
</script>


<script>
window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
</script>
</head>
<body>

    <header>
        <div class="header_logo">
            <a href="<?php echo esc_url( home_url('/') ); ?>">
              テスト環境ヘッダー
            </a>
        </div>
    </header>


    <div class="nav_toggle">
      <div>
          <span></span>
          <span></span>
          <span></span>
      </div>
    </div>



      <div class="overlay_nav">

        <div class="overlay_nav_wrapper">

        <div class="overlay_nav_inner">

          <div class="header_logo overlay_nav_logo">
              <a href="<?php echo esc_url( home_url('/') ); ?>">
                ロゴ
              </a>
          </div>


          <div class="overlay_nav_flex">
            <ul>
              <li></li>
            </ul>

          <div class="overlay_nav_section">

          </div>

        </div>

        </div>
      </div>
    </div>


    <div class="content">





      <?php if ( is_home() ):?>
      <?php else: ?>
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display'))
          { bcn_display(); }?>
      </div>
    <?php endif; ?>
