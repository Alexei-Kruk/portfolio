# Portfolio (Nuxt 3 + Laravel API)

## About the Project

Multi-page portfolio with a modern stack:
- **Frontend:** Nuxt 3 (Vue 3, TypeScript, Composition API, SCSS, Axios, Pinia)
- **Backend:** Laravel 12 (REST API, Filament Admin, PostgreSQL)
- **DevOps:** Docker, CI/CD

The project demonstrates:
- Responsive layout and modern UI
- Dynamic data loading from API (resume, portfolio, contacts, etc.)
- Convenient admin panel for content management
- SSR/CSR, loading optimization, loaders
- Clean architecture, strict typing, best practices

---

## Quick Start

### 1. Clone and Run
```bash
# Clone the repository
https://github.com/Alexei-Kruk/portfolio.git

# Go to the frontend folder and install dependencies
cd client
npm install

# Start the frontend
npm run dev

# For backend (Laravel):
cd ../server
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

### 2. Proxy Setup (Vite)
API proxy for Laravel backend is configured in `client/nuxt.config.ts`.

---

## Structure
- `client/` — Nuxt 3 frontend
- `server/` — Laravel backend (API, admin panel)

---

## Main Pages
- `/` — Home (Hero, contacts, social links)
- `/about` — About Me
- `/resume` — Resume (experience, skills, stack, hobbies)
- `/portfolio` — Projects

---

## Testing
- Unit and integration tests can be written with Vitest
- E2E — Cypress/Playwright (optional)

---

## Development & Support
- All data (experience, projects, social links, etc.) is managed via Filament Admin
- SSR/CSR and fast loading use useAsyncData, loaders
- Code is strictly typed (TypeScript)

---

## Contacts
- [Telegram: @AlexeiKruk](https://t.me/AlexeiKruk)
- [Email: alexei.kruk.dev@gmail.com](mailto:alexei.kruk.dev@gmail.com)

---

## License
MIT
