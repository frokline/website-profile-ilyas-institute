<script setup lang="ts">
import Navbar from "../components/Navbar.vue";
import Footer from "../components/Footer.vue";
</script>

<template>
    <div class="min-h-screen bg-white font-sans text-brand-ink">
        <a
            href="#main-content"
            class="sr-only rounded bg-white px-4 py-2 text-brand focus:not-sr-only focus:fixed focus:top-2 focus:left-2 focus:z-50"
        >
            Lewati navigasi
        </a>

        <Navbar />

        <main id="main-content" tabindex="-1">
            <slot />
        </main>

        <Footer />
    </div>
</template>
