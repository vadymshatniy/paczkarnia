<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Delivery;
use Spatie\Permission\Models\Role;

class IndexAdminController extends Controller
{
    public function main()
    {
        //  $deliveries = DB::table('deliveries')->get();
        // $deliveries = Delivery::where('american_number', '!=', null)->get();
        // $deliveries = Delivery::take(10)->get();

        // return view('admin.main.index', compact('deliveries'));
        $deliveries_count = Delivery::count();
        // $role = Role::where('name', 'super_admin')->first();
        // $user = auth()->user();   // Auth::user();
        // $user->assignRole($role);
        return view('admin.index', compact('deliveries_count'));
    }
}
