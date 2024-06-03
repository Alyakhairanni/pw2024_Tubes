<div class="gallery w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="container d-flex gap-2 p-2 mt-4">
        <div class="row">
            <div class="col-6 mt-3">
                <div class="section-title">
                    <h1 class="sub-title">SHOWCASE</h1>
                    <h2 class="title-page">GALLERY HIVE</h2>
                </div>
                <div class="foto-gallery">
                    <img src="assets/img/Fabioasher.jpg" alt="">
                </div>
            </div>
            <div class="col-6 mt-3">
                <div class="section-title">
                    <h1 class="sub-title">TIME FRAME</h1>
                    <h2 class="title-page">FESTIVAL SCHEDULE</h2>
                </div>
                <?php foreach ($schedule as $sch) : ?>
                <div class="foto-gallery d-flex mb-3">
                    <div class="card hoverme text-bg-dark" style="width: 12rem; height: 10rem;">
                        <img src="assets/img/<?= $sch["gambar_jadwal"]; ?>" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title"><?= $sch["jam_jadwal"]; ?></h5>
                        </div>
                    </div>
                    <div class="col-md-8 d-flex bg-light justify-content-center align-items-center p-3">
                        <div class="card-body">
                            <h5 class="card-sch"><?= $sch["nama_jadwal"]; ?></h5>
                            <p class="card-text"><?= $sch["karir"]; ?></p>
                        </div>
                        <h4 class="card-text"><small class="text-body-secondary"><?= $sch["tipe_musik"]; ?></small></h4>
                    </div>
                </div>
                <?php endforeach; ?>                
            </div>
        </div>
    </div>
</div>