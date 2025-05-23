# PyroCMS Installation Guide

This guide will walk you through the step-by-step process of installing PyroCMS, a powerful PHP CMS built on Laravel.

## Prerequisites

- PHP 7.4 or higher
- MySQL 5.7+ or MariaDB 10.2+
- Composer
- Web server (Apache/Nginx)
- PHP extensions: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON, GD

## Installation Steps

### 1. Install via Composer

```bash
composer create-project pyrocms/pyrocms
```

### 2. Run the Installer

#### Option A: Web Installer

1. Point your web server to the public directory
2. Visit your site in a browser
3. Follow the on-screen installation wizard

#### Option B: Command Line Installer

```bash
php artisan install
```

### 3. Publish add on
```bash
php artisan addon:publish
```