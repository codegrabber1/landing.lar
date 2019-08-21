<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class IndexController extends MainController
{
    //

    public function index() {

        $pages = Page::all();

        $services = Service::all();

        $portfolio = Portfolio::get(array('category_id','user_id', 'title','images'))->take(6);

        $contact = Contact::all();
        //dd($contact);

        $menu = array();

        foreach($pages as $page) {

            $item = array('title'=>$page->title, 'slug'=>$page->slug, 'link'=>$page->slug);

            array_push($menu, $item);

        }

        $item = array('title'=>'Services', 'slug'=>'services', 'link'=>'Services');
        array_push($menu, $item);

        $item = array('title' => 'Portfolio', 'slug' => 'portfolio', 'link'=>'Portfolio');
        array_push($menu, $item);

        $item = array('title' => 'Contact', 'slug' => 'contact', 'link'=>'Contact');
        array_push($menu, $item);

        return view('layouts.index', compact('pages', 'menu', 'services', 'portfolio', 'contact'));
    }
}
