<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<p class="h1 text-center">Łącznie z bazą </p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imię</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Tytuł</th>
    </tr>
  </thead>
  <tbody>
      <?php


    // echo '<p class="h1 text-center">'."Łącznie z bazą ".'</p>'.'<br>';


	$host="localhost"; // Nazwa hosta
	$user="root"; // Nazwa uzytkownika mysql
    $password=""; // Haslo do bazy
    $database="ksiegarnia"; // Nazwa bazy


    // łączymy się z bazą 

    $polaczenie = mysqli_connect($host, $user, $password);


     // wybieramy baze z której będziemy korzystać 
     mysqli_select_db($polaczenie, $database);
                
    $zapytanie = 'SELECT * FROM ksiazki ';
            
    $rezultat = mysqli_query($polaczenie, $zapytanie);
    $ile = mysqli_num_rows($rezultat);
    echo  $ile;
        for ($i = 1; $i <= $ile; $i++) {
            $row = mysqli_fetch_assoc($rezultat);
            $idNumber = $row['idksiazki'];
            $a1 = $row['imieautora'];
            $a2 = $row['nazwiskoautora'];
            $tytul = $row['tytul'];
            echo<<<END
            <tr>
            <td>$idNumber</td>
            <td>$a1</td>
            <td>$a2</td>
            <td>$tytul</td>
            </tr>
            END;
        }
    ?>
  </tbody>
</table>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>