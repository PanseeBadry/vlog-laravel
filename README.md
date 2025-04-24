<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# 🎥 Laravel Vlog Project

A simple blog-style web application built with **Laravel**. Users can register, login, and manage personal blog posts. This project uses **Laravel Breeze** for authentication and **Bootstrap 5** for a modern, clean UI inspired by platforms like Twitter and Facebook.

---

## 🔧 Features

- ✅ Authentication using Laravel Breeze (Login, Register, Logout)
- ✍️ Create, edit, and delete blog posts
- 🗂️ Display all posts with title, body, and author's name
- 🎨 Stylish responsive design with Bootstrap 5
- 🔐 Auth-based access control to protect post actions
- 🧭 Navigation bar with links and user identity

---

## 🚀 Getting Started

Follow these steps to set up the project locally:

```bash
git clone https://github.com/yourusername/vlog-project.git
cd vlog-project
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
