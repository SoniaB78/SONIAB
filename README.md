# SONIAB
My personnal training website — Developer Portfolio Website

## Overview

SONIAB is a custom-built portfolio website developed from scratch to demonstrate modern web development practices and technical skills.

The goal of this project is to build a secure, maintainable and scalable website using a lightweight MVC architecture without relying on heavy frameworks.

This repository serves both as a personal website and as a technical showcase.

---

## Technical Stack

- HTML5
- CSS3
- JavaScript
- PHP (custom MVC architecture)
- MySQL
- Bootstrap
- Apache (.htaccess routing)

Additional focus areas:

- SEO optimization
- AI-friendly content structure
- Web accessibility (WCAG principles)
- Secure coding practices

---

## Architecture

The project follows a lightweight custom MVC architecture designed for scalability and maintainability.

SONIAB/  
│  
├── app/  
│  ├── controllers/ # Application logic (controllers)  
│  ├── models/ # Database interaction  
│  ├── views/ # UI layer  
│  │  ├── layouts/ # Global templates  
│  │  ├── pages/ # Page views  
│  │  └── partials/ # Reusable components  
│  └── core/ # Core system (Router, Controller base, etc.)  
│  
├── config/ # Configuration files  
│  
├── public/ # Public entry point  
│  ├── assets/ # CSS, JS, images  
│  ├── index.php # Front controller  
│  └── .htaccess # URL rewriting  
│  
├── storage/ # Logs and cache  
│  
├── .env # Environment variables (not versioned)  
├── .gitignore  
└── README.md  

Key principles:

- Single entry point (`public/index.php`)
- Custom routing system (via `.htaccess`)
- MVC separation of concerns
- Secure handling of environment variables
- Scalable and maintainable structure

---

## Security

- Sensitive data is stored in a `.env` file (not committed)
- Only the `/public` directory is accessible from the browser
- Database connection uses PDO with exception handling

---

## Features

- Custom PHP MVC architecture
- Clean URL routing via `.htaccess`
- Responsive layout using Bootstrap
- SEO optimized page structure
- Accessible navigation and semantics
- Modular and maintainable codebase

Planned features:

- Dynamic project pages
- (Blog section)
- Contact form with validation
- Dynamic sitemap generation
- Structured data for search engines and AI systems

---

## Project Goals

This project aims to demonstrate:

- frontend integration skills
- backend architecture understanding
- accessibility best practices
- SEO and structured data implementation
- scalable code organization

---

## Roadmap

- [ ] Implement Router system
- [x] Create base Controller class
- [x] Implement MVC rendering system
- [x] Setup database connection
- [ ] Add project portfolio module
- [ ] Implement accessibility improvements
- [ ] Generate dynamic sitemap
- [ ] Improve SEO & structured data

---

## Author

Sonia B.

Web Integrator & Support Specialist  
Passionate about accessible, performant and well-structured web development.