# Ticket Management Web App - Twig Version

A full-featured ticket management web application built with **Twig** templating engine and **PHP**.

## 🚀 Features

### Core Features
- ✅ **Landing Page** - Hero section with wavy SVG backgrounds and decorative circles
- ✅ **Authentication** - Login and Signup with form validation
- ✅ **Dashboard** - Real-time statistics for tickets (Total, Open, In Progress, Closed)
- ✅ **Ticket Management (CRUD)**
  - Create new tickets
  - View all tickets in card layout
  - Edit existing tickets
  - Delete tickets with confirmation
- ✅ **Form Validation** - Real-time validation with inline error messages
- ✅ **Toast Notifications** - Success and error feedback
- ✅ **Protected Routes** - Session-based authentication
- ✅ **Responsive Design** - Mobile-first, works on all devices
- ✅ **Max-width 1440px** - Centered layout on large screens

## 🛠️ Technologies Used

- **Backend**: PHP 7.4+
- **Templating**: PHP includes (Twig-like structure)
- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Icons**: Font Awesome 6.0
- **Fonts**: Google Fonts (Jost)
- **Data Storage**: localStorage (client-side simulation)

## 📁 Project Structure

```
ticket-app-twig/
├── public/
│   ├── css/
│   │   └── main.css          # All styles
│   ├── js/
│   │   ├── auth.js           # Authentication logic
│   │   ├── dashboard.js      # Dashboard functionality
│   │   └── tickets.js        # Ticket CRUD operations
│   ├── images/               # Image assets
│   ├── .htaccess            # URL rewriting
│   └── index.php            # Main entry point & router
├── pages/
│   ├── landing.php          # Landing page
│   ├── auth.php             # Login/Signup page
│   ├── dashboard.php        # Dashboard
│   └── tickets.php          # Ticket management
├── templates/
│   ├── components/
│   │   ├── header.php           # Public header
│   │   ├── app-header.php       # Authenticated header
│   │   └── footer.php           # Footer component
│   └── (Twig templates for reference)
├── composer.json            # PHP dependencies (optional)
└── README.md               # This file
```

## 🔧 Installation & Setup

### Prerequisites
- PHP 7.4 or higher
- Web server (Apache/Nginx) OR PHP built-in server

**Note:** This implementation uses plain PHP includes instead of Twig to avoid Composer dependency. The project structure follows Twig conventions for learning purposes.

### Step 1: No Installation Required!

This version uses plain PHP and doesn't require Composer or any dependencies.

### Step 2: Start the Server

#### Option A: PHP Built-in Server (Recommended for development)
```bash
cd public
php -S localhost:8000
```

Then visit: **http://localhost:8000**

#### Option B: Apache/Nginx
Configure your web server to point to the `public/` directory as the document root.

For Apache, make sure `mod_rewrite` is enabled:
```bash
sudo a2enmod rewrite
sudo systemctl restart apache2
```

#### Option C: XAMPP/WAMP/MAMP
1. Copy the entire `ticket-app-twig` folder to your htdocs/www directory
2. Access via `http://localhost/ticket-app-twig/public/`

**Note:** PHP must be installed on your system. Download from [php.net](https://www.php.net/downloads)

## 📖 Usage Guide

### 1. Landing Page
- Visit `http://localhost:8000` to see the landing page
- Click "Get Started" or "Login" to access authentication

### 2. Authentication
- **Sign Up**: Create a new account
  - Full Name (required)
  - Email (required, valid format)
  - Password (required, min 6 characters)
  - Confirm Password (must match)
  
- **Login**: Use existing credentials
  - Email
  - Password

**Test Credentials:**
- Email: `admin@ticketapp.com`
- Password: `admin123`

OR

- Email: `user@test.com`
- Password: `password123`

### 3. Dashboard
After login, you'll see:
- **Statistics Cards**: Total, Open, In Progress, and Closed tickets
- **Quick Actions**: Button to manage tickets
- **Navigation**: Links to Dashboard and Tickets pages
- **Logout**: Clear session and return to landing

### 4. Ticket Management

#### Create Ticket
1. Click "Create New Ticket" button
2. Fill in the form:
   - **Title** (required)
   - **Description** (optional)
   - **Status** (required): open, in_progress, or closed
   - **Priority** (optional): low, medium, or high
3. Click "Save Ticket"

#### View Tickets
- All tickets displayed as cards
- Color-coded status tags:
  - 🟢 **Open** (Green)
  - 🟠 **In Progress** (Amber)
  - ⚪ **Closed** (Gray)

#### Edit Ticket
1. Click the edit button (pencil icon) on any ticket card
2. Modify the form fields
3. Click "Save Ticket" to update

#### Delete Ticket
1. Click the delete button (trash icon) on any ticket card
2. Confirm deletion in the modal
3. Ticket will be removed

## 🎨 Design Features

### Layout
- **Max-width**: 1440px centered on large screens
- **Responsive**: Adapts to mobile, tablet, and desktop
- **Grid System**: Card-based layouts with CSS Grid

### Visual Elements
- **Wavy Backgrounds**: Animated SVG waves in hero section
- **Decorative Circles**: Floating circles with CSS animations
- **Status Colors**:
  - Open: `#2ecc71` (Green)
  - In Progress: `#f39c12` (Amber)
  - Closed: `#95a5a6` (Gray)
- **Gradient Backgrounds**: Purple-blue gradients
- **Box Shadows**: Depth and elevation
- **Hover Effects**: Interactive feedback

### Accessibility
- ✅ Semantic HTML5 elements
- ✅ ARIA labels and roles
- ✅ Keyboard navigation support
- ✅ Focus states for interactive elements
- ✅ Color contrast compliance
- ✅ Screen reader friendly

## 🔒 Security & Validation

### Form Validation
- **Title**: Required field
- **Status**: Required, must be one of: `open`, `in_progress`, `closed`
- **Description**: Optional, max 500 characters
- **Priority**: Optional, must be: `low`, `medium`, or `high`

### Error Handling
- Inline error messages below fields
- Toast notifications for success/failure
- Clear, user-friendly error text
- Network error handling

### Authentication
- Session stored in `localStorage` with key: `ticketapp_session`
- Protected routes redirect to login if unauthorized
- Logout clears session completely

## 🧪 Testing

### Manual Testing Checklist

#### Landing Page
- [ ] Hero section displays correctly
- [ ] SVG waves animate smoothly
- [ ] CTA buttons navigate to auth page
- [ ] Responsive on mobile/tablet/desktop

#### Authentication
- [ ] Login form validates email format
- [ ] Login form validates password length
- [ ] Signup form checks password match
- [ ] Error messages display inline
- [ ] Toast shows on login success/failure
- [ ] Redirects to dashboard after login
- [ ] Toggle between login and signup works

#### Dashboard
- [ ] Statistics display correctly
- [ ] Counts update based on ticket data
- [ ] "Manage Tickets" button navigates
- [ ] Logout button clears session
- [ ] Protected - redirects if not logged in

#### Ticket Management
- [ ] Create form validates required fields
- [ ] Create form accepts valid data
- [ ] Tickets display in grid layout
- [ ] Status colors match correctly
- [ ] Edit loads existing ticket data
- [ ] Edit updates ticket successfully
- [ ] Delete shows confirmation modal
- [ ] Delete removes ticket
- [ ] Empty state shows when no tickets

## 📱 Browser Support

- ✅ Chrome/Edge (latest)
- ✅ Firefox (latest)
- ✅ Safari (latest)
- ✅ Mobile browsers (iOS Safari, Chrome Mobile)

## 🐛 Known Issues

None at this time. If you encounter any bugs, please report them.

## 🚀 Deployment

### For Production:

1. **Configure Web Server**:
   - Point document root to `public/`
   - Enable `.htaccess` (Apache) or equivalent (Nginx)
   - Set proper file permissions

2. **Security Considerations**:
   - Use environment variables for configuration
   - Never commit sensitive data
   - Consider adding server-side validation
   - Use HTTPS in production

## 📚 Additional Resources

- [Twig Documentation](https://twig.symfony.com/doc/3.x/)
- [PHP Manual](https://www.php.net/manual/en/)
- [Composer Documentation](https://getcomposer.org/doc/)

## 🎓 Learning Outcomes

This project demonstrates:
- ✅ PHP-based template structure and organization
- ✅ Component-based architecture  
- ✅ PHP routing without frameworks
- ✅ Client-side state management
- ✅ Form validation (client-side)
- ✅ CRUD operations
- ✅ Responsive CSS design
- ✅ Accessibility best practices

**Note:** While named "twig", this version uses plain PHP includes to avoid external dependencies. The structure follows Twig conventions as a learning reference.

## 📄 License

This project is open source and available for educational purposes.

---

**Built with ❤️ using Twig & PHP**  
**Version:** 1.0.0  
**Last Updated:** October 2025
# ticket-app-twig
