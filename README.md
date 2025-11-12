# Hyundai Website - India Market

A modern, responsive website for Hyundai Motor India, built with pure HTML, CSS, JavaScript, and minimal PHP.

## 🚀 Project Overview

This project represents an original Hyundai-themed website inspired by the Indian market. It features a clean, professional UI/UX with smooth animations, transitions, and a fully responsive design that works seamlessly across all devices.

## 📁 Project Structure

```
hyundai_website/
│
├── index.php              # Main homepage
├── css/
│   └── style.css          # Main stylesheet with animations
├── js/
│   └── main.js            # JavaScript for interactions
├── includes/
│   ├── header.php         # Navigation header
│   └── footer.php         # Footer with social links
├── php/
│   └── form_handler.php   # Form submission handler
├── assets/
│   ├── logo.svg           # Hyundai logo
│   ├── favicon.svg        # Site favicon
│   └── images/
│       ├── cars/          # Car model SVGs
│       ├── backgrounds/   # Background images
│       └── icons/         # Feature icons
├── data/                  # Form submissions (auto-created)
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
- **JavaScript (Vanilla)** - No frameworks or libraries
- **PHP** - Minimal includes and form handling

## 📋 Setup Instructions

### Prerequisites
- XAMPP, WAMP, MAMP, or any local PHP server
- Modern web browser (Chrome, Firefox, Safari, Edge)

### Installation Steps

1. **Clone or download the project**
   ```bash
   cd hyundai_website
   ```

2. **Start your local server**
   - **XAMPP**: Place the project in `htdocs/` folder and start Apache
   - **WAMP**: Place the project in `www/` folder and start Apache
   - **MAMP**: Place the project in `htdocs/` folder and start Apache
   - **PHP Built-in Server**:
     ```bash
     php -S localhost:8000
     ```

3. **Access the website**
   - Open your browser and navigate to:
     - `http://localhost/hyundai_website/` (XAMPP/WAMP)
     - `http://localhost:8000/` (PHP built-in server)

4. **Form Submissions**
   - Form data is stored in `data/submissions.txt`
   - The `data/` folder will be created automatically on first submission

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
2. Update `index.php` with new model card
3. Follow the existing card structure

### Modifying Animations
- Scroll reveal: Edit `initScrollReveal()` in `js/main.js`
- Hero slider: Edit `initHeroSlider()` in `js/main.js`
- CSS animations: Edit keyframes in `css/style.css`

## 📝 Form Handling

The contact form submits to `php/form_handler.php` which:
- Validates all required fields
- Sanitizes user input
- Stores submissions in `data/submissions.txt`
- Returns JSON response

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

### Form not submitting
- Ensure PHP is enabled on your server
- Check that `data/` folder has write permissions

### Animations not working
- Ensure JavaScript is enabled in your browser
- Check browser console for errors

---

**Note**: This is a demonstration website inspired by Hyundai's design language. It is not affiliated with or endorsed by Hyundai Motor Company.

