@extends('layout')
@section('content')
    <section class="page-section">
        <div class="container">
            <h1 class="section-title text-center cursive">Our Work</h1>

            {{-- 1st row --}}
            <div class="row g-4 mt-4">

                {{-- 1st column --}}
                <div class="col-md-4">
                    <img src="{{ Storage::url('web/hero.jpg') }}" class="img-fluid rounded" alt="" />
                    <div class="input-group mt-3">
                        <input type="file" class="form-control" name="hero" accept=".jpg,.jpeg,image/jpeg" required>
                        <input class="input-group-text" type="submit" value="Save Changes">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection