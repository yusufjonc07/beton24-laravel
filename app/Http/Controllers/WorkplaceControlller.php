<?php

namespace App\Http\Controllers;

use App\Models\Workplace;
use Illuminate\Http\Request;

class WorkplaceControlller extends Controller
{
    public function index(){

        $workplaces = Workplace::orderBy("name", "ASC")->paginate(5);

        return view('workplaces.index', [
            'workplaces'=>$workplaces
        ]);
    }

    public function create(Request $request){

        $newWorkplace = Workplace::insert([
            'name'=>$request->post('name'),
            'inn'=>$request->post('inn'),
        ]);

        return redirect()->route('workplace.index')->with('success', __('saved'));
    }
}
