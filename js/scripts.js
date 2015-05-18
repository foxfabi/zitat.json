$(document).ready(function()
{
    /**
     * Load the data via AJAX using JSON.
     * Put text and author into placeholder innerHTML.
     * Vertically align the article into page.
     */
    function loadData() {
        $.getJSON('/data.php', function(data) {
          output = "<strong>" + data.quote + "</strong><br><small>" + data.author + "<small>";
          document.getElementById("placeholder").innerHTML = output;
          $('.wrapper').fitText(1.6178);
          $('.wrapper').valign();
        });
    }
    $('.wrapper').valign();
    /* Load data on document ready */
    loadData();
    /* Reload data and resize article vertically if page is resized */
    $(window).resize(function() {
      // loadData();
    });
    /* Reload data after an intervall */
    var refreshId = setInterval( function() 
    {
      loadData();
    }, 3300000);
})
