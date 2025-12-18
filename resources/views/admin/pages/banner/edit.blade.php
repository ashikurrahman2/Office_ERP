<form action="{{ route('banner.update', $banner->id) }}" method="post" id="edit-form">
    @csrf
    @method('PUT')
    <div class="modal-body">
         <div class="form-group">
            <label for="banner_title" class="col-form-label pt-0">Banner Title<sup class="text-size-20 top-1">*</sup></label>
             <input type="text" class="form-control" id="banner_title" name="banner_title" value="{{ $banner->banner_title }}" required>
         <small id="emailHelp" class="form-text text-muted">This is your Slider Heading Text</small>
     </div>

            <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Banner Subtitle</label>
                        <textarea class="form-control textarea" name="banner_subtitle" id="summernote" rows="4" >{{ $banner->banner_subtitle }}</textarea> 
                    </div>
                </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update Banner</button>
        </div>
    </div>
</form>
