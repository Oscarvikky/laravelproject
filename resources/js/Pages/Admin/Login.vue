<template>
    <div>
        <!-- <form @submit.prevent="Login" action=""> -->
        <input
            class="w-[200px] h-[40px] my-3"
            v-model="email"
            type="text"
            placeholder="Email"
        />
        <br />
        <input
            class="w-[200px] h-[40px] my-3"
            v-model="password"
            type="text"
            placeholder="password"
        />
        <br />
        <button @click="Login()" class="w-[200px] p-3 bg-blue-800">
            login
        </button>
        <!-- </form> -->
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            email: "",
            password: "",
        };
    },

    methods: {
        Login() {
            let data = {
                email: this.email,
                password: this.password,
            };

            axios
                .post(route("admin_login"), data)
                .then((res) => {
                    console.log(res);
                    this.$inertia.visit(route("admin"));
                    // route("admin");
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
};
</script>
