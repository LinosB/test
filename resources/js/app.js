// resources/js/app.js

import './bootstrap';
import { createApp } from 'vue';

// Import Bootstrap styles and JS
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';

// Import Vue components
import ExampleComponent from './components/ExampleComponent.vue';

// Create Vue app instance and register components
const app = createApp({});
app.component('example-component', ExampleComponent);

// Mount the app to a DOM element
app.mount('#app');
