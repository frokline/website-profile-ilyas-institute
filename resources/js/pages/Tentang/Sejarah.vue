<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
</script>

<template>
    <Head title="Sejarah - Ilyas institut" />

    <PublicLayout>
        <!-- 1. HERO SECTION -->
        <section
            class="relative flex items-center justify-center overflow-hidden pt-32 pb-24 lg:pt-48 lg:pb-36"
        >
            <!-- Gambar Background -->
            <div class="absolute inset-0 z-0">
                <img
                    src="/images/visi-mis.png"
                    alt="Mahasiswa Ilyas institut Belajar"
                    class="h-full w-full object-cover object-center"
                />
                <div
                    class="absolute inset-0 bg-brand/75 mix-blend-multiply"
                ></div>
                <div class="absolute inset-0 bg-black/40"></div>
            </div>

            <!-- Teks Judul -->
            <div
                class="relative z-10 mx-auto max-w-7xl px-6 text-center sm:px-8 lg:px-12"
            >
                <div class="mb-4 inline-flex items-center gap-2">
                    <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                    <span
                        class="text-xs font-bold tracking-[0.2em] text-[#C9A227] uppercase drop-shadow-md"
                        >TENTANG KAMI</span
                    >
                    <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                </div>
                <h1
                    class="text-4xl font-bold tracking-tight text-white drop-shadow-xl sm:text-5xl lg:text-6xl"
                >
                    Sejarah Institusi
                </h1>
                <p
                    class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-white/90 drop-shadow-md"
                >
                    Jejak langkah dan tonggak sejarah perjalanan ilyas dalam
                    mengabdi untuk pendidikan islam di era digital.
                </p>
            </div>
        </section>
        <!-- 2. BAGIAN TIMELINE (GARIS WAKTU) -->
        <section class="relative bg-white py-24 sm:py-28">
            <div class="mx-auto max-w-4xl px-6 sm:px-8 lg:px-12">
                <div
                    class="relative space-y-16 border-l-2 border-[#C9A227]/30 pl-8 sm:pl-12"
                >
                    <!-- Tahun 1: Awal Pendirian -->
                    <div class="relative">
                        <div
                            class="absolute top-1 -left-[41px] flex h-5 w-5 items-center justify-center rounded-full border-4 border-[#C9A227] bg-white shadow-sm sm:-left-[57px]"
                        ></div>

                        <div
                            class="mb-4 inline-flex items-center rounded-full bg-brand/10 px-4 py-1.5 text-sm font-bold text-brand"
                        >
                            Tahun 2020
                        </div>
                        <h3 class="text-2xl font-bold text-brand-ink">
                            Awal Mula Pendirian
                        </h3>
                        <p
                            class="mt-3 text-base leading-relaxed text-brand-ink/75"
                        >
                            Ilyas institut bermula dari sebuah gagasan majelis
                            taklim kecil yang dipimpin oleh H. Muhammad Riza,
                            S.Pd., M.Pd., M.A. Tingginya antusiasme masyarakat
                            untuk mendalami ilmu syar'i secara terstruktur
                            mendorong didirikannya Yayasan Pendidikan Ilyas
                            sebagai langkah awal legalitas institusi.
                        </p>
                    </div>

                    <!-- Tahun 2: Transformasi Digital -->
                    <div class="relative">
                        <div
                            class="absolute top-1 -left-[41px] flex h-5 w-5 items-center justify-center rounded-full border-4 border-[#C9A227] bg-white shadow-sm sm:-left-[57px]"
                        ></div>

                        <div
                            class="mb-4 inline-flex items-center rounded-full bg-brand/10 px-4 py-1.5 text-sm font-bold text-brand"
                        >
                            Tahun 2022
                        </div>
                        <h3 class="text-2xl font-bold text-brand-ink">
                            Transformasi ke Pembelajaran Digital
                        </h3>
                        <p
                            class="mt-3 text-base leading-relaxed text-brand-ink/75"
                        >
                            Menghadapi perubahan zaman dan keterbatasan jarak
                            dari para penuntut ilmu di berbagai daerah, Ilyas
                            institut melakukan lompatan besar dengan meluncurkan
                            sistem
                            <span class="font-semibold text-brand italic"
                                >Learning Management System (LMS)</span
                            >. Sistem ini memungkinkan mahasiswa mengikuti
                            perkuliahan secara
                            <span class="italic">full-online</span> tanpa
                            mengurangi kualitas interaksi akademik.
                        </p>
                    </div>

                    <!-- Tahun 3: Perluasan Program Studi -->
                    <div class="relative">
                        <div
                            class="absolute top-1 -left-[41px] flex h-5 w-5 items-center justify-center rounded-full border-4 border-[#C9A227] bg-white shadow-sm sm:-left-[57px]"
                        ></div>

                        <div
                            class="mb-4 inline-flex items-center rounded-full bg-brand/10 px-4 py-1.5 text-sm font-bold text-brand"
                        >
                            Tahun 2024
                        </div>
                        <h3 class="text-2xl font-bold text-brand-ink">
                            Perluasan Program Studi
                        </h3>
                        <p
                            class="mt-3 text-base leading-relaxed text-brand-ink/75"
                        >
                            Setelah sukses dengan program PAI, institut resmi
                            membuka program studi Ilmu Al-Qur'an dan Tafsir
                            (IAT) serta Pendidikan Guru Madrasah Ibtidaiyah
                            (PGMI). Pada tahun ini pula, Ilyas institut menjalin
                            berbagai kemitraan strategis dengan institusi
                            pendidikan internasional.
                        </p>
                    </div>

                    <!-- Tahun 4: Masa Kini & Masa Depan -->
                    <div class="relative">
                        <!-- Indikator Bintang untuk titik terbaru -->
                        <div
                            class="absolute top-0.5 -left-[45px] flex h-7 w-7 items-center justify-center rounded-full bg-[#C9A227] text-white shadow-md sm:-left-[61px]"
                        >
                            <svg
                                class="h-4 w-4"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                />
                            </svg>
                        </div>

                        <div
                            class="mb-4 inline-flex items-center rounded-full bg-[#C9A227] px-4 py-1.5 text-sm font-bold text-white shadow-sm"
                        >
                            2026 - Masa Depan
                        </div>
                        <h3 class="text-2xl font-bold text-brand-ink">
                            Menuju Universitas Islam Global
                        </h3>
                        <p
                            class="mt-3 text-base leading-relaxed text-brand-ink/75"
                        >
                            Hari ini, Ilyas institut terus berinovasi untuk
                            mencetak generasi
                            <span class="italic">tafaqquh fiddin</span> yang
                            berakhlak mulia dan berdaya saing global. Kami
                            berkomitmen untuk terus meningkatkan mutu pelayanan
                            dan menargetkan peralihan status menjadi Universitas
                            Islam penuh di tahun 2030.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>
