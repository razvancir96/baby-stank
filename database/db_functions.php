<?php 

require_once 'idiorm.php';
ORM::configure('mysql:host=localhost;dbname=proiect_pw');
ORM::configure('username', 'root');
ORM::configure('password', '');

function create_user($username, $email, $password)
{
	// check to see if user exists
	$existing_user = ORM::for_table('users')->where('username', trim($username))->find_one();
    if ($existing_user) {
    	return false;
    } 
    $user = ORM::for_table('users')->create();
    $user->username = trim($username);
    $user->email = trim($email);
    $user->hashed_password = md5($password);
    $user->save();
    return $user;
}

function verify_user($username, $password) {
	$user = ORM::for_table('users')->where('username', trim($username))->find_one();
	if ($user) {
		if ($user->hashed_password == md5($password)) {
			return $user;
		} else {
			return false;
		}
	} else {
		return false;
	}
}

function get_health_posts() {
	$posts = ORM::for_table('forum')->where('category', 'sanatate')->order_by_asc('creation_date')->find_many();
	return $posts;
}

function get_free_time_posts() {
	$posts = ORM::for_table('forum')->where('category', 'timp_liber')->order_by_asc('creation_date')->find_many();
	return $posts;
}

function get_lactation_posts() {
	$posts = ORM::for_table('forum')->where('category', 'alaptare')->order_by_asc('creation_date')->find_many();
	return $posts;
}

function add_post($username, $content, $category) {
	$post = ORM::for_table('forum')->create();
    $post->username = trim($username);
   	$post->content = trim($content);
   	$post->category = trim($category);
   	$post->save();
    return $post;
}

function list_photos(){
	$images = ORM::for_table('images')->order_by_asc('creation_date')->find_many();
	return $images;
}

function add_photo($image_url, $image_name, $username) {
	$image = ORM::for_table('images')->create();
   	$image->image_url = trim($image_url);
   	$image->image_name = trim($image_name);
   	$image->username = trim($username);
   	$image->save();
    return $image;
}

function display_products($category) {
	$result = ORM::for_table('product')->where('category', $category)->find_many();
	return $result;
}

function search_products($input) {
	$processed_input = '%' . $input . '%';
	$results = ORM::for_table('product')
            ->where_any_is(array(
                array('product_name' => $processed_input),
                array('vendor' => $processed_input),
            	array('category' => $processed_input)), 'like')
            ->find_many();
    return $results;
}

?>