const hexToRGB = (hex, alpha) => {
  const r = parseInt(hex.slice(1, 3), 16)
  const g = parseInt(hex.slice(3, 5), 16)
  const b = parseInt(hex.slice(5, 7), 16)

  if (alpha) {
    return "rgba(" + r + ", " + g + ", " + b + ", " + alpha + ")"
  } else {
    return "rgb(" + r + ", " + g + ", " + b + ")"
  }
}

const fonts = { base: "Helvetica Neue" }

// https://material.io/design/color/the-color-system.html#tools-for-picking-colors
const colors = {
  bodyBg: '#F7F8F9',
  border: '#efefef',
  gray: {
    50: '#edeef0',
    100: '#d0d6dc',
    200: '#b2bac4',
    300: '#939fad',
    400: '#7c8a9b',
    500: '#65778a',
    600: '#586879',
    700: '#485563',
    800: '#39424d',
    900: '#272e36'
  },
  primary: {
    50: '#e3f4fc',
    100: '#b9e4f6',
    200: '#8fd2f0',
    300: '#6cc0e8',
    400: '#5ab3e3',
    500: '#51a6de',
    600: '#4B98CF', // $primary
    700: '#4385bb',
    800: '#3e75a7',
    900: '#325583'
  },
  success: {
    50: '#e0f2f0',
    100: '#b2ded8',
    200: '#80cabe',
    300: '#4EB4A5', // $success
    400: '#29a492',
    500: '#0b9380',
    600: '#098673',
    700: '#077764',
    800: '#046755',
    900: '#024b3a',
  },
  danger: {
    50: '#feeaef',
    100: '#fccad5',
    200: '#ec949f',
    300: '#e26979',
    400: '#ee405a',
    500: '#f52042',
    600: '#e51240',
    700: '#d3003a',
    800: '#c60032',
    900: '#b70026'
  },
  black: '#12263F',
  white: '#FFFFFF',
  transparent: 'transparent',
  get(color) {
    return color.split('.').reduce((o,i)=>o[i], this)
  }
}

const charts = {
  colorScheme: 'light',
  colors: {
    area: hexToRGB(colors.primary[100], 0.5)
  }
}

const settings = {
  fonts,
  colors,
  charts,
  hexToRGB
}

if (typeof window !== 'undefined') {
  window.settings = settings
}