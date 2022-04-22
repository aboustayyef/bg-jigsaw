module.exports = {
  content: require("fast-glob").sync(["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"], { dot: true }),
  theme: {
    extend: {
      colors: {
        accent: "#98aff3",
      },
    },
  },
  plugins: [],
};
