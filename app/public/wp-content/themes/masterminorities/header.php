<! DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	<meta name="google-site-verification" content="ACxxxcA_0FE2sP6SWthf4tfsE8bHlvY9MWEc73sWMAA" />
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(  ); ?>
    </head>
    <body <?php body_class() ?>>
    <header class="site-header">
                <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
                        <a class="navbar-brand" href="<?php echo site_url()?>"><?php bloginfo('name') ?></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav mr-auto">
                            <!-- <li class="nav-item active">
                              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li> -->
                            <li <?php if(is_page('mission-workshops')) echo 'class="nav-item active" ' ?> class="nav-item">
                              <a class="nav-link" href="<?php echo site_url('/mission-workshops')?>">Our Mission & Workshops</a>
                            </li>
                            <li <?php if(get_post_type() == 'post') echo 'class="nav-item active" ' ?> class="nav-item">
                              <a class="nav-link" href="<?php echo site_url('/blog')?>">Blog</a>
                            </li>
                            <li <?php if(is_page('videos-live-streaming')) echo 'class="nav-item active" ' ?> class="nav-item">
                              <a class="nav-link" href="<?php echo site_url('/videos-live-streaming')?>">Videos & Live Streaming</a>
                            </li>
                            <li <?php if(is_page('crowdfunding')) echo 'class="nav-item active" ' ?> class="nav-item">
                              <a class="nav-link" href="<?php echo site_url('/crowdfunding')?>">Crowdfunding</a>
                            </li>
                          </ul>
                          <form class="form-inline my-2 my-lg-0" action="<?php echo home_url(); ?>">
                          <a class="dashicons dashicons-search" href="<?php echo esc_url(site_url('/search')) ?>"></a>
    <!-- <input class="form-control-sm mr-sm-2 collapse" id="collapseExample" type="search"  placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" aria-label="Search">
    <button class="btn btn-outline-dark btn-sm my-2 my-sm-0 search-submit collapse" id="collapseExample" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">Search</button>
     -->

    </form>
                        </div>
                      </nav>
                      </header>
