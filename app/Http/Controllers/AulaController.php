<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aula;

class AulaController extends Controller
{
    public function index(){

        $aulas = Aula::All();


        return view('welcome',['aulas' => $aulas]);
    }

    public function create(){
        return view ('aulas.create');

    }

    public function store(Request $request){
            $aula = new Aula;

            $aula->title = $request->title;
            $aula->city = $request->city;
            $aula->private = $request->private;
            $aula->description = $request->description;

            //image upload

            if($request->hasFile('image') && $request->file('image')->isValid()) {

                $requestImage = $request->image;

                $extension = $requestImage->extension();

                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

                $requestImage->move(public_path('img/aulas'), $imageName);

                $aula->image = $imageName;
            }

            $aula->save();

            return redirect('/')->with('msg', 'Aula criada com sucesso');
    }

    public function show($id) {

        $aula = Aula::findorFail($id);

        return view('aulas.show', ['aula => $aula']);
    }
}



