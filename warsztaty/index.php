<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <table>
  <thead>
      <tr>
      <th>Numer Id</th>
      <th>Imie i nazwisko Autora</th>
      <th>Tytuł</th>
      <th>Cena</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database ="ksiegarnia"; // Nazwa bazy
    $zapytanie = 'SELECT * FROM ksiazki';
   
    $polaczenie = mysqli_connect($host, $username, $password);
    mysqli_query($polaczenie, "SET CHARSET utf8");
    mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
    mysqli_select_db($polaczenie, $database);
    $odpowiedzi = mysqli_query($polaczenie,$zapytanie);
    $ile = mysqli_num_rows($odpowiedzi);
    for($i =0; $i <=$ile; $i++  ) {
         $row = mysqli_fetch_assoc($odpowiedzi);
         $idBook = $row['idksiazki'];
         $autor  = $row['imieautora']. ' ' . $row['nazwiskoautora'];
         $tytul = $row['tytul'];
         $cena = $row['cena'];
        echo<<<END
            <tr>
            <td >$idBook</td>
            <td>$autor</td>
            <td>$tytul</td>
            <td>$cena</td>
            </tr>
            END;
    }
   

    ?>
    
  
  </tbody>
  
  
  
  
  
  </table>
</body>
</html>