@extends('layouts.app')

@section('title', 'Uses - Rikza Alif')

@section('description', 'See the tools, software, and hardware I use for web development.')

@section('content')
  <section class="pt-32 pb-24 lg:pb-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto">
        <p class="text-accent font-medium text-sm tracking-widest uppercase mb-4">Uses</p>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-primary tracking-tight mb-6 leading-[1.1]">
          My Development <span class="bg-gradient-to-r from-accent to-hover bg-clip-text text-transparent">Setup</span>
        </h1>
        <p class="text-base text-secondary/80 mb-12 leading-relaxed">
          A complete list of the tools, software, and hardware I use daily for web development. Inspired by the /uses movement.
        </p>

        @php
          $categories = [
            'Hardware' => [
              ['name' => 'Laptop', 'desc' => 'Primary development machine'],
            ],
            'Editor & Terminal' => [
              ['name' => 'VS Code', 'desc' => 'Main code editor'],
              ['name' => 'Cursor / Windsurf', 'desc' => 'AI-assisted coding'],
            ],
            'AI Tools' => [
              ['name' => 'ChatGPT', 'desc' => 'AI assistance and problem solving'],
              ['name' => 'Claude', 'desc' => 'AI pair programming and code generation'],
              ['name' => 'OpenCode', 'desc' => 'AI-powered coding agent'],
            ],
            'DevOps & Tools' => [
              ['name' => 'Docker', 'desc' => 'Containerized development'],
              ['name' => 'GitHub', 'desc' => 'Version control and collaboration'],
              ['name' => 'Cloudflare', 'desc' => 'CDN, DNS, and security'],
            ],
            'Frameworks & Tech' => [
              ['name' => 'Laravel', 'desc' => 'PHP framework for web artisans'],
              ['name' => 'Tailwind CSS', 'desc' => 'Utility-first CSS framework'],
            ],
          ];
        @endphp

        <div class="space-y-10">
          @foreach ($categories as $category => $items)
            <div>
              <h2 class="text-lg font-bold text-primary mb-4">{{ $category }}</h2>
              <div class="space-y-3">
                @foreach ($items as $item)
                  <div class="glass rounded-2xl p-4 flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-accent/10 flex items-center justify-center shrink-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-accent"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                    </div>
                    <div>
                      <h3 class="text-sm font-semibold text-primary">{{ $item['name'] }}</h3>
                      <p class="text-xs text-secondary/70">{{ $item['desc'] }}</p>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
@endsection
