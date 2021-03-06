<div class="container">

    <!-- Banner -->
    <div class="banner">
        <img src="{{ url('assets/slider/slider1.png') }}" alt="">
    </div>

    <!-- Pilih Liga -->
    <section class="pilih-liga mt-4">
        <h3><strong>Pilih Liga</strong></h3>
        <div class="row mt-4">
            @foreach($ligas as $liga)
            <div class="col">
                <a href="{{ route('products.liga', $liga->id) }}">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <img src="{{ url('assets/liga', $liga->gambar) }}" alt="{{ $liga->nama }}" class="img-fluid">
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Product -->
    <section class="products mt-4 mb-5">
        <h3>
            <strong>Best Products</strong>
            <a href="{{ route('products') }}" class="btn btn-dark float-right"><i class="fas fa-eye"></i> Lihat Semua</a>
        </h3>
        <div class="row mt-4">
            @foreach($products as $product)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{ url('assets/jersey', $product->gambar) }}" alt="{{ $product->nama }}" class="img-fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{ $product->nama }}</strong></h5>
                                <p>Rp. {{ number_format($product->harga) }}</p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="{{ route('products.detail', $product->id) }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>