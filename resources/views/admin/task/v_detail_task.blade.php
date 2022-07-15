@extends('admin/layout_admin/v_template')

@section('title', 'KANBY - Task')
    
@section('content')

<div class="content-wrapper">
    <h3>All Task</h3>

    <p>{{$task->name_task}}</p>
    <p>{{$task->name_status}}</p>
    <p>{{$task->username}}</p>

</div>

@endsection