// CAROUSEL
document.querySelectorAll(".panels").forEach((carousel) => {
  const items = carousel.querySelectorAll(".galery-panels");
  const buttonsHtml = Array.from(items, () => {
    return `<span class="carousel-button"></span>`;
  });

  carousel.insertAdjacentHTML(
    "beforeend",
    `
  <div class="carousel-nav">
    ${buttonsHtml.join("")}
  </div>
  `
  );

  const buttons = carousel.querySelectorAll(".carousel-button");

  buttons.forEach((button, i) => {
    button.addEventListener("click", () => {
      // un-select all the items
      items.forEach((item) => item.classList.remove("galery-panels--selected"));
      buttons.forEach((button) =>
        button.classList.remove("carousel-button--selected")
      );

      items[i].classList.add("galery-panels--selected");
      button.classList.add("carousel-button--selected");
    });
  });

  items[0].classList.add("galery-panels--selected");
  buttons[0].classList.add("carousel-button--selected");
});
