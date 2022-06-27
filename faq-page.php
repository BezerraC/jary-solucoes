<div class="content">
  <div class="page-headline">
    <h2>O suporte que precisar para todos os nossos aplicativos.</h2>
    <p class="faq-desc">Queremos tirar todas as dúvidas de nossos usuários. Escolha abaixo o aplicativo de interesse e veja se encontra sua dúvida.</p>
  </div>
  <div class="faq-section row clearfix justify-content-center">
    <div class="col-sm" style="max-width: 275px;">
      <div class="sidebar px-3 mb-5">
        <ul>
          <li class="active">
            <a href="#ishowroom" onclick="loadFaq('.ishowroom', '.faq-body.ishowroom');" class="ishowroom">
              <img src="img/produtos/icones/ishowroom.png" class="icon" alt="iShowroom" title="iShowroom" style="width: 34px" />
              iShowroom
            </a>
          </li>
          <li>
            <a href="#babynotes" onclick="loadFaq('.babynotes', '.faq-body.babynotes');" class="babynotes">
              <img src="img/produtos/icones/babynotes.png" class="icon" alt="BabyNotes" title="BabyNotes" style="width: 34px" />
              BabyNotes
            </a>
          </li>
        </ul>

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <form action="envia_faq.php" id="faq-form" class="" method="post">
          <div class="google-form-new">
            <p>Suas perguntas não estão respondidas aqui nesta página? Envia uma mensagem que iremos responder.</p>
            <div><input type="text" name="name" placeholder="Nome" maxlength="200" /></div>
            <div><input type="text" name="email" placeholder="E-mail" maxlength="200" /></div>
            <div><textarea name="mensagem" placeholder="Mensagem"></textarea></div>
            <br />
            <div style="max-width: 228px;" class="g-recaptcha" data-sitekey="6Lc7kmUUAAAAAKHbsM2SLpExVL1umYqMw0oVp7Vl"></div>
            <br />
            <input type="submit" name="submit" value="Enviar pergunta" class="submit" />
          </div>
        </form>
        <p>Se preferir, envie um email para: <a href="mailto:suporte@owera.com.br">suporte@owera.com.br</a></p>
      </div>
    </div>

    <div class="col">
      <div class="faq-body ishowroom active"><?php include('faq-ishowroom.php') ?></div>
      <div class="faq-body imengo"><?php include('faq-imengo.php') ?></div>
      <div class="faq-body babynotes"><?php include('faq-babynotes.php') ?></div>
      <div class="faq-body papodebar"><?php include('faq-papodebar.php') ?></div>
      <div class="faq-body adventurefair"><?php include('faq-adventure-fair.php') ?></div>
    </div>
  </div>


  <?php include('footer-note.php') ?>

</div>