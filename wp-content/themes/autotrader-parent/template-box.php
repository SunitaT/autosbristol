<?php
    /* Template Name: Box page */
    global $wp_query, $is_tf_blog_page;
    get_header();
    if ($is_tf_blog_page) die();
    $sidebar_position = tfuse_sidebar_position();
    tfuse_shortcode_content('top');
?>

<div <?php tfuse_class('middle'); ?>>
    <div class="container clearfix box_page">
        <div class="content">
            <div class="contact_box">
                <?php tfuse_custom_title($wp_query->query_vars['page_id']); ?>

                <div class="box_content clearfix">
                    <?php while ( have_posts() ) {
                        the_post();
                        the_content();
                    } ?>
                </div>
            </div><!--/ .contact_box -->

            <?php if ( tfuse_page_options('enable_comments') ) tfuse_comments(); ?>
        </div><!--/ content -->

        <?php if ($sidebar_position == 'left' || $sidebar_position == 'right') : ?>
            <div class="sidebar">
                <?php get_sidebar(); ?>
            </div><!--/ .sidebar -->
        <?php endif; ?>

    </div><!--/ .container -->
</div><!--/ #middle -->

<?php tfuse_shortcode_content('bottom1'); ?>
<?php tfuse_header_content('content'); ?>
<?php tfuse_shortcode_content('bottom'); ?>
<?php tfuse_shortcode_content('bottom2'); ?>
<?php get_footer(); ?>