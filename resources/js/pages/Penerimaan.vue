<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import PublicLayout from "@/layouts/PublicLayout.vue";
</script>

<template>
    <Head title="Penerimaan Mahasiswa Baru - Ilyas institut" />

    <PublicLayout>
        <!-- 1. HERO SECTION (DIPERBAIKI: Skala Gambar & Alignment) -->
        <section
            class="relative bg-brand pt-2 lg:pt-2 overflow-hidden flex items-end"
        >
            <!-- Efek Motif Islami Background -->
            <div
                class="absolute inset-0 z-0 opacity-10 mix-blend-soft-light [mask-image:linear-gradient(to_bottom,black_40%,transparent_100%)]"
            >
                <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern
                            id="islamic-motif-penerimaan"
                            x="0"
                            y="0"
                            width="60"
                            height="60"
                            patternUnits="userSpaceOnUse"
                        >
                            <g
                                stroke="currentColor"
                                stroke-width="1.5"
                                fill="none"
                                class="text-white"
                            >
                                <polygon
                                    points="30,5 35,22 50,17 38,30 50,43 35,38 30,55 25,38 10,43 22,30 10,17 25,22"
                                />
                            </g>
                        </pattern>
                    </defs>
                    <rect
                        x="0"
                        y="0"
                        width="100%"
                        height="100%"
                        fill="url(#islamic-motif-penerimaan)"
                    ></rect>
                </svg>
            </div>

            <!-- Container Konten -->
            <div
                class="relative z-10 mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 w-full"
            >
                <!-- PARTIKEL PAMFLET MELAYANG (MENYEBAR & KECIL) -->
                <div
                    class="absolute inset-y-0 left-0 w-full lg:w-1/2 z-0 pointer-events-none hidden sm:block"
                >
                    <!-- Pamflet 1 -->
                    <div
                        class="absolute top-[10%] left-[-2%] w-14 lg:w-20 animate-float-slow opacity-60"
                        style="animation-delay: 0s"
                    >
                        <img
                            src="/images/pamflet.png"
                            class="w-full h-auto rounded-lg shadow-lg -rotate-12 border border-white/20"
                        />
                    </div>
                    <!-- Pamflet 2 -->
                    <div
                        class="absolute top-[40%] left-[35%] w-10 lg:w-14 animate-float-medium opacity-40 blur-[2px]"
                        style="animation-delay: 1.2s"
                    >
                        <img
                            src="/images/pamflet4.png"
                            class="w-full h-auto rounded-md shadow-md rotate-12 border border-white/20"
                        />
                    </div>
                    <!-- Pamflet 3 -->
                    <div
                        class="absolute bottom-[20%] left-[5%] w-16 lg:w-24 animate-float-fast opacity-80"
                        style="animation-delay: 0.7s"
                    >
                        <img
                            src="/images/pamflet3.png"
                            class="w-full h-auto rounded-lg shadow-xl -rotate-6 border border-white/30"
                        />
                    </div>
                    <!-- Pamflet 4 -->
                    <div
                        class="absolute top-[25%] left-[20%] w-8 lg:w-12 animate-float-slow opacity-50 blur-[1px]"
                        style="animation-delay: 2.5s"
                    >
                        <img
                            src="/images/pamflet2.png"
                            class="w-full h-auto rounded-md shadow-sm rotate-45 border border-white/10"
                        />
                    </div>
                    <!-- Pamflet 5 -->
                    <div
                        class="absolute top-[75%] left-[30%] w-12 lg:w-16 animate-float-medium opacity-60"
                        style="animation-delay: 3.5s"
                    >
                        <img
                            src="/images/beasiswa.png"
                            class="w-full h-auto rounded-lg shadow-md -rotate-12 border border-white/20"
                        />
                    </div>
                </div>
                <!-- END PARTIKEL PAMFLET -->

                <div
                    class="flex flex-col lg:flex-row lg:items-end justify-between relative z-10"
                >
                    <!-- ELEMEN MELAYANG DI SEBELAH KIRI -->
                    <!-- Badge Atas: Info Program S1 -->
                    <!-- ELEMEN MELAYANG DI SEBELAH KIRI (REDESAIN PREMIUM) -->
                    <!-- Badge Atas: Info Program S1 -->
                    <div
                        class="absolute top-12 left-2 sm:left-6 z-30 hidden sm:flex items-center gap-3.5 bg-white/90 backdrop-blur-xl px-4 py-3 rounded-2xl shadow-[0_8px_30px_rgba(0,0,0,0.08)] border border-white/60 ring-1 ring-[#C9A227]/20 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_12px_40px_rgba(201,162,39,0.15)] cursor-default"
                    >
                        <!-- Icon Container Premium -->
                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-[#C9A227]/20 to-[#C9A227]/5 border border-[#C9A227]/30 text-[#C9A227] shadow-inner"
                        >
                            <!-- SVG Academic Cap (Toga) Premium -->
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                class="w-5 h-5 drop-shadow-sm"
                            >
                                <path
                                    d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.94 49.94 0 0 0-9.902 3.912l-.15.08a.75.75 0 0 1-.722 0l-.149-.08a49.873 49.873 0 0 0-9.903-3.913.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z"
                                />
                                <path
                                    d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 0 1 11 15.474a.75.75 0 0 0 2.06 0Zm-2.274-4.284A49.845 49.845 0 0 0 3 13.889v4.293a.75.75 0 0 0 .428.679 48.775 48.775 0 0 0 6.646 2.91 49.97 49.97 0 0 0 3.323-5.297l-.631-.309Z"
                                />
                            </svg>
                        </div>

                        <div>
                            <p
                                class="text-[11px] font-extrabold text-brand-ink uppercase tracking-[0.15em]"
                            >
                                Kuliah S1 Reguler
                            </p>
                            <p
                                class="text-[10.5px] font-medium text-gray-500 mt-0.5"
                            >
                                PAI, IAT & PGMI Online
                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full lg:w-5/12 order-2 lg:order-1 flex justify-center lg:justify-start relative z-20 mt-10 lg:mt-0"
                    >
                        <!-- Tampil hanya di layar Desktop (lg ke atas) -->
                        <img
                            src="/images/penerimaan.png"
                            alt="Mahasiswi Ilyas institut"
                            class="hidden lg:block w-full sm:w-[85%] lg:w-[150%] max-w-[850px] object-contain object-bottom drop-shadow-2xl lg:-ml-20 relative z-20"
                            style="margin-bottom: -1px"
                        />

                        <!-- Tampil hanya di layar HP & Tablet (lg ke bawah) -->
                        <img
                            src="/images/penerimaan.png"
                            alt="Mahasiswi Ilyas institut"
                            class="block lg:hidden w-[90%] max-w-[400px] object-contain object-bottom drop-shadow-xl relative z-20"
                            style="margin-bottom: -1px"
                        />
                    </div>

                    <!-- KOLOM KANAN: Teks Hero -->
                    <div
                        class="w-full lg:w-7/12 order-1 lg:order-2 text-center lg:text-left pt-4 pb-8 lg:pb-28 relative z-30 lg:pl-16 xl:pl-20"
                    >
                        <div
                            class="inline-flex items-center justify-center lg:justify-start gap-2 mb-6 w-full"
                        >
                            <span
                                class="h-0.5 w-8 bg-[#C9A227] hidden lg:block"
                            ></span>
                            <span
                                class="text-xs font-bold tracking-[0.2em] text-[#C9A227] uppercase drop-shadow-sm"
                                >PENERIMAAN MAHASISWA BARU</span
                            >
                            <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                        </div>

                        <h1
                            class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl leading-tight lg:leading-tight drop-shadow-md"
                        >
                            Wujudkan Cita-Cita<br class="hidden lg:block" />
                            Bersama Kami
                        </h1>

                        <p
                            class="mt-6 mx-auto lg:mx-0 max-w-xl text-lg text-white/85 leading-relaxed drop-shadow-sm"
                        >
                            Kuliah 100% fleksibel untuk pekerja & ibu rumah
                            tangga. Daftar sekarang dan mulai perjalanan
                            <em class="text-[#C9A227] font-semibold"
                                >tafaqquh fiddin</em
                            >
                            bersama Ilyas institut.
                        </p>

                        <div
                            class="mt-8 flex flex-wrap justify-center lg:justify-start gap-4"
                        >
                            <a
                                href="#alur-pendaftaran"
                                class="inline-flex items-center rounded-full bg-[#C9A227] px-6 py-3 text-sm font-semibold text-white transition hover:bg-[#b08d20] shadow-lg hover:-translate-y-0.5"
                            >
                                Lihat Alur Pendaftaran
                                <span aria-hidden="true" class="ml-2">→</span>
                            </a>
                            <a
                                href="https://wa.link/jmipl2"
                                class="inline-flex items-center rounded-full border border-white/30 bg-white/10 px-6 py-3 text-sm font-semibold text-white backdrop-blur-md transition hover:bg-white/20 hover:-translate-y-0.5 shadow-lg"
                            >
                                Hubungi Panitia
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. KONTEN HALAMAN (Gaya Dokumen Resmi Institusi) -->
        <!-- Sebelumnya: <section class="bg-white py-16 sm:py-24"> -->
        <section class="bg-white py-10 sm:py-16">
            <!-- Sebelumnya: <div class="mx-auto max-w-5xl px-6 sm:px-8 space-y-20"> -->
            <div class="mx-auto max-w-5xl px-6 sm:px-8 space-y-10">
                <!-- A. JADWAL PENDAFTARAN -->
                <div>
                    <!-- Tambahan: Jika jarak antara teks kecil "JADWAL PENDAFTARAN" dengan 
                         judul utama di bawahnya juga ingin dirapatkan, ubah mb-4 menjadi mb-2 -->
                    <div class="inline-flex items-center gap-2 mb-2">
                        <span
                            class="text-xs font-bold tracking-[0.25em] text-[#C9A227] uppercase"
                        >
                            JADWAL PENDAFTARAN
                        </span>
                    </div>
                    <h2
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Gelombang Pendaftaran
                    </h2>
                    <p
                        class="mb-8 text-base text-gray-700 leading-relaxed text-justify"
                    >
                        Penerimaan mahasiswa baru Ilyas institut diselenggarakan
                        dalam beberapa gelombang. Kuota setiap gelombang
                        bersifat terbatas. Pemilihan gelombang akan memengaruhi
                        administrasi biaya pendaftaran.
                    </p>

                    <div class="grid gap-6 md:grid-cols-3">
                        <!-- Gelombang 1 -->
                        <div
                            class="bg-brand-surface p-8 rounded-xl border border-brand/10"
                        >
                            <h3
                                class="text-lg font-bold text-brand-ink mb-2 pb-2 border-b border-[#C9A227]/30"
                            >
                                Gelombang 1 (Early Bird)
                            </h3>
                            <ul class="space-y-3 text-sm text-gray-700 mt-4">
                                <li class="grid grid-cols-[100px_1fr] gap-2">
                                    <span class="font-semibold text-brand-ink"
                                        >Status</span
                                    >
                                    <span>: Dibuka — Ditutup</span>
                                </li>
                                <li class="grid grid-cols-[100px_1fr] gap-2">
                                    <span class="font-semibold text-brand-ink"
                                        >Benefit</span
                                    >
                                    <span
                                        >: Potongan biaya pendaftaran 50%</span
                                    >
                                </li>
                            </ul>
                        </div>

                        <!-- Gelombang 2 (Aktif) -->
                        <div
                            class="bg-brand p-8 rounded-xl shadow-lg relative overflow-hidden"
                        >
                            <!-- Aksen Bintang/Garis di latar -->
                            <div class="absolute top-0 right-0 p-4 opacity-10">
                                <svg
                                    class="w-16 h-16 text-white"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                            </div>
                            <span
                                class="inline-block bg-[#C9A227] text-white text-[10px] font-bold uppercase tracking-wider py-1 px-3 rounded-full mb-3 relative z-10"
                                >Sedang Dibuka</span
                            >
                            <h3
                                class="text-lg font-bold text-white mb-2 pb-2 border-b border-white/20 relative z-10"
                            >
                                Gelombang 2 (Reguler)
                            </h3>
                            <ul
                                class="space-y-3 text-sm text-white/90 mt-4 relative z-10"
                            >
                                <li class="grid grid-cols-[100px_1fr] gap-2">
                                    <span class="font-semibold text-white"
                                        >Status</span
                                    >
                                    <span>: Dibuka — Ditutup</span>
                                </li>
                                <li class="grid grid-cols-[100px_1fr] gap-2">
                                    <span class="font-semibold text-white"
                                        >Ket</span
                                    >
                                    <span
                                        >: Jalur utama penerimaan tahun
                                        ini.</span
                                    >
                                </li>
                            </ul>
                            <a
                                href="https://forms.gle/NG7eEC3uKNhjEpkD8"
                                class="mt-6 inline-flex w-full items-center justify-center rounded-lg bg-white px-4 py-2 text-sm font-bold text-brand transition hover:bg-gray-100 relative z-10"
                            >
                                Daftar Sekarang
                            </a>
                        </div>

                        <!-- Gelombang 3 -->
                        <div
                            class="bg-brand-surface p-8 rounded-xl border border-brand/10"
                        >
                            <h3
                                class="text-lg font-bold text-brand-ink mb-2 pb-2 border-b border-[#C9A227]/30"
                            >
                                Gelombang 3 (Akhir)
                            </h3>
                            <ul class="space-y-3 text-sm text-gray-700 mt-4">
                                <li class="grid grid-cols-[100px_1fr] gap-2">
                                    <span class="font-semibold text-brand-ink"
                                        >Status</span
                                    >
                                    <span>: Segera Diumumkan</span>
                                </li>
                                <li class="grid grid-cols-[100px_1fr] gap-2">
                                    <span class="font-semibold text-brand-ink"
                                        >Ket</span
                                    >
                                    <span
                                        >: Dibuka jika kuota sebelumnya
                                        tersisa.</span
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- B. ALUR PENDAFTARAN -->
                <div id="alur-pendaftaran" class="scroll-mt-24">
                    <div class="inline-flex items-center gap-2 mb-4">
                        <span
                            class="text-xs font-bold tracking-[0.25em] text-[#C9A227] uppercase"
                            >TATA CARA</span
                        >
                    </div>
                    <h2
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Alur Pendaftaran Mahasiswa Baru
                    </h2>

                    <div
                        class="relative border-l-2 border-[#C9A227]/30 pl-8 space-y-10 ml-4 mt-10"
                    >
                        <div
                            v-for="(step, i) in [
                                {
                                    title: 'Mengisi Formulir Pendaftaran',
                                    desc: 'Hubungi panitia via kontak yang tersedia, kemudian isi formulir pendaftaran online secara lengkap dengan data diri dan pilihan program studi (PAI, IAT, atau PGMI).',
                                },
                                {
                                    title: 'Penyerahan Berkas Persyaratan',
                                    desc: 'Mengunggah dokumen persyaratan digital berupa hasil scan ijazah/SKL, KTP/KK, dan pas foto terbaru sesuai ketentuan administrasi lembaga.',
                                },
                                {
                                    title: 'Verifikasi dan Administrasi Keuangan',
                                    desc: 'Proses verifikasi berkas oleh panitia penerimaan. Setelah dinyatakan sesuai, calon mahasiswa melakukan pembayaran biaya pendaftaran dan SPP awal.',
                                },
                                {
                                    title: 'Penetapan Status Mahasiswa',
                                    desc: 'Penerbitan Nomor Induk Mahasiswa (NIM), penyerahan akses akun perkuliahan online, dan penjadwalan Orientasi Studi Mahasiswa Baru (OSMB).',
                                },
                            ]"
                            :key="i"
                            class="relative"
                        >
                            <div
                                class="absolute -left-[41px] top-1 flex h-6 w-6 items-center justify-center rounded-full bg-white border-4 border-[#C9A227] text-[10px] font-bold text-brand-ink"
                            >
                                {{ i + 1 }}
                            </div>
                            <h3 class="text-xl font-bold text-brand-ink mb-2">
                                {{ step.title }}
                            </h3>
                            <p
                                class="text-gray-700 leading-relaxed text-justify"
                            >
                                {{ step.desc }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- C. SYARAT & KETENTUAN (Grid 2 Kolom) -->
                <div>
                    <h2
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Persyaratan & Ketentuan Biaya
                    </h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Syarat -->
                        <div
                            class="bg-brand-surface p-8 rounded-xl border border-brand/5"
                        >
                            <h3
                                class="text-lg font-bold text-brand-ink mb-4 pb-2 border-b border-[#C9A227]/30"
                            >
                                Berkas Persyaratan Utama
                            </h3>
                            <ol
                                class="list-decimal pl-5 space-y-3 text-sm text-gray-700 leading-relaxed"
                            >
                                <li>
                                    Lulusan tingkat SMA/MA/SMK/sederajat (atau
                                    setara paket C).
                                </li>
                                <li>
                                    Melampirkan scan asli Ijazah/SKL (Surat
                                    Keterangan Lulus) dan transkrip nilai.
                                </li>
                                <li>
                                    Melampirkan scan KTP (Kartu Tanda Penduduk)
                                    dan KK (Kartu Keluarga).
                                </li>
                                <li>
                                    Pas foto terbaru dengan latar belakang rapi
                                    dan pakaian sopan.
                                </li>
                                <li>
                                    Memiliki perangkat pendukung
                                    (laptop/smartphone) dan koneksi internet
                                    yang memadai untuk pelaksanaan kuliah
                                    online.
                                </li>
                            </ol>
                        </div>

                        <!-- Biaya -->
                        <div
                            class="bg-brand-surface p-8 rounded-xl border border-brand/5"
                        >
                            <h3
                                class="text-lg font-bold text-brand-ink mb-4 pb-2 border-b border-[#C9A227]/30"
                            >
                                Ketentuan Administrasi Biaya
                            </h3>
                            <p class="text-sm text-gray-700 mb-4">
                                Rincian biaya pendidikan dapat berubah
                                menyesuaikan kebijakan lembaga. Silakan
                                konfirmasi ke panitia untuk rincian terbaru.
                            </p>
                            <div class="space-y-3 text-sm text-brand-ink">
                                <div
                                    class="grid grid-cols-[1fr_auto] gap-4 border-b border-brand/10 pb-2"
                                >
                                    <span class="font-medium"
                                        >Biaya pendaftaran awal</span
                                    >
                                    <span class="font-bold"
                                        >Konfirmasi Panitia</span
                                    >
                                </div>
                                <div
                                    class="grid grid-cols-[1fr_auto] gap-4 border-b border-brand/10 pb-2"
                                >
                                    <span class="font-medium"
                                        >SPP per semester</span
                                    >
                                    <span class="font-bold"
                                        >Konfirmasi Panitia</span
                                    >
                                </div>
                                <div
                                    class="grid grid-cols-[1fr_auto] gap-4 border-b border-brand/10 pb-2"
                                >
                                    <span class="font-medium">Biaya OSMB</span>
                                    <span class="font-bold"
                                        >Konfirmasi Panitia</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PENUTUP & CTA -->
                <div class="border-t border-gray-200 pt-12">
                    <div
                        class="bg-brand-surface rounded-2xl border border-brand/10 p-8 sm:p-10 text-center"
                    >
                        <h2
                            class="text-2xl sm:text-3xl font-bold text-brand-ink mb-4"
                        >
                            Mulai Perjalanan Tafaqquh Fiddin Anda
                        </h2>
                        <p
                            class="max-w-2xl mx-auto text-gray-700 leading-relaxed mb-8"
                        >
                            Dapatkan informasi lebih lanjut mengenai program
                            studi PAI, IAT, maupun PGMI dan konsultasikan
                            kebutuhan pendidikan Anda bersama kami.
                        </p>
                        <div class="flex flex-wrap justify-center gap-4">
                            <a
                                href="https://wa.link/jmipl2"
                                class="inline-flex items-center rounded-lg bg-[#C9A227] px-8 py-3 text-sm font-bold text-white transition hover:bg-[#b08d20] shadow-md"
                            >
                                Hubungi Panitia Penerimaan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>

<style scoped>
@keyframes float-slow {
    0%,
    100% {
        transform: translateY(0px) translateX(0px) rotate(0deg);
    }
    33% {
        transform: translateY(-15px) translateX(10px) rotate(5deg);
    }
    66% {
        transform: translateY(10px) translateX(-5px) rotate(-5deg);
    }
}

@keyframes float-medium {
    0%,
    100% {
        transform: translateY(0px) translateX(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-20px) translateX(-15px) rotate(-8deg);
    }
}

@keyframes float-fast {
    0%,
    100% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-12px) rotate(6deg);
    }
}

.animate-float-slow {
    animation: float-slow 8s ease-in-out infinite;
}
.animate-float-medium {
    animation: float-medium 6s ease-in-out infinite;
}
.animate-float-fast {
    animation: float-fast 5s ease-in-out infinite;
}
</style>
