@extends(auth()->user()->hasRole('author') ? 'layouts.author.app' : 'layouts.user.sidebar')

@section('style')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/dist/imageuploadify.min.css') }}">
    <style>
        .card.active {
            border: 1px solid #175A95;
            box-shadow: 0 1px 5px #175A95;
        }

        .selected-image {
            box-shadow: 0 1px 5px #175A95;
            border-radius: 10px;
        }

        .form-check-input:checked+.form-check-label img {
            box-shadow: 0 1px 5px #175A95;
            border-radius: 5px;
        }
    </style>
@endsection

@section('content')
    <div class="card shadow-sm position-relative overflow-hidden" style="background-color: #175A95;">
        <div class="card-body px-4 py-4">
            <div class="row justify-content-between">
                <div class="col-8 text-white">
                    <h4 class="fw-semibold mb-3 mt-2 text-white">Pengisian Iklan</h4>
                    <p>Layanan pengiklanan di getmedia.id</p>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n4">
                        <img src="{{ asset('assets/img/bg-ajuan.svg') }}" width="250px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('create.advertisement') }}" method="post" enctype="multipart/form-data">
        @method('post')
        @csrf
        <div class="d-flex justify-content-between mb-3">
            <h5>Isi form dibawah ini untuk konten iklan</h5>
            <div>
                <button class="btn btn-md text-white me-2" style="background-color: #1EBB9E;">
                    Simpan Draf
                </button>
                <button type="submit" class="btn btn-md text-white" style="background-color: #175A95;">
                    Unggah
                </button>
            </div>
        </div>

        <div class="card p-4 pb-5 shadow-sm">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <label class="form-label" for="page">Halaman</label>
                    <select name="page" class="form-select" id="">
                        <option value="home">Dashboard</option>
                        <option value="singlepost">News Post</option>
                        <option value="category">Kategori</option>
                        <option value="subcategory">Sub Kategori</option>
                    </select>
                </div>
                <div class="col-lg-6 mb-4">
                    <label class="form-label" for="type">Jenis Iklan</label>
                    <select name="type" class="form-select" id="">
                        <option value="photo">Foto</option>
                        <option value="video">Video</option>
                    </select>
                </div>

                <div class="col-lg-12 mb-4">
                    <label for="position" class="form-label">Posisi Iklan</label>
                    <div class="">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="position" id="inlineRadio1" value="mid">
                            <label class="form-check-label" for="inlineRadio1">
                                <p class="ms-2">Posisi Tengah Full (1770 x 166)</p>
                                <img src="{{asset('assets/img/news/news-11.webp')}}" width="300" height="200" alt="">
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="position" id="inlineRadio1" value="top">
                            <label class="form-check-label" for="inlineRadio1">
                                <p class="ms-2">Posisi Atas Full (1770 x 166)</p>
                                <img src="{{ asset('assets/img/news/news-11.webp') }}" width="300" height="200"
                                    alt="">
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="position" id="inlineRadio2" value="right">
                            <label class="form-check-label" for="inlineRadio2">
                                <p class="ms-2">Posisi Kanan (456 x 654)</p>
                                <img src="{{ asset('assets/img/news/news-12.webp') }}" width="300" height="200"
                                    alt="">
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="position" id="inlineRadio3" value="left">
                            <label class="form-check-label" for="inlineRadio3">
                                <p class="ms-2">Posisi Kiri (1245 x 295)</p>
                                <img src="{{ asset('assets/img/news/news-13.webp') }}" width="300" height="200"
                                    alt="">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <label class="form-label" for="start_date">Tanggal Awal</label>
                    <input type="date" id="start_date" name="start_date" placeholder="" value="{{ old('start_date') }}"
                        class="form-control @error('start_date') is-invalid @enderror">
                    @error('start_date')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-6 mb-4">
                    <label class="form-label" for="end_date">Tanggal Akhir</label>
                    <input type="date" id="end_date" name="end_date" placeholder="" value="{{ old('end_date') }}"
                        class="form-control @error('end_date') is-invalid @enderror">
                    @error('end_date')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 mb-4">
                    <label class="form-label" for="url">URL</label>
                    <input type="text" id="url" name="url" placeholder="masukan url"
                        value="{{ old('url') }}" class="form-control @error('url') is-invalid @enderror">
                    @error('url')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 mb-4">
                    <label class="form-label" for="photo">Konten</label>
                    <input type="file" id="photo" name="image" onchange="previewImage(event)" placeholder=""
                        value="{{ old('photo') }}" class="form-control @error('photo') is-invalid @enderror">
                    @error('photo')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="gambar-iklan">
                    <label class="form-label" for="preview">Preview</label>
                    <div class="">
                        <img id="preview" style="object-fit: cover;" width="100%" height="160" alt="">
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script src="{{ asset('assets/dist/imageuploadify.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#image-uploadify').imageuploadify();
        })

        function selectCard(selectedCard) {
            var cards = document.querySelectorAll('.card-act');

            cards.forEach(function(card) {
                card.classList.remove('active');
            });

            selectedCard.classList.add('active');
        }


        function selectCard(card) {
            var radioButton = card.querySelector('input[type="radio"]');

            if (!radioButton.checked) {
                radioButton.checked = true;

                var cards = document.querySelectorAll('.card');
                cards.forEach(function(card) {
                    card.classList.remove('border-blue');
                });

                card.classList.add('border-blue');
            }
        }

        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function() {
                var imgElement = document.getElementById("preview");
                imgElement.src = reader.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
@endsection
