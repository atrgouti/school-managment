const open_btn = document.querySelector('.open-btn')
const close_btn = document.querySelector('.close-btn')
const nav = document.querySelectorAll('.nav')

open_btn.addEventListener('click', () => {
    nav.forEach(nav_el => nav_el.classList.add('visible'))
})

close_btn.addEventListener('click', () => {
    nav.forEach(nav_el => nav_el.classList.remove('visible'))
})


function submitForms() {
    var form1 = document.getElementById("form1");
    var form2 = document.getElementById("form2");
  
    form1.submit();
    form2.submit();
  }

function resetAllInputs(){
    let form1 = document.getElementById("form1");
    let form2 = document.getElementById("form2");
    let input1 = form1.getElementsByTagName("input")
    let input2 = form2.getElementsByTagName('input')
    for(let i = 0; i < input1.length;i++){
        input1[i].value = ''
    }
    for(let i = 0; i < input2.length;i++){
        input2[i].value = ''
    }
}