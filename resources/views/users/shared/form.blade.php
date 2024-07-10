<form enctype="multipart/form-data" action="{{ route('user.'.$route) }}" method="post">
    @csrf
   <div class="row">
    <div class="col-12 col-md-4 col-sm-6 col-lg-3">
        <div class="mb-3">
            <input name="username" value="{{ request('username') }}" type="text" class="form-control">
            @error('username')
            <div>{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-4 col-sm-6 col-lg-3">
        <div class="mb-3">
            <input name="password" value="{{ request('password') }}" type="password" class="form-control">
            @error('password')
            <div>{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-4 col-sm-6 col-lg-3">
        <div class="mb-3">
            <input name="firstname" value="{{ request('firstname') }}" type="text" class="form-control">
            @error('firstname')
            <div>{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-4 col-sm-6 col-lg-3">
        <div class="mb-3">
            <input name="lastname" value="{{ request('lastname') }}" type="text" class="form-control">
            @error('lastname')
            <div>{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-4 col-sm-6 col-lg-3">
        <div class="mb-3">
            <input name="position" value="{{ request('position') }}" type="text" class="form-control">
            @error('position')
            <div>{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-4 col-sm-6 col-lg-3">
        <div class="mb-3">
            <input name="profileImage" value="{{ request('profileImage') }}" type="file" class="form-control">
            @error('profileImage')
            <div>{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-4 col-sm-6 col-lg-3">
        <div class="mb-3">
            <input name="passportNumber" value="{{ request('passportNumber') }}" type="text" class="form-control">
            @error('passportNumber')
            <div>{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-4 col-sm-6 col-lg-3">
        <div class="mb-3">
            <input name="salary" value="{{ request('salary') }}" type="number" min="0" class="form-control">
            @error('salary')
            <div>{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-4 col-sm-6 col-lg-3">
        <div class="mb-3">
            <input name="role" value="{{ request('role') }}" type="text" class="form-control">
            @error('role')
            <div>{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-4 col-sm-6 col-lg-3">
        <div class="mb-3">
            <input name="workplaceId" value="{{ request('workplaceId') }}" type="text" class="form-control">
            @error('workplaceId')
            <div>{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-4 col-sm-6 col-lg-3">
        <div class="mb-3">
            <input name="departmentId" value="{{ request('departmentId') }}" type="text" class="form-control">
            @error('departmentId')
            <div>{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-4 col-sm-6 col-lg-3">
        <div class="mb-3">
            <input name="shiftId" value="{{ request('shiftId') }}" type="text" class="form-control">
            @error('shiftId')
            <div>{{ $message }}</div>
            @enderror
        </div>
    </div>
   
   </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>











</form>