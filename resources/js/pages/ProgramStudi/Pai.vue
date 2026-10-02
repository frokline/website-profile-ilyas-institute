<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import PublicLayout from "@/layouts/PublicLayout.vue";
</script>

<template>
    <Head title="Pendidikan Agama Islam (PAI) - Ilyas institut" />

    <PublicLayout>
        <!-- 1. HERO SECTION -->
        <section
            class="relative pt-32 pb-24 lg:pt-48 lg:pb-36 overflow-hidden flex items-center justify-center"
        >
            <!-- Gambar Background -->
            <div class="absolute inset-0 z-0">
                <img
                    src="/images/programs/pai.webp"
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
                        PROGRAM STUDI S1
                    </span>
                    <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                </div>
                <h1
                    class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl drop-shadow-xl"
                >
                    Pendidikan Agama Islam
                </h1>
                <p
                    class="mt-6 mx-auto max-w-2xl text-lg text-white/90 leading-relaxed drop-shadow-md"
                >
                    Mempersiapkan mahasiswa untuk memahami ilmu pendidikan dan
                    keislaman serta mengembangkan kompetensi sebagai pendidik
                    yang profesional dan berakhlak.
                </p>
            </div>
        </section>

        <!-- 2. KONTEN UTAMA (Gaya Dokumen Resmi Institusi) -->
        <section class="bg-white py-16 sm:py-24">
            <div class="mx-auto max-w-4xl px-6 sm:px-8 lg:px-12">
                <!-- INFORMASI PROGRAM -->
                <div class="mb-16">
                    <h2
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Informasi Program
                    </h2>
                    <div class="space-y-4 text-brand-ink/80 text-lg">
                        <div
                            class="grid grid-cols-1 sm:grid-cols-[200px_1fr] gap-1 sm:gap-6"
                        >
                            <div class="font-semibold text-brand-ink">
                                Program Studi
                            </div>
                            <div>: S1 Pendidikan Agama Islam (PAI)</div>
                        </div>
                        <div
                            class="grid grid-cols-1 sm:grid-cols-[200px_1fr] gap-1 sm:gap-6"
                        >
                            <div class="font-semibold text-brand-ink">
                                Gelar Akademik
                            </div>
                            <div>: Sarjana Pendidikan (S.Pd.)</div>
                        </div>
                        <div
                            class="grid grid-cols-1 sm:grid-cols-[200px_1fr] gap-1 sm:gap-6"
                        >
                            <div class="font-semibold text-brand-ink">
                                Bidang Keilmuan
                            </div>
                            <div>: Pendidikan & Keislaman</div>
                        </div>
                    </div>
                </div>

                <!-- TENTANG & VISI MISI -->
                <div class="mb-16">
                    <h2
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Tentang Program Studi
                    </h2>
                    <p class="text-brand-ink/80 text-lg leading-relaxed mb-8">
                        Program Studi
                        <strong class="text-brand-ink">
                            S1 Pendidikan Agama Islam (PAI)
                        </strong>
                        di Ilyas institut dirancang untuk membekali mahasiswa
                        dengan pengetahuan dan keterampilan dalam bidang
                        pendidikan Islam. Pembelajaran memadukan kajian
                        pendidikan dengan ilmu-ilmu keislaman seperti Al-Qur'an,
                        Hadis, Aqidah, Akhlak, Fiqh, serta bidang keilmuan Islam
                        lainnya.
                    </p>

                    <h2
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Visi
                    </h2>
                    <p class="text-brand-ink/80 text-lg leading-relaxed mb-8">
                        Menjadi program studi Pendidikan Agama Islam yang
                        menghasilkan pendidik dan praktisi pendidikan Islam yang
                        berilmu, berakhlak, profesional, serta mampu beradaptasi
                        dengan perkembangan pendidikan dan teknologi.
                    </p>

                    <h2
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Misi
                    </h2>
                    <div class="space-y-6 text-lg">
                        <div>
                            <h4 class="font-bold text-brand-ink mb-2">
                                01 — Integrasi Keilmuan
                            </h4>
                            <p class="text-brand-ink/80 leading-relaxed">
                                Menyelenggarakan pendidikan Pendidikan Agama
                                Islam yang mengintegrasikan ilmu pendidikan dan
                                ilmu keislaman secara komprehensif.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-bold text-brand-ink mb-2">
                                02 — Pengembangan Kompetensi
                            </h4>
                            <p class="text-brand-ink/80 leading-relaxed">
                                Mengembangkan kompetensi mahasiswa dalam bidang
                                pedagogik, profesional, sosial, dan kepribadian
                                yang tangguh.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-bold text-brand-ink mb-2">
                                03 — Pemanfaatan Teknologi
                            </h4>
                            <p class="text-brand-ink/80 leading-relaxed">
                                Mengembangkan inovasi dan pemanfaatan teknologi
                                digital dalam pembelajaran serta pendidikan
                                Islam.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-bold text-brand-ink mb-2">
                                04 — Pengabdian & Dakwah
                            </h4>
                            <p class="text-brand-ink/80 leading-relaxed">
                                Mendorong penerapan ilmu melalui aktivitas
                                pendidikan, penelitian, pengabdian masyarakat,
                                dan kegiatan dakwah yang bermanfaat luas.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FOKUS KURIKULUM -->
                <div class="mb-16">
                    <h2
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Fokus Kurikulum
                    </h2>
                    <ul
                        class="list-disc list-outside ml-6 space-y-4 text-brand-ink/80 text-lg leading-relaxed"
                    >
                        <li>
                            <strong class="text-brand-ink"
                                >Ilmu Pendidikan Islam:</strong
                            >
                            Landasan pendidikan, pedagogik, psikologi
                            pendidikan, strategi pembelajaran, dan evaluasi
                            pendidikan.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Studi Keislaman:</strong
                            >
                            Al-Qur'an, Hadis, Aqidah, Akhlak, Fiqh, dan Sejarah
                            Kebudayaan Islam.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Teknologi Pendidikan:</strong
                            >
                            Pemanfaatan teknologi digital, media pembelajaran,
                            dan sistem pembelajaran berbasis teknologi terkini.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Praktik Pembelajaran:</strong
                            >
                            Perencanaan pembelajaran, microteaching, praktik
                            pengalaman mengajar, dan pengelolaan kelas.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Penelitian Pendidikan:</strong
                            >
                            Metodologi penelitian, penulisan karya ilmiah, dan
                            kajian permasalahan aktual dalam pendidikan Islam.
                        </li>
                    </ul>
                </div>

                <!-- CAPAIAN PEMBELAJARAN -->
                <div class="mb-16">
                    <h2
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Capaian Pembelajaran
                    </h2>
                    <ul
                        class="list-disc list-outside ml-6 space-y-4 text-brand-ink/80 text-lg leading-relaxed"
                    >
                        <li>
                            <strong class="text-brand-ink">Sikap:</strong>
                            Memiliki integritas, tanggung jawab, akhlak mulia,
                            dan sikap profesional dalam kehidupan akademik
                            maupun sosial masyarakat.
                        </li>
                        <li>
                            <strong class="text-brand-ink">Pengetahuan:</strong>
                            Memahami konsep dasar pendidikan Islam, pedagogik,
                            psikologi pendidikan, metodologi pembelajaran, serta
                            kajian keislaman secara mendalam.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Keterampilan Khusus:</strong
                            >
                            Mampu merancang, melaksanakan, dan mengevaluasi
                            sistem pembelajaran Pendidikan Agama Islam sesuai
                            dengan dinamika dan kebutuhan peserta didik.
                        </li>
                    </ul>
                </div>

                <!-- PROSPEK LULUSAN -->
                <div class="mb-16">
                    <h2
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Prospek Lulusan
                    </h2>
                    <div
                        class="grid sm:grid-cols-2 gap-4 text-brand-ink/80 text-lg"
                    >
                        <div class="flex items-center gap-3">
                            <span class="text-[#C9A227]">—</span> Guru
                            Pendidikan Agama Islam
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[#C9A227]">—</span> Peneliti
                            Bidang Pendidikan Islam
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[#C9A227]">—</span> Tenaga
                            Kependidikan & Manajerial
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[#C9A227]">—</span> Praktisi
                            Pendidikan & Dakwah
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[#C9A227]">—</span> Pengembang
                            Media Pembelajaran
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[#C9A227]">—</span> Pemberdaya
                            Masyarakat
                        </div>
                    </div>
                </div>

                <!-- CALL TO ACTION (PENUTUP) -->
                <div
                    class="mt-20 border-t border-brand/10 pt-10 pb-4 text-center"
                >
                    <h2 class="text-2xl font-bold text-brand-ink mb-3">
                        Ingin Bergabung?
                    </h2>
                    <p class="text-brand-ink/70 text-lg mb-8">
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
