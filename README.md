# Sky-Painting

Welcome to Sky-Painting! This is a static business site built with HTML, CSS, and Bootstrap for a painting services company, including a working PHP contact form.

## Live URL : https://sky-painting.netlify.app

```bash
https://sky-painting.netlify.app
```

## Table of Contents

- [Project Overview](#project-overview)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Folder Structure](#folder-structure)
- [Installation Guide](#installation-guide)
- [Usage Instructions](#usage-instructions)
- [Author](#author)

## Project Overview

Sky-Painting is a static marketing site for a painting company, with a home page and a thank-you page, backed by a PHP mail handler for the contact form.

## Features

- **Multi-Page Layout:** Home (`index.html`) and thank-you (`thankyou.html`) pages.
- **Contact Form Backend:** `mail.php` handles contact form submissions server-side.
- **Bootstrap Components:** Responsive grid and UI components from Bootstrap.
- **Icon Support:** Font Awesome icons used throughout the site.

## Tech Stack

- **Frontend:** HTML5, CSS3, Bootstrap
- **Backend:** PHP (contact form processing)
- **Icons:** Font Awesome

## Folder Structure

```bash
Sky-Painting/
├── css/              # Stylesheets (Bootstrap + custom)
├── font-awesome/      # Font Awesome icon library
├── fonts/             # Custom web fonts
├── jquery/            # jQuery library
├── js/                # JavaScript used by Bootstrap/UI components
├── index.html         # Home page markup
├── thankyou.html       # Post-submission thank-you page
└── mail.php           # PHP handler for the contact form
```

## Installation Guide

### Prerequisites

- A modern web browser
- A PHP-capable local server (e.g. PHP's built-in server) to exercise the contact form

### Steps

1. Clone the repository:

   ```bash
   git clone https://github.com/rajesh-ranjan-git/Sky-Painting.git
   cd Sky-Painting
   ```

2. To just view the page, open `index.html` directly in your browser.

3. To test the contact form, serve the folder with PHP's built-in server:

   ```bash
   php -S localhost:8000
   ```

## Usage Instructions

1. Open `index.html` in your browser to view the home page.
2. Submit the contact form to trigger the PHP mail handler and view the thank-you page.

## Author

- **Rajesh Ranjan** — [GitHub @rajesh-ranjan-git](https://github.com/rajesh-ranjan-git)

---
