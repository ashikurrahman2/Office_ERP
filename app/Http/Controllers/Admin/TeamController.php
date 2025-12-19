<?php

namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller as BaseController;
use Flasher\Toastr\Prime\ToastrInterface;
use Yajra\DataTables\DataTables;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
      protected $toastr;
    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
        $this->middleware('permission:view about')->only(['index']);
        $this->middleware('permission:create about')->only(['create','store']);
        $this->middleware('permission:update about')->only(['edit','update']);
        $this->middleware('permission:delete about')->only(['destroy']);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $teams = Team::all();
            return DataTables::of($teams)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    return $row->mem_img
                        ? '<img src="' . asset($row->mem_img) . '" class="img-fluid" style="max-width: 60px;">'
                        : 'No image';
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '';
                    if (auth('admin')->user()->can('update about')) {
                        $actionBtn .= '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" data-id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="fa fa-edit"></i>
                                        </a>';
                    }

                    if (auth('admin')->user()->can('delete about')) {
                        $actionBtn .= '<button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                            <i class="fa fa-trash"></i></button>
                            <form id="delete-form-' . $row->id . '" action="' . route('team.destroy', $row->id) . '" method="POST" style="display: none;">
                                ' . csrf_field() . method_field('DELETE') . '
                            </form>';
                    }

                    return $actionBtn;
                })
                ->rawColumns(['mem_img', 'action'])
                ->make(true);
        }

        return view('admin.pages.team.index');
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
            'mem_name'        => 'required|string|max:255',
            'mem_design'      => 'required|string|max:500',
            'mem_social'      => 'required|string|max:500',
            'mem_social_link' => 'required|string|max:255',
            'mem_img'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        Team::newTeam($request);
        $this->toastr->success('Team info created successfully!');
        return back();
    }

 

    /**
     * Show the form for editing the specified resource.
     */
      public function edit(Team $teams)
    {
        return view('admin.pages.team.edit', compact('teams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           'mem_name'        => 'required|string|max:255',
            'mem_design'      => 'required|string|max:500',
            'mem_social'      => 'required|string|max:500',
            'mem_social_link' => 'required|string|max:255',
            'mem_img'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

         Team::updateTeam($request, $id);
        return response()->json(['success' => true,'message' => 'Team info updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $teams = Team::findOrFail($id);
        Team::deleteTeam($teams);
        return response()->json(['success' => true, 'message' => 'Team info deleted successfully!']);
    }
}
