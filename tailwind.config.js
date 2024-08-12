/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",  // Menambahkan file blade.php
    "./resources/**/*.js",         // Menambahkan file JavaScript
    "./resources/**/*.vue",        // Menambahkan file Vue.js
  ],
  theme: {
    extend: {
      // Tambahkan kustomisasi tema jika diperlukan di sini
    },
  },
  plugins: [
    // Tambahkan plugin jika diperlukan di sini
  ],
}

