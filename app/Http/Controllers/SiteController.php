<?php

namespace App\Http\Controllers;
use App\Models\Noticeboard;
use App\Models\News;
use App\Models\Page;
use App\Models\Feature;
use App\Models\Team;
use App\Models\Gallery;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getHome(){
    	$data=[
    	'notices'=>Noticeboard::all(),
    	'news'=>News::all(),
    	'about'=>Page::where('slug','about-us')->limit(1)->first(),
    	'chairman'=>Page::where('slug','principle')->limit(1)->first(),
    	'features'=>Feature::orderby('id', 'desc')->get()

    	];
    	return view('site.home',$data);
    }
    public function getPage($slug){
        $data=[
            'page'=>page::where('slug', $slug)->limit(1)->first()
        ];
        return view('site.page',$data);
    }
    public function getTeam($type){ 
        $data=[
            'teams'=>Team::where('type',$type)->get(),
             'notices'=>Noticeboard::all(),
        ];
        return view('site.team',$data);
        
    }
    public function getFeatures(){
        $data=[
             'features'=>Feature::all(),
             'notices'=>Noticeboard::all()
        ];
        return view('site.feature', $data);
    }
    public function getNews(){
        $data =[
             'news'=>News::all()
        ];
      return view('site.news', $data);  
    }
    public function getNewsDetail($slug){
        $data=[
            'abc'=>News::where('slug',$slug)->limit(1)->first()
        ];
        return view('site.newsdetail',$data);
    }
    public function getNotices(){
        $data =[
             'notices'=>Noticeboard::all()
        ];
      return view('site.notice', $data);  
    }
    public function getNoticeDetail($slug){
        $data=[
            'abc'=>Noticeboard::where('slug',$slug)->limit(1)->first()
        ];

        return view('site.noticedetail',$data);
    }
    public function getGallery(){

        $data =[
             'galleries'=>Gallery::all()
        ];
      return view('site.gallery', $data);  
    }
    public function getContact(){
       
      return view('site.contact');  
    }


}
