<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import PublicLayout from "@/layouts/PublicLayout.vue";
</script>

<template>
    <Head title="Arti Lambang - Ilyas institut" />

    <PublicLayout>
        <!-- 1. HERO SECTION -->
        <section
            class="relative pt-32 pb-24 lg:pt-48 lg:pb-36 overflow-hidden flex items-center justify-center"
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
                    Arti Lambang
                </h1>
                <p
                    class="mt-6 mx-auto max-w-2xl text-lg text-white/90 leading-relaxed drop-shadow-md"
                >
                    Identitas visual yang merepresentasikan nilai, arah
                    pendidikan, dan semangat Ilyas institut dalam
                    menyelenggarakan pendidikan online ilmu syar'i.
                </p>
            </div>
        </section>

        <!-- KONTEN UTAMA (Gaya Dokumen Resmi Institusi) -->
        <section class="bg-white py-16 sm:py-24">
            <div class="mx-auto max-w-4xl px-6 sm:px-8 lg:px-12">
                <!-- FILOSOFI LOGO -->
                <div class="mb-16">
                    <h2
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-6"
                    >
                        Filosofi Logo
                    </h2>
                    <p class="text-brand-ink/80 text-lg leading-relaxed">
                        Logo ILYAS INSTITUT dirancang dengan penuh makna,
                        menggambarkan visi dan misi lembaga sebagai pusat
                        pendidikan Islam yang membangun generasi beriman,
                        berilmu, beramal, dan berdakwah.
                    </p>
                </div>

                <!-- BENTUK GAMBAR -->
                <div class="mb-16">
                    <div class="flex justify-center mb-10">
                        <img
                            src="/images/logo-ilyas-institut.png"
                            alt="Lambang Ilyas institut"
                            class="h-auto w-64 sm:w-80 object-contain drop-shadow-sm"
                        />
                    </div>
                </div>

                <!-- ARTI, MAKNA DAN FILOSOFI -->
                <div class="mb-16">
                    <h3
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Makna dan Bentuk Logo :
                    </h3>
                    <div class="space-y-8 text-lg">
                        <!-- Lengkungan Emas -->
                        <div>
                            <h4 class="font-bold text-brand-ink mb-2">
                                Lengkungan Emas
                            </h4>
                            <p class="text-brand-ink/80 leading-relaxed">
                                Melambangkan mihrab atau gerbang, yang mengarah
                                pada nilai-nilai Islam, jalan menuju ilmu dan
                                hidayah. Warna emas bermakna kemuliaan dan
                                cita-cita tinggi.
                            </p>
                        </div>

                        <!-- Bentuk Bangunan -->
                        <div>
                            <h4 class="font-bold text-brand-ink mb-2">
                                Bentuk Bangunan
                            </h4>
                            <p class="text-brand-ink/80 leading-relaxed">
                                Melambangkan institusi pendidikan sebagai tempat
                                membangun manusia melalui ilmu dan pembentukan
                                karakter.
                            </p>
                        </div>

                        <!-- Buku Terbuka -->
                        <div>
                            <h4 class="font-bold text-brand-ink mb-2">
                                Buku Terbuka
                            </h4>
                            <p class="text-brand-ink/80 leading-relaxed">
                                Melambangkan keterbukaan terhadap ilmu, semangat
                                belajar yang tiada henti, dan perjalanan
                                pendidikan menuju masa depan.
                            </p>
                        </div>

                        <!-- Bentuk Tulisan -->
                        <div>
                            <h4 class="font-bold text-brand-ink mb-2">
                                Bentuk Tulisan
                            </h4>
                            <p class="text-brand-ink/80 leading-relaxed">
                                Terinspirasi dari kaligrafi kufi yang membentuk
                                identitas ILYAS secara modern. Melambangkan
                                kekuatan nilai Islam dan keilmuan yang kokoh.
                            </p>
                        </div>

                        <!-- Warna Hijau -->
                        <div>
                            <h4 class="font-bold text-brand-ink mb-2">
                                Warna Hijau
                            </h4>
                            <p class="text-brand-ink/80 leading-relaxed">
                                Melambangkan iman, pertumbuhan, kedamaian, dan
                                keberkahan. Hijau mencerminkan semangat
                                pendidikan Islam yang menyejukkan.
                            </p>
                        </div>

                        <!-- Warna Emas -->
                        <div>
                            <h4 class="font-bold text-brand-ink mb-2">
                                Warna Emas
                            </h4>
                            <p class="text-brand-ink/80 leading-relaxed">
                                Melambangkan kemuliaan, kualitas, prestasi, dan
                                keunggulan. Emas menjadi simbol harapan untuk
                                mencetak generasi yang bernilai dan bermanfaat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- MAKNA KESELURUHAN -->
                <div class="mb-16">
                    <h3
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-6"
                    >
                        Makna Keseluruhan :
                    </h3>
                    <div
                        class="p-6 rounded-2xl bg-brand-surface border border-brand/10 shadow-sm"
                    >
                        <p
                            class="text-brand-ink/90 text-lg leading-relaxed font-medium text-center"
                        >
                            ILYAS INSTITUT adalah gerbang ilmu dan pendidikan
                            Islam yang menjadi jalan menuju kemuliaan, dengan
                            semangat membentuk generasi yang beriman, berilmu,
                            beramal, dan berdakwah.
                        </p>
                    </div>
                </div>

                <!-- NILAI YANG DIREPRESENTASIKAN -->
                <div class="mb-16">
                    <h3
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Nilai yang Direpresentasikan :
                    </h3>
                    <ol
                        class="list-decimal list-outside ml-6 space-y-4 text-brand-ink/80 text-lg leading-relaxed"
                    >
                        <li>
                            <strong class="text-brand-ink">Iman:</strong>
                            Menjadikan keimanan sebagai landasan utama dalam
                            proses pendidikan dan pembentukan karakter.
                        </li>
                        <li>
                            <strong class="text-brand-ink">Ilmu:</strong>
                            Mengembangkan dan menguasai disiplin ilmu syar'i
                            sebagai bagian penting dari tujuan institusi.
                        </li>
                        <li>
                            <strong class="text-brand-ink">Amal:</strong>
                            Mengarahkan ilmu agar memiliki korelasi langsung
                            dengan pengamalan yang baik dalam kehidupan.
                        </li>
                        <li>
                            <strong class="text-brand-ink">Dakwah:</strong>
                            Mendorong kesadaran agar ilmu yang diperoleh dapat
                            disebarluaskan dan memberikan pencerahan kepada
                            masyarakat luas.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Watafaqquh Fiddin:</strong
                            >
                            Menegaskan komitmen institusi pada orientasi
                            pemahaman ilmu agama yang mendalam dan komprehensif.
                        </li>
                    </ol>
                </div>

                <!-- PENUTUP -->
                <div
                    class="mt-20 border-t border-brand/10 pt-10 pb-4 text-center"
                >
                    <img
                        src="/images/logo-ilyas-institut.png"
                        alt="Logo Ilyas institut"
                        class="mx-auto h-auto w-24 sm:w-28 opacity-80 mb-6 grayscale hover:grayscale-0 transition duration-300"
                    />
                    <h2
                        class="text-xl font-bold text-brand-ink uppercase tracking-wider mb-2"
                    >
                        Ilyas Institut
                    </h2>
                    <p
                        class="text-xs font-bold uppercase tracking-[0.25em] text-[#C9A227]"
                    >
                        Kuliah Online Ilmu Syar'i
                    </p>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>
