<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
</script>

<template>
    <Head title="Mars Institusi - Ilyas institut" />

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
                    Mars Institusi - Ilyas institut
                </h1>
            </div>
        </section>

        <!-- 2. BAGIAN LIRIK MARS (Simpel & Rata Tengah) -->
        <section class="bg-white py-20 sm:py-28">
            <div class="mx-auto max-w-3xl px-6 text-center sm:px-8 lg:px-12">
                <h2
                    class="mb-16 text-3xl font-bold tracking-wide text-brand-ink uppercase sm:text-4xl"
                >
                    MARS ILYAS INSTITUT
                </h2>

                <div
                    class="space-y-10 font-serif text-lg leading-[2.2] text-brand-ink/90 italic sm:text-xl"
                >
                    <p>
                        Dengan iman kami melangkah<br />
                        Dengan ilmu kami berkarya<br />
                        Menuntut ilmu sepanjang masa<br />
                        Untuk umat dan nusa bangsa
                    </p>

                    <p>
                        Ilyas Institut tempat berjuang<br />
                        Membina insan penuh harapan<br />
                        Ilyas Institut maju bersama<br />
                        Beriman, berilmu, berakhlak mulia
                    </p>

                    <p>
                        <span
                            class="mb-2 block text-sm font-bold tracking-widest text-brand-ink/60 uppercase not-italic"
                            >Reff:</span
                        >
                        Ilyas Institut, maju bersama<br />
                        Beriman, berilmu, berakhlak mulia<br />
                        Ilyas Institut, maju bersama!<br />
                        Jayalah, jayalah selamanya!
                    </p>

                    <p>
                        Dengan iman teguhkan langkah (Dengan ilmu raih cita)<br />
                        Dengan amal baktikan diri<br />
                        (Untuk umat dan bangsa negeri)
                    </p>

                    <p>
                        Ilyas Institut, maju bersama<br />
                        Beriman, berilmu, berakhlak mulia<br />
                        Ilyas Institut, maju bersama!<br />
                        Jayalah, jayalah selamanya!
                    </p>

                    <p class="my-8 text-3xl text-brand-ink/30 not-italic">
                        ...
                    </p>

                    <p>
                        ILYAS INSTITUT! (Iman)<br />
                        Ini tempat ilmu (Amal)<br />
                        Dakwah watafaqquh fiddin<br />
                        Ilyas Institut, maju bersama!<br />
                        Jayalah, jayalah selamanya!
                    </p>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>
