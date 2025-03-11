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
        var imageModal = document.getElementById('imageModal');
        if (imageModal) {  // Ellenőrizzük, hogy a modális ablak létezik
            imageModal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget;  // A kattintott kép
                var imageSrc = button.getAttribute('data-image');  // A kép forrása
                var modalImage = imageModal.querySelector('#modalImage');
                modalImage.setAttribute('src', imageSrc);  // A modális kép src attribútumának beállítása
            });
        }
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/bundle.js') }}"></script>


