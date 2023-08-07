const toggleBtn = document.getElementsByClassName("toggle_btn")[0];
const navbarlist = document.getElementsByClassName("navbar_list")[0];

toggleBtn.addEventListener("click", () => {
  navbarlist.classList.toggle("active");
});

// var modal = document.getElementsByClassName("modal")[0];

// var Imag = document.getElementsByClassName("Image")[0];
// var span = document.getElementsByClassName("close")[0];
// Imag.onclick = function () {
//   modal.style.display = "block";
// };

// // When the user clicks on <span> (x), close the modal
// span.onclick = function () {
//   modal.style.display = "none";
// };

// var modal1 = document.getElementsByClassName("modal")[1];

// var Imag1 = document.getElementsByClassName("Image")[1];
// var span1 = document.getElementsByClassName("close")[1];
// Imag1.onclick = function () {
//   modal1.style.display = "block";
// };

// When the user clicks on <span> (x), close the modal
// span1.onclick = function () {
//   modal1.style.display = "none";
// };

// var modal1 = document.getElementsByClassName("modal")[1];

// var Imag1 = document.getElementsByClassName("Image")[1];
// var span1 = document.getElementsByClassName("close")[1];
// Imag1.onclick = function () {
//   modal1.style.display = "block";
// };

// // When the user clicks on <span> (x), close the modal
// span1.onclick = function () {
//   modal1.style.display = "none";
// };

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function (event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// };

// add ID
var dropdowm2 = document.querySelectorAll(
  "ul.navbar_list > li.menu-item-76 > ul.sub-menu"
);

dropdowm2.forEach(function (element) {
  element.id = "dropdown-menu2";
});

//add html tag
var html =
  '<span class="angle-down"><i class="fa-solid fa-angle-down"></i></span>';

document
  .getElementById("dropdown-menu2")
  .insertAdjacentHTML("beforebegin", html);

const angleDown = document.getElementsByClassName("angle-down")[0];
const menuDown = document.getElementById("dropdown-menu2");

angleDown.addEventListener("click", () => {
  menuDown.classList.toggle("active");
});

document.addEventListener("DOMContentLoaded", function () {
  const linkToRemoveHref = document.querySelector("menu-item-51.remove-href");
  if (linkToRemoveHref) {
    linkToRemoveHref.removeAttribute("href");
  }
});
