<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>


<div class="bradcam_area bradcam_bg_3"  style="background-image: url('<?= base_url('./asset-user/images/chocolate1.jpg');?>');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                    <?php foreach ($profil as $perusahaan) : ?>
                        <h3> <?php echo lang('Blog.titleOurarticle');
                if (!empty($perusahaan)) {
                    echo ' ' . $perusahaan->nama_perusahaan;
                } ?></h3>
                        <?php endforeach; ?>
                        <p class="text-brown text-center">
                        <a href="<?= base_url('/') ?>"><?php echo lang('Blog.headerHome'); ?></a>
                        <span class="mx-2">/</span>
                        <span><?php echo lang('Blog.headerArticle'); ?></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News With Sidebar Start -->
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
                        <a href="<?= base_url(($locale !== '' ? $locale . '/' : '') . ($locale === 'en' ? 'articles' : 'artikel') . '/' . (($locale === 'en') ? $row->slug_en : $row->slug_in)) ?>">
                            <img class="img-fluid w-100" style="object-fit: cover;" src="<?= base_url('asset-user') ?>/images/<?= $row->foto_artikel; ?>" loading="lazy">
                        </a>
                        <div class="bg-white border border-top-0 p-4 flex-grow-1">
                            <div class="mb-2">
                                <a class="text-uppercase mb-3 text-body"><?= date('d F Y', strtotime($row->created_at)); ?></a>
                            </div>
                            <a class="h4 display-5" href="<?= base_url(($locale !== '' ? $locale . '/' : '') . ($locale === 'en' ? 'articles' : 'artikel') . '/' . (($locale === 'en') ? $row->slug_en : $row->slug_in)) ?>">
                            <?= session('lang') === 'id' ? strip_tags($row->judul_artikel) : strip_tags($row->judul_artikel_en); ?>
</a>
                             <p><?= substr(strip_tags(session('lang') === 'id' ? $row->deskripsi_artikel : $row->deskripsi_artikel_en), 0, 30) ?>...</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>
