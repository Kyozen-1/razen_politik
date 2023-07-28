<style rc-util-key="@ant-design-icons">
    .anticon {
        display: inline-block;
        color: inherit;
        font-style: normal;
        line-height: 0;
        text-align: center;
        text-transform: none;
        vertical-align: -0.125em;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .anticon>* {
        line-height: 1;
    }

    .anticon svg {
        display: inline-block;
    }

    .anticon::before {
        display: none;
    }

    .anticon .anticon-icon {
        display: block;
    }

    .anticon[tabindex] {
      cursor: pointer;
    }

    .anticon-spin::before,
    .anticon-spin {
        display: inline-block;
        -webkit-animation: loadingCircle 1s infinite linear;
        animation: loadingCircle 1s infinite linear;
    }

    @-webkit-keyframes loadingCircle {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes loadingCircle {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="57x57" href="/favicon-logo.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon-logo.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon-logo.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon-logo.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon-logo.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon-logo.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon-logo.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon-logo.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon-logo.png">
<link rel="icon" type="image/png" sizes="192x192" href="/favicon-logo.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-logo.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-logo.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-logo.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/favicon-logo.png">
<meta name="theme-color" content="#ffffff">
<title>@yield('title', 'Beranda | PolaPoli')</title>
<meta name="next-head-count" content="19">
<noscript data-n-css=""></noscript>
{{-- <script defer="" nomodule="" src="https://polapoli.id/_next/static/chunks/polyfills.js?ts=1690500440583"></script> --}}
{{-- <script src="https://polapoli.id/_next/static/chunks/webpack.js?ts=1690500440583" defer=""></script> --}}
<script src="https://polapoli.id/_next/static/chunks/main.js?ts=1690500440583" defer=""></script>
<script src="https://polapoli.id/_next/static/chunks/pages/_app.js?ts=1690500440583" defer=""></script>
<script src="https://polapoli.id/_next/static/chunks/pages/index.js?ts=1690500440583" defer=""></script>
{{-- <script src="https://polapoli.id/_next/static/development/_buildManifest.js?ts=1690500440583" defer=""></script>
<script src="https://polapoli.id/_next/static/development/_ssgManifest.js?ts=1690500440583" defer=""></script>
<script src="https://polapoli.id/_next/static/development/_middlewareManifest.js?ts=1690500440583" defer=""></script> --}}
<link rel="stylesheet" href="{{ asset('css/antd.css') }}">
<link rel="stylesheet" href="{{ asset('css/tailwindcss.css') }}">
<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap");

        :root {
        --primary: #393885;
        --frenchrose: #FB3B6F;
        --logan: #A8ACCC;
        --viola: #C995B8;
        --success: #5FC790;
        --warning: #FFA600;
        --danger: #FF5630;
        --info: #1CA7EC;
        --black: #2E3A44;
        --darkgrey: #A0AABF;
        --lightgrey: #C0C6D4;
        --outline: #E3E8F1;
        --light: #F9FBFC;
        --white: #FFFFFF;
        }

        body {
        font-family: 'Montserrat', sans-serif
        }

        .navbar {
        background-color: var(--light) !important;
        }

        .navbar .btn-sign {
        background-color: var(--outline);
        color: var(--black);
        transition: 0.3s;
        }

        .navbar .btn-sign:hover {
        background-color: var(--outline);
        color: var(--primary);
        transition: 0.3s;
        }

        .navbar .btn-register {
        background-color: var(--primary);
        color: var(--white);
        transition: 0.3s;
        }

        .navbar .btn-register:hover {
        background-color: var(--primary);
        transition: 0.3s;
        }

        .img-hero {
        width: 630px;
        height: 524px;
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: center;
        object-position: center;
        }

        .navbar nav a {
        color: #130f48;
        transition: 0.1s;
        }

        .navbar nav a:hover,
        .navbar nav a.active {
        color: var(--primary);
        font-weight: 600;
        transition: 0.1s;
        }

        .header-6-1 #menu-toggle:checked+#menu,
        .header-6-1 #menu-toggle:checked+#menu+#menu {
        display: block;
        }

        .header-6-1 .btn-get {
        background-color: var(--primary);
        color: var(--white);
        transition: 0.3s;
        }

        .header-6-1 .btn-get:hover {
        background-color: var(--primary);
        transition: 0.3s;
        }

        .header-6-1 .card-header {
        box-shadow: 0px 0px 24px 0px rgba(0, 0, 0, 0.04);
        }

        .content-7-2 .card {
        box-shadow: 0px 10px 45px 0px rgba(0, 0, 0, 0.04);
        }

        .content-7-2 .title-text {
        color: var(--primary);
        }

        .content-7-2 .caption-text {
        color: var(--darkgrey);
        }

        .text-primary {
        color: var(--primary);
        }

        .text-pink {
        color: var(--frenchrose);
        }

        .text-black {
        color: var(--black);
        }

        .text-gray-1 {
        color: var(--darkgrey);
        }

        .text-gray-2 {
        color: var(--lightgrey);
        }

        .item-size {
        width: 100%;
        }

        .img-client {
        height: 60px;
        width: 250px;
        }

        .bg-primary {
        background-color: var(--primary);
        }

        .bg-light {
        background-color: var(--light);
        }

        .gradient-text {
        background-color: var(--soft-orange);
        background-image: linear-gradient(113.4deg, #FE9818 0%, #FA7219 100%);
        background-image: conic-gradient(113.4deg, #FE9818 0%, #FA7219 100%);
        background-size: 100%;
        background-repeat: no-repeat;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        -moz-background-clip: text;
        -moz-text-fill-color: transparent;
        }

        .flickity-slider,
        .flickity-viewport {
        overflow: visible;
        height: auto;
        }

        .flickity-prev-next-button {
        width: 36px;
        height: 36px;
        }

        /* position outside */
        .flickity-prev-next-button.previous {
        left: -70px;
        }

        .flickity-prev-next-button.next {
        right: -70px;
        }

        .flickity-button-icon {
        fill: #090A0D;
        }

        .flickity-button {
        background: rgba(255, 255, 255, 1);
        }

        .flickity-button:hover {
        background: rgba(255, 255, 255, 0.5);
        }

        .content-3-7 .card-outline {
        border: 1px solid #E5EBF9;
        }

        .content-3-7 .card {
        transition: 0.4s;
        top: 0px;
        left: 0px;
        position: relative;
        }

        .content-3-7 .card:hover {
        top: -3px;
        left: -3px;
        position: relative;
        transition: 0.4s;
        }

        .content-3-7 .btn-outline {
        border: 1px solid var(--primary);
        color: var(--primary);
        }

        .content-3-7 .btn-outline:hover {
        background-color: var(--primary);
        color: #FFFFFF;
        }

        .content-3-7 .btn-fill {
        background-color: var(--frenchrose);
        }

        .content-3-7 .btn-fill:hover {
        background-color: var(--frenchrose);
        }

        .content-3-7 .price-list-3-7 .no-check-3-7 {
        color: #E1E1E1;
        }

        .content-3-7 .price-list-3-7 .check-3-7,
        .content-3-7 .text-medium-black {
        color: var(--primary);
        }

        .content-3-7 .bg-medium-black {
        background-color: var(--primary);
        }

        .content-3-7 .text-medium-white {
        color: #C3C3C8;
        }

        .content-3-7 .caption {
        color: #8E8FAD;
        }

        .content-3-7 .price-title {
        color: #141C2E;
        }

        .content-3-7 .price-month {
        color: #9E9E9E;
        }

        .footer-2-3 .list-footer li a {
        color: #707092;
        }

        .footer-2-3 .list-footer li a:hover {
        color: #FFFFFF;
        }

        .footer-2-3 .border-color {
        color: #707092;
        }

        .footer-2-3 .footer-link:hover {
        color: #FFFFFF;
        }

        .footer-2-3 .social-media-c:hover circle,
        .footer-2-3 .social-media-p:hover path {
        fill: #FFFFFF;
        }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9zcmMvc3R5bGVzL3RlbXBsYXRlLmNzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQSx3UEFBd1A7O0FBRXhQO0lBQ0ksa0JBQWtCO0lBQ2xCLHFCQUFxQjtJQUNyQixnQkFBZ0I7SUFDaEIsZ0JBQWdCO0lBQ2hCLGtCQUFrQjtJQUNsQixrQkFBa0I7SUFDbEIsaUJBQWlCO0lBQ2pCLGVBQWU7SUFDZixnQkFBZ0I7SUFDaEIsbUJBQW1CO0lBQ25CLG9CQUFvQjtJQUNwQixrQkFBa0I7SUFDbEIsZ0JBQWdCO0lBQ2hCLGdCQUFnQjtBQUNwQjs7QUFFQTtJQUNJO0FBQ0o7O0FBRUE7SUFDSSx5Q0FBeUM7QUFDN0M7O0FBRUE7SUFDSSxnQ0FBZ0M7SUFDaEMsbUJBQW1CO0lBQ25CLGdCQUFnQjtBQUNwQjs7QUFFQTtJQUNJLGdDQUFnQztJQUNoQyxxQkFBcUI7SUFDckIsZ0JBQWdCO0FBQ3BCOztBQUVBO0lBQ0ksZ0NBQWdDO0lBQ2hDLG1CQUFtQjtJQUNuQixnQkFBZ0I7QUFDcEI7O0FBRUE7SUFDSSxnQ0FBZ0M7SUFDaEMsZ0JBQWdCO0FBQ3BCOztBQUVBO0lBQ0ksWUFBWTtJQUNaLFlBQVk7SUFDWixvQkFBaUI7T0FBakIsaUJBQWlCO0lBQ2pCLDBCQUF1QjtPQUF2Qix1QkFBdUI7QUFDM0I7O0FBRUE7SUFDSSxjQUFjO0lBQ2QsZ0JBQWdCO0FBQ3BCOztBQUVBOztJQUVJLHFCQUFxQjtJQUNyQixnQkFBZ0I7SUFDaEIsZ0JBQWdCO0FBQ3BCOztBQUVBOztJQUVJLGNBQWM7QUFDbEI7O0FBRUE7SUFDSSxnQ0FBZ0M7SUFDaEMsbUJBQW1CO0lBQ25CLGdCQUFnQjtBQUNwQjs7QUFFQTtJQUNJLGdDQUFnQztJQUNoQyxnQkFBZ0I7QUFDcEI7O0FBRUE7SUFDSSxnREFBZ0Q7QUFDcEQ7O0FBRUE7SUFDSSxpREFBaUQ7QUFDckQ7O0FBRUE7SUFDSSxxQkFBcUI7QUFDekI7O0FBRUE7SUFDSSxzQkFBc0I7QUFDMUI7O0FBRUE7SUFDSSxxQkFBcUI7QUFDekI7O0FBRUE7SUFDSSx3QkFBd0I7QUFDNUI7O0FBRUE7SUFDSSxtQkFBbUI7QUFDdkI7O0FBRUE7SUFDSSxzQkFBc0I7QUFDMUI7O0FBRUE7SUFDSSx1QkFBdUI7QUFDM0I7OztBQUdBO0lBQ0ksV0FBVztBQUNmOztBQUVBO0lBQ0ksWUFBWTtJQUNaLFlBQVk7QUFDaEI7O0FBRUE7SUFDSSxnQ0FBZ0M7QUFDcEM7O0FBRUE7SUFDSSw4QkFBOEI7QUFDbEM7O0FBRUE7SUFDSSxvQ0FBb0M7SUFDcEMscUVBQXFFO0lBQ3JFLG9FQUFvRTtJQUNwRSxxQkFBcUI7SUFDckIsNEJBQTRCO0lBQzVCLDZCQUE2QjtJQUM3QixvQ0FBb0M7SUFDcEMsMEJBQTBCO0lBQzFCLGlDQUFpQztBQUNyQzs7QUFFQTs7SUFFSSxpQkFBaUI7SUFDakIsWUFBWTtBQUNoQjs7QUFFQTtJQUNJLFdBQVc7SUFDWCxZQUFZO0FBQ2hCOztBQUVBLHFCQUFxQjtBQUNyQjtJQUNJLFdBQVc7QUFDZjs7QUFFQTtJQUNJLFlBQVk7QUFDaEI7O0FBRUE7SUFDSSxhQUFhO0FBQ2pCOztBQUVBO0lBQ0ksa0NBQWtDO0FBQ3RDOztBQUVBO0lBQ0ksb0NBQW9DO0FBQ3hDOztBQUVBO0lBQ0kseUJBQXlCO0FBQzdCOztBQUVBO0lBQ0ksZ0JBQWdCO0lBQ2hCLFFBQVE7O0lBRVIsU0FBUztJQUNULGtCQUFrQjtBQUN0Qjs7QUFFQTtJQUNJLFNBQVM7SUFDVCxVQUFVO0lBQ1Ysa0JBQWtCO0lBQ2xCLGdCQUFnQjtBQUNwQjs7QUFFQTtJQUNJLGdDQUFnQztJQUNoQyxxQkFBcUI7QUFDekI7O0FBRUE7SUFDSSxnQ0FBZ0M7SUFDaEMsY0FBYztBQUNsQjs7QUFFQTtJQUNJLG1DQUFtQztBQUN2Qzs7QUFFQTtJQUNJLG1DQUFtQztBQUN2Qzs7QUFFQTtJQUNJLGNBQWM7QUFDbEI7O0FBRUE7O0lBRUkscUJBQXFCO0FBQ3pCOztBQUVBO0lBQ0ksZ0NBQWdDO0FBQ3BDOztBQUVBO0lBQ0ksY0FBYztBQUNsQjs7QUFFQTtJQUNJLGNBQWM7QUFDbEI7O0FBRUE7SUFDSSxjQUFjO0FBQ2xCOztBQUVBO0lBQ0ksY0FBYztBQUNsQjs7QUFFQTtJQUNJLGNBQWM7QUFDbEI7O0FBRUE7SUFDSSxjQUFjO0FBQ2xCOztBQUVBO0lBQ0ksY0FBYztBQUNsQjs7QUFFQTtJQUNJLGNBQWM7QUFDbEI7O0FBRUE7O0lBRUksYUFBYTtBQUNqQiIsInNvdXJjZXNDb250ZW50IjpbIkBpbXBvcnQgdXJsKFwiaHR0cHM6Ly9mb250cy5nb29nbGVhcGlzLmNvbS9jc3MyP2ZhbWlseT1Nb250c2VycmF0Oml0YWwsd2dodEAwLDEwMDswLDIwMDswLDMwMDswLDQwMDswLDUwMDswLDYwMDswLDcwMDswLDgwMDswLDkwMDsxLDEwMDsxLDIwMDsxLDMwMDsxLDQwMDsxLDUwMDsxLDYwMDsxLDcwMDsxLDgwMDsxLDkwMCZmYW1pbHk9Tm90bytTYW5zOml0YWwsd2dodEAwLDQwMDswLDcwMDsxLDQwMDsxLDcwMCZkaXNwbGF5PXN3YXBcIik7XG5cbjpyb290IHtcbiAgICAtLXByaW1hcnk6ICMzOTM4ODU7XG4gICAgLS1mcmVuY2hyb3NlOiAjRkIzQjZGO1xuICAgIC0tbG9nYW46ICNBOEFDQ0M7XG4gICAgLS12aW9sYTogI0M5OTVCODtcbiAgICAtLXN1Y2Nlc3M6ICM1RkM3OTA7XG4gICAgLS13YXJuaW5nOiAjRkZBNjAwO1xuICAgIC0tZGFuZ2VyOiAjRkY1NjMwO1xuICAgIC0taW5mbzogIzFDQTdFQztcbiAgICAtLWJsYWNrOiAjMkUzQTQ0O1xuICAgIC0tZGFya2dyZXk6ICNBMEFBQkY7XG4gICAgLS1saWdodGdyZXk6ICNDMEM2RDQ7XG4gICAgLS1vdXRsaW5lOiAjRTNFOEYxO1xuICAgIC0tbGlnaHQ6ICNGOUZCRkM7XG4gICAgLS13aGl0ZTogI0ZGRkZGRjtcbn1cblxuYm9keSB7XG4gICAgZm9udC1mYW1pbHk6ICdNb250c2VycmF0Jywgc2Fucy1zZXJpZlxufVxuXG4ubmF2YmFye1xuICAgIGJhY2tncm91bmQtY29sb3I6IHZhcigtLWxpZ2h0KSAhaW1wb3J0YW50O1xufVxuXG4ubmF2YmFyIC5idG4tc2lnbiB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogdmFyKC0tb3V0bGluZSk7XG4gICAgY29sb3I6IHZhcigtLWJsYWNrKTtcbiAgICB0cmFuc2l0aW9uOiAwLjNzO1xufVxuXG4ubmF2YmFyIC5idG4tc2lnbjpob3ZlciB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogdmFyKC0tb3V0bGluZSk7XG4gICAgY29sb3I6IHZhcigtLXByaW1hcnkpO1xuICAgIHRyYW5zaXRpb246IDAuM3M7XG59XG5cbi5uYXZiYXIgLmJ0bi1yZWdpc3RlciB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogdmFyKC0tcHJpbWFyeSk7XG4gICAgY29sb3I6IHZhcigtLXdoaXRlKTtcbiAgICB0cmFuc2l0aW9uOiAwLjNzO1xufVxuXG4ubmF2YmFyIC5idG4tcmVnaXN0ZXI6aG92ZXIge1xuICAgIGJhY2tncm91bmQtY29sb3I6IHZhcigtLXByaW1hcnkpO1xuICAgIHRyYW5zaXRpb246IDAuM3M7XG59XG5cbi5pbWctaGVyb3tcbiAgICB3aWR0aDogNjMwcHg7XG4gICAgaGVpZ2h0OjUyNHB4O1xuICAgIG9iamVjdC1maXQ6IGNvdmVyO1xuICAgIG9iamVjdC1wb3NpdGlvbjogY2VudGVyO1xufVxuXG4ubmF2YmFyIG5hdiBhIHtcbiAgICBjb2xvcjogIzEzMGY0ODtcbiAgICB0cmFuc2l0aW9uOiAwLjFzO1xufVxuXG4ubmF2YmFyIG5hdiBhOmhvdmVyLFxuLm5hdmJhciBuYXYgYS5hY3RpdmUge1xuICAgIGNvbG9yOiB2YXIoLS1wcmltYXJ5KTtcbiAgICBmb250LXdlaWdodDogNjAwO1xuICAgIHRyYW5zaXRpb246IDAuMXM7XG59XG5cbi5oZWFkZXItNi0xICNtZW51LXRvZ2dsZTpjaGVja2VkKyNtZW51LFxuLmhlYWRlci02LTEgI21lbnUtdG9nZ2xlOmNoZWNrZWQrI21lbnUrI21lbnUge1xuICAgIGRpc3BsYXk6IGJsb2NrO1xufVxuXG4uaGVhZGVyLTYtMSAuYnRuLWdldCB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogdmFyKC0tcHJpbWFyeSk7XG4gICAgY29sb3I6IHZhcigtLXdoaXRlKTtcbiAgICB0cmFuc2l0aW9uOiAwLjNzO1xufVxuXG4uaGVhZGVyLTYtMSAuYnRuLWdldDpob3ZlciB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogdmFyKC0tcHJpbWFyeSk7XG4gICAgdHJhbnNpdGlvbjogMC4zcztcbn1cblxuLmhlYWRlci02LTEgLmNhcmQtaGVhZGVyIHtcbiAgICBib3gtc2hhZG93OiAwcHggMHB4IDI0cHggMHB4IHJnYmEoMCwgMCwgMCwgMC4wNCk7XG59XG5cbi5jb250ZW50LTctMiAuY2FyZCB7XG4gICAgYm94LXNoYWRvdzogMHB4IDEwcHggNDVweCAwcHggcmdiYSgwLCAwLCAwLCAwLjA0KTtcbn1cblxuLmNvbnRlbnQtNy0yIC50aXRsZS10ZXh0IHtcbiAgICBjb2xvcjogdmFyKC0tcHJpbWFyeSk7XG59XG5cbi5jb250ZW50LTctMiAuY2FwdGlvbi10ZXh0IHtcbiAgICBjb2xvcjogdmFyKC0tZGFya2dyZXkpO1xufVxuXG4udGV4dC1wcmltYXJ5IHtcbiAgICBjb2xvcjogdmFyKC0tcHJpbWFyeSk7XG59XG5cbi50ZXh0LXBpbmsge1xuICAgIGNvbG9yOiB2YXIoLS1mcmVuY2hyb3NlKTtcbn1cblxuLnRleHQtYmxhY2sge1xuICAgIGNvbG9yOiB2YXIoLS1ibGFjayk7XG59XG5cbi50ZXh0LWdyYXktMSB7XG4gICAgY29sb3I6IHZhcigtLWRhcmtncmV5KTtcbn1cblxuLnRleHQtZ3JheS0yIHtcbiAgICBjb2xvcjogdmFyKC0tbGlnaHRncmV5KTtcbn1cblxuXG4uaXRlbS1zaXplIHtcbiAgICB3aWR0aDogMTAwJTtcbn1cblxuLmltZy1jbGllbnQge1xuICAgIGhlaWdodDogNjBweDtcbiAgICB3aWR0aDogMjUwcHg7XG59XG5cbi5iZy1wcmltYXJ5IHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiB2YXIoLS1wcmltYXJ5KTtcbn1cblxuLmJnLWxpZ2h0IHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiB2YXIoLS1saWdodCk7XG59XG5cbi5ncmFkaWVudC10ZXh0IHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiB2YXIoLS1zb2Z0LW9yYW5nZSk7XG4gICAgYmFja2dyb3VuZC1pbWFnZTogbGluZWFyLWdyYWRpZW50KDExMy40ZGVnLCAjRkU5ODE4IDAlLCAjRkE3MjE5IDEwMCUpO1xuICAgIGJhY2tncm91bmQtaW1hZ2U6IGNvbmljLWdyYWRpZW50KDExMy40ZGVnLCAjRkU5ODE4IDAlLCAjRkE3MjE5IDEwMCUpO1xuICAgIGJhY2tncm91bmQtc2l6ZTogMTAwJTtcbiAgICBiYWNrZ3JvdW5kLXJlcGVhdDogbm8tcmVwZWF0O1xuICAgIC13ZWJraXQtYmFja2dyb3VuZC1jbGlwOiB0ZXh0O1xuICAgIC13ZWJraXQtdGV4dC1maWxsLWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICAtbW96LWJhY2tncm91bmQtY2xpcDogdGV4dDtcbiAgICAtbW96LXRleHQtZmlsbC1jb2xvcjogdHJhbnNwYXJlbnQ7XG59XG5cbi5mbGlja2l0eS1zbGlkZXIsXG4uZmxpY2tpdHktdmlld3BvcnQge1xuICAgIG92ZXJmbG93OiB2aXNpYmxlO1xuICAgIGhlaWdodDogYXV0bztcbn1cblxuLmZsaWNraXR5LXByZXYtbmV4dC1idXR0b24ge1xuICAgIHdpZHRoOiAzNnB4O1xuICAgIGhlaWdodDogMzZweDtcbn1cblxuLyogcG9zaXRpb24gb3V0c2lkZSAqL1xuLmZsaWNraXR5LXByZXYtbmV4dC1idXR0b24ucHJldmlvdXMge1xuICAgIGxlZnQ6IC03MHB4O1xufVxuXG4uZmxpY2tpdHktcHJldi1uZXh0LWJ1dHRvbi5uZXh0IHtcbiAgICByaWdodDogLTcwcHg7XG59XG5cbi5mbGlja2l0eS1idXR0b24taWNvbiB7XG4gICAgZmlsbDogIzA5MEEwRDtcbn1cblxuLmZsaWNraXR5LWJ1dHRvbiB7XG4gICAgYmFja2dyb3VuZDogcmdiYSgyNTUsIDI1NSwgMjU1LCAxKTtcbn1cblxuLmZsaWNraXR5LWJ1dHRvbjpob3ZlciB7XG4gICAgYmFja2dyb3VuZDogcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjUpO1xufVxuXG4uY29udGVudC0zLTcgLmNhcmQtb3V0bGluZSB7XG4gICAgYm9yZGVyOiAxcHggc29saWQgI0U1RUJGOTtcbn1cblxuLmNvbnRlbnQtMy03IC5jYXJkIHtcbiAgICB0cmFuc2l0aW9uOiAwLjRzO1xuICAgIHRvcDogMHB4O1xuXG4gICAgbGVmdDogMHB4O1xuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbn1cblxuLmNvbnRlbnQtMy03IC5jYXJkOmhvdmVyIHtcbiAgICB0b3A6IC0zcHg7XG4gICAgbGVmdDogLTNweDtcbiAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgdHJhbnNpdGlvbjogMC40cztcbn1cblxuLmNvbnRlbnQtMy03IC5idG4tb3V0bGluZSB7XG4gICAgYm9yZGVyOiAxcHggc29saWQgdmFyKC0tcHJpbWFyeSk7XG4gICAgY29sb3I6IHZhcigtLXByaW1hcnkpO1xufVxuXG4uY29udGVudC0zLTcgLmJ0bi1vdXRsaW5lOmhvdmVyIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiB2YXIoLS1wcmltYXJ5KTtcbiAgICBjb2xvcjogI0ZGRkZGRjtcbn1cblxuLmNvbnRlbnQtMy03IC5idG4tZmlsbCB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogdmFyKC0tZnJlbmNocm9zZSk7XG59XG5cbi5jb250ZW50LTMtNyAuYnRuLWZpbGw6aG92ZXIge1xuICAgIGJhY2tncm91bmQtY29sb3I6IHZhcigtLWZyZW5jaHJvc2UpO1xufVxuXG4uY29udGVudC0zLTcgLnByaWNlLWxpc3QtMy03IC5uby1jaGVjay0zLTcge1xuICAgIGNvbG9yOiAjRTFFMUUxO1xufVxuXG4uY29udGVudC0zLTcgLnByaWNlLWxpc3QtMy03IC5jaGVjay0zLTcsXG4uY29udGVudC0zLTcgLnRleHQtbWVkaXVtLWJsYWNrIHtcbiAgICBjb2xvcjogdmFyKC0tcHJpbWFyeSk7XG59XG5cbi5jb250ZW50LTMtNyAuYmctbWVkaXVtLWJsYWNrIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiB2YXIoLS1wcmltYXJ5KTtcbn1cblxuLmNvbnRlbnQtMy03IC50ZXh0LW1lZGl1bS13aGl0ZSB7XG4gICAgY29sb3I6ICNDM0MzQzg7XG59XG5cbi5jb250ZW50LTMtNyAuY2FwdGlvbiB7XG4gICAgY29sb3I6ICM4RThGQUQ7XG59XG5cbi5jb250ZW50LTMtNyAucHJpY2UtdGl0bGUge1xuICAgIGNvbG9yOiAjMTQxQzJFO1xufVxuXG4uY29udGVudC0zLTcgLnByaWNlLW1vbnRoIHtcbiAgICBjb2xvcjogIzlFOUU5RTtcbn1cblxuLmZvb3Rlci0yLTMgLmxpc3QtZm9vdGVyIGxpIGEge1xuICAgIGNvbG9yOiAjNzA3MDkyO1xufVxuXG4uZm9vdGVyLTItMyAubGlzdC1mb290ZXIgbGkgYTpob3ZlciB7XG4gICAgY29sb3I6ICNGRkZGRkY7XG59XG5cbi5mb290ZXItMi0zIC5ib3JkZXItY29sb3Ige1xuICAgIGNvbG9yOiAjNzA3MDkyO1xufVxuXG4uZm9vdGVyLTItMyAuZm9vdGVyLWxpbms6aG92ZXIge1xuICAgIGNvbG9yOiAjRkZGRkZGO1xufVxuXG4uZm9vdGVyLTItMyAuc29jaWFsLW1lZGlhLWM6aG92ZXIgY2lyY2xlLFxuLmZvb3Rlci0yLTMgLnNvY2lhbC1tZWRpYS1wOmhvdmVyIHBhdGgge1xuICAgIGZpbGw6ICNGRkZGRkY7XG59Il0sInNvdXJjZVJvb3QiOiIifQ== */
</style>
<link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
<style>
    :root {
        --swiper-navigation-size: 44px
    }

        .swiper-button-next,
        .swiper-button-prev {
        position: absolute;
        top: 50%;
        width: calc(var(--swiper-navigation-size)/ 44 * 27);
        height: var(--swiper-navigation-size);
        margin-top: calc(0px - (var(--swiper-navigation-size)/ 2));
        z-index: 10;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--swiper-navigation-color, var(--swiper-theme-color))
        }

        .swiper-button-next.swiper-button-disabled,
        .swiper-button-prev.swiper-button-disabled {
        opacity: .35;
        cursor: auto;
        pointer-events: none
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
        font-family: swiper-icons;
        font-size: var(--swiper-navigation-size);
        text-transform: none !important;
        letter-spacing: 0;
        font-variant: initial;
        line-height: 1
        }

        .swiper-button-prev,
        .swiper-rtl .swiper-button-next {
        left: 10px;
        right: auto
        }

        .swiper-button-prev:after,
        .swiper-rtl .swiper-button-next:after {
        content: 'prev'
        }

        .swiper-button-next,
        .swiper-rtl .swiper-button-prev {
        right: 10px;
        left: auto
        }

        .swiper-button-next:after,
        .swiper-rtl .swiper-button-prev:after {
        content: 'next'
        }

        .swiper-button-lock {
        display: none
        }

        /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9ub2RlX21vZHVsZXMvc3dpcGVyL21vZHVsZXMvbmF2aWdhdGlvbi9uYXZpZ2F0aW9uLm1pbi5jc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUEsTUFBTSw2QkFBNkIsQ0FBQyx3Q0FBd0MsaUJBQWlCLENBQUMsT0FBTyxDQUFDLGtEQUFrRCxDQUFDLG9DQUFvQyxDQUFDLHlEQUF5RCxDQUFDLFVBQVUsQ0FBQyxjQUFjLENBQUMsWUFBWSxDQUFDLGtCQUFrQixDQUFDLHNCQUFzQixDQUFDLDhEQUE4RCxDQUFDLHNGQUFzRixXQUFXLENBQUMsV0FBVyxDQUFDLG1CQUFtQixDQUFDLG9EQUFvRCx3QkFBd0IsQ0FBQyx1Q0FBdUMsQ0FBQyw2QkFBNkIsQ0FBQyxnQkFBZ0IsQ0FBQyxvQkFBb0IsQ0FBQyxhQUFhLENBQUMsb0RBQW9ELFNBQVMsQ0FBQyxVQUFVLENBQUMsZ0VBQWdFLGNBQWMsQ0FBQyxvREFBb0QsVUFBVSxDQUFDLFNBQVMsQ0FBQyxnRUFBZ0UsY0FBYyxDQUFDLG9CQUFvQixZQUFZIiwic291cmNlc0NvbnRlbnQiOlsiOnJvb3R7LS1zd2lwZXItbmF2aWdhdGlvbi1zaXplOjQ0cHh9LnN3aXBlci1idXR0b24tbmV4dCwuc3dpcGVyLWJ1dHRvbi1wcmV2e3Bvc2l0aW9uOmFic29sdXRlO3RvcDo1MCU7d2lkdGg6Y2FsYyh2YXIoLS1zd2lwZXItbmF2aWdhdGlvbi1zaXplKS8gNDQgKiAyNyk7aGVpZ2h0OnZhcigtLXN3aXBlci1uYXZpZ2F0aW9uLXNpemUpO21hcmdpbi10b3A6Y2FsYygwcHggLSAodmFyKC0tc3dpcGVyLW5hdmlnYXRpb24tc2l6ZSkvIDIpKTt6LWluZGV4OjEwO2N1cnNvcjpwb2ludGVyO2Rpc3BsYXk6ZmxleDthbGlnbi1pdGVtczpjZW50ZXI7anVzdGlmeS1jb250ZW50OmNlbnRlcjtjb2xvcjp2YXIoLS1zd2lwZXItbmF2aWdhdGlvbi1jb2xvcix2YXIoLS1zd2lwZXItdGhlbWUtY29sb3IpKX0uc3dpcGVyLWJ1dHRvbi1uZXh0LnN3aXBlci1idXR0b24tZGlzYWJsZWQsLnN3aXBlci1idXR0b24tcHJldi5zd2lwZXItYnV0dG9uLWRpc2FibGVke29wYWNpdHk6LjM1O2N1cnNvcjphdXRvO3BvaW50ZXItZXZlbnRzOm5vbmV9LnN3aXBlci1idXR0b24tbmV4dDphZnRlciwuc3dpcGVyLWJ1dHRvbi1wcmV2OmFmdGVye2ZvbnQtZmFtaWx5OnN3aXBlci1pY29ucztmb250LXNpemU6dmFyKC0tc3dpcGVyLW5hdmlnYXRpb24tc2l6ZSk7dGV4dC10cmFuc2Zvcm06bm9uZSFpbXBvcnRhbnQ7bGV0dGVyLXNwYWNpbmc6MDtmb250LXZhcmlhbnQ6aW5pdGlhbDtsaW5lLWhlaWdodDoxfS5zd2lwZXItYnV0dG9uLXByZXYsLnN3aXBlci1ydGwgLnN3aXBlci1idXR0b24tbmV4dHtsZWZ0OjEwcHg7cmlnaHQ6YXV0b30uc3dpcGVyLWJ1dHRvbi1wcmV2OmFmdGVyLC5zd2lwZXItcnRsIC5zd2lwZXItYnV0dG9uLW5leHQ6YWZ0ZXJ7Y29udGVudDoncHJldid9LnN3aXBlci1idXR0b24tbmV4dCwuc3dpcGVyLXJ0bCAuc3dpcGVyLWJ1dHRvbi1wcmV2e3JpZ2h0OjEwcHg7bGVmdDphdXRvfS5zd2lwZXItYnV0dG9uLW5leHQ6YWZ0ZXIsLnN3aXBlci1ydGwgLnN3aXBlci1idXR0b24tcHJldjphZnRlcntjb250ZW50OiduZXh0J30uc3dpcGVyLWJ1dHRvbi1sb2Nre2Rpc3BsYXk6bm9uZX0iXSwic291cmNlUm9vdCI6IiJ9 */
</style>
<noscript id="__next_css__DO_NOT_USE__"></noscript>
@yield('css')
