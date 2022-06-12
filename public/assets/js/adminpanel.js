// Send data to Modal
$(document).on('click', '#btn-edit', function() {
    $('.modal-body #id-transaksi').val($(this).data('id'));
    $('.modal-body #desc-transaksi').val($(this).data('desc'));
    $('.modal-body #value-transaksi').val($(this).data('value'));
    $('.modal-body #status-transaksi').val($(this).data('status'));
    
    $('#modalEdit_title').html('Edit Order ID #'+($(this).data('id')));
    
});


// Search Function
function searchFunc() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("srcInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("transactionlist");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }