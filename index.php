<html lang="en" dir="ltr">
<head>
<title></title>
<script>
function usersearchTxt(str) {

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
if(this.readyState == 4 && this.status == 200){
document.getElementById('searchTable').innerHTML =
this.responseText;
}
}
xmlhttp.open("GET","DBManager.php?search="+str,true);
xmlhttp.send();

console.log(str);
}
</script>
</head>
<body>
<input id="searchBox" type="text" name="" 
onkeyup="usersearchTxt(document.getElementById('searchBox').value);">
<div id="searchTable">
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
</tr>
<?php
include 'DBManager.php';
echo fetch('');
?>
</table>
</div>
</body>
</html>