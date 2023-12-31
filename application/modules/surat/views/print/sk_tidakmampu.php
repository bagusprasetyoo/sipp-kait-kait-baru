<style type="text/css">
    @media print and (width: 21.59cm) and (height: 33.56cm) {
        @page {
            margin: 2.5cm;
        }
    }

    * {
        font-family: 'Bookman Old Style', serif;
        line-height: 1.0;
        font-size: 11pt;
    }

    p {
        font-size: 11pt;
    }

    .tabelku {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 2px;
    }


    .garis {
        border-bottom: 1px solid #000;
        margin: 0 auto;
        margin-bottom: 15px;
        clear: both;
    }

    .masuk_alinea {
        margin-right: 20px;
    }
</style>
<style type="text/css" media="print">
    @page {
        size: portrait;
        margin: 2.5cm;
    }
</style>
<table width="100%">
    <tr>
        <td><img src="<?= base_url('assets/img/TanahLaut.jpg'); ?>" width="100px" height="100px" valign="baseline" /></td>
        <td align="center">
            <strong style="font-size : 16pt; ">PEMERINTAH KABUPATEN TANAH LAUT<br />
                KECAMATAN BATI-BATI<br />
                DESA KAIT-KAIT BARU<br /></strong>
            <small style="font-size : 9pt; line-height: 1.8;">Jl. Penghijauan Rt 03 Rw 02 Email: kaitkaitbaru@gmail.com Kode Pos: 70852</small>

        </td>
    </tr>
</table>

<div class="garis"></div>
<br />
<div align="center" style="line-height: 1.8;">
    <u><b style="font-size: 14pt; ">SURAT KETERANGAN TIDAK MAMPU</b></u><br>
    Nomor : . . . / . . . / . . .
</div>
<p align="justify">
    <span class="masuk_alinea">&nbsp;</span>Yang bertanda tangan di bawah ini Kepala Desa Kait Kait Baru Kecamatan Bati-Bati Kabupaten Tanah Laut Provinsi Kalimantan Selatan menerangkan dengan sebenarnya bahwa :
</p>
<br />
<table width="100%">
    <tr>
        <td width="8%" align="right"></td>
        <td width="30%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="57%" style="text-transform: uppercase;"><strong><?= $row->nama; ?></strong></td>
    </tr>
    <tr>
        <td></td>
        <td>NIK / No KTP</td>
        <td>:</td>
        <td><?= $row->nik; ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?= $row->tempat_lahir; ?>, <?= $row->tanggal_lahir; ?></td>
    </tr>
    <tr>
        <td></td>
        <td style="vertical-align: text-top;">Alamat KTP</td>
        <td style="vertical-align: text-top;">:</td>
        <td><?= $row->alamat; ?> Kec. Bati Bati Kab. Tanah Laut </td>
    </tr>
    <tr>
        <td></td>
        <td>Keperluan</td>
        <td>:</td>
        <td><?= $row->keperluan; ?></td>
    </tr>
</table>
<br />
<p align="justify">
    <span class="masuk_alinea">&nbsp;</span>Bahwa yang namanya tersebut diatas benar-benar warga desa Kait-Kait Baru dengan Nomor Kartu Keluarga <b><?= $row->nokk; ?></b>. Dengan Kepala Keluarga An. <b><?= $row->kepalakeluarga; ?></b> dan dari sepengetahuan kami memang benar-benar keluarga yang <b>TIDAK MAMPU</b>.
    <br /><br />
    <span class="masuk_alinea">&nbsp;</span>Demikian surat keterangan ini diberikan kepada yang bersangkutan, untuk dipergunakan sebagaimana mestinya.<br /><br />
</p>
<table width="100%">
    <tr>
        <td width="50%"></td>
        <td width="50%">
            <center>Kait-Kait Baru, <?= date('d F Y', strtotime($row->tanggal_surat)); ?> </center>
        </td>
    </tr>
    <tr>
        <td>
            <!-- <center>Yang Bersangkutan</center> -->
        </td>
        <td>
            <?php foreach ($tandatangan->result() as $key => $ttd) { ?>
                <center>
                    <?php if ($ttd->jabatan != 'Kepala Desa') { ?> An. <?php } ?>
                    Kepala Desa Kait-Kait Baru
                </center>
                <center>
                    <?php if ($ttd->jabatan != 'Kepala Desa') { ?><?= $ttd->jabatan; ?><?php } ?>
                </center>
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
            <center><b><u></u></b></center>
        </td>
        <td>
            <center style="text-transform: uppercase;"><b><?= $ttd->nama_pejabat; ?></b></center>
        <?php } ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <!-- <center>NIP.</center> -->
        </td>
    </tr>
</table>
<script>
    window.addEventListener("load", window.print());
</script>