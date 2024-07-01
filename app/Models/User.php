<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     title="My First API",
 *     version="0.1"
 * )
 * 
 * @OA\Schema(
 *     schema="User",
 *     required={"email", "nom", "prenom", "poste", "status"},
 *     @OA\Property(property="id", type="integer", format="int64"),
 *     @OA\Property(property="email", type="string"),
 *     @OA\Property(property="nom", type="string"),
 *     @OA\Property(property="prenom", type="string"),
 *     @OA\Property(property="poste", type="string"),
 *     @OA\Property(property="status", type="integer", format="int32"),
 * )
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'nom',
        'prenom',
        'poste',
        'status',
    ];

}
