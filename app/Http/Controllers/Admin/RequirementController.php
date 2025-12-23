<?php

namespace App\Http\Controllers\Admin;

use Flasher\Toastr\Prime\ToastrInterface;
use App\Models\Requirement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RequirementController extends Controller
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
            $banners = Requirement::all();

            return DataTables::of($banners)
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
                                        <form id="delete-form-' . $row->id . '" action="' . route('req.destroy', $row->id) . '" method="POST" style="display: none;">
                                            ' . csrf_field() . '
                                            ' . method_field('DELETE') . '
                                        </form>';
                    }

                    return $actionbtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.banner.index');
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

            'aditional_requirement' => 'required|string|max:255',
            'requirement' => 'required|string|max:255',
            'benifit' => 'required|string|max:255',
        ]);
            //  Remove HTML tag
            $request->merge([
                'aditional_requirement' => strip_tags($request->aditional_requirement),
            ]);
             Requirement::newReq($request);
        $this->toastr->success('Requirement info created successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Requirement $req)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requirement $req)
    {
        return view('admin.pages.banner.edit', compact('req'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Requirement $req)
    {
        
               $request->validate([
            'aditional_requirement' => 'required|string|max:255',
            'requirement' => 'required|string|max:255',
            'benifit' => 'required|string|max:255',
        ]);
         Requirement::updateReq($request, $req);
        $this->toastr->success('Requirement updated successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $req = Requirement::findOrFail($id);
        $req->delete();

        $this->toastr->success('Requirement Deleted successfully!');
        return back();
    }
}
