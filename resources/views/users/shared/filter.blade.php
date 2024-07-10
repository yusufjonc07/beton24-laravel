<form action="{{ route('user.index') }}" method="GET">
    <div class="input-group">
        <select name="departmentId" class="form-select">
            <option value="">{{__('app.please choose')}}</option>
            @foreach ($departments as $department)
                <option 
                    value="{{$department->id}}"
                    @if(request('departmentId')==$department->id)
                        selected="selected"
                    @endif
                >{{$department->name}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-info">
            <span class="mdi mdi-account-search-outline"></span>
        </button>
    </div>
</form>