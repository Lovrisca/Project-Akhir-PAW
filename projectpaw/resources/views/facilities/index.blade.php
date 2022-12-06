@extends('layout')
@section('content')
    <div class="content-head d-flex justify-content-between">
        <h4 style="color: #444444; padding-left: 15px; padding-top: 7px;">Facilities List</h4>
        <a href="{{ route('facilities.create') }}" class=" btn-go-back me-3 text-decoration-none">New</a>
    </div>
    <div class="content-body">
        <div class="container-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p class="m-0">{{ $message }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="table-responsive">
                <table border="1">
                    <tr>
                        <td>No</td>
                        <td>Name</td>
                        <td>Image</td>
                        <td>Action</td>
                    </tr>
    
                    @foreach ($facilities as $m)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $m->nama_fasilitas }}</td>
                            <td>
                                @if ($m->foto_fasilitas != null)
                                    <img class="table-image rounded-pill" src="{{ asset('storage/' . $m->foto_fasilitas) }}">
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('facilities.destroy', $m->id_fasilitas) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('facilities.edit', $m->id_fasilitas) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
