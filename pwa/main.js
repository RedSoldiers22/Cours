// serviceWorker
if (navigator.serviceWorker) {
    // installation d'un service worker 
    // INSTALLING (cycle de vie) 
    navigator.serviceWorker.register('sw.js');
}
if (window.Notification && window.Notification !== 'denied') {
    Notification.requestPermission(perm => {
        if (perm === 'granted') {
            const notif = new Notification("Notif de main => ok"); 
        } else {
            const notif = new Notification("Notif pas ok"); 
        }
    })
}