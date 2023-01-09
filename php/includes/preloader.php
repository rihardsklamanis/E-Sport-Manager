<div class="preloader"></div>

<script>
    window.addEventListener("load", () => {
        const preloader = document.querySelector(".preloader");
        
        preloader.classList.add("preloader-hidden");
        preloader.addEventListener("transition", () => {
            document.body.removeChild("preloader");
        })
    })
</script>

<style>
    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(31, 33, 30, 0.99);
        transition: opacity 0.75s, visibility 0.75s;

    }

    .preloader-hidden {
        opacity: 0;
        display: none;
        visibility: hidden;
    }

    .preloader::after {
        content: "";
        width: 75px;
        height: 75px;
        border: 15px solid #dddddd;
        border-top-color: #5A5A5A;
        border-radius: 50%;
        animation: loading 0.75s ease infinite;
    }

    @keyframes loading {
        from {
            transform: rotate(0turn);
        }
        to {
            transform: rotate(1turn);
        }
    }
</style>