<?php

//字数统计开始
function count_words ($text) {
global $post;
if ( '' == $text ) {
   $text = $post->post_content;
   if (mb_strlen($output, 'UTF-8') < mb_strlen($text, 'UTF-8')) $output .= '共' . mb_strlen(preg_replace('/\s/','',html_entity_decode(strip_tags($post->post_content))),'UTF-8') . '个字';
   return $output;
}
}
//字数统计结束

//点赞代码开始
add_action('wp_ajax_nopriv_bigfa_like', 'bigfa_like');
add_action('wp_ajax_bigfa_like', 'bigfa_like');
function bigfa_like(){
    global $wpdb,$post;
    $id = $_POST["um_id"];
    $action = $_POST["um_action"];
    if ( $action == 'ding'){
    $bigfa_raters = get_post_meta($id,'bigfa_ding',true);
    $expire = time() + 99999999;
    $domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false; // make cookies work with localhost
    setcookie('bigfa_ding_'.$id,$id,$expire,'/',$domain,false);
    if (!$bigfa_raters || !is_numeric($bigfa_raters)) {
        update_post_meta($id, 'bigfa_ding', 1);
    } 
    else {
            update_post_meta($id, 'bigfa_ding', ($bigfa_raters + 1));
        }
   
    echo get_post_meta($id,'bigfa_ding',true);
    
    } 
    
    die;
}
//点赞代码结束

?>