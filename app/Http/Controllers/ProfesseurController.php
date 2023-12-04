<?php

namespace App\Http\Controllers;
use App\Models\Professeur;
use App\Models\Localite;
use App\Models\User;


use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localite = Localite::all();
        $user= User::all();
        $prof = Professeur::all();


        //dd($prof);
        return view('professeur',compact('localite','user','prof'));
    }
    public function tab()
    {
        $localite = Localite::all();
        $user = User::all();
        $tabp = Professeur::all();
        

        //dd($tabprof);
        return view('tabprofesseur',compact('localite','user','tabp'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $professeur = new Professeur;
        $professeur->localite_id = $request->localite_id;
        $professeur->user_id = $request->user_id;

        $professeur->nomP = $request->nomP;
        $professeur->prenomP = $request->prenomP;
        $professeur->grade = $request->grade;


        $professeur->save();

        
        return redirect()->route('getprof')->with('success','Professeur enregistrée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $localite = Localite::all();
        $user = User::all();
        $professeur= Professeur::find($id);
        
        return view ('editprof',compact('localite','user','professeur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'localite_id' => 'required',
            'user_id' => 'required',
            'nomP' => 'required',
            'prenomP' => 'required',
            'grade' => 'required'
        ]);
        $professeur= Professeur::find($request->id);

        $professeur->localite_id = $request->localite_id;
        $professeur->user_id= $request->user_id;
        $professeur->nomP = $request->nomP;
        $professeur->prenomP = $request->prenomP;
        $professeur->grade = $request->grade;

        $professeur->save();
        return redirect('/tabprofesseur')->with('success','professeur modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $professeur= Professeur::find($request->id);
        $professeur->delete();
    
        return back()->with('success','Suppression réussie');
    }
}
