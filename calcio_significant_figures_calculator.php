<?php
/*
Plugin Name: Significant Figures Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/significant-figures-calculator/
Description: Quickly round numbers to any number of significant figures. Our free Sig Fig Calculator supports standard, scientific, and e-notation formats. Try it now!
Version: 1.0.0
Author: www.calculator.io / Significant Figures Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_significant_figures_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Significant Figures Calculator by www.calculator.io";

function calcio_significant_figures_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Significant Figures Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_significant_figures_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_significant_figures_calculator', 'calcio_significant_figures_calculator_shortcode' );