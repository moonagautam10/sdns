<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Noticeboard;
use App\Models\News;
use App\Models\Team;
use App\Models\Feature;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Slider;
class HomeController extends Controller
{
    public function getManageNoticeboard(){
    	$data=[
    		'noticeboards'=>Noticeboard::orderby('id','desc')->get()
    	];

    	return view('layouts.noticeboard.manage',$data);
    }
     public function getAddNoticeboard(){
    	return view('layouts.noticeboard.add');
    }
    public function postAddNoticeboard(Request $request){
    	$title=$request->input('title');
    	$detail=$request->input('detail');
        $slug = preg_replace('/\s+/', '-', $title);
        
        $cehck = Noticeboard::where('slug', $slug)->count();
        if($cehck == 0){
    	$noticeboard=New Noticeboard;
    	$noticeboard->title=$title;
        $noticeboard->slug = $slug;
    	$noticeboard->detail=$detail;
    	$noticeboard->save();
    	return redirect()->route('getManageNoticeboard')->with('message', 'Notice added success');
    }
    else{
        return redirect()->route('getManageNoticeboard')->with('message', 'Únable to edit due to title dublicate');
    }
	}
    public function getDeleteNoticeboard(Noticeboard $noticeboard){
        $noticeboard->delete();
        return redirect()->route('getManageNoticeboard')->with('message', 'Notice deleted success.');
    }
     public function getEditNoticeboard(Noticeboard $noticeboard){
        $data=[
            'noticeboard'=>$noticeboard

        ];
        return view('layouts.noticeboard.edit',$data);

    }
    public function postEditNoticeboard(Noticeboard $noticeboard, Request $request){
        $title=$request->input('title');
        $detail=$request->input('detail');
        $slug = preg_replace('/\s+/', '-', $title);
        // check slug
        $cehck = Noticeboard::where('slug', $slug)->where('id', '!=', $noticeboard->id)->count();
        if($cehck == 0){
            $noticeboard->title=$title;
            $noticeboard->detail=$detail;
            $noticeboard->save();
            return redirect()->route('getManageNoticeboard')->with('message', 'Notice edited success.');  
        }
        else{
        return redirect()->route('getManageNoticeboard')->with('message', 'Únable to edit due to title dublicate');
        }
    }
    //for slider
    public function getManageSlider(){
        $data=[
            'sliders'=>Slider::orderby('id','desc')->get()

        ];
        return view('layouts.slider.manage',$data);
    }
    public function getAddSlider(){
        return view('layouts.slider.add');
    }



	 //for news
	public function getManageNews(){
		$data=[
			'news'=>News::orderby('id','desc')->get()
		];
		return view('layouts.news.manage',$data);
	}
	public function getAddNews(){
		return view('layouts.news.add');
	}
    public function postAddSlider(Request $request){
        $photo=$request->file('photo');

        $getuniquename = sha1($photo->getClientOriginalName().time());
        $getextension = $photo->getClientOriginalExtension();
        $getrealname= $getuniquename.'.'.$getextension;
        $photo->move('site/img/slider/',$getrealname);

        $slider=New Slider;
        $slider->photo=$getrealname;
        $slider->save();
        return redirect()->route('getManageSlider')->with('message', 'Slider Added Success.');
}
        public function getDeleteSlider(Slider $slider){
        $slider->delete();
        return redirect()->route('getManageSlider')->with('message', 'Slider Deleted Success.');
    

    }
	public function postAddNews(Request $request){
		$title=$request->input('title');
		$detail=$request->input('detail');
		$photo=$request->file('photo');
        $slug = preg_replace('/\s+/', '-', $title);
        // check slug
        $check = News::where('slug', $slug)->count();
        if($check == 0){
		//for photo
		$getuniquename = sha1($photo->getClientOriginalName().time());
        $getextension = $photo->getClientOriginalExtension();
        $getrealname= $getuniquename.'.'.$getextension;
        $photo->move('site/img/news/',$getrealname);

        $news=New News;
    	$news->title=$title;
        $news->slug = $slug;
    	$news->detail=$detail;
    	$news->photo=$getrealname;
    	$news->save();
    	return redirect()->route('getManageNews')->with('message', 'News Added Success.');
    }
    else{
         return redirect()->route('getManageNews')->with('message', 'Unable to edit due to title dublicate');
}
	}
    public function getDeleteNews(News $news){
        $news->delete();
        return redirect()->route('getManageNews')->with('message', 'News Deleted Success.');
    }
     public function getEditNews(News $news){
        $data=[
            'news'=>$news

        ];
        return view('layouts.news.edit',$data);

    }
    public function postEditNews(News $news, Request $request){
        $title=$request->input('title');
        $slug = preg_replace('/\s+/', '-', $title);     
        $detail=$request->input('detail');
        $photo=$request->file('photo');

         $cehck = News::where('slug', $slug)->where('id', '!=', $news->id)->count();
        if($cehck == 0){
        if($photo){
        $getuniquename = sha1($photo->getClientOriginalName().time());
        $getextension = $photo->getClientOriginalExtension();
        $getrealname= $getuniquename.'.'.$getextension;
        $photo->move('site/img/news/',$getrealname);
        
        
        $news->title=$title;
        $news->detail=$detail;
        $news->photo=$getrealname;
        $news->save();
    }
    else{
        $news->title= $title;
        $news->detail= $detail;
        $news->save();   
 }
    return redirect()->route('getManageNews')->with('message', 'News Edited Success');
}
    else{
        return redirect()->route('getManageNews')->with('message', 'Unable to  add News due to title dublicate.');
    }

    }
	//for team
	public function getManageTeam(){
		$data=[
			'teams'=>Team::orderby('id','desc')->get()
		];
		return view('layouts.team.manage',$data);
	}
	public function getAddTeam(){
		return view('layouts.team.add');
	}
	 public function postAddTeam(Request $request){
    	$type=$request->input('type');
    	$name=$request->input('name');
    	$post=$request->input('post');
    	$photo=$request->file('photo');

    	$getuniquename = sha1($photo->getClientOriginalName().time());
        $getextension = $photo->getClientOriginalExtension();
        $getrealname= $getuniquename.'.'.$getextension;
        $photo->move('site/img/team/',$getrealname);

    	$team=New Team;
    	$team->type=$type;
    	$team->name=$name;
    	$team->post=$post;
    	$team->photo=$getrealname;
    	$team->save();
        return redirect()->route('getManageTeam')->with('message', 'Team Added Success.');
    }
    
	public function getDeleteTeam(Team $team){
		$team->delete();
		 return redirect()->route('getManageTeam')->with('message', 'Team Deleted Success.');

	}
     public function getEditTeam(Team $team){
        $data=[
            'team'=>$team

        ];
        return view('layouts.team.edit',$data);

    }
    public function postEditTeam(Team $team, Request $request){
        $type=$request->input('type');
        $name=$request->input('name');
        $post=$request->input('post');
        $photo=$request->file('photo');


        //for image
        if($photo){
        $getuniquename = sha1($photo->getClientOriginalName().time());
        $getextension = $photo->getClientOriginalExtension();
        $getrealname= $getuniquename.'.'.$getextension;
        $photo->move('site/img/team/',$getrealname);
        
        
        $team->type=$type;
        $team->name=$name;
        $team->post=$post;
        $team->photo=$getrealname;
        $team->save();
    }
    else{
       $team->type=$type;
        $team->name=$name;
        $team->post=$post;
        $team->save();   
 }
    return redirect()->route('getManageTeam')->with('message', 'Team Edited Success.');
    }
    //for feature
    public function getManageFeature(){
        $data=[
            'features'=>Feature::orderby('id','desc')->get()
        ];
        return view('layouts.feature.manage',$data);
    }
    public function getAddFeature(){
        return view('layouts.feature.add');
    }
    public function postAddFeature(Request $request){
        $title=$request->input('title');
        $detail=$request->input('detail');
        $photo=$request->file('photo');
        //for photo
        $getuniquename = sha1($photo->getClientOriginalName().time());
        $getextension = $photo->getClientOriginalExtension();
        $getrealname= $getuniquename.'.'.$getextension;
        $photo->move('site/img/feature/',$getrealname);

        $feature=New Feature;
        $feature->title=$title;
        $feature->detail=$detail;
        $feature->photo=$getrealname;
        $feature->save();
        return redirect()->route('getManageFeature')->with('message', 'Feature Added Success.');
    }  
    public function getDeleteFeature(Feature $feature){
        $feature->delete();
        return redirect()->route('getManageFeature')->with('message', 'Feature Deleted Success.');
    } 
     public function getEditFeature(Feature $feature){
        $data=[
            'feature'=>$feature

        ];
        return view('layouts.feature.edit',$data);

    }
    public function postEditFeature(Feature $feature, Request $request){
        $title=$request->input('title');
        $detail=$request->input('detail');
        $photo=$request->file('photo');
        
        //for image
        if($photo){
        $getuniquename = sha1($photo->getClientOriginalName().time());
        $getextension = $photo->getClientOriginalExtension();
        $getrealname= $getuniquename.'.'.$getextension;
        $photo->move('site/img/feature/',$getrealname);
        
        
        $feature->title=$title;
        $feature->detail=$detail;
        $feature->photo=$getrealname;
        $feature->save();
    }
    else{
              
        $feature->title=$title;
        $feature->detail=$detail;
        $feature->save();   
 }
    return redirect()->route('getManageFeature')->with('message', 'Feature Edited Success.');
    } 
    //for Gallery
    public function getManageGallery(){
        $data=[
            'galleries'=> Gallery::orderby('id','desc')->get()
        ];
        return view('layouts.gallery.manage',$data);
    }
        public function getAddGallery(){
        return view('layouts.gallery.add');
    }
     public function postAddGallery(Request $request){
        $title=$request->input('title');
        $photo=$request->file('photo');
        //for photo
        $getuniquename = sha1($photo->getClientOriginalName().time());
        $getextension = $photo->getClientOriginalExtension();
        $getrealname= $getuniquename.'.'.$getextension;
        $photo->move('site/img/gallery/',$getrealname);

        $gallery=New Gallery;
        $gallery->title=$title;
        $gallery->photo=$getrealname;
        $gallery->save();
        return redirect()->route('getManageGallery')->with('message', 'Gallery Added Success.');
    }  
    public function getDeleteGallery(Gallery $gallery){
        $gallery->delete();
        return redirect()->route('getManageGallery')->with('message', 'Gallery Deleted Success.');
    } 
     public function getEditGallery(Gallery $gallery){
        $data=[
            'gallery'=>$gallery

        ];
        return view('layouts.gallery.edit',$data);

    }
     public function postEditGallery(Gallery $gallery, Request $request){
        $title=$request->input('title');
        $photo=$request->file('photo');

        //for image
        if($photo){
        $getuniquename = sha1($photo->getClientOriginalName().time());
        $getextension = $photo->getClientOriginalExtension();
        $getrealname= $getuniquename.'.'.$getextension;
        $photo->move('site/img/gallery/',$getrealname);
        
        
        $gallery->title=$title;
        $gallery->photo=$getrealname;
        $gallery->save();
    }
    else{
              
        $gallery->title=$title;
        $gallery->save();   
 }
    return redirect()->route('getManageGallery')->with('message', 'Gallery Edited Success.');
    } 
//for page
    public function getManagePage(){
        $data=[
            'pages'=>page::orderby('id','desc')->get()
        ];
        return view('layouts.page.manage',$data);
    }
    public function getAddPage(){
        return view('layouts.page.add');
    }
    public function postAddPage(Request $request){
        $title=$request->input('title');
        $detail=$request->input('detail');
        $page_type=$request->input('page_type');
        $slug=$request->input('slug');
        $photo=$request->file('photo');
        //for photo
        $getuniquename = sha1($photo->getClientOriginalName().time());
        $getextension = $photo->getClientOriginalExtension();
        $getrealname= $getuniquename.'.'.$getextension;
        $photo->move('site/img/page/',$getrealname);

        $page=New Page;
        $page->title=$title;
        $page->detail=$detail;
        $page->page_type=$page_type;
        $page->slug=$slug;
        $page->photo=$getrealname;
        $page->save();
        return redirect()->route('getManagePage');
    }
    public function getDeletePage(Page $page){
        $page->delete();
        return redirect()->route('getManagePage');
    }
     public function getEditPage(Page $page){
        $data=[
            'page'=>$page

        ];
        return view('layouts.page.edit',$data);

    }
    public function postEditPage(Page $page, Request $request){
        $detail=$request->input('detail');
        $photo=$request->file('photo');

         //for image
        if($photo){
        $getuniquename = sha1($photo->getClientOriginalName().time());
        $getextension = $photo->getClientOriginalExtension();
        $getrealname= $getuniquename.'.'.$getextension;
        $photo->move('site/img/page/',$getrealname);
        
        
        $page->detail=$detail;
        $page->photo=$getrealname;
        $page->save();
    }
    else{
        $page->detail= $detail;
        $page->save();   
 }
    return redirect()->route('getManagePage')->with('message', 'Page Edited Success.');


    }

    }

