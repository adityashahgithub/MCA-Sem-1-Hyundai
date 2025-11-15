# Hyundai Website - India Market

A modern, responsive website for Hyundai Motor India, built with pure HTML, CSS, and JavaScript.

## 🚀 Project Overview

This project represents an original Hyundai-themed website inspired by the Indian market. It features a clean, professional UI/UX with smooth animations, transitions, and a fully responsive design that works seamlessly across all devices.

## 📁 Project Structure

```
hyundai_website/
│
├── index.html             # Main homepage
├── models.html            # Extended models listing
├── model-detail.html      # Detailed model showcase
├── ev.html                # Electric vehicle hub
├── services.html          # Service & maintenance programs
├── offers.html            # Seasonal offers & finance options
├── dealers.html           # Dealer locator
├── careers.html           # Careers with Hyundai
├── contact.html           # Dedicated contact center
├── faqs.html              # Frequently asked questions
├── news.html              # Newsroom & media
├── gallery.html           # Visual gallery
├── about.html             # Brand story
├── privacy.html           # Privacy policy
├── 404.html               # Error page
├── css/
│   ├── global.css         # Theme variables, layout, shared components
│   └── pages/             # Page-specific styles
│       ├── index.css
│       ├── models.css
│       ├── model-detail.css
│       ├── ev.css
│       ├── services.css
│       ├── offers.css
│       ├── dealers.css
│       ├── careers.css
│       ├── contact.css
│       ├── faqs.css
│       ├── news.css
│       ├── gallery.css
│       ├── about.css
│       ├── privacy.css
│       └── error.css
├── js/
│   ├── global.js          # Shared interactivity & utilities
│   └── pages/             # Page-specific scripts
│       ├── index.js
│       ├── models.js
│       ├── model-detail.js
│       ├── ev.js
│       ├── services.js
│       ├── offers.js
│       ├── dealers.js
│       ├── careers.js
│       ├── contact.js
│       ├── faqs.js
│       ├── news.js
│       ├── gallery.js
│       ├── about.js
│       └── privacy.js
├── assets/
│   ├── logo.svg           # Hyundai logo
│   ├── favicon.svg        # Site favicon
│   └── images/
│       ├── cars/          # Car model SVGs
│       ├── backgrounds/   # Background images
│       └── icons/         # Feature icons
├── .gitignore
└── README.md
```

## 🎨 Design Features

### Color Theme
- **Primary Blue**: `#0D4F8B`
- **Accent Blue**: `#00A5FF`
- **Light Gray**: `#F4F6F8`
- **Dark**: `#111827`

### Key Features
- ✅ Fully responsive design (1200px, 992px, 768px, 576px breakpoints)
- ✅ Smooth scroll animations using IntersectionObserver
- ✅ Auto-sliding hero section with fade transitions
- ✅ Sticky navigation with blur effect
- ✅ Mobile-friendly hamburger menu
- ✅ Hover animations on cards and buttons
- ✅ Back-to-top button
- ✅ Form validation and submission handling

## 🛠️ Technology Stack

- **HTML5** - Semantic markup
- **CSS3** - Custom properties, Flexbox, Grid, Animations
- **JavaScript (Vanilla)** - Shared global utilities + per-page scripts

## 📋 Setup Instructions

### Installation Steps

1. **Clone or download the project**
   ```bash
   cd hyundai_website
   ```

2. **Serve the static files**
   - Open `index.html` directly in your browser, or
   - Use any static server (e.g., `npx serve`, `python -m http.server 8000`)

3. **Access the website**
   - Open your browser and navigate to the served URL (default `http://localhost:8000/` when using Python)

4. **Form Interactions**
   - The contact form performs client-side validation and shows a success message without server submission

## 📱 Responsive Breakpoints

- **Large Desktops**: 1200px and above
- **Tablets**: 992px and below
- **Tablets Portrait**: 768px and below
- **Mobile**: 576px and below

## 🎯 Page Sections

1. **Navigation Bar** - Sticky header with smooth scroll links
2. **Hero Section** - Auto-sliding carousel with call-to-action buttons
3. **Featured Models** - Grid of bestseller cars with hover effects
4. **Why Hyundai** - Three feature cards (Innovation, Safety, Sustainability)
5. **Offers Preview** - Animated banner with special offers
6. **Contact Section** - Contact form with validation
7. **Footer** - Social links and back-to-top button

## 🔧 Customization

### Changing Colors
Edit CSS variables in `css/style.css`:
```css
:root {
    --primary: #0D4F8B;
    --accent: #00A5FF;
    --light: #F4F6F8;
    --dark: #111827;
}
```

### Adding New Car Models
1. Add SVG file to `assets/images/cars/`
2. Update `index.html` with new model card
3. Follow the existing card structure

### Modifying Animations
- Scroll reveal: Edit `initScrollReveal()` in `js/main.js`
- Hero slider: Edit `initHeroSlider()` in `js/main.js`
- CSS animations: Edit keyframes in `css/style.css`

## 📝 Form Handling

The contact form now validates inputs entirely on the client and displays a confirmation message. No data is sent to a server.

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 📄 License

This project is created for educational purposes.

## 👨‍💻 Credits

**Created by MCA Student, Dharmsinh Desai University**

---

## 🐛 Troubleshooting

### Images not loading
- Ensure all asset paths are correct
- Check file permissions on the server

### Animations not working
- Ensure JavaScript is enabled in your browser
- Check browser console for errors

---

**Note**: This is a demonstration website inspired by Hyundai's design language. It is not affiliated with or endorsed by Hyundai Motor Company.

