<?php
// Set default language to 'id'
$lang = session()->get('lang') ?? 'id';

// Get current URL
$current_url = uri_string();

// Extract the first segment to detect language
$lang_segment = explode('/', $current_url)[0]; // Detect 'id' or 'en'

// Define page links based on language
$homeLink = '';  // No trailing slash
$aboutLink = $lang_segment === 'en' ? 'about' : 'tentang';
$articleLink = $lang_segment === 'en' ? 'articles' : 'artikel';
$productLink = $lang_segment === 'en' ? 'service' : 'layanan';
$activitiesLink = $lang_segment === 'en' ? 'activities' : 'aktivitas';
$contactLink = $lang_segment === 'en' ? 'contact' : 'kontak';

// Replace map for slugs (to be applied in dynamic content if needed)
$replace_map = [
    'tentang' => 'about',
    'artikel' => 'articles',
    'layanan' => 'service',
    'aktivitas' => 'activities',
    'kontak' => 'contact'
];

// Define new language segment ('id' <-> 'en')
$new_lang_segment = ($lang_segment === 'en') ? 'id' : 'en';

// Remove language segment from current URL
$url_without_lang = substr($current_url, strlen($lang_segment) + 1);

// Only apply the translation logic if switching between different languages
if ($new_lang_segment !== $lang_segment) {
    // Switch segments based on the current language
    foreach ($replace_map as $indonesian_segment => $english_segment) {
        if ($lang_segment === 'en') {
            $url_without_lang = str_replace($english_segment, $indonesian_segment, $url_without_lang);
        } else {
            $url_without_lang = str_replace($indonesian_segment, $english_segment, $url_without_lang);
        } 
    }
}

// Rebuild the clean URL without trailing slashes
$clean_url = rtrim($new_lang_segment . '/' . ltrim($url_without_lang, '/'), '/');

// Define base URLs for the language switch
// If the language switch is the same as the current one, just return the same URL
$english_url = ($lang_segment === 'en') ? current_url() : base_url('en' . ($url_without_lang ? '/' . ltrim($url_without_lang, '/') : ''));
$indonesia_url = ($lang_segment === 'id') ? current_url() : base_url('id' . ($url_without_lang ? '/' . ltrim($url_without_lang, '/') : ''));
?>

<div class="container-fluid bg-white sticky-top" style="height: 75px;">
    <?php foreach ($profil as $header) : ?>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0">
                <a href="<?= base_url($lang . $homeLink) ?>" class="navbar-brand d-flex align-items-center" style="height: 63px;">
                    <img class="img-fluid logo-img" src="<?= base_url('asset-user/images/' . $header->logo_perusahaan) ?>" alt="Logo">
                </a>
                <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <li class="nav-item">
                            <a href="<?= base_url($lang . $homeLink) ?>" class="nav-link <?= current_url() === base_url($lang . $homeLink) ? 'active' : '' ?>">
                                <?= lang('Blog.headerHome') ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url($lang . '/' . $aboutLink) ?>" class="nav-link <?= current_url() === base_url($lang . '/' . $aboutLink) ? 'active' : '' ?>">
                                <?= lang('Blog.headerAbout') ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url($lang . '/' . $articleLink) ?>" class="nav-link <?= current_url() === base_url($lang . '/' . $articleLink) ? 'active' : '' ?>">
                                <?= lang('Blog.headerArticle') ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url($lang . '/' . $productLink) ?>" class="nav-link <?= current_url() === base_url($lang . '/' . $productLink) ? 'active' : '' ?>">
                                <?= lang('Blog.headerProducts') ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url($lang . '/' . $activitiesLink) ?>" class="nav-link <?= current_url() === base_url($lang . '/' . $activitiesLink) ? 'active' : '' ?>">
                                <?= lang('Blog.headerActivities') ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url($lang . '/' . $contactLink) ?>" class="nav-link <?= current_url() === base_url($lang . '/' . $contactLink) ? 'active' : '' ?>">
                                <?= lang('Blog.headerContact') ?>
                            </a>
                        </li>
                        <!-- Navbar dropdown for language switch -->
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= lang('Blog.headerLanguage') ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="<?= $indonesia_url ?>" class="dropdown-item">Indonesia</a></li>
                                <li><a href="<?= $english_url ?>" class="dropdown-item">English</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    <?php endforeach; ?>
</div>



<style>
    .logo-img {
        max-height: 70px;
        height: auto;
        max-width: 100%;
    }

    .navbar-nav .nav-link {
        display: flex;
        align-items: center;
        height: 100%;
        padding: 10px;
    }

    .navbar-toggler {
        margin-top: 10px;
    }

    /* Adjust dropdown menu for smaller screens */
    .dropdown-menu {
        position: absolute;
        z-index: 9999;
    }

    /* Media queries for responsiveness */
    @media (max-width: 991px) {
        .logo-img {
            max-height: 50px;
        }

        .navbar-nav .nav-link {
            margin-top: 10px;
            margin-bottom: 10px;
        }
    }

    @media (max-width: 768px) {
        .logo-img {
            max-height: 60px;
            margin-top: 0;
        }
    }
</style>