<?php
/**
 * Template Name: Custom Front Page
 * Description: Overrides Twenty Twenty-Five homepage with a custom blog layout.
 */

get_header();
?>

<main class="custom-front-page">

    <section class="hero-area">
        <h1 class="hero-title">Welcome to My Blog</h1>
        <p class="hero-sub">Fresh posts, clean layout, and a custom child theme.</p>
    </section>

    <section class="front-query-loop">
        <h2 class="section-title">Latest Posts</h2>

        <?php
        // Custom Query: show 3 latest posts
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1
        );

        $blog_query = new WP_Query($args);

        if ($blog_query->have_posts()) :
            echo '<div class="posts-grid">';

            while ($blog_query->have_posts()) :
                $blog_query->the_post();
        ?>

        <article class="post-card">
            <a href="<?php the_permalink(); ?>">
                <div class="featured-img">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <h3 class="post-title"><?php the_title(); ?></h3>
            </a>

            <p class="post-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>

            <a class="read-more" href="<?php the_permalink(); ?>">Read More →</a>
        </article>

        <?php
            endwhile;
            echo '</div>';

            // Pagination
            echo '<div class="pagination">';
            previous_posts_link('« Newer Posts', $blog_query->max_num_pages);
            next_posts_link('Older Posts »', $blog_query->max_num_pages);
            echo '</div>';

        else :
            echo '<p>No posts found.</p>';
        endif;

        wp_reset_postdata();
        ?>
    </section>

</main>

<?php get_footer(); ?>