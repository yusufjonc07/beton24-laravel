@extends('layouts.app')
@section('title', __('app.filiallar'))
@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-info mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    {{__('app.filial_add')}}
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('workplace.create')}}" method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> {{__('app.filial_add')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               
                    @csrf
                    <div class="mb-3">
                        <label for="example-text-input" class="form-label">
                            {{__('app.Name')}}
                        </label>
                        <input autocomplete="off" name="name" class="form-control" type="text" required>
                    </div>
                    <div class="mb-3">
                        <label for="example-text-input" class="form-label">
                            {{__('app.INN')}}
                        </label>
                        <input autocomplete="off" name="inn" class="form-control" type="number" required>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
</div>

<div class="row">
    @foreach ($workplaces as $workplace)

    <div class="col-xl-3 col-sm-6">
        <div class="card text-center">
            <div class="card-body">
                <h4 class="font-size-16 mb-1 text-dark">
                    {{ $workplace->name}}
                </h4>
            </div>

            <div class="btn-group" role="group">

                <a href="{{ url('/workplace/view', ['id'=>$workplace->id]) }}"
                    class="btn btn-soft-success text-truncate">
                    <i data-feather="eye"></i>
                </a>
                <a href="{{ url('/workplace/update', ['id'=>$workplace->id]) }}"
                    class="btn btn-soft-warning text-truncate">
                    <i data-feather="edit"></i>
                </a>

                <?php
                //  Modal::begin([
                //             'title' => Yii::t('app', 'Tartiblash') . ': ' . $tp->name,
                //             'toggleButton' => ['label' => '<i class="fa fa-sort-amount-down"></i>', 'class' => 'btn btn-soft-info'],
                //         ]);
                //         $form = ActiveForm::begin();
                //         echo $form->field($tp, 'orderNumber')->label(false);
                //         echo Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-info w-100', 'name' => 'tpSortId', 'value' => $tp->id]);
                //         ActiveForm::end();
                //         Modal::end(); ?>
            </div>
        </div>
        <!-- end card -->
    </div>

    @endforeach

    {{ $workplaces->links() }}

</div>

@endsection