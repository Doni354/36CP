    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($tbslider as $key => $slider) : ?>
                    <div class="carousel-item <?php echo ($key == 0) ? 'active' : ''; ?>">
                    <img class="w-100 lazyload" data-src="asset-user/images/<?= $slider->file_foto_slider; ?>" alt="<?= $slider->file_foto_slider; ?>d">
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" role="button" data-slide="prev" alt="prev">
                <div class="btn btn-brown" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2" aria-hidden="true"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" role="button" data-slide="next" alt="next">
                <div class="btn btn-brown" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2" aria-hidden="true"></span>
                </div>
            </a>
        </div>
    </div>

    <style>
        /* Add a new CSS rule for the brown button */
    .btn-brown {
        background-color: #000000; /* Brown color */
        border-color: #FFFFFF; /* Matching border color */
    }

    .btn-brown:hover {
        background-color: #000000; /* Slightly lighter brown on hover */
        border-color: #000000; /* Matching border color on hover */
    }

    </style>