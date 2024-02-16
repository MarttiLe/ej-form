<?php
if(isset($_POST['submit'])){
    $to = "marttileppmets@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "Registreerumis vorm";
    $subject2 = "Koopia registreerimisest";
    $message = $name . " " . $email . " kirjutas vastavalt:" . "\n\n" . $_POST['notes'];
    $message2 = "Siin on koopia registreerimisest " . $name . "\n\n" . $_POST['notes'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Registreeritud, suur aitäh! " . $name . ", votame ühendust peatselt.";

    }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Ettevotete Joulupidu</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: rgb(246,213,89);
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: rgb(246,217,110);
      z-index: 2;
      }
      .form-popup {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 50%;
      padding: 20px;
      border-radius: 6px;
      background: rgb(11,29,43);
      box-shadow: 0 0 20px 0 #f6d96e;
      }
      .banner {
      position: relative;
      height: 150px;
      background-image: url("img/ejp2022-logo.svg");      background-size: contain; background-repeat: no-repeat; background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      /*content: ""; */
      background-color: rgb(11,29,43);
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, textarea, select {
      margin-bottom: 10px;
      border: 1px solid rgb(246,217,110);
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      color: rgb(246,217,110);
      background-color: #0b1d2b;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      color: rgb(11,29,43);
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: white;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 rgb(246,217,110);
      color: rgb(246,217,110);
      }
      .item {
      position: relative;
      margin: 10px 0;
      }

      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }


      .question span {
      margin-left: 30px;
      }


      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: rgb(246,217,110);
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: rgb(246,213,89);
      color:rgb(11,29,43);
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>

  </head>
  <body>
    <div class="form-popup" id="MyForm">
      <form action="" method="post">
        <div class="banner">

        </div>

        <div class="item">
          <p>Ettevõte</p>
          <input type="text" name="name"/>
        </div>

        <div class="item">
          <p>Osalejate arv</p>
          <input type="text" name="amount"/>
        </div>
        <div class="item">
          <p>Telefon</p>
          <input type="text" name="phone"/>
        </div>
        <div class="item">
          <p>E-post</p>
          <input type="text" name="email"/>
        </div>
        <div class="item">
          <p>Märkused</p>
          <input type="text" name="notes"/>
        </div>

        <div class="btn-block">
          <button type="submit" name="submit" value="Submit">Registreeru</button>
        </div>
      </form>
    </div>
  </body>
</html>
