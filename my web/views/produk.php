<div class="row">
            <div class="col-sm-8">

                <p id="notif"></p>

                <h4>Data Produk</h4>
                <table class="table table-dark" id="tabel_produk">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Jenis Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>1</td>
                            <td>BRG0001</td>
                            <td>Iphone 14</td>
                            <td>Handphone</td>
                            <td>Rp 20.000</td>
                            <td>1 PCS</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>BRG0002</td>
                            <td>Iphone 11</td>
                            <td>Handphone</td>
                            <td>Rp 15.000</td>
                            <td>1 PCS</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>BRG0003</td>
                            <td>Iphone 10</td>
                            <td>Handphone</td>
                            <td>Rp 11.000</td>
                            <td>1 PCS</td>
                        </tr> -->
                    </tbody>
                </table>

            </div>
            <div class="col-sm-4">
                <h4>Input Data Produk</h4>
                <div class="form-group">
                    <label>No</label>
                    <input id="no" type="number" placeholder="Input no" class="form-control">
                    <p id="lihat_no" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>Kode Produk</label>
                    <input id="kode_produk" type="text" placeholder="Input kode produk" class="form-control">
                    <p id="lihat_kode_produk" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" id="nama_produk" placeholder="Input nama produk" class="form-control">
                    <p id="lihat_nama_produk" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>Jenis Produk</label>
                    <input type="text" class="form-control" id="jenis_produk" placeholder="input jenis produk">
                    <p id="lihat_jenis_produk" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>Harga Produk</label>
                    <input id="harga_produk" type="number" placeholder="Input harga produk" class="form-control">
                    <p id="lihat_harga_produk" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>Stok Produk</label>
                    <input id="stok_produk" type="number" placeholder="Input stok produk" class="form-control">
                    <p id="lihat_stok" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <button id="simpan" class="btn btn-success">Simpan</button>
                    <button class="btn btn-warning">Batal</button>
                </div>

            </div>
        </div>

<script>
    $("#simpan").click(function(){
    var kode_produk = $("#kode_produk").val()
    if (kode_produk == "") {
        $("#lihat_kode_produk").text("Kode Produk masih kosong!")
    }else{
        $("#lihat_kode_produk").text("")
    }

    var nama_produk = $("#nama_produk").val()
    if (nama_produk == "") {
        $("#lihat_nama_produk").text("Nama Produk masih kosong!")
    }else{
        $("#lihat_nama_produk").text("")
    }

    var jenis_produk = $("#jenis_produk").val()
    if (jenis_produk == "") {
        $("#lihat_jenis_produk").text("Jenis Produk belum dipilih!")
    }else{
        $("#lihat_jenis_produk").text("")
    }

    var harga_produk = $("#harga_produk").val()
    if (harga_produk == "") {
        $("#lihat_harga_produk").text("Harga produk masih kosong!")
    }else{
        $("#lihat_harga_produk").text("")
    }

    var stok = $("#stok_produk").val()
    if (stok == "") {
        $("#lihat_stok").text("Stok produk masih kosong!")
    }else{
        $("#lihat_stok").text("")
    }

    var no = $("#no").val()
    if (no == "") {
        $("#lihat_no").text("No produk masih kosong!")
    }else{
        $("#lihat_no").text("")
    }

    if (kode_produk != "" && nama_produk != "" && jenis_produk != "" && harga_produk != "" && stok != "" && no != "") {
        $("#notif").html(`
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Add Successfully!</strong> Data berhasil ditambahkan!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        `)

    $.ajax({
        type: "POST",
        url: "controllers/simpan_produk.php",
        data: "kode_produk=" + kode_produk + "&nama_produk=" + nama_produk + "&jenis_produk=" + jenis_produk + + "&harga=" + harga_produk + "&stok=" + stok,
        succes:
    })    

    }

})
</script>