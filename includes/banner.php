    <!-- awal carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" style="margin-bottom: 20px;">
        <div class="carousel-indicators">
            <!-- Indikator 1 sampai 3 -->
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

            <!-- Tambahan Indikator ke-4 -->
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="<?php echo base_url; ?>assets/banner/banner.jpg" class="d-block w-100" alt="Banner 1">
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="<?php echo base_url; ?>assets/banner/banner2.jpg" class="d-block w-100" alt="Banner 2">
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="<?php echo base_url; ?>assets/banner/banner3.jpg" class="d-block w-100" alt="Banner 3">
            </div>
            <!-- Slide 4 -->
            <div class="carousel-item">
                <img src="<?php echo base_url; ?>assets/banner/banner4.jpg" class="d-block w-100" alt="Banner 4">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- akhir carousel -->