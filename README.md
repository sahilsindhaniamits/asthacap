# Aastha Capital Finance

A modern, professional finance website built with Laravel, Tailwind CSS, and Alpine.js featuring a glassmorphism fintech design.

## Tech Stack

- **Backend:** Laravel 12 (PHP 8.4)
- **Frontend:** Tailwind CSS v4 + Alpine.js
- **Build Tool:** Vite
- **Design:** Glassmorphism, gradient cards, modern fintech UI

## Pages

| Page | Route | Description |
|------|-------|-------------|
| Homepage | `/` | Hero, features, loan cards, testimonials, CTA |
| About Us | `/about` | Company story, mission/vision, values, team |
| All Loans | `/loans` | Overview of all 6 loan types with comparison table |
| Personal Loan | `/loans/personal-loan` | Detailed personal loan page |
| Business Loan | `/loans/business-loan` | Detailed business loan page |
| Car Loan | `/loans/car-loan` | Detailed car loan page |
| Education Loan | `/loans/education-loan` | Detailed education loan page |
| Unsecured Loan | `/loans/unsecured-loan` | Detailed unsecured loan page |
| Home Loan | `/loans/home-loan` | Detailed home loan page |
| EMI Calculator | `/loan-calculator` | Interactive EMI calculator |
| Contact Us | `/contact` | Contact form + info |
| Privacy Policy | `/privacy-policy` | Privacy policy |
| Terms & Conditions | `/terms-and-conditions` | Terms and conditions |

## Setup Instructions

```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Build frontend assets
npm run build

# Start development server
php artisan serve
```

## Development

```bash
# Watch for changes during development
npm run dev
```

## Deployment (Hostinger)

1. Upload all files to your Hostinger `public_html` directory
2. Move the `public` folder contents to `public_html`
3. Update `index.php` paths accordingly
4. Run `composer install --no-dev` on server
5. Run `npm run build` locally and upload `public/build` folder
6. Set up `.env` with your database credentials
7. Run `php artisan migrate` if using database features

## Design Features

- Glassmorphism UI (frosted glass effects)
- Gradient cards with hover animations
- Responsive design (mobile-first)
- Dark theme with colorful accents
- Smooth animations and transitions
- Interactive EMI calculator with Alpine.js
- FAQ accordions on loan pages
- Professional fintech aesthetic (Stripe/Wise inspired)

## License

Proprietary - Aastha Capital Finance
