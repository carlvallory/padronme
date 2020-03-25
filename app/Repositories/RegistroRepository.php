<?php

namespace App\Repositories;

use App\Models\Registro;
use App\Repositories\BaseRepository;

/**
 * Class RegistroRepository
 * @package App\Repositories
 * @version March 25, 2020, 7:21 am UTC
*/

class RegistroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Registro::class;
    }
}
