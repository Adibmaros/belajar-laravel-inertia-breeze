<template>
    <Head title="Edit Karyawan" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Karyawan: {{ karyawan.nama }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white shadow-sm sm:rounded-lg border border-gray-200"
                >
                    <form @submit.prevent="submit" class="p-8 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label
                                    class="block text-sm font-bold text-gray-700 mb-1"
                                    >NIP
                                    <span class="text-red-500">*</span></label
                                >
                                <input
                                    v-model="form.nip"
                                    type="text"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    :class="{
                                        'border-red-500': form.errors.nip,
                                    }"
                                />
                                <div
                                    v-if="form.errors.nip"
                                    class="text-red-500 text-xs mt-1"
                                >
                                    {{ form.errors.nip }}
                                </div>
                            </div>

                            <div>
                                <label
                                    class="block text-sm font-bold text-gray-700 mb-1"
                                    >Nama Lengkap
                                    <span class="text-red-500">*</span></label
                                >
                                <input
                                    v-model="form.nama"
                                    type="text"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    :class="{
                                        'border-red-500': form.errors.nama,
                                    }"
                                />
                                <div
                                    v-if="form.errors.nama"
                                    class="text-red-500 text-xs mt-1"
                                >
                                    {{ form.errors.nama }}
                                </div>
                            </div>

                            <div>
                                <label
                                    class="block text-sm font-bold text-gray-700 mb-1"
                                    >Email
                                    <span class="text-red-500">*</span></label
                                >
                                <input
                                    v-model="form.email"
                                    type="email"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    :class="{
                                        'border-red-500': form.errors.email,
                                    }"
                                />
                                <div
                                    v-if="form.errors.email"
                                    class="text-red-500 text-xs mt-1"
                                >
                                    {{ form.errors.email }}
                                </div>
                            </div>

                            <div>
                                <label
                                    class="block text-sm font-bold text-gray-700 mb-1"
                                    >No HP</label
                                >
                                <input
                                    v-model="form.no_hp"
                                    type="text"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                />
                            </div>

                            <div>
                                <label
                                    class="block text-sm font-bold text-gray-700 mb-1"
                                    >Jenis Kelamin
                                    <span class="text-red-500">*</span></label
                                >
                                <select
                                    v-model="form.jenis_kelamin"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                >
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div>
                                <label
                                    class="block text-sm font-bold text-gray-700 mb-1"
                                    >Jabatan
                                    <span class="text-red-500">*</span></label
                                >
                                <input
                                    v-model="form.jabatan"
                                    type="text"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                />
                            </div>

                            <div>
                                <label
                                    class="block text-sm font-bold text-gray-700 mb-1"
                                    >Gaji
                                    <span class="text-red-500">*</span></label
                                >
                                <input
                                    v-model="form.gaji"
                                    type="number"
                                    step="0.01"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                />
                            </div>

                            <div>
                                <label
                                    class="block text-sm font-bold text-gray-700 mb-1"
                                    >Tanggal Masuk
                                    <span class="text-red-500">*</span></label
                                >
                                <input
                                    v-model="form.tanggal_masuk"
                                    type="date"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                />
                            </div>

                            <div class="md:col-span-2">
                                <label
                                    class="block text-sm font-bold text-gray-700 mb-1"
                                    >Status
                                    <span class="text-red-500">*</span></label
                                >
                                <div class="flex gap-4">
                                    <label class="flex items-center"
                                        ><input
                                            type="radio"
                                            v-model="form.status"
                                            value="Aktif"
                                            class="mr-2"
                                        />
                                        Aktif</label
                                    >
                                    <label class="flex items-center"
                                        ><input
                                            type="radio"
                                            v-model="form.status"
                                            value="Cuti"
                                            class="mr-2"
                                        />
                                        Cuti</label
                                    >
                                    <label class="flex items-center"
                                        ><input
                                            type="radio"
                                            v-model="form.status"
                                            value="Resign"
                                            class="mr-2"
                                        />
                                        Resign</label
                                    >
                                </div>
                            </div>

                            <div class="md:col-span-2">
                                <label
                                    class="block text-sm font-bold text-gray-700 mb-1"
                                    >Alamat</label
                                >
                                <textarea
                                    v-model="form.alamat"
                                    rows="3"
                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                ></textarea>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-end space-x-3 pt-6 border-t border-gray-100"
                        >
                            <Link
                                href="/karyawans"
                                class="text-sm text-gray-600 hover:underline"
                                >Batal</Link
                            >
                            <button
                                type="submit"
                                :disabled="form.processing"
                                class="px-6 py-2 bg-indigo-600 text-white rounded-md font-bold text-sm hover:bg-indigo-700 disabled:opacity-50 transition"
                            >
                                {{
                                    form.processing
                                        ? "Memproses..."
                                        : "Update Karyawan"
                                }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const props = defineProps({
    karyawan: Object,
});

const form = useForm({
    nip: props.karyawan.nip,
    nama: props.karyawan.nama,
    email: props.karyawan.email,
    no_hp: props.karyawan.no_hp || "",
    jenis_kelamin: props.karyawan.jenis_kelamin,
    alamat: props.karyawan.alamat || "",
    jabatan: props.karyawan.jabatan,
    gaji: props.karyawan.gaji,
    tanggal_masuk: props.karyawan.tanggal_masuk?.split("T")[0] || "",
    status: props.karyawan.status,
});

const submit = () => {
    form.put(`/karyawans/${props.karyawan.id}`);
};
</script>
