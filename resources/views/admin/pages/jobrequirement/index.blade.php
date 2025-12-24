@extends('layouts.admin')

@section('title', 'Job Requirement')

@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Job Requirement</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <ul class="breadcrumb">
                            {{-- @can('create slider') --}}
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">+ Add New</button>
                            {{-- @endcan --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- HTML5 Export Buttons table start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header table-card-header">
                        <h5>All Job Requirement List</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="" class="table table-striped table-bordered nowrap table-sm ytable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Aditional Requirement</th>
                                        <th>Requirement</th>
                                        <th>Benifit</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data populated by DataTables via AJAX -->
                                </tbody>
                                <tfoot>
                                       <tr>
                                        <th>SL</th>
                                        <th>Aditional Requirement</th>
                                        <th>Requirement</th>
                                        <th>Benifit</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- HTML5 Export Buttons end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<!-- Insert Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Add New Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('req.store') }}" method="post" id="add-form">
                @csrf
                <div class="modal-body">
                        <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Aditional Requirement</label>
                        <textarea class="form-control textarea" name="aditional_requirement" id="summernote" rows="4" >{{old('aditional_requirement')}}</textarea> 
                    </div>
                </div>
                    <div class="form-group">
                        <label for="requirement" class="col-form-label pt-0">Requirement<sup class="text-size-20 top-1">*</sup></label>
                        <input type="text" class="form-control" id="banner_title" name="requirement" required>
                        <small id="emailHelp" class="form-text text-muted">This is your Slider Heading Text</small>
                    </div>

                       <div class="form-group">
                        <label for="benifit" class="col-form-label pt-0">Benifit<sup class="text-size-20 top-1">*</sup></label>
                        <input type="text" class="form-control" id="benifit" name="benifit" required>
                        <small id="emailHelp" class="form-text text-muted">This is your Slider Heading Text</small>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Requirement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Edit form content will be loaded here -->
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function req(){
        var table = $('.ytable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('req.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'aditional_requirement', name: 'aditional_requirement' },
                { data: 'requirement', name: 'requirement' },
                { data: 'benifit', name: 'benifit' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });

    // For Edit Slider
    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("req/" + id + "/edit", function(data) {
            $('.modal-body').html(data);
        });
    });
</script>

@endsection
