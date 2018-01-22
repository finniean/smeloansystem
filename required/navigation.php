<style type="text/css">
body {
    font-family: "Lato", sans-serif;
}
    .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
   background: url(img/back.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #fff;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #0677a1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.content{
      background-color:#0677a1;

  width: 80%;
  margin: 40px auto;
  border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}
</style>




<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href='/registration.php'>Registration</a></li>
<a href='/search_worker.php'>Search Profile</a></li>
<a href='/php/loan.php'>Loan</a>
<a href=''>Payment</a>
<a href=''>Withdraw</a>
<a href='/index.php'>Sign out</a>
        </div>
<span style="font-size:30px;cursor:pointer; color:white;" onclick="openNav()">&#9776;Menu</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>