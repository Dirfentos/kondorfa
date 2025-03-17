<script>
    document.addEventListener("DOMContentLoaded", function () {
    const imageArea = document.querySelector('.position-relative');
    const overlay = document.getElementById('overlay');
    const textOverlay = document.getElementById('text-overlay');

    if (imageArea && overlay && textOverlay) {
        imageArea.addEventListener('mouseenter', () => {
            setTimeout(() => {
                overlay.style.visibility = 'visible';
                textOverlay.style.visibility = 'visible';
                overlay.style.opacity = '1';
                textOverlay.style.opacity = '1';
            }, 500);
        });

        imageArea.addEventListener('mouseleave', () => {
            overlay.style.opacity = '0';
            textOverlay.style.opacity = '0';
            overlay.style.visibility = 'hidden';
            textOverlay.style.visibility = 'hidden';
        });
    } else {
        console.warn("Figyelmeztetés: Az imageArea, overlay vagy textOverlay elem nem található.");
    }
});

</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    let images = document.querySelectorAll('.modal-image');
    let modalImage = document.getElementById('modalImage');
    let prevButton = document.getElementById('prevButton');
    let nextButton = document.getElementById('nextButton');
    let currentIndex = 0;

    if (images.length === 0 || !modalImage) {
        console.warn("Figyelmeztetés: Nincsenek képek vagy a modális ablak nem található.");
        return;
    }

    // Képre kattintva betöltjük a modális ablakba
    images.forEach((img, index) => {
        img.addEventListener('click', function () {
            let imageSrc = this.getAttribute('data-image');
            modalImage.setAttribute('src', imageSrc);
            currentIndex = index;
        });
    });

    // Előző kép megjelenítése
    if (prevButton) {
        prevButton.addEventListener('click', function () {
            if (currentIndex > 0) {
                currentIndex--;
                modalImage.setAttribute('src', images[currentIndex].getAttribute('data-image'));
            }
        });
    } else {
        console.warn("Figyelmeztetés: A prevButton elem nem található.");
    }

    // Következő kép megjelenítése
    if (nextButton) {
        nextButton.addEventListener('click', function () {
            if (currentIndex < images.length - 1) {
                currentIndex++;
                modalImage.setAttribute('src', images[currentIndex].getAttribute('data-image'));
            }
        });
    } else {
        console.warn("Figyelmeztetés: A nextButton elem nem található.");
    }
});


</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/bundle.js') }}"></script>


