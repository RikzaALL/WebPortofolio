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

  Alpine.data('threeHero', () => ({
    cleanup: null,
    ready: false,
    async init() {
      this.$nextTick(async () => {
        const { initHeroScene } = await import('./three-scene')
        this.cleanup = initHeroScene(this.$el)
        this.ready = true
        requestAnimationFrame(() => this.$el.classList.add('scene-ready'))
      })
    },
    destroy() {
      if (this.cleanup) this.cleanup()
    }
  }))
})

Alpine.start()

document.addEventListener('DOMContentLoaded', () => {
  initSmoothScroll()
  initReadingProgress()
  initParallax()
  initTiltCards()
  initCustomCursor()
  initScrollReveal()
})
