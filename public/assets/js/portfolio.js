document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".home").classList.remove("hidden");
});


document.querySelector(".contact-form").addEventListener("submit", function (e) {
    e.preventDefault();
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("message").value;

    if (name && email && message) {
        alert("Thank you for reaching out! We will get back to you soon.");
    } else {
        alert("Please fill in all fields.");
    }
});

