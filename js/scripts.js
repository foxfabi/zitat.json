$(document).ready(function()
{
    //
    // Load the data via AJAX using JSON.
    // Put text and author into placeholder innerHTML.
    //
    function loadData() {
        $.getJSON('data.php', function(data) {
          output = "<strong>" + data.quote + "</strong><br/><small>" + data.author + "<small>";
          document.getElementById("placeholder").innerHTML = output;
        });
    }
    // Load data on document ready
    loadData();
    // Reload data after an intervall
    var refreshId = setInterval( function()
    {
      loadData();
    }, 5000);
})
