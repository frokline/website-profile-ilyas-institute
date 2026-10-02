<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import PublicLayout from "@/layouts/PublicLayout.vue";

// Data 8 Dosen berdasarkan dokumen STRUKTUR ORGANISASI ILYAS INSTITUT
const dosenList = [
    {
        name: "Mohamad Fahmi, Lc., M.S.I",
        role: "Dosen",
        image: "/images/muhammad-fahmi.png",
    },
    {
        name: "H. Muhammad Riza, S.Pd., M.Pd., M.A",
        role: "Dosen",
        image: "/images/direktur.png",
    },
    {
        name: "H. Muhammad Aini, S.Pd.I., M.M",
        role: "Dosen",
        image: "/images/muhammad-aini.png",
    },
    {
        name: "KH. Nasyirul Lubab, Lc., M.A",
        role: "Dosen",
        image: "/images/nasyirul-lubab.png",
    },
    {
        name: "KH. Khusni Abdillah, Lc., M.A",
        role: "Dosen",
        image: "/images/khusni-abdillah.png",
    },
    {
        name: "Ahmad Nadiyulkaf, B.Sc., M.Pd",
        role: "Dosen",
        image: "/images/ahmad-nadiulkaf.png",
    },
    {
        name: "Hj. Gina Hamidah, S.Pd., M.Pd",
        role: "Dosen",
        image: "/images/gina-hamidah.png",
    },
    {
        name: "Hilya Adilah, S.Psi., S.Pd., M.Pd",
        role: "Dosen",
        image: "/images/hilya-adilah.png",
    },
    {
        name: "Doni Saputra, S.H., M.H",
        role: "Dosen",
        image: "/images/doni-saputra.png",
    },
    {
        name: "Muhammad Malkan, S.Pd., C.PAI",
        role: "Staf",
        image: "/images/malkan.png",
    },
    {
        name: "Muhammad Khair, A.Md.Kom",
        role: "Staf",
        image: "/images/khair.png",
    },
    {
        name: "Hendra Cahyadi, C.PAI",
        role: "Staf",
        image: "/images/kosong.png",
    },
];
</script>

<template>
    <Head title="Dosen & Staf - Ilyas institut" />

    <PublicLayout>
        <!-- 1. HERO SECTION (Diadaptasi dari Mars.vue) -->
        <section
            class="relative pt-32 pb-24 lg:pt-48 lg:pb-36 overflow-hidden flex items-center justify-center"
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
                class="relative z-10 mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 text-center"
            >
                <div class="inline-flex items-center gap-2 mb-4">
                    <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                    <span
                        class="text-xs font-bold tracking-[0.2em] text-[#C9A227] uppercase drop-shadow-md"
                    >
                        TENTANG KAMI
                    </span>
                    <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                </div>
                <h1
                    class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl drop-shadow-xl"
                >
                    Dosen & Staf Pengajar
                </h1>
            </div>
        </section>

        <!-- 2. BAGIAN UTAMA (Grid 8 Dosen) -->
        <section class="bg-[#F9F9F9] py-20 sm:py-28 min-h-screen">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <!-- Judul Section -->
                <div class="text-center mb-16 sm:mb-20">
                    <h2
                        class="text-2xl sm:text-3xl font-bold text-gray-900 uppercase tracking-wide"
                    >
                        Profile DOSEN & STAF
                    </h2>
                </div>

                <!-- Grid Layout (3 Kolom pada desktop, proporsional untuk 8 item) -->
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-y-16 gap-x-8"
                >
                    <!-- Looping Data 8 Dosen -->
                    <div
                        v-for="(dosen, index) in dosenList"
                        :key="index"
                        class="flex flex-col items-center text-center"
                    >
                        <!-- Foto Profil Lingkaran -->
                        <div
                            class="w-36 h-36 rounded-full overflow-hidden mb-5 bg-gray-200 shadow-sm border-4 border-white"
                        >
                            <img
                                :src="dosen.image"
                                :alt="dosen.name"
                                class="w-full h-full object-cover"
                                onerror="
                                    this.src = '/images/placeholder-avatar.png'
                                "
                            />
                        </div>

                        <!-- Jabatan / Role -->
                        <p class="text-sm text-gray-500 mb-1 font-medium">
                            {{ dosen.role }}
                        </p>

                        <!-- Nama Lengkap -->
                        <h3
                            class="text-lg sm:text-xl font-semibold text-gray-900 px-4"
                        >
                            {{ dosen.name }}
                        </h3>

                        <!-- Garis Biru Pemisah -->
                        <div
                            class="mt-4 h-[3px] w-12 bg-blue-600 mb-5 rounded-full"
                        ></div>

                        <!-- Tombol Informasi Profil -->
                        <a
                            href="#profil"
                            class="inline-block bg-blue-700 hover:bg-blue-800 text-white font-semibold text-xs sm:text-sm px-6 py-2.5 transition-colors shadow-sm tracking-wide"
                        >
                            INFORMASI PROFIL
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>
