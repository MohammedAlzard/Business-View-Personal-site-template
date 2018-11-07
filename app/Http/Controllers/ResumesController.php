<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateResumesRequest;
use App\Http\Requests\UpdateResumesRequest;
use App\Repositories\ResumesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ResumesController extends AppBaseController
{
    /** @var  ResumesRepository */
    private $resumesRepository;

    public function __construct(ResumesRepository $resumesRepo)
    {
        $this->resumesRepository = $resumesRepo;
    }

    /**
     * Display a listing of the Resumes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->resumesRepository->pushCriteria(new RequestCriteria($request));
        $resumes = $this->resumesRepository->all();

        return view('resumes.index')
            ->with('resumes', $resumes);
    }

    /**
     * Show the form for creating a new Resumes.
     *
     * @return Response
     */
    public function create()
    {
        return view('resumes.create');
    }

    /**
     * Store a newly created Resumes in storage.
     *
     * @param CreateResumesRequest $request
     *
     * @return Response
     */
    public function store(CreateResumesRequest $request)
    {
        $input = $request->all();

        $resumes = $this->resumesRepository->create($input);

        Flash::success('Resumes saved successfully.');

        return redirect(route('resumes.index'));
    }

    /**
     * Display the specified Resumes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $resumes = $this->resumesRepository->findWithoutFail($id);

        if (empty($resumes)) {
            Flash::error('Resumes not found');

            return redirect(route('resumes.index'));
        }

        return view('resumes.show')->with('resumes', $resumes);
    }

    /**
     * Show the form for editing the specified Resumes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $resumes = $this->resumesRepository->findWithoutFail($id);

        if (empty($resumes)) {
            Flash::error('Resumes not found');

            return redirect(route('resumes.index'));
        }

        return view('resumes.edit')->with('resumes', $resumes);
    }

    /**
     * Update the specified Resumes in storage.
     *
     * @param  int              $id
     * @param UpdateResumesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateResumesRequest $request)
    {
        $resumes = $this->resumesRepository->findWithoutFail($id);

        if (empty($resumes)) {
            Flash::error('Resumes not found');

            return redirect(route('resumes.index'));
        }

        $resumes = $this->resumesRepository->update($request->all(), $id);

        Flash::success('Resumes updated successfully.');

        return redirect(route('resumes.index'));
    }

    /**
     * Remove the specified Resumes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $resumes = $this->resumesRepository->findWithoutFail($id);

        if (empty($resumes)) {
            Flash::error('Resumes not found');

            return redirect(route('resumes.index'));
        }

        $this->resumesRepository->delete($id);

        Flash::success('Resumes deleted successfully.');

        return redirect(route('resumes.index'));
    }
}
