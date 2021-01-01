<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtener Fecha Cliente</title>
    <script src="date.js"></script>
</head>
<body>
    <script>
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

        let date = dia + "/" + mes + "/" + f.getFullYear() + " " + hora + ":" + min + ":" + seg;
        send_date(date);
    </script>
</body>
</html>