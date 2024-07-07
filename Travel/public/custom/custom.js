
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('menu-button');
            const dropdownMenu = document.getElementById('dropdown-menu');
            const currentFlag = document.getElementById('current-flag');
            const dropdownIcon = document.getElementById('dropdown-icon');

            menuButton.addEventListener('click', function() {
                const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
                menuButton.setAttribute('aria-expanded', !isExpanded);
                dropdownMenu.classList.toggle('hidden');

                // Toggle flag to black and rotate icon
                if (!isExpanded) {
                    currentFlag.classList.add('filter', 'grayscale');
                    dropdownIcon.classList.add('rotate-180');
                    dropdownMenu.classList.add('bg-gray-100'); // Change background color
                } else {
                    currentFlag.classList.remove('filter', 'grayscale');
                    dropdownIcon.classList.remove('rotate-180');
                    dropdownMenu.classList.remove('bg-gray-100'); // Reset background color
                }
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!menuButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('hidden');
                    menuButton.setAttribute('aria-expanded', 'false');
                    currentFlag.classList.remove('filter', 'grayscale');
                    dropdownIcon.classList.remove('rotate-90');
                    dropdownMenu.classList.remove('bg-gray-100'); // Reset background color
                }
            });
        });