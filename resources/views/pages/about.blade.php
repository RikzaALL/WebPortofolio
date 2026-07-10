@extends('layouts.app')

@section('title', 'About - Rikza Alif')

@section('description', 'Learn more about Rikza Alif, a modern web developer specializing in Laravel, Tailwind CSS, and AI-assisted development.')

@section('content')
  <section class="pt-32 pb-24 lg:pb-32 relative overflow-hidden">
    <x-dot-bg />
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto">
        <p class="text-accent font-medium text-sm tracking-widest uppercase mb-4">About</p>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-primary tracking-tight mb-8 leading-[1.1]">
          Building digital experiences that <span class="bg-gradient-to-r from-accent to-hover bg-clip-text text-transparent">matter.</span>
        </h1>

        <div class="prose prose-invert prose-sm max-w-none text-secondary/80 space-y-6">
          <p class="text-lg leading-relaxed">
            I'm Rikza Alif, a web developer passionate about building modern, high-performance websites for businesses. My journey started with curiosity about how websites work and evolved into a full-stack development skill set centered around Laravel and modern frontend technologies.
          </p>

          <h2 class="text-xl font-bold text-primary mt-12">What I Do</h2>
          <p>
            I specialize in creating business websites, landing pages, and web applications that are fast, responsive, and SEO-optimized. I work closely with clients to understand their goals and deliver solutions that help their businesses grow online.
          </p>

          <h2 class="text-xl font-bold text-primary mt-12">My Approach</h2>
          <p>
            Every project starts with understanding the problem. I believe in clean code, responsive design, and leveraging modern tools to deliver results efficiently. I also integrate AI-assisted workflows to accelerate development without sacrificing quality.
          </p>

          <h2 class="text-xl font-bold text-primary mt-12">Beyond Code</h2>
          <p>
            When I'm not building websites, I'm exploring new technologies, contributing to open source, and finding ways to make the web a better place — one project at a time.
          </p>
        </div>

        <div class="mt-12">
          <a href="{{ url('/uses') }}" class="inline-flex items-center gap-2 px-6 py-3 glass-light text-primary text-sm font-medium rounded-xl transition-all duration-300 hover:bg-white/10">
            See my setup
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection
