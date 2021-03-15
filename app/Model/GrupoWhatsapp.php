<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class GrupoWhatsapp extends Model
{
    use Notifiable;

    protected $table = "grupo_whatsapps";
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'empresa', 'quantidade_click', 'quantidade_grupo', 'script'
    ];

    public function LinkWhatsapps()
    {
        return $this->hasMany(LinkWhatsapp::class);
    }
}
