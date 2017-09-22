<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Film;
use App\User;
use Validator;

class FilmsController extends Controller{
    public function index(){

        $films = Film::all();

        

        return view('film/index', compact('films'));
    }

    public function create(Request $request){

        if($request -> isMethod('post')){

            $validator = Validator::make($request -> all(), [
                'titre' => 'required|min:5',
                'synopsis' => 'required|min:5',
                'image' => 'required|min:5',
                'acteur' => 'required|min:5',
                'realisateur' => 'required|min:5',
                'type' => 'required|min:6',
                'distributeur' => 'required|min:4',
                'trailer' => 'required|min:5',
                'date' => 'required|min:4',

            ]);

            if($validator -> fails()){
                return redirect('film/create') -> withErrors($validator) -> withInput();
            }else{
                $recfilm = new Film();
                $recfilm ->titre = $request ->titre;
                $recfilm ->distributeur = $request ->distributeur;
                $recfilm ->synopsis = $request ->synopsis;
                $recfilm ->acteur = $request ->acteur;
                $recfilm ->realisateur = $request ->realisateur;
                $recfilm ->date = $request ->date;
                $recfilm ->trailer = $request ->trailer;
                $recfilm ->image = $request ->image;
                $recfilm ->type = $request ->type;




                $recfilm -> save();
                Session::flash('success',"voter film a bien été enregistré");
                return redirect('film/index');
            }


        }

        return view('film/create');
    }

    public function update($id, Request $request){

        $film = film::find($id);

        if($request -> isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'titre' => 'required|min:5',
                'synopsis' => 'required|min:5',
                'image' => 'required|min:5',
                'acteur' => 'required|min:5',
                'realisateur' => 'required|min:5',
                'type' => 'required|min:6',
                'distributeur' => 'required|min:4',
                'trailer' => 'required|min:5',
                'date' => 'required|min:4',

            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                $film->titre = $request->titre;
                $film->distributeur = $request->distributeur;
                $film->synopsis = $request->synopsis;
                $film->acteur = $request->acteur;
                $film ->realisateur = $request ->realisateur;
                $film->date = $request->date;
                $film->image = $request->image;
                $film ->type = $request->type;
                $film ->trailer = $request ->trailer;


                $film->save();
                Session::flash('success', "votre film a bien été enregistré");
                return redirect('film/index');
            }

        }

        return view('film/update',compact('film'));
    }



    public function remove($id){

        $remfilm = film::find($id);

        if($remfilm){
            session::flash ('sucess', 'Le film a bien ete supprime');
            $remfilm -> delete();
        }

        return redirect('film/index');
    }

}
