<div id="mySidenav" class="sidenav">
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/salakmi/cexec/index.php" class="fa fa-terminal"> Command Execution</a>
  <!--  <a href="/salakmi/cexec/cexec2.php" class="fa fa-bug"> Command Execution 2</a> -->
    <a href="/salakmi/rlfi/index.php" class="fa fa-bug"> RFI / LFI </a>
 <!--  <a href="/salakmi/rlfi/rlfi2.php" class="fa fa-bug"> RFI / LFI 2 </a> -->
      <a href="/salakmi/phpi/index.php" class="fa fa-file-code-o"> PHP Injection </a>
    <a href="/salakmi/sqli/index.php" class="fa fa-database"> SQL Injection </a>
    <a href="/salakmi/upload/index.php" class="fa fa-cloud-upload"> Upload file 1 </a>
 <!--   <a href="/salakmi/upload/upload2.php" class="fa fa-bug"> Upload file 2 </a>
    <a href="/salakmi/upload/upload3.php" class="fa fa-bug"> Upload file 3 </a> -->



</div>

<script>
function buka() {
  var nav = document.getElementById("mySidenav");
  if (nav.style.width == "250px"){
    closeNav();
  }
  else{
    openNav();
  }
}

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";

}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


</script>
