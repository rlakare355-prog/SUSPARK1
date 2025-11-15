# SPARK Platform

## Overview

SPARK (Sanjivani Platform for AI, Research & Knowledge) is a full-stack web platform built with PHP and MySQL, featuring a modern black-themed UI with 3D animations and glass-morphism effects. The platform integrates payment processing, email services, and QR code generation capabilities.

## User Preferences

Preferred communication style: Simple, everyday language.

## System Architecture

### Frontend Architecture

**Technology Stack:**
- Vanilla JavaScript with custom 3D animations
- CSS3 with glass-morphism and neon effects
- AOS (Animate On Scroll) library for scroll-triggered animations
- Lazy loading implementation for performance optimization

**Design Pattern:**
- Black theme with neon accent colors (green: #00ff88, blue: #00aaff, pink: #ff00aa)
- Glass-morphism UI components with transparency and backdrop filters
- 3D card animations and particle effects
- Responsive navigation with smooth scrolling
- Loading overlay with fade transitions

**Key Features:**
- Custom particle system for background animations
- Form validation with real-time feedback
- Notification system for user alerts
- Back-to-top functionality
- Lazy loading for images and components

### Backend Architecture

**Core Technology:**
- PHP 8.0+ with object-oriented patterns
- PSR-4 autoloading with namespace `Spark\\`
- PDO (PHP Data Objects) for database abstraction
- Prepared statements for SQL injection prevention

**Database Layer:**
- MySQL 5.7+ / MariaDB 10.2+ compatibility
- InnoDB engine for transaction support
- UTF8MB4 character set for full Unicode support
- Strategic indexing for query optimization
- Foreign key constraints with CASCADE and SET NULL behaviors

**Database Design Decisions:**
- Used `INT UNSIGNED` for all positive ID columns to maximize range and prevent negative values
- Converted boolean fields to `TINYINT(1)` for MySQL compatibility
- Applied `DEFAULT NULL` instead of empty strings for optional fields
- Implemented composite indexes for multi-column search queries
- Set strict SQL mode for data integrity enforcement

**Connection Configuration:**
- Buffered queries enabled for performance
- Connection persistence for reduced overhead
- Timezone set to UTC (+00:00)
- Strict transaction tables mode enabled
- MySQL-specific PDO attributes for optimization

### External Dependencies

**Payment Processing:**
- Razorpay PHP SDK (^2.9) for payment gateway integration
- Handles online transactions and payment verification

**Email Service:**
- Mailjet API v3 PHP SDK (^1.5) for transactional emails
- Supports email campaigns and notifications

**QR Code Generation:**
- Endroid QR Code library (^4.5) for generating QR codes
- Used for tickets, authentication, or sharing features

**Development Tools:**
- PHPUnit (^9.0) for unit testing
- PHPMD (^2.10) for code quality analysis

**Required PHP Extensions:**
- `ext-curl` - HTTP requests and API calls
- `ext-json` - JSON encoding/decoding
- `ext-mbstring` - Multi-byte string handling
- `ext-gd` - Image processing
- `ext-pdo` - Database abstraction
- `ext-pdo_mysql` - MySQL database driver

**Database Service:**
- MySQL 5.7+ or MariaDB 10.2+ required
- JSON function support needed
- Full UTF8MB4 Unicode support required
- InnoDB storage engine mandatory for transactions

**Web Server:**
- Apache 2.4+ with mod_rewrite, mod_headers, mod_ssl enabled
- OR Nginx 1.8+ with equivalent modules
- SSL/TLS certificate required for production
- Minimum 256MB PHP memory limit (512MB+ recommended)