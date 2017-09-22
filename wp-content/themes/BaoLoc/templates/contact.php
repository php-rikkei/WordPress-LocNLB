<?php
/*
  Template Name: Contact
*/
?>
<?php get_header(); ?>
<div class="content">
    <div id ="main-content">
      	<div class="contact-info">
	      	<h4> Địa chỉ liên hệ</h4>
	      	<p>75-Lê Đình Lý- Đà Nẵng</p>
	      	<p>01668115501</p>
      	</div>
      	<div class="contact-info">
      		<?php echo do_shortcode('[contact-form-7 id="45" title="Contact form 1"]'); ?>
      	</div>		
    </div>
    <div id="sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>


