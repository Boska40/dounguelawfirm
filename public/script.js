// responsive menu
const menu = document.querySelector(".menu_icon");
const nav = document.querySelector(".nav");

menu.onclick = () => {
    menu.classList.toggle("close");
    nav.classList.toggle("active");
}


// bouton remonter vers le haut
// const btn = document.querySelector('.totop');

// btn.addEventListener('click', () => {
//     window.scrollTo({
//         top: 0,
//         left: 0,
//         behavior: 'smooth'
//     });
// });

// cookies
setTimeout(() => {
    document.querySelector(".cookies").classList.add("appear");
}, 2000);

document.querySelector(".closebtn").addEventListener("click", e => {
    document.querySelector(".cookies").classList.remove("appear")
});
document.querySelector(".openbtn").addEventListener("click", e => {
    document.querySelector(".cookies").classList.remove("appear")
});
