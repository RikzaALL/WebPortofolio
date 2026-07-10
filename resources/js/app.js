import './bootstrap';
import Alpine from 'alpinejs'
import { initSmoothScroll, initReadingProgress, initScrollReveal, initParallax } from './animations'
import { initTiltCards } from './tilt-cards'
import { initCustomCursor } from './cursor'

window.Alpine = Alpine

document.addEventListener('alpine:init', () => {
  Alpine.data('navbar', () => ({
    scrolled: false,
    hidden: false,
    mobileOpen: false,
    lastScroll: 0,
    init() {
      this.lastScroll = window.scrollY
      window.addEventListener('scroll', () => {
        const current = window.scrollY
        this.scrolled = current > 50
        this.hidden = current > 120 && current > this.lastScroll
        this.lastScroll = current
      }, { passive: true })
    }
  }))
})

Alpine.start()

async function initThreeScene() {
  const canvas = document.getElementById('three-canvas')
  if (!canvas) return
  const { initHeroScene } = await import('./three-scene')
  const cleanup = initHeroScene(canvas)
  requestAnimationFrame(() => canvas.classList.add('scene-ready'))
  window.__threeCleanup = cleanup
}

document.addEventListener('DOMContentLoaded', () => {
  initThreeScene()
  initSmoothScroll()
  initReadingProgress()
  initParallax()
  initTiltCards()
  initCustomCursor()
  initScrollReveal()
})
