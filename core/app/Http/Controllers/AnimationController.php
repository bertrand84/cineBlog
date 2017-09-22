<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Animation;
use Validator;
use DB;

class AnimationController extends Controller{
    //RETOURNE LA VUE
    public function index(){

        $animations = animation::all();

        return view('animation/index', compact('animations'));
    }

    public function create(Request $request){

        if($request -> isMethod('post')){

            $validator = Validator::make($request -> all(), [
                'titre' => 'required|min:1',
                'synopsis' => 'required|min:5',
                'image' => 'required|min:5',
                'acteur' => 'required|min:5',
                'realisateur' => 'required|min:5',
                'type' => 'required|min:6',
                'distributeur' => 'required|min:3',
                'trailer' => 'required|min:5',
                'date' => 'required|min:4',

            ]);

            if($validator -> fails()){
                return redirect()->back()-> withErrors($validator) -> withInput();
            }else{
                $recanimation = new Animation();
                $recanimation ->titre = $request ->titre;
                $recanimation ->distributeur = $request ->distributeur;
                $recanimation ->synopsis = $request ->synopsis;
                $recanimation ->acteur = $request ->acteur;
                $recanimation ->realisateur = $request ->realisateur;
                $recanimation ->date = $request ->date;
                $recanimation ->trailer = $request ->trailer;
                $recanimation ->image = $request ->image;
                $recanimation ->type = $request ->type;




                $recanimation -> save();
                Session::flash('success',"votre film d'animation a bien été enregistré");
                return redirect('animation/index');
            }


        }
        return view('animation/create');
    }

    public function update($id, Request $request){

        $animation = animation::find($id);

        if($request -> isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'titre' => 'required|min:1',
                'synopsis' => 'required|min:5',
                'image' => 'required|min:5',
                'acteur' => 'required|min:5',
                'realisateur' => 'required|min:5',
                'type' => 'required|min:6',
                'distributeur' => 'required|min:3',
                'trailer' => 'required|min:5',
                'date' => 'required|min:4',

            ]);

            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                $animation->titre = $request->titre;
                $animation->distributeur = $request->distributeur;
                $animation->synopsis = $request->synopsis;
                $animation->acteur = $request->acteur;
                $animation ->realisateur = $request ->realisateur;
                $animation->date = $request->date;
                $animation->image = $request->image;
                $animation->type = $request->type;
                $animation->trailer = $request->trailer;


                $animation->save();
                Session::flash('success', "voter film a bien été enregistré");
                return redirect('animation/index');
            }
           /* return view('animation/update');*/

        }
        return view('animation/update',compact('animation'));

    }

    public function remove($id){

        $animation = animation::find($id);

        if($animation){
            session::flash ('sucess', 'Le film a bien ete supprime');
            $animation -> delete();
        }

        return redirect('animation/index');
    }
}
