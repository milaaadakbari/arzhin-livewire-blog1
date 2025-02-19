<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
//        $data = $request->all();
//        $data['password'] = Hash::make($request->password);
//        User::query()->create($data);
//        return redirect()->route('users.index')->with('success', 'ثبت با موفقیت انجام شد');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {

        return view('admin.users.edit', compact('id'));
    }

    public function update(Request $request, string $id)
    {
//        $user = User::query()->findOrFail($id);
//        $user->update([
//            'name' => $request->name,
//            'email' => $request->email,
//            'password' => $request->password ? Hash::make('$request->password') : $user->password,
//        ]);
//        return redirect()->route('users.index')->with('success', 'ویرایش با موفقیت انجام شد');
   }

    public function destroy(string $id)
    {

    }

    public function createUserRole($id)
    {
        $user = User::query()->findOrFail($id);
        $roles=Role::query()->get();
        return view('admin.users.user_roles', compact('roles','user'));
    }

    public function storeUserRole(Request $request, $id)
    {
        $user = User::query()->findOrFail($id);
        $user->roles()->sync($request->roles);
        return redirect()->route('users.index')->with('success', 'نقش تخصیص یافت');
    }
}


