const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans]
            }
        }
    },

    variants: {
        opacity: ["responsive", "hover", "focus", "disabled"]
    },

    plugins: [
        require("@tailwindcss/ui"),
        function({ addUtilities }) {
            const newUtilities = {
                ".text-shadow": {
                    textShadow: "1px 2px 4px rgba(0, 0, 0, 0.8)"
                }
            };
            addUtilities(newUtilities);
        }
    ]
};
