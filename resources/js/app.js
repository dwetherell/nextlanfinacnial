// Laravel's bootstrap (includes Axios, CSRF, etc.)

// Load SCSS (theme styles)
//import '../scss/app.scss';

import './bootstrap';



// jQuery (required for theme)


// Alpine.js (if you're using it)
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();


import $ from 'jquery';
window.$ = window.jQuery = $;

// Required vendor libraries (in the order the theme expects)
import 'metismenu'; // ✅ comes from node_modules
import '../libs/simplebar/simplebar.min.js';
import '../libs/bootstrap/js/bootstrap.bundle.min.js';
import Waves from 'node-waves';
window.Waves = Waves;
Waves.init();

// Optional: include any additional plugin JS here...

// The main theme logic (converted to a module)
import './theme'; // see next section
