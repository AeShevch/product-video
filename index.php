<?php
$videoOptionId = 117; // Id хар-ки товара содержащей url видео
$videoPreviewImgId = 118; // Id хар-ки товара содержащей url изображения превью

$videoUrl = $data['thisUserFields'][$videoOptionId]['data'][0]['name'];
$videoPreviewImgUrl = $data['thisUserFields'][$videoPreviewImgId]['data'][0]['name'];

if ($videoUrl) {
    mgAddMeta('<link rel="stylesheet" href="' . PATH_SITE_TEMPLATE . '/modules/product-video/dist/style.css">');
    mgAddMeta('<script src="' . PATH_SITE_TEMPLATE . '/modules/product-video/dist/script.js"></script>'); ?>

    <button class="js-insert-video show-video-btn"
            aria-label="Смотреть видео-презентацию товара «<?php echo $data['title'] ?>»"
            data-video-url="<?php echo $videoUrl ?>">
        <?php if ($videoPreviewImgUrl): ?>
            <div class="show-video-btn__inner">
                <img src="<?php echo $videoPreviewImgUrl ?>"
                    class="show-video-btn__img"
                    alt="Смотреть видео-презентацию товара «<?php echo $data['title'] ?>»">
            </div>
        <?php
        // Если картинки превью нет, используем стандартную
        else: ?>
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="show-video-btn__img show-video-svg" viewBox="0 0 59.39 59.39">
                <path fill="#8697cb" d="M1 3.956h56v44H1z"/>
                <path d="M58 48.956H0v-46h58v46zm-56-2h54v-42H2v42z" fill="#535d73"/>
                <path class="show-video-svg__play" fill="#fff" d="M25 32.956v-14l11 7z"/>
                <path fill="#687492" d="M1 3.956h10v11H1z"/>
                <path d="M12 15.956H0v-13h12v13zm-10-2h8v-9H2v9z" fill="#535d73"/>
                <path fill="#687492" d="M1 14.956h10v11H1z"/>
                <path d="M12 26.956H0v-13h12v13zm-10-2h8v-9H2v9z" fill="#535d73"/>
                <path fill="#687492" d="M1 25.956h10v11H1z"/>
                <path d="M12 37.956H0v-13h12v13zm-10-2h8v-9H2v9z" fill="#535d73"/>
                <path fill="#687492" d="M1 36.956h10v11H1z"/>
                <path d="M12 48.956H0v-13h12v13zm-10-2h8v-9H2v9z" fill="#535d73"/>
                <path fill="#687492" d="M47 3.956h10v11H47z"/>
                <path d="M58 15.956H46v-13h12v13zm-10-2h8v-9h-8v9z" fill="#535d73"/>
                <path fill="#687492" d="M47 14.956h10v11H47z"/>
                <path d="M58 26.956H46v-13h12v13zm-10-2h8v-9h-8v9z" fill="#535d73"/>
                <path fill="#687492" d="M47 25.956h10v11H47z"/>
                <path d="M58 37.956H46v-13h12v13zm-10-2h8v-9h-8v9z" fill="#535d73"/>
                <g>
                    <path fill="#687492" d="M47 36.956h10v11H47z"/>
                    <path d="M58 48.956H46v-13h12v13zm-10-2h8v-9h-8v9z" fill="#535d73"/>
                </g>
                <g>
                    <path d="M58.195 47.113l-.107.163c-7.121 10.876-18.773 10.876-25.893 0l.107-.163c7.12-10.876 18.772-10.876 25.893 0z"
                          fill="#fff"/>
                    <circle cx="44.958" cy="44.831" r="5.909" fill="#556080"/>
                    <path d="M45.142 56.434c-5.254 0-10.148-3.058-13.783-8.609L31 47.277l.465-.711c3.635-5.552 8.53-8.609 13.784-8.609 5.253 0 10.148 3.057 13.783 8.609l.358.547-.465.711c-3.635 5.552-8.53 8.61-13.783 8.61zm-11.744-9.162c3.206 4.624 7.356 7.161 11.744 7.161 4.436 0 8.63-2.594 11.85-7.317-3.206-4.624-7.356-7.161-11.743-7.161-4.437.001-8.631 2.595-11.851 7.317z"
                          fill="#b1d3ef"/>
                </g>
            </svg>
        <?php endif; ?>
    </button>
<?php } ?>