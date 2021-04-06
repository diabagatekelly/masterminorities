<?php get_header(); ?>

<div class="container-fluid general-page">
    <?php pageBanner(array(
       'title' => 'All Videos',
       'background' => get_theme_file_uri('/images/blog.jpg')
   ));
?>
<?php get_template_part('template-parts/nav', get_post_type()); ?>


    <div class="row d-flex align-items-top blog-container">
        <div class="col-xs-12 col-sm-9 text-center justify-content-center">
<div class="row d-flex align-items-center regular-archive-posts">

<?php

if(have_posts()) {

while(have_posts(  )) {
the_post(); ?>
<div class="col-12 text-left indiv-posts">
            <h4><a href="<?php the_permalink();?>"><?php the_title()?></a></h4>
            <a href="<?php the_permalink();?>"><img class="img-fluid" src="<?php $pageBannerImage = get_field('banner_image'); echo $pageBannerImage['url'] ?>"></a>
            <?php the_content()?>
            <a href="<?php the_permalink(); ?>">View Full Post</a>
            </div>

<?php
}
} else {
    ?>
    <div class="col">
    <h4>Coming Soon!</h4>
</div>
<?php
}
?>
    


<div class="col-12 text-left">
<?php 
        echo paginate_links();
    ?>
</div>
</div>

        </div>
<?php get_template_part('template-parts/sidebar'); ?>
</div>
   
<?php get_template_part('template-parts/footer'); ?>

</div>