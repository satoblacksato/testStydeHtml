<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function alertas(){
        Alert::info()->view('partials/alerts/partial');
        Alert::warning()->html('<strong>El HTML va aquí</strong>');
        Alert::info()->button('Llamada de acción', 'alguna-url', 'primary');
        Alert::info('Algo de información')->details('Una explicación más detallada va aquí');
        Alert::success("Está todo bien ahora");
        Alert::message('El final está cerca', 'danger') ;
        Alert::info('Su cuenta está a punto de caducar')
            ->details('Renueva ahora para aprender acerca de:')
            ->items([
                'Laravel',
                'PHP',
                'y más',
            ])
            ->button('¡Renueva ahora!', '#', 'primary');
        return view('test-alerts');
    }

    public function menues(){
        $items = [
            'home'          => [],
            'about'         => [],
            'contact-us'    => [],
            'login'         => [],
            'register'      => [],
            'options'       => ['submenu' => [
                'about'     => [],
                'company'   => []
            ]
            ]
        ];
        return view('menu-test', compact('items'));
    }

    public function forms(){
        return view('forms');
    }

    public function postForm(Request $request){
        $request->validate([
            'name'=>'required|string|max:6',
            'status_inline'=>'required',
            'status'=>'required',
            'preferencias'=>'required',
            'preferencias_inline'=>'required'
        ]);

        return redirect()->route('home');
}
    public function postFormField(Request $request){
        $request->validate([
            'name'=>'required|string|max:6',
            'description'=>'required',
            'edad'=>'required',
            'status'=>'required'
        ]);

        return redirect()->route('home');
    }
}
