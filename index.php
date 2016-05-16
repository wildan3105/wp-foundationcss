<?php
/*
# =================================================
# index.php
#
# The main template file.
# =================================================
*/
?>

<?php
/* Load header.php. */
get_header();
?>

<div class="container-fluid text-center">
    <div class="jumbotron">
        <div class="row">
            <div class="">
                <h1>Berita Eureka! ITB 2017</h1>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- end jumbotron -->
</div> <!-- end container-fluid -->

<div class="container">

<div class="page-blog container-fluid">
    <div class="row">
        <div class="posts col-md-8 col-md-pull-4">
            <div class="row">
                <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                    <div class="row">
                        
                    </div>
                <?php endwhile; ?>

                <?php else : ?>
                    <?php get_template_part( 'content', 'none' ); ?>

                <?php endif; ?>

                <?php
                    /* Load numbered pagination. */
                    tuts_numbered_pagination();
                ?>
            </div> <!-- end row -->
        </div> <!-- end posts -->
        <hr>
        <aside class="sidebar col-md-3 col-md-offset-1 col-md-push-8">
            <?php
                /* Load sidebar.php */
                get_sidebar();
            ?>
        </aside>
    </div> <!-- end row -->
</div> <!-- end container-fluid -->
</div>
<?php
/* Load footer.php. */
//get_footer();
?>
