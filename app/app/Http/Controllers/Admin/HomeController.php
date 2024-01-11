<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $jumlahDosen = User::where('role', 'LECTURER')->count();

        $jumlahDosenGender = DB::table('users')
            ->leftJoin('lecturer_profile as lp', function ($join) {
                $join->on('users.id', '=', 'lp.user_id')
                    ->where('users.role', 'LECTURER');
            })
            ->select(DB::raw('count(*) as total_count'), 'lp.gender')
            ->groupBy('lp.gender')
            ->get();
        $jumlahDosenGender = collect($jumlahDosenGender)->mapWithKeys(function ($item) {
            return [$item->gender => $item->total_count];
        })->all();

        return view('admin.home', compact('jumlahDosen', 'jumlahDosenGender'));
    }
}
