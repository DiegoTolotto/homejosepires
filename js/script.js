// Código JavaScript aqui
document.querySelectorAll('.likes').forEach(likeBtn => {
    likeBtn.addEventListener('click', function () {
        let likeCount = this.querySelector('.like-count');
        likeCount.textContent = parseInt(likeCount.textContent) + 1;
    });
});

document.querySelectorAll('.post-image-link').forEach(imageLink => {
    imageLink.addEventListener('click', function () {
        let viewsCount = this.closest('.post-card').querySelector('.views');
        viewsCount.textContent = `👁 ${parseInt(viewsCount.textContent.split(' ')[1]) + 1}`;
    });
});
