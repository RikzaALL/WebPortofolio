# Rikza Portfolio

Personal portfolio website built with **Laravel 12**, **Tailwind CSS v4**, **Alpine.js**, and **Vite**.

[![Built with Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?logo=laravel&logoColor=white)](https://laravel.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-v4-06B6D4?logo=tailwindcss&logoColor=white)](https://tailwindcss.com)
[![Alpine.js](https://img.shields.io/badge/Alpine.js-3-8BC0D0?logo=alpine.js&logoColor=white)](https://alpinejs.dev)
[![Vite](https://img.shields.io/badge/Vite-6-646CFF?logo=vite&logoColor=white)](https://vitejs.dev)

---

## Features

- **Dark-themed UI** with glassmorphism design
- **Auto-scrolling carousels** for projects and testimonials (Alpine.js)
- **Real GitHub activity** via API + contribution graph
- **Animated sections** with IntersectionObserver scroll reveals
- **Responsive** — mobile-first with Tailwind CSS
- **SEO-optimized** with proper meta tags and Open Graph

## Sections

| Section     | Description |
|-------------|-------------|
| Hero        | Full-screen intro with typing effect and CTA |
| Projects    | Featured work in a looping carousel |
| Skills      | Tech stack displayed with brand icons |
| Testimonials | Auto-rotating client feedback |
| About       | Bio, experience, and personal background |
| GitHub      | Live repos + contribution chart |
| Contact     | Contact form and social links |

## Tech Stack

**Backend:** Laravel 11, PHP 8.3  
**Frontend:** Tailwind CSS v4, Alpine.js 3  
**Build:** Vite 6  
**Deployment:** Docker, Cloudflare  

## Getting Started

```bash
git clone https://github.com/RikzaALL/portofolio.git
cd portofolio
composer install
npm install
cp .env.example .env
php artisan key:generate
npm run build
php artisan serve
```

## License

MIT — see [LICENSE](LICENSE) for details.

---

<p align="center">Built with ♥ by <a href="https://github.com/RikzaALL">Rikza</a></p>
