$(document).ready(function() {
    const $modal = $('#imageModal');
    const $modalImg = $('#expandedImg');
    const $closeBtn = $('.close-modal');
    const $nextBtn = $('.next-btn');
    const $prevBtn = $('.prev-btn');
    
    // Keep track of current image index
    let currentIndex = 0;
    const $galleryImgs = $('.gallery-img');
    
    // Open modal on image click
    $galleryImgs.on('click', function() {
        currentIndex = $galleryImgs.index(this);
        $modal.show();
        $modalImg.attr('src', $(this).attr('src'));
        document.body.style.overflow = 'hidden';;
    });
    
    // Close modal function
    const closeModal = () => {
        $modal.hide();
        document.body.style.overflow = '';
    };
    
    // Show next image
    const showNextImage = () => {
        currentIndex = (currentIndex + 1) % $galleryImgs.length;
        $modalImg.attr('src', $galleryImgs.eq(currentIndex).attr('src'));
    };
    
    // Show previous image
    const showPrevImage = () => {
        currentIndex = (currentIndex - 1 + $galleryImgs.length) % $galleryImgs.length;
        $modalImg.attr('src', $galleryImgs.eq(currentIndex).attr('src'));
    };
    
    // Next button click
    $nextBtn.on('click', function(e) {
        e.stopPropagation();
        showNextImage();
    });
    
    // Previous button click
    $prevBtn.on('click', function(e) {
        e.stopPropagation();
        showPrevImage();
    });
    
    // Close on X button click
    $closeBtn.on('click', closeModal);
    
    // Close when clicking outside image
    $modal.on('click', function(e) {
        if (e.target === this) closeModal();
    });
    
    // Keyboard navigation and close on ESC key
    $(document).on('keydown', function(e) {
        if ($modal.is(':visible')) {
            if (e.key === 'Escape') {
                closeModal();
            } else if (e.key === 'ArrowRight') {
                showNextImage();
            } else if (e.key === 'ArrowLeft') {
                showPrevImage();
            }
        }
    });
});