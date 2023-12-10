<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoja Strona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="dzialajpls.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  
  <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
</head>
<body class="example animate__animated animate__fadeIn animate__duration-4s animate__delay-0.5s">

    <header class=" text-white text-center py-3">
        <h1>PMS Globale</h1>
    </header>

    <nav class="navbar navbar-expand navbar-dark  sticky-top">
        <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#o-nas">O nas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#co-robimy">Co robimy?</a></li>
                    <li class="nav-item"><a class="nav-link" href="#formularz">Rejestracja</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                </ul>
            
        </div>
    </nav>

    <section id="o-nas" class="container my-4">
        <h2>O nas</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum facere pariatur explicabo iure impedit excepturi repudiandae laudantium? Veritatis, placeat laudantium nesciunt esse ratione libero excepturi aspernatur itaque autem dolorum dolorem!</p>
    </section>

    <section id="co-robimy" class="container my-4">
        <h2>Co robimy?</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa facere hic laborum ducimus quas maiores error similique repudiandae, harum tempora culpa. Porro est iure alias officia quae amet fugit atque quas esse eveniet, libero veniam eaque facilis maiores qui. Officia unde laboriosam velit ab laborum ex aut enim sunt deleniti, perferendis, nobis fuga at maxime, molestiae ratione culpa facilis provident hic eum fugit! Eveniet sint non odio adipisci recusandae, rerum nisi repellendus culpa reprehenderit odit possimus animi quos est. Illo minus, ex perspiciatis repellat earum aspernatur quibusdam, expedita consequatur, praesentium provident asperiores magnam illum deleniti quo facere dolorem dolor sed!</p>
    </section>
    <div class="container">
        <div class="row">
    <section class="me-4 mb-4 col-lg-8" style="opacity: 1;">
        <iframe class="fullOp" width="100%" height="100%" src="https://www.youtube.com/embed/dvjy6V4vLlI?autoplay=1&mute=1&controls=0&loop=1" frameborder="0">

        </iframe>
    </section>
    <section id="formularz" class="mb-4 col">
        <h2 class="text-center">Rejestracja</h2>
        <form action="jajco15.php" id="jajco30" method="post">
            
            <div class="form-floating mb-3 mx-1">
                <input type="text" class="form-control" id="fname" name="fname" required placeholder="Imie">
                <label for="fname" class="mt-0" >Imie</label>
                
            </div>
            
            <div class="form-floating mb-3 mx-1">
                <input type="text" class="form-control" id="lname" name="lname" required placeholder="Nazwisko">
                <label for="lname" class="mt-0">Nazwisko</label>
            </div>

            <div class="form-floating mb-3 mx-1">
                <input type="date" class="form-control" name="Data15" id="Data15" required placeholder=" ">
                <label for="Data15" class="mt-0">Podaj date urodzenia</label>
            </div>

            <div class="form-floating mb-3 mx-1">
                <input type="email" class="form-control" name="mail"  required placeholder="twojemail@ex.com">
                <label for="mail" class="mt-0">Podaj swój adres email</label>
            </div>

            <div class="form-floating mb-3 mx-1">
                <input type="tel" class="form-control" id="phone" name="phone" required minlength="9" maxlength="9" placeholder="123456789" pattern="[0-9]{9}" required>
                <label for="phone" class="mt-0">Podaj swój numer telefonu</label>
                
                <div class="form-text mx-2">
                    Podaj 9 liczbowy numer telefonu, bez numeru kierunkowego.
                </div>
            </div>
            <div class="form-floating mb-3 mx-1">
                <select list="wojewodztwo" class="form-control my-2" id="wojewodztwo" name="wojewodztwo" default="Mazowieckie" required>
                        <option value="Zachodniopomorskie">Zachodniopomorskie</option>
                        <option value="Pomorskie">Pomorskie</option>
                        <option value="Warmińsko-Mazurskie">Warmińsko-Mazurskie</option>
                        <option value="Lubuskie">Lubuskie</option>
                        <option value="Wielkopolskie">Wielkopolskie</option>
                        <option value="Kujawsko-Pomorskie">Kujawsko-Pomorskie</option>
                        <option value="Mazowieckie" selected>Mazowieckie</option>
                        <option value="Podlaskie">Podlaskie</option>
                        <option value="Dolnośląskie">Dolnośląskie</option>
                        <option value="Łódzkie">Łódzkie</option>
                        <option value="Lubelskie">Lubelskie</option>
                        <option value="Opolskie">Opolskie</option>
                        <option value="Śląskie">Śląskie</option>
                        <option value="Świętokrzyskie">Świętokrzyskie</option>
                        <option value="Małopolskie">Małopolskie</option>
                        <option value="Podkarpackie">Podkarpackie</option>
                </select>
                <label for="wojewodztwo" class="mt-0">Wybierz swoje wojewodztwo</label>
            </div>

            <div style="display: inline-block;">
                <label for="plec">Wybierz plec</label><br>

                <input type="radio"  id="men" name="plec" value="1" required>
                <label for="men">Mężczyzna</label>

                <input type="radio" id="women" name="plec" value="2">
                <label for="women">Kobieta</label><br>
            </div><br>
        
            <div class="col-12">
                <div class="form-check">
                <input type="checkbox" class="form-check-input" name="news" id="news" value="1">
                <label class="form-check-label" for="news">Subskrybuj nasz newsletter</label><br><br>
                </div>
            </div>
                
            <input type="submit" class="btn btn-primary col-4" value="Wyslij">
        </form> 
        <?php
        if( isset($_POST['fname']) &&
            isset($_POST['lname']) &&
            isset($_POST['Data15']) &&
            isset($_POST['mail']) &&
            isset($_POST['phone']) &&
            isset($_POST['wojewodztwo']) &&
            isset($_POST['plec'])){
            
            $conn=mysqli_connect('localhost','root','','zdun15');
            if($conn->connect_error){
                die("err".$conn->connect_error);}
        
        $imie = $_POST['fname'];
        $nazwisko = $_POST['lname'];
        $dataUr = $_POST['Data15'];
        $email=$_POST['mail'];
        $tel=$_POST['phone'];
        $woj=$_POST['wojewodztwo'];
        $plec=$_POST['plec'];
        if(!isset($_POST['news'])){
            $news=0;
        }else
        {$news=1;}
        
        $sql = "INSERT INTO `uzytkownicy` (`ID`, `Imie`, `Nazwisko`, `Wiek`, `NrTelefonu`, `Wojewodztwo`, `Plec`, `News`) VALUES (NULL, '$imie', '$nazwisko', '$dataUr', '$tel', '$woj', '$plec', '$news');";
        
        
        mysqli_query($conn,$sql);

        mysqli_close($conn);
        }
        ?>


     
    </section>
        </div>
    </div>
    <section id="faq" class="container my-4">
        <h2>FAQ</h2>
        <ul>
           
            <li><strong>Lorem ipsum dolor sit?</strong> amet consectetur</li>
            <li><strong>Adipisicing elit?</strong> Sed est odit fuga</li>
           
        </ul>
</section>

    <footer class="text-white text-center py-3">
        <p>Kontakt: jajco15@PMS.ru</p>
    </footer>

    
</body>
</html>
