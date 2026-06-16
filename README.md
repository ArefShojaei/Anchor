# 📦 Anchor - PHP Local CDN Manager

[![PHP Version](https://img.shields.io/badge/PHP-%5E7.0-blue.svg)](https://php.net)
[![License](https://img.shields.io/badge/license-MIT-green.svg)](LICENSE)
[![GitHub](https://img.shields.io/badge/github-Anchor-black?logo=github)](https://github.com/ArefShojaei/Anchor)

A lightweight and powerful **Local CDN Manager** built with PHP.
Anchor allows you to download, manage, and serve frontend libraries locally with a simple CLI interface.

Perfect for developers who want a private CDN server without relying on external providers.

<img width="1440" alt="Cover" src="https://github.com/user-attachments/assets/076a955a-0ce3-4afa-b7e5-7e8bffb57769" />

---

## ✨ Features

* 📦 **Package Management** - Store and manage frontend libraries locally
* 🚀 **One Click Installation** - Download multiple CDN packages using a single command
* 🖥️ **Built-in HTTP Server** - Serve your local CDN directly from CLI
* 📝 **Package List Support** - Manage packages using a simple text configuration file
* ⚡ **Fast & Lightweight** - Pure PHP implementation with minimal dependencies
* 🛠️ **CLI Interface** - Simple and developer-friendly commands
* 🔧 **Custom Host & Port** - Configure your local server easily

---

# 📥 Installation

## Requirements

* PHP 7.0 or higher
* Composer (recommended)
* Bash environment (optional for bulk downloads)

---

## Using Composer

```bash
composer create-project arefshojaei/anchor my-cdn
```

Move into the project directory:

```bash
cd my-cdn
```

---

## Clone Repository

```bash
git clone https://github.com/ArefShojaei/Anchor.git
```

Then:

```bash
cd Anchor
composer install
```

---

# 📋 CDN Package List

Anchor supports bulk package installation using a package list.

Location:

```txt
public/packages.txt
```

File format:

```txt
# [Category]
[package] [version] [url]
```

Example:

```txt
# CSS Frameworks
bootstrap 5.3.8 https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css

# JavaScript Libraries
jquery 3.7.1 https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js
```

---

## 🚀 One Click Package Download

If your environment supports Bash, run:

```bash
bash scripts/downloader.sh
```

This script reads `packages.txt` and downloads all defined packages automatically.

---

# 🛠 CLI Commands

## Add a new CDN package

Pattern:

```txt
php bin/cli cdn add [package] [version] [url]
```

Example:

```bash
php bin/cli cdn add bootstrap 5.3.8 https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css
```

---

## Start Local CDN Server

Basic:

```bash
php bin/cli serve
```

Custom port:

```bash
php bin/cli serve --port:3000
```

Custom host:

```bash
php bin/cli serve --host:0.0.0.0
```

Custom host and port:

```bash
php bin/cli serve --host:0.0.0.0 --port:3000
```

---

After running the server, open your browser:

```txt
http://[host]:[port]
```

Your local packages and files inside the `public/` directory will be available through this address.

---

# 📂 Project Structure

```txt
Anchor/
│
├── bin/
│   └── cli                 # CLI application
│
├── public/
│   ├── packages.txt        # CDN package definitions
│   └── packages/           # Downloaded libraries
│
├── scripts/
│   └── downloader.sh       # Bulk package downloader
│
├── src/                    # Core application source
│
├── composer.json
└── README.md
```

---

# 💡 Example Workflow

### 1. Add a package

```bash
php bin/cli cdn add alpinejs 3.14.0 https://cdn.jsdelivr.net/npm/alpinejs@3.14.0/dist/cdn.min.js
```

### 2. Start the server

```bash
php bin/cli serve --port:8080
```

### 3. Use your local CDN

```html
<script src="http://localhost:8080/packages/alpinejs/3.14.0/cdn.min.js"></script>
```

---

# 🔥 Why Anchor?

Using a local CDN gives you:

* Faster development environment
* Offline availability
* Full control over package versions
* No dependency on third-party CDN availability
* Better privacy for internal applications

---

# 🤝 Contributing

Contributions are welcome!

1. Fork the repository
2. Create a new branch

```bash
git checkout -b feature/amazing-feature
```

3. Commit your changes

```bash
git commit -m "Add amazing feature"
```

4. Push your branch

```bash
git push origin feature/amazing-feature
```

5. Open a Pull Request

---

# 👨‍💻 Author

**Aref Shojaei**

* GitHub: https://github.com/ArefShojaei
* Email: [arefshojaei82@gmail.com](mailto:arefshojaei82@gmail.com)

---

# ⭐ Show Your Support

If this project helps you, consider giving it a **Star** on GitHub.

It motivates further development and improvements.
