function toggleSearch() {
    const searchInput = document.getElementById("searchInput");
    searchInput.classList.toggle("show");

    if (
        searchInput.style.display === "none" ||
        searchInput.style.display === ""
    ) {
        searchInput.style.display = "block"; // Show the search bar
    } else {
        searchInput.style.display = "none"; // Hide the search bar
    }
}

let currentSlide = 0; // Track the current slide
const slides = document.querySelectorAll(".slide"); // Get all slides

function showSlide(index) {
    // Wrap around if index goes out of bounds
    if (index >= slides.length) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = index;
    }

    // Hide all slides and show the current one
    slides.forEach((slide, i) => {
        slide.classList.remove("active"); // Remove active class from all slides
        if (i >= currentSlide && i < currentSlide + 3) {
            slide.classList.add("active"); // Show the next 3 slides
        }
    });

    // Move the slider container
    const sliderContainer = document.querySelector(".slider-container");
    sliderContainer.style.transform = `translateX(-${
        (currentSlide * 100) / 3
    }%)`; // Slide one-third
}

// Function to move to the next or previous slide
function moveSlide(direction) {
    // Move currentSlide index
    currentSlide += direction;

    // Wrap around to the beginning if reaching the end
    if (currentSlide + 3 > slides.length) {
        currentSlide = 0; // Reset to the start when going beyond last slide
    } else if (currentSlide < 0) {
        currentSlide = slides.length - 3; // Wrap to the last set of slides if going backwards from start
    }

    showSlide(currentSlide);
}

// Initialize the slider
showSlide(currentSlide);

// // Function to check scroll position and toggle header visibility
// function handleScroll() {
//     const header = document.querySelector(".header-text");
//     // Check if the page is scrolled more than 0 pixels
//     if (window.scrollY > 0) {
//         header.classList.add("scrolled"); // Add the scrolled class
//     } else {
//         header.classList.remove("scrolled"); // Remove the scrolled class
//     }
// }

// // Event listener for scroll events
// window.addEventListener("scroll", handleScroll);
