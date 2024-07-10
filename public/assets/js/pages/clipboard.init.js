/**
 * Theme: Minia - Tailwind Admin Dashboard Template
 * Author: Themesbrand
 * File: Clip Board Js
 */

 var clipboard = new ClipboardJS('.copy_cut');

clipboard.on('success', function(e) {
    console.log(e);
});

clipboard.on('error', function(e) {
    console.log(e);
});