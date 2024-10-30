<?php
/*
Plugin Name: Better Load Spinner
Plugin URI: https://wordpress.org/plugins/Better-Load-Spinner
Description: Plugin para sustituir el spinner default de woocommerce por uno con una mejor experiencia de usuario.
Version: 1.0
Author: Alejandro Schintu
Author URI: https://www.Alejandroschintu.com/
License: GPLv2 o posterior
*/
add_action('wp_head', 'bls_spinner', 1000 );
function bls_spinner() {
    ?>
    <style>
    .woocommerce .blockUI.blockOverlay:before,
    .woocommerce .loader:before {
    z-index: 999;
    height: 100vh;
    width: 100vw;
    position: fixed;
    top: 0%;
    left: 0%;
    display: block;
    content: "";
    -webkit-animation: none;
    -moz-animation: none;
    animation: none;
    background: plugins_url( 'spinner.gif' , __FILE__ ) center center !important;
	background-color: #ffffff;
    background-size: cover;
    background-repeat: no-repeat;
    line-height: 1;
    text-align: center;
    font-size: 1em;
    }
    @media screen and (min-width: 1080px){
    .woocommerce .blockUI.blockOverlay:before,
    .woocommerce .loader:before {
    background-size: 20%;
}
    </style>
    <?php
}
?>