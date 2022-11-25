<?php

namespace App\Http\Controllers\Back;

use App\Enums\UserMetaEnums;
use App\Enums\UserRoleEnums;
use App\Enums\UserStatusEnums;
use App\Http\Controllers\Controller;
use App\Http\Requests\Back\DoctorStoreRequest;
use App\Http\Requests\Back\UserDestroyRequest;
use App\Http\Requests\Back\UserStoreRequest;
use App\Http\Requests\Back\UserPasswordUpdateRequest;
use App\Http\Requests\Back\UserUpdateRequest;
use App\Http\Requests\Back\UserRoleUpdateRequest;
use App\Http\Requests\Back\UserStatusUpdateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorsController extends BackController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = getDoctorUsers();
        return view('back.doctors.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->base_all_order_by_desc(Role::class);
        return view('back.doctors.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorStoreRequest $request)
    {
        $user = $this->base_create(User::class, $request->all());
        $this->base_add_media($user, $request->file('image'));

        $user->assignRole(UserRoleEnums::DOCTOR);

        $this->base_update_or_create($user, 'meta', ['value' => $request->get(UserMetaEnums::USER_PROFILE)], [
            'key' => UserMetaEnums::USER_PROFILE,
        ]);
        return $this->base_redirect_back([
            'session_message' => __('messages.success_create', ['title' => $user->name])
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = $this->base_all_order_by_desc(Role::class);
        $user_meta = $user->meta->where('key', UserMetaEnums::USER_PROFILE)->first();
        dd($user->meta);
        return view('back.doctors.edit', compact('user', 'user_meta', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $user = $this->base_update($user, $request->all());
        if ($image = $request->file('image')) {
            $this->base_add_media($user, $image);
        }
        return $this->base_redirect_back([
            'session_message' => __('messages.success_update', ['title' => $user->name])
        ]);
    }

    public function updateStatus(UserStatusUpdateRequest $request, User $user)
    {
        $user = $this->base_update_status($user, $request->get('status'));
        $session_message = __('messages.success_accepted', ['title' => $user->title]);
        if ($user->status->value == UserStatusEnums::REJECTED) {
            $session_message = __('messages.success_rejected', ['title' => $user->title]);
        }
        return $this->base_redirect_back([
            'session_message' => $session_message
        ]);
    }

    public function updatePassword(UserPasswordUpdateRequest $request, User $user)
    {
        $user = $this->base_update($user, $request->only('password'));
        return $this->base_redirect_back([
            'session_message' => __('messages.success_update', ['title' => $user->name]),
        ]);
    }

    public function updateRole(UserRoleUpdateRequest $request, User $user)
    {
        $user->syncRoles($request->get('role'));

        return $this->base_redirect_back([
            'session_message' => __('messages.success_update', ['title' => $user->name]),
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDestroyRequest $request, User $user)
    {
        $this->base_destroy($user);
        return $this->base_redirect_back([
            'session_message' => __('messages.success_destroy', ['title' => $user->name])
        ]);
    }

    public function trashIndex()
    {
        $users = $this->base_trash_all_order_by_desc(User::class);
        return view('back.doctors.trash_index', compact('users'));
    }

    public function trashRestore($id)
    {
        $user = $this->base_trash_find_by_id(User::class, $id);
        $this->base_trash_restore($user);
        return $this->base_redirect_back([
            'session_message' => __('messages.success_restore', ['title' => $user->name])
        ]);
    }
}
