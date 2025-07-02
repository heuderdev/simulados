// Extensão para Alpine para lidar com localStorage
Alpine.store('counter', {
    value: parseInt(localStorage.getItem('counterValue')) || 0, // Carrega do localStorage ou inicia em 0
    increment() {
        this.value++;
        localStorage.setItem('counterValue', this.value); // Salva no localStorage
    },
    decrement() {
        if (this.value === 0) {
            this.value = 0
        } else {
            this.value--;
            localStorage.setItem('counterValue', this.value); // Salva no localStorage,
        }
    }
});
