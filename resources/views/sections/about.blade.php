<section id="about" class="py-24 lg:py-32">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
      <div x-data="scrollReveal" x-bind:class="visible ? 'animate-fade-left' : 'opacity-0'">
        <p class="text-accent font-medium text-sm tracking-widest uppercase mb-4">About Me</p>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-primary tracking-tight mb-6">
          Building digital experiences that matter
        </h2>
        <div class="space-y-4 text-secondary leading-relaxed">
          <p>
            I enjoy building clean, responsive, and high-performance websites for businesses. My focus is creating digital experiences that are modern, SEO-friendly, and easy to maintain.
          </p>
          <p>
            I also leverage AI tools to improve development speed while maintaining code quality. Every project I work on is built with performance, accessibility, and business goals in mind.
          </p>
        </div>
      </div>

      <div class="grid grid-cols-3 gap-4" x-data="scrollReveal" x-bind:class="visible ? 'animate-fade-right' : 'opacity-0'">
        @php
          $stats = [
            ['value' => '15+', 'label' => 'Projects Completed'],
            ['value' => '10+', 'label' => 'Technologies'],
            ['value' => '3+', 'label' => 'Years Learning'],
          ];
        @endphp
        @foreach ($stats as $stat)
          <div class="glass rounded-2xl p-6 text-center hover:bg-white/[0.04] transition-colors duration-300">
            <p class="text-3xl lg:text-4xl font-bold text-primary mb-1">{{ $stat['value'] }}</p>
            <p class="text-xs text-secondary/70 leading-relaxed">{{ $stat['label'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
