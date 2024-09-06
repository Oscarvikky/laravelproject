<template>
  <div class="conatiner">
    <div
      class="d-flex twjustify-between twtext-white m-auto tww-9/12 fott twm-52"
    >
      <div>
        <img class="fimg" src="/image/logo.png" alt="" />
      </div>
      <p class="mt-3 twtext-sm ui">Chat our customer service</p>
    </div>

    <div class="row m-auto tww-10/12 my-2 align-items-center">
      <div class="col-4 d-flex">
        <div class="icon">
          <span class="ic"><i class="fa-brands fa-whatsapp"></i></span>
        </div>
        <div class="icon">
          <span class="ic"><i class="fa-brands fa-facebook-f"></i></span>
        </div>
        <div class="icon">
          <span class="ic"><i class="fa-brands fa-x-twitter"></i></span>
        </div>
        <div class="icon">
          <span class="ic"><i class="fa-brands fa-youtube"></i></span>
        </div>
      </div>
      <div class="col-4 d-flex twjustify-evenly">
        <a href="">Home</a>
        <a href="">About</a>
        <a href="">Contact</a>
        <a href="">FAQs</a>
      </div>
      <div class="col-4">
        <div class="inp">
          <div class="d-flex twjustify-between align-items-center">
            <input
              class="in"
              type="text"
              placeholder="Type your message here"
            />
            <button>
              <img class="dis" src="/image/agape11.png" alt="" />
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.fott {
  align-items: center;
}
.fimg {
  width: 60px;
  height: 50px;
}
.ui {
  font-family: DM Mono;
}
.icon {
  width: 30px;
  height: 30px;
  background-color: rgb(42, 40, 40);
  border-radius: 100%;
  color: white;
  margin-left: 40px;
  position: relative;
}
.ic {
  position: absolute;
  top: 3px;
  left: 8px;
}
a {
  text-decoration: none;
  color: white;
}
.dis {
  width: 40px;
  height: 40px;
}
.inp {
  width: 350px;
  height: 50px;
  background: #08080833;
  border-radius: 10px;
  padding: 5px;
  outline: none;
  border: none;
}
input {
  background: none;
  border: none;
  outline: none;
  color: white;
}
::placeholder {
  color: white;
  font-size: 12px;
}
</style>
