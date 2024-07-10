<?php
    $brand_logo = "<img src='" . asset(config('app.logo')) . "' height='24' style='object-fit:contain'>";
    $brand_name = $currentWorkplace->name ?? config('app.name');
    $user_image = $currentUser->getProfileImage();
?>

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box <?= config('app.sidebar-size') == 'sm' ? 'px-0 text-center' : '' ?>">
                <a href="/site/index" class="logo logo-light">
                    <span class="logo-sm">
                        <?= $brand_logo; ?>
                    </span>
                    <span class="logo-lg">
                        <?= $brand_logo; ?> <span class="logo-txt">{{$brand_name}}</span>
                    </span>
                </a>
                <a href="/site/index" class="logo logo-dark">
                    <span class="logo-sm">
                        <?= $brand_logo; ?>
                    </span>
                    <span class="logo-lg">
                        <?= $brand_logo; ?> <span class="logo-txt">{{$brand_name}}</span>
                    </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn"
                data-baseurl="">
                <i class="mdi mdi-apps"></i>
            </button>
        </div>
        <div class="d-flex">
            <div class="dropdown">
                <button type="button" class="btn header-item" id="mode-setting-btn" data-baseurl="">
                    <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                    <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                </button>
            </div>
            <div class="dropdown d-inline-block me-2">
                <?php //= NotificationBar::widget() ?>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img width="35" clas='rounded-circle header-profile-user' style='object-fit: cover'
                        src='{{$user_image}}'>

                    <span class="d-none  d-xl-inline-block ms-1 fw-medium">
                        <span class="text-truncate text-wrap">
                            {{$currentUser->firstname}}
                        </span>
                    </span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="{{ route('user.profile') }}" class="dropdown-item">
                        <i class="mdi mdi-account font-size-16 align-middle me-1"></i>
                        {{ __('app.profile') }}
                    </a>

                    <a href="{{ route('user.settings') }}" class="dropdown-item">
                        <i class="mdi mdi-cog font-size-16 align-middle me-1"></i>
                        {{ __('app.sozlamalar') }}
                    </a>

                    <div class="dropdown-divider"></div>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="mdi mdi-logout font-size-16 align-middle me-1"></i>
                            {{ __('app.logout') }}
                        </button>
                    </form>

                </div>

            </div>

        </div>
    </div>
</header>