@if(session()->has('warning'))
    <div class="bg-red-600" x-data="{open: true}" x-show="open">
        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center">
                            <span class="flex p-2 rounded-lg bg-red-800">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                </svg>
                            </span>
                    <p class="ml-3 font-medium text-white truncate">
                        <span class="md:hidden"> {{ Session::get('warning') }} </span>
                        <span class="hidden md:inline"> {{ Session::get('warning') }} </span>
                    </p>
                </div>
                <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                    <button @click="open = false" type="button"
                            class="-mr-1 flex p-2 rounded-md hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                        <span class="sr-only">Dismiss</span>
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif


@if(session()->has('success'))
    <div class="bg-green-600" x-data="{open: true}" x-show="open">
        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center">
                            <span class="flex p-2 rounded-lg bg-green-800">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                </svg>
                            </span>
                    <p class="ml-3 font-medium text-white truncate">
                        <span class="md:hidden"> {{ Session::get('success') }} </span>
                        <span class="hidden md:inline"> {{ Session::get('success') }} </span>
                    </p>
                </div>
                <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                    <button @click="open = false" type="button"
                            class="-mr-1 flex p-2 rounded-md hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                        <span class="sr-only">Dismiss</span>
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif

@if(session()->has('info'))
    <div class="bg-blue-600" x-data="{open: true}" x-show="open">
        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center">
                            <span class="flex p-2 rounded-lg bg-blue-800">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                </svg>
                            </span>
                    <p class="ml-3 font-medium text-white truncate">
                        <span class="md:hidden"> {{ Session::get('info') }} </span>
                        <span class="hidden md:inline"> {{ Session::get('info') }} </span>
                    </p>
                </div>
                <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                    <button @click="open = false" type="button"
                            class="-mr-1 flex p-2 rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                        <span class="sr-only">Dismiss</span>
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif

@if(session()->has('alert'))
    <div class="bg-yellow-400" x-data="{open: true}" x-show="open">
        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center">
                            <span class="flex p-2 rounded-lg bg-yellow-600">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                </svg>
                            </span>
                    <p class="ml-3 font-medium text-white truncate">
                        <span class="md:hidden"> {{ Session::get('alert') }} </span>
                        <span class="hidden md:inline"> {{ Session::get('alert') }} </span>
                    </p>
                </div>
                <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                    <button @click="open = false" type="button"
                            class="-mr-1 flex p-2 rounded-md hover:bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                        <span class="sr-only">Dismiss</span>
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
