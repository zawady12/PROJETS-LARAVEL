<?php

namespace App\Http\Controllers;
use App\Models\Localite;
use Illuminate\Http\Request;

class LocaliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localite = Localite::all();
        //dd($localite);
        return view('localite',compact('localite'));
    }
    public function tab()
    {
        $localite = Localite::all();
        //dd($tablocalite);
        return view('tablocalite',compact('localite'));
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
        $localite = new Localite;
        
        $localite->codeloc = $request->codeloc;
        
        $localite->save();

        
        return redirect()->route('getlocalite')->with('success','localite enregistré');
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
        $localite= Localite::find($id);
        
        return view ('editlocal',compact('localite'));
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
            'codeloc' => 'required',
        ]);
        $localite= Localite::find($request->id);

        $localite->codeloc = $request->codeloc;

        $localite->save();

        return redirect('/tablocalite')->with('success','localite mise à jour');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {

        $localite= Localite::find($request->id);
        $localite->delete();
    
        return back()->with('success','Suppression réussie');
    }
}
