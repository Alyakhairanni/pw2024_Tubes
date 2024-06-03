<div class="gallery w-100 vh-100 p-2 d-flex justify-content-center align-items-center">
        <div class="container">
            <h5 class="text-center sub-title mt-5">FOR SELL</h5>
            <h2 class="text-center title-page mb-5">SHOP OPEN</h2>
            <div class="row bg-light p-2 d-flex justify-content-center align-items-center">
                <?php foreach ($shop as $sh) : ?>
                <div class="card mt-5 mb-5 gap-2" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class=""><?= $sh["nama_produk"]; ?></h5>
                        <p class="card-text">Rp.<?= $sh["harga_produk"]; ?></p>
                    </div>
                    <img src="assets/img/<?= $sh["gambar_produk"]; ?>" class="card-img-top overflow-hidden" alt="...">
                    <a href="#" class="btn btn-danger">Buy Now</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>