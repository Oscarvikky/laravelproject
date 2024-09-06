<template>
  <div class="container bg-light">
    <div class="row con m-auto lg:tww-8/12 my-5">
      <div class="col-md-6 my-5">
        <img class="d-none d-md-block" src="/image/signin.png" alt="" />
      </div>

      <div class="col-md-6 my-5">
        <div>
          <h3>Sign up</h3>
          <p class="tag">
            Let’s get you all st up so you can access your personal account.
          </p>
        </div>
        <form action="">
          <div class="d-flex twgap-4">
            <input
              class="form-control my-3"
              type="text"
              placeholder="FirstName"
            />
            <input
              class="form-control my-3"
              type="text"
              placeholder="LastName"
            />
          </div>
          <input class="form-control my-3" type="text" placeholder="" />
          <input class="form-control my-3" type="text" placeholder="" />
          <input class="form-control my-3" type="text" placeholder="" />
          <div class="d-flex align-items-center my-3">
            <input type="checkbox" />
            <p class="checkbox">
              I agree to all the Terms and Privacy Policies
            </p>
          </div>

          <button class="btn tww-full signbtn">Create an Account</button>

          <p class="text-center twfont-bold yu">
            Already have an account? <a href="">Login</a>
          </p>
          <p class="text-center yu">
            ------------ or login with----------------
          </p>
          <div class="d-flex gap-3 social mt-4 mb-4">
            <button>F</button>
            <button>A</button>
            <button>G</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<style>
.con {
  background-color: #e6f5ed;
}
.tag {
  font-size: 10px;
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
  justify-content: space-between;
  gap: 5px;
  width: 80%;
}
img {
  height: 600px;
}
</style>
