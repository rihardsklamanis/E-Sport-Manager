var league_list = document.getElementById("leagueOption");

function filterLeague() {
    var input = document.getElementById("leagueOption");
    var filter = input.value.toUpperCase();
    var table = document.getElementById("leaderboard");
    var tr = table.getElementsByTagName("tr");
    for (var i = 0; i < tr.length; i++) {
        var td = tr[i].getElementsByTagName("td")[7];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
        }
    }
    updateTableNumbers(table);
}

function updateTableNumbers(table) {
    // Get all the rows in the table
    let rows = table.rows;
    let count = 0;
  
    // Loop through the rows
    for (let i = 0; i < rows.length; i++) {

        // Check if the row has the "display" style set to "none"
        if (rows[i].style.display !== "none" && rows[i].className !== "leaderboard-header") {
            count++;
  
            // Get the first cell in the row
            let cell = rows[i].cells[0];
  
            // Update the text of the cell with the row number
            cell.innerText = count;
        }
    }
}

window.addEventListener('DOMContentLoaded', (event) => {
    filterLeague();
});

league_list.addEventListener('change', (event) => {
    filterLeague();
});


