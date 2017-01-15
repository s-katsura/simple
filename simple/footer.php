<footer>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'foot_nav',
        'container' => false ,
        'items_wrap' => '<ul class="clearfix">%3$s</ul>'
      )
    );
    ?>
      </div>
      <div class="col-xs-12">
        <p class="text-center">© 2016-<?php echo date("Y"); ?>All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<?php // global $template; echo $template; ?>
</body>
</html>