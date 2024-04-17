<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_filter('woocommerce_rest_check_permissions', '__return_true');

$consumer_key = 'ck_751efd9507a83972f32f978f5a451c68aa52b5fd';
$secret_key = 'cs_9087aa4b48b4b880da6543c6867d40b019bfbdf9';
$site_url = 'http://localhost:8888/test1/';

require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;
//var_dump($woocommerce);       //Debug
use Automattic\WooCommerce\HttpClient\HttpClientException;

//register woocommerce client
$woocommerce = new Client(
    $site_url,
    $consumer_key,
    $secret_key,
    [
        'wp_api' => true,
        'version' => 'wc/v3',
    ]
);

//cron
if (!wp_next_scheduled('import_products_xml')) {
    wp_schedule_event( time(), 'daily', 'import_products_xml' );
}
    
add_action ( 'import_products_xml', 'run_import_products' );

function run_import_products() {
    //check is file exists
    if ( ! file_exists( 'products.xml' ) ) :
        die( 'Unable to find ' . 'products.xml' );
    endif;	

    try {
        $products_arr = parse_xml_file();

        foreach ( $array['product'] as $product ) {
            $wc_product = $woocommerce->post( 'products', $product );

            if ( $wc_product ) :
                status_message( 'Product added. ID: '. $wc_product['id'] );
            endif;
        }   
    } catch ( HttpClientException $e ) {
        echo $e->getMessage(); // Error message
    }
}; 

function parse_xml_file() {
    //parce products from xml file
    $feed = file_get_contents('products.xml', true);
    $xml = simplexml_load_string($feed);
    $json = json_encode($xml);
    return json_decode($json, TRUE);
};