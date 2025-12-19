<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ServiceController extends Controller
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
            $service = Service::all();

            return DataTables::of($service)
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
                                        <form id="delete-form-' . $row->id . '" action="' . route('service.destroy', $row->id) . '" method="POST" style="display: none;">
                                            ' . csrf_field() . '
                                            ' . method_field('DELETE') . '
                                        </form>';
                    }

                    return $actionbtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.service.index');
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

            'service_title' => 'required|string|max:255',
            'service_subtitle' => 'required|string|max:255',
            'service_description' => 'required|string|max:255',
        ]);
              //  Remove HTML tag
            $request->merge([
                'service_subtitle' => strip_tags($request->banner_subtitle),
                'service_description' => strip_tags($request->service_description),
            ]);

        Service::newService($request);
        $this->toastr->success('Service info created successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.pages.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([

             'service_title' => 'required|string|max:255',
            'service_subtitle' => 'required|string|max:255',
            'service_description' => 'required|string|max:255',
        ]);
        Service::updateService($request, $service);
        $this->toastr->success('Service updated successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
           $service = Service::findOrFail($id);
           $service->delete();

        $this->toastr->success('Service Deleted successfully!');
        return back();
    }
}
