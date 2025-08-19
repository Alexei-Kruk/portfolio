# Portfolio (Nuxt 3 + Laravel API)

## О проекте

Многостраничное портфолио с современным стеком:
- **Frontend:** Nuxt 3 (Vue 3, TypeScript, Composition API, SCSS, Axios, Pinia)
- **Backend:** Laravel 12 (REST API, Filament Admin, PostgreSQL)
- **DevOps:** Docker, CI/CD

Проект демонстрирует:
- Адаптивную верстку и современный UI
- Динамическую загрузку данных с API (резюме, портфолио, контакты и др.)
- Удобную админку для управления контентом
- SSR/CSR, оптимизацию загрузки, лоадеры
- Чистую архитектуру, строгую типизацию, best practices

---

## Быстрый старт

### 1. Клонирование и запуск
```bash
# Клонируйте репозиторий
https://github.com/Alexei-Kruk/portfolio.git

# Перейдите в папку фронта и установите зависимости
cd client
npm install

# Запустите фронтенд
npm run dev

# Для бэкенда (Laravel):
cd ../server
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

### 2. Настройка прокси (Vite)
В `client/nuxt.config.ts` настроен proxy для API-запросов на Laravel backend.

---

## Структура
- `client/` — Nuxt 3 frontend
- `server/` — Laravel backend (API, админка)

---

## Основные страницы
- `/` — Главная (Hero, контакты, соцсети)
- `/about` — Обо мне
- `/resume` — Резюме (опыт, навыки, стек, хобби)
- `/portfolio` — Проекты

---

## Тестирование
- Юнит-тесты и интеграционные тесты можно писать на Vitest
- E2E — Cypress/Playwright (по желанию)

---

## Разработка и поддержка
- Все данные (опыт, проекты, соцсети и др.) редактируются через Filament Admin
- Для SSR/CSR и быстрой загрузки используются useAsyncData, лоадеры
- Код покрыт строгой типизацией (TypeScript)

---

## Контакты
- [Telegram](https://t.me/yourusername)
- [Email](mailto:your@email.com)

---

## Лицензия
MIT
