<?php
/**
 * Created by PhpStorm.
 * User: LocNLB
 * Date: 9/22/2017
 * Time: 2:39 PM
 */
/**
 * Plugin Name: Widget Ex
 * Author: BaoLoc
 */

//Khoi tao Widget

add_action('widgets_init','create_widget');
function create_widget(){
    register_widget('Baoloc_Widget');
}

//Tao widget
class BaoLoc_Widget extends WP_Widget{
    function __construct(){
        parent::__construct('widget-ex',
                            'Widget Ex',
                            array('description'=>'Mô tả cho Widget Ex'));
    }

    function form($instance){
        $defaul = array(
            'title'=> 'Widget Ex',
            'content'=>'Nhap'
        );
        $instance= wp_parse_args($instance,$defaul);
        $title = esc_attr($instance['title']);
        $content = esc_attr($instance['content']);

        echo ('Title : <input class="widefat" type="text" name="'.$this->get_field_name('title').'" value="'.$title.'"/>');
        echo ('Content: <textarea class="widefat" name="'.$this->get_field_name('content').'"></textarea>');
    }

    function update($new_instance,$old_instance){
        $instance = $old_instance;
        $instance['title']=$new_instance['title'];
        $instance['content']=$new_instance['content'];
        return $instance;
    }

    function widget($args,$instance){

    }
}