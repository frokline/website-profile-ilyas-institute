<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

defineProps<{
    isOpen: boolean;
}>();

const emit = defineEmits(["close"]);

const isTentangOpen = ref(false);
const isProdiOpen = ref(false);

const closeMenu = () => {
    emit("close");
};
</script>

<template>
    <transition
        enter-active-class="transition-all duration-300 ease-out"
        enter-from-class="opacity-0 -translate-y-4"
        enter-to-class="opacity-100 translate-y-0"
        leave-active-class="transition-all duration-200 ease-in"
        leave-from-class="opacity-100 translate-y-0"
        leave-to-class="opacity-0 -translate-y-4"
    >
        <div
            v-show="isOpen"
            class="absolute left-0 top-full w-full bg-white shadow-xl border-t border-brand/10 lg:hidden z-50 max-h-[calc(100vh-130px)] overflow-y-auto"
        >
            <div class="flex flex-col py-2">
                <!-- Dropdown Tentang -->
                <div>
                    <button
                        @click="isTentangOpen = !isTentangOpen"
                        class="flex w-full items-center justify-between px-6 py-4 text-base font-semibold text-brand-ink hover:bg-gray-50 transition-colors"
                    >
                        <span>Tentang</span>
                        <svg
                            :class="{ 'rotate-180 text-brand': isTentangOpen }"
                            class="h-5 w-5 text-gray-400 transition-transform duration-300"
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

                    <!-- Isi Dropdown Tentang -->
                    <div
                        v-show="isTentangOpen"
                        class="flex flex-col bg-gray-50/80 border-y border-gray-100"
                    >
                        <Link
                            @click="closeMenu"
                            href="/tentang/visi-misi"
                            class="px-10 py-3 text-sm font-medium text-gray-600 hover:text-brand hover:bg-gray-100 transition-colors"
                            >VISI MISI</Link
                        >
                        <Link
                            @click="closeMenu"
                            href="/tentang/profile-pimpinan"
                            class="px-10 py-3 text-sm font-medium text-gray-600 hover:text-brand hover:bg-gray-100 transition-colors"
                            >PROFILE PIMPINAN</Link
                        >
                        <Link
                            @click="closeMenu"
                            href="/tentang/sejarah"
                            class="px-10 py-3 text-sm font-medium text-gray-600 hover:text-brand hover:bg-gray-100 transition-colors"
                            >SEJARAH</Link
                        >
                        <Link
                            @click="closeMenu"
                            href="/tentang/arti-lambang"
                            class="px-10 py-3 text-sm font-medium text-gray-600 hover:text-brand hover:bg-gray-100 transition-colors"
                            >ARTI LAMBANG</Link
                        >
                        <Link
                            @click="closeMenu"
                            href="/tentang/mars"
                            class="px-10 py-3 text-sm font-medium text-gray-600 hover:text-brand hover:bg-gray-100 transition-colors"
                            >MARS</Link
                        >
                        <Link
                            @click="closeMenu"
                            href="/tentang/dosen-staff"
                            class="px-10 py-3 text-sm font-medium text-gray-600 hover:text-brand hover:bg-gray-100 transition-colors"
                            >DOSEN & STAFF</Link
                        >
                    </div>
                </div>

                <!-- Dropdown Program Studi -->
                <div>
                    <button
                        @click="isProdiOpen = !isProdiOpen"
                        class="flex w-full items-center justify-between px-6 py-4 text-base font-semibold text-brand-ink hover:bg-gray-50 transition-colors border-t border-gray-50"
                    >
                        <span>Program Studi</span>
                        <svg
                            :class="{ 'rotate-180 text-brand': isProdiOpen }"
                            class="h-5 w-5 text-gray-400 transition-transform duration-300"
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

                    <!-- Isi Dropdown Program Studi -->
                    <div
                        v-show="isProdiOpen"
                        class="flex flex-col bg-gray-50/80 border-y border-gray-100"
                    >
                        <Link
                            @click="closeMenu"
                            href="/program-studi/pai"
                            class="px-10 py-3 text-sm font-medium text-gray-600 hover:text-brand hover:bg-gray-100 transition-colors"
                            >PAI</Link
                        >
                        <Link
                            @click="closeMenu"
                            href="/program-studi/iat"
                            class="px-10 py-3 text-sm font-medium text-gray-600 hover:text-brand hover:bg-gray-100 transition-colors"
                            >IAT</Link
                        >
                        <Link
                            @click="closeMenu"
                            href="/program-studi/pgmi"
                            class="px-10 py-3 text-sm font-medium text-gray-600 hover:text-brand hover:bg-gray-100 transition-colors"
                            >PGMI</Link
                        >
                    </div>
                </div>

                <!-- Tautan Biasa -->
                <Link
                    @click="closeMenu"
                    href="/penerimaan"
                    class="block px-6 py-4 text-base font-semibold text-brand-ink hover:bg-gray-50 hover:text-brand transition-colors border-t border-gray-50"
                >
                    Penerimaan
                </Link>

                <Link
                    @click="closeMenu"
                    href="/beasiswa"
                    class="block px-6 py-4 text-base font-semibold text-brand-ink hover:bg-gray-50 hover:text-brand transition-colors border-t border-gray-50"
                >
                    Beasiswa
                </Link>

                <!-- Tombol Info Pendaftaran -->
                <div class="px-6 py-6 border-t border-gray-100 mt-2 bg-gray-50">
                    <a
                        href="https://forms.gle/NG7eEC3uKNhjEpkD8"
                        class="flex w-full items-center justify-center rounded-xl bg-brand px-5 py-3.5 text-sm font-bold text-white shadow-md hover:bg-brand-hover transition-all"
                    >
                        Info Pendaftaran
                    </a>
                </div>
            </div>
        </div>
    </transition>
</template>
