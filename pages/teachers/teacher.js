const open_btn = document.querySelector(".open-btn");
const close_btn = document.querySelector(".close-btn");
const nav = document.querySelectorAll(".nav");

open_btn.addEventListener("click", () => {
  nav.forEach((nav_el) => nav_el.classList.add("visible"));
});

close_btn.addEventListener("click", () => {
  nav.forEach((nav_el) => nav_el.classList.remove("visible"));
});

let tbody = document.querySelector(".tbody");
let tr = tbody.getElementsByTagName("tr");
// for(let i = 0; i < tr.length; i++){
//     if(i % 2 === 0){
//         tr[i].style.backgroundColor = ""
//     }else{
//         tr[i].style.backgroundColor = "#D3D3D3"
//     }
// }
for (let i = 0; i < tr.length; i++) {
  let td = tr[i].getElementsByTagName("td")[3];
  if (td.textContent === "Male") {
    tr[i].style.backgroundColor = "#ADD8E6";
  } else {
    tr[i].style.backgroundColor = "pink";
  }
}
