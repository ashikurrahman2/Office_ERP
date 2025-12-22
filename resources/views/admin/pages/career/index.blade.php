@extends('layouts.admin')

@section('title', 'Career')

@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Career</h5>
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
                        <h5>All Career List</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="" class="table table-striped table-bordered nowrap table-sm ytable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Career Title</th>
                                        <th>Career Subtitle</th>
                                        <th>Position</th>
                                        <th>Position Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data populated by DataTables via AJAX -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Career Title</th>
                                        <th>Career Subtitle</th>
                                        <th>Position</th>
                                        <th>Position Description</th>
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
                <h5 class="modal-title h4" id="myLargeModalLabel">Add New Career</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('career.store') }}" method="post" id="add-form">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="cer_title" class="col-form-label pt-0">Career Title<sup class="text-size-20 top-1">*</sup></label>
                        <input type="text" class="form-control" id="cer_title" name="cer_title" required>
                        <small id="emailHelp" class="form-text text-muted">This is your Slider Heading Text</small>
                    </div>

                       <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Career Subtitle</label>
                        <textarea class="form-control textarea" name="cer_subtitle" id="summernote" rows="4" >{{old('cer_subtitle')}}</textarea> 
                    </div>
                </div>
                 <div class="form-group">
    <label for="position" class="col-form-label pt-0">Position/Department<sup class="text-size-20 top-1">*</sup></label>
    <select class="form-control" id="position" name="position" required>
        <option value="">-- Select Position/Department --</option>
        <option value="Software Development">Software Development</option>
        <option value="Web Development">Web Development</option>
        <option value="Mobile App Development">Mobile App Development</option>
        <option value="UI/UX Design">UI/UX Design</option>
        <option value="Graphic Design">Graphic Design</option>
        <option value="Quality Assurance (QA)">Quality Assurance (QA)</option>
        <option value="DevOps Engineering">DevOps Engineering</option>
        <option value="Database Administration">Database Administration</option>
        <option value="System Administration">System Administration</option>
        <option value="Network Administration">Network Administration</option>
        <option value="Cybersecurity">Cybersecurity</option>
        <option value="Data Science">Data Science</option>
        <option value="Machine Learning/AI">Machine Learning/AI</option>
        <option value="Business Analysis">Business Analysis</option>
        <option value="Project Management">Project Management</option>
        <option value="Product Management">Product Management</option>
        <option value="Technical Support">Technical Support</option>
        <option value="IT Support">IT Support</option>
        <option value="Sales & Marketing">Sales & Marketing</option>
        <option value="Digital Marketing">Digital Marketing</option>
        <option value="Content Writing">Content Writing</option>
        <option value="SEO Specialist">SEO Specialist</option>
        <option value="Human Resources (HR)">Human Resources (HR)</option>
        <option value="Accounts & Finance">Accounts & Finance</option>
        <option value="Administration">Administration</option>
        <option value="Legal & Compliance">Legal & Compliance</option>
        <option value="Research & Development">Research & Development</option>
        <option value="Cloud Engineering">Cloud Engineering</option>
        <option value="Blockchain Development">Blockchain Development</option>
        <option value="Game Development">Game Development</option>
    </select>
    <small id="positionHelp" class="form-text text-muted">Select the position/department you are applying for</small>
</div>
                      <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Position Description</label>
                        <textarea class="form-control textarea" name="position_des" id="summernote1" rows="4" >{{old('cer_subtitle')}}</textarea> 
                    </div>
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
                <h5 class="modal-title" id="editModalLabel">Edit Career</h5>
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
    $(function banner(){
        var table = $('.ytable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('career.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'cer_title', name: 'cer_title' },
                { data: 'cer_subtitle', name: 'cer_subtitle' },
                { data: 'position', name: 'position' },
                { data: 'position_des', name: 'position_des' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });

    // For Edit Slider
    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("career/" + id + "/edit", function(data) {
            $('.modal-body').html(data);
        });
    });
</script>

@endsection
