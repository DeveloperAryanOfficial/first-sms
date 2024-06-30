<?php include'header.php'; ?>

  <!-- Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="assets/logo.jpeg"
            height="40"
            alt="MDB Logo"
            loading="lazy"
          />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projects</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="text-reset me-3" href="#">
          <i class="fas fa-shopping-cart"></i>
        </a>

        <!-- Notifications -->
        <div class="dropdown">
          <a
            data-mdb-dropdown-init
            class="text-reset me-3 dropdown-toggle hidden-arrow"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            aria-expanded="false"
          >
            <i class="fas fa-bell"></i>
            <span class="badge rounded-pill badge-notification bg-danger">1</span>
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuLink"
          >
            <li>
              <a class="dropdown-item" href="#">Some news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Another news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </div>
        <!-- Avatar -->
        <div class="dropdown">
          <a
            data-mdb-dropdown-init
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            aria-expanded="false"
          >
          <i class="fas fa-circle-user fa-lg"></i>
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
            <li>
              <a class="dropdown-item" href="#">My profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Settings</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->


  <!-- Banner Section -->
  <div class="d-flex shadow" style="height:500px;background:linear-gradient(-45deg, blue , transparent);">
    <div class="container-fluid my-auto">
      <div class="row">
        <div class="col-lg-6 my-auto">
          <h1 class="display-6 fw-bold">Dr. Virendra Swarup Institute Of Computer Studies</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla fugiat iusto iure tenetur consectetur omnis, soluta reprehenderit assumenda. Nulla modi suscipit soluta, nostrum quasi ipsa asperiores eligendi provident hic minima.</p>
          <a href="#" class="btn btn-lg btn-primary">Free Courses Available</a>
        </div>
        <div class="col-lg-6">
          <div class="card w-50 mx-auto shadow-lg">
            <div class="card-body">
              <h2>Admission Form</h2>
              <form action="" method="post">
                <div class="form-outline my-4" data-mdb-input-init>
                  <input type="text" id="form1" class="form-control" />
                  <label class="form-label" for="form1">Your Name</label>
                </div>
                <div class="form-outline my-4" data-mdb-input-init>
                  <input type="text" id="class" class="form-control" />
                  <label class="form-label" for="class">Your Class</label>
                </div>
                <div class="form-outline my-4" data-mdb-input-init>
                  <input type="Email" id="Email" class="form-control" />
                  <label class="form-label" for="Email">Your Email</label>
                </div>
                <div class="form-outline my-4" data-mdb-input-init>
                  <input type="Mobile" id="Mobile" class="form-control" />
                  <label class="form-label" for="Mobile">Your Mobile</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit Form</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Section -->

  <!-- About us -->
  <section class="py-5">
      <div class="container shadow">
        <div class="row bg-success">
          <div class="col-lg-6">
            <h2 class="font-weight-bold">About <br> College Management System</h2>
            <div class="pr-5">
              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis esse sequi adipisci repellat aut
                dolore assumenda, fugit hic recusandae sit voluptatibus nemo at eum itaque fuga a accusantium similique
                officia. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius numquam ratione expedita aliquid.
                Expedita est inventore eveniet, voluptatem aliquid facere et asperiores veniam adipisci itaque amet magni!
                Eveniet, officiis delectus.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo natus ipsam temporibus consectetur
                asperiores voluptates magnam a sed, molestias autem, incidunt sequi nobis tempore maiores voluptatem.
                Beatae delectus veritatis voluptates.</p>
            </div>
            <a href="about-us.php" class="btn mb-3" style="background-color:#440a68;color:white">Know More</a>
          </div>
          <div class="col-lg-6" style="background:url(./assets/d.jpg) center/cover no-repeat">
            <img src="" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>


  <!-- Course Section -->
  <section class="py-3">
    <div class="text-center mb-5">
      <h2 class="display-5 fw-bold">Our Courses</h2>
      <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, doloribus sint illo eos itaque ipsam voluptatem ratione qui fugiat placeat.</p>
    </div>
    <div class="container">
      <div class="row">
        <?php
        for ($i=0; $i < 12; $i++) { ?>
          <div class="col-lg-3">
            <div class="card shadow-lg mb-5">
              <div>
                <img src="assets/course.jpeg" alt="picture"  class="rounded-top">
              </div>
              <div class="card-body">
                <b>
                  Web design and Internet Technology    
                </b>
                <p class="card-text">
                  <b>Duration : </b> 45 hours <br>
                  <b>Price : </b> 4000/- rs
                </p>
                <button class="btn btn-primary btn-block btn-sm">Enroll Now</button>
              </div>
            </div>
          </div> 
        <?php  }?>
      </div>
    </div>
  </section>


<!-- Course Section -->
  <section class="py-3 bg-secondary">
    <div class="text-center mb-5">
      <h2 class="display-5 fw-bold">Our Professors</h2>
      <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, doloribus sint illo eos itaque ipsam voluptatem ratione qui fugiat placeat.</p>
    </div> 

    <div class="container">
      <div class="row">
        <?php for ($i=1; $i <= 12; $i++) { ?>
          <div class="col-lg-3 my-5">
            <div class="card">
              <div class="col-7 position-absolute" style="top:-50px">
                <img src="./assets/h.jpg" alt="" class="mw-100 rounded-circle border">
              </div>
              <div class="card-body pt-5 mt-5">
                <h5 class="card-title">Professors Name <br> *****</h4>
                  <p class="card-text">
                    <b>Course:</b> 5 <br>
                    <b>Rating:</b>
                  </p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>


<!-- Achievements section -->
  <section class="py-5" style="background:#440a68">
    <div class="container">
      <div class="row ">
        <div class="col-lg-6">
          <img src="./assets/d.jpg" alt="" class="img-fluid rounded">
          <h2 class="font-weight-bolder">Achievemenets</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, ipsa neque? Distinctio, nemo a. Expedita
          </p>

        </div>
        <div class="col-lg-6 ">
          <div class="row my-auto">
            <div class="col-lg-6 mb-5">
              <div class="border rounded text-warning">
                <div class="card-body text-warning">
                  <div class="container text-center"><img src="./assets/1.ico" alt="" height="30px" width="30px"></div>
                  <h2 class="text-center">575</h2>
                  <hr class="" text-warning width-3>
                  <h4 class="text-center">Graduate</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-5">
              <div class="border rounded text-warning">
                <div class="card-body text-warning">
                  <div class="container text-center"><img src="./assets/1.ico" alt="" height="30px" width="30px"></div>
                  <h2 class="text-center">575</h2>
                  <hr class="" text-warning width-3>
                  <h4 class="text-center">Graduate</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-5">
              <div class="border rounded text-warning">
                <div class="card-body text-warning">
                  <div class="container text-center"><img src="./assets/1.ico" height="30px" width="30px" alt=""></div>
                  <h2 class="text-center">575</h2>
                  <hr class="" text-warning width-3>
                  <h4 class="text-center">Graduate</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-5">
              <div class="border rounded text-warning">
                <div class="card-body text-warning">
                  <div class="container text-center"><img src="./assets/1.ico" height="30px" width="30px" alt=""></div>
                  <h2 class="text-center">575</h2>
                  <hr class="" text-warning width-3>
                  <h4 class="text-center">Graduate</h4>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-5">
    <div class="text-center mb-5">
      <h2 class="fw-bold">What peoples says</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident pariatur laborios
        am repellat et, atque ducimus
      </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="border rounded border-dark ">
            <div class="p-3 text-center">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam commodi dolorum ut maxime repudiandae
                consectetur mollitia laboriosam nisi aliquid architecto nesciunt alias aut, possimus repellendus
                suscipit, accusantium ducimus blanditiis et?</p>
            </div>
            <i class="fa fa-quote-left"></i>
          </div>
          <div class="text-center">
            <img src="./assets/h.jpg" alt="" class="img-fluid rounded-circle border border-dark" width="100px"
              height="100px">
            <h6 class="mb-0 " style="font-weight:700">Name of candidates</h6>
            <p><i>Designation</i></p>
          </div>
        </div>
        <div class="col-6">
          <div class="border rounded border-dark ">
            <div class="p-3 text-center">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam commodi dolorum ut maxime repudiandae
                consectetur mollitia laboriosam nisi aliquid architecto nesciunt alias aut, possimus repellendus
                suscipit, accusantium ducimus blanditiis et?</p>
            </div>
            <i class="fa fa-quote-left"></i>
          </div>
          <div class="text-center">
            <img src="./assets/h.jpg" alt="" class="img-fluid rounded-circle border border-dark" width="100px"
              height="100px">
            <h6 class="mb-0 " style="font-weight:700">Name of candidates</h6>
            <p><i>Designation</i></p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- footer section -->
  <footer style="background:#440a68;">
    <div class="py-5 text-white">
      <div class="conatainer-fluid">
        <div class="row">

          <div class="col-lg-4" style="padding-left: 48px;">
            <h2>Usefull Links</h2>
            <ul class="fa-ul ml-4">
              <li><a href="" class="text-right" style="text-decoration:none;color:white"><i
                    class="fa-li fa fa-angle-right"></i>List icons</a>
              </li>
              <li><a href="" class="text-right" style="text-decoration:none;color:white"><i
                    class=" fa-li fa fa-angle-right"></i>can be used</a></li>
              <li><a href="" class="text-right" style="text-decoration:none;color:white"><i
                    class=" fa-li fa fa-angle-right"></i>as bullets</a></li>
              <li><a href="" class="text-right" style="text-decoration:none;color:white"><i
                    class=" fa-li fa fa-angle-right"></i>in lists</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h2>Social Media</h2>
            <div>
              <span>
                <img src="./assets/5.ico" alt="" height="30px" width="30px">
              </span>
              <span>
                <img src="./assets/6.ico" alt="" height="30px" width="30px">
              </span>
              <span>
                <img src="./assets/7.ico" alt="" height="30px" width="30px">
              </span>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card bg-dark me-3">
              <div class="card-header">
                <h2>Subscribe Now</h2>
                <div class="card-body ">
                  <form action="sms.php" method="post">
                    <div class="py-2">
                      <label for="email">Email</label> <br>
                      <input type="text">
                    </div>
                    <div>
                      <button class="btn btn-primary btn-sm" type="button">Submit Now</button>

                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- copyright section -->
  <section class="py-2 bg-dark text-center">
      <div class="container-fluid text-light">
        copyright &copy; &nbsp;2024-25 &nbsp;|&nbsp; All rights Reserved.
      </div>
  </section>

<?php include'footer.php' ?>
