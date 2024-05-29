//JS for CAROUSEL//
var index = 0;
var numButtons = 0;

document.querySelectorAll(".carousel").forEach((carousel) => {
  const items = carousel.querySelectorAll(".carousel__item");
  const buttonsHtml = Array.from(items, (item, i) => {
    return `<span class="carousel__button" id="b` + i + `"></span>`;
  });

  carousel.insertAdjacentHTML(
    "beforeend",
    `
		<div class="carousel__nav">
			${buttonsHtml.join("")}
		</div>
	`
  );

  const buttons = carousel.querySelectorAll(".carousel__button");

  numButtons = buttons.length;

  buttons.forEach((button, i) => {
    button.addEventListener("click", () => {
      // un-select all the items
      items.forEach((item) =>
        item.classList.remove("carousel__item--selected")
      );
      buttons.forEach((button) =>
        button.classList.remove("carousel__button--selected")
      );

      items[i].classList.add("carousel__item--selected");
      button.classList.add("carousel__button--selected");

      // update the button index
      index = i;
    });
  });

  // Select the first item on page load
  items[0].classList.add("carousel__item--selected");
  buttons[0].classList.add("carousel__button--selected");
});

//ARROWS for CAROUSEL//
var nextArrow = document.getElementById("next");
var prevArrow = document.getElementById("prev");

nextArrow.onclick = function() {
  index += 1;
  // wrap around if needed
  index = index % numButtons;
  document.getElementById("b" + index).click();
}

prevArrow.onclick = function () {
  index -= 1;
  // wrap around if needed
  if(index < 0)
    index = numButtons - 1;
  document.getElementById("b" + index).click();
}


