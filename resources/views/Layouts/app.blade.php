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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-primary': '#171717',
                        'input-primary': '#5C5C5C',
                        'input-placeholder': "#999999"
                    },
                    fontFamily: {
                        'fredoka': 'Fredoka'
                    },
                    backgroundImage: {
                        'bg-login': 'url(/img/bg-login.png)',
                    },
                },
            },
        }
    </script>
    <link rel="stylesheet" href="build.css">
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
            const editProfileButton = document.getElementById('editProfileButton');
            const profileContent = document.getElementById('profileContent');
            const formContent = document.getElementById('formContent');
            const backButton = document.getElementById('backButton');

            // Function to open modal
            const openModal = () => {
                profileModal.classList.add('active');
            };

            // Function to close modal
            const closeModal = () => {
                profileModal.classList.remove('active');
            };

            // Function to show form and hide profile
            const showFormContent = () => {
                profileContent.classList.add('hidden');
                formContent.classList.remove('hidden');
            };

            // Function to show profile and hide form
            const showProfileContent = () => {
                profileContent.classList.remove('hidden');
                formContent.classList.add('hidden');
            };

            // Add click event to open modal
            profileElement.addEventListener('click', openModal);

            // Add click event to close modal
            closeModalButton.addEventListener('click', closeModal);

            // Add click event to toggle form content
            editProfileButton.addEventListener('click', function(event) {
                event.preventDefault();
                showFormContent();
            });

            // Close modal and show profile content when modal is closed
            closeModalButton.addEventListener('click', function() {
                closeModal();
                showProfileContent();
            });

            backButton.addEventListener('click', function() {
                showProfileContent();
            })
        });
    </script>

</body>

</html>
