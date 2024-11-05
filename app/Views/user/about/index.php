<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<div class="bradcam_area bradcam_bg_3" style="background-image: url('<?= base_url('./asset-user/images/chocolate1.jpg');?>');">,
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3><?php echo lang('Blog.titleAboutUs');?></h3>
                        <p class="text-white text-center">
                        <a href="<?= base_url('/') ?>"><?php echo lang('Blog.headerHome'); ?></a>
                        <span class="mx-2">/</span>
                        <span><?php echo lang('Blog.headerAbout'); ?></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="about_story">
        <div class="container">
        <div class="site-section pb-0">
    <div class="block-2">
        <?php foreach ($profil as $descper) : ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img data-src="/asset-user/images/<?= $descper->foto_utama; ?>" alt="Logo Utama" class="img-fluid img-overlap lazyload">
                    </div>
                    <div class="col-lg-6 ml-auto">
                        <h3 class="section-subtitle text-white opacity-50"><?php echo lang('Blog.titleAboutUs')  ?></h3>
                        <h1 class="section-title mb-4"><?= $descper->nama_perusahaan; ?></h1>
                        <p class="opacity-50">
                            <?php if (lang('Blog.Languange') == 'en') {
                                echo $descper->deskripsi_perusahaan_en;
                            } ?>
                            <?php if (lang('Blog.Languange') == 'in') {
                                echo $descper->deskripsi_perusahaan_in;
                            } ?>
                        </p>
                        <!-- <div class="button">
                            <a href="about"><?php echo lang('Blog.btnReadmore'); ?></a>
                        </div> -->
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

        </div>
    </div>



<?= $this->endSection('content'); ?>