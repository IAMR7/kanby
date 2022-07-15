@extends('admin/layout_admin/v_template')

@section('title', 'Admin - Dashboard')
    
@section('content')

<div class="content-wrapper">
    <h3>Dashboard</h3>
    <div class="row mt-4">
        <div class="col-lg-2 col-md-4 col-6">
            <div class="card card-body">
                <h4 class="mt-2">Backlog</h4>
                @foreach ($task as $item)
                @if ($item->id_status == 1)
                    <div class="mt-3 card card-body card-light-danger">
                        <h6>{{$item->name_task}}</h6>
                        <p class="text-truncate mb-5">{{$item->desc_task}}</p>
                        <small>To : {{$item->username}}</small>
                    </div>                    
                @endif
                @endforeach
            </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
            <div class="card card-body">
                <h4 class="mt-2">To Do</h4>
                @foreach ($task as $item)
                @if ($item->id_status == 2)
                <div class="mt-3 card card-body card-light-blue">
                    <h6>{{$item->name_task}}</h6>
                    <p class="text-truncate mb-5">{{$item->desc_task}}</p>
                    <small>To : {{$item->username}}</small>
                </div>
                @endif
                @endforeach
            </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
            <div class="card card-body">
                <h4 class="mt-2">In Progress</h4>
                @foreach ($task as $item)
                @if ($item->id_status == 3)
                <div class="mt-3 card card-body card-tale">
                    <h6>{{$item->name_task}}</h6>
                    <p class="text-truncate mb-5">{{$item->desc_task}}</p>
                    <small>To : {{$item->username}}</small>
                </div>
                @endif
                @endforeach
                
            </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
            <div class="card card-body">
                <h4 class="mt-2">Evaluate</h4>
                @foreach ($task as $item)
                    @if ($item->id_status == 4)
                    <div class="mt-3 card card-body card-dark-blue">
                        <h6>{{$item->name_task}}</h6>
                        <p class="text-truncate mb-5">{{$item->desc_task}}</p>
                        <small>To : {{$item->username}}</small>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
            <div class="card card-body">
                <h4 class="mt-2">Done</h4>
                @foreach ($task as $item)
                    @if ($item->id_status == 5)
                    <div class="mt-3 card card-body bg-success text-white">
                        <h6>{{$item->name_task}}</h6>
                        <p class="text-truncate mb-5">{{$item->desc_task}}</p>
                        <small>To : {{$item->username}}</small>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

</div>

@endsection