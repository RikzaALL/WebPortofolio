<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rikza Alif Muharom - Resume</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Inter', -apple-system, sans-serif;
      font-size: 10pt;
      line-height: 1.5;
      color: #1a1a2e;
      background: #fff;
      -webkit-print-color-adjust: exact;
      print-color-adjust: exact;
    }
    .page {
      max-width: 210mm;
      margin: 0 auto;
      padding: 2.5rem 2rem;
    }
    .header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 1.5rem;
      padding-bottom: 1rem;
      border-bottom: 3px solid #3B82F6;
    }
    .header-left h1 {
      font-size: 24pt;
      font-weight: 700;
      color: #09090B;
      letter-spacing: -0.02em;
    }
    .header-left .title {
      font-size: 11pt;
      color: #3B82F6;
      font-weight: 600;
      margin-top: 2px;
    }
    .header-right {
      text-align: right;
      font-size: 8.5pt;
      color: #52525B;
      line-height: 1.6;
    }
    .header-right a {
      color: #3B82F6;
      text-decoration: none;
    }
    .section { margin-bottom: 1.25rem; }
    .section-title {
      font-size: 11pt;
      font-weight: 700;
      color: #09090B;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      margin-bottom: 0.6rem;
      padding-bottom: 0.3rem;
      border-bottom: 1.5px solid #E4E4E7;
    }
    .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
    .skill-group { margin-bottom: 0.5rem; }
    .skill-group h4 {
      font-size: 9pt;
      font-weight: 600;
      color: #3B82F6;
      margin-bottom: 0.2rem;
    }
    .skill-group p { font-size: 8.5pt; color: #52525B; }
    .project {
      margin-bottom: 0.6rem;
      padding-bottom: 0.6rem;
      border-bottom: 1px solid #F4F4F5;
    }
    .project:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
    .project h4 {
      font-size: 9.5pt;
      font-weight: 600;
      color: #09090B;
    }
    .project .meta {
      font-size: 8pt;
      color: #3B82F6;
      font-weight: 500;
    }
    .project p {
      font-size: 8.5pt;
      color: #52525B;
      margin-top: 2px;
    }
    .contact-row {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem 1.5rem;
      font-size: 8.5pt;
      color: #52525B;
      margin-bottom: 0.5rem;
    }
    .contact-row strong { color: #09090B; }
    .about-text {
      font-size: 9pt;
      color: #52525B;
      line-height: 1.6;
    }
    ul.tools {
      list-style: none;
      display: flex;
      flex-wrap: wrap;
      gap: 0.3rem 0.6rem;
      font-size: 8pt;
      color: #52525B;
    }
    ul.tools li {
      background: #F4F4F5;
      padding: 0.15rem 0.6rem;
      border-radius: 3px;
    }
    @media print {
      body { font-size: 9pt; }
      .page { padding: 1.5rem 1.2rem; }
      .header { margin-bottom: 1rem; }
    }
  </style>
</head>
<body>
  <div class="page">
    <div class="header">
      <div class="header-left">
        <h1>Rikza Alif Muharom</h1>
        <div class="title">Full-Stack Web Developer</div>
      </div>
      <div class="header-right">
        alifrikza45@gmail.com<br>
        +62 877-1533-3749<br>
        <a href="https://github.com/RikzaALL">github.com/RikzaALL</a><br>
        <a href="https://linkedin.com/in/rikza-alif-muharom-a20a49387">linkedin.com/in/rikza-alif-muharom</a>
      </div>
    </div>

    <div class="section">
      <div class="section-title">About</div>
      <p class="about-text">
        Web developer passionate about building modern, high-performance websites and applications.
        Specializing in Laravel, modern frontend technologies, and AI-assisted workflows. Focused on
        creating clean, responsive, and SEO-friendly digital experiences that help businesses grow.
      </p>
    </div>

    <div class="section">
      <div class="section-title">Skills & Technologies</div>
      <div class="grid-2">
        <div class="skill-group">
          <h4>Frontend</h4>
          <p>Tailwind CSS, JavaScript, Alpine.js, Vite, Responsive Design</p>
        </div>
        <div class="skill-group">
          <h4>Backend</h4>
          <p>Laravel, PHP, Livewire, MySQL, REST APIs</p>
        </div>
        <div class="skill-group">
          <h4>DevOps & Tools</h4>
          <p>Git, Docker, Cloudflare, Linux, SEO Optimization</p>
        </div>
        <div class="skill-group">
          <h4>AI & Productivity</h4>
          <p>ChatGPT, Claude, OpenCode, AI-Assisted Development</p>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="section-title">Featured Projects</div>

      <div class="project">
        <h4>Hayya Modiste</h4>
        <div class="meta">Tailwind CSS · SEO · JS</div>
        <p>Business landing page for a fashion brand — fully responsive, SEO-optimized, with WhatsApp integration.</p>
      </div>

      <div class="project">
        <h4>AI Invoice Generator</h4>
        <div class="meta">Laravel · AI Integration</div>
        <p>Smart invoicing system with AI-powered automation for generating professional invoices.</p>
      </div>

      <div class="project">
        <h4>ERP UMKM</h4>
        <div class="meta">Laravel · Livewire · MySQL</div>
        <p>Business management system for small and medium enterprises with inventory, sales, and reporting.</p>
      </div>

      <div class="project">
        <h4>RikzaPorto (Portfolio)</h4>
        <div class="meta">Laravel · Tailwind · Alpine.js · Three.js</div>
        <p>Personal portfolio website with 3D interactive hero, scroll animations, and modern dark theme.</p>
      </div>
    </div>

    <div class="section">
      <div class="section-title">Tools & Environment</div>
      <ul class="tools">
        <li>VS Code / Cursor</li>
        <li>Docker</li>
        <li>Git & GitHub</li>
        <li>Cloudflare</li>
        <li>MySQL</li>
        <li>Linux / WSL</li>
        <li>Node.js</li>
        <li>Composer</li>
        <li>Vite</li>
      </ul>
    </div>

    <div class="section" style="margin-bottom: 0;">
      <div class="section-title">Languages</div>
      <p style="font-size: 9pt; color: #52525B;">
        <strong>Indonesian</strong> (Native) &middot;
        <strong>English</strong> (Professional Working)
      </p>
    </div>
  </div>
</body>
</html>
