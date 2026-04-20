<div
    x-data="{
        isDark: document.documentElement.classList.contains('dark'),
        toggleTheme() {
            this.isDark = ! this.isDark

            document.documentElement.classList.toggle('dark', this.isDark)
            localStorage.setItem('theme', this.isDark ? 'dark' : 'light')
        }
    }"
    class="ms-3"
>
    <button
        type="button"
        x-on:click="toggleTheme()"
        class="fi-btn fi-btn-size-sm rounded-lg px-3 py-2 border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900"
    >
        <span x-show="! isDark">Dark mode</span>
        <span x-show="isDark">Light mode</span>
    </button>
</div>