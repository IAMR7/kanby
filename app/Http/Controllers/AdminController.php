<?php

namespace App\Http\Controllers;
use App\Models\TaskModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->TaskModel = new TaskModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data['task'] = $this->TaskModel->alldata();
        //dd($data);
        return view('admin/v_index', $data);
    }
}
