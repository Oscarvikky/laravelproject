<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <!-- <GuestLayout> -->
    <Head title="Log in" />

    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
        {{ status }}
    </div>

    <!-- <form @submit.prevent="submit">
        <div>
            <InputLabel for="email" value="Email" />

            <TextInput
                id="email"
                type="email"
                class="mt-1 block w-full"
                v-model="form.email"
                required
                autofocus
                autocomplete="username"
            />

            <InputError class="mt-2" :message="form.errors.email" />
        </div>

        <div class="mt-4">
            <InputLabel for="password" value="Password" />

            <TextInput
                id="password"
                type="password"
                class="mt-1 block w-full"
                v-model="form.password"
                required
                autocomplete="current-password"
            />

            <InputError class="mt-2" :message="form.errors.password" />
        </div>

        <div class="block mt-4">
            <label class="flex items-center">
                <Checkbox name="remember" v-model:checked="form.remember" />
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400"
                    >Remember me</span
                >
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <Link
                v-if="canResetPassword"
                :href="route('password.request')"
                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
            >
                Forgot your password?
            </Link>

            <PrimaryButton
                class="ms-4"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
            >
                Log in
            </PrimaryButton>
        </div>
    </form> -->
    <!-- </GuestLayout> -->

    <div class="container bg-light my-5">
        <div class="grid grid-cols-2 con m-auto w-8/12 my-5">
            <div class="col-6 my-5 p-8">
                <div>
                    <h3 class="text-xl font-bold">Login</h3>
                    <p class="tag mb-9 text-[14px]">
                        Login to access your AgapeTrade account
                    </p>
                </div>
                <form @submit.prevent="submit" action="">
                    <div>
                        <input
                            class="form-control my-3 w-[400px] rounded-lg"
                            placeholder="Email"
                            id="email"
                            type="email"
                            v-model="form.email"
                            required
                            autocomplete="username"
                        />
                        <InputError
                            class="mt-2"
                            :message="form.errors.password"
                        />
                    </div>
                    <div>
                        <input
                            class="form-control my-3 w-[400px] rounded-lg"
                            placeholder="Password"
                            id="password"
                            type="password"
                            v-model="form.password"
                            required
                            autocomplete="current-password"
                        />
                        <InputError
                            class="mt-2"
                            :message="form.errors.password"
                        />
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="block mt-4">
                            <label class="flex items-center">
                                <Checkbox
                                    name="remember"
                                    v-model:checked="form.remember"
                                />
                                <span
                                    class="ms-2 text-sm text-gray-600 dark:text-gray-400"
                                    >Remember me</span
                                >
                            </label>
                        </div>
                        <Link
                            v-if="canResetPassword"
                            :href="route('password.request')"
                            class="me-[70px] mt-[10px] text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        >
                            Forgot your password?
                        </Link>
                    </div>

                    <!-- <PrimaryButton
                class="ms-4"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
            >
                Log in
            </PrimaryButton> -->
                    <button
                        class="btn w-[400px] rounded-lg p-3 my-3 signbtn"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                    >
                        Sign up
                    </button>

                    <p class="text-center font-bold yu">
                        Dont have an account? <a href="">Signin</a>
                    </p>
                    <p class="text-center yu my-5">
                        ------------ or login with----------------
                    </p>
                    <div class="flex gap-2 social mt-4 mb-4">
                        <button>F</button>
                        <button>A</button>
                        <button>G</button>
                    </div>
                </form>
            </div>

            <div class="col-6 my-5">
                <img class="" src="/images/login.png" alt="" />
            </div>
        </div>
    </div>
</template>

<style>
.con {
    background-color: #e6f5ed;
}
.tag {
    font-family: Rubik;
}
h3 {
    word-spacing: 10px;
    font-family: rubik;
}
.checkbox {
    font-size: 12px;
    margin: 4px;
}
.signbtn {
    background: #009846 !important;
    color: white !important;
}
.yu {
    font-family: Rubik;
}
.social button {
    width: 100px;
    height: 40px;
    color: black;
    background-color: white;
    border-radius: 8px;
}
.social {
    margin: auto;
    /* background-color: blue; */
    /* justify-content: space-between; */
    /* gap: 5px; */
    width: 80%;
}
img {
    height: 600px;
}
.a {
    text-decoration: none;
    color: red;
    font-size: 10px;
    cursor: pointer;
}
</style>
