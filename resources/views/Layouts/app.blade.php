<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
        /* Animation */
        .animate-slide-down {
            animation: slideDown 0.5s ease-out forwards;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Modal Styling */
        #profileModal {
            display: none;
            /* Hide the modal initially */
        }

        /* Show Modal */
        #profileModal.active {
            display: flex;
        }
    </style>
</head>

<body class="bg-brand-primary">
    @yield('content')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const profileElement = document.getElementById('profile');
            const profileModal = document.getElementById('profileModal');
            const closeModalButton = document.getElementById('closeModal');
            const modalBackdrop = document.getElementById('modalBackdrop');

            // Function to open modal
            const openModal = () => {
                profileModal.classList.add('active');
            };

            // Function to close modal
            const closeModal = () => {
                profileModal.classList.remove('active');
            };

            // Add click event to open modal
            profileElement.addEventListener('click', openModal);

            // Add click event to close modal
            closeModalButton.addEventListener('click', closeModal);
            modalBackdrop.addEventListener('click', closeModal);
        });
    </script>

</body>

</html>
