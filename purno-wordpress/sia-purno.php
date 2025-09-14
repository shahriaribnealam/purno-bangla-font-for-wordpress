<?php
/*
Plugin Name: Purno Bangla Font
Plugin URI: https://github.com/shahriaribnealam/purno-wordpress/releases
Description: A rich Bangla typeface developed by the BCC (Bangladesh Computer Council), ICT Division, is complete. With over five hundred glyphs, numerous ligatures - all in all, it is a complete solution for printing and publishing. I, Shahriar Ibne Alam, have created this plugin for WordPress based on the Purno Bangla font, so that WordPress website users can easily use the Purno Bangla font on their websites by installing this plugin.
Version: 1.0
Author: Shahriar Ibne Alam (SIA)
Author URI: https://www.shahriaribnealam.com
*/

/*
This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version. This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details. You should have received a copy of the GNU General Public License along with this program. If not, see: https://www.gnu.org/licenses/.
*/

defined( 'ABSPATH' ) or die( 'Stop! You can not do this!' );
function sia_purno_font() {
	print('<link rel="styleshet" type="text/css" href="'.plugins_url( 'purno-font/font.css', __FILE__ ).'">');
}

add_action('wp_head', 'sia_purno_font');
?>