<?php 
get_header();
?>

<div class="container-fluid general-page">
<?php
    pageBanner(array(
        'title' => 'Search Results',
        'background' => get_theme_file_uri('/images/blog.jpg')
    ));
 ?>
<div class="row d-flex align-left">
<div class="col-12 text-left justify-content-left mt-5">
<h4 style='font-weight:bold;color:black'>Search Results for: "<?php echo get_search_query() ?>"</h4>
        </div>
        <div class="col-12 text-left justify-content-left mt-3">
<?php 

if(have_posts()) {
while (have_posts()) {
    the_post();
    ?>

    <?php
    get_template_part('template-parts/content', get_post_type());
    
}
} else {
?>
<p>No matches.</p>
<?php
}
?>
        </div>
        <div class="col-12 text-left justify-content-left">
        <form role="search" method="get" class="search-form form-inline my-3" action="<?php echo home_url( '/' ); ?>">
    <label for="s">
        <input id="s" type="search" class="search-field form-control mr-sm-2"
            placeholder="<?php echo esc_attr_x( 'What are you looking for?', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <button type="submit" class="btn btn-outline-primary my-2 my-sm-0 search-submit"
			value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">Search</button>
</form>
</div>
</div>

    <?php get_template_part('template-parts/footer'); ?>
</div>