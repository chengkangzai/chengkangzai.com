# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a personal portfolio website built with Laravel 11 and Filament 3 admin panel. The site showcases projects with multilingual support (English, Chinese, Malay) and includes an admin interface for content management.

## Architecture

- **Backend**: Laravel 11 with PHP 8.2+
- **Admin Panel**: Filament 3 for project management
- **Frontend Assets**: Vite with Tailwind CSS
- **Database**: Supports multiple databases via Laravel's Eloquent ORM
- **Media Management**: Spatie Media Library for file uploads
- **Localization**: Spatie Translatable package with Filament translation manager
- **Testing**: Pest PHP testing framework

## Core Models and Structure

- **Project Model** (`app/Models/Project.php`): Main content model with multilingual descriptions, media attachments, tags, and soft deletes
- **Filament Resources** (`app/Filament/Resources/`): Admin interface definitions for managing projects
- **User Model** (`app/Models/User.php`): Custom FilamentUser interface implementation for admin access

## Development Commands

### Laravel/PHP Commands
```bash
# Development server
php artisan serve

# Database migrations
php artisan migrate
php artisan migrate:fresh --seed

# Code formatting (Laravel Pint)
./vendor/bin/pint

# Testing (Pest)
./vendor/bin/pest
```

### Frontend Commands
```bash
# Development build with hot reload
npm run dev

# Production build
npm run build
```

### Key Artisan Commands
```bash
# Filament user creation
php artisan make:filament-user

# Clear application caches
php artisan optimize:clear

# Generate application key
php artisan key:generate
```

## Filament Admin Configuration

- **Panel Path**: `/admin`
- **Authentication**: Required for admin access
- **Theme**: Custom Vite theme at `resources/css/filament/admin/theme.css`
- **Supported Locales**: English (en), Chinese (zh), Malay (ms)
- **Plugins**: 
  - Spatie Laravel Translatable Plugin
  - Filament Chained Translation Manager

## Project-Specific Features

- **Multilingual Content**: Project descriptions support translations in 3 languages
- **Media Management**: Projects have thumbnail images with responsive image generation
- **Tagging System**: Projects use Spatie Tags for categorization
- **SEO Integration**: RalphJSmit Laravel SEO package for meta management
- **Resume Upload**: Custom Filament page for resume management

## File Structure Notes

- **Controllers**: Located in `app/Http/Controllers/` - includes locale switching and public index
- **Filament Resources**: All admin functionality in `app/Filament/`
- **Views**: Blade templates in `resources/views/` with multi-language support
- **Public Assets**: Built assets served from `public/build/`
- **Storage**: Resume and media files in `storage/app/public/`

## Testing Configuration

- **Framework**: Pest PHP with Laravel plugin
- **Test Environment**: Configured in `phpunit.xml` with array drivers for speed
- **Test Structure**: Feature tests in `tests/Feature/`, Unit tests in `tests/Unit/`