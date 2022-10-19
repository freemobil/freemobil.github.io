// Service Worker Register 
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function () {
        navigator.serviceWorker.register('service-worker.js')
            .then(registration => {
            })
            .catch(err => {
            });
    });
}