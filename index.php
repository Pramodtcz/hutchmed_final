<?php include('header.php'); ?>

<!-- Banner Section Start -->
<section class="homebanner pt-2 mb-6">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12 left ps-5">
                <h1 class="mb-3">Welcome to<br> <span class="voilet">HUTCH</span><span class="blue">MED</span><br> Medical Affairs</h1>
                <p>This website is designed by HUTCHMED Medical Affairs for US healthcare professionals. Our mission is to support informed decision-making by providing evidence-based, scientifically accurate, and timely medical information about HUTCHMED products.</p>
            </div>
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-12 right text-center">
                <img class="img-fluid" src="images/banner-img.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Slider Section Start -->
<section class="card-sec mb-6">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme" id="slide-one">
            <div class="item">
               <div class="card border-0 card-one">
                  <img src="images/s1.jpg" alt="">
                  <div class="card-body mt-3 mb-3 text-center">
                     <h4 class="mb-3">Congress and Publications</h4>
                     <p class="mb-0">Explore presentations from scientific congresses.</p>
                     <a class="btn tcz-btn-green d-inline-flex align-items-center justify-content-between mt-3" href="#">View <i class="fal fa-angle-right"></i></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="card border-0 card-two">
                  <img src="images/s2.jpg" alt="">
                  <div class="card-body mt-3 mb-3 text-center">
                     <h4 class="mb-3">Clinical Trials</h4>
                     <p class="mb-0">Identify ongoing HUTCHMED sponsored studies being conducted.</p>
                     <a class="btn tcz-btn-light-green d-inline-flex align-items-center justify-content-between mt-3" href="#">View <i class="fal fa-angle-right"></i></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="card border-0 card-three">
                  <img src="images/s3.jpg" alt="">
                  <div class="card-body mt-3 mb-3 text-center">
                     <h4 class="mb-3">Submit a Medical Inquiry</h4>
                     <p class="mb-0">Explore presentations from scientific congresses.</p>
                     <a class="btn tcz-btn-red d-inline-flex align-items-center justify-content-between mt-3" href="enquiry.php">Connect <i class="fal fa-angle-right"></i></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="card border-0 card-four">
                  <img src="images/s4.jpg" alt="">
                  <div class="card-body mt-3 mb-3 text-center">
                     <h4 class="mb-3">Pipeline</h4>
                     <p class="mb-0">View an interactive pipeline of HUTCHMED products in development.</p>
                     <a class="btn tcz-btn-blue d-inline-flex align-items-center justify-content-between mt-3" href="enquiry.php">Connect <i class="fal fa-angle-right"></i></a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="card border-0 card-four">
                  <img src="images/s2.jpg" alt="">
                  <div class="card-body mt-3 mb-3 text-center">
                     <h4 class="mb-3">Pipeline</h4>
                     <p class="mb-0">View an interactive pipeline of HUTCHMED products in development.</p>
                     <a class="btn tcz-btn-blue d-inline-flex align-items-center justify-content-between mt-3" href="#">View <i class="fal fa-angle-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
        </div>
    </div>
</section>
<!-- Slider Section End -->


<div class="modal fade home-modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body p-0 text-center">
        <div class="row align-items-center">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-12 left">
               <img class="img-fluid h-100" src="images/modal-img.png" alt="">
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-12 right">
               <h4 class="mb-3">Welcome to <span class="hutch">HUTC</span><span class="med">HMED</span> Medical Information</h4>
               <p>This website is a resource for US healthcare professionals to provide evidence-based, scientifically balanced medical information on HUTCHMED products. The information provided is for educational purposes only, to support patient care, and is not intended to be promotional or provide medical advice.<br> The website may include information about products not approved by the US Food and Drug Administration, which may be subject to different medical and regulatory requirements across countries.</p>
               <h5 class="mt-3">Please select the option below that best describes you</h5>
               <div class="mt-4">
                  <a class="btn tcz-btn-voilet w-100 mb-3" href="#">I am a Healthcare Professional practicing in the US</a>
                  <a class="btn tcz-btn-voilet-border w-100 mb-3" href="#">I am a Healthcare Professional outside the US</a>
                  <a class="btn tcz-btn-voilet-border w-100" href="#">I am a patient or caregiver</a>
               </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include('footer.php'); ?>