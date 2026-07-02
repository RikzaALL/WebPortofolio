import './bootstrap';
import Alpine from 'alpinejs'

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

  Alpine.data('scrollReveal', () => ({
    visible: false,
    observer: null,
    init() {
      this.observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            this.visible = true
            this.observer.unobserve(this.$el)
          }
        })
      }, { threshold: 0.1 })
      this.$nextTick(() => this.observer.observe(this.$el))
    },
    destroy() {
      if (this.observer) this.observer.disconnect()
    }
  }))
})

Alpine.start()
