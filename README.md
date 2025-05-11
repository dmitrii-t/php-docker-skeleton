# PHP Docker Development Skeleton

## Overview

This repository provides a minimal PHP development environment using Docker.
Development tools are isolated using [bamarni/composer-bin-plugin](https://github.com/bamarni/composer-bin-plugin), ensuring production dependencies remain unaffected by tooling requirements.

## Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/dmitrii-t/php-docker-skeleton.git my-project
cd my-project
```

> 📌 After cloning this repository, please ensure you update the origin remote to point to your own repository if you intend to push changes

### 2. Build and start the Docker environment

```bash
just up
```

This command builds the PHP Docker image and launches the project using Docker Compose.

### 3. Install Composer dependencies

```bash
just install-all-composer
```

Installs all development tools using isolated Composer bins.

---

## Tools & Packages Included

### [Just](https://github.com/casey/just)

A handy alternative to `make`, allowing you to define and run project-specific commands.
It supports argument passing and more user-friendly syntax.

> 📌 Install it from the [official repository](https://github.com/casey/just) based on your OS.

---

### [Composer Dependency Analyser](https://packagist.org/packages/shipmonk/composer-dependency-analyser)

Analyzes your codebase and `composer.json` to detect unused dependencies and enforce best practices.

---

### [Psalm](https://packagist.org/packages/vimeo/psalm)

A powerful static analysis tool for PHP.
Configured with the strictest level for maximum safety and code quality.

---

### [PHP CS Fixer](https://packagist.org/packages/friendsofphp/php-cs-fixer)

Automatically fixes code style issues.
Preconfigured with personal preferences to enforce consistent formatting.

---

### [PHPUnit](https://packagist.org/packages/phpunit/phpunit)

The standard testing framework for PHP, ready to use.

---

## Optional Tools

### [PHPUnit Snapshot Assertions](https://packagist.org/packages/spatie/phpunit-snapshot-assertions)

Adds snapshot testing to PHPUnit.
Install with:

```bash
just composer bin phpunit require spatie/phpunit-snapshot-assertions --no-dev
```

---

### [Rector](https://packagist.org/packages/rector/rector)

Automated code refactoring tool for PHP.
Install with:

```bash
just composer bin rector require rector/rector --no-dev
```

---

### [Infection](https://packagist.org/packages/infection/infection)

A mutation testing tool to measure your tests' effectiveness.
Install with:

```bash
just composer bin infection require infection/infection --no-dev
```