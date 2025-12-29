<template>
    <div class="min-h-screen bg-slate-50 p-10 font-sans">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-3xl font-extrabold text-slate-800 mb-2">
                Dashboard Admin
            </h1>
            <p class="text-slate-500 mb-8">
                Selamat datang di sistem manajemen internal.
            </p>

            <div class="grid grid-cols-1 gap-4">
                <Link
                    href="/karyawans"
                    class="flex items-center justify-between p-5 bg-white rounded-xl border border-slate-200 shadow-sm hover:border-indigo-500 hover:ring-1 hover:ring-indigo-500 transition-all group"
                >
                    <div class="flex items-center gap-4">
                        <div
                            class="p-3 bg-indigo-100 text-indigo-600 rounded-lg group-hover:bg-indigo-600 group-hover:text-white transition-colors"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800">
                                Kelola Karyawan
                            </h3>
                            <p class="text-sm text-slate-500">
                                Lihat data dan manajemen karyawan.
                            </p>
                        </div>
                    </div>
                    <span
                        class="text-slate-400 group-hover:text-indigo-600 font-bold"
                        >&rarr;</span
                    >
                </Link>

                <button
                    @click="bukaKaryawan"
                    class="mt-4 text-xs text-slate-400 hover:text-slate-600 underline text-left"
                >
                    Atau klik di sini (navigasi via router.get)
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link, router } from "@inertiajs/vue3";

const bukaKaryawan = () => {
    // Navigasi manual menggunakan URL string langsung
    router.get("/karyawans");
};
</script>
