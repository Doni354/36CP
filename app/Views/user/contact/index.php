<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<div class="bradcam_area bradcam_bg_3" style="background-image: url('<?= base_url('./asset-user/images/chocolate1.jpg');?>');">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <?php foreach ($profil as $perusahaan) : ?>
                        <h3><?php echo lang('Blog.titleOurContact');
                        if (!empty($perusahaan)) {
                            echo ' ' . $perusahaan->nama_perusahaan;
                        } ?></h3>
                    <?php endforeach; ?>
                    <p class="text-white text-center">
                        <a href="<?= base_url('/') ?>"><?php echo lang('Blog.headerHome'); ?></a>
                        <span class="mx-2">/</span>
                        <span><?php echo lang('Blog.headerContact'); ?></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div id="map" style="height: 480px; position: relative; overflow: hidden;">
                    <?php foreach ($profil as $maps) : ?>
                        <?php echo $maps->link_maps ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="media contact-info">
                            <?php foreach ($profil as $desc) : ?>
                                <div class="media-body">
                                    <h3>
                                        <?php if (lang('Blog.Languange') == 'en') {
                                            echo $desc->deskripsi_kontak_en;
                                        } ?>
                                        <?php if (lang('Blog.Languange') == 'in') {
                                            echo $desc->deskripsi_kontak_in;
                                        } ?>
                                    </h3>
                                    <p>Alamat  : Jl. Cokelat No. 123, Malang, Indonesia</p>
                                    <p>Email   : <a href="mailto:info@chocoworldintl.com">info@chocoworldintl.com</a></p>
                                    <p>Telepon : <a href="tel:+6281259764170">+62 8124857392027</a></p>
                                    <p>Website : <a href="http://www.chocoworldintl.com" target="_blank">www.chocoworldintl.com</a></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content'); ?>
