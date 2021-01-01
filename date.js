function send_date(date) {
    let formData = new FormData();
    
    formData.append("date", date);
    
    let ver = new XMLHttpRequest();
    ver.open("POST", "date.php");
    ver.send(formData);
}