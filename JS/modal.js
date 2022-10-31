var modal = document.getElementById("modal");
var modalimg = document.getElementById("modalimg");
var closeBtn = document.getElementsByClassName("closeBtn")[0];

function reply_click(clicked_id) {
    var modalimgsrc = document.getElementById(clicked_id).src;
    modal.style.display = "block";
    modalimg.src = modalimgsrc;
    document.getElementsByTagName('body')[0].style.overflow = 'hidden';
}

closeBtn.onclick = function () {
    modal.style.display = "none";
    document.getElementsByTagName('body')[0].style.overflow = 'visible'
}