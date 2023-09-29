const hamburger = document.getElementById("hamburgerBtn");

function hamburgerClicked() {
    const burgerItems = document.getElementById("burgerItems");
    if (burgerItems.classList.contains("container")) {
        burgerItems.classList.remove("container");
    } else {
        burgerItems.classList.add("container");
    }

}

hamburger.addEventListener("click", hamburgerClicked);