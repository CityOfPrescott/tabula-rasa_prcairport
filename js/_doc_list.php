<?php 
	//global $typenow;
 	//$screen = get_current_screen(); 
	// an array of all the taxonomyies you want to display. Use the taxonomy name or slug
	$taxonomies = array('documents');
 
	// must set this to the post type you want the filter(s) displayed on
		foreach ($taxonomies as $tax_slug) {
			$tax_obj = get_taxonomy($tax_slug);
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);
			if(count($terms) > 0) {
				echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
				echo "<option value=''>Show All $tax_name</option>";
				foreach ($terms as $term) { 
					echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>'; 
				}
				echo "</select>";
			}
		}
		echo 'anything';

<p>anythign else</p>