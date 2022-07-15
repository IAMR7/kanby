<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TaskModel extends Model
{
    use HasFactory;

    public function alldata()
    {
        return DB::table('task')
        ->leftJoin('status', 'status.id', '=', 'task.id_status')
        ->leftJoin('users', 'users.id', '=', 'task.id_users')
        ->select('task.*', 'users.name as username', 'status.name_status')
        ->get();

        // return DB::table('task')
        //     ->join('status', 'status.id', '=', 'task.id_status')
        //     ->join('users', 'users.id', '=', 'task.id_users')
        //     ->select('*')
        //     ->get();

        //return DB::table('task')->get();
    }

    public function getdata($id)
    {
        return DB::table('task')
        ->where('task.id', $id)
        ->leftJoin('status', 'status.id', '=', 'task.id_status')
        ->leftJoin('users', 'users.id', '=', 'task.id_users')
        ->select('task.*', 'users.name as username', 'status.name_status')
        ->first();

        //return DB::table('task')->where('id', $id)->first();
    }

    public function getstatus()
    {
        return DB::table('status')->get();
    }

    public function getusers()
    {
        return DB::table('users')->get();
    }

    public function adddata($data)
    {
        DB::table('task')->insert($data);
    }

    public function updatedata($id, $data)
    {
        DB::table('task')->where('id', $id)->update($data);
    }

    public function deletedata($id)
    {
        DB::table('task')->where('id', $id)->delete();
    }
}
