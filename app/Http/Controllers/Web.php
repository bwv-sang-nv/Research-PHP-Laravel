<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Requests\storeUserRequest;
use Illuminate\Support\Facades\DB;

class Web extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function index(Request $request) {
    return view('user.index', [
      'users' => DB::table('users')->paginate(2)
    ]);
  }

  public function create(storeUserRequest $request) { 
    return [
      'status'=> 201,
      'payload' => $request->validated()
    ];
  }
}
