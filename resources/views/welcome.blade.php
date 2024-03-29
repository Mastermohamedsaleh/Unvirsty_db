<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Academy</title>
    <link rel="stylesheet" href="{{ URL::asset('Styles/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('Styles/style.css')}}" />
    <script defer src="{{URL::asset('Script/bootstrap.bundle.min.js')}}"></script>
    <script defer src="{{URL::asset('Script/index.js')}} "></script>
  </head>

  <body>
    <!-- navbar -->
    <nav
      class="navbar navbar-expand-lg bg-body-tertiary position-sticky top-0 z-1"
    >
      <div class="container-fluid">
        <a class="navbar-brand ms-4" href="#"
          ><img
            src="Assets/images/logo.png"
            alt="Smart Academy logo"
            class="w-75 h-75"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link active text-success"
                aria-current="page"
                href="#"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Fields</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >Contact us</a
              >
            </li>
            <li class="nav-item">
              <button type="button" class="btn">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-search"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"
                  ></path>
                </svg>
              </button>
            </li>
          </ul>






        

                        @if (Route::has('login'))

                        @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
          <a class="button mx-5 px-5 py-2"  href="{{ route('login') }}" >Sign in</a>
          @endauth
          @endif 

          <!-- <button class="button mx-5 px-5 py-2" type="submit">Sign in</button> -->
        </div>
      </div>
    </nav>
    <!-- carousel -->
    <div
      id="carouselExampleAutoPlaying"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active c-item">
          <img src="Assets/images/1.jpg" class="d-block w-100 c-img" alt="1" />
        </div>
        <div class="carousel-item c-item">
          <img src="Assets/images/2.jpg" class="d-block w-100 c-img" alt="1" />
        </div>
      </div>
    </div>
    <!-- Wide card -->
    <div class="d-flex flex-column align-items-center">
      <div class="container border border-0 shadow rounded-top-3 my-3 w-75">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card border border-0 p-3 d-flex flex-row">
              <div class="icon mx-3 my-1">
                <img src="Assets/images/3.png" alt="" />
              </div>
              <div class="txt d-flex flex-column">
                <span class="s1 fw-bold">University Life</span>
                <span class="s2">Over in Here</span>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card border border-0 p-3 d-flex flex-row">
              <div class="icon mx-3 my-1">
                <img src="Assets/images/4.png" alt="" />
              </div>
              <div class="txt d-flex flex-column">
                <span class="s1 fw-bold">University Life</span>
                <span class="s2">Over in Here</span>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card border border-0 p-3 d-flex flex-row">
              <div class="icon mx-3 my-1">
                <img src="Assets/images/5.png" alt="" />
              </div>
              <div class="txt d-flex flex-column">
                <span class="s1 fw-bold">University Life</span>
                <span class="s2">Over in Here</span>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card border border-0 p-3 d-flex flex-row">
              <div class="icon mx-3 my-1">
                <img src="Assets/images/6.png" alt="" />
              </div>
              <div class="txt d-flex flex-column">
                <span class="s1 fw-bold">University Life</span>
                <span class="s2">Over in Here</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="heading h1 fw-bold txt-darkblue my-4">What We Offer</div>
      <div class="row">
        <div class="col-sm-6 p-0"></div>
        <div class="col-sm-6 p-0"></div>
      </div>
    </div>
    <!-- what we offer cards -->
    <!-- About university -->
    <div class="about-university py-3">
      <div class="container z-2">
        <div class="row my-5 py-5">
          <div class="col-sm-5">
            <section class="d-flex flex-column my-4">
              <div class="heading fs-1 fw-semibold txt-green mb-5">
                About Our University
              </div>
              <img class="w-50" src="Assets/images/logo2.png" alt="" />
            </section>
          </div>
          <div class="col-sm-7">
            <section>
              <div class="heading text-white">
                <p class="fs-1 fw-semibold my-2">
                  Smart Academy: Empowering Minds, Shaping Futures
                </p>

                <p class="fs-4 my-5 txt-gray">
                  At Smart Academy, we believe in the transformative power of
                  education to unlock the full potential of individuals and
                  drive positive change in the world. Our university is
                  dedicated to fostering a dynamic learning environment that
                  blends academic excellence with real-world applications,
                  equipping students with the skills and knowledge needed to
                  thrive in a rapidly evolving global landscape.
                </p>
              </div>
            </section>
          </div>
        </div>
        <div class="row my-4">
          <div class="col-sm-3">
            <section class="m-3 p-2 text-center">
              <div class="card border-0 bg-transparent">
                <div class="span fs-1 fw-semibold txt-green">22</div>
                <div class="span fs-3 text-white">Certified Professors</div>
              </div>
            </section>
          </div>
          <div class="col-sm-3">
            <section class="m-3 p-2 text-center">
              <div class="card border-0 bg-transparent">
                <div class="span fs-1 fw-semibold txt-green">2000</div>
                <div class="span fs-3 text-white">Students</div>
              </div>
            </section>
          </div>
          <div class="col-sm-3">
            <section class="m-3 p-2 text-center">
              <div class="card border-0 bg-transparent">
                <div class="span fs-1 fw-semibold txt-green">4</div>
                <div class="span fs-3 text-white">Education Fields</div>
              </div>
            </section>
          </div>
          <div class="col-sm-3">
            <section class="m-3 p-2 text-center">
              <div class="card border-0 bg-transparent">
                <div class="span fs-1 fw-semibold txt-green">40</div>
                <div class="span fs-3 text-white">Awards Won</div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <!-- our fields -->
    <div class="container">
      <div class="row">
        <span class="fs-1 fw-semibold txt-darkblue text-center py-5"
          >Our Fields</span
        >
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-12 p-0">
          <div
            class="hover1 card rounded-0"
            style="
              background-image: url(./Assets/images/12.png);
              background-size: cover;
              height: 500px;
            "
          >
            <div class="card2 card-body my-3 mx-3 p-2" style="display: none">
              <span class="span1 fs-1 txt-darkblue fw-semibold">
                Electric Engineering
              </span>
              <p class="mt-5 fs-4 w-75 fw-semibold text-white">
                Electrical engineers are responsible for creating innovative
                solutions in areas such as power generation, distribution,
                communication, control systems, and electronic circuits.
              </p>
              <button
                class="button1 mb-3 bg-white txt-green fw-semibold position-absolute bottom-0"
              >
                Read More
              </button>
            </div>

            <div class="card1 card-body position-absolute bottom-0">
              <span class="px-2 my-3 fs-1 text-white fw-semibold"
                >Electric Engineering</span
              >
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 p-0">
          <div
            class="hover1 card rounded-0"
            style="
              background-image: url(./Assets/images/13.png);
              background-size: cover;
              height: 500px;
            "
          >
            <div class="card2 card-body my-3 mx-3 p-2" style="display: none">
              <span class="span1 fs-1 txt-darkblue fw-semibold">
                Electric Engineering
              </span>
              <p class="mt-5 fs-4 w-75 fw-semibold text-white">
                Electrical engineers are responsible for creating innovative
                solutions in areas such as power generation, distribution,
                communication, control systems, and electronic circuits.
              </p>
              <button
                class="button1 mb-3 bg-white txt-green fw-semibold position-absolute bottom-0"
              >
                Read More
              </button>
            </div>

            <div class="card1 card-body position-absolute bottom-0">
              <span class="px-2 my-3 fs-1 text-white fw-semibold"
                >Electric Engineering</span
              >
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-12 p-0">
          <div
            class="hover1 card rounded-0"
            style="
              background-image: url(./Assets/images/14.png);
              background-size: cover;
              height: 500px;
            "
          >
            <div class="card2 card-body my-3 mx-3 p-2" style="display: none">
              <span class="span1 fs-1 txt-darkblue fw-semibold">
                Electric Engineering
              </span>
              <p class="mt-5 fs-4 w-75 fw-semibold text-white">
                Electrical engineers are responsible for creating innovative
                solutions in areas such as power generation, distribution,
                communication, control systems, and electronic circuits.
              </p>
              <button
                class="button1 mb-3 bg-white txt-green fw-semibold position-absolute bottom-0"
              >
                Read More
              </button>
            </div>

            <div class="card1 card-body position-absolute bottom-0">
              <span class="px-2 my-3 fs-1 text-white fw-semibold"
                >Electric Engineering</span
              >
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 p-0">
          <div
            class="hover1 card rounded-0"
            style="
              background-image: url(./Assets/images/15.png);
              background-size: cover;
              height: 500px;
            "
          >
            <div class="card2 card-body my-3 mx-3 p-2" style="display: none">
              <span class="span1 fs-1 txt-darkblue fw-semibold">
                Electric Engineering
              </span>
              <p class="mt-5 fs-4 w-75 fw-semibold text-white">
                Electrical engineers are responsible for creating innovative
                solutions in areas such as power generation, distribution,
                communication, control systems, and electronic circuits.
              </p>
              <button
                class="button1 mb-3 bg-white txt-green fw-semibold position-absolute bottom-0"
              >
                Read More
              </button>
            </div>

            <div class="card1 card-body position-absolute bottom-0">
              <span class="px-2 my-3 fs-1 text-white fw-semibold"
                >Electric Engineering</span
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <section>
      <div class="row">
        <span class="fs-1 fw-semibold txt-darkblue text-center py-5"
          >Be One Of Our Community</span
        >
      </div>
      <div class="row">
        <div
          class="col-4 p-0"
          style="background-image: url(./Assets/images/17.jpg)"
        >
          <img class="w-100" src="Assets/images/16.png" alt="" />
        </div>
        <div
          class="col-8 p-0 dark-layer"
          style="
            background-image: url(./Assets/images/17.jpg);
            background-size: cover;
            background-position: center;
          "
        >
          <div class="container p-5 m-5">
            <div class="pb-3 heading fs-1 fw-semibold text-white">
              Apply for Admission
            </div>
            <p class="pb-3 fs-4 fw-medium txt-green">Fall 2025 are now open</p>
            <p class="pb-3 fs-5 fw-normal txt-gray w-75">
              We don't just give students an education and experiences that set
              them up for success in a career. We help them succeed in their
              career—to discover a field they're passionate about and dare to
              lead it.
            </p>
            <button
              class="px-5 py-3 rounded-pill border-0 text-white"
              style="background-color: #00d084"
            >
              Apply now
            </button>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

