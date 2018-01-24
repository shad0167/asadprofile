<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profilepicture extends Controller
{
    public function index() {

        $objProfilepicture = new \App\Profilepicture();

        $allProfilepicture = $objProfilepicture->paginate(1);

        return view('Profilepicture.index', compact('allProfilepicture') );
    }







    public function store()

    {
        $objProfilePicture = new \App\Profilepicture();
        $objProfilePicture->name = $_POST['name'];
        $objProfilePicture->profile_picture = time(). $_FILES["File2Upload"]["name"];
        $status1 = $objProfilePicture->save();




        $source= $_FILES['File2Upload']['tmp_name'];
        @mkdir("UploadFolder");
        $destination="UploadFolder/".$objProfilePicture->profile_picture;
        $status2 = move_uploaded_file($source,$destination);

        $status = $status1 & $status2;

        if($status)echo "File Save & Upload Successful";
        else echo "File Save & Upload Failed";



        return redirect("Profilepicture/index");

    }









    public function view($id){


        $objpropicModel = new \App\Profilepicture();

        $propic = $objpropicModel->find($id);

        return view('Profilepicture.view',compact('propic'));

    }




    public function edit($id){


        $objpropicModel = new \App\Profilepicture();

        $propic = $objpropicModel->find($id);

        return view('Profilepicture.edit',compact('propic'));

    }







    public function update(){

        $objProfilePicture = new \App\Profilepicture();
        $propic= $objProfilePicture->find($_POST["id"]);
        $propic->name = $_POST['name'];
        $propic->profile_picture = time(). $_FILES["File2Upload"]["name"];
        $status1 = $propic->update();




        $source= $_FILES['File2Upload']['tmp_name'];
        @mkdir("UploadFolder");
        $destination="UploadFolder/".$propic->profile_picture;
        $status2 = move_uploaded_file($source,$destination);

        $status = $status1 & $status2;

        if($status)echo "File Save & Upload Successful";
        else echo "File Save & Upload Failed";



        return redirect("Profilepicture/index");






    }





    public function delete($id){


        $objpropicModel = new \App\Profilepicture();

        $status = $objpropicModel->find($id)->delete();

        if($status) echo "success!";
        else echo "failed";

        return redirect("Profilepicture/index");

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
