@extends('FrontEnd.master')

@section('title')

  Lurr Company 
    
@endsection

@section('content')


    {{-- ========= Message ========= --}}
    @if(Session::get('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ Session::get('message')}}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    {{-- ========= Message ========= --}} 

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2>About Us  </h2>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p style="text-align: justify">
            We are a professional computer service provider in Makassar who always prioritize the best computer services to increase your business and sales. Is your problem small or
              complex, we are always ready to help you with any IT problem at a competitive price. Our team of experienced professionals can address any issues you may have
              have by providing fast and accurate solutions. We also provide on-site inspection or maintenance services by phone or remote. <br><br>
              
            </p>
            <p class="fst-italic">
              "The Best Solution For ur PC" <br>
              - Lurr COMPANY
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->



    <section class="parallax" style="background-color: gold; color:white; padding-left:30px; padding-right:30px; text-align:center">
      <h4>"MAKE US AS A PARTNER PARTNER FOR YOUR VIRTUAL IT DIVISION THAT WILL HELP YOU TO ELIMINATE ALL KINDS OF IT PROBLEMS THAT ALWAYS DISTURB YOUR MIND SO YOU CAN FOCUS ON BUSINESS AND INCREASE YOUR SALES"</h4>
    </section>



    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bi bi-cpu"></i>
              </div>
              <h4><a href="">Hardware</a></h4>
              <p style="text-align: justify">Are you constantly having computer problems and need a professional to fix them? If your computer crashes, it can interrupt your work and
                cause problems for your business. Therefore, our expert team can help you with various computer problems in the Makassar area. We can help you fix
                computer or laptop that is not working. We can also repair your computer with various computer models. In addition, we also help replace computer components
                such as Motherboard, RAM, Hard Disk, Power Supply, and others.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bi bi-folder"></i>
              </div>
              <h4><a href="">Software</a></h4>
              <p style="text-align: justify">Software or operating system is one of the most important things in supporting your business. Therefore, special attention should be paid to optimization
                program or application. That's why you need experts like the Lev Computer team who provide software development services including installing or installation
                various software, fix any software problems you encounter, and update your software. If your app doesn't work properly, our team of experts will
                analyze and find out what's wrong with your app, and add features to your app to make it work better and up-to-date.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bi bi-shield-check"></i>
              </div>
              <h4><a href="">Protection From Virus And Malware</a></h4>
              <p style="text-align: justify">Are you afraid of viruses and malware on your computer? Viruses can damage your computer or damage important files and data. Therefore, it is very important to protect
                your computer from all kinds of viruses and malware. The team of experts will check the system and make sure your computer is protected from various threats and dangers from viruses and malware. We
                also provides services to clean viruses and malware that attack your computer and installs the latest antivirus software to protect your system from various viruses
                new. So don't compromise your computer's security and have your computer scanned by Lev Computer's team of experts as soon as possible.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bi bi-cloud"></i>
              </div>
              <h4><a href="">Data Backup And Data Recovery</a></h4>
              <p style="text-align: justify">All data will be stored on your computer's hard drive. What happens when the hard drive or media that holds important files and data is destroyed? Think about your files and data
                lost forever? We provide data recovery services where Lev Computer's team of experts will use proven methods and techniques to recover your data before
                system crash to keep your data safe. Apart from that, we will also provide a data backup service, always ensuring that your important files and data are stored properly
                our backup system, and easily restore your data when you need it.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bi bi-wifi"></i>
              </div>
              <h4><a href="">Computer Network System</a></h4>
              <p style="text-align: justify">Is your internet not working or unavailable? Can't find your printer on your computer network? Difficulty sharing files or documents with users in the office
                You? Our client provides you with the best solution for managing your computer network. We can configure your LAN and WAN network to suit your office or needs
                so that your device can be connected using a computer, laptop or other device. At the same time, you can share the Internet, documents and files, printers, scanners and
                other.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bi bi-envelope"></i>
              </div>
              <h4><a href="">Internet and Email</a></h4>
              <p style="text-align: justify">Today, every business or individual relies heavily on email, internet access, and online storage using various devices such as laptops, desktops, and mobile phones.
                connected to each other. This is very important. For that Lev Computer is always up to date with the latest technology and our team can combine all this to improve
                productivity of employees working in the office and outside the office so they can continue to do so. work effectively and efficiently</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



    <section class="parallax" style="background-color: gold; color:white; padding-left:30px; padding-right:30px; text-align:center">
      <h4>"ONE OF OUR ADVANTAGES IS THAT WE BUILD TRUST AND ALWAYS PROVIDE FAST SUPPORT SERVICE WHILE MAINTAINING THE BEST QUALITY OF SERVICE TO OUR CLIENTS"</h4>
    </section>



    <!-- ======= Excellence Section ======= -->
    <section id="excellence" class="features" >
      <div class="container" data-aos="fade-up" >

        <div class="section-title">
          <h2>Our Advantages</h2>
        </div>

        <div class="row" >
          <div class="col-lg-3 col-md-4" style="width: 100%; margin-bottom: 10px">
            <div class="icon-box">
              <i class="bi bi-hand-thumbs-up" style="color: #ffbb2c;"></i>
              <h3><a href="">Fast Respond</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0" style="width: 100%; margin-bottom: 10px">
            <div class="icon-box">
              <i class="bi bi-hand-thumbs-up" style="color: #5578ff;"></i>
              <h3><a href="">Unlimited Services For The Same Price</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0" style="width: 100%; margin-bottom: 10px">
            <div class="icon-box">
              <i class="bi bi-hand-thumbs-up" style="color: #e80368;"></i>
              <h3><a href="">Support team who are always ready to help you</a></h3>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0" style="width: 100%; margin-bottom: 10px">
            <div class="icon-box">
              <i class="bi bi-hand-thumbs-up" style="color: #e361ff;"></i>
              <h3><a href="">Competitive Prices</a></h3>
            </div>
          </div>

      </div>
    </section><!-- End Excellence Section -->



    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        
        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              {{-- @foreach ($categories as $cate)
                <li class="filter">{{ $cate->category_name }}</li>
              @endforeach --}}
            </ul>
          </div>
        </div>

        
        <div class="row portofolio-container" data-aos="fade-up">

          @foreach ($computers as $computer)
          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="{{ $computer->computer_image }}" class="img-fluid" style="width: 300px; height: 300px">

            <div class="portfolio-info">
              
              <h4>{{ $computer->computer_name }}</h4>
              <p>{{ $computer->computer_detail }}</p>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->



    <section class="parallax" style="background-color: gold; color:white; padding-left:30px; padding-right:30px; text-align:center">
      <h4>"WHAT DO THEY SAY ABOUT US? FIND THOUSANDS OF POSITIVE REVIEWS FROM THE CLIENTS WE HAVE SERVED"</h4>
    </section>


    <!-- ======= Contact Section ======= -->
    <div class="section-title" style="margin-top: 60px">
      <h2>Get information and contact us</h2>
    </div>


    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Lokasi :</h4>
                  <p>Jl. Pare-Pare 9 Blok F/ Bumi Sudiang Permai <br>Sudiang, Makassar</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email :</h4>
                  <p>khalilurrachman21@gmail.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Telepon :</h4>
                  <p>0822-7147-7100</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="contact" style="margin-top: 30px" data-aos="fade-up"> 
          <div class="card-body">
            <form action="{{ route('question_save')}}" method="POST">

              <div class="section-title">
                <h2>Form Pertanyaan</h2>
              </div>

              @csrf
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="question_name">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="question_email">
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="number" class="form-control" name="question_phone">
              </div>
              <div class="form-group">
                <label>Detail</label>
                <textarea type="text" name="question_detail" class="form-control" rows="3"></textarea>
              </div>
              <div class="text-center">
                <button type="submit" name="btn" class="btn btn-primary btn-block" style="background-color: maroon; margin-top:10px;">Send Question</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection