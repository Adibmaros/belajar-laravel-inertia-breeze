<template>
    <Head title="Sistem Manajemen Karyawan" />

    <AuthenticatedLayout>
        <template #header>
            <div
                class="max-w-[1400px] mx-auto flex items-center justify-between"
            >
                <div>
                    <h2
                        class="text-2xl font-black text-slate-900 tracking-tight"
                    >
                        Data Karyawan
                    </h2>
                    <p class="text-slate-500 text-sm mt-1">
                        Manajemen database internal perusahaan.
                    </p>
                </div>
                <Link
                    href="/karyawans/create"
                    class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold text-sm hover:bg-indigo-700 shadow-lg shadow-indigo-200 transition-all active:scale-95"
                >
                    <svg
                        class="w-5 h-5 mr-2"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                    TAMBAH KARYAWAN
                </Link>
            </div>
        </template>

        <div class="py-10 bg-slate-50 min-h-screen">
            <div class="max-w-[1400px] mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white p-4 rounded-2xl border border-slate-200 shadow-sm mb-6 flex items-center gap-4"
                >
                    <div class="relative flex-grow">
                        <div
                            class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"
                        >
                            <svg
                                class="h-5 w-5 text-slate-400"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                                    stroke-width="2"
                                />
                            </svg>
                        </div>
                        <input
                            v-model="search"
                            type="text"
                            placeholder="Cari berdasarkan Nama, NIP, atau Jabatan..."
                            class="block w-full pl-11 pr-4 py-2.5 bg-slate-50 border-transparent rounded-xl focus:bg-white focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all text-sm"
                        />
                    </div>

                    <div class="w-64">
                        <select
                            v-model="status"
                            class="block w-full py-2.5 bg-slate-50 border-transparent rounded-xl focus:bg-white focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all text-sm"
                        >
                            <option value="">Semua Status</option>
                            <option value="Aktif">Status: Aktif</option>
                            <option value="Cuti">Status: Cuti</option>
                            <option value="Resign">Status: Resign</option>
                        </select>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden"
                >
                    <table class="w-full table-fixed border-collapse">
                        <thead>
                            <tr class="bg-slate-50 border-b border-slate-200">
                                <th
                                    class="w-[15%] px-6 py-4 text-left text-xs font-bold text-slate-500 uppercase tracking-widest"
                                >
                                    NIP
                                </th>
                                <th
                                    class="w-[30%] px-6 py-4 text-left text-xs font-bold text-slate-500 uppercase tracking-widest"
                                >
                                    Karyawan
                                </th>
                                <th
                                    class="w-[20%] px-6 py-4 text-left text-xs font-bold text-slate-500 uppercase tracking-widest"
                                >
                                    Jabatan
                                </th>
                                <th
                                    class="w-[15%] px-6 py-4 text-center text-xs font-bold text-slate-500 uppercase tracking-widest"
                                >
                                    Status
                                </th>
                                <th
                                    class="w-[20%] px-6 py-4 text-right text-xs font-bold text-slate-500 uppercase tracking-widest"
                                >
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr
                                v-for="karyawan in karyawans.data"
                                :key="karyawan.id"
                                class="hover:bg-slate-50/50 transition-colors group"
                            >
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <span
                                        class="font-mono text-sm font-bold text-slate-400 group-hover:text-indigo-600"
                                        >#{{ karyawan.nip }}</span
                                    >
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="flex flex-col">
                                        <span
                                            class="text-sm font-bold text-slate-800"
                                            >{{ karyawan.nama }}</span
                                        >
                                        <span class="text-xs text-slate-400">{{
                                            karyawan.email
                                        }}</span>
                                    </div>
                                </td>
                                <td
                                    class="px-6 py-5 whitespace-nowrap text-sm text-slate-600 font-medium"
                                >
                                    {{ karyawan.jabatan }}
                                </td>
                                <td
                                    class="px-6 py-5 whitespace-nowrap text-center"
                                >
                                    <span
                                        :class="{
                                            'bg-emerald-100 text-emerald-700':
                                                karyawan.status === 'Aktif',
                                            'bg-amber-100 text-amber-700':
                                                karyawan.status === 'Cuti',
                                            'bg-rose-100 text-rose-700':
                                                karyawan.status === 'Resign',
                                        }"
                                        class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-tighter"
                                    >
                                        {{ karyawan.status }}
                                    </span>
                                </td>
                                <td
                                    class="px-6 py-5 whitespace-nowrap text-right"
                                >
                                    <div class="flex justify-end gap-2">
                                        <Link
                                            :href="`/karyawans/${karyawan.id}`"
                                            class="inline-flex p-2 text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg transition-all"
                                        >
                                            <svg
                                                class="w-5 h-5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                                    stroke-width="2"
                                                />
                                                <path
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                                    stroke-width="2"
                                                />
                                            </svg>
                                        </Link>
                                        <Link
                                            :href="`/karyawans/${karyawan.id}/edit`"
                                            class="inline-flex p-2 text-slate-400 hover:text-amber-600 hover:bg-amber-50 rounded-lg transition-all"
                                        >
                                            <svg
                                                class="w-5 h-5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                                                    stroke-width="2"
                                                />
                                            </svg>
                                        </Link>
                                        <button
                                            @click="deleteKaryawan(karyawan.id)"
                                            class="inline-flex p-2 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-all"
                                        >
                                            <svg
                                                class="w-5 h-5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                    stroke-width="2"
                                                />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div
                    class="mt-8 flex items-center justify-between bg-white p-4 rounded-2xl border border-slate-200"
                >
                    <div class="text-sm text-slate-500 font-medium">
                        Menampilkan
                        <span class="text-slate-900 font-bold">{{
                            karyawans.from
                        }}</span>
                        -
                        <span class="text-slate-900 font-bold">{{
                            karyawans.to
                        }}</span>
                        dari
                        <span class="text-slate-900 font-bold">{{
                            karyawans.total
                        }}</span>
                        karyawan
                    </div>
                    <div class="flex gap-1">
                        <template
                            v-for="link in karyawans.links"
                            :key="link.label"
                        >
                            <Link
                                v-if="link.url"
                                :href="link.url"
                                v-html="link.label"
                                :class="[
                                    'px-4 py-2 rounded-xl text-xs font-bold transition-all border',
                                    link.active
                                        ? 'bg-indigo-600 text-white border-indigo-600 shadow-md shadow-indigo-100'
                                        : 'bg-white text-slate-600 border-slate-200 hover:border-indigo-300 hover:text-indigo-600',
                                ]"
                            />
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, router } from "@inertiajs/vue3";
import { ref, watch } from "vue";
import debounce from "lodash/debounce";

const props = defineProps({
    karyawans: Object,
    filters: Object,
});

const search = ref(props.filters.search || "");
const status = ref(props.filters.status || "");

const applyFilters = debounce(() => {
    router.get(
        "/karyawans",
        { search: search.value, status: status.value },
        {
            preserveState: true,
            replace: true,
            preserveScroll: true,
        }
    );
}, 400);

watch([search, status], applyFilters);

const deleteKaryawan = (id) => {
    if (confirm("Hapus data karyawan ini secara permanen?")) {
        router.delete(`/karyawans/${id}`);
    }
};
</script>
