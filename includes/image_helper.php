<?php
/**
 * Image Helper Functions
 * Provides utility functions for image paths and responsive image handling
 */

/**
 * Get car image path with fallback support
 * Supports multiple formats: WebP, JPG, PNG, SVG
 * 
 * @param string $model Model name (e.g., 'creta', 'venue')
 * @param string $category Category folder (e.g., 'suv', 'sedan', 'hatchback', 'electric')
 * @param string $size Optional size variant ('small', 'medium', 'large')
 * @return string Image path or fallback
 */
function getCarImage($model, $category = 'suv', $size = '') {
    $basePath = defined('BASE_PATH') ? BASE_PATH : '';
    $sizeSuffix = $size ? '-' . $size : '';
    
    // Try different formats in order of preference
    $formats = ['webp', 'jpg', 'png', 'svg'];
    $baseDir = $basePath . 'assets/images/cars/' . $category . '/';
    
    // Get the project root directory
    $projectRoot = dirname(dirname(__DIR__));
    
    foreach ($formats as $format) {
        $filename = $model . $sizeSuffix . '.' . $format;
        $filepath = $baseDir . $filename;
        $fullPath = $projectRoot . '/' . $filepath;
        
        // Check if file exists
        if (file_exists($fullPath)) {
            return $filepath;
        }
    }
    
    // Fallback to original SVG structure (backward compatibility)
    $fallbackMap = [
        'creta' => 'car1.svg',
        'venue' => 'car2.svg',
        'i20' => 'car3.svg',
        'verna' => 'car4.svg',
        'tucson' => 'car5.svg',
        'alcazar' => 'car5.svg',
        'aura' => 'car3.svg',
        'grand-i10-nios' => 'car2.svg',
        'kona-electric' => 'car1.svg',
        'ioniq-5' => 'car4.svg'
    ];
    
    $fallback = isset($fallbackMap[$model]) ? $fallbackMap[$model] : 'car1.svg';
    return $basePath . 'assets/images/cars/' . $fallback;
}

/**
 * Get hero background image
 * 
 * @param int $slideNumber Slide number (1, 2, or 3)
 * @return string Image path
 */
function getHeroBackground($slideNumber = 1) {
    $basePath = defined('BASE_PATH') ? BASE_PATH : '';
    $formats = ['webp', 'jpg', 'png'];
    $baseDir = $basePath . 'assets/images/backgrounds/hero/';
    $projectRoot = dirname(dirname(__DIR__));
    
    foreach ($formats as $format) {
        $filename = 'hero-' . $slideNumber . '.' . $format;
        $filepath = $baseDir . $filename;
        $fullPath = $projectRoot . '/' . $filepath;
        
        if (file_exists($fullPath)) {
            return $filepath;
        }
    }
    
    // Return empty string if no image found (CSS gradient will be used)
    return '';
}

/**
 * Get feature icon path
 * 
 * @param string $iconName Icon name (e.g., 'innovation', 'safety', 'sustainability')
 * @return string Icon path
 */
function getFeatureIcon($iconName) {
    $basePath = defined('BASE_PATH') ? BASE_PATH : '';
    $formats = ['svg', 'png'];
    $baseDir = $basePath . 'assets/images/icons/features/';
    $projectRoot = dirname(dirname(__DIR__));
    
    foreach ($formats as $format) {
        $filename = $iconName . '.' . $format;
        $filepath = $baseDir . $filename;
        $fullPath = $projectRoot . '/' . $filepath;
        
        if (file_exists($fullPath)) {
            return $filepath;
        }
    }
    
    // Fallback to old icon structure (backward compatibility)
    $oldIcons = [
        'innovation' => 'service.svg',
        'safety' => 'offer.svg',
        'sustainability' => 'contact.svg'
    ];
    
    if (isset($oldIcons[$iconName])) {
        return $basePath . 'assets/images/icons/' . $oldIcons[$iconName];
    }
    
    return $basePath . 'assets/images/icons/service.svg';
}

/**
 * Generate responsive image srcset
 * 
 * @param string $baseName Base filename without extension
 * @param string $category Category folder
 * @param string $format File format (webp, jpg)
 * @return string srcset attribute value
 */
function generateSrcSet($baseName, $category, $format = 'webp') {
    $basePath = defined('BASE_PATH') ? BASE_PATH : '';
    $baseDir = $basePath . 'assets/images/cars/' . $category . '/';
    $projectRoot = dirname(dirname(__DIR__));
    $sizes = [
        'small' => '400w',
        'medium' => '800w',
        'large' => '1200w'
    ];
    
    $srcset = [];
    foreach ($sizes as $size => $width) {
        $filepath = $baseDir . $baseName . '-' . $size . '.' . $format;
        $fullPath = $projectRoot . '/' . $filepath;
        if (file_exists($fullPath)) {
            $srcset[] = $filepath . ' ' . $width;
        }
    }
    
    // If no responsive images found, return empty (will use main image)
    return implode(', ', $srcset);
}

/**
 * Get optimized image path (prefers WebP, falls back to JPG)
 * 
 * @param string $path Base path without extension
 * @return string Full image path
 */
function getOptimizedImage($path) {
    $basePath = defined('BASE_PATH') ? BASE_PATH : '';
    $fullPath = $basePath . $path;
    $projectRoot = dirname(dirname(__DIR__));
    
    // Try WebP first
    if (file_exists($projectRoot . '/' . $fullPath . '.webp')) {
        return $fullPath . '.webp';
    }
    
    // Fallback to JPG
    if (file_exists($projectRoot . '/' . $fullPath . '.jpg')) {
        return $fullPath . '.jpg';
    }
    
    // Fallback to PNG
    if (file_exists($projectRoot . '/' . $fullPath . '.png')) {
        return $fullPath . '.png';
    }
    
    return $fullPath;
}
?>

