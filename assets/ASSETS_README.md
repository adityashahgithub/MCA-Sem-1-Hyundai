# Assets Directory - Image Requirements & Guidelines

This document outlines the required assets for the Hyundai website project and provides guidelines for image optimization and organization.

## 📁 Directory Structure

```
assets/
├── favicon.svg (or favicon.ico)
├── logo.svg (or logo.png)
└── images/
    ├── cars/
    │   ├── suv/
    │   │   ├── creta.jpg (or .webp, .png)
    │   │   ├── venue.jpg
    │   │   └── tucson.jpg
    │   ├── sedan/
    │   │   ├── verna.jpg
    │   │   └── aura.jpg
    │   ├── hatchback/
    │   │   ├── i20.jpg
    │   │   └── grand-i10-nios.jpg
    │   └── electric/
    │       ├── kona-electric.jpg
    │       └── ioniq-5.jpg
    ├── backgrounds/
    │   ├── hero/
    │   │   ├── hero-1.jpg (1920x1080 recommended)
    │   │   ├── hero-2.jpg
    │   │   └── hero-3.jpg
    │   └── section/
    │       └── offers-bg.jpg
    ├── icons/
    │   ├── features/
    │   │   ├── innovation.svg (or .png)
    │   │   ├── safety.svg
    │   │   └── sustainability.svg
    │   ├── ui/
    │   │   ├── arrow.svg
    │   │   └── chevron.svg
    │   └── social/
    │       ├── facebook.svg
    │       ├── twitter.svg
    │       ├── instagram.svg
    │       └── youtube.svg
    └── ui/
        ├── buttons/
        └── logos/
```

## 🚗 Car Images Requirements

### File Format
- **Preferred**: WebP (best compression, modern browsers)
- **Fallback**: JPG (universal support)
- **Alternative**: PNG (if transparency needed)

### Image Specifications

#### Car Images (for model cards)
- **Dimensions**: 800x600px (4:3 aspect ratio) or 1200x800px (3:2)
- **File Size**: < 200KB per image (optimized)
- **Format**: WebP or JPG
- **Quality**: 80-85% compression
- **Background**: White or transparent (preferred)
- **Orientation**: Side view or 3/4 angle showing the car clearly

#### Hero Background Images
- **Dimensions**: 1920x1080px (Full HD) or 2560x1440px (2K)
- **File Size**: < 500KB per image
- **Format**: WebP or JPG
- **Quality**: 75-80% compression
- **Content**: Hyundai cars in scenic/urban settings

### Naming Convention
- Use lowercase
- Separate words with hyphens
- Include model name: `creta.jpg`, `venue.jpg`, `verna.jpg`
- For variants: `creta-facelift.jpg`, `verna-2024.jpg`

## 🎨 Icon Requirements

### Feature Icons
- **Format**: SVG (preferred) or PNG
- **Size**: 80x80px viewport
- **Style**: Modern, minimalist, matches Hyundai brand
- **Colors**: Should work with both light and dark backgrounds

### UI Icons
- **Format**: SVG
- **Size**: 24x24px or 32x32px
- **Style**: Consistent line weight (2px recommended)

## 🖼️ Background Images

### Hero Section Backgrounds
- **Dimensions**: 1920x1080px minimum
- **Aspect Ratio**: 16:9
- **File Size**: < 500KB
- **Content**: 
  - Hero 1: Modern Hyundai car in urban setting
  - Hero 2: Technology/innovation theme
  - Hero 3: Sustainability/electric theme

### Section Backgrounds
- **Dimensions**: 1920x600px (for offers section)
- **File Size**: < 300KB
- **Style**: Subtle, not distracting from content

## 📐 Image Optimization Guidelines

### Tools for Optimization
1. **WebP Conversion**: Use `cwebp` or online tools like Squoosh
2. **JPG Optimization**: Use ImageOptim, TinyPNG, or similar
3. **SVG Optimization**: Use SVGO

### Compression Settings
- **WebP**: Quality 80-85%
- **JPG**: Quality 80-85%
- **PNG**: Use PNG-8 for icons, PNG-24 for photos with transparency

### Responsive Images
Consider creating multiple sizes:
- `creta-small.jpg` (400x300) - Mobile
- `creta-medium.jpg` (800x600) - Tablet
- `creta-large.jpg` (1200x900) - Desktop

## 🔍 Image Sources (Legal Considerations)

### Recommended Sources
1. **Official Hyundai Media**: Hyundai India press releases and media kits
2. **Stock Photos**: Unsplash, Pexels (with proper attribution if required)
3. **Custom Photography**: Original photos (best option)
4. **3D Renders**: If creating custom visuals

### Copyright Notes
- Ensure all images are properly licensed
- For educational/demo purposes, use royalty-free images
- Credit sources if required by license

## 📝 Current Image Mapping

### Homepage (index.html)
- `cars/suv/creta.png` (Hyundai Creta)
- `cars/suv/venue.png` (Hyundai Venue)
- `cars/hatchback/i20.png` (Hyundai i20)
- `cars/sedan/verna.png` (Hyundai Verna)
- `cars/suv/alcazar.png` (Hyundai Alcazar)

### Models Page (models.html)
- Additional models:
  - `cars/car5.svg` (Hyundai Tucson)
  - `cars/car3.svg` (Hyundai Aura)
  - `cars/car2.svg` (Hyundai Grand i10 Nios)
  - `cars/car1.svg` (Hyundai Kona Electric)
  - `cars/car4.svg` (Hyundai IONIQ 5)

### Icons
- `icons/service.svg` → `icons/features/innovation.svg`
- `icons/offer.svg` → `icons/features/safety.svg`
- `icons/contact.svg` → `icons/features/sustainability.svg`

## 🚀 Implementation Steps

1. **Download/Obtain Images**: Get high-quality Hyundai car images
2. **Optimize Images**: Compress and convert to WebP/JPG
3. **Organize Files**: Place in appropriate folders following naming convention
4. **Update Code**: Modify HTML to use new image paths
5. **Test**: Verify all images load correctly on all devices

## 📱 Responsive Image Strategy

For better performance, consider using:
- `<picture>` element with multiple sources
- `srcset` attribute for different resolutions
- Lazy loading with `loading="lazy"` attribute

## ✅ Checklist

- [ ] All car images optimized and placed in correct folders
- [ ] Hero background images added (3 images)
- [ ] Feature icons updated/replaced
- [ ] Logo and favicon in place
- [ ] All images tested on different screen sizes
- [ ] File sizes verified (< recommended limits)
- [ ] Alt text updated in HTML for accessibility
- [ ] Images load correctly on mobile devices

---

**Last Updated**: 2024
**Maintained By**: Development Team

