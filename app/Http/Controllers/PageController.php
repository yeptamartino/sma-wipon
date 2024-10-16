<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Announcement;
use\App\History;
use\App\News;
use\App\PhotoGalery;
use\App\Slider;
use\App\Student;
use\App\Teacher;
use\App\Video;
use\App\VisionMission;
use Image;

class PageController extends Controller
{
    public function __construct(Announcement $announcement, History $history, News $news, Slider $slider,
    Video $video, VisionMission $visionMission, Teacher $teacher)
    {
        $this->announcement   = $announcement;
        $this->history        = $history;
        $this->news           = $news;
        $this->slider         = $slider;
        $this->video          = $video;
        $this->visionMission  = $visionMission;
    }

    public function home()

    {
        $announcement     = Announcement::orderBy('id','asc')->get();
        $history          = history::orderBy('id','asc')->get();
        $news             = News::orderBy('id','asc')->limit(4)->get();
        $slider           = Slider::orderBy('id','desc')->get();
        $teacher          = Teacher::orderBy('id','desc')->get();
        $video            = Video::orderBy('id','desc')->get();
        $visionMission    = VisionMission::orderBy('id','desc')->get();
        return view('welcome', compact('announcement','teacher','video', 'visionMission', 'history', 'news', 'slider'));
    }


    public function announcement() 

    {
        $announcement   = Announcement::orderBy('id','desc')->paginate(10);
        $news_content   = News::orderBy('id','desc')->get();
        return view('/user.announcement',compact('announcement','news_content'));
    }

    public function history() 

    {
        $history   = History::orderBy('id','desc')->get();
        $news_content   = News::orderBy('id','desc')->get();
        return view('/user.history',compact('history','news_content'));
    }

    public function visionMission() 

    {
        $vision_mission   = visionMission::orderBy('id','desc')->get();
        $news_content   = News::orderBy('id','desc')->get();
        return view('/user.vision-mission',compact('vision_mission','news_content'));
    }

    public function galeryPhoto() 

    {    
        $galery_photo   = PhotoGalery::orderBy('id','desc')->get();
        $news_content   = News::orderBy('id','desc')->get();
        return view('/user.galery-photo',compact('galery_photo','news_content'));
    }

    public function galeryVideo() 

    {    
        $galery_video   = Video::orderBy('id','desc')->get();
        $news_content   = News::orderBy('id','desc')->get();
        return view('/user.galery-video',compact('galery_video','news_content'));
    }

    public function news() 

    {
        $news_content   = News::orderBy('id','desc')->get();
        $news   = News::orderBy('id','desc')->get();

        return view('/user.news',compact('news','news_content'));
    }

    public function contact() {
    
        return view('/user.contact-us');
    }

    public function newsDetail($id) {

        $news           = News::orderBy('id','desc')->get();
        $news           = News::find($id);
        $news_content   = News::orderBy('id','desc')->get();
    
        return view('/user.news-detail',compact('news','news_content'));
    }
   
}
