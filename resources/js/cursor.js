export function initCustomCursor() {
  const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0
  if (isTouchDevice) return

  const cursor = document.getElementById('custom-cursor')
  if (!cursor) return

  let mouseX = 0, mouseY = 0
  let cursorX = 0, cursorY = 0
  let isHovering = false

  const onMove = (e) => {
    mouseX = e.clientX
    mouseY = e.clientY
  }

  const onHoverIn = () => {
    isHovering = true
    cursor.classList.add('cursor-hover')
  }

  const onHoverOut = () => {
    isHovering = false
    cursor.classList.remove('cursor-hover')
  }

  document.addEventListener('mousemove', onMove)

  document.querySelectorAll('a, button, [data-cursor-hover]').forEach((el) => {
    el.addEventListener('mouseenter', onHoverIn)
    el.addEventListener('mouseleave', onHoverOut)
  })

  function lerp(a, b, n) {
    return (1 - n) * a + n * b
  }

  function animate() {
    cursorX = lerp(cursorX, mouseX, 0.1)
    cursorY = lerp(cursorY, mouseY, 0.1)
    cursor.style.transform = `translate(${cursorX - 12}px, ${cursorY - 12}px)`
    requestAnimationFrame(animate)
  }
  animate()

  return () => {
    document.removeEventListener('mousemove', onMove)
  }
}
