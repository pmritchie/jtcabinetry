<?php if ( is_active_sidebar( 'sidebar-main') ) { ?>
  <div class="w-sidebar">
    <div class="w-sidebar-inner">
      <?php dynamic_sidebar( 'sidebar-main' ); ?>
    </div>
  </div>
<?php } ?>