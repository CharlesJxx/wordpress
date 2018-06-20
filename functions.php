<?php


function catch_that_image() {

global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
 
//获取文章中第一张图片的路径并输出
$first_img = $matches [1] [0];
 
//如果文章无图片，获取自定义图片
 
//if(empty($first_img)){ //Defines a default image
//$first_img = "/images/default.jpg";
 
//请自行设置一张default.jpg图片
//}
 
return $first_img;
}


//使WordPress支持post thumbnail
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'customized-post-thumb', 100, 120 );
}

// 自适应图片删除width和height  
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );  
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );  
   
function remove_width_attribute( $html ) {  
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );  
   return $html;  
}  
?>

