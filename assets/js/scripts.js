let waitingMessage = document.createElement("div");
waitingMessage.innerHTML = '<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>';

$(".header-options").on("click", function () {
  let e = this;

  $(".menu-active").removeClass("menu-active");
  $(e).addClass("menu-active");
  changeContent(e.id);
});

$(".navbar-nav>li>a").on("click", function () {
  $(".navbar-collapse").collapse("hide");
});

function changeContent(idButton) {
  switch (idButton) {
    case "home-header":
      $.ajax({
        type: "POST",
        data: null,
        url: "./views/all/home.php",
        success: function (response) {

		$(document.body)
		.removeClass()
		.fadeIn("slow")
		.addClass("viewport banner-home")
		.fadeIn("slow");

		$("#main-container")
		.css("display", "none")
		.html(response)
		.fadeIn("slow");

        },
      });
      break;
    case "about-header":
      $.ajax({
        type: "POST",
        data: null,
        url: "./views/all/about.php",
        success: function (response) {

		$(document.body)
		.removeClass()
		.fadeIn("slow")
		.addClass("viewport banner-about")
		.fadeIn("slow");

		$("#main-container")
		.css("display", "none")
		.html(response)
		.fadeIn("slow");

        },
      });
      break;
    case "services-header":
      $.ajax({
        type: "POST",
        data: null,
        url: "./views/all/services.php",
        success: function (response) {

		$(document.body)
		.removeClass()
		.fadeIn("slow")
		.addClass("viewport banner-services")
		.fadeIn("slow");

		$("#main-container")
		.css("display", "none")
		.html(response)
		.fadeIn("slow");
        },
      });
      break;
    case "contact-header":
      $.ajax({
        type: "POST",
        data: null,
        url: "./views/all/contact.php",
        success: function (response) {

			$(document.body)
			.removeClass()
			.fadeIn("slow")
			.addClass("viewport banner-contact")
			.fadeIn("slow");
			
			$("#main-container")
			.css("display", "none")
			.html(response)
			.fadeIn("slow");

			$("#btn-enviar-contacto").on("click", function () {
				sendMessageContact();
			});

          $("#email-contact").on({
            keydown: function (e) {
              if (e.which === 32) return false;
            },
            change: function () {
              this.value = this.value.replace(/\s/g, "");
            },
          });
        },
      });
      break;
    default:
      $("#main-container").fadeIn("slow", function () {
        $("#main-container").html("");
      });
  }
}

function validateInput(text) {
  if (text.trim() == "") {
    return false;
  }
  return true;
}

function validateEmail(mail) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
    return true;
  }
  return false;
}

function sendMessageContact() {
  let names = $("#names-contact").val();
  let lastnames = $("#lastnames-contact").val();
  let email = $("#email-contact").val();
  let nacionality = $("#nationality-contact").val();
  let message = $("#message-contact").val();

  if (!validateInput(names)) {
    swal("", "El nombre es requerido - Name is required", "info");
    return false;
  }

  if (!validateInput(lastnames)) {
    swal("", "El apellido es requerido - Last Name is required", "info");
    return false;
  }

  if (!validateEmail(email)) {
    swal(
      "",
      "El correo electrónico no es correcto, por favor indícanos un correo válido. Ejemplo: example@example.com",
      "info"
    );
    return false;
  }

  if (nacionality === "-1") {
    swal("", "La nacionalidad es requerida - Nationality is required", "info");
    return false;
  }

  if (!validateInput(message)) {
    swal("", "El mensaje es requerido - Message is required", "info");
    return false;
  }

  if (!jQuery("#checkPoliticas").is(":checked")) {
    swal(
      "",
      "Debes aceptar la política de privacidad - You must agree the privacy policy",
      "info"
    );
    return false;
  }

  $.ajax({
    type: "POST",
    data: {
      names: names,
      lastnames: lastnames,
      email: email,
      nacionality: nacionality,
      message: message,
    },
    url: "./controllers/sendContactMessage.php",
    beforeSend: function () {
      swal({
        //title: 'Enviando mensaje - Sending message',
        icon: "info",
        text: "Enviando, por favor espere - Sending, please wait",
        buttons: false,
        closeOnClickOutside: false,
        closeOnEsc: false,
        content: waitingMessage,
      });
    },
    success: function (response) {
      swal.close();
      switch (response) {
        case "Sent":
          swal(
            "",
            "El mensaje ha sido enviado - The message has been sent",
            "success"
          ).then(() => {
            changeContent("contact-header");
          });
          break;
        case "Empty field":
          swal(
            "",
            "Debes llenar todos los campos - You must fill out each form field",
            "warning"
          );
          break;
        case "Failed":
          swal(
            "",
            "El mensaje no pudo ser enviado, por favor inténtalo más tarde. - The message could not be sent, please try again in a little bit.",
            "error"
          );
          break;
        default:
          console.log(response);
      }

      return;
    },
  });
}

function scrollDownPage(sub) {
  if (!$("#accordionVisas").hasClass("show")) {
    setTimeout(function () {
      $("html, body").animate({ scrollTop: 9999 }, "fast");
    }, 300);
    return false;
  } else {
    if (sub) {
      setTimeout(function () {
        $("html, body").animate({ scrollTop: 0 }, "fast");
      }, 300);
      return false;
    }
    setTimeout(function () {
      $("html, body").animate({ scrollTop: 9999 }, "fast");
    }, 300);
  }
}
