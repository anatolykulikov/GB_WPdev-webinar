<figure class="post-preview">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php
        if(has_post_thumbnail()) {
            $thumb_id = get_post_thumbnail_id();
            $thumb_cover_url = wp_get_attachment_image_src($thumb_id, 'og-image', true);
            echo('<img src="'.$thumb_cover_url[0].'" alt="'. get_the_title() .'" width="'.$thumb_cover_url[1].'" height="'.$thumb_cover_url[2].'">');
        }
    ?>
        <figcaption>
            <time><?php the_time('j F Y'); ?></time>
            <p><?php the_title(); ?></p>
            <small><?php the_excerpt(); ?></small>
        </figcaption>
    </a>
</figure>