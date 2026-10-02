<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
</script>

<template>
    <Head title="Ilmu Al-Qur'an dan Tafsir (IAT) - Ilyas institut" />

    <PublicLayout>
        <!-- 1. HERO SECTION -->
        <section
            class="relative flex items-center justify-center overflow-hidden pt-32 pb-24 lg:pt-48 lg:pb-36"
        >
            <!-- Gambar Background -->
            <div class="absolute inset-0 z-0">
                <img
                    src="/images/programs/iat.webp"
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
                        PROGRAM STUDI S1
                    </span>

                    <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                </div>

                <h1
                    class="text-4xl font-bold tracking-tight text-white drop-shadow-xl sm:text-5xl lg:text-6xl"
                >
                    Ilmu Al-Qur'an dan Tafsir
                </h1>

                <p
                    class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-white/90 drop-shadow-md"
                >
                    Mempelajari Al-Qur'an secara lebih mendalam, mulai dari
                    ilmu-ilmu Al-Qur'an, metode tafsir, hingga cara memahami dan
                    menerapkan nilai-nilai Al-Qur'an dalam kehidupan sehari-hari
                    dan menghadapi berbagai persoalan di masyarakat.
                </p>
            </div>
        </section>

        <!-- 2. KONTEN UTAMA -->
        <section class="bg-white py-16 sm:py-24">
            <div class="mx-auto max-w-4xl px-6 sm:px-8 lg:px-12">
                <!-- INFORMASI PROGRAM -->
                <div class="mb-16">
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Informasi Program
                    </h2>

                    <div class="space-y-4 text-lg text-brand-ink/80">
                        <div
                            class="grid grid-cols-1 gap-1 sm:grid-cols-[200px_1fr] sm:gap-6"
                        >
                            <div class="font-semibold text-brand-ink">
                                Program Studi
                            </div>

                            <div>: S1 Ilmu Al-Qur'an dan Tafsir (IAT)</div>
                        </div>

                        <div
                            class="grid grid-cols-1 gap-1 sm:grid-cols-[200px_1fr] sm:gap-6"
                        >
                            <div class="font-semibold text-brand-ink">
                                Gelar Akademik
                            </div>

                            <div>: Sarjana Agama (S.Ag.)</div>
                        </div>

                        <div
                            class="grid grid-cols-1 gap-1 sm:grid-cols-[200px_1fr] sm:gap-6"
                        >
                            <div class="font-semibold text-brand-ink">
                                Bidang Keilmuan
                            </div>

                            <div>: Ushuluddin / Studi Al-Qur'an</div>
                        </div>
                    </div>
                </div>

                <!-- TENTANG PROGRAM STUDI -->
                <div class="mb-16">
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Tentang Program Studi
                    </h2>

                    <p class="text-lg leading-relaxed text-brand-ink/80">
                        Program Studi
                        <strong class="text-brand-ink">
                            S1 Ilmu Al-Qur'an dan Tafsir (IAT)
                        </strong>
                        dirancang untuk mahasiswa yang ingin mempelajari
                        Al-Qur'an dan tafsir secara lebih mendalam.
                    </p>

                    <p class="mt-5 text-lg leading-relaxed text-brand-ink/80">
                        Mahasiswa akan mempelajari berbagai ilmu yang berkaitan
                        dengan Al-Qur'an, seperti Ulumul Qur'an, ilmu tafsir,
                        bahasa Arab, sejarah turunnya Al-Qur'an, serta berbagai
                        metode dalam memahami ayat-ayat Al-Qur'an.
                    </p>

                    <p class="mt-5 text-lg leading-relaxed text-brand-ink/80">
                        Pembelajaran juga mengenalkan mahasiswa kepada berbagai
                        kitab tafsir dari ulama terdahulu hingga karya tafsir
                        yang berkembang pada masa sekarang.
                    </p>

                    <p class="mt-5 text-lg leading-relaxed text-brand-ink/80">
                        Selain memahami teori, mahasiswa diarahkan agar mampu
                        memahami pesan Al-Qur'an dan menghubungkannya dengan
                        kehidupan masyarakat saat ini.
                    </p>
                </div>

                <!-- VISI -->
                <div class="mb-16">
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Visi
                    </h2>

                    <p class="text-lg leading-relaxed text-brand-ink/80">
                        Menjadi program studi yang unggul dalam kajian
                        <strong class="text-brand-ink">
                            Ilmu Al-Qur'an dan Tafsir
                        </strong>
                        serta menghasilkan lulusan yang memiliki ilmu yang baik,
                        berakhlak mulia, mampu melakukan penelitian, dan dapat
                        memberikan manfaat bagi masyarakat.
                    </p>
                </div>

                <!-- MISI -->
                <div class="mb-16">
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Misi
                    </h2>

                    <div class="space-y-7 text-lg">
                        <!-- MISI 01 -->
                        <div>
                            <h4 class="mb-2 font-bold text-brand-ink">
                                01 — Mempelajari Ilmu Al-Qur'an
                            </h4>

                            <p class="leading-relaxed text-brand-ink/80">
                                Memberikan pendidikan yang membantu mahasiswa
                                memahami Ulumul Qur'an, ilmu tafsir, kaidah
                                tafsir, dan berbagai kitab tafsir.
                            </p>
                        </div>

                        <!-- MISI 02 -->
                        <div>
                            <h4 class="mb-2 font-bold text-brand-ink">
                                02 — Mengembangkan Penelitian
                            </h4>

                            <p class="leading-relaxed text-brand-ink/80">
                                Mendorong mahasiswa untuk melakukan penelitian
                                tentang Al-Qur'an dan tafsir serta
                                menghubungkannya dengan berbagai persoalan yang
                                ada di masyarakat.
                            </p>
                        </div>

                        <!-- MISI 03 -->
                        <div>
                            <h4 class="mb-2 font-bold text-brand-ink">
                                03 — Memanfaatkan Teknologi
                            </h4>

                            <p class="leading-relaxed text-brand-ink/80">
                                Menggunakan teknologi untuk membantu proses
                                belajar, penelitian, mencari sumber ilmu, serta
                                menyebarkan pengetahuan tentang Al-Qur'an.
                            </p>
                        </div>

                        <!-- MISI 04 -->
                        <div>
                            <h4 class="mb-2 font-bold text-brand-ink">
                                04 — Pengabdian dan Dakwah kepada Masyarakat
                            </h4>

                            <p class="leading-relaxed text-brand-ink/80">
                                Mendorong mahasiswa untuk mengamalkan
                                nilai-nilai Al-Qur'an melalui dakwah,
                                pendidikan, dan kegiatan yang memberikan manfaat
                                bagi masyarakat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FOKUS KURIKULUM -->
                <div class="mb-16">
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Fokus Kurikulum
                    </h2>

                    <ul
                        class="ml-6 list-outside list-disc space-y-5 text-lg leading-relaxed text-brand-ink/80"
                    >
                        <li>
                            <strong class="text-brand-ink">
                                Ulumul Qur'an dan Ilmu Tafsir:
                            </strong>
                            Mempelajari berbagai ilmu yang membantu memahami
                            Al-Qur'an, seperti Asbabun Nuzul, Makki dan Madani,
                            Qira'at, Nasikh dan Mansukh, serta kaidah-kaidah
                            tafsir.
                        </li>

                        <li>
                            <strong class="text-brand-ink">
                                Kajian Kitab Tafsir:
                            </strong>
                            Mengenal dan mempelajari berbagai kitab tafsir, baik
                            karya ulama terdahulu maupun karya tafsir modern dan
                            kontemporer.
                        </li>

                        <li>
                            <strong class="text-brand-ink">
                                Metode Memahami Al-Qur'an:
                            </strong>
                            Mempelajari berbagai metode dalam memahami dan
                            menafsirkan Al-Qur'an, seperti Tafsir Tahlili,
                            Maudhu'i, Muqaran, dan Ijmali.
                        </li>

                        <li>
                            <strong class="text-brand-ink">
                                Tahsin dan Tahfizh Al-Qur'an:
                            </strong>
                            Mempelajari kemampuan membaca Al-Qur'an dengan baik
                            serta menghafal ayat-ayat Al-Qur'an sesuai dengan
                            kemampuan dan program yang ditetapkan.
                        </li>

                        <li>
                            <strong class="text-brand-ink">
                                Al-Qur'an dan Kehidupan:
                            </strong>
                            Mempelajari bagaimana nilai-nilai Al-Qur'an dapat
                            diterapkan dalam berbagai persoalan kehidupan,
                            termasuk persoalan sosial, pendidikan, ekonomi, dan
                            kehidupan masyarakat.
                        </li>
                    </ul>
                </div>

                <!-- CAPAIAN PEMBELAJARAN -->
                <div class="mb-16">
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Capaian Pembelajaran
                    </h2>

                    <ul
                        class="ml-6 list-outside list-disc space-y-5 text-lg leading-relaxed text-brand-ink/80"
                    >
                        <li>
                            <strong class="text-brand-ink"> Sikap: </strong>
                            Memiliki akhlak yang baik, menjunjung tinggi
                            nilai-nilai Islam, memiliki sikap toleran, serta
                            mampu menerapkan nilai-nilai Al-Qur'an dalam
                            kehidupan.
                        </li>

                        <li>
                            <strong class="text-brand-ink">
                                Pengetahuan:
                            </strong>
                            Memahami ilmu-ilmu Al-Qur'an, ilmu tafsir, sejarah
                            perkembangan tafsir, bahasa Arab, serta berbagai
                            metode dalam memahami ayat-ayat Al-Qur'an.
                        </li>

                        <li>
                            <strong class="text-brand-ink">
                                Keterampilan:
                            </strong>
                            Mampu melakukan penelitian sederhana tentang
                            Al-Qur'an dan tafsir, memahami ayat dengan
                            menggunakan metode yang dipelajari, serta
                            menyampaikan hasil kajian dalam bentuk tulisan
                            maupun presentasi.
                        </li>
                    </ul>
                </div>

                <!-- PROSPEK LULUSAN -->
                <div class="mb-16">
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Prospek Lulusan
                    </h2>

                    <p class="mb-6 text-lg leading-relaxed text-brand-ink/80">
                        Lulusan S1 Ilmu Al-Qur'an dan Tafsir dapat mengembangkan
                        karier di berbagai bidang yang berkaitan dengan
                        pendidikan, penelitian, dakwah, dan kajian keislaman.
                    </p>

                    <div
                        class="grid gap-x-8 gap-y-4 text-lg text-brand-ink/80 sm:grid-cols-2"
                    >
                        <div class="flex items-start gap-3">
                            <span class="font-bold text-[#C9A227]"> — </span>

                            <span> Peneliti Al-Qur'an dan Kajian Islam </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-bold text-[#C9A227]"> — </span>

                            <span> Akademisi atau Tenaga Pendidik </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-bold text-[#C9A227]"> — </span>

                            <span> Pendakwah / Penyuluh Agama Islam </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-bold text-[#C9A227]"> — </span>

                            <span>
                                Pengelola Lembaga Tahfizh dan Studi Al-Qur'an
                            </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-bold text-[#C9A227]"> — </span>

                            <span> Penulis dan Editor Konten Keislaman </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-bold text-[#C9A227]"> — </span>

                            <span> Jurnalis di Bidang Keislaman </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-bold text-[#C9A227]"> — </span>

                            <span>
                                Praktisi di Lembaga Pendidikan dan Keagamaan
                            </span>
                        </div>
                    </div>
                </div>

                <!-- CALL TO ACTION (PENUTUP) -->
                <div
                    class="mt-20 border-t border-brand/10 pt-10 pb-4 text-center"
                >
                    <h2 class="mb-3 text-2xl font-bold text-brand-ink">
                        Ingin Bergabung?
                    </h2>
                    <p class="mb-8 text-lg text-brand-ink/70">
                        Daftarkan diri Anda sekarang dan jadilah bagian dari
                        generasi pendidik Islam yang profesional.
                    </p>
                    <a
                        href="https://forms.gle/NG7eEC3uKNhjEpkD8"
                        class="inline-flex items-center justify-center rounded-full bg-brand px-8 py-3.5 text-base font-semibold text-white shadow-sm transition-all hover:bg-brand/90 hover:shadow-md"
                    >
                        Daftar Sekarang
                        <span
                            class="ml-2 transition-transform duration-200 group-hover:translate-x-1"
                            >→</span
                        >
                    </a>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>
