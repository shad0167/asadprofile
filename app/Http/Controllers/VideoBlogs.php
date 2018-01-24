<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoBlogs extends Controller
{
    public function index() {

        $objBooktitleModel = new \App\VideoBlog();

        $allBooktitles = $objBooktitleModel->paginate(2);

        return view('admin.blog.videoblog.index', compact('allBooktitles') );
    }

    public function index_user() {

        $objBooktitleModel = new \App\VideoBlog();

        $employees = $objBooktitleModel->paginate(2);

        return view('asadprofile.blog.videoblog.youTubeVideoBlog', compact('employees') );
    }


    public function store(){

        $objBooktitle= new \App\VideoBlog();

        $objBooktitle->video_link = $_POST["video_link"];
        $objBooktitle->title = $_POST["title"];

        $objBooktitle->short_description = $_POST["short_description"];
        $objBooktitle->date = $_POST["date"];

        $status = $objBooktitle->save();

        if($status) echo "success!";
        else echo "failed";

        return redirect("blog/videoblog/index");


    }




    public function view($id){


        $objbooktitleModel = new \App\VideoBlog();

        $booktitle = $objbooktitleModel->find($id);

        return view('admin.blog.videoblog.view',compact('videoblog'));

    }




    public function edit($id){


        $objbooktitleModel = new \App\VideoBlog();

        $booktitle = $objbooktitleModel->find($id);

        return view('admin.blog.videoblog.edit',compact('videoblog'));

    }







    public function update(){


        $objbooktitleModel = new \App\VideoBlog();
        $booktitle = $objbooktitleModel->find($_POST["id"]);




        $booktitle->video_link = $_POST["video_link"];
        $booktitle->title = $_POST["title"];

        $booktitle->short_description = $_POST["short_description"];
        $booktitle->date = $_POST["date"];


        $status =  $booktitle->update();

        if($status) echo "success!";
        else echo "failed";

        return redirect("Booktitle/index");


    }





    public function delete($id){


        $objbooktitleModel = new \App\VideoBlog();

        $status = $objbooktitleModel->find($id)->delete();

        if($status) echo "success!";
        else echo "failed";

        return redirect("blog/videoblog/index");

    }




/*
    public function search($keyword){


        $objbooktitle = new \App\Booktitle();

        $searchResult = $objbooktitle
            ->where("name","LIKE","%$keyword%")
            ->orwhere("authorname","LIKE","%$keyword%")

            ->paginate(2);



        return view('Booktitle.search_result',compact('searchResult')) ;



    }*/
}
