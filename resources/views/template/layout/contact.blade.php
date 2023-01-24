<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="contact-item-wrapper">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-phone"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Contact</h4>
                                    <p>{{ $data['settings']->phone }}</p>
                                    <p>{{ $data['settings']->email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-map-marker"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Address</h4>
                                    <p>{{ $data['settings']->Address }}</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-alarm-clock"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Schedule</h4>
                                    <p>{{ $data['settings']->Schedule }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="contact-form-wrapper">
                    <div class="row">
                        <div class="col-xl-10 col-lg-8 mx-auto">
                            <div class="section-title text-center">
                                <span> Get in Touch </span>
                                <h2>
                                    Ready to Get Started
                                </h2>
                                <p>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus
                                    quiblanditiis praesentium
                                </p>
                            </div>
                        </div>
                    </div>

                    @if (session()->has('Add'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('Add') }}</strong>
                            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{@url('addcontact')}}" class="contact-form" method="post"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" id="name" placeholder="Name" required/>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" id="email" placeholder="Email" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="phone" id="phone" placeholder="Phone" required/>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="subject" id="email" placeholder="Subject" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <textarea name="message" id="message" placeholder="Type Message" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="button text-center rounded-buttons">
                                    <button type="submit" class="btn primary-btn rounded-full">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
