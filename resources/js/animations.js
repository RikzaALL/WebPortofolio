export function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (e) => {
      const href = anchor.getAttribute('href')
      if (href === '#') return
      const target = document.querySelector(href)
      if (!target) return
      e.preventDefault()
      const offset = 80
      const top = target.getBoundingClientRect().top + window.scrollY - offset
      window.scrollTo({ top, behavior: 'smooth' })
    })
  })
}

export function initReadingProgress() {
  const bar = document.getElementById('reading-progress')
  if (!bar) return

  const onScroll = () => {
    const scrollTop = window.scrollY
    const docHeight = document.documentElement.scrollHeight - window.innerHeight
    const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0
    bar.style.transform = `scaleX(${progress / 100})`
  }
  window.addEventListener('scroll', onScroll, { passive: true })
  onScroll()

  return () => window.removeEventListener('scroll', onScroll)
}

export function initScrollReveal() {
  const elements = document.querySelectorAll('[data-reveal]')
  if (!elements.length) return

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const el = entry.target
          const delay = el.dataset.revealDelay || 0
          const direction = el.dataset.revealDir || 'up'
          const animationMap = {
            up: 'reveal-up',
            left: 'reveal-left',
            right: 'reveal-right',
            scale: 'reveal-scale',
          }
          setTimeout(() => {
            el.classList.add(animationMap[direction] || 'reveal-up')
          }, delay)
          observer.unobserve(el)
        }
      })
    },
    { threshold: 0.1, rootMargin: '0px 0px -50px 0px' }
  )

  elements.forEach((el) => observer.observe(el))
}

export function initParallax() {
  const elements = document.querySelectorAll('[data-parallax]')

  const onScroll = () => {
    const scrollY = window.scrollY
    elements.forEach((el) => {
      const speed = parseFloat(el.dataset.parallax) || 0.1
      const rect = el.getBoundingClientRect()
      const center = rect.top + rect.height / 2
      const viewportCenter = window.innerHeight / 2
      const offset = (center - viewportCenter) * speed * 0.05
      el.style.transform = `translateY(${offset}px)`
    })
  }
  window.addEventListener('scroll', onScroll, { passive: true })
  onScroll()

  return () => window.removeEventListener('scroll', onScroll)
}
