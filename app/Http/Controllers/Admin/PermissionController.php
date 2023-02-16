<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index() 
    {
        $permissions = Permission::All();
        return view('admin.permissions.index',['permissions'=>$permissions]);
    }
}
