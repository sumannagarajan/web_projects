<?php
$signup=false;
if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email_address'];
  $phone=$_POST['phone'];
  $error=user::signup($username,$password,$email,$phone);
  $signup=true;
  ?>
<?}
?>
<?php
if($signup) {
  if(!$error){
    ?>
     <main class="container">
  <div class="bg-light p-5 rounded mt-3">
    <h1>signup success</h1>
     <p class="lead">Now you can login from here <a href="/app/login.php">here</a>.</p>
  </div>
</main>

    <?php
  }
  else{
  ?>
  <main class="container">
  <div class="bg-light p-5 rounded mt-3">
    <h1>signup fail</h1>
    <p class="lead">something went wrong, <?=$error?></p>
  </div>
</main>
<?php
} }else{
?>
<main class="form-signup">
  <form method="post" action="signup.php">
    <img class="mb-4" src="https://img.freepik.com/free-vector/video-conference-remote-working-flat-illustration-screen-laptop-with-group-colleagues-people-conn_88138-548.jpg?size=626&ext=jpg&ga=GA1.2.1558922759.1707232605&semt=sph" alt=""  height="200">
    <h1 class="h3 mb-3 fw-normal">Sign up here</h1>
    <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInputUsername" placeholder="name@example.com">
      <label for="floatingInputUsername">Username</label>
    </div>
    <div class="form-floating">
      <input name="phone" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInputUsername">Phone</label>
    </div>
    <div class="form-floating">
      <input name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
  </form>
</main>
<?php
}
?>