<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
</script>

<template>
    <Head title="Penerimaan Mahasiswa Baru - Ilyas institut" />

    <PublicLayout>
        <!-- 1. HERO SECTION (DIPERBAIKI: Skala Gambar & Alignment) -->
        <section
            class="relative flex items-end overflow-hidden bg-brand pt-2 lg:pt-2"
        >
            <!-- Efek Motif Islami Background -->
            <div
                class="absolute inset-0 z-0 [mask-image:linear-gradient(to_bottom,black_40%,transparent_100%)] opacity-10 mix-blend-soft-light"
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
                class="relative z-10 mx-auto w-full max-w-7xl px-6 sm:px-8 lg:px-12"
            >
                <!-- PARTIKEL PAMFLET MELAYANG (MENYEBAR & KECIL) -->
                <div
                    class="pointer-events-none absolute inset-y-0 left-0 z-0 hidden w-full sm:block lg:w-1/2"
                >
                    <!-- Pamflet 1 -->
                    <div
                        class="animate-float-slow absolute top-[10%] left-[-2%] w-14 opacity-60 lg:w-20"
                        style="animation-delay: 0s"
                    >
                        <img
                            src="/images/pamflet.png"
                            class="h-auto w-full -rotate-12 rounded-lg border border-white/20 shadow-lg"
                        />
                    </div>
                    <!-- Pamflet 2 -->
                    <div
                        class="animate-float-medium absolute top-[40%] left-[35%] w-10 opacity-40 blur-[2px] lg:w-14"
                        style="animation-delay: 1.2s"
                    >
                        <img
                            src="/images/pamflet4.png"
                            class="h-auto w-full rotate-12 rounded-md border border-white/20 shadow-md"
                        />
                    </div>
                    <!-- Pamflet 3 -->
                    <div
                        class="animate-float-fast absolute bottom-[20%] left-[5%] w-16 opacity-80 lg:w-24"
                        style="animation-delay: 0.7s"
                    >
                        <img
                            src="/images/pamflet3.png"
                            class="h-auto w-full -rotate-6 rounded-lg border border-white/30 shadow-xl"
                        />
                    </div>
                    <!-- Pamflet 4 -->
                    <div
                        class="animate-float-slow absolute top-[25%] left-[20%] w-8 opacity-50 blur-[1px] lg:w-12"
                        style="animation-delay: 2.5s"
                    >
                        <img
                            src="/images/pamflet2.png"
                            class="h-auto w-full rotate-45 rounded-md border border-white/10 shadow-sm"
                        />
                    </div>
                    <!-- Pamflet 5 -->
                    <div
                        class="animate-float-medium absolute top-[75%] left-[30%] w-12 opacity-60 lg:w-16"
                        style="animation-delay: 3.5s"
                    >
                        <img
                            src="/images/beasiswa.png"
                            class="h-auto w-full -rotate-12 rounded-lg border border-white/20 shadow-md"
                        />
                    </div>
                </div>
                <!-- END PARTIKEL PAMFLET -->

                <div
                    class="relative z-10 flex flex-col justify-between lg:flex-row lg:items-end"
                >
                    <!-- ELEMEN MELAYANG DI SEBELAH KIRI -->
                    <!-- Badge Atas: Info Program S1 -->
                    <!-- ELEMEN MELAYANG DI SEBELAH KIRI (REDESAIN PREMIUM) -->
                    <!-- Badge Atas: Info Program S1 -->
                    <div
                        class="absolute top-12 left-2 z-30 hidden cursor-default items-center gap-3.5 rounded-2xl border border-white/60 bg-white/90 px-4 py-3 shadow-[0_8px_30px_rgba(0,0,0,0.08)] ring-1 ring-[#C9A227]/20 backdrop-blur-xl transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_12px_40px_rgba(201,162,39,0.15)] sm:left-6 sm:flex"
                    >
                        <!-- Icon Container Premium -->
                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-[#C9A227]/30 bg-gradient-to-br from-[#C9A227]/20 to-[#C9A227]/5 text-[#C9A227] shadow-inner"
                        >
                            <!-- SVG Academic Cap (Toga) Premium -->
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                class="h-5 w-5 drop-shadow-sm"
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
                                class="text-[11px] font-extrabold tracking-[0.15em] text-brand-ink uppercase"
                            >
                                Kuliah S1 Reguler
                            </p>
                            <p
                                class="mt-0.5 text-[10.5px] font-medium text-gray-500"
                            >
                                PAI, IAT & PGMI Online
                            </p>
                        </div>
                    </div>
                    <div
                        class="relative z-20 order-2 mt-10 flex w-full justify-center lg:order-1 lg:mt-0 lg:w-5/12 lg:justify-start"
                    >
                        <!-- Tampil hanya di layar Desktop (lg ke atas) -->
                        <img
                            src="/images/penerimaan.png"
                            alt="Mahasiswi Ilyas institut"
                            class="relative z-20 hidden w-full max-w-[850px] object-contain object-bottom drop-shadow-2xl sm:w-[85%] lg:-ml-20 lg:block lg:w-[150%]"
                            style="margin-bottom: -1px"
                        />

                        <!-- Tampil hanya di layar HP & Tablet (lg ke bawah) -->
                        <img
                            src="/images/penerimaan.png"
                            alt="Mahasiswi Ilyas institut"
                            class="relative z-20 block w-[90%] max-w-[400px] object-contain object-bottom drop-shadow-xl lg:hidden"
                            style="margin-bottom: -1px"
                        />
                    </div>

                    <!-- KOLOM KANAN: Teks Hero -->
                    <div
                        class="relative z-30 order-1 w-full pt-4 pb-8 text-center lg:order-2 lg:w-7/12 lg:pb-28 lg:pl-16 lg:text-left xl:pl-20"
                    >
                        <div
                            class="mb-6 inline-flex w-full items-center justify-center gap-2 lg:justify-start"
                        >
                            <span
                                class="hidden h-0.5 w-8 bg-[#C9A227] lg:block"
                            ></span>
                            <span
                                class="text-xs font-bold tracking-[0.2em] text-[#C9A227] uppercase drop-shadow-sm"
                                >PENERIMAAN MAHASISWA BARU</span
                            >
                            <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                        </div>

                        <h1
                            class="text-4xl leading-tight font-bold tracking-tight text-white drop-shadow-md sm:text-5xl lg:text-6xl lg:leading-tight"
                        >
                            Wujudkan Cita-Cita<br class="hidden lg:block" />
                            Bersama Kami
                        </h1>

                        <p
                            class="mx-auto mt-6 max-w-xl text-lg leading-relaxed text-white/85 drop-shadow-sm lg:mx-0"
                        >
                            Kuliah 100% fleksibel untuk pekerja & ibu rumah
                            tangga. Daftar sekarang dan mulai perjalanan
                            <em class="font-semibold text-[#C9A227]"
                                >tafaqquh fiddin</em
                            >
                            bersama Ilyas institut.
                        </p>

                        <div
                            class="mt-8 flex flex-wrap justify-center gap-4 lg:justify-start"
                        >
                            <a
                                href="#alur-pendaftaran"
                                class="inline-flex items-center rounded-full bg-[#C9A227] px-6 py-3 text-sm font-semibold text-white shadow-lg transition hover:-translate-y-0.5 hover:bg-[#b08d20]"
                            >
                                Lihat Alur Pendaftaran
                                <span aria-hidden="true" class="ml-2">→</span>
                            </a>
                            <a
                                href="https://wa.link/jmipl2"
                                class="inline-flex items-center rounded-full border border-white/30 bg-white/10 px-6 py-3 text-sm font-semibold text-white shadow-lg backdrop-blur-md transition hover:-translate-y-0.5 hover:bg-white/20"
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
            <div class="mx-auto max-w-5xl space-y-10 px-6 sm:px-8">
                <!-- A. JADWAL PENDAFTARAN -->
                <div>
                    <!-- Tambahan: Jika jarak antara teks kecil "JADWAL PENDAFTARAN" dengan 
                         judul utama di bawahnya juga ingin dirapatkan, ubah mb-4 menjadi mb-2 -->
                    <div class="mb-2 inline-flex items-center gap-2">
                        <span
                            class="text-xs font-bold tracking-[0.25em] text-[#C9A227] uppercase"
                        >
                            JADWAL PENDAFTARAN
                        </span>
                    </div>
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Gelombang Pendaftaran
                    </h2>
                    <p
                        class="mb-8 text-justify text-base leading-relaxed text-gray-700"
                    >
                        Penerimaan mahasiswa baru Ilyas institut diselenggarakan
                        dalam beberapa gelombang. Kuota setiap gelombang
                        bersifat terbatas. Pemilihan gelombang akan memengaruhi
                        administrasi biaya pendaftaran.
                    </p>

                    <div class="grid gap-6 md:grid-cols-3">
                        <!-- Gelombang 1 -->
                        <div
                            class="rounded-xl border border-brand/10 bg-brand-surface p-8"
                        >
                            <h3
                                class="mb-2 border-b border-[#C9A227]/30 pb-2 text-lg font-bold text-brand-ink"
                            >
                                Gelombang 1 (Early Bird)
                            </h3>
                            <ul class="mt-4 space-y-3 text-sm text-gray-700">
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
                            class="relative overflow-hidden rounded-xl bg-brand p-8 shadow-lg"
                        >
                            <!-- Aksen Bintang/Garis di latar -->
                            <div class="absolute top-0 right-0 p-4 opacity-10">
                                <svg
                                    class="h-16 w-16 text-white"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                            </div>
                            <span
                                class="relative z-10 mb-3 inline-block rounded-full bg-[#C9A227] px-3 py-1 text-[10px] font-bold tracking-wider text-white uppercase"
                                >Sedang Dibuka</span
                            >
                            <h3
                                class="relative z-10 mb-2 border-b border-white/20 pb-2 text-lg font-bold text-white"
                            >
                                Gelombang 2 (Reguler)
                            </h3>
                            <ul
                                class="relative z-10 mt-4 space-y-3 text-sm text-white/90"
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
                                class="relative z-10 mt-6 inline-flex w-full items-center justify-center rounded-lg bg-white px-4 py-2 text-sm font-bold text-brand transition hover:bg-gray-100"
                            >
                                Daftar Sekarang
                            </a>
                        </div>

                        <!-- Gelombang 3 -->
                        <div
                            class="rounded-xl border border-brand/10 bg-brand-surface p-8"
                        >
                            <h3
                                class="mb-2 border-b border-[#C9A227]/30 pb-2 text-lg font-bold text-brand-ink"
                            >
                                Gelombang 3 (Akhir)
                            </h3>
                            <ul class="mt-4 space-y-3 text-sm text-gray-700">
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
                    <div class="mb-4 inline-flex items-center gap-2">
                        <span
                            class="text-xs font-bold tracking-[0.25em] text-[#C9A227] uppercase"
                            >TATA CARA</span
                        >
                    </div>
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Alur Pendaftaran Mahasiswa Baru
                    </h2>

                    <div
                        class="relative mt-10 ml-4 space-y-10 border-l-2 border-[#C9A227]/30 pl-8"
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
                                class="absolute top-1 -left-[41px] flex h-6 w-6 items-center justify-center rounded-full border-4 border-[#C9A227] bg-white text-[10px] font-bold text-brand-ink"
                            >
                                {{ i + 1 }}
                            </div>
                            <h3 class="mb-2 text-xl font-bold text-brand-ink">
                                {{ step.title }}
                            </h3>
                            <p
                                class="text-justify leading-relaxed text-gray-700"
                            >
                                {{ step.desc }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- C. SYARAT & KETENTUAN (Grid 2 Kolom) -->
                <div>
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Persyaratan & Ketentuan Biaya
                    </h2>
                    <div class="grid gap-8 md:grid-cols-2">
                        <!-- Syarat -->
                        <div
                            class="rounded-xl border border-brand/5 bg-brand-surface p-8"
                        >
                            <h3
                                class="mb-4 border-b border-[#C9A227]/30 pb-2 text-lg font-bold text-brand-ink"
                            >
                                Berkas Persyaratan Utama
                            </h3>
                            <ol
                                class="list-decimal space-y-3 pl-5 text-sm leading-relaxed text-gray-700"
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
                            class="rounded-xl border border-brand/5 bg-brand-surface p-8"
                        >
                            <h3
                                class="mb-4 border-b border-[#C9A227]/30 pb-2 text-lg font-bold text-brand-ink"
                            >
                                Ketentuan Administrasi Biaya
                            </h3>
                            <p class="mb-4 text-sm text-gray-700">
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
                        class="rounded-2xl border border-brand/10 bg-brand-surface p-8 text-center sm:p-10"
                    >
                        <h2
                            class="mb-4 text-2xl font-bold text-brand-ink sm:text-3xl"
                        >
                            Mulai Perjalanan Tafaqquh Fiddin Anda
                        </h2>
                        <p
                            class="mx-auto mb-8 max-w-2xl leading-relaxed text-gray-700"
                        >
                            Dapatkan informasi lebih lanjut mengenai program
                            studi PAI, IAT, maupun PGMI dan konsultasikan
                            kebutuhan pendidikan Anda bersama kami.
                        </p>
                        <div class="flex flex-wrap justify-center gap-4">
                            <a
                                href="https://wa.link/jmipl2"
                                class="inline-flex items-center rounded-lg bg-[#C9A227] px-8 py-3 text-sm font-bold text-white shadow-md transition hover:bg-[#b08d20]"
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
