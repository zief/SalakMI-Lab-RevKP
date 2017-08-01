<?php

require_once "../../core/init.php";

echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/salakmi/css/styleku.css\">";
echo "<link rel=\"stylesheet\" href=\"/salakmi/fa/css/font-awesome.min.css\">";
?>
<div id="mySidenav" class="sidenav">
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/salakmi/cexec/index.php" class="fa fa-bug"> Command Execution</a>
    <a href="/salakmi/cexec/cexec2.php" class="fa fa-bug"> Command Execution 2</a>
    <a href="/salakmi/rlfi/index.php" class="fa fa-bug"> RFI / LFI </a>
   <a href="/salakmi/rlfi/rlfi2.php" class="fa fa-bug"> RFI / LFI 2 </a>
    
      <a href="/salakmi/phpi/index.php" class="fa fa-bug"> PHP Injection </a>
    <a href="/salakmi/sqli/index.php" class="fa fa-bug"> SQL Injection </a>
    <a href="/salakmi/upload/index.php" class="fa fa-bug"> Upload file 1 </a>
    <a href="/salakmi/upload/upload2.php" class="fa fa-bug"> Upload file 2 </a>
    <a href="/salakmi/upload/upload3.php" class="fa fa-bug"> Upload file 3 </a>
    
    
  
</div>

<script>
function buka() {
  var status = 0;
  if(status===1){
    closeNav();
  }
  else{
    openNav();
  }
}
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    status=1;
    
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    status = 0;
}
</script>
<?php

echo "<div class=\"main\">";
echo "<div class=\"main2\" style=\"height: 150%;\">";
include_once "../../desain/header.php";

?>
