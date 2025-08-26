<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GF Labs - Financial Calculators & Tools | Shafen Khan</title>
    <meta name="description" content="GF Labs: A suite of financial calculators and tools. OB billing calculator, compound interest, real estate ROI, and more. Clean interfaces, instant calculations.">
    <link rel="canonical" href="https://shafenkhan.com/labs/">
    
    <!-- Open Graph -->
    <meta property="og:title" content="GF Labs - Financial Calculators & Tools">
    <meta property="og:description" content="A suite of financial calculators and tools. OB billing, compound interest, real estate ROI, and more.">
    <meta property="og:url" content="https://shafenkhan.com/labs/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://shafenkhan.com/images/gf-labs-og.jpg">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GF Labs - Financial Calculators & Tools">
    <meta name="twitter:description" content="A suite of financial calculators and tools. OB billing, compound interest, real estate ROI, and more.">
    <meta name="twitter:image" content="https://shafenkhan.com/images/gf-labs-og.jpg">
    
    <!-- JSON-LD WebApplication Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "GF Labs",
        "description": "A suite of financial calculators and tools for healthcare, real estate, and investment planning",
        "url": "https://shafenkhan.com/labs/",
        "applicationCategory": "FinanceApplication",
        "operatingSystem": "Web Browser",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "creator": {
            "@type": "Person",
            "name": "Shafen Khan"
        }
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
            background: #0a0a0a;
        }
        
        .hero {
            background: linear-gradient(180deg, #0a0a0a 0%, #1a1a1a 100%);
            color: white;
            padding: 8rem 2rem 6rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 50%, rgba(102, 126, 234, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 50%, rgba(118, 75, 162, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .wordmark {
            font-size: 5rem;
            font-weight: 900;
            letter-spacing: -0.02em;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }
        
        .tagline {
            font-size: 1.5rem;
            opacity: 0.9;
            margin-bottom: 0.5rem;
        }
        
        .byline {
            font-size: 1rem;
            opacity: 0.7;
        }
        
        .tools-section {
            background: white;
            padding: 5rem 2rem;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #1a1a2e;
        }
        
        .section-header p {
            color: #666;
            font-size: 1.1rem;
        }
        
        .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
        }
        
        .tool-card {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 16px;
            padding: 2rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            display: block;
            position: relative;
            overflow: hidden;
        }
        
        .tool-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transform: scaleX(0);
            transition: transform 0.3s;
        }
        
        .tool-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            border-color: #667eea;
        }
        
        .tool-card:hover::before {
            transform: scaleX(1);
        }
        
        .tool-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }
        
        .tool-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #1a1a2e;
        }
        
        .tool-card p {
            color: #555;
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }
        
        .tool-status {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        
        .status-live {
            background: #d1fae5;
            color: #065f46;
        }
        
        .status-beta {
            background: #dbeafe;
            color: #1e40af;
        }
        
        .status-coming {
            background: #fef3c7;
            color: #92400e;
        }
        
        .features {
            background: #f8f9fa;
            padding: 4rem 2rem;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }
        
        .feature {
            text-align: center;
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 2rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .feature h3 {
            color: #1a1a2e;
            margin-bottom: 0.5rem;
        }
        
        .feature p {
            color: #666;
        }
        
        .cta {
            background: linear-gradient(135deg, #1a1a2e 0%, #0f3460 100%);
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
            opacity: 0.9;
        }
        
        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
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
            border: 2px solid white;
            color: white;
        }
        
        footer {
            background: #0a0a0a;
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
            .wordmark {
                font-size: 3.5rem;
            }
            
            .tools-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <h1 class="wordmark">GF Labs</h1>
        <p class="tagline">Financial Tools That Actually Work</p>
        <p class="byline">by Shafen Khan</p>
    </section>
    
    <!-- Tools Section -->
    <section class="tools-section">
        <div class="container">
            <div class="section-header">
                <h2>Available Calculators</h2>
                <p>Built for real-world use. Clean, fast, accurate.</p>
            </div>
            
            <div class="tools-grid">
                <!-- OB Calculator -->
                <a href="/ob-calculator.html" class="tool-card">
                    <div class="tool-icon">🏥</div>
                    <h3>OB Billing Calculator</h3>
                    <p>
                        Calculate exact billing amounts for prenatal and delivery services. 
                        Handles copays, deductibles, and global periods. Built for Legacy OBGYN 
                        and now used by multiple practices.
                    </p>
                    <span class="tool-status status-live">Live</span>
                </a>
                
                <!-- Compound Interest Calculator -->
                <a href="/compound-interest.html" class="tool-card">
                    <div class="tool-icon">📈</div>
                    <h3>Compound Interest</h3>
                    <p>
                        Visualize the power of compound growth. Calculate future values with 
                        monthly contributions, various compounding frequencies, and beautiful 
                        charts showing your wealth trajectory.
                    </p>
                    <span class="tool-status status-live">Live</span>
                </a>
                
                <!-- Real Estate ROI -->
                <div class="tool-card">
                    <div class="tool-icon">🏠</div>
                    <h3>Real Estate ROI</h3>
                    <p>
                        Analyze rental properties and flips. Calculate cap rates, cash-on-cash 
                        returns, and total ROI. Includes financing options, expense tracking, 
                        and market comparison tools.
                    </p>
                    <span class="tool-status status-beta">Beta</span>
                </div>
                
                <!-- Tax Estimator -->
                <div class="tool-card">
                    <div class="tool-icon">💰</div>
                    <h3>Tax Estimator</h3>
                    <p>
                        Quick tax liability estimates for W2 and 1099 income. Handles standard 
                        and itemized deductions, state taxes, and quarterly payment calculations. 
                        Powered by TaxSq integration.
                    </p>
                    <span class="tool-status status-coming">Coming Soon</span>
                </div>
                
                <!-- Loan Comparison -->
                <div class="tool-card">
                    <div class="tool-icon">🏦</div>
                    <h3>Loan Comparison</h3>
                    <p>
                        Compare multiple loan offers side-by-side. Total interest paid, monthly 
                        payments, and amortization schedules. Perfect for mortgage shopping 
                        or refinance decisions.
                    </p>
                    <span class="tool-status status-coming">Coming Soon</span>
                </div>
                
                <!-- Practice Metrics -->
                <div class="tool-card">
                    <div class="tool-icon">📊</div>
                    <h3>Practice Metrics</h3>
                    <p>
                        Healthcare practice KPI dashboard. Track patient volume, revenue per 
                        visit, collection rates, and provider productivity. Export-ready 
                        reports for stakeholders.
                    </p>
                    <span class="tool-status status-coming">Coming Soon</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-header">
                <h2>Why GF Labs?</h2>
                <p>Tools designed by someone who actually uses them</p>
            </div>
            
            <div class="features-grid">
                <div class="feature">
                    <div class="feature-icon">⚡</div>
                    <h3>Lightning Fast</h3>
                    <p>No page reloads. Instant calculations. Results update as you type.</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">🎯</div>
                    <h3>Accuracy First</h3>
                    <p>Tested against real-world scenarios. Used in production by actual businesses.</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">📱</div>
                    <h3>Works Everywhere</h3>
                    <p>Desktop, tablet, phone. Progressive web apps that work offline too.</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">🖨️</div>
                    <h3>Print Ready</h3>
                    <p>Clean print layouts for client presentations and documentation.</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">🔒</div>
                    <h3>Privacy First</h3>
                    <p>All calculations happen in your browser. No data sent to servers.</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">🆓</div>
                    <h3>Always Free</h3>
                    <p>No signups, no trials, no catches. Just tools that work.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta">
        <h2>Need a Custom Calculator?</h2>
        <p>I build tools for specific business needs</p>
        <div class="cta-buttons">
            <a href="/contact/" class="btn btn-primary">Let's Talk</a>
            <a href="/projects/" class="btn btn-outline">See Other Projects</a>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <nav>
            <a href="/">Home</a>
            <a href="/real-estate/">Real Estate</a>
            <a href="/projects/">Projects</a>
            <a href="/blog/">Blog</a>
            <a href="/contact/">Contact</a>
        </nav>
        <p style="margin-top: 1rem; opacity: 0.7; font-size: 0.9rem;">
            © 2025 GF Labs by Shafen Khan. All rights reserved.
        </p>
    </footer>
</body>
</html>