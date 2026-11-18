# ZSD Custom Theme

A lightweight, RTL-first WordPress theme foundation for [zsdcp.ir](https://zsdcp.ir/).

## Current status

**Foundation only — not production-ready.** This repository is being developed separately from the live store. Do not activate it on production yet.

## Principles

- Premium black-and-gold visual identity.
- Responsive layouts for mobile, tablet, and desktop.
- Centralized CSS design tokens and reusable components.
- WooCommerce presentation support.
- Keep business logic out of the theme.
- Preserve checkout, payment, order forms, Telegram notifications, price synchronization, SEO, and account workflows through their existing plugins until each dependency is audited and safely migrated.

## Important compatibility notes

The live store currently relies on WoodMart, Elementor, Pinova, WooCommerce, and custom Code Snippets. The live homepage and checkout have custom behavior. This starter does not recreate those features yet.

Never remove WoodMart, Elementor, Pinova, Code Snippets, or payment-related plugins until the replacement has been built, tested on staging, and explicitly approved.

## Planned work

1. Audit the live homepage, product, category, cart, checkout, account, and utility pages.
2. Build the page templates and WooCommerce templates needed to replace the current presentation.
3. Recreate the current home page content and preserve URLs and SEO metadata.
4. Audit order-form fields by game and secure sensitive customer data.
5. Test payment, SMS, Telegram, price synchronization, mobile app/API, and all responsive breakpoints on staging.
6. Prepare a rollback plan and only then schedule a controlled production switch.

## Theme structure

- `style.css`: WordPress theme metadata.
- `functions.php`: theme supports, menus, and asset loading.
- `header.php`, `footer.php`: shared site shell.
- `front-page.php`, `page.php`, `index.php`: initial templates.
- `assets/css/theme.css`: design tokens and responsive base styles.
- `assets/js/theme.js`: small accessible navigation behavior.

## Installation

Package the repository contents as a ZIP and install through **Appearance → Themes → Add New → Upload Theme** only on a staging WordPress site. Do not install or activate on the live store until testing is complete.
