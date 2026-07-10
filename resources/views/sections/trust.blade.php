<section class="py-16 border-y border-white/5 relative overflow-hidden">
  <x-dot-bg />
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <p class="text-center text-xs text-secondary uppercase tracking-widest mb-10 font-medium">Trusted Technologies</p>
    <div class="flex flex-wrap justify-center items-center gap-8 md:gap-12" data-reveal data-reveal-dir="up">
      @php
        $trustItems = [
          ['slug' => 'laravel', 'label' => 'Laravel'],
          ['slug' => 'php', 'label' => 'PHP'],
          ['slug' => 'tailwindcss', 'label' => 'Tailwind'],
          ['slug' => 'javascript', 'label' => 'JavaScript'],
          ['slug' => 'docker', 'label' => 'Docker'],
          ['slug' => 'github', 'label' => 'GitHub'],
          ['slug' => 'cloudflare', 'label' => 'Cloudflare'],
          ['slug' => 'vite', 'label' => 'Vite'],
          ['slug' => 'livewire', 'label' => 'Livewire'],
        ];
      @endphp
      @foreach ($trustItems as $item)
        <div class="group cursor-default flex flex-col items-center gap-1.5">
          <img src="https://cdn.simpleicons.org/{{ $item['slug'] }}" alt="{{ $item['label'] }}" class="w-8 h-8 opacity-50 group-hover:opacity-100 transition-opacity">
          <span class="text-[10px] text-secondary/40 group-hover:text-secondary/70 transition-colors">{{ $item['label'] }}</span>
        </div>
      @endforeach
    </div>
  </div>
</section>
