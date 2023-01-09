window.addEventListener("load", () => {
    const preloader = document.querySelector(".preloader");

    preloader.classList.add("preloader-hidden");
    preloader.addEventListener("transition", () => {
        document.body.removeChild("preloader");
    })
})