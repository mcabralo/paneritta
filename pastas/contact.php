<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contato</h2>
          <p>Tem alguma dúvida e quer conversar? Estamos a disposição!.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Local</h4>
                <p>Salvador - BA</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email</h4>
                <p>paneritta@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Telefone</h4>
                <p>+55 (71) 99948-6598</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.9922804593652!2d-38.4933387854153!3d-12.97234536333838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71604d14eea84e5%3A0x5bfc5280919fe8ad!2sR.%20Prof.%20Alfredo%20Rocha%2C%20148%20-%20Vila%20Laura%2C%20Salvador%20-%20BA%2C%2040270-150!5e0!3m2!1spt-BR!2sbr!4v1607812046829!5m2!1spt-BR!2sbr" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d58520.837167143465!2d-46.6446765!3d-23.5485988!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce448183a461d1%3A0x9ba94b08ff335bae!2zU8OjbyBQYXVsbywgU1A!5e0!3m2!1spt-BR!2sbr!4v1594599497697!5m2!1spt-BR!2sbr" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Nome</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Assunto</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Mensagem</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Carregando</div>
                <div class="error-message"></div>
                <div class="sent-message">Mensagem enviada. Obrigado!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->