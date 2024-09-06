<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Navbar from "./Home/Navbar.vue";
import Hero from "./Home/Hero.vue";
import Hero2 from "./Home/Hero2.vue";
import Hero3 from "./Home/Hero3.vue";
// import TheWelcome from "../components/TheWelcome.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById("screenshot-container")?.classList.add("!hidden");
    document.getElementById("docs-card")?.classList.add("!row-span-1");
    document.getElementById("docs-card-content")?.classList.add("!flex-row");
    document.getElementById("background")?.classList.add("!hidden");
}
</script>

<template>
    <Head title="Welcome" />
    <!-- 
    <div class="bg-gray-50 text-black/50 dark:bg-gray-500 dark:text-white/50">
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white"
        >
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header
                    class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3"
                >
                    <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </Link>

                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Log in
                            </Link>

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </Link>
                        </template>
                    </nav>
                </header>
            </div>
        </div>
    </div> -->
    <div class="bg-[#2d2d2d] relative z-10">
        <div class="absolute firstloper">
            <img class="img" src="/images/firstloper.png " alt="" />
        </div>
        <Navbar class="nav" />
        <div class="relative mt-20">
            <div class="row text-center relative z-10">
                <div class="col-text-center text-white text-center">
                    <p
                        class="text-5xl font-lighter trade leading-normal font-[500]"
                    >
                        Trading in <br />
                        the financial market <br />that works
                    </p>
                </div>
                <div>
                    <p class="text-white text-xl my-7 z-10 our">
                        At agapetrade, we offer a revolution decentralized
                        trading experience where you always <br />
                        stay in control of your money. By subscribing to our
                        cutting-edge software, you can <br />seamlessly conne t
                        your accountwith your preferred broker or exchange,
                        ensuring your
                        <br />
                        funds are always safe and accessible.
                    </p>
                    <div class="back">
                        <img src="/images/LooperBG.png " alt="" />
                    </div>
                </div>

                <div class="my-3">
                    <button class="getstarted">get started</button>
                </div>

                <div class="my-5">
                    <img class="m-auto" src="/images/agape2.png" alt="" />
                </div>

                <div class="flex justify-center">
                    <div
                        class="m-auto my-12 flex justify-evenly w-full text-white text-xl num"
                    >
                        <p>
                            1000 + <br />
                            <span>subscribers</span>
                        </p>
                        <p>
                            1000 + <br />
                            <span> academy students</span>
                        </p>
                        <p>
                            $10000 + <br />
                            <span> profit share</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Hero />
    <Hero2 />
    <Hero3 />
</template>

<style scoped>
body {
    background: #2d2d2d !important;
}
.firstloper {
    z-index: -1;
    /* top: -300px; */
}
.img {
    /* background: #254132 linear-gradient(#254132, #2d2d2d, #2d2d2d); */
    /* background: linear-gradient(to right, #254132, #2d2d2d, to bottom, #2d2d2d); */

    background: linear-gradient(135deg, #254132, #2d2d2d 50%, #2d2d2d 100%);
}
.nav {
    z-index: 1;
}
.getstarted {
    width: 150px;
    height: 40px;
    padding: 2px;
    border-radius: 8px;
    background-color: #009846;
    font-size: 16px;
    color: white;
}
.back {
    position: absolute;
    width: 1000px;
    height: 900px;
    z-index: -1;
    right: 2px;
    top: -300px;
}
.use {
    z-index: 1;
}
.our {
    font-family: Rubik;
    font-size: 16px;
}
.num p {
    font-size: 30px;
    font-weight: 700;
}
.num p span {
    font-size: 18px !important;
    font-weight: lighter !important;
    font-family: "Times New Roman", Times, serif;
}
.trade {
    word-spacing: 20px;
    font-family: Dm Mono;
}
</style>

<!-- <template>
    <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
        <Link
            v-if="$page.props.auth.user"
            :href="route('dashboard')"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
        >
            Dashboard
        </Link>

        <template v-else>
            <Link
                :href="route('login')"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Log in
            </Link>

            <Link
                v-if="canRegister"
                :href="route('register')"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Register
            </Link>
        </template>
    </nav>
    <a download="kujyhgfd.kiuyt">download this file</a>
    <div class="row">
        <div class="col-6 shadow">
            <input
                v-model="first_name"
                class="form-control my-3"
                type="text"
                placeholder="firstname"
            />
            <input
                v-model="email"
                class="form-control my-3"
                type="text"
                placeholder="email"
            />
            <input
                v-model="password"
                class="form-control my-3"
                type="text"
                placeholder="password"
            />
            <button @click="register" class="btn btn-primary my-3">
                submit
            </button>
        </div>

        <div class="col-6 text-center">
            <h1>Display Users</h1>
            <div v-if="alluser.length === 0">
                <p>no users</p>
            </div>
            <div v-else>
                <table
                    class="table table-dark text-dark table-striped tw-my-10"
                >
                    <tr>
                        <th>first_name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                    <tr v-for="item in alluser">
                        <td>{{ item.first_name }}</td>
                        <td>{{ item.email }}</td>
                        <td>{{ item.password }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template> -->

<!-- <script>
import axios from "axios";

export default {
    data() {
        return {
            first_name: "",
            email: "",
            password: "",
            alluser: [],
        };
    },

    mounted() {
        // this.display();
        // this.createUser();
        // axios
        //     .get("http://localhost:8000/about")
        //     .then((res) => {
        //         console.log(res);
        //     })
        //     .catch((err) => {
        //         console.log(err);
        //     });
    },

    methods: {
        createUser() {
            axios
                .post("http://localhost:8000/reg", {
                    name: "Oscar",
                    email: "oscar@gmail.com",
                    password: "1234567",
                })
                .then((res) => {
                    console.log(res);
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        register() {
            const userData = {
                first_name: this.first_name,
                email: this.email,
                password: this.password,
            };

            this.alluser.push(userData);
            localStorage.setItem("users", JSON.stringify(this.alluser));

            // Clear the form fields after registration
            this.first_name = "";
            this.email = "";
            this.password = "";
        },

        display() {
            const users = localStorage.getItem("users");
            console.log(users);
            if (users) {
                this.alluser = JSON.parse(users);
            }
        },
    },
};
</script> -->

<script setup></script>

<!-- <template>
  
</template> -->

<!-- <style scoped>
.getstarted {
    width: 200px;
    height: 60px;
    padding: 10px;
    border-radius: 8px;
    background-color: #009846;
    font-size: 24px;
    color: white;
}
.num p {
    font-size: 30px;
    font-weight: 700;
}
.num p span {
    font-size: 18px !important;
    font-weight: lighter !important;
    font-family: "Times New Roman", Times, serif;
}
.trade {
    word-spacing: 20px;
    font-family: DM Mono;
}
</style> -->

<!-- 
<div class="container-fluid twmy-10">
    <div class="row twtext-center">
        <div class="col-text-center twtext-white twtext-center">
            <p class="twtext-5xl twfont-serif trade">
                Trading in <br />
                the financial market <br />that works
            </p>
        </div>
        <div>
            <p class="twtext-white twtext-xl twmy-7">
                At agapetrade, we offer a revolution decentralized trading
                experience where you always <br />
                stay in control of your money. By subscribing to our
                cutting-edge software, you can <br />seamlessly conne t your
                accountwith your preferred broker or exchange, ensuring your
                <br />
                funds are always safe and accessible.
            </p>
        </div>

        <div class="my-3">
            <button class="getstarted">get started</button>
        </div>

        <div class="my-5">
            <img class="m-auto" src="/image/agape2.png" alt="" />
        </div>

        <div class="d-flex justify-center">
            <div
                class="m-auto d-flex twjustify-evenly tww-full twtext-white twtext-xl num"
            >
                <p>
                    1000 + <br />
                    <span>subscribers</span>
                </p>
                <p>
                    1000 + <br />
                    <span> academy students</span>
                </p>
                <p>
                    $10000 + <br />
                    <span> profit share</span>
                </p>
            </div>
        </div>
    </div>
</div>
<Hero />

<Hero2 />
<Hero3 />
<Hero4 /> -->
