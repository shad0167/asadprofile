<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Booktitle extends Controller
{


    public function index() {

        $objBooktitleModel = new \App\Booktitle();

        $allBooktitles = $objBooktitleModel->paginate(2);

        return view('Booktitle.index', compact('allBooktitles') );
    }




        public function store(){

            $objBooktitle= new \App\Booktitle();

            $objBooktitle->name = $_POST["name"];
            $objBooktitle->authorname = $_POST["authorname"];


            $status = $objBooktitle->save();

            if($status) echo "success!";
            else echo "failed";

            return redirect("Booktitle/index");


        }




    public function view($id){


        $objbooktitleModel = new \App\Booktitle();

        $booktitle = $objbooktitleModel->find($id);

        return view('Booktitle.view',compact('booktitle'));

    }




    public function edit($id){


        $objbooktitleModel = new \App\Booktitle();

        $booktitle = $objbooktitleModel->find($id);

        return view('Booktitle.edit',compact('booktitle'));

    }







    public function update(){


        $objbooktitleModel = new \App\Booktitle();
        $booktitle = $objbooktitleModel->find($_POST["id"]);
        $booktitle->name = $_POST["name"];
        $booktitle->authorname = $_POST["authorname"];


        $status =  $booktitle->update();

        if($status) echo "success!";
        else echo "failed";

        return redirect("Booktitle/index");


    }





    public function delete($id){


        $objbooktitleModel = new \App\Booktitle();

        $status = $objbooktitleModel->find($id)->delete();

        if($status) echo "success!";
        else echo "failed";

        return redirect("Booktitle/index");

    }





    public function search($keyword){


        $objbooktitle = new \App\Booktitle();

        $searchResult = $objbooktitle
            ->where("name","LIKE","%$keyword%")
            ->orwhere("authorname","LIKE","%$keyword%")

            ->paginate(2);



        return view('Booktitle.search_result',compact('searchResult')) ;



    }





}
