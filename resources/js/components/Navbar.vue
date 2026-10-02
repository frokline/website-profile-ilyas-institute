<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import NavbarMobile from './NavbarMobile.vue'; // Pastikan path import sesuai dengan folder Anda

const isMenuOpen = ref(false);
</script>

<template>
    <header class="relative sticky top-0 z-50 bg-white shadow-sm">
        <!-- Top Bar -->
        <div class="bg-brand text-white">
            <div
                class="mx-auto flex min-h-9 max-w-7xl items-center justify-between px-5 text-xs sm:px-8 lg:px-12"
            >
                <p class="font-medium">
                    Iman • Ilmu • Amal • Dakwah
                    <span class="hidden sm:inline"> • Watafaqquh Fiddin</span>
                </p>

                <a
                    href="https://www.instagram.com/ilyasinstitut/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="transition-colors hover:text-white/80"
                >
                    @ilyasinstitut
                </a>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav aria-label="Navigasi utama">
            <div
                class="mx-auto flex min-h-24 max-w-7xl items-center justify-between gap-5 px-5 sm:px-8 lg:px-12"
            >
                <!-- Logo -->
                <Link href="/" class="flex items-center gap-3">
                    <img
                        src="/images/logo-ilyas-institut.png"
                        alt="Logo Ilyas Institut"
                        class="size-14 object-contain"
                    />
                    <span>
                        <strong
                            class="block font-serif text-xl tracking-wide text-brand sm:text-2xl"
                        >
                            ILYAS INSTITUT
                        </strong>
                        <small
                            class="block text-xs tracking-wider text-brand-ink/60"
                        >
                            Kuliah Online Ilmu Syar’i
                        </small>
                    </span>
                </Link>

                <!-- Desktop Menu (Dibiarkan persis seperti referensi Anda) -->
                <div class="hidden items-center gap-8 lg:flex">
                    <!-- Dropdown Tentang (Desktop) -->
                    <div class="group relative">
                        <button
                            type="button"
                            class="flex items-center gap-1 py-2 text-sm font-medium text-brand-ink group-hover:text-brand"
                        >
                            Tentang
                            <svg
                                class="h-4 w-4 transition-transform duration-200 group-hover:rotate-180"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19 9l-7 7-7-7"
                                />
                            </svg>
                        </button>
                        <div
                            class="invisible absolute top-full left-0 z-50 w-64 translate-y-2 pt-4 opacity-0 transition-all duration-300 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100"
                        >
                            <div
                                class="rounded-b-md border-t-[3px] border-blue-600 bg-white py-2 shadow-lg"
                            >
                                <Link
                                    href="/tentang/visi-misi"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-brand"
                                    >VISI MISI</Link
                                >
                                <Link
                                    href="/tentang/profile-pimpinan"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-brand"
                                    >PROFILE PIMPINAN</Link
                                >
                                <Link
                                    href="/tentang/sejarah"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-brand"
                                    >SEJARAH</Link
                                >
                                <Link
                                    href="/tentang/arti-lambang"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-brand"
                                    >ARTI LAMBANG</Link
                                >
                                <Link
                                    href="/tentang/mars"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-brand"
                                    >MARS</Link
                                >
                                <Link
                                    href="/tentang/dosen-staff"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-brand"
                                    >DOSEN & STAFF</Link
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Dropdown Program Studi (Desktop) -->
                    <div class="group relative">
                        <button
                            type="button"
                            class="flex items-center gap-1 py-2 text-sm font-medium text-brand-ink group-hover:text-brand"
                        >
                            Program Studi
                            <svg
                                class="h-4 w-4 transition-transform duration-200 group-hover:rotate-180"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19 9l-7 7-7-7"
                                />
                            </svg>
                        </button>
                        <div
                            class="invisible absolute top-full left-0 z-50 w-48 translate-y-2 pt-4 opacity-0 transition-all duration-300 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100"
                        >
                            <div
                                class="rounded-b-md border-t-[3px] border-blue-600 bg-white py-2 shadow-lg"
                            >
                                <Link
                                    href="/program-studi/pai"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-brand"
                                    >PAI</Link
                                >
                                <Link
                                    href="/program-studi/iat"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-brand"
                                    >IAT</Link
                                >
                                <Link
                                    href="/program-studi/pgmi"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-brand"
                                    >PGMI</Link
                                >
                            </div>
                        </div>
                    </div>

                    <Link
                        href="/penerimaan"
                        class="text-sm font-medium text-brand-ink transition-colors hover:text-brand"
                    >
                        Penerimaan
                    </Link>

                    <a
                        href="/beasiswa"
                        class="text-sm font-medium text-brand-ink transition-colors hover:text-brand"
                    >
                        Beasiswa
                    </a>

                    <a
                        href="https://forms.gle/NG7eEC3uKNhjEpkD8"
                        class="rounded-lg bg-brand px-6 py-2.5 text-sm font-bold text-white shadow-sm transition-all hover:bg-brand-hover"
                    >
                        Info Pendaftaran
                    </a>
                </div>

                <!-- Tombol Hamburger / Close (Mobile) menggunakan SVG profesional -->
                <button
                    type="button"
                    class="rounded-lg p-2 text-brand-ink transition-colors hover:bg-gray-100 focus:ring-2 focus:ring-brand focus:outline-none lg:hidden"
                    @click="isMenuOpen = !isMenuOpen"
                    aria-label="Toggle menu"
                >
                    <!-- Ikon Hamburger -->
                    <svg
                        v-if="!isMenuOpen"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                    <!-- Ikon Close (X) -->
                    <svg
                        v-else
                        class="h-6 w-6 text-brand"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Pemanggilan Komponen Mobile Menu Terpisah -->
        <NavbarMobile :is-open="isMenuOpen" @close="isMenuOpen = false" />
    </header>
</template>
