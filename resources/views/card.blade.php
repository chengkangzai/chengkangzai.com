<!DOCTYPE html>
<html lang="en" style="background-color: rgb(51, 144, 180);">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="Ching  Cheng Kang's Digital Business Card">
    <meta property="twitter:title" content="Ching  Cheng Kang's Digital Business Card">
    <script>
        "http" == window.location.href.substr(0, 4) && "/" != window.location.href.slice(-1) && window.location.replace(window.location.href + "/");
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <title>Ching Cheng Kang's Digital Business Card</title>
    <style>
        #body {
            font-family: sans-serif;
        }

        input[type='range']::-moz-range-track {
            background: none;
        }

        input[type='range']::-moz-range-thumb {
            -moz-appearance: none;
            width: 1.5rem;
            height: 1.5rem;
            border-radius: 100%;
            border: none;
            background: #123962;
            z-index: 3;
            cursor: pointer;
        }

        input[type='range']::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 1.5rem;
            height: 1.5rem;
            border-radius: 100%;
            border: none;
            background: #123962;
            z-index: 3;
            cursor: pointer;
        }

        .closeColor {
            filter: invert(1)
        }

        .topAction {
        }

        .iconColor {
            color: #eee;
        }

        .cardColor {
            color: #222 !important
        }

        .textColor {
            color: #222 !important
        }

        .seekbarColor {
            background: #12396280 !important
        }
    </style> <!---->
    <style>
        #body {
            font-family: "Roboto", sans-serif
        }
    </style>
    <style>body {
            margin: 0 auto;
            width: 100%;
            padding: 0;
            max-width: 30rem;
            color: #eee;
            position: relative
        }

        p {
            line-height: 1.5;
            margin: 0
        }

        h2, h3 {
            margin: 0
        }

        .icon {
            width: 1.5rem;
            height: 1.5rem
        }

        a {
            text-decoration: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        #modal {
            display: flex;
            flex-direction: column;
            position: absolute;
            z-index: 1;
            width: 100%;
            bottom: 0;
            transition: top .2s ease-out, opacity .1s ease-out;
            transform: translateZ(0)
        }

        #close {
            align-self: end;
            padding: 1rem;
            cursor: pointer;
            line-height: 0
        }

        #keyView, #copyView, #qrView {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 1rem;
            text-align: center
        }

        #keyView p, #copyView p, #qrView p {
            margin: 2rem;
            text-align: center
        }

        #copyURL, #dlKey {
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: center;
            border-radius: 5rem;
            padding: 1rem 1.5rem;
            border: none;
            outline: none;
            cursor: pointer;
            box-sizing: border-box
        }

        #copyURL span, #dlKey span {
            margin-left: .5rem
        }

        #qrView h3 {
            margin: 2rem 2rem 0
        }

        #qrView p {
            margin: .5rem 2rem 0
        }

        #qr {
            margin: 2rem;
            padding: 2rem;
            background: #fff;
            border-radius: .5rem
        }

        header {
            display: flex;
            justify-content: flex-start;
            flex-direction: column
        }

        .headerImgC {
            display: grid;
            grid-template-columns:auto;
            grid-template-rows:auto;
            overflow: hidden
        }

        #cover {
            grid-column: 1;
            grid-row: 1;
            width: 100%;
            height: 20rem;
            -o-object-position: top center;
            object-position: top center;
            -o-object-fit: cover;
            object-fit: cover
        }

        #logo {
            max-height: 6rem;
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            grid-column: 1;
            grid-row: 1;
            align-self: center;
            justify-self: center
        }

        #topActions {
            flex-direction: row-reverse;
            justify-content: space-between;
            align-items: flex-start
        }

        #topActions > div {
            display: flex
        }

        #topActions a {
            padding: 1rem;
            cursor: pointer;
            line-height: 0
        }

        main {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center
        }

        #profilePhoto {
            width: 10rem;
            height: 10rem;
            border-radius: 100%;
            box-sizing: content-box;
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            margin-top: -6rem
        }

        #info {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 1rem;
            line-height: 1.25;
            word-break: break-word
        }

        .name {
            font-weight: bold;
            font-size: 1.5rem;
            margin: 0
        }

        .pronouns {
            display: block;
            font-size: .9rem;
            opacity: .8;
            font-weight: normal;
            margin: 0 0 .5rem
        }

        .bizname {
            font-size: .9rem;
            margin: .5rem 0 0;
            opacity: .8
        }

        .bizaddr {
            font-size: .8rem;
            opacity: .6
        }

        .sub, .textC {
            font-size: 1rem;
            white-space: pre-line;
            line-height: 1.5
        }

        .sub {
            font-size: .9rem;
            margin: .5rem 0 0;
            opacity: .8
        }

        .textC {
            margin: 1rem
        }

        #cta {
            display: flex;
            align-items: center;
            border-radius: 5rem;
            margin-top: 2rem;
            padding: 1rem 1.5rem;
            cursor: pointer;
            line-height: 0;
            width: 100%;
            justify-content: center;
            box-sizing: border-box
        }

        #cta .icon {
            margin-right: .5rem
        }

        #cta p {
            margin: 0
        }

        .actions {
            width: 100%;
            margin-top: 2rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: center
        }

        .actionsC {
            width: 33.33%
        }

        .actionBtn {
            padding: .5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center
        }

        .actionBtn a {
            border-radius: 100%;
            padding: 1rem;
            line-height: 0
        }

        .actionBtn p {
            margin: .5rem 0 0;
            font-size: .9rem
        }

        .secBtn {
            padding: 1rem
        }

        .featured {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 2rem 0 0;
            width: 100%
        }

        .section {
            font-weight: bold;
            text-align: center;
            font-size: 1.3rem;
            padding: 1rem 0
        }

        .media {
            overflow: hidden;
            border-radius: 1rem;
            margin-top: 1rem
        }

        .media img {
            display: block;
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 100%
        }

        .embedded {
            position: relative;
            padding-top: 100%
        }

        .embedded iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .music, .video {
            width: 100%
        }

        .mediaC {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center
        }

        video {
            width: 100%
        }

        .controls {
            padding: 1rem;
            font-size: .9rem;
            text-align: center;
            width: 100%;
            box-sizing: border-box
        }

        .pCtrl, .docDl {
            display: none;
            flex-direction: column;
            align-items: center;
            width: 100%
        }

        .docDl {
            display: flex
        }

        .seekBar {
            width: 100%;
            height: .5rem;
            margin: 1.5rem 0 .5rem;
            border-radius: 5rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            cursor: pointer
        }

        .playPause, .dlBtn {
            margin: 1rem 0 .5rem;
            padding: 1rem;
            border-radius: 5rem;
            line-height: 0;
            cursor: pointer
        }

        .pause {
            display: none
        }

        .title {
            font-size: 1rem;
            font-weight: bold;
            margin: 0
        }

        .prodInfo .sub {
            margin: -1rem 0 0
        }

        .price {
            margin: 1rem 0 0;
            font-size: 1rem;
            font-weight: bold
        }

        .label {
            display: inline-block;
            font-size: 1rem;
            margin: 1rem 0 .5rem;
            border-radius: 5rem;
            letter-spacing: 1px;
            padding: 1rem 1.5rem
        }

        .label p {
            margin: 0
        }

        footer {
            padding: 4rem 1rem 2rem;
            font-size: .9rem;
            text-align: center
        }

        footer a {
            text-decoration: underline;
            color: inherit
        }</style>
</head>
<body id="body">
<div id="modal" style="background-color: rgb(221, 221, 221); visibility: hidden; top: 2rem; opacity: 0;"><a id="close"
                                                                                                            class="closeColor">
        <div class="icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                 style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2"><path
                    style="fill:none" d="M0 0h24v24H0z"></path>
                <path d="M18 6 6 18M6 6l12 12" style="fill:none;fill-rule:nonzero;stroke:#fff;stroke-width:2px"></path></svg>
        </div>
    </a>
    <div id="keyView"><p class="textColor">
            Use my public key to send me encrypted messages
        </p> <a download="" target="_blank" id="dlKey" rel="noreferrer" tabindex="-1"
                style="background-color: rgb(18, 57, 98);" href="{{asset('.chingchengkang.vcf')}}">
            <div class="icon iconColor">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                     style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2"><path
                        style="fill:none" d="M0 0h24v24H0z"></path>
                    <path d="M21 15v4c0 1.097-.903 2-2 2H5c-1.097 0-2-.903-2-2v-4m4-5 5 5 5-5m-5 5V3"
                          style="fill:none;fill-rule:nonzero;stroke:#fff;stroke-width:2px"></path></svg>
            </div>
            <span class="iconColor">Download Key</span></a></div>
    <div id="copyView"><p class="textColor">
            Copy and send the URL to share my Business Card
        </p>
        <button id="copyURL" style="background-color: rgb(18, 57, 98);">
            <div class="icon iconColor">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                     style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2"><path
                        style="fill:none" d="M0 0h24v24H0z"></path>
                    <path d="M22 11a2 2 0 0 0-2-2h-9a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-9Z"
                          style="fill:none;stroke:#fff;stroke-width:2px"></path>
                    <path d="M5 15H4c-1.097 0-2-.903-2-2V4c0-1.097.903-2 2-2h9c1.097 0 2 .903 2 2v1"
                          style="fill:none;fill-rule:nonzero;stroke:#fff;stroke-width:2px"></path></svg>
            </div>
            <span class="iconColor">Copy URL</span></button>
    </div>
    <div id="qrView" class="textColor">
        <div id="qr"></div>
        <h3>Scan the QR Code</h3>
        <p>to view my Business Card on another device</p></div>
</div>
<header>
    <div id="topActions" style="display: none;">
        <div><a id="share">
                <div class="icon topAction">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                         style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-miterlimit:2"><g>
                            <path style="fill:none" d="M0 0h24v24H0z"></path>
                            <clipPath id="a">
                                <path d="M0 0h24v24H0z"></path>
                            </clipPath>
                            <g clip-path="url(#a)">
                                <circle cx="17" cy="5" r="3" style="fill:none;stroke:#fff;stroke-width:2px"></circle>
                                <circle cx="5" cy="12" r="3" style="fill:none;stroke:#fff;stroke-width:2px"></circle>
                                <circle cx="17" cy="19" r="3" style="fill:none;stroke:#fff;stroke-width:2px"></circle>
                                <path d="m7.59 13.51 6.83 3.98m-.01-10.98-6.82 3.98"
                                      style="fill:none;stroke:#fff;stroke-width:2px"></path>
                            </g>
                        </g></svg>
                </div>
            </a> <a id="showQR">
                <div class="icon topAction">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                         style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2"><path
                            style="fill:none" d="M0 0h24v24H0z"></path>
                        <path d="M4 4h4v4H4V4Zm0 12h4v4H4v-4ZM16 4h4v4h-4V4Z"
                              style="fill:none;stroke:#fff;stroke-width:2px"></path>
                        <path d="M12 4v14c0 1.097.903 2 2 2h4c1.097 0 2-.903 2-2v-4c0-1.097-.903-2-2-2H4"
                              style="fill:none;stroke:#fff;stroke-width:2px;stroke-linejoin:miter"></path>
                        <path style="fill:#fff" d="M15 15h2v2h-2z"></path></svg>
                </div>
            </a></div> <!----></div>
    <div class="headerImgC"><!----> <img id="logo" src="{{asset('src/bighead.jpeg')}}" alt="Logo" style="margin: 3rem 0px;"></div>
</header>
<main style="background-color: rgb(221, 221, 221); margin-top: 0px;"><!---->
    <div id="info" class="textColor"><p class="name">
            Ching Cheng Kang
        </p> <!----> <p class="jobtitle">
            Chief Technology Officer
        </p>
        <p class="bizname">
            Pixalink
        </p> <!----></div> <!----> <a id="cta" rel="noreferrer" download="" target="_blank" aria-label="Save Contact"
                                      style="background-color: rgb(18, 57, 98);" href="{{asset('chingchengkang.vcf')}}">
        <div class="icon iconColor">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                 style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2"><path
                    style="fill:none" d="M0 0h24v24H0z"></path>
                <circle cx="8.5" cy="7" r="4" style="fill:none;stroke:#fff;stroke-width:2.29px"
                        transform="matrix(.875 0 0 .875 4.563 -.625)"></circle>
                <path d="M86 181c0-3.863 3.137-7 7-7s7 3.137 7 7" style="fill:none;stroke:#fff;stroke-width:2px"
                      transform="translate(-81 -163)"></path>
                <path d="M104 168v6m3-3-3 3-3-3" style="fill:none;fill-rule:nonzero;stroke:#fff;stroke-width:2px"
                      transform="translate(-92 -152)"></path></svg>
        </div>
        <p class="iconColor">Save Contact</p></a>
    <div class="actions">
        <div class="actionsC">
            <div class="actionBtn"><a href="tel:+60127067086" target="_blank" rel="noopener noreferrer"
                                      aria-label="Mobile" style="background-color: rgb(18, 57, 98);">
                    <div class="icon iconColor">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                             style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2"><path
                                style="fill:none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M11.5 22a.952.952 0 0 1-1.052.945c-4.358-.544-7.851-4.338-8.379-8.39a.938.938 0 0 1 .936-1.046c.399-.009.847-.009 1.202-.009.388 0 .738.237.882.597l.478 1.196a.95.95 0 0 1-.21 1.025l-.107.107a.951.951 0 0 0-.181 1.091c.495.825 1.59 1.92 2.425 2.396a.927.927 0 0 0 1.066-.177c.05-.02.086-.056.122-.092a.95.95 0 0 1 1.025-.21l1.196.478c.36.144.597.494.597.882V22Z"
                                style="fill:none;stroke:#fff;stroke-width:.95px"
                                transform="translate(-2.21 -26.421) scale(2.10526)"></path></svg>
                    </div>
                </a>
                <p class="textColor">
                    Mobile
                </p></div>
        </div>
        <div class="actionsC">
            <div class="actionBtn"><a target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"
                                      style="background-color: rgb(18, 57, 98);" href="https://wa.me/60127067086">
                    <div class="icon iconColor">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                             style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5"><path
                                style="fill:none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M5.43 4.93A9.969 9.969 0 0 1 12.5 2c5.519 0 10 4.481 10 10 0 2.76-1.12 5.26-2.93 7.07l.001.001-.003.001A9.97 9.97 0 0 1 12.5 22a9.835 9.835 0 0 1-5.005-1.354l-4.187.546.546-4.187A9.835 9.835 0 0 1 2.5 12a9.97 9.97 0 0 1 2.928-7.068l.001-.003.001.001ZM16.5 16c-4.415 0-8-3.585-8-8"
                                style="fill:none;stroke:#fff;stroke-width:2px"></path></svg>
                    </div>
                </a>
                <p class="textColor">
                    WhatsApp
                </p></div>
        </div>
        <div class="actionsC">
            <div class="actionBtn"><a href="mailto:cheng.kang@pixalink.io" target="_blank" rel="noopener noreferrer"
                                      aria-label="Email" style="background-color: rgb(18, 57, 98);">
                    <div class="icon iconColor">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                             style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2"><path
                                style="fill:none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M22 33.75c0-.966-.896-1.75-2-1.75H4c-1.104 0-2 .784-2 1.75v10.5c0 .966.896 1.75 2 1.75h16c1.104 0 2-.784 2-1.75v-10.5Z"
                                style="fill:none;stroke:#fff;stroke-width:1.86px"
                                transform="matrix(1 0 0 1.14286 0 -32.571)"></path>
                            <path d="m18 7.042-6 2.625-6-2.625"
                                  style="fill:none;fill-rule:nonzero;stroke:#fff;stroke-width:1.86px"
                                  transform="matrix(1 0 0 1.14286 0 1.952)"></path></svg>
                    </div>
                </a>
                <p class="textColor">
                    Email
                </p></div>
        </div>
    </div>
    <div class="actions secondary">
        <div class="actionsC">
            <div class="actionBtn secBtn"><a href="https://github.com/chengkangzai" target="_blank"
                                             rel="noopener noreferrer" aria-label="GitHub"
                                             style="background: rgb(51, 51, 51);">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff">
                            <path fill-rule="evenodd"
                                  d="M12.03 2a9.97 9.97 0 0 0-3.16 19.44c.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.15-1.1-1.46-1.1-1.46-.91-.61.06-.6.06-.6 1 .07 1.53 1.03 1.53 1.03.89 1.52 2.33 1.08 2.9.83.1-.65.35-1.09.64-1.34-2.22-.25-4.55-1.1-4.55-4.93 0-1.08.4-1.98 1.03-2.67-.1-.26-.45-1.27.1-2.64 0 0 .83-.27 2.74 1.02a9.58 9.58 0 0 1 5 0c1.9-1.3 2.73-1.02 2.73-1.02.55 1.37.2 2.38.1 2.64.64.7 1.03 1.58 1.03 2.67 0 3.84-2.33 4.68-4.56 4.92.36.31.68.92.68 1.85l-.01 2.74c0 .26.18.57.68.48A9.98 9.98 0 0 0 12.03 2z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </a></div>
        </div>
        <div class="actionsC">
            <div class="actionBtn secBtn"><a href="https://linkedin.com/https://www.linkedin.com/in/chingchengkang/"
                                             target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"
                                             style="background: rgb(0, 119, 181);">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 24 24">
                            <path
                                d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.339 18.337H5.667v-8.59h2.672v8.59zM7.003 8.574a1.548 1.548 0 1 1 0-3.096 1.548 1.548 0 0 1 0 3.096zm11.335 9.763h-2.669V14.16c0-.996-.018-2.277-1.388-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248h-2.667v-8.59h2.56v1.174h.037c.355-.675 1.227-1.387 2.524-1.387 2.704 0 3.203 1.778 3.203 4.092v4.71z"></path>
                        </svg>
                    </div>
                </a></div>
        </div>
        <div class="actionsC">
            <div class="actionBtn secBtn"><a href="https://instagram.com/chengkangzai" target="_blank"
                                             rel="noopener noreferrer" aria-label="Instagram"
                                             style="background: rgb(255, 255, 255);">
                    <div class="icon">
                        <svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                             style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                            <path
                                d="M4.796,1.577C4.072,1.859 3.459,2.234 2.847,2.847C2.234,3.455 1.859,4.073 1.577,4.793C1.304,5.49 1.121,6.291 1.067,7.463C1.013,8.634 1,9.01 1,11.998C1,14.985 1.013,15.361 1.067,16.533C1.121,17.705 1.309,18.505 1.577,19.203C1.859,19.927 2.234,20.54 2.847,21.153C3.459,21.766 4.072,22.141 4.796,22.423C5.494,22.696 6.294,22.879 7.466,22.933C8.637,22.987 9.013,23 12,23C14.987,23 15.363,22.987 16.534,22.933C17.706,22.879 18.506,22.691 19.204,22.423C19.928,22.141 20.541,21.766 21.153,21.153C21.766,20.54 22.141,19.927 22.423,19.203C22.696,18.505 22.879,17.705 22.933,16.533C22.987,15.361 23,14.985 23,11.998C23,9.01 22.987,8.634 22.933,7.463C22.879,6.291 22.691,5.49 22.423,4.793C22.141,4.073 21.766,3.455 21.158,2.847C20.545,2.234 19.933,1.859 19.208,1.577C18.511,1.304 17.71,1.121 16.539,1.067C15.367,1.013 14.991,1 12.004,1C9.017,1 8.642,1.013 7.47,1.067C6.294,1.116 5.494,1.304 4.796,1.577ZM16.445,3.044C17.518,3.093 18.099,3.272 18.488,3.424C19.002,3.625 19.369,3.862 19.754,4.247C20.138,4.632 20.375,4.998 20.576,5.513C20.728,5.902 20.907,6.483 20.957,7.557C21.01,8.715 21.019,9.064 21.019,12.002C21.019,14.941 21.006,15.289 20.957,16.448C20.907,17.521 20.728,18.103 20.576,18.492C20.375,19.006 20.138,19.373 19.754,19.757C19.369,20.142 19.002,20.379 18.488,20.58C18.099,20.732 17.518,20.911 16.445,20.961C15.287,21.014 14.938,21.023 12,21.023C9.062,21.023 8.713,21.01 7.555,20.961C6.482,20.911 5.901,20.732 5.512,20.58C4.998,20.379 4.631,20.142 4.246,19.757C3.862,19.373 3.625,19.006 3.424,18.492C3.272,18.103 3.093,17.521 3.043,16.448C2.99,15.289 2.981,14.941 2.981,12.002C2.981,9.064 2.994,8.715 3.043,7.557C3.093,6.483 3.272,5.902 3.424,5.513C3.625,4.998 3.862,4.632 4.246,4.247C4.631,3.862 4.998,3.625 5.512,3.424C5.901,3.272 6.482,3.093 7.555,3.044C8.713,2.99 9.062,2.981 12,2.981C14.938,2.981 15.287,2.99 16.445,3.044ZM6.352,12.002C6.352,15.124 8.883,17.651 12,17.651C15.117,17.651 17.648,15.12 17.648,12.002C17.648,8.885 15.121,6.354 12,6.354C8.879,6.354 6.352,8.88 6.352,12.002ZM15.667,12.002C15.667,14.028 14.026,15.67 12,15.67C9.974,15.67 8.333,14.028 8.333,12.002C8.333,9.976 9.974,8.335 12,8.335C14.026,8.335 15.667,9.976 15.667,12.002ZM17.876,4.811C18.604,4.811 19.195,5.402 19.195,6.13C19.195,6.858 18.604,7.449 17.876,7.449C17.148,7.449 16.557,6.858 16.557,6.13C16.557,5.402 17.148,4.811 17.876,4.811Z"
                                style="fill:url(#EqtzKXv);fill-rule:nonzero;"></path>
                            <defs>
                                <radialGradient id="EqtzKXv" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                                gradientTransform="matrix(-22,22,-22,-22,23,1)">
                                    <stop offset="0" style="stop-color:#4c63d2;stop-opacity:1"></stop>
                                    <stop offset="0.4" style="stop-color:#bc3081;stop-opacity:1"></stop>
                                    <stop offset="0.75" style="stop-color:#f47133;stop-opacity:1"></stop>
                                    <stop offset="1" style="stop-color:#fed576;stop-opacity:1"></stop>
                                </radialGradient>
                            </defs>
                        </svg>
                    </div>
                </a></div>
        </div>
    </div>
    <div class="featured"><h2 class="section textColor">
            [Google Drive] Pixalink Feature
        </h2>
        <div>
            <div class="media document" style="background-color: rgb(255, 255, 255);"><!----> <!---->
                <div class="mediaC">
                    <div><img src="{{asset('pixalink_customer_acquisition_system_features.jpeg')}}"
                              alt="New Customer Acquisition System Features"></div>
                    <div class="controls cardColor"><p class="title">
                            Pixalink Customer Acquisition System Features
                        </p>
                        <div class="docDl"><p class="fileSize sub">PDF - 7.19 MB</p> <a
                                href="{{asset('pixalink_customer_acquisition_system_features.pdf')}}" download=""
                                target="_blank" class="dlBtn" style="background-color: rgb(18, 57, 98);">
                                <div class="icon iconColor">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                         style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2"><path
                                            style="fill:none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M21 15v4c0 1.097-.903 2-2 2H5c-1.097 0-2-.903-2-2v-4m4-5 5 5 5-5m-5 5V3"
                                            style="fill:none;fill-rule:nonzero;stroke:#fff;stroke-width:2px"></path></svg>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> <!---->
<script>
    function QR8bitByte(t){this.mode=QRMode.MODE_8BIT_BYTE,this.data=t,this.parsedData=[];for(var e=0,r=this.data.length;e<r;e++){var o=[],n=this.data.charCodeAt(e);n>65536?(o[0]=240|(1835008&n)>>>18,o[1]=128|(258048&n)>>>12,o[2]=128|(4032&n)>>>6,o[3]=128|63&n):n>2048?(o[0]=224|(61440&n)>>>12,o[1]=128|(4032&n)>>>6,o[2]=128|63&n):n>128?(o[0]=192|(1984&n)>>>6,o[1]=128|63&n):o[0]=n,this.parsedData.push(o)}this.parsedData=Array.prototype.concat.apply([],this.parsedData),this.parsedData.length!=this.data.length&&(this.parsedData.unshift(191),this.parsedData.unshift(187),this.parsedData.unshift(239))}function QRCodeModel(t,e){this.typeNumber=t,this.errorCorrectLevel=e,this.modules=null,this.moduleCount=0,this.dataCache=null,this.dataList=[]}QR8bitByte.prototype={getLength:function(t){return this.parsedData.length},write:function(t){for(var e=0,r=this.parsedData.length;e<r;e++)t.put(this.parsedData[e],8)}},QRCodeModel.prototype={addData:function(t){var e=new QR8bitByte(t);this.dataList.push(e),this.dataCache=null},isDark:function(t,e){if(t<0||this.moduleCount<=t||e<0||this.moduleCount<=e)throw new Error(t+","+e);return this.modules[t][e]},getModuleCount:function(){return this.moduleCount},make:function(){this.makeImpl(!1,this.getBestMaskPattern())},makeImpl:function(t,e){this.moduleCount=4*this.typeNumber+17,this.modules=new Array(this.moduleCount);for(var r=0;r<this.moduleCount;r++){this.modules[r]=new Array(this.moduleCount);for(var o=0;o<this.moduleCount;o++)this.modules[r][o]=null}this.setupPositionProbePattern(0,0),this.setupPositionProbePattern(this.moduleCount-7,0),this.setupPositionProbePattern(0,this.moduleCount-7),this.setupPositionAdjustPattern(),this.setupTimingPattern(),this.setupTypeInfo(t,e),this.typeNumber>=7&&this.setupTypeNumber(t),null==this.dataCache&&(this.dataCache=QRCodeModel.createData(this.typeNumber,this.errorCorrectLevel,this.dataList)),this.mapData(this.dataCache,e)},setupPositionProbePattern:function(t,e){for(var r=-1;r<=7;r++)if(!(t+r<=-1||this.moduleCount<=t+r))for(var o=-1;o<=7;o++)e+o<=-1||this.moduleCount<=e+o||(this.modules[t+r][e+o]=0<=r&&r<=6&&(0==o||6==o)||0<=o&&o<=6&&(0==r||6==r)||2<=r&&r<=4&&2<=o&&o<=4)},getBestMaskPattern:function(){for(var t=0,e=0,r=0;r<8;r++){this.makeImpl(!0,r);var o=QRUtil.getLostPoint(this);(0==r||t>o)&&(t=o,e=r)}return e},createMovieClip:function(t,e,r){var o=t.createEmptyMovieClip(e,r);this.make();for(var n=0;n<this.modules.length;n++)for(var i=1*n,a=0;a<this.modules[n].length;a++){var s=1*a;this.modules[n][a]&&(o.beginFill(0,100),o.moveTo(s,i),o.lineTo(s+1,i),o.lineTo(s+1,i+1),o.lineTo(s,i+1),o.endFill())}return o},setupTimingPattern:function(){for(var t=8;t<this.moduleCount-8;t++)null==this.modules[t][6]&&(this.modules[t][6]=t%2==0);for(var e=8;e<this.moduleCount-8;e++)null==this.modules[6][e]&&(this.modules[6][e]=e%2==0)},setupPositionAdjustPattern:function(){for(var t=QRUtil.getPatternPosition(this.typeNumber),e=0;e<t.length;e++)for(var r=0;r<t.length;r++){var o=t[e],n=t[r];if(null==this.modules[o][n])for(var i=-2;i<=2;i++)for(var a=-2;a<=2;a++)this.modules[o+i][n+a]=-2==i||2==i||-2==a||2==a||0==i&&0==a}},setupTypeNumber:function(t){for(var e=QRUtil.getBCHTypeNumber(this.typeNumber),r=0;r<18;r++){var o=!t&&1==(e>>r&1);this.modules[Math.floor(r/3)][r%3+this.moduleCount-8-3]=o}for(r=0;r<18;r++)o=!t&&1==(e>>r&1),this.modules[r%3+this.moduleCount-8-3][Math.floor(r/3)]=o},setupTypeInfo:function(t,e){for(var r=this.errorCorrectLevel<<3|e,o=QRUtil.getBCHTypeInfo(r),n=0;n<15;n++){var i=!t&&1==(o>>n&1);n<6?this.modules[n][8]=i:n<8?this.modules[n+1][8]=i:this.modules[this.moduleCount-15+n][8]=i}for(n=0;n<15;n++)i=!t&&1==(o>>n&1),n<8?this.modules[8][this.moduleCount-n-1]=i:n<9?this.modules[8][15-n-1+1]=i:this.modules[8][15-n-1]=i;this.modules[this.moduleCount-8][8]=!t},mapData:function(t,e){for(var r=-1,o=this.moduleCount-1,n=7,i=0,a=this.moduleCount-1;a>0;a-=2)for(6==a&&a--;;){for(var s=0;s<2;s++)if(null==this.modules[o][a-s]){var h=!1;i<t.length&&(h=1==(t[i]>>>n&1)),QRUtil.getMask(e,o,a-s)&&(h=!h),this.modules[o][a-s]=h,-1==--n&&(i++,n=7)}if((o+=r)<0||this.moduleCount<=o){o-=r,r=-r;break}}}},QRCodeModel.PAD0=236,QRCodeModel.PAD1=17,QRCodeModel.createData=function(t,e,r){for(var o=QRRSBlock.getRSBlocks(t,e),n=new QRBitBuffer,i=0;i<r.length;i++){var a=r[i];n.put(a.mode,4),n.put(a.getLength(),QRUtil.getLengthInBits(a.mode,t)),a.write(n)}var s=0;for(i=0;i<o.length;i++)s+=o[i].dataCount;if(n.getLengthInBits()>8*s)throw new Error("code length overflow. ("+n.getLengthInBits()+">"+8*s+")");for(n.getLengthInBits()+4<=8*s&&n.put(0,4);n.getLengthInBits()%8!=0;)n.putBit(!1);for(;!(n.getLengthInBits()>=8*s||(n.put(QRCodeModel.PAD0,8),n.getLengthInBits()>=8*s));)n.put(QRCodeModel.PAD1,8);return QRCodeModel.createBytes(n,o)},QRCodeModel.createBytes=function(t,e){for(var r=0,o=0,n=0,i=new Array(e.length),a=new Array(e.length),s=0;s<e.length;s++){var h=e[s].dataCount,l=e[s].totalCount-h;o=Math.max(o,h),n=Math.max(n,l),i[s]=new Array(h);for(var u=0;u<i[s].length;u++)i[s][u]=255&t.buffer[u+r];r+=h;var g=QRUtil.getErrorCorrectPolynomial(l),d=new QRPolynomial(i[s],g.getLength()-1).mod(g);for(a[s]=new Array(g.getLength()-1),u=0;u<a[s].length;u++){var f=u+d.getLength()-a[s].length;a[s][u]=f>=0?d.get(f):0}}var c=0;for(u=0;u<e.length;u++)c+=e[u].totalCount;var R=new Array(c),p=0;for(u=0;u<o;u++)for(s=0;s<e.length;s++)u<i[s].length&&(R[p++]=i[s][u]);for(u=0;u<n;u++)for(s=0;s<e.length;s++)u<a[s].length&&(R[p++]=a[s][u]);return R};for(var QRMode={MODE_NUMBER:1,MODE_ALPHA_NUM:2,MODE_8BIT_BYTE:4,MODE_KANJI:8},QRErrorCorrectLevel={L:1,M:0,Q:3,H:2},QRMaskPattern={PATTERN000:0,PATTERN001:1,PATTERN010:2,PATTERN011:3,PATTERN100:4,PATTERN101:5,PATTERN110:6,PATTERN111:7},QRUtil={PATTERN_POSITION_TABLE:[[],[6,18],[6,22],[6,26],[6,30],[6,34],[6,22,38],[6,24,42],[6,26,46],[6,28,50],[6,30,54],[6,32,58],[6,34,62],[6,26,46,66],[6,26,48,70],[6,26,50,74],[6,30,54,78],[6,30,56,82],[6,30,58,86],[6,34,62,90],[6,28,50,72,94],[6,26,50,74,98],[6,30,54,78,102],[6,28,54,80,106],[6,32,58,84,110],[6,30,58,86,114],[6,34,62,90,118],[6,26,50,74,98,122],[6,30,54,78,102,126],[6,26,52,78,104,130],[6,30,56,82,108,134],[6,34,60,86,112,138],[6,30,58,86,114,142],[6,34,62,90,118,146],[6,30,54,78,102,126,150],[6,24,50,76,102,128,154],[6,28,54,80,106,132,158],[6,32,58,84,110,136,162],[6,26,54,82,110,138,166],[6,30,58,86,114,142,170]],G15:1335,G18:7973,G15_MASK:21522,getBCHTypeInfo:function(t){for(var e=t<<10;QRUtil.getBCHDigit(e)-QRUtil.getBCHDigit(QRUtil.G15)>=0;)e^=QRUtil.G15<<QRUtil.getBCHDigit(e)-QRUtil.getBCHDigit(QRUtil.G15);return(t<<10|e)^QRUtil.G15_MASK},getBCHTypeNumber:function(t){for(var e=t<<12;QRUtil.getBCHDigit(e)-QRUtil.getBCHDigit(QRUtil.G18)>=0;)e^=QRUtil.G18<<QRUtil.getBCHDigit(e)-QRUtil.getBCHDigit(QRUtil.G18);return t<<12|e},getBCHDigit:function(t){for(var e=0;0!=t;)e++,t>>>=1;return e},getPatternPosition:function(t){return QRUtil.PATTERN_POSITION_TABLE[t-1]},getMask:function(t,e,r){switch(t){case QRMaskPattern.PATTERN000:return(e+r)%2==0;case QRMaskPattern.PATTERN001:return e%2==0;case QRMaskPattern.PATTERN010:return r%3==0;case QRMaskPattern.PATTERN011:return(e+r)%3==0;case QRMaskPattern.PATTERN100:return(Math.floor(e/2)+Math.floor(r/3))%2==0;case QRMaskPattern.PATTERN101:return e*r%2+e*r%3==0;case QRMaskPattern.PATTERN110:return(e*r%2+e*r%3)%2==0;case QRMaskPattern.PATTERN111:return(e*r%3+(e+r)%2)%2==0;default:throw new Error("bad maskPattern:"+t)}},getErrorCorrectPolynomial:function(t){for(var e=new QRPolynomial([1],0),r=0;r<t;r++)e=e.multiply(new QRPolynomial([1,QRMath.gexp(r)],0));return e},getLengthInBits:function(t,e){if(1<=e&&e<10)switch(t){case QRMode.MODE_NUMBER:return 10;case QRMode.MODE_ALPHA_NUM:return 9;case QRMode.MODE_8BIT_BYTE:case QRMode.MODE_KANJI:return 8;default:throw new Error("mode:"+t)}else if(e<27)switch(t){case QRMode.MODE_NUMBER:return 12;case QRMode.MODE_ALPHA_NUM:return 11;case QRMode.MODE_8BIT_BYTE:return 16;case QRMode.MODE_KANJI:return 10;default:throw new Error("mode:"+t)}else{if(!(e<41))throw new Error("type:"+e);switch(t){case QRMode.MODE_NUMBER:return 14;case QRMode.MODE_ALPHA_NUM:return 13;case QRMode.MODE_8BIT_BYTE:return 16;case QRMode.MODE_KANJI:return 12;default:throw new Error("mode:"+t)}}},getLostPoint:function(t){for(var e=t.getModuleCount(),r=0,o=0;o<e;o++)for(var n=0;n<e;n++){for(var i=0,a=t.isDark(o,n),s=-1;s<=1;s++)if(!(o+s<0||e<=o+s))for(var h=-1;h<=1;h++)n+h<0||e<=n+h||0==s&&0==h||a==t.isDark(o+s,n+h)&&i++;i>5&&(r+=3+i-5)}for(o=0;o<e-1;o++)for(n=0;n<e-1;n++){var l=0;t.isDark(o,n)&&l++,t.isDark(o+1,n)&&l++,t.isDark(o,n+1)&&l++,t.isDark(o+1,n+1)&&l++,0!=l&&4!=l||(r+=3)}for(o=0;o<e;o++)for(n=0;n<e-6;n++)t.isDark(o,n)&&!t.isDark(o,n+1)&&t.isDark(o,n+2)&&t.isDark(o,n+3)&&t.isDark(o,n+4)&&!t.isDark(o,n+5)&&t.isDark(o,n+6)&&(r+=40);for(n=0;n<e;n++)for(o=0;o<e-6;o++)t.isDark(o,n)&&!t.isDark(o+1,n)&&t.isDark(o+2,n)&&t.isDark(o+3,n)&&t.isDark(o+4,n)&&!t.isDark(o+5,n)&&t.isDark(o+6,n)&&(r+=40);var u=0;for(n=0;n<e;n++)for(o=0;o<e;o++)t.isDark(o,n)&&u++;return r+Math.abs(100*u/e/e-50)/5*10}},QRMath={glog:function(t){if(t<1)throw new Error("glog("+t+")");return QRMath.LOG_TABLE[t]},gexp:function(t){for(;t<0;)t+=255;for(;t>=256;)t-=255;return QRMath.EXP_TABLE[t]},EXP_TABLE:new Array(256),LOG_TABLE:new Array(256)},i=0;i<8;i++)QRMath.EXP_TABLE[i]=1<<i;for(i=8;i<256;i++)QRMath.EXP_TABLE[i]=QRMath.EXP_TABLE[i-4]^QRMath.EXP_TABLE[i-5]^QRMath.EXP_TABLE[i-6]^QRMath.EXP_TABLE[i-8];for(i=0;i<255;i++)QRMath.LOG_TABLE[QRMath.EXP_TABLE[i]]=i;function QRPolynomial(t,e){if(null==t.length)throw new Error(t.length+"/"+e);for(var r=0;r<t.length&&0==t[r];)r++;this.num=new Array(t.length-r+e);for(var o=0;o<t.length-r;o++)this.num[o]=t[o+r]}function QRRSBlock(t,e){this.totalCount=t,this.dataCount=e}function QRBitBuffer(){this.buffer=[],this.length=0}QRPolynomial.prototype={get:function(t){return this.num[t]},getLength:function(){return this.num.length},multiply:function(t){for(var e=new Array(this.getLength()+t.getLength()-1),r=0;r<this.getLength();r++)for(var o=0;o<t.getLength();o++)e[r+o]^=QRMath.gexp(QRMath.glog(this.get(r))+QRMath.glog(t.get(o)));return new QRPolynomial(e,0)},mod:function(t){if(this.getLength()-t.getLength()<0)return this;for(var e=QRMath.glog(this.get(0))-QRMath.glog(t.get(0)),r=new Array(this.getLength()),o=0;o<this.getLength();o++)r[o]=this.get(o);for(o=0;o<t.getLength();o++)r[o]^=QRMath.gexp(QRMath.glog(t.get(o))+e);return new QRPolynomial(r,0).mod(t)}},QRRSBlock.RS_BLOCK_TABLE=[[1,26,19],[1,26,16],[1,26,13],[1,26,9],[1,44,34],[1,44,28],[1,44,22],[1,44,16],[1,70,55],[1,70,44],[2,35,17],[2,35,13],[1,100,80],[2,50,32],[2,50,24],[4,25,9],[1,134,108],[2,67,43],[2,33,15,2,34,16],[2,33,11,2,34,12],[2,86,68],[4,43,27],[4,43,19],[4,43,15],[2,98,78],[4,49,31],[2,32,14,4,33,15],[4,39,13,1,40,14],[2,121,97],[2,60,38,2,61,39],[4,40,18,2,41,19],[4,40,14,2,41,15],[2,146,116],[3,58,36,2,59,37],[4,36,16,4,37,17],[4,36,12,4,37,13],[2,86,68,2,87,69],[4,69,43,1,70,44],[6,43,19,2,44,20],[6,43,15,2,44,16],[4,101,81],[1,80,50,4,81,51],[4,50,22,4,51,23],[3,36,12,8,37,13],[2,116,92,2,117,93],[6,58,36,2,59,37],[4,46,20,6,47,21],[7,42,14,4,43,15],[4,133,107],[8,59,37,1,60,38],[8,44,20,4,45,21],[12,33,11,4,34,12],[3,145,115,1,146,116],[4,64,40,5,65,41],[11,36,16,5,37,17],[11,36,12,5,37,13],[5,109,87,1,110,88],[5,65,41,5,66,42],[5,54,24,7,55,25],[11,36,12],[5,122,98,1,123,99],[7,73,45,3,74,46],[15,43,19,2,44,20],[3,45,15,13,46,16],[1,135,107,5,136,108],[10,74,46,1,75,47],[1,50,22,15,51,23],[2,42,14,17,43,15],[5,150,120,1,151,121],[9,69,43,4,70,44],[17,50,22,1,51,23],[2,42,14,19,43,15],[3,141,113,4,142,114],[3,70,44,11,71,45],[17,47,21,4,48,22],[9,39,13,16,40,14],[3,135,107,5,136,108],[3,67,41,13,68,42],[15,54,24,5,55,25],[15,43,15,10,44,16],[4,144,116,4,145,117],[17,68,42],[17,50,22,6,51,23],[19,46,16,6,47,17],[2,139,111,7,140,112],[17,74,46],[7,54,24,16,55,25],[34,37,13],[4,151,121,5,152,122],[4,75,47,14,76,48],[11,54,24,14,55,25],[16,45,15,14,46,16],[6,147,117,4,148,118],[6,73,45,14,74,46],[11,54,24,16,55,25],[30,46,16,2,47,17],[8,132,106,4,133,107],[8,75,47,13,76,48],[7,54,24,22,55,25],[22,45,15,13,46,16],[10,142,114,2,143,115],[19,74,46,4,75,47],[28,50,22,6,51,23],[33,46,16,4,47,17],[8,152,122,4,153,123],[22,73,45,3,74,46],[8,53,23,26,54,24],[12,45,15,28,46,16],[3,147,117,10,148,118],[3,73,45,23,74,46],[4,54,24,31,55,25],[11,45,15,31,46,16],[7,146,116,7,147,117],[21,73,45,7,74,46],[1,53,23,37,54,24],[19,45,15,26,46,16],[5,145,115,10,146,116],[19,75,47,10,76,48],[15,54,24,25,55,25],[23,45,15,25,46,16],[13,145,115,3,146,116],[2,74,46,29,75,47],[42,54,24,1,55,25],[23,45,15,28,46,16],[17,145,115],[10,74,46,23,75,47],[10,54,24,35,55,25],[19,45,15,35,46,16],[17,145,115,1,146,116],[14,74,46,21,75,47],[29,54,24,19,55,25],[11,45,15,46,46,16],[13,145,115,6,146,116],[14,74,46,23,75,47],[44,54,24,7,55,25],[59,46,16,1,47,17],[12,151,121,7,152,122],[12,75,47,26,76,48],[39,54,24,14,55,25],[22,45,15,41,46,16],[6,151,121,14,152,122],[6,75,47,34,76,48],[46,54,24,10,55,25],[2,45,15,64,46,16],[17,152,122,4,153,123],[29,74,46,14,75,47],[49,54,24,10,55,25],[24,45,15,46,46,16],[4,152,122,18,153,123],[13,74,46,32,75,47],[48,54,24,14,55,25],[42,45,15,32,46,16],[20,147,117,4,148,118],[40,75,47,7,76,48],[43,54,24,22,55,25],[10,45,15,67,46,16],[19,148,118,6,149,119],[18,75,47,31,76,48],[34,54,24,34,55,25],[20,45,15,61,46,16]],QRRSBlock.getRSBlocks=function(t,e){var r=QRRSBlock.getRsBlockTable(t,e);if(null==r)throw new Error("bad rs block @ typeNumber:"+t+"/errorCorrectLevel:"+e);for(var o=r.length/3,n=[],i=0;i<o;i++)for(var a=r[3*i+0],s=r[3*i+1],h=r[3*i+2],l=0;l<a;l++)n.push(new QRRSBlock(s,h));return n},QRRSBlock.getRsBlockTable=function(t,e){switch(e){case QRErrorCorrectLevel.L:return QRRSBlock.RS_BLOCK_TABLE[4*(t-1)+0];case QRErrorCorrectLevel.M:return QRRSBlock.RS_BLOCK_TABLE[4*(t-1)+1];case QRErrorCorrectLevel.Q:return QRRSBlock.RS_BLOCK_TABLE[4*(t-1)+2];case QRErrorCorrectLevel.H:return QRRSBlock.RS_BLOCK_TABLE[4*(t-1)+3];default:return}},QRBitBuffer.prototype={get:function(t){var e=Math.floor(t/8);return 1==(this.buffer[e]>>>7-t%8&1)},put:function(t,e){for(var r=0;r<e;r++)this.putBit(1==(t>>>e-r-1&1))},getLengthInBits:function(){return this.length},putBit:function(t){var e=Math.floor(this.length/8);this.buffer.length<=e&&this.buffer.push(0),t&&(this.buffer[e]|=128>>>this.length%8),this.length++}};var QRCodeLimitLength=[[17,14,11,7],[32,26,20,14],[53,42,32,24],[78,62,46,34],[106,84,60,44],[134,106,74,58],[154,122,86,64],[192,152,108,84],[230,180,130,98],[271,213,151,119],[321,251,177,137],[367,287,203,155],[425,331,241,177],[458,362,258,194],[520,412,292,220],[586,450,322,250],[644,504,364,280],[718,560,394,310],[792,624,442,338],[858,666,482,382],[929,711,509,403],[1003,779,565,439],[1091,857,611,461],[1171,911,661,511],[1273,997,715,535],[1367,1059,751,593],[1465,1125,805,625],[1528,1190,868,658],[1628,1264,908,698],[1732,1370,982,742],[1840,1452,1030,790],[1952,1538,1112,842],[2068,1628,1168,898],[2188,1722,1228,958],[2303,1809,1283,983],[2431,1911,1351,1051],[2563,1989,1423,1093],[2699,2099,1499,1139],[2809,2213,1579,1219],[2953,2331,1663,1273]];function QRCode(t){if(this.options={padding:4,width:256,height:256,typeNumber:4,color:"#000000",background:"#ffffff",ecl:"M"},"string"==typeof t&&(t={content:t}),t)for(var e in t)this.options[e]=t[e];if("string"!=typeof this.options.content)throw new Error("Expected 'content' as string!");if(0===this.options.content.length)throw new Error("Expected 'content' to be non-empty!");if(!(this.options.padding>=0))throw new Error("Expected 'padding' value to be non-negative!");if(!(this.options.width>0&&this.options.height>0))throw new Error("Expected 'width' or 'height' value to be higher than zero!");var r=this.options.content,o=function(t,e){for(var r=function(t){var e=encodeURI(t).toString().replace(/\%[0-9a-fA-F]{2}/g,"a");return e.length+(e.length!=t?3:0)}(t),o=1,n=0,i=0,a=QRCodeLimitLength.length;i<=a;i++){var s=QRCodeLimitLength[i];if(!s)throw new Error("Content too long: expected "+n+" but got "+r);switch(e){case"L":n=s[0];break;case"M":n=s[1];break;case"Q":n=s[2];break;case"H":n=s[3];break;default:throw new Error("Unknwon error correction level: "+e)}if(r<=n)break;o++}if(o>QRCodeLimitLength.length)throw new Error("Content too long");return o}(r,this.options.ecl),n=function(t){switch(t){case"L":return QRErrorCorrectLevel.L;case"M":return QRErrorCorrectLevel.M;case"Q":return QRErrorCorrectLevel.Q;case"H":return QRErrorCorrectLevel.H;default:throw new Error("Unknwon error correction level: "+t)}}(this.options.ecl);this.qrcode=new QRCodeModel(o,n),this.qrcode.addData(r),this.qrcode.make()}QRCode.prototype.svg=function(t){var e=this.options||{},r=this.qrcode.modules;void 0===t&&(t={container:e.container||"svg"});for(var o=void 0===e.pretty||!!e.pretty,n=o?"  ":"",i=o?"\r\n":"",a=e.width,s=e.height,h=r.length,l=a/(h+2*e.padding),u=s/(h+2*e.padding),g=void 0!==e.join&&!!e.join,d=void 0!==e.swap&&!!e.swap,f=void 0===e.xmlDeclaration||!!e.xmlDeclaration,c=void 0!==e.predefined&&!!e.predefined,R=c?n+'<defs><path id="qrmodule" d="M0 0 h'+u+" v"+l+' H0 z" style="fill:'+e.color+';shape-rendering:crispEdges;" /></defs>'+i:"",p=n+'<rect x="0" y="0" width="'+a+'" height="'+s+'" style="fill:'+e.background+';shape-rendering:crispEdges;"/>'+i,m="",Q="",v=0;v<h;v++)for(var E=0;E<h;E++)if(r[E][v]){var M=E*l+e.padding*l,C=v*u+e.padding*u;if(d){var B=M;M=C,C=B}if(g){var w=l+M,L=u+C;M=Number.isInteger(M)?Number(M):M.toFixed(2),C=Number.isInteger(C)?Number(C):C.toFixed(2),w=Number.isInteger(w)?Number(w):w.toFixed(2),Q+="M"+M+","+C+" V"+(L=Number.isInteger(L)?Number(L):L.toFixed(2))+" H"+w+" V"+C+" H"+M+" Z "}else m+=c?n+'<use x="'+M.toString()+'" y="'+C.toString()+'" href="#qrmodule" />'+i:n+'<rect x="'+M.toString()+'" y="'+C.toString()+'" width="'+l+'" height="'+u+'" style="fill:'+e.color+';shape-rendering:crispEdges;"/>'+i}g&&(m=n+'<path x="0" y="0" style="fill:'+e.color+';shape-rendering:crispEdges;" d="'+Q+'" />');var T="";switch(t.container){case"svg":f&&(T+='<?xml version="1.0" standalone="yes"?>'+i),T+='<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="'+a+'" height="'+s+'">'+i,T+=R+p+m,T+="</svg>";break;case"svg-viewbox":f&&(T+='<?xml version="1.0" standalone="yes"?>'+i),T+='<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 '+a+" "+s+'">'+i,T+=R+p+m,T+="</svg>";break;case"g":T+='<g width="'+a+'" height="'+s+'">'+i,T+=R+p+m,T+="</g>";break;default:T+=(R+p+m).replace(/^\s+/,"")}return T},QRCode.prototype.save=function(t,e){var r=this.svg();"function"!=typeof e&&(e=function(t,e){});try{require("fs").writeFile(t,r,e)}catch(t){e(t)}},"undefined"!=typeof module&&(module.exports=QRCode);
</sc>
<script>let m = document.getElementById("modal"), c = document.getElementById("close"),
        ki = document.getElementById("keyView"), cv = document.getElementById("copyView"),
        curl = document.getElementById("copyURL"), qrv = document.getElementById("qrView"),
        qr = document.getElementById("qr"), s = document.getElementById("share"),
        sqr = document.getElementById("showQR"), sk = document.getElementById("showKey");

    function tC(e) {
        "2rem" == e.style.top ? (e.style.visibility = "visible", e.style.top = "0px", e.style.opacity = 1) : (e.style.top = "2rem", e.style.opacity = 0, setTimeout(() => {
            e.style.visibility = "hidden"
        }, 200))
    }

    function dN(e) {
        e.style.display = "none"
    }

    window.addEventListener("load", () => {
        document.querySelector("#topActions").style.display = "flex", qr.innerHTML = new QRCode({
            content: window.location.href,
            container: "svg-viewbox",
            join: !0,
            ecl: "L",
            padding: 0
        }).svg()
    }), navigator.canShare ? s.addEventListener("click", () => {
        navigator.share({
            title: document.title,
            text: "You can view my Digital Business Card here:",
            url: window.location.href
        })
    }) : s.addEventListener("click", () => {
        tC(m), cv.style.display = "flex", dN(qrv), ki && dN(ki)
    }), sqr.addEventListener("click", () => {
        tC(m), qrv.style.display = "block", dN(cv), ki && dN(ki)
    }), sk && sk.addEventListener("click", () => {
        tC(m), ki && (ki.style.display = "flex"), dN(cv), dN(qrv)
    }), c.addEventListener("click", () => tC(m)), curl.addEventListener("click", async () => {
        let e = curl.querySelectorAll(".iconColor")[1];
        await navigator.clipboard.writeText(window.location.href).then(t => {
            e.innerText = "Copied", setTimeout(() => {
                e.innerText = "Copy URL"
            }, 1e3)
        })
    });</script>
<script>let pC = document.querySelectorAll(".pCtrl"), pP = document.querySelectorAll(".playPause"),
        srcs = document.querySelectorAll(".source");
    srcs.forEach(e => {
        e.style.pointerEvents = "none", e.removeAttribute("controls")
    }), pC.forEach((e, l) => {
        e.style.display = "flex";
        let r = e.querySelector(".currentTime"), s = e.querySelector(".seekBar"), t = e.querySelector(".playPause"),
            a = t.querySelector(".play"), c = t.querySelector(".pause");
        srcs[l].addEventListener("timeupdate", () => {
            let e = srcs[l].currentTime, t = 100 / srcs[l].duration * e;
            s.value = t, 100 == t && (s.value = 0, a.style.display = "block", c.style.display = "none");
            let o = Math.floor(e / 60), y = Math.floor(e % 60);
            o.toString().length < 2 && (o = "0" + o), y.toString().length < 2 && (y = "0" + y), r.value = o + ":" + y
        }), s.addEventListener("change", () => {
            srcs[l].currentTime = srcs[l].duration * (parseInt(s.value) / 100)
        }), t.addEventListener("click", () => {
            srcs[l].paused ? (srcs.forEach((e, r) => {
                l != r && (e.paused || e.pause())
            }), pP.forEach((e, l) => {
                let r = e.querySelector(".play"), s = e.querySelector(".pause");
                r.style.display = "block", s.style.display = "none"
            }), srcs[l].play(), a.style.display = "none", c.style.display = "block") : (srcs[l].pause(), c.style.display = "none", a.style.display = "block")
        })
    });</script>
</body>
</html>
