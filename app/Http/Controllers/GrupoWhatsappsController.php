<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\GrupoWhatsappsRepository;

class GrupoWhatsappsController extends Controller
{
    public function __construct()
    {
        $this->repository = new GrupoWhatsappsRepository();
    }
    //
    public function index()
    {
        return view('grupo_whats_apps.index');
    }

    /**
     * Adicionar Grupos de Whatsapp
     *
     */
    public function store(Request $request)
    {
        $grupoWhatsApp = $this->repository->store($request);

        return redirect('/grupo-whatsapps')->with('success', 'Grupo foi cadastrado com Sucesso!');
    }
}
