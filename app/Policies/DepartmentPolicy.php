<?php

namespace App\Policies;

use App\User;
use App\Department;
use Illuminate\Auth\Access\HandlesAuthorization;

class DepartmentPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any departments.
     *
     * @param  User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->authorizeRoles('administrator');
    }

    /**
     * Determine whether the user can view the department.
     *
     * @param  User  $user
     * @param  Department  $department
     * @return mixed
     */
    public function view(User $user, Department $department)
    {
        return $user->authorizeRoles('administrator');
    }

    /**
     * Determine whether the user can create departments.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->authorizeRoles('administrator');
    }

    /**
     * Determine whether the user can update the department.
     *
     * @param  User  $user
     * @param  Department  $department
     * @return mixed
     */
    public function update(User $user, Department $department)
    {
        return $user->authorizeRoles('administrator');
    }

    /**
     * Determine whether the user can delete the department.
     *
     * @param  User  $user
     * @param  Department  $department
     * @return mixed
     */
    public function delete(User $user, Department $department)
    {
        //
    }

    /**
     * Determine whether the user can restore the department.
     *
     * @param  User  $user
     * @param  Department  $department
     * @return mixed
     */
    public function restore(User $user, Department $department)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the department.
     *
     * @param  User  $user
     * @param  Department  $department
     * @return mixed
     */
    public function forceDelete(User $user, Department $department)
    {
        return $user->authorizeRoles('administrator');
    }
}
