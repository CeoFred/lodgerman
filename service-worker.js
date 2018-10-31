var dataCacheName = 'lodgerman inc';
var cacheName = 'lodgerman inc';
var filesToCache = [
  '/',
 "./assets/fonts",
 "./assets/fonts/roboto",
 "./assets/fonts/roboto/Roboto-Bold.woff",
 "./assets/fonts/roboto/Roboto-Bold.woff2",
 "./assets/fonts/roboto/Roboto-Light.woff",
 "./assets/fonts/roboto/Roboto-Light.woff2",
 "./assets/fonts/roboto/Roboto-Medium.woff",
 "./assets/fonts/roboto/Roboto-Medium.woff2",
 "./assets/fonts/roboto/Roboto-Regular.woff",
 "./assets/fonts/roboto/Roboto-Regular.woff2",
 "./assets/fonts/roboto/Roboto-Thin.woff",
 "./assets/fonts/roboto/Roboto-Thin.woff2",
 "./assets/images",
 "./assets/images/icons",
 "./assets/images/icon.png",
 './location.php',
 "./assets/images/icons/icon-128x128.png",
 "./assets/images/icons/icon-144x144.png",
 "./assets/images/icons/icon-152x152.png",
 "./assets/images/icons/icon-192x192.png",
 "./assets/images/icons/icon-256x256.png",
 "./index.html",
 "./manifest.json",
 "./assets/js",
 "./assets/js/app.js",
 "./assets/js/jquery-3.3.1.js",
 "./assets/js/mdb.js",
 "./assets/js/jquery-3.3.1.min.js",
 "./assets/js/bootstrap.min.js",
 "./assets/js/popper.min.js",
 "./service-worker.js",
 "./assets/css",
 "./assets/css/style.css",
 "./assets/css/bootstrap.min.css",
 "./assets/css/mdb.min.css"
];

self.addEventListener('install', function(e) {
  console.log('[ServiceWorker] Install');
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      console.log('[ServiceWorker] Caching app shell');
      return cache.addAll(filesToCache);
    })
  );
});

self.addEventListener('activate', function(e) {
  console.log('[ServiceWorker] Activate');
  e.waitUntil(
    caches.keys().then(function(keyList) {
      return Promise.all(keyList.map(function(key) {
        if (key !== cacheName && key !== dataCacheName) {
          console.log('[ServiceWorker] Removing old cache', key);
          return caches.delete(key);
        }
      }));
    })
  );
  return self.clients.claim();
});

self.addEventListener('fetch', function(e) {
  console.log('[Service Worker] Fetch', e.request.url);
  e.respondWith(
    caches.match(e.request).then(function(response) {
      return response || fetch(e.request);
    })
  );
});
