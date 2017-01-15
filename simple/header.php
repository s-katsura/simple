<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri()); ?>/apple-touch-icon-180x180.png">
<link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/android-chrome-192x192.png" sizes="192x192">
<meta name="msapplication" content="<?php echo esc_url(get_template_directory_uri()); ?>/mstile-144x144.png">

<?php wp_head(); ?>
</head>
<body>

<header>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1><a href="<?= home_url(); ?>">H1<img src="<?php echo get_template_directory_uri(); ?>/dist/img/img-logo.png" width="" height="" alt=""></h1>
        </a>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'main_nav',
            'container' => false ,
            'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>'
          )
        );
        ?>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>
</header>
