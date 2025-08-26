<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Shafen Khan | Building Systems That Scale</title>
    <meta name="description" content="Current projects: GF Labs calculators, healthcare practice automation, real estate tech, and operational systems. See what I'm building.">
    <link rel="canonical" href="https://shafenkhan.com/projects/">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Projects - Shafen Khan">
    <meta property="og:description" content="Current projects: GF Labs calculators, healthcare practice automation, real estate tech, and operational systems.">
    <meta property="og:url" content="https://shafenkhan.com/projects/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://shafenkhan.com/images/shafen-headshot.jpg">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Projects - Shafen Khan">
    <meta name="twitter:description" content="Current projects: GF Labs calculators, healthcare practice automation, real estate tech, and operational systems.">
    <meta name="twitter:image" content="https://shafenkhan.com/images/shafen-headshot.jpg">
    
    <!-- JSON-LD Organization Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "GF Labs",
        "founder": {
            "@type": "Person",
            "name": "Shafen Khan"
        },
        "description": "Building operational excellence through technology",
        "url": "https://shafenkhan.com/projects/",
        "knowsAbout": ["Healthcare Automation", "Real Estate Technology", "Financial Calculators", "Operational Systems"]
    }
    </script>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #fafafa;
        }
        
        .hero {
            background: linear-gradient(135deg, #1a1a2e 0%, #0f3460 100%);
            color: white;
            padding: 6rem 2rem;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #60a5fa 0%, #a78bfa 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero p {
            font-size: 1.25rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .featured {
            padding: 5rem 2rem;
            background: white;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .featured-project {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            margin-top: 3rem;
        }
        
        .featured-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #1a1a2e;
        }
        
        .featured-badge {
            display: inline-block;
            background: linear-gradient(135deg, #10b981 0%, #14b8a6 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .featured-description {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 2rem;
            line-height: 1.8;
        }
        
        .featured-links {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .btn {
            padding: 1rem 2rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.2s;
            display: inline-block;
        }
        
        .btn:hover {
            transform: translateY(-2px);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        
        .btn-outline {
            border: 2px solid #667eea;
            color: #667eea;
        }
        
        .featured-visual {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            padding: 3rem;
            text-align: center;
            color: white;
        }
        
        .featured-visual h3 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        .projects-grid {
            padding: 5rem 2rem;
        }
        
        .projects-grid h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .projects-grid-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 3rem;
        }
        
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .project-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            border: 1px solid #e9ecef;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .project-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .project-status {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .status-active {
            background: #d1fae5;
            color: #065f46;
        }
        
        .status-development {
            background: #dbeafe;
            color: #1e40af;
        }
        
        .status-planning {
            background: #fef3c7;
            color: #92400e;
        }
        
        .project-card h3 {
            color: #1a1a2e;
            margin-bottom: 1rem;
        }
        
        .project-card p {
            color: #555;
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }
        
        .project-tech {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin-bottom: 1.5rem;
        }
        
        .tech-tag {
            background: #f8f9fa;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.85rem;
            color: #495057;
        }
        
        .project-link {
            color: #667eea;
            font-weight: 600;
            text-decoration: none;
        }
        
        .project-link:hover {
            text-decoration: underline;
        }
        
        .cta {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 5rem 2rem;
            text-align: center;
        }
        
        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .cta p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }
        
        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn-white {
            background: white;
            color: #667eea;
        }
        
        footer {
            background: #1a1a2e;
            color: white;
            padding: 2rem;
            text-align: center;
        }
        
        footer nav a {
            color: white;
            text-decoration: none;
            margin: 0 1rem;
            opacity: 0.8;
        }
        
        footer nav a:hover {
            opacity: 1;
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .featured-project {
                grid-template-columns: 1fr;
            }
            
            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <h1>Projects</h1>
        <p>Building systems that scale. From healthcare automation to real estate tech.</p>
    </section>
    
    <!-- Featured Project -->
    <section class="featured">
        <div class="container">
            <div class="featured-project">
                <div class="featured-content">
                    <span class="featured-badge">🚀 Featured Project</span>
                    <h2>GF Labs</h2>
                    <p class="featured-description">
                        A suite of financial calculators and tools built for real-world use. 
                        Started with an OB billing calculator for Legacy OBGYN, now expanding 
                        to compound interest, real estate ROI, and tax planning tools. 
                        Clean interfaces, instant calculations, print-ready reports.
                    </p>
                    <div class="featured-links">
                        <a href="/labs/" class="btn btn-primary">Visit GF Labs</a>
                        <a href="/ob-calculator.html" class="btn btn-outline">Try OB Calculator</a>
                    </div>
                </div>
                <div class="featured-visual">
                    <h3>GF Labs</h3>
                    <p style="font-size: 1.25rem; opacity: 0.9;">Financial Tools That Work</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Projects Grid -->
    <section class="projects-grid">
        <div class="container">
            <h2>Current Projects</h2>
            <p class="projects-grid-subtitle">Systems and tools I'm actively building</p>
            
            <div class="grid">
                <!-- Healthcare Practice OS -->
                <div class="project-card">
                    <span class="project-status status-active">Active</span>
                    <h3>Healthcare Practice OS</h3>
                    <p>
                        Turning messy clinics into efficient systems. Currently deployed at 
                        Legacy OBGYN with 23% revenue increase. Includes automated insurance 
                        verification, claims tracking, and real-time KPI dashboards.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Python</span>
                        <span class="tech-tag">APIs</span>
                        <span class="tech-tag">Healthcare IT</span>
                        <span class="tech-tag">Automation</span>
                    </div>
                    <a href="/blog/the-practice-consulting-os.php" class="project-link">
                        Read the case study →
                    </a>
                </div>
                
                <!-- Real Estate Transaction Platform -->
                <div class="project-card">
                    <span class="project-status status-active">Active</span>
                    <h3>DFW Real Estate Systems</h3>
                    <p>
                        Complete transaction management system for DFW real estate. Handles 
                        everything from pre-approval to closing. White-label TC services 
                        for other agents, automated timelines, document management.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Real Estate</span>
                        <span class="tech-tag">TC</span>
                        <span class="tech-tag">Automation</span>
                        <span class="tech-tag">DFW</span>
                    </div>
                    <a href="/real-estate/" class="project-link">
                        Explore services →
                    </a>
                </div>
                
                <!-- TaxSq Integration -->
                <div class="project-card">
                    <span class="project-status status-development">In Development</span>
                    <h3>TaxSq Integration</h3>
                    <p>
                        Partnering with TaxSq to build automated tax planning workflows. 
                        Focus on real estate investors and healthcare professionals. 
                        Smart deduction tracking, quarterly estimates, and strategy optimization.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Tax Tech</span>
                        <span class="tech-tag">Automation</span>
                        <span class="tech-tag">APIs</span>
                        <span class="tech-tag">Finance</span>
                    </div>
                    <a href="https://taxsq.com" class="project-link" target="_blank">
                        Visit TaxSq →
                    </a>
                </div>
                
                <!-- Multi-Location Practice Management -->
                <div class="project-card">
                    <span class="project-status status-planning">Planning</span>
                    <h3>Multi-Location Practice Hub</h3>
                    <p>
                        Scaling the healthcare OS to handle multiple locations. Centralized 
                        reporting, inter-location patient flow, unified billing operations. 
                        Target: 5-location specialty groups.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Healthcare</span>
                        <span class="tech-tag">Scale</span>
                        <span class="tech-tag">Analytics</span>
                        <span class="tech-tag">Cloud</span>
                    </div>
                    <a href="/contact/" class="project-link">
                        Get early access →
                    </a>
                </div>
                
                <!-- AI Document Processing -->
                <div class="project-card">
                    <span class="project-status status-development">In Development</span>
                    <h3>AI Document Processing</h3>
                    <p>
                        Smart document extraction for healthcare and real estate. Pulls 
                        data from PDFs, images, and scans. Auto-populates forms, validates 
                        information, and flags discrepancies.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">AI/ML</span>
                        <span class="tech-tag">OCR</span>
                        <span class="tech-tag">Python</span>
                        <span class="tech-tag">APIs</span>
                    </div>
                    <a href="/contact/" class="project-link">
                        Learn more →
                    </a>
                </div>
                
                <!-- Investment Analysis Tools -->
                <div class="project-card">
                    <span class="project-status status-active">Active</span>
                    <h3>Investment Calculators</h3>
                    <p>
                        Suite of investment analysis tools. Real estate ROI calculator, 
                        compound interest projections, rental property analyzer. Clean, 
                        fast, and mobile-friendly.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Finance</span>
                        <span class="tech-tag">PWA</span>
                    </div>
                    <a href="/compound-interest.html" class="project-link">
                        Try calculator →
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta">
        <h2>Have a Project in Mind?</h2>
        <p>Let's discuss how we can build something together</p>
        <div class="cta-buttons">
            <a href="mailto:hello@shafenkhan.com" class="btn btn-white">📧 Email Me</a>
            <a href="/contact/" class="btn btn-outline" style="border-color: white; color: white;">Get in Touch</a>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <nav>
            <a href="/">Home</a>
            <a href="/real-estate/">Real Estate</a>
            <a href="/blog/">Blog</a>
            <a href="/contact/">Contact</a>
        </nav>
        <p style="margin-top: 1rem; opacity: 0.7; font-size: 0.9rem;">
            © 2025 Shafen Khan. All rights reserved.
        </p>
    </footer>
</body>
</html>