<?php
/*
Plugin Name: WP-Syntax Effects
Plugin URI: http://wordpress.org/extend/plugins/wp-syntax-effects/
Description: Adds a simple mouseover-effect for WP-Syntax. Expands the "Sourcecode"-Frame to the sourcecode length. So it's not needed to scroll, if you have longer line.
Author: Julius Fischer
Version: 1.2
Author URI: http://www.it-gecko.de
*/

/*  Copyright 2011  Julius Fischer  (email : julius.f@gmx.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action('wp_head', 'wp_syntax_effects_head');

function wp_syntax_effects_head()
{
	echo '<script type="text/javascript" src="'.get_option('siteurl').'/wp-content/plugins/wp-syntax-effects/js/wp-syntax-effects.js"></script>'; 
}
?>