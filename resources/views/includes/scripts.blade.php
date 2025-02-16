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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>