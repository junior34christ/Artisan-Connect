importScripts("https://js.pusher.com/beams/service-worker.js");
// service-worker.js

self.addEventListener('install', event => {
    console.log('Service Worker installing.');
    // Effectuer des actions d'installation, telles que mettre en cache des ressources statiques
});

self.addEventListener('activate', event => {
    console.log('Service Worker activating.');
    // Effectuer des actions d'activation, telles que nettoyer les caches obsolètes
});

self.addEventListener('fetch', event => {
    console.log('Fetch intercepted for:', event.request.url);
    // Répondre aux requêtes de réseau
});
