<?php
/** 
* Template Name: My Custom Template
*/

get_header(); ?>

   <main>
<!-- Section 1 Start -->
        <?php do_action('roman_home_function'); ?>
<!-- Section 1 End -->
<!-- Section 2 Start -->
        <section class="profile">
            <div class="container h-100">
                <div class="row h-100 justify-content-start align-items-center">
                    <div class="col-12 col-lg-6 text-center">
                        <div class="image_wrapper">
                            <img class="image_profile" src="assets/images/placeholder_image_520w.jpg" />
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="container h-100">
                            <div class="row h-100 justify-content-start align-items-center">
                                <div class="d-flex h-75 flex-column align-items-start">
                                    <h2>Όνομα Επίθετο</h2>
                                    <span>Web Developer</span>
                                    <p>Text</p>
                                    <button type="button" class="btn btn-primary mt-auto">Primary</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Section 2 End -->
<!-- Section 3 Start -->
        <section class="services py-5 bg-light">
            <div class="container h-100">
                <div class="row h-100 justify-content-around align-items-center row-cols-1 row-cols-sm-2 g-3">
                    <article class="col-md-4 text-center test">
                        <h5>Προγραμματισμός</h5>
                    </article>
                    <article class="col-md-4 text-center test">
                        <h5>Σχεδίαση</h5>
                    </article>
                    <article class="col-md-4 text-center test">
                        <h5>Web Design</h5>
                    </article>
                    <article class="col-md-4 text-center test">
                        <h5>Φωτογραφία</h5>
                    </article>
                    <article class="col-md-4 text-center test">
                        <h5>Video</h5>
                    </article>
                    <article class="col-md-4 text-center test">
                        <h5>Εφαρμογές</h5>
                    </article>
                </div>
            </div>           
        </section>
<!-- Section 3 End -->
    </main>

<?php get_footer(); ?>