<section id="skills" class="py-24 lg:py-32 bg-surface/30">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-16" x-data="scrollReveal" x-bind:class="visible ? 'animate-fade-up' : 'opacity-0'">
      <p class="text-accent font-medium text-sm tracking-widest uppercase mb-4">Expertise</p>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-primary tracking-tight">
        Skills & Technologies
      </h2>
    </div>

    @php
      $skillGroups = [
        'Frontend' => [
          ['name' => 'Tailwind CSS', 'desc' => 'Utility-first CSS framework', 'cdn' => 'tailwindcss'],
          ['name' => 'JavaScript', 'desc' => 'Dynamic web interactions', 'cdn' => 'javascript'],
          ['name' => 'HTML & CSS', 'desc' => 'Semantic, responsive markup', 'cdn' => 'html5'],
          ['name' => 'Vite', 'desc' => 'Modern build tooling', 'cdn' => 'vite'],
        ],
        'Backend' => [
          ['name' => 'Laravel', 'desc' => 'PHP framework for artisans', 'cdn' => 'laravel'],
          ['name' => 'PHP', 'desc' => 'Server-side scripting', 'cdn' => 'php'],
          ['name' => 'Livewire', 'desc' => 'Dynamic Laravel components', 'cdn' => 'livewire'],
        ],
        'DevOps & Tools' => [
          ['name' => 'Git', 'desc' => 'Version control', 'cdn' => 'git'],
          ['name' => 'Docker', 'desc' => 'Containerized development', 'cdn' => 'docker'],
          ['name' => 'Cloudflare', 'desc' => 'CDN & security', 'cdn' => 'cloudflare'],
          ['name' => 'SEO', 'desc' => 'Search engine optimization', 'icon' => 'seo'],
          ['name' => 'Responsive Design', 'desc' => 'Mobile-first approach', 'icon' => 'responsive'],
        ],
      ];
    @endphp

    @foreach ($skillGroups as $groupName => $skills)
      <div class="mb-16 last:mb-0">
        <h3 class="text-lg font-semibold text-primary/60 mb-6 tracking-wide">{{ $groupName }}</h3>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4" x-data="scrollReveal" x-bind:class="visible ? 'animate-fade-up' : 'opacity-0'">
          @foreach ($skills as $index => $skill)
            <div
              class="glass rounded-2xl p-5 hover:bg-white/[0.04] transition-all duration-300 group cursor-default"
            >
              <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0 group-hover:bg-white/10 transition-colors">
                  <img src="{{ isset($skill['cdn']) ? 'https://cdn.simpleicons.org/' . $skill['cdn'] : asset('images/skills/' . $skill['icon'] . '.svg') }}" alt="{{ $skill['name'] }}" class="w-5 h-5">
                </div>
                <div>
                  <h4 class="text-sm font-semibold text-primary group-hover:text-accent transition-colors">{{ $skill['name'] }}</h4>
                  <p class="text-xs text-secondary/70 mt-1">{{ $skill['desc'] }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @endforeach
  </div>
</section>
