# Image Migration Guide

This guide will help you migrate from placeholder SVG images to real Hyundai car images.

## 📋 Quick Start

1. **Obtain Images**: Get high-quality Hyundai car images (see sources in ASSETS_README.md)
2. **Optimize Images**: Compress and convert to WebP/JPG format
3. **Organize Files**: Place images in the correct folders following naming conventions
4. **Test**: Verify images load correctly

## 🗂️ Required Image Files

### Car Images (Priority: High)

Place these in `assets/images/cars/{category}/`:

#### SUV Category (`assets/images/cars/suv/`)
- `creta.jpg` or `creta.webp` (Hyundai Creta)
- `venue.jpg` or `venue.webp` (Hyundai Venue)
- `tucson.jpg` or `tucson.webp` (Hyundai Tucson)

#### Sedan Category (`assets/images/cars/sedan/`)
- `verna.jpg` or `verna.webp` (Hyundai Verna)
- `aura.jpg` or `aura.webp` (Hyundai Aura)

#### Hatchback Category (`assets/images/cars/hatchback/`)
- `i20.jpg` or `i20.webp` (Hyundai i20)
- `grand-i10-nios.jpg` or `grand-i10-nios.webp` (Grand i10 Nios)

#### Electric Category (`assets/images/cars/electric/`)
- `kona-electric.jpg` or `kona-electric.webp` (Kona Electric)
- `ioniq-5.jpg` or `ioniq-5.webp` (IONIQ 5)

### Feature Icons (Priority: Medium)

Place these in `assets/images/icons/features/`:
- `innovation.svg` or `innovation.png`
- `safety.svg` or `safety.png`
- `sustainability.svg` or `sustainability.png`

### Hero Backgrounds (Priority: Medium)

Place these in `assets/images/backgrounds/hero/`:
- `hero-1.jpg` or `hero-1.webp` (1920x1080px recommended)
- `hero-2.jpg` or `hero-2.webp`
- `hero-3.jpg` or `hero-3.webp`

## 🔄 Backward Compatibility

The code is **backward compatible**. If new images are not found, it will automatically fall back to the original SVG placeholders. This means:

- ✅ You can add images gradually
- ✅ The site will continue working during migration
- ✅ No breaking changes if images are missing

## 📝 Image Naming Rules

1. **Use lowercase** for all filenames
2. **Separate words with hyphens**: `grand-i10-nios.jpg` (not `grand_i10_nios.jpg`)
3. **No spaces** in filenames
4. **Include model name** clearly: `creta.jpg`, `verna.jpg`

## 🎨 Image Optimization Checklist

Before adding images, ensure:

- [ ] Images are optimized (compressed)
- [ ] File size < 200KB for car images
- [ ] File size < 500KB for hero backgrounds
- [ ] WebP format preferred (with JPG fallback)
- [ ] Dimensions appropriate (see ASSETS_README.md)
- [ ] Alt text is descriptive in HTML

## 🚀 Testing After Migration

1. **Check Homepage**: Verify all 5 car images load
2. **Check Models Page**: Verify all 9 car images load
3. **Check Feature Icons**: Verify 3 icons display correctly
4. **Test Responsive**: Check images on mobile/tablet/desktop
5. **Check Performance**: Use browser DevTools to verify load times

## 🔍 Troubleshooting

### Images Not Loading
- Check file paths match exactly (case-sensitive on Linux)
- Verify file permissions (should be readable)
- Check browser console for 404 errors

### Fallback to SVG
- This is normal if new images don't exist
- Add images to correct folders to replace SVGs

### Performance Issues
- Ensure images are optimized/compressed
- Consider using WebP format
- Check file sizes are within limits

## 📞 Support

Refer to `ASSETS_README.md` for detailed specifications and requirements.

---

**Note**: The system will automatically use the best available format (WebP → JPG → PNG → SVG) and fall back gracefully if images are missing.

