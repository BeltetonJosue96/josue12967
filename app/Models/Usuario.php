<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class usuario
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $password
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function empleados(){
        return $this->hasMany(Empleado::class,'usuario');
    }
    public $table = 'users';
    use HasFactory;
}
