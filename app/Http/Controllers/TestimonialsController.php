<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTestimonialsRequest;
use App\Http\Requests\UpdateTestimonialsRequest;
use App\Repositories\TestimonialsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TestimonialsController extends AppBaseController
{
    /** @var  TestimonialsRepository */
    private $testimonialsRepository;

    public function __construct(TestimonialsRepository $testimonialsRepo)
    {
        $this->testimonialsRepository = $testimonialsRepo;
    }

    /**
     * Display a listing of the Testimonials.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->testimonialsRepository->pushCriteria(new RequestCriteria($request));
        $testimonials = $this->testimonialsRepository->all();

        return view('testimonials.index')
            ->with('testimonials', $testimonials);
    }

    /**
     * Show the form for creating a new Testimonials.
     *
     * @return Response
     */
    public function create()
    {
        return view('testimonials.create');
    }

    /**
     * Store a newly created Testimonials in storage.
     *
     * @param CreateTestimonialsRequest $request
     *
     * @return Response
     */
    public function store(CreateTestimonialsRequest $request)
    {
        $input = $request->all();

        $testimonials = $this->testimonialsRepository->create($input);
        if (!empty($request->image)) {
            $image_name = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/testimonials/'), $image_name);
            $testimonials->image = $image_name;
            $testimonials->save();
        }

        Flash::success('Testimonials saved successfully.');

        return redirect(route('testimonials.index'));
    }

    /**
     * Display the specified Testimonials.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $testimonials = $this->testimonialsRepository->findWithoutFail($id);

        if (empty($testimonials)) {
            Flash::error('Testimonials not found');

            return redirect(route('testimonials.index'));
        }

        return view('testimonials.show')->with('testimonials', $testimonials);
    }

    /**
     * Show the form for editing the specified Testimonials.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $testimonials = $this->testimonialsRepository->findWithoutFail($id);

        if (empty($testimonials)) {
            Flash::error('Testimonials not found');

            return redirect(route('testimonials.index'));
        }

        return view('testimonials.edit')->with('testimonials', $testimonials);
    }

    /**
     * Update the specified Testimonials in storage.
     *
     * @param  int              $id
     * @param UpdateTestimonialsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTestimonialsRequest $request)
    {
        $testimonials = $this->testimonialsRepository->findWithoutFail($id);

        if (empty($testimonials)) {
            Flash::error('Testimonials not found');

            return redirect(route('testimonials.index'));
        }

        $testimonials = $this->testimonialsRepository->update($request->all(), $id);
        if (!empty($request->image)) {
            $image_name = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/testimonials/'), $image_name);
            $testimonials->image = $image_name;
            $testimonials->save();
        }

        Flash::success('Testimonials updated successfully.');

        return redirect(route('testimonials.index'));
    }

    /**
     * Remove the specified Testimonials from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $testimonials = $this->testimonialsRepository->findWithoutFail($id);

        if (empty($testimonials)) {
            Flash::error('Testimonials not found');

            return redirect(route('testimonials.index'));
        }

        $this->testimonialsRepository->delete($id);

        Flash::success('Testimonials deleted successfully.');

        return redirect(route('testimonials.index'));
    }
}
