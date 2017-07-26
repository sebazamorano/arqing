<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\EntrevistaArquitectura;
use Illuminate\Http\Request;

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

    public function solicitud()
    {
        $empresas = Empresa::select(['id', 'Empresa'])->where('activo', 1)->get();

        return view('entrevista.solicitud', compact('empresas'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function solicitudEntrevista (Request $request)
    {
        $entrevista = EntrevistaArquitectura::create($request->all());

        return redirect()->to('/home');
    }
}
