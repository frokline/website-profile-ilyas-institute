<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { programs } from '../data/programs';
</script>

<template>
    <div class="w-full overflow-hidden bg-[#F9F9F9] pb-8">
        <!-- 1. PROGRAM STUDI -->
        <section
            id="program-studi"
            class="relative z-20 -mt-6 rounded-t-[32px] bg-white px-5 py-12 shadow-sm"
        >
            <div class="mb-8">
                <div class="mb-2 flex items-center gap-2">
                    <span class="h-0.5 w-6 bg-[#C9A227]"></span>
                    <p
                        class="text-[10px] font-bold tracking-[0.2em] text-[#C9A227] uppercase"
                    >
                        PROGRAM STUDI
                    </p>
                </div>
                <h2
                    class="max-w-[340px] text-2xl leading-tight font-bold tracking-tight text-brand-ink"
                >
                    Pilih Program Studi yang Sesuai Tujuanmu
                </h2>
            </div>

            <div class="space-y-5">
                <Link
                    v-for="program in programs"
                    :key="program.code"
                    :href="program.href"
                    class="group block overflow-hidden rounded-3xl border border-gray-100 bg-white shadow-[0_4px_20px_rgb(0,0,0,0.04)] transition-all active:scale-[0.98]"
                >
                    <div class="relative h-48 overflow-hidden bg-gray-100">
                        <img
                            :src="program.image"
                            :alt="program.name"
                            class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                        />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"
                        ></div>
                    </div>
                    <div class="relative -translate-y-6 transform p-6 pt-0">
                        <div
                            class="mb-3 flex h-12 w-12 items-center justify-center rounded-2xl border-4 border-white bg-brand text-white shadow-md"
                        >
                            <svg
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                                />
                            </svg>
                        </div>
                        <h3
                            class="text-lg leading-snug font-bold text-brand-ink"
                        >
                            {{ program.name }}
                        </h3>
                        <p
                            class="mt-2 line-clamp-2 text-sm leading-relaxed text-gray-500"
                        >
                            {{ program.description }}
                        </p>
                        <div
                            class="mt-4 flex items-center justify-between border-t border-gray-100 pt-4 text-xs font-bold text-brand"
                        >
                            <span>Lihat Program</span>
                            <span
                                class="flex h-6 w-6 items-center justify-center rounded-full bg-brand/10 text-brand"
                                >→</span
                            >
                        </div>
                    </div>
                </Link>
            </div>
        </section>

        <!-- 2. KENAPA MEMILIH ILYAS INSTITUT (Fokus Hybrid & Pekerja) -->
        <section class="bg-gray-50 px-5 py-12">
            <div class="mb-7">
                <div class="mb-2 flex items-center gap-2">
                    <span class="h-0.5 w-6 bg-[#C9A227]"></span>
                    <p
                        class="text-[10px] font-bold tracking-[0.2em] text-[#C9A227] uppercase"
                    >
                        KENAPA ILYAS?
                    </p>
                </div>
                <h2
                    class="text-2xl leading-tight font-bold tracking-tight text-brand-ink"
                >
                    Keunggulan Ilyas Institut
                </h2>
            </div>

            <div
                class="mb-8 overflow-hidden rounded-3xl border border-gray-100 bg-white shadow-sm"
            >
                <div class="relative h-[220px] overflow-hidden">
                    <img
                        src="/images/kenapa-ilyas.png"
                        alt="Suasana belajar"
                        class="h-full w-full object-cover object-center"
                    />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-brand/90 via-brand/20 to-transparent"
                    ></div>
                    <div class="absolute right-5 bottom-5 left-5">
                        <div
                            class="inline-flex rounded-full bg-white/95 px-4 py-1.5 shadow-md backdrop-blur"
                        >
                            <p
                                class="text-[10px] font-bold tracking-widest text-brand uppercase"
                            >
                                KELAS HYBRID
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <p class="text-sm leading-relaxed text-gray-600">
                        Sistem pembelajaran dirancang sangat fleksibel agar bisa
                        berjalan harmonis bersama aktivitas kerja dan harian
                        Anda.
                    </p>
                </div>
            </div>

            <div class="grid gap-4">
                <div
                    class="rounded-2xl border border-gray-100 bg-white p-5 shadow-sm transition hover:border-brand/30"
                >
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand/10 font-bold text-brand"
                        >
                            01
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-brand-ink">
                                Sistem Hybrid
                            </h3>
                            <p
                                class="mt-1 text-xs leading-relaxed text-gray-500"
                            >
                                Kombinasi kebebasan belajar online dan
                                pengalaman interaktif kelas offline.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-2xl border border-gray-100 bg-white p-5 shadow-sm transition hover:border-brand/30"
                >
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand/10 font-bold text-brand"
                        >
                            02
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-brand-ink">
                                Jadwal Akhir Pekan
                            </h3>
                            <p
                                class="mt-1 text-xs leading-relaxed text-gray-500"
                            >
                                Fokus bekerja di hari kerja. Kuliah hanya di
                                hari Jumat, Sabtu, dan Minggu.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-2xl border border-gray-100 bg-white p-5 shadow-sm transition hover:border-brand/30"
                >
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand/10 font-bold text-brand"
                        >
                            03
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-brand-ink">
                                Biaya Terjangkau
                            </h3>
                            <p
                                class="mt-1 text-xs leading-relaxed text-gray-500"
                            >
                                Pendidikan berkualitas dengan skema pembiayaan
                                yang ramah untuk pekerja.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. SISTEM KULIAH -->
        <section id="sistem-kuliah" class="bg-white px-5 py-12">
            <div class="mb-8">
                <div class="mb-2 flex items-center gap-2">
                    <span class="h-0.5 w-6 bg-[#C9A227]"></span>
                    <p
                        class="text-[10px] font-bold tracking-[0.2em] text-[#C9A227] uppercase"
                    >
                        SISTEM KULIAH
                    </p>
                </div>
                <h2
                    class="text-2xl leading-tight font-bold tracking-tight text-brand-ink"
                >
                    Alur Perkuliahan
                </h2>
            </div>

            <div
                class="mb-12 rounded-3xl border border-gray-100 bg-gray-50 p-6 shadow-sm"
            >
                <div class="space-y-0">
                    <div class="relative flex gap-4 pb-8">
                        <div
                            class="relative z-10 flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand text-xs font-bold text-white shadow-md"
                        >
                            1
                        </div>
                        <div class="pt-1.5">
                            <h3 class="text-sm font-bold text-brand-ink">
                                Pendaftaran & Registrasi
                            </h3>
                        </div>
                        <div
                            class="absolute top-9 left-[17px] h-[calc(100%-20px)] w-[2px] bg-brand/20"
                        ></div>
                    </div>
                    <div class="relative flex gap-4 pb-8">
                        <div
                            class="relative z-10 flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand text-xs font-bold text-white shadow-md"
                        >
                            2
                        </div>
                        <div class="pt-1.5">
                            <h3 class="text-sm font-bold text-brand-ink">
                                Perkuliahan Hybrid (LMS & Tatap Muka)
                            </h3>
                        </div>
                        <div
                            class="absolute top-9 left-[17px] h-[calc(100%-20px)] w-[2px] bg-brand/20"
                        ></div>
                    </div>
                    <div class="relative flex gap-4 pb-8">
                        <div
                            class="relative z-10 flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand text-xs font-bold text-white shadow-md"
                        >
                            3
                        </div>
                        <div class="pt-1.5">
                            <h3 class="text-sm font-bold text-brand-ink">
                                Tugas, Ujian & Evaluasi
                            </h3>
                        </div>
                        <div
                            class="absolute top-9 left-[17px] h-[calc(100%-20px)] w-[2px] bg-brand/20"
                        ></div>
                    </div>
                    <div class="relative flex gap-4">
                        <div
                            class="relative z-10 flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand text-xs font-bold text-white shadow-md"
                        >
                            4
                        </div>
                        <div class="pt-1.5">
                            <h3 class="text-sm font-bold text-brand-ink">
                                Skripsi & Wisuda
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dashboard Showcase -->
            <div
                class="overflow-hidden rounded-3xl border border-gray-100 bg-gray-50 shadow-md"
            >
                <div class="border-b border-gray-200 bg-white px-5 py-4">
                    <div class="flex items-center justify-between gap-3">
                        <div>
                            <p
                                class="text-[10px] font-bold tracking-[0.18em] text-[#C9A227] uppercase"
                            >
                                PLATFORM AKADEMIK
                            </p>
                            <h3 class="mt-1 text-base font-bold text-brand-ink">
                                Dashboard Perkuliahan
                            </h3>
                        </div>
                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand/10 text-brand"
                        >
                            <svg
                                class="h-5 w-5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <rect
                                    x="3"
                                    y="4"
                                    width="18"
                                    height="16"
                                    rx="2"
                                ></rect>
                                <path stroke-linecap="round" d="M3 9h18"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="px-5 pt-5 pb-2">
                    <div
                        class="relative overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm"
                    >
                        <div
                            class="flex items-center justify-center bg-white p-3"
                        >
                            <img
                                src="/images/dashboard-mockup.png"
                                alt="Dashboard LMS"
                                class="block h-auto max-h-[250px] w-full object-contain object-center"
                            />
                        </div>
                    </div>
                </div>

                <div class="p-5">
                    <h4
                        class="mb-3 text-[11px] font-bold tracking-wider text-gray-500 uppercase"
                    >
                        Fitur Dashboard
                    </h4>
                    <div class="grid grid-cols-2 gap-3">
                        <div
                            class="flex items-center gap-2 rounded-xl border border-gray-100 bg-white px-3 py-2.5 text-xs font-semibold text-gray-700 shadow-sm"
                        >
                            <span class="text-brand">✓</span> Jadwal Kuliah
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-xl border border-gray-100 bg-white px-3 py-2.5 text-xs font-semibold text-gray-700 shadow-sm"
                        >
                            <span class="text-brand">✓</span> Materi & Tugas
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-xl border border-gray-100 bg-white px-3 py-2.5 text-xs font-semibold text-gray-700 shadow-sm"
                        >
                            <span class="text-brand">✓</span> Ujian Online
                        </div>
                        <div
                            class="flex items-center gap-2 rounded-xl border border-gray-100 bg-white px-3 py-2.5 text-xs font-semibold text-gray-700 shadow-sm"
                        >
                            <span class="text-brand">✓</span> Presensi
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scholarship Showcase -->
            <div
                class="relative mt-8 overflow-hidden rounded-3xl bg-brand text-white shadow-lg"
            >
                <div
                    class="relative min-h-[240px] overflow-hidden bg-[#064E3B]"
                >
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-[#064E3B] via-[#064E3B]/80 to-transparent"
                    ></div>
                    <img
                        src="/images/remove.png"
                        alt="Beasiswa"
                        class="absolute right-0 bottom-0 h-[220px] w-[65%] object-contain object-right-bottom"
                    />

                    <div
                        class="relative z-10 flex min-h-[240px] w-[70%] flex-col justify-center px-6 py-6"
                    >
                        <div
                            class="mb-3 inline-flex w-fit rounded-full bg-[#C9A227] px-3 py-1.5 text-[10px] font-bold tracking-wider text-white uppercase shadow-sm"
                        >
                            BEASISWA
                        </div>
                        <h3
                            class="text-xl leading-tight font-bold tracking-tight"
                        >
                            Kuliah dengan Beasiswa
                        </h3>
                        <p class="mt-2 text-xs leading-relaxed text-gray-200">
                            Tersedia program beasiswa hingga lulus sesuai
                            ketentuan.
                        </p>
                    </div>
                </div>
                <div class="border-t border-white/10 bg-[#043326] p-4">
                    <a
                        href="#beasiswa"
                        class="block w-full rounded-xl bg-[#C9A227] px-4 py-3.5 text-center text-sm font-bold text-white shadow-md transition active:bg-[#b08d20]"
                    >
                        Lihat Persyaratan →
                    </a>
                </div>
            </div>
        </section>

        <!-- 4. DOSEN & PENGAJAR -->
        <section class="bg-[#F8F7F2] px-5 py-12 md:px-10 lg:py-16">
            <div class="mx-auto max-w-6xl">
                <!-- Header -->
                <div class="mb-10 flex flex-col items-start">
                    <div class="mb-3 flex items-center gap-3">
                        <span
                            class="h-0.5 w-8 rounded-full bg-[#C9A227]"
                        ></span>
                        <p
                            class="text-xs font-bold tracking-[0.25em] text-[#C9A227] uppercase"
                        >
                            Pengajar
                        </p>
                    </div>
                    <h2
                        class="text-3xl leading-tight font-extrabold text-[#064E3B] md:text-4xl"
                    >
                        Dosen Pengampu
                    </h2>
                </div>

                <!-- Grid Kartu Dosen -->
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Kartu 1 -->
                    <article
                        class="group flex items-center gap-5 rounded-2xl border border-gray-100 bg-white p-5 shadow-[0_8px_30px_rgb(0,0,0,0.06)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_40px_rgb(0,0,0,0.1)]"
                    >
                        <div
                            class="relative h-20 w-20 shrink-0 overflow-hidden rounded-full bg-[#0523A6] ring-4 ring-gray-50 md:h-24 md:w-24"
                        >
                            <img
                                src="/images/hilya-adilah.png"
                                alt="Foto Hilya Adilah"
                                class="h-full w-full object-cover object-top transition-transform duration-500 group-hover:scale-110"
                            />
                        </div>
                        <div class="flex flex-1 flex-col justify-center">
                            <p
                                class="mb-1 text-[11px] font-bold tracking-wider text-[#C9A227] uppercase"
                            >
                                Dosen Pengampu
                            </p>
                            <h3
                                class="text-[15px] leading-snug font-bold text-[#0A2540]"
                            >
                                Hilya Adilah., S.Psi., M.Pd.
                            </h3>
                        </div>
                    </article>

                    <!-- Kartu 2 -->
                    <article
                        class="group flex items-center gap-5 rounded-2xl border border-gray-100 bg-white p-5 shadow-[0_8px_30px_rgb(0,0,0,0.06)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_40px_rgb(0,0,0,0.1)]"
                    >
                        <div
                            class="relative h-20 w-20 shrink-0 overflow-hidden rounded-full bg-[#0523A6] ring-4 ring-gray-50 md:h-24 md:w-24"
                        >
                            <img
                                src="/images/nasyirul-lubab.png"
                                alt="Foto KH. Nasyirul Lubab"
                                class="h-full w-full object-cover object-top transition-transform duration-500 group-hover:scale-110"
                            />
                        </div>
                        <div class="flex flex-1 flex-col justify-center">
                            <p
                                class="mb-1 text-[11px] font-bold tracking-wider text-[#C9A227] uppercase"
                            >
                                Dosen Pengampu
                            </p>
                            <h3
                                class="text-[15px] leading-snug font-bold text-[#0A2540]"
                            >
                                KH. Nasyirul Lubab., Lc., M.A.
                            </h3>
                        </div>
                    </article>

                    <!-- Kartu 3 -->
                    <article
                        class="group flex items-center gap-5 rounded-2xl border border-gray-100 bg-white p-5 shadow-[0_8px_30px_rgb(0,0,0,0.06)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_40px_rgb(0,0,0,0.1)]"
                    >
                        <div
                            class="relative h-20 w-20 shrink-0 overflow-hidden rounded-full bg-[#0523A6] ring-4 ring-gray-50 md:h-24 md:w-24"
                        >
                            <img
                                src="/images/muhammad-aini.png"
                                alt="Foto H. Muhammad Aini"
                                class="h-full w-full object-cover object-top transition-transform duration-500 group-hover:scale-110"
                            />
                        </div>
                        <div class="flex flex-1 flex-col justify-center">
                            <p
                                class="mb-1 text-[11px] font-bold tracking-wider text-[#C9A227] uppercase"
                            >
                                Dosen Pengampu
                            </p>
                            <h3
                                class="text-[15px] leading-snug font-bold text-[#0A2540]"
                            >
                                H. Muhammad Aini., S.Pd.I, M.M.
                            </h3>
                        </div>
                    </article>
                </div>

                <!-- Tombol Call to Action -->
                <div class="mt-10 flex justify-center md:justify-start">
                    <a
                        href="/tentang/dosen-staff"
                        class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-[#064E3B] bg-transparent px-8 py-3 text-sm font-bold text-[#064E3B] transition-all duration-300 hover:bg-[#064E3B] hover:text-white focus:ring-4 focus:ring-[#064E3B]/20"
                    >
                        Lihat Semua Dosen
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- 5. KAMPUS MERDEKA & LOKASI -->
        <section
            class="relative z-10 -mt-6 rounded-t-[32px] bg-white px-5 py-12 shadow-[0_-4px_20px_rgb(0,0,0,0.02)]"
        >
            <div class="mb-10 grid gap-4">
                <div
                    class="flex items-center gap-4 rounded-2xl border border-gray-100 bg-gray-50 p-4 shadow-sm"
                >
                    <div
                        class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-white shadow-sm"
                    >
                        <img
                            src="/images/kampus-merdeka.png"
                            alt="Kampus Merdeka"
                            class="h-10 w-auto object-contain"
                        />
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-gray-900">
                            Kampus Merdeka
                        </h3>
                        <p
                            class="mt-0.5 text-[11px] leading-relaxed text-gray-500"
                        >
                            Mendukung penuh program MBKM.
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center gap-4 rounded-2xl border border-gray-100 bg-gray-50 p-4 shadow-sm"
                >
                    <div
                        class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-white shadow-sm"
                    >
                        <img
                            src="/images/akreditasi-baik.png"
                            alt="Akreditasi Baik"
                            class="h-10 w-auto object-contain"
                        />
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-gray-900">
                            Akreditasi Baik
                        </h3>
                        <p
                            class="mt-0.5 text-[11px] leading-relaxed text-gray-500"
                        >
                            Telah terakreditasi oleh BAN-PT.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mb-6">
                <div class="mb-2 flex items-center gap-2">
                    <span class="h-0.5 w-6 bg-[#C9A227]"></span>
                    <p
                        class="text-[10px] font-bold tracking-[0.2em] text-[#C9A227] uppercase"
                    >
                        INFORMASI
                    </p>
                </div>
                <h2 class="text-2xl leading-tight font-bold text-brand-ink">
                    Lokasi Kampus
                </h2>
            </div>

            <div
                class="overflow-hidden rounded-3xl border border-gray-200 bg-white shadow-md"
            >
                <div class="p-5">
                    <h3 class="text-base font-bold text-gray-900">
                        Ilyas Institut
                    </h3>
                    <p class="mt-1 text-xs leading-relaxed text-gray-500">
                        Jl. Trans Kalimantan KM 9,3 Komp. Bumi Angkasa Mandiri
                        RT 05, Ruko No.3 4, Handil Bakti, Kec. Alalak, Kabupaten
                        Barito Kuala, Kalimantan Selatan 70582
                    </p>
                    <a
                        href="https://maps.app.goo.gl/HTtzYQA9D6JvFwCGA"
                        target="_blank"
                        class="mt-4 flex w-full items-center justify-center rounded-xl bg-brand px-4 py-3 text-sm font-bold text-white shadow-sm transition active:scale-95"
                    >
                        Buka di Maps
                    </a>
                </div>
                <div class="h-56 w-full bg-gray-200">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.545747168674!2d114.609752!3d-3.2502350999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de43d0522fc467b%3A0x1b1fae9cdbbc3fcc!2sPT.%20AL-%20ILYAS%20RIYAL%20BAROKAH!5e1!3m2!1sid!2sid!4v1790919545446!5m2!1sid!2sid"
                        width="100%"
                        height="100%"
                        style="border: 0"
                        loading="lazy"
                    ></iframe>
                </div>
            </div>
        </section>
    </div>
</template>
