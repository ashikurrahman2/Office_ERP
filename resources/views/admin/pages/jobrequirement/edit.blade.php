<form action="{{ route('req.update', $req->id) }}" method="post" id="edit-form">
    @csrf
    @method('PUT')
    <div class="modal-body">
                 <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Aditional Requirement</label>
                        <textarea class="form-control textarea" name="aditional_requirement" id="summernote" rows="4" >{{ $req->aditional_requirement }}</textarea> 
                    </div>
                </div>
                    <div class="form-group">
                        <label for="requirement" class="col-form-label pt-0">Requirement<sup class="text-size-20 top-1">*</sup></label>
                        <input type="text" class="form-control" id="requirement" name="requirement" value="{{ $req->requirement }}" required>
                        <small id="emailHelp" class="form-text text-muted">This is your Slider Heading Text</small>
                    </div>

                       <div class="form-group">
                        <label for="benifit" class="col-form-label pt-0">Benifit<sup class="text-size-20 top-1">*</sup></label>
                        <input type="text" class="form-control" id="benifit" name="benifit" value="{{ $req->benifit }}" required>
                        <small id="emailHelp" class="form-text text-muted">This is your Slider Heading Text</small>
                    </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update Requirement</button>
        </div>
    </div>
</form>
