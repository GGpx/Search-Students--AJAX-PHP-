<?php
if(isset($_GET['prenom'])){
    $prenom = $_GET['prenom'];

} else{
    $prenom = '';
}

function getAllStudents($prenom) {
    $connec = new PDO("mysql:dbname=AJAX", 'root', '0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT * FROM etudiants WHERE prenom LIKE '%$prenom%';");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}   
    // $prenom = $_GET['prenom'];
    $students = getAllStudents($prenom);
    foreach($students as $key => $student){
        echo($student['prenom'].'<br>');
    }
?>