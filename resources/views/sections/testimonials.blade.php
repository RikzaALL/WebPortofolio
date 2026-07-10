<section class="py-24 lg:py-32 bg-surface/30 relative overflow-hidden">
  <x-dot-bg />
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-16" data-reveal data-reveal-dir="up">
      <p class="text-accent font-medium text-sm tracking-widest uppercase mb-4">Testimonials</p>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-primary tracking-tight">
        What People Say
      </h2>
    </div>

    @php
      $testimonials = [
        ['initials' => 'FC', 'name' => 'Future Client', 'role' => 'Business Owner', 'text' => 'Your testimonial could go here. Real feedback from real clients builds trust.', 'stars' => 5],
        ['initials' => 'FC', 'name' => 'Future Client', 'role' => 'Startup Founder', 'text' => 'Professional, fast, and delivers quality work. Highly recommend for any web development project.', 'stars' => 5],
        ['initials' => 'FC', 'name' => 'Future Client', 'role' => 'Creative Director', 'text' => 'The attention to detail and modern design approach sets this work apart. Truly premium quality.', 'stars' => 5],
        ['initials' => 'FC', 'name' => 'Future Client', 'role' => 'Product Manager', 'text' => 'Exceptional communication and technical skills. A pleasure to work with from start to finish.', 'stars' => 4],
        ['initials' => 'FC', 'name' => 'Future Client', 'role' => 'E-commerce Owner', 'text' => 'Built me a stunning online store. Load times are incredible and the design is exactly what I wanted.', 'stars' => 5],
        ['initials' => 'FC', 'name' => 'Future Client', 'role' => 'Agency Lead', 'text' => 'Reliable, talented, and always meets deadlines. Would trust with any client project.', 'stars' => 5],
      ];
    @endphp

    <div class="max-w-2xl mx-auto" x-data="{
      slides: {{ json_encode($testimonials) }},
      current: 0,
      total: {{ count($testimonials) }},
      init() {
        setInterval(() => {
          this.current = (this.current + 1) % this.total;
        }, 4000);
      }
    }">
      <template x-for="(item, i) in slides" :key="i">
        <div x-show="current === i" x-transition:enter="transition-all duration-700 ease-in-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
          <div class="glass rounded-2xl p-8 lg:p-10 text-center">
            <div class="w-16 h-16 rounded-full bg-gradient-to-br from-accent/30 to-accent/10 flex items-center justify-center mx-auto mb-5">
              <span class="text-lg font-bold text-accent" x-text="item.initials"></span>
            </div>
            <p class="text-base text-secondary/80 leading-relaxed italic mb-6" x-text="item.text"></p>
            <div class="flex justify-center gap-1 mb-4">
              <template x-for="s in item.stars" :key="s">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="text-accent"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </template>
            </div>
            <h4 class="text-sm font-semibold text-primary" x-text="item.name"></h4>
            <p class="text-xs text-secondary/60" x-text="item.role"></p>
          </div>
        </div>
      </template>

      <div class="flex justify-center gap-2 mt-8">
        <template x-for="(item, i) in slides" :key="i">
          <button @click="current = i"
            class="w-2 h-2 rounded-full transition-all duration-300"
            :class="current === i ? 'bg-accent w-6' : 'bg-white/20 hover:bg-white/40'">
          </button>
        </template>
      </div>
    </div>
  </div>
</section>
