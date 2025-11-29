/**
 * Core Application Script
 * Initializes modules when the DOM is ready.
 */

import { initVCard } from './modules/vcard.js';

document.addEventListener('DOMContentLoaded', function() {
    // Initialize vCard functionality
    initVCard();
    
    // Log success
    console.log('Visernic Profile System Loaded');
});
