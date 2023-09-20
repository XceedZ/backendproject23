/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html"],
  theme: {
    extend: {
      colors: {
        bg: "#0B001A",
        custom: "#445279",
        custom2: "#e3ecf3",
        custom3: '#d4ddee',
        custom4: '#9C2EF5',
      },
      dropShadow: {
        custom:
          "0px 0px 3.1481480598449707px 0px rgba(162, 45, 247, 0.10), 0px 0px 6.518518447875977px 0px rgba(162, 45, 247, 0.10), 0px 0px 13px 0px rgba(162, 45, 247, 0.10), 0px 0px 25.481481552124023px 0px rgba(162, 45, 247, 0.10), 0px 0px 46.85185241699219px 0px rgba(162, 45, 247, 0.10), 0px 0px 19px 9px rgba(162, 45, 247, 0.10)",
      },
      fontFamily: {
        body: ['Poppins']
      },
    },
  },
  plugins: [],
};
