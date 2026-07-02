@extends('layouts.app')

@section('title', 'Rikza Alif - Modern Web Developer | Laravel & Frontend Specialist')

@section('description', 'I build modern business websites that are fast, beautiful, and SEO-friendly. Specializing in Laravel, Tailwind CSS, and AI-assisted web development.')

@section('og_title', 'Rikza Alif - Modern Web Developer')

@section('og_description', 'I build modern business websites that are fast, beautiful, and SEO-friendly.')

@section('content')
  @include('sections.hero')
  @include('sections.trust')
  @include('sections.about')
  @include('sections.skills')
  @include('sections.projects')
  @include('sections.testimonials')
  @include('sections.process')
  @include('sections.github')
  @include('sections.contact')
@endsection
