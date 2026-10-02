<script setup lang="ts">
// Komponen HeroSection
</script>

<template>
    <section aria-labelledby="hero-title" class="relative flex w-full flex-col">
        <!-- BAGIAN ATAS: Area Gambar Latar & Teks -->
        <div
            class="relative flex min-h-[600px] w-full items-center bg-[#0d1712] lg:min-h-[650px]"
        >
            <!-- 1. Gambar Latar Belakang (Mahasiswa) -->
            <div class="absolute inset-0 z-0">
                <img
                    src="/images/backgroun-utama.png"
                    alt="Mahasiswa belajar Ilyas institut"
                    class="h-full w-full object-cover object-right sm:object-center"
                />
            </div>

            <!-- 2. Lapisan Gradasi Hijau & Motif (Dibatasi lebarnya max 50-55% di layar besar agar tidak ke tengah) -->
            <div
                class="absolute inset-y-0 left-0 z-0 w-full bg-gradient-to-r from-brand via-brand/90 to-transparent sm:w-2/3 lg:w-[52%]"
            >
                <!-- Pola Motif Bintang Islami Modern (Eksklusif, besar, dan aman di sisi kiri) -->
                <svg
                    class="absolute inset-0 z-0 h-full w-full opacity-15 mix-blend-soft-light [mask-image:linear-gradient(to_right,black_30%,transparent_80%)]"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <defs>
                        <pattern
                            id="islamic-motif"
                            x="0"
                            y="0"
                            width="50"
                            height="50"
                            patternUnits="userSpaceOnUse"
                        >
                            <g
                                stroke="currentColor"
                                stroke-width="1.1"
                                fill="none"
                                class="text-white"
                            >
                                <!-- Lingkaran aksen tengah -->
                                <circle cx="25" cy="25" r="8" />
                                <!-- Bintang Sudut Delapan Utama -->
                                <polygon
                                    points="25,5 29,18 42,14 32,25 42,36 29,32 25,45 21,32 8,36 18,25 8,14 21,18"
                                />
                                <!-- Kotak Rotasi Luar (Pengikat Pola) -->
                                <rect
                                    x="10"
                                    y="10"
                                    width="30"
                                    height="30"
                                    transform="rotate(45 25 25)"
                                    stroke-width="0.8"
                                />
                                <!-- Garis Sambung Antar Ubin -->
                                <line x1="25" y1="0" x2="25" y2="5" />
                                <line x1="25" y1="45" x2="25" y2="50" />
                                <line x1="0" y1="25" x2="5" y2="25" />
                                <line x1="45" y1="25" x2="50" y2="25" />
                            </g>
                        </pattern>
                    </defs>
                    <rect
                        x="0"
                        y="0"
                        width="100%"
                        height="100%"
                        fill="url(#islamic-motif)"
                    ></rect>
                </svg>
            </div>

            <!-- 3. Konten Teks & Tombol -->
            <div
                class="relative z-10 mx-auto w-full max-w-7xl px-6 py-20 sm:px-8 lg:px-12"
            >
                <div class="max-w-2xl">
                    <p
                        class="mb-4 text-xs font-bold tracking-[0.2em] text-white/90 uppercase"
                    >
                        Kuliah Online Ilmu Syar'i
                    </p>

                    <h1
                        id="hero-title"
                        class="text-4xl leading-[1.15] font-bold tracking-tight text-white sm:text-5xl lg:text-[3.5rem]"
                    >
                        Menuntut ilmu.<br />
                        Menumbuhkan iman.<br />
                        Membangun masa depan.
                    </h1>

                    <p class="mt-6 max-w-xl text-lg leading-8 text-white/90">
                        Pilihan program pendidikan Islam dengan pembelajaran
                        online yang dapat berjalan bersama aktivitas Anda.
                    </p>

                    <div class="mt-10 flex flex-wrap items-center gap-4">
                        <a
                            href="#program-studi"
                            class="inline-flex min-h-12 items-center justify-center rounded bg-white px-7 py-3 text-sm font-semibold text-brand-ink transition-colors hover:bg-gray-100"
                        >
                            Lihat Program Studi
                            <span aria-hidden="true" class="ml-2">→</span>
                        </a>

                        <a
                            href="#sistem-kuliah"
                            class="inline-flex min-h-12 items-center justify-center rounded border border-white/50 bg-transparent px-7 py-3 text-sm font-semibold text-white transition-colors hover:bg-white/10"
                        >
                            Kenali Sistem Kuliah
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- BAGIAN BAWAH: Baris Ikon Keunggulan -->
        <div class="relative z-20 border-b border-brand/10 bg-white shadow-sm">
            <div
                class="mx-auto flex max-w-7xl flex-col items-start gap-6 px-6 py-8 md:flex-row md:flex-wrap md:items-center md:justify-between sm:px-8 lg:px-12"
            >
                <div class="flex items-center gap-4 text-brand-ink">
                    <svg
                        class="h-8 w-8 text-brand"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"
                        />
                    </svg>
                    <span class="text-sm font-medium">Pembelajaran online</span>
                </div>

                <div class="hidden h-8 w-px bg-brand/20 md:block"></div>

                <div class="flex items-center gap-4 text-brand-ink">
                    <svg
                        class="h-8 w-8 text-brand"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                    </svg>
                    <span class="text-sm font-medium"
                        >Waktu belajar fleksibel</span
                    >
                </div>

                <div class="hidden h-8 w-px bg-brand/20 md:block"></div>

                <div class="flex items-center gap-4 text-brand-ink">
                    <svg
                        class="h-8 w-8 text-brand"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"
                        />
                    </svg>
                    <span class="text-sm font-medium"
                        >Program studi terarah</span
                    >
                </div>

                <div class="hidden h-8 w-px bg-brand/20 lg:block"></div>

                <div class="flex items-center gap-4 text-brand-ink">
                    <svg
                        class="h-8 w-8 text-brand"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"
                        />
                    </svg>
                    <span class="text-sm font-medium">Nilai-nilai Islami</span>
                </div>
            </div>
        </div>
    </section>
</template>
