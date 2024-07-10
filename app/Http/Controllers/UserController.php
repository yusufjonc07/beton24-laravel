<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPostRequest;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(Request $request)
    {

        $users = User::when(request("departmentId") > 0, function ($query) {
            $query->where('departmentId', request("departmentId"));
        })->with("department")->paginate(10);

        $departmentIds = User::distinct()->pluck('departmentId');
        $departments = Department::whereIn('id', $departmentIds)->get();

        return view('users.index', [
            'users' => $users,
            'departments' => $departments,
        ]);
    }

    public function create(UserPostRequest $request)
    {
        $formData = $request->validated();

        $imagePath = $request->file('profileImage')->store('profile', 'public');
        $formData['profileImage'] = $imagePath;

        User::insert([
            "username"=>$formData['username'],
            "firstname"=>$formData['firstname'],
            "lastname"=>$formData['lastname'],
            "position"=>$formData['position'],
            "profileImage"=>$formData['profileImage'],
            "passportNumber"=>$formData['passportNumber'],
            "salary"=>$formData['salary'],
            "role"=>$formData['role'],
            "workplaceId"=>$formData['workplaceId'],
            "departmentId"=>$formData['departmentId'],
            "shiftId"=>$formData['shiftId'], 
            "password"=>Hash::make($formData['password']), 
        ]);

        return redirect()->route("user.index")->with('success', __('app.Yangi hodim qo`shildi!'));;

    }

    public function profile()
    {
        // Logic to display user profile
    }

    public function settings()
    {
        // Logic to display user settings
    }
}
