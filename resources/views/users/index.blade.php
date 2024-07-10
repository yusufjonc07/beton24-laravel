@extends('layouts.app')
@section('title', __('app.hodimlar_b'))
@section('content')


<div class="row align-items-center">
    <div class="col-md-6">

    </div>

    <div class="col-md-6">
        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

            <div>
                @include('users.shared.filter')
            </div>

            <div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#createNewUser">
                    {{__('app.add_user')}}
                </button>

            </div>
            <div>
                <a href="{{ route('user.fired') }}" class="btn btn-soft-danger">
                    <i class="mdi mdi-block me-1"></i>
                    {{__("app.fired_users")}}
                </a>
            </div>

        </div>

    </div>
</div>
<div class="row">

    @foreach ($users as $user)

    <div class="col-xl-3 col-sm-6">
        @include('users.shared.user-card')
    </div>

    @endforeach

</div>
<div class="mt-3">

    {{ $users->links()}}

</div>


<!-- Modal -->
<div class="modal fade" id="createNewUser" tabindex="-1" aria-labelledby="createNewUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createNewUserLabel"> {{__('app.add_user')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php $route = 'create'; ?>
                   @include("users.shared.form")

                </div>
             
            </form>
        </div>
    </div>
</div>
@if ($errors->any())
<script>
    document.getElementById('createNewUser').modal('show');
</script>
@endif
@endsection