<section class="contact" id="contact">
    <div class="contact_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div
                        class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/office/24/000000/iphone.png"
                                    alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Phone</div>
                                <div class="contact_info_text">+6289 1234 5689</div>
                            </div>
                        </div>

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img
                                    src="https://img.icons8.com/ultraviolet/24/000000/filled-message.png"
                                    alt="">
                            </div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Email</div>
                                <div class="contact_info_text">support@driveid.co.id</div>
                            </div>
                        </div>

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img
                                    src="https://img.icons8.com/ultraviolet/24/000000/map-marker.png" alt="">
                            </div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Address</div>
                                <div class="contact_info_text">298, Jakarta, Indonesia</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form -->

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Get in Touch</div>

                        <form action="/" id="contact_form" method="post">
                            @csrf
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @error('telp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div
                                class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                                <input type="text" id="contact_form_name" name="name"
                                    class="contact_form_name input_field @error('name') is-invalid @enderror"
                                    placeholder="Your name" required="required" value="{{ old('name') }}">

                                <input type="text" id="contact_form_email" name="email"
                                    class="contact_form_email input_field @error('email') is-invalid @enderror"
                                    placeholder="Your email" required="required" value="{{ old('email') }}"">

                                <input type="text" id="contact_form_phone" name="telp"
                                    class="contact_form_phone input_field @error('telp') is-invalid @enderror"
                                    placeholder="Your phone number" required="required" value="{{ old('telp') }}">
                            </div>

                            <div class="contact_form_text">
                                <textarea id="contact_form_message" class="text_field contact_form_message" name="pesan" rows="4"
                                    placeholder="Message" required="required" value="{{ old('title') }}"></textarea>
                            </div>
                            <div class="contact_form_button">
                                <button type="submit" class="button contact_submit_button">Send Message</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>
</section>
