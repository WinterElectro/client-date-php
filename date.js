function send_date() {
	let formData = new FormData();

    // Here you get the date of the client and create a string with all this data.
    // Acá se obtiene la fecha del cliente y se crea un string con todos estos datos.
	let f = new Date();
	let mes;
	let dia;
	let hora;
	let min;
	let seg;

	if (f.getMonth() < 9) {
		mes = "0" + (f.getMonth() + 1);
	} else {
		mes = f.getMonth() + 1;
	}

	if (f.getDate() < 10) {
		dia = "0" + f.getDate();
	} else {
		dia = f.getDate();
	}

	if (f.getHours() < 10) {
		hora = "0" + f.getHours();
	} else {
		hora = f.getHours();
	}

	if (f.getMinutes() < 10) {
		min = "0" + f.getMinutes();
	} else {
		min = f.getMinutes();
	}

	if (f.getSeconds() < 10) {
		seg = "0" + f.getSeconds();
	} else {
		seg = f.getSeconds();
	}

	let date =
		dia +
		"/" +
		mes +
		"/" +
		f.getFullYear() +
		" " +
		hora +
		":" +
		min +
		":" +
        seg;

    // Here the string is sent to a php file via post, where the php file saves the string.
    // Acá se envía el string hacia un archivo php mediante post, donde el archivo php guarda el string.
	formData.append("date", date);

	let ver = new XMLHttpRequest();
	ver.open("POST", "date.php");
	ver.send(formData);
}
