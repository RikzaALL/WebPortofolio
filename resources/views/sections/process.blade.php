<section class="py-24 lg:py-32 bg-surface/30">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-16" x-data="scrollReveal" x-bind:class="visible ? 'animate-fade-up' : 'opacity-0'">
      <p class="text-accent font-medium text-sm tracking-widest uppercase mb-4">Process</p>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-primary tracking-tight">
        How I Work
      </h2>
    </div>

    @php
      $steps = [
        ['num' => '01', 'title' => 'Discovery', 'desc' => 'Understanding your goals, audience, and vision.'],
        ['num' => '02', 'title' => 'Planning', 'desc' => 'Mapping out architecture, content, and timeline.'],
        ['num' => '03', 'title' => 'Development', 'desc' => 'Building with clean code, modern tools, and regular updates.'],
        ['num' => '04', 'title' => 'Testing', 'desc' => 'Rigorous QA for performance, accessibility, and responsiveness.'],
        ['num' => '05', 'title' => 'Deployment', 'desc' => 'Launching on production with Cloudflare and monitoring.'],
        ['num' => '06', 'title' => 'Maintenance', 'desc' => 'Ongoing support, updates, and optimization.'],
      ];
    @endphp

    <div class="relative">
      <div class="hidden lg:block absolute left-1/2 -translate-x-px top-0 bottom-0 w-px bg-gradient-to-b from-accent/40 via-accent/10 to-transparent"></div>

      <div class="space-y-12 lg:space-y-0">
        @foreach ($steps as $index => $step)
          <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center" x-data="scrollReveal" x-bind:class="visible ? 'animate-fade-up' : 'opacity-0'">
            <div class="{{ $loop->even ? 'lg:order-2 lg:text-right' : '' }}">
              <div class="glass inline-flex items-center gap-3 rounded-2xl px-5 py-3 mb-4">
                <span class="text-2xl font-bold text-accent">{{ $step['num'] }}</span>
                <div class="w-px h-6 bg-white/10"></div>
                <h3 class="text-lg font-bold text-primary">{{ $step['title'] }}</h3>
              </div>
              <p class="text-sm text-secondary/80 max-w-md {{ $loop->even ? 'lg:ml-auto' : '' }}">{{ $step['desc'] }}</p>
            </div>
            <div class="hidden lg:flex justify-center">
              <div class="w-8 h-8 rounded-full bg-accent/20 border-2 border-accent flex items-center justify-center">
                <div class="w-2 h-2 rounded-full bg-accent"></div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
