<template>
    <div class="flex bg-[#fbeaea]">
        <div class="side-nav w-[20%]">
            <div class="sidenav">
                <div class="flex items-center mb-20 mt-7">
                    <img class="w-[40px]" src="/images/logo.png" alt="" />
                    <h1>AGAPETRADE</h1>
                </div>

                <div class="mb-28">
                    <ul class="mx-auto my-9" v-for="links in link">
                        <li class="my-4 flex-col items-center">
                            <a :href="links.path">
                                <i :class="links.icon" class="mr-4"></i>
                                <span>{{ links.text }}</span>
                            </a>
                            <!-- <a class="my-5 cursor-pointer">{{ links.text }}</a> -->
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="w-[60%] flex m-auto my-3" />

            <div class="flex gap-10 items-center downnav my-[20.5px]">
                <div>
                    <img class="w-[30px]" src="/images/logo.png" alt="" />
                </div>
                <div>
                    <p>username</p>
                    <a href="">logout</a>
                </div>
            </div>
        </div>

        <div class="side-nav w-[80%]">
            <nav class="bg-[#ffffff] py-3">
                <div class="container flex justify-between items-center my-6">
                    <div class="flex justify-evenly items-center w-[20%]">
                        <p>Home</p>
                        <i class="fa-solid fa-angle-right"></i>
                        <p>Dashboard</p>
                    </div>

                    <div class="flex justify-evenly w-[30%]">
                        <i class="fa-solid fa-message"></i>
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-globe"></i>
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                        <img class="w-[20px]" src="/images/logo.png" alt="" />
                    </div>
                </div>
            </nav>

            <div class="slot">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            link: [
                { text: "Dashboard", icon: "fa-solid fa-house", path: "#" },
                {
                    text: "Fund Account",
                    icon: "fa-solid fa-file-invoice-dollar",
                    path: "#",
                },
                {
                    text: "Academy",
                    icon: "fa-solid fa-graduation-cap",
                    path: "#",
                },
                {
                    text: "Trandin software",
                    icon: "fa-solid fa-arrow-trend-up",
                    path: "#",
                },
                {
                    text: "Transaction",
                    icon: "fa-solid fa-building",
                    path: "#",
                },
                {
                    text: "Withdrawal",
                    icon: "fa-solid fa-money-bill-transfer",
                    path: "#",
                },
                {
                    text: "Referral",
                    icon: "fa-solid fa-money-bill-transfer",
                    path: "#",
                },
            ],
        };
    },
};
</script>

<style scoped>
.sidenav {
    margin-left: 60px;
    /* background-color: blue !important; */
}
.downnav {
    margin-left: 60px !important;
}
.slot {
    background: #f0f0f0 !important;
    /* height: 80vh; */
}
</style>
