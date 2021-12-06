<?php
if (!function_exists('ecommerce_plus_get_header_style')):

function ecommerce_plus_get_header_style(){

		global $post;
		
		if ($post){
			$style = get_post_meta( $post->ID, 'ecommerce-plus-header-style', true );	
			if ($style == 'shadow') {
				return "box-shadow";
			} elseif ($style == 'border'){
				return "header-border";
			} elseif ($style == 'transparent'){
				return "header-transparent";
			} elseif ($style == 'none'){
				return "header-style-none";	
			} else {
				if(get_option('page_on_front') < 1 ){
					return "header-transparent";
				} else {
					return "box-shadow";
				}			
			}
		} else {
			if(get_option('page_on_front') < 1 ){
				return "header-transparent";
			} else {
				return "box-shadow";
			}
		}
		
	} //end function
endif;


