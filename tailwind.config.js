module.exports = {
  content: [
    // 'source/*.blade.php',
    'source/_assets/**/*.blade.php',
    'source/_components/**/*.blade.php',
    'source/_layouts/**/*.blade.php',
    'source/index.blade.php'
  ],
  theme: {
    extend: {
      colors: {
        'accent': '#98aff3',
      }
    },
  },
  plugins: [],
};