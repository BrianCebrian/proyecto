// setTimeout(checkRecaptcha, 6000);
// grecaptcha.ready(function () {
// 	// do request for recaptcha token
// 	// response is promise with passed token
// 	grecaptcha
// 		.execute("6LdGIFMgAAAAAHQ4gvEt6QLUv3-3rUw8J_WnRPbi", {
// 			action: "validate_captcha",
// 		})
// 		.then(function (token) {
// 			// add token value to form
// 			document.getElementById("g-recaptcha-response").value = token;
// 			checkRecaptcha();
// 		});
// });

// function checkRecaptcha() {
// 	let inputCaptcha_valor = document.getElementById(
// 		"g-recaptcha-response"
// 	).value;
// 	if (inputCaptcha_valor != "") {
// 		boton.disabled = false;
// 		return true;
// 	}
// 	return false;
// }

"use strict";

document.getElementById("buttonNoticia").addEventListener("click", llamada);
function llamada() {
	//console.log(document.querySelector('#files > input[type="file"]').files[0]);
	var file = document.getElementById("imagenNoticia").files[0];
	getBase64(file); // prints the base64 string
}
function getBase64(file) {
	var reader = new FileReader();
	reader.readAsDataURL(file);
	reader.onload = function () {
		console.log(reader.result);
		crearNoticia(reader.result);
	};
	reader.onerror = function (error) {
		console.log("Error: ", error);
	};
}
function crearNoticia(imagenTexto64) {
	$.ajax({
		url: "./crearnoticia.php",
		type: "POST",
		data: {
			api: "crearNoticia",
			titulo: document.getElementById("tituloNoticia").value,
			texto: document.getElementById("textoNoticia").value,
			texto2: document.getElementById("textoNoticia2").value,
			texto3: document.getElementById("textoNoticia3").value,
			imagen: imagenTexto64,
		},
		// dataType: "json",

		success: function (response) {
			if (response == 0) {
				console.warn(response);
			} else {
				console.log(response);
				if ("error" in response) {
					console.warn("Error");
				} else {
					console.warn("OK");
				}
			}
		},
		error: function (error) {
			console.warn("Error: ");
			console.warn(error);
		},
	});
}
