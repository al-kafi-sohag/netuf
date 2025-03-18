    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque">Contact Network Utility Force</h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">reach out to us</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Need expert network solutions? <span>Contact our specialists today</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Contact Box Start -->
                    <div class="page-contact-box parallaxie">
                        <!-- Contact Info List Start -->
                        <div class="contact-info-list">
                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/icon-phone-accent.svg" alt="Network Utility Force Phone">
                                </div>
                                <div class="contact-info-content">
                                    <h3>call our experts</h3>
                                    <p><a href="tel:+14046356667">+1-404-635-6667</a></p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/icon-mail-accent.svg" alt="Network Utility Force Email">
                                </div>
                                <div class="contact-info-content">
                                    <h3>email our team</h3>
                                    <p><a href="mailto:info@netuf.net">info@netuf.net</a></p>
                                    <p><a href="mailto:sales@netuf.net">sales@netuf.net</a></p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <!-- <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/icon-location.svg" alt="Network Utility Force Location">
                                </div>
                                <div class="contact-info-content">
                                    <h3>headquarters</h3>
                                    <p>Network Utility Force, LLC<br>1234 Technology Drive, Suite 500<br>San Antonio, TX 78216<br>United States</p>
                                </div>
                            </div> -->
                            <!-- Contact Info Item End -->
                        </div>
                        <!-- Contact Info List End -->

                        <div class="contact-us-form" style="display: none;">
                            <!-- Section Title Start -->
                            <div class="section-title dark-section wow fadeInUp">
                                <h2 class="wow fadeInUp" data-cursor="-opaque">Discuss your network and security requirements</h2>
                            </div>
                            <!-- Section Title End -->

                            <div class="member-contact-form contact-form">
                                <form id="contactForm" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.2s">
                                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION[CSRF_TOKEN_NAME]; ?>">
                                    <div class="row">
                                        <div class="form-group col-md-6 mb-4">
                                            <input type="text" name="fname" class="form-control" id="fname" placeholder="First name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-6 mb-4">
                                            <input type="text" name="lname" class="form-control" id="lname" placeholder="Last name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-6 mb-4">
                                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone number" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-6 mb-4">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Business email" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-12 mb-4">
                                            <select name="service" class="form-control" id="service">
                                                <option value="" selected disabled>Select service of interest</option>
                                                <option value="Network Architecture">Network Architecture & Design</option>
                                                <option value="Security Assessment">Security Assessment & Penetration Testing</option>
                                                <option value="Cloud Integration">Cloud Integration & Virtualization</option>
                                                <option value="IPv6 Implementation">IPv6 Implementation</option>
                                                <option value="Technical Writing">Technical Writing & Documentation</option>
                                                <option value="Other">Other Services</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-12 mb-5">
                                            <textarea name="message" class="form-control" id="message" rows="4" placeholder="Tell us about your project requirements" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn-default btn-highlighted"><span>request consultation</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Page Contact Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Google Map Section Start -->
    <!-- <div class="google-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111543.35392025818!2d-98.59246755!3d29.48928845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c58af04d00eaf%3A0x856e13b10a016bc!2sSan%20Antonio%2C%20TX!5e0!3m2!1sen!2sus!4v1703158537552!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Google Map Section End -->

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Form Submission Script -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contactForm');
        
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span>Processing...</span>';
            submitBtn.disabled = true;
            
            // Collect form data
            const formData = new FormData(contactForm);
            
            // Send AJAX request
            fetch('<?php echo BASE_URL; ?>/inc/process_form.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                
                // Reset button state
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
                
                if (data.status === 'success') {
                    // Show success message
                    Swal.fire({
                        title: 'Thank You!',
                        text: data.message,
                        icon: 'success',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#2a5885'
                    });
                    
                    // Reset form
                    contactForm.reset();
                } else {
                    // Show error message
                    Swal.fire({
                        title: 'Error',
                        text: data.message,
                        icon: 'error',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#2a5885'
                    });
                }
            })
            .catch(error => {
                console.log(error);
                
                // Reset button state
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
                
                // Show error message
                Swal.fire({
                    title: 'Error',
                    text: 'There was a problem submitting your form. Please try again later.',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#2a5885'
                });
                
                console.error('Error:', error);
            });
        });
    });
    </script>