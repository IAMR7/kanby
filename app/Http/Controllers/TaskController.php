<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TaskModel;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->TaskModel = new TaskModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data['status'] = $this->TaskModel->getstatus();
        $data['users'] = $this->TaskModel->getusers();
        $data['task'] = $this->TaskModel->alldata();
        //dd($data);
        return view('admin/task/v_index', $data);
    }

    public function gettask($id)
    {
        if (!$this->TaskModel->getdata($id)) {
            abort(404);
        }

        $data['task'] = $this->TaskModel->getdata($id);
        //dd($data);
        return view('admin/task/v_detail_task', $data);
    }

    public function addtask()
    {
        Request()->validate([

            'name_task' => 'required',
            'id_status' => 'required',
            'id_users' => 'required',

        ], [

            'name_task.required' => 'Wajib Diisi !',
            'id_status.required' => 'Wajib Diisi !',
            'id_users.required' => 'Wajib Diisi !',

        ]);

        $data = [

            'name_task' => Request()->name_task,
            'desc_task' => Request()->desc_task,
            'start_assign' => Request()->start_assign,
            'end_assign' => Request()->end_assign,
            'id_status' => Request()->id_status,
            'id_users' => Request()->id_users,
        ];

        $this->TaskModel->adddata($data);
        return redirect()->route('task')->with('pesan', 'Berhasil menambah task');
    }

    public function edittask($id)
    {
        if (!$this->TaskModel->getdata($id)) {
            abort(404);
        }

        $data['task'] = $this->TaskModel->getdata($id);
        $data['status'] = $this->TaskModel->getstatus();
        $data['users'] = $this->TaskModel->getusers();
        // dd($data);
        return view('admin/task/v_edit_task', $data);
    }

    public function updatetask($id)
    {

        Request()->validate([

            'name_task' => 'required',
            'id_status' => 'required',
            'id_users' => 'required',

        ], [

            'name_task.required' => 'Wajib Diisi !',
            'id_status.required' => 'Wajib Diisi !',
            'id_users.required' => 'Wajib Diisi !',

        ]);

        $data = [

            'name_task' => Request()->name_task,
            'desc_task' => Request()->desc_task,
            'start_assign' => Request()->start_assign,
            'end_assign' => Request()->end_assign,
            'id_status' => Request()->id_status,
            'id_users' => Request()->id_users,
        ];

        $this->TaskModel->updatedata($id, $data);
        return redirect()->route('task')->with('pesan', 'Berhasil update task');
    }

    public function deletetask($id)
    {
        $this->TaskModel->getdata($id);
        //dd($coba);
        $this->TaskModel->deletedata($id);
        return redirect()->route('task')->with('pesan', 'Berhasil menghapus buku');
    }
}
