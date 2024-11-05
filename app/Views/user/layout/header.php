<header>
    <div class="header-area"> <!-- Menambahkan warna cokelat -->
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <?php foreach ($profil as $header) : ?>
                    <div class="header_bottom_border">
                        <div class="row align-items-center justify-content-between"> <!-- Mengubah justify-content-center menjadi justify-content-between -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="<?= base_url('/') ?>" class="logo">
                                        <img src="<?= base_url('asset-user/images/') . $header->logo_perusahaan ?>" alt="<?= $header->nama_perusahaan ?>" class="img-fluid logo-img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation" class="d-flex justify-content-end"> <!-- Mengubah justify-content-right menjadi justify-content-end -->
                                            <li><a href="<?= base_url('/') ?>" class="nav-link"><?php echo lang('Blog.headerHome'); ?></a></li>
                                            <li><a href="<?= base_url('about') ?>" class="nav-link"><?php echo lang('Blog.headerAbout'); ?></a></li>
                                            <li><a href="<?= base_url('artikel') ?>" class="nav-item nav-link <?php if (current_url() == base_url('artikel')) echo 'active'; ?>"><?php echo lang('Blog.headerArticle'); ?></a></li>
                                            <li><a href="<?= base_url('product') ?>" class="nav-link"><?php echo lang('Blog.headerProducts'); ?></a></li>
                                            <li><a href="<?= base_url('activities') ?>" class="nav-link"><?php echo lang('Blog.headerActivities'); ?></a></li>
                                            <li><a href="<?= base_url('contact') ?>" class="nav-link"><?php echo lang('Blog.headerContact'); ?></a></li>
                                            <li><a href=""><?php echo lang('Blog.headerLanguage'); ?><i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="<?= site_url('lang/en') ?>">En</a></li>
                                                    <li><a href="<?= site_url('lang/in') ?>">In</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</header>
<style>
    .header-area .row.align-items-center {
    justify-content: space-between !important; /* Menyesuaikan untuk ruang antara logo dan menu */
}

.logo-img {
    height: 80px !important;
    width: 150px !important;
}

#navigation {
    display: flex !important;
    justify-content: flex-end !important; /* Mengubah menu ke kanan */
}

.main-menu nav ul li a {
    text-align: center !important;
    color: #fff; /* Mengubah warna teks menu menjadi putih agar kontras dengan background cokelat */
}

    .header_bottom_border {
        border-bottom: 1px solid #fff; /* Menambahkan border bawah putih */
    }

</style>