# NGINX Cache Bypass for WooCommerce

**Plugin URI:** https://github.com/Matt-Welland  
**Version:** 1.0.0  
**Author:** Matt Welland  
**Author URI:** https://github.com/Matt-Welland  

---

## Description

This lightweight plugin prevents NGINX caching for WooCommerce pages to ensure stock levels, cart contents, and checkout functionality remain accurate.

Many NGINX caching setups can accidentally serve cached product, cart, or checkout pages, which may cause issues such as:

- Showing incorrect stock availability  
- Displaying outdated cart totals  
- Serving stale pricing or product information  

This plugin ensures that all WooCommerce product, cart, checkout, and account pages bypass server caching, while still allowing other pages to remain cached for performance.

Note that this plugin does not handle updates so for security, you may need to update this yourself.

---

## Features

- Bypasses NGINX caching for:  
  - Product pages  
  - Cart page  
  - Checkout page  
  - My Account pages
- Super-lightweight and efficient  
- Compatible with most NGINX caching setups  
- No configuration required — just install and activate  

---

## Installation

1. Upload the plugin folder to your `/wp-content/plugins/` directory, or install via GitHub.  
2. Activate the plugin through the **Plugins** menu in WordPress.  
3. No further configuration is required.  

---

## Notes

- This plugin does not disable caching for other pages (e.g., homepage, blog posts, category pages) — they remain cached for improved performance.  
- Designed to work with NGINX caching setups that respect the `DONOTCACHEPAGE` constant.  