<template>
    <div class="p-12">
        <h1 class="my-4 text-[25px]">All Transaction</h1>
        <div class="bg-white rounded-lg shadow-lg p-4">
            <div class="flex justify-between items-center">
                <div>
                    <input
                        class="w-[400px] p-4 h-[40px] rounded-lg"
                        type="text"
                        placeholder="Search"
                        v-model="searchQuery"
                        @input="filterTransactions"
                    />
                </div>
                <div class="flex justify-between w-[20%]">
                    <input
                        class="w-[100px] rounded-md"
                        type="text"
                        placeholder="Filter by date"
                        v-model="filterDate"
                        @input="filterTransactions"
                    />
                    <button
                        @click="exportData"
                        class="bg-[#009864] w-[100px] p-2 rounded-md text-white"
                    >
                        Exports
                    </button>
                </div>
            </div>

            <div class="items-start">
                <table
                    class="table-auto w-full mt-4 border-collapse border border-gray-300"
                >
                    <thead class="bg-gray-100">
                        <tr>
                            <th
                                class="px-4 py-2 border border-gray-300 text-left"
                            >
                                Date
                            </th>
                            <th
                                class="px-4 py-2 border border-gray-300 text-left"
                            >
                                Transaction ID
                            </th>
                            <th
                                class="px-4 py-2 border border-gray-300 text-left"
                            >
                                Wallet
                            </th>
                            <th
                                class="px-4 py-2 border border-gray-300 text-left"
                            >
                                Description
                            </th>
                            <th
                                class="px-4 py-2 border border-gray-300 text-right"
                            >
                                Amount
                            </th>
                            <th
                                class="px-4 py-2 border border-gray-300 text-center"
                            >
                                Status
                            </th>
                            <th
                                class="px-4 py-2 border border-gray-300 text-center"
                            >
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="transaction in filteredTransactions"
                            :key="transaction.id"
                            class="hover:bg-gray-50 border-b"
                        >
                            <td class="px-4 py-2 border-gray-300">
                                {{
                                    new Date(
                                        transaction.created_at
                                    ).toLocaleDateString()
                                }}
                            </td>
                            <td class="px-4 py-2 border-gray-300 break-all">
                                {{ transaction.transaction_id }}
                            </td>
                            <td class="px-4 py-2 border-gray-300">
                                {{ transaction.acc_type }}
                            </td>
                            <td class="px-4 py-2 border-gray-300">
                                {{ transaction.description }}
                            </td>
                            <td
                                class="px-4 py-2 border-gray-300 text-right w-[120px] flex items-center"
                            >
                                $ {{ transaction.amount }}
                            </td>
                            <td class="px-4 py-2 border-gray-300 text-center">
                                {{ transaction.status }}
                            </td>
                            <td class="px-4 py-2 border-gray-300 text-center">
                                <div class="flex justify-center space-x-4">
                                    <button
                                        :disabled="
                                            transaction.status ===
                                                'Confirmed' ||
                                            transaction.status === 'Rejected'
                                        "
                                        @click="
                                            confirmTransaction(
                                                transaction.transaction_id,
                                                'Confirmed'
                                            )
                                        "
                                        class="text-green-500"
                                    >
                                        <i
                                            class="fa-solid fa-square-check text-[20px]"
                                        ></i>
                                    </button>
                                    <button
                                        @click="
                                            rejectTransaction(
                                                transaction.transaction_id,
                                                'Rejected'
                                            )
                                        "
                                        class="text-red-500"
                                    >
                                        <i
                                            class="fa-solid fa-rectangle-xmark text-[20px]"
                                        ></i>
                                    </button>
                                    <button class="text-blue-500">
                                        <i
                                            class="fa-solid fa-message text-[20px]"
                                        ></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import AuthAdminLayout from "@/Layouts/AuthAdminLayout.vue";
import { usePage } from "@inertiajs/vue3";
import { data } from "autoprefixer";
import axios from "axios";

export default {
    layout: AuthAdminLayout,
    props: {
        transaction: Object, // Ensure the transaction object is passed in as a prop
    },

    data() {
        return {
            glo: [],
            searchQuery: "",
            filterDate: "",
        };
    },

    computed: {
        filteredTransactions() {
            return this.glo.filter((transaction) => {
                const matchesSearchQuery = this.searchQuery
                    ? transaction.transaction_id
                          .toLowerCase()
                          .includes(this.searchQuery.toLowerCase()) ||
                      transaction.acc_type
                          .toLowerCase()
                          .includes(this.searchQuery.toLowerCase()) ||
                      transaction.description
                          .toLowerCase()
                          .includes(this.searchQuery.toLowerCase())
                    : true;

                const matchesFilterDate = this.filterDate
                    ? new Date(transaction.created_at).toDateString() ===
                      new Date(this.filterDate).toDateString()
                    : true;

                return matchesSearchQuery && matchesFilterDate;
            });
        },
    },

    mounted() {
        this.fetchAllTransaction();
    },

    methods: {
        fetchAllTransaction() {
            axios
                .get(route("alltransaction.fetch"))
                .then((res) => {
                    console.log(res.data);
                    this.glo = res.data;
                    console.log("datannn", this.glo);
                })
                .catch((err) => {
                    console.log(err);
                });
        },

        filterTransactions() {},

        // exportData() {
        //     const csvContent = [
        //         [
        //             "Date",
        //             "Transaction ID",
        //             "Wallet",
        //             "Description",
        //             "Amount",
        //             "Status",
        //         ],
        //         ...this.filteredTransactions.map((transaction) => [
        //             this.formatDateTime(transaction.created_at),
        //             transaction.transaction_id,
        //             transaction.acc_type,
        //             transaction.description,
        //             `$${transaction.amount}`,
        //             transaction.status,
        //         ]),
        //     ]
        //         .map((e) => e.join(","))
        //         .join("\n");

        //     const blob = new Blob([csvContent], {
        //         type: "text/csv;charset=utf-8;",
        //     });
        //     const link = document.createElement("a");
        //     const url = URL.createObjectURL(blob);
        //     link.setAttribute("href", url);
        //     link.setAttribute("download", "transactions.csv");
        //     link.style.visibility = "hidden";
        //     document.body.appendChild(link);
        //     link.click();
        //     document.body.removeChild(link);
        // },

        confirmTransaction(id, status) {
            console.log("t id", id);
            axios
                .post(route("transaction.confirm"), { id: id, status: status })
                .then((res) => {
                    console.log(res);
                    this.fetchAllTransaction();
                })
                .catch((err) => {
                    console.log(err);
                });
        },

        rejectTransaction(id, status) {
            console.log("rej", id);
            axios
                .post(route("transaction.rejected"), { id: id, status: status })
                .then((res) => {
                    console.log(res);
                    this.fetchAllTransaction();
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
};
</script>
