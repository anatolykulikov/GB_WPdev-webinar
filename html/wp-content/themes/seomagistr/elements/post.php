<article class="wrapper">
<?php if(has_post_thumbnail()) {
            $thumb_id = get_post_thumbnail_id();
            $thumb_cover_url = wp_get_attachment_image_src($thumb_id, 'og-image', true);
            echo('<img src="'.$thumb_cover_url[0].'" alt="'. get_the_title() .'" width="'.$thumb_cover_url[1].'" height="'.$thumb_cover_url[2].'">');
} ?>
    <h1><?php the_title(); ?></h1>
    <section><?php the_content(); ?></section>
    <time><?php the_time('j F Y'); ?></time>
</article>
<?php get_template_part('elements/form');