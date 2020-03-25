<?php /* Template Name: Contact Page */ ?>
<?php get_header();
$postID = get_the_ID();

//  ####  Service Grid Data
$service_1 = get_field_object('service_1', $postID)['value'];
$service_2 = get_field_object('service_2', $postID)['value'];
$service_3 = get_field_object('service_3', $postID)['value'];
$service_4 = get_field_object('service_4', $postID)['value'];

$service_description_1 = get_field_object('service_description_1', $postID)['value'];
$service_description_2 = get_field_object('service_description_2', $postID)['value'];
$service_description_3 = get_field_object('service_description_3', $postID)['value'];
$service_description_4 = get_field_object('service_description_4', $postID)['value'];

$service_5 = get_field_object('service_5', $postID)['value'];
$service_6 = get_field_object('service_6', $postID)['value'];
$service_7 = get_field_object('service_7', $postID)['value'];
$service_8 = get_field_object('service_8', $postID)['value'];

$service_description_5 = get_field_object('service_description_5', $postID)['value'];
$service_description_6 = get_field_object('service_description_6', $postID)['value'];
$service_description_7 = get_field_object('service_description_7', $postID)['value'];
$service_description_8 = get_field_object('service_description_8', $postID)['value'];