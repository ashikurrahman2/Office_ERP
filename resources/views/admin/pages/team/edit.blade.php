<form action="{{ route('team.update', $team->id) }}" method="post" id="edit-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
           <div class="form-group mb-3">
                    <label>Member Name</label>
                    <input type="text" name="mem_name" value="{{ $team->mem_name }}" class="form-control" required>
                </div>

                   <div class="form-group mb-3">
                    <label>Designation</label>
                    <input type="text" name="mem_design" value="{{ $team->mem_design }}" class="form-control" required>
                </div>

        <div class="form-group">
            <label for="current_image" class="col-form-label pt-0">Current Image</label><br>
            @if($team->mem_img)
                <img src="{{ asset($team->mem_img) }}" alt="mem_img" style="max-width: 120px;">
            @else
                <p>No image uploaded.</p>
            @endif
        </div>

        <div class="form-group">
            <label for="mem_img" class="col-form-label pt-0">Member Image</label>
            <input type="file" class="form-control" name="mem_img" value="{{ $team->mem_img }}" accept="image/*">
            <small class="form-text text-muted">You can upload a new image for the service (Optional)</small>
        </div>

          <div class="form-group mb-3">
                    <label>Social Link</label>
                    <input type="text" name="mem_social" value="{{ $team->mem_social }}" class="form-control" required>
                </div>

                   <div class="form-group mb-3">
                    <label>Social Linked</label>
                    <input type="text" name="mem_social_link" value="{{ $team->mem_social_link }}" class="form-control" required>
                </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update Team</button>
        </div>
    </div>
</form>

{{-- Optional JS for file upload if needed --}}
<script src="{{ asset('admin/assets/fileuploads/js/fileupload.js') }}"></script>
<script src="{{ asset('admin/assets/fileuploads/js/file-upload.js') }}"></script>
