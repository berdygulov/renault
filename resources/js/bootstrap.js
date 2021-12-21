window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';
//
// window.Pusher = require('pusher-js');
//
// window.Echo = new Echo({
// 	broadcaster: 'pusher',
// 	key: '181e792bb87fca92b171',
// 	cluster: 'ap2',
// 	forceTLS: true
// });
//
// var pusher = new Pusher('181e792bb87fca92b171', {
// 	cluster: 'ap2'
// });
//
// var channel = pusher.subscribe('application');
// channel.bind('application-created', function (data) {
// 	console.log(JSON.stringify(data));
// });
