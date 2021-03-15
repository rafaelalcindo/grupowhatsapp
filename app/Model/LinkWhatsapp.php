<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class LinkWhatsapp extends Model
{
    use Notifiable;

    protected $table = "link_whatsapps";
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'link_whatapp', 'clicks', 'grupo_whatsapp_id'
    ];

    public function GrupoWhatsapp()
    {
        return $this->belongsTo(GrupoWhatsapp::class);
    }
}
