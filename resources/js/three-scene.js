import * as THREE from 'three'

export function initHeroScene(container) {
  const scene = new THREE.Scene()
  const camera = new THREE.PerspectiveCamera(60, container.clientWidth / container.clientHeight, 0.1, 100)
  const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true })
  renderer.setSize(container.clientWidth, container.clientHeight)
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
  container.appendChild(renderer.domElement)

  const geometries = [
    new THREE.IcosahedronGeometry(0.9, 0),
    new THREE.TorusKnotGeometry(0.7, 0.25, 64, 8),
    new THREE.OctahedronGeometry(0.8),
    new THREE.TorusGeometry(0.6, 0.25, 16, 32),
    new THREE.DodecahedronGeometry(0.7),
  ]

  const colors = [0x3B82F6, 0x60A5FA, 0x2563EB, 0x93C5FD, 0x1D4ED8]
  const meshes = []

  geometries.forEach((geo, i) => {
    const isWireframe = i % 2 === 0
    const mat = new THREE.MeshPhysicalMaterial({
      color: colors[i % colors.length],
      metalness: 0.05,
      roughness: 0.3,
      transparent: true,
      opacity: isWireframe ? 0.08 : 0.12,
      wireframe: isWireframe,
      emissive: colors[i % colors.length],
      emissiveIntensity: isWireframe ? 0.02 : 0,
    })
    const mesh = new THREE.Mesh(geo, mat)
    const spread = 7
    mesh.position.set(
      (Math.random() - 0.5) * spread,
      (Math.random() - 0.5) * spread * 0.75,
      (Math.random() - 0.5) * 6 - 2
    )
    const scale = 0.6 + Math.random() * 0.8
    mesh.scale.set(scale, scale, scale)
    mesh.rotation.set(Math.random() * Math.PI, Math.random() * Math.PI, 0)
    mesh.userData = {
      rotSpeed: {
        x: (Math.random() - 0.5) * 0.003,
        y: (Math.random() - 0.5) * 0.003,
        z: (Math.random() - 0.5) * 0.002,
      },
      floatSpeed: 0.2 + Math.random() * 0.4,
      floatAmp: 0.15 + Math.random() * 0.25,
      floatOffset: Math.random() * Math.PI * 2,
      origY: mesh.position.y,
      origX: mesh.position.x,
      mouseInfluence: 0.3 + Math.random() * 0.3,
    }
    scene.add(mesh)
    meshes.push(mesh)
  })

  const particleCount = 300
  const particleGeo = new THREE.BufferGeometry()
  const positions = new Float32Array(particleCount * 3)
  const sizes = new Float32Array(particleCount)
  for (let i = 0; i < particleCount; i++) {
    positions[i * 3] = (Math.random() - 0.5) * 25
    positions[i * 3 + 1] = (Math.random() - 0.5) * 20
    positions[i * 3 + 2] = (Math.random() - 0.5) * 15
    sizes[i] = Math.random() * 2 + 1
  }
  particleGeo.setAttribute('position', new THREE.BufferAttribute(positions, 3))
  particleGeo.setAttribute('size', new THREE.BufferAttribute(sizes, 1))

  const particleMat = new THREE.PointsMaterial({
    color: 0x3B82F6,
    size: 0.02,
    transparent: true,
    opacity: 0.2,
    blending: THREE.AdditiveBlending,
    sizeAttenuation: true,
  })
  const particles = new THREE.Points(particleGeo, particleMat)
  scene.add(particles)

  camera.position.z = 6

  let mouseX = 0, mouseY = 0
  let targetX = 0, targetY = 0

  const handleMouse = (e) => {
    mouseX = (e.clientX / window.innerWidth) * 2 - 1
    mouseY = -(e.clientY / window.innerHeight) * 2 + 1
  }
  document.addEventListener('mousemove', handleMouse)

  const clock = new THREE.Clock()

  function animate() {
    requestAnimationFrame(animate)
    const elapsed = clock.getElapsedTime()

    targetX += (mouseX - targetX) * 0.03
    targetY += (mouseY - targetY) * 0.03

    meshes.forEach((mesh) => {
      const ud = mesh.userData
      mesh.rotation.x += ud.rotSpeed.x
      mesh.rotation.y += ud.rotSpeed.y
      mesh.rotation.z += ud.rotSpeed.z
      mesh.position.y = ud.origY + Math.sin(elapsed * ud.floatSpeed + ud.floatOffset) * ud.floatAmp
      mesh.position.x = ud.origX + targetX * ud.mouseInfluence * 0.3
    })

    particles.rotation.y = elapsed * 0.015
    particles.rotation.x = Math.sin(elapsed * 0.008) * 0.08

    camera.position.x += (targetX * 0.4 - camera.position.x) * 0.015
    camera.position.y += (targetY * 0.25 - camera.position.y) * 0.015
    camera.lookAt(0, 0, 0)

    renderer.render(scene, camera)
  }

  animate()

  const onResize = () => {
    const w = container.clientWidth
    const h = container.clientHeight
    camera.aspect = w / h
    camera.updateProjectionMatrix()
    renderer.setSize(w, h)
  }
  window.addEventListener('resize', onResize)

  return () => {
    document.removeEventListener('mousemove', handleMouse)
    window.removeEventListener('resize', onResize)
    renderer.dispose()
    if (container.contains(renderer.domElement)) {
      container.removeChild(renderer.domElement)
    }
  }
}
