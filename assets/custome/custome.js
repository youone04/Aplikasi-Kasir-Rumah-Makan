$(document).ready(function(){
    let base_url = 'http://localhost/Apps/KasirApp';
    //tambah barang, halaman_utama.php
    tampiBarang();
    $('#tambah-data').on('click' , function(e){
      e.preventDefault();
      let nama = $('#nama').val();
      let harga = $('#harga').val();
      let jumlah = $('#jumlah').val();
      $.ajax({
        url: `${base_url}/Halaman_Utama_K/tambahDataBarang`,
        method: 'POST',
        data: {nama,harga,jumlah},
        success:function(hasil){
          console.log(hasil);
          tampiBarang();
        }
      })
    })
  //fecth data barang
  function tampiBarang(){
    $.ajax({
      url: `${base_url}/Halaman_Utama_K/ambilDataBarang`,
      method: 'GET',
      success:function(hasil){
        let data = JSON.parse(hasil);
        // console.log(data);
        let tampung = '';
        for(let i=0; i<data.length; i++){
            tampung += `<tr>    
                        <td>${data[i].id_barang}</td> 
                        <td>${data[i].nama}</td>
                        <td>Rp .${data[i].harga}</td>
                        <td>${data[i].jumlah}</td>
                      </tr>`;
        }
        $('#tableBarang').html(tampung);
      }
    })
  }

  })