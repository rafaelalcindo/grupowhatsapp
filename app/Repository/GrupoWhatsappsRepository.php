<?php

namespace App\Repository;

use App\Model\GrupoWhatsapp;
use Illuminate\Http\Request;

class GrupoWhatsappsRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new GrupoWhatsapp();
    }

    public function store(Request $request)
    {
        $quantidade_click = $request['quantidade_click'];
        $grupoWhatsApp = $this->model::create($request->only('empresa', 'quantidade_click'));

        if ($grupoWhatsApp) {
            $grupoWhatsApp->LinkWhatsapps()->createMany($request->input('link_whatsapps'));
            return true;
        }

        return false;
    }
}
