<?php
/**
* Plugin Name:       Huish Outdoors Temporary Functions
* Plugin URI:        https://www.duckdiverllc.com
* Description:       Temporary Functions for Huish Outdoors Sites
* Version:           1.0.0
* Author:            Howard Ehrenberg
* Author URI:        https://www.howardehrenberg.com
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
* Text Domain:       dd_theme
* GitHub Plugin URI: https://github.com/DuckDivers/huish-temporary-plugin
*/

defined( 'ABSPATH' ) || exit;

add_action('woocommerce_email_order_details', 'huish_shipping_covid_warining', 1);
function huish_shipping_covid_warining(){
	echo '<p><i>Due to a rapid increase in orders, combined with additional safety measures put in place due to COVID-19 concerns, we are currently experiencing longer than expected shipping times. We ask for your patience, as we recognize our delivery time this week may not meet your expectations. Our entire team is chipping in to ensure we deliver as quickly as possible.</i></p>
	<p>Thank you for your understanding.</p>';
}
