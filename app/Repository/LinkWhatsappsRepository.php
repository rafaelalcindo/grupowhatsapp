<?php

namespace App\Repository;

use App\Model\GrupoWhatsapp;
use App\Model\LinkWhatsapp;
use Illuminate\Http\Request;

class GrupoWhatsappsRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new LinkWhatsapp();
    }

    public function adicionarLinkWhatsApp($grupoWhats, $link)
    {
    }
}
