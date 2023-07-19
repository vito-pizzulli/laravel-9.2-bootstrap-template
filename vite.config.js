export default defineConfig({
    plugins: [
        laravel({
            input: [
            'resources/scss/app.scss',
            'resources/js/app.js',
        ],
        refresh: true
    }),
    ],

    resolve: {
        alias: {
            '~resources' : '/resources/',
        }
    }
});