<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSkillsRequest;
use App\Http\Requests\UpdateSkillsRequest;
use App\Repositories\SkillsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SkillsController extends AppBaseController
{
    /** @var  SkillsRepository */
    private $skillsRepository;

    public function __construct(SkillsRepository $skillsRepo)
    {
        $this->skillsRepository = $skillsRepo;
    }

    /**
     * Display a listing of the Skills.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->skillsRepository->pushCriteria(new RequestCriteria($request));
        $skills = $this->skillsRepository->all();

        return view('skills.index')
            ->with('skills', $skills);
    }

    /**
     * Show the form for creating a new Skills.
     *
     * @return Response
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created Skills in storage.
     *
     * @param CreateSkillsRequest $request
     *
     * @return Response
     */
    public function store(CreateSkillsRequest $request)
    {
        $input = $request->all();

        $skills = $this->skillsRepository->create($input);

        Flash::success('Skills saved successfully.');

        return redirect(route('skills.index'));
    }

    /**
     * Display the specified Skills.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $skills = $this->skillsRepository->findWithoutFail($id);

        if (empty($skills)) {
            Flash::error('Skills not found');

            return redirect(route('skills.index'));
        }

        return view('skills.show')->with('skills', $skills);
    }

    /**
     * Show the form for editing the specified Skills.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $skills = $this->skillsRepository->findWithoutFail($id);

        if (empty($skills)) {
            Flash::error('Skills not found');

            return redirect(route('skills.index'));
        }

        return view('skills.edit')->with('skills', $skills);
    }

    /**
     * Update the specified Skills in storage.
     *
     * @param  int              $id
     * @param UpdateSkillsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSkillsRequest $request)
    {
        $skills = $this->skillsRepository->findWithoutFail($id);

        if (empty($skills)) {
            Flash::error('Skills not found');

            return redirect(route('skills.index'));
        }

        $skills = $this->skillsRepository->update($request->all(), $id);

        Flash::success('Skills updated successfully.');

        return redirect(route('skills.index'));
    }

    /**
     * Remove the specified Skills from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $skills = $this->skillsRepository->findWithoutFail($id);

        if (empty($skills)) {
            Flash::error('Skills not found');

            return redirect(route('skills.index'));
        }

        $this->skillsRepository->delete($id);

        Flash::success('Skills deleted successfully.');

        return redirect(route('skills.index'));
    }
}
