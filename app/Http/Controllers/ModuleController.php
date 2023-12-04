<?php

namespace App\Http\Controllers;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $module = Module::all();
        //dd($module);
        return view('module',compact('module'));
    }
    public function tab()
    {
        $tabmodule = Module::all();
        //dd($tabmodule);
        return view('tabmodule',compact('tabmodule'));
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
        $module = new Module;
        
        $module->designm = $request->designm;
        
        $module->save();

        
        return redirect()->route('get')->with('success','module enregistré');
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
        $module= module::find($id);
        
        return view ('editmodule',compact('module'));
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
            'designm' => 'required',
        ]);
        $module= module::find($request->id);

        $module->designm = $request->designm;

        $module->save();

        return redirect('/tabmodule')->with('success','module mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $module= module::find($request->id);
        $module->delete();
    
        return back()->with('success','Suppression réussie');
    }
}
