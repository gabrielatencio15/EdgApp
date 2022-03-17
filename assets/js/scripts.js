let waitingMessage = document.createElement("div");
	waitingMessage.innerHTML = '<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>';

$(".header-options").on("click", function() {
	let e = this;

	// setTimeout(function() {
 	$(".menu-active").removeClass("menu-active");
	// },200);

	// setTimeout(function() {
	 	$(e).addClass("menu-active");
	// },200);
	changeContent(e.id);
	//console.log(e);
});

$('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});

function changeContent(idButton)
{
	switch(idButton)
	{
		case 'home-header':
			$.ajax({        
				type: 'POST',
				data: null,
				url:  './views/all/home.php',              
				success:  function (response) {
						$("#main-container").css('display','none').html(response).slideDown("slow");;
					
				}
			});
			break;
			case 'about-header':
				$.ajax({        
					type: 'POST',
					data: null,
					url:  './views/all/about.php',              
					success:  function (response) {
							$("#main-container").css('display','none').html(response).slideDown("slow");;
						
					}
				});
				break;
			case 'contact-header':
				$.ajax({        
					type: 'POST',
					data: null,
					url:  './views/all/contact.php',              
					success:  function (response) {
							$("#main-container").css('display','none').html(response).slideDown("slow");

							$("#btn-enviar-contacto").on("click", function() {
									sendMessageContact();
								}
							  );

							$("#email-contact").on({
							keydown: function(e) {
								if (e.which === 32)
								return false;
							},
							change: function() {
								this.value = this.value.replace(/\s/g, "");
							}
							});
						
							
					}
				});
				break;
		default:
			$("#main-container").fadeIn( "slow", function() {
				$("#main-container").html('');
			  });
			
	}
}


function validateInput(text) 
{
 if(text.trim() == '')
  {
    return (false)
  }
    return (true)
}

function validateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true)
  }
    return (false)
}


function sendMessageContact(){

	let names = $("#names-contact").val();
	let lastnames = $("#lastnames-contact").val();
	let email = $("#email-contact").val();
	let nacionality = $("#nationality-contact").val();
	let message = $("#message-contact").val();

	if(!validateInput(names))
	{
		swal('', 'El nombre es requerido - Name is required', "info");
		return false;
	}

	if(!validateInput(lastnames))
	{
		swal('', 'El apellido es requerido - Last Name is required', "info");
		return false;
	}

	if(!validateEmail(email))
	{
		swal('', 'El correo electrónico no es correcto, por favor indícanos un correo válido. Ejemplo: example@example.com', "info");
		return false;
	}

	if(nacionality === '-1')
	{
		swal('', 'La nacionalidad es requerida - Nationality is required', "info");
		return false;
	}

	if(!validateInput(message))
	{
		swal('', 'El mensaje es requerido - Message is required', "info");
		return false;
	}
	
	$.ajax({        
		type: 'POST',
		data: {	names: names, 
			   	lastnames: lastnames, 
				email: email,
				nacionality: nacionality,
				message: message
			  },
		url:  './controllers/sendContactMessage.php',     
		beforeSend: function() {
			swal({
				//title: 'Enviando mensaje - Sending message',
				icon: 'info',
				text: 'Enviando, por favor espere - Sending, please wait',
				buttons: false,
				closeOnClickOutside: false,
				closeOnEsc: false,
				content: waitingMessage
			  })
		  },         
		success:  function (response) {

			swal.close();
			switch(response)
			{
				case 'Sent':
					swal('', 'El mensaje ha sido enviado - The message has been sent', "success")
					.then(() => {
						changeContent('contact-header');
					});	
					break;
				case 'Empty field':
					swal('', 'Debes llenar todos los campos - You must fill out each form field', "warning");
					break;
				case 'Failed':
					swal('', 'El mensaje no pudo ser enviado, por favor inténtalo más tarde. - The message could not be sent, please try again in a little bit.', "error");
					break;
				default:
					console.log(response);
			}
				
			return;
			
				
		}
	});

}

