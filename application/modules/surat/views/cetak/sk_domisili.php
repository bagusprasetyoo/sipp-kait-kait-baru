<style type="text/css">
    @media print and (width: 21cm) and (height: 33cm) {
        @page {
            margin: 1cm;
        }
    }

    .tabelku {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 2px;
    }
</style>
<style type="text/css" media="print">
    @page {
        size: portrait;
    }
</style>
<!-- <img src="" width="100%" height="15%"> -->
<br /><br /><br />
<center>
    <font size="5"><u><b>SURAT KETERANGAN</b></u></font>
    <br />Nomor:
    145/..../IV/DS/
</center>
<br /><br /><br />
<font align="justify">
    Yang bertandatangan di bawah ini , Kepala Desa Warungbambu Kecamatan Karawang Timur Kabupaten Karawang menerangkan :
</font>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $row->nama; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $row->nik; ?></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $row->ttl; ?> </td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $row->jenis_kelamin; ?></td>
    </tr>
    <tr>
        <td>Status Perkawinan</td>
        <td>:</td>
        <td><?php echo $row->status_perkawinan; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $row->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat KTP</td>
        <td>:</td>
        <td><?php echo $row->alamat; ?></td>
    </tr>
</table>
<font align="justify">
    BOrang tersebut di atas adalah benar-benar warga kami yang bertempat tinggal di Kait-Kait Baru <?= $row->alamat; ?> sejak kurang lebih <?= $row->waktumenetap; ?>
    <br /><br />
    Demikian Surat Keterangan ini dibuat dengan sebenarnya, untuk dapat dipergunakan sesuai keperluannya serta agar yang
    berkepentingan menjadi maklum.<br /><br /><br />
</font>
<table width="100%">
    <tr>
        <td width="50%"></td>
        <td width="50%">
            <center>Warungbambu, <?= date('d F Y', strtotime($row->tanggal_surat)); ?> </center>
        </td>
    </tr>
    <tr>
        <td>
            <center>Yang Bersangkutan</center>
        </td>
        <td>
            <center>Kepala Desa Warungbambu</center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <center><b><u><?php echo $row->nama; ?></u></b></center>
        </td>
        <td>
            <center><b><u><?php echo $row->nama_pejabat; ?></u></b></center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>NIP. <?php echo $row->nip_pejabat; ?></center>
        </td>
    </tr>
</table>
<script>
    window.print();
</script>