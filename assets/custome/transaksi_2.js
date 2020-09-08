$(document).ready(function(){
    $('#bayarbarang').on('click',function(e){
        e.preventDefault();

        //uang kembalian
        let tunai = $('#tunai').val();
        let totalPembayaran = $('#total_pembayaran').val();
        // console.log('tunai',tunai);
        let kembalian = tunai - totalPembayaran;
        // console.log(kembalian);
        $('#kembalian').val(kembalian);

        localStorage.removeItem('bayar');
        $('#total_pembayaran').val(' ');
        $('#tunai').val('');
    })
})