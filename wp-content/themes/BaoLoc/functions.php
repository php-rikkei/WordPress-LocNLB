<?php
/**
@Khai bao hang
	@THEME_URL = lay duong dan thu muc theme
	@CORE = lay duong dan thu muc core
**/
define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL."/core");

/**
@Nhung file /core/init.php
**/
require_once( CORE . "/init.php" );

/**
@Thiet lap chieu rong
**/
if( !isset($content_width)){
	$content_width=620;
}

/**
@Khai bao chuc nang
**/
if(!function_exists('baoloc_theme_setup')){
	function baoloc_theme_setup(){
		$language_folder= THEME_URL.'/languages';
		load_theme_textdomain('baoloc',$language_folder);
		
		add_theme_support('automatic-feed-links');
		
		add_theme_support('post-thumbnails');
		
		add_theme_support('post-formats',array(
			'image','video','gallery','quote','link'
			));
		add_theme_support('title-tag');

		$default_background = array(
			'default-color'=>'e8e8e8');
		add_theme_support('custom-background',$default_background );
		
		register_nav_menu('primary-menu',__('Primary Menu','baoloc'));

		$sidebar= array(
			'name'=>__('Main Sidebar','baoloc'),
			'id'=>'main-sidebar',
			'description'=>__('Default sidebar'),
			'class'=>'main-sidebar',
			'before_title'=>'<h3 class"widgettitle">',
			'after_title'=>'</h3>'
			);
		register_sidebar($sidebar);
	}
	add_action('init','baoloc_theme_setup');
}

/*----------------------------------------------------
*/
if(!function_exists('getCodeHeader')){ ?>
	<?php
	function getCodeHeader(){
	?>
	<div class="site-name">
	<?php
		if (is_home())
		{
			printf('<h1> <a href="%1$s" title="%2$s">   %3$s  </a> </h1>' , 
				get_bloginfo('url'), 
				get_bloginfo('description'),
				get_bloginfo('sitename'));
		}
		else
		{
			printf('<p> <a href="%1$s" title="%2$s">   %3$s  </a> </p>' , 
				get_bloginfo('url'), 
				get_bloginfo('description'),
				get_bloginfo('sitename'));

		}
		?>
		</div>
		<div class="site-description">
			<?php bloginfo('description
			')?>
		</div>
	<?php

}
}

/**------------------------------
**/
if(!function_exists('getCodeMenu')){
	function getCodeMenu($menu){
		$menu=array(
			'theme_location'=>$menu,
			'container'=>'nav',
			'container_class'=>$menu
			);
		wp_nav_menu($menu);
	}
}







