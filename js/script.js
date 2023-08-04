const toggleBtn = document.getElementsByClassName("toggle_btn")[0];
const navbarlist = document.getElementsByClassName("navbar_list")[0];

toggleBtn.addEventListener("click", () => {
  navbarlist.classList.toggle("active");
});

var modal = document.getElementsByClassName("modal")[0];

var Imag = document.getElementsByClassName("Image")[0];
var span = document.getElementsByClassName("close")[0];
Imag.onclick = function () {
  modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

var modal1 = document.getElementsByClassName("modal")[1];

var Imag1 = document.getElementsByClassName("Image")[1];
var span1 = document.getElementsByClassName("close")[1];
Imag1.onclick = function () {
  modal1.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span1.onclick = function () {
  modal1.style.display = "none";
};

var modal1 = document.getElementsByClassName("modal")[1];

var Imag1 = document.getElementsByClassName("Image")[1];
var span1 = document.getElementsByClassName("close")[1];
Imag1.onclick = function () {
  modal1.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span1.onclick = function () {
  modal1.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function (event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// };
