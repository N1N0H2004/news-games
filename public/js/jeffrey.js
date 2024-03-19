function checkDownload() {
    var urlInput = document.getElementById("url").value;
    var url = "http://127.0.0.1:8000/functions.php?url=" + urlInput;
    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (data.downloadable) {
                alert("Ja, deze is downloadbaar.");
            } else {
                alert("Nee, is niet downloadbaar.");
            }
        })
        .catch(error => {
            console.error('Er is een fout opgetreden:', error);
        });
    return false; // Voorkom standaard gedrag van formulierindiening
}
