<?php
    require_once('includes/connection.inc.php');
    if(isset($_GET['parameter']) && $_GET['parameter']!=''){
        $urlArr=explode("/",$_GET['parameter']);
        // echo "<pre>";
        // print_r($urlArr);
        
        if($urlArr[0]=='blog'){
            echo "blog page";
            if(!isset($urlArr[1])){
                include('blog.php');
            }else{
                include('single.php');
            }
        }else if($urlArr[0]=='store'){
            if(isset($urlArr[1])){
                if($urlArr[1]=='category'){
                    include('categories.php');
                }else{
                    include('product.php');
                }
            }else{
                include('store.php');
            }
        }else if($urlArr[0]=='contact'){
            include('contact.php');
        }else{
            include('home.php');
        }
    }else{
        include('home.php');
    }
?>