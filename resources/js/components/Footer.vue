<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <footer
        class="relative overflow-hidden border-t border-brand/20 bg-[#08120e] pt-20 pb-8 text-white"
    >
        <!-- Aksen Motif Dekoratif Tipis di Footer -->
        <div
            class="pointer-events-none absolute top-0 right-0 h-96 w-96 opacity-5"
        >
            <svg
                class="h-full w-full text-white"
                viewBox="0 0 100 100"
                fill="none"
                stroke="currentColor"
                stroke-width="1"
            >
                <polygon
                    points="50,5 61,35 95,35 67,55 78,85 50,70 22,85 33,55 5,35 39,35"
                />
            </svg>
        </div>

        <div class="relative z-10 mx-auto max-w-7xl px-6 sm:px-8 lg:px-12">
            <!-- Grid Utama Footer -->
            <div
                class="grid grid-cols-1 gap-10 border-b border-white/10 pb-16 md:grid-cols-2 lg:grid-cols-12 lg:gap-12"
            >
                <!-- Kolom 1: Brand & Tentang (Span 4) -->
                <div class="space-y-6 lg:col-span-4">
                    <div class="flex items-center gap-3">
                        <Link
                            href="/"
                            class="flex h-12 w-12 items-center justify-center overflow-hidden rounded-xl bg-[#fafafa] shadow-lg transition-transform hover:scale-105"
                        >
                            <img
                                src="/images/logo-ilyas-institut.png"
                                alt="Logo Ilyas institut"
                                class="h-full w-full object-contain p-1"
                            />
                        </Link>
                        <div>
                            <span
                                class="block font-serif text-xl font-bold tracking-tight text-white"
                                >ILYAS INSTITUT</span
                            >
                            <span
                                class="mt-0.5 block text-[10px] tracking-[0.2em] text-white/70 uppercase"
                                >Kuliah Online Ilmu Syar'i</span
                            >
                        </div>
                    </div>

                    <p class="max-w-sm text-sm leading-relaxed text-white/70">
                        Pilihan program pendidikan Islam berbasis pembelajaran
                        online yang fleksibel, terarah, dan mendalam untuk
                        membangun masa depan bersama ilmu dan amal.
                    </p>

                    <div class="inline-block border-t border-white/10 pt-2">
                        <p
                            class="mb-1 text-xs font-semibold tracking-wider text-[#C9A227] uppercase"
                        >
                            Motto Kami
                        </p>
                        <p class="font-serif text-sm text-white/90 italic">
                            "Iman · Ilmu · Amal · Dakwah · Watafaqquh Fiddin"
                        </p>
                    </div>
                </div>

                <!-- Kolom 2: Navigasi (Span 2) -->
                <div class="space-y-5 lg:col-span-2 lg:ml-4">
                    <h4
                        class="text-xs font-bold tracking-[0.15em] text-[#C9A227] uppercase"
                    >
                        Navigasi
                    </h4>
                    <ul class="space-y-3 text-sm text-white/70">
                        <li>
                            <Link
                                href="/tentang/visi-misi"
                                class="flex items-center gap-2 transition-colors hover:text-[#C9A227]"
                            >
                                <span
                                    class="h-1 w-1 rounded-full bg-white/30"
                                ></span>
                                Tentang Kami
                            </Link>
                        </li>
                        <li>
                            <Link
                                href="/penerimaan"
                                class="flex items-center gap-2 transition-colors hover:text-[#C9A227]"
                            >
                                <span
                                    class="h-1 w-1 rounded-full bg-white/30"
                                ></span>
                                Sistem Kuliah
                            </Link>
                        </li>
                        <li>
                            <a
                                href="#beasiswa"
                                class="flex items-center gap-2 transition-colors hover:text-[#C9A227]"
                            >
                                <span
                                    class="h-1 w-1 rounded-full bg-white/30"
                                ></span>
                                Beasiswa
                            </a>
                        </li>
                        <li>
                            <a
                                href="#kontak"
                                class="flex items-center gap-2 transition-colors hover:text-[#C9A227]"
                            >
                                <span
                                    class="h-1 w-1 rounded-full bg-white/30"
                                ></span>
                                Info Pendaftaran
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Kolom 3: Program Studi (Span 3) -->
                <div class="space-y-5 lg:col-span-3">
                    <h4
                        class="text-xs font-bold tracking-[0.15em] text-[#C9A227] uppercase"
                    >
                        Program Studi S1
                    </h4>
                    <ul class="space-y-3 text-sm text-white/70">
                        <li>
                            <Link
                                href="/program-studi/pai"
                                class="block leading-snug transition-colors hover:text-[#C9A227]"
                            >
                                Pendidikan Agama Islam <br /><span
                                    class="text-xs text-white/40"
                                    >(PAI)</span
                                >
                            </Link>
                        </li>
                        <li>
                            <Link
                                href="/program-studi/pgmi"
                                class="block leading-snug transition-colors hover:text-[#C9A227]"
                            >
                                Pendidikan Guru Madrasah Ibtidaiyah <br /><span
                                    class="text-xs text-white/40"
                                    >(PGMI)</span
                                >
                            </Link>
                        </li>
                        <li>
                            <Link
                                href="/program-studi/iat"
                                class="block leading-snug transition-colors hover:text-[#C9A227]"
                            >
                                Ilmu Al-Qur'an & Tafsir <br /><span
                                    class="text-xs text-white/40"
                                    >(IAT)</span
                                >
                            </Link>
                        </li>
                    </ul>
                </div>

                <!-- Kolom 4: Kontak & Sosial Media (Span 3) -->
                <div class="space-y-5 lg:col-span-3">
                    <h4
                        class="text-xs font-bold tracking-[0.15em] text-[#C9A227] uppercase"
                    >
                        Hubungi Kami
                    </h4>
                    <ul class="space-y-4 text-sm text-white/70">
                        <li class="flex items-start gap-3">
                            <svg
                                class="mt-0.5 h-5 w-5 shrink-0 text-[#C9A227]"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                            </svg>
                            <span class="leading-relaxed"
                                >Jl. Trans Kalimantan KM 9,3 Komp. Bumi Angkasa
                                Mandiri RT 05, Ruko No.3 4, Kab. Barito Kuala,
                                Kalimantan Selatan</span
                            >
                        </li>
                        <li class="flex items-center gap-3">
                            <svg
                                class="h-5 w-5 shrink-0 text-[#C9A227]"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                />
                            </svg>
                            <span>+62 821-4834-449</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg
                                class="h-5 w-5 shrink-0 text-[#C9A227]"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                />
                            </svg>
                            <span>ilyasinstitut.id@gmail.com</span>
                        </li>
                    </ul>

                    <!-- Sosial Media -->
                    <div class="pt-3">
                        <div class="flex items-center gap-4">
                            <!-- WhatsApp -->
                            <a
                                href="https://wa.link/jmipl2"
                                class="flex h-8 w-8 items-center justify-center rounded-full bg-white/5 text-white/80 transition-all duration-300 hover:bg-[#C9A227] hover:text-white"
                                aria-label="WhatsApp"
                            >
                                <svg
                                    class="h-4 w-4"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"
                                    />
                                </svg>
                            </a>
                            <!-- Instagram -->
                            <a
                                href="https://www.instagram.com/ilyasinstitut/"
                                class="flex h-8 w-8 items-center justify-center rounded-full bg-white/5 text-white/80 transition-all duration-300 hover:bg-[#C9A227] hover:text-white"
                                aria-label="Instagram"
                            >
                                <svg
                                    class="h-4 w-4"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.46 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </a>
                            <!-- YouTube -->
                            <a
                                href="https://www.youtube.com/@Ilyasinstitut"
                                class="flex h-8 w-8 items-center justify-center rounded-full bg-white/5 text-white/80 transition-all duration-300 hover:bg-[#C9A227] hover:text-white"
                                aria-label="YouTube"
                            >
                                <svg
                                    class="h-4 w-4"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Bawah: Copyright & Legal -->
            <div
                class="mt-8 flex flex-col items-center justify-between gap-4 text-xs text-white/50 md:flex-row"
            >
                <p>
                    &copy; 2026 Ilyas institut. Hak Cipta Dilindungi
                    Undang-Undang.
                </p>

                <div class="flex items-center gap-4 sm:gap-6">
                    <a href="#" class="transition-colors hover:text-[#C9A227]"
                        >Kebijakan Privasi</a
                    >
                    <span class="text-white/20">•</span>
                    <a href="#" class="transition-colors hover:text-[#C9A227]"
                        >Syarat & Ketentuan</a
                    >
                    <span class="text-white/20">•</span>
                    <a href="#" class="transition-colors hover:text-[#C9A227]"
                        >Bantuan (FAQ)</a
                    >
                </div>
            </div>
        </div>
    </footer>
</template>
