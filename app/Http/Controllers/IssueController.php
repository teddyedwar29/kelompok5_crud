<?php

namespace App\Http\Controllers;

use App\Models\IssueModel;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function tampil () {
        $issue = IssueModel::all();
        return view('admin.issue',compact('issue'));
    }
}
