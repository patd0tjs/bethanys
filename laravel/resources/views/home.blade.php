@extends('layout')
@section('content')
    <form action="{{ route('home.store') }}" method="post" enctype="multipart/form-data">
        @csrf

            <input type="file" class="form-control" id="avatar" name="hero" accept="image/*" required>
            {{-- <button type="submit" class="btn btn-success">Submit</button> --}}
            <input type="submit" value="upload">
    </form>
@endsection