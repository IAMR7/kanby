@extends('admin/layout_admin/v_template')

@section('title', 'KANBY - Task')
    
@section('content')

<div class="content-wrapper">
    <h3>All Task</h3>

    <div class="row mt-4">
        <div class="col-lg-8 col-md-12 col-12">
            <div class="card">
                <div class="card-body p-5">
                    @if (session('pesan'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Sukses !</strong><br>
                            {{session('pesan')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <table class="table table-striped table-hovered">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No</th>
                                <th>Judul Task</th>
                                <th>Status</th>
                                <th>Untuk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($task as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name_task}}</td>
                                <td><span class="badge badge-primary">{{$item->name_status}}</span></td>
                                <td>{{$item->username}}</td>
                                <td>
                                    <a href="/admin/task/detail/{{$item->id}}" class="btn btn-sm btn-primary"><i class="ti-info"></i></a>
                                    <a href="/admin/task/edit/{{$item->id}}" class="btn btn-sm btn-warning"><i class="ti-settings"></i></a>
                                    {{-- <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$item->id}}"><i class="ti-trash"></i></button> --}}
                                    <a href="/admin/task/delete/{{$item->id}}" class="btn btn-sm btn-danger"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-12">
            <div class="card">
                <div class="card-body p-5">
                    <h4>Tambah Task Baru</h4>
                    <hr>
                    <form class="mt-4" action="task/add" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Judul Task</label>
                            <input type="hidden" class="form-control" id="id" name="id">
                            <input type="text" class="form-control" id="name_task" name="name_task" value="{{old('name_task')}}">
                            <div class="text-danger">
                                @error('name_task')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Task</label><br>
                            <textarea name="desc_task" id="tesc_task" cols="42" rows="5">{{old('desc_task')}}</textarea>
                            <div class="text-danger">
                                @error('penulis')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tugas Dimulai</label>
                            <input type="date" class="form-control" id="start_assign" name="start_assign" value="{{old('start_assign')}}">
                            <div class="text-danger">
                                @error('penerbit')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tugas Berakhir</label>
                            <input type="date" class="form-control" id="end_assign" name="end_assign" value="{{old('end_assign')}}">
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
                                <option value="{{$item->id}}">{{$item->name_status}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Tugaskan Untuk</label>
                            <select class="custom-select" name="id_users" id="id_users">
                                <option selected>Pilih yang ditugaskan</option>
                                @foreach ($users as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
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