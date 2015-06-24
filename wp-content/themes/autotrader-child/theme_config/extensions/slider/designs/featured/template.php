<?php
$interval = 0;
if (isset($slider['general']['slider_interval']) && $slider['general']['slider_interval'] > 0) {
    $interval = $slider['general']['slider_interval'];
}
$play = 'false';
if ($interval > 0)
    $play = 'true';
?>
<div class="header slider_feat" style="background:url(<?php echo $slider['general']['slider_image']; ?>)">
    <div class="header_slider">
        <div id="featured_slider">
            <?php
            foreach ($slider['slides'] as $slide) {
                $link = $slide['slide_link_image'];
                if ($link != '') {
                    ?>
                    <div class="featured_item caption_<?php
                    echo $slide['slide_text_position'];
                    echo ' ' . $slide['slide_text_color'];
                    ?>" style="background-image:url(<?php echo $slide['slide_src']; ?>);cursor:pointer;" onclick="window.location = '<?php echo $link; ?>'">
                        <div class="slide_content">
                            <div class="featured_caption">
                                <p><a href="<?php echo $slide['slide_link_title']; ?>"><strong><?php echo $slide['slide_title']; ?></strong> <?php echo $slide['slide_subtitle']; ?></a></p>
                            </div>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="featured_item caption_<?php
                    echo $slide['slide_text_position'];
                    echo ' ' . $slide['slide_text_color'];
                    ?>" style="background-image:url(<?php echo $slide['slide_src']; ?>);cursor:pointer;">
                        <div class="slide_content">
                            <div class="featured_caption">
                                <p><a href="<?php echo $slide['slide_link_title']; ?>"><strong><?php echo $slide['slide_title']; ?></strong> <?php echo $slide['slide_subtitle']; ?></a></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div><!-- /#featured_slider -->
        <div class="slider_pag" id="featured_slider_pag"></div>
    </div><!-- /.header_slider -->

    <script>
        jQuery(document).ready(function () {
            var $ = jQuery;
            function carFeaturedInit() {
                $('#featured_slider').carouFredSel({
                    pagination: "#featured_slider_pag",
                    responsive: true,
                    infinite: false,
                    circular: true,
                    auto: {
                        play: <?php echo $play; ?>,
                        timeoutDuration: <?php echo $interval; ?>
                    },
                    width: '100%',
                    scroll: {
                        items: 1,
                        fx: "crossfade",
                        pauseOnHover: true
                    }
                });
            }
            carFeaturedInit();
            var resizeTimer;
            $(window).resize(function () {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(carFeaturedInit, 100);
            });
        });
    </script>
</div><!-- /.header -->