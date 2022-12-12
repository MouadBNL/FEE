<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Forum Ensak Entreprise</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    @vite('resources/vue/assets/tailwind.css')

    <meta name="naive-ui-style" />
    <meta name="vueuc-style" />
</head>
<body class="antialiased font-sans">
    <div class="flex min-h-screen flex-col bg-gray-50">
        <header class="p-4 border-b-2 border-gr-100 bg-white">
            <div class="container mx-auto flex justify-between">
                <nav class="flex items-center">
                    <div class="pr-8 mr-8 border-r-2 border-gr-100">
                        <a href="#">
                            <svg width="42" height="45" viewBox="0 0 42 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M36.1462 34.2122L36.1321 29.0313L28.2783 32.3236C27.3363 32.6795 25.8785 32.3513 25.5342 31.5079C25.2075 30.7079 25.1422 27.6861 28.1807 26.3406C30.1268 25.4788 36.0701 23.0131 36.0701 23.0131L36.1323 17.926C36.1323 17.926 27.0861 22.0211 25.2081 22.8087C24.3569 23.1657 23.2671 23.043 22.6217 22.4267C21.9761 21.8112 22.099 21.4477 22.099 20.5068C22.099 19.5997 23.2316 17.222 25.2081 16.2432C25.2081 16.2432 36.2164 11.6146 39.4675 10.5245C40.676 10.1192 41.3442 10.3619 41.6889 10.7909C41.963 11.1323 41.9974 12.1797 42 13.6549L41.953 34.4675C41.953 35.4085 42.0847 36.8667 41.4057 37.4987C40.7275 38.1308 40.3057 38.3284 39.4021 38.7229C39.4021 38.7229 28.3031 43.4902 25.2896 44.8021C24.4436 45.1705 22.5309 45.0609 22.2463 44.1621C21.3965 41.4826 24.1143 39.205 25.1264 38.7869C27.8832 37.6487 36.1462 34.2122 36.1462 34.2122Z" fill="url(#paint0_linear_305_104)" />
                                <path d="M1.88336 6.15546C6.56464 4.49264 15.4084 1.47175 18.8666 0.311021C19.2067 0.196744 20.2084 -0.0490417 21.0078 0.00864088C22.119 0.0886346 23.0823 0.323356 23.6896 0.543565C27.5352 1.93538 35.7978 4.81752 39.6875 6.34846C40.3007 6.59008 42.7242 8.21517 40.0124 8.91842C38.6487 9.27214 35.2076 8.16293 35.2076 8.16293L22.4724 3.79102L17.2766 5.63813C17.2766 5.63813 24.7202 8.29788 26.8335 9.00295C27.909 9.36174 28.4301 10.5754 27.4874 11.1232C26.2702 11.8303 23.0599 11.1475 21.2678 10.509C19.3795 9.83608 12.0955 7.46439 12.0955 7.46439C12.0955 7.46439 9.71019 8.21299 7.79404 8.76351C6.42592 9.15641 3.90915 8.78292 3.20463 8.58085C1.26107 8.02289 0.697486 6.57684 1.88336 6.15546Z" fill="url(#paint1_linear_305_104)" />
                                <path d="M17.6105 38.7869C18.6227 39.2051 21.34 41.4824 20.4903 44.1621C20.2057 45.0609 18.2934 45.1707 17.4472 44.8021C14.4337 43.4904 3.33464 38.7229 3.33464 38.7229C2.43102 38.3284 1.8567 37.9794 1.17865 37.3471C0.499687 36.7153 0 35.4083 0 34.4675V13.6631C0 12.8205 0.0222247 11.4526 0.672114 10.7911C1.22755 10.2259 2.38453 10.1586 3.26926 10.5246C6.435 11.8341 17.5283 16.2434 17.5283 16.2434C19.5054 17.2222 20.6376 19.5999 20.6376 20.507C20.6376 21.4479 20.7605 21.8114 20.1149 22.4269C19.4696 23.0432 18.3797 23.1658 17.5283 22.8089C15.6505 22.0213 6.60428 17.9262 6.60428 17.9262L6.66669 23.0133C6.66669 23.0133 12.6094 25.479 14.5561 26.3407C17.5942 27.6863 17.5289 30.7081 17.2022 31.5081C16.858 32.3515 15.4001 32.6797 14.4581 32.3238L6.60428 29.0315L6.59057 34.2124C6.59057 34.2122 14.8532 37.6487 17.6105 38.7869Z" fill="url(#paint2_linear_305_104)" />
                                <defs>
                                    <linearGradient id="paint0_linear_305_104" x1="-10.6458" y1="6.50888" x2="27.8758" y2="26.351" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#005F60" />
                                        <stop offset="0.9949" stop-color="#249EA0" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_305_104" x1="-3.1019" y1="-4.62626" x2="33.5556" y2="14.2557" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#005F60" />
                                        <stop offset="0.9949" stop-color="#249EA0" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_305_104" x1="-14.9844" y1="14.9334" x2="23.5364" y2="34.7752" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#005F60" />
                                        <stop offset="0.9949" stop-color="#249EA0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                    </div>
                    <h2 class="h2">Dashboard</h2>
                </nav>

                <nav class="flex items-center gap-7">
                    <div class="h-11 aspect-square rounded-full bg-gray-50 hover:bg-gray-200 flex items-center justify-center">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.5264 9.31641C24.7168 9.16504 25 9.30664 25 9.5459V19.5312C25 20.8252 23.9502 21.875 22.6562 21.875H2.34375C1.0498 21.875 0 20.8252 0 19.5312V9.55078C0 9.30664 0.27832 9.16992 0.473633 9.32129C1.56738 10.1709 3.01758 11.25 7.99805 14.8682C9.02832 15.6201 10.7666 17.2021 12.5 17.1924C14.2432 17.207 16.0156 15.5908 17.0068 14.8682C21.9873 11.25 23.4326 10.166 24.5264 9.31641ZM12.5 15.625C13.6328 15.6445 15.2637 14.1992 16.084 13.6035C22.5635 8.90137 23.0566 8.49121 24.5508 7.31934C24.834 7.09961 25 6.75781 25 6.39648V5.46875C25 4.1748 23.9502 3.125 22.6562 3.125H2.34375C1.0498 3.125 0 4.1748 0 5.46875V6.39648C0 6.75781 0.166016 7.09473 0.449219 7.31934C1.94336 8.48633 2.43652 8.90137 8.91602 13.6035C9.73633 14.1992 11.3672 15.6445 12.5 15.625Z" fill="#A3A4A4" />
                        </svg>

                    </div>
                    <div class="h-11 aspect-square rounded-full bg-gray-50 hover:bg-gray-200 flex items-center justify-center">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5 25C14.2246 25 15.6236 23.6011 15.6236 21.875H9.3765C9.3765 23.6011 10.7754 25 12.5 25ZM23.0171 17.6899C22.0738 16.6763 20.3086 15.1514 20.3086 10.1562C20.3086 6.3623 17.6485 3.3252 14.0616 2.58008V1.5625C14.0616 0.699707 13.3623 0 12.5 0C11.6377 0 10.9385 0.699707 10.9385 1.5625V2.58008C7.3516 3.3252 4.69144 6.3623 4.69144 10.1562C4.69144 15.1514 2.9263 16.6763 1.98294 17.6899C1.68998 18.0049 1.56009 18.3813 1.56253 18.75C1.5679 19.5508 2.19632 20.3125 3.12992 20.3125H21.8702C22.8037 20.3125 23.4327 19.5508 23.4375 18.75C23.44 18.3813 23.3101 18.0044 23.0171 17.6899Z" fill="#A3A4A4" />
                        </svg>
                    </div>
                    <img src="{{ auth()->user()->picture ?? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png' }}" class="block h-11 aspect-square rounded-full bg-gr-100 border border-primary" />

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        @method('delete')
                        <x-button>
                            Logout
                        </x-button>
                    </form>
                </nav>
            </div>
        </header>

        <main class="" id="app">
            <n-config-provider :theme-overrides="{ 'common': { 'primaryColor': '#17888AFF', 'primaryColorHover': '#1F9EA0FF', 'primaryColorPressed': '#0E6365FF', 'primaryColorSuppl': '#17888AFF' } }">
                {{ $slot ?? '' }}
            </n-config-provider>
        </main>



        <footer class="mt-auto">
            <div class="bg-primary-light-1 h-8 flex items-center justify-center">
                <p class="text-center text-white">Ecole Nationale des Sciences Appliquées</p>
            </div>
            <div class="bg-primary py-16">
                <div class="container flex items-center justify-center text-white text-center">
                    <div>
                        <p>Adresse : campus universitaire, B.P 241, Kénitra - Maroc</p>

                        <p class="mb-4">Tél : (+212) 5 37 32 94 48 | Fax : (+212) 5 37 32 92 4</p>
                        <p class="underline space-x-4">
                            <a href="https://ensa.uit.ac.ma/" target="_blank">https://ensa.uit.ac.ma/</a>
                            <a href="https://www.uit.ac.ma/" target="_blank">https://www.uit.ac.ma/</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @vite('resources/vue/index.ts')
</body>
</html>
