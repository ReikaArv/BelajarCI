
$(document).on('click', '#btn-qr', function() {
    var tiketOrang = document.getElementById('order2').value;
    var tiketParkir = document.getElementById('order3').value;
    
    $('.modal-body #id-tiket').val($(this).data('id'));
    $('.modal-body #tiket-orang').val(tiketOrang);
    $('.modal-body #tiket-parkir').val(tiketParkir);
    $('.modal-body #staticId').val($(this).data('id'));
    
    $('#modalTitle').html('Pembayaran untuk Order #'+($(this).data('id')));
    $('#id-tiket').append($(this).data('id'));

    var hargaTotal = (tiketOrang * 5000) + (tiketParkir * 2000);
    $('.modal-body #staticHarga').val(hargaTotal);
    
});

