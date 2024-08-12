const Menu = document.querySelector(".hamburguesa"); 

const offScreenMenu = document.querySelector(".off-screen-menu");
Menu.addEventListener("click", () => {
    Menu.classList.toggle("active");
    offScreenMenu.classList.toggle("active");
});