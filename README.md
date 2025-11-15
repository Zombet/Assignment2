# How to run locally


1. Install XAMPP (or similar Apache+PHP stack).
2. Put the project folder inside `xampp/htdocs/your-app` (or the equivalent web root).
3. Start Apache from XAMPP control panel.
4. Open `http://localhost/Assignment2/index.html` in the browser.


# How to host (free PHP-capable hosting)


Option A — 000webhost (free, PHP + file manager)
- Create an account at 000webhost.com.
- In the control panel, upload the project files (index.html, css/, js/, submit.php) into `public_html` using their file manager, or use FTP.
- Ensure the `uploads` directory is writable (create it and set permission 755).
- Visit the provided domain (e.g., `yourname.000webhostapp.com/index.html`).


Option B — Any cPanel / shared host
- Upload files via File Manager or FTP to `public_html`.
- Make sure PHP version >= 7.2 is enabled.


Notes:
- If you host on platforms that do not support PHP (like Netlify or Vercel), you must move the server logic to a serverless function or use a PHP-compatible host.
- For assignments, providing a live URL + zipped source is usually sufficient.