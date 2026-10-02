<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
</script>

<template>
    <Head title="Arti Lambang - Ilyas institut" />

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
                    >
                        TENTANG KAMI
                    </span>
                    <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                </div>
                <h1
                    class="text-4xl font-bold tracking-tight text-white drop-shadow-xl sm:text-5xl lg:text-6xl"
                >
                    Arti Lambang
                </h1>
                <p
                    class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-white/90 drop-shadow-md"
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
                        class="mb-6 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Filosofi Logo
                    </h2>
                    <p class="text-lg leading-relaxed text-brand-ink/80">
                        Logo ILYAS INSTITUT dirancang dengan penuh makna,
                        menggambarkan visi dan misi lembaga sebagai pusat
                        pendidikan Islam yang membangun generasi beriman,
                        berilmu, beramal, dan berdakwah.
                    </p>
                </div>

                <!-- BENTUK GAMBAR -->
                <div class="mb-16">
                    <div class="mb-10 flex justify-center">
                        <img
                            src="/images/logo-ilyas-institut.png"
                            alt="Lambang Ilyas institut"
                            class="h-auto w-64 object-contain drop-shadow-sm sm:w-80"
                        />
                    </div>
                </div>

                <!-- ARTI, MAKNA DAN FILOSOFI -->
                <div class="mb-16">
                    <h3
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Makna dan Bentuk Logo :
                    </h3>
                    <div class="space-y-8 text-lg">
                        <!-- Lengkungan Emas -->
                        <div>
                            <h4 class="mb-2 font-bold text-brand-ink">
                                Lengkungan Emas
                            </h4>
                            <p class="leading-relaxed text-brand-ink/80">
                                Melambangkan mihrab atau gerbang, yang mengarah
                                pada nilai-nilai Islam, jalan menuju ilmu dan
                                hidayah. Warna emas bermakna kemuliaan dan
                                cita-cita tinggi.
                            </p>
                        </div>

                        <!-- Bentuk Bangunan -->
                        <div>
                            <h4 class="mb-2 font-bold text-brand-ink">
                                Bentuk Bangunan
                            </h4>
                            <p class="leading-relaxed text-brand-ink/80">
                                Melambangkan institusi pendidikan sebagai tempat
                                membangun manusia melalui ilmu dan pembentukan
                                karakter.
                            </p>
                        </div>

                        <!-- Buku Terbuka -->
                        <div>
                            <h4 class="mb-2 font-bold text-brand-ink">
                                Buku Terbuka
                            </h4>
                            <p class="leading-relaxed text-brand-ink/80">
                                Melambangkan keterbukaan terhadap ilmu, semangat
                                belajar yang tiada henti, dan perjalanan
                                pendidikan menuju masa depan.
                            </p>
                        </div>

                        <!-- Bentuk Tulisan -->
                        <div>
                            <h4 class="mb-2 font-bold text-brand-ink">
                                Bentuk Tulisan
                            </h4>
                            <p class="leading-relaxed text-brand-ink/80">
                                Terinspirasi dari kaligrafi kufi yang membentuk
                                identitas ILYAS secara modern. Melambangkan
                                kekuatan nilai Islam dan keilmuan yang kokoh.
                            </p>
                        </div>

                        <!-- Warna Hijau -->
                        <div>
                            <h4 class="mb-2 font-bold text-brand-ink">
                                Warna Hijau
                            </h4>
                            <p class="leading-relaxed text-brand-ink/80">
                                Melambangkan iman, pertumbuhan, kedamaian, dan
                                keberkahan. Hijau mencerminkan semangat
                                pendidikan Islam yang menyejukkan.
                            </p>
                        </div>

                        <!-- Warna Emas -->
                        <div>
                            <h4 class="mb-2 font-bold text-brand-ink">
                                Warna Emas
                            </h4>
                            <p class="leading-relaxed text-brand-ink/80">
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
                        class="mb-6 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Makna Keseluruhan :
                    </h3>
                    <div
                        class="rounded-2xl border border-brand/10 bg-brand-surface p-6 shadow-sm"
                    >
                        <p
                            class="text-center text-lg leading-relaxed font-medium text-brand-ink/90"
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
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Nilai yang Direpresentasikan :
                    </h3>
                    <ol
                        class="ml-6 list-outside list-decimal space-y-4 text-lg leading-relaxed text-brand-ink/80"
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
                        class="mx-auto mb-6 h-auto w-24 opacity-80 grayscale transition duration-300 hover:grayscale-0 sm:w-28"
                    />
                    <h2
                        class="mb-2 text-xl font-bold tracking-wider text-brand-ink uppercase"
                    >
                        Ilyas Institut
                    </h2>
                    <p
                        class="text-xs font-bold tracking-[0.25em] text-[#C9A227] uppercase"
                    >
                        Kuliah Online Ilmu Syar'i
                    </p>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>
