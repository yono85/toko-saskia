<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,50030,600;1,400&amp;display=swap" type="text/css">
    <link rel="stylesheet" href="https://utas.me/assets/frontend.bundle.css?v=2024.05.08">
    <link rel="stylesheet" href="https://utas.me/assets/3rd-party/css/select2.min.css">
    <link href="https://cdn.datatables.net/v/bs4/dt-1.11.3/r-2.2.9/datatables.min.css" rel="stylesheet" type="text/css">
    <title>Checkout</title>
    <meta name="description" content="">
    <link rel="icon" href="">
    <link rel="apple-touch-icon" href="">
    <link rel="manifest" href="https://utas.me/site.webmanifest">
    <link rel="mask-icon" href="https://utas.me/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

        <!-- Facebook Pixel Code -->
    <!-- <script async="" src="https://www.clarity.ms/s/0.7.34/clarity.js"></script> -->
    
    <!-- <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-BNLQE74TQ5&amp;cx=c&amp;_slc=1"></script> -->
    
    <!-- <script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/ec.js"></script> -->
    
    <!-- <script id="birdsend-pixel-js" src="https://cdn.birdsend.co/assets/static/js/pixel/main.js"></script> -->
    
    <!-- <script async="" src="https://www.clarity.ms/tag/3v77z9uu0n"></script> -->
    
    <!-- <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/destination?id=AW-718413471&amp;l=dataLayer&amp;cx=c"></script> -->
    <!-- <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script> -->
    <!-- <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script> -->
    <!-- <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-PWF989L"></script> -->
    <!-- <script src="https://connect.facebook.net/signals/config/543196502885221?v=2.9.159&amp;r=stable&amp;domain=utas.me&amp;hme=446fb981c8c3baeb03730fe3cbd404f7f15f64c693f24c7fe75da498bc2c95d8&amp;ex_m=67%2C113%2C100%2C104%2C58%2C3%2C93%2C66%2C15%2C91%2C84%2C49%2C51%2C160%2C163%2C174%2C170%2C171%2C173%2C28%2C94%2C50%2C73%2C172%2C155%2C158%2C167%2C168%2C175%2C122%2C39%2C33%2C134%2C14%2C48%2C180%2C179%2C124%2C17%2C38%2C1%2C41%2C62%2C63%2C64%2C68%2C88%2C16%2C13%2C90%2C87%2C86%2C101%2C103%2C37%2C102%2C29%2C25%2C156%2C159%2C131%2C27%2C10%2C11%2C12%2C5%2C6%2C24%2C21%2C22%2C54%2C59%2C61%2C71%2C95%2C26%2C72%2C8%2C7%2C76%2C46%2C20%2C97%2C96%2C98%2C9%2C19%2C18%2C81%2C53%2C79%2C32%2C70%2C0%2C89%2C31%2C78%2C83%2C45%2C44%2C82%2C36%2C4%2C85%2C77%2C42%2C34%2C80%2C2%2C35%2C60%2C40%2C99%2C43%2C75%2C65%2C105%2C57%2C56%2C30%2C92%2C55%2C52%2C47%2C74%2C69%2C23%2C106%2C186%2C185%2C187%2C192%2C193%2C194%2C190%2C182%2C123%2C125%2C152%2C181%2C183%2C114%2C146%2C136%2C140%2C176%2C120%2C218%2C107%2C118%2C219%2C154%2C111%2C127%2C115%2C143" async=""></script> -->

    <!-- <script src="https://connect.facebook.net/signals/config/715332145559105?v=2.9.159&amp;r=stable&amp;domain=utas.me&amp;hme=446fb981c8c3baeb03730fe3cbd404f7f15f64c693f24c7fe75da498bc2c95d8&amp;ex_m=67%2C113%2C100%2C104%2C58%2C3%2C93%2C66%2C15%2C91%2C84%2C49%2C51%2C160%2C163%2C174%2C170%2C171%2C173%2C28%2C94%2C50%2C73%2C172%2C155%2C158%2C167%2C168%2C175%2C122%2C39%2C33%2C134%2C14%2C48%2C180%2C179%2C124%2C17%2C38%2C1%2C41%2C62%2C63%2C64%2C68%2C88%2C16%2C13%2C90%2C87%2C86%2C101%2C103%2C37%2C102%2C29%2C25%2C156%2C159%2C131%2C27%2C10%2C11%2C12%2C5%2C6%2C24%2C21%2C22%2C54%2C59%2C61%2C71%2C95%2C26%2C72%2C8%2C7%2C76%2C46%2C20%2C97%2C96%2C98%2C9%2C19%2C18%2C81%2C53%2C79%2C32%2C70%2C0%2C89%2C31%2C78%2C83%2C45%2C44%2C82%2C36%2C4%2C85%2C77%2C42%2C34%2C80%2C2%2C35%2C60%2C40%2C99%2C43%2C75%2C65%2C105%2C57%2C56%2C30%2C92%2C55%2C52%2C47%2C74%2C69%2C23%2C106" async=""></script> -->

    <!-- <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script> -->
    
    <!-- <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '715332145559105');
        fbq('track', 'PageView');
    </script> -->

    <!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) -->
    <!-- <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-145358143-1"></script> -->

<!-- <script>
window.dataLayer = window.dataLayer || [];
function gtag(){window.dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-145358143-1');
</script> -->

<!-- <meta name="" content=""> -->
                
<!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> -->

          <!-- Google Tag Manager -->
      <!-- <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer', 'GTM-PWF989L'); -->
      </script>
      <!-- End Google Tag Manager -->
    
          <!-- Global site tag (gtag.js) - Google Analytics -->
      <!-- <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-BNLQE74TQ5"></script> -->
<!-- 
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){window.dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-BNLQE74TQ5');
      </script> -->
    
    <!-- <style>
        .swal2-popup.swal2-toast{box-sizing:border-box;grid-column:1/4!important;grid-row:1/4!important;grid-template-columns:1fr 99fr 1fr;padding:1em;overflow-y:hidden;background:#fff;box-shadow:0 0 1px hsla(0deg,0%,0%,.075),0 1px 2px hsla(0deg,0%,0%,.075),1px 2px 4px hsla(0deg,0%,0%,.075),1px 3px 8px hsla(0deg,0%,0%,.075),2px 4px 16px hsla(0deg,0%,0%,.075);pointer-events:all}.swal2-popup.swal2-toast>*{grid-column:2}.swal2-popup.swal2-toast .swal2-title{margin:.5em 1em;padding:0;font-size:1em;text-align:initial}.swal2-popup.swal2-toast .swal2-loading{justify-content:center}.swal2-popup.swal2-toast .swal2-input{height:2em;margin:.5em;font-size:1em}.swal2-popup.swal2-toast .swal2-validation-message{font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{grid-column:3/3;grid-row:1/99;align-self:center;width:.8em;height:.8em;margin:0;font-size:2em}.swal2-popup.swal2-toast .swal2-html-container{margin:.5em 1em;padding:0;font-size:1em;text-align:initial}.swal2-popup.swal2-toast .swal2-html-container:empty{padding:0}.swal2-popup.swal2-toast .swal2-loader{grid-column:1;grid-row:1/99;align-self:center;width:2em;height:2em;margin:.25em}.swal2-popup.swal2-toast .swal2-icon{grid-column:1;grid-row:1/99;align-self:center;width:2em;min-width:2em;height:2em;margin:0 .5em 0 0}.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:1.8em;font-weight:700}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{justify-content:flex-start;height:auto;margin:0;margin-top:.5em;padding:0 .5em}.swal2-popup.swal2-toast .swal2-styled{margin:.25em .5em;padding:.4em .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:1.6em;height:3em;transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.8em;left:-.5em;transform:rotate(-45deg);transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.25em;left:.9375em;transform-origin:0 1.5em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-toast-animate-success-line-tip .75s;animation:swal2-toast-animate-success-line-tip .75s}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-toast-animate-success-line-long .75s;animation:swal2-toast-animate-success-line-long .75s}.swal2-popup.swal2-toast.swal2-show{-webkit-animation:swal2-toast-show .5s;animation:swal2-toast-show .5s}.swal2-popup.swal2-toast.swal2-hide{-webkit-animation:swal2-toast-hide .1s forwards;animation:swal2-toast-hide .1s forwards}.swal2-container{display:grid;position:fixed;z-index:1060;top:0;right:0;bottom:0;left:0;box-sizing:border-box;grid-template-areas:"top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";grid-template-rows:minmax(-webkit-min-content,auto) minmax(-webkit-min-content,auto) minmax(-webkit-min-content,auto);grid-template-rows:minmax(min-content,auto) minmax(min-content,auto) minmax(min-content,auto);height:100%;padding:.625em;overflow-x:hidden;transition:background-color .1s;-webkit-overflow-scrolling:touch}.swal2-container.swal2-backdrop-show,.swal2-container.swal2-noanimation{background:rgba(0,0,0,.4)}.swal2-container.swal2-backdrop-hide{background:0 0!important}.swal2-container.swal2-bottom-start,.swal2-container.swal2-center-start,.swal2-container.swal2-top-start{grid-template-columns:minmax(0,1fr) auto auto}.swal2-container.swal2-bottom,.swal2-container.swal2-center,.swal2-container.swal2-top{grid-template-columns:auto minmax(0,1fr) auto}.swal2-container.swal2-bottom-end,.swal2-container.swal2-center-end,.swal2-container.swal2-top-end{grid-template-columns:auto auto minmax(0,1fr)}.swal2-container.swal2-top-start>.swal2-popup{align-self:start}.swal2-container.swal2-top>.swal2-popup{grid-column:2;align-self:start;justify-self:center}.swal2-container.swal2-top-end>.swal2-popup,.swal2-container.swal2-top-right>.swal2-popup{grid-column:3;align-self:start;justify-self:end}.swal2-container.swal2-center-left>.swal2-popup,.swal2-container.swal2-center-start>.swal2-popup{grid-row:2;align-self:center}.swal2-container.swal2-center>.swal2-popup{grid-column:2;grid-row:2;align-self:center;justify-self:center}.swal2-container.swal2-center-end>.swal2-popup,.swal2-container.swal2-center-right>.swal2-popup{grid-column:3;grid-row:2;align-self:center;justify-self:end}.swal2-container.swal2-bottom-left>.swal2-popup,.swal2-container.swal2-bottom-start>.swal2-popup{grid-column:1;grid-row:3;align-self:end}.swal2-container.swal2-bottom>.swal2-popup{grid-column:2;grid-row:3;justify-self:center;align-self:end}.swal2-container.swal2-bottom-end>.swal2-popup,.swal2-container.swal2-bottom-right>.swal2-popup{grid-column:3;grid-row:3;align-self:end;justify-self:end}.swal2-container.swal2-grow-fullscreen>.swal2-popup,.swal2-container.swal2-grow-row>.swal2-popup{grid-column:1/4;width:100%}.swal2-container.swal2-grow-column>.swal2-popup,.swal2-container.swal2-grow-fullscreen>.swal2-popup{grid-row:1/4;align-self:stretch}.swal2-container.swal2-no-transition{transition:none!important}.swal2-popup{display:none;position:relative;box-sizing:border-box;grid-template-columns:minmax(0,100%);width:32em;max-width:100%;padding:0 0 1.25em;border:none;border-radius:5px;background:#fff;color:#545454;font-family:inherit;font-size:1rem}.swal2-popup:focus{outline:0}.swal2-popup.swal2-loading{overflow-y:hidden}.swal2-title{position:relative;max-width:100%;margin:0;padding:.8em 1em 0;color:inherit;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}.swal2-actions{display:flex;z-index:1;box-sizing:border-box;flex-wrap:wrap;align-items:center;justify-content:center;width:auto;margin:1.25em auto 0;padding:0}.swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}.swal2-actions:not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))}.swal2-actions:not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))}.swal2-loader{display:none;align-items:center;justify-content:center;width:2.2em;height:2.2em;margin:0 1.875em;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border-width:.25em;border-style:solid;border-radius:100%;border-color:#2778c4 transparent #2778c4 transparent}.swal2-styled{margin:.3125em;padding:.625em 1.1em;transition:box-shadow .1s;box-shadow:0 0 0 3px transparent;font-weight:500}.swal2-styled:not([disabled]){cursor:pointer}.swal2-styled.swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#7066e0;color:#fff;font-size:1em}.swal2-styled.swal2-confirm:focus{box-shadow:0 0 0 3px rgba(112,102,224,.5)}.swal2-styled.swal2-deny{border:0;border-radius:.25em;background:initial;background-color:#dc3741;color:#fff;font-size:1em}.swal2-styled.swal2-deny:focus{box-shadow:0 0 0 3px rgba(220,55,65,.5)}.swal2-styled.swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#6e7881;color:#fff;font-size:1em}.swal2-styled.swal2-cancel:focus{box-shadow:0 0 0 3px rgba(110,120,129,.5)}.swal2-styled.swal2-default-outline:focus{box-shadow:0 0 0 3px rgba(100,150,200,.5)}.swal2-styled:focus{outline:0}.swal2-styled::-moz-focus-inner{border:0}.swal2-footer{justify-content:center;margin:1em 0 0;padding:1em 1em 0;border-top:1px solid #eee;color:inherit;font-size:1em}.swal2-timer-progress-bar-container{position:absolute;right:0;bottom:0;left:0;grid-column:auto!important;overflow:hidden;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.swal2-timer-progress-bar{width:100%;height:.25em;background:rgba(0,0,0,.2)}.swal2-image{max-width:100%;margin:2em auto 1em}.swal2-close{z-index:2;align-items:center;justify-content:center;width:1.2em;height:1.2em;margin-top:0;margin-right:0;margin-bottom:-1.2em;padding:0;overflow:hidden;transition:color .1s,box-shadow .1s;border:none;border-radius:5px;background:0 0;color:#ccc;font-family:serif;font-family:monospace;font-size:2.5em;cursor:pointer;justify-self:end}.swal2-close:hover{transform:none;background:0 0;color:#f27474}.swal2-close:focus{outline:0;box-shadow:inset 0 0 0 3px rgba(100,150,200,.5)}.swal2-close::-moz-focus-inner{border:0}.swal2-html-container{z-index:1;justify-content:center;margin:1em 1.6em .3em;padding:0;overflow:auto;color:inherit;font-size:1.125em;font-weight:400;line-height:normal;text-align:center;word-wrap:break-word;word-break:break-word}.swal2-checkbox,.swal2-file,.swal2-input,.swal2-radio,.swal2-select,.swal2-textarea{margin:1em 2em 3px}.swal2-file,.swal2-input,.swal2-textarea{box-sizing:border-box;width:auto;transition:border-color .1s,box-shadow .1s;border:1px solid #d9d9d9;border-radius:.1875em;background:0 0;box-shadow:inset 0 1px 1px rgba(0,0,0,.06),0 0 0 3px transparent;color:inherit;font-size:1.125em}.swal2-file.swal2-inputerror,.swal2-input.swal2-inputerror,.swal2-textarea.swal2-inputerror{border-color:#f27474!important;box-shadow:0 0 2px #f27474!important}.swal2-file:focus,.swal2-input:focus,.swal2-textarea:focus{border:1px solid #b4dbed;outline:0;box-shadow:inset 0 1px 1px rgba(0,0,0,.06),0 0 0 3px rgba(100,150,200,.5)}.swal2-file::-moz-placeholder,.swal2-input::-moz-placeholder,.swal2-textarea::-moz-placeholder{color:#ccc}.swal2-file:-ms-input-placeholder,.swal2-input:-ms-input-placeholder,.swal2-textarea:-ms-input-placeholder{color:#ccc}.swal2-file::placeholder,.swal2-input::placeholder,.swal2-textarea::placeholder{color:#ccc}.swal2-range{margin:1em 2em 3px;background:#fff}.swal2-range input{width:80%}.swal2-range output{width:20%;color:inherit;font-weight:600;text-align:center}.swal2-range input,.swal2-range output{height:2.625em;padding:0;font-size:1.125em;line-height:2.625em}.swal2-input{height:2.625em;padding:0 .75em}.swal2-file{width:75%;margin-right:auto;margin-left:auto;background:0 0;font-size:1.125em}.swal2-textarea{height:6.75em;padding:.75em}.swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;background:0 0;color:inherit;font-size:1.125em}.swal2-checkbox,.swal2-radio{align-items:center;justify-content:center;background:#fff;color:inherit}.swal2-checkbox label,.swal2-radio label{margin:0 .6em;font-size:1.125em}.swal2-checkbox input,.swal2-radio input{flex-shrink:0;margin:0 .4em}.swal2-input-label{display:flex;justify-content:center;margin:1em auto 0}.swal2-validation-message{align-items:center;justify-content:center;margin:1em 0 0;padding:.625em;overflow:hidden;background:#f0f0f0;color:#666;font-size:1em;font-weight:300}.swal2-validation-message::before{content:"!";display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center}.swal2-icon{position:relative;box-sizing:content-box;justify-content:center;width:5em;height:5em;margin:2.5em auto .6em;border:.25em solid transparent;border-radius:50%;border-color:#000;font-family:inherit;line-height:5em;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:3.75em}.swal2-icon.swal2-error{border-color:#f27474;color:#f27474}.swal2-icon.swal2-error .swal2-x-mark{position:relative;flex-grow:1}.swal2-icon.swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;transform:rotate(45deg)}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;transform:rotate(-45deg)}.swal2-icon.swal2-error.swal2-icon-show{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark{-webkit-animation:swal2-animate-error-x-mark .5s;animation:swal2-animate-error-x-mark .5s}.swal2-icon.swal2-warning{border-color:#facea8;color:#f8bb86}.swal2-icon.swal2-warning.swal2-icon-show{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-icon.swal2-warning.swal2-icon-show .swal2-icon-content{-webkit-animation:swal2-animate-i-mark .5s;animation:swal2-animate-i-mark .5s}.swal2-icon.swal2-info{border-color:#9de0f6;color:#3fc3ee}.swal2-icon.swal2-info.swal2-icon-show{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-icon.swal2-info.swal2-icon-show .swal2-icon-content{-webkit-animation:swal2-animate-i-mark .8s;animation:swal2-animate-i-mark .8s}.swal2-icon.swal2-question{border-color:#c9dae1;color:#87adbd}.swal2-icon.swal2-question.swal2-icon-show{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-icon.swal2-question.swal2-icon-show .swal2-icon-content{-webkit-animation:swal2-animate-question-mark .8s;animation:swal2-animate-question-mark .8s}.swal2-icon.swal2-success{border-color:#a5dc86;color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;transform:rotate(45deg);border-radius:50%}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.4375em;left:-2.0635em;transform:rotate(-45deg);transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.6875em;left:1.875em;transform:rotate(-45deg);transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}.swal2-icon.swal2-success .swal2-success-ring{position:absolute;z-index:2;top:-.25em;left:-.25em;box-sizing:content-box;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%}.swal2-icon.swal2-success .swal2-success-fix{position:absolute;z-index:1;top:.5em;left:1.625em;width:.4375em;height:5.625em;transform:rotate(-45deg)}.swal2-icon.swal2-success [class^=swal2-success-line]{display:block;position:absolute;z-index:2;height:.3125em;border-radius:.125em;background-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.8125em;width:1.5625em;transform:rotate(45deg)}.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;transform:rotate(-45deg)}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-animate-success-line-tip .75s;animation:swal2-animate-success-line-tip .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-animate-success-line-long .75s;animation:swal2-animate-success-line-long .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right{-webkit-animation:swal2-rotate-success-circular-line 4.25s ease-in;animation:swal2-rotate-success-circular-line 4.25s ease-in}.swal2-progress-steps{flex-wrap:wrap;align-items:center;max-width:100%;margin:1.25em auto;padding:0;background:0 0;font-weight:600}.swal2-progress-steps li{display:inline-block;position:relative}.swal2-progress-steps .swal2-progress-step{z-index:20;flex-shrink:0;width:2em;height:2em;border-radius:2em;background:#2778c4;color:#fff;line-height:2em;text-align:center}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step{background:#2778c4}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step{background:#add8e6;color:#fff}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line{background:#add8e6}.swal2-progress-steps .swal2-progress-step-line{z-index:10;flex-shrink:0;width:2.5em;height:.4em;margin:0 -1px;background:#2778c4}[class^=swal2]{-webkit-tap-highlight-color:transparent}.swal2-show{-webkit-animation:swal2-show .3s;animation:swal2-show .3s}.swal2-hide{-webkit-animation:swal2-hide .15s forwards;animation:swal2-hide .15s forwards}.swal2-noanimation{transition:none}.swal2-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}.swal2-rtl .swal2-close{margin-right:initial;margin-left:0}.swal2-rtl .swal2-timer-progress-bar{right:0;left:auto}.swal2-no-war{display:flex;position:fixed;z-index:1061;top:0;left:0;align-items:center;justify-content:center;width:100%;height:3.375em;background:#20232a;color:#fff;text-align:center}.swal2-no-war a{color:#61dafb;text-decoration:none}.swal2-no-war a:hover{text-decoration:underline}@-webkit-keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@-webkit-keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@-webkit-keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@-webkit-keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@-webkit-keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@-webkit-keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@-webkit-keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@-webkit-keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@-webkit-keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@-webkit-keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@-webkit-keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@-webkit-keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@-webkit-keyframes swal2-animate-question-mark{0%{transform:rotateY(-360deg)}100%{transform:rotateY(0)}}@keyframes swal2-animate-question-mark{0%{transform:rotateY(-360deg)}100%{transform:rotateY(0)}}@-webkit-keyframes swal2-animate-i-mark{0%{transform:rotateZ(45deg);opacity:0}25%{transform:rotateZ(-25deg);opacity:.4}50%{transform:rotateZ(15deg);opacity:.8}75%{transform:rotateZ(-5deg);opacity:1}100%{transform:rotateX(0);opacity:1}}@keyframes swal2-animate-i-mark{0%{transform:rotateZ(45deg);opacity:0}25%{transform:rotateZ(-25deg);opacity:.4}50%{transform:rotateZ(15deg);opacity:.8}75%{transform:rotateZ(-5deg);opacity:1}100%{transform:rotateX(0);opacity:1}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto!important}body.swal2-no-backdrop .swal2-container{background-color:transparent!important;pointer-events:none}body.swal2-no-backdrop .swal2-container .swal2-popup{pointer-events:all}body.swal2-no-backdrop .swal2-container .swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}@media print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll!important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:static!important}}body.swal2-toast-shown .swal2-container{box-sizing:border-box;width:360px;max-width:100%;background-color:transparent;pointer-events:none}body.swal2-toast-shown .swal2-container.swal2-top{top:0;right:auto;bottom:auto;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{top:0;right:0;bottom:auto;left:auto}body.swal2-toast-shown .swal2-container.swal2-top-left,body.swal2-toast-shown .swal2-container.swal2-top-start{top:0;right:auto;bottom:auto;left:0}body.swal2-toast-shown .swal2-container.swal2-center-left,body.swal2-toast-shown .swal2-container.swal2-center-start{top:50%;right:auto;bottom:auto;left:0;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{top:50%;right:auto;bottom:auto;left:50%;transform:translate(-50%,-50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{top:50%;right:0;bottom:auto;left:auto;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-left,body.swal2-toast-shown .swal2-container.swal2-bottom-start{top:auto;right:auto;bottom:0;left:0}body.swal2-toast-shown .swal2-container.swal2-bottom{top:auto;right:auto;bottom:0;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{top:auto;right:0;bottom:0;left:auto}
    </style> -->
        <!-- <script async="" src="https://static.hotjar.com/c/hotjar-3661670.js?sv=6"></script> -->
        <!-- <script type="text/javascript" async="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/718413471/?random=1719893465759&amp;cv=11&amp;fst=1719893465759&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be46q0z8812628614za201zb812628614&amp;gcd=13l3l3l3l1&amp;dma=0&amp;tag_exp=0&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Futas.me%2Ftangguh%2Fcheckout&amp;ref=https%3A%2F%2Futas.me%2Ftangguh%2Fcohort-analysis-calculator-tqlz0cpw&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Checkout&amp;npa=0&amp;pscdl=noapi&amp;auid=790756237.1719893461&amp;uaa=x86&amp;uab=64&amp;uafvl=Not%252FA)Brand%3B8.0.0.0%7CChromium%3B126.0.6478.62%7CGoogle%2520Chrome%3B126.0.6478.62&amp;uamb=0&amp;uam=&amp;uap=macOS&amp;uapv=10.15.7&amp;uaw=0&amp;fledge=1&amp;rfmt=3&amp;fmt=4">
        </script> -->

        <!-- <style>
            .visa-notification {
            z-index: 999999 !important;
            padding: 25px !important;
            border-radius: 10px !important;
            max-width: 400px !important;
            font-size: 30px !important;

            display: flex !important;
            align-items: center !important;
            gap: 15px !important;

            position: fixed !important;
            top: 20px ;
            left: 20px !important;
            opacity: 1;
            animation: visa-notification-animation .7s;
            background-color: #F9F9F9 !important;
            box-shadow: 1px 1px 10px 1px rgba(0, 0, 0, 0.1) !important;
            font-family: Arial, Helvetica, sans-serif !important
            }

            @keyframes visa-notification-animation {
                from {
                opacity: 0;
                top: -200px;
                }
            }

            .visa-notification .visa-icon {
            height: 60px !important;
            width: 60px !important;
            }


            .visa-notification .visa-description {
            font-weight: 600 !important;
            font-size: 17px !important;
            font-family: Arial, Helvetica, sans-serif !important
            }

            .visa-notification.visa-success {
            color: rgb(69, 148, 69) !important;
            }

            .visa-notification.visa-success .visa-icon path{
            fill: rgb(69, 148, 69) !important;
            }


            .visa-notification.visa-error {
            color: red !important;
            }

            .visa-notification.visa-error .visa-icon path{
            fill: red !important;
            }

            .visa-notification .visa-close-btn {
            background-color: transparent !important;
            outline: none !important;
            border: none !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 12px !important;
            height: 12px !important;
            cursor: pointer !important;
            position: absolute !important;
            top: 15px !important;
            right: 15px !important;
            }

            .visa-notification .visa-close-btn svg {
            width: 100% !important;
            height: 100% !important;
            }

        </style> -->


<!-- <script async="" src="https://script.hotjar.com/modules.e4b2dc39f985f11fb1e4.js" charset="utf-8"></script> -->

<!-- <meta http-equiv="origin-trial" content="A4oIpR6f5aUXFRMbL6t6qaMk4lrHWxcV3DcrzORsA9sEsIk1FBRMFzzhfMNLuUpokZH40FV8s7iiXtt/729v8A4AAACFeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiQXR0cmlidXRpb25SZXBvcnRpbmdDcm9zc0FwcFdlYiIsImV4cGlyeSI6MTcxNDUyMTU5OSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="> -->

<!-- <script attributionsrc="" type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion/718413471/?random=1719893472853&amp;cv=11&amp;fst=1719893472853&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be46q0z8812628614za201zb812628614&amp;gcd=13l3l3l3l1&amp;dma=0&amp;tag_exp=0&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Futas.me%2Ftangguh%2Fcheckout&amp;ref=https%3A%2F%2Futas.me%2Ftangguh%2Fcohort-analysis-calculator-tqlz0cpw&amp;label=RhysCLDguKcBEJ-9yNYC&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Checkout&amp;value=0&amp;bttype=purchase&amp;npa=0&amp;pscdl=noapi&amp;auid=790756237.1719893461&amp;uaa=x86&amp;uab=64&amp;uafvl=Not%252FA)Brand%3B8.0.0.0%7CChromium%3B126.0.6478.62%7CGoogle%2520Chrome%3B126.0.6478.62&amp;uamb=0&amp;uam=&amp;uap=macOS&amp;uapv=10.15.7&amp;uaw=0&amp;fledge=1&amp;capi=1&amp;rfmt=3&amp;fmt=4"></script> -->

</head>

<body class="page-checkout store is-feed">

    <!-- NAV BAR -->
    <nav id="header-page" class="navbar navbar-expand-lg d-block nav-down nav-top">
        <div class="container d-flex justify-content-center align-items-center">

            <a class="btn border-0 align-items-center d-flex position-absolute" style="left: 0" role="button" href="
                https://utas.me/tangguh" aria-label="Go Back">
                <i class="icon-arrow-prev"></i>
            </a>
            
            <h1 id="titlePage" class="page-title text-truncate text-center text-upper text-capitalize flex-1 h6 mb-0" style="line-height: 60px">Checkout</h1>

            <div class="dropdown position-absolute" style="right: 0">
                <button class="btn border-0 py-3 px-4" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Menu Button">
                    <i class="btn-icon icon-menu default-icon"></i>
                    <i class="btn-icon icon-close text-secondary"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-right border-0 theme-yellow shadow-lg mr-3 p-1" aria-labelledby="dropdownMenuButton" style="min-width: 230px;">
                    <button type="button" class="dropdown-item rounded-sm px-3 py-2 align-items-center d-flex" data-toggle="modal" data-target="#login-form">
                        <i class="icon-log-in icon-md theme-yellow is-text"></i>
                        <span class="ml-2">Login Customer</span>
                    </button>
                            
                    <div class="dropdown-divider mx-n3 my-1 opacity-50"></div>

                    <button type="button" class="dropdown-item rounded-sm px-3 py-2 align-items-center d-flex" id="show-contact-nav" data-target="#contact-us-modal" data-toggle="modal">
                        <i class="icon-at-sign icon-md text-secondary"></i>
                        <span class="ml-2">Terhubung dengan saya</span>
                    </button>
            
                    <div id="shows-subscribe-btn" style="">
                        <button id="subscribe-button" type="button" class="dropdown-item rounded-sm px-3 py-2 align-items-center d-flex">
                            <i class="icon-notifications icon-md text-secondary"></i>
                            <span class="ml-2">Berlangganan</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id="checkoutPage" class="container">
        
            <!-- hide when login -->
        <div class="card card-body border-0 shadow theme-yellow my-4 py-3 d-none">
            <div class="row align-items-center">
                <div class="col-9">
                    <div class="text-sm text-white pl-3">
                        Login untuk mendapatkan kemudahan berbelanja dan dapatkan promo spesial dari Tangguh Rifqi!
                    </div>
                </div>
                <div class="col-3 d-flex align-items-center justify-content-end">
                    <button class="btn text-white border-white" type="button" data-toggle="modal" data-target="#login-form">Login</button>
                </div>
            </div>
        </div>
        
            
        <div id="content">
            <form method="POST" class="checkout-form my-4 my-md-5">
                <div class="row">
                    <div class="col-md-6">

                        <!-- switch order purchase detail when product physical-->
                        <div class="d-flex flex-column">
                            <section id="purchase_details">
                                <!-- Add separator when product is physical -->
                                                            <!-- product box -->
                                <div class="mb-3 mb-md-4 d-flex align-items-center justify-content-between">
                                    <h4 class="h6 mb-0 text-uppercase">
                                        Detail pembelian
                                    </h4>

                                    <!-- <span role="button" class="btn-add-checkout btn btn-sm theme-yellow bg-white text-inherit py-0 d-inline-flex align-items-center">Edit</span>

                                    <button type="button" class="btn btn-remove-checkout text-danger" data-cart-key="35e42153806d9535a1626171e21db13b-default">
                                        <i class="icon-close mr-0"></i>
                                    </button> -->

                                </div>
                                
                                <div class="px-4 py-3 rounded-lg" style="background-color: #f1f5f9">
                                    <div class="product-box mx-0 " data-city-name="Jakarta Pusat (Kota)">
                                        <div class="product-item-group bg-transparent mb-0">
                                            <div class="group-body">
                                                <div class="product-item px-0" data-product-type="digital">
                                    
                                                <button role="button" class="btn-add-checkout btn btn-sm py-0 d-inline-flex align-items-center text-danger" style="border-color: #a4133c !important; position: absolute; right:0px; top: 0px">
                                                    <i class="icon-close mr-0"></i>
                                                </button>
                                                    
                                                    <div class="product-image">
                                                        <img src="https://image.utas.co/image/60640efd5a78e081b799063b0a8f406daffb7.jpg" alt="Cohort Analysis Calculator" class="img-fluid product-image">
                                                    </div>

                                                    <div class="product-detail position-relative">
                                                        <h4 class="product-title font-weight-normal">Cohort Analysis Calculator</h4>
                                                        <div class="product-detail-footer mt-2">
                                                            <span class="price-regular font-weight-bold product-price ml-auto" data-price="249000" data-cart-key="35e42153806d9535a1626171e21db13b-default">Rp 249,000</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <div class="buyer-data-group">
                                <!-- remove separator when product is not physical -->
                                <div class="py-2 separator">
                                    <hr class="my-4 opacity-50">
                                </div>
                                
                                <section id="buyer_data">
                                    <h4 class="h6 mb-3 mb-md-4  text-uppercase">Info kontak</h4>
                                            
                                    <div class="form-group">
                                        <label for="buyer_name">Nama lengkap</label>
                                        <input type="text" class="form-control" placeholder="Nama lengkap" name="name" id="buyer_name" value="" required="" disabled="disabled">
                                    </div>

                                    <div class="form-group">
                                        <label for="buyer_phone">Email</label>
                                        <input type="tel" class="form-control" placeholder="Email" name="email_show" minlength="75" maxlength="15" value="" id="buyer_phone" required="" disabled="disabled">
                                        <small class="text-secondary d-block form-text" style="display:none !important">
                                            Silahkan masukkan nomor whatsapp dengan kode area, misalkan kode area indonesia +62 contoh : 6281xxxxxxx 
                                        </small>
                                    </div>

                                    <div class="form-group mb-0 email-field">
                                        <label for="buyer_email">Alamat Lengkap</label>
                                        <textarea class="form-control" name="note" rows="2" placeholder="Tulis alamat di sini"></textarea>

                                        <!-- <input type="email" class="form-control buyer_email_validation" placeholder="Email Aktif" name="email" id="buyer_email" value="" required=""> -->
                                        <div class="alert alert-danger invalid-feedback my-2" style="font-size: 100%; display: none;"></div>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <div class="py-2 separator">
                            <hr class="my-4 opacity-50">
                        </div>
                        
                        <section id="payment_details" class="mb-4">
                            <div id="payment-options">
                                <!-- product box -->
                                <h4 class="h6 mb-3 mb-md-4  text-uppercase">Opsi pembayaran</h4>

                                <h6 class="font-weight-normal d-flex mb-3"> Akun virtual
                                    <span class="badge border border-secondary text-secondary ml-auto" id="fee_va"></span>
                                    <a href="#service_fee" class="text-decoration-none ml-2 d-none btn-help" data-toggle="modal" data-target="#service_fee">
                                        <i class="icon-help-circle"></i>
                                    </a>
                                </h6>

                                <div class="payment-options mb-4" style="border-width: 2px">
                                    <label class="py-3 px-4">
                                        <input type="radio" name="payment" value="bca" required="">
                                        <img class="mr-3" src="https://utas.me/assets/images/bank_bca.png" alt="bca" height="32">
                                        <span>Bank BCA</span>
                                        <i class="ml-auto icon-check icon-status"></i>
                                    </label>
                                    <label class="py-3 px-4">
                                        <input type="radio" name="payment" value="bni" required="">
                                        <img class="mr-3" src="https://utas.me/assets/images/bank_bni.png" alt="bni" height="32">
                                        <span>Bank BNI</span>
                                        <i class="ml-auto icon-check icon-status"></i>
                                    </label>
                                    <label class="py-3 px-4">
                                        <input type="radio" name="payment" value="bri" required="">
                                        <img class="mr-3" src="https://utas.me/assets/images/bank_bri.png" alt="bri" height="32">
                                        <span>Bank BRI</span>
                                        <i class="ml-auto icon-check icon-status"></i>
                                    </label>
                                    <label class="py-3 px-4">
                                        <input type="radio" name="payment" value="mandiri" required="">
                                        <img class="mr-3" src="https://utas.me/assets/images/bank_mandiri.png" alt="mandiri" height="32">
                                        <span>Bank MANDIRI</span>
                                        <i class="ml-auto icon-check icon-status"></i>
                                    </label>
                                    <label class="py-3 px-4">
                                        <input type="radio" name="payment" value="permata" required="">
                                        <img class="mr-3" src="https://utas.me/assets/images/bank_permata.png" alt="permata" height="32">
                                        <span>Bank PERMATA</span>
                                        <i class="ml-auto icon-check icon-status"></i>
                                    </label>
                                </div>
            
                            </div>
                            
                        </section>
                    </div>

                    <div class="col-md-6 pl-md-5">
                        <section id="pay_details" class="sticky-top " style="top: calc(60px + 1rem); z-index: 3;">
                            <div class="card card-body rounded-lg p-md-4 border-0">
                                <h4 class="h6 mb-3 mb-md-4  text-uppercase">Total</h4>
                                <div class="form-group mb-0" style="display:none">

                                    <div id="voucher_label" class="text-nowrap">
                                        <!-- if voucher applied: "Voucher: <strong>vouchercode</strong>" -->
                                        <label for="voucher_code" class="mb-0">Punya kode voucher?</label>
                                        <div class="ml-auto">
                                            <!-- if voucher applied: "Edit" -->
                                            <button class="btn theme-yellow bg-white px-3 invisible" type="button" data-toggle="collapse" data-target="#voucher_code" aria-expanded="true"><i class="icon icon-add mr-0"></i></button>
                                        </div>
                                    </div>

                                    <div class="input-group mt-1 mb-3 collapse show" id="voucher_code" style="">
                                        <input class="form-control voucher-code" placeholder="Masukkan kode voucher di sini">
                                        <div class="input-group-append">
                                            <button type="button" class="btn theme-yellow btn-apply-voucher">Apply</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="voucher">
                                </div>

                                <!-- Showing discount when voucher applied -->
                                <div class="voucher-discount" style="display:none;">
                                    <hr class="opacity-50">
                                    <div class="price-group ongkir-field">
                                        <label>Diskon</label>
                                        <strong class="price-label text-success">
                                            <span></span>
                                        </strong>
                                    </div>
                                </div>
                                
                                <hr class="opacity-50">

                                <div class="price-group">
                                    <label>Sub Total</label>
                                    <label class="price-label total">Rp 249.000</label>
                                </div>
                                <div class="price-group">
                                    <label>Discount</label>
                                    <label class="price-label">Rp 0</label>
                                </div>
                                <hr class="opacity-50">

                                <div class="price-group">
                                    <label>Total pembayaran</label>
                                    <strong class="price-label total">Rp 249.000</strong>
                                </div>

                                <hr class="opacity-50">

                                <div class="form-group mb-2">
                                    <div class="d-flex align-items-center">
                                        <label for="buyer_note" class="mb-0">Catatan untuk penjual</label>
                                        <div class="ml-auto">
                                            <button class="btn theme-yellow bg-white px-3 invisible" id="add_note" type="button" data-toggle="collapse" data-target="#buyer_note" aria-expanded="true"><i class="icon icon-add mr-0"></i></button>
                                        </div>
                                    </div>
                                    <div class="mt-1 collapse show" id="buyer_note" style="">
                                        <textarea class="form-control" name="note" rows="2" placeholder="Tulis catatan di sini"></textarea>
                                        <div class="alert bg-light-blue mt-2 d-flex align-items-start">
                                            <i class="icon-information-circle mr-2 mt-1"></i>
                                            <small>Masukkan informasi tambahan dalam untuk penjual</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group form-group-submit mt-4 mb-0">
                                    <button type="submit" class="btn d-flex align-items-center justify-content-center position-relative py-3 theme-yellow btn-block btn-submit">Selesaikan Pembayaran</button>
                                </div>

                                <input type="hidden" name="shipping_discount_minimum_percent_value">
                                <input type="submit" disabled="" style="display: none" aria-hidden="true">
                                
                            </div>
                        </section>
                    </div>

                </div>
            </form>
        </div>

    </div>

    <!-- CC form -->
    <div class="modal fade modal-compact modal-slide from-top" tabindex="-1" role="dialog" aria-hidden="true" id="cc-form">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i>
                    </button>

                    <div>
                        <iframe id="cc-iframe" frameborder="0" width="100%" height="400px"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/template" id="template-cart-item">
    <div class="product-item">
        <button type="button" class="btn btn-remove-checkout text-danger" data-cart-key="%cart_key%"><i class="icon-close mr-0"></i></button>
        <div class="product-image">
            <img src="%image%" class="img-fluid product-image">
        </div>
        <div class="product-detail">
            <h4 class="product-title">%name%</h4>
            <div class="product-detail-footer mt-2">
                <div class="input-group w-auto" %hide_btn% >
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-sm btn-light text-inherit btn-minus"><i class="icon-remove"></i></button>
                    </div>
                    <input type="number" data-cart-key="%cart_key%"
                        class="form-control form-control-sm product-quantity" value="%qty%" min="1" max="%qty_max%">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-sm btn-light text-inherit btn-plus"><i class="icon-add"></i></button>
                    </div>
                </div>
                <span class="price-regular product-price ml-2 text-nowrap" data-price="%priceval%">%price%</span>
            </div>
        </div>
    </div>
</script>

<!-- form product cart -->
<div id="product-cart" class="d-none product-checkout mx-n3" style="display: block;">
<!-- <div id="product-cart" class="d-none product-checkout mx-n3 d-block show" style="display: block;"> -->
<!-- <div id="product-cart" class="d-none product-checkout mx-n3 d-block show confirmation" style="display: block;"> -->

    <!-- product added notification -->
    <div class="cart-info" style="display: none;">
        <i class="icon-check-circle-filled mr-2"></i>
        <span class="text">#</span>
    </div>

    <!-- delete product confirmation -->
    <div class="confirmation-dialog bg-white">
    
        <div class="dialog-body py-3 px-3">
            <h5 class="dialog-title mb-1">Hapus item?</h5>
            <p class="mb-0 text-sm opacity-75">Item ini akan dihapus dari keranjang Anda</p>
        </div>
        <div class="dialog-footer">
            <button type="button" class="btn btn-light btn-cancel text-inherit">Batal</button>
            <!-- <button class="btn bg-light cancel flex-1 w-50 rounded-0 text-inherit" type="button">Batal</button> -->

            <button type="button" class="btn btn-danger btn-confirm-delete">Hapus</button>
        </div>
    </div>

    <!-- end delete product confirmation -->
    <div class="container container-mobile" style="max-width: 420px">
        <div class="product-cart-body">

            <div class="product-bar" >
                <div id="selected-product" class="mx-0">

                    <div class="scroll-area product-box bg-white user-cart">
                        <div class="">
                            <div style="padding:25px; text-align:center">
                                <h5 class="dialog-title mb-1">Hapus item?</h5>
                                <p class="mb-0 text-sm opacity-75">Item ini akan dihapus dari keranjang Anda</p>
                            </div>
                            
                            <!-- <button type="button" class="btn btn-remove-checkout text-danger" data-cart-key="35e42153806d9535a1626171e21db13b-default">
                                <i class="icon-close mr-0"></i>
                            </button> -->

                            <!-- <div class="product-image">
                                <img src="https://image.utas.co/image/60640efd5a78e081b799063b0a8f406daffb7.jpg" class="img-fluid product-image">
                            </div> -->

                            <!-- <div class="product-detail">

                                <h4 class="product-title">Cohort Analysis Calculator</h4>
                                <div class="product-detail-footer mt-2">
                                    <div class="input-group w-auto" style="display:none;">
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-sm btn-light text-inherit btn-minus">
                                                <i class="icon-remove"></i>
                                            </button>
                                        </div>
                                        <input type="number" data-cart-key="35e42153806d9535a1626171e21db13b-default" class="form-control form-control-sm product-quantity" value="1" min="1" max="1">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-sm btn-light text-inherit btn-plus"><i class="icon-add"></i></button>
                                        </div>
                                    </div>
                                    <span class="price-regular product-price ml-2 text-nowrap" data-price="249000">Rp 249.000</span>
                                </div>

                            </div> -->

                        </div>
                    </div>

                </div>
                
                <div class="product-bar-footer mx-0" style="display:none">
                    <button class="btn btn-expand d-none" type="button" aria-label="Checkout details">
                        <i class="icon-chevron-up"></i>
                    </button>
                    <div class="selected-info footer-item">
                        <i class="icon-shopping-cart mr-2 text-warning"></i>
                        <small>Keranjang</small>
                        <strong class="ml-1">(<span id="total-product-selected">1</span>)</strong>
                    </div>
                    <div class="total-price footer-item">
                        <small class="mr-1">Total</small>
                        <strong class="total-cart-price">Rp 249.000</strong>
                    </div>
                </div>

            </div>
            
            <!-- <div class="product-bar">
            
                <div class="dialog-body py-3 px-3">
                    <h5 class="dialog-title mb-1">Hapus item?</h5>
                    <p class="mb-0 text-sm opacity-75">Item ini akan dihapus dari keranjang Anda</p>
                </div>
            </div> -->

            <div class="d-flex rounded-bottom overflow-hidden">
                <button class="btn bg-light cancel flex-1 w-50 rounded-0 text-inherit" type="button">Batal</button>
                <button class="btn btn-danger cancel flex-1 w-50 rounded-0" type="button">Hapus</button>
                <!-- <a href="https://utas.me/tangguh/checkout" class="btn theme-yellow btn-action shadow-lg rounded-0 flex-1 w-50 mx-0 text-nowrap" id="btn-checkout"> Perbarui<i class="icon-arrow-forward-circle icon opacity-50 ml-2"></i></a> -->
                <!-- <a href="https://utas.me/tangguh/checkout" class="btn theme-yellow btn-action shadow-lg rounded-0 flex-1 w-50 mx-0 text-nowrap" id="btn-checkout"> Perbarui<i class="icon-arrow-forward-circle icon opacity-50 ml-2"></i></a> -->
                <!-- <button type="button" class="btn btn-danger btn-confirm-delete" data-cart-key="35e42153806d9535a1626171e21db13b-default">Hapus</button> -->
            </div>

        </div>
    </div>

    <!-- <div class="container container-mobile">
        <div class="product-cart-body">
            <div class="product-bar">
                <div id="selected-product" class="mx-0">
                    <div class="scroll-area product-box bg-white user-cart">
                        <div class="product-item">
                            <button type="button" class="btn btn-remove-checkout text-danger" data-cart-key="35e42153806d9535a1626171e21db13b-default">
                                <i class="icon-close mr-0"></i>
                            </button>
                            <div class="product-image">
                                <img src="https://image.utas.co/image/60640efd5a78e081b799063b0a8f406daffb7.jpg" class="img-fluid product-image">
                            </div>
                            <div class="product-detail">
                                <h4 class="product-title">Cohort Analysis Calculator</h4>
                                <div class="product-detail-footer mt-2">
                                    <div class="input-group w-auto" style="display:none;">
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-sm btn-light text-inherit btn-minus">
                                                <i class="icon-remove"></i>
                                            </button>
                                        </div>
                                        <input type="number" data-cart-key="35e42153806d9535a1626171e21db13b-default" class="form-control form-control-sm product-quantity" value="1" min="1" max="1">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-sm btn-light text-inherit btn-plus"><i class="icon-add"></i></button>
                                        </div>
                                    </div>
                                    <span class="price-regular product-price ml-2 text-nowrap" data-price="249000">Rp 249.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-bar-footer mx-0">
                    <button class="btn btn-expand d-none" type="button" aria-label="Checkout details">
                        <i class="icon-chevron-up"></i>
                    </button>
                    <div class="selected-info footer-item">
                        <i class="icon-shopping-cart mr-2 text-warning"></i>
                        <small>Keranjang</small>
                        <strong class="ml-1">(<span id="total-product-selected">1</span>)</strong>
                    </div>
                    <div class="total-price footer-item">
                        <small class="mr-1">Total</small>
                        <strong class="total-cart-price">Rp 249.000</strong>
                    </div>
                </div>
            </div>
            <div class="d-flex rounded-bottom overflow-hidden">
                <button class="btn bg-light cancel flex-1 w-50 rounded-0 text-inherit" type="button">Batal</button>
                <a href="https://utas.me/tangguh/checkout" class="btn theme-yellow btn-action shadow-lg rounded-0 flex-1 w-50 mx-0 text-nowrap" id="btn-checkout"> Perbarui<i class="icon-arrow-forward-circle icon opacity-50 ml-2"></i></a>
            </div>
        </div>
    </div> -->
</div>

<div class="product-cart-overlay product-cart-checkout-overlay"></div>

<!-- Service Fee  -->
<div class="modal fade modal-compact modal-slide from-top" tabindex="-1" role="dialog" aria-hidden="true" id="service_fee">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
                <h4 class="h5 form-title text-center">BIAYA Layanan</h4>
                <p class="opacity-75">Biaya Layanan adalah biaya yang dibebankan kepada Pembeli untuk setiap transaksi. Biaya ini diterapkan untuk tujuan pemeliharaan sistem dan peningkatan layanan dalam transaksi melalui <strong>Utas.Co</strong>.</p>
                <button type="button" class="btn btn-block theme-yellow" data-dismiss="modal">Mengerti</button>
            </div>
        </div>
    </div>
</div>

<!-- Login form -->
    <!-- login form -->
<div class="modal fade modal-compact modal-slide from-top" tabindex="-1" role="dialog" aria-hidden="true" id="login-form">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i>
                </button>

                <!-- login area -->
                <div id="login-area" class="collapse show">
                    <h6 class="text-center text-uppercase text-secondary mb-3"> Login Customer </h6>
                    <form action="#" id="login-email">
                        <a href="https://utas.me/tangguh/social-login?provider=Facebook" class="btn btn-light bg-white btn-block font-weight-bold d-flex align-items-center justify-content-center text-inherit position-relative">
                            <i class="icon-logo-facebook text-brand-facebook mr-2 h4 mb-0 position-absolute" style="left: 1rem;"></i>
                            Login dengan Facebook                        </a>
                        <!-- <div class="form-group mb-0 col-6">
                            <a href="https://utas.me/tangguh/social-login?provider=Google" class="btn btn-google btn-block d-flex align-items-center justify-content-center"><i class="icon-logo-google mr-2"></i>Google</a>
                        </div> -->
                        <div class="separator-or">
                            <div><span class="bg-white">Atau</span></div>
                            <hr>
                        </div>
                        <div class="form-label-group mb-2 email-field">
                            <input id="user_email" type="email" name="email" class="form-control buyer_email_validation" placeholder="Masukkan alamat email" required="">
                            <label for="user_email"><i class="icon-mail mr-2"></i>Alamat Email</label>
                            <div class="alert alert-danger invalid-feedback my-2" style="font-size: 100%; display: none;"></div>
                        </div>
                        <div class="form-group btn-verify">
                            <button class="btn theme-yellow btn-block btn-process-login font-weight-bold btn-icon" type="submit"><span class="d-block py-1">Login Customer</span></button>
                        </div>
                                                
                                            </form>
                    <form action="https://utas.me/tangguh/verify" id="login-verify" class="collapse">
                        <div class="alert bg-light-yellow my-3 text-center">
                            Cek email dan WhatsApp Anda, kode login telah dikirimkan.                            <div class="d-flex align-items-center justify-content-center mt-2" style="gap: 0.5rem">
                                <i class="icon icon-md icon-mail-delivered"></i>
                                <strong id="mailto"></strong>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="otp" class="sr-only">Masukkan kode login disini</label>
                            <input id="otp" type="number" name="otp" class="form-control" placeholder="Masukkan kode login">
                            <input type="hidden" name="hash" class="login-hash">
                            <input type="hidden" name="checkout" class="checkout" value="0">
                            <input type="hidden" name="member" class="member" value="0">
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn theme-yellow btn-block btn-login font-weight-bold"><span class="d-block py-1">Login Customer</span></button>
                        </div>
                    </form>
                </div>

                <!-- register area -->
                <div id="register-area" class="collapse">
                    <div id="register-form">
                        <h4 class="label-title form-title text-center">DAFTAR CUSTOMER</h4>
                        <div class="alert bg-light-green">
                            <h6>Keuntungan yang Anda dapatkan:</h6>
                            <small class="mb-2 d-block"><i class="icon-check-circle-filled mr-2 text-success"></i>Alamat Anda dapat disimpan</small>
                            <small class="mb-2 d-block"><i class="icon-check-circle-filled mr-2 text-success"></i>Belanja jadi lebih mudah dan cepat</small>
                            <small class="mb-2 d-block"><i class="icon-check-circle-filled mr-2 text-success"></i>Dapatkan lebih banyak diskon</small>
                            <small class="d-block"><i class="icon-check-circle-filled mr-2 text-success"></i>Pesanan Anda diprioritaskan</small>
                        </div>
                        <form action="#" id="register-email">
                            <div class="form-label-group mb-2">
                                <input id="register_email" type="email" name="email" class="form-control" placeholder="Masukkan alamat email" required="">
                                <label for="register_email"><i class="icon-mail mr-2"></i>Alamat Email</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn theme-yellow btn-block btn-register font-weight-bold"><span class="d-block py-1">Daftar Sekarang</span></button>
                            </div>
                        </form>
                        <div class="d-flex align-items-center justify-content-center text-secondary text-sm">Sudah jadi customer?<button class="btn btn-sm btn-link text-sm font-weight-bold" type="button" id="go-login"><u>Login di sini</u></button></div>
                    </div>
                    <form action="https://utas.me/tangguh/verify" id="activation-verify" class="collapse">
                        <h4 class="label-title form-title text-center">VERIFIKASI AKUN</h4>
                        <div class="alert alert-warning my-3 text-center">
                            Harap masukkan kode verifikasi yang dikirim ke email <strong id="mailto"></strong>
                        </div>
                        <div class="form-group mb-2">
                            <label for="activation_key" class="sr-only">Masukkan kode aktivasi</label>
                            <input id="activation_key" type="text" name="activation_key" class="form-control" placeholder="Masukkan kode aktivasi" required="">
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn theme-yellow btn-block btn-login font-weight-bold"><span class="d-block py-1">Verifikasi Sekarang</span></button>
                        </div>
                    </form>                    
                </div>

            </div>
        </div>
    </div>
    <div class="form-dialog">
        <div class="form-dialog-item bg-white registration-dialog">
            <h3>Anda belum terdaftar</h3>
            <p class="text-secondary"><small>Anda ingin daftar sekarang?</small></p>
            <div class="button-group">
                <button class="btn btn-link btn-cancel">Batal</button>
                <button class="btn theme-yellow font-weight-bold go-register" type="button">Ya</button>
            </div>
        </div>
        <div class="form-dialog-item bg-white activation-dialog d-none">
            <h3>Pendaftaran berhasil</h3>
            <p class="text-secondary"><small>Silakan cek email Anda untuk menerima link aktivasi pendaftaran</small></p>
            <div class="button-group">
                <button class="btn theme-yellow font-weight-bold btn-cancel">Kembali</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    window.STORE = 'tangguh';
    window.SHIP_COST = '0';
        window.CART_TOTAL = '249000';
        window.CART_ORDER_BUMP = '';
    window.CART_PAYMENT = '';
    window.SHIP_DISCOUNT = '0';
    window.SHIP_DISCOUNT_TYPE = '';
    window.PAYMENT_FEE = {"va":9420,"ro":10530,"ewallet":9125,"qr":6914,"cod":0};
    window.SERVICE_FEE = '';
    window.WRITE_DISTRICT = 'Tulis Kecamatan Anda';
</script>

    <!-- Footer Copyright -->
        
<script type="text/javascript">
    window.BASE_URL = "https://utas.me/";
    window.FRONTEND_HOST = "https://utas.me/";
    window.FB_PIXEL = "715332145559105";
    window.GOOGLE_ID = "UA-145358143-1";
    window.PUSH_PUBLIC_KEY = "BMBlr6YznhYMX3NgcWIDRxZXs0sh7tCv7_YCsWcww0ZCv9WGg-tRCXfMEHTiBPCksSqeve1twlbmVAZFv7GSuj0";
    window.SAFARI_PUSH_ID = "";
    window.STORE = "tangguh";
    window.CURRENCY = "IDR"
    window.ENABLE_WATERMARK = "1";
    window.APP_BASE_URL = 'https://app.utas.co/';
    window.PRODUCT_CTA_OPTION = "direct_checkout";
</script>
<script src="https://utas.me/assets/3rd-party/js/sweetalert2.all.min.js"></script>
<script src="https://utas.me/assets/3rd-party/js/jquery.min.js"></script>
<!-- <script src="/js/js10.js"></script> -->
    
<!-- <script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","543196502885221");fbq("track","PageView");</script> -->

<!-- <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=543196502885221&amp;ev=PageView&amp;noscript=1"></noscript> -->

<!-- <script type="text/javascript" id="">fbq("track","ViewContent");</script> -->


<!-- <script type="text/javascript" id="">(function(a,b,e,d,c){a[c]=a[c]||function(){(a[c].v=a[c].v||[]).push(arguments)};a._visaSettings||(a._visaSettings={});a._visaSettings[d]={v:"1.0",s:d,a:"1",t:c};var f=b.getElementsByTagName("body")[0];b=b.createElement("script");b.defer=1;b.async=1;b.src=e+"?s\x3d"+d;f.appendChild(b)})(window,document,"//app-worker.visitor-analytics.io/main.js","5c2801dd-3dae-11ea-b589-901b0edac50a","va");</script> -->

<!-- <script defer="" async="" src="//app-worker.visitor-analytics.io/main.js?s=5c2801dd-3dae-11ea-b589-901b0edac50a"></script> -->

<!-- <script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","715332145559105");fbq("track","PageView");</script> -->

<!-- <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=715332145559105&amp;ev=PageView&amp;noscript=1">
</noscript> -->

<!-- <script type="text/javascript" id="">fbq("track","ViewContent");</script> -->

<!-- <script type="text/javascript" id="">(function(a,e,b,f,g,c,d){a[b]=a[b]||function(){(a[b].q=a[b].q||[]).push(arguments)};c=e.createElement(f);c.async=1;c.src="https://www.clarity.ms/tag/"+g;d=e.getElementsByTagName(f)[0];d.parentNode.insertBefore(c,d)})(window,document,"clarity","script","3v77z9uu0n");</script> -->
<!-- <script type="text/javascript" id="">var _bsq=_bsq||[];_bsq.push(["init","364"]);_bsq.push(["track","PageView"]);(function(b,a,c,d){b=a.getElementsByTagName(c)[0];a.getElementById(d)||(a=a.createElement(c),a.id=d,a.src="https://cdn.birdsend.co/assets/static/js/pixel/main.js",b.parentNode.insertBefore(a,b))})(window,document,"script","birdsend-pixel-js");</script> -->


<!-- <script src="https://utas.me/assets/3rd-party/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="https://utas.me/assets/3rd-party/js/slick.min.js"></script> -->
<!-- <script src="https://utas.me/assets/3rd-party/js/select2.min.js"></script> -->
<script src="https://utas.me/assets/js/utility.js?v=2023.09.30"></script>
<script src="https://utas.me/assets/js/app.js?v=2024.01.22" type="module"></script>
<!-- <script src="https://utas.me/assets/js/push.js?v=2024.05.08"></script> -->
    
    
<!-- <script type="text/javascript">
    function clearSession() {
        $.ajax("https://app.utas.co/removeflash")
            .done((data) => data ? console.log("Clear session") : console.log("Unable clear session"))
            .fail(() => console.log("Unable clear session"));
    }
    $(() => {
        
        window._success =
            "";
        window._error =
            "";

        if (window._success.length > 0) {
            swal.fire({
                icon: "success",
                title: "Success",
                text: window._success,
            });
            window._success = [];
            //clearSession();
        }

        if (window._error.length > 0) {
            swal.fire({
                icon: "error",
                title: "Oops...",
                text: window._error,
            });
            window._error = [];
            //clearSession();
        }

        if (document.location.hash === "#storenotavailable") {
            setTimeout(function () {
                window.location = "https://member.utas.co/";
            }, 4000);
        }
    });
</script> -->

<!-- Hotjar Tracking Code for Utas Profile -->
<!-- <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3661670,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script> -->

<!-- <iframe allow="join-ad-interest-group" data-tagging-id="AW-718413471" data-load-time="1719893465761" height="0" width="0" src="https://td.doubleclick.net/td/rul/718413471?random=1719893465759&amp;cv=11&amp;fst=1719893465759&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be46q0z8812628614za201zb812628614&amp;gcd=13l3l3l3l1&amp;dma=0&amp;tag_exp=0&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Futas.me%2Ftangguh%2Fcheckout&amp;ref=https%3A%2F%2Futas.me%2Ftangguh%2Fcohort-analysis-calculator-tqlz0cpw&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Checkout&amp;npa=0&amp;pscdl=noapi&amp;auid=790756237.1719893461&amp;uaa=x86&amp;uab=64&amp;uafvl=Not%252FA)Brand%3B8.0.0.0%7CChromium%3B126.0.6478.62%7CGoogle%2520Chrome%3B126.0.6478.62&amp;uamb=0&amp;uam=&amp;uap=macOS&amp;uapv=10.15.7&amp;uaw=0&amp;fledge=1" style="display: none; visibility: hidden;"></iframe> -->
  

<!-- <iframe id="_hjSafeContext_86706141" title="_hjSafeContext" tabindex="-1" aria-hidden="true" src="about:blank" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe><iframe allow="join-ad-interest-group" data-tagging-id="AW-718413471/RhysCLDguKcBEJ-9yNYC" data-load-time="1719893472855" height="0" width="0" src="https://td.doubleclick.net/td/rul/718413471?random=1719893472853&amp;cv=11&amp;fst=1719893472853&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be46q0z8812628614za201zb812628614&amp;gcd=13l3l3l3l1&amp;dma=0&amp;tag_exp=0&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Futas.me%2Ftangguh%2Fcheckout&amp;ref=https%3A%2F%2Futas.me%2Ftangguh%2Fcohort-analysis-calculator-tqlz0cpw&amp;label=RhysCLDguKcBEJ-9yNYC&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Checkout&amp;value=0&amp;bttype=purchase&amp;npa=0&amp;pscdl=noapi&amp;auid=790756237.1719893461&amp;uaa=x86&amp;uab=64&amp;uafvl=Not%252FA)Brand%3B8.0.0.0%7CChromium%3B126.0.6478.62%7CGoogle%2520Chrome%3B126.0.6478.62&amp;uamb=0&amp;uam=&amp;uap=macOS&amp;uapv=10.15.7&amp;uaw=0&amp;fledge=1&amp;capi=1&amp;ct_cookie_present=0" style="display: none; visibility: hidden;"></iframe> -->

<!-- <script src="https://cdn.birdsend.co/assets/static/js/form-loader.js?ver=7eb7c5f0b996ec37d6771713944849" type="text/javascript" id="bs-form-loader"></script> -->

</body>
</html>