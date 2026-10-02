<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import HeroMobile from '../components/HeroMobile.vue';
import HeroSection from '../components/HeroSection.vue';
import HomeMobileContent from './HomeMobileContent.vue'; // Komponen mobile dipanggil di sini
import { programs } from '../data/programs';
import PublicLayout from '../layouts/PublicLayout.vue';

// Data Dosen untuk Preview di Beranda (Merapikan HTML yang berantakan)
const previewDosen = [
    {
        name: 'Hilya Adilah., S.Psi., S.Pd., M.Pd',
        role: 'Dosen Pengampu',
        subject: 'Akhlak & Psikologi',
        image: '/images/hilya-adilah.png',
    },
    {
        name: 'KH. Nasyirul Lubab., Lc., M.A',
        role: 'Dosen Pengampu',
        subject: "Bahasa Arab & Al-Qur'an",
        image: '/images/nasyirul-lubab.png',
    },
    {
        name: 'KH. Khusni Abdillah., Lc., M.A.',
        role: 'Dosen Pengampu',
        subject: 'Dakwah & Sirah Nabawiyah',
        image: '/images/khusni-abdillah.png',
    },
    {
        name: 'H. Muhammad Aini., S.Pd.I, M.M',
        role: 'Dosen Pengampu',
        subject: 'Kewarganegaraan',
        image: '/images/muhammad-aini.png',
    },
];
</script>

<template>
    <Head title="Beranda">
        <meta
            name="description"
            content="Kenali Ilyas institut dan pilihan program pendidikan Islam berbasis pembelajaran online."
        />
    </Head>

    <PublicLayout>
        <!-- =======================================================
             TAMPILAN HP (MOBILE ONLY)
        ======================================================== -->
        <div class="block lg:hidden">
            <HeroMobile />
            <HomeMobileContent />
        </div>

        <!-- =======================================================
             TAMPILAN LAPTOP (DESKTOP ONLY)
        ======================================================== -->
        <div class="hidden lg:block">
            <HeroSection />

            <!-- Bagian Program Studi -->
            <section
                id="program-studi"
                aria-labelledby="program-heading"
                class="sm:16-24 scroll-mt-24 bg-white py-12"
            >
                <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12">
                    <div
                        class="flex flex-col md:flex-row md:items-end md:justify-between"
                    >
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                                <p
                                    class="text-xs font-bold tracking-[0.2em] text-[#C9A227] uppercase"
                                >
                                    PROGRAM STUDI
                                </p>
                            </div>
                            <h2
                                id="program-heading"
                                class="mt-3 text-3xl font-bold tracking-tight text-brand-ink sm:text-4xl"
                            >
                                Pilih Program Studi yang Sesuai dengan Tujuanmu
                            </h2>
                        </div>
                    </div>

                    <div class="mt-10 grid gap-8 md:grid-cols-3">
                        <Link
                            v-for="program in programs"
                            :key="program.code"
                            :href="program.href"
                            class="group block cursor-pointer overflow-hidden rounded-2xl border border-brand/10 bg-brand-surface transition-all duration-200 hover:-translate-y-1 hover:shadow-lg"
                        >
                            <div
                                class="relative h-48 w-full overflow-hidden bg-gray-100"
                            >
                                <img
                                    :src="program.image"
                                    :alt="program.name"
                                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                />
                            </div>
                            <div class="relative p-6 pt-4">
                                <div
                                    class="absolute -top-8 left-6 flex h-12 w-12 items-center justify-center rounded-full border-2 border-white bg-brand text-white shadow-md"
                                >
                                    <svg
                                        class="h-6 w-6"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                                        />
                                    </svg>
                                </div>
                                <div class="mt-4">
                                    <h3
                                        class="text-lg font-bold text-brand-ink"
                                    >
                                        {{ program.name }}
                                    </h3>
                                    <p
                                        class="mt-3 text-sm leading-6 text-brand-ink/75"
                                    >
                                        {{ program.description }}
                                    </p>
                                    <div
                                        class="mt-6 border-t border-brand/10 pt-4"
                                    >
                                        <span
                                            class="inline-flex items-center gap-1 text-sm font-semibold text-brand group-hover:text-brand-hover"
                                        >
                                            Lihat Program
                                            <span aria-hidden="true">→</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </Link>
                    </div>
                </div>
            </section>

            <!-- Bagian: Kenapa Memilih Ilyas institut? -->
            <section
                id="kenapa-kami"
                class="border-t border-brand/10 bg-white py-12 sm:py-16"
            >
                <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12">
                    <div
                        class="grid items-center gap-12 lg:grid-cols-12 lg:gap-16"
                    >
                        <div class="lg:col-span-6">
                            <div
                                class="relative overflow-hidden rounded-3xl shadow-xl"
                            >
                                <img
                                    src="/images/kenapa-ilyas.png"
                                    alt="Suasana belajar online"
                                    class="h-[400px] w-full object-cover object-center sm:h-[480px]"
                                />
                                <div
                                    class="absolute right-6 bottom-6 rounded-xl bg-white/95 px-5 py-3 shadow-lg backdrop-blur"
                                >
                                    <p
                                        class="text-xs font-bold tracking-wider text-brand uppercase"
                                    >
                                        Kuliah Online
                                    </p>
                                    <p
                                        class="text-sm font-semibold text-brand-ink"
                                    >
                                        Tetap Produktif
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-6">
                            <div class="flex items-center gap-2">
                                <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                                <p
                                    class="text-xs font-bold tracking-[0.2em] text-[#C9A227] uppercase"
                                >
                                    KENAPA ILYAS institut?
                                </p>
                            </div>
                            <h2
                                class="mt-3 text-3xl font-bold tracking-tight text-brand-ink sm:text-4xl"
                            >
                                Kenapa Memilih Ilyas institut?
                            </h2>
                            <div class="mt-8 space-y-6">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-brand text-sm font-bold text-white shadow-sm"
                                    >
                                        01
                                    </div>
                                    <div>
                                        <h3
                                            class="text-lg font-bold text-brand-ink"
                                        >
                                            Full Online
                                        </h3>
                                        <p
                                            class="mt-1 text-sm leading-6 text-brand-ink/75"
                                        >
                                            Belajar dari mana saja, tanpa batas
                                            jarak.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-4">
                                    <div
                                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-brand text-sm font-bold text-white shadow-sm"
                                    >
                                        02
                                    </div>
                                    <div>
                                        <h3
                                            class="text-lg font-bold text-brand-ink"
                                        >
                                            Waktu Belajar Fleksibel
                                        </h3>
                                        <p
                                            class="mt-1 text-sm leading-6 text-brand-ink/75"
                                        >
                                            Atur waktu sesuai dengan
                                            aktivitasmu.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-4">
                                    <div
                                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-brand text-sm font-bold text-white shadow-sm"
                                    >
                                        03
                                    </div>
                                    <div>
                                        <h3
                                            class="text-lg font-bold text-brand-ink"
                                        >
                                            Biaya Terjangkau
                                        </h3>
                                        <p
                                            class="mt-1 text-sm leading-6 text-brand-ink/75"
                                        >
                                            Pendidikan berkualitas dengan biaya
                                            yang lebih ringan.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-4">
                                    <div
                                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-brand text-sm font-bold text-white shadow-sm"
                                    >
                                        04
                                    </div>
                                    <div>
                                        <h3
                                            class="text-lg font-bold text-brand-ink"
                                        >
                                            Berorientasi pada Ilmu dan Amal
                                        </h3>
                                        <p
                                            class="mt-1 text-sm leading-6 text-brand-ink/75"
                                        >
                                            Tidak hanya untuk gelar, tapi juga
                                            untuk kebermanfaatan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bagian: Sistem Kuliah & Banner Beasiswa -->
            <section
                id="sistem-kuliah"
                class="overflow-hidden border-t border-brand/10 bg-white py-12 sm:py-16"
            >
                <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12">
                    <div class="mb-12 max-w-3xl text-left">
                        <div class="flex items-center gap-2">
                            <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                            <p
                                class="text-xs font-bold tracking-[0.2em] text-[#C9A227] uppercase"
                            >
                                SISTEM KULIAH
                            </p>
                        </div>
                        <h2
                            class="mt-3 text-3xl font-bold tracking-tight text-brand-ink sm:text-4xl"
                        >
                            Bagaimana Perkuliahan Berlangsung?
                        </h2>
                    </div>

                    <div class="grid items-center gap-8 lg:grid-cols-12">
                        <div class="overflow-x-auto pb-4 lg:col-span-8">
                            <div
                                class="flex min-w-[750px] items-center justify-between gap-2"
                            >
                                <div
                                    class="flex flex-1 flex-col items-center text-center"
                                >
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-full bg-brand text-sm font-bold text-white shadow-md"
                                    >
                                        1
                                    </div>
                                    <h3
                                        class="mt-3 text-xs font-bold text-brand-ink"
                                    >
                                        Pendaftaran
                                    </h3>
                                </div>
                                <div
                                    class="pb-5 text-2xl font-bold text-brand/60"
                                >
                                    →
                                </div>
                                <div
                                    class="flex flex-1 flex-col items-center text-center"
                                >
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-full bg-brand text-sm font-bold text-white shadow-md"
                                    >
                                        2
                                    </div>
                                    <h3
                                        class="mt-3 text-xs font-bold text-brand-ink"
                                    >
                                        Registrasi
                                    </h3>
                                </div>
                                <div
                                    class="pb-5 text-2xl font-bold text-brand/60"
                                >
                                    →
                                </div>
                                <div
                                    class="flex flex-1 flex-col items-center text-center"
                                >
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-full bg-brand text-sm font-bold text-white shadow-md"
                                    >
                                        3
                                    </div>
                                    <h3
                                        class="mt-3 text-xs font-bold text-brand-ink"
                                    >
                                        Kuliah Online
                                    </h3>
                                </div>
                                <div
                                    class="pb-5 text-2xl font-bold text-brand/60"
                                >
                                    →
                                </div>
                                <div
                                    class="flex flex-1 flex-col items-center text-center"
                                >
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-full bg-brand text-sm font-bold text-white shadow-md"
                                    >
                                        4
                                    </div>
                                    <h3
                                        class="mt-3 text-xs font-bold text-brand-ink"
                                    >
                                        Materi & Tugas
                                    </h3>
                                </div>
                                <div
                                    class="pb-5 text-2xl font-bold text-brand/60"
                                >
                                    →
                                </div>
                                <div
                                    class="flex flex-1 flex-col items-center text-center"
                                >
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-full bg-brand text-sm font-bold text-white shadow-md"
                                    >
                                        5
                                    </div>
                                    <h3
                                        class="mt-3 text-xs font-bold text-brand-ink"
                                    >
                                        Skripsi
                                    </h3>
                                </div>
                                <div
                                    class="pb-5 text-2xl font-bold text-brand/60"
                                >
                                    →
                                </div>
                                <div
                                    class="flex flex-1 flex-col items-center text-center"
                                >
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-full bg-brand text-sm font-bold text-white shadow-md"
                                    >
                                        6
                                    </div>
                                    <h3
                                        class="mt-3 text-xs font-bold text-brand-ink"
                                    >
                                        Wisuda
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-4">
                            <div
                                class="relative flex flex-col gap-5 rounded-2xl border border-brand/10 bg-brand-surface p-6 shadow-lg"
                            >
                                <div class="w-full">
                                    <div
                                        class="overflow-hidden rounded-xl border border-brand/15 bg-white shadow-md"
                                    >
                                        <img
                                            src="/images/dashboard-mockup.png"
                                            alt="Dashboard LMS"
                                            class="h-auto w-full object-cover object-top"
                                        />
                                    </div>
                                </div>
                                <div class="w-full">
                                    <h4
                                        class="mb-3 text-xs font-bold tracking-wider text-brand-ink uppercase"
                                    >
                                        Dashboard Mahasiswa
                                    </h4>
                                    <ul
                                        class="grid grid-cols-2 gap-2 text-xs font-medium text-brand-ink/80"
                                    >
                                        <li class="flex items-center gap-2">
                                            <span class="font-bold text-brand"
                                                >✓</span
                                            >
                                            Jadwal Kuliah
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="font-bold text-brand"
                                                >✓</span
                                            >
                                            Materi
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="font-bold text-brand"
                                                >✓</span
                                            >
                                            Tugas
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="font-bold text-brand"
                                                >✓</span
                                            >
                                            Ujian
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="font-bold text-brand"
                                                >✓</span
                                            >
                                            Presensi
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="font-bold text-brand"
                                                >✓</span
                                            >
                                            Pengumuman
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Banner Beasiswa -->
                    <div
                        class="relative mt-10 overflow-hidden rounded-3xl bg-brand text-white shadow-xl"
                    >
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 z-0 w-full opacity-10 mix-blend-soft-light md:w-2/3"
                        >
                            <svg
                                class="h-full w-full"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <defs>
                                    <pattern
                                        id="islamic-motif-banner"
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
                                            <circle cx="25" cy="25" r="8" />
                                            <polygon
                                                points="25,5 29,18 42,14 32,25 42,36 29,32 25,45 21,32 8,36 18,25 8,14 21,18"
                                            />
                                        </g>
                                    </pattern>
                                </defs>
                                <rect
                                    x="0"
                                    y="0"
                                    width="100%"
                                    height="100%"
                                    fill="url(#islamic-motif-banner)"
                                ></rect>
                            </svg>
                        </div>

                        <div
                            class="relative z-10 grid items-center md:grid-cols-12"
                        >
                            <div
                                class="h-full min-h-[260px] overflow-hidden md:col-span-4"
                            >
                                <img
                                    src="/images/remove.png"
                                    alt="Suasana Beasiswa"
                                    class="h-full w-full object-cover object-center"
                                />
                            </div>
                            <div
                                class="flex flex-col justify-between p-8 sm:p-10 md:col-span-8 lg:p-12"
                            >
                                <div>
                                    <div
                                        class="mb-4 inline-flex items-center rounded-full bg-[#C9A227] px-4 py-1 text-xs font-bold tracking-wider text-white uppercase shadow-sm"
                                    >
                                        BEASISWA
                                    </div>
                                    <h3
                                        class="text-2xl font-bold tracking-tight text-white sm:text-3xl"
                                    >
                                        Kesempatan Kuliah dengan Beasiswa
                                    </h3>
                                    <p
                                        class="mt-2 max-w-xl text-sm text-white/90 sm:text-base"
                                    >
                                        Tersedia program beasiswa hingga lulus
                                        sesuai ketentuan yang berlaku.
                                    </p>
                                </div>
                                <div
                                    class="mt-8 flex flex-col justify-between gap-6 sm:flex-row sm:items-end"
                                >
                                    <a
                                        href="#beasiswa"
                                        class="inline-flex items-center justify-center rounded-full bg-[#C9A227] px-8 py-3.5 text-sm font-semibold text-white shadow-lg transition-all hover:bg-[#b08d20]"
                                    >
                                        Lihat Persyaratan Beasiswa
                                        <span class="ml-2 font-bold">→</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bagian: Dosen & Pengajar (KINI DIRAPIKAN DENGAN V-FOR) -->
            <section id="dosen-pengajar" class="bg-[#F8F7F2] py-16 sm:py-24">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div
                        class="mb-12 flex flex-col gap-6 md:flex-row md:items-end md:justify-between"
                    >
                        <div>
                            <div class="flex items-center gap-3">
                                <span class="h-[2px] w-8 bg-[#C9A227]"></span>
                                <p
                                    class="text-[11px] font-bold tracking-[0.2em] text-[#C9A227] uppercase"
                                >
                                    Dosen & Pengajar
                                </p>
                            </div>
                            <h2
                                class="mt-3 text-3xl font-bold tracking-tight text-[#064E3B] sm:text-4xl"
                            >
                                Belajar Bersama Pengajar Berpengalaman
                            </h2>
                        </div>
                        <a
                            href="/tentang/dosen-staff"
                            class="group inline-flex items-center gap-2 text-sm font-semibold text-[#064E3B] transition-colors hover:text-[#C9A227]"
                        >
                            <span>Lihat Semua Dosen</span>
                            <span
                                class="transition-transform duration-300 group-hover:translate-x-1"
                                >→</span
                            >
                        </a>
                    </div>

                    <!-- Grid Dosen Loop -->
                    <div
                        class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4"
                    >
                        <article
                            v-for="(dosen, index) in previewDosen"
                            :key="index"
                            class="group relative flex flex-col overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-[#C9A227]/30 hover:shadow-xl"
                        >
                            <div
                                class="absolute top-0 left-0 z-10 h-1 w-full origin-left scale-x-0 bg-[#064E3B] transition-transform duration-500 group-hover:scale-x-100"
                            ></div>
                            <div
                                class="aspect-[4/5] w-full overflow-hidden bg-gray-50"
                            >
                                <img
                                    :src="dosen.image"
                                    :alt="dosen.name"
                                    class="h-full w-full object-cover object-center transition-transform duration-700 group-hover:scale-105"
                                    onerror="this.src =
                                        '/images/placeholder-avatar.png';"
                                />
                            </div>
                            <div class="flex flex-1 flex-col p-6">
                                <h3
                                    class="text-base leading-snug font-bold text-gray-900"
                                >
                                    {{ dosen.name }}
                                </h3>
                                <p
                                    class="mt-1 text-xs font-semibold tracking-wider text-[#C9A227] uppercase"
                                >
                                    {{ dosen.role }}
                                </p>
                                <div class="mt-auto pt-5">
                                    <div class="border-t border-gray-100 pt-4">
                                        <p
                                            class="mb-3 text-[10px] font-bold tracking-wider text-gray-400 uppercase"
                                        >
                                            Mata Kuliah Utama
                                        </p>
                                        <ul class="space-y-2">
                                            <li
                                                class="flex items-start gap-2.5"
                                            >
                                                <span
                                                    class="mt-0.5 text-[#064E3B]"
                                                >
                                                    <svg
                                                        class="h-4 w-4"
                                                        fill="none"
                                                        viewBox="0 0 24 24"
                                                        stroke="currentColor"
                                                    >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                                                        />
                                                    </svg>
                                                </span>
                                                <span
                                                    class="text-sm font-medium text-gray-700"
                                                    >{{ dosen.subject }}</span
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <!-- Bagian: Kampus Merdeka & Akreditasi Baik -->
            <section class="border-t border-brand/10 bg-white py-16 sm:py-20">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div
                        class="grid grid-cols-1 items-center gap-8 md:grid-cols-2"
                    >
                        <div
                            class="flex items-center gap-6 rounded-3xl border border-brand/10 bg-brand-surface p-8 shadow-sm"
                        >
                            <div class="shrink-0">
                                <img
                                    src="/images/kampus-merdeka.png"
                                    alt="Kampus Merdeka"
                                    class="h-20 w-auto object-contain"
                                />
                            </div>
                            <div>
                                <div class="mb-1 flex items-center gap-2">
                                    <span class="h-0.5 w-6 bg-[#C9A227]"></span>
                                    <span
                                        class="text-[10px] font-bold tracking-wider text-[#C9A227] uppercase"
                                        >Program Nasional</span
                                    >
                                </div>
                                <h3 class="text-xl font-bold text-brand-ink">
                                    Kampus Merdeka
                                </h3>
                                <p
                                    class="mt-1 text-sm leading-relaxed text-brand-ink/75"
                                >
                                    Mendukung penuh program Merdeka Belajar
                                    Kampus Merdeka.
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex items-center gap-6 rounded-3xl border border-brand/10 bg-brand-surface p-8 shadow-sm"
                        >
                            <div class="shrink-0">
                                <img
                                    src="/images/akreditasi-baik.png"
                                    alt="Akreditasi Baik"
                                    class="h-20 w-auto object-contain"
                                />
                            </div>
                            <div>
                                <div class="mb-1 flex items-center gap-2">
                                    <span class="h-0.5 w-6 bg-[#C9A227]"></span>
                                    <span
                                        class="text-[10px] font-bold tracking-wider text-[#C9A227] uppercase"
                                        >Jaminan Mutu</span
                                    >
                                </div>
                                <h3 class="text-xl font-bold text-brand-ink">
                                    Akreditasi Baik
                                </h3>
                                <p
                                    class="mt-1 text-sm leading-relaxed text-brand-ink/75"
                                >
                                    Penyelenggaraan pendidikan terakreditasi
                                    baik dan terpercaya.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bagian: Lokasi Kampus -->
            <section
                id="lokasi-kampus"
                class="border-t border-brand/10 bg-brand-surface py-24 sm:py-28"
            >
                <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12">
                    <div class="mx-auto mb-16 max-w-3xl text-center">
                        <div class="flex items-center justify-center gap-3">
                            <span class="h-0.5 w-10 bg-[#C9A227]"></span>
                            <p
                                class="text-xs font-bold tracking-[0.25em] text-[#C9A227] uppercase"
                            >
                                LOKASI KAMPUS
                            </p>
                            <span class="h-0.5 w-10 bg-[#C9A227]"></span>
                        </div>
                        <h2
                            class="mt-4 text-3xl font-bold tracking-tight text-brand-ink sm:text-4xl"
                        >
                            Lokasi Kampus Ilyas institut
                        </h2>
                    </div>

                    <div
                        class="relative overflow-hidden rounded-3xl border border-brand/15 bg-white shadow-xl"
                    >
                        <div class="grid min-h-[480px] lg:grid-cols-12">
                            <div
                                class="z-10 flex flex-col justify-between border-r border-brand/10 bg-white p-8 sm:p-10 lg:col-span-4"
                            >
                                <div>
                                    <div
                                        class="mb-4 inline-flex rounded-full bg-brand/10 px-4 py-1 text-xs font-bold tracking-wider text-brand uppercase"
                                    >
                                        Kampus Pusat
                                    </div>
                                    <h3
                                        class="text-xl font-bold text-brand-ink"
                                    >
                                        Ilyas institut
                                    </h3>
                                    <p
                                        class="mt-3 text-sm leading-relaxed text-brand-ink/75"
                                    >
                                        Jl. Trans Kalimantan KM 9,3 Komp. Bumi
                                        Angkasa Mandiri RT 05, Ruko No.3 4,
                                        Handil Bakti, Kec. Alalak, Kabupaten
                                        Barito Kuala, Kalimantan Selatan 70582
                                    </p>
                                    <div
                                        class="mt-6 space-y-3 border-t border-brand/10 pt-4 text-xs font-medium text-brand-ink/80"
                                    >
                                        <div class="flex items-center gap-2.5">
                                            <span class="font-bold text-brand"
                                                >🕒</span
                                            >
                                            Jam Operasional: Sen - Jum (08:00 -
                                            16:00)
                                        </div>
                                        <div class="flex items-center gap-2.5">
                                            <span class="font-bold text-brand"
                                                >📞</span
                                            >
                                            Telepon / WhatsApp: +62 821-4834-449
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-8">
                                    <a
                                        href="https://maps.app.goo.gl/GGriAFNGwLiNDEYq8"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-brand px-6 py-3.5 text-sm font-semibold text-white shadow-md hover:bg-brand-hover"
                                    >
                                        Buka di Google Maps
                                    </a>
                                </div>
                            </div>
                            <div class="relative bg-gray-100 lg:col-span-8">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4024.8942045991716!2d114.60717707501914!3d-3.2502350967247864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de43d0522fc467b%3A0x1b1fae9cdbbc3fcc!2sPT.%20AL-%20ILYAS%20RIYAL%20BAROKAH!5e1!3m2!1sid!2sid!4v1790583279617!5m2!1sid!2sid"
                                    width="100%"
                                    height="100%"
                                    style="border: 0"
                                    loading="lazy"
                                ></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </PublicLayout>
</template>
