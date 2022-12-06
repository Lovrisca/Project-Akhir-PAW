@extends('layout')
@section('content')
    <div class="content-head d-flex justify-content-between">
        <h4 style="color: #444444; padding-left: 15px; padding-top: 7px;">Create Cafe</h4>
        <a href="{{ route('cafe.index') }}" class=" btn-go-back me-3 text-decoration-none">Back</a>
    </div>
    <div class="content-body">
        <form action="{{ route('cafe.store') }}" method="POST" enctype="multipart/form-data" class="container-body">
            @csrf
            <div>
                <h5 id="teks">Name</h5>
                <input type="text" class="form-input" name="nama_cafe">
            </div>
            <div>
                <h5 id="teks">Phone</h5>
                <input type="text" class="form-input" name="no_telepon">
            </div>
            <div>
                <h5 id="teks">Description</h5>
                <input type="text" class="form-input" name="definisi_cafe">
            </div>
            <div>
                <h5 id="teks">Address</h5>
                <input type="text" class="form-input" name="alamat_cafe">
            </div>
            <div>
                <h5 id="teks">Image</h5>
                <input type="file" class="form-input" placeholder="Drop files here to upload" style="color: #B6BBBF;"
                    name="foto_cafe">
            </div>
            <button type="submit" class="btn-save">Save</button>
        </form>
    </div>
@endsection
