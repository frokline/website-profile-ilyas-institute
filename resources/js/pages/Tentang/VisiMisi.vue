<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
</script>

<template>
    <Head title="Visi, Misi & Tujuan - Ilyas institut" />

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
                    Visi, Misi, dan Tujuan
                </h1>
                <p
                    class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-white/90 drop-shadow-md"
                >
                    Landasan arah pengembangan Ilyas institut dalam
                    menyelenggarakan pendidikan online ilmu syar'i serta
                    membentuk generasi sarjana yang beriman, berilmu, beramal,
                    dan berdakwah.
                </p>
            </div>
        </section>

        <!-- 2. KONTEN HALAMAN -->
        <section class="bg-white py-16 sm:py-24">
            <div class="mx-auto max-w-5xl space-y-20 px-6 sm:px-8">
                <!-- A. RUMUSAN VISI -->
                <div>
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Rumusan Visi Ilyas institut
                    </h2>
                    <div
                        class="space-y-6 text-justify text-base leading-relaxed text-gray-700"
                    >
                        <blockquote
                            class="rounded-xl border border-brand/10 bg-brand-surface p-6 text-center text-xl leading-snug font-bold text-brand-ink"
                        >
                            “Menjadi Lembaga Pendidikan Online Ilmu Syar'i
                            Terpercaya Dalam Membentuk Generasi Sarjana Yang
                            Beriman, Berilmu, Beramal, Berdakwah dengan Faham
                            Ahlussunnah Wal Jamaah.”
                        </blockquote>
                        <p>
                            Visi tersebut menjadi landasan utama dalam
                            penyelenggaraan dan pengembangan Ilyas institut.
                            Rumusan visi menggambarkan arah yang ingin dicapai
                            lembaga, yaitu membangun pendidikan online ilmu
                            syar'i yang memiliki orientasi akademik sekaligus
                            pembentukan karakter dan pengamalan nilai-nilai
                            Islam.
                        </p>
                        <p>
                            Dalam pelaksanaannya, visi Ilyas institut tidak
                            hanya diarahkan pada penguasaan pengetahuan, tetapi
                            juga pada terbentuknya generasi sarjana yang mampu
                            menghubungkan antara iman, ilmu, amal, dan dakwah.
                            Dengan demikian, pendidikan diharapkan menjadi
                            sarana pembentukan pribadi yang memiliki pemahaman
                            keislaman, akhlak, tanggung jawab, serta kesiapan
                            untuk memberikan manfaat bagi masyarakat.
                        </p>
                    </div>
                </div>

                <!-- B. PENJABARAN VISI -->
                <div>
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Penjabaran Visi
                    </h2>
                    <div
                        class="space-y-8 text-justify text-base leading-relaxed text-gray-700"
                    >
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-brand-ink">
                                1. Lembaga Pendidikan Online
                            </h3>
                            <p>
                                Ilyas institut menempatkan pendidikan online
                                sebagai bagian penting dari penyelenggaraan
                                pendidikan. Model pembelajaran online
                                memungkinkan proses pendidikan ilmu syar'i
                                diselenggarakan dengan memanfaatkan teknologi
                                digital sehingga pembelajaran dapat menjangkau
                                mahasiswa tanpa terbatas oleh tempat. Arah ini
                                didukung melalui pemanfaatan sistem pembelajaran
                                digital, LMS, pembelajaran asynchronous yang
                                fleksibel, serta kegiatan synchronous melalui
                                live streaming.
                            </p>
                        </div>
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-brand-ink">
                                2. Ilmu Syar'i
                            </h3>
                            <p>
                                Ilmu syar'i menjadi dasar keilmuan yang menjadi
                                perhatian utama dalam arah pendidikan Ilyas
                                institut. Pendidikan diarahkan agar mahasiswa
                                memperoleh pemahaman terhadap ilmu-ilmu
                                keislaman yang menjadi bekal dalam memahami,
                                mengamalkan, dan menyampaikan ajaran Islam.
                                Penguasaan ilmu tidak ditempatkan hanya sebagai
                                pencapaian akademik, tetapi sebagai bagian dari
                                proses pembentukan pribadi yang mampu membawa
                                ilmu tersebut ke dalam kehidupan nyata.
                            </p>
                        </div>
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-brand-ink">
                                3. Terpercaya
                            </h3>
                            <p>
                                Kata “terpercaya” dalam visi merupakan arah
                                pengembangan kelembagaan yang menunjukkan
                                komitmen Ilyas institut untuk membangun
                                pendidikan yang memiliki tata kelola,
                                pembelajaran, pelayanan, dan lingkungan akademik
                                yang dapat dipertanggungjawabkan. Kepercayaan
                                tersebut diarahkan untuk dibangun melalui
                                konsistensi dalam penyelenggaraan pendidikan,
                                penguatan kualitas pembelajaran, pengembangan
                                sumber daya manusia, serta pelaksanaan
                                pendidikan yang selaras dengan nilai-nilai
                                Islam.
                            </p>
                        </div>
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-brand-ink">
                                4. Generasi Sarjana yang Beriman, Berilmu,
                                Beramal
                            </h3>
                            <p>
                                Ilyas institut mengarahkan pendidikan kepada
                                pembentukan sarjana yang tidak hanya memiliki
                                kemampuan akademik, tetapi juga memiliki iman
                                dan karakter yang baik. Beriman menunjukkan
                                landasan spiritual, berilmu menunjukkan
                                penguasaan pengetahuan, sedangkan beramal
                                menunjukkan kemampuan untuk menerapkan ilmu
                                dalam kehidupan. Ketiga unsur tersebut dipandang
                                sebagai bagian yang saling berkaitan dalam
                                proses pendidikan.
                            </p>
                        </div>
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-brand-ink">
                                5. Berdakwah dengan Faham Ahlussunnah Wal Jamaah
                            </h3>
                            <p>
                                Visi Ilyas institut juga menempatkan dakwah
                                sebagai bagian dari orientasi lulusan. Ilmu yang
                                diperoleh diharapkan dapat menjadi bekal untuk
                                menyampaikan kebaikan dan memberikan manfaat di
                                tengah masyarakat. Pelaksanaan dakwah tersebut
                                diarahkan dengan faham Ahlussunnah Wal Jamaah
                                sebagaimana disebutkan dalam rumusan visi.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- C. RUMUSAN MISI -->
                <div>
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Rumusan Misi Ilyas institut
                    </h2>
                    <div
                        class="space-y-6 text-justify text-base leading-relaxed text-gray-700"
                    >
                        <p>
                            Untuk mewujudkan visi tersebut, Ilyas institut
                            menetapkan misi sebagai arah utama dalam
                            penyelenggaraan pendidikan dan pengembangan
                            kelembagaan. Keempat misi berikut merupakan rumusan
                            inti yang menjadi dasar pelaksanaan kegiatan Ilyas
                            institut.
                        </p>
                        <ol
                            class="list-decimal space-y-4 pl-6 text-lg font-bold text-brand-ink"
                        >
                            <li>
                                Menyediakan Pendidikan Online Ilmu Syar'i Yang
                                Berkualitas.
                            </li>
                            <li>
                                Mencetak Sarjana Yang Islami Dan Berakhlakul
                                Karimah.
                            </li>
                            <li>
                                Mencetak Sarjana Yang Menguasai Ilmu Syar'i
                                Untuk diamalkan dan Di Dakwahkan.
                            </li>
                            <li>
                                Berkontribusi Untuk Ummat dan Peradaban Islam.
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- D. PENJABARAN MISI -->
                <div>
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Penjabaran Setiap Misi
                    </h2>
                    <div
                        class="space-y-8 text-justify text-base leading-relaxed text-gray-700"
                    >
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-brand-ink">
                                Misi 1 — Menyediakan Pendidikan Online Ilmu
                                Syar'i Yang Berkualitas
                            </h3>
                            <p class="mb-3">
                                Misi pertama menegaskan komitmen Ilyas institut
                                dalam menyediakan pendidikan ilmu syar'i dengan
                                memanfaatkan sistem pembelajaran online.
                                Pendidikan online tidak hanya dipahami sebagai
                                penggunaan media digital, tetapi sebagai
                                penyelenggaraan proses pembelajaran yang
                                dirancang agar mahasiswa tetap memperoleh
                                pengalaman belajar yang terarah. Dalam mendukung
                                proses tersebut, Ilyas institut menggunakan LMS
                                serta memadukan pembelajaran asynchronous yang
                                fleksibel dengan kegiatan synchronous melalui
                                live streaming.
                            </p>
                        </div>
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-brand-ink">
                                Misi 2 — Mencetak Sarjana Yang Islami Dan
                                Berakhlakul Karimah
                            </h3>
                            <p class="mb-3">
                                Misi kedua menempatkan pembentukan karakter
                                sebagai bagian penting dari pendidikan. Lulusan
                                tidak hanya diharapkan memiliki kompetensi
                                akademik, tetapi juga memiliki kepribadian
                                Islami dan akhlakul karimah. Arah tersebut
                                diwujudkan melalui lingkungan pendidikan yang
                                menghubungkan proses belajar dengan nilai-nilai
                                Islam, tanggung jawab, integritas, adab, dan
                                sikap yang baik dalam kehidupan akademik maupun
                                kehidupan bermasyarakat.
                            </p>
                        </div>
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-brand-ink">
                                Misi 3 — Mencetak Sarjana Yang Menguasai Ilmu
                                Syar'i Untuk diamalkan dan Di Dakwahkan
                            </h3>
                            <p class="mb-3">
                                Misi ketiga menegaskan bahwa ilmu syar'i yang
                                dipelajari harus memiliki hubungan dengan amal
                                dan dakwah. Penguasaan ilmu diarahkan agar
                                mahasiswa tidak berhenti pada pemahaman
                                teoritis, tetapi mampu membawa ilmu tersebut ke
                                dalam praktik kehidupan. Lulusan diharapkan
                                memiliki bekal keilmuan yang dapat diamalkan
                                sekaligus menjadi dasar dalam menyampaikan
                                kebaikan dan dakwah kepada masyarakat.
                            </p>
                        </div>
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-brand-ink">
                                Misi 4 — Berkontribusi Untuk Ummat dan Peradaban
                                Islam
                            </h3>
                            <p class="mb-3">
                                Misi keempat memperluas orientasi Ilyas institut
                                dari pendidikan individu menuju kemanfaatan yang
                                lebih luas bagi ummat dan peradaban Islam.
                                Pendidikan dipandang sebagai salah satu sarana
                                untuk menyiapkan sumber daya manusia yang
                                memiliki ilmu, nilai, dan kepedulian terhadap
                                masyarakat. Melalui lulusan dan pengembangan
                                pendidikan, Ilyas institut diarahkan untuk
                                memberikan kontribusi dalam pengembangan
                                keilmuan, pendidikan, dakwah, dan kehidupan
                                masyarakat sesuai dengan kapasitas serta
                                perkembangan lembaga.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- E. TUJUAN -->
                <div>
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Tujuan Ilyas institut
                    </h2>
                    <div
                        class="space-y-6 text-justify text-base leading-relaxed text-gray-700"
                    >
                        <p>
                            Tujuan Ilyas institut merupakan penjabaran arah yang
                            ingin diwujudkan melalui pelaksanaan visi dan misi.
                            Tujuan ini menjadi dasar pengembangan pendidikan,
                            pembentukan lulusan, penguatan dakwah, kontribusi
                            kepada masyarakat, serta pengembangan kelembagaan.
                        </p>
                        <ol class="list-decimal space-y-3 pl-6">
                            <li>
                                Menyelenggarakan pendidikan online ilmu syar'i
                                yang terstruktur, relevan, dan sesuai dengan
                                kebutuhan pembelajaran di era digital.
                            </li>
                            <li>
                                Membentuk lulusan yang memiliki pemahaman
                                keilmuan, kepribadian Islami, serta akhlakul
                                karimah.
                            </li>
                            <li>
                                Membekali mahasiswa dengan kemampuan untuk
                                menghubungkan ilmu yang dipelajari dengan
                                pengamalan dalam kehidupan sehari-hari.
                            </li>
                            <li>
                                Mempersiapkan lulusan agar memiliki bekal untuk
                                berkontribusi dalam kegiatan dakwah dan
                                kemanfaatan masyarakat.
                            </li>
                            <li>
                                Membangun lingkungan pendidikan yang mendukung
                                pengembangan ilmu, nilai-nilai Islam, karakter,
                                dan budaya belajar.
                            </li>
                            <li>
                                Mengembangkan kontribusi Ilyas institut terhadap
                                ummat melalui pendidikan dan pengembangan sumber
                                daya manusia yang berlandaskan nilai-nilai
                                Islam.
                            </li>
                            <li>
                                Mengembangkan Ilyas institut secara bertahap
                                menuju cita-cita menjadi Universitas Islam
                                Global pada tahun 2030.
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- F. SASARAN PENGEMBANGAN -->
                <div>
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Sasaran Pengembangan
                    </h2>
                    <div
                        class="grid gap-8 text-base text-gray-700 md:grid-cols-2"
                    >
                        <div
                            class="rounded-xl border border-brand/5 bg-brand-surface p-6"
                        >
                            <h3
                                class="mb-4 border-b border-[#C9A227]/30 pb-2 text-lg font-bold text-brand-ink"
                            >
                                1. Bidang Pendidikan
                            </h3>
                            <ul
                                class="list-disc space-y-2 pl-5 text-sm leading-relaxed"
                            >
                                <li>
                                    Penguatan penyelenggaraan pendidikan online
                                    ilmu syar'i.
                                </li>
                                <li>Pengembangan pembelajaran melalui LMS.</li>
                                <li>
                                    Penguatan pembelajaran asynchronous dan
                                    synchronous.
                                </li>
                                <li>
                                    Peningkatan kualitas proses dan layanan
                                    pembelajaran.
                                </li>
                            </ul>
                        </div>
                        <div
                            class="rounded-xl border border-brand/5 bg-brand-surface p-6"
                        >
                            <h3
                                class="mb-4 border-b border-[#C9A227]/30 pb-2 text-lg font-bold text-brand-ink"
                            >
                                2. Mahasiswa dan Lulusan
                            </h3>
                            <ul
                                class="list-disc space-y-2 pl-5 text-sm leading-relaxed"
                            >
                                <li>
                                    Penguatan pemahaman ilmu syar'i mahasiswa.
                                </li>
                                <li>
                                    Pembentukan sarjana yang Islami dan
                                    berakhlakul karimah.
                                </li>
                                <li>Penguatan kemampuan mengamalkan ilmu.</li>
                                <li>
                                    Pembekalan untuk berkontribusi dalam dakwah
                                    dan masyarakat.
                                </li>
                            </ul>
                        </div>
                        <div
                            class="rounded-xl border border-brand/5 bg-brand-surface p-6"
                        >
                            <h3
                                class="mb-4 border-b border-[#C9A227]/30 pb-2 text-lg font-bold text-brand-ink"
                            >
                                3. Keilmuan dan Dakwah
                            </h3>
                            <ul
                                class="list-disc space-y-2 pl-5 text-sm leading-relaxed"
                            >
                                <li>
                                    Penguatan budaya belajar dan kajian
                                    keislaman.
                                </li>
                                <li>Penguatan penguasaan ilmu syar'i.</li>
                                <li>
                                    Mendorong penerapan ilmu dalam kehidupan.
                                </li>
                                <li>
                                    Penguatan orientasi dakwah dan kemanfaatan
                                    ilmu.
                                </li>
                            </ul>
                        </div>
                        <div
                            class="rounded-xl border border-brand/5 bg-brand-surface p-6"
                        >
                            <h3
                                class="mb-4 border-b border-[#C9A227]/30 pb-2 text-lg font-bold text-brand-ink"
                            >
                                4. Kontribusi kepada Ummat
                            </h3>
                            <ul
                                class="list-disc space-y-2 pl-5 text-sm leading-relaxed"
                            >
                                <li>
                                    Memperluas kemanfaatan pendidikan bagi
                                    masyarakat.
                                </li>
                                <li>
                                    Mendorong lulusan agar berperan dalam
                                    kehidupan masyarakat.
                                </li>
                                <li>
                                    Mengembangkan kontribusi ilmu untuk
                                    kemaslahatan ummat.
                                </li>
                                <li>
                                    Mengarahkan pendidikan pada kontribusi
                                    terhadap peradaban Islam.
                                </li>
                            </ul>
                        </div>
                        <div
                            class="rounded-xl border border-brand/5 bg-brand-surface p-6 md:col-span-2"
                        >
                            <h3
                                class="mb-4 border-b border-[#C9A227]/30 pb-2 text-lg font-bold text-brand-ink"
                            >
                                5. Pengembangan Kelembagaan
                            </h3>
                            <ul
                                class="list-disc space-y-2 pl-5 text-sm leading-relaxed"
                            >
                                <li>
                                    Penguatan sistem pendidikan dan pengelolaan
                                    pembelajaran digital.
                                </li>
                                <li>
                                    Pengembangan sumber daya manusia dan tata
                                    kelola kelembagaan secara bertahap.
                                </li>
                                <li>
                                    Penguatan program dan layanan pendidikan
                                    sesuai arah pengembangan lembaga.
                                </li>
                                <li>
                                    Menyiapkan tahapan pengembangan menuju
                                    cita-cita Universitas Islam Global 2030.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- G. STRATEGI / ARAH PENCAPAIAN -->
                <div>
                    <h2
                        class="mb-8 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Strategi dan Arah Pencapaian
                    </h2>
                    <div
                        class="space-y-8 text-justify text-base leading-relaxed text-gray-700"
                    >
                        <p>
                            Pencapaian visi dan misi dilakukan secara bertahap
                            melalui penguatan bidang pendidikan, mahasiswa dan
                            lulusan, keilmuan dan dakwah, kontribusi kepada
                            ummat, serta pengembangan kelembagaan. Arah
                            pencapaian berikut menjadi kerangka pengembangan
                            yang dapat disesuaikan dengan perkembangan Ilyas
                            institut.
                        </p>
                        <div class="border-l-4 border-[#C9A227] pl-5">
                            <h3
                                class="mb-2 text-lg font-bold text-brand-ink sm:text-xl"
                            >
                                1. Penguatan Pendidikan Online
                            </h3>
                            <p>
                                Memperkuat sistem pembelajaran online melalui
                                LMS, pembelajaran asynchronous, pembelajaran
                                synchronous, serta pengembangan proses
                                pembelajaran yang terstruktur dan berorientasi
                                pada kualitas.
                            </p>
                        </div>
                        <div class="border-l-4 border-[#C9A227] pl-5">
                            <h3
                                class="mb-2 text-lg font-bold text-brand-ink sm:text-xl"
                            >
                                2. Penguatan Kurikulum dan Keilmuan
                            </h3>
                            <p>
                                Mengembangkan pembelajaran yang mendukung
                                penguasaan ilmu syar'i sekaligus membangun
                                keterkaitan antara ilmu, amal, karakter, dan
                                dakwah.
                            </p>
                        </div>
                        <div class="border-l-4 border-[#C9A227] pl-5">
                            <h3
                                class="mb-2 text-lg font-bold text-brand-ink sm:text-xl"
                            >
                                3. Pembentukan Karakter dan Akhlak
                            </h3>
                            <p>
                                Mengintegrasikan nilai-nilai Islam, adab,
                                tanggung jawab, dan akhlakul karimah dalam
                                lingkungan pendidikan sehingga pembentukan
                                lulusan berjalan seiring dengan proses
                                pengembangan kompetensi akademik.
                            </p>
                        </div>
                        <div class="border-l-4 border-[#C9A227] pl-5">
                            <h3
                                class="mb-2 text-lg font-bold text-brand-ink sm:text-xl"
                            >
                                4. Penguatan Amal dan Dakwah
                            </h3>
                            <p>
                                Mendorong agar ilmu yang diperoleh mahasiswa
                                memiliki keterkaitan dengan pengamalan dan
                                kontribusi dakwah. Lulusan diarahkan untuk mampu
                                membawa ilmu kepada kehidupan pribadi dan
                                masyarakat.
                            </p>
                        </div>
                        <div class="border-l-4 border-[#C9A227] pl-5">
                            <h3
                                class="mb-2 text-lg font-bold text-brand-ink sm:text-xl"
                            >
                                5. Penguatan Kontribusi kepada Ummat
                            </h3>
                            <p>
                                Mengembangkan pendidikan sebagai sarana
                                memberikan manfaat yang lebih luas melalui
                                lulusan, pengembangan keilmuan, dakwah, dan
                                kontribusi sosial sesuai dengan kapasitas serta
                                perkembangan lembaga.
                            </p>
                        </div>
                        <div class="border-l-4 border-[#C9A227] pl-5">
                            <h3
                                class="mb-2 text-lg font-bold text-brand-ink sm:text-xl"
                            >
                                6. Pengembangan Kelembagaan secara Bertahap
                            </h3>
                            <p>
                                Mengembangkan sistem, sumber daya manusia, tata
                                kelola, program pendidikan, dan layanan lembaga
                                secara bertahap sebagai fondasi menuju arah
                                pengembangan jangka panjang Ilyas institut.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- H. TAHAPAN PENGEMBANGAN (TIMELINE) -->
                <div>
                    <h2
                        class="mb-10 border-l-4 border-[#C9A227] pl-5 text-2xl font-bold text-brand-ink sm:text-3xl"
                    >
                        Tahapan Pengembangan
                    </h2>

                    <div
                        class="relative ml-4 space-y-12 border-l-2 border-[#C9A227]/30 pl-8"
                    >
                        <!-- Tahap 1 -->
                        <div class="relative">
                            <div
                                class="absolute top-1 -left-[41px] flex h-5 w-5 items-center justify-center rounded-full border-4 border-[#C9A227] bg-white"
                            ></div>
                            <div
                                class="mb-3 inline-flex items-center rounded-full bg-brand/10 px-4 py-1.5 text-sm font-bold text-brand"
                            >
                                2020
                            </div>
                            <h3 class="mb-2 text-xl font-bold text-brand-ink">
                                Perintisan dan Pembentukan
                            </h3>
                            <p class="leading-relaxed text-gray-700">
                                Ilyas institut berawal dari majelis taklim yang
                                dibina olehH. Muhammad Riza, S.Pd., M.Pd., M.A..
                                Tahap ini menjadi bagian awal dari perjalanan
                                pendidikan dan dakwah yang kemudian berkembang
                                menuju bentuk pendidikan yang lebih terstruktur.
                            </p>
                        </div>

                        <!-- Tahap 2 -->
                        <div class="relative">
                            <div
                                class="absolute top-1 -left-[41px] flex h-5 w-5 items-center justify-center rounded-full border-4 border-[#C9A227] bg-white"
                            ></div>
                            <div
                                class="mb-3 inline-flex items-center rounded-full bg-brand/10 px-4 py-1.5 text-sm font-bold text-brand"
                            >
                                2022
                            </div>
                            <h3 class="mb-2 text-xl font-bold text-brand-ink">
                                Transformasi Digital dan Pendidikan Online
                            </h3>
                            <p class="leading-relaxed text-gray-700">
                                Pada tahap ini, Ilyas institut melakukan
                                transformasi menuju penyelenggaraan pendidikan
                                berbasis digital dan online. Perubahan tersebut
                                menjadi dasar bagi pengembangan sistem
                                pembelajaran yang memanfaatkan teknologi untuk
                                memperluas akses pendidikan.
                            </p>
                        </div>

                        <!-- Tahap 3 -->
                        <div class="relative">
                            <div
                                class="absolute top-1 -left-[41px] flex h-5 w-5 items-center justify-center rounded-full border-4 border-[#C9A227] bg-white"
                            ></div>
                            <div
                                class="mb-3 inline-flex items-center rounded-full bg-brand/10 px-4 py-1.5 text-sm font-bold text-brand"
                            >
                                Penguatan Berkelanjutan
                            </div>
                            <h3 class="mb-2 text-xl font-bold text-brand-ink">
                                Penguatan Pendidikan Online
                            </h3>
                            <p class="leading-relaxed text-gray-700">
                                Tahap penguatan diarahkan pada pengembangan
                                kualitas pendidikan online, sistem pembelajaran,
                                LMS, kurikulum, layanan akademik, sumber daya
                                manusia, serta pembentukan mahasiswa dan lulusan
                                sesuai visi dan misi Ilyas institut.
                            </p>
                        </div>

                        <!-- Tahap Terakhir (Masa Depan) -->
                        <div class="relative">
                            <!-- Bintang untuk target masa depan -->
                            <div
                                class="absolute top-0.5 -left-[45px] flex h-7 w-7 items-center justify-center rounded-full bg-[#C9A227] text-white"
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
                                class="mb-3 inline-flex items-center rounded-full bg-[#C9A227] px-4 py-1.5 text-sm font-bold text-white"
                            >
                                2030
                            </div>
                            <h3 class="mb-2 text-xl font-bold text-brand-ink">
                                Pengembangan Menuju Universitas Islam Global
                            </h3>
                            <p class="leading-relaxed text-gray-700">
                                Pengembangan jangka panjang Ilyas institut
                                diarahkan menuju cita-cita menjadi Universitas
                                Islam Global pada tahun 2030. Arah ini ditempuh
                                secara bertahap dengan tetap mempertahankan
                                landasan pendidikan ilmu syar'i, nilai-nilai
                                Islam, iman, ilmu, amal, dan dakwah.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PENUTUP -->
            <div class="border-t border-gray-200 pt-12">
                <div
                    class="rounded-2xl border border-brand/10 bg-brand-surface p-8 text-center sm:p-10"
                >
                    <div class="mb-5 inline-flex items-center gap-2">
                        <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                        <span
                            class="text-xs font-bold tracking-[0.2em] text-brand uppercase"
                            >ILYAS institut</span
                        >
                        <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                    </div>
                    <h2 class="text-2xl font-bold text-brand-ink sm:text-3xl">
                        Iman · Ilmu · Amal · Dakwah · Watafaqquh Fiddin
                    </h2>
                    <p
                        class="mx-auto mt-4 max-w-3xl leading-relaxed text-gray-700"
                    >
                        Visi, misi, tujuan, dan arah pengembangan menjadi
                        landasan bagi Ilyas institut dalam membangun pendidikan
                        online ilmu syar'i yang berorientasi pada pembentukan
                        generasi sarjana yang beriman, berilmu, beramal, dan
                        berdakwah.
                    </p>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>
