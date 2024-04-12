@extends('layouts.user')
 
@section('title', 'contact')
 
@section('contents')
<main class="container mx-auto py-12 px-4 flex flex-col justify-center items-center  "  >
<!--
<div class="card  w-69 h-74 bg-gray-600 transition duration-1000 ease-in-out rounded-tr-3xl rounded-bl-3xl    ">
    <div class="img w-12 h-12 bg-white rounded-full mx-auto"><img src="/admin.png" alt=""></div>
    <span class="font-bold text-white text-center block text-lg pt-2">TBIBZAT CHARAF EDDINE</span>
    <p class="info font-normal text-white text-center block text-sm my-4 mx-2">  En tant que développeur UNI, j'ai des compétences dans les technologies front-end et back-end, me permettant de concevoir,
       construire et déployer des solutions logicielles complètes, du concept au déploiement.  </p>
   </p>
    <div class="share flex justify-center mt-4   items-center gap-8">
        <a href="https://github.com/charafeddine-Web" class="text-grey-700 text-white hover:opacity-10">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M12 3C7.0275 3 3 7.13211 3 12.2284C3 16.3065 5.5785 19.7648 9.15375 20.9841C9.60375 21.0709 9.76875 20.7853 9.76875 20.5403C9.76875 20.3212 9.76125 19.7405 9.7575 18.9712C7.254 19.5277 6.726 17.7332 6.726 17.7332C6.3165 16.6681 5.72475 16.3832 5.72475 16.3832C4.9095 15.8111 5.78775 15.8229 5.78775 15.8229C6.6915 15.887 7.16625 16.7737 7.16625 16.7737C7.96875 18.1847 9.273 17.777 9.7875 17.5414C9.8685 16.9443 10.1003 16.5381 10.3575 16.3073C8.35875 16.0764 6.258 15.2829 6.258 11.7471C6.258 10.7399 6.60675 9.91659 7.18425 9.27095C7.083 9.03774 6.77925 8.0994 7.263 6.82846C7.263 6.82846 8.01675 6.58116 9.738 7.77462C10.458 7.56958 11.223 7.46785 11.988 7.46315C12.753 7.46785 13.518 7.56958 14.238 7.77462C15.948 6.58116 16.7017 6.82846 16.7017 6.82846C17.1855 8.0994 16.8818 9.03774 16.7917 9.27095C17.3655 9.91659 17.7142 10.7399 17.7142 11.7471C17.7142 15.2923 15.6105 16.0725 13.608 16.2995C13.923 16.5765 14.2155 17.1423 14.2155 18.0071C14.2155 19.242 14.2043 20.2344 14.2043 20.5341C14.2043 20.7759 14.3617 21.0647 14.823 20.9723C18.4237 19.7609 21 16.3002 21 12.2284C21 7.13211 16.9703 3 12 3Z" fill="currentColor"/>
              </svg>
            </a>
            <a href="javascript:void(0)" class="text-grey-700 text-blue-700 hover:opacity-10">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M16.2 0H1.8C0.81 0 0 0.81 0 1.8V16.2C0 17.19 0.81 18 1.8 18H16.2C17.19 18 18 17.19 18 16.2V1.8C18 0.81 17.19 0 16.2 0ZM5.4 15.3H2.7V7.2H5.4V15.3ZM4.05 5.67C3.15 5.67 2.43 4.95 2.43 4.05C2.43 3.15 3.15 2.43 4.05 2.43C4.95 2.43 5.67 3.15 5.67 4.05C5.67 4.95 4.95 5.67 4.05 5.67ZM15.3 15.3H12.6V10.53C12.6 9.81004 11.97 9.18 11.25 9.18C10.53 9.18 9.9 9.81004 9.9 10.53V15.3H7.2V7.2H9.9V8.28C10.35 7.56 11.34 7.02 12.15 7.02C13.86 7.02 15.3 8.46 15.3 10.17V15.3Z" fill="currentColor"/>
              </svg>
            </a>
            <a href="javascript:void(0)" class="text-grey-700 text-red-500 hover:opacity-10">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.60063 2.18182H16.3991C19.3873 2.18182 21.8183 4.61281 21.8182 7.60074V16.3993C21.8182 19.3872 19.3873 21.8182 16.3991 21.8182H7.60063C4.6127 21.8182 2.18182 19.3873 2.18182 16.3993V7.60074C2.18182 4.61281 4.6127 2.18182 7.60063 2.18182ZM16.3993 20.0759C18.4266 20.0759 20.0761 18.4266 20.0761 16.3993H20.0759V7.60074C20.0759 5.57348 18.4265 3.92405 16.3991 3.92405H7.60063C5.57336 3.92405 3.92405 5.57348 3.92405 7.60074V16.3993C3.92405 18.4266 5.57336 20.0761 7.60063 20.0759H16.3993ZM6.85714 12.0001C6.85714 9.16424 9.16418 6.85714 12 6.85714C14.8358 6.85714 17.1429 9.16424 17.1429 12.0001C17.1429 14.8359 14.8358 17.1429 12 17.1429C9.16418 17.1429 6.85714 14.8359 6.85714 12.0001ZM8.62798 12C8.62798 13.8593 10.1407 15.3719 12 15.3719C13.8593 15.3719 15.372 13.8593 15.372 12C15.372 10.1406 13.8594 8.6279 12 8.6279C10.1406 8.6279 8.62798 10.1406 8.62798 12Z" fill="currentColor"/>
                <mask id="mask0_3320_6487" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="20">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.60063 2.18182H16.3991C19.3873 2.18182 21.8183 4.61281 21.8182 7.60074V16.3993C21.8182 19.3872 19.3873 21.8182 16.3991 21.8182H7.60063C4.6127 21.8182 2.18182 19.3873 2.18182 16.3993V7.60074C2.18182 4.61281 4.6127 2.18182 7.60063 2.18182ZM16.3993 20.0759C18.4266 20.0759 20.0761 18.4266 20.0761 16.3993H20.0759V7.60074C20.0759 5.57348 18.4265 3.92405 16.3991 3.92405H7.60063C5.57336 3.92405 3.92405 5.57348 3.92405 7.60074V16.3993C3.92405 18.4266 5.57336 20.0761 7.60063 20.0759H16.3993ZM6.85714 12.0001C6.85714 9.16424 9.16418 6.85714 12 6.85714C14.8358 6.85714 17.1429 9.16424 17.1429 12.0001C17.1429 14.8359 14.8358 17.1429 12 17.1429C9.16418 17.1429 6.85714 14.8359 6.85714 12.0001ZM8.62798 12C8.62798 13.8593 10.1407 15.3719 12 15.3719C13.8593 15.3719 15.372 13.8593 15.372 12C15.372 10.1406 13.8594 8.6279 12 8.6279C10.1406 8.6279 8.62798 10.1406 8.62798 12Z" fill="white"/>
                </mask>
                <g mask="url(#mask0_3320_6487)">
                </g>
              </svg>
            </a>
    </div>
    <button class="py-2 px-4 block mx-auto mt-4 rounded-full font-bold bg-white text-black transition duration-400 ease-in-out hover:bg-green-500 hover:text-white">Resume</button>
</div>
-->
<div
  class="profile-card w-500 rounded-md shadow-xl overflow-hidden z-[100] relative cursor-pointer snap-start shrink-0 bg-black  flex flex-col items-center justify-center gap-2 transition-all duration-500 group"
>
  <div
    class="avatar w-full pt-5 flex items-center justify-center flex-col gap-1"
  >
    <div
      class="img_container w-full flex items-center justify-center relative z-40 after:absolute after:h-[6px] after:w-full after:bg-[#000000] after:top-4 after:group-hover:size-[1%] after:delay-300 after:group-hover:delay-0 after:group-hover:transition-all after:group-hover:duration-300 after:transition-all after:duration-300 before:absolute before:h-[6px] before:w-full before:bg-[#000000] before:bottom-4 before:group-hover:size-[1%] before:delay-300 before:group-hover:delay-0 before:group-hover:transition-all before:group-hover:duration-300 before:transition-all before:duration-300"
    >        

      <img src="/charaf1.jpg" alt=""class="size-36 z-40 border-4 border-black rounded-full group-hover:border-8 group-hover:transition-all group-hover:duration-300 transition-all duration-300">
        <g data-name="Layer 2">
          <g data-name="—ÎÓÈ 1">
            <path
              d="M31.129 8.432c21.281 0 12.987 35.266 0 35.266-12.266 0-21.281-35.266 0-35.266z"
              fill-rule="evenodd"
              fill="#ffe8be"
            ></path>
            <circle fill="#58b0e0" r="30.9" cy="30.9" cx="30.9"></circle>
            <path
              d="M45.487 19.987l-29.173.175s1.048 16.148-2.619 21.21h35.701c-.92-1.35-3.353-1.785-3.909-21.385z"
              fill-rule="evenodd"
              fill="#60350a"
            ></path>
            <path
              d="M18.135 45.599l7.206-3.187 11.55-.3 7.42 3.897-5.357 11.215-7.613 4.088-7.875-4.35-5.331-11.363z"
              fill-rule="evenodd"
              fill="#d5e1ed"
            ></path>
            <path
              d="M24.744 38.68l12.931.084v8.949l-12.931-.085V38.68z"
              fill-rule="evenodd"
              fill="#f9dca4"
            ></path>
            <path
              opacity=".11"
              d="M37.677 38.778v3.58a9.168 9.168 0 0 1-.04 1.226 6.898 6.898 0 0 1-.313 1.327c-4.37 4.165-11.379.78-12.49-6.333z"
              fill-rule="evenodd"
            ></path>
            <path
              d="M52.797 52.701a30.896 30.896 0 0 1-44.08-.293l1.221-3.098 9.103-4.122c3.262 5.98 6.81 11.524 12.317 15.455A45.397 45.397 0 0 0 43.2 45.483l8.144 3.853z"
              fill-rule="evenodd"
              fill="#434955"
            ></path>
            <path
              d="M19.11 24.183c-2.958 1.29-.442 7.41 1.42 7.383a30.842 30.842 0 01-1.42-7.383zM43.507 24.182c2.96 1.292.443 7.411-1.419 7.384a30.832 30.832 0 001.419-7.384z"
              fill-rule="evenodd"
              fill="#f9dca4"
            ></path>
            <path
              d="M31.114 8.666c8.722 0 12.377 6.2 12.601 13.367.307 9.81-5.675 21.43-12.6 21.43-6.56 0-12.706-12.018-12.333-21.928.26-6.953 3.814-12.869 12.332-12.869z"
              fill-rule="evenodd"
              fill="#ffe8be"
            ></path>
            <path
              d="M33.399 24.983a7.536 7.536 0 0 1 5.223-.993h.005c5.154.63 5.234 2.232 4.733 2.601a2.885 2.885 0 0 0-.785 1.022 6.566 6.566 0 0 1-1.052 2.922 5.175 5.175 0 0 1-3.464 2.312c-.168.027-.34.048-.516.058a4.345 4.345 0 0 1-3.65-1.554 8.33 8.33 0 0 1-1.478-2.53v.003s-.797-1.636-2.072-.114a8.446 8.446 0 0 1-1.52 2.64 4.347 4.347 0 0 1-3.651 1.555 5.242 5.242 0 0 1-.516-.058 5.176 5.176 0 0 1-3.464-2.312 6.568 6.568 0 0 1-1.052-2.921 2.75 2.75 0 0 0-.77-1.023c-.5-.37-.425-1.973 4.729-2.603h.002a7.545 7.545 0 0 1 5.24 1.01l-.001-.001.003.002.215.131a3.93 3.93 0 0 0 3.842-.148l-.001.001zm-4.672.638a6.638 6.638 0 0 0-6.157-.253c-1.511.686-1.972 1.17-1.386 3.163a5.617 5.617 0 0 0 .712 1.532 4.204 4.204 0 0 0 3.326 1.995 3.536 3.536 0 0 0 2.966-1.272 7.597 7.597 0 0 0 1.36-2.37c.679-1.78.862-1.863-.82-2.795zm10.947-.45a6.727 6.727 0 0 0-5.886.565c-1.538.911-1.258 1.063-.578 2.79a7.476 7.476 0 0 0 1.316 2.26 3.536 3.536 0 0 0 2.967 1.272 4.228 4.228 0 0 0 .43-.048 4.34 4.34 0 0 0 2.896-1.947 5.593 5.593 0 0 0 .684-1.44c.702-2.25.076-2.751-1.828-3.451z"
              fill-rule="evenodd"
              fill="#464449"
            ></path>
            <path
              d="M17.89 25.608c0-.638.984-.886 1.598 2.943a22.164 22.164 0 0 0 .956-4.813c1.162.225 2.278 2.848 1.927 5.148 3.166-.777 11.303-5.687 13.949-12.324 6.772 3.901 6.735 12.094 6.735 12.094s.358-1.9.558-3.516c.066-.538.293-.733.798-.213C48.073 17.343 42.3 5.75 31.297 5.57c-15.108-.246-17.03 16.114-13.406 20.039z"
              fill-rule="evenodd"
              fill="#8a5c42"
            ></path>
            <path
              d="M24.765 42.431a14.125 14.125 0 0 0 6.463 5.236l-4.208 6.144-5.917-9.78z"
              fill-rule="evenodd"
              fill="#fff"
            ></path>
            <path
              d="M37.682 42.431a14.126 14.126 0 0 1-6.463 5.236l4.209 6.144 5.953-9.668z"
              fill-rule="evenodd"
              fill="#fff"
            ></path>
            <circle fill="#434955" r=".839" cy="52.562" cx="31.223"></circle>
            <circle fill="#434955" r=".839" cy="56.291" cx="31.223"></circle>
            <path
              d="M41.997 24.737c1.784.712 1.719 1.581 1.367 1.841a2.886 2.886 0 0 0-.785 1.022 6.618 6.618 0 0 1-.582 2.086v-4.949zm-21.469 4.479a6.619 6.619 0 0 1-.384-1.615 2.748 2.748 0 0 0-.77-1.023c-.337-.249-.413-1.06 1.154-1.754z"
              fill-rule="evenodd"
              fill="#464449"
            ></path>
          </g>
        </g>
      </svg>
      <div
        class="absolute bg-[#3ab727] z-10 size-[60%] w-full group-hover:size-[1%] group-hover:transition-all group-hover:duration-300 transition-all duration-300 delay-700 group-hover:delay-0"
      ></div>
    </div>
  </div>
  <div class="headings *:text-center *:leading-4">
    <p class="text-xl font-serif font-semibold text-[#434955]">TBIBZAT CHARAF EDDINE</p>
    <p class="text-sm font-semibold text-[#434955] pt-3">DEVELOPER</p>
  </div>
  <div class="w-full items-center justify-center flex">
    <ul
      class="flex flex-col items-start gap-2 has-[:last]:border-b-0 *:inline-flex *:gap-2 *:items-center *:justify-center *:border-b-[1.5px] *:border-b-stone-700 *:border-dotted *:text-xs *:font-semibold *:text-[#434955] pb-3"
    >
      <li>
        <svg
          id="phone"
          viewBox="0 0 24 24"
          class="fill-stone-700 group-hover:fill-[#293ad1]"
          height="15"
          width="15"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path d="M0 0h24v24H0V0z" fill="none"></path>
          <path
            d="M19.23 15.26l-2.54-.29c-.61-.07-1.21.14-1.64.57l-1.84 1.84c-2.83-1.44-5.15-3.75-6.59-6.59l1.85-1.85c.43-.43.64-1.03.57-1.64l-.29-2.52c-.12-1.01-.97-1.77-1.99-1.77H5.03c-1.13 0-2.07.94-2 2.07.53 8.54 7.36 15.36 15.89 15.89 1.13.07 2.07-.87 2.07-2v-1.73c.01-1.01-.75-1.86-1.76-1.98z"
          ></path>
        </svg>
        <p>+212 651928482</p>
      </li>
      <li>
        <svg
          class="fill-stone-700 group-hover:fill-[#2d3bd2]"
          height="15"
          width="15"
          id="mail"
          viewBox="0 0 32 32"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M16,14.81,28.78,6.6A3,3,0,0,0,27,6H5a3,3,0,0,0-1.78.6Z"
            fill="#231f20"
          ></path>
          <path
            d="M16.54,16.84h0l-.17.08-.08,0A1,1,0,0,1,16,17h0a1,1,0,0,1-.25,0l-.08,0-.17-.08h0L2.1,8.26A3,3,0,0,0,2,9V23a3,3,0,0,0,3,3H27a3,3,0,0,0,3-3V9a3,3,0,0,0-.1-.74Z"
            fill="#231f20"
          ></path>
        </svg>
        <p>charafeddinetbibzat@gmail.com</p>
      </li>
      <li>
        <svg
          class="fill-stone-700 group-hover:fill-[#215fd2]"
          height="15"
          width="15"
          id="globe"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <g data-name="Layer 2">
            <path
              data-name="globe"
              d="M22 12A10 10 0 0 0 12 2a10 10 0 0 0 0 20 10 10 0 0 0 10-10zm-2.07-1H17a12.91 12.91 0 0 0-2.33-6.54A8 8 0 0 1 19.93 11zM9.08 13H15a11.44 11.44 0 0 1-3 6.61A11 11 0 0 1 9.08 13zm0-2A11.4 11.4 0 0 1 12 4.4a11.19 11.19 0 0 1 3 6.6zm.36-6.57A13.18 13.18 0 0 0 7.07 11h-3a8 8 0 0 1 5.37-6.57zM4.07 13h3a12.86 12.86 0 0 0 2.35 6.56A8 8 0 0 1 4.07 13zm10.55 6.55A13.14 13.14 0 0 0 17 13h2.95a8 8 0 0 1-5.33 6.55z"
            ></path>
          </g>
        </svg>
        <p>charafdevelopr.com</p>
      </li>
      <li>
        <svg
          id="map"
          viewBox="0 0 16 16"
          class="fill-stone-700 group-hover:fill-[#1f59c4]"
          height="15"
          width="15"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M8 0C5.2 0 3 2.2 3 5s4 11 5 11 5-8.2 5-11-2.2-5-5-5zm0 8C6.3 8 5 6.7 5 5s1.3-3 3-3 3 1.3 3 3-1.3 3-3 3z"
            fill="#444"
          ></path>
        </svg>
        <p>456 Anytown, Near Anywhere, ST 47523</p>
      </li>
    </ul>
  </div>
  <button class="py-2 px-4 block mx-auto mt-4 rounded-full font-bold bg-white text-black transition duration-400 ease-in-out hover:bg-green-500 hover:text-white">Resume</button>

  <hr
    class="w-full group-hover:h-5 h-3 bg-[#3852b9] group-hover:transition-all group-hover:duration-300 transition-all duration-300"
  />
</div>

</main>
@endsection





<!--<div class="flex flex-col items-center justify-center ">
      <div class="w-50% max-w-md text-center">
        <h1 class="text-white text-4xl font-bold mb-6">Contact  Us</h1>
      </div>
  <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
    <div>
    <span class="">
      <img src="" alt="">
      <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight  ">TBIBZAT CHARAF EDDINE</h3>
    </span>  
    <div class="flex items-center gap-8">
            <a href="https://github.com/charafeddine-Web" class="text-grey-700 text-white hover:opacity-10">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M12 3C7.0275 3 3 7.13211 3 12.2284C3 16.3065 5.5785 19.7648 9.15375 20.9841C9.60375 21.0709 9.76875 20.7853 9.76875 20.5403C9.76875 20.3212 9.76125 19.7405 9.7575 18.9712C7.254 19.5277 6.726 17.7332 6.726 17.7332C6.3165 16.6681 5.72475 16.3832 5.72475 16.3832C4.9095 15.8111 5.78775 15.8229 5.78775 15.8229C6.6915 15.887 7.16625 16.7737 7.16625 16.7737C7.96875 18.1847 9.273 17.777 9.7875 17.5414C9.8685 16.9443 10.1003 16.5381 10.3575 16.3073C8.35875 16.0764 6.258 15.2829 6.258 11.7471C6.258 10.7399 6.60675 9.91659 7.18425 9.27095C7.083 9.03774 6.77925 8.0994 7.263 6.82846C7.263 6.82846 8.01675 6.58116 9.738 7.77462C10.458 7.56958 11.223 7.46785 11.988 7.46315C12.753 7.46785 13.518 7.56958 14.238 7.77462C15.948 6.58116 16.7017 6.82846 16.7017 6.82846C17.1855 8.0994 16.8818 9.03774 16.7917 9.27095C17.3655 9.91659 17.7142 10.7399 17.7142 11.7471C17.7142 15.2923 15.6105 16.0725 13.608 16.2995C13.923 16.5765 14.2155 17.1423 14.2155 18.0071C14.2155 19.242 14.2043 20.2344 14.2043 20.5341C14.2043 20.7759 14.3617 21.0647 14.823 20.9723C18.4237 19.7609 21 16.3002 21 12.2284C21 7.13211 16.9703 3 12 3Z" fill="currentColor"/>
              </svg>
            </a>
            <a href="javascript:void(0)" class="text-grey-700 text-blue-600 hover:opacity-10">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M16.2 0H1.8C0.81 0 0 0.81 0 1.8V16.2C0 17.19 0.81 18 1.8 18H16.2C17.19 18 18 17.19 18 16.2V1.8C18 0.81 17.19 0 16.2 0ZM5.4 15.3H2.7V7.2H5.4V15.3ZM4.05 5.67C3.15 5.67 2.43 4.95 2.43 4.05C2.43 3.15 3.15 2.43 4.05 2.43C4.95 2.43 5.67 3.15 5.67 4.05C5.67 4.95 4.95 5.67 4.05 5.67ZM15.3 15.3H12.6V10.53C12.6 9.81004 11.97 9.18 11.25 9.18C10.53 9.18 9.9 9.81004 9.9 10.53V15.3H7.2V7.2H9.9V8.28C10.35 7.56 11.34 7.02 12.15 7.02C13.86 7.02 15.3 8.46 15.3 10.17V15.3Z" fill="currentColor"/>
              </svg>
            </a>
            <a href="javascript:void(0)" class="text-grey-700 text-red-500 hover:opacity-10">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.60063 2.18182H16.3991C19.3873 2.18182 21.8183 4.61281 21.8182 7.60074V16.3993C21.8182 19.3872 19.3873 21.8182 16.3991 21.8182H7.60063C4.6127 21.8182 2.18182 19.3873 2.18182 16.3993V7.60074C2.18182 4.61281 4.6127 2.18182 7.60063 2.18182ZM16.3993 20.0759C18.4266 20.0759 20.0761 18.4266 20.0761 16.3993H20.0759V7.60074C20.0759 5.57348 18.4265 3.92405 16.3991 3.92405H7.60063C5.57336 3.92405 3.92405 5.57348 3.92405 7.60074V16.3993C3.92405 18.4266 5.57336 20.0761 7.60063 20.0759H16.3993ZM6.85714 12.0001C6.85714 9.16424 9.16418 6.85714 12 6.85714C14.8358 6.85714 17.1429 9.16424 17.1429 12.0001C17.1429 14.8359 14.8358 17.1429 12 17.1429C9.16418 17.1429 6.85714 14.8359 6.85714 12.0001ZM8.62798 12C8.62798 13.8593 10.1407 15.3719 12 15.3719C13.8593 15.3719 15.372 13.8593 15.372 12C15.372 10.1406 13.8594 8.6279 12 8.6279C10.1406 8.6279 8.62798 10.1406 8.62798 12Z" fill="currentColor"/>
                <mask id="mask0_3320_6487" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="20">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.60063 2.18182H16.3991C19.3873 2.18182 21.8183 4.61281 21.8182 7.60074V16.3993C21.8182 19.3872 19.3873 21.8182 16.3991 21.8182H7.60063C4.6127 21.8182 2.18182 19.3873 2.18182 16.3993V7.60074C2.18182 4.61281 4.6127 2.18182 7.60063 2.18182ZM16.3993 20.0759C18.4266 20.0759 20.0761 18.4266 20.0761 16.3993H20.0759V7.60074C20.0759 5.57348 18.4265 3.92405 16.3991 3.92405H7.60063C5.57336 3.92405 3.92405 5.57348 3.92405 7.60074V16.3993C3.92405 18.4266 5.57336 20.0761 7.60063 20.0759H16.3993ZM6.85714 12.0001C6.85714 9.16424 9.16418 6.85714 12 6.85714C14.8358 6.85714 17.1429 9.16424 17.1429 12.0001C17.1429 14.8359 14.8358 17.1429 12 17.1429C9.16418 17.1429 6.85714 14.8359 6.85714 12.0001ZM8.62798 12C8.62798 13.8593 10.1407 15.3719 12 15.3719C13.8593 15.3719 15.372 13.8593 15.372 12C15.372 10.1406 13.8594 8.6279 12 8.6279C10.1406 8.6279 8.62798 10.1406 8.62798 12Z" fill="white"/>
                </mask>
                <g mask="url(#mask0_3320_6487)">
                </g>
              </svg>
            </a>
          </div><br>
    </div>
  <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
  En tant que développeur Uni, j'ai des compétences dans les technologies front-end et back-end, me permettant de concevoir, construire et déployer des solutions logicielles complètes, du concept au déploiement.  </p>
  </div><br><br>
</div>-->

