@extends('layouts.layout');
@section('content')
<section id="departments" class="departments">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2 style="margin-top: 70px;">Nossas especialidades</h2>
            <p>Confira todos os tratamentos oferecidos pela nossa clínica.</p>
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4 mb-5 mb-lg-0">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                    <h4 >Implatologia Dentária</h4>
                  </a>
                </li>
                <li class="nav-item mt-2">
                  <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                    <h4>Prótese Dentária</h4>
                  </a>
                </li>
                <li class="nav-item mt-2">
                  <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                    <h4>Estética dental</h4>
                  </a>
                </li>
                <li class="nav-item mt-2">
                  <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                    <h4>Cirurgia Buco-Maxilo-Facial</h4>
                  </a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                      <h4>Dentisteria</h4>

                    </a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
                      <h4>Endodontia</h4>
                    </a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-7">
                      <h4>Periodontia</h4>
                    </a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-8">
                      <h4>Dolor facial crónico e agudo</h4>
                    </a>
                  </li>
              </ul>
            </div>
            <div class="col-lg-8">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <h3 >Implatologia Dentária</h3>
                  <p style="font-weight: 600;">Sobre o tratamento</p>
                  <img src="assets/img/Implantologia.jpg" alt="" class="img-fluid" >
                  <p  style="letter-spacing: 1.2px; font-size: 14px;">A Implantologia é uma área cirúrgica da Medicina Dentária que se dedica à colocação de implantes dentários.
                    Os implantes dentários são estruturas fabricadas numa liga de titânio, colocados na maxila ou na mandíbula, 
                    que substituem as raízes de dentes perdidos. Oferecem uma solução segura e permanente para a substituição de 
                    um ou mais dentes, funcionando como pilares de suporte para coroas unitárias e pontes fixas ou removíveis, 
                    parciais ou totais.
                    Com a utilização de implantes dentários o doente pode optar por uma solução fixa em detrimento de soluções desconfortáveis e inestéticas como as próteses removíveis, suportadas apenas pela mucosa, voltando a sentir o conforto que os dentes naturais oferecem.</p>
                </div>
                <div class="tab-pane" id="tab-2">
                  <h3>Prótese Dentária</h3>
                  <p style="font-weight: 600;">Sobre o tratamento</p>
                  <img src="assets/img/proteses.jpg" alt="" class="img-fluid">
                  <p style="letter-spacing: 1.2px; font-size: 14px;">Perder um ou mais dentes é sempre algo complicado. Não apenas esteticamente, mas, também, porque esse problema pode influenciar 
                    na forma como falamos, mastigamos e até respiramos.
                    Como cada caso é diferente, hoje a odontologia possui vários tipos de próteses dentárias para atender a todas as demandas.
                    A prótese dentária visa substituir um ou mais dentes em falta na boca do paciente. Assim, além de devolver o sorriso,
                     a autoestima e melhorar a estética, ela também contribui para a saúde, já que ajuda a devolver as funções bucais, 
                     melhorando a mastigação, a fonética e até mesmo a respiração.</p>
                </div>
                <div class="tab-pane" id="tab-3">
                  <h3>Estética dental</h3>
                  <p style="font-weight: 600;">Sobre o tratamento</p>
                  <img src="assets/img/Estética-dental.jpg" alt="" class="img-fluid">
                  <p style="letter-spacing: 1.2px; font-size: 14px;">A odontologia estética, também chamada de dentística, é o ramo da odontologia que actua na área de cosmética e restauração 
                    dental. Os profissionais dessa área da odontologia estão aptos a fazer procedimentos como o clareamento dental, preenchimento 
                    de espaços entre os dentes, aplicação de facetas de porcelana e reconstituição de dentes quebrados.
                    A odontologia estética é importante para a saúde individual. A restauração de dentes é um dos focos dessa especialidade, 
                    já que a permanência de cáries pode causar vários problemas para uma pessoa, como falhas na mastigação de alimentos.</p>
                </div>
                <div class="tab-pane" id="tab-4">
                  <h3>Cirurgia Buco-Maxilo-Facial</h3>
                  <p style="font-weight: 600;">Sobre o tratamento</p>
                  <img src="assets/img/Cirurgia-Buco.jpg" alt="" class="img-fluid">
                  <p style="letter-spacing: 1.2px; font-size: 14px;">Cirurgia Buco-Maxilo-Facial é a área da estomatologia que se encarrega de diagnosticar e tratar as doenças cirúrgicas de cara e da boca, 
                    Ex Dentes mal posicionados, tumores, fraturas, língua pressa. Extraçcões dentarias complicadas, dificuldades para pegar anestesia, 
                    neuralgias, cirurgia de resgate dum dente, problemas estéticos menores que se solucionam com intervenção com anestesia local.</p>
                </div>
                <div class="tab-pane" id="tab-5">
                    <h3>Dentisteria</h3>
                    <p style="font-weight: 600;">Sobre o tratamento</p>
                    <img src="assets/img/Dentisteria.jpg" alt="" class="img-fluid">
                    <p style="letter-spacing: 1.2px; font-size: 14px;">Dentisteria é uma especialidade da Medicina Dentária que permite restituir dentes que apresentam lesões na cárie dentária 
                        (cavidade, buracos, covas) traumatismos e fraturas dentárias, alterações de cor ou malformações dentárias congénitas.
                        Nesta área da medicina dentaria é a onde se faz restaurações (chumbos) ou a resina (mesma cor do dente), escutamos 
                        termos como pino, masa permanente e definitiva, reconstrução.</p>
                  </div>
                  <div class="tab-pane" id="tab-6">
                    <h3>Endodontia</h3>
                    <p style="font-weight: 600;">Sobre o tratamento</p>
                    <img src="assets/img/Endodontia.jpg" alt="" class="img-fluid">
                    <p style="letter-spacing: 1.2px; font-size: 14px;">A Endodontia é a área da Medicina Dentária que tem como objetivo a preservação do dente por meio de prevenção,
                         diagnóstico, tratamento e controlo das alterações da polpa e dos tecidos peri-radiculares.
                        Uma endodontia, vulgarmente conhecida por desvitalização, é um tratamento conservador, realizado quando a polpa 
                        (nervo e outros tecidos que se encontram no interior do dente) se encontra inflamada ou sem vitalidade. 
                        O espaço da polpa é limpo, preparado e preenchido por um material biocompatível para promover o selamento 
                        dos canais dentários e impedir, ou pelo menos dificultar, a entrada de bactérias.
                        Normalmente uma desvitalização é feita em duas ou três sessões. Depois do dente ser desvitalizado 
                        deverá ser recuperado através de uma coroa, ou de qualquer outra restauração que permita adquirir a função perdida.</p>
                  </div>
                  <div class="tab-pane" id="tab-7">
                    <h3>Cirurgia Buco-Maxilo-Facial</h3>
                    <p style="font-weight: 600;">Sobre o tratamento</p>
                    <img src="assets/img/Periodontia.jpg" alt="" class="img-fluid">
                    <p style="letter-spacing: 1.2px; font-size: 14px;">Periodontia é a disciplina da Medicina Dentária que estuda, previne e trata as doenças das gengivas e da estrutura de suporte
                        dos dentes.
                        São chamadas de doenças periodontais, como a gengivite (inflamação dos tecidos gengivais que circundam os dentes) e a periodontite
                       (inflamação que atinge os tecidos periodontais, provocando a destruição do osso alveolar, responsável pela fixação dos dentes).
                     </p>
                        <ul style="list-style: none; letter-spacing: 1.2px; font-size: 14px;">
                            <li><i class="bi bi-check-circle"></i> Alguns sinais da doença periodontal:</li>
                            <li><i class="bi bi-check-circle"></i> Sangramento espontâneo ou na escovagem das gengivas</li>
                            <li><i class="bi bi-check-circle"></i>  Gengivas vermelhas </li>
                            <li><i class="bi bi-check-circle"></i> Aumento de volume nas gengivas. </li>
                            <li><i class="bi bi-check-circle"></i> Aumento de volume nas gengivas./li>
                            <li><i class="bi bi-check-circle"></i>  Presença de pus nas gengivas.</li>
                            <li><i class="bi bi-check-circle"></i> Gengiva desinserida (“descolada”). </li>
                            <li><i class="bi bi-check-circle"></i>Retração gengival (“gengivas mirradas”). </li>
                            <li><i class="bi bi-check-circle"></i>  Dentes sensíveis ao frio. </li>
                            <li><i class="bi bi-check-circle"></i>Mau hálito e/ou mau sabor na boca. </li>
                            <li><i class="bi bi-check-circle"></i> Dentes a abanar e a separarem-se</li>
                          </ul> 
                  </div>
                  <div class="tab-pane" id="tab-8">
                    <h3>Dolor facial crónico e agudo</h3>
                    <p style="font-weight: 600;">Sobre o tratamento</p>
                    <img src="assets/img/Cirurgia-Buco.jpg" alt="" class="img-fluid">
                    <p>Área da Medicina Dentária relacionada com a dor na região do ouvido e da cabeça relacionada com alterações do fecho dos dentes (oclusão). Chamamos de alterações temporomandibulares que na maioria dos casos tem a ver com o bruxismo (habito de apertar e rangir os dentes).</p>
                  </div>
              </div>
            </div>
          </div>
  
        </div>
      </section>
@endsection
