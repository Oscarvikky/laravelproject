<template>
    <div class="container">
        <h1>ddd</h1>
        <div class="w-[60%] m-auto bg-white mt-5 rounded p-2 bigfund">
            <h1 class="text-4xl ms-[67px] mt-7 mb-5">Local Transfer</h1>

            <div class="bg-[#009846] p-10 w-[80%] mx-auto text-white fund">
                <div class="flex gap-6">
                    <div>
                        <p>ACCOUNT NUMBER</p>
                        <p>3067062211</p>
                    </div>
                    <div>
                        <p>BANK NAME</p>
                        <p>FIRSTBANK</p>
                    </div>
                </div>
                <div class="flex gap-6 my-6">
                    <div>
                        <p>ACCOUNT NAME</p>
                        <p>ONOLA AYOTUNDE</p>
                    </div>
                    <div>
                        <p>TRANSACTION ID</p>
                        <p>FDSFADDSHHW*YTWTWYYYWY</p>
                    </div>
                </div>
            </div>

            <div class="document">
                <div class="py-6 text-center cd text-[#009846]">
                    <i class="fa-solid fa-plus text-[24px]"></i>
                    <span class="text-[12px]">upload payment reciept</span>
                </div>
            </div>
            <div class="text-center text-[10px] text-[#009846] my-6">
                <p>ssssssssddddd.pdf</p>
            </div>

            <div class="flex items-center w-[80%] mx-auto gap-5">
                <hr class="w-[2000px] text-gray-600" />
                <p>Or</p>
                <hr class="w-[2000px] text-gray-600" />
            </div>

            <div>
                <div class="ms-[67px]">
                    <p class="text-4xl mt-10 mb-9">Wallet Transfer</p>

                    <form @submit.prevent="postTransaction()" action="">
                        <label for="">Wallet Address</label> <br />
                        <div
                            class="flex w-[600px] h-[50px] p-3 border-2 border-gray-400 rounded-lg justify-between my-3"
                        >
                            <input
                                value="tryyyyyyyyyy"
                                placeholder=""
                                class="px-40 py-2 outline-none border-none"
                                type="text"
                                v-model="inputfield"
                                ref="inputfield"
                            />
                            <p v-if="copysuccess" class="success-message">
                                Text copied to clipboard!
                            </p>
                            <button @click="copytext">copy</button>
                        </div>
                        <div class="my-3">
                            <label for="">select account to TopUp </label><br />
                            <select
                                v-model="acc_type"
                                class="w-[600px] h-[50px] py-2 rounded-lg border-2 border-gray-400 focus:outline-none"
                            >
                                <option value="" selected disabled>
                                    choose account type
                                </option>
                                <option value="Wallet">wallet</option>
                                <option value="Escrow">Escrow</option>
                            </select>
                            <br />
                        </div>
                        <div class="my-3">
                            <label for="">Amount paid</label> <br />
                            <input
                                class="w-[600px] h-[50px] py-2 rounded-lg border-2 border-gray-400 focus:outline-none"
                                type="text"
                                placeholder="$ 0.00"
                                v-model="amount"
                            />
                        </div>
                        <div class="my-3">
                            <label for="">Transaction ID</label> <br />
                            <div
                                class="flex w-[600px] h-[50px] p-3 border-2 border-gray-400 rounded-lg justify-between my-3"
                            >
                                <input
                                    value=""
                                    placeholder=""
                                    class="px-40 py-2 outline-none border-none"
                                    type="text"
                                    v-model="transaction_id"
                                />
                                <button>paste</button>
                            </div>
                        </div>
                        <button
                            class="w-[600px] h-[50px] bg-[#009846] text-white rounded-lg my-8"
                        >
                            Confirm Transaction
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AuthUserLayout from "@/Layouts/AuthUserLayout.vue";
import axios from "axios";
import { usePage } from "@inertiajs/vue3";
export default {
    layout: AuthUserLayout,
    data() {
        return {
            inputValue: "tryyyyyyyyyy",
            copysuccess: false,

            acc_type: "",
            amount: "",
            transaction_id: "",
            user: usePage().props.auth.user,
        };
    },

    mounted() {
        console.log("user", this.user);
        this.fetchuser();
    },
    methods: {
        copytext(e) {
            e.preventDefault();

            const inputfield = this.$refs.inputfield;
            inputfield.select();
            inputfield.setSelectionRange(0, 99999); // for mobile device

            Navigator.clipboard.writeText(this.inputValue).then(() => {
                this.copysuccess = true;
            });

            setTimeout(() => {
                this.copysuccess = false;
            }, 2000);
        },

        postTransaction() {
            // e.preventDefault();
            let data = {
                user_id: this.user.id,
                username: this.user.name,
                acc_type: this.acc_type,
                amount: this.amount,
                transaction_id: this.transaction_id,
            };
            console.log("ourdata", data);
            axios
                .post(route("user.fund"), data)
                .then((res) => {
                    console.log(res);
                })
                .catch((err) => {
                    console.log(err);
                });
        },

        fetchuser() {
            axios.get(route("user.fetch"), { id: this.user.id }).then((res) => {
                console.log(res);
            });
        },
    },
};
</script>

<style scoped>
.fund {
    border-radius: 10px;
}
.bigfund {
    border-radius: 6px;
}
.document {
    background-color: #e6f5ed;
    width: 80%;
    height: 100px;
    margin: auto;
    margin-top: 30px;
    border-radius: 6px;
    border: dashed 2px #009846;
}
.cd {
    display: flex;
    flex-direction: column;
}
</style>
