<?php
use CozyEdge\Modules\Header\Lib;

if(!function_exists('cozy_edge_set_header_object')) {
    function cozy_edge_set_header_object() {
        $header_type = cozy_edge_get_meta_field_intersect('header_type', cozy_edge_get_page_id());

        $object = Lib\HeaderFactory::getInstance()->build($header_type);

        if(Lib\HeaderFactory::getInstance()->validHeaderObject()) {
            $header_connector = new Lib\HeaderConnector($object);
            $header_connector->connect($object->getConnectConfig());
        }
    }

    add_action('wp', 'cozy_edge_set_header_object', 1);
}