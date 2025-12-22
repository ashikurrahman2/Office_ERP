<?php

namespace App\Http\Controllers\Admin;

use Flasher\Toastr\Prime\ToastrInterface;
use App\Models\Career;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CareerController extends Controller
{

         protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }
    /**
     * Display a listing of the resource.
     */
   public function index(Request $request)
    {
        if ($request->ajax()) {
            $careers = Career::all();

            return DataTables::of($careers)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionbtn = '';

                    // Edit Button
                    if (auth('admin')->user()->can('update banner')) {
                        $actionbtn .= '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" data-id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="fa fa-edit"></i>
                                        </a>';
                    }

                    // Delete Button
                    if (auth('admin')->user()->can('delete banner')) {
                        $actionbtn .= '<button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <form id="delete-form-' . $row->id . '" action="' . route('career.destroy', $row->id) . '" method="POST" style="display: none;">
                                            ' . csrf_field() . '
                                            ' . method_field('DELETE') . '
                                        </form>';
                    }

                    return $actionbtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.career.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([

            'cer_title' => 'required|string|max:255',
            'cer_subtitle' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'position_des' => 'required|string|max:500',
        ]);

            //  Remove HTML tag
            $request->merge([
                'cer_subtitle' => strip_tags($request->cer_subtitle),
                'position_des' => strip_tags($request->position_des),
            ]);

        Career::newCareer($request);
        $this->toastr->success('Career info created successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Career $careers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
      public function edit(Career $careers)
    {
        return view('admin.pages.career.edit', compact('careers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Career $careers)
    {
         $request->validate([

              'cer_title' => 'required|string|max:255',
            'cer_subtitle' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'position_des' => 'required|string|max:500',
        ]);
        Career::updateCareer($request, $careers);
        $this->toastr->success('Career updated successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $careers = Career::findOrFail($id);
        $careers->delete();

        $this->toastr->success('careers Deleted successfully!');
        return back();
    }
}
