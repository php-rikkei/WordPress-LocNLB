<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <div class="entry-thumbnail">
        <?php the_post_thumbnail('thumbnail'); ?>
    </div>
    <div class="entry-header">
    	<?php entryHeader(); ?>
    	<?php entryMeta(); ?>
    </div>
    <div class="entry-content">
    <?php entryContent(); ?>
    </div>
</article>