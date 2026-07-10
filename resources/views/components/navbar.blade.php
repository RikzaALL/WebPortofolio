<nav
  x-data="navbar"
  x-bind:class="[
    hidden ? '-translate-y-full' : 'translate-y-0',
    scrolled ? 'bg-surface/80 backdrop-blur-xl border-b border-white/5 shadow-lg shadow-black/10' : 'bg-transparent'
  ]"
  class="fixed top-0 left-0 right-0 z-50 transition-all duration-500"
>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 lg:h-20">
      <a href="{{ url('/') }}" class="flex items-center gap-2 group">
        <span class="text-xl font-bold text-primary tracking-tight group-hover:text-accent transition-colors">RA</span>
      </a>

      <div class="hidden md:flex items-center gap-1">
        @php
          $navLinks = [
            ['href' => '#projects', 'label' => 'Projects'],
            ['href' => '#skills', 'label' => 'Skills'],
            ['href' => '#about', 'label' => 'About'],
            ['href' => '#contact', 'label' => 'Contact'],
          ];
        @endphp
        @foreach ($navLinks as $link)
          <a
            href="{{ $link['href'] }}"
            class="px-4 py-2 text-sm text-secondary hover:text-primary transition-colors rounded-lg hover:bg-white/5"
          >
            {{ $link['label'] }}
          </a>
        @endforeach
        <a
          href="{{ route('resume') }}"
          target="_blank"
          class="ml-2 px-5 py-2 text-sm font-medium text-white bg-accent hover:bg-hover rounded-xl transition-all duration-300 hover:shadow-lg hover:shadow-accent/25"
        >
          Resume
        </a>
      </div>

      <button
        x-on:click="mobileOpen = !mobileOpen"
        class="md:hidden p-2 text-secondary hover:text-primary transition-colors"
        aria-label="Toggle navigation"
      >
        <svg x-show="!mobileOpen" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="6" x2="20" y2="6"/><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="18" x2="20" y2="18"/></svg>
        <svg x-show="mobileOpen" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
  </div>

  <div
    x-show="mobileOpen"
    x-cloak
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 -translate-y-4"
    x-transition:enter-end="opacity-1 translate-y-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-1 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-4"
    class="md:hidden border-t border-white/5 bg-surface/95 backdrop-blur-xl"
  >
    <div class="px-4 py-4 space-y-1">
      @foreach ($navLinks as $link)
        <a
          href="{{ $link['href'] }}"
          x-on:click="mobileOpen = false"
          class="block px-4 py-3 text-sm text-secondary hover:text-primary hover:bg-white/5 rounded-lg transition-colors"
        >
          {{ $link['label'] }}
        </a>
      @endforeach
      <a
        href="{{ route('resume') }}"
        target="_blank"
        class="block px-4 py-3 text-sm font-medium text-white bg-accent hover:bg-hover rounded-xl transition-colors text-center"
      >
        Resume
      </a>
    </div>
  </div>
</nav>
