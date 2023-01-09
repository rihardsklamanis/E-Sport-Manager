var input = document.getElementById("byName");
input.addEventListener("keyup", (e) => {
    var filter = input.value.toUpperCase();
    var table = document.getElementById("leaderboard");
    var tr = table.getElementsByTagName("tr");
  
    // Loop through all table and hide who dont match the search input
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
});var input = document.getElementById("byName");
input.addEventListener("keyup", (e) => {
    var filter = input.value.toUpperCase();
    var table = document.getElementById("leaderboard");
    var tr = table.getElementsByTagName("tr");
  
    // Loop through all table and hide who dont match the search input
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
});