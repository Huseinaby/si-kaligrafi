const menuIcon = document.getElementById("icon-list");
const menuList = document.getElementById("menu-list");

menuIcon.addEventListener("click", () =>{
    menuList.classList.toggle("hidden");
});