<?php 
/**
Plugin Name: Short Description Hover For Woocommerce
Author: minhawp
Plugin URI: https://github.com/minhawp/Short-Description-Hover/
Author URI: https://paypal.me/minhmeii
Description: Show product short description when hover, designed to work with Woocommerce
Version: 1.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0
WC requires at least: 2.0.0
WC tested up to: 3.5.3
**/
/**
 *    Copyright (C) 2019 CuongDC(email: minhanhlev@chautaiphat.com)
 *
 *    This program is free software; you can redistribute it and/or
 *    modify it under the terms of the GNU General Public License
 *    as published by the Free Software Foundation; either version 2
 *    of the License, or (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program; if not, write to the Free Software
 *    Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */


defined( 'ABSPATH' ) or die( 'Nope :v' );
//register assets
add_action( 'wp_enqueue_scripts' , function(){
    wp_enqueue_script('cdc_mainjs' , plugin_dir_url(__FILE__) . 'asset/main.js' , 'jquery' , '' , true );
    wp_enqueue_style('cdc_maincss' , plugin_dir_url(__FILE__) . 'asset/main.css' );
});

//Add hover funtion
add_action("woocommerce_after_shop_loop_item" , function(){
    global $product;
    require("inc/sdh-template.tpl");
});
