<template>
    <div>
      <div role="alert" class="Vue-Toastification__toast-body d-flex align-items-center">
          <div class="Vue-Toastification__image mr-3">
            <div class="d-flex align-items-start">
                <span class="b-avatar mr-3 flex-shrink-0 badge-success rounded-circle" style="width: 3rem; height: 3rem;">
                    <span class="b-avatar-custom d-flex justify-content-center align-items-center h-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee">
                            <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line>
                            <line x1="14" y1="1" x2="14" y2="4"></line>
                        </svg>
                    </span><!---->
                </span>
                <div class="d-flex flex-grow-1">
                    <div>
                        <h5 class="mb-0 font-weight-bolder toastification-title text-success">Welcome John Doe</h5>
                        <small class="d-inline-block text-body fontsize-16">You have successfully logged in as admin. Now you can start to explore!</small>
                    </div>
                    <span class="cursor-pointer toastification-close-icon ml-auto ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-body feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </span>
                </div>
            </div>
            <!-- <svg  v-if="type == 'success'" xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path  d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                <path  d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line  x1="6" y1="1" x2="6" y2="4"></line><line  x1="10" y1="1" x2="10" y2="4"></line><line  x1="14" y1="1" x2="14" y2="4"></line>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none" v-else>
                <path d="M44 29C44 37.2843 37.2843 44 29 44L15 44C6.71573 44 3.22759e-06 37.2843 2.50336e-06 29L1.27944e-06 15C5.55202e-07 6.71573 6.71573 -5.55203e-07 15 -1.27944e-06L29 -2.50336e-06C37.2843 -3.22759e-06 44 6.71572 44 15L44 29Z" fill="white" fill-opacity="0.62"/>
                <path d="M26.893 14.3067L14.3072 26.8925C13.9167 27.283 13.9167 27.9162 14.3072 28.3067L15.693 29.6925C16.0835 30.083 16.7167 30.083 17.1072 29.6925L29.693 17.1067C30.0835 16.7162 30.0835 16.083 29.693 15.6925L28.3072 14.3067C27.9167 13.9162 27.2835 13.9162 26.893 14.3067Z" fill="#D34E4E"/>
                <path d="M29.6928 26.8925L17.107 14.3067C16.7165 13.9162 16.0833 13.9162 15.6928 14.3067L14.307 15.6925C13.9165 16.083 13.9165 16.7162 14.307 17.1067L26.8928 29.6925C27.2833 30.083 27.9165 30.083 28.307 29.6925L29.6928 28.3067C30.0833 27.9162 30.0833 27.283 29.6928 26.8925Z" fill="#D34E4E"/>
            </svg> -->
          </div>
          <!-- <div class="Vue-Toastification__message me-2">
              <p class="mb-0 text-capitalize">{{ type }}</p>
              <p class="mb-0">{{message}}</p>
          </div> -->
      </div>
    </div>
  </template>
  <script>
  export default {
      name: 'Notification',
      props: ["message","type"],
  };
  </script>
  <style>
  .Vue-Toastification__close-button{
    display: none;
  }
  .Vue-Toastification__progress-bar{
    display: none;
  }
  .Vue-Toastification__toast-body{
    font-family: 'Montserrat', sans-serif !important;
  }
  .Vue-Toastification__icon{
      display:none;
  }
  .Vue-Toastification__progress-bar{
      height:0px !important;
      animation-play-state: paused !important;
  }
  .Vue-Toastification__container{
      z-index: 11112;
  }
  .Vue-Toastification__toast{
      padding:24px !important;
  }
  .Vue-Toastification__toast--default{
    background-color: #fff;
    color: #fff;
    box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%);
  }
  .toastification-title{
    font-size: 20px;
  }
  /*.Vue-Toastification__toast--success{
      background: linear-gradient(89.83deg, #ADF3E9 1.03%, #D5FCF9 99.85%);
      color:#0AB39C !important;
      border-right: 3px solid #0ab39c;
  }
  .Vue-Toastification__toast--success .Vue-Toastification__close-button{
      color:#0AB39C !important;
  }*/
  .Vue-Toastification__toast--error{
      background: linear-gradient(92.22deg, #FFBCBC -0.91%, #FFEDED 97.41%);
      color:#D34E4E !important;
      border-right: 3px solid #D34E4E;
  }
  .Vue-Toastification__toast--error .Vue-Toastification__close-button{
      color:#D34E4E !important;
  }
  </style>
  