function selectMovie(MovieName) {
    document.getElementById("selectedMovieName").value = MovieName;
}

function selectTheater(Theatername) {
    document.getElementById("selectedTheaterName").value = Theatername;
}

function selectSeat(button, seat) {
    button.classList.toggle("selected");

    let selectedSeatsInput = document.getElementById("selectedSeatInput");
    let selectedSeatsInputHidden = document.getElementById(
        "selectedSeatsInputHidden"
    );

    let selectedSeats = selectedSeatsInput.value
        ? selectedSeatsInput.value.split(", ")
        : [];

    if (selectedSeats.includes(seat)) {
        selectedSeats = selectedSeats.filter((s) => s !== seat);
    } else {
        selectedSeats.push(seat);
    }

    let selectedSeatsString = selectedSeats.join(", ");
    selectedSeatsInput.value = selectedSeatsString;
    selectedSeatsInputHidden.value = selectedSeatsString; // <-- Data ini yang dikirim ke backend
    console.log("Selected seats updated:", selectedSeatsString);
    console.log(
        "Selected seats before submitting:",
        document.getElementById("selectedSeatsInputHidden").value
    );
}

document.addEventListener("DOMContentLoaded", function () {
    let foodInputs = document.querySelectorAll(".quantity-input");
    let totalPriceDisplay = document.getElementById("totalPriceDisplay");
    let totalPriceInput = document.getElementById("totalPriceInput");
    let moviePrice = 50000; // Movie price (assuming at least one movie exists)

    function updateTotalPrice() {
        let total = 0;

        // Calculate food prices
        foodInputs.forEach((input) => {
            let price = parseFloat(input.closest(".food-item").dataset.price);
            let quantity = parseInt(input.value) || 0;
            total += price * quantity;
        });

        // Add movie ticket price
        let seatCount = (
            document.getElementById("selectedSeatsInputHidden").value || ""
        ).split(",").length;
        total += seatCount * moviePrice;

        totalPriceDisplay.textContent = total.toLocaleString();
        totalPriceInput.value = total;
    }

    foodInputs.forEach((input) => {
        input.addEventListener("input", updateTotalPrice);
    });

    document
        .getElementById("selectedSeatsInputHidden")
        .addEventListener("input", updateTotalPrice);
});

document.addEventListener("DOMContentLoaded", function () {
    var elems = document.querySelectorAll(".carousel");
    var instances = M.Carousel.init(elems, options);
});

function changebg(bg, title) {
    const banner = document.querySelector(".banner");
    const contents = document.querySelectorAll(".content");
    banner.style.backgroundImage = `url('${bg}')`;
    banner.style.backgroundSize = "cover";
    banner.style.backgroundPosition = "center";

    contents.forEach((content) => {
        content.classList.remove("active");
        if (content.classList.contains(title)) {
            content.classList.add("active");
        }
    });
}
let list = document.querySelectorAll(".carousel-food .list .item");
let carousel = document.querySelector(".carousel-food");
let next = document.getElementById("next");
let prev = document.getElementById("prev");

let mockup = document.querySelector(".mockup");

let count = list.length;
let active = 0;
let leftMockup = 0;
let left_each_item = 100 / (list.length - 1);

next.onclick = () => {
    active = active >= count - 1 ? 0 : active + 1;
    leftMockup = leftMockup + left_each_item;
    carousel.classList.remove("right");
    changeCarousel();
};
prev.onclick = () => {
    active = active <= 0 ? count - 1 : active - 1;
    leftMockup = leftMockup - left_each_item;
    carousel.classList.add("right");
    changeCarousel();
};
function changeCarousel() {
    // find item has class hidden to remove it
    let hidden_old = document.querySelector(".item.hidden");
    if (hidden_old) hidden_old.classList.remove("hidden");

    // find item old active to remove it and add class hidden
    let active_old = document.querySelector(".item.active");
    active_old.classList.remove("active");
    active_old.classList.add("hidden");
    // add class active in position active new
    list[active].classList.add("active");
    // change mockup background
    mockup.style.setProperty("--left", leftMockup + "%");

    clearInterval(refreshInterval);
    refreshInterval = setInterval(() => {
        next.click();
    }, 3000);
}

// auto run 3s
let refreshInterval = setInterval(() => {
    next.click();
}, 3000);

let text = document.getElementById("text");
let bird1 = document.getElementById("bird1");
let bird2 = document.getElementById("bird2");
let rocks = document.getElementById("rocks");
let forest = document.getElementById("forest");
let water = document.getElementById("water");

window.addEventListener("scroll", function () {
    let value = window.scrollY;

    text.style.top = 30 + value * -0.3 + "%";
    bird1.style.top = value * -1.5 + "px";
    bird1.style.left = value * 2 + "px";
    bird2.style.top = value * -1.5 + "px";
    bird2.style.left = value * -5 + "px";
    rocks.style.top = value * -0.12 + "px";
    forest.style.top = value * 0.25 + "px";
});
