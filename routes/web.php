<?php


use App\Http\Controllers\RelasiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BiodatasController;
use App\Models\siswa;
use App\Models\Hobi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/about', function () {
    return 'Selamat datang di halaman about';
});

route::get('/profil', function () {
    return 'Selamat datang di halaman profil';
});

route:: get('/biodata/{nama_lengkap}/{tanggal_lahir}/{jenis_kelamin}/{tempat_lahir}/{alamat}/{agama}/{no_telp}', function ($nama_lengkap, $tanggal_lahir, $jenis_kelamin,$tempat_lahir,$alamat, $agama , $no_telp) {
    return "<h1>Biodata</h1>" .
    "Nama Lengkap : $nama_lengkap<br>" .
    "Tanggal Lahir : $tanggal_lahir<br>" .
    "Jenis Kelamin : $jenis_kelamin<br>" .
    "Tempat Lahir : $tempat_lahir<br>" .
    "Alamat : $alamat<br>" .
    "Agama : $agama<br>" .
    "Telepon : $no_telp<br>";
});


route::get('/hitung/{bilangan1}/{bilangan2}', function ($bilangan1,$bilangan2) {
    $hasil=$bilangan1 + $bilangan2;
    return "Bilangan1 : $bilangan1 <br>
    Bilangan2 : $bilangan2 <br>
    Hasil : $hasil";
});


route::get('/persegi/{sisi}/{sisi1}', function ($sisi1, $sisi2) {
    $hasil = $sisi1 * $sisi2;
    return "
    Rumus Persegi : Sisi x Sisi <br>
    Sisi 1 : $sisi1 <br>
    Sisi 2 : $sisi2 <br>
    Hasil : $hasil";
});
route::get('/persegi_panjang/{panjang}/{lebar}', function ($panjang, $lebar) {
    $hasil = $panjang * $lebar;
    return "
    Rumus Persegi panjang : panjang x lebar <br>
    panjang  : $panjang <br>
    lebar : $lebar <br>
    Hasil : $hasil";
});
route::get('/lingkaran/{phi}/{jari_jari}', function ($phi, $jari_jari) {
    $hasil =  $phi * $jari_jari ;
    return "
    Rumus lingkaran : 1/2 x alas x tinggi <br>
    phi : $phi <br>
    jari-jari : $jari_jari <br>
    Hasil : $hasil";
});
route::get('/kp/{nama_pemesan}/{no_telp}/{tgl}/{jenis}/{menu}/{jumlah}', function ($nama,$no,$tgl,$jenis,$menu,$jumlah) {
    $diskon10 = "10";
    if ($jenis == "Makanan") {
    
    if ($menu == "Seblak") {
        $harga = 10000;
    } else if ($menu == "Pentol") {
       $harga = 15000;
    } else if ($menu == "Batagor") {
       $harga = 20000;
    } else {
       $harga = 0;
    }
} elseif ($jenis == "Minuman") {
    if ($menu == "kopi") {
       $harga = 5000;
    } else if ($menu == "jus") {
       $harga = 10000;
    } else if ($menu == "thai tea") {
       $harga = 15000;
    } else {
       $harga = 0;
    }
} else {
    echo "Harap pilih menu! <br>";
}



$total = $harga * $jumlah;
$diskon = ($total * $diskon10) / 100;
$setelahdiskon = $total * (1 - ($diskon10 / 100));




    echo "<h1>~Assalaam cofee~</h1>
    =============================<br>
    Nama Pemesan : $nama<br>
    No Telepon : $no<br>
    Tanggal Beli : $tgl<br>
    Jenis : $jenis<br>
    Menu : $menu<br>
    Harga : $harga<br>
    Jumlah : $jumlah<br>
    --------------------------------------------<br>
    Total : $total<br>";

    if ($total > 50000) {
    echo "Diskon 10% : $diskon<br>";
} else {
    echo "Tidak dapat diskon<br>";
}
    echo"
    --------------------------------------------<br>
    Setelah Diskon : $setelahdiskon<br>";
});    


    Route::get('halaman1', function () {
   $siswa = ["Rudy", "ipat", "bara","ani", "salwa","aliv", "raka", "teguh","dikri", "reihan"];

    return view('tampil1', compact('siswa'));
});

    Route::get('halaman2', function () {
        $hobi = ["muncak", "imenggambar", "baca komik","nyanyi", "baca buku","main bola", "main game", "muncak","lari", "balap"];

    return view('tampil2', compact('hobi'));
});
    Route::get('halaman3', function () {
        $idola = ["casilas", "Degea", "Rodri","meci", "c.ronaldo","mesi", "r.carlos", "Pedri","Neymar", "Onana"];
    return view('tampil3', compact('idola'));
});


// Route::get('post' , function () {

//     // return $post = post::find(1);

//     // $post = Post::find(1);
//     // $post->content = "Belajar lebih giat lagi";
//     // $post->save();
//     // return $post;

//     //menghapus data
//     // $post = Post::find(1);
//     // $post->delete();
//     // return $post;

//    $post = new post;
//    $post-> title = "Menjadi teman yang baik";
//    $post->content = "Menjadi teman yang baik adalah hal yang positif";
//    $post->save();
//    return $post;

//     // $post = post::all();
//     // return view('halaman_post', compact('post'));
// });


// Route::get('biodata' , function () {

//     $biodata = new biodata;
//    $biodata->nama_lengkap = "fadil";
//    $biodata->jenis_kelamin = "Laki-Laki";
//    $biodata->tanggal_lahir = "2009-07-13";
//    $biodata->tempat_lahir = "Bandung";
//    $biodata->agama = "Islam";
//    $biodata->alamat = "Bandung";
//    $biodata->telepon = "084097657823";
//    $biodata->email = "fadil@gmail.com";
//    $biodata->save();
//    return $biodata;
//     // $biodata = biodata::all();

//     // return view('biodata', compact('biodata'));

// });


// Route::get('post', [PostsController::class, 'tampil']);
Route::resource('post', PostsController::class);    
Route::resource('biodata', BiodatasController::class);












Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/product', [ProductController::class, 'index'])->name('product');
route::get('/industri', [IndustriController::class, 'index'])->name('industri');






Route::get('/one-to-one', [RelasiController::class, 'oneToOne']);


Route::get('/one-to-many', [RelasiController::class, 'oneToMany']);
Route::get('/many-to-many', [RelasiController::class, 'manyToMany']);


Route::get('/hobi/bola', function () {
    $hobi = Hobi::where('nama_hobi', 'Bermain Bola')->first();
    foreach ($hobi->mahasiswas as $mhs) {
        echo $mhs->nama . '<br>';
    }
});
Route::get('eloquent', [RelasiController::class, 'eloquent']);