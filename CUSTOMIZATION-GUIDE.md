# TOREX SAFARI - Complete Customization Guide

## 🎨 Color Customization

### Method 1: WordPress Customizer (Easiest)
1. Go to **Appearance > Customize**
2. Look for **"TOREX Safari Colors"** panel
3. Update:
   - **Primary Color** (Gold) - Used for buttons and accents
   - **Secondary Color** (Jungle Green) - Used for headers and text
   - **Accent Color** (Orange) - Used for highlights
4. Click **Publish** to save

### Method 2: Direct CSS Edit
Edit `style.css` root variables:

```css
:root {
  --primary-color: #D4A373;        /* Gold */
  --secondary-color: #1a472a;      /* Jungle Green */
  --accent-color: #ff6b35;         /* Safari Orange */
  --light-bg: #f5f1e8;             /* Light Background */
  --dark-text: #2c2c2c;            /* Text Color */
}
```

## 📱 Logo & Branding

### Add Your Logo
1. Go to **Appearance > Customize > Site Identity**
2. Upload your TOREX SAFARI logo
3. Set logo dimensions (recommended: 300x80px)

### Customize Logo Text
Edit in `header.php`:
```php
echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html( get_bloginfo( 'name' ) ) . ' <span>SAFARI</span></a>';
```

## 🏞️ Add Attractions

### Method 1: WordPress Admin
1. Go to **TOREX Dashboard > Attractions**
2. Click **Add New**
3. Fill in:
   - **Title**: Attraction name
   - **Description**: Main content
   - **Featured Image**: Upload attraction photo
   - **Excerpt**: Short description (used in listings)
4. Under **Attraction Details** meta box:
   - Best Time to Visit
   - Altitude/Location
   - Wildlife Species
5. Publish

### Add Custom Fields
Edit custom meta fields in `functions.php`:
```php
function torex_safari_attraction_meta_callback( $post ) {
    // Fields appear here - customize as needed
}
```

## 🎫 Create Safari Packages

### Package Creation
1. Go to **TOREX Dashboard > Safari Packages**
2. Click **Add New**
3. Fill in:
   - **Title**: Package name (e.g., "5-Day Gorilla Adventure")
   - **Content**: Full description
   - **Featured Image**: Package banner image
4. In **Package Details** meta box:
   - **Price**: in USD
   - **Duration**: in days
   - **Max Group Size**: number of people
5. Publish

### Package Features
Add features to description:
```
✓ Professional guides
✓ All meals included
✓ Comfortable accommodation
✓ Transportation provided
✓ Photography opportunities
```

## 📝 Customize Homepage

### Edit Hero Section
Edit in `home.php`:
```php
<h1><?php esc_html_e( 'Discover Uganda\'s Wild Beauty', 'torex-safari' ); ?></h1>
<p><?php esc_html_e( 'Your custom tagline here', 'torex-safari' ); ?></p>
```

### Change Hero Background
Edit in `style.css`:
```css
.hero {
    background: linear-gradient(135deg, rgba(26, 71, 42, 0.8), rgba(212, 163, 115, 0.6)),
                url('YOUR_IMAGE_URL') center/cover no-repeat;
}
```

## 🧭 Customize Navigation Menu

1. Go to **Appearance > Menus**
2. Create a new menu named "Primary Menu"
3. Add menu items:
   - Home
   - Attractions
   - Packages
   - About Us
   - Contact
4. Set as **Primary Menu** and save

## 🔧 Advanced Customization

### Add New Widget Areas
Edit `functions.php`:
```php
register_sidebar( array(
    'name'          => esc_html__( 'Your Widget Area', 'torex-safari' ),
    'id'            => 'custom-sidebar',
    'description'   => esc_html__( 'Description', 'torex-safari' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
) );
```

### Modify Grid Layouts
Edit grid columns in `style.css`:
```css
.attractions-grid {
    grid-template-columns: repeat(4, 1fr); /* Change 4 to desired number */
    gap: 30px;
}
```

### Customize Button Styles
Edit button classes in `style.css`:
```css
.btn-primary {
    background-color: var(--primary-color);
    padding: 15px 40px;  /* Change padding */
    border-radius: 10px; /* Change roundness */
}
```

## 💬 Add Testimonials

### Create Testimonials Section
Add to `home.php`:
```php
<section class="testimonials-section">
    <div class="container">
        <h2 class="section-title"><?php esc_html_e( 'What Our Guests Say', 'torex-safari' ); ?></h2>
        <div class="testimonial-grid">
            <!-- Testimonial cards here -->
        </div>
    </div>
</section>
```

## 🌐 Add Social Links

Edit in `footer.php`:
```php
<a href="https://facebook.com/torexsafari" target="_blank">Facebook</a>
<a href="https://instagram.com/torexsafari" target="_blank">Instagram</a>
<a href="https://twitter.com/torexsafari" target="_blank">Twitter</a>
```

## ⚙️ Performance Optimization

### Enable Caching
Recommended plugins:
- WP Super Cache
- W3 Total Cache
- Cache Enabler

### Optimize Images
Use before uploading:
- TinyJPG or TinyPNG
- ImageOptim
- Recommended sizes:
  - Hero images: 1920x600px
  - Attraction cards: 400x250px
  - Logo: 300x80px

## 📱 Mobile Customization

### Test Responsiveness
1. Use Chrome DevTools (F12)
2. Toggle device toolbar
3. Test on various screen sizes

### Adjust Mobile Breakpoints
Edit in `css/responsive.css`:
```css
@media (max-width: 768px) {
    /* Mobile styles here */
}

@media (max-width: 480px) {
    /* Small phone styles here */
}
```

## 🔐 Security Best Practices

1. **Keep WordPress Updated**
2. **Install Security Plugin**: Wordfence, All In One WP Security
3. **Use Strong Passwords**
4. **Enable Two-Factor Authentication**
5. **Backup Regularly**: UpdraftPlus, BackWPup
6. **Scan for Vulnerabilities**: WPScan

## 📞 Support & Resources

- WordPress Official: https://wordpress.org
- Theme Documentation: Check README.md
- UTB Registration: https://www.visituganda.com
- URBS Registration: https://www.urb.go.ug

## 🚀 Next Steps

1. ✅ Customize colors and branding
2. ✅ Add attractions and packages
3. ✅ Setup contact forms
4. ✅ Enable WooCommerce for bookings
5. ✅ Optimize for SEO (Yoast SEO plugin)
6. ✅ Set up email newsletters
7. ✅ Configure social media integration

---

**Theme Version**: 1.0.0
**Last Updated**: June 2026
**Support**: support@torexsafari.com
