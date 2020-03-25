<?php

namespace App\DataTables;

use App\Models\Registro;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class RegistroDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'registros.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Registro $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Registro $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'matricula' => ['name' => 'matricula', 'data' => 'matricula'],
            'ssn' => ['name' => 'ssn', 'data' => 'ssn'],
            'estado' => ['name' => 'estado', 'data' => 'estado'],
            'nombres' => ['name' => 'nombres', 'data' => 'nombres'],
            'apellidos' => ['name' => 'apellidos', 'data' => 'apellidos'],
            'fch_nac' => ['name' => 'fch_nac', 'data' => 'fch_nac'],
            'vote_2018' => ['name' => 'vote_2018', 'data' => 'vote_2018'],
            'departamento' => ['name' => 'departamento', 'data' => 'departamento'],
            'distrito' => ['name' => 'distrito', 'data' => 'distrito']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'registrosdatatable_' . time();
    }
}
