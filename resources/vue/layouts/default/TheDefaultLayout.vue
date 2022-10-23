<template>
    <div class="min-h-screen flex flex-col bg-gray-50">
        <header class="h-16 bg-white border-b border-gray-200">
            <div class="container">
                FEE
                <nav>
                    <ul>
                        <li>
                            <RouterLink :to="{name: 'home'}">Home</RouterLink>
                        </li>
                        <li>
                            <RouterLink :to="{name: 'about'}">About</RouterLink>
                        </li>
                        <li>
                            <RouterLink :to="{name: 'subabout'}">sub About</RouterLink>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <slot></slot>
        </main>

        <footer class="bg-primary text-white h-32 mt-auto">
            <p class="text-center">thsi the page page footer</p>
        </footer>
    </div>
</template>