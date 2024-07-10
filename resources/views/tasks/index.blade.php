@extends('layouts.app')
@section('title', __('app.hodimlar_tadbirlar'))
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-danger">tasks page</h3>
            </div>
            <div class="panel-body">
               

                <button class="btn btn-danger"> {{__('app.hr_bolimi')}}</button>
            </div>
        </div>

    </div>
</div>

@endsection