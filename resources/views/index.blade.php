@extends('layouts.layout');
  @section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
            <div class="container">
              <h2>Bem vindo a <span>nossa Clínica</span></h2>
              <p>"Ninguém precisa tanto de um sorriso quanto aquele que não tem nada para dar.Então, acostume-se a 
                sorrir sorrisos de aquecimento do coração, e você vai espalhar a luz do sol em um mundo às vezes triste.
                " Lawrence G. Lovasik</p>
              <a href="#about" class="btn-get-started scrollto">Ver mais</a>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
            <div class="container">
              <h2>Nunca é tarde demais para Cuidar da sua Saúde Oral!</h2>
              <p>Se cuidar bem dos seus dentes e fizer consultas periódicas com o Dentista, 
                os seus dentes podem durar a vida inteira!
                Independentemente da idade, você pode ter dentes e gengivas saudáveis se escovar pelo menos três vezes ao dia com
                creme dental com flúor, se usar fio dental pelo menos uma vez ao dia e se for regularmente ao Dentista para exames 
                completos e limpeza! COMO ESTÁ A SUA SAÚDE ORAL?</p>
              <a href="#about" class="btn-get-started scrollto">Ver mais</a>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
            <div class="container">
              <h2> Boa higiene oral</h2>
              <p>Manter uma BOA HIGIENE ORAL significa cuidar dos DENTES, gengiva, língua, céu da boca e os lábios, 
                e isto que é muito importante não só para a aparência,mas para a SAÚDE de um modo geral.
                A BOCA pode se tornar uma porta de entrada para diversas doenças caso não sejam tomados os 
                cuidados necessários.
                </p>
              <a href="#about" class="btn-get-started scrollto">Ver mais</a>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </section><!-- End Hero -->

    <main id="main">

      <!-- ======= Featured Services Section ======= -->
      <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Conheça aqui as 4 Razões:</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
          <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="fas fa-heartbeat"></i></div>
                <h4 class="title"><a href="">Evita manchas nos dentes</a></h4>
                <p class="description" style="font-size: 12px;">Quem investe na profilaxia dental, tem menor chances de que as manchas 
                  causadas por alimentos como café e refrigerante penetrem nas camadas mais profundas dos dentes, diminuindo a dificuldade para a remoção.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="fas fa-pills"></i></div>
                <h4 class="title"><a href="">Previne aparecimento de cáries</a></h4>
                <p class="description" style="font-size: 12px;">As cáries podem ser tratadas com maior facilidade se forem identificadas logo no início. 
                  Com a profilaxia, elas podem ser reconhecidas de forma precoce, recebendo o tratamento indicado o mais rápido possível.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="fas fa-thermometer"></i></div>
                <h4 class="title"><a href="">Evita doenças gengivais</a></h4>
                <p class="description" style="font-size: 12px;">Com a profilaxia, assim como as cáries, doenças como gengivite e periodontite, podem ser identificadas e tratadas precocemente.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="fas fa-dna"></i></div>
                <h4 class="title"><a href="">Combate o mau hálito</a></h4>
                <p class="description" style="font-size: 12px;">O mau hálito é causado por bactérias presentes em nossa boca. A profilaxia auxilia no controle dessas bactérias, reduzindo o mau hálito.</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Featured Services Section -->

      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

          <div class="text-center">
            <h3>Precisa tratar teus dentes?</h3>
            <p> Faça já a sua marcação, e garanta um sorriso saudável </p>
            <a class="cta-btn scrollto" href="consulta.html">Marcar Consulta</a>
          </div>

        </div>
      </section><!-- End Cta Section -->

    
    </main>
    <!-- End #main -->
@endsection