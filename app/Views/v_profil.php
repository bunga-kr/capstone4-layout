<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h3>Profil Pengguna</h3>
<ul>
    <li>
        <span>Username: <?= session()->get('username'); ?></span>
    </li>
    <li>
        <span>Role: <?= session()->get('role'); ?></span>
    </li>
    <li>
        <span>Email: 111202415811@mhs.dinus.ac.id</span>
    </li>
    <li>
        Waktu Login: <span><?= session()->get('login_time') ?></span>
    </li>
    <li>
        Status Login: <span>
            <script type="text/javascript">
                if (<?= session()->get('isLoggedIn'); ?> == 1){
                    document.write("Sudah Login");
                } else{
                    document.write("Belum Login");
                }
            </script>
        </span>
    </li>
</ul>

 <!-- buat nunjukkin tanggal -->
 <script type="text/javascript"> 
    window.setTimeout("tampilWaktu()", 1000);

    function tampilWaktu() {
        var waktu= new Date();
        var bulan= waktu.getMonth() + 1;
        const options = { timeZone: 'Asia/Jakarta', timeStyle: 'short' };
        
        setTimeout("tampilWaktu()", 1000);
        document.getElementById("tanggal").innerHTML=
            waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML=
            waktu.toLocaleString('id-ID', options);
    }
 </script>

<?= $this->endSection() ?>