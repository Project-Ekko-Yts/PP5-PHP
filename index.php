<?php include './components/header.php' ?>

<?php
//Set vars to empty values
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

//Form submit
if (isset($_POST['submit'])) {
  //Validate name
  if (empty($_POST['name'])) {
    $nameErr = 'Name is required';
  } else {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  //validate email
  if (empty($_POST['email'])) {
    $emailErr = 'Email is required';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }

  //Validate body
  if (empty($_POST['body'])) {
    $bodyErr = 'Feedback is required';
  } else {
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }


  if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {

    //Set timezone to Asia/Manila
    date_default_timezone_set('Asia/Manila');

    //Add to database
    $currentDate = date('Y-m-d H:i:s'); //current timestamp
    $sql = "INSERT INTO feedback (name, email, body, date) VALUES ('$name', '$email', '$body', '$currentDate')";
    if (mysqli_query($conn, $sql)) {
      //success
      header('Location: feedback.php');
    } else {
      //Error
      echo 'Error: ' . mysqli_error($conn);
    }
  }
}
?>


    <div class="section">
      <div class="container-2 w-container" >
        <div class="section-title-group"id="Download">
          <h2 class="section-heading centered">download for free</h2>
          <div class="section-subheading center">
            &quot;Expand your horizons! Dive into new genres and discover
            exciting adventures beyond your usual games.&quot;
          </div>
        </div>
        <div class="columns w-row">
          <div class="w-col w-col-4">
            <div
              data-w-id="270e8437-efa3-df11-d438-de69b23e41e9"
              style="opacity: 0"
              class="white-box"
            >
              <img
                src="https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbde_feather-15-white.svg"
                alt=""
                class="grid-image"
              />
              <h3>Graphic Design</h3>
              <p class="paragraph">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Suspendisse varius enim in eros elementum tristique.
              </p>
            </div>
          </div>
          <div class="w-col w-col-4">
            <div
              data-w-id="29c25774-570b-ddb2-69b5-f4ddbb194afd"
              style="opacity: 0"
              class="white-box"
            >
              <img
                src="https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbc7_feather2-17-white.svg"
                width="210"
                alt=""
                class="grid-image"
              />
              <h3>Awesome code</h3>
              <p class="paragraph-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Suspendisse varius enim in eros elementum tristique.
              </p>
            </div>
          </div>
          <div class="w-col w-col-4">
            <div
              data-w-id="49e69b8a-ef40-4d84-1f92-d2617143b8db"
              style="opacity: 0"
              class="white-box"
            >
              <img
                src="https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbef_feather2-22-white.svg"
                alt=""
                class="grid-image"
              />
              <h3>free template</h3>
              <p class="paragraph-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Suspendisse varius enim in eros elementum tristique.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section accent">
      <div class="w-container">
        <div class="section-title-group">
          <h2 class="section-heading centered white">most popular games</h2>
          <div class="section-subheading center off-white">
            This is some text inside of a div block.
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-6">
            <div class="white-box transparent">
              <img
                src="https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbfd_city-scape.jpg"
                sizes="(max-width: 479px) 85vw, (max-width: 767px) 88vw, (max-width: 991px) 324px, 430px"
                srcset="
                  https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbfd_city-scape-p-500x334.jpeg   500w,
                  https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbfd_city-scape-p-1080x721.jpeg 1080w,
                  https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbfd_city-scape.jpg             1300w
                "
                alt=""
                class="fullwidth-image"
              />
              <h3 class="white-text">SERVICES one</h3>
              <p class="white-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Suspendisse varius enim in eros elementum tristique.Lorem ipsum
                dolor sit amet, consectetur adipiscing elit. Suspendisse varius.
              </p>
              <a href="#" class="hollow-button">Learn more</a>
            </div>
          </div>
          <div class="w-col w-col-6">
            <div class="white-box transparent">
              <img
                src="https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbfb_photo-1416400639808-f41f0c149b09.jpg"
                sizes="(max-width: 479px) 85vw, (max-width: 767px) 88vw, (max-width: 991px) 324px, 430px"
                srcset="
                  https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbfb_photo-1416400639808-f41f0c149b09-p-1080x721.jpeg 1080w,
                  https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbfb_photo-1416400639808-f41f0c149b09.jpg             1300w
                "
                alt=""
                class="fullwidth-image"
              />
              <h3 class="white-text">SERVICES two</h3>
              <p class="white-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Suspendisse varius enim in eros elementum tristique.Lorem ipsum
                dolor sit amet, consectetur adipiscing elit. Suspendisse varius.
              </p>
              <a href="#" class="hollow-button all-caps">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div
        data-delay="4000"
        data-animation="slide"
        class="w-slider"
        data-autoplay="false"
        data-easing="ease"
        data-hide-arrows="false"
        data-disable-swipe="false"
        data-autoplay-limit="0"
        data-nav-spacing="3"
        data-duration="500"
        data-infinite="true"
      >
        <div class="w-slider-mask">
          <div class="slide w-slide"></div>
          <div class="slide-2 w-slide"></div>
        </div>
        <div class="w-slider-arrow-left">
          <div class="w-icon-slider-left"></div>
        </div>
        <div class="w-slider-arrow-right">
          <div class="w-icon-slider-right"></div>
        </div>
        <div class="slide-nav w-slider-nav w-round w-num"></div>
      </div>
      <div class="container w-container">
        <div class="section-title-group">
          <h2 class="section-heading centered">Send us your feedback</h2>
          <div class="section-subheading center">
            &quot;Your feedback helps us level up! We appreciate your insights
            as we work to improve your gaming experience.&quot;
          </div>
        </div>
        <div
          data-duration-in="300"
          data-duration-out="100"
          data-current="Tab 3"
          data-easing="ease"
          class="tabs-wrapper w-tabs"
        >
          <div class="w-tab-content">
            <div data-w-tab="Tab 1" class="w-tab-pane">
              <div>
                <img
                  src="https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbff_photo-1422222948315-28aadb7a2cb8.jpg"
                  sizes="(max-width: 767px) 96vw, (max-width: 991px) 728px, 940px"
                  srcset="
                    https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbff_photo-1422222948315-28aadb7a2cb8-p-1080x721.jpeg 1080w,
                    https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbff_photo-1422222948315-28aadb7a2cb8.jpg             1300w
                  "
                  alt=""
                  class="fullwidth-image"
                />
                <h2>Some Title Here</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Suspendisse varius enim in eros elementum tristique.
                  <br />Duis cursus, mi quis viverra ornare, eros dolor interdum
                  nulla, ut commodo diam libero vitae erat. <br />Aenean
                  faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc
                  ut sem vitae risus tristique posuere.
                </p>
              </div>
            </div>
            <div data-w-tab="Tab 2" class="w-tab-pane">
              <div>
                <img
                  src="https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbea_5fcb0a55.jpg"
                  sizes="(max-width: 767px) 96vw, (max-width: 991px) 728px, 940px"
                  srcset="
                    https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbea_5fcb0a55-p-500x334.jpeg  500w,
                    https://cdn.prod.website-files.com/66fa170629dfadef4aedcb55/66fa170629dfadef4aedcbea_5fcb0a55.jpg            1300w
                  "
                  alt=""
                  class="fullwidth-image"
                />
                <h2>Heading</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Suspendisse varius enim in eros elementum tristique.
                  <br />Duis cursus, mi quis viverra ornare, eros dolor interdum
                  nulla, ut commodo diam libero vitae erat.<br />Aenean faucibus
                  nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem
                  vitae risus tristique posuere.
                </p>
              </div>
            </div>
            <div data-w-tab="Tab 3" class="w-tab-pane w--tab-active">

              <!-- // FORMS // -->

              <h2>Feedback</h2>
<p class="lead text-center">
  Leave feedback for Kodego Bootcamp Tropang Potchi
</p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="text-center">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input
      type="text"
      class="form-control"
      id="name"
      name="name"
      placeholder="Enter your name" value="<?php echo htmlspecialchars($name); ?>" />

    <?php if (!empty($nameErr)) { ?> <span class="text-danger"> <?php echo $nameErr; ?></span> <?php } ?>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input
      type="email"
      class="form-control"
      id="email"
      name="email"
      placeholder="Enter your email" value="<?php echo htmlspecialchars($email); ?>" />

    <?php if (!empty($emailErr)) { ?> <span class="text-danger"> <?php echo $emailErr; ?></span> <?php } ?>


  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Feedback</label>
    <textarea
      class="form-control"
      id="body"
      name="body"
      placeholder="Enter your feedback">
      <?php echo htmlspecialchars($body); ?>
    </textarea>

    <?php if (!empty($bodyErr)) { ?> <span class="text-danger"> <?php echo $bodyErr; ?></span> <?php } ?>
  </div>
  <div class="mb-3">
    <input
      type="submit"
      name="submit"
      value="Send"
      class="btn btn-dark w-100" />
  </div>
</form>
</div>
</main>
    <?php include './components/footer.php' ?>
    <script
      src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=66fa170629dfadef4aedcb55"
      type="text/javascript"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script src="./js/animation.js" type="text/javascript"></script>
  </body>
</html>
