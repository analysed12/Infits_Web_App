<?php
include('navbar.php');
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Infits</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
  </head>
  <!-- <link rel="stylesheet" href="style3.css" /> -->
  <style>
    body{
        font-family: 'NATS', sans-serif !important;
    }

    .right__side {
      flex: 4;
      height: 100%;
      position: relative;
      overflow-y: scroll;
    }
    .faqs {
     
      font-style: normal;
      font-weight: 600;
      font-size: 32px;
      letter-spacing: -0.114286px;
      color: #202224;
      padding-left: 35px;
      margin-top: 25px;
    }

    .input__div {
      padding-left: 15px;
      width: 95%;
      padding: 5px;
      margin: 10px auto;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
      border-radius: 15px;
    }
    .input {
      flex: 1;
      
      font-style: normal;
      font-weight: 500;
      font-size: 25px;
      color: #b8d3f2;
      border: none;
      outline: none;
      padding-left: 5px;
      text-transform: capitalize;
    }

    .main__Div {
      display: flex;
      justify-content: space-evenly;
      flex-direction: row;
      padding: 20px 40px;
    }
    .small__faq {
      
      font-style: normal;
      font-weight: 700;
      font-size: 22px;
      color: #0177fd;
    }

    .main__title {
      
      font-style: normal;
      font-weight: 700;
      font-size: 40px;
      line-height: 60px;
      color: #0e0e2c;
      width: 78%;
    }
    .main__p {
      
      font-style: normal;
      font-weight: 400;
      font-size: 22px;
      line-height: 171.5%;
      color: rgba(14, 14, 44, 0.6);
      width: 80%;
      margin-top: 25px;
    }
    .main__right {
      display: flex;
      flex-direction: column;
    }

    .main__right__wrapper {
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
      border-radius: 15px;
      width: 80%;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      margin-bottom: 20px;
      justify-content: center;
      align-items: center;
      padding: 10px 5px;
      position: relative;
    }
    .main__right__plus {
      position: absolute;
      right: 25px;
      top: 8px;
    }
    .main__right__h1 {
     
      font-style: normal;
      font-weight: 500;
      font-size: 18px;
      color: #0e0e2c;
    }
    .main__right__p {
      
      font-style: normal;
      font-weight: 400;
      font-size: 16px;
      line-height: 171.5%;
      width: 70%;
      margin: 10px auto;
      color: rgba(14, 14, 44, 0.6);
    }

    @media only screen and (max-width: 600px) {

  .input__div {
    width: 90%;
  }
  .main__Div {
    flex-direction: column;
  }
  .main__title {
    width: 98%;
  }
  .main__p {
    width: 98%;
  }
  .main__right {
    margin-top: 17px;
    width: 95%;
  }
  .main__right__wrapper {
    width: 100%;
    padding: 10px 7px;
  }
  .main__right__p {
    width: 90%;
  }
  .main__right__plus {
    right: 6px;
  }
}
/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {


}
/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {


}
/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {

}
/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
}
  </style>
  <body>
    <div class="right__side">
      <h1 class="faqs">FAQs</h1>

          <div class="input__div">
            <span class="search__icon">
              <svg
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="#B8D3F2"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.308 0.231445C10.722 0.231284 9.15153 0.543527 7.68623 1.15035C6.22092 1.75717 4.88949 2.64667 3.76797 3.76808C2.64645 4.88948 1.75681 6.22082 1.14984 7.68607C0.542872 9.15131 0.230469 10.7218 0.230469 12.3078C0.230307 13.8938 0.542592 15.4644 1.14949 16.9298C1.75638 18.3952 2.646 19.7267 3.76754 20.8482C4.88907 21.9698 6.22055 22.8594 7.68594 23.4663C9.15133 24.0732 10.7219 24.3855 12.308 24.3853C15.1265 24.3853 17.7148 23.3871 19.7702 21.7699L20.8471 22.8468C20.6259 23.2765 20.5476 23.7655 20.6236 24.2427C20.6995 24.72 20.9257 25.1605 21.2692 25.5004L26.9234 31.1927C27.8009 32.0714 29.2372 32.0714 30.116 31.1927L31.1929 30.1158C31.6146 29.6915 31.8512 29.1176 31.8512 28.5194C31.8512 27.9213 31.6146 27.3474 31.1929 26.9231L25.5006 21.269C25.1584 20.9278 24.7152 20.7061 24.2369 20.6369C23.7586 20.5677 23.2707 20.6547 22.8459 20.885L21.7689 19.8081C23.1786 18.0292 24.0584 15.8891 24.3075 13.6331C24.5566 11.3771 24.1649 9.09658 23.1773 7.05302C22.1896 5.00946 20.6461 3.28558 18.7237 2.07905C16.8012 0.872518 14.5777 0.232175 12.308 0.231445ZM12.308 2.4616C14.9194 2.4616 17.4238 3.49896 19.2703 5.34547C21.1168 7.19198 22.1542 9.69639 22.1542 12.3078C22.1542 14.9191 21.1168 17.4235 19.2703 19.27C17.4238 21.1165 14.9194 22.1539 12.308 22.1539C9.69664 22.1539 7.19224 21.1165 5.34573 19.27C3.49921 17.4235 2.46185 14.9191 2.46185 12.3078C2.46185 9.69639 3.49921 7.19198 5.34573 5.34547C7.19224 3.49896 9.69664 2.4616 12.308 2.4616ZM6.07662 9.19268C5.42017 10.2559 5.07402 11.4816 5.07724 12.7311C5.07578 13.6155 5.24889 14.4914 5.58664 15.3087C5.92439 16.126 6.42014 16.8687 7.04547 17.494C7.6708 18.1193 8.41341 18.6151 9.23072 18.9528C10.048 19.2906 10.924 19.4637 11.8083 19.4622C13.1986 19.4594 14.5544 19.0297 15.6926 18.2314C15.3858 18.2599 15.0777 18.2722 14.7695 18.2684C13.6273 18.2713 12.4957 18.0485 11.4397 17.6127C10.3838 17.177 9.42442 16.5369 8.61664 15.7292C7.80886 14.9216 7.16863 13.9622 6.73273 12.9064C6.29684 11.8505 6.07386 10.719 6.07662 9.57668C6.07662 9.44868 6.07047 9.32068 6.07662 9.19268Z"
                  fill="#B8D3F2"
                />
              </svg>
            </span>
            <input type="text" placeholder="search" class="input" />
          </div>

          <div class="main__Div">
            <div class="main__left">
              <h3 class="small__faq">FAQ</h3>
              <h1 class="main__title">
                Here are Some Answer For Frequntly asked Questions.
              </h1>
              <p class="main__p">
                We got alot of Message With the same Questions so here are some
                fast answer for populare Question.
              </p>
            </div>
            <div class="main__right">
              <div class="main__right__wrapper rows">
                <h1 class="main__right__h1">
                  Lorem ipsum dolor sit amet, adipiscing elit.
                </h1>
                <span class="main__right__plus">
                  <svg
                    width="16"
                    height="16"
                    viewBox="0 0 16 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M1 8H15M8 1V15V1Z"
                      stroke="#0177FD"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </span>
              </div>
              <div class="main__right__wrapper">
                <h1 class="main__right__h1">
                  Lorem ipsum dolor sit amet, adipiscing elit.
                </h1>

                <p class="main__right__p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. At ut
                  adipiscing sit pretium amet nam volutpat adipiscing lacus. Id
                  nibh ut augue feugiat in.
                </p>
              </div>
              <div class="main__right__wrapper">
                <h1 class="main__right__h1">
                  Lorem ipsum dolor sit amet, adipiscing elit.
                </h1>
              </div>
              <div class="main__right__wrapper">
                <h1 class="main__right__h1">
                  Lorem ipsum dolor sit amet, adipiscing elit.
                </h1>
              </div>
            </div>
          </div>
    </div>
    <!-- <h1>hello</h1> -->
  </body>
</html>