// function objectAjax(){
// 	var xmlhttp = false;
// 	try{
// 		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
// 	} catch (e){
// 		try{
// 			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");			
// 		} catch (E){
// 			xmlhttp = false;	
// 		}		
// 	}
// 	if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
// 		xmlhttp = new XMLHttpRequest();
// 	}
// 	return xmlhttp;
// }
// //Inicializo automaticamente la funcion read al entrar a la pagina o recargar la pagina;
// addEventListener('load', read, false);

// function read(){
//         $.ajax({        
//         		type: 'POST',
//                 url:   '?c=administrator&m=table_users',               
//                 beforeSend: function () {
//                         $("#information").html("Procesando, espere por favor...");
//                 },
//                 success:  function (response) {
//                         $("#information").html(response);
//                 }
//         });
// }

// function register(){
// 	name 		= document.formUser.name.value;
// 	last_name 	= document.formUser.last_name.value;
// 	email 		= document.formUser.email.value;
// 	ajax = objectAjax();
// 	ajax.open("POST", "?c=administrator&m=registeruser", true);
// 	ajax.onreadystatechange=function() {
// 		if(ajax.readyState==4){			
// 			read();			
// 			alert('Los datos guardaron correctamente.');			
// 			$('#addUser').modal('hide');
// 		}
// 	}
// ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
// ajax.send("name="+name+"&last_name="+last_name+"&email="+email);
// }	

// function update(){
// 	id 			= document.formUserUpdate.id.value;
// 	name 		= document.formUserUpdate.name.value;
// 	last_name 	= document.formUserUpdate.last_name.value;
// 	email 		= document.formUserUpdate.email.value;
// 	ajax = objectAjax();
// 	ajax.open("POST", "?c=administrator&m=updateuser", true);
// 	ajax.onreadystatechange=function() {
// 		if(ajax.readyState==4){
// 			read();
// 			$('#updateUser').modal('hide');
// 		}
// 	}
// ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
// ajax.send("name="+name+"&last_name="+last_name+"&email="+email+"&id="+id);

// }

// function deleteUser(id){	
// 	if(confirm('¿Esta seguro de eliminar este registro?')){						
// 	ajax = objectAjax();
// 	ajax.open("POST", "?c=administrator&m=deleteuser", true);
// 	ajax.onreadystatechange=function() {
// 		if(ajax.readyState==4){			
// 			read();		
// 		}
// 	}
// 	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
// 	ajax.send("id="+id);
// 	}
// }

// function ModalRegister(){
// 	$('#addUser').modal('show');
// }

// function ModalUpdate(id,name,last_name,email){			
// 	document.formUserUpdate.id.value 			= id;
// 	document.formUserUpdate.name.value 			= name;
// 	document.formUserUpdate.last_name.value 	= last_name;
// 	document.formUserUpdate.email.value 		= email;
// 	$('#updateUser').modal('show');
// }

/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/

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
		success:  function (response) {
				
			console.log(response);
			
				
		}
	});

}

