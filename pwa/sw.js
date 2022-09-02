self.addEventListener('install', (evt) => {
    console.log('[Service Worker] Installation');
    evt.waitUntil(
        caches.open("cache01").then((cache) => {
          console.log('[Service Worker] Mise en cache globale: app shell et contenu');
          return cache.addAll([
              '/',
              '/index.html',
              '/main.js'
          ]);
        })
      );

});
self.addEventListener('activate', evt =>{
    console.log("sw: evenement activé") 
})
self.addEventListener('fetch', evt => {
    console.log("evenement fetch", evt.request.url)
    evt.respondWith( 
        caches.match(evt.request).then(res => { 
        if (res) {
            console.log("RES:",res);
            return res
        }

        return fetch(evt.request).then(newResponse => {
                caches.open('caches01').then( cache => cache.put(evt.request,newResponse ) ) 
                return newResponse.clone();
        })
    })
)
 })
 self.registration.showNotification('Notif depuis le sw.js', {
    body: 'Notification du service worker - question',
    actions: [
        { action: 'accept', title: 'accepter' },
        { action: 'refuse', title: 'refuser' }
    ]
});
self.addEventListener('notificationclick', evt => {
    if (evt.action === 'accept') {
        console.log('vous avez accepté');
    } else if (evt.action === 'refuse') {
        console.log('vous avez refusé')
    } else {
        console.log('vous avez cliqué sur la notification (pas sur un des boutons)')
    }
    evt.notification.close();
})