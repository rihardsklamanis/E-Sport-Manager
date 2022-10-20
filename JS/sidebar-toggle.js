const sidebarBtn = document.querySelector(".sidebar-toggle");
const sidebarhidden = document.querySelector(".hidden");

sidebarBtn.addEventListener("click", () => {
    var currentDisplay = window.getComputedStyle(sidebarhidden, null).display;
    if (currentDisplay === "none") {
        sidebarhidden.style.display = "inline";
    } else {
        sidebarhidden.style.display = "none";
    }
    console.log("works");
})

window.onresize = function (event) {
    sidebarhidden.style.display = "inline";
};