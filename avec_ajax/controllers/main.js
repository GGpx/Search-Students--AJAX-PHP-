function search(recup) {
    var xhr = new XMLHttpRequest();
    // var recup = document.getElementById('text').value;
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('retour').innerHTML = xhr.responseText;
        }
    };

    xhr.open('GET','controllers/requeteDB.php?prenom=' + recup);
    xhr.send();
}