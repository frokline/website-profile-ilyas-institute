<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import PublicLayout from "@/layouts/PublicLayout.vue";
</script>

<template>
    <Head title="Profil Pimpinan - Ilyas Institut" />

    <PublicLayout>
        <!-- =========================================================
             HERO SECTION
        ========================================================== -->
        <section
            class="relative flex items-center justify-center overflow-hidden px-6 pt-32 pb-24 sm:px-8 lg:px-12 lg:pt-48 lg:pb-36"
        >
            <div class="absolute inset-0 z-0">
                <img
                    src="/images/visi-mis.png"
                    alt="Pimpinan Ilyas Institut"
                    class="h-full w-full object-cover object-center"
                />

                <div
                    class="absolute inset-0 bg-brand/75 mix-blend-multiply"
                ></div>
                <div class="absolute inset-0 bg-black/40"></div>
            </div>

            <div class="relative z-10 mx-auto max-w-7xl text-center">
                <div class="mb-4 inline-flex items-center gap-2">
                    <span class="h-0.5 w-8 bg-[#C9A227]"></span>

                    <span
                        class="text-xs font-bold uppercase tracking-[0.2em] text-[#C9A227] drop-shadow-md"
                    >
                        TENTANG KAMI
                    </span>

                    <span class="h-0.5 w-8 bg-[#C9A227]"></span>
                </div>

                <h1
                    class="text-4xl font-bold tracking-tight text-white drop-shadow-xl sm:text-5xl lg:text-6xl"
                >
                    Profil Pimpinan
                </h1>

                <p
                    class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-white/90 drop-shadow-md"
                >
                    Informasi singkat mengenai jajaran pimpinan pelaksana Ilyas
                    Institut.
                </p>
            </div>
        </section>

        <!-- =========================================================
             SECTION PIMPINAN
        ========================================================== -->
        <section
            class="relative overflow-hidden bg-[#F8FAFC] py-20 sm:py-24 lg:py-28"
        >
            <div
                class="pointer-events-none absolute -left-32 top-20 h-80 w-80 rounded-full bg-brand/5 blur-3xl"
            ></div>

            <div
                class="pointer-events-none absolute -right-32 bottom-20 h-80 w-80 rounded-full bg-[#C9A227]/5 blur-3xl"
            ></div>

            <div class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12">
                <!-- HEADER -->
                <div class="mx-auto mb-14 max-w-3xl text-center">
                    <div class="mb-5 flex items-center justify-center gap-3">
                        <span class="h-px w-10 bg-brand/20"></span>

                        <span
                            class="text-xs font-bold uppercase tracking-[0.22em] text-brand"
                        >
                            Struktur Pimpinan
                        </span>

                        <span class="h-px w-10 bg-brand/20"></span>
                    </div>

                    <h2
                        class="text-3xl font-bold tracking-tight text-brand-ink sm:text-4xl lg:text-5xl"
                    >
                        Direktur & Wakil Direktur
                    </h2>

                    <p
                        class="mx-auto mt-5 max-w-2xl text-base leading-7 text-brand-ink/60 sm:text-lg"
                    >
                        Mengenal sosok pimpinan yang menjalankan arah,
                        pengelolaan, dan pengembangan Ilyas Institut.
                    </p>
                </div>

                <!-- =================================================
                     KARTU PIMPINAN 1
                ================================================== -->
                <article
                    class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                >
                    <div class="grid lg:grid-cols-[42%_58%]">
                        <!-- FOTO -->
                        <div
                            class="relative min-h-[420px] overflow-hidden bg-slate-100 sm:min-h-[520px] lg:min-h-[600px]"
                        >
                            <img
                                src="/images/direktur.png"
                                alt="H. Muhammad Riza, S.Pd., M.Pd., M.A."
                                class="absolute inset-0 h-full w-full object-cover object-center transition duration-500 group-hover:scale-[1.02]"
                                onerror="
                                    this.src = '/images/placeholder-avatar.png'
                                "
                            />

                            <div
                                class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-black/45 to-transparent"
                            ></div>

                            <div
                                class="absolute left-6 top-6 rounded-full border border-white/20 bg-black/20 px-4 py-2 text-[10px] font-bold uppercase tracking-[0.18em] text-white backdrop-blur-md sm:left-8 sm:top-8"
                            >
                                Pimpinan Utama
                            </div>

                            <div
                                class="absolute bottom-6 left-6 sm:bottom-8 sm:left-8"
                            >
                                <div
                                    class="mb-2 h-1 w-10 rounded-full bg-[#C9A227]"
                                ></div>

                                <p
                                    class="text-xs font-medium uppercase tracking-[0.18em] text-white/85"
                                >
                                    Ilyas Institut
                                </p>
                            </div>
                        </div>

                        <!-- INFORMASI -->
                        <div
                            class="flex flex-col justify-center px-7 py-10 sm:px-10 sm:py-12 lg:px-14 lg:py-16"
                        >
                            <!-- JABATAN -->
                            <div class="mb-6">
                                <span
                                    class="inline-flex rounded-full bg-brand px-4 py-2 text-xs font-bold uppercase tracking-[0.12em] text-white"
                                >
                                    Direktur
                                </span>
                            </div>

                            <!-- NAMA -->
                            <h3
                                class="text-3xl font-bold leading-tight tracking-tight text-brand-ink sm:text-4xl lg:text-[42px]"
                            >
                                H. Muhammad Riza,
                                <span class="block"> S.Pd., M.Pd., M.A. </span>
                            </h3>

                            <!-- KETERANGAN -->
                            <div class="mt-6 flex items-center gap-3">
                                <span
                                    class="h-9 w-1 rounded-full bg-[#C9A227]"
                                ></span>

                                <p
                                    class="text-sm font-semibold uppercase tracking-[0.14em] text-brand/80"
                                >
                                    Direktur Ilyas Institut
                                </p>
                            </div>

                            <!-- DESKRIPSI -->
                            <p
                                class="mt-7 max-w-2xl text-base leading-8 text-brand-ink/65 sm:text-[17px]"
                            >
                                Memimpin penyelenggaraan Ilyas Institut dengan
                                mengedepankan profesionalisme, penguatan mutu
                                pendidikan, serta pengembangan lembaga yang
                                berlandaskan nilai-nilai Islam.
                            </p>

                            <!-- QUOTE -->
                            <div class="mt-9 border-t border-slate-200 pt-7">
                                <div class="flex gap-4">
                                    <div
                                        class="mt-1 text-4xl font-serif leading-none text-[#C9A227]/70"
                                    >
                                        “
                                    </div>

                                    <p
                                        class="text-lg font-medium italic leading-8 text-brand-ink/80 sm:text-xl"
                                    >
                                        Mendidik bukan sekadar mentransfer ilmu,
                                        tetapi mewariskan keimanan dan akhlak
                                        mulia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- =================================================
                     JARAK ANTAR PIMPINAN
                ================================================== -->
                <div class="h-10 sm:h-12"></div>

                <!-- =================================================
                     KARTU PIMPINAN 2
                ================================================== -->
                <article
                    class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                >
                    <div class="grid lg:grid-cols-[42%_58%]">
                        <!-- FOTO -->
                        <div
                            class="relative min-h-[420px] overflow-hidden bg-slate-100 sm:min-h-[520px] lg:min-h-[600px]"
                        >
                            <img
                                src="/images/muhammad-aini.png"
                                alt="H. Muhammad Aini, S.Pd.I., M.M."
                                class="absolute inset-0 h-full w-full object-cover object-center transition duration-500 group-hover:scale-[1.02]"
                                onerror="
                                    this.src = '/images/placeholder-avatar.png'
                                "
                            />

                            <div
                                class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-black/45 to-transparent"
                            ></div>

                            <div
                                class="absolute left-6 top-6 rounded-full border border-white/20 bg-black/20 px-4 py-2 text-[10px] font-bold uppercase tracking-[0.18em] text-white backdrop-blur-md sm:left-8 sm:top-8"
                            >
                                Pimpinan Institut
                            </div>

                            <div
                                class="absolute bottom-6 left-6 sm:bottom-8 sm:left-8"
                            >
                                <div
                                    class="mb-2 h-1 w-10 rounded-full bg-[#C9A227]"
                                ></div>

                                <p
                                    class="text-xs font-medium uppercase tracking-[0.18em] text-white/85"
                                >
                                    Ilyas Institut
                                </p>
                            </div>
                        </div>

                        <!-- INFORMASI -->
                        <div
                            class="flex flex-col justify-center px-7 py-10 sm:px-10 sm:py-12 lg:px-14 lg:py-16"
                        >
                            <!-- JABATAN -->
                            <div class="mb-6">
                                <span
                                    class="inline-flex rounded-full bg-brand px-4 py-2 text-xs font-bold uppercase tracking-[0.12em] text-white"
                                >
                                    Wakil Direktur
                                </span>
                            </div>

                            <!-- NAMA -->
                            <h3
                                class="text-3xl font-bold leading-tight tracking-tight text-brand-ink sm:text-4xl lg:text-[42px]"
                            >
                                H. Muhammad Aini,
                                <span class="block"> S.Pd.I., M.M. </span>
                            </h3>

                            <!-- KETERANGAN -->
                            <div class="mt-6 flex items-center gap-3">
                                <span
                                    class="h-9 w-1 rounded-full bg-[#C9A227]"
                                ></span>

                                <p
                                    class="text-sm font-semibold uppercase tracking-[0.14em] text-brand/80"
                                >
                                    Wakil Direktur Ilyas Institut
                                </p>
                            </div>

                            <!-- DESKRIPSI -->
                            <p
                                class="mt-7 max-w-2xl text-base leading-8 text-brand-ink/65 sm:text-[17px]"
                            >
                                Mendampingi Direktur dalam pengelolaan
                                operasional, penguatan mutu akademik, serta
                                pengembangan tata kelola kelembagaan agar
                                berjalan efektif, transparan, dan profesional.
                            </p>

                            <!-- INFORMASI BAWAH -->
                            <div class="mt-9 border-t border-slate-200 pt-7">
                                <div class="flex items-center gap-3">
                                    <span
                                        class="h-1 w-8 rounded-full bg-[#C9A227]"
                                    ></span>

                                    <span
                                        class="text-xs font-semibold uppercase tracking-[0.18em] text-brand-ink/50"
                                    >
                                        Wakil Direktur
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </PublicLayout>
</template>
