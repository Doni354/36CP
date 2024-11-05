<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<div class="bradcam_area bradcam_bg_3" style="background-image: url('<?= base_url('./asset-user/images/chocolate1.jpg');?>');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                    <?php foreach ($profil as $perusahaan) : ?>
                        <h3><?php echo lang('Blog.titleActivities');
                        if (!empty($perusahaan)) {
                            echo ' ' . $perusahaan->nama_perusahaan;
                        } ?></h3>
                        <?php endforeach; ?>
                        <p class="text-white text-center">
                        <a href="<?= base_url('/') ?>"><?php echo lang('Blog.headerHome'); ?></a>
                        <span class="mx-2">/</span>
                        <span><?php echo lang('Blog.headerActivities');  ?></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="about_story">
        <div class="container">
        <div class="site-section pb-0">
    <div class="block-2">     
        <?php foreach ($profil as $descper) : ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                    <img data-src="/asset-user/images/<?= $tbaktivitas->foto_aktivitas ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                                                                                                    echo $tbaktivitas->nama_aktivitas_en;
                                                                                                } ?>
                                    <?php if (lang('Blog.Languange') == 'in') {
                                        echo $tbaktivitas->nama_aktivitas_in;
                                    } ?>" class="img-fluid lazyload">                 
                    </div>
                    <div class="col-lg-5 ml-auto">
                        <br>
                        <h3 style="color: #116530">
                            <?php if (lang('Blog.Languange') == 'en') {
                                echo $tbaktivitas->nama_aktivitas_en;
                            } elseif (lang('Blog.Languange') == 'in') {
                                echo $tbaktivitas->nama_aktivitas_in;
                            } ?>
                        </h3>
                        <p class="opacity-50">
                            <?php if (lang('Blog.Languange') == 'en') {
                                echo $tbaktivitas->deskripsi_aktivitas_en;
                            } elseif (lang('Blog.Languange') == 'in') {
                                echo $tbaktivitas->deskripsi_aktivitas_in;
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