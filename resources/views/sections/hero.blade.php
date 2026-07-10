<section id="home" class="relative min-h-screen flex items-center overflow-hidden pt-20">
  <div class="absolute inset-0 z-[3] pointer-events-none">
    <div class="absolute inset-0 dot-grid"></div>
    <div class="absolute inset-0 dot-blur"></div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
      <div class="space-y-8" data-reveal data-reveal-dir="up">
        <div class="space-y-4">
          <p class="text-accent font-medium text-sm tracking-widest uppercase">Web Developer</p>
          <h1 class="text-3xl sm:text-4xl lg:text-6xl font-bold text-primary leading-[1.1] tracking-tight whitespace-nowrap">
            Hi, I'm
            <span class="bg-gradient-to-r from-primary via-accent to-hover bg-clip-text text-transparent animate-gradient inline-block" x-data="{ text: '', fullText: 'Rikza Alif Muharom.', show: false }" x-init="show = true; let i = 0; let interval = setInterval(() => { text = fullText.slice(0, i + 1); i++; if (i >= fullText.length) clearInterval(interval); }, 60)"><span x-text="text"></span><span class="animate-pulse" x-show="text.length < fullText.length">|</span></span>
          </h1>
          <h2 class="text-xl sm:text-2xl lg:text-3xl text-secondary font-medium leading-snug max-w-xl">
            I build modern business websites that are fast, beautiful, and SEO-friendly.
          </h2>
        </div>

        <p class="text-base text-secondary/80 leading-relaxed max-w-lg">
          I specialize in Laravel, modern frontend development, and AI-assisted workflows to create websites that help businesses grow online.
        </p>

        <div class="flex flex-wrap gap-4">
          <a
            href="#projects"
            class="px-8 py-3.5 bg-accent hover:bg-hover text-white font-medium rounded-2xl transition-all duration-300 hover:shadow-lg hover:shadow-accent/25 hover:-translate-y-0.5 text-sm"
          >
            View Projects
          </a>
          <a
            href="#contact"
            class="px-8 py-3.5 glass-light text-primary font-medium rounded-2xl transition-all duration-300 hover:bg-white/10 hover:-translate-y-0.5 text-sm"
          >
            Contact Me
          </a>
        </div>

        <div class="flex items-center gap-4 pt-4">
          <span class="text-xs text-secondary uppercase tracking-widest">Find me</span>
          <div class="h-px flex-1 bg-white/5"></div>
          <div class="flex gap-3">
            <a href="https://github.com/RikzaALL" target="_blank" rel="noopener noreferrer" class="p-2.5 text-secondary hover:text-primary hover:bg-white/5 rounded-xl transition-all" aria-label="GitHub" data-cursor-hover>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            </a>
            <a href="https://www.linkedin.com/in/rikza-alif-muharom-a20a49387/" target="_blank" rel="noopener noreferrer" class="p-2.5 text-secondary hover:text-primary hover:bg-white/5 rounded-xl transition-all" aria-label="LinkedIn" data-cursor-hover>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
            <a href="https://instagram.com/rkz_mhrm" target="_blank" rel="noopener noreferrer" class="p-2.5 text-secondary hover:text-primary hover:bg-white/5 rounded-xl transition-all" aria-label="Instagram" data-cursor-hover>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            </a>
            <a href="mailto:alifrikza45@gmail.com" class="p-2.5 text-secondary hover:text-primary hover:bg-white/5 rounded-xl transition-all" aria-label="Email" data-cursor-hover>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </a>
          </div>
        </div>
      </div>

      <div class="hidden lg:flex justify-center items-center" data-reveal data-reveal-dir="right" data-reveal-delay="200">
        <div class="relative" data-parallax="0.15">
          <div class="w-80 h-80 rounded-full bg-gradient-to-br from-accent/20 via-accent/10 to-transparent animate-float"></div>
          <div class="absolute inset-0 flex items-center justify-center">
            <div class="glass rounded-3xl p-8 w-72 h-72 flex flex-col items-center justify-center gap-4">
              <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-accent to-hover flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
              </div>
              <p class="text-primary font-semibold text-lg">Full-Stack</p>
              <p class="text-secondary text-sm">Laravel + Modern Frontend</p>
              <div class="flex items-center gap-2 bg-success/10 px-3 py-1.5 rounded-full">
                <span class="w-2 h-2 rounded-full bg-success shadow-sm shadow-success/50"></span>
                <span class="text-xs font-medium text-success">Available for hire</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-float" data-parallax="0.05">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-secondary/50"><polyline points="7 13 12 18 17 13"/><polyline points="7 6 12 11 17 6"/></svg>
  </div>
</section>
