<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
</script>

<template>
    <Head title="Informasi Beasiswa - Ilyas institut" />

    <PublicLayout>
        <!-- 1. HERO SECTION (DIROMBAK TOTAL: Poster/Banner Utama Tanpa Potong) -->
        <section class="overflow-hidden bg-brand pt-12 pb-16 lg:pt-16 lg:pb-24">
            <div class="mx-auto max-w-5xl px-6 sm:px-8">
                <!-- Judul Header -->
                <div class="mb-8 text-center">
                    <div class="mb-3 inline-flex items-center gap-2">
                        <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                        <span
                            class="text-xs font-bold tracking-[0.25em] text-[#C9A227] uppercase"
                        >
                            PROGRAM UNGGULAN
                        </span>
                        <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                    </div>
                    <h1
                        class="text-3xl font-bold tracking-tight text-white drop-shadow-md sm:text-4xl lg:text-5xl"
                    >
                        Penerimaan Beasiswa Ilyas institut 2026
                    </h1>
                    <p
                        class="mx-auto mt-3 max-w-2xl text-sm text-white/80 sm:text-base"
                    >
                        Informasi resmi jalur beasiswa kuliah gratis program S1
                        online Ilyas institut.
                    </p>
                </div>

                <!-- Container Poster / Banner (Diatur agar gambar tampil 100% utuh tanpa terpotong) -->
                <div
                    class="relative w-full overflow-hidden rounded-2xl border border-white/20 bg-brand-surface/10 p-2 shadow-2xl backdrop-blur-sm sm:rounded-3xl sm:p-4"
                >
                    <img
                        src="/images/beasiswa.png"
                        alt="Banner Beasiswa Ilyas institut"
                        class="mx-auto block h-auto w-full rounded-xl object-contain sm:rounded-2xl"
                    />
                </div>
            </div>
        </section>

        <!-- 2. KONTEN UTAMA HALAMAN BEASISWA (Gaya Dokumen Resmi) -->
        <section class="bg-white py-16 sm:py-24">
            <div class="mx-auto max-w-5xl space-y-16 px-6 sm:px-8">
                <!-- A. PENGANTAR / SEKILAS BEASISWA -->
                <div>
                    <div class="mb-2 inline-flex items-center gap-2">
                        <span
                            class="text-xs font-bold tracking-[0.25em] text-[#C9A227] uppercase"
                            >INFORMASI RESMI</span
                        >
                    </div>
                    <h2
                        class="mb-6 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Sekilas Tentang Beasiswa Ilyas institut
                    </h2>
                    <p
                        class="mb-4 text-justify text-base leading-relaxed text-gray-700"
                    >
                        Ilyas institut berkomitmen untuk memperluas akses
                        pendidikan tinggi ilmu syar'i bagi masyarakat luas yang
                        memiliki semangat belajar tinggi namun terkendala faktor
                        biaya. Melalui program <strong>Full Beasiswa</strong>,
                        lembaga menyediakan kuota khusus bagi calon mahasiswa
                        terpilih setiap tahun akademik.
                    </p>
                    <p
                        class="text-justify text-base leading-relaxed text-gray-700"
                    >
                        Program ini mencakup pembebasan biaya kuliah secara
                        penuh selama masa studi normal, dengan tetap menjaga
                        standar kualitas akademik dan kedisiplinan berproses
                        dalam sistem pembelajaran digital.
                    </p>
                </div>

                <!-- B. KUOTA & PENERIMAAN (Highlight Cards) -->
                <div>
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Kuota Penerimaan Beasiswa
                    </h2>
                    <div class="grid gap-6 md:grid-cols-2">
                        <!-- Kuota Laki-laki -->
                        <div
                            class="flex items-center gap-6 rounded-xl border border-brand/10 bg-brand-surface p-8 shadow-sm"
                        >
                            <div
                                class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-brand text-2xl font-bold text-[#C9A227] shadow-md"
                            >
                                👨‍🎓
                            </div>
                            <div>
                                <p
                                    class="text-xs font-bold tracking-widest text-brand uppercase"
                                >
                                    Kategori Putra
                                </p>
                                <h3
                                    class="mt-1 text-3xl font-extrabold text-brand-ink"
                                >
                                    3 Orang
                                </h3>
                                <p class="mt-1 text-xs text-gray-600">
                                    Khusus Pendaftar Laki-laki Terpilih
                                </p>
                            </div>
                        </div>

                        <!-- Kuota Perempuan -->
                        <div
                            class="flex items-center gap-6 rounded-xl border border-brand/10 bg-brand-surface p-8 shadow-sm"
                        >
                            <div
                                class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-[#C9A227]/10 text-2xl font-bold text-[#C9A227] shadow-md"
                            >
                                🧕
                            </div>
                            <div>
                                <p
                                    class="text-xs font-bold tracking-widest text-[#C9A227] uppercase"
                                >
                                    Kategori Putri
                                </p>
                                <h3
                                    class="mt-1 text-3xl font-extrabold text-brand-ink"
                                >
                                    3 Orang
                                </h3>
                                <p class="mt-1 text-xs text-gray-600">
                                    Khusus Pendaftar Perempuan Terpilih
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- C. FASILITAS BEASISWA -->
                <div>
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Fasilitas Penerima Beasiswa
                    </h2>
                    <div class="grid gap-6 md:grid-cols-3">
                        <div
                            class="rounded-xl border border-brand/5 bg-brand-surface p-6 text-center shadow-sm"
                        >
                            <div
                                class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-full bg-[#C9A227] text-lg font-bold text-white shadow-sm"
                            >
                                1
                            </div>
                            <h3 class="mb-2 text-lg font-bold text-brand-ink">
                                Bebas Uang Pangkal
                            </h3>
                            <p class="text-sm text-gray-600">
                                Dibebaskan dari seluruh komponen biaya
                                pengembangan dan pendaftaran awal.
                            </p>
                        </div>
                        <div
                            class="rounded-xl border border-brand/5 bg-brand-surface p-6 text-center shadow-sm"
                        >
                            <div
                                class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-full bg-[#C9A227] text-lg font-bold text-white shadow-sm"
                            >
                                2
                            </div>
                            <h3 class="mb-2 text-lg font-bold text-brand-ink">
                                Bebas SPP Bulanan
                            </h3>
                            <p class="text-sm text-gray-600">
                                Gratis biaya Sumbangan Pembinaan Pendidikan
                                (SPP) penuh selama masa studi.
                            </p>
                        </div>
                        <div
                            class="rounded-xl border border-brand/5 bg-brand-surface p-6 text-center shadow-sm"
                        >
                            <div
                                class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-full bg-[#C9A227] text-lg font-bold text-white shadow-sm"
                            >
                                3
                            </div>
                            <h3 class="mb-2 text-lg font-bold text-brand-ink">
                                Status Resmi
                            </h3>
                            <p class="text-sm text-gray-600">
                                Memperoleh hak penuh sebagai mahasiswa penerima
                                beasiswa resmi Ilyas institut.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- D. PERSYARATAN KHUSUS BEASISWA -->
                <div>
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Persyaratan Beasiswa
                    </h2>
                    <div
                        class="rounded-2xl border border-brand/10 bg-brand-surface p-8 shadow-sm sm:p-10"
                    >
                        <ul
                            class="space-y-4 text-sm leading-relaxed text-gray-700 sm:text-base"
                        >
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-[#C9A227]"
                                    >✓</span
                                >
                                Warga Negara Indonesia (WNI).
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-[#C9A227]"
                                    >✓</span
                                >
                                Lulusan SMA / SMK / MA / Sederajat (atau Paket
                                C).
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-[#C9A227]"
                                    >✓</span
                                >
                                Laki-laki & Perempuan.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-[#C9A227]"
                                    >✓</span
                                >
                                Memiliki Niat & Kesungguhaan untuk Melanjutkan
                                Pendidikan Tingi.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-[#C9A227]"
                                    >✓</span
                                >
                                Bersedia Mengikuti Seluruh Kegiatan Perkuliahan
                                Baik Online Maupun Ofline.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-[#C9A227]"
                                    >✓</span
                                >
                                Bersedia Mengikuti Tata Tertip & Aturan Akademik
                                ILYAS INSTITUT.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-[#C9A227]"
                                    >✓</span
                                >
                                Tidak Sedang Menerima Beasiswa Penuh di Lembaga
                                Lain.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-[#C9A227]"
                                    >✓</span
                                >
                                Memiliki Komitmen untuk Menyelesaikan Studi
                                Sampai Lulus.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-[#C9A227]"
                                    >✓</span
                                >
                                Diutamakan Memiliki Minat Dalam Bidang
                                Pendidikan, Ilmu Agama, Dakwah & Pengabdian
                                Masyarakat.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-[#C9A227]"
                                    >✓</span
                                >
                                Domisili Kalimantan Selatan terutama Batola,
                                Banjarmasin, Banjarbaru dan sekitarnya.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-[#C9A227]"
                                    >✓</span
                                >
                                Usia Maksimal 23 Tahun.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-[#C9A227]"
                                    >✓</span
                                >
                                Diutamakan dari Kalangan Keluarga yang Kurang
                                Mampu.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-[#C9A227]"
                                    >✓</span
                                >
                                Bersedia Mengisi Surat Kesepakatan Beasiswa.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- PENUTUP & CTA -->
                <div class="border-t border-gray-200 pt-12">
                    <div
                        class="relative overflow-hidden rounded-2xl bg-brand p-8 text-center text-white shadow-xl sm:p-10"
                    >
                        <h2
                            class="relative z-10 mb-4 text-2xl font-bold sm:text-3xl"
                        >
                            Tertarik Mengikuti Program Beasiswa?
                        </h2>
                        <p
                            class="relative z-10 mx-auto mb-8 max-w-2xl leading-relaxed text-white/85"
                        >
                            Kuota sangat terbatas. Segera hubungi panitia
                            penerimaan melalui WhatsApp untuk konsultasi
                            pendaftaran jalur beasiswa.
                        </p>
                        <div
                            class="relative z-10 flex flex-wrap justify-center gap-4"
                        >
                            <a
                                href="https://wa.me/628214834449"
                                target="_blank"
                                class="inline-flex items-center rounded-full bg-[#C9A227] px-8 py-3 text-sm font-bold text-white shadow-md transition hover:bg-[#b08d20]"
                            >
                                Daftar Beasiswa via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>
