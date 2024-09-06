<template>
    <nav class="container-fluid align-center">
        <div class="flex justify-evenly navcon">
            <div class="my-3">
                <img src="/images/logo.png" alt="" />
            </div>

            <div
                class="flex justify-evenly gap-20 navmiddle my-3 p-3 text-white"
            >
                <span>Home</span>
                <span>About</span>
                <span>Contact</span>
                <span>FAQs</span>
            </div>
            <div
                class="min-w-60 my-10 text-white flex justify-evenly twgap-10 navlast"
            >
                <span>icon</span>
                <button class="navbtn">Signin</button>
            </div>
        </div>
    </nav>
</template>

<style scoped>
.navmiddle {
    width: fit-content;
    /* background-color: brown !important; */
    height: fit-content;
    border-radius: 8px;
    border: 1px solid rgb(48, 40, 40);
}
.navbtn {
    background-color: #1c623d;
    border-radius: 6px;
    width: 120px;
    height: 40px;
}
.navcon {
    align-items: center !important;
}
.navlast {
    align-items: center !important;
}
img {
    width: 60px;
    height: 60px;
}
</style>
