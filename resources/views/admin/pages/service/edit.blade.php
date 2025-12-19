<form action="{{ route('service.update', $service->id) }}" method="post" id="edit-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
      <div class="form-group">
                        <label>Title <span class="text-danger">*</span></label>
                        <input type="text" name="service_title" value="{{ $service->service_title }}" class="form-control" required>
                    </div>

        <div class="form-group">
                        <label>Sub Title<span class="text-danger">*</span></label>
                        <textarea name="service_subtitle"  class="form-control" rows="4" required>{{ $service->service_subtitle }}</textarea>
                    </div>

        <div class="form-group">
                        <label>Description<span class="text-danger">*</span></label>
                        <textarea name="service_description" class="form-control" rows="4" required>{{ $service->service_description }}</textarea>
                    </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update Service</button>
        </div>
    </div>
</form>

{{-- Optional JS for file upload if needed --}}
<script src="{{ asset('admin/assets/fileuploads/js/fileupload.js') }}"></script>
<script src="{{ asset('admin/assets/fileuploads/js/file-upload.js') }}"></script>
