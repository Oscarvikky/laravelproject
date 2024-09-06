<template>
    <main>
        <div>
            <h1>No Deposit users</h1>
            <div>
                <select name="" id="">
                    <option selected value="">basic1</option>
                    <option value="">basic2</option>
                    <option value="">Ultimate1</option>
                    <option value="">Ultimate2</option>
                </select>

                <button>Pay Allusers</button>
            </div>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Transaction_id</td>
                        <td>Subcription</td>
                        <td>Deposit count</td>
                        <td>Last_recieved</td>
                        <td>Amount</td>
                        <td>Status</td>
                    </tr>
                </thead>

                <tbody>
                    <div v-if="data === ''">no user to pay</div>
                    <tr v-else v-for="items in data"></tr>
                    <tr>
                        <!-- <td>{{ items.name }}</td> -->
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</template>

<script>
import AuthAdminLayout from "@/Layouts/AuthAdminLayout.vue";
import { data } from "autoprefixer";
import axios from "axios";
export default {
    layout: AuthAdminLayout,
    data() {
        return {
            data: [],
        };
    },

    mounted() {
        this.fetchNoDeposit();
    },
    methods: {
        fetchNoDeposit() {
            axios
                .get(route("no_deposit.fetch"))
                .then((res) => {
                    console.log("bb", res);
                    this.data = res.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
};
</script>
