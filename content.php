<?php
/*
# =================================================
# content.php
#
# The default template for displaying content.
# =================================================
*/
?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'post large-12 columns' ); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-thumbnail">
            <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
        </a>
    <?php endif; ?>

    <article class="post-excerpt">
        <header>
            <?php
                /* Display the title in a link. */
                echo '<a href="' . get_the_permalink() . '"><h3>' . get_the_title() . '</h3></a>';

                /* Get the post meta. */
                tuts_post_meta();
            ?>
        </header>

        <?php the_content( __( 'read more <i class="fa fa-arrow-right"/></i>', 'tuts' ) ); ?>
        <br>
    </article>
</div>

