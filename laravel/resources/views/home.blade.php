@extends('layout')
@section('content')
    <form action="{{ route('home.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <h5 class="text-center">Update Banner Photo (JPG format only)</h5>
        <div class="container" style="display: flex; justify-content: center; align-items: center">
            <div class="input-group mb-3" id="heroUploadGroup">
                <input type="file" class="form-control" id="heroUpload" name="hero" accept=".jpg,.jpeg,image/jpeg" required>
                <input class="input-group-text" type="submit" value="Save Changes">
            </div>
        </div>
    </form>

    <h1 class="cursive text-center preview-label">Hero Preview</h1>
    <section class="hero" style="background: url('{{ Storage::url('web/hero.jpg') }}') center/cover no-repeat">
        <div class="hero-overlay"></div>
        <div class="container hero-content text-center">
            <h4 class="cursive">Welcome to</h4>
            <h1 class="cursive">Bethany's Events Organizing Services</h1>
            <p class="hero-sub">Planning • Styling • Formal Wear Rentals</p>
            <p class="hero-desc">
                We create elegant, stress-free weddings so you can focus on celebrating
                love.
            </p>
            <div class="hero-actions">
                <button class="btn btn-gold me-2">
                    Book a Consultation
                </button>

                <button class="btn btn-outline-light">
                    View Our Work
                </button>
            </div>
        </div>
    </section>

    <style>
        .hero {
            position: relative;
            min-height: 90vh;
            display: flex;
            align-items: center;
            color: white
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.7);
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 3rem;
        }

        .hero-sub {
            color: #c9a24d;
            letter-spacing: 2px;
        }

        .hero-actions {
            margin-top: 20px;
        }

        #heroPreview{
            display: none; 
            max-width: 40rem; 
            max-height: 40rem; 
            margin-top: 10px; 
            border: 1px solid #ccc; 
            border-radius: 5px;
        }
        
        #heroUploadGroup{
            max-width: 40rem;
        }
    </style>

    <script>
        document.getElementById('heroUpload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            
            // Validate file type
            if (file && !['image/jpeg'].includes(file.type)) {
                alert('Please upload a JPG file only.');
                event.target.value = '';
                return;
            }
            
            const hero = document.getElementsByClassName('hero')[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                hero.style.background = `url(${e.target.result}) center/cover no-repeat`;
            };
            reader.readAsDataURL(file);
        });
    </script>
@endsection