<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Registro
 * @package App\Models
 * @version March 25, 2020, 7:21 am UTC
 *
 * @property integer matricula
 * @property integer ssn
 * @property string estado
 * @property string nombres
 * @property string apellidos
 * @property string fch_nac
 * @property string vote_2018
 * @property string departamento
 * @property string distrito
 */
class Registro extends Model
{
    use SoftDeletes;

    public $table = 'registros';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'matricula',
        'ssn',
        'estado',
        'nombres',
        'apellidos',
        'fch_nac',
        'vote_2018',
        'departamento',
        'distrito'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'matricula' => 'integer',
        'ssn' => 'integer',
        'estado' => 'string',
        'nombres' => 'string',
        'apellidos' => 'string',
        'fch_nac' => 'string',
        'vote_2018' => 'string',
        'departamento' => 'string',
        'distrito' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'matricula' => 'required',
        'ssn' => 'required'
    ];

    
}
