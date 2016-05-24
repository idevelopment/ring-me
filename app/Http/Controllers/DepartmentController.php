<?php

namespace App\Http\Controllers;

use App\Departments;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class DepartmentController
 * @package App\Http\Controllers
 *
 * TODO: set routes.
 * TODO: the controller needs phpunit testing.
 */
class DepartmentController extends Controller
{
    /**
     * DepartmentController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['query'] = Departments::with('managers')->paginate(15);
        return view('departments.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.insert');
    }

    /**
     * Search for a specific department
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $term = $request->get('name');
        $data['query'] = Departments::where('name', 'LIKE', "%$term%")->with('managers')->paginate(15);
        return view('departments.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Requests\DepartmentsValidator $input
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\DepartmentsValidator $input)
    {
        Departments::create($input->except('_token'));
        return redirect()->route('departments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id the department id in the database.
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['query'] = Departments::find($id);
        return view('departments.specific', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id the department id in the database.
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['query'] = Departments::find($id);
        return view('departments.update', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Requests\DepartmentsValidator $input
     * @param  int $id the department id in the database.
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\DepartmentsValidator $input, $id)
    {
        Departments::find($id)->update($input->except('_token'));
        return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id the department id in the database.
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Departments::destroy($id);
        return redirect()->back(302);
    }

    /**
     * Get all the departments
     *
     * @return string
     */
    public function get_departments()
    {
        $items = Departments::all();
        $data2 = [];

        foreach($items as $department) {
            $data2[] = [
                'value' => $department["id"],
                'text'  => $department["name"]
            ];
        }

        return json_encode($data2);
    }    
}
