<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Front_endController/front_view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//Dashboard Template
$route['admin'] = 'DashboardController/view';
// Category
$route['add_category'] = 'CategoryController/Add_category';
$route['edit_category/(:num)'] = 'CategoryController/edit_category/$1';
$route['view_category'] = 'CategoryController/view_category';
$route['view'] = 'CategoryController/view_category';
// Brand
$route['add_brand'] = 'BrandController/Add_brand';
$route['edit_brand'] = 'BrandController/edit_brand';
$route['brand_view'] = 'BrandController/view_brand';
// Front-End
$route['front_end'] = 'Front_endController/front_view';
$route['blog'] = 'BlogController/blog';
$route['shop'] = 'Front_endController/shop_view';
$route['shoppingcart'] = 'Front_endController/shop_cart';
$route['contact'] = 'Front_endController/contact';
$route['blog_detail/(:num)'] = 'Front_endController/blog_detail/$1';
$route['search'] = 'Front_endController/search_list';
// specific_category_list
$route['specific_category_list/(:num)'] = 'Front_endController/specific_category_list/$1';
$route['filter_category_list/(:num)'] = 'Front_endController/filter_category_list/$1';

//one page product
$route['category_products_listing/(:num)'] = 'CustomerController/category_products_listing/$1'; 
// Setting
$route['add_data'] = 'SettingController/view_add_setting';
$route['view_data'] = 'SettingController/view_setting_list';
$route['add_adv_banner'] = 'SettingController/view_add_banner';
$route['view_banner_data_adv'] = 'SettingController/view_banner_list';
// Profile
$route['profile'] = 'ProfileController/view_profile';
$route['order_view'] = 'ProfileController/order_list';
$route['order_review_view'] = 'ProfileController/review_list';
// Login and Register Customer
$route['login_customer'] = 'CustomerController/login_view_customer';
$route['register_customer'] = 'CustomerController/Register';
// Blog
$route['add_blog'] = 'BlogController/add_blog';
$route['list_blog'] = 'BlogController/view_blog_list';
// Authentication
$route['login'] = 'loginController/login_view';
$route['register'] = 'loginController/register_view';
$route['logout'] = 'loginController/logout';
// Product
$route['add_product'] = 'ProductController/Add_Product';
$route['view_product'] = 'ProductController/view_Product';
$route['product_detail'] = 'ProductController/product_detail';
$route['edit_product/(:num)'] = 'ProductController/edit_product/$1';
$route['review'] = 'ProductController/view_review';
$route['wishlist'] = 'CustomerController/fav_cart/';
$route['cart'] = 'CustomerController/cart/';
$route['check_out'] = 'CustomerController/check_out';
//Customer
$route['view_customer'] = 'CustomerController/view_customer';
$route['add_to_cart/(:num)'] = 'CustomerController/addToCart/$1';
// $route['shoppingaddToCart/(:num)'] = 'CustomerController/shoppingaddToCart/$1';
$route['fav_to_cart/(:num)'] = 'CustomerController/favToCart/$1';
//Order
$route['view_order'] = 'OrderController/view_order';
$route['add_adv'] = 'OrderController/add_advertisement';
$route['view_adv'] = 'OrderController/view_adv_list';
$route['detail_order/(:num)'] = 'OrderController/order_detail/$1';
// Inventory
$route['Add_inventory']= 'InventoryController/form';
$route['view_inventory']= 'InventoryController/view_inventory';
//API
$route['Api_product_data_product'] = 'ApiController/product_Api';
$route['Api_brand_list'] = 'ApiController/brandlist_Api';


//Notification
$route['view_notificationList'] = 'NotificationController/view_list';
$route['view_viewList'] = 'NotificationController/view_reviewList';
// Chat
$route['chat-list'] = 'Front_endController/chat_list';
$route['admin_chat'] = 'Admin_Chat_Controller/Admin_chat';