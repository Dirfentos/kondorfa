<script>
    // Kép és szöveg megjelenítése késleltetve
    const imageArea = document.querySelector('.position-relative');
    const overlay = document.getElementById('overlay');
    const textOverlay = document.getElementById('text-overlay');

    imageArea.addEventListener('mouseenter', () => {
        setTimeout(() => {
            overlay.style.visibility = 'visible';
            textOverlay.style.visibility = 'visible';
            overlay.style.opacity = '1';
            textOverlay.style.opacity = '1';
        }, 500); // 500 ms késleltetés
    });

    imageArea.addEventListener('mouseleave', () => {
        overlay.style.opacity = '0';
        textOverlay.style.opacity = '0';
        overlay.style.visibility = 'hidden';
        textOverlay.style.visibility = 'hidden';
    });
</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    let images = document.querySelectorAll('.modal-image');
    let modalImage = document.getElementById('modalImage');
    let prevButton = document.getElementById('prevButton');
    let nextButton = document.getElementById('nextButton');
    let currentIndex = 0;

    // Képre kattintva betöltjük a modális ablakba
    images.forEach((img, index) => {
        img.addEventListener('click', function () {
            let imageSrc = this.getAttribute('data-image');
            modalImage.setAttribute('src', imageSrc);
            currentIndex = index;
        });
    });

    // Előző kép megjelenítése
    prevButton.addEventListener('click', function () {
        if (currentIndex > 0) {
            currentIndex--;
            modalImage.setAttribute('src', images[currentIndex].getAttribute('data-image'));
        }
    });

    // Következő kép megjelenítése
    nextButton.addEventListener('click', function () {
        if (currentIndex < images.length - 1) {
            currentIndex++;
            modalImage.setAttribute('src', images[currentIndex].getAttribute('data-image'));
        }
    });
});

</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/bundle.js') }}"></script>


