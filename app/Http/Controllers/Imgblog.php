<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class Imgblog extends Controller
{


    public function index()
    {

        $objBooktitleModel = new \App\Imgblog();

        $allProfilepicture = $objBooktitleModel->paginate(2);

        return view('admin.blog.imgblog.index', compact('allProfilepicture'));
    }

    public function index_user() {

        $objBooktitleModel = new \App\Imgblog();

        $employees = $objBooktitleModel->paginate(2);

        return view('asadprofile.blog.photoblog.imgblog', compact('employees') );
    }


    public function store()

    {
        $objProfilePicture = new \App\Imgblog();
        $objProfilePicture->title = $_POST['title'];
        $objProfilePicture->short_description = $_POST['short_description'];
        $objProfilePicture->full_description = $_POST['full_description'];
        $objProfilePicture->image = time(). $_FILES["File2Upload"]["name"];//File2Upload aita holo image er form er name='File2Upload'
        $status1 = $objProfilePicture->save();




        $source= $_FILES['File2Upload']['tmp_name'];
        @mkdir("UploadFolder");
        $destination="UploadFolder/".$objProfilePicture->image;
        $status2 = move_uploaded_file($source,$destination);

        $status = $status1 & $status2;

        if($status)echo "File Save & Upload Successful";
        else echo "File Save & Upload Failed";



        return redirect("blog/imgblog/index");

    }


    public function view($id){


        $objpropicModel = new \App\Imgblog();

        $propic = $objpropicModel->find($id);

        return view('admin.blog.imgblog.view',compact('propic'));

    }




    public function edit($id){


        $objpropicModel = new \App\Imgblog();

        $propic = $objpropicModel->find($id);

        return view('admin.blog.imgblog.edit',compact('propic'));

    }







    public function update(){

        $objProfilePicture = new \App\Imgblog();
        $propic= $objProfilePicture->find($_POST["id"]);
        $propic->title = $_POST['title'];
        $propic->short_description = $_POST['short_description'];
        $propic->full_description = $_POST['full_description'];
        $propic->image = time(). $_FILES["File2Upload"]["name"];
        $status1 = $propic->update();




        $source= $_FILES['File2Upload']['tmp_name'];
        @mkdir("UploadFolder");
        $destination="UploadFolder/".$propic->image;
        $status2 = move_uploaded_file($source,$destination);

        $status = $status1 & $status2;

        if($status)echo "File Save & Upload Successful";
        else echo "File Save & Upload Failed";



        return redirect("blog/imgblog/index");






    }





    public function delete($id){


        $objpropicModel = new \App\Imgblog();

        $status = $objpropicModel->find($id)->delete();

        if($status) echo "success!";
        else echo "failed";

        return redirect("blog/imgblog/index");

    }





    public function search($keyword){


        $objpropic = new \App\Profilepicture();

        $searchResult = $objpropic
            ->where("name","LIKE","%$keyword%")
            ->orwhere("profile_picture","LIKE","%$keyword%")

            ->paginate(2);



        return view('Profilepicture.search_result',compact('searchResult')) ;



    }







}