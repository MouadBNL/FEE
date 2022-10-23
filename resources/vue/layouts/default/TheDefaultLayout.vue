<template>
    <div class="min-h-screen flex flex-col bg-gray-50">

        <header class="h-20 bg-white border-b border-fe-dark-border flex items-center">
            <div class="container flex items-center justify-between">
                <div>
                    <RouterLink :to="{name: 'home'}">
                        <svg class="h-10" viewBox="0 0 228 249" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M195.511 189.299L195.435 160.737L153.029 178.887C147.943 180.849 140.072 179.04 138.213 174.39C136.449 169.98 136.096 153.321 152.502 145.903C163.01 141.152 195.1 127.559 195.1 127.559L195.436 99.514C195.436 99.514 146.592 122.09 136.452 126.432C131.856 128.4 125.972 127.724 122.487 124.326C119.001 120.933 119.665 118.929 119.665 113.742C119.665 108.741 125.78 95.633 136.452 90.237C136.452 90.237 195.89 64.72 213.444 58.71C219.969 56.476 223.577 57.814 225.438 60.179C226.918 62.061 227.104 67.835 227.118 75.968L226.864 190.706C226.864 195.894 227.575 203.933 223.909 207.417C220.247 210.902 217.97 211.991 213.091 214.166C213.091 214.166 153.163 240.448 136.892 247.68C132.324 249.711 121.997 249.107 120.46 244.152C115.872 229.38 130.546 216.824 136.011 214.519C150.896 208.244 195.511 189.299 195.511 189.299Z"
                                fill="url(#paint0_linear_66_3)" />
                            <path
                                d="M10.513 34.624C35.789 25.457 83.5401 8.803 102.212 2.404C104.048 1.774 109.457 0.418998 113.773 0.736998C119.773 1.178 124.974 2.472 128.253 3.686C149.017 11.359 193.63 27.248 214.632 35.688C217.943 37.02 231.028 45.979 216.386 49.856C209.023 51.806 190.443 45.691 190.443 45.691L121.681 21.589L93.627 31.772C93.627 31.772 133.818 46.435 145.228 50.322C151.035 52.3 153.849 58.991 148.759 62.011C142.187 65.909 124.853 62.145 115.177 58.625C104.981 54.915 65.652 41.84 65.652 41.84C65.652 41.84 52.773 45.967 42.427 49.002C35.04 51.168 21.451 49.109 17.647 47.995C7.15304 44.919 4.11005 36.947 10.513 34.624Z"
                                fill="url(#paint1_linear_66_3)" />
                            <path
                                d="M95.43 214.519C100.895 216.824 115.567 229.379 110.979 244.152C109.442 249.107 99.117 249.712 94.548 247.68C78.277 240.449 18.349 214.166 18.349 214.166C13.47 211.991 10.369 210.067 6.70799 206.581C3.04199 203.098 0.343994 195.893 0.343994 190.706V76.013C0.343994 71.368 0.463994 63.827 3.97299 60.18C6.97199 57.064 13.219 56.693 17.996 58.711C35.089 65.93 94.986 90.238 94.986 90.238C105.661 95.634 111.774 108.742 111.774 113.743C111.774 118.93 112.438 120.934 108.952 124.327C105.468 127.725 99.583 128.401 94.986 126.433C84.847 122.091 36.003 99.515 36.003 99.515L36.34 127.56C36.34 127.56 68.427 141.153 78.938 145.904C95.342 153.322 94.989 169.981 93.225 174.391C91.367 179.041 83.495 180.85 78.409 178.888L36.003 160.738L35.929 189.3C35.929 189.299 80.542 208.244 95.43 214.519Z"
                                fill="url(#paint2_linear_66_3)" />
                            <defs>
                                <linearGradient id="paint0_linear_66_3" x1="-57.1367" y1="36.5723" x2="152.649"
                                    y2="142.406" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#005F60" />
                                    <stop offset="0.9949" stop-color="#249EA0" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_66_3" x1="-16.4043" y1="-24.8149" x2="183.23"
                                    y2="75.8971" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#005F60" />
                                    <stop offset="0.9949" stop-color="#249EA0" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_66_3" x1="-80.5625" y1="83.0161" x2="129.219"
                                    y2="188.848" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#005F60" />
                                    <stop offset="0.9949" stop-color="#249EA0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </RouterLink>
                </div>

                <div class="flex gap-8 items-center">
                    <nav>
                        <ul>
                            <NSpace>
                                <RouterLink :to="{name: 'about'}">
                                    <li class="text-fe-dark-text">
                                        À propos
                                    </li>
                                </RouterLink>
                            </NSpace>
                        </ul>
                    </nav>

                    <NSpace>
                        <NButton>Login</NButton>
                        <NButton type="primary">Register</NButton>
                    </NSpace>

                </div>
            </div>
        </header>

        <main>
            <slot />
        </main>

        <footer class="border-t border-fe-dark-border bg-white mt-auto">
            <div class="container py-8">
                <div class="grid grid-cols-[max(15%,80px)_repeat(4,_1fr)] gap-x-4">
                    <div class="border-r border-fe-dark-border mr-12">
                        <NSpace vertical size="large">
                            <span class="block font-bold text-fe-dark-text text-lg">Accueil</span>
                            <span class="block font-bold text-fe-dark-text text-lg">Offres</span>
                            <span class="block font-bold text-fe-dark-text text-lg">Etudiants</span>
                            <span class="block font-bold text-fe-dark-text text-lg">Profil</span>
                        </NSpace>
                    </div>

                    <div>
                        <h5 class="font-semibold text-fe-dark-text text-lg mb-4">Profil</h5>

                        <span class="block font-semibold text-fe-light-text mb-2">Modifier mon profil</span>
                        <span class="block font-semibold text-fe-light-text mb-2">Mon profil</span>
                        <span class="block font-semibold text-fe-light-text mb-2">Mon profil</span>
                    </div>

                    <div>
                        <h5 class="font-semibold text-fe-dark-text text-lg mb-4">Profil</h5>

                        <span class="block font-semibold text-fe-light-text mb-2">Modifier mon profil</span>
                        <span class="block font-semibold text-fe-light-text mb-2">Mon profil</span>
                        <span class="block font-semibold text-fe-light-text mb-2">Mon profil</span>
                    </div>

                    <div>
                        <h5 class="font-semibold text-fe-dark-text text-lg mb-4">Profil</h5>

                        <span class="block font-semibold text-fe-light-text mb-2">Modifier mon profil</span>
                        <span class="block font-semibold text-fe-light-text mb-2">Mon profil</span>
                        <span class="block font-semibold text-fe-light-text mb-2">Mon profil</span>
                        <span class="block font-semibold text-fe-light-text mb-2">Mon profil</span>
                    </div>

                    <div>
                        <h5 class="font-semibold text-fe-dark-text text-lg mb-4">Profil</h5>

                        <span class="block font-semibold text-fe-light-text mb-2">Modifier mon profil</span>
                        <span class="block font-semibold text-fe-light-text mb-2">Mon profil</span>
                        <span class="block font-semibold text-fe-light-text mb-2">Mon profil</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script lang="ts" setup>
import { NButton, NSpace } from 'naive-ui'
</script>