<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Birthdate extends Controller
{
    public function index() {

        $objdobModel = new \App\Birthdate();

        $dob = $objdobModel->paginate(2);

        return view('Birthdate.index', compact('dob') );




    }




    public function store(){

        $objdob= new \App\Birthdate();

        $objdob->name = $_POST["name"];
        $objdob->dob = $_POST["dob"];


        $status = $objdob->save();

        if($status) echo "success!";
        else echo "failed";

        return redirect("Birthdate/index");


    }

    public function view($id){


        $objdobModel = new \App\Birthdate();

        $dob = $objdobModel->find($id);

        return view('Birthdate.view',compact('dob'));

    }




    public function edit($id){


        $objdobModel = new \App\Birthdate();

        $dob = $objdobModel->find($id);

        return view('Birthdate.edit',compact('dob'));

    }







    public function update(){


        $objdobModel = new \App\Birthdate();
        $dob = $objdobModel->find($_POST["id"]);
        $dob->name = $_POST["name"];
        $dob->authorname = $_POST["dob"];


        $status =  $dob->update();

        if($status) echo "success!";
        else echo "failed";

        return redirect("Birthdate/index");


    }





    public function delete($id){


        $objdobModel = new \App\Birthdate();

        $status = $objdobModel->find($id)->delete();

        if($status) echo "success!";
        else echo "failed";

        return redirect("Birthdate/index");

    }





    public function search($keyword){


        $objdob = new \App\Birthdate();

        $searchResult = $objdob
            ->where("name","LIKE","%$keyword%")
            ->orwhere("dob","LIKE","%$keyword%")

            ->paginate(2);



        return view('Birthdate.search_result',compact('searchResult')) ;



    }




}
