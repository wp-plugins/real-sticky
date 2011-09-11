<?php
/*
Plugin Name: Real Sticky
Plugin URI: http://www.graphicedit.com/real-sticky/real-sticky.zip
Description: This plugin adds custom Real Sticky Post.
Version: 1.1.1
Author: http://profiles.wordpress.org/users/graphicedit/
Author URI: http://www.graphicedit.com/
*/
/*  Copyright 2011  GraphicEdit  (email : contact@graphicedit.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( !class_exists( 'real_sticky' ) ) {

class real_sticky {
	// Constructor Real Sticky
	function real_sticky() {
		
		add_action( 'loop_start', array( &$this, 'real_sticky_show' ) );
		
	}
	
	// Display Real Sticky
	function real_sticky_show( &$wp_query ) {
	
		global $wp_the_query;
		if ( ( $wp_query === $wp_the_query ) && !is_admin() ) {
				
				$page_title = get_page_by_title( 'Real Sticky' );
				$page_id =  $page_title->ID;
				$page_data = get_page( $page_id, 'display' );
				$content = apply_filters('the_content', $page_data->post_content);
								
				echo '<!--real-sticky-->';
				echo $content;
				echo '<hr />';
				echo '<!--real-sticky-->';
				
				
		}
	}

}
/////////////////////////////////////////////////
$wp_real_sticky = new real_sticky();

} /* END */

?>