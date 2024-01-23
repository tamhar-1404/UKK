@extends('Layout.app')
@section('content')
<section class="page-title">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-8 col-md-12">
          <h1>
            <span>Galeri</span>
          </h1>
          <h2>Lihat beberapa gambar yang sesuai kriteriamu</h2>
        </div>
      </div>
    </div>
    <div class="wave-shape">
      <svg width="100%" height="150px" fill="none">
        <path fill="white">
          <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="10s" values="
            M0 25.9086C277 84.5821 433 65.736 720 25.9086C934.818 -3.9019 1214.06 -5.23669 1442 8.06597C2079 45.2421 2208 63.5007 2560 25.9088V171.91L0 171.91V25.9086Z;
            M0 86.3149C316 86.315 444 159.155 884 51.1554C1324 -56.8446 1320.29 34.1214 1538 70.4063C1814 116.407 2156 188.408 2560 86.315V232.317L0 232.316V86.3149Z;
            M0 53.6584C158 11.0001 213 0 363 0C513 0 855.555 115.001 1154 115.001C1440 115.001 1626 -38.0004 2560 53.6585V199.66L0 199.66V53.6584Z;
            M0 25.9086C277 84.5821 433 65.736 720 25.9086C934.818 -3.9019 1214.06 -5.23669 1442 8.06597C2079 45.2421 2208 63.5007 2560 25.9088V171.91L0 171.91V25.9086Z"></animate>
        </path>
      </svg>
    </div>
  </section>


<section>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="team-images">
              <img class="img-fluid rounded" src="{{asset('landing-and-user/images/team/01.jpg')}}" alt="">
              <div class="social-icons team-social-icon">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-dribbble"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-desc">
              <h5><a href="team-single.html">Sophie Reene</a></h5>
              <span class="badge text-bg-primary bg-opacity-50 ">Manager</span>
              <span class="badge text-bg-success bg-opacity-50">Manager</span>
              <span class="badge text-bg-danger bg-opacity-50">Manager</span>
              <span class="badge text-bg-warning text-white bg-opacity-50">Manager</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-7 mt-md-0">
          <div class="team-member">
            <div class="team-images">
              <img class="img-fluid rounded" src="{{asset('landing-and-user/images/team/02.jpg')}}" alt="">
              <div class="social-icons team-social-icon">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-dribbble"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-desc">
              <h5><a href="team-single.html">Pemandangan Alam</a></h5>
              <span class="badge text-bg-primary bg-opacity-50 ">Manager</span>
              <span class="badge text-bg-success bg-opacity-50">Manager</span>
              <span class="badge text-bg-danger bg-opacity-50">Manager</span>
              <span class="badge text-bg-warning text-white bg-opacity-50">Manager</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="team-images">
              <img class="img-fluid rounded" src="{{asset('landing-and-user/images/team/01.jpg')}}" alt="">
              <div class="social-icons team-social-icon">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-dribbble"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-desc">
              <h5><a href="team-single.html">Sophie Reene</a></h5>
              <span class="badge text-bg-primary bg-opacity-50 ">Manager</span>
              <span class="badge text-bg-success bg-opacity-50">Manager</span>
              <span class="badge text-bg-danger bg-opacity-50">Manager</span>
              <span class="badge text-bg-warning text-white bg-opacity-50">Manager</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-7 mt-md-0">
          <div class="team-member">
            <div class="team-images">
              <img class="img-fluid rounded" src="{{asset('landing-and-user/images/team/02.jpg')}}" alt="">
              <div class="social-icons team-social-icon">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-dribbble"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-desc">
              <h5><a href="team-single.html">Pemandangan Alam</a></h5>
              <span class="badge text-bg-primary bg-opacity-50 ">Manager</span>
              <span class="badge text-bg-success bg-opacity-50">Manager</span>
              <span class="badge text-bg-danger bg-opacity-50">Manager</span>
              <span class="badge text-bg-warning text-white bg-opacity-50">Manager</span>
            </div>
          </div>
        </div>

      </div>
      <div class="row mt-7">
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="team-images">
              <img class="img-fluid rounded" src="{{asset('landing-and-user/images/team/01.jpg')}}" alt="">
              <div class="social-icons team-social-icon">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-dribbble"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-desc">
              <h5><a href="team-single.html">Sophie Reene</a></h5>
              <span>Developer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-7 mt-md-0">
          <div class="team-member">
            <div class="team-images">
              <img class="img-fluid rounded" src="{{asset('landing-and-user/images/team/02.jpg')}}" alt="">
              <div class="social-icons team-social-icon">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-dribbble"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-desc">
              <h5><a href="team-single.html">Milen Carry</a></h5>
              <span>Manager</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-7 mt-lg-0">
          <div class="team-member">
            <div class="team-images">
              <img class="img-fluid rounded" src="{{asset('landing-and-user/images/team/03.jpg')}}" alt="">
              <div class="social-icons team-social-icon">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-dribbble"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-desc">
              <h5><a href="team-single.html">Lauren Flair</a></h5>
              <span>Designer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-7 mt-lg-0">
          <div class="team-member">
            <div class="team-images">
              <img class="img-fluid rounded" src="{{asset('landing-and-user/images/team/04.jpg')}}" alt="">
              <div class="social-icons team-social-icon">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-dribbble"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-desc">
              <h5><a href="team-single.html">Smith Nathan</a></h5>
              <span>Supervisor</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-7" id="tampilkan"></div>
    </div>
</section>
<div class="d-flex justify-content-center">
    <div class="d-none " id="prelload" style="max-width: 10%">
        <div class="loading-text">
          <span>L</span>
          <span>O</span>
          <span>A</span>
          <span>D</span>
          <span>I</span>
          <span>N</span>
          <span>G</span>
        </div>
    </div>
</div>
    <div id="reaksi">
        <div id="jalankan">ID yang akan diamati</div>
    </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    // Fungsi untuk menjalankan AJAX
    function jalankanAjax() {
      // Lakukan operasi AJAX di sini
        var data = $('#prelload'); // Convert to jQuery object
        console.log(data);
        if(data.hasClass('d-none')){
            data.removeClass('d-none');
            $('#reaksi').html('');
            setTimeout(() => {
                let data =`

        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="team-images">
              <img class="img-fluid rounded" src="{{asset('landing-and-user/images/team/01.jpg')}}" alt="">
              <div class="social-icons team-social-icon">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-dribbble"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-desc">
              <h5><a href="team-single.html">Sophie Reene</a></h5>
              <span>Developer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-7 mt-md-0">
          <div class="team-member">
            <div class="team-images">
              <img class="img-fluid rounded" src="{{asset('landing-and-user/images/team/02.jpg')}}" alt="">
              <div class="social-icons team-social-icon">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-dribbble"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-desc">
              <h5><a href="team-single.html">Milen Carry</a></h5>
              <span>Manager</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-7 mt-lg-0">
          <div class="team-member">
            <div class="team-images">
              <img class="img-fluid rounded" src="{{asset('landing-and-user/images/team/03.jpg')}}" alt="">
              <div class="social-icons team-social-icon">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-dribbble"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-desc">
              <h5><a href="team-single.html">Lauren Flair</a></h5>
              <span>Designer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-7 mt-lg-0">
          <div class="team-member">
            <div class="team-images">
              <img class="img-fluid rounded" src="{{asset('landing-and-user/images/team/04.jpg')}}" alt="">
              <div class="social-icons team-social-icon">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-dribbble"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-desc">
              <h5><a href="team-single.html">Smith Nathan</a></h5>
              <span>Supervisor</span>
            </div>
          </div>
        </div>
      `;
        $('#tampilkan').html(data);

            }, 10);
        }else{

        }
      console.log('AJAX dijalankan!');
    }

    // Fungsi untuk mengecek apakah elemen terlihat dalam viewport
    function isElementInViewport(el) {
        if( $('#reaksi').html() === ''){
                // console.log('awok');
            }else{
                var rect = el.getBoundingClientRect();
                return (
                  rect.top >= 0 &&
                  rect.left >= 0 &&
                  rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                  rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }
    }

    // Fungsi untuk mengecek dan menjalankan AJAX jika elemen terlihat
    function checkAndRunAjax() {
      var elementToCheck = document.getElementById('jalankan');

      if (isElementInViewport(elementToCheck)) {
        jalankanAjax();
      }
    }

    // Jalankan fungsi checkAndRunAjax saat halaman di-scroll
    $(window).on('scroll', function() {
      checkAndRunAjax();
    });

    // Jalankan fungsi checkAndRunAjax saat halaman dimuat
    $(document).ready(function() {
      checkAndRunAjax();
    });
  </script>
@endsection
