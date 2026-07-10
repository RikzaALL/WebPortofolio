export function initTiltCards() {
  const cards = document.querySelectorAll('[data-tilt]')
  if (!cards.length) return

  cards.forEach((card) => {
    const maxTilt = parseFloat(card.dataset.tilt) || 8
    const scale = 1.02

    const onMove = (e) => {
      const rect = card.getBoundingClientRect()
      const centerX = rect.left + rect.width / 2
      const centerY = rect.top + rect.height / 2
      const mouseX = e.clientX - centerX
      const mouseY = e.clientY - centerY

      const rotateX = (-mouseY / (rect.height / 2)) * maxTilt
      const rotateY = (mouseX / (rect.width / 2)) * maxTilt

      card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(${scale}, ${scale}, ${scale})`
    }

    const onLeave = () => {
      card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)'
    }

    card.addEventListener('mousemove', onMove)
    card.addEventListener('mouseleave', onLeave)

    card._tiltCleanup = () => {
      card.removeEventListener('mousemove', onMove)
      card.removeEventListener('mouseleave', onLeave)
    }
  })

  return () => {
    cards.forEach((card) => {
      if (card._tiltCleanup) card._tiltCleanup()
    })
  }
}
