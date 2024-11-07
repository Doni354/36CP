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
                        <a href="<?= base_url($locale . '') ?>"><?= lang('Blog.Blog.headerHome'); ?></a>
                        <span class="mx-2">/</span>
                        <span><?php echo lang('Blog.headerActivities');  ?></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="recent_trip_area">
    <div class="container">
        <div class="row justify-content-center">
        <?php foreach ($tbaktivitas as $aktivitas) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                        <a href="<?= base_url($locale . '/' . ($locale === 'en' ? 'activities' : 'aktivitas') . '/' . (($locale === 'en') ? $aktivitas->slug_en : $aktivitas->slug_in)) ?>">
                            <img data-src="/asset-user/images/<?= $aktivitas->foto_aktivitas ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                                                                                                            echo $aktivitas->nama_aktivitas_en;
                                                                                                        } ?>
                                    <?php if (lang('Blog.Languange') == 'in') {
                                        echo $aktivitas->nama_aktivitas_in;
                                    } ?>" class="img-fluid lazyload">
                        </a>
                        </div>
                        <div class="info">
                                <h3>
                                <a href="<?= base_url($locale . '/activities/' . ((session('lang') === 'en') ? $aktivitas->slug_en : $aktivitas->slug_in)) ?>">
                                    <?= (session('lang') === 'en') ? $aktivitas->nama_aktivitas_en : $aktivitas->nama_aktivitas_in; ?>

                                </a>
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<?= $this->endSection('content'); ?>