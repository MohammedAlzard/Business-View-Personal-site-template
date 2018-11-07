<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFunFactsRequest;
use App\Http\Requests\UpdateFunFactsRequest;
use App\Repositories\FunFactsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FunFactsController extends AppBaseController
{
    /** @var  FunFactsRepository */
    private $funFactsRepository;

    public function __construct(FunFactsRepository $funFactsRepo)
    {
        $this->funFactsRepository = $funFactsRepo;
    }

    /**
     * Display a listing of the FunFacts.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->funFactsRepository->pushCriteria(new RequestCriteria($request));
        $funFacts = $this->funFactsRepository->all();

        return view('fun_facts.index')
            ->with('funFacts', $funFacts);
    }

    /**
     * Show the form for creating a new FunFacts.
     *
     * @return Response
     */
    public function create()
    {
        return view('fun_facts.create');
    }

    /**
     * Store a newly created FunFacts in storage.
     *
     * @param CreateFunFactsRequest $request
     *
     * @return Response
     */
    public function store(CreateFunFactsRequest $request)
    {
        $input = $request->all();

        $funFacts = $this->funFactsRepository->create($input);

        Flash::success('Fun Facts saved successfully.');

        return redirect(route('funFacts.index'));
    }

    /**
     * Display the specified FunFacts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $funFacts = $this->funFactsRepository->findWithoutFail($id);

        if (empty($funFacts)) {
            Flash::error('Fun Facts not found');

            return redirect(route('funFacts.index'));
        }

        return view('fun_facts.show')->with('funFacts', $funFacts);
    }

    /**
     * Show the form for editing the specified FunFacts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $funFacts = $this->funFactsRepository->findWithoutFail($id);

        if (empty($funFacts)) {
            Flash::error('Fun Facts not found');

            return redirect(route('funFacts.index'));
        }

        return view('fun_facts.edit')->with('funFacts', $funFacts);
    }

    /**
     * Update the specified FunFacts in storage.
     *
     * @param  int              $id
     * @param UpdateFunFactsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFunFactsRequest $request)
    {
        $funFacts = $this->funFactsRepository->findWithoutFail($id);

        if (empty($funFacts)) {
            Flash::error('Fun Facts not found');

            return redirect(route('funFacts.index'));
        }

        $funFacts = $this->funFactsRepository->update($request->all(), $id);

        Flash::success('Fun Facts updated successfully.');

        return redirect(route('funFacts.index'));
    }

    /**
     * Remove the specified FunFacts from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $funFacts = $this->funFactsRepository->findWithoutFail($id);

        if (empty($funFacts)) {
            Flash::error('Fun Facts not found');

            return redirect(route('funFacts.index'));
        }

        $this->funFactsRepository->delete($id);

        Flash::success('Fun Facts deleted successfully.');

        return redirect(route('funFacts.index'));
    }
}
