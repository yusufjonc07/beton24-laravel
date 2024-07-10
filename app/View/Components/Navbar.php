<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\View\Component;

class Navbar extends Component
{

        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\Contracts\View\View|\Closure|string
         */
        public function render()
        {




                // $the_user = null;

                // if ($the_user) {
//     $user_fullname = $the_user->fullname;
//     $user_image = "@web/img/user/" . $the_user->image;
// } else {
//     $user_fullname = "Mehmon";
//     $user_image = "@web/img/static.png";
// }

                // if ($the_user && $the_user->workplace) {
//     $the_filial = $the_user->workplace;
//     $logo_path = "@web/img/logo/" . $the_filial->image;

                //     if ($the_user->seh && $the_user->role == 'ishchi_admin') {
//         $company_name = $the_user->seh->name;
//     } else {
//         $company_name = $the_filial->name;
//     }
// } else {
//     $company_name = "<small>" . ($_ENV['COMPANY_NAME'] ?? '??') . "</small>";
// }

                $currentUser = Cache::remember('currentUser', 60, function () {
                        return Auth::user();
                });

                $currentWorkplace = Cache::remember('currentWorkplace', 60, function () use ($currentUser) {
                        return $currentUser->workplace;
                });


                View::share('currentUser', $currentUser);
                View::share('currentWorkplace', $currentWorkplace);

                return view('components.navbar');
        }
}
