<?php
get_header();
$sidebar_position = tfuse_sidebar_position();
tfuse_shortcode_content('top');
?>

<div id="middle" class="full_width">
    <div class="container clearfix">
        <?php tfuse_category_ads(); tfuse_hook(); ?>
        <div class="offer_details clearfix">
            <div class="content">
                <?php get_template_part('offer-views/side', 'left'); ?>
                <?php get_template_part('offer-views/side', 'right'); ?>
				<div style="clear:both;"></div>
				<div class="offer_dealer" style="float:left;font-size: 20px; margin-top: 10px;">
					<?php $dealers=get_the_terms( $post->ID, 'vehicle_dealers' );
					//print_r($dealers);
					foreach($dealers as $dealer){
					$dealer_name=get_post_meta($dealer->description,'dealer_name',true);	
					$dealer_address=get_post_meta($dealer->description,'dealer_address',true);	
					$dealer_city=get_post_meta($dealer->description,'dealer_city',true);
					$dealer_state=get_post_meta($dealer->description,'dealer_state',true);	
					$dealer_zip=get_post_meta($dealer->description,'dealer_zip',true);	
					$dealer_phone_number=get_post_meta($dealer->description,'dealer_phone_number',true);
					$dealer_email=get_post_meta($dealer->description,'dealer_email',true);
                                       ?>                                                                                                                                                                                                                                                                                          
					<div class="offer_dealer" style="float:left;font-size: 14px; color: #80868c; margin-top: 10px;">  
                                    <?php
					echo $dealer_name." ".$dealer_address.", ".$dealer_city.", ".$dealer_state." ".$dealer_zip;
					echo "<br/>";
					echo "Phone: ".$dealer_phone_number."&nbsp; Email: <a href='mailto:".$dealer_email."?Cc=sales@chevroletofbristol.com' style='font-family: sans-serif;' >".$dealer_email."</a>";
                                       echo "</div>";
					}
					 ?>
                                     
				</div>
            </div><!--/ content -->
        </div>
        <?php get_template_part('offer-views/details', 'tabs'); ?>
        <?php echo tfuse_get_text_box_vehicles(); ?>
        <?php if ( tfuse_page_options('enable_comments') ) tfuse_comments(); ?>
    </div><!--/ .container  -->
</div><!--/ middle -->

<?php tfuse_shortcode_content('bottom1'); ?>
<?php tfuse_header_content('content'); ?>
<?php tfuse_shortcode_content('bottom'); ?>
<?php tfuse_shortcode_content('bottom2'); ?>
<?php get_footer(); ?>