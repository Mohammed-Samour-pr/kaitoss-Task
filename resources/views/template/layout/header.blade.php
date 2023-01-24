<section id="hero-area" class="header-area header-eight">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-content">
                    <h1>{{ $data['minsection']->title }}
                    </h1>
                    <p>
                        {{ $data['minsection']->description }}

                    </p>
                    <div class="button">
                        <a href="{{ $data['minsection']->video_link }}"
                           class="glightbox video-button">
                <span class="btn icon-btn rounded-full">
                  <i class="lni lni-play"></i>
                </span>
                            <span class="text">Watch Intro</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-image">
                    <img src="img_minsection/{{ $data['minsection']->image }}
                        " alt="#"/>
                </div>
            </div>
        </div>
    </div>
</section>
