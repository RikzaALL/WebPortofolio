<section class="py-24 lg:py-32">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-16" x-data="scrollReveal" x-bind:class="visible ? 'animate-fade-up' : 'opacity-0'">
      <p class="text-accent font-medium text-sm tracking-widest uppercase mb-4">Why Me</p>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-primary tracking-tight">
        Why Work With Me
      </h2>
    </div>

    @php
      $reasons = [
        ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'title' => 'Fast Performance', 'desc' => 'I build optimized websites that load in under 2 seconds with modern tooling and best practices.'],
        ['icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01', 'title' => 'Modern UI', 'desc' => 'Clean, minimal interfaces inspired by Apple, Linear, and Vercel with dark mode and glassmorphism.'],
        ['icon' => 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z', 'title' => 'SEO Friendly', 'desc' => 'Every site is built with semantic HTML, structured data, and optimized for search engines.'],
        ['icon' => 'M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z', 'title' => 'Responsive Design', 'desc' => 'Pixel-perfect across desktop, tablet, and mobile. Every device gets a great experience.'],
        ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Clean Code', 'desc' => 'Maintainable, well-structured code following industry standards and best practices.'],
        ['icon' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'title' => 'Business Focus', 'desc' => 'I build websites that drive results — more leads, better conversions, and stronger online presence.'],
      ];
    @endphp

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" x-data="scrollReveal" x-bind:class="visible ? 'animate-fade-up' : 'opacity-0'">
      @foreach ($reasons as $reason)
        <div class="glass rounded-2xl p-6 hover:bg-white/[0.04] transition-all duration-300 group cursor-default">
          <div class="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center mb-4 group-hover:bg-accent/20 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-accent"><path d="{{ $reason['icon'] }}"/></svg>
          </div>
          <h3 class="text-base font-bold text-primary mb-2">{{ $reason['title'] }}</h3>
          <p class="text-sm text-secondary/80 leading-relaxed">{{ $reason['desc'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>
