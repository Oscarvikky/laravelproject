<template>
    <div class="container-fluid bg-[#2d2d2d]">
        <div class="mt-10">
            <p class="text-center text-white cadtext mb-10">
                Experience the future of trading and <br />
                education with <span class="text-[#009846]">AgapeTrades</span>
            </p>
        </div>

        <div class="flex justify-evenly m-auto crd p-5">
            <div
                class="card col-4 p-10 cardy relative z-10"
                style="width: 18rem"
            >
                <img
                    src="/images/agape4.png"
                    class="card-img-top w-[166px] h-[166px] mx-auto"
                    alt="..."
                />

                <div class="card-body relative">
                    <h5 class="tryy card-title text-center my-6">
                        Decentralized <br />
                        Trading Platform
                    </h5>
                    <div class="relative">
                        <p
                            class="try card-text text-center my-6 text-sm z-10 leading-6"
                        >
                            All you need to do at AgapeTrades <br />
                            is to subscribe to our software <br />
                            which will be used to connect your <br />
                            account with your broker or <br />
                            exchange for trading.
                        </p>

                        <img
                            src="/images/agape4.png"
                            class="card-img-top cardimgg absolute"
                            alt="..."
                        />
                    </div>
                </div>
            </div>
            <div class="card col-4 tp-10 cardy relative" style="width: 18rem">
                <img
                    src="/images/agape5.png"
                    class="card-img-top w-[166px] h-[166px] mx-auto"
                    alt="..."
                />

                <div class="card-body relative z-10">
                    <h5 class="tryy card-title text-center my-6">
                        AgapeTrades <br />
                        Academy
                    </h5>
                    <p class="try card-text text-center my-6 text-sm leading-6">
                        We offer a great service through <br />
                        our Academy, to people who are <br />
                        interested in earning consistent <br />
                        income on daily, weekly or monthly <br />
                        basis. We share part of our profit <br />
                        with our students according to
                        <br />
                        their stage and level.

                        <img
                            src="/images/agape5.png"
                            class="card-img-top cardimggg absolute top-[100px] right-5 -z-10"
                            alt="..."
                        />
                    </p>
                </div>
            </div>
            <div class="card col-4 p-10 cardy relative" style="width: 18rem">
                <div class="relative">
                    <img
                        src="/images/agape6.png"
                        class="card-img-top cardimg mx-auto z-10"
                        alt="..."
                    />
                    <img
                        src="/images/agape6.png"
                        class="card-img cardimgggg absolute top-0 left-1"
                        alt="..."
                    />
                </div>
                <div class="card-body relative">
                    <h5 class="tryy card-title text-center my-6 z-10">
                        Maximize Your <br />
                        Earnings
                    </h5>
                    <p
                        class="try card-text text-center my-6 text-sm leading-6 rt"
                    >
                        Benefit from an unparalleled <br />
                        referral system. Earn bonuses and <br />
                        share in 11% of your referrals'<br />
                        earnings for three months, <br />
                        amplifying your potential profits.
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.rt {
    z-index: 1;
}
.crd {
    width: 90%;
}
.try {
    font-family: Rubik;
    font-weight: 400;
}
.tryy {
    font-family: DM Mono;
}

.cardimgg {
    width: 166px;
    height: 166px;
    margin: auto;
    filter: blur(38px);
    z-index: -1 !important;
    top: 5px;
    left: 0;
}
.cardimggg {
    width: 240px;
    height: 226px;
    margin: auto;
    filter: blur(15px);
    z-index: -1 !important;
}
.cardimgggg {
    width: 250px;
    height: 266px;
    margin: auto;
    filter: blur(30px);
    /* z-index: -1; */
}
.cardy {
    width: 330px !important;
    font-family: Rubik;
    font-size: 18px;
    font-weight: 500;
    background-color: #262626;
    color: white;
    /* position: relative; */
}
.cadtext {
    font-size: 36px;
    font-weight: 400;
    font-family: DM Mono;
    word-spacing: 10px;
    z-index: 20px;
}
</style>
