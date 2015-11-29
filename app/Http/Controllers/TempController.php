<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Temp;
use App\Http\Requests\StoreTempRequest as StoreTempRequest;

class TempController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    private $page_heading = 'Temp';
    private $views = 'temps';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $temps = Temp::all();

        $data['page_heading'] = $this->page_heading;
        $data['temps'] = $temps;
        return view($this->views . '.' . 'index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data['page_heading'] = $this->page_heading;
        $data['create'] = true;
        return view($this->views . '.' . 'form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreTempRequest $request)
    {

        $input = \Request::all();
        
        Temp::create($input);
        \Session::flash('flash_message', 'Temp created');
        return redirect()->action('TempController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $temp = Temp::findOrFail($id);

        $data = [];
        $data['temp'] = $temp;
        $data['page_heading'] = $this->page_heading;
        $data['create'] = false;
        return view($this->views . '.' . 'form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Redirect
     */
    public function update($id, StoreTempRequest $request)
    {
        $input = \Request::all();

        $temp = Temp::findOrFail($id);
        $temp->update($input);
        \Session::flash('flash_message', 'Temp updated');

        return redirect()->action('TempController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
