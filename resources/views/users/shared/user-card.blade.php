<div class="card text-center h-100">
    <div class="card-body">
        <?php // $form = ActiveForm::begin(); ?>
        <span class="float-start fs-6">ID:
            <?= $user->id ?>
        </span>
        <div class="dropdown text-end">
            <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true">
                <i class="bx bx-dots-horizontal-rounded"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <?php //= Html::submitButton(Yii::t('app', 'fire'), ['class' => 'dropdown-item', 'name' => 'locked_user', 'value' => $hodim->id]); ?>
                <?php //= Html::a(Yii::t('app', 'update'), ['/user/edit', 'u_id' => $hodim->id], ['class' => 'dropdown-item']); ?>
            </div>
        </div>
        <div class="mx-auto mb-4">
            <img src="{{ $user->getProfileImage() }}" alt="Profile Image"
                class="avatar-xl rounded-circle img-thumbnail">
        </div>
        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">
                <?= $user->fullname(); ?>
            </a></h5>
        <p class="text-muted mb-2">
            {{$user->position}}
        </p>

    </div>

    <div class="btn-group" role="group">
        <a href="sms:<?= $user->id; ?>" role="button" class="btn btn-soft-warning text-truncate">
            <i data-feather="mail"></i></a>
        <a href="{{ url('user/show', $user->id) }}" class="btn btn-soft-success text-truncate">
            <i data-feather="eye"></i>
        </a>
        <a href="tel:<?= $user->id; ?>" role="button" class="btn btn-soft-info text-truncate">
            <i data-feather="phone-outgoing"></i></a>
    </div>
</div>