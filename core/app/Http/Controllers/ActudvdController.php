<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Actudvd;
use Validator;

class ActudvdController extends Controller
{
    public function index(){

        $actudvds = actudvd::all();
        return view('actudvd/index',compact('actudvds'));
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
                'trailer' => 'required|min:2',
                'date' => 'required|min:4',
                'support' => 'required|min:4',


            ]);

            if($validator -> fails()){
                return redirect('actudvd/create') -> withErrors($validator) -> withInput();
            }else{
                $recactudvd = new Actudvd();
                $recactudvd ->titre = $request ->titre;
                $recactudvd ->distributeur = $request ->distributeur;
                $recactudvd ->synopsis = $request ->synopsis;
                $recactudvd ->acteur = $request ->acteur;
                $recactudvd ->realisateur = $request ->realisateur;
                $recactudvd ->date = $request ->date;
                $recactudvd ->trailer = $request ->trailer;
                $recactudvd ->image = $request ->image;
                $recactudvd ->type = $request ->type;
                $recactudvd ->support =$request ->support;



                $recactudvd -> save();
                Session::flash('success',"votre dvd a bien été enregistré");
                return redirect('actudvd/index');
            }


        }

        return view('actudvd/create');
    }

    public function update($id, Request $request){

        $actudvd = actudvd::find($id);

        if($request -> isMethod('post')) {

            $validator = Validator::make($request->all(), [
               'titre' => 'required|min:5',
                'synopsis' => 'required|min:5',
                'image' => 'required|min:5',
                'acteur' => 'required|min:5',
                'realisateur' => 'required|min:5',
                'type' => 'required|min:6',
                'distributeur' => 'required|min:4',
                'trailer' => 'required|min:2',
                'date' => 'required|min:4',
                'support' => 'required|min:4',

            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                $actudvd->titre = $request->titre;
                $actudvd->distributeur = $request->distributeur;
                $actudvd->synopsis = $request->synopsis;
                $actudvd->acteur = $request->acteur;
                $actudvd ->realisateur = $request ->realisateur;
                $actudvd->date = $request->date;
                $actudvd->image = $request->image;
                $actudvd->type = $request->type;
                $actudvd->trailer = $request->trailer;
                $actudvd ->support =$request ->support;


                $actudvd->save();
                Session::flash('success', "voter film a bien été enregistré");
                return redirect('actudvd/index');
            }

        }
        return view('actudvd/update', compact("actudvd"));
    }

    public function remove($id){

        $actudvd = actudvd::find($id);

        if($actudvd){
            session::flash ('sucess', 'Le film a bien ete supprime');
            $actudvd -> delete();
        }

        return redirect('actudvd/index');
    }

}

