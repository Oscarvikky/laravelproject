<template>
    <main class="px-[px]">
        <h1>No Deposit page</h1>
        <div class="flex flex-wrap mx-auto w-[90%] gap-7">
            <div
                class="w-[300px] border shadow-md rounded-lg"
                v-for="(pack, index) in packages"
            >
                <div
                    class="w-[299px] h-[180] red p-4"
                    :style="{
                        backgroundColor: bgcolor[index % bgcolor.length],
                    }"
                >
                    <img
                        class="w-[150px] h-[150px] mx-auto"
                        :src="pack.img"
                        alt=""
                    />
                </div>
                <div class="flex gap-5 items-center p-4">
                    <h1 class="font-[600]">{{ pack.name }}</h1>
                    {{ pack.option }}
                </div>
                <p class="p-2">
                    {{ pack.text }}
                </p>
                <div class="flex justify-between items-center mt-14 m-4">
                    <div>
                        <h1 class="text-[24px] font-[600]">
                            ${{ pack.price }}
                        </h1>
                    </div>
                    <div>
                        <button
                            @click="dispModal(pack)"
                            class="bg-green-600 rounded-md w-[100px] p-2 text-white"
                        >
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div
            v-if="showModal"
            class="modal bg-gray-500 w-3/12 absolute top-[20%]"
        >
            <h1>{{ modalInfo.name }}</h1>
            <h1>
                {{ modalInfo.text }}
            </h1>
            <h1>Amount {{ modalInfo.price }}</h1>
            <button
                @click="payAmount"
                class="bg-green-500 rounded-md text-white px-4 py-2 text-[16px]"
            >
                PAY
            </button>
            <button
                @click="showModal = false"
                class="text-red-600 block m-auto"
            >
                Go back
            </button>
        </div>
    </main>
</template>

<script>
import AuthUserLayout from "@/Layouts/AuthUserLayout.vue";
import axios from "axios";
export default {
    layout: AuthUserLayout,

    data() {
        return {
            packages: [
                {
                    name: "Synthentic Indices",
                    option: "Basic one",
                    price: 200,
                    text: "Our cutting-edge Synthetic Indices trading software is designed to provide unparalleled accuracy and efficiency in trading synthetic markets.",
                    active: "activate_no_deposit_syn",
                    img: "/images/agape16.png",
                },
                {
                    name: "No Deposit",
                    option: "Basic one",
                    price: 8,
                    text: "Our cutting-edge Synthetic Indices trading software is designed to provide unparalleled accuracy and efficiency in trading synthetic markets.",
                    active: "activate_no_deposit_basic1_wallet",
                    img: "/images/agape12.png",
                },
                {
                    name: "No Deposit",
                    option: "Basic two",
                    price: 14,
                    text: "Our cutting-edge Synthetic Indices trading software is designed to provide unparalleled accuracy and efficiency in trading synthetic markets.",
                    active: "activate_no_deposit_basic2_wallet",
                    img: "/images/agape13.png",
                },
                {
                    name: "No Deposit",
                    option: "Ultimate one",
                    price: 65,
                    text: "Our cutting-edge Synthetic Indices trading software is designed to provide unparalleled accuracy and efficiency in trading synthetic markets.",
                    active: "activate_no_deposit_ultimate1_wallet",
                    img: "/images/agape14.png",
                },
                {
                    name: "No Deposit",
                    option: "Ultimate two",
                    price: 115,
                    text: "Our cutting-edge Synthetic Indices trading software is designed to provide unparalleled accuracy and efficiency in trading synthetic markets.",
                    active: "activate_no_deposit_ultimate2_wallet",
                    img: "/images/agape15.png",
                },
            ],
            bgcolor: ["#F9C871", "#E85F2B", "#5DCACF", "#9063D3", "#5DCF62"],
            showModal: false,
            modalInfo: null,
        };
    },

    methods: {
        dispModal(info) {
            this.showModal = true;
            this.modalInfo = info;
        },

        payAmount() {
            axios
                .post(route("no_deposit.subscribe"), this.modalInfo)
                .then((res) => {
                    console.log(res);
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
};
</script>

<style scoped>
.red {
    border-radius: 10px 10px 0 0;
}
</style>
