<section id="projects" class="py-12 lg:py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-8" data-reveal data-reveal-dir="up">
      <p class="text-accent font-medium text-xs tracking-widest uppercase mb-2">Portfolio</p>
      <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-primary tracking-tight">
        Featured Projects
      </h2>
    </div>

    @php
      $projects = [
        [
          'title' => 'Hayya Modiste',
          'desc' => 'Business landing page for a fashion brand — fully responsive, SEO-optimized, with WhatsApp integration.',
          'tags' => ['Laravel', 'Tailwind', 'MySQL'],
          'link' => 'https://hayyamodiste.my.id',
          'image' => asset('images/hayya-modiste.jpg'),
        ],
        [
          'title' => 'AI Invoice Generator',
          'desc' => 'Smart invoicing with AI-powered automation.',
          'tags' => [],
          'link' => null,
          'image' => null,
        ],
        [
          'title' => 'ERP UMKM',
          'desc' => 'Business management for small & medium enterprises.',
          'tags' => [],
          'link' => null,
          'image' => null,
        ],
        [
          'title' => 'AI Portfolio Builder',
          'desc' => 'Generate stunning portfolios with AI assistance.',
          'tags' => [],
          'link' => null,
          'image' => null,
        ],
      ];
    @endphp

    <div class="max-w-xl mx-auto" x-data="{
      slides: {{ json_encode($projects) }},
      current: 0,
      total: {{ count($projects) }},
      init() {
        setInterval(() => {
          this.current = (this.current + 1) % this.total;
        }, 4500);
      }
    }">
      <template x-for="(item, i) in slides" :key="i">
        <div x-show="current === i" x-transition:enter="transition-all duration-700 ease-in-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
          <div class="glass rounded-xl overflow-hidden" data-tilt="10">
            <div class="aspect-video bg-gradient-to-br from-accent/10 via-surface to-accent/5 flex items-center justify-center relative overflow-hidden">
              <div class="absolute inset-0 bg-gradient-to-t from-surface/80 to-transparent z-10"></div>
              <template x-if="item.image">
                <img :src="item.image" :alt="item.title" class="absolute inset-0 w-full h-full object-cover">
              </template>
              <div class="relative z-20 text-center p-4" x-show="!item.image">
                <div class="w-10 h-10 rounded-xl bg-accent/20 flex items-center justify-center mx-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-accent"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                </div>
              </div>
            </div>
            <div class="p-4">
              <div class="flex flex-wrap gap-1.5 mb-2" x-show="item.tags.length">
                <template x-for="tag in item.tags" :key="tag">
                  <span class="px-2 py-0.5 text-[10px] font-medium bg-accent/10 text-accent rounded-full" x-text="tag"></span>
                </template>
              </div>
              <h3 class="text-base font-bold text-primary mb-0.5" x-text="item.title"></h3>
              <p class="text-xs text-secondary/80 mb-3" x-text="item.desc"></p>
              <div x-show="item.link">
                <a :href="item.link" target="_blank" rel="noopener noreferrer" class="inline-flex px-3 py-1.5 bg-accent hover:bg-hover text-white text-[11px] font-medium rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-accent/25">Live Demo</a>
              </div>
              <div x-show="!item.link">
                <span class="inline-flex px-3 py-1.5 bg-white/5 text-secondary/50 text-[11px] font-medium rounded-lg">Coming Soon</span>
              </div>
            </div>
          </div>
        </div>
      </template>

      <div class="flex justify-center gap-1.5 mt-4">
        <template x-for="(item, i) in slides" :key="i">
          <button @click="current = i"
            class="w-1.5 h-1.5 rounded-full transition-all duration-300"
            :class="current === i ? 'bg-accent w-4' : 'bg-white/20 hover:bg-white/40'">
          </button>
        </template>
      </div>
    </div>

    <div class="text-center mt-6" data-reveal data-reveal-dir="up">
      <a href="{{ url('/projects') }}" class="inline-flex items-center gap-2 px-5 py-2.5 glass-light text-primary text-xs font-medium rounded-xl transition-all duration-300 hover:bg-white/10">
        View All Projects
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>
</section>
