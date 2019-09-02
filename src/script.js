class ProductVideo {
    constructor() {
        this.insertBtn = document.querySelector('.js-insert-video');
        this.url = this.insertBtn.dataset.videoUrl;
        this.container = document.querySelector('.js-video-wrapper');
        this.events();
    }

    events() {
        this.insertBtn.addEventListener('click', this.insert.bind(this));
    }

    insert() {
        this.container.appendChild(this.create());
    }

    create() {
        let videoHtml = document.createElement('video');
        videoHtml.classList.add('video-product');
        this.setAttributes(videoHtml,
            {
                src: this.url,
                controls: '',
                autoplay: '',
                loop: ''
            });
        return videoHtml;
    }

    setAttributes(el, attrs) {
        Object.keys(attrs).forEach(key => el.setAttribute(key, attrs[key]));
    }
}

setTimeout(
    function () {
        let video = new ProductVideo();
    },
    100
);