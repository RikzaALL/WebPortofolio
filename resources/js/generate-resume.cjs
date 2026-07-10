const puppeteer = require('puppeteer')
const path = require('path')
const fs = require('fs')

const htmlPath = process.argv[2]
const outputPath = process.argv[3]

if (!htmlPath || !outputPath) {
  console.error('Usage: node generate-resume.cjs <input.html> <output.pdf>')
  process.exit(1)
}

const html = fs.readFileSync(htmlPath, 'utf-8')

;(async () => {
  const browser = await puppeteer.launch({
    headless: true,
    args: ['--no-sandbox', '--disable-setuid-sandbox'],
  })
  const page = await browser.newPage()
  await page.setContent(html, { waitUntil: 'networkidle0' })
  await page.pdf({
    path: outputPath,
    format: 'A4',
    printBackground: true,
    margin: { top: 0, bottom: 0, left: 0, right: 0 },
  })
  await browser.close()
  console.log(`PDF saved to ${outputPath}`)
})()
