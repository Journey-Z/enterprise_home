<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/14
 * Time: 20:47
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function getHomePage(){
        $title = "gdfgfdgdf";
        return view("home.home_page",compact("title"));
    }
}