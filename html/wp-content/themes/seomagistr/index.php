<?php get_header(); ?>
<section class="wrapper posts_collection">
<?php if(have_posts()) : while (have_posts()) : the_post(); get_template_part('elements/post-preview'); endwhile; endif; ?>
</section>
<?php get_footer(); ?>