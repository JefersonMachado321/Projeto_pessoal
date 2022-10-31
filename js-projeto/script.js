const initDropdownMenus = document.querySelectorAll("[data-dropdown]");

initDropdownMenus.forEach((menu) => {
  ["touchstart", "click"].forEach((userEvent) => {
    menu.addEventListener(userEvent, handleClick);
  });
});

function handleClick(event) {
  this.classList.add("active");
  outsideClick(this, () => {
    this.classList.remove("active");
  });
}

function outsideClick(element, callback) {
  const html = document.documentElement;
  html.addEventListener("click", handleOutsideClick);
  function handleOutsideClick(event) {
    if (!element.contains(event.target)) {
      callback();
    }
  }
}
