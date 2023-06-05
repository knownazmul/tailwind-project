
    <!-- Demo styles -->
    <style>
      html,
      .swiper {
        width: 100%;
        height: 100%;
      }


      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
	  .swiper-button-next:after, .swiper-rtl .swiper-button-prev:after {
		content: '\2192' !important;
		color: black;
		font-size: 1.2rem !important;
		width: fit-content;
		height: fit-content;
		}
	.swiper-button-prev:after, .swiper-rtl .swiper-button-next:after {
		content: '\2190' !important;
		color: black;
		font-size: 1.2rem !important;
		font-family: sans-serif;
		line-height: 0%;
		}
	.swiper-button-prev, .swiper-rtl .swiper-button-next {
		left: auto;
		right: 75px;
		}
	.swiper-button-next, .swiper-button-prev {
		width: 0;
		height: 0;
		margin: -101px 0px;
		padding: 25px 25px;
		background: #e4e4e4;
		top: 0%;
		border-radius: 5px;
		
	}
	
    </style>
<div class="sm:container sm:mx-auto">
	<div>
	<div class="flex space-x-2 py-5">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" height="30" width="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="bg-pink-500 rounded-full p-1">
				<path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
			</svg>
			<p class="font-semibold text-pink-500 ">Categories</p>
	</div>
		
	<h1 class="text-2xl font-bold pb-10">new by category</h1>
	</div>
	<!-- Swiper -->
	<div class="my-20 relative">
		<div class="swiper-button-next bg-red-50 p-5"></div>
		<div class="swiper-button-prev bg-red-50 p-5"></div>
		<!-- Swiper -->
		<div draggable="true" id="product" class="swiper">
			<div class="swiper-wrapper text-center">
				<!-- div-01 -->
				
				<div class="swiper-slide">
					<div class="w-72 h-fit group">
						<div class="relative">
							<div class="absolute top-0 right-0 z-50">
								<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-6 rounded shadow-lg shadow-blue-500/50">50%off</p>
							</div>
							<div class="relative h-72 w-72">
							  <img class="absolute h-96 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="images/demo/product-01.png" alt="">
							  <img class="absolute  h-96 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="images/demo/product-08.png" alt="">
							</div>
							<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
								<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
									  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
									</svg>
								</div>
								<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
								<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
								</svg>
								</div>
							</div>
						</div>
						<div>
							<div class="flex flex-wrap mx-6">
								 <svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<span class="text-slate-500 -mt-1 font-normal">(64)</span>
								<div>
									<h5> <a href="#" class="no-underline text-slate-500 font-normal">Yantiti Leather & Canvas Bags</a></h5>
									<div>
										<span>$28.90</span>
										<span class="line-through">$28.90</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w-72 h-fit group">
						<div class="relative">
							<div class="absolute top-0 right-0 z-50">
								<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-6 rounded shadow-lg shadow-blue-500/50">50%off</p>
							</div>
							<div class="relative h-72 w-72">
							  <img class="absolute h-96 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="images/demo/product-01.png" alt="">
							  <img class="absolute  h-96 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="images/demo/product-08.png" alt="">
							</div>
							<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
								<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
									  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
									</svg>
								</div>
								<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
								<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
								</svg>
								</div>
							</div>
						</div>
						<div>
							<div class="flex flex-wrap mx-6">
								 <svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<span class="text-slate-500 -mt-1 font-normal">(64)</span>
								<div>
									<h5> <a href="#" class="no-underline text-slate-500 font-normal">Yantiti Leather & Canvas Bags</a></h5>
									<div>
										<span>$28.90</span>
										<span class="line-through">$28.90</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- div-01 -->
					<div class="w-72 h-fit group">
						<div class="relative">
							<div class="absolute top-0 right-0 z-50">
								<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-6 rounded shadow-lg shadow-blue-500/50">50%off</p>
							</div>
							<div class="relative h-72 w-72">
							  <img class="absolute h-96 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="images/demo/product-01.png" alt="">
							  <img class="absolute  h-96 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="images/demo/product-08.png" alt="">
							</div>
							<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
								<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
									  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
									</svg>
								</div>
								<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
								<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
								</svg>
								</div>
							</div>
						</div>
						<div>
							<div class="flex flex-wrap mx-6">
								 <svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<span class="text-slate-500 -mt-1 font-normal">(64)</span>
								<div>
									<h5> <a href="#" class="no-underline text-slate-500 font-normal">Yantiti Leather & Canvas Bags</a></h5>
									<div>
										<span>$28.90</span>
										<span class="line-through">$28.90</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				<div class="swiper-slide">
				</div><!-- div-01 -->
				<div class="swiper-slide">
					<div class="w-72 h-fit group">
						<div class="relative">
							<div class="absolute top-0 right-0 z-50">
								<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-6 rounded shadow-lg shadow-blue-500/50">50%off</p>
							</div>
							<div class="relative h-72 w-72">
							  <img class="absolute h-96 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="images/demo/product-01.png" alt="">
							  <img class="absolute  h-96 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="images/demo/product-08.png" alt="">
							</div>
							<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
								<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
									  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
									</svg>
								</div>
								<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
								<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
								</svg>
								</div>
							</div>
						</div>
						<div>
							<div class="flex flex-wrap mx-6">
								 <svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<span class="text-slate-500 -mt-1 font-normal">(64)</span>
								<div>
									<h5> <a href="#" class="no-underline text-slate-500 font-normal">Yantiti Leather & Canvas Bags</a></h5>
									<div>
										<span>$28.90</span>
										<span class="line-through">$28.90</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- div-01 -->
				<div class="swiper-slide">
					<div class="w-72 h-fit group">
						<div class="relative">
							<div class="absolute top-0 right-0 z-50">
								<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-6 rounded shadow-lg shadow-blue-500/50">50%off</p>
							</div>
							<div class="relative h-72 w-72">
							  <img class="absolute h-96 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="images/demo/product-01.png" alt="">
							  <img class="absolute  h-96 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="images/demo/product-08.png" alt="">
							</div>
							<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
								<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
									  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
									</svg>
								</div>
								<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
								<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
								</svg>
								</div>
							</div>
						</div>
						<div>
							<div class="flex flex-wrap mx-6">
								 <svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<span class="text-slate-500 -mt-1 font-normal">(64)</span>
								<div>
									<h5> <a href="#" class="no-underline text-slate-500 font-normal">Yantiti Leather & Canvas Bags</a></h5>
									<div>
										<span>$28.90</span>
										<span class="line-through">$28.90</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- div-01 -->
				<div class="swiper-slide">
					<div class="w-72 h-fit group">
						<div class="relative">
							<div class="absolute top-0 right-0 z-50">
								<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-6 rounded shadow-lg shadow-blue-500/50">50%off</p>
							</div>
							<div class="relative h-72 w-72">
							  <img class="absolute h-96 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="images/demo/product-01.png" alt="">
							  <img class="absolute  h-96 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="images/demo/product-08.png" alt="">
							</div>
							<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
								<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
									  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
									</svg>
								</div>
								<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
								<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
								</svg>
								</div>
							</div>
						</div>
						<div>
							<div class="flex flex-wrap mx-6">
								 <svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<span class="text-slate-500 -mt-1 font-normal">(64)</span>
								<div>
									<h5> <a href="#" class="no-underline text-slate-500 font-normal">Yantiti Leather & Canvas Bags</a></h5>
									<div>
										<span>$28.90</span>
										<span class="line-through">$28.90</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- div-01 -->
				<div class="swiper-slide">
					<div class="w-72 h-fit group">
						<div class="relative">
							<div class="absolute top-0 right-0 z-50">
								<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-6 rounded shadow-lg shadow-blue-500/50">50%off</p>
							</div>
							<div class="relative h-72 w-72">
							  <img class="absolute h-96 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="images/demo/product-01.png" alt="">
							  <img class="absolute  h-96 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="images/demo/product-08.png" alt="">
							</div>
							<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
								<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
									  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
									</svg>
								</div>
								<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
								<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
								</svg>
								</div>
							</div>
						</div>
						<div>
							<div class="flex flex-wrap mx-6">
								 <svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<span class="text-slate-500 -mt-1 font-normal">(64)</span>
								<div>
									<h5> <a href="#" class="no-underline text-slate-500 font-normal">Yantiti Leather & Canvas Bags</a></h5>
									<div>
										<span>$28.90</span>
										<span class="line-through">$28.90</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- div-01 -->
				<div class="swiper-slide">
					<div class="w-72 h-fit group">
						<div class="relative">
							<div class="absolute top-0 right-0 z-50">
								<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-6 rounded shadow-lg shadow-blue-500/50">50%off</p>
							</div>
							<div class="relative h-72 w-72">
							  <img class="absolute h-96 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="images/demo/product-01.png" alt="">
							  <img class="absolute  h-96 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="images/demo/product-08.png" alt="">
							</div>
							<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
								<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
									  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
									</svg>
								</div>
								<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
								<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
								</svg>
								</div>
							</div>
						</div>
						<div>
							<div class="flex flex-wrap mx-6">
								 <svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<span class="text-slate-500 -mt-1 font-normal">(64)</span>
								<div>
									<h5> <a href="#" class="no-underline text-slate-500 font-normal">Yantiti Leather & Canvas Bags</a></h5>
									<div>
										<span>$28.90</span>
										<span class="line-through">$28.90</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- div-01 -->
				<div class="swiper-slide">
					<div class="w-72 h-fit group">
						<div class="relative">
							<div class="absolute top-0 right-0 z-50">
								<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-6 rounded shadow-lg shadow-blue-500/50">50%off</p>
							</div>
							<div class="relative h-72 w-72">
							  <img class="absolute h-96 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="images/demo/product-01.png" alt="">
							  <img class="absolute  h-96 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="images/demo/product-08.png" alt="">
							</div>
							<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
								<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
									  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
									</svg>
								</div>
								<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
								<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
								</svg>
								</div>
							</div>
						</div>
						<div>
							<div class="flex flex-wrap mx-6">
								 <svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<span class="text-slate-500 -mt-1 font-normal">(64)</span>
								<div>
									<h5> <a href="#" class="no-underline text-slate-500 font-normal">Yantiti Leather & Canvas Bags</a></h5>
									<div>
										<span>$28.90</span>
										<span class="line-through">$28.90</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- div-01 -->
				<div class="swiper-slide">
					<div class="w-72 h-fit group">
						<div class="relative">
							<div class="absolute top-0 right-0 z-50">
								<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-6 rounded shadow-lg shadow-blue-500/50">50%off</p>
							</div>
							<div class="relative h-72 w-72">
							  <img class="absolute h-96 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="images/demo/product-01.png" alt="">
							  <img class="absolute  h-96 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="images/demo/product-08.png" alt="">
							</div>
							<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
								<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
									  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
									</svg>
								</div>
								<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
								<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
								</svg>
								</div>
							</div>
						</div>
						<div>
							<div class="flex flex-wrap mx-6">
								 <svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<span class="text-slate-500 -mt-1 font-normal">(64)</span>
								<div>
									<h5> <a href="#" class="no-underline text-slate-500 font-normal">Yantiti Leather & Canvas Bags</a></h5>
									<div>
										<span>$28.90</span>
										<span class="line-through">$28.90</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="w-72 h-fit group">
						<div class="relative">
							<div class="absolute top-0 right-0 z-50">
								<p class="bg-blue-500 text-slate-100 ml-auto px-2 mt-6 rounded shadow-lg shadow-blue-500/50">50%off</p>
							</div>
							<div class="relative h-72 w-72">
							  <img class="absolute h-96 ease-in opacity-100 group-hover:opacity-0 transition duration-700 left-0 bottom-0  w-full object-cover" src="images/demo/product-01.png" alt="">
							  <img class="absolute  h-96 opacity-0 group-hover:opacity-100 left-0 bottom-0 w-full transition duration-700" src="images/demo/product-08.png" alt="">
							</div>
							<div class="absolute h-full w-full  flex items-end justify-center mb-10 -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
								<div class="cursor-pointer p-2 hover:p-3 bg-slate-50 m-1 hover:m-0 rounded transition-all duraiton-700">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" h-6 w-6">
									  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
									  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
									</svg>
								</div>
								<button class="bg-pink-600 text-white rounded my-1 mx-2 px-6 py-2 hover:m-0 hover:px-7 hover:py-3 transition-all duraiton-700">Add to cart</button>
								<div class="cursor-pointer p-2 hover:p-3 m-1 bg-slate-50 hover:m-0 rounded transition-all duraiton-700">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
								</svg>
								</div>
							</div>
						</div>
						<div>
							<div class="flex flex-wrap mx-6">
								 <svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" fill="#fcd34d" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fcd34d" class=" w-4 h-4">
								  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>
								<span class="text-slate-500 -mt-1 font-normal">(64)</span>
								<div>
									<h5> <a href="#" class="no-underline text-slate-500 font-normal">Yantiti Leather & Canvas Bags</a></h5>
									<div>
										<span>$28.90</span>
										<span class="line-through">$28.90</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- div-01 -->
			</div>
		</div>
	</div>
</div>