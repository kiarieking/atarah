let btn = document.querySelector('#btn');
let sidebar  = document.querySelector('.sidebar')
let searchbtn = document.querySelector('.bx-search-alt-2')

btn.onclick=function () {
    sidebar.classList.toggle("active");
}

searchbtn.onclick=function () {
    sidebar.classList.toggle("active");
}