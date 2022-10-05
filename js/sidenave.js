let sidenav = document.getElementById("mySidenav");
let openBtn = document.getElementById("openBtn");
let closeBtn = document.getElementById("closeBtn");
let NOM = document.getElementById("NOM");
let lien1 = document.getElementById("lien1");
let lien2 = document.getElementById("lien2");
let lien3 = document.getElementById("lien3");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;
NOM.onclick = closeNav;
lien1.onclick = closeNav;
lien2.onclick = closeNav;
lien3.onclick = closeNav;
/* Set the width of the side navigation to 250px */
function openNav() {
  sidenav.classList.add("active");
  openBtn.style.display = "none";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active");
  openBtn.style.display = "contents";
}