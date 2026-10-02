<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import PublicLayout from "@/layouts/PublicLayout.vue";
</script>

<template>
    <Head title="Informasi Beasiswa - Ilyas institut" />

    <PublicLayout>
        <!-- 1. HERO SECTION (DIROMBAK TOTAL: Poster/Banner Utama Tanpa Potong) -->
        <section class="bg-brand pt-12 pb-16 lg:pt-16 lg:pb-24 overflow-hidden">
            <div class="mx-auto max-w-5xl px-6 sm:px-8">
                <!-- Judul Header -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center gap-2 mb-3">
                        <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                        <span
                            class="text-xs font-bold tracking-[0.25em] text-[#C9A227] uppercase"
                        >
                            PROGRAM UNGGULAN
                        </span>
                        <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                    </div>
                    <h1
                        class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight drop-shadow-md"
                    >
                        Penerimaan Beasiswa Ilyas institut 2026
                    </h1>
                    <p
                        class="mt-3 text-sm sm:text-base text-white/80 max-w-2xl mx-auto"
                    >
                        Informasi resmi jalur beasiswa kuliah gratis program S1
                        online Ilyas institut.
                    </p>
                </div>

                <!-- Container Poster / Banner (Diatur agar gambar tampil 100% utuh tanpa terpotong) -->
                <div
                    class="relative w-full rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl border border-white/20 bg-brand-surface/10 p-2 sm:p-4 backdrop-blur-sm"
                >
                    <img
                        src="/images/beasiswa.png"
                        alt="Banner Beasiswa Ilyas institut"
                        class="w-full h-auto object-contain rounded-xl sm:rounded-2xl mx-auto block"
                    />
                </div>
            </div>
        </section>

        <!-- 2. KONTEN UTAMA HALAMAN BEASISWA (Gaya Dokumen Resmi) -->
        <section class="bg-white py-16 sm:py-24">
            <div class="mx-auto max-w-5xl px-6 sm:px-8 space-y-16">
                <!-- A. PENGANTAR / SEKILAS BEASISWA -->
                <div>
                    <div class="inline-flex items-center gap-2 mb-2">
                        <span
                            class="text-xs font-bold tracking-[0.25em] text-[#C9A227] uppercase"
                            >INFORMASI RESMI</span
                        >
                    </div>
                    <h2
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-6"
                    >
                        Sekilas Tentang Beasiswa Ilyas institut
                    </h2>
                    <p
                        class="text-base text-gray-700 leading-relaxed text-justify mb-4"
                    >
                        Ilyas institut berkomitmen untuk memperluas akses
                        pendidikan tinggi ilmu syar'i bagi masyarakat luas yang
                        memiliki semangat belajar tinggi namun terkendala faktor
                        biaya. Melalui program <strong>Full Beasiswa</strong>,
                        lembaga menyediakan kuota khusus bagi calon mahasiswa
                        terpilih setiap tahun akademik.
                    </p>
                    <p
                        class="text-base text-gray-700 leading-relaxed text-justify"
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
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Kuota Penerimaan Beasiswa
                    </h2>
                    <div class="grid gap-6 md:grid-cols-2">
                        <!-- Kuota Laki-laki -->
                        <div
                            class="bg-brand-surface p-8 rounded-xl border border-brand/10 flex items-center gap-6 shadow-sm"
                        >
                            <div
                                class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-brand text-[#C9A227] text-2xl font-bold shadow-md"
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
                                    class="text-3xl font-extrabold text-brand-ink mt-1"
                                >
                                    3 Orang
                                </h3>
                                <p class="text-xs text-gray-600 mt-1">
                                    Khusus Pendaftar Laki-laki Terpilih
                                </p>
                            </div>
                        </div>

                        <!-- Kuota Perempuan -->
                        <div
                            class="bg-brand-surface p-8 rounded-xl border border-brand/10 flex items-center gap-6 shadow-sm"
                        >
                            <div
                                class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-[#C9A227]/10 text-[#C9A227] text-2xl font-bold shadow-md"
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
                                    class="text-3xl font-extrabold text-brand-ink mt-1"
                                >
                                    3 Orang
                                </h3>
                                <p class="text-xs text-gray-600 mt-1">
                                    Khusus Pendaftar Perempuan Terpilih
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- C. FASILITAS BEASISWA -->
                <div>
                    <h2
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Fasilitas Penerima Beasiswa
                    </h2>
                    <div class="grid gap-6 md:grid-cols-3">
                        <div
                            class="bg-brand-surface p-6 rounded-xl border border-brand/5 text-center shadow-sm"
                        >
                            <div
                                class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-[#C9A227] text-white font-bold text-lg mb-4 shadow-sm"
                            >
                                1
                            </div>
                            <h3 class="text-lg font-bold text-brand-ink mb-2">
                                Bebas Uang Pangkal
                            </h3>
                            <p class="text-sm text-gray-600">
                                Dibebaskan dari seluruh komponen biaya
                                pengembangan dan pendaftaran awal.
                            </p>
                        </div>
                        <div
                            class="bg-brand-surface p-6 rounded-xl border border-brand/5 text-center shadow-sm"
                        >
                            <div
                                class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-[#C9A227] text-white font-bold text-lg mb-4 shadow-sm"
                            >
                                2
                            </div>
                            <h3 class="text-lg font-bold text-brand-ink mb-2">
                                Bebas SPP Bulanan
                            </h3>
                            <p class="text-sm text-gray-600">
                                Gratis biaya Sumbangan Pembinaan Pendidikan
                                (SPP) penuh selama masa studi.
                            </p>
                        </div>
                        <div
                            class="bg-brand-surface p-6 rounded-xl border border-brand/5 text-center shadow-sm"
                        >
                            <div
                                class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-[#C9A227] text-white font-bold text-lg mb-4 shadow-sm"
                            >
                                3
                            </div>
                            <h3 class="text-lg font-bold text-brand-ink mb-2">
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
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Persyaratan Beasiswa
                    </h2>
                    <div
                        class="bg-brand-surface p-8 sm:p-10 rounded-2xl border border-brand/10 shadow-sm"
                    >
                        <ul
                            class="space-y-4 text-sm sm:text-base text-gray-700 leading-relaxed"
                        >
                            <li class="flex items-start gap-3">
                                <span class="text-[#C9A227] font-bold mt-0.5"
                                    >✓</span
                                >
                                Warga Negara Indonesia (WNI).
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#C9A227] font-bold mt-0.5"
                                    >✓</span
                                >
                                Lulusan SMA / SMK / MA / Sederajat (atau Paket
                                C).
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#C9A227] font-bold mt-0.5"
                                    >✓</span
                                >
                                Laki-laki & Perempuan.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#C9A227] font-bold mt-0.5"
                                    >✓</span
                                >
                                Memiliki Niat & Kesungguhaan untuk Melanjutkan
                                Pendidikan Tingi.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#C9A227] font-bold mt-0.5"
                                    >✓</span
                                >
                                Bersedia Mengikuti Seluruh Kegiatan Perkuliahan
                                Baik Online Maupun Ofline.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#C9A227] font-bold mt-0.5"
                                    >✓</span
                                >
                                Bersedia Mengikuti Tata Tertip & Aturan Akademik
                                ILYAS INSTITUT.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#C9A227] font-bold mt-0.5"
                                    >✓</span
                                >
                                Tidak Sedang Menerima Beasiswa Penuh di Lembaga
                                Lain.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#C9A227] font-bold mt-0.5"
                                    >✓</span
                                >
                                Memiliki Komitmen untuk Menyelesaikan Studi
                                Sampai Lulus.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#C9A227] font-bold mt-0.5"
                                    >✓</span
                                >
                                Diutamakan Memiliki Minat Dalam Bidang
                                Pendidikan, Ilmu Agama, Dakwah & Pengabdian
                                Masyarakat.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#C9A227] font-bold mt-0.5"
                                    >✓</span
                                >
                                Domisili Kalimantan Selatan terutama Batola,
                                Banjarmasin, Banjarbaru dan sekitarnya.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#C9A227] font-bold mt-0.5"
                                    >✓</span
                                >
                                Usia Maksimal 23 Tahun.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#C9A227] font-bold mt-0.5"
                                    >✓</span
                                >
                                Diutamakan dari Kalangan Keluarga yang Kurang
                                Mampu.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[#C9A227] font-bold mt-0.5"
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
                        class="bg-brand rounded-2xl p-8 sm:p-10 text-center text-white shadow-xl relative overflow-hidden"
                    >
                        <h2
                            class="text-2xl sm:text-3xl font-bold mb-4 relative z-10"
                        >
                            Tertarik Mengikuti Program Beasiswa?
                        </h2>
                        <p
                            class="max-w-2xl mx-auto text-white/85 leading-relaxed mb-8 relative z-10"
                        >
                            Kuota sangat terbatas. Segera hubungi panitia
                            penerimaan melalui WhatsApp untuk konsultasi
                            pendaftaran jalur beasiswa.
                        </p>
                        <div
                            class="flex flex-wrap justify-center gap-4 relative z-10"
                        >
                            <a
                                href="https://wa.me/628214834449"
                                target="_blank"
                                class="inline-flex items-center rounded-full bg-[#C9A227] px-8 py-3 text-sm font-bold text-white transition hover:bg-[#b08d20] shadow-md"
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
