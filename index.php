<?php 
require_once "post.php";
require_once "category.php";
require_once "user.php";



$post = new Post();

echo "<pre>";
print_r($post->getAll());
echo "</pre>";

$category = new Category();

echo "<pre>";
print_r($category->getAll());
echo "</pre>";

$user = new User();

echo "<pre>";
print_r($user->getAll());
echo "</pre>";
 ?>
