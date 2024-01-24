let categoryhover = document.getElementById("drop");
let categoryItem = document.getElementById("category-hover");

function hovershow() {
  categoryhover.classList.add('category-hover');
}

document.addEventListener("click", function (event) {
  if (!categoryItem.contains(event.target)) {
    categoryhover.classList.remove("category-hover");
  }
});


var uamodal = document.getElementById("uamodal");

function openForm() {
  uamodal.classList.toggle("showe");
}



let seemore = document.getElementById("seemore");
let current = 8;

function seeMore() {

  let cards = Array.from(document.querySelectorAll(".wsk-cp-product"));
  for (let i = current; i < current + 4; i++) {
    cards[i].style.display = "flex";
  }

  current += 4;

  if (current >= cards.length) {
    seemore.style.display = "none";
  }

}


const hamburger = document.querySelector(".hamburger-admin");

const adminsidebar = document.querySelector(".admin-sidebar");


hamburger.addEventListener("click", () => {
  adminsidebar.classList.toggle("activenav");
})



