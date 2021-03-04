<?php

namespace App\Http\Controllers;

use App\Models\Member;

use Illuminate\Http\Request;

class DormitoryController extends Controller
{
    public function create(Request $request)
    {
        return Member::create($request->all());
    }
}
