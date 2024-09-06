<template>
    <div>welllllllllllllllllllllllllllllllllllllooooooo</div>
</template>

<script>
import AuthAdminLayout from "@/Layouts/AuthAdminLayout.vue";
import axios from "axios";

export default {
    layout: AuthAdminLayout,
    data() {
        return {};
    },

    mounted() {
        this.getAllUsers();
    },

    methods: {
        getAllUsers() {
            axios.get(route("all.users")).then((res) => {
                console.log(res);
            });
        },
    },
};
</script>
