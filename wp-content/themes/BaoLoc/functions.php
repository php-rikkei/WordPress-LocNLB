<?php
/**
 * @Khai bao hang
 * @THEME_URL = lay duong dan thu muc theme
 * @CORE = lay duong dan thu muc core
 **/
define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL . "/core");

/**
 * @Nhung file /core/init.php
 **/
require_once(CORE . "/init.php");

/**
 * @Thiet lap chieu rong
 **/
if (!isset($content_width)) {
    $content_width = 620;
}

/**
 * @Khai bao chuc nang
 **/
if (!function_exists('baoloc_theme_setup')) {
    function baoloc_theme_setup()
    {
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('baoloc', $language_folder);

        add_theme_support('automatic-feed-links');

        add_theme_support('post-thumbnails');

        add_theme_support('post-formats', array(
            'image', 'video', 'gallery', 'quote', 'link'
        ));
        add_theme_support('title-tag');

        $default_background = array(
            'default-color' => 'e8e8e8');
        add_theme_support('custom-background', $default_background);

        register_nav_menu('primary-menu', __('Primary Menu', 'baoloc'));

        $sidebar = array(
            'name' => __('Main Sidebar', 'baoloc'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar'),
            'class' => 'main-sidebar',
            'before_title' => '<h3 class"widgettitle">',
            'after_title' => '</h3>'
        );
        register_sidebar($sidebar);
    }

    add_action('init', 'baoloc_theme_setup');
}

/*----------------------------------------------------
*/
if (!function_exists('getCodeHeader')) { ?>
    <?php
    function getCodeHeader()
    {
        ?>
        <div class="site-name">
            <?php
            if (is_home()) {
                printf('<h1> <a href="%1$s" title="%2$s">   %3$s  </a> </h1>',
                    get_bloginfo('url'),
                    get_bloginfo('description'),
                    get_bloginfo('sitename'));
                printf('<div><img src="'. get_template_directory_uri() .'/images/cover.jpg" class="image"></div>');
            } else {
                printf('<p> <a href="%1$s" title="%2$s">   %3$s  </a> </p>',
                    get_bloginfo('url'),
                    get_bloginfo('description'),
                    get_bloginfo('sitename'));

            }
            ?>
        </div>
        <div class="site-description">
            <?php bloginfo('description
			') ?>
        </div>
        <?php

    }
}

/**------------------------------
 **/
if (!function_exists('getCodeMenu')) {
    function getCodeMenu($menu)
    {
        $menu = array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_class' => $menu,
            'items_wrap'=> '<ul id="%1$s" class="%2$s sf-menu">%3$s</ul>'
        );
        wp_nav_menu($menu);
    }
}

/**---------------------------------
 *
 */
if(!function_exists('fu_pagination')){
    function fu_pagination(){
        if( $GLOBALS['wp_query']->max_num_pages < 2 ) {
            return '';
        } ?>
    <nav class="pagination" role="navigation">
        <?php if ( get_next_posts_link() ) : ?>
            <div class="prev"><?php next_posts_link( __('Older Posts','baoloc')); ?></div>
        <?php endif; ?>
        <?php if( get_previous_posts_link() ) : ?>
            <div class="next"><?php previous_posts_link( __('Newest Posts','baoloc')); ?></div>
        <?php endif; ?>
    </nav>
   <?php }
}

/**------------
*/
if(!function_exists('baoloc_thumbnail')){
    function baoloc_thumbnail($size){
        if( !is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image')) : ?>
        <figure class="post-thumbnail"><?php the_post_thumbnail( $size ); ?></figure>
        <?php endif; ?>
    <?php }
}


if(!function_exists('entryHeader')){
	function entryHeader(){ ?>
		<?php if(is_single()) : ?>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> "><?php the_title(); ?></a></h1>
		<?php else: ?>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h2>
		<?php endif;?> 	
	<?php }
}

if(!function_exists('entryMeta')){
	function entryMeta(){ ?>
		<?php if(!is_page()) : ?>
			<div class="entry-meta">
				<?php 
					printf(__('<span class="author"> Posted by %1$s ','baolocc'),
					get_the_author());

					printf(__('<span class="date-published"> at %1$s ','baolocc'),
					get_the_date());

					printf(__('<span class="category"> in %1$s ','baolocc'),
					get_the_category_list(','));

					if(comments_open()):
						echo '<span class="meta-reply">';
							comments_popup_link(
								__('Leave a comment','baoloc'),
								__('One comment','baoloc'),
								__('% comment','baoloc'),
								__('Read a comment','baoloc')
								);
						echo '</span>';
						endif;
				?>
			</div>
		<?php endif; ?>
	<?php }
}


if(!function_exists('entryContent')){
	function entryContent(){
		if(!is_single() && !is_page()){
			the_excerpt();
		}else{
			the_content();

			$link_pages= array(
				'before'=>__('<p>Page:','baoloc'),
				'after'=>('</p>'),
				'nextpagelink'=>__('Next Page','baoloc'),
				'previouspagelink'=>__('Previous Page','baoloc')
			);
			wp_link_pages($link_pages);
		}
	}
}


/* css*/
function cssStyle(){
    wp_register_style('main-style',get_template_directory_uri()."/style.css",'all');
    wp_enqueue_style('main-style');
    wp_register_style('reset-style',get_template_directory_uri()."/reset.css",'all');
    wp_enqueue_style('reset-style');

    wp_register_style('superfish-style',get_template_directory_uri()."/superfish.css",'all');
    wp_enqueue_style('superfish-style');
    wp_register_script('superfish-script',get_template_directory_uri()."/superfish.js",array('jquery'));
    wp_enqueue_script('superfish-script');
    wp_register_script('custom-script',get_template_directory_uri()."/custom.js",array('jquery'));
    wp_enqueue_script('custom-script');
}
add_action('wp_enqueue_scripts','cssStyle');