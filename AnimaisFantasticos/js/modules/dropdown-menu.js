import outsideClick from "./outsideclick.js";

export default function initDropdownMenu() {
  const initDropdownMenus = document.querySelectorAll("[data-dropdown]");
  initDropdownMenus.forEach((menu) => {
    ["touchstart", "click"].forEach((userEvent) => {
      menu.addEventListener(userEvent, handleClick);
    });
  });

  function handleClick(event) {
    event.preventDefault();
    this.classList.add("active");
    outsideClick(this, ['"touchstart", "click"'], () => {
      this.classList.remove("active");
    });
  }
}
