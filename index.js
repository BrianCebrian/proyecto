const boton = document.getElementById("boton");

$.ajax({
	url: "./crearnoticia.php",
	type: "POST",
	data: {
		api: "recuentoObjetos",
	},
	dataType: "json",

	success: function (response) {
		console.log(response);
		if ("error" in response) {
			console.warn("Error");
		} else {
			console.warn("OK");
		}
	},
	error: function (error) {
		console.warn("Error: " + error);
		console.warn(error);
	},
});
