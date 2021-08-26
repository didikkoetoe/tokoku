$(document).ready(function () {

    $('.tombolTambah').click(function (e) { 
        e.preventDefault();
        
        $('#formModalLabel').html('Tambah Data Produk');
        $('.modal-footer button[type=submit]').html('Tambah Data');

        $('#nama').val('');
        $('#harga').val('');
        $('#berat').val('');
        $('#kategori').val('All');
        $('#deskripsi').val('');
        $('#gambar').val('');
        $('#id').val('');
    });
    
    $('.edit').click(function (e) { 
        e.preventDefault();
        
        $('#formModalLabel').html('Ubah Data Produk');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/tokoku/public/Admin/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            type: "post",
            url: "http://localhost/tokoku/public/Admin/getUbah",
            data: {id : id},
            dataType: "json",
            success: function (response) {
                $('#id').val(response.id);
                $('#nama').val(response.nama);
                $('#harga').val(response.harga);
                $('#berat').val(response.berat);
                $('#kategori').val(response.kategori);
                $('#deskripsi').val(response.deskripsi);
                $('#gambar').val(response.gambar);
            }
        });
    });
    
});