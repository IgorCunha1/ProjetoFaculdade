
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: auto;
  padding: 12px 20px;
  margin: 8px 0;
  /*display: inline-block;*/
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: auto;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {

width: 100vw;
/*height: 100vh;
background: #6C7A89;*/ 
display: flex;
flex-direction: row;
justify-content: center;
align-items: center
padding: 16px;
  
}
.box{
width: 300px;
height: 300px;
justify-content: center;
/*background: #6C7A89;*/

}

span.psw {
  float: right;
  padding-top: 16px;
}

body {
margin: 0px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>


<form  method="post" action="processa_login.php">
  <div class="imgcontainer">
    <img src="img/logo.png" alt="Avatar" class="avatar">
  </div>
  <br><br>
  <div class="container">
    <div class="box">
      <label for="uname"><b>Nome</b></label>
      <input type="text" placeholder="Enter Username" name="usuario" required>
      <br>
      <label for="psw"><b>Senha</b></label>
      <input type="password" placeholder="Enter Password" name="senha" required>
      <br>
      
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  </div>
<!--
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>

  -->
</form>