<?php 
get_header();
?>

<div class="container-fluid general-page">
<?php
   pageBanner();
?>

<?php
while(have_posts(  )) {
the_post(  ); ?>

   
<div class="row d-flex align-items-center page-container">
    <div class="col text-center justify-content-center">
    <?php the_content()?>
    </div>
</div>

<?php }

?>

<?php get_template_part('template-parts/footer'); ?>

</div>