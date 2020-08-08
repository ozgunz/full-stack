<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessagesResource as MessagesResource;
use Illuminate\Http\Request;
use App\Messages;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function messages(Messages $message){
        return MessagesResource::collection(Messages::all());
    }

    public function read(Request $request){
        //RXIJQpYqalrocujjhsWpSSMbbrSEBaJnQzhgicKZ
        $data = Messages::find($request->input('id'));
        $data->update([
            'is_read'   =>  1
        ]);
        return response()->json(['_stat' => 'OK'], 200);
    }
}
