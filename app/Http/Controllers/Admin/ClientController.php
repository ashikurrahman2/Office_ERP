<?php

namespace App\Http\Controllers\Admin;
use App\Models\Client;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Flasher\Toastr\Prime\ToastrInterface;
use Yajra\DataTables\DataTables;

class ClientController extends BaseController
{
        protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
        $this->middleware('permission:view about')->only(['index']);
        $this->middleware('permission:create about')->only(['create','store']);
        $this->middleware('permission:update about')->only(['edit','update']);
        $this->middleware('permission:delete about')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     */
     public function index(Request $request)
    {
        if ($request->ajax()) {
            $clients = Client::all();
            return DataTables::of($clients)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    return $row->client_img
                        ? '<img src="' . asset($row->client_img) . '" class="img-fluid" style="max-width: 60px;">'
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
                            <form id="delete-form-' . $row->id . '" action="' . route('client.destroy', $row->id) . '" method="POST" style="display: none;">
                                ' . csrf_field() . method_field('DELETE') . '
                            </form>';
                    }

                    return $actionBtn;
                })
                ->rawColumns(['client_img', 'action'])
                ->make(true);
        }

        return view('admin.pages.client.index');
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
            'client_name'      => 'required|string|max:255',
            'client_qute'      => 'required|string|max:500',
            'client_img'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
           Client::newClient($request);
        $this->toastr->success('Client info created successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('admin.pages.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
              $request->validate([
            'client_name'      => 'required|string|max:255',
            'client_qute'      => 'required|string|max:500',
            'client_img'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

         Client::updateClient($request, $id);
        return response()->json(['success' => true,'message' => 'Client info updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        Client::deleteClient($client);
        return response()->json(['success' => true, 'message' => 'Client info deleted successfully!']);
    }
}
