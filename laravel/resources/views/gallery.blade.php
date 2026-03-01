@extends('layout')
@section('content')
    <section class="page-section">
        <div class="container">
            <h1 class="section-title text-center cursive">Our Work</h1>
            
            <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row g-4 mt-4">
                    @for ($i = 1; $i <= 21; $i++)
                        <div class="col-md-4">
                            <img src="{{ $data['gallery'][$i-1] }}" class="img-fluid rounded" alt="" />
                            <input type="file" class="form-control" name="gallery{{ $i }}" accept="images/*">
                        </div>
                    @endfor

                </div>
                <div class="row g-4 mt-4">
                    <input class="input-group-text" type="submit" value="Save Changes">
                </div>

            </form>
        </div>
    </section>
@endsection