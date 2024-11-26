@include('frontend.fitur.header')

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <!-- <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
       
{{-- ------------------------------------------------------------- --}}
{{-- MENU NAVBAR  --}}
@include('frontend.fitur.navbar')

{{-- ------------------------------------------------------------- --}}
 <!-- .navbar -->

</div>
    </header>
    <!-- End Header -->

    <main id="job" class="mt-5">
      <section class="container">
        <div class="section-title">
          <h4 style="color: #ffa500">Portfolio Perusahaan Kami</h4>
        </div>
        <div class="container-fluid">
          <div class="row">
            
            <div class="col-xl-12">

              <div class="row">
                
                {{-- @foreach ($data as $item ) --}}
              
{{-- ======================================================================= --}}
                <div class="col-md-4">
                  <a href="#">
                    <div class="card job-item mb-3">
                      <div class="card-body">
                        <div class="d-flex align-items-start mb-2">
                          <img style="width: 40%;"
                            src="/assets/gambar/produk/pekerjaan.png"
                            alt="/assets/gambar/produk/pekerjaan.png"
                            width="50"
                          />
                          <div class="ms-3">
                            <p style="color:black;" class="job-title mb-0">
                              <i class="fas fa-drafting-compass"></i> Jasa Penerbitan SLF & PBG
                          </p>
                          <br>
                          <p href="company-detail.html" class="job-company">
                              <i style="color: grey" class="fas fa-building"></i> <span style="color: grey;"> PT. Wuling Indonesia </span> 
                              <br>
                              <i style="color: grey;" class="fas fa-pencil-ruler"></i> <span style="color: grey;" > No SLF : 644.2/06/13/SLF/PUPR/2020 </span>
                          </p>
                          </div>
                        </div>
                        {{-- <div style="float: right" class="job-desc text-muted">
                          <a href="https://wa.me/6282129208716" target="_blank">
                            <button class="btn btn-warning">
                                <i class="fas fa-phone mr-2"></i> Contact Us
                            </button>
                          </a>                          
                        </div> --}}
                        </div>
                    </div>
                  </a>
                </div>
{{-- ======================================================================= --}}
                
              
{{-- ======================================================================= --}}
                <div class="col-md-4">
                  <a href="#">
                    <div class="card job-item mb-3">
                      <div class="card-body">
                        <div class="d-flex align-items-start mb-2">
                          <img style="width: 40%;"
                            src="/assets/gambar/produk/pekerjaan.png"
                            alt="/assets/gambar/produk/pekerjaan.png"
                            width="50"
                          />
                          <div class="ms-3">
                            <p style="color:black;" class="job-title mb-0">
                              <i class="fas fa-drafting-compass"></i> Perencanaan Rekayasa
                          </p>
                          <br>
                          <p href="company-detail.html" class="job-company">
                              <i style="color: grey" class="fas fa-building"></i> <span style="color: grey;"> Jasa Desain Rekayasa untuk Konstruksi Pondasi serta Struktur Bangunan </span> 
                              <br>
                              <i style="color: grey;" class="fas fa-pencil-ruler"></i> <span style="color: grey;" > Jasa Desain Rekayasa untuk Pekerjaan Teknik Sipil Transportasi </span>
                          </p>
                          </div>
                        </div>
                        <div style="float: right" class="job-desc text-muted">
                          <a href="https://wa.me/6282129208716" target="_blank">
                            <button class="btn btn-warning">
                                <i class="fas fa-phone mr-2"></i> Contact Us
                            </button>
                          </a>                          
                        </div>
                        </div>
                    </div>
                  </a>
                </div>
{{-- ======================================================================= --}}
                
              
{{-- ======================================================================= --}}
                <div class="col-md-4">
                  <a href="#">
                    <div class="card job-item mb-3">
                      <div class="card-body">
                        <div class="d-flex align-items-start mb-2">
                          <img style="width: 40%;"
                            src="/assets/gambar/produk/pekerjaan.png"
                            alt="/assets/gambar/produk/pekerjaan.png"
                            width="50"
                          />
                          <div class="ms-3">
                            <p style="color:black;" class="job-title mb-0">
                              <i class="fas fa-drafting-compass"></i> Pengawasan Rekayasa
                          </p>
                          <br>
                          <p href="company-detail.html" class="job-company">
                              <i style="color: grey" class="fas fa-building"></i> <span style="color: grey;"> 
                                Jasa Pengawas Pekerjaan Konstruksi Bangunan Gedung
                              </span> 
                              <br>
                              <i style="color: grey;" class="fas fa-pencil-ruler"></i> <span style="color: grey;" > 
                                Jasa Pengawas Pekerjaan Konstruksi Teknik Sipil Transportasi

                              </span>
                          </p>
                          </div>
                        </div>
                        <div style="float: right" class="job-desc text-muted">
                          <a href="https://wa.me/6282129208716" target="_blank">
                            <button class="btn btn-warning">
                                <i class="fas fa-phone mr-2"></i> Contact Us
                            </button>
                          </a>                          
                        </div>
                        </div>
                    </div>
                  </a>
                </div>
{{-- ======================================================================= --}}
              
{{-- ======================================================================= --}}
                <div class="col-md-4">
                  <a href="#">
                    <div class="card job-item mb-3">
                      <div class="card-body">
                        <div class="d-flex align-items-start mb-2">
                          <img style="width: 40%;"
                            src="/assets/gambar/produk/pekerjaan.png"
                            alt="/assets/gambar/produk/pekerjaan.png"
                            width="50"
                          />
                          <div class="ms-3">
                            <p style="color:black;" class="job-title mb-0">
                              <i class="fas fa-drafting-compass"></i> Pengawasan Rekayasa
                          </p>
                          <br>
                          <p href="company-detail.html" class="job-company">
                              <i style="color: grey" class="fas fa-building"></i> <span style="color: grey;"> 
                                Jasa Pengawas Pekerjaan Konstruksi Bangunan Gedung
                              </span> 
                              <br>
                              <i style="color: grey;" class="fas fa-pencil-ruler"></i> <span style="color: grey;" > 
                                Jasa Pengawas Pekerjaan Konstruksi Teknik Sipil Transportasi

                              </span>
                          </p>
                          </div>
                        </div>
                        <div style="float: right" class="job-desc text-muted">
                          <a href="https://wa.me/6282129208716" target="_blank">
                            <button class="btn btn-warning">
                                <i class="fas fa-phone mr-2"></i> Contact Us
                            </button>
                          </a>                          
                        </div>
                        </div>
                    </div>
                  </a>
                </div>
{{-- ======================================================================= --}}

                {{-- @endforeach --}}

              </div>
            </div>
          </div>
        </div>

        <div
          class="offcanvas offcanvas-start"
          tabindex="-1"
          id="sidebar"
          aria-labelledby="sidebarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarLabel">Filter</h5>
            <button
              type="button"
              class="btn-close text-reset"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <!-- icon filter -->
            <h3 class="h6 mb-3 fw-semibold d-flex align-items-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="20px"
                height="12px"
              >
                <path
                  fill-rule="evenodd"
                  fill=""
                  d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"
                ></path>
              </svg>
              <span class="ms-2">Filter Product</span>
            </h3>
            <form>
              <div class="mb-3">
                <label class="form-label">Search</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search..."
                />
              </div>
              <div class="mb-3">
                <label class="form-label mb-3">Offer Type : </label>
                <!-- checkbutton -->
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="checkFullTime"
                  />
                  <label class="form-check-label" for="checkFullTime">
                    Full Time
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="checkPartTime"
                  />
                  <label class="form-check-label" for="checkPartTime">
                    Part Time
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="checkIntern"
                  />
                  <label class="form-check-label" for="checkIntern">
                    Internship
                  </label>
                </div>
              </div>
              <a href="#" class="btn btn-primary w-100 rounded-pill">
                Search
              </a>
            </form>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

      @include('frontend.fitur.footer')