<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class empleado
 *
 * @property $cod_empleado
 * @property $usuario
 * @property $nombre_empleado
 * @property $numero_telefono
 * @property $correo
 * @property $direccion
 * @property $departamento
 * @property $created_at
 * @property $updated_at
 *
 * @property usuario $usuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Empleado extends Model
{
    static $rules = [
        'cod_empleado' => 'required',
        'usuario' => 'required',
        'nombre_empleado' => 'required',
        'numero_telefono' => 'required',
        'correo' => 'required',
        'direccion' => 'required',
        'departamento' => 'required',
    ];
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_empleado','usuario','nombre_empleado','numero_telefono','correo','direccion','departamento'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Users()
    {
        return $this->belongsTo(Usuario::class,'id');
    }

    public $table = 'registro_de_empleados';
    use HasFactory;
}
