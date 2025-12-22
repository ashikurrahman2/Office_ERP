<form action="{{ route('client.update', $client->id) }}" method="post" id="edit-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
          <div class="form-group mb-3">
             <label>Client Name</label>
                <input type="text" name="client_name" value="{{ $client->client_name }}" class="form-control" required>
                </div>

         <div class="form-group mb-3">
                    <label>Client Qute</label>
                    <textarea name="client_qute" class="form-control" rows="3" required>{{ $client->client_qute }}</textarea>
                </div>      

        <div class="form-group">
            <label for="client_img" class="col-form-label pt-0">Current Image</label><br>
            @if($client->client_img)
                <img src="{{ asset($client->client_img) }}" width="200" alt="Current Image">
            @else
                <p>No image uploaded.</p>
            @endif
        </div>

        <div class="form-group">
            <label for="client_img" class="col-form-label pt-0">Client Image</label>
            <input type="file" class="form-control" name="client_img" value="{{ $client->client_img }}" accept="image/*">
            <small class="form-text text-muted">You can upload a new image (Optional)</small>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update Client</button>
        </div>
    </div>
</form>

{{-- Optional File Upload JS (if you're using plugin for file uploads) --}}
<script src="{{ asset('/') }}admin/assets/fileuploads/js/fileupload.js"></script>
<script src="{{ asset('/') }}admin/assets/fileuploads/js/file-upload.js"></script>
