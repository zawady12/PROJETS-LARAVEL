<?php

namespace App\Http\Controllers;
use App\Models\Lignemodule;
use App\Models\Professeur;
use App\Models\Module;
use App\Models\User;



use Illuminate\Http\Request;

class LignemoduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prof = Professeur::all();
        $module = Module::all();
        $user = User::all();
        $ligne = Lignemodule::all();
        //dd($lignemodule);
        return view('lignemodule',compact('prof','module','user','ligne'));
        
    }
    public function tab()
    {
        $prof= Professeur::all();
        $module = Module::all();
        $user = User::all();
        $tab = Lignemodule::all();
        //dd($tabligne);
        return view('tablignemodule',compact('prof','module','user','tab'));
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
        $lignemodule = new Lignemodule;
        $lignemodule->professeur_id = $request->professeur_id;
        $lignemodule->module_id = $request->module_id;
        $lignemodule->user_id = $request->user_id;
        $lignemodule->dated = $request->dated;
        $lignemodule->datef = $request->datef;
        $lignemodule->volumeH = $request->volumeH;

        

        $lignemodule->save();

        
        return redirect()->route('getligne')->with('success','ligne module enregistrée');
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
        $prof= Professeur::all();
        $module = Module::all();
        $user = User::all();
        $lignemodule= Lignemodule::find($id);
        
        return view ('editligne',compact('prof','module','user','lignemodule'));
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
            'professeur_id' => 'required',
            'module_id' => 'required',
            'user_id' => 'required',
            'dated' => 'required',
            'datef' => 'required',
            'volumeH' => 'required'
        ]);
        $lignemodule= Lignemodule::find($request->id);

        $lignemodule->professeur_id = $request->professeur_id;
        $lignemodule->module_id = $request->module_id;
        $lignemodule->user_id= $request->user_id;
        $lignemodule->dated = $request->dated;
        $lignemodule->datef = $request->datef;
        $lignemodule->volumeH = $request->volumeH;

        $lignemodule->save();
        return redirect('/tablignemodule')->with('success','ligne module modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $lignemodule= lignemodule::find($request->id);
        $lignemodule->delete();
    
        return back()->with('success','Suppression réussie');
    }
}
