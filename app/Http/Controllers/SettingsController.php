<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Setting;
use Mail;

class SettingsController extends Controller
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

    private $page_heading = 'Setting';
    private $views = 'settings';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // $settings = Setting::get('adress');

        // Setting::set('foo', 'bar');
        // Setting::save();
        
        $data['page_heading'] = $this->page_heading;
        $data['name'] = Setting::get('name');

        return view($this->views . '.' . 'form', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = \Request::all();

        Setting::set('name', $input['name']);
        Setting::save();

        flash()->success('Settings updated');

        return redirect()->action('SettingsController@index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
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
