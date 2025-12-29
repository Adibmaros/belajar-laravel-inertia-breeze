<template>
    <Head :title="`Detail Karyawan - ${karyawan.nama}`" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profil Detail Karyawan
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="mb-6">
                    <Link
                        href="/karyawans"
                        class="inline-flex items-center text-sm font-bold text-indigo-600 hover:text-indigo-800 transition"
                    >
                        <svg
                            class="w-5 h-5 mr-2"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"
                            />
                        </svg>
                        KEMBALI KE DAFTAR KARYAWAN
                    </Link>
                </div>

                <div
                    class="bg-white shadow-md sm:rounded-lg border border-gray-200 overflow-hidden"
                >
                    <div
                        class="px-8 py-6 border-b border-gray-100 bg-gray-50 flex justify-between items-center"
                    >
                        <div>
                            <h1 class="text-3xl font-extrabold text-gray-900">
                                {{ karyawan.nama }}
                            </h1>
                            <p class="text-lg text-indigo-600 font-medium">
                                {{ karyawan.jabatan }}
                            </p>
                        </div>
                        <span
                            :class="{
                                'bg-green-100 text-green-700 border-green-200':
                                    karyawan.status === 'Aktif',
                                'bg-amber-100 text-amber-700 border-amber-200':
                                    karyawan.status === 'Cuti',
                                'bg-red-100 text-red-700 border-red-200':
                                    karyawan.status === 'Resign',
                            }"
                            class="px-6 py-2 rounded-full text-sm font-bold border uppercase tracking-widest shadow-sm"
                        >
                            {{ karyawan.status }}
                        </span>
                    </div>

                    <div class="p-8">
                        <div
                            class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8"
                        >
                            <div class="border-b border-gray-50 pb-2">
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1"
                                    >Nomor Induk Pegawai (NIP)</label
                                >
                                <p class="text-gray-900 font-mono text-lg">
                                    {{ karyawan.nip }}
                                </p>
                            </div>

                            <div class="border-b border-gray-50 pb-2">
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1"
                                    >Nama Lengkap</label
                                >
                                <p class="text-gray-900 text-lg">
                                    {{ karyawan.nama }}
                                </p>
                            </div>

                            <div class="border-b border-gray-50 pb-2">
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1"
                                    >Alamat Email</label
                                >
                                <p class="text-gray-900 text-lg">
                                    {{ karyawan.email }}
                                </p>
                            </div>

                            <div class="border-b border-gray-50 pb-2">
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1"
                                    >Nomor Telepon / WA</label
                                >
                                <p class="text-gray-900 text-lg">
                                    {{ karyawan.no_hp || "-" }}
                                </p>
                            </div>

                            <div class="border-b border-gray-50 pb-2">
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1"
                                    >Jenis Kelamin</label
                                >
                                <p class="text-gray-900 text-lg">
                                    {{ karyawan.jenis_kelamin }}
                                </p>
                            </div>

                            <div class="border-b border-gray-50 pb-2">
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1"
                                    >Posisi / Jabatan</label
                                >
                                <p class="text-gray-900 text-lg">
                                    {{ karyawan.jabatan }}
                                </p>
                            </div>

                            <div class="border-b border-gray-50 pb-2">
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1"
                                    >Gaji Bulanan</label
                                >
                                <p class="text-2xl font-bold text-emerald-600">
                                    Rp
                                    {{
                                        Number(karyawan.gaji).toLocaleString(
                                            "id-ID"
                                        )
                                    }}
                                </p>
                            </div>

                            <div class="border-b border-gray-50 pb-2">
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1"
                                    >Tanggal Bergabung</label
                                >
                                <p class="text-gray-900 text-lg">
                                    {{ formatDate(karyawan.tanggal_masuk) }}
                                </p>
                            </div>

                            <div class="border-b border-gray-50 pb-2">
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1"
                                    >Status Kepegawaian</label
                                >
                                <p class="text-gray-900 text-lg">
                                    {{ karyawan.status }}
                                </p>
                            </div>

                            <div
                                class="md:col-span-2 bg-gray-50 p-4 rounded-lg"
                            >
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2"
                                    >Alamat Lengkap Domisili</label
                                >
                                <p class="text-gray-700 leading-relaxed italic">
                                    "{{
                                        karyawan.alamat ||
                                        "Alamat belum diisi."
                                    }}"
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="px-8 py-6 bg-gray-100 flex items-center justify-end space-x-4"
                    >
                        <Link
                            :href="`/karyawans/${karyawan.id}/edit`"
                            class="px-6 py-2.5 bg-indigo-600 text-white rounded-md font-bold hover:bg-indigo-700 transition shadow-sm"
                        >
                            EDIT DATA KARYAWAN
                        </Link>
                        <button
                            @click="deleteKaryawan"
                            class="px-6 py-2.5 bg-red-600 text-white rounded-md font-bold hover:bg-red-700 transition shadow-sm"
                        >
                            HAPUS
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, router } from "@inertiajs/vue3";

const props = defineProps({
    karyawan: Object,
});

// Fungsi untuk mempercantik tampilan tanggal
const formatDate = (date) => {
    if (!date) return "-";
    return new Date(date).toLocaleDateString("id-ID", {
        day: "2-digit",
        month: "long",
        year: "numeric",
    });
};

const deleteKaryawan = () => {
    if (
        confirm("Apakah Anda yakin ingin menghapus data ini secara permanen?")
    ) {
        router.delete(`/karyawans/${props.karyawan.id}`);
    }
};
</script>
