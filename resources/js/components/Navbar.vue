<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import NavbarMobile from "./NavbarMobile.vue"; // Pastikan path import sesuai dengan folder Anda

const isMenuOpen = ref(false);
</script>

<template>
    <header class="sticky top-0 z-50 bg-white shadow-sm relative">
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
                    class="hover:text-white/80 transition-colors"
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
                    <div class="relative group">
                        <button
                            type="button"
                            class="flex items-center gap-1 text-sm font-medium text-brand-ink group-hover:text-brand py-2"
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
                            class="absolute left-0 top-full pt-4 w-64 invisible opacity-0 translate-y-2 group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 z-50 transition-all duration-300"
                        >
                            <div
                                class="border-t-[3px] border-blue-600 bg-white py-2 shadow-lg rounded-b-md"
                            >
                                <Link
                                    href="/tentang/visi-misi"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-brand transition-colors"
                                    >VISI MISI</Link
                                >
                                <Link
                                    href="/tentang/profile-pimpinan"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-brand transition-colors"
                                    >PROFILE PIMPINAN</Link
                                >
                                <Link
                                    href="/tentang/sejarah"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-brand transition-colors"
                                    >SEJARAH</Link
                                >
                                <Link
                                    href="/tentang/arti-lambang"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-brand transition-colors"
                                    >ARTI LAMBANG</Link
                                >
                                <Link
                                    href="/tentang/mars"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-brand transition-colors"
                                    >MARS</Link
                                >
                                <Link
                                    href="/tentang/dosen-staff"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-brand transition-colors"
                                    >DOSEN & STAFF</Link
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Dropdown Program Studi (Desktop) -->
                    <div class="relative group">
                        <button
                            type="button"
                            class="flex items-center gap-1 text-sm font-medium text-brand-ink group-hover:text-brand py-2"
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
                            class="absolute left-0 top-full pt-4 w-48 invisible opacity-0 translate-y-2 group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 z-50 transition-all duration-300"
                        >
                            <div
                                class="border-t-[3px] border-blue-600 bg-white py-2 shadow-lg rounded-b-md"
                            >
                                <Link
                                    href="/program-studi/pai"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-brand transition-colors"
                                    >PAI</Link
                                >
                                <Link
                                    href="/program-studi/iat"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-brand transition-colors"
                                    >IAT</Link
                                >
                                <Link
                                    href="/program-studi/pgmi"
                                    class="block px-5 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-brand transition-colors"
                                    >PGMI</Link
                                >
                            </div>
                        </div>
                    </div>

                    <Link
                        href="/penerimaan"
                        class="text-sm font-medium text-brand-ink hover:text-brand transition-colors"
                    >
                        Penerimaan
                    </Link>

                    <a
                        href="/beasiswa"
                        class="text-sm font-medium text-brand-ink hover:text-brand transition-colors"
                    >
                        Beasiswa
                    </a>

                    <a
                        href="https://forms.gle/NG7eEC3uKNhjEpkD8"
                        class="rounded-lg bg-brand px-6 py-2.5 text-sm font-bold text-white hover:bg-brand-hover shadow-sm transition-all"
                    >
                        Info Pendaftaran
                    </a>
                </div>

                <!-- Tombol Hamburger / Close (Mobile) menggunakan SVG profesional -->
                <button
                    type="button"
                    class="rounded-lg p-2 text-brand-ink hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-brand lg:hidden transition-colors"
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
