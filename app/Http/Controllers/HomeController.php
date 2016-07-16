<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/14
 * Time: 20:47
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function getHomePage(){
        $title = "深圳东亚信息技术";
        $category_name = 'home';
        return view("home.home_page",compact("title","category_name"));
    }

    public function getCategoryDetail($category_name,$on_subcategory = ''){
        $this_route = route('category_detail',['category_name' => $category_name]);
        $category_arrs = Config::get("home_conf.".$category_name.".menu");
        $menu = [];
        foreach($category_arrs as $key => $value) {
            if(empty($on_subcategory)) {
                $on_subcategory = $key;
            }
            //获取对应category的menu header
            $menu['header'][$key] = $value['header'];
            //获取对应category的menu
            $menu['menu'][$key] = $key;
        }
        $breadcrumb = $category_arrs[$on_subcategory]['header'];
        $title = Config::get("home_conf.".$category_name.".title");
        return view("home.category",compact("title","on_subcategory","menu","category_name","breadcrumb"));
    }
}