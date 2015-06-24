<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'dealer',
    array(
      'labels' => array(
        'name' => __( 'Dealers' ),
        'singular_name' => __( 'Dealer' ),
		'add_new_item' =>__('Add New Dealer'),
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
  
 }




// Add the Meta Box
function add_custom_meta_box() {
    add_meta_box(
        'custom_meta_box', // $id
        'Dealer information', // $title 
        'show_custom_meta_box', // $callback
        'dealer', // $page
        'normal', // $context
        'high'); // $priority
		
	/*add_meta_box(
        'custom_meta_box', 
        'Dealer', 
        'show_custom_meta_box2', 
        'vehicle', 
        'normal', 
        'high'); */
}
add_action('add_meta_boxes', 'add_custom_meta_box');

$prefix = 'dealer_';
$custom_meta_fields = array(
 array(
        'label'=> 'Dealer Id',
        'desc'  => 'Dealer\'s unique ID',
        'id'    => $prefix.'id',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Name',
        'desc'  => 'Dealer\'s Name',
        'id'    => $prefix.'name',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Address',
        'desc'  => 'Dealer\'s Address',
        'id'    => $prefix.'address',
        'type'  => 'text'
    ),
    array(
        'label'=> 'City',
        'desc'  => 'Dealer\'s City',
        'id'    => $prefix.'city',
        'type'  => 'text'
    ),
    array(
        'label'=> 'State',
        'desc'  => 'Dealer\'s State',
        'id'    => $prefix.'state',
        'type'  => 'text',
        
    ),
	
	array(
        'label'=> 'Zip',
        'desc'  => 'Dealer\'s Zip',
        'id'    => $prefix.'zip',
        'type'  => 'text',
    ),
	
	array(
        'label'=> 'Phone Number',
        'desc'  => 'Dealer\'s Phone Number',
        'id'    => $prefix.'phone_number',
        'type'  => 'text',
    ),
	
	array(
        'label'=> 'Email',
        'desc'  => 'Dealer\'s Email',
        'id'    => $prefix.'email',
        'type'  => 'text',
    ),
	
);

function show_custom_meta_box() {
global $custom_meta_fields, $post;
// Use nonce for verification
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
     
    // Begin the field table and loop
    echo '<table class="form-table">';
    foreach ($custom_meta_fields as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with
        echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
                switch($field['type']) {
                    // case items will go here
					case 'text':
    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
        <br /><span class="description">'.$field['desc'].'</span>';
break;

case 'checkbox':
    echo '<input type="checkbox" name="'.$field['id'].'" id="'.$field['id'].'" ',$meta ? ' checked="checked"' : '','/>
        <label for="'.$field['id'].'">'.$field['desc'].'</label>';
break;
case 'select':
    echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
    foreach ($field['options'] as $option) {
        echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';
    }
    echo '</select><br /><span class="description">'.$field['desc'].'</span>';
break;
                } //end switch
        echo '</td></tr>';
    } // end foreach
    echo '</table>'; // end table
}



function save_custom_meta($post_id) {
    global $custom_meta_fields;
     
    // verify nonce
    if (isset($_POST['custom_meta_box_nonce']) && !wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))) 
        return $post_id;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }
     
    // loop through fields and save the data
	if(isset($_POST['post_type']) && $_POST['post_type']=="dealer"){
    foreach ($custom_meta_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
		
		if($field['id']=='dealer_name' && !empty($_POST['dealer_name']) ){
			$term_id = get_post_meta($post_id,'term_id',true);

			$dealer=term_exists( (int)$term_id, 'vehicle_dealers');
			  
			$term_slug = str_replace(' ','-',strtolower($_POST['dealer_name'])) ;
			
			if($dealer!==0 && $dealer!==null){
				
			 wp_update_term($dealer['term_id'], 'vehicle_dealers', array(
                 'name' => $_POST['dealer_name'],
                 'slug' => $term_slug
              ));
			 }
			else {
			 $dealer_term=wp_insert_term($_POST['dealer_name'], 'vehicle_dealers', $args = array('description'=>$post_id) );
			 
			 update_post_meta($post_id,'term_id',$dealer_term['term_id']);
			 }
		}
		
		
    } // end foreach
	
	}
	
}
add_action('save_post', 'save_custom_meta');

/*global $table_prefix,$wpdb;
$prefix2 = 'vehicle_';

$dealers= $wpdb->get_results("select ID, post_title from ".$table_prefix."posts where post_type='dealer' and post_status='publish'");

$i=0;

$options[$i]['label'] ="--Select Dealer--" ;
$options[$i]['value'] ="" ;

$i++;

foreach($dealers as $dealer){
	
	$options[$i]['label'] =$dealer->post_title ;
	$options[$i]['value'] =$dealer->ID ;
	$i++;
}

$custom_meta_fields2 = array(
   
   array(
        'label'=> 'Dealer',
        'desc'  => 'Choose Dealer',
        'id'    => $prefix2.'dealer',
        'type'  => 'select',
        'options' => $options
    )
	
);

function show_custom_meta_box2() {
global $custom_meta_fields2, $post;
// Use nonce for verification
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
     
    // Begin the field table and loop
    echo '<table class="form-table">';
    foreach ($custom_meta_fields2 as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with
        echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
                switch($field['type']) {
                    // case items will go here
					case 'text':
    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
        <br /><span class="description">'.$field['desc'].'</span>';
break;

case 'checkbox':
    echo '<input type="checkbox" name="'.$field['id'].'" id="'.$field['id'].'" ',$meta ? ' checked="checked"' : '','/>
        <label for="'.$field['id'].'">'.$field['desc'].'</label>';
break;
case 'select':
    echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
    foreach ($field['options'] as $option) {
        echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';
    }
    echo '</select><br /><span class="description">'.$field['desc'].'</span>';
break;
                } //end switch
        echo '</td></tr>';
    } // end foreach
    echo '</table>'; // end table
}



function save_custom_meta2($post_id) {
    global $custom_meta_fields2;
     
    // verify nonce
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))) 
        return $post_id;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }
     
    // loop through fields and save the data
    foreach ($custom_meta_fields2 as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
//add_action('save_post', 'save_custom_meta2');*/
?>