let arraySoldier = document.getElementsByClassName('aCounaiter');
arraySoldier[0].addEventListener('onClick', function () {
  arraySoldier.innerHTML = '<object type="text/html" data="Objact.html" ></object>';
})
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}