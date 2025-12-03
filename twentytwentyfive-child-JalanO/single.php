<?php
/**
 * Template Name: Custom Single Post
 * Description: Overrides Twenty Twenty-Five single post layout.
 */

get_header();
?>

<main class="custom-single">

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>

    <article class="single-wrapper">

        <header class="single-header">
            <h1 class="single-title"><?php the_title(); ?></h1>
            <p class="single-meta">
                Posted on <?php echo get_the_date(); ?> • by <?php the_author(); ?>
            </p>
        </header>

        <div class="single-featured-img">
            <?php the_post_thumbnail('large'); ?>
        </div>

        <div class="single-content">
            <?php the_content(); ?>
        </div>

        <footer class="single-footer">
            <a class="back-home" href="<?php echo home_url(); ?>">← Back to Homepage</a>
        </footer>

    </article>

    <?php
        endwhile;
    endif;
    ?>

</main>

<?php get_footer(); ?>