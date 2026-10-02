<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';

// Data 8 Dosen berdasarkan dokumen STRUKTUR ORGANISASI ILYAS INSTITUT
const dosenList = [
    {
        name: 'Mohamad Fahmi, Lc., M.S.I',
        role: 'Dosen',
        image: '/images/muhammad-fahmi.png',
    },
    {
        name: 'H. Muhammad Riza, S.Pd., M.Pd., M.A',
        role: 'Dosen',
        image: '/images/direktur.png',
    },
    {
        name: 'H. Muhammad Aini, S.Pd.I., M.M',
        role: 'Dosen',
        image: '/images/muhammad-aini.png',
    },
    {
        name: 'KH. Nasyirul Lubab, Lc., M.A',
        role: 'Dosen',
        image: '/images/nasyirul-lubab.png',
    },
    {
        name: 'KH. Khusni Abdillah, Lc., M.A',
        role: 'Dosen',
        image: '/images/khusni-abdillah.png',
    },
    {
        name: 'Ahmad Nadiyulkaf, B.Sc., M.Pd',
        role: 'Dosen',
        image: '/images/ahmad-nadiulkaf.png',
    },
    {
        name: 'Hj. Gina Hamidah, S.Pd., M.Pd',
        role: 'Dosen',
        image: '/images/gina-hamidah.png',
    },
    {
        name: 'Hilya Adilah, S.Psi., S.Pd., M.Pd',
        role: 'Dosen',
        image: '/images/hilya-adilah.png',
    },
    {
        name: 'Doni Saputra, S.H., M.H',
        role: 'Dosen',
        image: '/images/doni-saputra.png',
    },
    {
        name: 'Muhammad Malkan, S.Pd., C.PAI',
        role: 'Staf',
        image: '/images/malkan.png',
    },
    {
        name: 'Muhammad Khair, A.Md.Kom',
        role: 'Staf',
        image: '/images/khair.png',
    },
    {
        name: 'Hendra Cahyadi, C.PAI',
        role: 'Staf',
        image: '/images/kosong.png',
    },
];
</script>

<template>
    <Head title="Dosen & Staf - Ilyas institut" />

    <PublicLayout>
        <!-- 1. HERO SECTION (Diadaptasi dari Mars.vue) -->
        <section
            class="relative flex items-center justify-center overflow-hidden pt-32 pb-24 lg:pt-48 lg:pb-36"
        >
            <!-- Gambar Background -->
            <div class="absolute inset-0 z-0">
                <img
                    src="/images/visi-mis.png"
                    alt="Dosen dan Staf Ilyas institut"
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
                    >
                        TENTANG KAMI
                    </span>
                    <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                </div>
                <h1
                    class="text-4xl font-bold tracking-tight text-white drop-shadow-xl sm:text-5xl lg:text-6xl"
                >
                    Dosen & Staf Pengajar
                </h1>
            </div>
        </section>

        <!-- 2. BAGIAN UTAMA (Grid 8 Dosen) -->
        <section class="min-h-screen bg-[#F9F9F9] py-20 sm:py-28">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <!-- Judul Section -->
                <div class="mb-16 text-center sm:mb-20">
                    <h2
                        class="text-2xl font-bold tracking-wide text-gray-900 uppercase sm:text-3xl"
                    >
                        Profile DOSEN & STAF
                    </h2>
                </div>

                <!-- Grid Layout (3 Kolom pada desktop, proporsional untuk 8 item) -->
                <div
                    class="grid grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 md:grid-cols-3"
                >
                    <!-- Looping Data 8 Dosen -->
                    <div
                        v-for="(dosen, index) in dosenList"
                        :key="index"
                        class="flex flex-col items-center text-center"
                    >
                        <!-- Foto Profil Lingkaran -->
                        <div
                            class="mb-5 h-36 w-36 overflow-hidden rounded-full border-4 border-white bg-gray-200 shadow-sm"
                        >
                            <img
                                :src="dosen.image"
                                :alt="dosen.name"
                                class="h-full w-full object-cover"
                                onerror="this.src =
                                    '/images/placeholder-avatar.png';"
                            />
                        </div>

                        <!-- Jabatan / Role -->
                        <p class="mb-1 text-sm font-medium text-gray-500">
                            {{ dosen.role }}
                        </p>

                        <!-- Nama Lengkap -->
                        <h3
                            class="px-4 text-lg font-semibold text-gray-900 sm:text-xl"
                        >
                            {{ dosen.name }}
                        </h3>

                        <!-- Garis Biru Pemisah -->
                        <div
                            class="mt-4 mb-5 h-[3px] w-12 rounded-full bg-blue-600"
                        ></div>

                        <!-- Tombol Informasi Profil -->
                        <a
                            href="#profil"
                            class="inline-block bg-blue-700 px-6 py-2.5 text-xs font-semibold tracking-wide text-white shadow-sm transition-colors hover:bg-blue-800 sm:text-sm"
                        >
                            INFORMASI PROFIL
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>
