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
        return view("home.home_page",compact("title"));
    }

    public function getCategoryDetail($category_name){
        $this_route = route('category_detail',['category_name' => $category_name]);
        $category_arrs = Config::get("home_conf.".$category_name.".menu");
        $menu = [];
        $on_subcategory = '';
        foreach($category_arrs as $key => $value) {
            if(empty($on_subcategory)) {
                $on_subcategory = $key;
            }
            $menu['header'][] = $value['header'];
//            array_push($menu['url'],$value['url']);
        }
        $title = Config::get("home_conf.".$category_name.".title");
        return view("home.category",compact("title","on_subcategory","menu"));
    }
}