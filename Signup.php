<?php
session_start();

if(isset($_POST["submit"])){
    if($_POST["yourname"] && $_POST["youremail"] && $_POST["yourpass"] && filter_var($_POST["youremail"], FILTER_VALIDATE_EMAIL) && strlen($_POST["yourpass"])>6){
    $_SESSION["name"] = $_POST["yourname"];
    $_SESSION["email"] = $_POST["youremail"];
    $_SESSION["pass"] = $_POST["yourpass"];

    echo "succesfully registered. your name: ".$_SESSION["name"]." your email: ".$_SESSION["email"]." your pass: ".$_SESSION["pass"];
}else {
    echo "❌ Please enter valid data: valid email & password > 6 characters.";
}
}
?>

<form method="post">
    <label>Your Name: </label>
    <input type="text" name="yourname" placeholder="please enter your Name">
    <br>
    <label>Email: </label>
    <input type="text" name="youremail" placeholder="please enter your Email">
    <br>
    <label>Password: </label>
    <input type="text" name="yourpass" placeholder="please enter your Password">
    <br>
    <button type="submit" name="submit">submit</button>
</form>