<?php 
get_header();
?>

<div class="container-fluid general-page">
<?php
   pageBanner();
?>
  
  <?php get_template_part('template-parts/nav', get_post_type()); ?>

  <?php get_template_part('template-parts/post-content'); ?>

    <?php get_template_part('template-parts/sidebar'); ?>
</div>
<?php get_template_part('template-parts/footer'); ?>

</div>