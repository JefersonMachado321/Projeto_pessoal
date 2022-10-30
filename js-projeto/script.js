const initDropdownMenus = document.querySelectorAll("[data-dropdown]");

initDropdownMenus.forEach((menu) => {
  ["touchstart", "click"].forEach((userEvent) => {
    menu.addEventListener(userEvent, handleClick);
  });
});

this.classList.toggle("active");
