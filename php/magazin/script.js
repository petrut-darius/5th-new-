let isNavOpen = () => document.querySelector(".wrapper").classList.contains('wrapper-open');

let addNav = function () {
    let getSidebar = document.querySelector(".wrapper");
    getSidebar.classList.add('wrapper-open');
}
let removeNav = function () {
    let getSidebar = document.querySelector(".wrapper");
    getSidebar.classList.remove('wrapper-open');

    removeGraf();
}
let toogleNav = function () {
    setTimeout(() => {
        if (isNavOpen()) {
            removeNav();
        } else {
            addNav();
        }
    }, 100);
}


let openGraf = function () {
    let getGrafUl = document.querySelector(".afGraf");
    getGrafUl.classList.open('afGraf-open');
}
let removeGraf = function () {
    let getGrafUl = document.querySelector(".afGraf");
    getGrafUl.classList.remove('afGraf-open');
}
let toogleGraf = function () {
    let getGrafUl = document.querySelector(".afGraf");
    getGrafUl.classList.toggle('afGraf-open');
}

document.addEventListener('click', (event) => {
    if (!document.querySelector(".wrapper").contains(event.target) && isNavOpen()) {
        removeNav();
    }
})

