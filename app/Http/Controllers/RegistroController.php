<?php

namespace App\Http\Controllers;

use App\DataTables\RegistroDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateRegistroRequest;
use App\Http\Requests\UpdateRegistroRequest;
use App\Repositories\RegistroRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class RegistroController extends AppBaseController
{
    /** @var  RegistroRepository */
    private $registroRepository;

    public function __construct(RegistroRepository $registroRepo)
    {
        $this->registroRepository = $registroRepo;
    }

    /**
     * Display a listing of the Registro.
     *
     * @param RegistroDataTable $registroDataTable
     * @return Response
     */
    public function index(RegistroDataTable $registroDataTable)
    {
        return $registroDataTable->render('registros.index');
    }

    /**
     * Show the form for creating a new Registro.
     *
     * @return Response
     */
    public function create()
    {
        return view('registros.create');
    }

    /**
     * Store a newly created Registro in storage.
     *
     * @param CreateRegistroRequest $request
     *
     * @return Response
     */
    public function store(CreateRegistroRequest $request)
    {
        $input = $request->all();

        $registro = $this->registroRepository->create($input);

        Flash::success('Registro saved successfully.');

        return redirect(route('registros.index'));
    }

    /**
     * Display the specified Registro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $registro = $this->registroRepository->find($id);

        if (empty($registro)) {
            Flash::error('Registro not found');

            return redirect(route('registros.index'));
        }

        return view('registros.show')->with('registro', $registro);
    }

    /**
     * Show the form for editing the specified Registro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $registro = $this->registroRepository->find($id);

        if (empty($registro)) {
            Flash::error('Registro not found');

            return redirect(route('registros.index'));
        }

        return view('registros.edit')->with('registro', $registro);
    }

    /**
     * Update the specified Registro in storage.
     *
     * @param  int              $id
     * @param UpdateRegistroRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegistroRequest $request)
    {
        $registro = $this->registroRepository->find($id);

        if (empty($registro)) {
            Flash::error('Registro not found');

            return redirect(route('registros.index'));
        }

        $registro = $this->registroRepository->update($request->all(), $id);

        Flash::success('Registro updated successfully.');

        return redirect(route('registros.index'));
    }

    /**
     * Remove the specified Registro from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $registro = $this->registroRepository->find($id);

        if (empty($registro)) {
            Flash::error('Registro not found');

            return redirect(route('registros.index'));
        }

        $this->registroRepository->delete($id);

        Flash::success('Registro deleted successfully.');

        return redirect(route('registros.index'));
    }
}
