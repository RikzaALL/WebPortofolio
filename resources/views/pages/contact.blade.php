@extends('layouts.app')

@section('title', 'Contact - Rikza Alif')

@section('description', 'Get in touch with Rikza Alif for web development projects. Let\'s build something great together.')

@section('content')
  <section class="pt-32 pb-24 lg:pb-32 relative overflow-hidden">
    <x-dot-bg />
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto text-center">
        <p class="text-accent font-medium text-sm tracking-widest uppercase mb-4">Contact</p>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-primary tracking-tight mb-6 leading-[1.1]">
          Let's Build Something <span class="bg-gradient-to-r from-accent to-hover bg-clip-text text-transparent">Great Together.</span>
        </h1>
        <p class="text-base text-secondary/80 max-w-xl mx-auto mb-10 leading-relaxed">
          Have a project in mind? Let's talk about how I can help bring your ideas to life with modern, high-performance web development.
        </p>

        <div class="flex flex-wrap justify-center gap-4">
          <a href="https://wa.me/6287715333749" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2.5 px-6 py-3.5 bg-accent hover:bg-hover text-white font-medium rounded-2xl transition-all duration-300 hover:shadow-lg hover:shadow-accent/25 text-sm">WhatsApp</a>
          <a href="mailto:alifrikza45@gmail.com" class="inline-flex items-center gap-2.5 px-6 py-3.5 glass-light text-primary font-medium rounded-2xl transition-all duration-300 hover:bg-white/10 text-sm">Email</a>
          <a href="https://github.com/RikzaALL" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2.5 px-6 py-3.5 glass-light text-primary font-medium rounded-2xl transition-all duration-300 hover:bg-white/10 text-sm">GitHub</a>
          <a href="https://www.linkedin.com/in/rikza-alif-muharom-a20a49387/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2.5 px-6 py-3.5 glass-light text-primary font-medium rounded-2xl transition-all duration-300 hover:bg-white/10 text-sm">LinkedIn</a>
        </div>
      </div>
    </div>
  </section>
@endsection
