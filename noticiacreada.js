$.ajax({
	url: "./crearnoticia.php",
	type: "POST",
	data: {
		api: "pedirNoticia",
		id: 8,
	},
	dataType: "json",

	success: function (response) {
		console.log(response);
		if ("error" in response) {
			console.warn("Error");
		} else {
			console.warn("OK");
			document.getElementById("titulo").innerHTML = response["titulo"];
			imagen = new Image();
			imagen.src = response["foto"];
			document.getElementById("imagen").appendChild(imagen);
			document.getElementById("texto").innerHTML = response["texto"];
			document.getElementById("texto2").innerHTML = response["texto2"];
			document.getElementById("texto3").innerHTML = response["texto3"];
		}
	},
	error: function (error) {
		console.warn("Error: " + error);
		console.warn(error);
	},
});

// imagen = new Image();
// imagen.src = "base64";
// document.getElementById("imagen").appendChild(imagen);
// document.getElementById("texto").innerHTML = "cc";
// document.getElementById("texto2").innerHTML = "adddaa";
// document.getElementById("texto3").innerHTML = "ee";
