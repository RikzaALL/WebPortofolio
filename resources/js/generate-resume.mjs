import puppeteer from 'puppeteer'
import fs from 'fs'
import path from 'path'
import { execSync, spawn } from 'child_process'

const baseDir = process.cwd()
const publicDir = path.join(baseDir, 'public')
const resumeUrl = process.env.APP_URL || 'http://127.0.0.1:8000/resume'
const outputPath = path.join(publicDir, 'resume.pdf')

async function generate() {
  console.log(`[Resume] Generating PDF from ${resumeUrl}`)
  
  const browser = await puppeteer.launch({
    headless: true,
    args: ['--no-sandbox', '--disable-setuid-sandbox'],
  })
  
  const page = await browser.newPage()
  
  const resp = await page.goto(resumeUrl, {
    waitUntil: 'networkidle0',
    timeout: 15000,
  })
  
  if (!resp || !resp.ok()) {
    throw new Error(`Failed to load ${resumeUrl}: ${resp?.status() || 'no response'}`)
  }
  
  await page.pdf({
    path: outputPath,
    format: 'A4',
    printBackground: true,
    margin: { top: '40px', bottom: '40px', left: '30px', right: '30px' },
  })
  
  await browser.close()
  console.log(`[Resume] PDF saved to ${outputPath}`)
}

generate().catch(err => {
  console.error('[Resume] Error:', err.message)
  process.exit(1)
})
