import preset from "../../../../vendor/filament/filament/tailwind.config.preset";

export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./app/Helpers/Utilities.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./vendor/awcodes/filament-curator/resources/**/*.blade.php",
        "./vendor/awcodes/filament-quick-create/resources/**/*.blade.php",
        "./vendor/awcodes/filament-tiptap-editor/resources/**/*.blade.php",
        "./vendor/awcodes/filament-versions/resources/**/*.blade.php",
        "./vendor/awcodes/overlook/resources/**/*.blade.php",
        "./vendor/awcodes/filament-addons/resources/views/**/*.blade.php",
        "./vendor/bezhansalleh/filament-exceptions/resources/views/**/*.blade.php",
        "./vendor/lara-zeus/bolt/resources/views/filament/**/*.blade.php",
    ],
};
