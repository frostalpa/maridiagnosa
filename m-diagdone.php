<div
    class="card-header py-3 d-flex justify-content-center align-items-center ">
    <h3 class="m-0 font-weight-bold text-primary ">Silahkan isi jawaban dibawah ini [<?php echo $row["kode_gejala"]?>]</h3>
</div>
<!-- Card Body -->
<div class="card-body  ">
    <h3 align="center"><b>Apakah <?=strtolower($row["nama_gejala"])?>?</b></h3>
    <form action="aksi.php?m=konsultasi" method="post">
        <input type="hidden" name="kode_gejala" value="<?=$row["kode_gejala"]?>" />
        <p>&nbsp;</p>
        <p align="center">
            <button name="yes" type="button" class="btn btn-primary" value="1"><i class="fa-solid fa-circle-check"></i> Ya</button>
            <button name="no" type="button" class="btn btn-danger" value="1"><i class="fa-solid fa-circle-xmark"></i></span> Tidak</button> 
            
            <?php if($count):?>           
            <a class="btn edit" href="?m-diagnosa.php&success=1"><span class="glyphicon glyphicon-arrow-right"></span> Lihat Hasil</a>
            <a class="btn edit" href="aksi.php?m=konsultasi&act=new"><span class="glyphicon glyphicon-ban-circle"></span> Batal</a>
            <?php endif?>
        </p>
    </form>                      
</div>