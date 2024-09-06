<template>
  <div class="container bg-light">
    <div class="row con m-auto tww-8/12 my-5">
      <div class="col-6 my-5">
        <div>
          <a class="d-flex align-items-center twgap-1 use twmb-8" href=""
            ><img class="imgy" src="/image/cheback.png" alt="" /> Back to
            login</a
          >
          <h2 class="tagg">Forgot your password ?</h2>
          <p class="ty">
            Don’t worry, happens to all of us. Enter your email below to recover
            your password
          </p>
        </div>
        <form action="">
          <input class="form-control my-3" type="text" />

          <button class="btn tww-full signbtn">Submit</button>

          <p class="text-center yu my-5">
            ------------ or login with----------------
          </p>
          <div class="d-flex gap-3 social mt-4 mb-4">
            <button>F</button>
            <button>A</button>
            <button>G</button>
          </div>
        </form>
      </div>

      <div class="col-6 my-5">
        <img class="" src="/image/login.png" alt="" />
      </div>
    </div>
  </div>
</template>

<style>
.con {
  background-color: #e6f5ed;
}
.tagg {
  font-size: 26px;
  font-family: DM Mono;
  word-spacing: 10px;
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
  justify-content: space-between;
  gap: 5px;
  width: 80%;
}
.imgy {
  /* height: 600px; */
  width: 15px;
  height: 15px;
}
.a {
  text-decoration: none;
  color: red;
  font-size: 10px;
  cursor: pointer;
}
.use {
  font-size: 14px;
  color: black;
  font-weight: 600;
  font-family: Rubik;
  text-decoration: none;
}
.ty {
  font-size: 14px;
  margin-bottom: 40px;
}
</style>
