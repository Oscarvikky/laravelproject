<template>
    <div class="container-fluid m-auto cont relative">
        <div
            class="bg-[#009846] w-[50px] h-[50px] rounded-full absolute right-[80px] top-[10px]"
        >
            <img
                class="items-center w-[30px] absolute right-[10px] top-[10px]"
                src="/images/chat.png "
                alt=""
            />
        </div>
        <!-- <div class="w=[30%] h-[70vh] text-center mx-auto div"></div> -->
        <div class="t">
            <p class="text-center text-white text-xl mb-10">
                <br />
                <br />
                <br />
                <br />
                Join AgapeTrades Academy to unlock the secrets of the financial
                markets. Whether you <br />
                choose to learn and earn simultaneously or prefer to earn first
                and learn later, our <br />
                comprehensive courses and profit-sharing model set you on a path
                to consistent income.
            </p>
        </div>
        <div class="grid grid-cols-2 m-auto items-center wallet">
            <div class="col-6">
                <img
                    class="img-fluid w[300px] h-[500px]"
                    src="/images/agape3.png"
                    alt=""
                />
            </div>

            <div class="col-6 text-white text-l">
                <p class="mt-20 mb-6">
                    We are a software development company using Artificial
                    Intelligence (AI) to trade in the financial market. We offer
                    a great service through our Academy, to people who are
                    interested in earning consistent income on daily, weekly or
                    monthly basis. We share part of our profit with our students
                    according to their stage and level.
                    <br />
                    <br />
                    <br />
                    At AgapeTrades we adopt a fully decentralized system, which
                    means your money is always safe with you in your account
                    with the broker or exchange (applicable to cryptocurrency)
                    of your choice. .All you need to do at AgapeTrades is to
                    subscribe to our software which will be used to connect your
                    account with your broker or exchange for trading.
                </p>

                <button
                    class="bg-[#009846] w-[150px] h-[40px] p-4 text-white my-7 flex gap-3 items-center rounded-md"
                >
                    Contact us
                    <span
                        ><i
                            class="fa-solid fa-arrow-right text-sm font-thin"
                        ></i
                    ></span>
                </button>
            </div>
        </div>
    </div>
</template>

<style scoped>
.wallet {
    width: 60% !important;
}

.wallet p {
    font-family: "Courier New", Courier, monospace;
    font-weight: 500;
}
.cont {
    background: #2d2d2d;
    /* linear-gradient(rgb(41, 101, 41), gray, violet, black, white); */
}
/* .div {
    backdrop-filter: blur(10px);
    background: yellow linear-gradient(red, orange, black);
    position: absolute;
    top: 60px;
} */
</style>
