var app5 = new Vue({
    el: '#app-5',
    data: {
        message: 'Hola mundo!'
    },
    methods: {
        reverseMessage: function () {
            this.message = this.message.split('').reverse().join('')
        }
    }
})