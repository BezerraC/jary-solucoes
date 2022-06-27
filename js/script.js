/* Author: Zee - Heitor Althmann 2012.
  Owera custom scripts
*/

function loadFaq(sidebarClass, faqClass) {
  $('.sidebar li.active, .faq-body.active').removeClass('active');
  $('.sidebar ' + sidebarClass).parent().addClass('active');
  
  $(faqClass).addClass('active');
}

function loadDefaultFaq() {
  faq = location.hash;
  
  switch(faq) {
    case '#imengo':
      loadFaq('.imengo', '.faq-body.imengo');
      break;
    case '#babynotes':
      loadFaq('.babynotes', '.faq-body.babynotes');
      break;
    case '#ishowroom':
      loadFaq('.ishowroom', '.faq-body.ishowroom');
      break;
    case '#papodebar':
      loadFaq('.papodebar', '.faq-body.papodebar');
      break;
    case '#adventurefair':
      loadFaq('.adventurefair', '.faq-body.adventurefair');
      break;
    default:
      loadFaq('.ishowroom', '.faq-body.ishowroom');
      break;
  }
}

function validarForm(formData, jqForm, options) {
    var queryString = $.param(formData); 
  
    var form = $(jqForm[0]);
    var nome = form.find('input[name=name]');
    var email = form.find('input[name=email]');
    var mensagem = form.find('textarea[name=mensagem]');
    var submit = form.find('input[name=submit]');
    
    if(nome.val() == '' && nome.val().toLowerCase() != "nome") {
      setError(nome, 'O campo Nome &eacute; obrigat&oacute;rio!');
      return false;
    }
    
    nome.removeClass('form-error');
    nome.next().remove();
    
    if(email.val() == '' && email.val().toLowerCase() != "e-mail") {
      setError(email, 'O campo E-mail &eacute; obrigat&oacute;rio!');
      return false;
    }
    
    if(email.val().indexOf('@') == -1 || email.val().indexOf('.') == -1) {
      setError(email, 'Informe um e-mail v&aacute;lido!');
      return false;
    }
    
    email.removeClass('form-error');
    email.next().remove();
    
    if(mensagem.val() == '' && mensagem.val().toLowerCase() != "mensagem") {
      setError(mensagem, 'O campo Mensagem &eacute; obrigat&oacute;rio!');
      return false;
    }
    
    mensagem.removeClass('form-error');
    mensagem.next().remove();
  
    // here we could return false to prevent the form from being submitted; 
    // returning anything other than false will allow the form submit to continue
    submit.attr('disabled', 'disabled');
    submit.addClass('disabled');
    submit.val('Enviando mensagem...');
    
    return true;
  }
  
  function setError(campo, mensagem) {
    campo.next().remove();
    campo.addClass('form-error');
    campo.after("<span class='error-desc'>" + mensagem + "</span>");
  }

  // post-submit callback 
  function submetidoComSucesso(responseText, statusText, xhr, $form)  {
    $form.find('input, textarea, p').slideUp('fast', function() {
      $(this).find('input, textarea, p, div').remove();
    });
    
    $form.append("<span class='form-success'>Formul&aacute;rio enviado com sucesso!</span>");
  }

$(document).ready(function() {
  loadDefaultFaq();

  $('.slidedeck').slidedeck({
		autoPlay: false,
		cycle: true, 
		hideSpines: true,
		complete: function(deck) {
  		$('ul.slider-items li a.active').removeClass('active');
  		$($('ul.slider-items li').get(deck.current - 1)).find('a').addClass('active');
		}
	});
	
	var options = {
    beforeSubmit:  validarForm,
    success:       submetidoComSucesso,
  };

  $('#faq-form, #contact-form').submit(function() {
      $(this).ajaxSubmit(options);
      return false; 
  });
});