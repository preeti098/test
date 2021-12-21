<?php
/**
 * Plugin Name: TMI API
 * Description: API
 * Author: PS
 * Author URI: 
 * Version: 0.1
 */
 ?>
 <?
 add_action( 'rest_api_init', 'all_api' );

//all api route registered
function all_api() {
    register_rest_route( 'tmi/v1', 'userList', array(
                    'methods' => 'GET',
                    'callback' => 'get_all_user',
                )
            );
            
    register_rest_route( 'tmi/v1', 'userUpdate', array(
                    'methods' => 'GET',
                    'callback' => 'update_all_user',
                )
            );
}
//all api route registered

//get all user
function get_all_user() {
    global $wpdb;
  //$users = get_users( array( 'fields' => array( 'ID' ) ) );
    $users = get_users();
    //return $users;
    $array_userMeta=array();
    foreach($users as $user_id){
      //$array_userMeta[]=array(get_user_meta($user_id->ID));
        $array_userMeta[]=array(
            'ID' =>	$user_id->ID,
            'user_login' =>	$user_id->user_login,
            'user_pass' =>	$user_id->user_pass,
            'user_nicename' =>	$user_id->user_nicename,
            'user_email' =>	$user_id->user_email,
            'assign_branch_ID' =>	$user_id->assign_branch_ID,
            'user_url' =>	$user_id->user_url,
            'user_registered' =>	$user_id->user_registered,
            'user_activation_key' =>	$user_id->user_activation_key,
            'user_status' =>	$user_id->user_status,
            'display_name' =>	$user_id->display_name,
            'userMeta'=>get_usermeta($user_id->ID)
        );
    }
    return $array_userMeta;
}
//get all user


//update  user
function update_all_user() {
    global $wpdb;
  //$users = get_users( array( 'fields' => array( 'ID' ) ) );
    $users = get_users();
    //return $users;
    $array_userMeta=array();
    foreach($users as $user_id){
      $array_userMeta[]=array(get_user_meta($user_id->ID));
    }
    return $users;
}
//update  user
?>