
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include "./header.php";?>
<!-- End Head -->
<body class="contact-us">
    
  <!-- Section -->
  <section class="pt-8 pb-6 bg-gray-100" id="count-stats">
    <div class="container">
      <div class="row justify-content-center text-center">
        <h1 class="text-gradient text-primary">Got a question?</h1>
        <p>We'd love to talk about how we can help you</p>
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-md-3">
          <h1 class="text-gradient text-info"><i class="fas fa-map-marker-alt text-sm"></i></h1>
          <h5>Address</h5>
          <p>153 Williamson Plaza, 09514</p>
        </div>
        <div class="col-md-3">
          <h1 class="text-gradient text-info"><i class="fas fa-envelope text-sm"></i></h1>
          <h5>Email</h5>
          <p>info@forgear.lk</p>
        </div>
        <div class="col-md-3">
          <h1 class="text-gradient text-info"><i class="fas fa-phone text-sm"></i></h1>
          <h5>Phone Number</h5>
          <p>+94 76 9139 594</p>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- Contact ------- -->
  <header>
    <div class="page-header min-vh-85">
      <div>
        <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0 border-bottom-end-radius-0" src="./assets/img/curved-images/curved14.jpg" alt="image">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 d-flex justify-content-center flex-column">
            <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
              <div class="text-center">
                <h3 class="text-gradient text-primary">Contact us</h3>
                <p class="mb-0">
                  For further questions, including partnership opportunities, please email info@forgear.lk
                  or contact using our contact form.
                </p>
              </div>
              <form action="msg-action" id="contact-form" method="post" autocomplete="off">
                <div class="card-body pb-2">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Full Name</label>
                      <div class="input-group mb-3">
                        <input class="form-control" placeholder="Full Name" aria-label="Full Name" type="text" name="cname" required>
                      </div>
                    </div>
                    <div class="col-md-6 ps-md-3">
                      <label>Email</label>
                      <div class="input-group mb-2">
                        <input type="email" class="form-control" placeholder="hello@yourmail.com" name="cemail">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Subject</label>
                      <div class="input-group mb-3">
                        <input class="form-control" placeholder="Need to know..." aria-label="Subject" type="text" name="csubject" required>
                      </div>
                    </div>
                    <div class="col-md-6 ps-md-3">
                      <label>Phone Number</label>
                      <div class="input-group mb-2">
                        <input class="form-control" placeholder="+00 00 0000 000" name="cphonenumber">
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-0 mt-md-0">
                    <label>How can we help you?</label>
                    <textarea name="cmessage" class="form-control" id="message" rows="6" placeholder="I need..." required></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <button type="submit" name="send_msg" class="btn bg-gradient-primary mt-3 mb-0">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

    <!-- F&Q -->
    
    <section class="py-4" id="faq">
      <div class="container">
        <div class="row my-5">
          <div class="col-md-6 mx-auto text-center">
            <h2>Frequently Asked Questions</h2>
            <p>The master key of knowledge is, indeed, persistent and frequent questioning.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 mx-auto">
            <div class="accordion" id="accordionRental">
              <!-- 01 -->
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingOne">
                  <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How can I contact you?
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                  </button>
                </h5>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionRental">
                  <div class="accordion-body text-sm opacity-8 text-dark">
                  Go to the site forgear.lk and you can access the contact page and send us a message saying anything you want. Or else you can contact us through our WhatsApp number (+94 76 913 9594) and give the info of what you want to our agent and that’s it. Another way is to contact us through our social media. Yes, it is as simple as that!
                  </div>
                </div>
              </div>
              <!-- 02 -->
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingTwo">
                  <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Should I be familiar with the technical details to work with you?
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                  </button>
                </h5>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                  <div class="accordion-body text-sm opacity-8 text-dark">
                  There is absolutely no need for this. After all, you do not have to know medical nuances when seeking a dentist’s services. You do not have to be an expert in software development because, actually, we are. We are ready to explain to you all unclear moments and the essence of all stages while working on the project.On your part, all you need is a clear vision of what objectives you want to achieve using the desired software product. Therefore, you just have to focus on your needs, and we will help you make them a reality.
                  </div>
                </div>
              </div>
              <!-- 03 -->
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingThree">
                  <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    What information do you need from me to start work?
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                  </button>
                </h5>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                  <div class="accordion-body text-sm opacity-8 text-dark">
                    Share the details of your project – like scope, timeframes, or business challenges you’d like to solve.
                  </div>
                </div>
              </div>
              <!-- 04 -->
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingFour">
                  <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  How do you guarantee the product quality?
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                  </button>
                </h5>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionRental">
                  <div class="accordion-body text-sm opacity-8 text-dark">
                  We work in a short iteration mode and regularly test the work results, taking into account all customer preferences and the target audience reaction. This approach allows us to provide our customers with high-quality products, observing the specified deadlines. Quality is our top priority.
                  </div>
                </div>
              </div>
              <!-- 05 -->
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingFive">
                  <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  How much time will it take to receive the product?
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                  </button>
                </h5>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionRental">
                <div class="accordion-body text-sm opacity-8 text-dark">
                  Depending on the complexity of the project, within 24 hours to analyse and create a project plan, we can let you know the approximate time it would take.
                  </div>
                </div>
              </div>
              <!-- 06 -->
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingSix">
                  <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Do you provide product support services after the software development is complete?
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                  </button>
                </h5>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionRental">
                  <div class="accordion-body text-sm opacity-8 text-dark">
                  Yes, we are always glad to provide technical support and service the softwares we have developed. We can also further develop your software product if you need to implement new features or integrate third-party services.
                  </div>
                </div>
              </div>
              <!-- 07 -->
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingSeven">
                  <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    How can I make the payment?
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                  </button>
                </h5>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionRental">
                  <div class="accordion-body text-sm opacity-8 text-dark">
                  You will receive the account details with the project plan and there is an advanced payment and then you can deposit the remaining after we deliver you the project. Not to worry, we only take 30%? Of the total value of the project and we won’t charge even a cent more than what we have decided in the beginning. You might even get a discount!
                  </div>
                </div>
              </div>
              <!-- 08 -->
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingEight">
                  <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    Can I resell the product?
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                  </button>
                </h5>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionRental">
                  <div class="accordion-body text-sm opacity-8 text-dark">
                  Depends on what the project is. There are projects like NFT, artwork, etc which you can resell with the credit to the owner (CTTO).
                  </div>
                </div>
              </div>
              <!-- 09 -->
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingNine">
                  <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                  What technologies and programming languages do you utilize in your work?
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                  </button>
                </h5>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionRental">
                  <div class="accordion-body text-sm opacity-8 text-dark">
                  Our experts possess a wide range of skills, enabling us to offer our customers the best solutions to achieve their goals. The basic FORGEAR profile is Full-stack-development; we also work with C#, Python, Java, Angular/Angular.JS, React/React.JS, Node.JS, and CMS.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- F&Q -->


  <!-- -------   Footer    -------- -->
  <?php include "./footer.php";?>
  <!-- -------  End Footer    -------- -->
</body>

</html>