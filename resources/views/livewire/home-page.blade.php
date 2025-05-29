<div>
{{-- Hero Section Start --}}
<div class="w-full min-h-screen bg-gradient-to-r from-blue-200 to-cyan-200 py-10 px-4 sm:px-6 lg:px-8 mx-auto flex items-center">
  <div class="max-w-[85rem] mx-auto w-full">
    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
      <div>
        <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight">
          Start your journey with <span class="text-blue-600">ADISHOP</span>
        </h1>
        <p class="mt-3 text-lg text-gray-800">
          Purchase wide varities of electronics products like Smartphones, Laptops, Smartwatches, Television and many more.
        </p>
        <!-- Buttons -->
        <div class="mt-7 flex flex-col sm:flex-row gap-3 w-full">
          <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="/register">
            Get started
            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m9 18 6-6-6-6" />
            </svg>
          </a>
          <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/contact">
            Contact sales team
          </a>
        </div>
        <!-- End Buttons -->

        <!-- Review -->
        <div class="mt-6 lg:mt-10 grid grid-cols-1 sm:grid-cols-2 gap-x-5">
          <!-- Review -->
          <div class="py-5">
            <div class="flex space-x-1">
              @for ($i = 0; $i < 5; $i++)
                <svg class="h-4 w-4 text-gray-800" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                </svg>
              @endfor
            </div>
            <p class="mt-3 text-sm text-gray-800">
              <span class="font-bold">4.6</span> /5 - from 12k reviews
            </p>
            <div class="mt-5">
              <!-- Star -->
              <svg class="h-auto w-16 text-gray-800" width="80" height="27" viewBox="0 0 80 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.558 9.74046H11.576V12.3752H17.9632C17.6438 16.0878 14.5301 17.7245 11.6159 17.7245C7.86341 17.7245 4.58995 14.7704 4.58995 10.6586C4.58995 6.62669 7.70373 3.51291 11.6159 3.51291C14.6498 3.51291 16.4063 5.42908 16.4063 5.42908L18.2426 3.51291C18.2426 3.51291 15.8474 0.878184 11.4961 0.878184C5.94724 0.838264 1.67578 5.50892 1.67578 10.5788C1.67578 15.5289 5.70772 20.3592 11.6558 20.3592C16.8854 20.3592 20.7177 16.8063 20.7177 11.4969C20.7177 10.3792 20.558 9.74046 20.558 9.74046Z" fill="currentColor" />
                <path d="M27.8621 7.78442C24.1894 7.78442 21.5547 10.6587 21.5547 14.012C21.5547 17.4451 24.1096 20.3593 27.9419 20.3593C31.415 20.3593 34.2094 17.7645 34.2094 14.0918C34.1695 9.94011 30.896 7.78442 27.8621 7.78442ZM27.902 10.2994C29.6984 10.2994 31.415 11.7764 31.415 14.0918C31.415 16.4072 29.7383 17.8842 27.902 17.8842C25.906 17.8842 24.3491 16.2874 24.3491 14.0519C24.3092 11.8962 25.8661 10.2994 27.902 10.2994Z" fill="currentColor" />
                <path d="M41.5964 7.78442C37.9238 7.78442 35.2891 10.6587 35.2891 14.012C35.2891 17.4451 37.844 20.3593 41.6763 20.3593C45.1493 20.3593 47.9438 17.7645 47.9438 14.0918C47.9038 9.94011 44.6304 7.78442 41.5964 7.78442ZM41.6364 10.2994C43.4328 10.2994 45.1493 11.7764 45.1493 14.0918C45.1493 16.4072 43.4727 17.8842 41.6364 17.8842C39.6404 17.8842 38.0835 16.2874 38.0835 14.0519C38.0436 11.8962 39.6004 10.2994 41.6364 10.2994Z" fill="currentColor" />
                <path d="M55.0475 7.82434C51.6543 7.82434 49.0195 10.7784 49.0195 14.0918C49.0195 17.8443 52.0934 20.3992 54.9676 20.3992C56.764 20.3992 57.6822 19.7205 58.4407 18.8822V20.1198C58.4407 22.2754 57.1233 23.5928 55.1273 23.5928C53.2111 23.5928 52.2531 22.1557 51.8938 21.3573L49.4587 22.3553C50.297 24.1517 52.0135 26.0279 55.0874 26.0279C58.4407 26.0279 60.9956 23.9122 60.9956 19.481V8.18362H58.3608V9.26147C57.6423 8.38322 56.5245 7.82434 55.0475 7.82434ZM55.287 10.2994C56.9237 10.2994 58.6403 11.7365 58.6403 14.1317C58.6403 16.6068 56.9636 17.9241 55.2471 17.9241C53.4507 17.9241 51.774 16.4471 51.774 14.1716C51.8139 11.6966 53.5305 10.2994 55.287 10.2994Z" fill="currentColor" />
                <path d="M72.8136 7.78442C69.62 7.78442 66.9453 10.2994 66.9453 14.0519C66.9453 18.004 69.9393 20.3593 73.093 20.3593C75.7278 20.3593 77.4044 18.8822 78.3625 17.6048L76.1669 16.1277C75.608 17.006 74.6499 17.8443 73.093 17.8443C71.3365 17.8443 70.5381 16.8862 70.0192 15.9281L78.4423 12.4152L78.0032 11.3772C77.1649 9.46107 75.2886 7.78442 72.8136 7.78442ZM72.8934 10.2196C74.0511 10.2196 74.8495 10.8184 75.2487 11.5768L69.6599 13.9321C69.3405 12.0958 71.097 10.2196 72.8934 10.2196Z" fill="currentColor" />
                <path d="M62.9531 19.9999H65.7076V1.47693H62.9531V19.9999Z" fill="currentColor" />
              </svg>
              <!-- End Star -->
            </div>
          </div>
          <!-- End Review -->

          <!-- Review -->
          <div class="py-5">
            <div class="flex space-x-1">
              @for ($i = 0; $i < 4; $i++)
                <svg class="h-4 w-4 text-gray-800" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                </svg>
              @endfor
            </div>
            <p class="mt-3 text-sm text-gray-800">
              <span class="font-bold">4.6</span> /5 - from 12k reviews
            </p>
            <div class="mt-5">
              <!-- Star -->
              <svg class="h-auto w-16 text-gray-800" width="80" height="27" viewBox="0 0 80 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.558 9.74046H11.576V12.3752H17.9632C17.6438 16.0878 14.5301 17.7245 11.6159 17.7245C7.86341 17.7245 4.58995 14.7704 4.58995 10.6586C4.58995 6.62669 7.70373 3.51291 11.6159 3.51291C14.6498 3.51291 16.4063 5.42908 16.4063 5.42908L18.2426 3.51291C18.2426 3.51291 15.8474 0.878184 11.4961 0.878184C5.94724 0.838264 1.67578 5.50892 1.67578 10.5788C1.67578 15.5289 5.70772 20.3592 11.6558 20.3592C16.8854 20.3592 20.7177 16.8063 20.7177 11.4969C20.7177 10.3792 20.558 9.74046 20.558 9.74046Z" fill="currentColor" />
                <path d="M27.8621 7.78442C24.1894 7.78442 21.5547 10.6587 21.5547 14.012C21.5547 17.4451 24.1096 20.3593 27.9419 20.3593C31.415 20.3593 34.2094 17.7645 34.2094 14.0918C34.1695 9.94011 30.896 7.78442 27.8621 7.78442ZM27.902 10.2994C29.6984 10.2994 31.415 11.7764 31.415 14.0918C31.415 16.4072 29.7383 17.8842 27.902 17.8842C25.906 17.8842 24.3491 16.2874 24.3491 14.0519C24.3092 11.8962 25.8661 10.2994 27.902 10.2994Z" fill="currentColor" />
                <path d="M41.5964 7.78442C37.9238 7.78442 35.2891 10.6587 35.2891 14.012C35.2891 17.4451 37.844 20.3593 41.6763 20.3593C45.1493 20.3593 47.9438 17.7645 47.9438 14.0918C47.9038 9.94011 44.6304 7.78442 41.5964 7.78442ZM41.6364 10.2994C43.4328 10.2994 45.1493 11.7764 45.1493 14.0918C45.1493 16.4072 43.4727 17.8842 41.6364 17.8842C39.6404 17.8842 38.0835 16.2874 38.0835 14.0519C38.0436 11.8962 39.6004 10.2994 41.6364 10.2994Z" fill="currentColor" />
                <path d="M55.0475 7.82434C51.6543 7.82434 49.0195 10.7784 49.0195 14.0918C49.0195 17.8443 52.0934 20.3992 54.9676 20.3992C56.764 20.3992 57.6822 19.7205 58.4407 18.8822V20.1198C58.4407 22.2754 57.1233 23.5928 55.1273 23.5928C53.2111 23.5928 52.2531 22.1557 51.8938 21.3573L49.4587 22.3553C50.297 24.1517 52.0135 26.0279 55.0874 26.0279C58.4407 26.0279 60.9956 23.9122 60.9956 19.481V8.18362H58.3608V9.26147C57.6423 8.38322 56.5245 7.82434 55.0475 7.82434ZM55.287 10.2994C56.9237 10.2994 58.6403 11.7365 58.6403 14.1317C58.6403 16.6068 56.9636 17.9241 55.2471 17.9241C53.4507 17.9241 51.774 16.4471 51.774 14.1716C51.8139 11.6966 53.5305 10.2994 55.287 10.2994Z" fill="currentColor" />
                <path d="M72.8136 7.78442C69.62 7.78442 66.9453 10.2994 66.9453 14.0519C66.9453 18.004 69.9393 20.3593 73.093 20.3593C75.7278 20.3593 77.4044 18.8822 78.3625 17.6048L76.1669 16.1277C75.608 17.006 74.6499 17.8443 73.093 17.8443C71.3365 17.8443 70.5381 16.8862 70.0192 15.9281L78.4423 12.4152L78.0032 11.3772C77.1649 9.46107 75.2886 7.78442 72.8136 7.78442ZM72.8934 10.2196C74.0511 10.2196 74.8495 10.8184 75.2487 11.5768L69.6599 13.9321C69.3405 12.0958 71.097 10.2196 72.8934 10.2196Z" fill="currentColor" />
                <path d="M62.9531 19.9999H65.7076V1.47693H62.9531V19.9999Z" fill="currentColor" />
              </svg>
              <!-- End Star -->
            </div>
          </div>
          <!-- End Review -->
        </div>
        <!-- End Review -->
      </div>
      <!-- End Col -->

      <div class="relative w-full max-w-md mx-auto md:mx-0 flex items-center justify-center overflow-hidden mt-10 md:mt-0">
        <img 
          class="w-full rounded-md object-cover max-h-80 sm:max-h-60 md:max-h-80 lg:max-h-[28rem] xl:max-h-[32rem]"
          src="https://static.vecteezy.com/system/resources/previews/011/993/278/non_2x/3d-render-online-shopping-bag-using-credit-card-or-cash-for-future-use-credit-card-money-financial-security-on-mobile-3d-application-3d-shop-purchase-basket-retail-store-on-e-commerce-free-png.png" 
          alt="Image Description">
        <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 w-full h-full rounded-md"></div>
        <!-- SVG-->
        <div class="absolute bottom-0 start-0 w-full">
          <svg class="w-2/3 ms-auto h-auto text-white" width="630" height="451" viewBox="0 0 630 451" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="531" y="352" width="99" height="99" fill="currentColor" />
            <rect x="140" y="352" width="106" height="99" fill="currentColor" />
            <rect x="482" y="402" width="64" height="49" fill="currentColor" />
            <rect x="433" y="402" width="63" height="49" fill="currentColor" />
            <rect x="384" y="352" width="49" height="50" fill="currentColor" />
            <rect x="531" y="328" width="50" height="50" fill="currentColor" />
            <rect x="99" y="303" width="49" height="58" fill="currentColor" />
            <rect x="99" y="352" width="49" height="50" fill="currentColor" />
            <rect x="99" y="392" width="49" height="59" fill="currentColor" />
            <rect x="44" y="402" width="66" height="49" fill="currentColor" />
            <rect x="234" y="402" width="62" height="49" fill="currentColor" />
            <rect x="334" y="303" width="50" height="49" fill="currentColor" />
            <rect x="581" width="49" height="49" fill="currentColor" />
            <rect x="581" width="49" height="64" fill="currentColor" />
            <rect x="482" y="123" width="49" height="49" fill="currentColor" />
            <rect x="507" y="124" width="49" height="24" fill="currentColor" />
            <rect x="531" y="49" width="99" height="99" fill="currentColor" />
          </svg>
        </div>
        <!-- End SVG-->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
</div>
{{-- Hero Section End --}}

{{-- Brand Section Start --}}
<section class="py-20">
  <div class="max-w-xl mx-auto">
    <div class="text-center ">
      <div class="relative flex flex-col items-center">
        <h1 class="text-5xl font-bold "> Browse Popular<span class="text-blue-500"> Brands
          </span> </h1>
        <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
          <div class="flex-1 h-2 bg-blue-200"></div>
          <div class="flex-1 h-2 bg-blue-400"></div>
          <div class="flex-1 h-2 bg-blue-600"></div>
        </div>
      </div>
      <p class="mb-12 text-base text-center text-gray-500">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
        Pariatur numquam, odio quod nobis ipsum ex cupiditate?
      </p>
    </div>
  </div>
  <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      @foreach ($brands as $brand)
        <div class="bg-white rounded-lg shadow-md" wire:key="{{ $brand->id }}">
          <a href="/products?selected_brands[0]={{ $brand->id }}" class="">
            <img src="{{ url('storage', $brand->image) }}" alt="{{ $brand->name }}" class="object-contain w-full h-40 bg-gray-50 rounded-t-lg p-6 transition-transform duration-300 hover:scale-105 shadow-sm" style="height:160px; max-height:160px;">
          </a>
          <div class="p-5 text-center">
            <a href="" class="text-2xl font-bold tracking-tight ">
              {{ $brand->name }}
            </a>
          </div>
        </div>    
      @endforeach
    </div>
  </div>
</section>
{{-- Brand Section End --}}

{{-- Category Section Start --}}
<div class="bg-orange-200 py-20">
  <div class="max-w-xl mx-auto">
    <div class="text-center ">
      <div class="relative flex flex-col items-center">
        <h1 class="text-5xl font-bold "> Browse <span class="text-blue-500"> Categories
          </span> </h1>
        <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
          <div class="flex-1 h-2 bg-blue-200"></div>
          <div class="flex-1 h-2 bg-blue-400"></div>
          <div class="flex-1 h-2 bg-blue-600"></div>
        </div>
      </div>
      <p class="mb-12 text-base text-center text-gray-500">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
        Pariatur numquam, odio quod nobis ipsum ex cupiditate?
      </p>
    </div>
  </div>
  <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      @foreach ($categories as $category)
        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition" href="/products?selected_categories[0]={{ $category->id }}" wire:key="{{ $category->id }}">
          <div class="p-4 md:p-5">
            <div class="flex justify-between items-center">
              <div class="flex items-center">
                <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="{{ url('storage', $category->image) }}" alt="{{ $category->name }}">
                <div class="ms-3">
                  <h3 class="group-hover:text-blue-600 font-semibold text-gray-800">
                    {{ $category->name }}
                  </h3>
                </div>
              </div>
              <div class="ps-3">
                <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m9 18 6-6-6-6" />
                </svg>
              </div>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</div>
{{-- Category Section End --}}

{{-- Customer Review Section Start --}}
<section class="py-14 font-poppins">
  <div class="max-w-6xl px-4 py-6 mx-auto lg:py-4 md:px-6">
    <div class="max-w-xl mx-auto">
      <div class="text-center ">
        <div class="relative flex flex-col items-center">
          <h1 class="text-5xl font-bold"> Customer <span class="text-blue-500"> Reviews
            </span> </h1>
          <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
            <div class="flex-1 h-2 bg-blue-200">
            </div>
            <div class="flex-1 h-2 bg-blue-400">
            </div>
            <div class="flex-1 h-2 bg-blue-600">
            </div>
          </div>
        </div>
        <p class="mb-12 text-base text-center text-gray-500">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
          Pariatur
          numquam, odio quod nobis ipsum ex cupiditate?
        </p>
      </div>
    </div>

    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 ">
      <div class="py-6 bg-white rounded-md shadow ">
        <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b ">
          <div class="flex items-center px-6 mb-2 md:mb-0 ">
            <div class="flex mr-2 rounded-full">
              <img src="https://i.postimg.cc/rF6G0Dh9/pexels-emmy-e-2381069.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
            </div>
            <div>
              <h2 class="text-lg font-semibold  ">
                Adren Roy</h2>
              <p class="text-xs text-gray-500 ">Web Designer</p>
            </div>
          </div>
          <p class="px-6 text-base font-medium text-gray-600 "> Joined 12, SEP , 2022
          </p>
        </div>
        <p class="px-6 mb-6 text-base text-gray-500 ">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
          iure minus sed fugit obcaecati minima quam reiciendis dicta!
        </p>
        <div class="flex flex-wrap justify-between pt-4 border-t ">
          <div class="flex px-6 mb-2 md:mb-0">
            <ul class="flex items-center justify-start mr-4">
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
            </ul>
            <h2 class="text-sm text-gray-500 ">Rating:<span class="font-semibold text-gray-600 ">
                3.0</span>
            </h2>
          </div>
          <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 ">
            <div class="flex items-center">
              <div class="flex mr-3 text-sm text-gray-700 ">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                    <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                    </path>
                  </svg>
                </a>
                <span>12</span>
              </div>
              <div class="flex text-sm text-gray-700 ">
                <a href="#" class="inline-flex hover:underline">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                    </path>
                  </svg>Reply</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="py-6 bg-white rounded-md shadow ">
        <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b ">
          <div class="flex items-center px-6 mb-2 md:mb-0 ">
            <div class="flex mr-2 rounded-full">
              <img src="https://i.postimg.cc/q7pv50zT/pexels-edmond-dant-s-4342352.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
            </div>
            <div>
              <h2 class="text-lg font-semibold  ">
                Sonira Roy</h2>
              <p class="text-xs text-gray-500 ">Manager</p>
            </div>
          </div>
          <p class="px-6 text-base font-medium text-gray-600 "> Joined 12, SEP , 2022
          </p>
        </div>
        <p class="px-6 mb-6 text-base text-gray-500 ">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
          iure minus sed fugit obcaecati minima quam reiciendis dicta!
        </p>
        <div class="flex flex-wrap justify-between pt-4 border-t ">
          <div class="flex px-6 mb-2 md:mb-0">
            <ul class="flex items-center justify-start mr-4">
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
            </ul>
            <h2 class="text-sm text-gray-500 ">Rating:<span class="font-semibold text-gray-600 ">
                3.0</span>
            </h2>
          </div>
          <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 ">
            <div class="flex items-center">
              <div class="flex mr-3 text-sm text-gray-700 ">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                    <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                    </path>
                  </svg>
                </a>
                <span>12</span>
              </div>
              <div class="flex text-sm text-gray-700 ">
                <a href="#" class="inline-flex hover:underline">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                    </path>
                  </svg>Reply</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="py-6 bg-white rounded-md shadow ">
        <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b ">
          <div class="flex items-center px-6 mb-2 md:mb-0 ">
            <div class="flex mr-2 rounded-full">
              <img src="https://i.postimg.cc/JzmrHQmk/pexels-pixabay-220453.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
            </div>
            <div>
              <h2 class="text-lg font-semibold  ">
                William harry</h2>
              <p class="text-xs text-gray-500 ">Marketing Officer</p>
            </div>
          </div>
          <p class="px-6 text-base font-medium text-gray-600 "> Joined 12, SEP , 2022
          </p>
        </div>
        <p class="px-6 mb-6 text-base text-gray-500 ">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
          iure minus sed fugit obcaecati minima quam reiciendis dicta!
        </p>
        <div class="flex flex-wrap justify-between pt-4 border-t ">
          <div class="flex px-6 mb-2 md:mb-0">
            <ul class="flex items-center justify-start mr-4">
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
            </ul>
            <h2 class="text-sm text-gray-500 ">Rating:<span class="font-semibold text-gray-600 ">
                3.0</span>
            </h2>
          </div>
          <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 ">
            <div class="flex items-center">
              <div class="flex mr-3 text-sm text-gray-700 ">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                    <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84  0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                    </path>
                  </svg>
                </a>
                <span>12</span>
              </div>
              <div class="flex text-sm text-gray-700 ">
                <a href="#" class="inline-flex hover:underline">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                    </path>
                  </svg>Reply</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="py-6 bg-white rounded-md shadow ">
        <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b ">
          <div class="flex items-center px-6 mb-2 md:mb-0 ">
            <div class="flex mr-2 rounded-full">
              <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
            </div>
            <div>
              <h2 class="text-lg font-semibold  ">
                James jack</h2>
              <p class="text-xs text-gray-500 ">Java Programmer</p>
            </div>
          </div>
          <p class="px-6 text-base font-medium text-gray-600 "> Joined 12, SEP , 2022
          </p>
        </div>
        <p class="px-6 mb-6 text-base text-gray-500 ">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
          iure minus sed fugit obcaecati minima quam reiciendis dicta!
        </p>
        <div class="flex flex-wrap justify-between pt-4 border-t ">
          <div class="flex px-6 mb-2 md:mb-0">
            <ul class="flex items-center justify-start mr-4">
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500  bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                  </svg>
                </a>
              </li>
            </ul>
            <h2 class="text-sm text-gray-500 ">Rating:<span class="font-semibold text-gray-600 ">
                3.0</span>
            </h2>
          </div>
          <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 ">
            <div class="flex items-center">
              <div class="flex mr-3 text-sm text-gray-700 ">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                    <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                    </path>
                  </svg></a>
                <span>12</span>
              </div>
              <div class="flex text-sm text-gray-700 ">
                <a href="#" class="inline-flex hover:underline">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                    </path>
                  </svg>Reply</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Customer Review Section End --}}
</div>
