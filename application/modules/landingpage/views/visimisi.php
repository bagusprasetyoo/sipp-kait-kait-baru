<!-- Content Header (Page header berupa breadcrumb) -->
<div class="content-header" style="background-color: #eaeaea;">
    <div class="container">
        <div class="row my-2">
            <div class="col-sm-6">
                <!-- echo php berisi variabel $title $subtitle : mengambil $data yang dikirimkan dari controller -->
                <h1 class="m-0 font-weight-bold text-uppercase"> <?= $title; ?> </br></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('landingpage'); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active"><?= $subtitle; ?></li>
                    <li class="breadcrumb-item active"><?= $title; ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container mt-3">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h4 class="font-weight-bold">VISI</h4>
                <p class="text-justify ">Visi adalah suatu gambaran yang menantang tentang keadaan masa
                    depan yang diinginkan dengan melihat potensi dan kebutuhan desa. Penyusunan Visi Desa
                    Kait-Kait Baru ini dilakukan dengan pendekatan partisipatif, melibatkan pihak-pihak yang
                    berkepentingan di Desa Kait-Kait Baru seperti pemerintah desa, BPD, tokoh masyarakat,
                    tokoh agama, lembaga masyarakat desa dan masyarakat desa pada umumnya. Pertimbangan
                    kondisi eksternal di desa seperti satuan kerja wilayah pembangunan di kecamatan. Maka
                    berdasarkan pertimbangan di atas Visi Desa Kait-Kait Baru Adalah adalah :</p>
                <p>"DESA MANDIRI DESA WISATA"</p>
            </div>
        </div>
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h4 class="font-weight-bold">MISI</h4>
                <p class="text-justify ">Selain penyusunan visi juga telah ditetapkan misi-misi yang memuat
                    sesuatu pernyataan yang harus dilaksanakan oleh desa agar tercapainya visi desa
                    tersebut. Visi berada di atas misi. Pernyataan visi kemudian dijabarkan ke dalam misi
                    agar dapat di operasionalkan/dikerjakan. Sebagaimana penyusunan visi, misipun dalam
                    penyusunannya menggunakan pendekatan partisipatif dan pertimbangan potensi dan kebutuhan
                    Desa Sumber Jaya , sebagaimana proses yang dilakukan maka misi Desa Kait-Kait Baru
                    adalah :
                </p>
                <ol class="text-justify">
                    <li>Menjalankan roda pemerintahan desa yang baik sehat dan demokratis, sekaligus
                        memberikan pelayanan sosial dasar kepada masyarakat ( Pelayaanan
                        administrasi,kesehatan dan keamanan )</li>
                    <li>Melaksanakan pembangunan sarana dan prasarana infrastruktur desa, dan infrrastruktur
                        seni sosial budaya dan kebudayaan.</li>
                    <li>Menyelenggarakan penyelenggaraan pemerintahan desa yang ber masyarakatsesuai dengan
                        asas musyawarah dan berorientasi pada masyarakat miskin.</li>
                    <li>Membangun SDM yang berkualitas unggul bersaing kreatif enofatif dan kekinian dengan
                        melaksanakan pembinaan kepada kelompok masyarakat dalam bentuk pelatihan dan
                        peningkatan kapasitas diri serta menggali dan mengembangkan potensi SDA yang ad di
                        desa sehingga mempunyai pendapatan asli desa.</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->