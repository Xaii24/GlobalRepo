// Get the Products span and the dropdown menu
const productsLink = document.querySelector(".header-text .dropdown");
const dropdownMenu = document.querySelector(".header-text .dropdown-menu");

// Toggle the dropdown when Products is clicked
productsLink.addEventListener("click", function (e) {
    // Prevent the default link behavior

    // Toggle the dropdown visibility
    dropdownMenu.style.display =
        dropdownMenu.style.display === "block" ? "none" : "block";
});

// Close the dropdown if clicked outside
document.addEventListener("click", function (e) {
    // If the click is outside the dropdown (Products link and dropdown menu)
    if (!productsLink.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.style.display = "none";
    }
});
