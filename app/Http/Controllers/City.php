<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class City extends Controller
{

    public function index() {

        $objcityModel = new \App\City();

        $allcity = $objcityModel->paginate(2);

        return view('City.index', compact('allcity') );
    }




    public function store(){

        $objcity= new \App\City();

        $objcity->name = $_POST["name"];
        $objcity->cityName = $_POST["cityName"];


        $status = $objcity->save();

        if($status) echo "success!";
        else echo "failed";

        return redirect("City/index");


    }




    public function view($id){


        $objcityModel = new \App\City();

        $city = $objcityModel->find($id);

        return view('City.view',compact('city'));

    }




    public function edit($id){


        $objcityModel = new \App\City();

        $city = $objcityModel->find($id);

        return view('City.edit',compact('city'));

    }







    public function update(){


        $objcityModel = new \App\City();
        $city= $objcityModel->find($_POST["id"]);
        $city->name = $_POST["name"];
        $city->cityName = $_POST["cityName"];


        $status =  $city->update();

        if($status) echo "success!";
        else echo "failed";

        return redirect("City/index");


    }





    public function delete($id){


        $objcityModel = new \App\City();

        $status = $objcityModel->find($id)->delete();

        if($status) echo "success!";
        else echo "failed";

        return redirect("City/index");

    }





    public function search($keyword){


        $objcity = new \App\City();

        $searchResult = $objcity
            ->where("name","LIKE","%$keyword%")
            ->orwhere("cityName","LIKE","%$keyword%")

            ->paginate(2);



        return view('City.search_result',compact('searchResult')) ;



    }

}
