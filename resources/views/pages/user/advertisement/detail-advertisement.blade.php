@extends('layouts.user.sidebar')

@section('style')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="{{ asset('assets/dist/imageuploadify.min.css') }}">
<style>
.card.active {
    border: 1px solid #175A95;
    box-shadow: 0 3px 20px #175A95;
}

.border-blue {
    /* border: 2px solid #175A95 !important;  */
    box-shadow: 0 1px 5px #175A95;
}

.payment-image {
    width: 100px;
    height: 100px;
    object-fit: contain;
}
</style>
@endsection

@section('content')

<div class="card shadow-sm position-relative overflow-hidden" style="background-color: #175A95;">
    <div class="card-body px-4 py-4">
        <div class="row justify-content-between">
            <div class="col-8 text-white">
                <h4 class="fw-semibold mb-3 mt-2 text-white">Pembayaran Iklan</h4>
                <p>Layanan pengiklanan di getmedia.id</p>
            </div>
            <div class="col-3">
                <div class="text-center mb-n4">
                    <img src="{{asset('assets/img/bg-ajuan.svg')}}" width="250px" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row mt-4 ">

    <div class="col-lg-7">
        {{-- <form action="{{route('advertisement.store')}}" method="post">
        @csrf --}}
        <div class="card p-4 pb-5 shadow-sm">
            <h4>Detail Iklan</h4>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <label class="form-label" for="content">Gambar</label>
                    <div class="">
                        <img src="{{ asset('storage/'. $data->image) }}" width="250" alt="">
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <label class="form-label" for="page">Halaman</label>
                    <select class="form-select" id="page-select" disabled>
                        <option value="home" {{ $data->positionAdvertisement->page == 'home' ? 'selected' : '' }}>
                            Dashboard</option>
                        <option value="singlepost"
                            {{ $data->positionAdvertisement->page == 'singlepost' ? 'selected' : '' }}>News Post
                        </option>
                        <option value="category"
                            {{ $data->positionAdvertisement->page == 'category' ? 'selected' : '' }}>Kategori</option>
                        <option value="subcategory"
                            {{ $data->positionAdvertisement->page == 'subcategory' ? 'selected' : '' }}>Sub Kategori
                        </option>
                    </select>
                </div>
                <div class="col-lg-12 mb-4">
                    <label for="position" class="form-label">Posisi Iklan</label>
                    <div class="">
                        @forelse ($positions as $position)
                        <div class="form-check form-check-inline mt-2">
                            <input class="form-check-input" type="radio" name="position_advertisement_id"
                                id="inlineRadio1-{{ $position->page }}" value="{{ $position->id }}"
                                {{ $data->position_advertisement_id == $position->id ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadio1">
                                <p class="ms-2">Posisi {{ $position->position }} Full</p>
                                <img src="{{asset($position->image)}}" width="300" height="200" alt="">
                            </label>
                        </div>
                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <label class="form-label" for="type">Jenis Iklan</label>
                    <select class="form-select" disabled>
                        <option value="photo" {{ $data->type == 'photo' ? 'selected' : '' }}>Foto</option>
                        <option value="video" {{ $data->type == 'video' ? 'selected' : '' }}>Video</option>
                    </select>
                </div>

                <div class="col-lg-6 mb-4">
                    <label class="form-label" for="start_date">Tanggal Awal</label>
                    <input type="date" id="start_date" name="start_date" placeholder="" value="{{ $data->start_date }}"
                        class="form-control @error('start_date') is-invalid @enderror" disabled>
                    @error('start_date')
                    <span class="invalid-feedback" role="alert" style="color: red;">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-lg-6 mb-4">
                    <label class="form-label" for="end_date">Tanggal Akhir</label>
                    <input type="date" id="end_date" name="end_date" placeholder="" value="{{  $data->end_date}}"
                        class="form-control @error('end_date') is-invalid @enderror" disabled>
                    @error('end_date')
                    <span class="invalid-feedback" role="alert" style="color: red;">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-lg-12 mb-4">
                    <label class="form-label" for="url">URL</label>
                    <input type="text" id="url" name="url" placeholder="" value="{{ $data->url }}"
                        class="form-control @error('url') is-invalid @enderror" readonly>
                    @error('url')
                    <span class="invalid-feedback" role="alert" style="color: red;">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>


 <div class="col-md-12 col-lg-5">
    <form action="{{ route('transaction.advertisement', ['advertisement' => $data->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-center py-2" style="background-color: #175A95">
                <h4 class="text-white">Pembayaran</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <input type="hidden" id="advertisement_id" name="advertisement_id" value="">
                    <div class="col-12 mb-4 mt-4">
                        <label class="form-label" for="nomor">Metode Pembayaran</label>
                        <div class="input-group">
                            <input type="text" style="color:#5D87FF;" id="payment_method_input" name="payment_code"  onchange="previewPayment(event)" placeholder="pilih metode pembayaran" value="Pilih Metode Pembayaran" class="preview form-control @error('payment_method') is-invalid @enderror" readonly>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#modal-create" class="btn btn-sm text-white px-4" style="background-color: #5D87FF;">Pilih</button>
                        </div>
                        <div class="d-flex align-items-center">
                        </div>
                        @error('payment_method')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                        <div class="col-12 mb-4">
                            <label class="form-label" for="nomor">Kode Voucher (opsional)</label>
                            <input type="text" id="voucher" name="voucher_code" placeholder="kode voucher"
                                value="{{ old('voucher') }}"
                                class="form-control @error('voucher') is-invalid @enderror">
                            @error('voucher')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    <div class="d-flex mt-5 justify-content-between">
                        <h5>Harga Upload</h5>
                        <input type="hidden" name="price" value="{{ $data->total_price }}">
                        <h5>Rp. {{ $data->total_price }}</h5>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-md text-white w-100" style="background-color: #175A95">
                            Berikutnya
                        </button>
                    </div>
                </div>
            </div>
        </div>


            <div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="tambahdataLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>Pilih Metode Pembayaran</h5>
                        </div>
                        <form id="form-create" method="post">
                            <div class="modal-body">
                                <span class="fw-semibold text-dark fs-4">Bank</span>
                            <div class="row">

                                @forelse ($paymentChannel as $payment)
                                    <div class="col-lg-6 mt-2">
                                        <div class="card p-3 border" onclick="selectCard(this)">
                                            <div class="d-flex align-items-center">
                                                <input type="radio" name="payment_code" value="{{ $payment['code'] }}" style="display: none;" class="me-2">
                                                <label for="bri_va" class="mb-0 d-flex">
                                                    <div class="d-flex">
                                                        <img src="{{$payment['icon_url']}}" width="100px" alt="">
                                                        <div class="ms-4 mt-3">
                                                            <p class="text-dark">{{$payment['name']}}</p>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse

                                {{-- <div class="col-lg-6 mt-2">
                                    <div class="card p-3 border" onclick="selectCard(this)">
                                        <div class="d-flex align-items-center">
                                            <input type="radio" name="payment_method" value="mandiri" style="display: none;" class="me-2">
                                            <label for="bri_va" class="mb-0 d-flex">
                                                <div class="d-flex">
                                                    <img src="{{asset('assets/img/bank-mandiri.svg')}}" width="100px" alt="">
                                                    <div class="ms-4 mt-3">
                                                        <p class="text-dark">Marndiri Virtual Account</p>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="card p-3 border" onclick="selectCard(this)">
                                        <div class="d-flex align-items-center">
                                            <input type="radio" name="payment_method" value="bca" style="display: none;" class="me-2">
                                            <label for="bri_va" class="mb-0 d-flex">
                                                <div class="d-flex">
                                                    <img src="{{asset('assets/img/bank-bca.svg')}}" width="100px" alt="">
                                                    <div class="ms-4 mt-3">
                                                        <p class="text-dark">BCA Virtual Account</p>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card p-3 border" onclick="selectCard(this)">
                                        <div class="d-flex align-items-center">
                                            <input type="radio" name="payment_method" value="bni" style="display: none;" class="me-2">
                                            <label for="bri_va" class="mb-0 d-flex">
                                                <div class="d-flex">
                                                    <img src="{{asset('assets/img/bank-bni.svg')}}" width="100px" alt="">
                                                    <div class="ms-4 mt-3">
                                                        <p class="text-dark">BNI Virtual Account</p>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card p-3 border" onclick="selectCard(this)">
                                        <div class="d-flex align-items-center">
                                            <input type="radio" name="payment_method" value="bsi" style="display: none;" class="me-2">
                                            <label for="bri_va" class="mb-0 d-flex">
                                                <div class="d-flex">
                                                    <img src="{{asset('assets/img/bank-bsi.svg')}}" width="100px" alt="">
                                                    <div class="ms-4 mt-3">
                                                        <p class="text-dark">BSI Virtual Account</p>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <span class="fw-semibold text-dark fs-4">E-Wallet</span>

                            <div class="col-lg-6 mt-2">
                                <div class="card p-3 border" onclick="selectCard(this)">
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="payment_method" value="gopay" style="display: none;" class="me-2">
                                        <label for="bri_va" class="mb-0 d-flex">
                                            <div class="d-flex">
                                                <img src="{{asset('assets/img/wallet-gopay.svg')}}" width="100px" alt="">
                                                <div class="ms-4 mt-3">
                                                    <p class="text-dark">GOPAY</p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-2">
                                <div class="card p-3 border" onclick="selectCard(this)">
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="payment_method" value="ovo" style="display: none;" class="me-2">
                                        <label for="bri_va" class="mb-0 d-flex">
                                            <div class="d-flex">
                                                <img src="{{asset('assets/img/wallet-ovo.svg')}}" width="100px" alt="">
                                                <div class="ms-4 mt-3">
                                                    <p class="text-dark">OVO</p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card p-3 border" onclick="selectCard(this)">
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="payment_method" value="dana" style="display: none;" class="me-2">
                                        <label for="bri_va" class="mb-0 d-flex">
                                            <div class="d-flex">
                                                <img src="{{asset('assets/img/wallet-dana.svg')}}" width="100px" alt="">
                                                <div class="ms-4 mt-3">
                                                    <p class="text-dark">DANA</p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card p-3 border" onclick="selectCard(this)">
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="payment_method" value="indomart" style="display: none;" class="me-2">
                                        <label for="bri_va" class="mb-0 d-flex">
                                            <div class="d-flex">
                                                <img src="{{asset('assets/img/wallet-indomart.svg')}}" width="100px" alt="">
                                                <div class="ms-4 mt-3">
                                                    <p class="text-dark">indomart</p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card p-3 border" onclick="selectCard(this)">
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="payment_method" value="alfamart" style="display: none;" class="me-2">
                                        <label for="bri_va" class="mb-0 d-flex">
                                            <div class="d-flex">
                                                <img src="{{asset('assets/img/wallet-alfamart.svg')}}" width="100px" alt="">
                                                <div class="ms-4 mt-3">
                                                    <p class="text-dark">Alfamart</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-rounded btn-light-danger text-danger"
                                    data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-rounded btn-light-success text-success"
                                    onclick="addPaymentMethod()">Pilih</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection

@section('script')

<script src="{{ asset('assets/dist/imageuploadify.min.js') }}"></script>

<script>
$(document).ready(function() {
    const $pageSelect = $('#page-select');
    const $positionDivs = $('.form-check.form-check-inline');

    function showHidePositionDivs() {
        const selectedPage = $pageSelect.val();

        $positionDivs.each(function() {
            const $positionInput = $(this).find('input[name="position_advertisement_id"]');
            const positionPage = $positionInput.attr('id').split('-')[1];

            if (selectedPage === positionPage) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }

    $pageSelect.on('change', showHidePositionDivs);
    showHidePositionDivs();
});
</script>

<script>
$(document).ready(function() {
    $('#image-uploadify').imageuploadify();
})

function selectCard(card) {
    // Mendapatkan radio button di dalam kartu yang diklik
    var radioButton = card.querySelector('input[type="radio"]');

    // Mengecek apakah radio button belum terpilih
    if (!radioButton.checked) {
        // Mengaktifkan radio button
        radioButton.checked = true;

        // Menghapus border biru dari semua kartu
        var cards = document.querySelectorAll('.card');
        cards.forEach(function(card) {
            card.classList.remove('border-blue');
        });

        // Menambahkan border biru pada kartu yang dipilih
        card.classList.add('border-blue');
    }
}

    function addPaymentMethod() {
        var paymentMethod = $('input[name="payment_code"]:checked').val(); // Ambil nilai payment_method yang dipilih
        $('#payment_method_input').val(paymentMethod); // Set nilai payment_method ke dalam input tersembunyi
        $('#modal-create').modal('hide'); // Sembunyikan modal

        // Setelah payment_method diatur, Anda dapat mengirimkan form atau melakukan operasi lainnya seperti yang Anda perlukan
        // Misalnya, Anda dapat menyimpan data dengan mengirimkan form dengan JavaScript
        $('#form-create').submit(); // Kirim form
    }


function previewPayment(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function() {
        var imgElement = document.getElementByClass("preview");
        imgElement.src = reader.result;
    };
    reader.readAsDataURL(input.files[0]);
}
</script>
@endsection
