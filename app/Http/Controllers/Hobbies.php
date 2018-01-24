<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hobbies extends Controller
{
    public function index() {

        $objhobbiesModel = new \App\Hobbies();

        $allhobbies = $objhobbiesModel->paginate(2);

        return view('Hobbies.index', compact('allhobbies') );
    }




    public function store(){

        $objhobbies= new \App\Hobbies();

        $objhobbies->name = $_POST["name"];



        $objhobbies->hobbies=implode(",", $_POST['mark']) ;

        $status = $objhobbies->save();

        if($status) echo "success!";
        else echo "failed";

        return redirect("Hobbies/index");


    }




    public function view($id){


        $objhobbiesModel = new \App\Hobbies();

        $hobbies = $objhobbiesModel->find($id);

        return view('Hobbies.view',compact('hobbies'));

    }




    public function edit($id){


        $objhobbiesModel = new \App\Hobbies();

        $hobbies = $objhobbiesModel->find($id);

        return view('Hobbies.edit',compact('hobbies'));

    }







    public function update(){


        $objhobbiesModel = new \App\Hobbies();
        $objhobbies = $objhobbiesModel->find($_POST["id"]);
        $objhobbies->name = $_POST["name"];
        $objhobbies->hobbies=implode(",", $_POST['mark']) ;


        $status =  $objhobbies->update();

        if($status) echo "success!";
        else echo "failed";

        return redirect("Hobbies/index");


    }





    public function delete($id){


        $objhobbiesModel = new \App\Hobbies();

        $status = $objhobbiesModel->find($id)->delete();

        if($status) echo "success!";
        else echo "failed";

        return redirect("Hobbies/index");

    }





    public function search($keyword){


        $objhobbies = new \App\Hobbies();

        $searchResult = $objhobbies
            ->where("name","LIKE","%$keyword%")
            ->orwhere("hobbies","LIKE","%$keyword%")

            ->paginate(2);



        return view('Hobbies.search_result',compact('searchResult')) ;



    }
}
