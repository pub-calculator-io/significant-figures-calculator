<?php
/*
Plugin Name: CI Significant figures calculator
Plugin URI: https://www.calculator.io/significant-figures-calculator/
Description: The significant figure rounder rounds numbers to the required quantity of significant figures. It works with a standard number format, e-notation, and scientific notation.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_significant_figures_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Significant Figures Calculator by Calculator.iO";

function display_ci_significant_figures_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Significant Figures Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_significant_figures_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_significant_figures_calculator', 'display_ci_significant_figures_calculator' );