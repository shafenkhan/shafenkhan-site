<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shafen Khan - Building operational excellence through technology</title>
    <meta name="description" content="Real estate pro + systems builder in Dallas-Fort Worth. I turn chaotic ops into clean, scalable workflows for healthcare practices, real estate teams, and growing businesses.">
    <link rel="canonical" href="https://shafenkhan.com/">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Shafen Khan - Building operational excellence">
    <meta property="og:description" content="Real estate pro + systems builder. I turn chaotic ops into clean, scalable workflows.">
    <meta property="og:url" content="https://shafenkhan.com/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://shafenkhan.com/images/profile/shafen-profile.jpg">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Shafen Khan - Building operational excellence">
    <meta name="twitter:description" content="Real estate pro + systems builder. I turn chaotic ops into clean, scalable workflows.">
    <meta name="twitter:image" content="https://shafenkhan.com/images/profile/shafen-profile.jpg">
    
    <!-- Inline Critical CSS for Performance -->
    <style>
        /* Critical inline styles - full system.css loaded async below */
        :root {
            --text-base: 1rem;
            --text-lg: 1.25rem;
            --text-xl: 1.5rem;
            --text-2xl: 1.875rem;
            --text-3xl: 2.25rem;
            --text-4xl: 3rem;
            --text-5xl: 3.75rem;
            --space-xs: 0.5rem;
            --space-sm: 0.75rem;
            --space-md: 1rem;
            --space-lg: 1.5rem;
            --space-xl: 2rem;
            --space-2xl: 3rem;
            --space-3xl: 4rem;
            --space-4xl: 6rem;
            --space-5xl: 8rem;
            --color-primary: #1a1a2e;
            --color-surface: #ffffff;
            --color-surface-alt: #f8f9fa;
            --color-text: #1e293b;
            --color-text-muted: #64748b;
            --color-accent: #3b82f6;
            --color-accent-hover: #2563eb;
            --color-success: #10b981;
            --color-border: rgba(0,0,0,0.08);
            --gradient-primary: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1);
            --shadow-2xl: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --focus-ring: 0 0 0 3px rgba(59,130,246,0.5);
            --transition-fast: 150ms ease;
            --transition-base: 250ms ease;
            --max-width: 1200px;
        }
        
        @media (prefers-color-scheme: dark) {
            :root {
                --color-primary: #f1f5f9;
                --color-surface: #0f172a;
                --color-surface-alt: #1e293b;
                --color-text: #f1f5f9;
                --color-text-muted: #94a3b8;
                --color-accent: #60a5fa;
                --color-accent-hover: #3b82f6;
                --color-border: rgba(255,255,255,0.08);
            }
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            font-size: var(--text-base);
            line-height: 1.6;
            color: var(--color-text);
            background: var(--color-surface);
            -webkit-font-smoothing: antialiased;
        }
        
        .container {
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 var(--space-lg);
        }
        
        /* Hero Styles */
        .hero {
            min-height: 90vh;
            display: flex;
            align-items: center;
            padding: var(--space-4xl) 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: var(--gradient-primary);
            opacity: 0.03;
            transform: rotate(-15deg);
            pointer-events: none;
        }
        
        .hero__grid {
            display: grid;
            gap: var(--space-3xl);
            align-items: center;
            position: relative;
            z-index: 1;
        }
        
        @media (min-width: 768px) {
            .hero__grid {
                grid-template-columns: 1.2fr 1fr;
            }
        }
        
        .hero__content {
            animation: fadeInUp 0.8s ease-out;
        }
        
        .hero__title {
            font-size: clamp(var(--text-3xl), 5vw, var(--text-5xl));
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: var(--space-lg);
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero__subtitle {
            font-size: var(--text-xl);
            color: var(--color-text-muted);
            margin-bottom: var(--space-2xl);
            max-width: 600px;
        }
        
        .hero__image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-2xl);
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }
        
        .hero__image img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Button Styles */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: var(--space-xs);
            padding: var(--space-sm) var(--space-lg);
            font-size: var(--text-base);
            font-weight: 600;
            border: 2px solid transparent;
            border-radius: 8px;
            cursor: pointer;
            transition: all var(--transition-base);
            text-decoration: none;
            white-space: nowrap;
        }
        
        .btn--primary {
            background: var(--gradient-primary);
            color: white;
        }
        
        .btn--secondary {
            background: transparent;
            color: var(--color-accent);
            border-color: var(--color-accent);
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }
        
        .btn-group {
            display: flex;
            gap: var(--space-md);
            flex-wrap: wrap;
            margin-bottom: var(--space-lg);
        }
        
        /* Card Styles */
        .card {
            background: var(--color-surface);
            border: 1px solid var(--color-border);
            border-radius: 12px;
            padding: var(--space-xl);
            transition: all var(--transition-base);
            height: 100%;
        }
        
        .card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
            border-color: var(--color-accent);
        }
        
        /* Section Styles */
        .section {
            padding: var(--space-4xl) 0;
        }
        
        .section__title {
            font-size: var(--text-3xl);
            font-weight: 700;
            margin-bottom: var(--space-2xl);
            text-align: center;
        }
        
        .grid {
            display: grid;
            gap: var(--space-xl);
        }
        
        .grid--2 {
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }
        
        .grid--3 {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }
    </style>
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Shafen Khan",
        "url": "https://shafenkhan.com",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://shafenkhan.com/?s={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
    
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Shafen Khan",
        "url": "https://shafenkhan.com",
        "image": "https://shafenkhan.com/images/profile/shafen-profile.jpg",
        "jobTitle": "Real Estate Professional & Operations Consultant",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Dallas",
            "addressRegion": "TX",
            "addressCountry": "US"
        },
        "sameAs": [
            "https://www.linkedin.com/in/shafenkhan",
            "https://github.com/shafenkhan"
        ]
    }
    </script>
</head>
<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main" class="skip-link">Skip to main content</a>
    
    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="hero__grid">
                <div class="hero__content">
                    <h1 class="hero__title">Building operational excellence through technology</h1>
                    <p class="hero__subtitle">Real estate pro + systems builder. I turn chaotic ops into clean, scalable workflows.</p>
                    
                    <div class="btn-group">
                        <a href="mailto:hello@shafenkhan.com" class="btn btn--primary">Work with me</a>
                        <a href="/real-estate/" class="btn btn--secondary">Real Estate</a>
                        <a href="/projects/" class="btn btn--secondary">Consulting</a>
                    </div>
                    
                    <div class="social-links" aria-label="Social media links">
                        <a href="https://www.linkedin.com/in/shafenkhan" aria-label="LinkedIn" target="_blank" rel="noopener">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="https://github.com/shafenkhan" aria-label="GitHub" target="_blank" rel="noopener">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="hero__image">
                    <img src="/images/profile/shafen-profile.jpg" alt="Shafen Khan" width="500" height="600" loading="eager">
                </div>
            </div>
        </div>
    </section>
    
    <!-- What I Do Section -->
    <main id="main">
        <section class="section" id="what-i-do">
            <div class="container">
                <h2 class="section__title">What I Do</h2>
                <div class="grid grid--2">
                    <!-- Real Estate Card -->
                    <div class="card">
                        <h3 style="font-size: var(--text-2xl); margin-bottom: var(--space-md); color: var(--color-primary);">
                            Real Estate, DFW
                        </h3>
                        <p style="color: var(--color-text-muted); margin-bottom: var(--space-lg);">
                            Licensed agent serving buyers, sellers, and investors across Dallas-Fort Worth. Plus white-label TC services for agents.
                        </p>
                        <ul style="list-style: none; padding: 0; margin-bottom: var(--space-lg);">
                            <li style="padding: var(--space-xs) 0;">✓ Pre-approval strategy & offer optimization</li>
                            <li style="padding: var(--space-xs) 0;">✓ Contract-to-close transaction coordination</li>
                            <li style="padding: var(--space-xs) 0;">✓ Investment property analysis & 1031 exchanges</li>
                            <li style="padding: var(--space-xs) 0;">✓ TREC compliant, fully licensed (#814918)</li>
                        </ul>
                        <div style="display: flex; gap: var(--space-md); flex-wrap: wrap;">
                            <a href="/real-estate/" style="color: var(--color-accent); font-weight: 600;">Learn more →</a>
                            <a href="/real-estate/faq.php" style="color: var(--color-accent); font-weight: 600;">FAQ →</a>
                        </div>
                    </div>
                    
                    <!-- Consulting Card -->
                    <div class="card">
                        <h3 style="font-size: var(--text-2xl); margin-bottom: var(--space-md); color: var(--color-primary);">
                            Practice & Ops Consulting
                        </h3>
                        <p style="color: var(--color-text-muted); margin-bottom: var(--space-lg);">
                            I transform healthcare practices and business operations using data-driven systems and targeted automation.
                        </p>
                        <ul style="list-style: none; padding: 0; margin-bottom: var(--space-lg);">
                            <li style="padding: var(--space-xs) 0;">✓ 5-day discovery to full implementation</li>
                            <li style="padding: var(--space-xs) 0;">✓ KPI dashboards & revenue cycle optimization</li>
                            <li style="padding: var(--space-xs) 0;">✓ Legacy OBGYN: 6 weeks → 48hr billing</li>
                            <li style="padding: var(--space-xs) 0;">✓ Small automations, big impact</li>
                        </ul>
                        <div style="display: flex; gap: var(--space-md); flex-wrap: wrap;">
                            <a href="/blog/the-practice-consulting-os.php" style="color: var(--color-accent); font-weight: 600;">Read case study →</a>
                            <a href="/blog/dfw-real-estate-operating-system.php" style="color: var(--color-accent); font-weight: 600;">My playbook →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Featured Work Section -->
        <section class="section" id="featured-work" style="background: var(--color-surface-alt);">
            <div class="container">
                <h2 class="section__title">Featured Work</h2>
                <div class="grid grid--3">
                    <!-- Projects Card -->
                    <div class="card">
                        <h3 style="font-size: var(--text-xl); margin-bottom: var(--space-sm);">GF Labs Projects</h3>
                        <p style="color: var(--color-text-muted); margin-bottom: var(--space-md);">
                            Open-source experiments and operational tools. Building calculators, automation scripts, and workflow templates.
                        </p>
                        <a href="/projects/" style="color: var(--color-accent); font-weight: 600;">View projects →</a>
                    </div>
                    
                    <!-- Labs Card -->
                    <div class="card">
                        <h3 style="font-size: var(--text-xl); margin-bottom: var(--space-sm);">Interactive Calculators</h3>
                        <p style="color: var(--color-text-muted); margin-bottom: var(--space-md);">
                            Financial tools and calculators for healthcare billing, investment analysis, and business planning.
                        </p>
                        <a href="/labs/" style="color: var(--color-accent); font-weight: 600;">Try calculators →</a>
                    </div>
                    
                    <!-- Tax Square Card -->
                    <div class="card">
                        <h3 style="font-size: var(--text-xl); margin-bottom: var(--space-sm);">Tax Square</h3>
                        <p style="color: var(--color-text-muted); margin-bottom: var(--space-md);">
                            Strategic tax planning platform for real estate investors and business owners. Maximize deductions, minimize liability.
                        </p>
                        <a href="https://taxsq.com" target="_blank" rel="noopener" style="color: var(--color-accent); font-weight: 600;">Visit Tax Square →</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Latest Writing Section -->
        <section class="section" id="latest-writing">
            <div class="container">
                <h2 class="section__title">Latest Writing</h2>
                <div style="max-width: 800px; margin: 0 auto;">
                    <?php
                    // In production, this would pull from database or files
                    // For now, hardcoded for demonstration
                    $posts = [
                        [
                            'title' => 'The Practice Consulting OS: Turning a Clinic into a System',
                            'date' => 'August 23, 2025',
                            'excerpt' => 'How I turn messy healthcare practices into repeatable operating systems using discovery, KPI trees, and targeted automations.',
                            'url' => '/blog/the-practice-consulting-os.php'
                        ],
                        [
                            'title' => 'My DFW Real Estate Operating System',
                            'date' => 'August 23, 2025',
                            'excerpt' => 'The playbook I use for buyers, sellers, and agents—pre-approval packs, offer templates, and TC pipelines.',
                            'url' => '/blog/dfw-real-estate-operating-system.php'
                        ],
                        [
                            'title' => 'Why the Intersection of Real Estate, AI, and Ops',
                            'date' => 'August 20, 2025',
                            'excerpt' => 'The convergence of traditional industries and modern operational systems creates unprecedented opportunities.',
                            'url' => '/blog/why-intersection-real-estate-ai-ops.php'
                        ]
                    ];
                    
                    foreach ($posts as $post): ?>
                    <article style="padding: var(--space-lg) 0; border-bottom: 1px solid var(--color-border);">
                        <time style="font-size: var(--text-sm); color: var(--color-text-muted);"><?php echo $post['date']; ?></time>
                        <h3 style="font-size: var(--text-lg); margin: var(--space-xs) 0;">
                            <a href="<?php echo $post['url']; ?>" style="color: var(--color-text); text-decoration: none;">
                                <?php echo $post['title']; ?>
                            </a>
                        </h3>
                        <p style="color: var(--color-text-muted); margin: 0;"><?php echo $post['excerpt']; ?></p>
                    </article>
                    <?php endforeach; ?>
                    
                    <div style="margin-top: var(--space-xl); text-align: center;">
                        <a href="/blog/" class="btn btn--secondary">View all posts →</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Lead Capture Section -->
        <section class="section" id="contact" style="background: var(--color-surface-alt);">
            <div class="container">
                <div style="text-align: center; max-width: 600px; margin: 0 auto;">
                    <h2 style="font-size: var(--text-3xl); margin-bottom: var(--space-lg);">Let's Build Something Together</h2>
                    <p style="font-size: var(--text-lg); color: var(--color-text-muted); margin-bottom: var(--space-2xl);">
                        Whether you need help with real estate, operations consulting, or just want to connect, I'm here to help.
                    </p>
                    <div class="btn-group" style="justify-content: center;">
                        <a href="mailto:hello@shafenkhan.com" class="btn btn--primary">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Email me
                        </a>
                        <a href="tel:469-837-9233" class="btn btn--secondary">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            Call 469-837-9233
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: var(--space-xl);">
                <nav aria-label="Footer navigation" style="display: flex; gap: var(--space-lg); flex-wrap: wrap;">
                    <a href="/" style="color: var(--color-text-muted); font-size: var(--text-sm);">Home</a>
                    <a href="/real-estate/" style="color: var(--color-text-muted); font-size: var(--text-sm);">Real Estate</a>
                    <a href="/projects/" style="color: var(--color-text-muted); font-size: var(--text-sm);">Projects</a>
                    <a href="/labs/" style="color: var(--color-text-muted); font-size: var(--text-sm);">Labs</a>
                    <a href="/blog/" style="color: var(--color-text-muted); font-size: var(--text-sm);">Blog</a>
                    <a href="/contact/" style="color: var(--color-text-muted); font-size: var(--text-sm);">Contact</a>
                </nav>
                <p style="color: var(--color-text-muted); font-size: var(--text-sm);">
                    © <?php echo date('Y'); ?> Shafen Khan. Building better operations.
                </p>
            </div>
        </div>
    </footer>
    
    <!-- Async load full stylesheet -->
    <link rel="preload" href="/assets/css/system.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/css/system.css"></noscript>
</body>
</html>