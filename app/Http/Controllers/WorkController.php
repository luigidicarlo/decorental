<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    
	public function validation(Request $request) {
        return $request->validate([
            'url' => 'required'
        ]);
    }

    public function index()
    {
        $works = Work::orderBy('created_at', 'desc')->paginate(10);
        return view('work.index', compact('works'));
    }


    public function create()
    {
        return view('work.create');
    }

    public function store(Request $request)
    {
		$validated = $this->validation($request);
        Work::create($validated);

        return redirect('/work');
    }

    public function show(Work $work)
    {
        return view('work.show', compact('work'));
    }


    //Muestra todos los trabajos realizados en la vista sin auth
    /*
    public function showAll(Work $work) {
    	$works = Work::all();

    	return view('our-work', compact('works'));	
    }*/

    public function edit(Work $work)
    {
        return view('work.edit', compact('work'));
    }

    public function update(Request $request, Work $work)
    {
        $work->update($this->validation($request));

        return redirect('/work');
    }

    public function destroy(Work $work)
    {
        $work->delete();

        return redirect('work');
    }
}
