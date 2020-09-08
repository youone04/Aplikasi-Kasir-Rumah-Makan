<div class="col-5">
<h3>Pembelian Barang</h3>
<label for="kode_barang">Kode Barang</label>
<input type="text" name="kode_barang" id="kode_barang">
<br>
<label for="jumlah_dibeli">Jumlah dibeli</label>
<input type="text" name="jumlah_dibeli" id="jumlah_dibeli">
<br>
<label for="harga_barang">Harga Barang Satuan</label>
<input type="text" name="harga_barang" id="harga_barang" value="0" disabled>
<br><br>
<button id="tambah">TAMBAH</button>
<br><br>
<label for="total_pembayaran">Total Pemabayaran</label>
<input type="text" name="total_pembayaran" id="total_pembayaran" value="0" disabled>
<br>
<label for="tunai">Uang Tunai</label>
<input type="text" name="tunai" id="tunai">
<br><br>
<label for="kembalian">Kembalian</label>
<input type="text" name="kembalian" id="kembalian" disabled>
<br><br>
<button id="bayarbarang">BAYAR</button>
</div>
<div class="col-7">
    <?= $table ?>
</div>