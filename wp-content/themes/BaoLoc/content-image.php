<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <div class="entry-thumbnail">
        <?php baoloc_thumbnail('large'); ?>
    </div>
    <div class="entry-header">
    	<?php entryHeader(); ?>
        <?php 
            $att = get_children( array('post_parent'=> $post->ID));
            $att_num =count($att);
            printf(__('This image post contains %1$s photo','baoloc'),$att_num);
        ?>
    	<?php entryMeta(); ?>
    </div>
    <div class="entry-content">
    <?php entryContent(); ?>
    </div>
</article>