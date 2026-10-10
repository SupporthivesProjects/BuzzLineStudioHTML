<?php include 'includes/header.php'; ?>

        <section style="padding: 0%;">
            <div class="faq_outer">
                <video class="faq_vid mobile_none_sk" autoplay muted loop playsinline>
                    <source src="./img/faq_bg.mp4.mp4" type="video/mp4">
                </video>
                <div class="faq_inner">
                    <div class="faq_div">Contact</div>
                    <h2 class="faq_head">Talk to a person.</h2>
                    <p class="faq_p">Tell us what you sell and which channel you want to start with. We reply within three working days.</p>
                </div>
            </div>
            <div class="cont_outer">
                <div class="container">
                    <div class="cont_inner">
                        <div class="cont_main">
                            <div class="cont_inn">
                                <div class="cont_input_div">
                                    <p class="cont_p">Your name</p>
                                    <input type="text" placeholder="John Smith" class="cont_input">
                                </div>
                                <div class="cont_input_div">
                                    <p class="cont_p">Work email</p>
                                    <input type="text" placeholder="john@example.com" class="cont_input">
                                </div>
                            </div>
                            <div class="cont_inn">
                                <div class="cont_input_div">
                                    <p class="cont_p">Company</p>
                                    <input type="text" placeholder="Company name" class="cont_input">
                                </div>
                            </div>
                            <div class="cont_inn">
                                <div class="cont_input_div">
                                    <p class="cont_p">Message</p>
                                    <textarea placeholder="Which channel do you want to start with, and what should it do?" class="cont_input2"></textarea>
                                </div>
                            </div>
                            <div class="form-check cont_form_check">
                                <input class="form-check-input cont_check" type="checkbox" value="" id="checkDefault">
                                <label class="form-check-label cont_check_lebel" for="checkDefault">
                                    By ticking this box, you agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
                                </label>
                            </div>
                            <img src="./img/contreCAPTCHA v2 checkbox.png" alt="">
                            <button class="btn cont_btn" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Send message</button>
                        </div>
                        <div class="cont_main2">
                            <p class="cont_main2_p">Contact details</p>
                            <div class="cont_main2_div">
                                <p class="cont_main2_p2">Email</p>
                                <p class="cont_main2_p3">hello@buzzlinestudio.com</p>
                            </div>
                            <div class="cont_main2_div">
                                <p class="cont_main2_p2">Phone</p>
                                <p class="cont_main2_p3">+44 123 456 7890</p>
                            </div>
                            <div class="cont_main2_div">
                                <p class="cont_main2_p2">Address</p>
                                <p class="cont_main2_p3">Address goes here</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content cont_modal">
                    <div class="cont_modal_div">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M20 6L9 17L4 12" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" stroke="#6A2BF0"/>
                        </svg>
                    </div>
                    <h2 class="cont_modal_head">Message sent.</h2>
                    <p class="cont_modal_p">We have your message and one of the team will come back within three working days.</p>
                    <button class="btn cont_btn w-100">Back to homepage</button>

                </div>
            </div>
        </div>

<?php include 'includes/footer.php'; ?>