<?php

namespace App\Http\Controllers;

use App\Summeryoforganizaton;
use Illuminate\Http\Request;

class Summeryoforganization extends Controller
{
    public function index() {

        $objsooModel = new Summeryoforganizaton();

        $soo = $objsooModel->paginate(2);

        return view('Summeryoforganization.index', compact('soo') );




    }




    public function store(){

        $soo= new Summeryoforganizaton();

        $soo->name = $_POST["name"];
        $soo->txt = $_POST["txt"];


        $status = $soo->save();

        if($status) echo "success!";
        else echo "failed";

        return redirect("Summeryoforganization/index");


    }

    public function view($id){


        $objsooModel = new Summeryoforganizaton();

        $soo = $objsooModel->find($id);

        return view('Summeryoforganization.view',compact('soo'));

    }




    public function edit($id){


        $objsooModel = new Summeryoforganizaton();

        $soo = $objsooModel->find($id);

        return view('Summeryoforganization.edit',compact('soo'));

    }







    public function update(){


        $objsooModel = new Summeryoforganizaton();
        $soo = $objsooModel->find($_POST["id"]);
        $soo->name = $_POST["name"];
        $soo->txt = $_POST["txt"];


        $status =  $soo->update();

        if($status) echo "success!";
        else echo "failed";

        return redirect("Summeryoforganization/index");


    }





    public function delete($id){


        $objsooModel = new Summeryoforganizaton();

        $status = $objsooModel->find($id)->delete();

        if($status) echo "success!";
        else echo "failed";

        return redirect("Summeryoforganization/index");

    }





    public function search($keyword){


        $objsoo = new Summeryoforganizaton();

        $searchResult = $objsoo
            ->where("name","LIKE","%$keyword%")
            ->orwhere("soo","LIKE","%$keyword%")

            ->paginate(2);



        return view('Summeryoforganization.search_result',compact('searchResult')) ;



    }



}
