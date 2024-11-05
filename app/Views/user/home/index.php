<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- TEST SLIDER img -->
<?= $this->include('user/home/slider'); ?>

<!-- END slider -->

<style>
    .section_title {
        margin-bottom: 5px; /* Kurangi nilai margin-bottom */
    }
    .row {
        margin-bottom: 15px; /* Kurangi nilai margin-bottom */
    }
    .col-lg-12, .col-lg-6, .col-lg-5 {
        padding: 10px; /* Kurangi nilai padding */
    }
    .section-title {
        margin-bottom: 0; /* Hilangkan margin-bottom */
    }
    .section-subtitle {
        margin-bottom: 10px; /* Kurangi nilai margin-bottom */
    }
    .button {
        background-color: #8B4513; /* Warna coklat */
    color: #fff; /* Warna teks putih */
    padding: 12px 24px; /* Padding di sekitar teks */
    border-radius: 25px; /* Membuat sudut button lebih melengkung */
    text-decoration: none; /* Menghilangkan underline pada link */
    display: inline-block; /* Agar button tampil dengan baik dalam teks */
    font-size: 16px; /* Ukuran font yang lebih besar */
    font-weight: bold; /* Menebalkan teks */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); /* Memberikan bayangan pada button */
    transition: all 0.3s ease; /* Transisi halus pada perubahan */
    margin-top: 10px; /* Margin atas */        
    }
    
    /* Increase the font size of the h1 element within the section_title class */
.section_title h1 {
    font-size: 36px; /* Adjust the font size as needed */
    font-weight: bold; /* Optional: Make the font bold */
    line-height: 1.2; /* Optional: Adjust line height for better readability */
}

/* Other existing CSS rules */
.popular_destination_area {
  padding-top: 60px; /* Reduced from 140px to 60px */
  padding-bottom: 10px; /* Reduced from 120px to 60px */
}

@media (max-width: 767px) {
  .popular_destination_area {
    padding-top: 30px; /* Reduced from 60px to 30px */
    padding-bottom: 15px; /* Reduced from 30px to 15px */
  }
}

/* Ensure the margin for section_title is also adjusted */
.section_title {
  margin-bottom: 5px; /* Adjusted to reduce spacing */
}

.popular_destination_area .single_destination {
  position: relative;
  margin-bottom: 30px;
  border-radius: 5px;
  overflow: hidden;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

.popular_destination_area .single_destination:before {
  background: -moz-linear-gradient(top, rgba(4, 14, 39, 0) 0%, rgba(4, 14, 39, 0.7) 100%);
  background: -webkit-linear-gradient(top, rgba(4, 14, 39, 0) 0%, rgba(4, 14, 39, 0.7) 100%);
  background: linear-gradient(to bottom, rgba(4, 14, 39, 0) 0%, rgba(4, 14, 39, 0.7) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00040e27', endColorstr='#b3040e27',GradientType=0 );
  content: "";
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 2;
  position: absolute;
}

.popular_destination_area .single_destination .thumb img {
  width: 100%;
  border-radius: 5px;
}

.popular_destination_area .single_destination .content {
  position: absolute;
  left: 30px;
  bottom: 30px;
  z-index: 7;
}

.popular_destination_area .single_destination .content p {
  margin-bottom: 0;
  font-size: 22px;
  color: #fff;
  font-weight: 400;
  font-family: "Rubik", sans-serif;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

.popular_destination_area .single_destination .content p a {
  display: inline-block;
  background: #1ec6b6;
  font-size: 12px;
  border-radius: 30px;
  font-weight: 400;
  padding: 0px 12px;
  height: 25px;
  line-height: 25px;
  color: #fff;
  margin-left: 10px;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

.popular_destination_area .single_destination:hover {
  -webkit-transform: translateY(-10px);
  -moz-transform: translateY(-10px);
  -ms-transform: translateY(-10px);
  transform: translateY(-10px);
}

.popular_destination_area .single_destination:hover .content p {
  color: #ff4a52;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

.popular_destination_area .single_destination:hover .content p a {
  background: #ff4a52;
  color: #fff;
}

</style>

<div class="popular_destination_area">
    <div class="container">
        <?php foreach ($profil as $title) :  ?>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_title text-center mb_30"> <!-- Ganti mb_70 dengan mb_30 -->
                        <h1><?= $title->title_website; ?></h1>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- END services -->

<div class="site-section pb-0">
    <div class="block-2">
        <?php foreach ($profil as $descper) : ?>
            <div class="container">
                <div class="row">
                    <!-- Tulisan di kiri -->
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <h3 class="section-subtitle text-white opacity-50" style="margin-bottom: 0;"><?php echo lang('Blog.titleAboutUs')  ?></h3>
                        <h2 class="section-title mb-0"><?= $descper->nama_perusahaan; ?></h2>
                        <p class="opacity-50 justify-text">
                            <?php if (lang('Blog.Languange') == 'en') {
                                echo character_limiter($descper->deskripsi_perusahaan_en, 700);
                            } ?>
                            <?php if (lang('Blog.Languange') == 'in') {
                                echo character_limiter($descper->deskripsi_perusahaan_in, 700);
                            } ?>
                        </p>
                        <div class="button">
                            <a href="<?= base_url('about') ?>"><?php echo lang('Blog.btnReadmore'); ?></a>
                        </div>
                    </div>

                    <!-- Gambar di kanan -->
                    <div class="col-lg-5 ml-auto">
                        <img data-src="./asset-user/images/<?= $descper->foto_utama; ?>" <?php foreach ($profil as $perusahaan) : ?>alt="<?= $perusahaan->nama_perusahaan; ?>" <?php endforeach; ?> class="img-fluid img-overlap lazyload">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>




<!-- END block-2 -->
<?php
// Fungsi untuk membandingkan dua objek berdasarkan ID
function compareById($a, $b) {
    return $b->id_produk - $a->id_produk;
}

// Mengurutkan array berdasarkan ID
usort($tbproduk, 'compareById');

// Mengambil 3 elemen pertama (data terbaru)
$latestProducts = array_slice($tbproduk, 0, 5);
?>
<div class="recent_trip_area">
    <div class="container">
    <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3><?php echo lang('Blog.btnOurproducts'); ?></h3>
                    </div>
                </div>
            </div>
        <div class="row justify-content-center">
            <?php foreach ($latestProducts as $produk) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <a href="<?= base_url('product/detail/' . $produk->id_produk . '/' . url_title($produk->nama_produk_en) . '_' . url_title($produk->nama_produk_in)) ?>">
                                <img src="./asset-user/images/<?= $produk->foto_produk; ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                                    echo $produk->nama_produk_en;
                                } ?>
                                <?php if (lang('Blog.Languange') == 'in') {
                                    echo $produk->nama_produk_in;
                                } ?>" class="img-fluid lazyload">
                            </a>
                        </div>
                        <div class="info button">
                            <a href="#">
                                <h3><?php if (lang('Blog.Languange') == 'en') {
                                    echo $produk->nama_produk_en;
                                } ?>
                                <?php if (lang('Blog.Languange') == 'in') {
                                    echo $produk->nama_produk_in;
                                } ?></h3>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Artikel Terbaru</h5>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <?php foreach ($artikelterbaru as $row) : ?>
                <div class="col-lg-4 mb-4">
                    <div class="position-relative d-flex flex-column h-100 mb-3">
                        <a href="<?= base_url('/artikel/detail/' . $row->id_artikel) ?>">
                            <img class="img-fluid w-100" style="object-fit: cover;" src="<?= base_url('asset-user') ?>/images/<?= $row->foto_artikel; ?>" loading="lazy">
                        </a>
                        <div class="bg-white border border-top-0 p-4 flex-grow-1">
                            <div class="mb-2">
                                <a class="text-uppercase mb-3 text-body"><?= date('d F Y', strtotime($row->created_at)); ?></a>
                            </div>
                            <a class="h4 display-5" href="<?= base_url('/artikel/detail/' . $row->id_artikel) ?>"><?= (strip_tags($row->judul_artikel)) ?></a>
                            <p><?= substr(strip_tags($row->deskripsi_artikel), 0, 30) ?>...</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>