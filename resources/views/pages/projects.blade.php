@extends('layouts.app')

@section('title', 'Projects - Rikza Alif')

@section('description', 'Explore my portfolio of web development projects including business landing pages, full-stack applications, and AI-powered tools.')

@section('content')
  <section class="pt-32 pb-24 lg:pb-32 relative overflow-hidden">
    <x-dot-bg />
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-2xl mx-auto mb-16">
        <p class="text-accent font-medium text-sm tracking-widest uppercase mb-4">Portfolio</p>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-primary tracking-tight leading-[1.1]">
          All Projects
        </h1>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2">
          <div class="glass rounded-3xl overflow-hidden">
            <div class="aspect-video bg-gradient-to-br from-accent/10 via-surface to-accent/5 flex items-center justify-center">
              <div class="w-16 h-16 rounded-2xl bg-accent/20 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-accent"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              </div>
            </div>
            <div class="p-6 lg:p-8">
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="px-3 py-1 text-xs font-medium bg-accent/10 text-accent rounded-full">Laravel</span>
                <span class="px-3 py-1 text-xs font-medium bg-white/5 text-secondary rounded-full">Tailwind</span>
                <span class="px-3 py-1 text-xs font-medium bg-white/5 text-secondary rounded-full">Cloudflare</span>
              </div>
              <h3 class="text-xl font-bold text-primary mb-2">Hayya Modiste</h3>
              <p class="text-sm text-secondary/80 mb-4">Business landing page for a fashion brand with WhatsApp integration and SEO optimization.</p>
              <div class="flex gap-3">
                <a href="https://hayyamodiste.my.id" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 bg-accent hover:bg-hover text-white text-sm font-medium rounded-xl transition-all">Live Demo</a>
              </div>
            </div>
          </div>
        </div>

        @php
          $placeholders = [
            ['title' => 'AI Invoice Generator', 'desc' => 'Smart invoicing with AI automation'],
            ['title' => 'ERP UMKM', 'desc' => 'Business management for SMEs'],
            ['title' => 'AI Portfolio Builder', 'desc' => 'AI-powered portfolio generation'],
          ];
        @endphp
        @foreach ($placeholders as $p)
          <div class="glass rounded-3xl p-6 flex flex-col items-center justify-center text-center">
            <div class="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-accent"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </div>
            <h3 class="text-base font-bold text-primary mb-1.5">{{ $p['title'] }}</h3>
            <p class="text-xs text-secondary/70 mb-3">{{ $p['desc'] }}</p>
            <span class="px-3 py-1 text-xs font-medium bg-white/5 text-secondary/50 rounded-full">Coming Soon</span>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
