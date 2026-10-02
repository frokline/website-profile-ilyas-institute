<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Home')->name('home');


// Route untuk halaman Visi Misi (diarahkan ke file resources/js/pages/Tentang/VisiMisi.vue)
Route::inertia('/tentang/visi-misi', 'Tentang/VisiMisi')->name('tentang.visi-misi');


Route::inertia('/tentang/profile-pimpinan', 'Tentang/ProfilePimpinan')->name('tentang.profile-pimpinan');

Route::inertia('/tentang/sejarah', 'Tentang/Sejarah')->name('tentang.sejarah');

Route::inertia('/tentang/arti-lambang', 'Tentang/ArtiLambang')->name('tentang.arti-lambang');

// Route untuk halaman Mars Kampus
Route::inertia('/tentang/mars', 'Tentang/Mars')->name('tentang.mars');

// Route untuk Program Studi
Route::inertia('/program-studi/pai', 'ProgramStudi/Pai')->name('prodi.pai');

//routr untuk program studi iat
Route::inertia('/program-studi/iat', 'ProgramStudi/Iat')->name('prodi.iat');

//route untuk program studi pgmi
Route::inertia('/program-studi/pgmi', 'ProgramStudi/Pgmi')->name('prodi.pgmi');

//Route untuk penerimaan
Route::inertia('/penerimaan', 'Penerimaan')->name('penerimaan');

//route untuk beasiswa
Route::inertia('/beasiswa', 'Beasiswa')->name('Beasiswa');


//route untuk dokumen pendukung
Route::inertia('/tentang/dosen-staff', 'Tentang/DosenStaff')->name('DosenStaff');
