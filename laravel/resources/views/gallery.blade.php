@extends('layout')
@section('content')
    <section class="page-section">
        <div class="container">
            <h1 class="cursive text-center preview-label">Works Preview</h1>
            
            <form action="{{ route('works.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row g-4 mt-4">
                    @for ($i = 1; $i <= 21; $i++)
                        <div class="col-md-4">
                            <div class="photo-wrapper mb-3">
                                <img src="{{ $data['gallery'][$i-1] }}" class="img-fluid rounded" alt="work{{ $i }}" id="work{{ $i }}"/>
                            </div>
                            <input type="file" class="form-control" name="gallery{{ $i }}" accept="image/*" onchange="updatePreview(event, {{ $i }})">
                        </div>
                    @endfor
                </div>
                <div class="row g-4 mt-4">
                    <div class="col-12 text-center">
                        <input class="input-group-text btn btn-gold" type="submit" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <style>
        .photo-wrapper {
            aspect-ratio: 4 / 3;
            overflow: hidden;
            border-radius: 8px;
            background: #f8f9fa;
        }

        .photo-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

    <script>
        function updatePreview(event, id){
            const file = event.target.files[0];
            
            // Validate file type
            if (file && !file.type.startsWith('image/')) {
                alert('Please upload an image file.');
                event.target.value = '';
                return;
            }
            
            // Update preview image
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('work' + id).src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    </script>
@endsection