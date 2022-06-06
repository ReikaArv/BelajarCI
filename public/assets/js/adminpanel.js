$(document).on('click', '#btn-edit', function() {
    $('.modal-body #id-transaksi').val($(this).data('id'));
    $('.modal-body #desc-transaksi').val($(this).data('desc'));
    $('.modal-body #value-transaksi').val($(this).data('value'));
    $('.modal-body #status-transaksi').val($(this).data('status'));
    
});