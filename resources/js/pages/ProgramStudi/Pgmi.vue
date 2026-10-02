<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import PublicLayout from "@/layouts/PublicLayout.vue";
</script>

<template>
    <Head title="Pendidikan Guru Madrasah Ibtidaiyah (PGMI) - Ilyas institut" />

    <PublicLayout>
        <!-- 1. HERO SECTION -->
        <section
            class="relative pt-32 pb-24 lg:pt-48 lg:pb-36 overflow-hidden flex items-center justify-center"
        >
            <!-- Gambar Background -->
            <div class="absolute inset-0 z-0">
                <img
                    src="/images/programs/pgmi.webp"
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
                    Pendidikan Guru<br class="hidden sm:block" />
                    Madrasah Ibtidaiyah
                </h1>
                <p
                    class="mt-6 mx-auto max-w-3xl text-lg text-white/90 leading-relaxed drop-shadow-md"
                >
                    Mempelajari ilmu pendidikan dan pembelajaran untuk
                    mempersiapkan calon guru Madrasah Ibtidaiyah yang memiliki
                    kemampuan mengajar, memahami perkembangan peserta didik,
                    menguasai pembelajaran dasar, serta mampu mengintegrasikan
                    nilai-nilai keislaman dalam pendidikan.
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
                            <div>
                                : S1 Pendidikan Guru Madrasah Ibtidaiyah (PGMI)
                            </div>
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
                            <div>
                                : Pendidikan Guru Madrasah Ibtidaiyah /
                                Pendidikan Dasar
                            </div>
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
                    <div
                        class="space-y-4 text-brand-ink/80 text-lg leading-relaxed mb-8"
                    >
                        <p>
                            Program Studi
                            <strong class="text-brand-ink">
                                S1 Pendidikan Guru Madrasah Ibtidaiyah (PGMI)
                            </strong>
                            dirancang untuk mahasiswa yang ingin mempelajari
                            dunia pendidikan dasar, khususnya pendidikan pada
                            jenjang Madrasah Ibtidaiyah.
                        </p>
                        <p>
                            Mahasiswa akan mempelajari berbagai ilmu yang
                            berkaitan dengan proses pendidikan dan pembelajaran,
                            mulai dari dasar-dasar pendidikan, psikologi
                            perkembangan anak, strategi pembelajaran,
                            pengembangan kurikulum, evaluasi pembelajaran,
                            hingga berbagai metode mengajar yang sesuai dengan
                            karakteristik peserta didik di tingkat dasar.
                        </p>
                        <p>
                            Selain mempelajari teori pendidikan, mahasiswa juga
                            diarahkan untuk memahami bagaimana menciptakan
                            pembelajaran yang menarik, mudah dipahami, dan
                            sesuai dengan kebutuhan anak. Pembelajaran juga
                            mengintegrasikan nilai-nilai keislaman sehingga
                            pendidikan tidak hanya berfokus pada kemampuan
                            akademik, tetapi juga pada pembentukan karakter dan
                            akhlak peserta didik.
                        </p>
                        <p>
                            Melalui sistem pembelajaran online, mahasiswa dapat
                            mengikuti proses perkuliahan secara lebih fleksibel
                            dengan tetap mendapatkan materi dan pengalaman
                            pembelajaran yang terarah.
                        </p>
                    </div>

                    <h2
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Visi
                    </h2>
                    <p class="text-brand-ink/80 text-lg leading-relaxed mb-4">
                        Menjadi program studi yang unggul dalam pendidikan guru
                        Madrasah Ibtidaiyah serta menghasilkan lulusan yang
                        memiliki kompetensi pedagogik, profesional, berakhlak
                        mulia, mampu mengembangkan pembelajaran, dan memberikan
                        manfaat bagi masyarakat.
                    </p>
                    <p
                        class="text-brand-ink/70 text-base leading-relaxed italic mb-8"
                    >
                        * Visi ini menekankan bahwa lulusan PGMI tidak hanya
                        dipersiapkan untuk memahami teori pendidikan, tetapi
                        juga memiliki kemampuan untuk menerapkannya dalam proses
                        pembelajaran.
                    </p>

                    <h2
                        class="text-2xl sm:text-3xl font-bold text-brand-ink border-l-4 border-[#C9A227] pl-5 mb-8"
                    >
                        Misi
                    </h2>
                    <div class="space-y-6 text-lg">
                        <div>
                            <h4 class="font-bold text-brand-ink mb-2">
                                01 — Mengembangkan Kompetensi Pendidikan
                            </h4>
                            <p class="text-brand-ink/80 leading-relaxed">
                                Membantu mahasiswa memahami dasar-dasar
                                pendidikan, perkembangan peserta didik, strategi
                                pembelajaran, pengelolaan kelas, serta berbagai
                                pendekatan yang diperlukan dalam pendidikan
                                Madrasah Ibtidaiyah.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-bold text-brand-ink mb-2">
                                02 — Meningkatkan Kemampuan Mengajar
                            </h4>
                            <p class="text-brand-ink/80 leading-relaxed">
                                Mempersiapkan mahasiswa agar mampu merancang,
                                melaksanakan, dan mengevaluasi pembelajaran yang
                                sesuai dengan karakteristik peserta didik pada
                                jenjang pendidikan dasar.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-bold text-brand-ink mb-2">
                                03 — Mengintegrasikan Nilai-Nilai Keislaman
                            </h4>
                            <p class="text-brand-ink/80 leading-relaxed">
                                Mengembangkan pembelajaran yang menggabungkan
                                ilmu pendidikan dengan nilai-nilai Islam
                                sehingga proses pendidikan dapat mendukung
                                pembentukan akhlak dan karakter peserta didik.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-bold text-brand-ink mb-2">
                                04 — Memanfaatkan Teknologi dalam Pendidikan
                            </h4>
                            <p class="text-brand-ink/80 leading-relaxed">
                                Mendorong mahasiswa untuk memanfaatkan teknologi
                                dalam proses pembelajaran, penyusunan materi,
                                pengembangan media pendidikan, serta pengelolaan
                                pembelajaran secara digital.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-bold text-brand-ink mb-2">
                                05 — Mengembangkan Penelitian dan Pengabdian
                            </h4>
                            <p class="text-brand-ink/80 leading-relaxed">
                                Mendorong mahasiswa untuk melakukan kajian dan
                                penelitian di bidang pendidikan dasar serta
                                berkontribusi melalui kegiatan pengabdian yang
                                memberikan manfaat bagi sekolah dan masyarakat.
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
                        class="list-decimal list-outside ml-6 space-y-4 text-brand-ink/80 text-lg leading-relaxed"
                    >
                        <li>
                            <strong class="text-brand-ink"
                                >Dasar-Dasar Pendidikan:</strong
                            >
                            Mempelajari konsep dasar pendidikan, tujuan
                            pendidikan, teori belajar, serta berbagai konsep
                            yang menjadi dasar dalam pelaksanaan pendidikan.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Psikologi Perkembangan Anak:</strong
                            >
                            Mempelajari perkembangan peserta didik dari sisi
                            kognitif, sosial, emosional, dan karakter sehingga
                            mahasiswa dapat memahami kebutuhan anak dalam proses
                            pembelajaran.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Strategi dan Metode Pembelajaran:</strong
                            >
                            Mempelajari berbagai strategi dan metode
                            pembelajaran yang dapat digunakan untuk menciptakan
                            proses belajar yang aktif, menarik, dan sesuai
                            dengan karakteristik peserta didik.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Pengembangan Kurikulum:</strong
                            >
                            Mempelajari bagaimana kurikulum pendidikan disusun,
                            dikembangkan, diterapkan, dan disesuaikan dengan
                            kebutuhan peserta didik serta perkembangan
                            pendidikan.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Media dan Teknologi Pembelajaran:</strong
                            >
                            Mempelajari penggunaan media pembelajaran dan
                            teknologi digital untuk membantu guru menyampaikan
                            materi secara lebih menarik dan mudah dipahami.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Evaluasi Pembelajaran:</strong
                            >
                            Mempelajari cara melakukan penilaian terhadap proses
                            dan hasil belajar peserta didik serta menggunakan
                            hasil evaluasi untuk meningkatkan kualitas
                            pembelajaran.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Pembelajaran Tematik dan Mata Pelajaran
                                Dasar:</strong
                            >
                            Mempelajari pembelajaran berbagai bidang yang umum
                            diajarkan pada tingkat dasar, termasuk Bahasa
                            Indonesia, Matematika, IPA, IPS, Pendidikan
                            Pancasila, serta pembelajaran yang terintegrasi
                            dengan nilai-nilai keislaman.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Pendidikan Islam di Madrasah
                                Ibtidaiyah:</strong
                            >
                            Mempelajari penerapan pendidikan Islam dalam
                            lingkungan Madrasah Ibtidaiyah serta bagaimana
                            nilai-nilai keislaman dapat diterapkan dalam
                            kegiatan pembelajaran dan pembentukan karakter
                            peserta didik.
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
                            Lulusan diharapkan memiliki sikap bertanggung jawab,
                            berakhlak mulia, menghargai peserta didik,
                            menjunjung nilai-nilai Islam, serta mampu
                            menunjukkan sikap profesional dalam menjalankan
                            peran di bidang pendidikan.
                        </li>
                        <li>
                            <strong class="text-brand-ink">Pengetahuan:</strong>
                            Lulusan memahami konsep dasar pendidikan,
                            perkembangan peserta didik, teori dan strategi
                            pembelajaran, kurikulum, evaluasi pendidikan, media
                            pembelajaran, serta berbagai pengetahuan yang
                            berkaitan dengan pendidikan Madrasah Ibtidaiyah.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Keterampilan:</strong
                            >
                            Lulusan mampu merancang pembelajaran, menyusun bahan
                            dan media pembelajaran, melaksanakan kegiatan
                            belajar mengajar, melakukan evaluasi pembelajaran,
                            memanfaatkan teknologi pendidikan, serta melakukan
                            kajian sederhana terhadap berbagai persoalan
                            pendidikan.
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
                    <ul
                        class="list-disc list-outside ml-6 space-y-4 text-brand-ink/80 text-lg leading-relaxed"
                    >
                        <li>
                            <strong class="text-brand-ink"
                                >Guru Madrasah Ibtidaiyah:</strong
                            >
                            Berperan dalam melaksanakan proses pembelajaran dan
                            pendidikan bagi peserta didik pada jenjang Madrasah
                            Ibtidaiyah.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Guru Pendidikan Dasar:</strong
                            >
                            Memanfaatkan kompetensi pendidikan yang diperoleh
                            untuk berkontribusi dalam berbagai lingkungan
                            pendidikan dasar sesuai bidang dan ketentuan yang
                            berlaku.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Pengembang Media Pembelajaran:</strong
                            >
                            Berperan dalam membuat dan mengembangkan bahan serta
                            media pembelajaran untuk membantu proses belajar
                            peserta didik.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Pengelola Pendidikan:</strong
                            >
                            Dapat berkontribusi dalam pengelolaan lembaga
                            pendidikan, kegiatan akademik, maupun program
                            pendidikan.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Tenaga Kependidikan:</strong
                            >
                            Berperan dalam mendukung pelaksanaan administrasi
                            dan kegiatan pendidikan di sekolah atau lembaga
                            pendidikan.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Peneliti Pendidikan:</strong
                            >
                            Melakukan penelitian dan kajian sederhana mengenai
                            pembelajaran, peserta didik, dan berbagai persoalan
                            dalam dunia pendidikan dasar.
                        </li>
                        <li>
                            <strong class="text-brand-ink"
                                >Pengembang Program Pendidikan:</strong
                            >
                            Berkontribusi dalam kegiatan pengembangan program,
                            pelatihan, dan kegiatan pendidikan yang berkaitan
                            dengan anak dan pendidikan dasar.
                        </li>
                    </ul>
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
