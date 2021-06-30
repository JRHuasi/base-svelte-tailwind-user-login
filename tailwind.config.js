const production = !process.env.ROLLUP_WATCH;

module.exports = {
  theme: {
    fontFamily: {
      rale: ['Raleway']
    },
    extend: {
      colors: {
        danger: '#CD113B',
        loco: {
          100: '#00ff00',
          200: '#00ffdd'
        }
      }
    },
  },
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
  plugins: [],
  purge: {
    content: ["./src/**/*.svelte"],
    enabled: production,
  },
};