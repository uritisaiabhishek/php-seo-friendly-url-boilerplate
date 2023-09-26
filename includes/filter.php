<?php
    $url = $_SERVER['REQUEST_URI'];
    // $url = "http://localhost/seofriendlyurls/store?size=medium&price%5B%5D=from%3D1000&price%5B%5D=to%3DMax&color%5B%5D=red&color%5B%5D=yellow&color%5B%5D=blue";
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);
    echo "<pre>";
    print_r($params);
?>