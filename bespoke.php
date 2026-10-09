<?php include 'includes/header.php'; ?>



        <main>
            <div class="header_heightt">

            </div>
            <div class="bespoke1">
                <div class="col-md-6 left_bespoke1">
                    <div class="inner_left_bespoke1">
                        <h1>Bespoke Services</h1>
                        <h2>Not every piece of work fits a tier. Tell us what you need and we will scope it and send
                            back a fixed quote.</h2>
                        <button class="btn btn_t">
                            Send your brief
                        </button>
                    </div>
                </div>
                <div class="col-md-6 right_bespoke1 right_bespoke1_video" style="position: relative;">
                    <video class="bg-image d-lg-block d-md-block d-none right_bespoke1_video" loop="" muted=""
                        autoplay="" style="object-fit: cover;width: 100%;">
                        <source src="./img/video1_bespoke.mp4" type="video/mp4">
                    </video>
                    <video class="bg-image d-lg-none d-md-none d-block right_bespoke1_video " loop muted autoplay
                        style="object-fit: cover; width: 100%;">
                        <source src="./img/video1_bespoke.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="bespoke2">
                <div class="col-md-6 right_bespoke2">

                </div>
                <div class="col-md-6 left_bespoke2">
                    <div class="inner_left_bespoke2">
                        <h1>How it works.</h1>
                        <h2>You tell us what you need. What you want to happen, what already exists, and anything you
                            have written down. A rough brief is enough. So is a paragraph.<br><br>
                            We read it, ask anything we need to ask, then come back with a fixed quote and a start date.
                            One price for the whole job, not a day rate and not a range. If one of the five services
                            already covers what you are describing, we will say so and point you at it rather than quote
                            for something you can buy in two clicks.</h2>
                    </div>
                </div>

            </div>
            <div class="bespoke3">
                <div class="left_bespoke3">
                    <div class="innerright_bespoke3">
                        <h1>Tell us the shape of the work.</h1>
                        <form class="form_divt">
                            <div class="single_apartt">
                                <div class="single_inputdivt">
                                    <h3>Full name</h3>
                                    <input type="text" placeholder="John Smith" class="input_t">
                                </div>
                                <div class="single_inputdivt">
                                    <h3>Email</h3>
                                    <input type="text" placeholder="john@example.com" class="input_t">
                                </div>
                            </div>
                            <div class="single_apartt">
                                <div class="single_inputdivt">
                                    <h3>Phone</h3>
                                    <input type="text" placeholder="+44 7000 000000" class="input_t">
                                </div>
                                <div class="single_inputdivt">
                                    <h3>Brief</h3>
                                    <div class="upload_div_t" onclick="field_box_file_t()">
                                        <p class="upload_placeholder_t" id="upload_placeholder_t">Upload brief (PDF or DOC)</p> <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M14 10V10.8C14 11.9201 14 12.4801 13.782 12.908C13.5903 13.2843 13.2843 13.5903 12.908 13.782C12.4801 14 11.9201 14 10.8 14H5.2C4.07989 14 3.51984 14 3.09202 13.782C2.71569 13.5903 2.40973 13.2843 2.21799 12.908C2 12.4801 2 11.9201 2 10.8V10M11.3333 5.33333L8 2L4.66667 5.33333M8 2V10"
                                                stroke="#0F0F0F" stroke-width="1.75" stroke-linecap="round"
                                                stroke-linejoin="round" /> </svg>
                                    </div> <input type="file" class="form-control input_upload_t" id="document_t"
                                        name="document" style="display: none;" required>
                                </div>
                            </div>
                            <div class="single_apartt">
                                <div class="single_inputdivt">
                                    <h3>Additional information</h3>
                                    <textarea class="input_t textarea_height_t"
                                        placeholder="What should the service cover, and by when?"></textarea>
                                </div>

                            </div>
                            <div class="terms_wala_div">
                                <input class="form-check-input difent_width_height" type="checkbox" value=""
                                    id="checkDefault">

                                <p>By ticking this box, you agree to the <span class="underline_walat">Terms &
                                        Conditions</span> and <span class="underline_walat">Privacy Policy.</span></p>
                            </div>
                            <div class="single_apartt apart_from_difif">
                                <img src="./img/captchat.png" alt="">
                                <button class="btn btn_t diff_widtht" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Request a quote
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right_bespoke3">

                </div>
            </div>

        </main>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-xl">
                <div class="modal-content tirhak_modal">
                    <div class="circle_t"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none">
                            <path d="M20 6L9 17L4 12" stroke="#6A2BF0" stroke-width="1.75" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg></div>
                    <h1>Brief received.</h1>
                    <h2>We have your brief and one of the team will come back within three working days with a fixed
                        quote.</h2>
                    <button class="btn btn_t" style="width: 100%; justify-content: center;">
                        Browse the services
                    </button>
                </div>
            </div>
        </div>
<?php include 'includes/footer.php'; ?>



<script>
    function field_box_file_t() {
        console.log('me');
        document.getElementById('document_t').click();
    }
    $("#document_t").on("change", function (e) {
        document.getElementById('upload_placeholder_t').innerHTML = e.target.files[0].name;
    });
</script>