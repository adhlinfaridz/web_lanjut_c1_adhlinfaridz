$("#simpan").click(function(){
    var kode_produk = $("#kode_produk").val()
    if (kode_produk == ""){
        $("#lihat_kode_produk").text("kode produk masih kosong!!")
    }else{
        $("#lihat_kode_produk").text("")
    }

    var nama_produk = $("nama_produk").val()
    if (nama_produk == ""){
        $("#lihat_nama_produk").text("Nama produk masih kosong!")
    }else{
        $("lihat_nama_produk").text("")
    }

    var jenis_produk = $("jenis_produk").val()
    if (jenis_produk == ""){
        $("#lihat_jenis_produk").text("jenis produk masih kosong!")
    }else{
        $("#lihat_jenis_produk").text("")
    }

    var harga_produk = $("harga_produk").val()
    if (harga_produk == ""){
        $("#lihat_harga_produk").text("Harga produk masih kosong!")
    }else{
        $("#lihat_harga_produk").text("")
    }

    var stock_produk = $("stock_produk").val()
    if (stock_produk == ""){
        $("#lihat_stock_produk").text("stock produk masih kosong!")
    }else{
        $("#stocks_produk").text("")
    }
})