<form action="{{ route('career.update', $career->id) }}" method="post" id="edit-form">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="form-group">
            <label for="cer_title" class="col-form-label pt-0">Career Title<sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="cer_title" name="cer_title" value="{{ $career->cer_title }}" required>
            <small id="emailHelp" class="form-text text-muted">This is your Slider Heading Text</small>
        </div>

        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Career Subtitle</label>
                <textarea class="form-control textarea" name="cer_subtitle" id="summernote" rows="4">{{ $career->cer_subtitle }}</textarea> 
            </div>
        </div>

        <div class="form-group">
            <label for="position" class="col-form-label pt-0">Position<sup class="text-size-20 top-1">*</sup></label>
            <select class="form-control" id="position" name="position" required>
                <option value="">-- Select Position/Department --</option>
                <option value="Software Development" {{ $career->position == 'Software Development' ? 'selected' : '' }}>Software Engineer</option>
                <option value="UI/UX Design" {{ $career->position == 'UI/UX Design' ? 'selected' : '' }}>UI/UX Design</option>
                <option value="Graphic Design" {{ $career->position == 'Graphic Design' ? 'selected' : '' }}>Graphic Design</option>
                <option value="Quality Assurance (QA)" {{ $career->position == 'Quality Assurance (QA)' ? 'selected' : '' }}>Quality Assurance (QA)</option>
                <option value="DevOps Engineering" {{ $career->position == 'DevOps Engineering' ? 'selected' : '' }}>DevOps Engineering</option>
                <option value="Database Administration" {{ $career->position == 'Database Administration' ? 'selected' : '' }}>Database Administration</option>
                <option value="System Administration" {{ $career->position == 'System Administration' ? 'selected' : '' }}>System Administration</option>
                <option value="Network Administration" {{ $career->position == 'Network Administration' ? 'selected' : '' }}>Network Administration</option>
                <option value="Cybersecurity" {{ $career->position == 'Cybersecurity' ? 'selected' : '' }}>Cybersecurity</option>
                <option value="Data Science" {{ $career->position == 'Data Science' ? 'selected' : '' }}>Data Science</option>
                <option value="Machine Learning/AI" {{ $career->position == 'Machine Learning/AI' ? 'selected' : '' }}>Machine Learning/AI</option>
                <option value="Business Analysis" {{ $career->position == 'Business Analysis' ? 'selected' : '' }}>Business Analysis</option>
                <option value="Project Management" {{ $career->position == 'Project Management' ? 'selected' : '' }}>Project Management</option>
                <option value="Product Management" {{ $career->position == 'Product Management' ? 'selected' : '' }}>Product Management</option>
                <option value="Technical Support" {{ $career->position == 'Technical Support' ? 'selected' : '' }}>Technical Support</option>
                <option value="IT Support" {{ $career->position == 'IT Support' ? 'selected' : '' }}>IT Support</option>
                <option value="Sales & Marketing" {{ $career->position == 'Sales & Marketing' ? 'selected' : '' }}>Sales & Marketing</option>
                <option value="Digital Marketing" {{ $career->position == 'Digital Marketing' ? 'selected' : '' }}>Digital Marketing</option>
                <option value="Content Writing" {{ $career->position == 'Content Writing' ? 'selected' : '' }}>Content Writing</option>
                <option value="SEO Specialist" {{ $career->position == 'SEO Specialist' ? 'selected' : '' }}>SEO Specialist</option>
                <option value="Human Resources (HR)" {{ $career->position == 'Human Resources (HR)' ? 'selected' : '' }}>Human Resources (HR)</option>
                <option value="Accounts & Finance" {{ $career->position == 'Accounts & Finance' ? 'selected' : '' }}>Accounts & Finance</option>
                <option value="Administration" {{ $career->position == 'Administration' ? 'selected' : '' }}>Administration</option>
                <option value="Legal & Compliance" {{ $career->position == 'Legal & Compliance' ? 'selected' : '' }}>Legal & Compliance</option>
                <option value="Research & Development" {{ $career->position == 'Research & Development' ? 'selected' : '' }}>Research & Development</option>
                <option value="Cloud Engineering" {{ $career->position == 'Cloud Engineering' ? 'selected' : '' }}>Cloud Engineering</option>
                <option value="Blockchain Development" {{ $career->position == 'Blockchain Development' ? 'selected' : '' }}>Blockchain Development</option>
                <option value="Game Development" {{ $career->position == 'Game Development' ? 'selected' : '' }}>Game Development</option>
            </select>
            <small id="positionHelp" class="form-text text-muted">Select the position/department you are applying for</small>
        </div>

        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Position Description</label>
                <textarea class="form-control textarea" name="position_des" id="summernote1" rows="4">{{ $career->position_des }}</textarea> 
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update Career</button>
        </div>
    </div>
</form>