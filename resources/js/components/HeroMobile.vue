<template>
    <!-- 0. HERO SECTION (Premium Centered Layout) -->
    <section
        class="relative flex min-h-[85vh] w-full flex-col items-center justify-center bg-[#064E3B] px-5 py-20 text-center"
    >
        <!-- Background Image & Deep Overlay -->
        <div class="absolute inset-0 z-0">
            <img
                src="/images/backgroun-mobile.png"
                alt="Suasana Kampus"
                class="h-full w-full object-cover object-center"
            />
            <!-- Overlay gelap untuk menonjolkan teks (seperti referensi Gambar 1) -->
            <div
                class="absolute inset-0 bg-[#043326]/70 mix-blend-multiply"
            ></div>
            <div
                class="absolute inset-0 bg-gradient-to-t from-[#043326] via-transparent to-black/40"
            ></div>
        </div>

        <!-- Content Container -->
        <div
            class="relative z-10 flex w-full max-w-lg flex-col items-center justify-center pt-8"
        >
            <!-- Subtitle dengan aksen garis emas di sisi kanan & kiri -->
            <div class="mb-5 flex items-center justify-center gap-3">
                <span class="h-[1px] w-8 bg-[#C9A227]"></span>
                <p
                    class="text-[10px] font-bold tracking-[0.25em] text-[#C9A227] uppercase"
                >
                    Kuliah Online Ilmu Syar'i
                </p>
                <span class="h-[1px] w-8 bg-[#C9A227]"></span>
            </div>

            <!-- Title: Putih, besar, dan tebal -->
            <h1
                class="mb-5 text-4xl font-extrabold tracking-tight text-white sm:text-5xl"
            >
                Menuntut Ilmu.<br />
                Menumbuhkan Iman.
            </h1>

            <!-- Description: Dibatasi lebarnya agar rapi di tengah -->
            <p
                class="mb-10 max-w-[320px] text-sm leading-relaxed text-gray-200 sm:max-w-md sm:text-base"
            >
                Pilihan program pendidikan Islam dengan pembelajaran online yang
                dapat berjalan bersama aktivitas Anda.
            </p>

            <!-- Call to Action Buttons -->
            <div
                class="flex w-full flex-col gap-3 px-2 sm:flex-row sm:justify-center"
            >
                <a
                    href="#program-studi"
                    class="flex w-full items-center justify-center rounded-lg bg-white px-5 py-3.5 text-sm font-bold text-[#064E3B] shadow-lg transition-transform active:scale-95 sm:w-auto"
                >
                    Lihat Program Studi
                </a>
                <a
                    href="#sistem-kuliah"
                    class="flex w-full items-center justify-center rounded-lg border border-white/40 bg-transparent px-5 py-3.5 text-sm font-bold text-white backdrop-blur-sm transition-transform hover:bg-white/10 active:scale-95 sm:w-auto"
                >
                    Kenali Sistem Kuliah
                </a>
            </div>
        </div>
    </section>
</template>
