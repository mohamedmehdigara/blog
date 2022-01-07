<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title></title>

    <link href="https://unpkg.com/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet"/>
</head>
  
<body class="bg-gray-200 leading-normal tracking-normal">

<nav id="header" class="fixed w-full z-10 top-0 bg-white">

    <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">
        <div class="pl-4">
            <a class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl" href="#">
                Ù…Ø¯ÙˆÙ†Ø©
            </a>
        </div>

        <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-green-500 appearance-none focus:outline-none">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>

        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3">
                    <a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="">Ø§Ù„Ø±Ø¦ÙŠØ³ÙŠØ©</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-gray-600  border-2 border-gray-100  hover:text-gray-900 hover:text-underline py-2 px-4" href="">
                        <span class="font-bold">+</span> Ù…Ù‚Ø§Ù„ Ø¬Ø¯ÙŠØ¯
                    </a>
                </li>
            </ul>
        </div>
    </div>		

</nav>

<!--Container-->
<div class="container w-full md:max-w-4xl mx-auto pt-20">
    <!--Title-->
    <div class="">
        <h1 class="font-bold break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl"></h1>
    </div>
    <hr class="border-2 bg-gray-400 my-4"/>

    {{$slot}}
</div>
<!--/container-->

<footer class="fixed inset-x-0 bottom-0 p-4 bg-white text-center">

</footer>

	<script>
		//Javascript to toggle the menu
		document.getElementById('nav-toggle').onclick = function() {
			document.getElementById("nav-content").classList.toggle("hidden");
		}
	</script>
    
</body>

</html>