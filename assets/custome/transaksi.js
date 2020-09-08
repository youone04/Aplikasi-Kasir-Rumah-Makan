$(document).ready(function(){
    let base_url = 'http://localhost/Apps/KasirApp';
    $('#kode_barang').on('keyup',function(e){
        e.preventDefault();
        $('#kembalian').val(' ');
        let kodeBarang = $('#kode_barang').val();
        // console.log(kodeBarang);
        $.ajax({
            url: `${base_url}/Pembelian_Barang_K/ambilHargaBarang`,
            method : 'POST',
            data: {kodeBarang},
            success:function(hasil){
                // console.log('hasil =>',hasil);
                let data = JSON.parse(hasil);
                // console.log(data);
                if(data==null || data.gagal==0){
                    $('#harga_barang').val(0);
                }else{
                // console.log(data);
                $('#harga_barang').val(data.harga);
                }
            }
        })
        
    });
    $('#tambah').on('click' ,function(e){
        e.preventDefault();
        let jumlahBeli = $('#jumlah_dibeli').val();
        let harga_barang = $('#harga_barang').val();
        // console.log(harga_barang);
        $('#kode_barang').val('');
        $('#jumlah_dibeli').val('');
        $('#harga_barang').val('');
        let totalBayar  = jumlahBeli * harga_barang;
        // input localstorage
        let bayar;
        if(localStorage.getItem('bayar')===null){
            bayar=[];
        }else{
            bayar = JSON.parse(localStorage.getItem('bayar'));
        }
        bayar.push(totalBayar);
        localStorage.setItem('bayar',JSON.stringify(bayar));

        // get localStorage
    let tampil = JSON.parse(localStorage.getItem('bayar'));
    // console.log(tampil.length);
    let jum =0;
    for(let i=0; i<tampil.length; i++){
        jum = jum+tampil[i];
    }
    $('#total_pembayaran').val(jum);
        
    });    
})