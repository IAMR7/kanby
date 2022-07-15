@extends('admin/layout_admin/v_template')

@section('title', 'KANBY - Task')
    
@section('content')

<div class="content-wrapper">
    <h3>Edit Task</h3>

    <div class="row mt-4">

        <div class="col-lg-4 col-md-12 col-12">
            <div class="card">
                <div class="card-body p-5">
                    
                    <form class="mt-4" action="update/{{$task->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Judul Task</label>
                            <input type="hidden" class="form-control" id="id" name="id">
                            <input type="text" class="form-control" id="name_task" name="name_task" value="{{$task->name_task}}">
                            <div class="text-danger">
                                @error('name_task')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Task</label><br>
                            <textarea name="desc_task" id="desc_task" cols="42" rows="5">{{$task->desc_task}}</textarea>
                            <div class="text-danger">
                                @error('penulis')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tugas Dimulai</label>
                            <input type="date" class="form-control" id="start_assign" name="start_assign" value="{{$task->start_assign}}">
                            <div class="text-danger">
                                @error('penerbit')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tugas Berakhir</label>
                            <input type="date" class="form-control" id="end_assign" name="end_assign" value="{{$task->end_assign}}">
                            <div class="text-danger">
                                @error('penerbit')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Status Task</label>
                            <select class="custom-select" name="id_status" id="id_status">
                                <option selected>Pilih status task</option>
                                @foreach ($status as $item)
                                    <option value="{{$item->id}}" {{ $item->id == $task->id_status ? ' selected' : '' }}>{{$item->name_status}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Tugaskan Untuk</label>
                            <select class="custom-select" name="id_users" id="id_users">
                                <option selected>Pilih yang ditugaskan</option>
                                @foreach ($users as $item)
                                <option value="{{$item->id}}" {{$item->id == $task->id_users ? 'selected' : ''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-md btn-primary"><i class="ti-save-alt mr-1"></i> Simpan</button>

                    </form>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection