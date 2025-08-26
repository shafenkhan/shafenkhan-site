<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Shafen Khan | Real Estate & Operations Insights</title>
    <meta name="description" content="Insights on real estate, healthcare operations, AI automation, and building scalable systems. Practical lessons from DFW and beyond.">
    <link rel="canonical" href="https://shafenkhan.com/blog/">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Blog - Shafen Khan">
    <meta property="og:description" content="Insights on real estate, healthcare operations, AI automation, and building scalable systems.">
    <meta property="og:url" content="https://shafenkhan.com/blog/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://shafenkhan.com/images/shafen-headshot.jpg">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Blog - Shafen Khan">
    <meta name="twitter:description" content="Insights on real estate, healthcare operations, AI automation, and building scalable systems.">
    <meta name="twitter:image" content="https://shafenkhan.com/images/shafen-headshot.jpg">
    
    <!-- JSON-LD Blog Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Blog",
        "name": "Shafen Khan Blog",
        "description": "Insights on real estate, healthcare operations, AI automation, and building scalable systems",
        "url": "https://shafenkhan.com/blog/",
        "author": {
            "@type": "Person",
            "name": "Shafen Khan",
            "url": "https://shafenkhan.com"
        },
        "blogPost": [
            {
                "@type": "BlogPosting",
                "headline": "The Practice Consulting OS: Turning a Clinic into a System",
                "url": "https://shafenkhan.com/blog/the-practice-consulting-os.php",
                "datePublished": "2025-08-23",
                "description": "How I turn a messy healthcare practice into a repeatable operating system using discovery, KPI trees, and targeted automations."
            },
            {
                "@type": "BlogPosting",
                "headline": "My DFW Real Estate Operating System",
                "url": "https://shafenkhan.com/blog/dfw-real-estate-operating-system.php",
                "datePublished": "2025-08-23",
                "description": "The playbook I use in Dallas-Fort Worth for buyers, sellers, and agents—pre-approval packs, offer templates, TC pipelines."
            }
        ]
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
        }
        
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 5rem 2rem;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        .hero p {
            font-size: 1.25rem;
            opacity: 0.95;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }
        
        .posts-grid {
            display: grid;
            gap: 3rem;
            margin-top: 3rem;
        }
        
        .post-card {
            background: white;
            border: 1px solid #e9ecef;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            text-decoration: none;
            color: inherit;
            display: block;
        }
        
        .post-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .post-header {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 2rem;
            border-bottom: 1px solid #e9ecef;
        }
        
        .post-category {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            margin-bottom: 1rem;
        }
        
        .post-title {
            font-size: 1.75rem;
            color: #1a1a2e;
            margin-bottom: 0.5rem;
        }
        
        .post-meta {
            color: #666;
            font-size: 0.9rem;
        }
        
        .post-body {
            padding: 2rem;
        }
        
        .post-excerpt {
            color: #555;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }
        
        .post-tags {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin-bottom: 1.5rem;
        }
        
        .tag {
            background: #f8f9fa;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            color: #495057;
        }
        
        .read-more {
            color: #667eea;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .read-more:hover {
            gap: 0.75rem;
        }
        
        .topics {
            background: #f8f9fa;
            padding: 4rem 2rem;
        }
        
        .topics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            max-width: 800px;
            margin: 2rem auto 0;
        }
        
        .topic-card {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            text-align: center;
            border: 1px solid #e9ecef;
        }
        
        .topic-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
        
        .topic-name {
            font-weight: 600;
            color: #333;
        }
        
        .newsletter {
            background: #1a1a2e;
            color: white;
            padding: 4rem 2rem;
            text-align: center;
        }
        
        .newsletter h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        
        .newsletter-form {
            max-width: 500px;
            margin: 2rem auto 0;
            display: flex;
            gap: 1rem;
        }
        
        .newsletter-form input {
            flex: 1;
            padding: 1rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
        }
        
        .newsletter-form button {
            background: #667eea;
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .newsletter-form button:hover {
            background: #5a67d8;
        }
        
        footer {
            background: #f8f9fa;
            padding: 2rem;
            text-align: center;
        }
        
        footer nav a {
            margin: 0 1rem;
            color: #666;
            text-decoration: none;
        }
        
        footer nav a:hover {
            color: #667eea;
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .post-title {
                font-size: 1.5rem;
            }
            
            .newsletter-form {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <h1>Insights & Ideas</h1>
        <p>Practical lessons from building systems in real estate, healthcare, and technology</p>
    </section>
    
    <!-- Blog Posts -->
    <section class="container">
        <h2 style="font-size: 2rem; margin-bottom: 1rem;">Latest Articles</h2>
        <p style="color: #666; margin-bottom: 3rem;">Deep dives into operations, automation, and market insights</p>
        
        <div class="posts-grid">
            <!-- Post 1: Practice Consulting OS -->
            <article class="post-card" onclick="window.location.href='/blog/the-practice-consulting-os.php'">
                <div class="post-header">
                    <span class="post-category">Healthcare</span>
                    <h3 class="post-title">The Practice Consulting OS: Turning a Clinic into a System</h3>
                    <p class="post-meta">August 23, 2025 • 8 min read</p>
                </div>
                <div class="post-body">
                    <p class="post-excerpt">
                        How I turn a messy healthcare practice into a repeatable operating system using discovery, 
                        KPI trees, and targeted automations. Real lessons from Legacy OBGYN where we went from 
                        6-week billing lag to real-time dashboards, increasing collections by 23% without adding staff.
                    </p>
                    <div class="post-tags">
                        <span class="tag">Healthcare</span>
                        <span class="tag">AI</span>
                        <span class="tag">Operations</span>
                        <span class="tag">Consulting</span>
                    </div>
                    <a href="/blog/the-practice-consulting-os.php" class="read-more">
                        Read full article →
                    </a>
                </div>
            </article>
            
            <!-- Post 2: DFW Real Estate OS -->
            <article class="post-card" onclick="window.location.href='/blog/dfw-real-estate-operating-system.php'">
                <div class="post-header">
                    <span class="post-category">Real Estate</span>
                    <h3 class="post-title">My DFW Real Estate Operating System</h3>
                    <p class="post-meta">August 23, 2025 • 10 min read</p>
                </div>
                <div class="post-body">
                    <p class="post-excerpt">
                        The playbook I use in Dallas-Fort Worth for buyers, sellers, and agents. From pre-approval 
                        packs to offer templates, TC pipelines to option-period strategies. This system has helped 
                        win in 7+ offer situations this year and keeps 30+ moving parts synchronized from contract to close.
                    </p>
                    <div class="post-tags">
                        <span class="tag">Real Estate</span>
                        <span class="tag">DFW</span>
                        <span class="tag">Transactions</span>
                        <span class="tag">TC</span>
                    </div>
                    <a href="/blog/dfw-real-estate-operating-system.php" class="read-more">
                        Read full article →
                    </a>
                </div>
            </article>
        </div>
    </section>
    
    <!-- Topics Section -->
    <section class="topics">
        <div class="container">
            <h2 style="text-align: center; font-size: 2rem; margin-bottom: 1rem;">Topics I Cover</h2>
            <p style="text-align: center; color: #666; margin-bottom: 2rem;">
                Systems thinking applied across industries
            </p>
            
            <div class="topics-grid">
                <div class="topic-card">
                    <div class="topic-icon">🏠</div>
                    <div class="topic-name">Real Estate</div>
                </div>
                <div class="topic-card">
                    <div class="topic-icon">🏥</div>
                    <div class="topic-name">Healthcare Ops</div>
                </div>
                <div class="topic-card">
                    <div class="topic-icon">🤖</div>
                    <div class="topic-name">AI & Automation</div>
                </div>
                <div class="topic-card">
                    <div class="topic-icon">📊</div>
                    <div class="topic-name">Business Systems</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Newsletter Section -->
    <section class="newsletter">
        <h2>Stay Updated</h2>
        <p style="margin-bottom: 2rem; opacity: 0.9;">
            Get new articles and insights delivered to your inbox
        </p>
        <form class="newsletter-form" action="#" method="post">
            <input type="email" placeholder="Enter your email" required>
            <button type="submit">Subscribe</button>
        </form>
        <p style="margin-top: 1rem; font-size: 0.9rem; opacity: 0.7;">
            No spam, unsubscribe anytime
        </p>
    </section>
    
    <!-- Footer -->
    <footer>
        <nav>
            <a href="/">Home</a>
            <a href="/real-estate/">Real Estate</a>
            <a href="/projects/">Projects</a>
            <a href="/contact/">Contact</a>
        </nav>
        <p style="margin-top: 1rem; color: #666; font-size: 0.9rem;">
            © 2025 Shafen Khan. All rights reserved.
        </p>
    </footer>
</body>
</html>