<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>OdinShop</title>
        <link rel="stylesheet" href="layout/css/bootstrap.min.css">
        <script src="layout/js/jquery-3.4.1.min.js"></script>
        <script src="layout/js/clipboard.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="layout/js/bootstrap.min.js"></script>
        <script src="layout/js/bootbox.min.js"></script>
        <link rel="stylesheet" type="text/css" href="layout/css/flags.css">
	    
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {  from { opacity: 0.99 }
        to {
        opacity: 1
        }
        }
        @keyframes chartjs-render-animation {
        from {
        opacity: 0.99
        }
        to {
        opacity: 1
        }
        }
        .chartjs-render-monitor {
        -webkit-animation: chartjs-render-animation 0.001s;
        animation: chartjs-render-animation 0.001s;
        }
        </style>
        <script async="" src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script> <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
        dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('set', {
        '$usrid': 'USER_ID'
        }); // Set the user ID using signed-in user_id.
        gtag('config', 'UA-177092549-1');
        </script>
        <link rel="stylesheet" href="layout/css/all.min.css">
        <link rel="stylesheet" href="layout/css/darkmarket">
        <link rel="stylesheet" href="layout/css/util.css">
        <style>body{padding-top:80px}</style>
        <link rel="stylesheet" href="layout/fonts/iconic/css/material-design-iconic-font.min.css">
        <script src="layout/js/main.js"></script>
        <script type="text/javascript">
        // Notice how this gets configured before we load Font Awesome
        window.FontAwesomeConfig = {
        autoReplaceSvg: false
        }
        </script>
        <style>
        @import url(//fonts.googleapis.com/css?family=Roboto:400);
        .navbar-nav .dropdown-menu {
        margin: 0 !important }
        </style>
        <style>
        .navbar-nav .dropdown-menu {
        margin: 0 !important
        }
        .theme-light {
        --color-primary: #0060df;
        --color-secondary: #ffffff;
        --color-secondary2: #ecf0f1;
        --color-accent: #fd6f53;
        --font-color: #000000;
        --color-nav: #ffffff;
        --color-dropdown: #ffffff;
        --color-card: #ffffff;
        --color-card2: #d1ecf1;
        --color-info: #0c5460;
        --color-backinfo: #d1ecf1;
        --color-borderinfo: #bee5eb;
        }
        .theme-dark {
        --color-primary: #17ed90;
        --color-secondary: #353B50;
        --color-secondary2: #353B50;
        --color-accent: #12cdea;
        --font-color: #ffffff;
        --color-nav: #363947;
        --color-dropdown: rgba(171, 205, 239, 0.3);
        --color-card: #262A37;
        --color-card2: #262A37;
        --color-info: #4DD0E1;
        --color-backinfo: #262A37;
        --color-borderinfo: #262A37;
        }
        .them {
        background: var(--color-secondary);
        flex-direction: column;
        justify-content: center;
        align-items: center;
        }
        .them h1 {
        color: var(--font-color);
        font-family: sans-serif;
        }
        .card-body {
        color: var(--font-color);
        }
        .them button {
        color: var(--font-color);
        background-color: #ffffff;
        padding: 10px 20px;
        border: 0;
        border-radius: 5px;
        }
        .navbar.navbar-light .navbar-toggler {
        color: var(--font-color);
        }
        /* The switch - the box around the slider */
        .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
        }
        /* Hide default HTML checkbox */
        .switch input {
        opacity: 0;
        width: 0;
        height: 0;
        }
        /* The slider */
        .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: 0.4s;
        transition: 0.4s;
        }
        .slider:before {
        position: absolute;
        content: "";
        height: 40px;
        width: 40px;
        left: 0px;
        bottom: 4px;
        top: 0;
        bottom: 0;
        margin: auto 0;
        -webkit-transition: 0.4s;
        transition: 0.4s;
        box-shadow: 0 0px 15px #2020203d;
        background: white url('https://i.ibb.co/FxzBYR9/night.png');
        background-repeat: no-repeat;
        background-position: center;
        }
        input:checked+.slider {
        background-color: #2196f3;
        }
        input:focus+.slider {
        box-shadow: 0 0 1px #2196f3;
        }
        input:checked+.slider:before {
        -webkit-transform: translateX(24px);
        -ms-transform: translateX(24px);
        transform: translateX(24px);
        background: white url('https://i.ibb.co/7JfqXxB/sunny.png');
        background-repeat: no-repeat;
        background-position: center;
        }
        /* Rounded sliders */
        .slider.round {
        border-radius: 34px;
        }
        .slider.round:before {
        border-radius: 50%;
        }
        </style>
        <script>
        function setTheme(themeName) {
        localStorage.setItem('theme', themeName);
        document.documentElement.className = themeName;
        }
        // function to toggle between light and dark theme
        function toggleTheme() {
        if (localStorage.getItem('theme') === 'theme-dark') {
        setTheme('theme-light');
        } else {
        setTheme('theme-dark');
        }
        }
        // Immediately invoked function to set the theme on initial load
        (function () {
        if (localStorage.getItem('theme') === 'theme-dark') {
        setTheme('theme-dark');
        document.getElementById('slider').checked = false;
        } else {
        setTheme('theme-light');
        document.getElementById('slider').checked = true;
        }
        })();
        </script>
        <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
        from {
        opacity: 0.99
        }
        to {
        opacity: 1
        }
        }
        @keyframes chartjs-render-animation {
        from {
        opacity: 0.99
        }
        to {
        opacity: 1
        }
        }
        .chartjs-render-monitor {
        -webkit-animation: chartjs-render-animation 0.001s;
        animation: chartjs-render-animation 0.001s;
        }
        </style>
        <script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-2c78ba82.js"></script>
        <script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-696bc286.js"></script>
        <script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-f1596d96.js"></script>
        <script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-48f46bef.js"></script>
        <script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-4fe9d5dd.js"></script>
        <script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-2d0b9454.js"></script>
        <script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-f163fcd0.js"></script>
        <script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-32507910.js"></script>
        <style type="text/css">
        #w79k9uo8t8ao1683543595990 {
        outline: none !important;
        visibility: visible !important;
        resize: none !important;
        box-shadow: none !important;
        overflow: visible !important;
        background: none !important;
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
        -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity 1
        }
        ) !important;
        -mz-opacity:1 !important;
        -khtml-opacity:1 !important;
        top:auto !important;
        right:0px !important;
        bottom:0px !important;
        left:auto !important;
        position:fixed !important;
        border:0 !important;
        min-height:0px !important;
        min-width:0px !important;
        max-height:none !important;
        max-width:none !important;
        padding:0px !important;
        margin:0px !important;
        -moz-transition-property:none !important;
        -webkit-transition-property:none !important;
        -o-transition-property:none !important;
        transition-property:none !important;
        transform:none !important;
        -webkit-transform:none !important;
        -ms-transform:none !important;
        width:auto !important;
        height:auto !important;
        display:none !important;
        z-index:2000000000 !important;
        background-color:transparent !important;
        cursor:none !important;
        float:none !important;
        border-radius:unset !important;
        pointer-events:auto !important;
        clip:auto !important;
        color-scheme:light !important;
        }
        #w79k9uo8t8ao1683543595990.widget-hidden {
        display: none !important;
        }
        #w79k9uo8t8ao1683543595990.widget-visible {
        display: block !important;
        }
        @media print {
        #w79k9uo8t8ao1683543595990.widget-visible {
        display: none !important;
        }
        }
        </style>
        <style type="text/css">
        @keyframes tawkMaxOpen {
        0% {
        opacity: 0;
        transform: translate(0, 30px);
        ;
        }
        to {
        opacity: 1;
        transform: translate(0, 0px);
        }
        }
        @-moz-keyframes tawkMaxOpen {
        0% {
        opacity: 0;
        transform: translate(0, 30px);
        ;
        }
        to {
        opacity: 1;
        transform: translate(0, 0px);
        }
        }
        @-webkit-keyframes tawkMaxOpen {
        0% {
        opacity: 0;
        transform: translate(0, 30px);
        ;
        }
        to {
        opacity: 1;
        transform: translate(0, 0px);
        }
        }
        #lfpfgrbj4le1683543596881.open {
        animation: tawkMaxOpen .25s ease !important;
        }
        @keyframes tawkMaxClose {
        from {
        opacity: 1;
        transform: translate(0, 0px);
        ;
        }
        to {
        opacity: 0;
        transform: translate(0, 30px);
        ;
        }
        }
        @-moz-keyframes tawkMaxClose {
        from {
        opacity: 1;
        transform: translate(0, 0px);
        ;
        }
        to {
        opacity: 0;
        transform: translate(0, 30px);
        ;
        }
        }
        @-webkit-keyframes tawkMaxClose {
        from {
        opacity: 1;
        transform: translate(0, 0px);
        ;
        }
        to {
        opacity: 0;
        transform: translate(0, 30px);
        ;
        }
        }
        #lfpfgrbj4le1683543596881.closed {
        animation: tawkMaxClose .25s ease !important
        }
        </style>
        <style>cloudflare-app[app="corner-ribbon"] {
        pointer-events: none;
        position: fixed;
        }
        cloudflare-app[app="corner-ribbon"] .ribbon-content {
        border: 0;
        box-shadow: 0 0 3px rgba(0, 0, 0, .3);
        box-sizing: border-box;
        cursor: default;
        height: 3em;
        letter-spacing: .03em;
        line-height: 1.1;
        overflow: hidden;
        padding: 1em 0;
        position: absolute;
        text-align: center;
        text-decoration: none;
        text-overflow: ellipsis;
        transform-origin: 0 0;
        white-space: nowrap;
        width: 141.421356%; /* sqrt(2) */
        }
        cloudflare-app[app="corner-ribbon"] .ribbon-content[href] {
        cursor: pointer;
        pointer-events: all;
        }
        cloudflare-app[app="corner-ribbon"] .ribbon-content[href],
        cloudflare-app[app="corner-ribbon"] .ribbon-content[href]:link,
        cloudflare-app[app="corner-ribbon"] .ribbon-content[href]:hover,
        cloudflare-app[app="corner-ribbon"] .ribbon-content[href]:active {
        color: inherit;
        outline: none;
        }
        cloudflare-app[app="corner-ribbon"] .ribbon-content[href]:hover {
        opacity: .8;
        }
        cloudflare-app[app="corner-ribbon"][data-size="small"]  {
        font-size: 0.85em;
        }
        cloudflare-app[app="corner-ribbon"][data-size="normal"] {
        font-size: 1.00em;
        }
        cloudflare-app[app="corner-ribbon"][data-size="large"] {
        font-size: 1.25em;
        }
        cloudflare-app[app="corner-ribbon"][data-size="huge"] {
        font-size: 1.50em;
        }
        cloudflare-app[app="corner-ribbon"][data-position="top-left"] {
        top: 0;
        left: 0;
        }
        cloudflare-app[app="corner-ribbon"][data-position="top-right"] {
        top: 0;
        right: 0;
        }
        cloudflare-app[app="corner-ribbon"][data-position="bottom-left"] {
        bottom: 0;
        left: 0;
        }
        cloudflare-app[app="corner-ribbon"][data-position="bottom-right"] {
        bottom: 0;
        right: 0;
        }
        cloudflare-app[app="corner-ribbon"][data-position="top-left"] .ribbon-content {
        transform: rotate(-45deg);
        top: 100%;
        left: -2.12132em;
        margin-top: -2.12132em;
        }
        cloudflare-app[app="corner-ribbon"][data-position="top-right"] .ribbon-content {
        transform: rotate(45deg);
        left: 2.12132em;
        top: -2.12132em;
        }
        cloudflare-app[app="corner-ribbon"][data-position="bottom-left"] .ribbon-content {
        transform: rotate(45deg);
        }
        cloudflare-app[app="corner-ribbon"][data-position="bottom-right"] .ribbon-content {
        transform: rotate(-45deg);
        top: 100%;
        }
        </style>
        <style>

				/*!
        * Bootstrap v4.3.1 (https://getbootstrap.com/)
        * Copyright 2011-2019 The Bootstrap Authors
        * Copyright 2011-2019 Twitter, Inc.
        * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
        */
:root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
}

*,
::after,
::before {
    box-sizing: border-box
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent
}

article,
aside,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section {
    display: block
}

body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff
}

[tabindex="-1"]:focus {
    outline: 0 !important
}

hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin-top: 0;
    margin-bottom: .5rem
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

abbr[data-original-title],
abbr[title] {
    text-decoration: underline;
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
    cursor: help;
    border-bottom: 0;
    -webkit-text-decoration-skip-ink: none;
    text-decoration-skip-ink: none
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit
}

dl,
ol,
ul {
    margin-top: 0;
    margin-bottom: 1rem
}

ol ol,
ol ul,
ul ol,
ul ul {
    margin-bottom: 0
}

dt {
    font-weight: 700
}

dd {
    margin-bottom: .5rem;
    margin-left: 0
}

blockquote {
    margin: 0 0 1rem
}

b,
strong {
    font-weight: bolder
}

small {
    font-size: 80%
}

sub,
sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline
}

sub {
    bottom: -.25em
}

sup {
    top: -.5em
}

a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent
}

a:hover {
    color: #0056b3;
    text-decoration: underline
}

a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none
}

a:not([href]):not([tabindex]):focus,
a:not([href]):not([tabindex]):hover {
    color: inherit;
    text-decoration: none
}

a:not([href]):not([tabindex]):focus {
    outline: 0
}

code,
kbd,
pre,
samp {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    font-size: 1em
}

pre {
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto
}

figure {
    margin: 0 0 1rem
}

img {
    vertical-align: middle;
    border-style: none
}

svg {
    overflow: hidden;
    vertical-align: middle
}

table {
    border-collapse: collapse
}

caption {
    padding-top: .75rem;
    padding-bottom: .75rem;
    color: #6c757d;
    text-align: left;
    caption-side: bottom
}

th {
    text-align: inherit
}

label {
    display: inline-block;
    margin-bottom: .5rem
}

button {
    border-radius: 0
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color
}

button,
input,
optgroup,
select,
textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

button,
input {
    overflow: visible
}

button,
select {
    text-transform: none
}

select {
    word-wrap: normal
}

[type=button],
[type=reset],
[type=submit],
button {
    -webkit-appearance: button
}

[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled),
button:not(:disabled) {
    cursor: pointer
}

[type=button]::-moz-focus-inner,
[type=reset]::-moz-focus-inner,
[type=submit]::-moz-focus-inner,
button::-moz-focus-inner {
    padding: 0;
    border-style: none
}

input[type=checkbox],
input[type=radio] {
    box-sizing: border-box;
    padding: 0
}

input[type=date],
input[type=datetime-local],
input[type=month],
input[type=time] {
    -webkit-appearance: listbox
}

textarea {
    overflow: auto;
    resize: vertical
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0
}

legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: .5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal
}

progress {
    vertical-align: baseline
}

[type=number]::-webkit-inner-spin-button,
[type=number]::-webkit-outer-spin-button {
    height: auto
}

[type=search] {
    outline-offset: -2px;
    -webkit-appearance: none
}

[type=search]::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button
}

output {
    display: inline-block
}

summary {
    display: list-item;
    cursor: pointer
}

template {
    display: none
}

[hidden] {
    display: none !important
}

.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
    margin-bottom: .5rem;
    font-weight: 500;
    line-height: 1.2
}

.h1,
h1 {
    font-size: 2.5rem
}

.h2,
h2 {
    font-size: 2rem
}

.h3,
h3 {
    font-size: 1.75rem
}

.h4,
h4 {
    font-size: 1.5rem
}

.h5,
h5 {
    font-size: 1.25rem
}

.h6,
h6 {
    font-size: 1rem
}

.lead {
    font-size: 1.25rem;
    font-weight: 300
}

.display-1 {
    font-size: 6rem;
    font-weight: 300;
    line-height: 1.2
}

.display-2 {
    font-size: 5.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-3 {
    font-size: 4.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, .1)
}

.small,
small {
    font-size: 80%;
    font-weight: 400
}

.mark,
mark {
    padding: .2em;
    background-color: #fcf8e3
}

.list-unstyled {
    padding-left: 0;
    list-style: none
}

.list-inline {
    padding-left: 0;
    list-style: none
}

.list-inline-item {
    display: inline-block
}

.list-inline-item:not(:last-child) {
    margin-right: .5rem
}

.initialism {
    font-size: 90%;
    text-transform: uppercase
}

.blockquote {
    margin-bottom: 1rem;
    font-size: 1.25rem
}

.blockquote-footer {
    display: block;
    font-size: 80%;
    color: #6c757d
}

.blockquote-footer::before {
    content: "\2014\00A0"
}

.img-fluid {
    max-width: 100%;
    height: auto
}

.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: auto
}

.figure {
    display: inline-block
}

.figure-img {
    margin-bottom: .5rem;
    line-height: 1
}

.figure-caption {
    font-size: 90%;
    color: #6c757d
}

code {
    font-size: 87.5%;
    color: #e83e8c;
    word-break: break-word
}

a>code {
    color: inherit
}

kbd {
    padding: .2rem .4rem;
    font-size: 87.5%;
    color: #fff;
    background-color: #212529;
    border-radius: .2rem
}

kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700
}

pre {
    display: block;
    font-size: 87.5%;
    color: #212529
}

pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal
}

.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll
}

.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

@media (min-width:576px) {
    .container {
        max-width: 540px
    }
}

@media (min-width:768px) {
    .container {
        max-width: 720px
    }
}

@media (min-width:992px) {
    .container {
        max-width: 960px
    }
}

@media (min-width:1200px) {
    .container {
        max-width: 1140px
    }
}

.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px
}

.no-gutters {
    margin-right: 0;
    margin-left: 0
}

.no-gutters>.col,
.no-gutters>[class*=col-] {
    padding-right: 0;
    padding-left: 0
}

.col,
.col-1,
.col-10,
.col-11,
.col-12,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-auto,
.col-lg,
.col-lg-1,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-auto,
.col-md,
.col-md-1,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-auto,
.col-sm,
.col-sm-1,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-auto,
.col-xl,
.col-xl-1,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px
}

.col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%
}

.col-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%
}

.col-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%
}

.col-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%
}

.col-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%
}

.col-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%
}

.col-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%
}

.col-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%
}

.col-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%
}

.col-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%
}

.col-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%
}

.col-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%
}

.col-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%
}

.col-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%
}

.order-first {
    -ms-flex-order: -1;
    order: -1
}

.order-last {
    -ms-flex-order: 13;
    order: 13
}

.order-0 {
    -ms-flex-order: 0;
    order: 0
}

.order-1 {
    -ms-flex-order: 1;
    order: 1
}

.order-2 {
    -ms-flex-order: 2;
    order: 2
}

.order-3 {
    -ms-flex-order: 3;
    order: 3
}

.order-4 {
    -ms-flex-order: 4;
    order: 4
}

.order-5 {
    -ms-flex-order: 5;
    order: 5
}

.order-6 {
    -ms-flex-order: 6;
    order: 6
}

.order-7 {
    -ms-flex-order: 7;
    order: 7
}

.order-8 {
    -ms-flex-order: 8;
    order: 8
}

.order-9 {
    -ms-flex-order: 9;
    order: 9
}

.order-10 {
    -ms-flex-order: 10;
    order: 10
}

.order-11 {
    -ms-flex-order: 11;
    order: 11
}

.order-12 {
    -ms-flex-order: 12;
    order: 12
}

.offset-1 {
    margin-left: 8.333333%
}

.offset-2 {
    margin-left: 16.666667%
}

.offset-3 {
    margin-left: 25%
}

.offset-4 {
    margin-left: 33.333333%
}

.offset-5 {
    margin-left: 41.666667%
}

.offset-6 {
    margin-left: 50%
}

.offset-7 {
    margin-left: 58.333333%
}

.offset-8 {
    margin-left: 66.666667%
}

.offset-9 {
    margin-left: 75%
}

.offset-10 {
    margin-left: 83.333333%
}

.offset-11 {
    margin-left: 91.666667%
}

@media (min-width:576px) {
    .col-sm {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }

    .col-sm-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-sm-1 {
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }

    .col-sm-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-sm-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-sm-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .col-sm-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }

    .col-sm-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-sm-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }

    .col-sm-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }

    .col-sm-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-sm-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    .col-sm-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }

    .col-sm-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-sm-first {
        -ms-flex-order: -1;
        order: -1
    }

    .order-sm-last {
        -ms-flex-order: 13;
        order: 13
    }

    .order-sm-0 {
        -ms-flex-order: 0;
        order: 0
    }

    .order-sm-1 {
        -ms-flex-order: 1;
        order: 1
    }

    .order-sm-2 {
        -ms-flex-order: 2;
        order: 2
    }

    .order-sm-3 {
        -ms-flex-order: 3;
        order: 3
    }

    .order-sm-4 {
        -ms-flex-order: 4;
        order: 4
    }

    .order-sm-5 {
        -ms-flex-order: 5;
        order: 5
    }

    .order-sm-6 {
        -ms-flex-order: 6;
        order: 6
    }

    .order-sm-7 {
        -ms-flex-order: 7;
        order: 7
    }

    .order-sm-8 {
        -ms-flex-order: 8;
        order: 8
    }

    .order-sm-9 {
        -ms-flex-order: 9;
        order: 9
    }

    .order-sm-10 {
        -ms-flex-order: 10;
        order: 10
    }

    .order-sm-11 {
        -ms-flex-order: 11;
        order: 11
    }

    .order-sm-12 {
        -ms-flex-order: 12;
        order: 12
    }

    .offset-sm-0 {
        margin-left: 0
    }

    .offset-sm-1 {
        margin-left: 8.333333%
    }

    .offset-sm-2 {
        margin-left: 16.666667%
    }

    .offset-sm-3 {
        margin-left: 25%
    }

    .offset-sm-4 {
        margin-left: 33.333333%
    }

    .offset-sm-5 {
        margin-left: 41.666667%
    }

    .offset-sm-6 {
        margin-left: 50%
    }

    .offset-sm-7 {
        margin-left: 58.333333%
    }

    .offset-sm-8 {
        margin-left: 66.666667%
    }

    .offset-sm-9 {
        margin-left: 75%
    }

    .offset-sm-10 {
        margin-left: 83.333333%
    }

    .offset-sm-11 {
        margin-left: 91.666667%
    }
}

@media (min-width:768px) {
    .col-md {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }

    .col-md-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-md-1 {
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }

    .col-md-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-md-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-md-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .col-md-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }

    .col-md-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-md-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }

    .col-md-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }

    .col-md-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-md-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    .col-md-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }

    .col-md-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-md-first {
        -ms-flex-order: -1;
        order: -1
    }

    .order-md-last {
        -ms-flex-order: 13;
        order: 13
    }

    .order-md-0 {
        -ms-flex-order: 0;
        order: 0
    }

    .order-md-1 {
        -ms-flex-order: 1;
        order: 1
    }

    .order-md-2 {
        -ms-flex-order: 2;
        order: 2
    }

    .order-md-3 {
        -ms-flex-order: 3;
        order: 3
    }

    .order-md-4 {
        -ms-flex-order: 4;
        order: 4
    }

    .order-md-5 {
        -ms-flex-order: 5;
        order: 5
    }

    .order-md-6 {
        -ms-flex-order: 6;
        order: 6
    }

    .order-md-7 {
        -ms-flex-order: 7;
        order: 7
    }

    .order-md-8 {
        -ms-flex-order: 8;
        order: 8
    }

    .order-md-9 {
        -ms-flex-order: 9;
        order: 9
    }

    .order-md-10 {
        -ms-flex-order: 10;
        order: 10
    }

    .order-md-11 {
        -ms-flex-order: 11;
        order: 11
    }

    .order-md-12 {
        -ms-flex-order: 12;
        order: 12
    }

    .offset-md-0 {
        margin-left: 0
    }

    .offset-md-1 {
        margin-left: 8.333333%
    }

    .offset-md-2 {
        margin-left: 16.666667%
    }

    .offset-md-3 {
        margin-left: 25%
    }

    .offset-md-4 {
        margin-left: 33.333333%
    }

    .offset-md-5 {
        margin-left: 41.666667%
    }

    .offset-md-6 {
        margin-left: 50%
    }

    .offset-md-7 {
        margin-left: 58.333333%
    }

    .offset-md-8 {
        margin-left: 66.666667%
    }

    .offset-md-9 {
        margin-left: 75%
    }

    .offset-md-10 {
        margin-left: 83.333333%
    }

    .offset-md-11 {
        margin-left: 91.666667%
    }
}

@media (min-width:992px) {
    .col-lg {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }

    .col-lg-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-lg-1 {
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }

    .col-lg-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-lg-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-lg-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .col-lg-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }

    .col-lg-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-lg-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }

    .col-lg-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }

    .col-lg-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-lg-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    .col-lg-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }

    .col-lg-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-lg-first {
        -ms-flex-order: -1;
        order: -1
    }

    .order-lg-last {
        -ms-flex-order: 13;
        order: 13
    }

    .order-lg-0 {
        -ms-flex-order: 0;
        order: 0
    }

    .order-lg-1 {
        -ms-flex-order: 1;
        order: 1
    }

    .order-lg-2 {
        -ms-flex-order: 2;
        order: 2
    }

    .order-lg-3 {
        -ms-flex-order: 3;
        order: 3
    }

    .order-lg-4 {
        -ms-flex-order: 4;
        order: 4
    }

    .order-lg-5 {
        -ms-flex-order: 5;
        order: 5
    }

    .order-lg-6 {
        -ms-flex-order: 6;
        order: 6
    }

    .order-lg-7 {
        -ms-flex-order: 7;
        order: 7
    }

    .order-lg-8 {
        -ms-flex-order: 8;
        order: 8
    }

    .order-lg-9 {
        -ms-flex-order: 9;
        order: 9
    }

    .order-lg-10 {
        -ms-flex-order: 10;
        order: 10
    }

    .order-lg-11 {
        -ms-flex-order: 11;
        order: 11
    }

    .order-lg-12 {
        -ms-flex-order: 12;
        order: 12
    }

    .offset-lg-0 {
        margin-left: 0
    }

    .offset-lg-1 {
        margin-left: 8.333333%
    }

    .offset-lg-2 {
        margin-left: 16.666667%
    }

    .offset-lg-3 {
        margin-left: 25%
    }

    .offset-lg-4 {
        margin-left: 33.333333%
    }

    .offset-lg-5 {
        margin-left: 41.666667%
    }

    .offset-lg-6 {
        margin-left: 50%
    }

    .offset-lg-7 {
        margin-left: 58.333333%
    }

    .offset-lg-8 {
        margin-left: 66.666667%
    }

    .offset-lg-9 {
        margin-left: 75%
    }

    .offset-lg-10 {
        margin-left: 83.333333%
    }

    .offset-lg-11 {
        margin-left: 91.666667%
    }
}

@media (min-width:1200px) {
    .col-xl {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }

    .col-xl-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-xl-1 {
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }

    .col-xl-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-xl-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-xl-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .col-xl-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }

    .col-xl-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-xl-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }

    .col-xl-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }

    .col-xl-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-xl-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    .col-xl-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }

    .col-xl-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-xl-first {
        -ms-flex-order: -1;
        order: -1
    }

    .order-xl-last {
        -ms-flex-order: 13;
        order: 13
    }

    .order-xl-0 {
        -ms-flex-order: 0;
        order: 0
    }

    .order-xl-1 {
        -ms-flex-order: 1;
        order: 1
    }

    .order-xl-2 {
        -ms-flex-order: 2;
        order: 2
    }

    .order-xl-3 {
        -ms-flex-order: 3;
        order: 3
    }

    .order-xl-4 {
        -ms-flex-order: 4;
        order: 4
    }

    .order-xl-5 {
        -ms-flex-order: 5;
        order: 5
    }

    .order-xl-6 {
        -ms-flex-order: 6;
        order: 6
    }

    .order-xl-7 {
        -ms-flex-order: 7;
        order: 7
    }

    .order-xl-8 {
        -ms-flex-order: 8;
        order: 8
    }

    .order-xl-9 {
        -ms-flex-order: 9;
        order: 9
    }

    .order-xl-10 {
        -ms-flex-order: 10;
        order: 10
    }

    .order-xl-11 {
        -ms-flex-order: 11;
        order: 11
    }

    .order-xl-12 {
        -ms-flex-order: 12;
        order: 12
    }

    .offset-xl-0 {
        margin-left: 0
    }

    .offset-xl-1 {
        margin-left: 8.333333%
    }

    .offset-xl-2 {
        margin-left: 16.666667%
    }

    .offset-xl-3 {
        margin-left: 25%
    }

    .offset-xl-4 {
        margin-left: 33.333333%
    }

    .offset-xl-5 {
        margin-left: 41.666667%
    }

    .offset-xl-6 {
        margin-left: 50%
    }

    .offset-xl-7 {
        margin-left: 58.333333%
    }

    .offset-xl-8 {
        margin-left: 66.666667%
    }

    .offset-xl-9 {
        margin-left: 75%
    }

    .offset-xl-10 {
        margin-left: 83.333333%
    }

    .offset-xl-11 {
        margin-left: 91.666667%
    }
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529
}

.table td,
.table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6
}

.table tbody+tbody {
    border-top: 2px solid #dee2e6
}

.table-sm td,
.table-sm th {
    padding: .3rem
}

.table-bordered {
    border: 1px solid #dee2e6
}

.table-bordered td,
.table-bordered th {
    border: 1px solid #dee2e6
}

.table-bordered thead td,
.table-bordered thead th {
    border-bottom-width: 2px
}

.table-borderless tbody+tbody,
.table-borderless td,
.table-borderless th,
.table-borderless thead th {
    border: 0
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, .05)
}

.table-hover tbody tr:hover {
    color: #212529;
    background-color: rgba(0, 0, 0, .075)
}

.table-primary,
.table-primary>td,
.table-primary>th {
    background-color: #b8daff
}

.table-primary tbody+tbody,
.table-primary td,
.table-primary th,
.table-primary thead th {
    border-color: #7abaff
}

.table-hover .table-primary:hover {
    background-color: #9fcdff
}

.table-hover .table-primary:hover>td,
.table-hover .table-primary:hover>th {
    background-color: #9fcdff
}

.table-secondary,
.table-secondary>td,
.table-secondary>th {
    background-color: #d6d8db
}

.table-secondary tbody+tbody,
.table-secondary td,
.table-secondary th,
.table-secondary thead th {
    border-color: #b3b7bb
}

.table-hover .table-secondary:hover {
    background-color: #c8cbcf
}

.table-hover .table-secondary:hover>td,
.table-hover .table-secondary:hover>th {
    background-color: #c8cbcf
}

.table-success,
.table-success>td,
.table-success>th {
    background-color: #c3e6cb
}

.table-success tbody+tbody,
.table-success td,
.table-success th,
.table-success thead th {
    border-color: #8fd19e
}

.table-hover .table-success:hover {
    background-color: #b1dfbb
}

.table-hover .table-success:hover>td,
.table-hover .table-success:hover>th {
    background-color: #b1dfbb
}

.table-info,
.table-info>td,
.table-info>th {
    background-color: #bee5eb
}

.table-info tbody+tbody,
.table-info td,
.table-info th,
.table-info thead th {
    border-color: #86cfda
}

.table-hover .table-info:hover {
    background-color: #abdde5
}

.table-hover .table-info:hover>td,
.table-hover .table-info:hover>th {
    background-color: #abdde5
}

.table-warning,
.table-warning>td,
.table-warning>th {
    background-color: #ffeeba
}

.table-warning tbody+tbody,
.table-warning td,
.table-warning th,
.table-warning thead th {
    border-color: #ffdf7e
}

.table-hover .table-warning:hover {
    background-color: #ffe8a1
}

.table-hover .table-warning:hover>td,
.table-hover .table-warning:hover>th {
    background-color: #ffe8a1
}

.table-danger,
.table-danger>td,
.table-danger>th {
    background-color: #f5c6cb
}

.table-danger tbody+tbody,
.table-danger td,
.table-danger th,
.table-danger thead th {
    border-color: #ed969e
}

.table-hover .table-danger:hover {
    background-color: #f1b0b7
}

.table-hover .table-danger:hover>td,
.table-hover .table-danger:hover>th {
    background-color: #f1b0b7
}

.table-light,
.table-light>td,
.table-light>th {
    background-color: #fdfdfe
}

.table-light tbody+tbody,
.table-light td,
.table-light th,
.table-light thead th {
    border-color: #fbfcfc
}

.table-hover .table-light:hover {
    background-color: #ececf6
}

.table-hover .table-light:hover>td,
.table-hover .table-light:hover>th {
    background-color: #ececf6
}

.table-dark,
.table-dark>td,
.table-dark>th {
    background-color: #c6c8ca
}

.table-dark tbody+tbody,
.table-dark td,
.table-dark th,
.table-dark thead th {
    border-color: #95999c
}

.table-hover .table-dark:hover {
    background-color: #b9bbbe
}

.table-hover .table-dark:hover>td,
.table-hover .table-dark:hover>th {
    background-color: #b9bbbe
}

.table-active,
.table-active>td,
.table-active>th {
    background-color: rgba(0, 0, 0, .075)
}

.table-hover .table-active:hover {
    background-color: rgba(0, 0, 0, .075)
}

.table-hover .table-active:hover>td,
.table-hover .table-active:hover>th {
    background-color: rgba(0, 0, 0, .075)
}

.table .thead-dark th {
    color: #fff;
    background-color: #343a40;
    border-color: #454d55
}

.table .thead-light th {
    color: #495057;
    background-color: #e9ecef;
    border-color: #dee2e6
}

.table-dark {
    color: #fff;
    background-color: #343a40
}

.table-dark td,
.table-dark th,
.table-dark thead th {
    border-color: #454d55
}

.table-dark.table-bordered {
    border: 0
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, .05)
}

.table-dark.table-hover tbody tr:hover {
    color: #fff;
    background-color: rgba(255, 255, 255, .075)
}

@media (max-width:575.98px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-sm>.table-bordered {
        border: 0
    }
}

@media (max-width:767.98px) {
    .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-md>.table-bordered {
        border: 0
    }
}

@media (max-width:991.98px) {
    .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-lg>.table-bordered {
        border: 0
    }
}

@media (max-width:1199.98px) {
    .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-xl>.table-bordered {
        border: 0
    }
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch
}

.table-responsive>.table-bordered {
    border: 0
}

.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .form-control {
        transition: none
    }
}

.form-control::-ms-expand {
    background-color: transparent;
    border: 0
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
}

.form-control::-webkit-input-placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control::-moz-placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control:-ms-input-placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control::-ms-input-placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control::placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control:disabled,
.form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1
}

select.form-control:focus::-ms-value {
    color: #495057;
    background-color: #fff
}

.form-control-file,
.form-control-range {
    display: block;
    width: 100%
}

.col-form-label {
    padding-top: calc(.375rem + 1px);
    padding-bottom: calc(.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5
}

.col-form-label-lg {
    padding-top: calc(.5rem + 1px);
    padding-bottom: calc(.5rem + 1px);
    font-size: 1.25rem;
    line-height: 1.5
}

.col-form-label-sm {
    padding-top: calc(.25rem + 1px);
    padding-bottom: calc(.25rem + 1px);
    font-size: .875rem;
    line-height: 1.5
}

.form-control-plaintext {
    display: block;
    width: 100%;
    padding-top: .375rem;
    padding-bottom: .375rem;
    margin-bottom: 0;
    line-height: 1.5;
    color: #212529;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0
}

.form-control-plaintext.form-control-lg,
.form-control-plaintext.form-control-sm {
    padding-right: 0;
    padding-left: 0
}

.form-control-sm {
    height: calc(1.5em + .5rem + 2px);
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem
}

.form-control-lg {
    height: calc(1.5em + 1rem + 2px);
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem
}

select.form-control[multiple],
select.form-control[size] {
    height: auto
}

textarea.form-control {
    height: auto
}

.form-group {
    margin-bottom: 1rem
}

.form-text {
    display: block;
    margin-top: .25rem
}

.form-row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px
}

.form-row>.col,
.form-row>[class*=col-] {
    padding-right: 5px;
    padding-left: 5px
}

.form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem
}

.form-check-input {
    position: absolute;
    margin-top: .3rem;
    margin-left: -1.25rem
}

.form-check-input:disabled~.form-check-label {
    color: #6c757d
}

.form-check-label {
    margin-bottom: 0
}

.form-check-inline {
    display: -ms-inline-flexbox;
    display: inline-flex;
    -ms-flex-align: center;
    align-items: center;
    padding-left: 0;
    margin-right: .75rem
}

.form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: .3125rem;
    margin-left: 0
}

.valid-feedback {
    display: none;
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #28a745
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: .25rem .5rem;
    margin-top: .1rem;
    font-size: .875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(40, 167, 69, .9);
    border-radius: .25rem
}

.form-control.is-valid,
.was-validated .form-control:valid {
    border-color: #28a745;
    padding-right: calc(1.5em + .75rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: center right calc(.375em + .1875rem);
    background-size: calc(.75em + .375rem) calc(.75em + .375rem)
}

.form-control.is-valid:focus,
.was-validated .form-control:valid:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
}

.form-control.is-valid~.valid-feedback,
.form-control.is-valid~.valid-tooltip,
.was-validated .form-control:valid~.valid-feedback,
.was-validated .form-control:valid~.valid-tooltip {
    display: block
}

.was-validated textarea.form-control:valid,
textarea.form-control.is-valid {
    padding-right: calc(1.5em + .75rem);
    background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
}

.custom-select.is-valid,
.was-validated .custom-select:valid {
    border-color: #28a745;
    padding-right: calc((1em + .75rem) * 3 / 4 + 1.75rem);
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem)
}

.custom-select.is-valid:focus,
.was-validated .custom-select:valid:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
}

.custom-select.is-valid~.valid-feedback,
.custom-select.is-valid~.valid-tooltip,
.was-validated .custom-select:valid~.valid-feedback,
.was-validated .custom-select:valid~.valid-tooltip {
    display: block
}

.form-control-file.is-valid~.valid-feedback,
.form-control-file.is-valid~.valid-tooltip,
.was-validated .form-control-file:valid~.valid-feedback,
.was-validated .form-control-file:valid~.valid-tooltip {
    display: block
}

.form-check-input.is-valid~.form-check-label,
.was-validated .form-check-input:valid~.form-check-label {
    color: #28a745
}

.form-check-input.is-valid~.valid-feedback,
.form-check-input.is-valid~.valid-tooltip,
.was-validated .form-check-input:valid~.valid-feedback,
.was-validated .form-check-input:valid~.valid-tooltip {
    display: block
}

.custom-control-input.is-valid~.custom-control-label,
.was-validated .custom-control-input:valid~.custom-control-label {
    color: #28a745
}

.custom-control-input.is-valid~.custom-control-label::before,
.was-validated .custom-control-input:valid~.custom-control-label::before {
    border-color: #28a745
}

.custom-control-input.is-valid~.valid-feedback,
.custom-control-input.is-valid~.valid-tooltip,
.was-validated .custom-control-input:valid~.valid-feedback,
.was-validated .custom-control-input:valid~.valid-tooltip {
    display: block
}

.custom-control-input.is-valid:checked~.custom-control-label::before,
.was-validated .custom-control-input:valid:checked~.custom-control-label::before {
    border-color: #34ce57;
    background-color: #34ce57
}

.custom-control-input.is-valid:focus~.custom-control-label::before,
.was-validated .custom-control-input:valid:focus~.custom-control-label::before {
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
}

.custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before,
.was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before {
    border-color: #28a745
}

.custom-file-input.is-valid~.custom-file-label,
.was-validated .custom-file-input:valid~.custom-file-label {
    border-color: #28a745
}

.custom-file-input.is-valid~.valid-feedback,
.custom-file-input.is-valid~.valid-tooltip,
.was-validated .custom-file-input:valid~.valid-feedback,
.was-validated .custom-file-input:valid~.valid-tooltip {
    display: block
}

.custom-file-input.is-valid:focus~.custom-file-label,
.was-validated .custom-file-input:valid:focus~.custom-file-label {
    border-color: #28a745;
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #dc3545
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: .25rem .5rem;
    margin-top: .1rem;
    font-size: .875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(220, 53, 69, .9);
    border-radius: .25rem
}

.form-control.is-invalid,
.was-validated .form-control:invalid {
    border-color: #dc3545;
    padding-right: calc(1.5em + .75rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
    background-repeat: no-repeat;
    background-position: center right calc(.375em + .1875rem);
    background-size: calc(.75em + .375rem) calc(.75em + .375rem)
}

.form-control.is-invalid:focus,
.was-validated .form-control:invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
}

.form-control.is-invalid~.invalid-feedback,
.form-control.is-invalid~.invalid-tooltip,
.was-validated .form-control:invalid~.invalid-feedback,
.was-validated .form-control:invalid~.invalid-tooltip {
    display: block
}

.was-validated textarea.form-control:invalid,
textarea.form-control.is-invalid {
    padding-right: calc(1.5em + .75rem);
    background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
}

.custom-select.is-invalid,
.was-validated .custom-select:invalid {
    border-color: #dc3545;
    padding-right: calc((1em + .75rem) * 3 / 4 + 1.75rem);
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") #fff no-repeat center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem)
}

.custom-select.is-invalid:focus,
.was-validated .custom-select:invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
}

.custom-select.is-invalid~.invalid-feedback,
.custom-select.is-invalid~.invalid-tooltip,
.was-validated .custom-select:invalid~.invalid-feedback,
.was-validated .custom-select:invalid~.invalid-tooltip {
    display: block
}

.form-control-file.is-invalid~.invalid-feedback,
.form-control-file.is-invalid~.invalid-tooltip,
.was-validated .form-control-file:invalid~.invalid-feedback,
.was-validated .form-control-file:invalid~.invalid-tooltip {
    display: block
}

.form-check-input.is-invalid~.form-check-label,
.was-validated .form-check-input:invalid~.form-check-label {
    color: #dc3545
}

.form-check-input.is-invalid~.invalid-feedback,
.form-check-input.is-invalid~.invalid-tooltip,
.was-validated .form-check-input:invalid~.invalid-feedback,
.was-validated .form-check-input:invalid~.invalid-tooltip {
    display: block
}

.custom-control-input.is-invalid~.custom-control-label,
.was-validated .custom-control-input:invalid~.custom-control-label {
    color: #dc3545
}

.custom-control-input.is-invalid~.custom-control-label::before,
.was-validated .custom-control-input:invalid~.custom-control-label::before {
    border-color: #dc3545
}

.custom-control-input.is-invalid~.invalid-feedback,
.custom-control-input.is-invalid~.invalid-tooltip,
.was-validated .custom-control-input:invalid~.invalid-feedback,
.was-validated .custom-control-input:invalid~.invalid-tooltip {
    display: block
}

.custom-control-input.is-invalid:checked~.custom-control-label::before,
.was-validated .custom-control-input:invalid:checked~.custom-control-label::before {
    border-color: #e4606d;
    background-color: #e4606d
}

.custom-control-input.is-invalid:focus~.custom-control-label::before,
.was-validated .custom-control-input:invalid:focus~.custom-control-label::before {
    box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
}

.custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before,
.was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before {
    border-color: #dc3545
}

.custom-file-input.is-invalid~.custom-file-label,
.was-validated .custom-file-input:invalid~.custom-file-label {
    border-color: #dc3545
}

.custom-file-input.is-invalid~.invalid-feedback,
.custom-file-input.is-invalid~.invalid-tooltip,
.was-validated .custom-file-input:invalid~.invalid-feedback,
.was-validated .custom-file-input:invalid~.invalid-tooltip {
    display: block
}

.custom-file-input.is-invalid:focus~.custom-file-label,
.was-validated .custom-file-input:invalid:focus~.custom-file-label {
    border-color: #dc3545;
    box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
}

.form-inline {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -ms-flex-align: center;
    align-items: center
}

.form-inline .form-check {
    width: 100%
}

@media (min-width:576px) {
    .form-inline label {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: 0
    }

    .form-inline .form-group {
        display: -ms-flexbox;
        display: flex;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 0
    }

    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle
    }

    .form-inline .form-control-plaintext {
        display: inline-block
    }

    .form-inline .custom-select,
    .form-inline .input-group {
        width: auto
    }

    .form-inline .form-check {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: auto;
        padding-left: 0
    }

    .form-inline .form-check-input {
        position: relative;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        margin-top: 0;
        margin-right: .25rem;
        margin-left: 0
    }

    .form-inline .custom-control {
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .form-inline .custom-control-label {
        margin-bottom: 0
    }
}

.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .btn {
        transition: none
    }
}

.btn:hover {
    color: #212529;
    text-decoration: none
}

.btn.focus,
.btn:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
}

.btn.disabled,
.btn:disabled {
    opacity: .65
}

a.btn.disabled,
fieldset:disabled a.btn {
    pointer-events: none
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-primary:hover {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc
}

.btn-primary.focus,
.btn-primary:focus {
    box-shadow: 0 0 0 .2rem rgba(38, 143, 255, .5)
}

.btn-primary.disabled,
.btn-primary:disabled {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-primary:not(:disabled):not(.disabled).active,
.btn-primary:not(:disabled):not(.disabled):active,
.show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #0062cc;
    border-color: #005cbf
}

.btn-primary:not(:disabled):not(.disabled).active:focus,
.btn-primary:not(:disabled):not(.disabled):active:focus,
.show>.btn-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(38, 143, 255, .5)
}

.btn-secondary {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-secondary:hover {
    color: #fff;
    background-color: #5a6268;
    border-color: #545b62
}

.btn-secondary.focus,
.btn-secondary:focus {
    box-shadow: 0 0 0 .2rem rgba(130, 138, 145, .5)
}

.btn-secondary.disabled,
.btn-secondary:disabled {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-secondary:not(:disabled):not(.disabled).active,
.btn-secondary:not(:disabled):not(.disabled):active,
.show>.btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #545b62;
    border-color: #4e555b
}

.btn-secondary:not(:disabled):not(.disabled).active:focus,
.btn-secondary:not(:disabled):not(.disabled):active:focus,
.show>.btn-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(130, 138, 145, .5)
}

.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:hover {
    color: #fff;
    background-color: #218838;
    border-color: #1e7e34
}

.btn-success.focus,
.btn-success:focus {
    box-shadow: 0 0 0 .2rem rgba(72, 180, 97, .5)
}

.btn-success.disabled,
.btn-success:disabled {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:not(:disabled):not(.disabled).active,
.btn-success:not(:disabled):not(.disabled):active,
.show>.btn-success.dropdown-toggle {
    color: #fff;
    background-color: #1e7e34;
    border-color: #1c7430
}

.btn-success:not(:disabled):not(.disabled).active:focus,
.btn-success:not(:disabled):not(.disabled):active:focus,
.show>.btn-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(72, 180, 97, .5)
}

.btn-info {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-info:hover {
    color: #fff;
    background-color: #138496;
    border-color: #117a8b
}

.btn-info.focus,
.btn-info:focus {
    box-shadow: 0 0 0 .2rem rgba(58, 176, 195, .5)
}

.btn-info.disabled,
.btn-info:disabled {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-info:not(:disabled):not(.disabled).active,
.btn-info:not(:disabled):not(.disabled):active,
.show>.btn-info.dropdown-toggle {
    color: #fff;
    background-color: #117a8b;
    border-color: #10707f
}

.btn-info:not(:disabled):not(.disabled).active:focus,
.btn-info:not(:disabled):not(.disabled):active:focus,
.show>.btn-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(58, 176, 195, .5)
}

.btn-warning {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-warning:hover {
    color: #212529;
    background-color: #e0a800;
    border-color: #d39e00
}

.btn-warning.focus,
.btn-warning:focus {
    box-shadow: 0 0 0 .2rem rgba(222, 170, 12, .5)
}

.btn-warning.disabled,
.btn-warning:disabled {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-warning:not(:disabled):not(.disabled).active,
.btn-warning:not(:disabled):not(.disabled):active,
.show>.btn-warning.dropdown-toggle {
    color: #212529;
    background-color: #d39e00;
    border-color: #c69500
}

.btn-warning:not(:disabled):not(.disabled).active:focus,
.btn-warning:not(:disabled):not(.disabled):active:focus,
.show>.btn-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(222, 170, 12, .5)
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-danger:hover {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130
}

.btn-danger.focus,
.btn-danger:focus {
    box-shadow: 0 0 0 .2rem rgba(225, 83, 97, .5)
}

.btn-danger.disabled,
.btn-danger:disabled {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-danger:not(:disabled):not(.disabled).active,
.btn-danger:not(:disabled):not(.disabled):active,
.show>.btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #bd2130;
    border-color: #b21f2d
}

.btn-danger:not(:disabled):not(.disabled).active:focus,
.btn-danger:not(:disabled):not(.disabled):active:focus,
.show>.btn-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(225, 83, 97, .5)
}

.btn-light {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5
}

.btn-light.focus,
.btn-light:focus {
    box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5)
}

.btn-light.disabled,
.btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-light:not(:disabled):not(.disabled).active,
.btn-light:not(:disabled):not(.disabled):active,
.show>.btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df
}

.btn-light:not(:disabled):not(.disabled).active:focus,
.btn-light:not(:disabled):not(.disabled):active:focus,
.show>.btn-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5)
}

.btn-dark {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-dark:hover {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124
}

.btn-dark.focus,
.btn-dark:focus {
    box-shadow: 0 0 0 .2rem rgba(82, 88, 93, .5)
}

.btn-dark.disabled,
.btn-dark:disabled {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-dark:not(:disabled):not(.disabled).active,
.btn-dark:not(:disabled):not(.disabled):active,
.show>.btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d
}

.btn-dark:not(:disabled):not(.disabled).active:focus,
.btn-dark:not(:disabled):not(.disabled):active:focus,
.show>.btn-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(82, 88, 93, .5)
}

.btn-outline-primary {
    color: #007bff;
    border-color: #007bff
}

.btn-outline-primary:hover {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-outline-primary.focus,
.btn-outline-primary:focus {
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
}

.btn-outline-primary.disabled,
.btn-outline-primary:disabled {
    color: #007bff;
    background-color: transparent
}

.btn-outline-primary:not(:disabled):not(.disabled).active,
.btn-outline-primary:not(:disabled):not(.disabled):active,
.show>.btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.btn-outline-primary:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
}

.btn-outline-secondary {
    color: #6c757d;
    border-color: #6c757d
}

.btn-outline-secondary:hover {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-outline-secondary.focus,
.btn-outline-secondary:focus {
    box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
}

.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled {
    color: #6c757d;
    background-color: transparent
}

.btn-outline-secondary:not(:disabled):not(.disabled).active,
.btn-outline-secondary:not(:disabled):not(.disabled):active,
.show>.btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
}

.btn-outline-success {
    color: #28a745;
    border-color: #28a745
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-outline-success.focus,
.btn-outline-success:focus {
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
}

.btn-outline-success.disabled,
.btn-outline-success:disabled {
    color: #28a745;
    background-color: transparent
}

.btn-outline-success:not(:disabled):not(.disabled).active,
.btn-outline-success:not(:disabled):not(.disabled):active,
.show>.btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-outline-success:not(:disabled):not(.disabled).active:focus,
.btn-outline-success:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
}

.btn-outline-info {
    color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info:hover {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info.focus,
.btn-outline-info:focus {
    box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
}

.btn-outline-info.disabled,
.btn-outline-info:disabled {
    color: #17a2b8;
    background-color: transparent
}

.btn-outline-info:not(:disabled):not(.disabled).active,
.btn-outline-info:not(:disabled):not(.disabled):active,
.show>.btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info:not(:disabled):not(.disabled).active:focus,
.btn-outline-info:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
}

.btn-outline-warning {
    color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning:hover {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning.focus,
.btn-outline-warning:focus {
    box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
}

.btn-outline-warning.disabled,
.btn-outline-warning:disabled {
    color: #ffc107;
    background-color: transparent
}

.btn-outline-warning:not(:disabled):not(.disabled).active,
.btn-outline-warning:not(:disabled):not(.disabled):active,
.show>.btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
}

.btn-outline-danger {
    color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger.focus,
.btn-outline-danger:focus {
    box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
}

.btn-outline-danger.disabled,
.btn-outline-danger:disabled {
    color: #dc3545;
    background-color: transparent
}

.btn-outline-danger:not(:disabled):not(.disabled).active,
.btn-outline-danger:not(:disabled):not(.disabled):active,
.show>.btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.btn-outline-danger:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
}

.btn-outline-light {
    color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light.focus,
.btn-outline-light:focus {
    box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
}

.btn-outline-light.disabled,
.btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent
}

.btn-outline-light:not(:disabled):not(.disabled).active,
.btn-outline-light:not(:disabled):not(.disabled):active,
.show>.btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light:not(:disabled):not(.disabled).active:focus,
.btn-outline-light:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
}

.btn-outline-dark {
    color: #343a40;
    border-color: #343a40
}

.btn-outline-dark:hover {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-outline-dark.focus,
.btn-outline-dark:focus {
    box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
}

.btn-outline-dark.disabled,
.btn-outline-dark:disabled {
    color: #343a40;
    background-color: transparent
}

.btn-outline-dark:not(:disabled):not(.disabled).active,
.btn-outline-dark:not(:disabled):not(.disabled):active,
.show>.btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.btn-outline-dark:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
}

.btn-link {
    font-weight: 400;
    color: #007bff;
    text-decoration: none
}

.btn-link:hover {
    color: #0056b3;
    text-decoration: underline
}

.btn-link.focus,
.btn-link:focus {
    text-decoration: underline;
    box-shadow: none
}

.btn-link.disabled,
.btn-link:disabled {
    color: #6c757d;
    pointer-events: none
}

.btn-group-lg>.btn,
.btn-lg {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem
}

.btn-group-sm>.btn,
.btn-sm {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem
}

.btn-block {
    display: block;
    width: 100%
}

.btn-block+.btn-block {
    margin-top: .5rem
}

input[type=button].btn-block,
input[type=reset].btn-block,
input[type=submit].btn-block {
    width: 100%
}

.fade {
    transition: opacity .15s linear
}

@media (prefers-reduced-motion:reduce) {
    .fade {
        transition: none
    }
}

.fade:not(.show) {
    opacity: 0
}

.collapse:not(.show) {
    display: none
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    transition: height .35s ease
}

@media (prefers-reduced-motion:reduce) {
    .collapsing {
        transition: none
    }
}

.dropdown,
.dropleft,
.dropright,
.dropup {
    position: relative
}

.dropdown-toggle {
    white-space: nowrap
}

.dropdown-toggle::after {
    display: inline-block;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: .3em solid;
    border-right: .3em solid transparent;
    border-bottom: 0;
    border-left: .3em solid transparent
}

.dropdown-toggle:empty::after {
    margin-left: 0
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: .5rem 0;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, .15);
    border-radius: .25rem
}

.dropdown-menu-left {
    right: auto;
    left: 0
}

.dropdown-menu-right {
    right: 0;
    left: auto
}

@media (min-width:576px) {
    .dropdown-menu-sm-left {
        right: auto;
        left: 0
    }

    .dropdown-menu-sm-right {
        right: 0;
        left: auto
    }
}

@media (min-width:768px) {
    .dropdown-menu-md-left {
        right: auto;
        left: 0
    }

    .dropdown-menu-md-right {
        right: 0;
        left: auto
    }
}

@media (min-width:992px) {
    .dropdown-menu-lg-left {
        right: auto;
        left: 0
    }

    .dropdown-menu-lg-right {
        right: 0;
        left: auto
    }
}

@media (min-width:1200px) {
    .dropdown-menu-xl-left {
        right: auto;
        left: 0
    }

    .dropdown-menu-xl-right {
        right: 0;
        left: auto
    }
}

.dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: .125rem
}

.dropup .dropdown-toggle::after {
    display: inline-block;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: 0;
    border-right: .3em solid transparent;
    border-bottom: .3em solid;
    border-left: .3em solid transparent
}

.dropup .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropright .dropdown-menu {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: .125rem
}

.dropright .dropdown-toggle::after {
    display: inline-block;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: .3em solid transparent;
    border-right: 0;
    border-bottom: .3em solid transparent;
    border-left: .3em solid
}

.dropright .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropright .dropdown-toggle::after {
    vertical-align: 0
}

.dropleft .dropdown-menu {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: .125rem
}

.dropleft .dropdown-toggle::after {
    display: inline-block;
    margin-left: .255em;
    vertical-align: .255em;
    content: ""
}

.dropleft .dropdown-toggle::after {
    display: none
}

.dropleft .dropdown-toggle::before {
    display: inline-block;
    margin-right: .255em;
    vertical-align: .255em;
    content: "";
    border-top: .3em solid transparent;
    border-right: .3em solid;
    border-bottom: .3em solid transparent
}

.dropleft .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropleft .dropdown-toggle::before {
    vertical-align: 0
}

.dropdown-menu[x-placement^=bottom],
.dropdown-menu[x-placement^=left],
.dropdown-menu[x-placement^=right],
.dropdown-menu[x-placement^=top] {
    right: auto;
    bottom: auto
}

.dropdown-divider {
    height: 0;
    margin: .5rem 0;
    overflow: hidden;
    border-top: 1px solid #e9ecef
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: .25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0
}

.dropdown-item:focus,
.dropdown-item:hover {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa
}

.dropdown-item.active,
.dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #007bff
}

.dropdown-item.disabled,
.dropdown-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: transparent
}

.dropdown-menu.show {
    display: block
}

.dropdown-header {
    display: block;
    padding: .5rem 1.5rem;
    margin-bottom: 0;
    font-size: .875rem;
    color: #6c757d;
    white-space: nowrap
}

.dropdown-item-text {
    display: block;
    padding: .25rem 1.5rem;
    color: #212529
}

.btn-group,
.btn-group-vertical {
    position: relative;
    display: -ms-inline-flexbox;
    display: inline-flex;
    vertical-align: middle
}

.btn-group-vertical>.btn,
.btn-group>.btn {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto
}

.btn-group-vertical>.btn:hover,
.btn-group>.btn:hover {
    z-index: 1
}

.btn-group-vertical>.btn.active,
.btn-group-vertical>.btn:active,
.btn-group-vertical>.btn:focus,
.btn-group>.btn.active,
.btn-group>.btn:active,
.btn-group>.btn:focus {
    z-index: 1
}

.btn-toolbar {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-pack: start;
    justify-content: flex-start
}

.btn-toolbar .input-group {
    width: auto
}

.btn-group>.btn-group:not(:first-child),
.btn-group>.btn:not(:first-child) {
    margin-left: -1px
}

.btn-group>.btn-group:not(:last-child)>.btn,
.btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.btn-group>.btn-group:not(:first-child)>.btn,
.btn-group>.btn:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.dropdown-toggle-split {
    padding-right: .5625rem;
    padding-left: .5625rem
}

.dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after {
    margin-left: 0
}

.dropleft .dropdown-toggle-split::before {
    margin-right: 0
}

.btn-group-sm>.btn+.dropdown-toggle-split,
.btn-sm+.dropdown-toggle-split {
    padding-right: .375rem;
    padding-left: .375rem
}

.btn-group-lg>.btn+.dropdown-toggle-split,
.btn-lg+.dropdown-toggle-split {
    padding-right: .75rem;
    padding-left: .75rem
}

.btn-group-vertical {
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: center;
    justify-content: center
}

.btn-group-vertical>.btn,
.btn-group-vertical>.btn-group {
    width: 100%
}

.btn-group-vertical>.btn-group:not(:first-child),
.btn-group-vertical>.btn:not(:first-child) {
    margin-top: -1px
}

.btn-group-vertical>.btn-group:not(:last-child)>.btn,
.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group-vertical>.btn-group:not(:first-child)>.btn,
.btn-group-vertical>.btn:not(:first-child) {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.btn-group-toggle>.btn,
.btn-group-toggle>.btn-group>.btn {
    margin-bottom: 0
}

.btn-group-toggle>.btn input[type=checkbox],
.btn-group-toggle>.btn input[type=radio],
.btn-group-toggle>.btn-group>.btn input[type=checkbox],
.btn-group-toggle>.btn-group>.btn input[type=radio] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none
}

.input-group {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%
}

.input-group>.custom-file,
.input-group>.custom-select,
.input-group>.form-control,
.input-group>.form-control-plaintext {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0
}

.input-group>.custom-file+.custom-file,
.input-group>.custom-file+.custom-select,
.input-group>.custom-file+.form-control,
.input-group>.custom-select+.custom-file,
.input-group>.custom-select+.custom-select,
.input-group>.custom-select+.form-control,
.input-group>.form-control+.custom-file,
.input-group>.form-control+.custom-select,
.input-group>.form-control+.form-control,
.input-group>.form-control-plaintext+.custom-file,
.input-group>.form-control-plaintext+.custom-select,
.input-group>.form-control-plaintext+.form-control {
    margin-left: -1px
}

.input-group>.custom-file .custom-file-input:focus~.custom-file-label,
.input-group>.custom-select:focus,
.input-group>.form-control:focus {
    z-index: 3
}

.input-group>.custom-file .custom-file-input:focus {
    z-index: 4
}

.input-group>.custom-select:not(:last-child),
.input-group>.form-control:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group>.custom-select:not(:first-child),
.input-group>.form-control:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.input-group>.custom-file {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center
}

.input-group>.custom-file:not(:last-child) .custom-file-label,
.input-group>.custom-file:not(:last-child) .custom-file-label::after {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group>.custom-file:not(:first-child) .custom-file-label {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.input-group-append,
.input-group-prepend {
    display: -ms-flexbox;
    display: flex
}

.input-group-append .btn,
.input-group-prepend .btn {
    position: relative;
    z-index: 2
}

.input-group-append .btn:focus,
.input-group-prepend .btn:focus {
    z-index: 3
}

.input-group-append .btn+.btn,
.input-group-append .btn+.input-group-text,
.input-group-append .input-group-text+.btn,
.input-group-append .input-group-text+.input-group-text,
.input-group-prepend .btn+.btn,
.input-group-prepend .btn+.input-group-text,
.input-group-prepend .input-group-text+.btn,
.input-group-prepend .input-group-text+.input-group-text {
    margin-left: -1px
}

.input-group-prepend {
    margin-right: -1px
}

.input-group-append {
    margin-left: -1px
}

.input-group-text {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    padding: .375rem .75rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: center;
    white-space: nowrap;
    background-color: #e9ecef;
    border: 1px solid #ced4da;
    border-radius: .25rem
}

.input-group-text input[type=checkbox],
.input-group-text input[type=radio] {
    margin-top: 0
}

.input-group-lg>.custom-select,
.input-group-lg>.form-control:not(textarea) {
    height: calc(1.5em + 1rem + 2px)
}

.input-group-lg>.custom-select,
.input-group-lg>.form-control,
.input-group-lg>.input-group-append>.btn,
.input-group-lg>.input-group-append>.input-group-text,
.input-group-lg>.input-group-prepend>.btn,
.input-group-lg>.input-group-prepend>.input-group-text {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem
}

.input-group-sm>.custom-select,
.input-group-sm>.form-control:not(textarea) {
    height: calc(1.5em + .5rem + 2px)
}

.input-group-sm>.custom-select,
.input-group-sm>.form-control,
.input-group-sm>.input-group-append>.btn,
.input-group-sm>.input-group-append>.input-group-text,
.input-group-sm>.input-group-prepend>.btn,
.input-group-sm>.input-group-prepend>.input-group-text {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem
}

.input-group-lg>.custom-select,
.input-group-sm>.custom-select {
    padding-right: 1.75rem
}

.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
.input-group>.input-group-append:last-child>.input-group-text:not(:last-child),
.input-group>.input-group-append:not(:last-child)>.btn,
.input-group>.input-group-append:not(:last-child)>.input-group-text,
.input-group>.input-group-prepend>.btn,
.input-group>.input-group-prepend>.input-group-text {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group>.input-group-append>.btn,
.input-group>.input-group-append>.input-group-text,
.input-group>.input-group-prepend:first-child>.btn:not(:first-child),
.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),
.input-group>.input-group-prepend:not(:first-child)>.btn,
.input-group>.input-group-prepend:not(:first-child)>.input-group-text {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.custom-control {
    position: relative;
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5rem
}

.custom-control-inline {
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin-right: 1rem
}

.custom-control-input {
    position: absolute;
    z-index: -1;
    opacity: 0
}

.custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #007bff;
    background-color: #007bff
}

.custom-control-input:focus~.custom-control-label::before {
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
}

.custom-control-input:focus:not(:checked)~.custom-control-label::before {
    border-color: #80bdff
}

.custom-control-input:not(:disabled):active~.custom-control-label::before {
    color: #fff;
    background-color: #b3d7ff;
    border-color: #b3d7ff
}

.custom-control-input:disabled~.custom-control-label {
    color: #6c757d
}

.custom-control-input:disabled~.custom-control-label::before {
    background-color: #e9ecef
}

.custom-control-label {
    position: relative;
    margin-bottom: 0;
    vertical-align: top
}

.custom-control-label::before {
    position: absolute;
    top: .25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    background-color: #fff;
    border: #adb5bd solid 1px
}

.custom-control-label::after {
    position: absolute;
    top: .25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background: no-repeat 50%/50% 50%
}

.custom-checkbox .custom-control-label::before {
    border-radius: .25rem
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e")
}

.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
    border-color: #007bff;
    background-color: #007bff
}

.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e")
}

.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(0, 123, 255, .5)
}

.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
    background-color: rgba(0, 123, 255, .5)
}

.custom-radio .custom-control-label::before {
    border-radius: 50%
}

.custom-radio .custom-control-input:checked~.custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")
}

.custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(0, 123, 255, .5)
}

.custom-switch {
    padding-left: 2.25rem
}

.custom-switch .custom-control-label::before {
    left: -2.25rem;
    width: 1.75rem;
    pointer-events: all;
    border-radius: .5rem
}

.custom-switch .custom-control-label::after {
    top: calc(.25rem + 2px);
    left: calc(-2.25rem + 2px);
    width: calc(1rem - 4px);
    height: calc(1rem - 4px);
    background-color: #adb5bd;
    border-radius: .5rem;
    transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-transform .15s ease-in-out;
    transition: transform .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    transition: transform .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-transform .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .custom-switch .custom-control-label::after {
        transition: none
    }
}

.custom-switch .custom-control-input:checked~.custom-control-label::after {
    background-color: #fff;
    -webkit-transform: translateX(.75rem);
    transform: translateX(.75rem)
}

.custom-switch .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(0, 123, 255, .5)
}

.custom-select {
    display: inline-block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem 1.75rem .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .75rem center/8px 10px;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.custom-select:focus {
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
}

.custom-select:focus::-ms-value {
    color: #495057;
    background-color: #fff
}

.custom-select[multiple],
.custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: .75rem;
    background-image: none
}

.custom-select:disabled {
    color: #6c757d;
    background-color: #e9ecef
}

.custom-select::-ms-expand {
    display: none
}

.custom-select-sm {
    height: calc(1.5em + .5rem + 2px);
    padding-top: .25rem;
    padding-bottom: .25rem;
    padding-left: .5rem;
    font-size: .875rem
}

.custom-select-lg {
    height: calc(1.5em + 1rem + 2px);
    padding-top: .5rem;
    padding-bottom: .5rem;
    padding-left: 1rem;
    font-size: 1.25rem
}

.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    margin-bottom: 0
}

.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    margin: 0;
    opacity: 0
}

.custom-file-input:focus~.custom-file-label {
    border-color: #80bdff;
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
}

.custom-file-input:disabled~.custom-file-label {
    background-color: #e9ecef
}

.custom-file-input:lang(en)~.custom-file-label::after {
    content: "Browse"
}

.custom-file-input~.custom-file-label[data-browse]::after {
    content: attr(data-browse)
}

.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem
}

.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(1.5em + .75rem);
    padding: .375rem .75rem;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 .25rem .25rem 0
}

.custom-range {
    width: 100%;
    height: calc(1rem + .4rem);
    padding: 0;
    background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.custom-range:focus {
    outline: 0
}

.custom-range:focus::-webkit-slider-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
}

.custom-range:focus::-moz-range-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
}

.custom-range:focus::-ms-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
}

.custom-range::-moz-focus-outer {
    border: 0
}

.custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -.25rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    -webkit-appearance: none;
    appearance: none
}

@media (prefers-reduced-motion:reduce) {
    .custom-range::-webkit-slider-thumb {
        transition: none
    }
}

.custom-range::-webkit-slider-thumb:active {
    background-color: #b3d7ff
}

.custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: .5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem
}

.custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    -moz-appearance: none;
    appearance: none
}

@media (prefers-reduced-motion:reduce) {
    .custom-range::-moz-range-thumb {
        transition: none
    }
}

.custom-range::-moz-range-thumb:active {
    background-color: #b3d7ff
}

.custom-range::-moz-range-track {
    width: 100%;
    height: .5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem
}

.custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: .2rem;
    margin-left: .2rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    appearance: none
}

@media (prefers-reduced-motion:reduce) {
    .custom-range::-ms-thumb {
        transition: none
    }
}

.custom-range::-ms-thumb:active {
    background-color: #b3d7ff
}

.custom-range::-ms-track {
    width: 100%;
    height: .5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: .5rem
}

.custom-range::-ms-fill-lower {
    background-color: #dee2e6;
    border-radius: 1rem
}

.custom-range::-ms-fill-upper {
    margin-right: 15px;
    background-color: #dee2e6;
    border-radius: 1rem
}

.custom-range:disabled::-webkit-slider-thumb {
    background-color: #adb5bd
}

.custom-range:disabled::-webkit-slider-runnable-track {
    cursor: default
}

.custom-range:disabled::-moz-range-thumb {
    background-color: #adb5bd
}

.custom-range:disabled::-moz-range-track {
    cursor: default
}

.custom-range:disabled::-ms-thumb {
    background-color: #adb5bd
}

.custom-control-label::before,
.custom-file-label,
.custom-select {
    transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {

    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
        transition: none
    }
}

.nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.nav-link {
    display: block;
    padding: .5rem 1rem
}

.nav-link:focus,
.nav-link:hover {
    text-decoration: none
}

.nav-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default
}

.nav-tabs {
    border-bottom: 1px solid #dee2e6
}

.nav-tabs .nav-item {
    margin-bottom: -1px
}

.nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem
}

.nav-tabs .nav-link:focus,
.nav-tabs .nav-link:hover {
    border-color: #e9ecef #e9ecef #dee2e6
}

.nav-tabs .nav-link.disabled {
    color: #6c757d;
    background-color: transparent;
    border-color: transparent
}

.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff
}

.nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.nav-pills .nav-link {
    border-radius: .25rem
}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #fff;
    background-color: #007bff
}

.nav-fill .nav-item {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    text-align: center
}

.nav-justified .nav-item {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    text-align: center
}

.tab-content>.tab-pane {
    display: none
}

.tab-content>.active {
    display: block
}

.navbar {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: .5rem 1rem
}

.navbar>.container,
.navbar>.container-fluid {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.navbar-brand {
    display: inline-block;
    padding-top: .3125rem;
    padding-bottom: .3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap
}

.navbar-brand:focus,
.navbar-brand:hover {
    text-decoration: none
}

.navbar-nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0
}

.navbar-nav .dropdown-menu {
    position: static;
    float: none
}

.navbar-text {
    display: inline-block;
    padding-top: .5rem;
    padding-bottom: .5rem
}

.navbar-collapse {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    -ms-flex-positive: 1;
    flex-grow: 1;
    -ms-flex-align: center;
    align-items: center
}

.navbar-toggler {
    padding: .25rem .75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: .25rem
}

.navbar-toggler:focus,
.navbar-toggler:hover {
    text-decoration: none
}

.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: "";
    background: no-repeat center center;
    background-size: 100% 100%
}

@media (max-width:575.98px) {

    .navbar-expand-sm>.container,
    .navbar-expand-sm>.container-fluid {
        padding-right: 0;
        padding-left: 0
    }
}

@media (min-width:576px) {
    .navbar-expand-sm {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .navbar-expand-sm .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand-sm>.container,
    .navbar-expand-sm>.container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .navbar-expand-sm .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }

    .navbar-expand-sm .navbar-toggler {
        display: none
    }
}

@media (max-width:767.98px) {

    .navbar-expand-md>.container,
    .navbar-expand-md>.container-fluid {
        padding-right: 0;
        padding-left: 0
    }
}

@media (min-width:768px) {
    .navbar-expand-md {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .navbar-expand-md .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand-md>.container,
    .navbar-expand-md>.container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .navbar-expand-md .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }

    .navbar-expand-md .navbar-toggler {
        display: none
    }
}

@media (max-width:991.98px) {

    .navbar-expand-lg>.container,
    .navbar-expand-lg>.container-fluid {
        padding-right: 0;
        padding-left: 0
    }
}

@media (min-width:992px) {
    .navbar-expand-lg {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .navbar-expand-lg .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand-lg>.container,
    .navbar-expand-lg>.container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .navbar-expand-lg .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }

    .navbar-expand-lg .navbar-toggler {
        display: none
    }
}

@media (max-width:1199.98px) {

    .navbar-expand-xl>.container,
    .navbar-expand-xl>.container-fluid {
        padding-right: 0;
        padding-left: 0
    }
}

@media (min-width:1200px) {
    .navbar-expand-xl {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .navbar-expand-xl .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand-xl>.container,
    .navbar-expand-xl>.container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .navbar-expand-xl .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }

    .navbar-expand-xl .navbar-toggler {
        display: none
    }
}

.navbar-expand {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start
}

.navbar-expand>.container,
.navbar-expand>.container-fluid {
    padding-right: 0;
    padding-left: 0
}

.navbar-expand .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row
}

.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute
}

.navbar-expand .navbar-nav .nav-link {
    padding-right: .5rem;
    padding-left: .5rem
}

.navbar-expand>.container,
.navbar-expand>.container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap
}

.navbar-expand .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto
}

.navbar-expand .navbar-toggler {
    display: none
}

.navbar-light .navbar-brand {
    color: rgba(0, 0, 0, .9)
}

.navbar-light .navbar-brand:focus,
.navbar-light .navbar-brand:hover {
    color: rgba(0, 0, 0, .9)
}

.navbar-light .navbar-nav .nav-link {
    color: rgba(0, 0, 0, .5)
}

.navbar-light .navbar-nav .nav-link:focus,
.navbar-light .navbar-nav .nav-link:hover {
    color: rgba(0, 0, 0, .7)
}

.navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, .3)
}

.navbar-light .navbar-nav .active>.nav-link,
.navbar-light .navbar-nav .nav-link.active,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .show>.nav-link {
    color: rgba(0, 0, 0, .9)
}

.navbar-light .navbar-toggler {
    color: rgba(0, 0, 0, .5);
    border-color: rgba(0, 0, 0, .1)
}

.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
}

.navbar-light .navbar-text {
    color: rgba(0, 0, 0, .5)
}

.navbar-light .navbar-text a {
    color: rgba(0, 0, 0, .9)
}

.navbar-light .navbar-text a:focus,
.navbar-light .navbar-text a:hover {
    color: rgba(0, 0, 0, .9)
}

.navbar-dark .navbar-brand {
    color: #fff
}

.navbar-dark .navbar-brand:focus,
.navbar-dark .navbar-brand:hover {
    color: #fff
}

.navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255, .5)
}

.navbar-dark .navbar-nav .nav-link:focus,
.navbar-dark .navbar-nav .nav-link:hover {
    color: rgba(255, 255, 255, .75)
}

.navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, .25)
}

.navbar-dark .navbar-nav .active>.nav-link,
.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .show>.nav-link {
    color: #fff
}

.navbar-dark .navbar-toggler {
    color: rgba(255, 255, 255, .5);
    border-color: rgba(255, 255, 255, .1)
}

.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
}

.navbar-dark .navbar-text {
    color: rgba(255, 255, 255, .5)
}

.navbar-dark .navbar-text a {
    color: #fff
}

.navbar-dark .navbar-text a:focus,
.navbar-dark .navbar-text a:hover {
    color: #fff
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .25rem
}

.card>hr {
    margin-right: 0;
    margin-left: 0
}

.card>.list-group:first-child .list-group-item:first-child {
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem
}

.card>.list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: .25rem;
    border-bottom-left-radius: .25rem
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem
}

.card-title {
    margin-bottom: .75rem
}

.card-subtitle {
    margin-top: -.375rem;
    margin-bottom: 0
}

.card-text:last-child {
    margin-bottom: 0
}

.card-link:hover {
    text-decoration: none
}

.card-link+.card-link {
    margin-left: 1.25rem
}

.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, .03);
    border-bottom: 1px solid rgba(0, 0, 0, .125)
}

.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
}

.card-header+.list-group .list-group-item:first-child {
    border-top: 0
}

.card-footer {
    padding: .75rem 1.25rem;
    background-color: rgba(0, 0, 0, .03);
    border-top: 1px solid rgba(0, 0, 0, .125)
}

.card-footer:last-child {
    border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
}

.card-header-tabs {
    margin-right: -.625rem;
    margin-bottom: -.75rem;
    margin-left: -.625rem;
    border-bottom: 0
}

.card-header-pills {
    margin-right: -.625rem;
    margin-left: -.625rem
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1.25rem
}

.card-img {
    width: 100%;
    border-radius: calc(.25rem - 1px)
}

.card-img-top {
    width: 100%;
    border-top-left-radius: calc(.25rem - 1px);
    border-top-right-radius: calc(.25rem - 1px)
}

.card-img-bottom {
    width: 100%;
    border-bottom-right-radius: calc(.25rem - 1px);
    border-bottom-left-radius: calc(.25rem - 1px)
}

.card-deck {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column
}

.card-deck .card {
    margin-bottom: 15px
}

@media (min-width:576px) {
    .card-deck {
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        margin-right: -15px;
        margin-left: -15px
    }

    .card-deck .card {
        display: -ms-flexbox;
        display: flex;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px
    }
}

.card-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column
}

.card-group>.card {
    margin-bottom: 15px
}

@media (min-width:576px) {
    .card-group {
        -ms-flex-flow: row wrap;
        flex-flow: row wrap
    }

    .card-group>.card {
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        margin-bottom: 0
    }

    .card-group>.card+.card {
        margin-left: 0;
        border-left: 0
    }

    .card-group>.card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .card-group>.card:not(:last-child) .card-header,
    .card-group>.card:not(:last-child) .card-img-top {
        border-top-right-radius: 0
    }

    .card-group>.card:not(:last-child) .card-footer,
    .card-group>.card:not(:last-child) .card-img-bottom {
        border-bottom-right-radius: 0
    }

    .card-group>.card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .card-group>.card:not(:first-child) .card-header,
    .card-group>.card:not(:first-child) .card-img-top {
        border-top-left-radius: 0
    }

    .card-group>.card:not(:first-child) .card-footer,
    .card-group>.card:not(:first-child) .card-img-bottom {
        border-bottom-left-radius: 0
    }
}

.card-columns .card {
    margin-bottom: .75rem
}

@media (min-width:576px) {
    .card-columns {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
        -webkit-column-gap: 1.25rem;
        -moz-column-gap: 1.25rem;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1
    }

    .card-columns .card {
        display: inline-block;
        width: 100%
    }
}

.accordion>.card {
    overflow: hidden
}

.accordion>.card:not(:first-of-type) .card-header:first-child {
    border-radius: 0
}

.accordion>.card:not(:first-of-type):not(:last-of-type) {
    border-bottom: 0;
    border-radius: 0
}

.accordion>.card:first-of-type {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.accordion>.card:last-of-type {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.accordion>.card .card-header {
    margin-bottom: -1px
}

.breadcrumb {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: .75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9ecef;
    border-radius: .25rem
}

.breadcrumb-item+.breadcrumb-item {
    padding-left: .5rem
}

.breadcrumb-item+.breadcrumb-item::before {
    display: inline-block;
    padding-right: .5rem;
    color: #6c757d;
    content: "/"
}

.breadcrumb-item+.breadcrumb-item:hover::before {
    text-decoration: underline
}

.breadcrumb-item+.breadcrumb-item:hover::before {
    text-decoration: none
}

.breadcrumb-item.active {
    color: #6c757d
}

.pagination {
    display: -ms-flexbox;
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: .25rem
}

.page-link {
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6
}

.page-link:hover {
    z-index: 2;
    color: #0056b3;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6
}

.page-link:focus {
    z-index: 2;
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
}

.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: .25rem;
    border-bottom-left-radius: .25rem
}

.page-item:last-child .page-link {
    border-top-right-radius: .25rem;
    border-bottom-right-radius: .25rem
}

.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #dee2e6
}

.pagination-lg .page-link {
    padding: .75rem 1.5rem;
    font-size: 1.25rem;
    line-height: 1.5
}

.pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: .3rem;
    border-bottom-left-radius: .3rem
}

.pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: .3rem;
    border-bottom-right-radius: .3rem
}

.pagination-sm .page-link {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5
}

.pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: .2rem;
    border-bottom-left-radius: .2rem
}

.pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: .2rem;
    border-bottom-right-radius: .2rem
}

.badge {
    display: inline-block;
    padding: .25em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .badge {
        transition: none
    }
}

a.badge:focus,
a.badge:hover {
    text-decoration: none
}

.badge:empty {
    display: none
}

.btn .badge {
    position: relative;
    top: -1px
}

.badge-pill {
    padding-right: .6em;
    padding-left: .6em;
    border-radius: 10rem
}

.badge-primary {
    color: #fff;
    background-color: #007bff
}

a.badge-primary:focus,
a.badge-primary:hover {
    color: #fff;
    background-color: #0062cc
}

a.badge-primary.focus,
a.badge-primary:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
}

.badge-secondary {
    color: #fff;
    background-color: #6c757d
}

a.badge-secondary:focus,
a.badge-secondary:hover {
    color: #fff;
    background-color: #545b62
}

a.badge-secondary.focus,
a.badge-secondary:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
}

.badge-success {
    color: #fff;
    background-color: #28a745
}

a.badge-success:focus,
a.badge-success:hover {
    color: #fff;
    background-color: #1e7e34
}

a.badge-success.focus,
a.badge-success:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
}

.badge-info {
    color: #fff;
    background-color: #17a2b8
}

a.badge-info:focus,
a.badge-info:hover {
    color: #fff;
    background-color: #117a8b
}

a.badge-info.focus,
a.badge-info:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
}

.badge-warning {
    color: #212529;
    background-color: #ffc107
}

a.badge-warning:focus,
a.badge-warning:hover {
    color: #212529;
    background-color: #d39e00
}

a.badge-warning.focus,
a.badge-warning:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
}

.badge-danger {
    color: #fff;
    background-color: #dc3545
}

a.badge-danger:focus,
a.badge-danger:hover {
    color: #fff;
    background-color: #bd2130
}

a.badge-danger.focus,
a.badge-danger:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
}

.badge-light {
    color: #212529;
    background-color: #f8f9fa
}

a.badge-light:focus,
a.badge-light:hover {
    color: #212529;
    background-color: #dae0e5
}

a.badge-light.focus,
a.badge-light:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
}

.badge-dark {
    color: #fff;
    background-color: #343a40
}

a.badge-dark:focus,
a.badge-dark:hover {
    color: #fff;
    background-color: #1d2124
}

a.badge-dark.focus,
a.badge-dark:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
}

.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #e9ecef;
    border-radius: .3rem
}

@media (min-width:576px) {
    .jumbotron {
        padding: 4rem 2rem
    }
}

.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0
}

.alert {
    position: relative;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem
}

.alert-heading {
    color: inherit
}

.alert-link {
    font-weight: 700
}

.alert-dismissible {
    padding-right: 4rem
}

.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: .75rem 1.25rem;
    color: inherit
}

.alert-primary {
    color: #004085;
    background-color: #cce5ff;
    border-color: #b8daff
}

.alert-primary hr {
    border-top-color: #9fcdff
}

.alert-primary .alert-link {
    color: #002752
}

.alert-secondary {
    color: #383d41;
    background-color: #e2e3e5;
    border-color: #d6d8db
}

.alert-secondary hr {
    border-top-color: #c8cbcf
}

.alert-secondary .alert-link {
    color: #202326
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb
}

.alert-success hr {
    border-top-color: #b1dfbb
}

.alert-success .alert-link {
    color: #0b2e13
}

.alert-info {
    color: #0c5460;
    background-color: #d1ecf1;
    border-color: #bee5eb
}

.alert-info hr {
    border-top-color: #abdde5
}

.alert-info .alert-link {
    color: #062c33
}

.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba
}

.alert-warning hr {
    border-top-color: #ffe8a1
}

.alert-warning .alert-link {
    color: #533f03
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb
}

.alert-danger hr {
    border-top-color: #f1b0b7
}

.alert-danger .alert-link {
    color: #491217
}

.alert-light {
    color: #818182;
    background-color: #fefefe;
    border-color: #fdfdfe
}

.alert-light hr {
    border-top-color: #ececf6
}

.alert-light .alert-link {
    color: #686868
}

.alert-dark {
    color: #1b1e21;
    background-color: #d6d8d9;
    border-color: #c6c8ca
}

.alert-dark hr {
    border-top-color: #b9bbbe
}

.alert-dark .alert-link {
    color: #040505
}

@-webkit-keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0
    }

    to {
        background-position: 0 0
    }
}

@keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0
    }

    to {
        background-position: 0 0
    }
}

.progress {
    display: -ms-flexbox;
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: .75rem;
    background-color: #e9ecef;
    border-radius: .25rem
}

.progress-bar {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-pack: center;
    justify-content: center;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #007bff;
    transition: width .6s ease
}

@media (prefers-reduced-motion:reduce) {
    .progress-bar {
        transition: none
    }
}

.progress-bar-striped {
    background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-size: 1rem 1rem
}

.progress-bar-animated {
    -webkit-animation: progress-bar-stripes 1s linear infinite;
    animation: progress-bar-stripes 1s linear infinite
}

@media (prefers-reduced-motion:reduce) {
    .progress-bar-animated {
        -webkit-animation: none;
        animation: none
    }
}

.media {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start
}

.media-body {
    -ms-flex: 1;
    flex: 1
}

.list-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0
}

.list-group-item-action {
    width: 100%;
    color: #495057;
    text-align: inherit
}

.list-group-item-action:focus,
.list-group-item-action:hover {
    z-index: 1;
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa
}

.list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef
}

.list-group-item {
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, .125)
}

.list-group-item:first-child {
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem
}

.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: .25rem;
    border-bottom-left-radius: .25rem
}

.list-group-item.disabled,
.list-group-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.list-group-horizontal {
    -ms-flex-direction: row;
    flex-direction: row
}

.list-group-horizontal .list-group-item {
    margin-right: -1px;
    margin-bottom: 0
}

.list-group-horizontal .list-group-item:first-child {
    border-top-left-radius: .25rem;
    border-bottom-left-radius: .25rem;
    border-top-right-radius: 0
}

.list-group-horizontal .list-group-item:last-child {
    margin-right: 0;
    border-top-right-radius: .25rem;
    border-bottom-right-radius: .25rem;
    border-bottom-left-radius: 0
}

@media (min-width:576px) {
    .list-group-horizontal-sm {
        -ms-flex-direction: row;
        flex-direction: row
    }

    .list-group-horizontal-sm .list-group-item {
        margin-right: -1px;
        margin-bottom: 0
    }

    .list-group-horizontal-sm .list-group-item:first-child {
        border-top-left-radius: .25rem;
        border-bottom-left-radius: .25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-sm .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: .25rem;
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: 0
    }
}

@media (min-width:768px) {
    .list-group-horizontal-md {
        -ms-flex-direction: row;
        flex-direction: row
    }

    .list-group-horizontal-md .list-group-item {
        margin-right: -1px;
        margin-bottom: 0
    }

    .list-group-horizontal-md .list-group-item:first-child {
        border-top-left-radius: .25rem;
        border-bottom-left-radius: .25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-md .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: .25rem;
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: 0
    }
}

@media (min-width:992px) {
    .list-group-horizontal-lg {
        -ms-flex-direction: row;
        flex-direction: row
    }

    .list-group-horizontal-lg .list-group-item {
        margin-right: -1px;
        margin-bottom: 0
    }

    .list-group-horizontal-lg .list-group-item:first-child {
        border-top-left-radius: .25rem;
        border-bottom-left-radius: .25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-lg .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: .25rem;
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: 0
    }
}

@media (min-width:1200px) {
    .list-group-horizontal-xl {
        -ms-flex-direction: row;
        flex-direction: row
    }

    .list-group-horizontal-xl .list-group-item {
        margin-right: -1px;
        margin-bottom: 0
    }

    .list-group-horizontal-xl .list-group-item:first-child {
        border-top-left-radius: .25rem;
        border-bottom-left-radius: .25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-xl .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: .25rem;
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: 0
    }
}

.list-group-flush .list-group-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0
}

.list-group-flush .list-group-item:last-child {
    margin-bottom: -1px
}

.list-group-flush:first-child .list-group-item:first-child {
    border-top: 0
}

.list-group-flush:last-child .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom: 0
}

.list-group-item-primary {
    color: #004085;
    background-color: #b8daff
}

.list-group-item-primary.list-group-item-action:focus,
.list-group-item-primary.list-group-item-action:hover {
    color: #004085;
    background-color: #9fcdff
}

.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #004085;
    border-color: #004085
}

.list-group-item-secondary {
    color: #383d41;
    background-color: #d6d8db
}

.list-group-item-secondary.list-group-item-action:focus,
.list-group-item-secondary.list-group-item-action:hover {
    color: #383d41;
    background-color: #c8cbcf
}

.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #383d41;
    border-color: #383d41
}

.list-group-item-success {
    color: #155724;
    background-color: #c3e6cb
}

.list-group-item-success.list-group-item-action:focus,
.list-group-item-success.list-group-item-action:hover {
    color: #155724;
    background-color: #b1dfbb
}

.list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #155724;
    border-color: #155724
}

.list-group-item-info {
    color: #0c5460;
    background-color: #bee5eb
}

.list-group-item-info.list-group-item-action:focus,
.list-group-item-info.list-group-item-action:hover {
    color: #0c5460;
    background-color: #abdde5
}

.list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #0c5460;
    border-color: #0c5460
}

.list-group-item-warning {
    color: #856404;
    background-color: #ffeeba
}

.list-group-item-warning.list-group-item-action:focus,
.list-group-item-warning.list-group-item-action:hover {
    color: #856404;
    background-color: #ffe8a1
}

.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #856404;
    border-color: #856404
}

.list-group-item-danger {
    color: #721c24;
    background-color: #f5c6cb
}

.list-group-item-danger.list-group-item-action:focus,
.list-group-item-danger.list-group-item-action:hover {
    color: #721c24;
    background-color: #f1b0b7
}

.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #721c24;
    border-color: #721c24
}

.list-group-item-light {
    color: #818182;
    background-color: #fdfdfe
}

.list-group-item-light.list-group-item-action:focus,
.list-group-item-light.list-group-item-action:hover {
    color: #818182;
    background-color: #ececf6
}

.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #818182;
    border-color: #818182
}

.list-group-item-dark {
    color: #1b1e21;
    background-color: #c6c8ca
}

.list-group-item-dark.list-group-item-action:focus,
.list-group-item-dark.list-group-item-action:hover {
    color: #1b1e21;
    background-color: #b9bbbe
}

.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #1b1e21;
    border-color: #1b1e21
}

.close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5
}

.close:hover {
    color: #000;
    text-decoration: none
}

.close:not(:disabled):not(.disabled):focus,
.close:not(:disabled):not(.disabled):hover {
    opacity: .75
}

button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

a.close.disabled {
    pointer-events: none
}

.toast {
    max-width: 350px;
    overflow: hidden;
    font-size: .875rem;
    background-color: rgba(255, 255, 255, .85);
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, .1);
    box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .1);
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    opacity: 0;
    border-radius: .25rem
}

.toast:not(:last-child) {
    margin-bottom: .75rem
}

.toast.showing {
    opacity: 1
}

.toast.show {
    display: block;
    opacity: 1
}

.toast.hide {
    display: none
}

.toast-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    padding: .25rem .75rem;
    color: #6c757d;
    background-color: rgba(255, 255, 255, .85);
    background-clip: padding-box;
    border-bottom: 1px solid rgba(0, 0, 0, .05)
}

.toast-body {
    padding: .75rem
}

.modal-open {
    overflow: hidden
}

.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto
}

.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: .5rem;
    pointer-events: none
}

.modal.fade .modal-dialog {
    transition: -webkit-transform .3s ease-out;
    transition: transform .3s ease-out;
    transition: transform .3s ease-out, -webkit-transform .3s ease-out;
    -webkit-transform: translate(0, -50px);
    transform: translate(0, -50px)
}

@media (prefers-reduced-motion:reduce) {
    .modal.fade .modal-dialog {
        transition: none
    }
}

.modal.show .modal-dialog {
    -webkit-transform: none;
    transform: none
}

.modal-dialog-scrollable {
    display: -ms-flexbox;
    display: flex;
    max-height: calc(100% - 1rem)
}

.modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 1rem);
    overflow: hidden
}

.modal-dialog-scrollable .modal-footer,
.modal-dialog-scrollable .modal-header {
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.modal-dialog-scrollable .modal-body {
    overflow-y: auto
}

.modal-dialog-centered {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    min-height: calc(100% - 1rem)
}

.modal-dialog-centered::before {
    display: block;
    height: calc(100vh - 1rem);
    content: ""
}

.modal-dialog-centered.modal-dialog-scrollable {
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-pack: center;
    justify-content: center;
    height: 100%
}

.modal-dialog-centered.modal-dialog-scrollable .modal-content {
    max-height: none
}

.modal-dialog-centered.modal-dialog-scrollable::before {
    content: none
}

.modal-content {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: .3rem;
    outline: 0
}

.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1040;
    width: 100vw;
    height: 100vh;
    background-color: #000
}

.modal-backdrop.fade {
    opacity: 0
}

.modal-backdrop.show {
    opacity: .5
}

.modal-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: 1px solid #dee2e6;
    border-top-left-radius: .3rem;
    border-top-right-radius: .3rem
}

.modal-header .close {
    padding: 1rem 1rem;
    margin: -1rem -1rem -1rem auto
}

.modal-title {
    margin-bottom: 0;
    line-height: 1.5
}

.modal-body {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1rem
}

.modal-footer {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: 1rem;
    border-top: 1px solid #dee2e6;
    border-bottom-right-radius: .3rem;
    border-bottom-left-radius: .3rem
}

.modal-footer>:not(:first-child) {
    margin-left: .25rem
}

.modal-footer>:not(:last-child) {
    margin-right: .25rem
}

.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll
}

@media (min-width:576px) {
    .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto
    }

    .modal-dialog-scrollable {
        max-height: calc(100% - 3.5rem)
    }

    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 3.5rem)
    }

    .modal-dialog-centered {
        min-height: calc(100% - 3.5rem)
    }

    .modal-dialog-centered::before {
        height: calc(100vh - 3.5rem)
    }

    .modal-sm {
        max-width: 300px
    }
}

@media (min-width:992px) {

    .modal-lg,
    .modal-xl {
        max-width: 800px
    }
}

@media (min-width:1200px) {
    .modal-xl {
        max-width: 1140px
    }
}

.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: .875rem;
    word-wrap: break-word;
    opacity: 0
}

.tooltip.show {
    opacity: .9
}

.tooltip .arrow {
    position: absolute;
    display: block;
    width: .8rem;
    height: .4rem
}

.tooltip .arrow::before {
    position: absolute;
    content: "";
    border-color: transparent;
    border-style: solid
}

.bs-tooltip-auto[x-placement^=top],
.bs-tooltip-top {
    padding: .4rem 0
}

.bs-tooltip-auto[x-placement^=top] .arrow,
.bs-tooltip-top .arrow {
    bottom: 0
}

.bs-tooltip-auto[x-placement^=top] .arrow::before,
.bs-tooltip-top .arrow::before {
    top: 0;
    border-width: .4rem .4rem 0;
    border-top-color: #000
}

.bs-tooltip-auto[x-placement^=right],
.bs-tooltip-right {
    padding: 0 .4rem
}

.bs-tooltip-auto[x-placement^=right] .arrow,
.bs-tooltip-right .arrow {
    left: 0;
    width: .4rem;
    height: .8rem
}

.bs-tooltip-auto[x-placement^=right] .arrow::before,
.bs-tooltip-right .arrow::before {
    right: 0;
    border-width: .4rem .4rem .4rem 0;
    border-right-color: #000
}

.bs-tooltip-auto[x-placement^=bottom],
.bs-tooltip-bottom {
    padding: .4rem 0
}

.bs-tooltip-auto[x-placement^=bottom] .arrow,
.bs-tooltip-bottom .arrow {
    top: 0
}

.bs-tooltip-auto[x-placement^=bottom] .arrow::before,
.bs-tooltip-bottom .arrow::before {
    bottom: 0;
    border-width: 0 .4rem .4rem;
    border-bottom-color: #000
}

.bs-tooltip-auto[x-placement^=left],
.bs-tooltip-left {
    padding: 0 .4rem
}

.bs-tooltip-auto[x-placement^=left] .arrow,
.bs-tooltip-left .arrow {
    right: 0;
    width: .4rem;
    height: .8rem
}

.bs-tooltip-auto[x-placement^=left] .arrow::before,
.bs-tooltip-left .arrow::before {
    left: 0;
    border-width: .4rem 0 .4rem .4rem;
    border-left-color: #000
}

.tooltip-inner {
    max-width: 200px;
    padding: .25rem .5rem;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: .25rem
}

.popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: block;
    max-width: 276px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: .875rem;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: .3rem
}

.popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: .5rem;
    margin: 0 .3rem
}

.popover .arrow::after,
.popover .arrow::before {
    position: absolute;
    display: block;
    content: "";
    border-color: transparent;
    border-style: solid
}

.bs-popover-auto[x-placement^=top],
.bs-popover-top {
    margin-bottom: .5rem
}

.bs-popover-auto[x-placement^=top]>.arrow,
.bs-popover-top>.arrow {
    bottom: calc((.5rem + 1px) * -1)
}

.bs-popover-auto[x-placement^=top]>.arrow::before,
.bs-popover-top>.arrow::before {
    bottom: 0;
    border-width: .5rem .5rem 0;
    border-top-color: rgba(0, 0, 0, .25)
}

.bs-popover-auto[x-placement^=top]>.arrow::after,
.bs-popover-top>.arrow::after {
    bottom: 1px;
    border-width: .5rem .5rem 0;
    border-top-color: #fff
}

.bs-popover-auto[x-placement^=right],
.bs-popover-right {
    margin-left: .5rem
}

.bs-popover-auto[x-placement^=right]>.arrow,
.bs-popover-right>.arrow {
    left: calc((.5rem + 1px) * -1);
    width: .5rem;
    height: 1rem;
    margin: .3rem 0
}

.bs-popover-auto[x-placement^=right]>.arrow::before,
.bs-popover-right>.arrow::before {
    left: 0;
    border-width: .5rem .5rem .5rem 0;
    border-right-color: rgba(0, 0, 0, .25)
}

.bs-popover-auto[x-placement^=right]>.arrow::after,
.bs-popover-right>.arrow::after {
    left: 1px;
    border-width: .5rem .5rem .5rem 0;
    border-right-color: #fff
}

.bs-popover-auto[x-placement^=bottom],
.bs-popover-bottom {
    margin-top: .5rem
}

.bs-popover-auto[x-placement^=bottom]>.arrow,
.bs-popover-bottom>.arrow {
    top: calc((.5rem + 1px) * -1)
}

.bs-popover-auto[x-placement^=bottom]>.arrow::before,
.bs-popover-bottom>.arrow::before {
    top: 0;
    border-width: 0 .5rem .5rem .5rem;
    border-bottom-color: rgba(0, 0, 0, .25)
}

.bs-popover-auto[x-placement^=bottom]>.arrow::after,
.bs-popover-bottom>.arrow::after {
    top: 1px;
    border-width: 0 .5rem .5rem .5rem;
    border-bottom-color: #fff
}

.bs-popover-auto[x-placement^=bottom] .popover-header::before,
.bs-popover-bottom .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -.5rem;
    content: "";
    border-bottom: 1px solid #f7f7f7
}

.bs-popover-auto[x-placement^=left],
.bs-popover-left {
    margin-right: .5rem
}

.bs-popover-auto[x-placement^=left]>.arrow,
.bs-popover-left>.arrow {
    right: calc((.5rem + 1px) * -1);
    width: .5rem;
    height: 1rem;
    margin: .3rem 0
}

.bs-popover-auto[x-placement^=left]>.arrow::before,
.bs-popover-left>.arrow::before {
    right: 0;
    border-width: .5rem 0 .5rem .5rem;
    border-left-color: rgba(0, 0, 0, .25)
}

.bs-popover-auto[x-placement^=left]>.arrow::after,
.bs-popover-left>.arrow::after {
    right: 1px;
    border-width: .5rem 0 .5rem .5rem;
    border-left-color: #fff
}

.popover-header {
    padding: .5rem .75rem;
    margin-bottom: 0;
    font-size: 1rem;
    background-color: #f7f7f7;
    border-bottom: 1px solid #ebebeb;
    border-top-left-radius: calc(.3rem - 1px);
    border-top-right-radius: calc(.3rem - 1px)
}

.popover-header:empty {
    display: none
}

.popover-body {
    padding: .5rem .75rem;
    color: #212529
}

.carousel {
    position: relative
}

.carousel.pointer-event {
    -ms-touch-action: pan-y;
    touch-action: pan-y
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden
}

.carousel-inner::after {
    display: block;
    clear: both;
    content: ""
}

.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: -webkit-transform .6s ease-in-out;
    transition: transform .6s ease-in-out;
    transition: transform .6s ease-in-out, -webkit-transform .6s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .carousel-item {
        transition: none
    }
}

.carousel-item-next,
.carousel-item-prev,
.carousel-item.active {
    display: block
}

.active.carousel-item-right,
.carousel-item-next:not(.carousel-item-left) {
    -webkit-transform: translateX(100%);
    transform: translateX(100%)
}

.active.carousel-item-left,
.carousel-item-prev:not(.carousel-item-right) {
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%)
}

.carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
    -webkit-transform: none;
    transform: none
}

.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right,
.carousel-fade .carousel-item.active {
    z-index: 1;
    opacity: 1
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
    z-index: 0;
    opacity: 0;
    transition: 0s .6s opacity
}

@media (prefers-reduced-motion:reduce) {

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        transition: none
    }
}

.carousel-control-next,
.carousel-control-prev {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: .5;
    transition: opacity .15s ease
}

@media (prefers-reduced-motion:reduce) {

    .carousel-control-next,
    .carousel-control-prev {
        transition: none
    }
}

.carousel-control-next:focus,
.carousel-control-next:hover,
.carousel-control-prev:focus,
.carousel-control-prev:hover {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: .9
}

.carousel-control-prev {
    left: 0
}

.carousel-control-next {
    right: 0
}

.carousel-control-next-icon,
.carousel-control-prev-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: no-repeat 50%/100% 100%
}

.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e")
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e")
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none
}

.carousel-indicators li {
    box-sizing: content-box;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: .5;
    transition: opacity .6s ease
}

@media (prefers-reduced-motion:reduce) {
    .carousel-indicators li {
        transition: none
    }
}

.carousel-indicators .active {
    opacity: 1
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center
}

@-webkit-keyframes spinner-border {
    to {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

@keyframes spinner-border {
    to {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

.spinner-border {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    border: .25em solid currentColor;
    border-right-color: transparent;
    border-radius: 50%;
    -webkit-animation: spinner-border .75s linear infinite;
    animation: spinner-border .75s linear infinite
}

.spinner-border-sm {
    width: 1rem;
    height: 1rem;
    border-width: .2em
}

@-webkit-keyframes spinner-grow {
    0% {
        -webkit-transform: scale(0);
        transform: scale(0)
    }

    50% {
        opacity: 1
    }
}

@keyframes spinner-grow {
    0% {
        -webkit-transform: scale(0);
        transform: scale(0)
    }

    50% {
        opacity: 1
    }
}

.spinner-grow {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    background-color: currentColor;
    border-radius: 50%;
    opacity: 0;
    -webkit-animation: spinner-grow .75s linear infinite;
    animation: spinner-grow .75s linear infinite
}

.spinner-grow-sm {
    width: 1rem;
    height: 1rem
}

.align-baseline {
    vertical-align: baseline !important
}

.align-top {
    vertical-align: top !important
}

.align-middle {
    vertical-align: middle !important
}

.align-bottom {
    vertical-align: bottom !important
}

.align-text-bottom {
    vertical-align: text-bottom !important
}

.align-text-top {
    vertical-align: text-top !important
}

.bg-primary {
    background-color: #007bff !important
}

a.bg-primary:focus,
a.bg-primary:hover,
button.bg-primary:focus,
button.bg-primary:hover {
    background-color: #0062cc !important
}

.bg-secondary {
    background-color: #6c757d !important
}

a.bg-secondary:focus,
a.bg-secondary:hover,
button.bg-secondary:focus,
button.bg-secondary:hover {
    background-color: #545b62 !important
}

.bg-success {
    background-color: #28a745 !important
}

a.bg-success:focus,
a.bg-success:hover,
button.bg-success:focus,
button.bg-success:hover {
    background-color: #1e7e34 !important
}

.bg-info {
    background-color: #17a2b8 !important
}

a.bg-info:focus,
a.bg-info:hover,
button.bg-info:focus,
button.bg-info:hover {
    background-color: #117a8b !important
}

.bg-warning {
    background-color: #ffc107 !important
}

a.bg-warning:focus,
a.bg-warning:hover,
button.bg-warning:focus,
button.bg-warning:hover {
    background-color: #d39e00 !important
}

.bg-danger {
    background-color: #dc3545 !important
}

a.bg-danger:focus,
a.bg-danger:hover,
button.bg-danger:focus,
button.bg-danger:hover {
    background-color: #bd2130 !important
}

.bg-light {
    background-color: #f8f9fa !important
}

a.bg-light:focus,
a.bg-light:hover,
button.bg-light:focus,
button.bg-light:hover {
    background-color: #dae0e5 !important
}

.bg-dark {
    background-color: #343a40 !important
}

a.bg-dark:focus,
a.bg-dark:hover,
button.bg-dark:focus,
button.bg-dark:hover {
    background-color: #1d2124 !important
}

.bg-white {
    background-color: #fff !important
}

.bg-transparent {
    background-color: transparent !important
}

.border {
    border: 1px solid #dee2e6 !important
}

.border-top {
    border-top: 1px solid #dee2e6 !important
}

.border-right {
    border-right: 1px solid #dee2e6 !important
}

.border-bottom {
    border-bottom: 1px solid #dee2e6 !important
}

.border-left {
    border-left: 1px solid #dee2e6 !important
}

.border-0 {
    border: 0 !important
}

.border-top-0 {
    border-top: 0 !important
}

.border-right-0 {
    border-right: 0 !important
}

.border-bottom-0 {
    border-bottom: 0 !important
}

.border-left-0 {
    border-left: 0 !important
}

.border-primary {
    border-color: #007bff !important
}

.border-secondary {
    border-color: #6c757d !important
}

.border-success {
    border-color: #28a745 !important
}

.border-info {
    border-color: #17a2b8 !important
}

.border-warning {
    border-color: #ffc107 !important
}

.border-danger {
    border-color: #dc3545 !important
}

.border-light {
    border-color: #f8f9fa !important
}

.border-dark {
    border-color: #343a40 !important
}

.border-white {
    border-color: #fff !important
}

.rounded-sm {
    border-radius: .2rem !important
}

.rounded {
    border-radius: .25rem !important
}

.rounded-top {
    border-top-left-radius: .25rem !important;
    border-top-right-radius: .25rem !important
}

.rounded-right {
    border-top-right-radius: .25rem !important;
    border-bottom-right-radius: .25rem !important
}

.rounded-bottom {
    border-bottom-right-radius: .25rem !important;
    border-bottom-left-radius: .25rem !important
}

.rounded-left {
    border-top-left-radius: .25rem !important;
    border-bottom-left-radius: .25rem !important
}

.rounded-lg {
    border-radius: .3rem !important
}

.rounded-circle {
    border-radius: 50% !important
}

.rounded-pill {
    border-radius: 50rem !important
}

.rounded-0 {
    border-radius: 0 !important
}

.clearfix::after {
    display: block;
    clear: both;
    content: ""
}

.d-none {
    display: none !important
}

.d-inline {
    display: inline !important
}

.d-inline-block {
    display: inline-block !important
}

.d-block {
    display: block !important
}

.d-table {
    display: table !important
}

.d-table-row {
    display: table-row !important
}

.d-table-cell {
    display: table-cell !important
}

.d-flex {
    display: -ms-flexbox !important;
    display: flex !important
}

.d-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important
}

@media (min-width:576px) {
    .d-sm-none {
        display: none !important
    }

    .d-sm-inline {
        display: inline !important
    }

    .d-sm-inline-block {
        display: inline-block !important
    }

    .d-sm-block {
        display: block !important
    }

    .d-sm-table {
        display: table !important
    }

    .d-sm-table-row {
        display: table-row !important
    }

    .d-sm-table-cell {
        display: table-cell !important
    }

    .d-sm-flex {
        display: -ms-flexbox !important;
        display: flex !important
    }

    .d-sm-inline-flex {
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
    }
}

@media (min-width:768px) {
    .d-md-none {
        display: none !important
    }

    .d-md-inline {
        display: inline !important
    }

    .d-md-inline-block {
        display: inline-block !important
    }

    .d-md-block {
        display: block !important
    }

    .d-md-table {
        display: table !important
    }

    .d-md-table-row {
        display: table-row !important
    }

    .d-md-table-cell {
        display: table-cell !important
    }

    .d-md-flex {
        display: -ms-flexbox !important;
        display: flex !important
    }

    .d-md-inline-flex {
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
    }
}

@media (min-width:992px) {
    .d-lg-none {
        display: none !important
    }

    .d-lg-inline {
        display: inline !important
    }

    .d-lg-inline-block {
        display: inline-block !important
    }

    .d-lg-block {
        display: block !important
    }

    .d-lg-table {
        display: table !important
    }

    .d-lg-table-row {
        display: table-row !important
    }

    .d-lg-table-cell {
        display: table-cell !important
    }

    .d-lg-flex {
        display: -ms-flexbox !important;
        display: flex !important
    }

    .d-lg-inline-flex {
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
    }
}

@media (min-width:1200px) {
    .d-xl-none {
        display: none !important
    }

    .d-xl-inline {
        display: inline !important
    }

    .d-xl-inline-block {
        display: inline-block !important
    }

    .d-xl-block {
        display: block !important
    }

    .d-xl-table {
        display: table !important
    }

    .d-xl-table-row {
        display: table-row !important
    }

    .d-xl-table-cell {
        display: table-cell !important
    }

    .d-xl-flex {
        display: -ms-flexbox !important;
        display: flex !important
    }

    .d-xl-inline-flex {
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
    }
}

@media print {
    .d-print-none {
        display: none !important
    }

    .d-print-inline {
        display: inline !important
    }

    .d-print-inline-block {
        display: inline-block !important
    }

    .d-print-block {
        display: block !important
    }

    .d-print-table {
        display: table !important
    }

    .d-print-table-row {
        display: table-row !important
    }

    .d-print-table-cell {
        display: table-cell !important
    }

    .d-print-flex {
        display: -ms-flexbox !important;
        display: flex !important
    }

    .d-print-inline-flex {
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
    }
}

.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden
}

.embed-responsive::before {
    display: block;
    content: ""
}

.embed-responsive .embed-responsive-item,
.embed-responsive embed,
.embed-responsive iframe,
.embed-responsive object,
.embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0
}

.embed-responsive-21by9::before {
    padding-top: 42.857143%
}

.embed-responsive-16by9::before {
    padding-top: 56.25%
}

.embed-responsive-4by3::before {
    padding-top: 75%
}

.embed-responsive-1by1::before {
    padding-top: 100%
}

.flex-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important
}

.flex-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important
}

.flex-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important
}

.flex-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important
}

.flex-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important
}

.flex-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important
}

.flex-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important
}

.flex-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important
}

.flex-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important
}

.flex-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important
}

.flex-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important
}

.flex-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important
}

.justify-content-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important
}

.justify-content-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important
}

.justify-content-center {
    -ms-flex-pack: center !important;
    justify-content: center !important
}

.justify-content-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important
}

.justify-content-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important
}

.align-items-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important
}

.align-items-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important
}

.align-items-center {
    -ms-flex-align: center !important;
    align-items: center !important
}

.align-items-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important
}

.align-items-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important
}

.align-content-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important
}

.align-content-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important
}

.align-content-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important
}

.align-content-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important
}

.align-content-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important
}

.align-content-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important
}

.align-self-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important
}

.align-self-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important
}

.align-self-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important
}

.align-self-center {
    -ms-flex-item-align: center !important;
    align-self: center !important
}

.align-self-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important
}

.align-self-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important
}

@media (min-width:576px) {
    .flex-sm-row {
        -ms-flex-direction: row !important;
        flex-direction: row !important
    }

    .flex-sm-column {
        -ms-flex-direction: column !important;
        flex-direction: column !important
    }

    .flex-sm-row-reverse {
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important
    }

    .flex-sm-column-reverse {
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important
    }

    .flex-sm-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important
    }

    .flex-sm-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important
    }

    .flex-sm-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important
    }

    .flex-sm-fill {
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important
    }

    .flex-sm-grow-0 {
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important
    }

    .flex-sm-grow-1 {
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important
    }

    .flex-sm-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important
    }

    .flex-sm-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important
    }

    .justify-content-sm-start {
        -ms-flex-pack: start !important;
        justify-content: flex-start !important
    }

    .justify-content-sm-end {
        -ms-flex-pack: end !important;
        justify-content: flex-end !important
    }

    .justify-content-sm-center {
        -ms-flex-pack: center !important;
        justify-content: center !important
    }

    .justify-content-sm-between {
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
    }

    .justify-content-sm-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important
    }

    .align-items-sm-start {
        -ms-flex-align: start !important;
        align-items: flex-start !important
    }

    .align-items-sm-end {
        -ms-flex-align: end !important;
        align-items: flex-end !important
    }

    .align-items-sm-center {
        -ms-flex-align: center !important;
        align-items: center !important
    }

    .align-items-sm-baseline {
        -ms-flex-align: baseline !important;
        align-items: baseline !important
    }

    .align-items-sm-stretch {
        -ms-flex-align: stretch !important;
        align-items: stretch !important
    }

    .align-content-sm-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important
    }

    .align-content-sm-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important
    }

    .align-content-sm-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important
    }

    .align-content-sm-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important
    }

    .align-content-sm-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important
    }

    .align-content-sm-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important
    }

    .align-self-sm-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important
    }

    .align-self-sm-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important
    }

    .align-self-sm-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important
    }

    .align-self-sm-center {
        -ms-flex-item-align: center !important;
        align-self: center !important
    }

    .align-self-sm-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important
    }

    .align-self-sm-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important
    }
}

@media (min-width:768px) {
    .flex-md-row {
        -ms-flex-direction: row !important;
        flex-direction: row !important
    }

    .flex-md-column {
        -ms-flex-direction: column !important;
        flex-direction: column !important
    }

    .flex-md-row-reverse {
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important
    }

    .flex-md-column-reverse {
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important
    }

    .flex-md-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important
    }

    .flex-md-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important
    }

    .flex-md-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important
    }

    .flex-md-fill {
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important
    }

    .flex-md-grow-0 {
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important
    }

    .flex-md-grow-1 {
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important
    }

    .flex-md-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important
    }

    .flex-md-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important
    }

    .justify-content-md-start {
        -ms-flex-pack: start !important;
        justify-content: flex-start !important
    }

    .justify-content-md-end {
        -ms-flex-pack: end !important;
        justify-content: flex-end !important
    }

    .justify-content-md-center {
        -ms-flex-pack: center !important;
        justify-content: center !important
    }

    .justify-content-md-between {
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
    }

    .justify-content-md-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important
    }

    .align-items-md-start {
        -ms-flex-align: start !important;
        align-items: flex-start !important
    }

    .align-items-md-end {
        -ms-flex-align: end !important;
        align-items: flex-end !important
    }

    .align-items-md-center {
        -ms-flex-align: center !important;
        align-items: center !important
    }

    .align-items-md-baseline {
        -ms-flex-align: baseline !important;
        align-items: baseline !important
    }

    .align-items-md-stretch {
        -ms-flex-align: stretch !important;
        align-items: stretch !important
    }

    .align-content-md-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important
    }

    .align-content-md-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important
    }

    .align-content-md-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important
    }

    .align-content-md-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important
    }

    .align-content-md-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important
    }

    .align-content-md-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important
    }

    .align-self-md-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important
    }

    .align-self-md-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important
    }

    .align-self-md-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important
    }

    .align-self-md-center {
        -ms-flex-item-align: center !important;
        align-self: center !important
    }

    .align-self-md-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important
    }

    .align-self-md-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important
    }
}

@media (min-width:992px) {
    .flex-lg-row {
        -ms-flex-direction: row !important;
        flex-direction: row !important
    }

    .flex-lg-column {
        -ms-flex-direction: column !important;
        flex-direction: column !important
    }

    .flex-lg-row-reverse {
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important
    }

    .flex-lg-column-reverse {
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important
    }

    .flex-lg-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important
    }

    .flex-lg-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important
    }

    .flex-lg-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important
    }

    .flex-lg-fill {
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important
    }

    .flex-lg-grow-0 {
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important
    }

    .flex-lg-grow-1 {
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important
    }

    .flex-lg-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important
    }

    .flex-lg-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important
    }

    .justify-content-lg-start {
        -ms-flex-pack: start !important;
        justify-content: flex-start !important
    }

    .justify-content-lg-end {
        -ms-flex-pack: end !important;
        justify-content: flex-end !important
    }

    .justify-content-lg-center {
        -ms-flex-pack: center !important;
        justify-content: center !important
    }

    .justify-content-lg-between {
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
    }

    .justify-content-lg-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important
    }

    .align-items-lg-start {
        -ms-flex-align: start !important;
        align-items: flex-start !important
    }

    .align-items-lg-end {
        -ms-flex-align: end !important;
        align-items: flex-end !important
    }

    .align-items-lg-center {
        -ms-flex-align: center !important;
        align-items: center !important
    }

    .align-items-lg-baseline {
        -ms-flex-align: baseline !important;
        align-items: baseline !important
    }

    .align-items-lg-stretch {
        -ms-flex-align: stretch !important;
        align-items: stretch !important
    }

    .align-content-lg-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important
    }

    .align-content-lg-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important
    }

    .align-content-lg-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important
    }

    .align-content-lg-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important
    }

    .align-content-lg-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important
    }

    .align-content-lg-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important
    }

    .align-self-lg-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important
    }

    .align-self-lg-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important
    }

    .align-self-lg-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important
    }

    .align-self-lg-center {
        -ms-flex-item-align: center !important;
        align-self: center !important
    }

    .align-self-lg-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important
    }

    .align-self-lg-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important
    }
}

@media (min-width:1200px) {
    .flex-xl-row {
        -ms-flex-direction: row !important;
        flex-direction: row !important
    }

    .flex-xl-column {
        -ms-flex-direction: column !important;
        flex-direction: column !important
    }

    .flex-xl-row-reverse {
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important
    }

    .flex-xl-column-reverse {
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important
    }

    .flex-xl-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important
    }

    .flex-xl-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important
    }

    .flex-xl-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important
    }

    .flex-xl-fill {
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important
    }

    .flex-xl-grow-0 {
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important
    }

    .flex-xl-grow-1 {
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important
    }

    .flex-xl-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important
    }

    .flex-xl-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important
    }

    .justify-content-xl-start {
        -ms-flex-pack: start !important;
        justify-content: flex-start !important
    }

    .justify-content-xl-end {
        -ms-flex-pack: end !important;
        justify-content: flex-end !important
    }

    .justify-content-xl-center {
        -ms-flex-pack: center !important;
        justify-content: center !important
    }

    .justify-content-xl-between {
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
    }

    .justify-content-xl-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important
    }

    .align-items-xl-start {
        -ms-flex-align: start !important;
        align-items: flex-start !important
    }

    .align-items-xl-end {
        -ms-flex-align: end !important;
        align-items: flex-end !important
    }

    .align-items-xl-center {
        -ms-flex-align: center !important;
        align-items: center !important
    }

    .align-items-xl-baseline {
        -ms-flex-align: baseline !important;
        align-items: baseline !important
    }

    .align-items-xl-stretch {
        -ms-flex-align: stretch !important;
        align-items: stretch !important
    }

    .align-content-xl-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important
    }

    .align-content-xl-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important
    }

    .align-content-xl-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important
    }

    .align-content-xl-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important
    }

    .align-content-xl-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important
    }

    .align-content-xl-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important
    }

    .align-self-xl-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important
    }

    .align-self-xl-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important
    }

    .align-self-xl-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important
    }

    .align-self-xl-center {
        -ms-flex-item-align: center !important;
        align-self: center !important
    }

    .align-self-xl-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important
    }

    .align-self-xl-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important
    }
}

.float-left {
    float: left !important
}

.float-right {
    float: right !important
}

.float-none {
    float: none !important
}

@media (min-width:576px) {
    .float-sm-left {
        float: left !important
    }

    .float-sm-right {
        float: right !important
    }

    .float-sm-none {
        float: none !important
    }
}

@media (min-width:768px) {
    .float-md-left {
        float: left !important
    }

    .float-md-right {
        float: right !important
    }

    .float-md-none {
        float: none !important
    }
}

@media (min-width:992px) {
    .float-lg-left {
        float: left !important
    }

    .float-lg-right {
        float: right !important
    }

    .float-lg-none {
        float: none !important
    }
}

@media (min-width:1200px) {
    .float-xl-left {
        float: left !important
    }

    .float-xl-right {
        float: right !important
    }

    .float-xl-none {
        float: none !important
    }
}

.overflow-auto {
    overflow: auto !important
}

.overflow-hidden {
    overflow: hidden !important
}

.position-static {
    position: static !important
}

.position-relative {
    position: relative !important
}

.position-absolute {
    position: absolute !important
}

.position-fixed {
    position: fixed !important
}

.position-sticky {
    position: -webkit-sticky !important;
    position: sticky !important
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030
}

@supports ((position:-webkit-sticky) or (position:sticky)) {
    .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020
    }
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0
}

.sr-only-focusable:active,
.sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    overflow: visible;
    clip: auto;
    white-space: normal
}

.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important
}

.shadow {
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important
}

.shadow-lg {
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important
}

.shadow-none {
    box-shadow: none !important
}

.w-25 {
    width: 25% !important
}

.w-50 {
    width: 50% !important
}

.w-75 {
    width: 75% !important
}

.w-100 {
    width: 100% !important
}

.w-auto {
    width: auto !important
}

.h-25 {
    height: 25% !important
}

.h-50 {
    height: 50% !important
}

.h-75 {
    height: 75% !important
}

.h-100 {
    height: 100% !important
}

.h-auto {
    height: auto !important
}

.mw-100 {
    max-width: 100% !important
}

.mh-100 {
    max-height: 100% !important
}

.min-vw-100 {
    min-width: 100vw !important
}

.min-vh-100 {
    min-height: 100vh !important
}

.vw-100 {
    width: 100vw !important
}

.vh-100 {
    height: 100vh !important
}

.stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
    content: "";
    background-color: rgba(0, 0, 0, 0)
}

.m-0 {
    margin: 0 !important
}

.mt-0,
.my-0 {
    margin-top: 0 !important
}

.mr-0,
.mx-0 {
    margin-right: 0 !important
}

.mb-0,
.my-0 {
    margin-bottom: 0 !important
}

.ml-0,
.mx-0 {
    margin-left: 0 !important
}

.m-1 {
    margin: .25rem !important
}

.mt-1,
.my-1 {
    margin-top: .25rem !important
}

.mr-1,
.mx-1 {
    margin-right: .25rem !important
}

.mb-1,
.my-1 {
    margin-bottom: .25rem !important
}

.ml-1,
.mx-1 {
    margin-left: .25rem !important
}

.m-2 {
    margin: .5rem !important
}

.mt-2,
.my-2 {
    margin-top: .5rem !important
}

.mr-2,
.mx-2 {
    margin-right: .5rem !important
}

.mb-2,
.my-2 {
    margin-bottom: .5rem !important
}

.ml-2,
.mx-2 {
    margin-left: .5rem !important
}

.m-3 {
    margin: 1rem !important
}

.mt-3,
.my-3 {
    margin-top: 1rem !important
}

.mr-3,
.mx-3 {
    margin-right: 1rem !important
}

.mb-3,
.my-3 {
    margin-bottom: 1rem !important
}

.ml-3,
.mx-3 {
    margin-left: 1rem !important
}

.m-4 {
    margin: 1.5rem !important
}

.mt-4,
.my-4 {
    margin-top: 1.5rem !important
}

.mr-4,
.mx-4 {
    margin-right: 1.5rem !important
}

.mb-4,
.my-4 {
    margin-bottom: 1.5rem !important
}

.ml-4,
.mx-4 {
    margin-left: 1.5rem !important
}

.m-5 {
    margin: 3rem !important
}

.mt-5,
.my-5 {
    margin-top: 3rem !important
}

.mr-5,
.mx-5 {
    margin-right: 3rem !important
}

.mb-5,
.my-5 {
    margin-bottom: 3rem !important
}

.ml-5,
.mx-5 {
    margin-left: 3rem !important
}

.p-0 {
    padding: 0 !important
}

.pt-0,
.py-0 {
    padding-top: 0 !important
}

.pr-0,
.px-0 {
    padding-right: 0 !important
}

.pb-0,
.py-0 {
    padding-bottom: 0 !important
}

.pl-0,
.px-0 {
    padding-left: 0 !important
}

.p-1 {
    padding: .25rem !important
}

.pt-1,
.py-1 {
    padding-top: .25rem !important
}

.pr-1,
.px-1 {
    padding-right: .25rem !important
}

.pb-1,
.py-1 {
    padding-bottom: .25rem !important
}

.pl-1,
.px-1 {
    padding-left: .25rem !important
}

.p-2 {
    padding: .5rem !important
}

.pt-2,
.py-2 {
    padding-top: .5rem !important
}

.pr-2,
.px-2 {
    padding-right: .5rem !important
}

.pb-2,
.py-2 {
    padding-bottom: .5rem !important
}

.pl-2,
.px-2 {
    padding-left: .5rem !important
}

.p-3 {
    padding: 1rem !important
}

.pt-3,
.py-3 {
    padding-top: 1rem !important
}

.pr-3,
.px-3 {
    padding-right: 1rem !important
}

.pb-3,
.py-3 {
    padding-bottom: 1rem !important
}

.pl-3,
.px-3 {
    padding-left: 1rem !important
}

.p-4 {
    padding: 1.5rem !important
}

.pt-4,
.py-4 {
    padding-top: 1.5rem !important
}

.pr-4,
.px-4 {
    padding-right: 1.5rem !important
}

.pb-4,
.py-4 {
    padding-bottom: 1.5rem !important
}

.pl-4,
.px-4 {
    padding-left: 1.5rem !important
}

.p-5 {
    padding: 3rem !important
}

.pt-5,
.py-5 {
    padding-top: 3rem !important
}

.pr-5,
.px-5 {
    padding-right: 3rem !important
}

.pb-5,
.py-5 {
    padding-bottom: 3rem !important
}

.pl-5,
.px-5 {
    padding-left: 3rem !important
}

.m-n1 {
    margin: -.25rem !important
}

.mt-n1,
.my-n1 {
    margin-top: -.25rem !important
}

.mr-n1,
.mx-n1 {
    margin-right: -.25rem !important
}

.mb-n1,
.my-n1 {
    margin-bottom: -.25rem !important
}

.ml-n1,
.mx-n1 {
    margin-left: -.25rem !important
}

.m-n2 {
    margin: -.5rem !important
}

.mt-n2,
.my-n2 {
    margin-top: -.5rem !important
}

.mr-n2,
.mx-n2 {
    margin-right: -.5rem !important
}

.mb-n2,
.my-n2 {
    margin-bottom: -.5rem !important
}

.ml-n2,
.mx-n2 {
    margin-left: -.5rem !important
}

.m-n3 {
    margin: -1rem !important
}

.mt-n3,
.my-n3 {
    margin-top: -1rem !important
}

.mr-n3,
.mx-n3 {
    margin-right: -1rem !important
}

.mb-n3,
.my-n3 {
    margin-bottom: -1rem !important
}

.ml-n3,
.mx-n3 {
    margin-left: -1rem !important
}

.m-n4 {
    margin: -1.5rem !important
}

.mt-n4,
.my-n4 {
    margin-top: -1.5rem !important
}

.mr-n4,
.mx-n4 {
    margin-right: -1.5rem !important
}

.mb-n4,
.my-n4 {
    margin-bottom: -1.5rem !important
}

.ml-n4,
.mx-n4 {
    margin-left: -1.5rem !important
}

.m-n5 {
    margin: -3rem !important
}

.mt-n5,
.my-n5 {
    margin-top: -3rem !important
}

.mr-n5,
.mx-n5 {
    margin-right: -3rem !important
}

.mb-n5,
.my-n5 {
    margin-bottom: -3rem !important
}

.ml-n5,
.mx-n5 {
    margin-left: -3rem !important
}

.m-auto {
    margin: auto !important
}

.mt-auto,
.my-auto {
    margin-top: auto !important
}

.mr-auto,
.mx-auto {
    margin-right: auto !important
}

.mb-auto,
.my-auto {
    margin-bottom: auto !important
}

.ml-auto,
.mx-auto {
    margin-left: auto !important
}

@media (min-width:576px) {
    .m-sm-0 {
        margin: 0 !important
    }

    .mt-sm-0,
    .my-sm-0 {
        margin-top: 0 !important
    }

    .mr-sm-0,
    .mx-sm-0 {
        margin-right: 0 !important
    }

    .mb-sm-0,
    .my-sm-0 {
        margin-bottom: 0 !important
    }

    .ml-sm-0,
    .mx-sm-0 {
        margin-left: 0 !important
    }

    .m-sm-1 {
        margin: .25rem !important
    }

    .mt-sm-1,
    .my-sm-1 {
        margin-top: .25rem !important
    }

    .mr-sm-1,
    .mx-sm-1 {
        margin-right: .25rem !important
    }

    .mb-sm-1,
    .my-sm-1 {
        margin-bottom: .25rem !important
    }

    .ml-sm-1,
    .mx-sm-1 {
        margin-left: .25rem !important
    }

    .m-sm-2 {
        margin: .5rem !important
    }

    .mt-sm-2,
    .my-sm-2 {
        margin-top: .5rem !important
    }

    .mr-sm-2,
    .mx-sm-2 {
        margin-right: .5rem !important
    }

    .mb-sm-2,
    .my-sm-2 {
        margin-bottom: .5rem !important
    }

    .ml-sm-2,
    .mx-sm-2 {
        margin-left: .5rem !important
    }

    .m-sm-3 {
        margin: 1rem !important
    }

    .mt-sm-3,
    .my-sm-3 {
        margin-top: 1rem !important
    }

    .mr-sm-3,
    .mx-sm-3 {
        margin-right: 1rem !important
    }

    .mb-sm-3,
    .my-sm-3 {
        margin-bottom: 1rem !important
    }

    .ml-sm-3,
    .mx-sm-3 {
        margin-left: 1rem !important
    }

    .m-sm-4 {
        margin: 1.5rem !important
    }

    .mt-sm-4,
    .my-sm-4 {
        margin-top: 1.5rem !important
    }

    .mr-sm-4,
    .mx-sm-4 {
        margin-right: 1.5rem !important
    }

    .mb-sm-4,
    .my-sm-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-sm-4,
    .mx-sm-4 {
        margin-left: 1.5rem !important
    }

    .m-sm-5 {
        margin: 3rem !important
    }

    .mt-sm-5,
    .my-sm-5 {
        margin-top: 3rem !important
    }

    .mr-sm-5,
    .mx-sm-5 {
        margin-right: 3rem !important
    }

    .mb-sm-5,
    .my-sm-5 {
        margin-bottom: 3rem !important
    }

    .ml-sm-5,
    .mx-sm-5 {
        margin-left: 3rem !important
    }

    .p-sm-0 {
        padding: 0 !important
    }

    .pt-sm-0,
    .py-sm-0 {
        padding-top: 0 !important
    }

    .pr-sm-0,
    .px-sm-0 {
        padding-right: 0 !important
    }

    .pb-sm-0,
    .py-sm-0 {
        padding-bottom: 0 !important
    }

    .pl-sm-0,
    .px-sm-0 {
        padding-left: 0 !important
    }

    .p-sm-1 {
        padding: .25rem !important
    }

    .pt-sm-1,
    .py-sm-1 {
        padding-top: .25rem !important
    }

    .pr-sm-1,
    .px-sm-1 {
        padding-right: .25rem !important
    }

    .pb-sm-1,
    .py-sm-1 {
        padding-bottom: .25rem !important
    }

    .pl-sm-1,
    .px-sm-1 {
        padding-left: .25rem !important
    }

    .p-sm-2 {
        padding: .5rem !important
    }

    .pt-sm-2,
    .py-sm-2 {
        padding-top: .5rem !important
    }

    .pr-sm-2,
    .px-sm-2 {
        padding-right: .5rem !important
    }

    .pb-sm-2,
    .py-sm-2 {
        padding-bottom: .5rem !important
    }

    .pl-sm-2,
    .px-sm-2 {
        padding-left: .5rem !important
    }

    .p-sm-3 {
        padding: 1rem !important
    }

    .pt-sm-3,
    .py-sm-3 {
        padding-top: 1rem !important
    }

    .pr-sm-3,
    .px-sm-3 {
        padding-right: 1rem !important
    }

    .pb-sm-3,
    .py-sm-3 {
        padding-bottom: 1rem !important
    }

    .pl-sm-3,
    .px-sm-3 {
        padding-left: 1rem !important
    }

    .p-sm-4 {
        padding: 1.5rem !important
    }

    .pt-sm-4,
    .py-sm-4 {
        padding-top: 1.5rem !important
    }

    .pr-sm-4,
    .px-sm-4 {
        padding-right: 1.5rem !important
    }

    .pb-sm-4,
    .py-sm-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-sm-4,
    .px-sm-4 {
        padding-left: 1.5rem !important
    }

    .p-sm-5 {
        padding: 3rem !important
    }

    .pt-sm-5,
    .py-sm-5 {
        padding-top: 3rem !important
    }

    .pr-sm-5,
    .px-sm-5 {
        padding-right: 3rem !important
    }

    .pb-sm-5,
    .py-sm-5 {
        padding-bottom: 3rem !important
    }

    .pl-sm-5,
    .px-sm-5 {
        padding-left: 3rem !important
    }

    .m-sm-n1 {
        margin: -.25rem !important
    }

    .mt-sm-n1,
    .my-sm-n1 {
        margin-top: -.25rem !important
    }

    .mr-sm-n1,
    .mx-sm-n1 {
        margin-right: -.25rem !important
    }

    .mb-sm-n1,
    .my-sm-n1 {
        margin-bottom: -.25rem !important
    }

    .ml-sm-n1,
    .mx-sm-n1 {
        margin-left: -.25rem !important
    }

    .m-sm-n2 {
        margin: -.5rem !important
    }

    .mt-sm-n2,
    .my-sm-n2 {
        margin-top: -.5rem !important
    }

    .mr-sm-n2,
    .mx-sm-n2 {
        margin-right: -.5rem !important
    }

    .mb-sm-n2,
    .my-sm-n2 {
        margin-bottom: -.5rem !important
    }

    .ml-sm-n2,
    .mx-sm-n2 {
        margin-left: -.5rem !important
    }

    .m-sm-n3 {
        margin: -1rem !important
    }

    .mt-sm-n3,
    .my-sm-n3 {
        margin-top: -1rem !important
    }

    .mr-sm-n3,
    .mx-sm-n3 {
        margin-right: -1rem !important
    }

    .mb-sm-n3,
    .my-sm-n3 {
        margin-bottom: -1rem !important
    }

    .ml-sm-n3,
    .mx-sm-n3 {
        margin-left: -1rem !important
    }

    .m-sm-n4 {
        margin: -1.5rem !important
    }

    .mt-sm-n4,
    .my-sm-n4 {
        margin-top: -1.5rem !important
    }

    .mr-sm-n4,
    .mx-sm-n4 {
        margin-right: -1.5rem !important
    }

    .mb-sm-n4,
    .my-sm-n4 {
        margin-bottom: -1.5rem !important
    }

    .ml-sm-n4,
    .mx-sm-n4 {
        margin-left: -1.5rem !important
    }

    .m-sm-n5 {
        margin: -3rem !important
    }

    .mt-sm-n5,
    .my-sm-n5 {
        margin-top: -3rem !important
    }

    .mr-sm-n5,
    .mx-sm-n5 {
        margin-right: -3rem !important
    }

    .mb-sm-n5,
    .my-sm-n5 {
        margin-bottom: -3rem !important
    }

    .ml-sm-n5,
    .mx-sm-n5 {
        margin-left: -3rem !important
    }

    .m-sm-auto {
        margin: auto !important
    }

    .mt-sm-auto,
    .my-sm-auto {
        margin-top: auto !important
    }

    .mr-sm-auto,
    .mx-sm-auto {
        margin-right: auto !important
    }

    .mb-sm-auto,
    .my-sm-auto {
        margin-bottom: auto !important
    }

    .ml-sm-auto,
    .mx-sm-auto {
        margin-left: auto !important
    }
}

@media (min-width:768px) {
    .m-md-0 {
        margin: 0 !important
    }

    .mt-md-0,
    .my-md-0 {
        margin-top: 0 !important
    }

    .mr-md-0,
    .mx-md-0 {
        margin-right: 0 !important
    }

    .mb-md-0,
    .my-md-0 {
        margin-bottom: 0 !important
    }

    .ml-md-0,
    .mx-md-0 {
        margin-left: 0 !important
    }

    .m-md-1 {
        margin: .25rem !important
    }

    .mt-md-1,
    .my-md-1 {
        margin-top: .25rem !important
    }

    .mr-md-1,
    .mx-md-1 {
        margin-right: .25rem !important
    }

    .mb-md-1,
    .my-md-1 {
        margin-bottom: .25rem !important
    }

    .ml-md-1,
    .mx-md-1 {
        margin-left: .25rem !important
    }

    .m-md-2 {
        margin: .5rem !important
    }

    .mt-md-2,
    .my-md-2 {
        margin-top: .5rem !important
    }

    .mr-md-2,
    .mx-md-2 {
        margin-right: .5rem !important
    }

    .mb-md-2,
    .my-md-2 {
        margin-bottom: .5rem !important
    }

    .ml-md-2,
    .mx-md-2 {
        margin-left: .5rem !important
    }

    .m-md-3 {
        margin: 1rem !important
    }

    .mt-md-3,
    .my-md-3 {
        margin-top: 1rem !important
    }

    .mr-md-3,
    .mx-md-3 {
        margin-right: 1rem !important
    }

    .mb-md-3,
    .my-md-3 {
        margin-bottom: 1rem !important
    }

    .ml-md-3,
    .mx-md-3 {
        margin-left: 1rem !important
    }

    .m-md-4 {
        margin: 1.5rem !important
    }

    .mt-md-4,
    .my-md-4 {
        margin-top: 1.5rem !important
    }

    .mr-md-4,
    .mx-md-4 {
        margin-right: 1.5rem !important
    }

    .mb-md-4,
    .my-md-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-md-4,
    .mx-md-4 {
        margin-left: 1.5rem !important
    }

    .m-md-5 {
        margin: 3rem !important
    }

    .mt-md-5,
    .my-md-5 {
        margin-top: 3rem !important
    }

    .mr-md-5,
    .mx-md-5 {
        margin-right: 3rem !important
    }

    .mb-md-5,
    .my-md-5 {
        margin-bottom: 3rem !important
    }

    .ml-md-5,
    .mx-md-5 {
        margin-left: 3rem !important
    }

    .p-md-0 {
        padding: 0 !important
    }

    .pt-md-0,
    .py-md-0 {
        padding-top: 0 !important
    }

    .pr-md-0,
    .px-md-0 {
        padding-right: 0 !important
    }

    .pb-md-0,
    .py-md-0 {
        padding-bottom: 0 !important
    }

    .pl-md-0,
    .px-md-0 {
        padding-left: 0 !important
    }

    .p-md-1 {
        padding: .25rem !important
    }

    .pt-md-1,
    .py-md-1 {
        padding-top: .25rem !important
    }

    .pr-md-1,
    .px-md-1 {
        padding-right: .25rem !important
    }

    .pb-md-1,
    .py-md-1 {
        padding-bottom: .25rem !important
    }

    .pl-md-1,
    .px-md-1 {
        padding-left: .25rem !important
    }

    .p-md-2 {
        padding: .5rem !important
    }

    .pt-md-2,
    .py-md-2 {
        padding-top: .5rem !important
    }

    .pr-md-2,
    .px-md-2 {
        padding-right: .5rem !important
    }

    .pb-md-2,
    .py-md-2 {
        padding-bottom: .5rem !important
    }

    .pl-md-2,
    .px-md-2 {
        padding-left: .5rem !important
    }

    .p-md-3 {
        padding: 1rem !important
    }

    .pt-md-3,
    .py-md-3 {
        padding-top: 1rem !important
    }

    .pr-md-3,
    .px-md-3 {
        padding-right: 1rem !important
    }

    .pb-md-3,
    .py-md-3 {
        padding-bottom: 1rem !important
    }

    .pl-md-3,
    .px-md-3 {
        padding-left: 1rem !important
    }

    .p-md-4 {
        padding: 1.5rem !important
    }

    .pt-md-4,
    .py-md-4 {
        padding-top: 1.5rem !important
    }

    .pr-md-4,
    .px-md-4 {
        padding-right: 1.5rem !important
    }

    .pb-md-4,
    .py-md-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-md-4,
    .px-md-4 {
        padding-left: 1.5rem !important
    }

    .p-md-5 {
        padding: 3rem !important
    }

    .pt-md-5,
    .py-md-5 {
        padding-top: 3rem !important
    }

    .pr-md-5,
    .px-md-5 {
        padding-right: 3rem !important
    }

    .pb-md-5,
    .py-md-5 {
        padding-bottom: 3rem !important
    }

    .pl-md-5,
    .px-md-5 {
        padding-left: 3rem !important
    }

    .m-md-n1 {
        margin: -.25rem !important
    }

    .mt-md-n1,
    .my-md-n1 {
        margin-top: -.25rem !important
    }

    .mr-md-n1,
    .mx-md-n1 {
        margin-right: -.25rem !important
    }

    .mb-md-n1,
    .my-md-n1 {
        margin-bottom: -.25rem !important
    }

    .ml-md-n1,
    .mx-md-n1 {
        margin-left: -.25rem !important
    }

    .m-md-n2 {
        margin: -.5rem !important
    }

    .mt-md-n2,
    .my-md-n2 {
        margin-top: -.5rem !important
    }

    .mr-md-n2,
    .mx-md-n2 {
        margin-right: -.5rem !important
    }

    .mb-md-n2,
    .my-md-n2 {
        margin-bottom: -.5rem !important
    }

    .ml-md-n2,
    .mx-md-n2 {
        margin-left: -.5rem !important
    }

    .m-md-n3 {
        margin: -1rem !important
    }

    .mt-md-n3,
    .my-md-n3 {
        margin-top: -1rem !important
    }

    .mr-md-n3,
    .mx-md-n3 {
        margin-right: -1rem !important
    }

    .mb-md-n3,
    .my-md-n3 {
        margin-bottom: -1rem !important
    }

    .ml-md-n3,
    .mx-md-n3 {
        margin-left: -1rem !important
    }

    .m-md-n4 {
        margin: -1.5rem !important
    }

    .mt-md-n4,
    .my-md-n4 {
        margin-top: -1.5rem !important
    }

    .mr-md-n4,
    .mx-md-n4 {
        margin-right: -1.5rem !important
    }

    .mb-md-n4,
    .my-md-n4 {
        margin-bottom: -1.5rem !important
    }

    .ml-md-n4,
    .mx-md-n4 {
        margin-left: -1.5rem !important
    }

    .m-md-n5 {
        margin: -3rem !important
    }

    .mt-md-n5,
    .my-md-n5 {
        margin-top: -3rem !important
    }

    .mr-md-n5,
    .mx-md-n5 {
        margin-right: -3rem !important
    }

    .mb-md-n5,
    .my-md-n5 {
        margin-bottom: -3rem !important
    }

    .ml-md-n5,
    .mx-md-n5 {
        margin-left: -3rem !important
    }

    .m-md-auto {
        margin: auto !important
    }

    .mt-md-auto,
    .my-md-auto {
        margin-top: auto !important
    }

    .mr-md-auto,
    .mx-md-auto {
        margin-right: auto !important
    }

    .mb-md-auto,
    .my-md-auto {
        margin-bottom: auto !important
    }

    .ml-md-auto,
    .mx-md-auto {
        margin-left: auto !important
    }
}

@media (min-width:992px) {
    .m-lg-0 {
        margin: 0 !important
    }

    .mt-lg-0,
    .my-lg-0 {
        margin-top: 0 !important
    }

    .mr-lg-0,
    .mx-lg-0 {
        margin-right: 0 !important
    }

    .mb-lg-0,
    .my-lg-0 {
        margin-bottom: 0 !important
    }

    .ml-lg-0,
    .mx-lg-0 {
        margin-left: 0 !important
    }

    .m-lg-1 {
        margin: .25rem !important
    }

    .mt-lg-1,
    .my-lg-1 {
        margin-top: .25rem !important
    }

    .mr-lg-1,
    .mx-lg-1 {
        margin-right: .25rem !important
    }

    .mb-lg-1,
    .my-lg-1 {
        margin-bottom: .25rem !important
    }

    .ml-lg-1,
    .mx-lg-1 {
        margin-left: .25rem !important
    }

    .m-lg-2 {
        margin: .5rem !important
    }

    .mt-lg-2,
    .my-lg-2 {
        margin-top: .5rem !important
    }

    .mr-lg-2,
    .mx-lg-2 {
        margin-right: .5rem !important
    }

    .mb-lg-2,
    .my-lg-2 {
        margin-bottom: .5rem !important
    }

    .ml-lg-2,
    .mx-lg-2 {
        margin-left: .5rem !important
    }

    .m-lg-3 {
        margin: 1rem !important
    }

    .mt-lg-3,
    .my-lg-3 {
        margin-top: 1rem !important
    }

    .mr-lg-3,
    .mx-lg-3 {
        margin-right: 1rem !important
    }

    .mb-lg-3,
    .my-lg-3 {
        margin-bottom: 1rem !important
    }

    .ml-lg-3,
    .mx-lg-3 {
        margin-left: 1rem !important
    }

    .m-lg-4 {
        margin: 1.5rem !important
    }

    .mt-lg-4,
    .my-lg-4 {
        margin-top: 1.5rem !important
    }

    .mr-lg-4,
    .mx-lg-4 {
        margin-right: 1.5rem !important
    }

    .mb-lg-4,
    .my-lg-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-lg-4,
    .mx-lg-4 {
        margin-left: 1.5rem !important
    }

    .m-lg-5 {
        margin: 3rem !important
    }

    .mt-lg-5,
    .my-lg-5 {
        margin-top: 3rem !important
    }

    .mr-lg-5,
    .mx-lg-5 {
        margin-right: 3rem !important
    }

    .mb-lg-5,
    .my-lg-5 {
        margin-bottom: 3rem !important
    }

    .ml-lg-5,
    .mx-lg-5 {
        margin-left: 3rem !important
    }

    .p-lg-0 {
        padding: 0 !important
    }

    .pt-lg-0,
    .py-lg-0 {
        padding-top: 0 !important
    }

    .pr-lg-0,
    .px-lg-0 {
        padding-right: 0 !important
    }

    .pb-lg-0,
    .py-lg-0 {
        padding-bottom: 0 !important
    }

    .pl-lg-0,
    .px-lg-0 {
        padding-left: 0 !important
    }

    .p-lg-1 {
        padding: .25rem !important
    }

    .pt-lg-1,
    .py-lg-1 {
        padding-top: .25rem !important
    }

    .pr-lg-1,
    .px-lg-1 {
        padding-right: .25rem !important
    }

    .pb-lg-1,
    .py-lg-1 {
        padding-bottom: .25rem !important
    }

    .pl-lg-1,
    .px-lg-1 {
        padding-left: .25rem !important
    }

    .p-lg-2 {
        padding: .5rem !important
    }

    .pt-lg-2,
    .py-lg-2 {
        padding-top: .5rem !important
    }

    .pr-lg-2,
    .px-lg-2 {
        padding-right: .5rem !important
    }

    .pb-lg-2,
    .py-lg-2 {
        padding-bottom: .5rem !important
    }

    .pl-lg-2,
    .px-lg-2 {
        padding-left: .5rem !important
    }

    .p-lg-3 {
        padding: 1rem !important
    }

    .pt-lg-3,
    .py-lg-3 {
        padding-top: 1rem !important
    }

    .pr-lg-3,
    .px-lg-3 {
        padding-right: 1rem !important
    }

    .pb-lg-3,
    .py-lg-3 {
        padding-bottom: 1rem !important
    }

    .pl-lg-3,
    .px-lg-3 {
        padding-left: 1rem !important
    }

    .p-lg-4 {
        padding: 1.5rem !important
    }

    .pt-lg-4,
    .py-lg-4 {
        padding-top: 1.5rem !important
    }

    .pr-lg-4,
    .px-lg-4 {
        padding-right: 1.5rem !important
    }

    .pb-lg-4,
    .py-lg-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-lg-4,
    .px-lg-4 {
        padding-left: 1.5rem !important
    }

    .p-lg-5 {
        padding: 3rem !important
    }

    .pt-lg-5,
    .py-lg-5 {
        padding-top: 3rem !important
    }

    .pr-lg-5,
    .px-lg-5 {
        padding-right: 3rem !important
    }

    .pb-lg-5,
    .py-lg-5 {
        padding-bottom: 3rem !important
    }

    .pl-lg-5,
    .px-lg-5 {
        padding-left: 3rem !important
    }

    .m-lg-n1 {
        margin: -.25rem !important
    }

    .mt-lg-n1,
    .my-lg-n1 {
        margin-top: -.25rem !important
    }

    .mr-lg-n1,
    .mx-lg-n1 {
        margin-right: -.25rem !important
    }

    .mb-lg-n1,
    .my-lg-n1 {
        margin-bottom: -.25rem !important
    }

    .ml-lg-n1,
    .mx-lg-n1 {
        margin-left: -.25rem !important
    }

    .m-lg-n2 {
        margin: -.5rem !important
    }

    .mt-lg-n2,
    .my-lg-n2 {
        margin-top: -.5rem !important
    }

    .mr-lg-n2,
    .mx-lg-n2 {
        margin-right: -.5rem !important
    }

    .mb-lg-n2,
    .my-lg-n2 {
        margin-bottom: -.5rem !important
    }

    .ml-lg-n2,
    .mx-lg-n2 {
        margin-left: -.5rem !important
    }

    .m-lg-n3 {
        margin: -1rem !important
    }

    .mt-lg-n3,
    .my-lg-n3 {
        margin-top: -1rem !important
    }

    .mr-lg-n3,
    .mx-lg-n3 {
        margin-right: -1rem !important
    }

    .mb-lg-n3,
    .my-lg-n3 {
        margin-bottom: -1rem !important
    }

    .ml-lg-n3,
    .mx-lg-n3 {
        margin-left: -1rem !important
    }

    .m-lg-n4 {
        margin: -1.5rem !important
    }

    .mt-lg-n4,
    .my-lg-n4 {
        margin-top: -1.5rem !important
    }

    .mr-lg-n4,
    .mx-lg-n4 {
        margin-right: -1.5rem !important
    }

    .mb-lg-n4,
    .my-lg-n4 {
        margin-bottom: -1.5rem !important
    }

    .ml-lg-n4,
    .mx-lg-n4 {
        margin-left: -1.5rem !important
    }

    .m-lg-n5 {
        margin: -3rem !important
    }

    .mt-lg-n5,
    .my-lg-n5 {
        margin-top: -3rem !important
    }

    .mr-lg-n5,
    .mx-lg-n5 {
        margin-right: -3rem !important
    }

    .mb-lg-n5,
    .my-lg-n5 {
        margin-bottom: -3rem !important
    }

    .ml-lg-n5,
    .mx-lg-n5 {
        margin-left: -3rem !important
    }

    .m-lg-auto {
        margin: auto !important
    }

    .mt-lg-auto,
    .my-lg-auto {
        margin-top: auto !important
    }

    .mr-lg-auto,
    .mx-lg-auto {
        margin-right: auto !important
    }

    .mb-lg-auto,
    .my-lg-auto {
        margin-bottom: auto !important
    }

    .ml-lg-auto,
    .mx-lg-auto {
        margin-left: auto !important
    }
}

@media (min-width:1200px) {
    .m-xl-0 {
        margin: 0 !important
    }

    .mt-xl-0,
    .my-xl-0 {
        margin-top: 0 !important
    }

    .mr-xl-0,
    .mx-xl-0 {
        margin-right: 0 !important
    }

    .mb-xl-0,
    .my-xl-0 {
        margin-bottom: 0 !important
    }

    .ml-xl-0,
    .mx-xl-0 {
        margin-left: 0 !important
    }

    .m-xl-1 {
        margin: .25rem !important
    }

    .mt-xl-1,
    .my-xl-1 {
        margin-top: .25rem !important
    }

    .mr-xl-1,
    .mx-xl-1 {
        margin-right: .25rem !important
    }

    .mb-xl-1,
    .my-xl-1 {
        margin-bottom: .25rem !important
    }

    .ml-xl-1,
    .mx-xl-1 {
        margin-left: .25rem !important
    }

    .m-xl-2 {
        margin: .5rem !important
    }

    .mt-xl-2,
    .my-xl-2 {
        margin-top: .5rem !important
    }

    .mr-xl-2,
    .mx-xl-2 {
        margin-right: .5rem !important
    }

    .mb-xl-2,
    .my-xl-2 {
        margin-bottom: .5rem !important
    }

    .ml-xl-2,
    .mx-xl-2 {
        margin-left: .5rem !important
    }

    .m-xl-3 {
        margin: 1rem !important
    }

    .mt-xl-3,
    .my-xl-3 {
        margin-top: 1rem !important
    }

    .mr-xl-3,
    .mx-xl-3 {
        margin-right: 1rem !important
    }

    .mb-xl-3,
    .my-xl-3 {
        margin-bottom: 1rem !important
    }

    .ml-xl-3,
    .mx-xl-3 {
        margin-left: 1rem !important
    }

    .m-xl-4 {
        margin: 1.5rem !important
    }

    .mt-xl-4,
    .my-xl-4 {
        margin-top: 1.5rem !important
    }

    .mr-xl-4,
    .mx-xl-4 {
        margin-right: 1.5rem !important
    }

    .mb-xl-4,
    .my-xl-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-xl-4,
    .mx-xl-4 {
        margin-left: 1.5rem !important
    }

    .m-xl-5 {
        margin: 3rem !important
    }

    .mt-xl-5,
    .my-xl-5 {
        margin-top: 3rem !important
    }

    .mr-xl-5,
    .mx-xl-5 {
        margin-right: 3rem !important
    }

    .mb-xl-5,
    .my-xl-5 {
        margin-bottom: 3rem !important
    }

    .ml-xl-5,
    .mx-xl-5 {
        margin-left: 3rem !important
    }

    .p-xl-0 {
        padding: 0 !important
    }

    .pt-xl-0,
    .py-xl-0 {
        padding-top: 0 !important
    }

    .pr-xl-0,
    .px-xl-0 {
        padding-right: 0 !important
    }

    .pb-xl-0,
    .py-xl-0 {
        padding-bottom: 0 !important
    }

    .pl-xl-0,
    .px-xl-0 {
        padding-left: 0 !important
    }

    .p-xl-1 {
        padding: .25rem !important
    }

    .pt-xl-1,
    .py-xl-1 {
        padding-top: .25rem !important
    }

    .pr-xl-1,
    .px-xl-1 {
        padding-right: .25rem !important
    }

    .pb-xl-1,
    .py-xl-1 {
        padding-bottom: .25rem !important
    }

    .pl-xl-1,
    .px-xl-1 {
        padding-left: .25rem !important
    }

    .p-xl-2 {
        padding: .5rem !important
    }

    .pt-xl-2,
    .py-xl-2 {
        padding-top: .5rem !important
    }

    .pr-xl-2,
    .px-xl-2 {
        padding-right: .5rem !important
    }

    .pb-xl-2,
    .py-xl-2 {
        padding-bottom: .5rem !important
    }

    .pl-xl-2,
    .px-xl-2 {
        padding-left: .5rem !important
    }

    .p-xl-3 {
        padding: 1rem !important
    }

    .pt-xl-3,
    .py-xl-3 {
        padding-top: 1rem !important
    }

    .pr-xl-3,
    .px-xl-3 {
        padding-right: 1rem !important
    }

    .pb-xl-3,
    .py-xl-3 {
        padding-bottom: 1rem !important
    }

    .pl-xl-3,
    .px-xl-3 {
        padding-left: 1rem !important
    }

    .p-xl-4 {
        padding: 1.5rem !important
    }

    .pt-xl-4,
    .py-xl-4 {
        padding-top: 1.5rem !important
    }

    .pr-xl-4,
    .px-xl-4 {
        padding-right: 1.5rem !important
    }

    .pb-xl-4,
    .py-xl-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-xl-4,
    .px-xl-4 {
        padding-left: 1.5rem !important
    }

    .p-xl-5 {
        padding: 3rem !important
    }

    .pt-xl-5,
    .py-xl-5 {
        padding-top: 3rem !important
    }

    .pr-xl-5,
    .px-xl-5 {
        padding-right: 3rem !important
    }

    .pb-xl-5,
    .py-xl-5 {
        padding-bottom: 3rem !important
    }

    .pl-xl-5,
    .px-xl-5 {
        padding-left: 3rem !important
    }

    .m-xl-n1 {
        margin: -.25rem !important
    }

    .mt-xl-n1,
    .my-xl-n1 {
        margin-top: -.25rem !important
    }

    .mr-xl-n1,
    .mx-xl-n1 {
        margin-right: -.25rem !important
    }

    .mb-xl-n1,
    .my-xl-n1 {
        margin-bottom: -.25rem !important
    }

    .ml-xl-n1,
    .mx-xl-n1 {
        margin-left: -.25rem !important
    }

    .m-xl-n2 {
        margin: -.5rem !important
    }

    .mt-xl-n2,
    .my-xl-n2 {
        margin-top: -.5rem !important
    }

    .mr-xl-n2,
    .mx-xl-n2 {
        margin-right: -.5rem !important
    }

    .mb-xl-n2,
    .my-xl-n2 {
        margin-bottom: -.5rem !important
    }

    .ml-xl-n2,
    .mx-xl-n2 {
        margin-left: -.5rem !important
    }

    .m-xl-n3 {
        margin: -1rem !important
    }

    .mt-xl-n3,
    .my-xl-n3 {
        margin-top: -1rem !important
    }

    .mr-xl-n3,
    .mx-xl-n3 {
        margin-right: -1rem !important
    }

    .mb-xl-n3,
    .my-xl-n3 {
        margin-bottom: -1rem !important
    }

    .ml-xl-n3,
    .mx-xl-n3 {
        margin-left: -1rem !important
    }

    .m-xl-n4 {
        margin: -1.5rem !important
    }

    .mt-xl-n4,
    .my-xl-n4 {
        margin-top: -1.5rem !important
    }

    .mr-xl-n4,
    .mx-xl-n4 {
        margin-right: -1.5rem !important
    }

    .mb-xl-n4,
    .my-xl-n4 {
        margin-bottom: -1.5rem !important
    }

    .ml-xl-n4,
    .mx-xl-n4 {
        margin-left: -1.5rem !important
    }

    .m-xl-n5 {
        margin: -3rem !important
    }

    .mt-xl-n5,
    .my-xl-n5 {
        margin-top: -3rem !important
    }

    .mr-xl-n5,
    .mx-xl-n5 {
        margin-right: -3rem !important
    }

    .mb-xl-n5,
    .my-xl-n5 {
        margin-bottom: -3rem !important
    }

    .ml-xl-n5,
    .mx-xl-n5 {
        margin-left: -3rem !important
    }

    .m-xl-auto {
        margin: auto !important
    }

    .mt-xl-auto,
    .my-xl-auto {
        margin-top: auto !important
    }

    .mr-xl-auto,
    .mx-xl-auto {
        margin-right: auto !important
    }

    .mb-xl-auto,
    .my-xl-auto {
        margin-bottom: auto !important
    }

    .ml-xl-auto,
    .mx-xl-auto {
        margin-left: auto !important
    }
}

.text-monospace {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important
}

.text-justify {
    text-align: justify !important
}

.text-wrap {
    white-space: normal !important
}

.text-nowrap {
    white-space: nowrap !important
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.text-left {
    text-align: left !important
}

.text-right {
    text-align: right !important
}

.text-center {
    text-align: center !important
}

@media (min-width:576px) {
    .text-sm-left {
        text-align: left !important
    }

    .text-sm-right {
        text-align: right !important
    }

    .text-sm-center {
        text-align: center !important
    }
}

@media (min-width:768px) {
    .text-md-left {
        text-align: left !important
    }

    .text-md-right {
        text-align: right !important
    }

    .text-md-center {
        text-align: center !important
    }
}

@media (min-width:992px) {
    .text-lg-left {
        text-align: left !important
    }

    .text-lg-right {
        text-align: right !important
    }

    .text-lg-center {
        text-align: center !important
    }
}

@media (min-width:1200px) {
    .text-xl-left {
        text-align: left !important
    }

    .text-xl-right {
        text-align: right !important
    }

    .text-xl-center {
        text-align: center !important
    }
}

.text-lowercase {
    text-transform: lowercase !important
}

.text-uppercase {
    text-transform: uppercase !important
}

.text-capitalize {
    text-transform: capitalize !important
}

.font-weight-light {
    font-weight: 300 !important
}

.font-weight-lighter {
    font-weight: lighter !important
}

.font-weight-normal {
    font-weight: 400 !important
}

.font-weight-bold {
    font-weight: 700 !important
}

.font-weight-bolder {
    font-weight: bolder !important
}

.font-italic {
    font-style: italic !important
}

.text-white {
    color: #fff !important
}

.text-primary {
    color: #007bff !important
}

a.text-primary:focus,
a.text-primary:hover {
    color: #0056b3 !important
}

.text-secondary {
    color: #6c757d !important
}

a.text-secondary:focus,
a.text-secondary:hover {
    color: #494f54 !important
}

.text-success {
    color: #28a745 !important
}

a.text-success:focus,
a.text-success:hover {
    color: #19692c !important
}

.text-info {
    color: #17a2b8 !important
}

a.text-info:focus,
a.text-info:hover {
    color: #0f6674 !important
}

.text-warning {
    color: #ffc107 !important
}

a.text-warning:focus,
a.text-warning:hover {
    color: #ba8b00 !important
}

.text-danger {
    color: #dc3545 !important
}

a.text-danger:focus,
a.text-danger:hover {
    color: #a71d2a !important
}

.text-light {
    color: #f8f9fa !important
}

a.text-light:focus,
a.text-light:hover {
    color: #cbd3da !important
}

.text-dark {
    color: #343a40 !important
}

a.text-dark:focus,
a.text-dark:hover {
    color: #121416 !important
}

.text-body {
    color: #212529 !important
}

.text-muted {
    color: #6c757d !important
}

.text-black-50 {
    color: rgba(0, 0, 0, .5) !important
}

.text-white-50 {
    color: rgba(255, 255, 255, .5) !important
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0
}

.text-decoration-none {
    text-decoration: none !important
}

.text-break {
    word-break: break-word !important;
    overflow-wrap: break-word !important
}

.text-reset {
    color: inherit !important
}

.visible {
    visibility: visible !important
}

.invisible {
    visibility: hidden !important
}

@media print {

    *,
    ::after,
    ::before {
        text-shadow: none !important;
        box-shadow: none !important
    }

    a:not(.btn) {
        text-decoration: underline
    }

    abbr[title]::after {
        content: " ("attr(title) ")"
    }

    pre {
        white-space: pre-wrap !important
    }

    blockquote,
    pre {
        border: 1px solid #adb5bd;
        page-break-inside: avoid
    }

    thead {
        display: table-header-group
    }

    img,
    tr {
        page-break-inside: avoid
    }

    h2,
    h3,
    p {
        orphans: 3;
        widows: 3
    }

    h2,
    h3 {
        page-break-after: avoid
    }

    @page {
        size: a3
    }

    body {
        min-width: 992px !important
    }

    .container {
        min-width: 992px !important
    }

    .navbar {
        display: none
    }

    .badge {
        border: 1px solid #000
    }

    .table {
        border-collapse: collapse !important
    }

    .table td,
    .table th {
        background-color: #fff !important
    }

    .table-bordered td,
    .table-bordered th {
        border: 1px solid #dee2e6 !important
    }

    .table-dark {
        color: inherit
    }

    .table-dark tbody+tbody,
    .table-dark td,
    .table-dark th,
    .table-dark thead th {
        border-color: #dee2e6
    }

    .table .thead-dark th {
        color: inherit;
        border-color: #dee2e6
    }
}

/*# sourceMappingURL=bootstrap.min.css.map */


</style>
        <style>
				.flag-icon-background {
	    background-size: contain;
	    background-position: 50%;
	    background-repeat: no-repeat
	}

	.flag-icon {
	    background-size: contain;
	    background-position: 50%;
	    background-repeat: no-repeat;
	    position: relative;
	    display: inline-block;
	    width: 1.33333333em;
	    line-height: 1em
	}

	.flag-icon:before {
	    content: "\00a0"
	}

	.flag-icon.flag-icon-squared {
	    width: 1em
	}

	.flag-icon-ad {
	    background-image: url(../img/flags/4x3/ad.svg)
	}

	.flag-icon-ad.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ad.svg)
	}

	.flag-icon-ae {
	    background-image: url(../img/flags/4x3/ae.svg)
	}

	.flag-icon-ww {
	    background-image: url(../img/flags/4x3/ww.svg)
	}

	.flag-icon-ae.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ae.svg)
	}

	.flag-icon-af {
	    background-image: url(../img/flags/4x3/af.svg)
	}

	.flag-icon-af.flag-icon-squared {
	    background-image: url(../img/flags/1x1/af.svg)
	}

	.flag-icon-ag {
	    background-image: url(../img/flags/4x3/ag.svg)
	}

	.flag-icon-ag.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ag.svg)
	}

	.flag-icon-ai {
	    background-image: url(../img/flags/4x3/ai.svg)
	}

	.flag-icon-ai.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ai.svg)
	}

	.flag-icon-al {
	    background-image: url(../img/flags/4x3/al.svg)
	}

	.flag-icon-al.flag-icon-squared {
	    background-image: url(../img/flags/1x1/al.svg)
	}

	.flag-icon-am {
	    background-image: url(../img/flags/4x3/am.svg)
	}

	.flag-icon-am.flag-icon-squared {
	    background-image: url(../img/flags/1x1/am.svg)
	}

	.flag-icon-ao {
	    background-image: url(../img/flags/4x3/ao.svg)
	}

	.flag-icon-ao.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ao.svg)
	}

	.flag-icon-aq {
	    background-image: url(../img/flags/4x3/aq.svg)
	}

	.flag-icon-aq.flag-icon-squared {
	    background-image: url(../img/flags/1x1/aq.svg)
	}

	.flag-icon-ar {
	    background-image: url(../img/flags/4x3/ar.svg)
	}

	.flag-icon-ar.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ar.svg)
	}

	.flag-icon-as {
	    background-image: url(../img/flags/4x3/as.svg)
	}

	.flag-icon-as.flag-icon-squared {
	    background-image: url(../img/flags/1x1/as.svg)
	}

	.flag-icon-at {
	    background-image: url(../img/flags/4x3/at.svg)
	}

	.flag-icon-at.flag-icon-squared {
	    background-image: url(../img/flags/1x1/at.svg)
	}

	.flag-icon-au {
	    background-image: url(../img/flags/4x3/au.svg)
	}

	.flag-icon-au.flag-icon-squared {
	    background-image: url(../img/flags/1x1/au.svg)
	}

	.flag-icon-aw {
	    background-image: url(../img/flags/4x3/aw.svg)
	}

	.flag-icon-aw.flag-icon-squared {
	    background-image: url(../img/flags/1x1/aw.svg)
	}

	.flag-icon-ax {
	    background-image: url(../img/flags/4x3/ax.svg)
	}

	.flag-icon-ax.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ax.svg)
	}

	.flag-icon-az {
	    background-image: url(../img/flags/4x3/az.svg)
	}

	.flag-icon-az.flag-icon-squared {
	    background-image: url(../img/flags/1x1/az.svg)
	}

	.flag-icon-ba {
	    background-image: url(../img/flags/4x3/ba.svg)
	}

	.flag-icon-ba.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ba.svg)
	}

	.flag-icon-bb {
	    background-image: url(../img/flags/4x3/bb.svg)
	}

	.flag-icon-bb.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bb.svg)
	}

	.flag-icon-bd {
	    background-image: url(../img/flags/4x3/bd.svg)
	}

	.flag-icon-bd.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bd.svg)
	}

	.flag-icon-be {
	    background-image: url(../img/flags/4x3/be.svg)
	}

	.flag-icon-be.flag-icon-squared {
	    background-image: url(../img/flags/1x1/be.svg)
	}

	.flag-icon-bf {
	    background-image: url(../img/flags/4x3/bf.svg)
	}

	.flag-icon-bf.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bf.svg)
	}

	.flag-icon-bg {
	    background-image: url(../img/flags/4x3/bg.svg)
	}

	.flag-icon-bg.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bg.svg)
	}

	.flag-icon-bh {
	    background-image: url(../img/flags/4x3/bh.svg)
	}

	.flag-icon-bh.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bh.svg)
	}

	.flag-icon-bi {
	    background-image: url(../img/flags/4x3/bi.svg)
	}

	.flag-icon-bi.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bi.svg)
	}

	.flag-icon-bj {
	    background-image: url(../img/flags/4x3/bj.svg)
	}

	.flag-icon-bj.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bj.svg)
	}

	.flag-icon-bl {
	    background-image: url(../img/flags/4x3/bl.svg)
	}

	.flag-icon-bl.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bl.svg)
	}

	.flag-icon-bm {
	    background-image: url(../img/flags/4x3/bm.svg)
	}

	.flag-icon-bm.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bm.svg)
	}

	.flag-icon-bn {
	    background-image: url(../img/flags/4x3/bn.svg)
	}

	.flag-icon-bn.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bn.svg)
	}

	.flag-icon-bo {
	    background-image: url(../img/flags/4x3/bo.svg)
	}

	.flag-icon-bo.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bo.svg)
	}

	.flag-icon-bq {
	    background-image: url(../img/flags/4x3/bq.svg)
	}

	.flag-icon-bq.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bq.svg)
	}

	.flag-icon-br {
	    background-image: url(../img/flags/4x3/br.svg)
	}

	.flag-icon-br.flag-icon-squared {
	    background-image: url(../img/flags/1x1/br.svg)
	}

	.flag-icon-bs {
	    background-image: url(../img/flags/4x3/bs.svg)
	}

	.flag-icon-bs.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bs.svg)
	}

	.flag-icon-bt {
	    background-image: url(../img/flags/4x3/bt.svg)
	}

	.flag-icon-bt.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bt.svg)
	}

	.flag-icon-bv {
	    background-image: url(../img/flags/4x3/bv.svg)
	}

	.flag-icon-bv.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bv.svg)
	}

	.flag-icon-bw {
	    background-image: url(../img/flags/4x3/bw.svg)
	}

	.flag-icon-bw.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bw.svg)
	}

	.flag-icon-by {
	    background-image: url(../img/flags/4x3/by.svg)
	}

	.flag-icon-by.flag-icon-squared {
	    background-image: url(../img/flags/1x1/by.svg)
	}

	.flag-icon-bz {
	    background-image: url(../img/flags/4x3/bz.svg)
	}

	.flag-icon-bz.flag-icon-squared {
	    background-image: url(../img/flags/1x1/bz.svg)
	}

	.flag-icon-ca {
	    background-image: url(../img/flags/4x3/ca.svg)
	}

	.flag-icon-ca.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ca.svg)
	}

	.flag-icon-cc {
	    background-image: url(../img/flags/4x3/cc.svg)
	}

	.flag-icon-cc.flag-icon-squared {
	    background-image: url(../img/flags/1x1/cc.svg)
	}

	.flag-icon-cd {
	    background-image: url(../img/flags/4x3/cd.svg)
	}

	.flag-icon-cd.flag-icon-squared {
	    background-image: url(../img/flags/1x1/cd.svg)
	}

	.flag-icon-cf {
	    background-image: url(../img/flags/4x3/cf.svg)
	}

	.flag-icon-cf.flag-icon-squared {
	    background-image: url(../img/flags/1x1/cf.svg)
	}

	.flag-icon-cg {
	    background-image: url(../img/flags/4x3/cg.svg)
	}

	.flag-icon-cg.flag-icon-squared {
	    background-image: url(../img/flags/1x1/cg.svg)
	}

	.flag-icon-ch {
	    background-image: url(../img/flags/4x3/ch.svg)
	}

	.flag-icon-ch.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ch.svg)
	}

	.flag-icon-ci {
	    background-image: url(../img/flags/4x3/ci.svg)
	}

	.flag-icon-ci.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ci.svg)
	}

	.flag-icon-ck {
	    background-image: url(../img/flags/4x3/ck.svg)
	}

	.flag-icon-ck.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ck.svg)
	}

	.flag-icon-cl {
	    background-image: url(../img/flags/4x3/cl.svg)
	}

	.flag-icon-cl.flag-icon-squared {
	    background-image: url(../img/flags/1x1/cl.svg)
	}

	.flag-icon-cm {
	    background-image: url(../img/flags/4x3/cm.svg)
	}

	.flag-icon-cm.flag-icon-squared {
	    background-image: url(../img/flags/1x1/cm.svg)
	}

	.flag-icon-cn {
	    background-image: url(../img/flags/4x3/cn.svg)
	}

	.flag-icon-cn.flag-icon-squared {
	    background-image: url(../img/flags/1x1/cn.svg)
	}

	.flag-icon-co {
	    background-image: url(../img/flags/4x3/co.svg)
	}

	.flag-icon-co.flag-icon-squared {
	    background-image: url(../img/flags/1x1/co.svg)
	}

	.flag-icon-cr {
	    background-image: url(../img/flags/4x3/cr.svg)
	}

	.flag-icon-cr.flag-icon-squared {
	    background-image: url(../img/flags/1x1/cr.svg)
	}

	.flag-icon-cu {
	    background-image: url(../img/flags/4x3/cu.svg)
	}

	.flag-icon-cu.flag-icon-squared {
	    background-image: url(../img/flags/1x1/cu.svg)
	}

	.flag-icon-cv {
	    background-image: url(../img/flags/4x3/cv.svg)
	}

	.flag-icon-cv.flag-icon-squared {
	    background-image: url(../img/flags/1x1/cv.svg)
	}

	.flag-icon-cw {
	    background-image: url(../img/flags/4x3/cw.svg)
	}

	.flag-icon-cw.flag-icon-squared {
	    background-image: url(../img/flags/1x1/cw.svg)
	}

	.flag-icon-cx {
	    background-image: url(../img/flags/4x3/cx.svg)
	}

	.flag-icon-cx.flag-icon-squared {
	    background-image: url(../img/flags/1x1/cx.svg)
	}

	.flag-icon-cy {
	    background-image: url(../img/flags/4x3/cy.svg)
	}

	.flag-icon-cy.flag-icon-squared {
	    background-image: url(../img/flags/1x1/cy.svg)
	}

	.flag-icon-cz {
	    background-image: url(../img/flags/4x3/cz.svg)
	}

	.flag-icon-cz.flag-icon-squared {
	    background-image: url(../img/flags/1x1/cz.svg)
	}

	.flag-icon-de {
	    background-image: url(../img/flags/4x3/de.svg)
	}

	.flag-icon-de.flag-icon-squared {
	    background-image: url(../img/flags/1x1/de.svg)
	}

	.flag-icon-dj {
	    background-image: url(../img/flags/4x3/dj.svg)
	}

	.flag-icon-dj.flag-icon-squared {
	    background-image: url(../img/flags/1x1/dj.svg)
	}

	.flag-icon-dk {
	    background-image: url(../img/flags/4x3/dk.svg)
	}

	.flag-icon-dk.flag-icon-squared {
	    background-image: url(../img/flags/1x1/dk.svg)
	}

	.flag-icon-dm {
	    background-image: url(../img/flags/4x3/dm.svg)
	}

	.flag-icon-dm.flag-icon-squared {
	    background-image: url(../img/flags/1x1/dm.svg)
	}

	.flag-icon-do {
	    background-image: url(../img/flags/4x3/do.svg)
	}

	.flag-icon-do.flag-icon-squared {
	    background-image: url(../img/flags/1x1/do.svg)
	}

	.flag-icon-dz {
	    background-image: url(../img/flags/4x3/dz.svg)
	}

	.flag-icon-dz.flag-icon-squared {
	    background-image: url(../img/flags/1x1/dz.svg)
	}

	.flag-icon-ec {
	    background-image: url(../img/flags/4x3/ec.svg)
	}

	.flag-icon-ec.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ec.svg)
	}

	.flag-icon-ee {
	    background-image: url(../img/flags/4x3/ee.svg)
	}

	.flag-icon-ee.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ee.svg)
	}

	.flag-icon-eg {
	    background-image: url(../img/flags/4x3/eg.svg)
	}

	.flag-icon-eg.flag-icon-squared {
	    background-image: url(../img/flags/1x1/eg.svg)
	}

	.flag-icon-eh {
	    background-image: url(../img/flags/4x3/eh.svg)
	}

	.flag-icon-eh.flag-icon-squared {
	    background-image: url(../img/flags/1x1/eh.svg)
	}

	.flag-icon-er {
	    background-image: url(../img/flags/4x3/er.svg)
	}

	.flag-icon-er.flag-icon-squared {
	    background-image: url(../img/flags/1x1/er.svg)
	}

	.flag-icon-es {
	    background-image: url(../img/flags/4x3/es.svg)
	}

	.flag-icon-es.flag-icon-squared {
	    background-image: url(../img/flags/1x1/es.svg)
	}

	.flag-icon-et {
	    background-image: url(../img/flags/4x3/et.svg)
	}

	.flag-icon-et.flag-icon-squared {
	    background-image: url(../img/flags/1x1/et.svg)
	}

	.flag-icon-fi {
	    background-image: url(../img/flags/4x3/fi.svg)
	}

	.flag-icon-fi.flag-icon-squared {
	    background-image: url(../img/flags/1x1/fi.svg)
	}

	.flag-icon-fj {
	    background-image: url(../img/flags/4x3/fj.svg)
	}

	.flag-icon-fj.flag-icon-squared {
	    background-image: url(../img/flags/1x1/fj.svg)
	}

	.flag-icon-fk {
	    background-image: url(../img/flags/4x3/fk.svg)
	}

	.flag-icon-fk.flag-icon-squared {
	    background-image: url(../img/flags/1x1/fk.svg)
	}

	.flag-icon-fm {
	    background-image: url(../img/flags/4x3/fm.svg)
	}

	.flag-icon-fm.flag-icon-squared {
	    background-image: url(../img/flags/1x1/fm.svg)
	}

	.flag-icon-fo {
	    background-image: url(../img/flags/4x3/fo.svg)
	}

	.flag-icon-fo.flag-icon-squared {
	    background-image: url(../img/flags/1x1/fo.svg)
	}

	.flag-icon-fr {
	    background-image: url(../img/flags/4x3/fr.svg)
	}

	.flag-icon-fr.flag-icon-squared {
	    background-image: url(../img/flags/1x1/fr.svg)
	}

	.flag-icon-ga {
	    background-image: url(../img/flags/4x3/ga.svg)
	}

	.flag-icon-ga.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ga.svg)
	}

	.flag-icon-gb {
	    background-image: url(../img/flags/4x3/gb.svg)
	}

	.flag-icon-gb.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gb.svg)
	}

	.flag-icon-gd {
	    background-image: url(../img/flags/4x3/gd.svg)
	}

	.flag-icon-gd.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gd.svg)
	}

	.flag-icon-ge {
	    background-image: url(../img/flags/4x3/ge.svg)
	}

	.flag-icon-ge.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ge.svg)
	}

	.flag-icon-gf {
	    background-image: url(../img/flags/4x3/gf.svg)
	}

	.flag-icon-gf.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gf.svg)
	}

	.flag-icon-gg {
	    background-image: url(../img/flags/4x3/gg.svg)
	}

	.flag-icon-gg.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gg.svg)
	}

	.flag-icon-gh {
	    background-image: url(../img/flags/4x3/gh.svg)
	}

	.flag-icon-gh.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gh.svg)
	}

	.flag-icon-gi {
	    background-image: url(../img/flags/4x3/gi.svg)
	}

	.flag-icon-gi.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gi.svg)
	}

	.flag-icon-gl {
	    background-image: url(../img/flags/4x3/gl.svg)
	}

	.flag-icon-gl.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gl.svg)
	}

	.flag-icon-gm {
	    background-image: url(../img/flags/4x3/gm.svg)
	}

	.flag-icon-gm.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gm.svg)
	}

	.flag-icon-gn {
	    background-image: url(../img/flags/4x3/gn.svg)
	}

	.flag-icon-gn.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gn.svg)
	}

	.flag-icon-gp {
	    background-image: url(../img/flags/4x3/gp.svg)
	}

	.flag-icon-gp.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gp.svg)
	}

	.flag-icon-gq {
	    background-image: url(../img/flags/4x3/gq.svg)
	}

	.flag-icon-gq.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gq.svg)
	}

	.flag-icon-gr {
	    background-image: url(../img/flags/4x3/gr.svg)
	}

	.flag-icon-gr.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gr.svg)
	}

	.flag-icon-gs {
	    background-image: url(../img/flags/4x3/gs.svg)
	}

	.flag-icon-gs.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gs.svg)
	}

	.flag-icon-gt {
	    background-image: url(../img/flags/4x3/gt.svg)
	}

	.flag-icon-gt.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gt.svg)
	}

	.flag-icon-gu {
	    background-image: url(../img/flags/4x3/gu.svg)
	}

	.flag-icon-gu.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gu.svg)
	}

	.flag-icon-gw {
	    background-image: url(../img/flags/4x3/gw.svg)
	}

	.flag-icon-gw.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gw.svg)
	}

	.flag-icon-gy {
	    background-image: url(../img/flags/4x3/gy.svg)
	}

	.flag-icon-gy.flag-icon-squared {
	    background-image: url(../img/flags/1x1/gy.svg)
	}

	.flag-icon-hk {
	    background-image: url(../img/flags/4x3/hk.svg)
	}

	.flag-icon-hk.flag-icon-squared {
	    background-image: url(../img/flags/1x1/hk.svg)
	}

	.flag-icon-hm {
	    background-image: url(../img/flags/4x3/hm.svg)
	}

	.flag-icon-hm.flag-icon-squared {
	    background-image: url(../img/flags/1x1/hm.svg)
	}

	.flag-icon-hn {
	    background-image: url(../img/flags/4x3/hn.svg)
	}

	.flag-icon-hn.flag-icon-squared {
	    background-image: url(../img/flags/1x1/hn.svg)
	}

	.flag-icon-hr {
	    background-image: url(../img/flags/4x3/hr.svg)
	}

	.flag-icon-hr.flag-icon-squared {
	    background-image: url(../img/flags/1x1/hr.svg)
	}

	.flag-icon-ht {
	    background-image: url(../img/flags/4x3/ht.svg)
	}

	.flag-icon-ht.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ht.svg)
	}

	.flag-icon-hu {
	    background-image: url(../img/flags/4x3/hu.svg)
	}

	.flag-icon-hu.flag-icon-squared {
	    background-image: url(../img/flags/1x1/hu.svg)
	}

	.flag-icon-id {
	    background-image: url(../img/flags/4x3/id.svg)
	}

	.flag-icon-id.flag-icon-squared {
	    background-image: url(../img/flags/1x1/id.svg)
	}

	.flag-icon-ie {
	    background-image: url(../img/flags/4x3/ie.svg)
	}

	.flag-icon-ie.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ie.svg)
	}

	.flag-icon-il {
	    background-image: url(../img/flags/4x3/il.svg)
	}

	.flag-icon-il.flag-icon-squared {
	    background-image: url(../img/flags/1x1/il.svg)
	}

	.flag-icon-im {
	    background-image: url(../img/flags/4x3/im.svg)
	}

	.flag-icon-im.flag-icon-squared {
	    background-image: url(../img/flags/1x1/im.svg)
	}

	.flag-icon-in {
	    background-image: url(../img/flags/4x3/in.svg)
	}

	.flag-icon-in.flag-icon-squared {
	    background-image: url(../img/flags/1x1/in.svg)
	}

	.flag-icon-io {
	    background-image: url(../img/flags/4x3/io.svg)
	}

	.flag-icon-io.flag-icon-squared {
	    background-image: url(../img/flags/1x1/io.svg)
	}

	.flag-icon-iq {
	    background-image: url(../img/flags/4x3/iq.svg)
	}

	.flag-icon-iq.flag-icon-squared {
	    background-image: url(../img/flags/1x1/iq.svg)
	}

	.flag-icon-ir {
	    background-image: url(../img/flags/4x3/ir.svg)
	}

	.flag-icon-ir.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ir.svg)
	}

	.flag-icon-is {
	    background-image: url(../img/flags/4x3/is.svg)
	}

	.flag-icon-is.flag-icon-squared {
	    background-image: url(../img/flags/1x1/is.svg)
	}

	.flag-icon-it {
	    background-image: url(../img/flags/4x3/it.svg)
	}

	.flag-icon-it.flag-icon-squared {
	    background-image: url(../img/flags/1x1/it.svg)
	}

	.flag-icon-je {
	    background-image: url(../img/flags/4x3/je.svg)
	}

	.flag-icon-je.flag-icon-squared {
	    background-image: url(../img/flags/1x1/je.svg)
	}

	.flag-icon-jm {
	    background-image: url(../img/flags/4x3/jm.svg)
	}

	.flag-icon-jm.flag-icon-squared {
	    background-image: url(../img/flags/1x1/jm.svg)
	}

	.flag-icon-jo {
	    background-image: url(../img/flags/4x3/jo.svg)
	}

	.flag-icon-jo.flag-icon-squared {
	    background-image: url(../img/flags/1x1/jo.svg)
	}

	.flag-icon-jp {
	    background-image: url(../img/flags/4x3/jp.svg)
	}

	.flag-icon-jp.flag-icon-squared {
	    background-image: url(../img/flags/1x1/jp.svg)
	}

	.flag-icon-ke {
	    background-image: url(../img/flags/4x3/ke.svg)
	}

	.flag-icon-ke.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ke.svg)
	}

	.flag-icon-kg {
	    background-image: url(../img/flags/4x3/kg.svg)
	}

	.flag-icon-kg.flag-icon-squared {
	    background-image: url(../img/flags/1x1/kg.svg)
	}

	.flag-icon-kh {
	    background-image: url(../img/flags/4x3/kh.svg)
	}

	.flag-icon-kh.flag-icon-squared {
	    background-image: url(../img/flags/1x1/kh.svg)
	}

	.flag-icon-ki {
	    background-image: url(../img/flags/4x3/ki.svg)
	}

	.flag-icon-ki.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ki.svg)
	}

	.flag-icon-km {
	    background-image: url(../img/flags/4x3/km.svg)
	}

	.flag-icon-km.flag-icon-squared {
	    background-image: url(../img/flags/1x1/km.svg)
	}

	.flag-icon-kn {
	    background-image: url(../img/flags/4x3/kn.svg)
	}

	.flag-icon-kn.flag-icon-squared {
	    background-image: url(../img/flags/1x1/kn.svg)
	}

	.flag-icon-kp {
	    background-image: url(../img/flags/4x3/kp.svg)
	}

	.flag-icon-kp.flag-icon-squared {
	    background-image: url(../img/flags/1x1/kp.svg)
	}

	.flag-icon-kr {
	    background-image: url(../img/flags/4x3/kr.svg)
	}

	.flag-icon-kr.flag-icon-squared {
	    background-image: url(../img/flags/1x1/kr.svg)
	}

	.flag-icon-kw {
	    background-image: url(../img/flags/4x3/kw.svg)
	}

	.flag-icon-kw.flag-icon-squared {
	    background-image: url(../img/flags/1x1/kw.svg)
	}

	.flag-icon-ky {
	    background-image: url(../img/flags/4x3/ky.svg)
	}

	.flag-icon-ky.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ky.svg)
	}

	.flag-icon-kz {
	    background-image: url(../img/flags/4x3/kz.svg)
	}

	.flag-icon-kz.flag-icon-squared {
	    background-image: url(../img/flags/1x1/kz.svg)
	}

	.flag-icon-la {
	    background-image: url(../img/flags/4x3/la.svg)
	}

	.flag-icon-la.flag-icon-squared {
	    background-image: url(../img/flags/1x1/la.svg)
	}

	.flag-icon-lb {
	    background-image: url(../img/flags/4x3/lb.svg)
	}

	.flag-icon-lb.flag-icon-squared {
	    background-image: url(../img/flags/1x1/lb.svg)
	}

	.flag-icon-lc {
	    background-image: url(../img/flags/4x3/lc.svg)
	}

	.flag-icon-lc.flag-icon-squared {
	    background-image: url(../img/flags/1x1/lc.svg)
	}

	.flag-icon-li {
	    background-image: url(../img/flags/4x3/li.svg)
	}

	.flag-icon-li.flag-icon-squared {
	    background-image: url(../img/flags/1x1/li.svg)
	}

	.flag-icon-lk {
	    background-image: url(../img/flags/4x3/lk.svg)
	}

	.flag-icon-lk.flag-icon-squared {
	    background-image: url(../img/flags/1x1/lk.svg)
	}

	.flag-icon-lr {
	    background-image: url(../img/flags/4x3/lr.svg)
	}

	.flag-icon-lr.flag-icon-squared {
	    background-image: url(../img/flags/1x1/lr.svg)
	}

	.flag-icon-ls {
	    background-image: url(../img/flags/4x3/ls.svg)
	}

	.flag-icon-ls.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ls.svg)
	}

	.flag-icon-lt {
	    background-image: url(../img/flags/4x3/lt.svg)
	}

	.flag-icon-lt.flag-icon-squared {
	    background-image: url(../img/flags/1x1/lt.svg)
	}

	.flag-icon-lu {
	    background-image: url(../img/flags/4x3/lu.svg)
	}

	.flag-icon-lu.flag-icon-squared {
	    background-image: url(../img/flags/1x1/lu.svg)
	}

	.flag-icon-lv {
	    background-image: url(../img/flags/4x3/lv.svg)
	}

	.flag-icon-lv.flag-icon-squared {
	    background-image: url(../img/flags/1x1/lv.svg)
	}

	.flag-icon-ly {
	    background-image: url(../img/flags/4x3/ly.svg)
	}

	.flag-icon-ly.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ly.svg)
	}

	.flag-icon-ma {
	    background-image: url(../img/flags/4x3/ma.svg)
	}

	.flag-icon-ma.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ma.svg)
	}

	.flag-icon-mc {
	    background-image: url(../img/flags/4x3/mc.svg)
	}

	.flag-icon-mc.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mc.svg)
	}

	.flag-icon-md {
	    background-image: url(../img/flags/4x3/md.svg)
	}

	.flag-icon-md.flag-icon-squared {
	    background-image: url(../img/flags/1x1/md.svg)
	}

	.flag-icon-me {
	    background-image: url(../img/flags/4x3/me.svg)
	}

	.flag-icon-me.flag-icon-squared {
	    background-image: url(../img/flags/1x1/me.svg)
	}

	.flag-icon-mf {
	    background-image: url(../img/flags/4x3/mf.svg)
	}

	.flag-icon-mf.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mf.svg)
	}

	.flag-icon-mg {
	    background-image: url(../img/flags/4x3/mg.svg)
	}

	.flag-icon-mg.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mg.svg)
	}

	.flag-icon-mh {
	    background-image: url(../img/flags/4x3/mh.svg)
	}

	.flag-icon-mh.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mh.svg)
	}

	.flag-icon-mk {
	    background-image: url(../img/flags/4x3/mk.svg)
	}

	.flag-icon-mk.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mk.svg)
	}

	.flag-icon-ml {
	    background-image: url(../img/flags/4x3/ml.svg)
	}

	.flag-icon-ml.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ml.svg)
	}

	.flag-icon-mm {
	    background-image: url(../img/flags/4x3/mm.svg)
	}

	.flag-icon-mm.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mm.svg)
	}

	.flag-icon-mn {
	    background-image: url(../img/flags/4x3/mn.svg)
	}

	.flag-icon-mn.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mn.svg)
	}

	.flag-icon-mo {
	    background-image: url(../img/flags/4x3/mo.svg)
	}

	.flag-icon-mo.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mo.svg)
	}

	.flag-icon-mp {
	    background-image: url(../img/flags/4x3/mp.svg)
	}

	.flag-icon-mp.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mp.svg)
	}

	.flag-icon-mq {
	    background-image: url(../img/flags/4x3/mq.svg)
	}

	.flag-icon-mq.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mq.svg)
	}

	.flag-icon-mr {
	    background-image: url(../img/flags/4x3/mr.svg)
	}

	.flag-icon-mr.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mr.svg)
	}

	.flag-icon-ms {
	    background-image: url(../img/flags/4x3/ms.svg)
	}

	.flag-icon-ms.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ms.svg)
	}

	.flag-icon-mt {
	    background-image: url(../img/flags/4x3/mt.svg)
	}

	.flag-icon-mt.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mt.svg)
	}

	.flag-icon-mu {
	    background-image: url(../img/flags/4x3/mu.svg)
	}

	.flag-icon-mu.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mu.svg)
	}

	.flag-icon-mv {
	    background-image: url(../img/flags/4x3/mv.svg)
	}

	.flag-icon-mv.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mv.svg)
	}

	.flag-icon-mw {
	    background-image: url(../img/flags/4x3/mw.svg)
	}

	.flag-icon-mw.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mw.svg)
	}

	.flag-icon-mx {
	    background-image: url(../img/flags/4x3/mx.svg)
	}

	.flag-icon-mx.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mx.svg)
	}

	.flag-icon-my {
	    background-image: url(../img/flags/4x3/my.svg)
	}

	.flag-icon-my.flag-icon-squared {
	    background-image: url(../img/flags/1x1/my.svg)
	}

	.flag-icon-mz {
	    background-image: url(../img/flags/4x3/mz.svg)
	}

	.flag-icon-mz.flag-icon-squared {
	    background-image: url(../img/flags/1x1/mz.svg)
	}

	.flag-icon-na {
	    background-image: url(../img/flags/4x3/na.svg)
	}

	.flag-icon-na.flag-icon-squared {
	    background-image: url(../img/flags/1x1/na.svg)
	}

	.flag-icon-nc {
	    background-image: url(../img/flags/4x3/nc.svg)
	}

	.flag-icon-nc.flag-icon-squared {
	    background-image: url(../img/flags/1x1/nc.svg)
	}

	.flag-icon-ne {
	    background-image: url(../img/flags/4x3/ne.svg)
	}

	.flag-icon-ne.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ne.svg)
	}

	.flag-icon-nf {
	    background-image: url(../img/flags/4x3/nf.svg)
	}

	.flag-icon-nf.flag-icon-squared {
	    background-image: url(../img/flags/1x1/nf.svg)
	}

	.flag-icon-ng {
	    background-image: url(../img/flags/4x3/ng.svg)
	}

	.flag-icon-ng.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ng.svg)
	}

	.flag-icon-ni {
	    background-image: url(../img/flags/4x3/ni.svg)
	}

	.flag-icon-ni.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ni.svg)
	}

	.flag-icon-nl {
	    background-image: url(../img/flags/4x3/nl.svg)
	}

	.flag-icon-nl.flag-icon-squared {
	    background-image: url(../img/flags/1x1/nl.svg)
	}

	.flag-icon-no {
	    background-image: url(../img/flags/4x3/no.svg)
	}

	.flag-icon-no.flag-icon-squared {
	    background-image: url(../img/flags/1x1/no.svg)
	}

	.flag-icon-np {
	    background-image: url(../img/flags/4x3/np.svg)
	}

	.flag-icon-np.flag-icon-squared {
	    background-image: url(../img/flags/1x1/np.svg)
	}

	.flag-icon-nr {
	    background-image: url(../img/flags/4x3/nr.svg)
	}

	.flag-icon-nr.flag-icon-squared {
	    background-image: url(../img/flags/1x1/nr.svg)
	}

	.flag-icon-nu {
	    background-image: url(../img/flags/4x3/nu.svg)
	}

	.flag-icon-nu.flag-icon-squared {
	    background-image: url(../img/flags/1x1/nu.svg)
	}

	.flag-icon-nz {
	    background-image: url(../img/flags/4x3/nz.svg)
	}

	.flag-icon-nz.flag-icon-squared {
	    background-image: url(../img/flags/1x1/nz.svg)
	}

	.flag-icon-om {
	    background-image: url(../img/flags/4x3/om.svg)
	}

	.flag-icon-om.flag-icon-squared {
	    background-image: url(../img/flags/1x1/om.svg)
	}

	.flag-icon-pa {
	    background-image: url(../img/flags/4x3/pa.svg)
	}

	.flag-icon-pa.flag-icon-squared {
	    background-image: url(../img/flags/1x1/pa.svg)
	}

	.flag-icon-pe {
	    background-image: url(../img/flags/4x3/pe.svg)
	}

	.flag-icon-pe.flag-icon-squared {
	    background-image: url(../img/flags/1x1/pe.svg)
	}

	.flag-icon-pf {
	    background-image: url(../img/flags/4x3/pf.svg)
	}

	.flag-icon-pf.flag-icon-squared {
	    background-image: url(../img/flags/1x1/pf.svg)
	}

	.flag-icon-pg {
	    background-image: url(../img/flags/4x3/pg.svg)
	}

	.flag-icon-pg.flag-icon-squared {
	    background-image: url(../img/flags/1x1/pg.svg)
	}

	.flag-icon-ph {
	    background-image: url(../img/flags/4x3/ph.svg)
	}

	.flag-icon-ph.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ph.svg)
	}

	.flag-icon-pk {
	    background-image: url(../img/flags/4x3/pk.svg)
	}

	.flag-icon-pk.flag-icon-squared {
	    background-image: url(../img/flags/1x1/pk.svg)
	}

	.flag-icon-pl {
	    background-image: url(../img/flags/4x3/pl.svg)
	}

	.flag-icon-pl.flag-icon-squared {
	    background-image: url(../img/flags/1x1/pl.svg)
	}

	.flag-icon-pm {
	    background-image: url(../img/flags/4x3/pm.svg)
	}

	.flag-icon-pm.flag-icon-squared {
	    background-image: url(../img/flags/1x1/pm.svg)
	}

	.flag-icon-pn {
	    background-image: url(../img/flags/4x3/pn.svg)
	}

	.flag-icon-pn.flag-icon-squared {
	    background-image: url(../img/flags/1x1/pn.svg)
	}

	.flag-icon-pr {
	    background-image: url(../img/flags/4x3/pr.svg)
	}

	.flag-icon-pr.flag-icon-squared {
	    background-image: url(../img/flags/1x1/pr.svg)
	}

	.flag-icon-ps {
	    background-image: url(../img/flags/4x3/ps.svg)
	}

	.flag-icon-ps.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ps.svg)
	}

	.flag-icon-pt {
	    background-image: url(../img/flags/4x3/pt.svg)
	}

	.flag-icon-pt.flag-icon-squared {
	    background-image: url(../img/flags/1x1/pt.svg)
	}

	.flag-icon-pw {
	    background-image: url(../img/flags/4x3/pw.svg)
	}

	.flag-icon-pw.flag-icon-squared {
	    background-image: url(../img/flags/1x1/pw.svg)
	}

	.flag-icon-py {
	    background-image: url(../img/flags/4x3/py.svg)
	}

	.flag-icon-py.flag-icon-squared {
	    background-image: url(../img/flags/1x1/py.svg)
	}

	.flag-icon-qa {
	    background-image: url(../img/flags/4x3/qa.svg)
	}

	.flag-icon-qa.flag-icon-squared {
	    background-image: url(../img/flags/1x1/qa.svg)
	}

	.flag-icon-re {
	    background-image: url(../img/flags/4x3/re.svg)
	}

	.flag-icon-re.flag-icon-squared {
	    background-image: url(../img/flags/1x1/re.svg)
	}

	.flag-icon-ro {
	    background-image: url(../img/flags/4x3/ro.svg)
	}

	.flag-icon-ro.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ro.svg)
	}

	.flag-icon-rs {
	    background-image: url(../img/flags/4x3/rs.svg)
	}

	.flag-icon-rs.flag-icon-squared {
	    background-image: url(../img/flags/1x1/rs.svg)
	}

	.flag-icon-ru {
	    background-image: url(../img/flags/4x3/ru.svg)
	}

	.flag-icon-ru.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ru.svg)
	}

	.flag-icon-rw {
	    background-image: url(../img/flags/4x3/rw.svg)
	}

	.flag-icon-rw.flag-icon-squared {
	    background-image: url(../img/flags/1x1/rw.svg)
	}

	.flag-icon-sa {
	    background-image: url(../img/flags/4x3/sa.svg)
	}

	.flag-icon-sa.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sa.svg)
	}

	.flag-icon-sb {
	    background-image: url(../img/flags/4x3/sb.svg)
	}

	.flag-icon-sb.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sb.svg)
	}

	.flag-icon-sc {
	    background-image: url(../img/flags/4x3/sc.svg)
	}

	.flag-icon-sc.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sc.svg)
	}

	.flag-icon-sd {
	    background-image: url(../img/flags/4x3/sd.svg)
	}

	.flag-icon-sd.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sd.svg)
	}

	.flag-icon-se {
	    background-image: url(../img/flags/4x3/se.svg)
	}

	.flag-icon-se.flag-icon-squared {
	    background-image: url(../img/flags/1x1/se.svg)
	}

	.flag-icon-sg {
	    background-image: url(../img/flags/4x3/sg.svg)
	}

	.flag-icon-sg.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sg.svg)
	}

	.flag-icon-sh {
	    background-image: url(../img/flags/4x3/sh.svg)
	}

	.flag-icon-sh.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sh.svg)
	}

	.flag-icon-si {
	    background-image: url(../img/flags/4x3/si.svg)
	}

	.flag-icon-si.flag-icon-squared {
	    background-image: url(../img/flags/1x1/si.svg)
	}

	.flag-icon-sj {
	    background-image: url(../img/flags/4x3/sj.svg)
	}

	.flag-icon-sj.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sj.svg)
	}

	.flag-icon-sk {
	    background-image: url(../img/flags/4x3/sk.svg)
	}

	.flag-icon-sk.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sk.svg)
	}

	.flag-icon-sl {
	    background-image: url(../img/flags/4x3/sl.svg)
	}

	.flag-icon-sl.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sl.svg)
	}

	.flag-icon-sm {
	    background-image: url(../img/flags/4x3/sm.svg)
	}

	.flag-icon-sm.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sm.svg)
	}

	.flag-icon-sn {
	    background-image: url(../img/flags/4x3/sn.svg)
	}

	.flag-icon-sn.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sn.svg)
	}

	.flag-icon-so {
	    background-image: url(../img/flags/4x3/so.svg)
	}

	.flag-icon-so.flag-icon-squared {
	    background-image: url(../img/flags/1x1/so.svg)
	}

	.flag-icon-sr {
	    background-image: url(../img/flags/4x3/sr.svg)
	}

	.flag-icon-sr.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sr.svg)
	}

	.flag-icon-ss {
	    background-image: url(../img/flags/4x3/ss.svg)
	}

	.flag-icon-ss.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ss.svg)
	}

	.flag-icon-st {
	    background-image: url(../img/flags/4x3/st.svg)
	}

	.flag-icon-st.flag-icon-squared {
	    background-image: url(../img/flags/1x1/st.svg)
	}

	.flag-icon-sv {
	    background-image: url(../img/flags/4x3/sv.svg)
	}

	.flag-icon-sv.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sv.svg)
	}

	.flag-icon-sx {
	    background-image: url(../img/flags/4x3/sx.svg)
	}

	.flag-icon-sx.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sx.svg)
	}

	.flag-icon-sy {
	    background-image: url(../img/flags/4x3/sy.svg)
	}

	.flag-icon-sy.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sy.svg)
	}

	.flag-icon-sz {
	    background-image: url(../img/flags/4x3/sz.svg)
	}

	.flag-icon-sz.flag-icon-squared {
	    background-image: url(../img/flags/1x1/sz.svg)
	}

	.flag-icon-tc {
	    background-image: url(../img/flags/4x3/tc.svg)
	}

	.flag-icon-tc.flag-icon-squared {
	    background-image: url(../img/flags/1x1/tc.svg)
	}

	.flag-icon-td {
	    background-image: url(../img/flags/4x3/td.svg)
	}

	.flag-icon-td.flag-icon-squared {
	    background-image: url(../img/flags/1x1/td.svg)
	}

	.flag-icon-tf {
	    background-image: url(../img/flags/4x3/tf.svg)
	}

	.flag-icon-tf.flag-icon-squared {
	    background-image: url(../img/flags/1x1/tf.svg)
	}

	.flag-icon-tg {
	    background-image: url(../img/flags/4x3/tg.svg)
	}

	.flag-icon-tg.flag-icon-squared {
	    background-image: url(../img/flags/1x1/tg.svg)
	}

	.flag-icon-th {
	    background-image: url(../img/flags/4x3/th.svg)
	}

	.flag-icon-th.flag-icon-squared {
	    background-image: url(../img/flags/1x1/th.svg)
	}

	.flag-icon-tj {
	    background-image: url(../img/flags/4x3/tj.svg)
	}

	.flag-icon-tj.flag-icon-squared {
	    background-image: url(../img/flags/1x1/tj.svg)
	}

	.flag-icon-tk {
	    background-image: url(../img/flags/4x3/tk.svg)
	}

	.flag-icon-tk.flag-icon-squared {
	    background-image: url(../img/flags/1x1/tk.svg)
	}

	.flag-icon-tl {
	    background-image: url(../img/flags/4x3/tl.svg)
	}

	.flag-icon-tl.flag-icon-squared {
	    background-image: url(../img/flags/1x1/tl.svg)
	}

	.flag-icon-tm {
	    background-image: url(../img/flags/4x3/tm.svg)
	}

	.flag-icon-tm.flag-icon-squared {
	    background-image: url(../img/flags/1x1/tm.svg)
	}

	.flag-icon-tn {
	    background-image: url(../img/flags/4x3/tn.svg)
	}

	.flag-icon-tn.flag-icon-squared {
	    background-image: url(../img/flags/1x1/tn.svg)
	}

	.flag-icon-to {
	    background-image: url(../img/flags/4x3/to.svg)
	}

	.flag-icon-to.flag-icon-squared {
	    background-image: url(../img/flags/1x1/to.svg)
	}

	.flag-icon-tr {
	    background-image: url(../img/flags/4x3/tr.svg)
	}

	.flag-icon-tr.flag-icon-squared {
	    background-image: url(../img/flags/1x1/tr.svg)
	}

	.flag-icon-tt {
	    background-image: url(../img/flags/4x3/tt.svg)
	}

	.flag-icon-tt.flag-icon-squared {
	    background-image: url(../img/flags/1x1/tt.svg)
	}

	.flag-icon-tv {
	    background-image: url(../img/flags/4x3/tv.svg)
	}

	.flag-icon-tv.flag-icon-squared {
	    background-image: url(../img/flags/1x1/tv.svg)
	}

	.flag-icon-tw {
	    background-image: url(../img/flags/4x3/tw.svg)
	}

	.flag-icon-tw.flag-icon-squared {
	    background-image: url(../img/flags/1x1/tw.svg)
	}

	.flag-icon-tz {
	    background-image: url(../img/flags/4x3/tz.svg)
	}

	.flag-icon-tz.flag-icon-squared {
	    background-image: url(../img/flags/1x1/tz.svg)
	}

	.flag-icon-ua {
	    background-image: url(../img/flags/4x3/ua.svg)
	}

	.flag-icon-ua.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ua.svg)
	}

	.flag-icon-ug {
	    background-image: url(../img/flags/4x3/ug.svg)
	}

	.flag-icon-ug.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ug.svg)
	}

	.flag-icon-um {
	    background-image: url(../img/flags/4x3/um.svg)
	}

	.flag-icon-um.flag-icon-squared {
	    background-image: url(../img/flags/1x1/um.svg)
	}

	.flag-icon-us {
	    background-image: url(../img/flags/4x3/us.svg)
	}

	.flag-icon-us.flag-icon-squared {
	    background-image: url(../img/flags/1x1/us.svg)
	}

	.flag-icon-uy {
	    background-image: url(../img/flags/4x3/uy.svg)
	}

	.flag-icon-uy.flag-icon-squared {
	    background-image: url(../img/flags/1x1/uy.svg)
	}

	.flag-icon-uz {
	    background-image: url(../img/flags/4x3/uz.svg)
	}

	.flag-icon-uz.flag-icon-squared {
	    background-image: url(../img/flags/1x1/uz.svg)
	}

	.flag-icon-va {
	    background-image: url(../img/flags/4x3/va.svg)
	}

	.flag-icon-va.flag-icon-squared {
	    background-image: url(../img/flags/1x1/va.svg)
	}

	.flag-icon-vc {
	    background-image: url(../img/flags/4x3/vc.svg)
	}

	.flag-icon-vc.flag-icon-squared {
	    background-image: url(../img/flags/1x1/vc.svg)
	}

	.flag-icon-ve {
	    background-image: url(../img/flags/4x3/ve.svg)
	}

	.flag-icon-ve.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ve.svg)
	}

	.flag-icon-vg {
	    background-image: url(../img/flags/4x3/vg.svg)
	}

	.flag-icon-vg.flag-icon-squared {
	    background-image: url(../img/flags/1x1/vg.svg)
	}

	.flag-icon-vi {
	    background-image: url(../img/flags/4x3/vi.svg)
	}

	.flag-icon-vi.flag-icon-squared {
	    background-image: url(../img/flags/1x1/vi.svg)
	}

	.flag-icon-vn {
	    background-image: url(../img/flags/4x3/vn.svg)
	}

	.flag-icon-vn.flag-icon-squared {
	    background-image: url(../img/flags/1x1/vn.svg)
	}

	.flag-icon-vu {
	    background-image: url(../img/flags/4x3/vu.svg)
	}

	.flag-icon-vu.flag-icon-squared {
	    background-image: url(../img/flags/1x1/vu.svg)
	}

	.flag-icon-wf {
	    background-image: url(../img/flags/4x3/wf.svg)
	}

	.flag-icon-wf.flag-icon-squared {
	    background-image: url(../img/flags/1x1/wf.svg)
	}

	.flag-icon-ws {
	    background-image: url(../img/flags/4x3/ws.svg)
	}

	.flag-icon-ws.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ws.svg)
	}

	.flag-icon-ye {
	    background-image: url(../img/flags/4x3/ye.svg)
	}

	.flag-icon-ye.flag-icon-squared {
	    background-image: url(../img/flags/1x1/ye.svg)
	}

	.flag-icon-yt {
	    background-image: url(../img/flags/4x3/yt.svg)
	}

	.flag-icon-yt.flag-icon-squared {
	    background-image: url(../img/flags/1x1/yt.svg)
	}

	.flag-icon-za {
	    background-image: url(../img/flags/4x3/za.svg)
	}

	.flag-icon-za.flag-icon-squared {
	    background-image: url(../img/flags/1x1/za.svg)
	}

	.flag-icon-zm {
	    background-image: url(../img/flags/4x3/zm.svg)
	}

	.flag-icon-zm.flag-icon-squared {
	    background-image: url(../img/flags/1x1/zm.svg)
	}

	.flag-icon-zw {
	    background-image: url(../img/flags/4x3/zw.svg)
	}

	.flag-icon-zw.flag-icon-squared {
	    background-image: url(../img/flags/1x1/zw.svg)
	}

	</style>
	
	<style>
	
	table.dataTable {
	    width: 100%;
	    margin: 0 auto;
	    clear: both;
	    border-collapse: separate;
	    border-spacing: 0
	}

	table.dataTable thead th,
	table.dataTable tfoot th {
	    font-weight: bold
	}

	table.dataTable thead th,
	table.dataTable thead td {
	    padding: 10px 18px;
	    border-bottom: 1px solid #111
	}

	table.dataTable thead th:active,
	table.dataTable thead td:active {
	    outline: none
	}

	table.dataTable tfoot th,
	table.dataTable tfoot td {
	    padding: 10px 18px 6px 18px;
	    border-top: 1px solid #111
	}

	table.dataTable thead .sorting,
	table.dataTable thead .sorting_asc,
	table.dataTable thead .sorting_desc,
	table.dataTable thead .sorting_asc_disabled,
	table.dataTable thead .sorting_desc_disabled {
	    cursor: pointer;
	    *cursor: hand;
	    background-repeat: no-repeat;
	    background-position: center right
	}

	table.dataTable thead .sorting {
	    background-image: url("../images/sort_both.png")
	}

	table.dataTable thead .sorting_asc {
	    background-image: url("../images/sort_asc.png")
	}

	table.dataTable thead .sorting_desc {
	    background-image: url("../images/sort_desc.png")
	}

	table.dataTable thead .sorting_asc_disabled {
	    background-image: url("../images/sort_asc_disabled.png")
	}

	table.dataTable thead .sorting_desc_disabled {
	    background-image: url("../images/sort_desc_disabled.png")
	}

	table.dataTable tbody tr {
	    background-color: #ffffff
	}

	table.dataTable tbody tr.selected {
	    background-color: #B0BED9
	}

	table.dataTable tbody th,
	table.dataTable tbody td {
	    padding: 8px 10px
	}

	table.dataTable.row-border tbody th,
	table.dataTable.row-border tbody td,
	table.dataTable.display tbody th,
	table.dataTable.display tbody td {
	    border-top: 1px solid #ddd
	}

	table.dataTable.row-border tbody tr:first-child th,
	table.dataTable.row-border tbody tr:first-child td,
	table.dataTable.display tbody tr:first-child th,
	table.dataTable.display tbody tr:first-child td {
	    border-top: none
	}

	table.dataTable.cell-border tbody th,
	table.dataTable.cell-border tbody td {
	    border-top: 1px solid #ddd;
	    border-right: 1px solid #ddd
	}

	table.dataTable.cell-border tbody tr th:first-child,
	table.dataTable.cell-border tbody tr td:first-child {
	    border-left: 1px solid #ddd
	}

	table.dataTable.cell-border tbody tr:first-child th,
	table.dataTable.cell-border tbody tr:first-child td {
	    border-top: none
	}

	table.dataTable.stripe tbody tr.odd,
	table.dataTable.display tbody tr.odd {
	    background-color: #f9f9f9
	}

	table.dataTable.stripe tbody tr.odd.selected,
	table.dataTable.display tbody tr.odd.selected {
	    background-color: #acbad4
	}

	table.dataTable.hover tbody tr:hover,
	table.dataTable.display tbody tr:hover {
	    background-color: #f6f6f6
	}

	table.dataTable.hover tbody tr:hover.selected,
	table.dataTable.display tbody tr:hover.selected {
	    background-color: #aab7d1
	}

	table.dataTable.order-column tbody tr>.sorting_1,
	table.dataTable.order-column tbody tr>.sorting_2,
	table.dataTable.order-column tbody tr>.sorting_3,
	table.dataTable.display tbody tr>.sorting_1,
	table.dataTable.display tbody tr>.sorting_2,
	table.dataTable.display tbody tr>.sorting_3 {
	    background-color: #fafafa
	}

	table.dataTable.order-column tbody tr.selected>.sorting_1,
	table.dataTable.order-column tbody tr.selected>.sorting_2,
	table.dataTable.order-column tbody tr.selected>.sorting_3,
	table.dataTable.display tbody tr.selected>.sorting_1,
	table.dataTable.display tbody tr.selected>.sorting_2,
	table.dataTable.display tbody tr.selected>.sorting_3 {
	    background-color: #acbad5
	}

	table.dataTable.display tbody tr.odd>.sorting_1,
	table.dataTable.order-column.stripe tbody tr.odd>.sorting_1 {
	    background-color: #f1f1f1
	}

	table.dataTable.display tbody tr.odd>.sorting_2,
	table.dataTable.order-column.stripe tbody tr.odd>.sorting_2 {
	    background-color: #f3f3f3
	}

	table.dataTable.display tbody tr.odd>.sorting_3,
	table.dataTable.order-column.stripe tbody tr.odd>.sorting_3 {
	    background-color: whitesmoke
	}

	table.dataTable.display tbody tr.odd.selected>.sorting_1,
	table.dataTable.order-column.stripe tbody tr.odd.selected>.sorting_1 {
	    background-color: #a6b4cd
	}

	table.dataTable.display tbody tr.odd.selected>.sorting_2,
	table.dataTable.order-column.stripe tbody tr.odd.selected>.sorting_2 {
	    background-color: #a8b5cf
	}

	table.dataTable.display tbody tr.odd.selected>.sorting_3,
	table.dataTable.order-column.stripe tbody tr.odd.selected>.sorting_3 {
	    background-color: #a9b7d1
	}

	table.dataTable.display tbody tr.even>.sorting_1,
	table.dataTable.order-column.stripe tbody tr.even>.sorting_1 {
	    background-color: #fafafa
	}

	table.dataTable.display tbody tr.even>.sorting_2,
	table.dataTable.order-column.stripe tbody tr.even>.sorting_2 {
	    background-color: #fcfcfc
	}

	table.dataTable.display tbody tr.even>.sorting_3,
	table.dataTable.order-column.stripe tbody tr.even>.sorting_3 {
	    background-color: #fefefe
	}

	table.dataTable.display tbody tr.even.selected>.sorting_1,
	table.dataTable.order-column.stripe tbody tr.even.selected>.sorting_1 {
	    background-color: #acbad5
	}

	table.dataTable.display tbody tr.even.selected>.sorting_2,
	table.dataTable.order-column.stripe tbody tr.even.selected>.sorting_2 {
	    background-color: #aebcd6
	}

	table.dataTable.display tbody tr.even.selected>.sorting_3,
	table.dataTable.order-column.stripe tbody tr.even.selected>.sorting_3 {
	    background-color: #afbdd8
	}

	table.dataTable.display tbody tr:hover>.sorting_1,
	table.dataTable.order-column.hover tbody tr:hover>.sorting_1 {
	    background-color: #eaeaea
	}

	table.dataTable.display tbody tr:hover>.sorting_2,
	table.dataTable.order-column.hover tbody tr:hover>.sorting_2 {
	    background-color: #ececec
	}

	table.dataTable.display tbody tr:hover>.sorting_3,
	table.dataTable.order-column.hover tbody tr:hover>.sorting_3 {
	    background-color: #efefef
	}

	table.dataTable.display tbody tr:hover.selected>.sorting_1,
	table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_1 {
	    background-color: #a2aec7
	}

	table.dataTable.display tbody tr:hover.selected>.sorting_2,
	table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_2 {
	    background-color: #a3b0c9
	}

	table.dataTable.display tbody tr:hover.selected>.sorting_3,
	table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_3 {
	    background-color: #a5b2cb
	}

	table.dataTable.no-footer {
	    border-bottom: 1px solid #111
	}

	table.dataTable.nowrap th,
	table.dataTable.nowrap td {
	    white-space: nowrap
	}

	table.dataTable.compact thead th,
	table.dataTable.compact thead td {
	    padding: 4px 17px 4px 4px
	}

	table.dataTable.compact tfoot th,
	table.dataTable.compact tfoot td {
	    padding: 4px
	}

	table.dataTable.compact tbody th,
	table.dataTable.compact tbody td {
	    padding: 4px
	}

	table.dataTable th.dt-left,
	table.dataTable td.dt-left {
	    text-align: left
	}

	table.dataTable th.dt-center,
	table.dataTable td.dt-center,
	table.dataTable td.dataTables_empty {
	    text-align: center
	}

	table.dataTable th.dt-right,
	table.dataTable td.dt-right {
	    text-align: right
	}

	table.dataTable th.dt-justify,
	table.dataTable td.dt-justify {
	    text-align: justify
	}

	table.dataTable th.dt-nowrap,
	table.dataTable td.dt-nowrap {
	    white-space: nowrap
	}

	table.dataTable thead th.dt-head-left,
	table.dataTable thead td.dt-head-left,
	table.dataTable tfoot th.dt-head-left,
	table.dataTable tfoot td.dt-head-left {
	    text-align: left
	}

	table.dataTable thead th.dt-head-center,
	table.dataTable thead td.dt-head-center,
	table.dataTable tfoot th.dt-head-center,
	table.dataTable tfoot td.dt-head-center {
	    text-align: center
	}

	table.dataTable thead th.dt-head-right,
	table.dataTable thead td.dt-head-right,
	table.dataTable tfoot th.dt-head-right,
	table.dataTable tfoot td.dt-head-right {
	    text-align: right
	}

	table.dataTable thead th.dt-head-justify,
	table.dataTable thead td.dt-head-justify,
	table.dataTable tfoot th.dt-head-justify,
	table.dataTable tfoot td.dt-head-justify {
	    text-align: justify
	}

	table.dataTable thead th.dt-head-nowrap,
	table.dataTable thead td.dt-head-nowrap,
	table.dataTable tfoot th.dt-head-nowrap,
	table.dataTable tfoot td.dt-head-nowrap {
	    white-space: nowrap
	}

	table.dataTable tbody th.dt-body-left,
	table.dataTable tbody td.dt-body-left {
	    text-align: left
	}

	table.dataTable tbody th.dt-body-center,
	table.dataTable tbody td.dt-body-center {
	    text-align: center
	}

	table.dataTable tbody th.dt-body-right,
	table.dataTable tbody td.dt-body-right {
	    text-align: right
	}

	table.dataTable tbody th.dt-body-justify,
	table.dataTable tbody td.dt-body-justify {
	    text-align: justify
	}

	table.dataTable tbody th.dt-body-nowrap,
	table.dataTable tbody td.dt-body-nowrap {
	    white-space: nowrap
	}

	table.dataTable,
	table.dataTable th,
	table.dataTable td {
	    box-sizing: content-box
	}

	.dataTables_wrapper {
	    position: relative;
	    clear: both;
	    *zoom: 1;
	    zoom: 1
	}

	.dataTables_wrapper .dataTables_length {
	    float: left
	}

	.dataTables_wrapper .dataTables_filter {
	    float: right;
	    text-align: right
	}

	.dataTables_wrapper .dataTables_filter input {
	    margin-left: 0.5em
	}

	.dataTables_wrapper .dataTables_info {
	    clear: both;
	    float: left;
	    padding-top: 0.755em
	}

	.dataTables_wrapper .dataTables_paginate {
	    float: right;
	    text-align: right;
	    padding-top: 0.25em
	}

	.dataTables_wrapper .dataTables_paginate .paginate_button {
	    box-sizing: border-box;
	    display: inline-block;
	    min-width: 1.5em;
	    padding: 0.5em 1em;
	    margin-left: 2px;
	    text-align: center;
	    text-decoration: none !important;
	    cursor: pointer;
	    *cursor: hand;
	    color: #333 !important;
	    border: 1px solid transparent;
	    border-radius: 2px
	}

	.dataTables_wrapper .dataTables_paginate .paginate_button.current,
	.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
	    color: #333 !important;
	    border: 1px solid #979797;
	    background-color: white;
	    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc));
	    background: -webkit-linear-gradient(top, #fff 0%, #dcdcdc 100%);
	    background: -moz-linear-gradient(top, #fff 0%, #dcdcdc 100%);
	    background: -ms-linear-gradient(top, #fff 0%, #dcdcdc 100%);
	    background: -o-linear-gradient(top, #fff 0%, #dcdcdc 100%);
	    background: linear-gradient(to bottom, #fff 0%, #dcdcdc 100%)
	}

	.dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
	.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
	.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
	    cursor: default;
	    color: #666 !important;
	    border: 1px solid transparent;
	    background: transparent;
	    box-shadow: none
	}

	.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
	    color: white !important;
	    border: 1px solid #111;
	    background-color: #585858;
	    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #585858), color-stop(100%, #111));
	    background: -webkit-linear-gradient(top, #585858 0%, #111 100%);
	    background: -moz-linear-gradient(top, #585858 0%, #111 100%);
	    background: -ms-linear-gradient(top, #585858 0%, #111 100%);
	    background: -o-linear-gradient(top, #585858 0%, #111 100%);
	    background: linear-gradient(to bottom, #585858 0%, #111 100%)
	}

	.dataTables_wrapper .dataTables_paginate .paginate_button:active {
	    outline: none;
	    background-color: #2b2b2b;
	    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #2b2b2b), color-stop(100%, #0c0c0c));
	    background: -webkit-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
	    background: -moz-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
	    background: -ms-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
	    background: -o-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
	    background: linear-gradient(to bottom, #2b2b2b 0%, #0c0c0c 100%);
	    box-shadow: inset 0 0 3px #111
	}

	.dataTables_wrapper .dataTables_paginate .ellipsis {
	    padding: 0 1em
	}

	.dataTables_wrapper .dataTables_processing {
	    position: absolute;
	    top: 50%;
	    left: 50%;
	    width: 100%;
	    height: 40px;
	    margin-left: -50%;
	    margin-top: -25px;
	    padding-top: 20px;
	    text-align: center;
	    font-size: 1.2em;
	    background-color: white;
	    background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(25%, rgba(255, 255, 255, 0.9)), color-stop(75%, rgba(255, 255, 255, 0.9)), color-stop(100%, rgba(255, 255, 255, 0)));
	    background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
	    background: -moz-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
	    background: -ms-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
	    background: -o-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
	    background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%)
	}

	.dataTables_wrapper .dataTables_length,
	.dataTables_wrapper .dataTables_filter,
	.dataTables_wrapper .dataTables_info,
	.dataTables_wrapper .dataTables_processing,
	.dataTables_wrapper .dataTables_paginate {
	    color: #333
	}

	.dataTables_wrapper .dataTables_scroll {
	    clear: both
	}

	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody {
	    *margin-top: -1px;
	    -webkit-overflow-scrolling: touch
	}

	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>th,
	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>td,
	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>th,
	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>td {
	    vertical-align: middle
	}

	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>th>div.dataTables_sizing,
	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>td>div.dataTables_sizing,
	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>th>div.dataTables_sizing,
	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>td>div.dataTables_sizing {
	    height: 0;
	    overflow: hidden;
	    margin: 0 !important;
	    padding: 0 !important
	}

	.dataTables_wrapper.no-footer .dataTables_scrollBody {
	    border-bottom: 1px solid #111
	}

	.dataTables_wrapper.no-footer div.dataTables_scrollHead table.dataTable,
	.dataTables_wrapper.no-footer div.dataTables_scrollBody>table {
	    border-bottom: none
	}

	.dataTables_wrapper:after {
	    visibility: hidden;
	    display: block;
	    content: "";
	    clear: both;
	    height: 0
	}

	@media screen and (max-width: 767px) {

	    .dataTables_wrapper .dataTables_info,
	    .dataTables_wrapper .dataTables_paginate {
	        float: none;
	        text-align: center
	    }

	    .dataTables_wrapper .dataTables_paginate {
	        margin-top: 0.5em
	    }
	}

	@media screen and (max-width: 640px) {

	    .dataTables_wrapper .dataTables_length,
	    .dataTables_wrapper .dataTables_filter {
	        float: none;
	        text-align: center
	    }

	    .dataTables_wrapper .dataTables_filter {
	        margin-top: 0.5em
	    }
	}
        </style>
				
        <style>
				table.dataTable.dtr-inline.collapsed>tbody>tr>td.child,
	table.dataTable.dtr-inline.collapsed>tbody>tr>th.child,
	table.dataTable.dtr-inline.collapsed>tbody>tr>td.dataTables_empty {
	    cursor: default !important
	}

	table.dataTable.dtr-inline.collapsed>tbody>tr>td.child:before,
	table.dataTable.dtr-inline.collapsed>tbody>tr>th.child:before,
	table.dataTable.dtr-inline.collapsed>tbody>tr>td.dataTables_empty:before {
	    display: none !important
	}

	table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td.dtr-control,
	table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th.dtr-control {
	    position: relative;
	    padding-left: 30px;
	    cursor: pointer
	}

	table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td.dtr-control:before,
	table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th.dtr-control:before {
	    top: 50%;
	    left: 5px;
	    height: 1em;
	    width: 1em;
	    margin-top: -9px;
	    display: block;
	    position: absolute;
	    color: white;
	    border: 0.15em solid white;
	    border-radius: 1em;
	    box-shadow: 0 0 0.2em #444;
	    box-sizing: content-box;
	    text-align: center;
	    text-indent: 0 !important;
	    font-family: 'Courier New', Courier, monospace;
	    line-height: 1em;
	    content: '+';
	    background-color: #31b131
	}

	table.dataTable.dtr-inline.collapsed>tbody>tr.parent>td.dtr-control:before,
	table.dataTable.dtr-inline.collapsed>tbody>tr.parent>th.dtr-control:before {
	    content: '-';
	    background-color: #d33333
	}

	table.dataTable.dtr-inline.collapsed.compact>tbody>tr>td.dtr-control,
	table.dataTable.dtr-inline.collapsed.compact>tbody>tr>th.dtr-control {
	    padding-left: 27px
	}

	table.dataTable.dtr-inline.collapsed.compact>tbody>tr>td.dtr-control:before,
	table.dataTable.dtr-inline.collapsed.compact>tbody>tr>th.dtr-control:before {
	    left: 4px;
	    height: 14px;
	    width: 14px;
	    border-radius: 14px;
	    line-height: 14px;
	    text-indent: 3px
	}

	table.dataTable.dtr-column>tbody>tr>td.dtr-control,
	table.dataTable.dtr-column>tbody>tr>th.dtr-control,
	table.dataTable.dtr-column>tbody>tr>td.control,
	table.dataTable.dtr-column>tbody>tr>th.control {
	    position: relative;
	    cursor: pointer
	}

	table.dataTable.dtr-column>tbody>tr>td.dtr-control:before,
	table.dataTable.dtr-column>tbody>tr>th.dtr-control:before,
	table.dataTable.dtr-column>tbody>tr>td.control:before,
	table.dataTable.dtr-column>tbody>tr>th.control:before {
	    top: 50%;
	    left: 50%;
	    height: 0.8em;
	    width: 0.8em;
	    margin-top: -0.5em;
	    margin-left: -0.5em;
	    display: block;
	    position: absolute;
	    color: white;
	    border: 0.15em solid white;
	    border-radius: 1em;
	    box-shadow: 0 0 0.2em #444;
	    box-sizing: content-box;
	    text-align: center;
	    text-indent: 0 !important;
	    font-family: 'Courier New', Courier, monospace;
	    line-height: 1em;
	    content: '+';
	    background-color: #31b131
	}

	table.dataTable.dtr-column>tbody>tr.parent td.dtr-control:before,
	table.dataTable.dtr-column>tbody>tr.parent th.dtr-control:before,
	table.dataTable.dtr-column>tbody>tr.parent td.control:before,
	table.dataTable.dtr-column>tbody>tr.parent th.control:before {
	    content: '-';
	    background-color: #d33333
	}

	table.dataTable>tbody>tr.child {
	    padding: 0.5em 1em
	}

	table.dataTable>tbody>tr.child:hover {
	    background: transparent !important
	}

	table.dataTable>tbody>tr.child ul.dtr-details {
	    display: inline-block;
	    list-style-type: none;
	    margin: 0;
	    padding: 0
	}

	table.dataTable>tbody>tr.child ul.dtr-details>li {
	    border-bottom: 1px solid #efefef;
	    padding: 0.5em 0
	}

	table.dataTable>tbody>tr.child ul.dtr-details>li:first-child {
	    padding-top: 0
	}

	table.dataTable>tbody>tr.child ul.dtr-details>li:last-child {
	    border-bottom: none
	}

	table.dataTable>tbody>tr.child span.dtr-title {
	    display: inline-block;
	    min-width: 75px;
	    font-weight: bold
	}

	div.dtr-modal {
	    position: fixed;
	    box-sizing: border-box;
	    top: 0;
	    left: 0;
	    height: 100%;
	    width: 100%;
	    z-index: 100;
	    padding: 10em 1em
	}

	div.dtr-modal div.dtr-modal-display {
	    position: absolute;
	    top: 0;
	    left: 0;
	    bottom: 0;
	    right: 0;
	    width: 50%;
	    height: 50%;
	    overflow: auto;
	    margin: auto;
	    z-index: 102;
	    overflow: auto;
	    background-color: #f5f5f7;
	    border: 1px solid black;
	    border-radius: 0.5em;
	    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.6)
	}

	div.dtr-modal div.dtr-modal-content {
	    position: relative;
	    padding: 1em
	}

	div.dtr-modal div.dtr-modal-close {
	    position: absolute;
	    top: 6px;
	    right: 6px;
	    width: 22px;
	    height: 22px;
	    border: 1px solid #eaeaea;
	    background-color: #f9f9f9;
	    text-align: center;
	    border-radius: 3px;
	    cursor: pointer;
	    z-index: 12
	}

	div.dtr-modal div.dtr-modal-close:hover {
	    background-color: #eaeaea
	}

	div.dtr-modal div.dtr-modal-background {
	    position: fixed;
	    top: 0;
	    left: 0;
	    right: 0;
	    bottom: 0;
	    z-index: 101;
	    background: rgba(0, 0, 0, 0.6)
	}

	@media screen and (max-width: 767px) {
	    div.dtr-modal div.dtr-modal-display {
	        width: 95%
	    }
	}

	</style><style>@keyframes dtb-spinner {
	    100% {
	        transform: rotate(360deg)
	    }
	}

	@-o-keyframes dtb-spinner {
	    100% {
	        -o-transform: rotate(360deg);
	        transform: rotate(360deg)
	    }
	}

	@-ms-keyframes dtb-spinner {
	    100% {
	        -ms-transform: rotate(360deg);
	        transform: rotate(360deg)
	    }
	}

	@-webkit-keyframes dtb-spinner {
	    100% {
	        -webkit-transform: rotate(360deg);
	        transform: rotate(360deg)
	    }
	}

	@-moz-keyframes dtb-spinner {
	    100% {
	        -moz-transform: rotate(360deg);
	        transform: rotate(360deg)
	    }
	}

	div.dt-button-info {
	    position: fixed;
	    top: 50%;
	    left: 50%;
	    width: 400px;
	    margin-top: -100px;
	    margin-left: -200px;
	    background-color: white;
	    border: 2px solid #111;
	    box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.3);
	    border-radius: 3px;
	    text-align: center;
	    z-index: 21
	}

	div.dt-button-info h2 {
	    padding: 0.5em;
	    margin: 0;
	    font-weight: normal;
	    border-bottom: 1px solid #ddd;
	    background-color: #f3f3f3
	}

	div.dt-button-info>div {
	    padding: 1em
	}

	div.dt-button-collection-title {
	    text-align: center;
	    padding: 0.3em 0 0.5em;
	    font-size: 0.9em
	}

	div.dt-button-collection-title:empty {
	    display: none
	}

	button.dt-button,
	div.dt-button,
	a.dt-button,
	input.dt-button {
	    position: relative;
	    display: inline-block;
	    box-sizing: border-box;
	    margin-right: 0.333em;
	    margin-bottom: 0.333em;
	    padding: 0.5em 1em;
	    border: 1px solid rgba(0, 0, 0, 0.3);
	    border-radius: 2px;
	    cursor: pointer;
	    font-size: 0.88em;
	    line-height: 1.6em;
	    color: black;
	    white-space: nowrap;
	    overflow: hidden;
	    background-color: rgba(0, 0, 0, 0.1);
	    background: -webkit-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: -moz-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: -ms-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: -o-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: linear-gradient(to bottom, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='rgba(230, 230, 230, 0.1)', EndColorStr='rgba(0, 0, 0, 0.1)');
	    -webkit-user-select: none;
	    -moz-user-select: none;
	    -ms-user-select: none;
	    user-select: none;
	    text-decoration: none;
	    outline: none;
	    text-overflow: ellipsis
	}

	button.dt-button.disabled,
	div.dt-button.disabled,
	a.dt-button.disabled,
	input.dt-button.disabled {
	    cursor: default;
	    opacity: 0.4
	}

	button.dt-button:active:not(.disabled),
	button.dt-button.active:not(.disabled),
	div.dt-button:active:not(.disabled),
	div.dt-button.active:not(.disabled),
	a.dt-button:active:not(.disabled),
	a.dt-button.active:not(.disabled),
	input.dt-button:active:not(.disabled),
	input.dt-button.active:not(.disabled) {
	    background-color: rgba(0, 0, 0, 0.1);
	    background: -webkit-linear-gradient(top, rgba(179, 179, 179, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: -moz-linear-gradient(top, rgba(179, 179, 179, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: -ms-linear-gradient(top, rgba(179, 179, 179, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: -o-linear-gradient(top, rgba(179, 179, 179, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: linear-gradient(to bottom, rgba(179, 179, 179, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='rgba(179, 179, 179, 0.1)', EndColorStr='rgba(0, 0, 0, 0.1)');
	    box-shadow: inset 1px 1px 3px #999999
	}

	button.dt-button:active:not(.disabled):hover:not(.disabled),
	button.dt-button.active:not(.disabled):hover:not(.disabled),
	div.dt-button:active:not(.disabled):hover:not(.disabled),
	div.dt-button.active:not(.disabled):hover:not(.disabled),
	a.dt-button:active:not(.disabled):hover:not(.disabled),
	a.dt-button.active:not(.disabled):hover:not(.disabled),
	input.dt-button:active:not(.disabled):hover:not(.disabled),
	input.dt-button.active:not(.disabled):hover:not(.disabled) {
	    box-shadow: inset 1px 1px 3px #999999;
	    background-color: rgba(0, 0, 0, 0.1);
	    background: -webkit-linear-gradient(top, rgba(128, 128, 128, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: -moz-linear-gradient(top, rgba(128, 128, 128, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: -ms-linear-gradient(top, rgba(128, 128, 128, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: -o-linear-gradient(top, rgba(128, 128, 128, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: linear-gradient(to bottom, rgba(128, 128, 128, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='rgba(128, 128, 128, 0.1)', EndColorStr='rgba(0, 0, 0, 0.1)')
	}

	button.dt-button:hover,
	div.dt-button:hover,
	a.dt-button:hover,
	input.dt-button:hover {
	    text-decoration: none
	}

	button.dt-button:hover:not(.disabled),
	div.dt-button:hover:not(.disabled),
	a.dt-button:hover:not(.disabled),
	input.dt-button:hover:not(.disabled) {
	    border: 1px solid #666;
	    background-color: rgba(0, 0, 0, 0.1);
	    background: -webkit-linear-gradient(top, rgba(153, 153, 153, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: -moz-linear-gradient(top, rgba(153, 153, 153, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: -ms-linear-gradient(top, rgba(153, 153, 153, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: -o-linear-gradient(top, rgba(153, 153, 153, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    background: linear-gradient(to bottom, rgba(153, 153, 153, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
	    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='rgba(153, 153, 153, 0.1)', EndColorStr='rgba(0, 0, 0, 0.1)')
	}

	button.dt-button:focus:not(.disabled),
	div.dt-button:focus:not(.disabled),
	a.dt-button:focus:not(.disabled),
	input.dt-button:focus:not(.disabled) {
	    border: 1px solid #426c9e;
	    text-shadow: 0 1px 0 #c4def1;
	    outline: none;
	    background-color: #79ace9;
	    background: -webkit-linear-gradient(top, #d1e2f7 0%, #79ace9 100%);
	    background: -moz-linear-gradient(top, #d1e2f7 0%, #79ace9 100%);
	    background: -ms-linear-gradient(top, #d1e2f7 0%, #79ace9 100%);
	    background: -o-linear-gradient(top, #d1e2f7 0%, #79ace9 100%);
	    background: linear-gradient(to bottom, #d1e2f7 0%, #79ace9 100%);
	    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#d1e2f7', EndColorStr='#79ace9')
	}

	.dt-button embed {
	    outline: none
	}

	div.dt-buttons {
	    position: relative;
	    float: left
	}

	div.dt-buttons.buttons-right {
	    float: right
	}

	div.dataTables_layout_cell div.dt-buttons {
	    float: none
	}

	div.dataTables_layout_cell div.dt-buttons.buttons-right {
	    float: none
	}

	div.dt-button-collection {
	    position: absolute;
	    top: 0;
	    left: 0;
	    width: 150px;
	    margin-top: 3px;
	    padding: 8px 8px 4px 8px;
	    border: 1px solid #ccc;
	    border: 1px solid rgba(0, 0, 0, 0.4);
	    background-color: white;
	    overflow: hidden;
	    z-index: 2002;
	    border-radius: 5px;
	    box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
	    box-sizing: border-box
	}

	div.dt-button-collection button.dt-button,
	div.dt-button-collection div.dt-button,
	div.dt-button-collection a.dt-button {
	    position: relative;
	    left: 0;
	    right: 0;
	    width: 100%;
	    display: block;
	    float: none;
	    margin-bottom: 4px;
	    margin-right: 0
	}

	div.dt-button-collection button.dt-button:active:not(.disabled),
	div.dt-button-collection button.dt-button.active:not(.disabled),
	div.dt-button-collection div.dt-button:active:not(.disabled),
	div.dt-button-collection div.dt-button.active:not(.disabled),
	div.dt-button-collection a.dt-button:active:not(.disabled),
	div.dt-button-collection a.dt-button.active:not(.disabled) {
	    background-color: #dadada;
	    background: -webkit-linear-gradient(top, #f0f0f0 0%, #dadada 100%);
	    background: -moz-linear-gradient(top, #f0f0f0 0%, #dadada 100%);
	    background: -ms-linear-gradient(top, #f0f0f0 0%, #dadada 100%);
	    background: -o-linear-gradient(top, #f0f0f0 0%, #dadada 100%);
	    background: linear-gradient(to bottom, #f0f0f0 0%, #dadada 100%);
	    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#f0f0f0', EndColorStr='#dadada');
	    box-shadow: inset 1px 1px 3px #666
	}

	div.dt-button-collection.fixed {
	    position: fixed;
	    top: 50%;
	    left: 50%;
	    margin-left: -75px;
	    border-radius: 0
	}

	div.dt-button-collection.fixed.two-column {
	    margin-left: -200px
	}

	div.dt-button-collection.fixed.three-column {
	    margin-left: -225px
	}

	div.dt-button-collection.fixed.four-column {
	    margin-left: -300px
	}

	div.dt-button-collection>:last-child {
	    display: block !important;
	    -webkit-column-gap: 8px;
	    -moz-column-gap: 8px;
	    -ms-column-gap: 8px;
	    -o-column-gap: 8px;
	    column-gap: 8px
	}

	div.dt-button-collection>:last-child>* {
	    -webkit-column-break-inside: avoid;
	    break-inside: avoid
	}

	div.dt-button-collection.two-column {
	    width: 400px
	}

	div.dt-button-collection.two-column>:last-child {
	    padding-bottom: 1px;
	    -webkit-column-count: 2;
	    -moz-column-count: 2;
	    -ms-column-count: 2;
	    -o-column-count: 2;
	    column-count: 2
	}

	div.dt-button-collection.three-column {
	    width: 450px
	}

	div.dt-button-collection.three-column>:last-child {
	    padding-bottom: 1px;
	    -webkit-column-count: 3;
	    -moz-column-count: 3;
	    -ms-column-count: 3;
	    -o-column-count: 3;
	    column-count: 3
	}

	div.dt-button-collection.four-column {
	    width: 600px
	}

	div.dt-button-collection.four-column>:last-child {
	    padding-bottom: 1px;
	    -webkit-column-count: 4;
	    -moz-column-count: 4;
	    -ms-column-count: 4;
	    -o-column-count: 4;
	    column-count: 4
	}

	div.dt-button-collection .dt-button {
	    border-radius: 0
	}

	div.dt-button-background {
	    position: fixed;
	    top: 0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	    background: rgba(0, 0, 0, 0.7);
	    background: -ms-radial-gradient(center, ellipse farthest-corner, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 100%);
	    background: -moz-radial-gradient(center, ellipse farthest-corner, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 100%);
	    background: -o-radial-gradient(center, ellipse farthest-corner, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 100%);
	    background: -webkit-gradient(radial, center center, 0, center center, 497, color-stop(0, rgba(0, 0, 0, 0.3)), color-stop(1, rgba(0, 0, 0, 0.7)));
	    background: -webkit-radial-gradient(center, ellipse farthest-corner, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 100%);
	    background: radial-gradient(ellipse farthest-corner at center, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 100%);
	    z-index: 2001
	}

	@media screen and (max-width: 640px) {
	    div.dt-buttons {
	        float: none !important;
	        text-align: center
	    }
	}

	button.dt-button.processing,
	div.dt-button.processing,
	a.dt-button.processing {
	    color: rgba(0, 0, 0, 0.2)
	}

	button.dt-button.processing:after,
	div.dt-button.processing:after,
	a.dt-button.processing:after {
	    position: absolute;
	    top: 50%;
	    left: 50%;
	    width: 16px;
	    height: 16px;
	    margin: -8px 0 0 -8px;
	    box-sizing: border-box;
	    display: block;
	    content: ' ';
	    border: 2px solid #282828;
	    border-radius: 50%;
	    border-left-color: transparent;
	    border-right-color: transparent;
	    animation: dtb-spinner 1500ms infinite linear;
	    -o-animation: dtb-spinner 1500ms infinite linear;
	    -ms-animation: dtb-spinner 1500ms infinite linear;
	    -webkit-animation: dtb-spinner 1500ms infinite linear;
	    -moz-animation: dtb-spinner 1500ms infinite linear
	}
        </style>
        <style>
				@charset "UTF-8";

	/*!
        * Material Design for Bootstrap 4
        *   Version: MDB FREE 4.19.1
        *
        *
        *   Copyright: Material Design for Bootstrap
        *   https://mdbootstrap.com/
        *
        *   Read the license: https://mdbootstrap.com/general/license/
        *
        *
        *   Documentation: https://mdbootstrap.com/
        *
        *   Getting started: https://mdbootstrap.com/docs/jquery/getting-started/download/
        *
        *   Tutorials: https://mdbootstrap.com/education/bootstrap/
        *
        *   Templates: https://mdbootstrap.com/templates/
        *
        *   Support: https://mdbootstrap.com/support/
        *
        *   Contact: office@mdbootstrap.com
        *
        *   Attribution: Animate CSS, Twitter Bootstrap, Materialize CSS, Normalize CSS, Waves JS, WOW JS, Toastr, Chart.js
        */
	.mdb-color.lighten-5 {
	    background-color: #d0d6e2 !important
	}

	.mdb-color.lighten-4 {
	    background-color: #b1bace !important
	}

	.mdb-color.lighten-3 {
	    background-color: #929fba !important
	}

	.mdb-color.lighten-2 {
	    background-color: #7283a7 !important
	}

	.mdb-color.lighten-1 {
	    background-color: #59698d !important
	}

	.mdb-color {
	    background-color: #45526e !important
	}

	.mdb-color-text {
	    color: #45526e !important
	}

	.rgba-mdb-color-slight,
	.rgba-mdb-color-slight:after {
	    background-color: rgba(69, 82, 110, 0.1)
	}

	.rgba-mdb-color-light,
	.rgba-mdb-color-light:after {
	    background-color: rgba(69, 82, 110, 0.3)
	}

	.rgba-mdb-color-strong,
	.rgba-mdb-color-strong:after {
	    background-color: rgba(69, 82, 110, 0.7)
	}

	.mdb-color.darken-1 {
	    background-color: #3b465e !important
	}

	.mdb-color.darken-2 {
	    background-color: #2e3951 !important
	}

	.mdb-color.darken-3 {
	    background-color: #1c2a48 !important
	}

	.mdb-color.darken-4 {
	    background-color: #1c2331 !important
	}

	.red.lighten-5 {
	    background-color: #ffebee !important
	}

	.red.lighten-4 {
	    background-color: #ffcdd2 !important
	}

	.red.lighten-3 {
	    background-color: #ef9a9a !important
	}

	.red.lighten-2 {
	    background-color: #e57373 !important
	}

	.red.lighten-1 {
	    background-color: #ef5350 !important
	}

	.red {
	    background-color: #f44336 !important
	}

	.red-text {
	    color: #f44336 !important
	}

	.rgba-red-slight,
	.rgba-red-slight:after {
	    background-color: rgba(244, 67, 54, 0.1)
	}

	.rgba-red-light,
	.rgba-red-light:after {
	    background-color: rgba(244, 67, 54, 0.3)
	}

	.rgba-red-strong,
	.rgba-red-strong:after {
	    background-color: rgba(244, 67, 54, 0.7)
	}

	.red.darken-1 {
	    background-color: #e53935 !important
	}

	.red.darken-2 {
	    background-color: #d32f2f !important
	}

	.red.darken-3 {
	    background-color: #c62828 !important
	}

	.red.darken-4 {
	    background-color: #b71c1c !important
	}

	.red.accent-1 {
	    background-color: #ff8a80 !important
	}

	.red.accent-2 {
	    background-color: #ff5252 !important
	}

	.red.accent-3 {
	    background-color: #ff1744 !important
	}

	.red.accent-4 {
	    background-color: #d50000 !important
	}

	.pink.lighten-5 {
	    background-color: #fce4ec !important
	}

	.pink.lighten-4 {
	    background-color: #f8bbd0 !important
	}

	.pink.lighten-3 {
	    background-color: #f48fb1 !important
	}

	.pink.lighten-2 {
	    background-color: #f06292 !important
	}

	.pink.lighten-1 {
	    background-color: #ec407a !important
	}

	.pink {
	    background-color: #e91e63 !important
	}

	.pink-text {
	    color: #e91e63 !important
	}

	.rgba-pink-slight,
	.rgba-pink-slight:after {
	    background-color: rgba(233, 30, 99, 0.1)
	}

	.rgba-pink-light,
	.rgba-pink-light:after {
	    background-color: rgba(233, 30, 99, 0.3)
	}

	.rgba-pink-strong,
	.rgba-pink-strong:after {
	    background-color: rgba(233, 30, 99, 0.7)
	}

	.pink.darken-1 {
	    background-color: #d81b60 !important
	}

	.pink.darken-2 {
	    background-color: #c2185b !important
	}

	.pink.darken-3 {
	    background-color: #ad1457 !important
	}

	.pink.darken-4 {
	    background-color: #880e4f !important
	}

	.pink.accent-1 {
	    background-color: #ff80ab !important
	}

	.pink.accent-2 {
	    background-color: #ff4081 !important
	}

	.pink.accent-3 {
	    background-color: #f50057 !important
	}

	.pink.accent-4 {
	    background-color: #c51162 !important
	}

	.purple.lighten-5 {
	    background-color: #f3e5f5 !important
	}

	.purple.lighten-4 {
	    background-color: #e1bee7 !important
	}

	.purple.lighten-3 {
	    background-color: #ce93d8 !important
	}

	.purple.lighten-2 {
	    background-color: #ba68c8 !important
	}

	.purple.lighten-1 {
	    background-color: #ab47bc !important
	}

	.purple {
	    background-color: #9c27b0 !important
	}

	.purple-text {
	    color: #9c27b0 !important
	}

	.rgba-purple-slight,
	.rgba-purple-slight:after {
	    background-color: rgba(156, 39, 176, 0.1)
	}

	.rgba-purple-light,
	.rgba-purple-light:after {
	    background-color: rgba(156, 39, 176, 0.3)
	}

	.rgba-purple-strong,
	.rgba-purple-strong:after {
	    background-color: rgba(156, 39, 176, 0.7)
	}

	.purple.darken-1 {
	    background-color: #8e24aa !important
	}

	.purple.darken-2 {
	    background-color: #7b1fa2 !important
	}

	.purple.darken-3 {
	    background-color: #6a1b9a !important
	}

	.purple.darken-4 {
	    background-color: #4a148c !important
	}

	.purple.accent-1 {
	    background-color: #ea80fc !important
	}

	.purple.accent-2 {
	    background-color: #e040fb !important
	}

	.purple.accent-3 {
	    background-color: #d500f9 !important
	}

	.purple.accent-4 {
	    background-color: #a0f !important
	}

	.deep-purple.lighten-5 {
	    background-color: #ede7f6 !important
	}

	.deep-purple.lighten-4 {
	    background-color: #d1c4e9 !important
	}

	.deep-purple.lighten-3 {
	    background-color: #b39ddb !important
	}

	.deep-purple.lighten-2 {
	    background-color: #9575cd !important
	}

	.deep-purple.lighten-1 {
	    background-color: #7e57c2 !important
	}

	.deep-purple {
	    background-color: #673ab7 !important
	}

	.deep-purple-text {
	    color: #673ab7 !important
	}

	.rgba-deep-purple-slight,
	.rgba-deep-purple-slight:after {
	    background-color: rgba(103, 58, 183, 0.1)
	}

	.rgba-deep-purple-light,
	.rgba-deep-purple-light:after {
	    background-color: rgba(103, 58, 183, 0.3)
	}

	.rgba-deep-purple-strong,
	.rgba-deep-purple-strong:after {
	    background-color: rgba(103, 58, 183, 0.7)
	}

	.deep-purple.darken-1 {
	    background-color: #5e35b1 !important
	}

	.deep-purple.darken-2 {
	    background-color: #512da8 !important
	}

	.deep-purple.darken-3 {
	    background-color: #4527a0 !important
	}

	.deep-purple.darken-4 {
	    background-color: #311b92 !important
	}

	.deep-purple.accent-1 {
	    background-color: #b388ff !important
	}

	.deep-purple.accent-2 {
	    background-color: #7c4dff !important
	}

	.deep-purple.accent-3 {
	    background-color: #651fff !important
	}

	.deep-purple.accent-4 {
	    background-color: #6200ea !important
	}

	.indigo.lighten-5 {
	    background-color: #e8eaf6 !important
	}

	.indigo.lighten-4 {
	    background-color: #c5cae9 !important
	}

	.indigo.lighten-3 {
	    background-color: #9fa8da !important
	}

	.indigo.lighten-2 {
	    background-color: #7986cb !important
	}

	.indigo.lighten-1 {
	    background-color: #5c6bc0 !important
	}

	.indigo {
	    background-color: #3f51b5 !important
	}

	.indigo-text {
	    color: #3f51b5 !important
	}

	.rgba-indigo-slight,
	.rgba-indigo-slight:after {
	    background-color: rgba(63, 81, 181, 0.1)
	}

	.rgba-indigo-light,
	.rgba-indigo-light:after {
	    background-color: rgba(63, 81, 181, 0.3)
	}

	.rgba-indigo-strong,
	.rgba-indigo-strong:after {
	    background-color: rgba(63, 81, 181, 0.7)
	}

	.indigo.darken-1 {
	    background-color: #3949ab !important
	}

	.indigo.darken-2 {
	    background-color: #303f9f !important
	}

	.indigo.darken-3 {
	    background-color: #283593 !important
	}

	.indigo.darken-4 {
	    background-color: #1a237e !important
	}

	.indigo.accent-1 {
	    background-color: #8c9eff !important
	}

	.indigo.accent-2 {
	    background-color: #536dfe !important
	}

	.indigo.accent-3 {
	    background-color: #3d5afe !important
	}

	.indigo.accent-4 {
	    background-color: #304ffe !important
	}

	.blue.lighten-5 {
	    background-color: #e3f2fd !important
	}

	.blue.lighten-4 {
	    background-color: #bbdefb !important
	}

	.blue.lighten-3 {
	    background-color: #90caf9 !important
	}

	.blue.lighten-2 {
	    background-color: #64b5f6 !important
	}

	.blue.lighten-1 {
	    background-color: #42a5f5 !important
	}

	.blue {
	    background-color: #2196f3 !important
	}

	.blue-text {
	    color: #2196f3 !important
	}

	.rgba-blue-slight,
	.rgba-blue-slight:after {
	    background-color: rgba(33, 150, 243, 0.1)
	}

	.rgba-blue-light,
	.rgba-blue-light:after {
	    background-color: rgba(33, 150, 243, 0.3)
	}

	.rgba-blue-strong,
	.rgba-blue-strong:after {
	    background-color: rgba(33, 150, 243, 0.7)
	}

	.blue.darken-1 {
	    background-color: #1e88e5 !important
	}

	.blue.darken-2 {
	    background-color: #1976d2 !important
	}

	.blue.darken-3 {
	    background-color: #1565c0 !important
	}

	.blue.darken-4 {
	    background-color: #0d47a1 !important
	}

	.blue.accent-1 {
	    background-color: #82b1ff !important
	}

	.blue.accent-2 {
	    background-color: #448aff !important
	}

	.blue.accent-3 {
	    background-color: #2979ff !important
	}

	.blue.accent-4 {
	    background-color: #2962ff !important
	}

	.light-blue.lighten-5 {
	    background-color: #e1f5fe !important
	}

	.light-blue.lighten-4 {
	    background-color: #b3e5fc !important
	}

	.light-blue.lighten-3 {
	    background-color: #81d4fa !important
	}

	.light-blue.lighten-2 {
	    background-color: #4fc3f7 !important
	}

	.light-blue.lighten-1 {
	    background-color: #29b6f6 !important
	}

	.light-blue {
	    background-color: #03a9f4 !important
	}

	.light-blue-text {
	    color: #03a9f4 !important
	}

	.rgba-light-blue-slight,
	.rgba-light-blue-slight:after {
	    background-color: rgba(3, 169, 244, 0.1)
	}

	.rgba-light-blue-light,
	.rgba-light-blue-light:after {
	    background-color: rgba(3, 169, 244, 0.3)
	}

	.rgba-light-blue-strong,
	.rgba-light-blue-strong:after {
	    background-color: rgba(3, 169, 244, 0.7)
	}

	.light-blue.darken-1 {
	    background-color: #039be5 !important
	}

	.light-blue.darken-2 {
	    background-color: #0288d1 !important
	}

	.light-blue.darken-3 {
	    background-color: #0277bd !important
	}

	.light-blue.darken-4 {
	    background-color: #01579b !important
	}

	.light-blue.accent-1 {
	    background-color: #80d8ff !important
	}

	.light-blue.accent-2 {
	    background-color: #40c4ff !important
	}

	.light-blue.accent-3 {
	    background-color: #00b0ff !important
	}

	.light-blue.accent-4 {
	    background-color: #0091ea !important
	}

	.cyan.lighten-5 {
	    background-color: #e0f7fa !important
	}

	.cyan.lighten-4 {
	    background-color: #b2ebf2 !important
	}

	.cyan.lighten-3 {
	    background-color: #80deea !important
	}

	.cyan.lighten-2 {
	    background-color: #4dd0e1 !important
	}

	.cyan.lighten-1 {
	    background-color: #26c6da !important
	}

	.cyan {
	    background-color: #00bcd4 !important
	}

	.cyan-text {
	    color: #00bcd4 !important
	}

	.rgba-cyan-slight,
	.rgba-cyan-slight:after {
	    background-color: rgba(0, 188, 212, 0.1)
	}

	.rgba-cyan-light,
	.rgba-cyan-light:after {
	    background-color: rgba(0, 188, 212, 0.3)
	}

	.rgba-cyan-strong,
	.rgba-cyan-strong:after {
	    background-color: rgba(0, 188, 212, 0.7)
	}

	.cyan.darken-1 {
	    background-color: #00acc1 !important
	}

	.cyan.darken-2 {
	    background-color: #0097a7 !important
	}

	.cyan.darken-3 {
	    background-color: #00838f !important
	}

	.cyan.darken-4 {
	    background-color: #006064 !important
	}

	.cyan.accent-1 {
	    background-color: #84ffff !important
	}

	.cyan.accent-2 {
	    background-color: #18ffff !important
	}

	.cyan.accent-3 {
	    background-color: #00e5ff !important
	}

	.cyan.accent-4 {
	    background-color: #00b8d4 !important
	}

	.teal.lighten-5 {
	    background-color: #e0f2f1 !important
	}

	.teal.lighten-4 {
	    background-color: #b2dfdb !important
	}

	.teal.lighten-3 {
	    background-color: #80cbc4 !important
	}

	.teal.lighten-2 {
	    background-color: #4db6ac !important
	}

	.teal.lighten-1 {
	    background-color: #26a69a !important
	}

	.teal {
	    background-color: #009688 !important
	}

	.teal-text {
	    color: #009688 !important
	}

	.rgba-teal-slight,
	.rgba-teal-slight:after {
	    background-color: rgba(0, 150, 136, 0.1)
	}

	.rgba-teal-light,
	.rgba-teal-light:after {
	    background-color: rgba(0, 150, 136, 0.3)
	}

	.rgba-teal-strong,
	.rgba-teal-strong:after {
	    background-color: rgba(0, 150, 136, 0.7)
	}

	.teal.darken-1 {
	    background-color: #00897b !important
	}

	.teal.darken-2 {
	    background-color: #00796b !important
	}

	.teal.darken-3 {
	    background-color: #00695c !important
	}

	.teal.darken-4 {
	    background-color: #004d40 !important
	}

	.teal.accent-1 {
	    background-color: #a7ffeb !important
	}

	.teal.accent-2 {
	    background-color: #64ffda !important
	}

	.teal.accent-3 {
	    background-color: #1de9b6 !important
	}

	.teal.accent-4 {
	    background-color: #00bfa5 !important
	}

	.green.lighten-5 {
	    background-color: #e8f5e9 !important
	}

	.green.lighten-4 {
	    background-color: #c8e6c9 !important
	}

	.green.lighten-3 {
	    background-color: #a5d6a7 !important
	}

	.green.lighten-2 {
	    background-color: #81c784 !important
	}

	.green.lighten-1 {
	    background-color: #66bb6a !important
	}

	.green {
	    background-color: #4caf50 !important
	}

	.green-text {
	    color: #4caf50 !important
	}

	.rgba-green-slight,
	.rgba-green-slight:after {
	    background-color: rgba(76, 175, 80, 0.1)
	}

	.rgba-green-light,
	.rgba-green-light:after {
	    background-color: rgba(76, 175, 80, 0.3)
	}

	.rgba-green-strong,
	.rgba-green-strong:after {
	    background-color: rgba(76, 175, 80, 0.7)
	}

	.green.darken-1 {
	    background-color: #43a047 !important
	}

	.green.darken-2 {
	    background-color: #388e3c !important
	}

	.green.darken-3 {
	    background-color: #2e7d32 !important
	}

	.green.darken-4 {
	    background-color: #1b5e20 !important
	}

	.green.accent-1 {
	    background-color: #b9f6ca !important
	}

	.green.accent-2 {
	    background-color: #69f0ae !important
	}

	.green.accent-3 {
	    background-color: #00e676 !important
	}

	.green.accent-4 {
	    background-color: #00c853 !important
	}

	.light-green.lighten-5 {
	    background-color: #f1f8e9 !important
	}

	.light-green.lighten-4 {
	    background-color: #dcedc8 !important
	}

	.light-green.lighten-3 {
	    background-color: #c5e1a5 !important
	}

	.light-green.lighten-2 {
	    background-color: #aed581 !important
	}

	.light-green.lighten-1 {
	    background-color: #9ccc65 !important
	}

	.light-green {
	    background-color: #8bc34a !important
	}

	.light-green-text {
	    color: #8bc34a !important
	}

	.rgba-light-green-slight,
	.rgba-light-green-slight:after {
	    background-color: rgba(139, 195, 74, 0.1)
	}

	.rgba-light-green-light,
	.rgba-light-green-light:after {
	    background-color: rgba(139, 195, 74, 0.3)
	}

	.rgba-light-green-strong,
	.rgba-light-green-strong:after {
	    background-color: rgba(139, 195, 74, 0.7)
	}

	.light-green.darken-1 {
	    background-color: #7cb342 !important
	}

	.light-green.darken-2 {
	    background-color: #689f38 !important
	}

	.light-green.darken-3 {
	    background-color: #558b2f !important
	}

	.light-green.darken-4 {
	    background-color: #33691e !important
	}

	.light-green.accent-1 {
	    background-color: #ccff90 !important
	}

	.light-green.accent-2 {
	    background-color: #b2ff59 !important
	}

	.light-green.accent-3 {
	    background-color: #76ff03 !important
	}

	.light-green.accent-4 {
	    background-color: #64dd17 !important
	}

	.lime.lighten-5 {
	    background-color: #f9fbe7 !important
	}

	.lime.lighten-4 {
	    background-color: #f0f4c3 !important
	}

	.lime.lighten-3 {
	    background-color: #e6ee9c !important
	}

	.lime.lighten-2 {
	    background-color: #dce775 !important
	}

	.lime.lighten-1 {
	    background-color: #d4e157 !important
	}

	.lime {
	    background-color: #cddc39 !important
	}

	.lime-text {
	    color: #cddc39 !important
	}

	.rgba-lime-slight,
	.rgba-lime-slight:after {
	    background-color: rgba(205, 220, 57, 0.1)
	}

	.rgba-lime-light,
	.rgba-lime-light:after {
	    background-color: rgba(205, 220, 57, 0.3)
	}

	.rgba-lime-strong,
	.rgba-lime-strong:after {
	    background-color: rgba(205, 220, 57, 0.7)
	}

	.lime.darken-1 {
	    background-color: #c0ca33 !important
	}

	.lime.darken-2 {
	    background-color: #afb42b !important
	}

	.lime.darken-3 {
	    background-color: #9e9d24 !important
	}

	.lime.darken-4 {
	    background-color: #827717 !important
	}

	.lime.accent-1 {
	    background-color: #f4ff81 !important
	}

	.lime.accent-2 {
	    background-color: #eeff41 !important
	}

	.lime.accent-3 {
	    background-color: #c6ff00 !important
	}

	.lime.accent-4 {
	    background-color: #aeea00 !important
	}

	.yellow.lighten-5 {
	    background-color: #fffde7 !important
	}

	.yellow.lighten-4 {
	    background-color: #fff9c4 !important
	}

	.yellow.lighten-3 {
	    background-color: #fff59d !important
	}

	.yellow.lighten-2 {
	    background-color: #fff176 !important
	}

	.yellow.lighten-1 {
	    background-color: #ffee58 !important
	}

	.yellow {
	    background-color: #ffeb3b !important
	}

	.yellow-text {
	    color: #ffeb3b !important
	}

	.rgba-yellow-slight,
	.rgba-yellow-slight:after {
	    background-color: rgba(255, 235, 59, 0.1)
	}

	.rgba-yellow-light,
	.rgba-yellow-light:after {
	    background-color: rgba(255, 235, 59, 0.3)
	}

	.rgba-yellow-strong,
	.rgba-yellow-strong:after {
	    background-color: rgba(255, 235, 59, 0.7)
	}

	.yellow.darken-1 {
	    background-color: #fdd835 !important
	}

	.yellow.darken-2 {
	    background-color: #fbc02d !important
	}

	.yellow.darken-3 {
	    background-color: #f9a825 !important
	}

	.yellow.darken-4 {
	    background-color: #f57f17 !important
	}

	.yellow.accent-1 {
	    background-color: #ffff8d !important
	}

	.yellow.accent-2 {
	    background-color: #ff0 !important
	}

	.yellow.accent-3 {
	    background-color: #ffea00 !important
	}

	.yellow.accent-4 {
	    background-color: #ffd600 !important
	}

	.amber.lighten-5 {
	    background-color: #fff8e1 !important
	}

	.amber.lighten-4 {
	    background-color: #ffecb3 !important
	}

	.amber.lighten-3 {
	    background-color: #ffe082 !important
	}

	.amber.lighten-2 {
	    background-color: #ffd54f !important
	}

	.amber.lighten-1 {
	    background-color: #ffca28 !important
	}

	.amber {
	    background-color: #ffc107 !important
	}

	.amber-text {
	    color: #ffc107 !important
	}

	.rgba-amber-slight,
	.rgba-amber-slight:after {
	    background-color: rgba(255, 193, 7, 0.1)
	}

	.rgba-amber-light,
	.rgba-amber-light:after {
	    background-color: rgba(255, 193, 7, 0.3)
	}

	.rgba-amber-strong,
	.rgba-amber-strong:after {
	    background-color: rgba(255, 193, 7, 0.7)
	}

	.amber.darken-1 {
	    background-color: #ffb300 !important
	}

	.amber.darken-2 {
	    background-color: #ffa000 !important
	}

	.amber.darken-3 {
	    background-color: #ff8f00 !important
	}

	.amber.darken-4 {
	    background-color: #ff6f00 !important
	}

	.amber.accent-1 {
	    background-color: #ffe57f !important
	}

	.amber.accent-2 {
	    background-color: #ffd740 !important
	}

	.amber.accent-3 {
	    background-color: #ffc400 !important
	}

	.amber.accent-4 {
	    background-color: #ffab00 !important
	}

	.orange.lighten-5 {
	    background-color: #fff3e0 !important
	}

	.orange.lighten-4 {
	    background-color: #ffe0b2 !important
	}

	.orange.lighten-3 {
	    background-color: #ffcc80 !important
	}

	.orange.lighten-2 {
	    background-color: #ffb74d !important
	}

	.orange.lighten-1 {
	    background-color: #ffa726 !important
	}

	.orange {
	    background-color: #ff9800 !important
	}

	.orange-text {
	    color: #ff9800 !important
	}

	.rgba-orange-slight,
	.rgba-orange-slight:after {
	    background-color: rgba(255, 152, 0, 0.1)
	}

	.rgba-orange-light,
	.rgba-orange-light:after {
	    background-color: rgba(255, 152, 0, 0.3)
	}

	.rgba-orange-strong,
	.rgba-orange-strong:after {
	    background-color: rgba(255, 152, 0, 0.7)
	}

	.orange.darken-1 {
	    background-color: #fb8c00 !important
	}

	.orange.darken-2 {
	    background-color: #f57c00 !important
	}

	.orange.darken-3 {
	    background-color: #ef6c00 !important
	}

	.orange.darken-4 {
	    background-color: #e65100 !important
	}

	.orange.accent-1 {
	    background-color: #ffd180 !important
	}

	.orange.accent-2 {
	    background-color: #ffab40 !important
	}

	.orange.accent-3 {
	    background-color: #ff9100 !important
	}

	.orange.accent-4 {
	    background-color: #ff6d00 !important
	}

	.deep-orange.lighten-5 {
	    background-color: #fbe9e7 !important
	}

	.deep-orange.lighten-4 {
	    background-color: #ffccbc !important
	}

	.deep-orange.lighten-3 {
	    background-color: #ffab91 !important
	}

	.deep-orange.lighten-2 {
	    background-color: #ff8a65 !important
	}

	.deep-orange.lighten-1 {
	    background-color: #ff7043 !important
	}

	.deep-orange {
	    background-color: #ff5722 !important
	}

	.deep-orange-text {
	    color: #ff5722 !important
	}

	.rgba-deep-orange-slight,
	.rgba-deep-orange-slight:after {
	    background-color: rgba(255, 87, 34, 0.1)
	}

	.rgba-deep-orange-light,
	.rgba-deep-orange-light:after {
	    background-color: rgba(255, 87, 34, 0.3)
	}

	.rgba-deep-orange-strong,
	.rgba-deep-orange-strong:after {
	    background-color: rgba(255, 87, 34, 0.7)
	}

	.deep-orange.darken-1 {
	    background-color: #f4511e !important
	}

	.deep-orange.darken-2 {
	    background-color: #e64a19 !important
	}

	.deep-orange.darken-3 {
	    background-color: #d84315 !important
	}

	.deep-orange.darken-4 {
	    background-color: #bf360c !important
	}

	.deep-orange.accent-1 {
	    background-color: #ff9e80 !important
	}

	.deep-orange.accent-2 {
	    background-color: #ff6e40 !important
	}

	.deep-orange.accent-3 {
	    background-color: #ff3d00 !important
	}

	.deep-orange.accent-4 {
	    background-color: #dd2c00 !important
	}

	.brown.lighten-5 {
	    background-color: #efebe9 !important
	}

	.brown.lighten-4 {
	    background-color: #d7ccc8 !important
	}

	.brown.lighten-3 {
	    background-color: #bcaaa4 !important
	}

	.brown.lighten-2 {
	    background-color: #a1887f !important
	}

	.brown.lighten-1 {
	    background-color: #8d6e63 !important
	}

	.brown {
	    background-color: #795548 !important
	}

	.brown-text {
	    color: #795548 !important
	}

	.rgba-brown-slight,
	.rgba-brown-slight:after {
	    background-color: rgba(121, 85, 72, 0.1)
	}

	.rgba-brown-light,
	.rgba-brown-light:after {
	    background-color: rgba(121, 85, 72, 0.3)
	}

	.rgba-brown-strong,
	.rgba-brown-strong:after {
	    background-color: rgba(121, 85, 72, 0.7)
	}

	.brown.darken-1 {
	    background-color: #6d4c41 !important
	}

	.brown.darken-2 {
	    background-color: #5d4037 !important
	}

	.brown.darken-3 {
	    background-color: #4e342e !important
	}

	.brown.darken-4 {
	    background-color: #3e2723 !important
	}

	.blue-grey.lighten-5 {
	    background-color: #eceff1 !important
	}

	.blue-grey.lighten-4 {
	    background-color: #cfd8dc !important
	}

	.blue-grey.lighten-3 {
	    background-color: #b0bec5 !important
	}

	.blue-grey.lighten-2 {
	    background-color: #90a4ae !important
	}

	.blue-grey.lighten-1 {
	    background-color: #78909c !important
	}

	.blue-grey {
	    background-color: #607d8b !important
	}

	.blue-grey-text {
	    color: #607d8b !important
	}

	.rgba-blue-grey-slight,
	.rgba-blue-grey-slight:after {
	    background-color: rgba(96, 125, 139, 0.1)
	}

	.rgba-blue-grey-light,
	.rgba-blue-grey-light:after {
	    background-color: rgba(96, 125, 139, 0.3)
	}

	.rgba-blue-grey-strong,
	.rgba-blue-grey-strong:after {
	    background-color: rgba(96, 125, 139, 0.7)
	}

	.blue-grey.darken-1 {
	    background-color: #546e7a !important
	}

	.blue-grey.darken-2 {
	    background-color: #455a64 !important
	}

	.blue-grey.darken-3 {
	    background-color: #37474f !important
	}

	.blue-grey.darken-4 {
	    background-color: #263238 !important
	}

	.grey.lighten-5 {
	    background-color: #fafafa !important
	}

	.grey.lighten-4 {
	    background-color: #f5f5f5 !important
	}

	.grey.lighten-3 {
	    background-color: #eee !important
	}

	.grey.lighten-2 {
	    background-color: #e0e0e0 !important
	}

	.grey.lighten-1 {
	    background-color: #bdbdbd !important
	}

	.grey {
	    background-color: #9e9e9e !important
	}

	.grey-text {
	    color: #9e9e9e !important
	}

	.rgba-grey-slight,
	.rgba-grey-slight:after {
	    background-color: rgba(158, 158, 158, 0.1)
	}

	.rgba-grey-light,
	.rgba-grey-light:after {
	    background-color: rgba(158, 158, 158, 0.3)
	}

	.rgba-grey-strong,
	.rgba-grey-strong:after {
	    background-color: rgba(158, 158, 158, 0.7)
	}

	.grey.darken-1 {
	    background-color: #757575 !important
	}

	.grey.darken-2 {
	    background-color: #616161 !important
	}

	.grey.darken-3 {
	    background-color: #424242 !important
	}

	.grey.darken-4 {
	    background-color: #212121 !important
	}

	.black {
	    background-color: #000 !important
	}

	.black-text {
	    color: #000 !important
	}

	.rgba-black-slight,
	.rgba-black-slight:after {
	    background-color: rgba(0, 0, 0, 0.1)
	}

	.rgba-black-light,
	.rgba-black-light:after {
	    background-color: rgba(0, 0, 0, 0.3)
	}

	.rgba-black-strong,
	.rgba-black-strong:after {
	    background-color: rgba(0, 0, 0, 0.7)
	}

	.white {
	    background-color: #fff !important
	}

	.white-text {
	    color: #fff !important
	}

	.rgba-white-slight,
	.rgba-white-slight:after {
	    background-color: rgba(255, 255, 255, 0.1)
	}

	.rgba-white-light,
	.rgba-white-light:after {
	    background-color: rgba(255, 255, 255, 0.3)
	}

	.rgba-white-strong,
	.rgba-white-strong:after {
	    background-color: rgba(255, 255, 255, 0.7)
	}

	.rgba-stylish-slight {
	    background-color: rgba(62, 69, 81, 0.1)
	}

	.rgba-stylish-light {
	    background-color: rgba(62, 69, 81, 0.3)
	}

	.rgba-stylish-strong {
	    background-color: rgba(62, 69, 81, 0.7)
	}

	.primary-color,
	ul.stepper li.active a .circle,
	ul.stepper li.completed a .circle {
	    background-color: #4285f4 !important
	}

	.primary-color-dark {
	    background-color: #0d47a1 !important
	}

	.secondary-color {
	    background-color: #a6c !important
	}

	.secondary-color-dark {
	    background-color: #93c !important
	}

	.default-color {
	    background-color: #2bbbad !important
	}

	.default-color-dark {
	    background-color: #00695c !important
	}

	.info-color {
	    background-color: #33b5e5 !important
	}

	.info-color-dark {
	    background-color: #09c !important
	}

	.success-color {
	    background-color: #00c851 !important
	}

	.success-color-dark {
	    background-color: #007e33 !important
	}

	.warning-color {
	    background-color: #fb3 !important
	}

	.warning-color-dark {
	    background-color: #f80 !important
	}

	.danger-color,
	ul.stepper li.warning a .circle {
	    background-color: #ff3547 !important
	}

	.danger-color-dark {
	    background-color: #c00 !important
	}

	.elegant-color {
	    background-color: #2e2e2e !important
	}

	.elegant-color-dark {
	    background-color: #212121 !important
	}

	.stylish-color {
	    background-color: #4b515d !important
	}

	.stylish-color-dark {
	    background-color: #3e4551 !important
	}

	.unique-color {
	    background-color: #3f729b !important
	}

	.unique-color-dark {
	    background-color: #1c2331 !important
	}

	.special-color {
	    background-color: #37474f !important
	}

	.special-color-dark {
	    background-color: #263238 !important
	}

	.purple-gradient {
	    background: linear-gradient(40deg, #ff6ec4, #7873f5) !important
	}

	.peach-gradient {
	    background: linear-gradient(40deg, #ffd86f, #fc6262) !important
	}

	.aqua-gradient {
	    background: linear-gradient(40deg, #2096ff, #05ffa3) !important
	}

	.blue-gradient {
	    background: linear-gradient(40deg, #45cafc, #303f9f) !important
	}

	.purple-gradient-rgba {
	    background: linear-gradient(40deg, rgba(255, 110, 196, 0.9), rgba(120, 115, 245, 0.9)) !important
	}

	.peach-gradient-rgba {
	    background: linear-gradient(40deg, rgba(255, 216, 111, 0.9), rgba(252, 98, 98, 0.9)) !important
	}

	.aqua-gradient-rgba {
	    background: linear-gradient(40deg, rgba(32, 150, 255, 0.9), rgba(5, 255, 163, 0.9)) !important
	}

	.blue-gradient-rgba {
	    background: linear-gradient(40deg, rgba(69, 202, 252, 0.9), rgba(48, 63, 159, 0.9)) !important
	}

	.dark-grey-text {
	    color: #4f4f4f !important
	}

	.dark-grey-text:hover,
	.dark-grey-text:focus {
	    color: #4f4f4f !important
	}

	.hoverable {
	    -webkit-box-shadow: none;
	    box-shadow: none;
	    -webkit-transition: all 0.55s ease-in-out;
	    transition: all 0.55s ease-in-out
	}

	.hoverable:hover {
	    -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	    box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	    -webkit-transition: all 0.55s ease-in-out;
	    transition: all 0.55s ease-in-out
	}

	.z-depth-0 {
	    -webkit-box-shadow: none !important;
	    box-shadow: none !important
	}

	.z-depth-1 {
	    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12) !important;
	    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12) !important
	}

	.z-depth-1-half {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15) !important;
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15) !important
	}

	.z-depth-2 {
	    -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
	    box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important
	}

	.z-depth-3 {
	    -webkit-box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19) !important;
	    box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19) !important
	}

	.z-depth-4 {
	    -webkit-box-shadow: 0 16px 28px 0 rgba(0, 0, 0, 0.22), 0 25px 55px 0 rgba(0, 0, 0, 0.21) !important;
	    box-shadow: 0 16px 28px 0 rgba(0, 0, 0, 0.22), 0 25px 55px 0 rgba(0, 0, 0, 0.21) !important
	}

	.z-depth-5 {
	    -webkit-box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22) !important;
	    box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22) !important
	}

	.disabled,
	:disabled {
	    pointer-events: none !important
	}

	a {
	    color: #007bff;
	    text-decoration: none;
	    cursor: pointer;
	    -webkit-transition: all 0.2s ease-in-out;
	    transition: all 0.2s ease-in-out
	}

	a:hover {
	    color: #0056b3;
	    text-decoration: none;
	    -webkit-transition: all 0.2s ease-in-out;
	    transition: all 0.2s ease-in-out
	}

	a.disabled:hover,
	a:disabled:hover {
	    color: #007bff
	}

	a:not([href]):not([tabindex]),
	a:not([href]):not([tabindex]):focus,
	a:not([href]):not([tabindex]):hover {
	    color: inherit;
	    text-decoration: none
	}

	.divider-new {
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-box-orient: horizontal;
	    -webkit-box-direction: normal;
	    -ms-flex-direction: row;
	    flex-direction: row;
	    -webkit-box-align: center;
	    -ms-flex-align: center;
	    align-items: center;
	    -webkit-box-pack: center;
	    -ms-flex-pack: center;
	    justify-content: center;
	    margin-top: 2.8rem;
	    margin-bottom: 2.8rem
	}

	.divider-new>h1,
	.divider-new h2,
	.divider-new h3,
	.divider-new h4,
	.divider-new h5,
	.divider-new h6 {
	    margin-bottom: 0
	}

	.divider-new:before,
	.divider-new:after {
	    -webkit-box-flex: 1;
	    -ms-flex: 1;
	    flex: 1;
	    height: 1.5px;
	    height: 2px;
	    content: "";
	    background: #c6c6c6
	}

	.divider-new:before {
	    margin: 0 .5rem 0 0
	}

	.divider-new:after {
	    margin: 0 0 0 .5rem
	}

	.img-fluid,
	.modal-dialog.cascading-modal.modal-avatar .modal-header,
	.video-fluid {
	    max-width: 100%;
	    height: auto
	}

	.flex-center {
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-box-align: center;
	    -ms-flex-align: center;
	    align-items: center;
	    -webkit-box-pack: center;
	    -ms-flex-pack: center;
	    justify-content: center;
	    height: 100%
	}

	.flex-center p {
	    margin: 0
	}

	.flex-center ul {
	    text-align: center
	}

	.flex-center ul li {
	    margin-bottom: 1rem
	}

	.flex-center ul li:last-of-type {
	    margin-bottom: 0
	}

	.hr-light {
	    border-top: 1px solid #fff
	}

	.hr-dark {
	    border-top: 1px solid #666
	}

	.w-responsive {
	    width: 75%
	}

	@media (max-width: 740px) {
	    .w-responsive {
	        width: 100%
	    }
	}

	.w-header {
	    width: 3.2rem
	}

	.collapsible-body {
	    display: none
	}

	.jumbotron {
	    background-color: #fff;
	    border-radius: .125rem;
	    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
	    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.bg-primary {
	    background-color: #4285f4 !important
	}

	a.bg-primary:hover,
	a.bg-primary:focus,
	button.bg-primary:hover,
	button.bg-primary:focus {
	    background-color: #1266f1 !important
	}

	.border-primary {
	    border-color: #4285f4 !important
	}

	.bg-danger {
	    background-color: #ff3547 !important
	}

	a.bg-danger:hover,
	a.bg-danger:focus,
	button.bg-danger:hover,
	button.bg-danger:focus {
	    background-color: #ff0219 !important
	}

	.border-danger {
	    border-color: #ff3547 !important
	}

	.bg-warning {
	    background-color: #fb3 !important
	}

	a.bg-warning:hover,
	a.bg-warning:focus,
	button.bg-warning:hover,
	button.bg-warning:focus {
	    background-color: #fa0 !important
	}

	.border-warning {
	    border-color: #fb3 !important
	}

	.bg-success {
	    background-color: #00c851 !important
	}

	a.bg-success:hover,
	a.bg-success:focus,
	button.bg-success:hover,
	button.bg-success:focus {
	    background-color: #00953c !important
	}

	.border-success {
	    border-color: #00c851 !important
	}

	.bg-info {
	    background-color: #33b5e5 !important
	}

	a.bg-info:hover,
	a.bg-info:focus,
	button.bg-info:hover,
	button.bg-info:focus {
	    background-color: #1a9bcb !important
	}

	.border-info {
	    border-color: #33b5e5 !important
	}

	.bg-default {
	    background-color: #2bbbad !important
	}

	a.bg-default:hover,
	a.bg-default:focus,
	button.bg-default:hover,
	button.bg-default:focus {
	    background-color: #219287 !important
	}

	.border-default {
	    border-color: #2bbbad !important
	}

	.bg-secondary {
	    background-color: #a6c !important
	}

	a.bg-secondary:hover,
	a.bg-secondary:focus,
	button.bg-secondary:hover,
	button.bg-secondary:focus {
	    background-color: #9540bf !important
	}

	.border-secondary {
	    border-color: #a6c !important
	}

	.bg-dark {
	    background-color: #212121 !important
	}

	a.bg-dark:hover,
	a.bg-dark:focus,
	button.bg-dark:hover,
	button.bg-dark:focus {
	    background-color: #080808 !important
	}

	.border-dark {
	    border-color: #212121 !important
	}

	.bg-light {
	    background-color: #e0e0e0 !important
	}

	a.bg-light:hover,
	a.bg-light:focus,
	button.bg-light:hover,
	button.bg-light:focus {
	    background-color: #c7c7c7 !important
	}

	.border-light {
	    border-color: #e0e0e0 !important
	}

	.card-img-100 {
	    width: 100px;
	    height: 100px
	}

	.card-img-64 {
	    width: 64px;
	    height: 64px
	}

	.mml-1 {
	    margin-left: -0.25rem !important
	}

	.flex-1 {
	    -webkit-box-flex: 1;
	    -ms-flex: 1;
	    flex: 1
	}

	body {
	    font-family: "Roboto", sans-serif;
	    font-weight: 300
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
	    font-weight: 300
	}

	.blockquote {
	    padding: .5rem 1rem;
	    border-left: .25rem solid #eceeef
	}

	.blockquote.text-right {
	    border-right: .25rem solid #eceeef;
	    border-left: none
	}

	.blockquote .bq-title {
	    margin-bottom: 0;
	    font-size: 1.5rem;
	    font-weight: 400
	}

	.blockquote p {
	    padding: 1rem 0;
	    font-size: 1.1rem
	}

	.bq-primary {
	    border-left: 3px solid #4285f4 !important
	}

	.bq-primary .bq-title {
	    color: #4285f4 !important
	}

	.bq-danger {
	    border-left: 3px solid #ff3547 !important
	}

	.bq-danger .bq-title {
	    color: #ff3547 !important
	}

	.bq-warning {
	    border-left: 3px solid #fb3 !important
	}

	.bq-warning .bq-title {
	    color: #fb3 !important
	}

	.bq-success {
	    border-left: 3px solid #00c851 !important
	}

	.bq-success .bq-title {
	    color: #00c851 !important
	}

	.bq-info {
	    border-left: 3px solid #33b5e5 !important
	}

	.bq-info .bq-title {
	    color: #33b5e5 !important
	}

	.h1-responsive {
	    font-size: 150%
	}

	.h2-responsive {
	    font-size: 145%
	}

	.h3-responsive {
	    font-size: 135%
	}

	.h4-responsive {
	    font-size: 135%
	}

	.h5-responsive {
	    font-size: 135%
	}

	@media (min-width: 576px) {
	    .h1-responsive {
	        font-size: 170%
	    }

	    .h2-responsive {
	        font-size: 140%
	    }

	    .h3-responsive {
	        font-size: 125%
	    }

	    .h4-responsive {
	        font-size: 125%
	    }

	    .h5-responsive {
	        font-size: 125%
	    }
	}

	@media (min-width: 768px) {
	    .h1-responsive {
	        font-size: 200%
	    }

	    .h2-responsive {
	        font-size: 170%
	    }

	    .h3-responsive {
	        font-size: 140%
	    }

	    .h4-responsive {
	        font-size: 125%
	    }

	    .h5-responsive {
	        font-size: 125%
	    }
	}

	@media (min-width: 992px) {
	    .h1-responsive {
	        font-size: 200%
	    }

	    .h2-responsive {
	        font-size: 170%
	    }

	    .h3-responsive {
	        font-size: 140%
	    }

	    .h4-responsive {
	        font-size: 125%
	    }

	    .h5-responsive {
	        font-size: 125%
	    }
	}

	@media (min-width: 1200px) {
	    .h1-responsive {
	        font-size: 250%
	    }

	    .h2-responsive {
	        font-size: 200%
	    }

	    .h3-responsive {
	        font-size: 170%
	    }

	    .h4-responsive {
	        font-size: 140%
	    }

	    .h5-responsive {
	        font-size: 125%
	    }
	}

	.text-primary {
	    color: #4285f4 !important
	}

	a.text-primary:hover,
	a.text-primary:focus {
	    color: #1266f1 !important
	}

	.text-danger {
	    color: #ff3547 !important
	}

	a.text-danger:hover,
	a.text-danger:focus {
	    color: #ff0219 !important
	}

	.text-warning {
	    color: #fb3 !important
	}

	a.text-warning:hover,
	a.text-warning:focus {
	    color: #fa0 !important
	}

	.text-success {
	    color: #00c851 !important
	}

	a.text-success:hover,
	a.text-success:focus {
	    color: #00953c !important
	}

	.text-info {
	    color: #33b5e5 !important
	}

	a.text-info:hover,
	a.text-info:focus {
	    color: #1a9bcb !important
	}

	.text-default {
	    color: #2bbbad !important
	}

	a.text-default:hover,
	a.text-default:focus {
	    color: #219287 !important
	}

	.text-secondary {
	    color: #a6c !important
	}

	a.text-secondary:hover,
	a.text-secondary:focus {
	    color: #9540bf !important
	}

	.text-dark {
	    color: #212121 !important
	}

	a.text-dark:hover,
	a.text-dark:focus {
	    color: #080808 !important
	}

	.text-light {
	    color: #e0e0e0 !important
	}

	a.text-light:hover,
	a.text-light:focus {
	    color: #c7c7c7 !important
	}

	.font-small {
	    font-size: .9rem
	}

	strong {
	    font-weight: 500
	}

	.view {
	    position: relative;
	    overflow: hidden;
	    cursor: default
	}

	.view .mask {
	    position: absolute;
	    top: 0;
	    right: 0;
	    bottom: 0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	    overflow: hidden;
	    background-attachment: fixed
	}

	.view img,
	.view video {
	    position: relative;
	    display: block
	}

	.view video.video-intro {
	    top: 50%;
	    left: 50%;
	    z-index: -100;
	    width: auto;
	    min-width: 100%;
	    height: auto;
	    min-height: 100%;
	    -webkit-transition: 1s opacity;
	    transition: 1s opacity;
	    -webkit-transform: translateX(-50%) translateY(-50%);
	    transform: translateX(-50%) translateY(-50%)
	}

	.overlay .mask {
	    opacity: 0;
	    -webkit-transition: all 0.4s ease-in-out;
	    transition: all 0.4s ease-in-out
	}

	.overlay .mask:hover {
	    opacity: 1
	}

	.zoom img,
	.zoom video {
	    -webkit-transition: all 0.2s linear;
	    transition: all 0.2s linear
	}

	.zoom:hover img,
	.zoom:hover video {
	    -webkit-transform: scale(1.1);
	    transform: scale(1.1)
	}

	.pattern-1 {
	    background: url(../img/overlays/01.png);
	    background-attachment: fixed
	}

	.pattern-2 {
	    background: url(../img/overlays/02.png);
	    background-attachment: fixed
	}

	.pattern-3 {
	    background: url(../img/overlays/03.png);
	    background-attachment: fixed
	}

	.pattern-4 {
	    background: url(../img/overlays/04.png);
	    background-attachment: fixed
	}

	.pattern-5 {
	    background: url(../img/overlays/05.png);
	    background-attachment: fixed
	}

	.pattern-6 {
	    background: url(../img/overlays/06.png);
	    background-attachment: fixed
	}

	.pattern-7 {
	    background: url(../img/overlays/07.png);
	    background-attachment: fixed
	}

	.pattern-8 {
	    background: url(../img/overlays/08.png);
	    background-attachment: fixed
	}

	.pattern-9 {
	    background: url(../img/overlays/09.png);
	    background-attachment: fixed
	}

	/*!
        * Waves v0.7.6
        * http://fian.my.id/Waves
        *
        * Copyright 2014-2018 Alfiana E. Sibuea and other contributors
        * Released under the MIT license
        * https://github.com/fians/Waves/blob/master/LICENSE */
	.waves-effect {
	    position: relative;
	    overflow: hidden;
	    cursor: pointer;
	    -webkit-user-select: none;
	    -moz-user-select: none;
	    -ms-user-select: none;
	    user-select: none;
	    -webkit-tap-highlight-color: transparent
	}

	.waves-effect .waves-ripple {
	    position: absolute;
	    width: 100px;
	    height: 100px;
	    margin-top: -50px;
	    margin-left: -50px;
	    pointer-events: none;
	    background: rgba(0, 0, 0, 0.2);
	    background: radial-gradient(rgba(0, 0, 0, 0.2) 0, rgba(0, 0, 0, 0.3) 40%, rgba(0, 0, 0, 0.4) 50%, rgba(0, 0, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
	    border-radius: 50%;
	    opacity: 0;
	    -webkit-transition-property: -webkit-transform, opacity;
	    -webkit-transition-property: opacity, -webkit-transform;
	    transition-property: opacity, -webkit-transform;
	    transition-property: transform, opacity;
	    transition-property: transform, opacity, -webkit-transform;
	    -webkit-transition: all 0.5s ease-out;
	    transition: all 0.5s ease-out;
	    -webkit-transform: scale(0) translate(0, 0);
	    transform: scale(0) translate(0, 0)
	}

	.waves-effect.waves-light .waves-ripple {
	    background: rgba(255, 255, 255, 0.4);
	    background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%)
	}

	.waves-effect.waves-classic .waves-ripple {
	    background: rgba(0, 0, 0, 0.2)
	}

	.waves-effect.waves-classic.waves-light .waves-ripple {
	    background: rgba(255, 255, 255, 0.4)
	}

	.waves-notransition {
	    -webkit-transition: none !important;
	    transition: none !important
	}

	.waves-button,
	.waves-circle {
	    -webkit-transform: translateZ(0);
	    transform: translateZ(0);
	    -webkit-mask-image: -webkit-radial-gradient(circle, #fff 100%, #000 100%)
	}

	.waves-button,
	.waves-button:hover,
	.waves-button:visited,
	.waves-button-input {
	    z-index: 1;
	    font-size: 1em;
	    line-height: 1em;
	    color: inherit;
	    text-align: center;
	    text-decoration: none;
	    white-space: nowrap;
	    vertical-align: middle;
	    cursor: pointer;
	    background-color: rgba(0, 0, 0, 0);
	    border: none;
	    outline: none
	}

	.waves-button {
	    padding: .85em 1.1em;
	    border-radius: .2em
	}

	.waves-button-input {
	    padding: .85em 1.1em;
	    margin: 0
	}

	.waves-input-wrapper {
	    position: relative;
	    display: inline-block;
	    vertical-align: middle;
	    border-radius: .2em
	}

	.waves-input-wrapper.waves-button {
	    padding: 0
	}

	.waves-input-wrapper .waves-button-input {
	    position: relative;
	    top: 0;
	    left: 0;
	    z-index: 1
	}

	.waves-circle {
	    width: 2.5em;
	    height: 2.5em;
	    line-height: 2.5em;
	    text-align: center;
	    border-radius: 50%
	}

	.waves-float {
	    -webkit-mask-image: none;
	    -webkit-box-shadow: 0 1px 1.5px 1px rgba(0, 0, 0, 0.12);
	    box-shadow: 0 1px 1.5px 1px rgba(0, 0, 0, 0.12);
	    -webkit-transition: all 300ms;
	    transition: all 300ms
	}

	.waves-float:active {
	    -webkit-box-shadow: 0 8px 20px 1px rgba(0, 0, 0, 0.3);
	    box-shadow: 0 8px 20px 1px rgba(0, 0, 0, 0.3)
	}

	.waves-block {
	    display: block
	}

	a.waves-effect,
	a.waves-light {
	    display: inline-block
	}

	/*!
        * animate.css -http://daneden.me/animate
        * Version - 3.7.0
        * Licensed under the MIT license - http://opensource.org/licenses/MIT
        *
        * Copyright (c) 2018 Daniel Eden
        */
	.animated {
	    -webkit-animation-duration: 1s;
	    animation-duration: 1s;
	    -webkit-animation-fill-mode: both;
	    animation-fill-mode: both
	}

	.animated.infinite {
	    -webkit-animation-iteration-count: infinite;
	    animation-iteration-count: infinite
	}

	.animated.delay-1s {
	    -webkit-animation-delay: 1s;
	    animation-delay: 1s
	}

	.animated.delay-2s {
	    -webkit-animation-delay: 2s;
	    animation-delay: 2s
	}

	.animated.delay-3s {
	    -webkit-animation-delay: 3s;
	    animation-delay: 3s
	}

	.animated.delay-4s {
	    -webkit-animation-delay: 4s;
	    animation-delay: 4s
	}

	.animated.delay-5s {
	    -webkit-animation-delay: 5s;
	    animation-delay: 5s
	}

	.animated.fast {
	    -webkit-animation-duration: 800ms;
	    animation-duration: 800ms
	}

	.animated.faster {
	    -webkit-animation-duration: 500ms;
	    animation-duration: 500ms
	}

	.animated.slow {
	    -webkit-animation-duration: 2s;
	    animation-duration: 2s
	}

	.animated.slower {
	    -webkit-animation-duration: 3s;
	    animation-duration: 3s
	}

	@media (prefers-reduced-motion) {
	    .animated {
	        -webkit-transition: none !important;
	        transition: none !important;
	        -webkit-animation: unset !important;
	        animation: unset !important
	    }
	}

	@-webkit-keyframes fadeIn {
	    from {
	        opacity: 0
	    }

	    to {
	        opacity: 1
	    }
	}

	@keyframes fadeIn {
	    from {
	        opacity: 0
	    }

	    to {
	        opacity: 1
	    }
	}

	.fadeIn {
	    -webkit-animation-name: fadeIn;
	    animation-name: fadeIn
	}

	@-webkit-keyframes fadeInDown {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(0, -100%, 0);
	        transform: translate3d(0, -100%, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes fadeInDown {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(0, -100%, 0);
	        transform: translate3d(0, -100%, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.fadeInDown {
	    -webkit-animation-name: fadeInDown;
	    animation-name: fadeInDown
	}

	@-webkit-keyframes fadeInLeft {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(-100%, 0, 0);
	        transform: translate3d(-100%, 0, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes fadeInLeft {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(-100%, 0, 0);
	        transform: translate3d(-100%, 0, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.fadeInLeft {
	    -webkit-animation-name: fadeInLeft;
	    animation-name: fadeInLeft
	}

	@-webkit-keyframes fadeInRight {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(100%, 0, 0);
	        transform: translate3d(100%, 0, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes fadeInRight {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(100%, 0, 0);
	        transform: translate3d(100%, 0, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.fadeInRight {
	    -webkit-animation-name: fadeInRight;
	    animation-name: fadeInRight
	}

	@-webkit-keyframes fadeInUp {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(0, 100%, 0);
	        transform: translate3d(0, 100%, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes fadeInUp {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(0, 100%, 0);
	        transform: translate3d(0, 100%, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.fadeInUp {
	    -webkit-animation-name: fadeInUp;
	    animation-name: fadeInUp
	}

	@-webkit-keyframes fadeOut {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0
	    }
	}

	@keyframes fadeOut {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0
	    }
	}

	.fadeOut {
	    -webkit-animation-name: fadeOut;
	    animation-name: fadeOut
	}

	@-webkit-keyframes fadeOutDown {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(0, 100%, 0);
	        transform: translate3d(0, 100%, 0)
	    }
	}

	@keyframes fadeOutDown {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(0, 100%, 0);
	        transform: translate3d(0, 100%, 0)
	    }
	}

	.fadeOutDown {
	    -webkit-animation-name: fadeOutDown;
	    animation-name: fadeOutDown
	}

	@-webkit-keyframes fadeOutLeft {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(-100%, 0, 0);
	        transform: translate3d(-100%, 0, 0)
	    }
	}

	@keyframes fadeOutLeft {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(-100%, 0, 0);
	        transform: translate3d(-100%, 0, 0)
	    }
	}

	.fadeOutLeft {
	    -webkit-animation-name: fadeOutLeft;
	    animation-name: fadeOutLeft
	}

	@-webkit-keyframes fadeOutRight {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(100%, 0, 0);
	        transform: translate3d(100%, 0, 0)
	    }
	}

	@keyframes fadeOutRight {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(100%, 0, 0);
	        transform: translate3d(100%, 0, 0)
	    }
	}

	.fadeOutRight {
	    -webkit-animation-name: fadeOutRight;
	    animation-name: fadeOutRight
	}

	@-webkit-keyframes fadeOutUp {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(0, -100%, 0);
	        transform: translate3d(0, -100%, 0)
	    }
	}

	@keyframes fadeOutUp {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(0, -100%, 0);
	        transform: translate3d(0, -100%, 0)
	    }
	}

	.fadeOutUp {
	    -webkit-animation-name: fadeOutUp;
	    animation-name: fadeOutUp
	}

	/*!
        * animate.css -http://daneden.me/animate
        * Version - 3.7.0
        * Licensed under the MIT license - http://opensource.org/licenses/MIT
        *
        * Copyright (c) 2018 Daniel Eden
        */
	@-webkit-keyframes bounce {

	    from,
	    20%,
	    53%,
	    80%,
	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
	    }

	    40%,
	    43% {
	        -webkit-transform: translate3d(0, -30px, 0);
	        transform: translate3d(0, -30px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
	        animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06)
	    }

	    70% {
	        -webkit-transform: translate3d(0, -15px, 0);
	        transform: translate3d(0, -15px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
	        animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06)
	    }

	    90% {
	        -webkit-transform: translate3d(0, -4px, 0);
	        transform: translate3d(0, -4px, 0)
	    }
	}

	@keyframes bounce {

	    from,
	    20%,
	    53%,
	    80%,
	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
	    }

	    40%,
	    43% {
	        -webkit-transform: translate3d(0, -30px, 0);
	        transform: translate3d(0, -30px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
	        animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06)
	    }

	    70% {
	        -webkit-transform: translate3d(0, -15px, 0);
	        transform: translate3d(0, -15px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
	        animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06)
	    }

	    90% {
	        -webkit-transform: translate3d(0, -4px, 0);
	        transform: translate3d(0, -4px, 0)
	    }
	}

	.bounce {
	    -webkit-transform-origin: center bottom;
	    transform-origin: center bottom;
	    -webkit-animation-name: bounce;
	    animation-name: bounce
	}

	@-webkit-keyframes flash {

	    from,
	    50%,
	    to {
	        opacity: 1
	    }

	    25%,
	    75% {
	        opacity: 0
	    }
	}

	@keyframes flash {

	    from,
	    50%,
	    to {
	        opacity: 1
	    }

	    25%,
	    75% {
	        opacity: 0
	    }
	}

	.flash {
	    -webkit-animation-name: flash;
	    animation-name: flash
	}

	@-webkit-keyframes pulse {
	    from {
	        -webkit-transform: scale3d(1, 1, 1);
	        transform: scale3d(1, 1, 1)
	    }

	    50% {
	        -webkit-transform: scale3d(1.05, 1.05, 1.05);
	        transform: scale3d(1.05, 1.05, 1.05)
	    }

	    to {
	        -webkit-transform: scale3d(1, 1, 1);
	        transform: scale3d(1, 1, 1)
	    }
	}

	@keyframes pulse {
	    from {
	        -webkit-transform: scale3d(1, 1, 1);
	        transform: scale3d(1, 1, 1)
	    }

	    50% {
	        -webkit-transform: scale3d(1.05, 1.05, 1.05);
	        transform: scale3d(1.05, 1.05, 1.05)
	    }

	    to {
	        -webkit-transform: scale3d(1, 1, 1);
	        transform: scale3d(1, 1, 1)
	    }
	}

	.pulse {
	    -webkit-animation-name: pulse;
	    animation-name: pulse
	}

	@-webkit-keyframes rubberBand {
	    from {
	        -webkit-transform: scale3d(1, 1, 1);
	        transform: scale3d(1, 1, 1)
	    }

	    30% {
	        -webkit-transform: scale3d(1.25, 0.75, 1);
	        transform: scale3d(1.25, 0.75, 1)
	    }

	    40% {
	        -webkit-transform: scale3d(0.75, 1.25, 1);
	        transform: scale3d(0.75, 1.25, 1)
	    }

	    50% {
	        -webkit-transform: scale3d(1.15, 0.85, 1);
	        transform: scale3d(1.15, 0.85, 1)
	    }

	    65% {
	        -webkit-transform: scale3d(0.95, 1.05, 1);
	        transform: scale3d(0.95, 1.05, 1)
	    }

	    75% {
	        -webkit-transform: scale3d(1.05, 0.95, 1);
	        transform: scale3d(1.05, 0.95, 1)
	    }

	    to {
	        -webkit-transform: scale3d(1, 1, 1);
	        transform: scale3d(1, 1, 1)
	    }
	}

	@keyframes rubberBand {
	    from {
	        -webkit-transform: scale3d(1, 1, 1);
	        transform: scale3d(1, 1, 1)
	    }

	    30% {
	        -webkit-transform: scale3d(1.25, 0.75, 1);
	        transform: scale3d(1.25, 0.75, 1)
	    }

	    40% {
	        -webkit-transform: scale3d(0.75, 1.25, 1);
	        transform: scale3d(0.75, 1.25, 1)
	    }

	    50% {
	        -webkit-transform: scale3d(1.15, 0.85, 1);
	        transform: scale3d(1.15, 0.85, 1)
	    }

	    65% {
	        -webkit-transform: scale3d(0.95, 1.05, 1);
	        transform: scale3d(0.95, 1.05, 1)
	    }

	    75% {
	        -webkit-transform: scale3d(1.05, 0.95, 1);
	        transform: scale3d(1.05, 0.95, 1)
	    }

	    to {
	        -webkit-transform: scale3d(1, 1, 1);
	        transform: scale3d(1, 1, 1)
	    }
	}

	.rubberBand {
	    -webkit-animation-name: rubberBand;
	    animation-name: rubberBand
	}

	@-webkit-keyframes shake {

	    from,
	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }

	    10%,
	    30%,
	    50%,
	    70%,
	    90% {
	        -webkit-transform: translate3d(-10px, 0, 0);
	        transform: translate3d(-10px, 0, 0)
	    }

	    20%,
	    40%,
	    60%,
	    80% {
	        -webkit-transform: translate3d(10px, 0, 0);
	        transform: translate3d(10px, 0, 0)
	    }
	}

	@keyframes shake {

	    from,
	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }

	    10%,
	    30%,
	    50%,
	    70%,
	    90% {
	        -webkit-transform: translate3d(-10px, 0, 0);
	        transform: translate3d(-10px, 0, 0)
	    }

	    20%,
	    40%,
	    60%,
	    80% {
	        -webkit-transform: translate3d(10px, 0, 0);
	        transform: translate3d(10px, 0, 0)
	    }
	}

	.shake {
	    -webkit-animation-name: shake;
	    animation-name: shake
	}

	@-webkit-keyframes headShake {
	    0% {
	        -webkit-transform: translateX(0);
	        transform: translateX(0)
	    }

	    6.5% {
	        -webkit-transform: translateX(-6px) rotateY(-9deg);
	        transform: translateX(-6px) rotateY(-9deg)
	    }

	    18.5% {
	        -webkit-transform: translateX(5px) rotateY(7deg);
	        transform: translateX(5px) rotateY(7deg)
	    }

	    31.5% {
	        -webkit-transform: translateX(-3px) rotateY(-5deg);
	        transform: translateX(-3px) rotateY(-5deg)
	    }

	    43.5% {
	        -webkit-transform: translateX(2px) rotateY(3deg);
	        transform: translateX(2px) rotateY(3deg)
	    }

	    50% {
	        -webkit-transform: translateX(0);
	        transform: translateX(0)
	    }
	}

	@keyframes headShake {
	    0% {
	        -webkit-transform: translateX(0);
	        transform: translateX(0)
	    }

	    6.5% {
	        -webkit-transform: translateX(-6px) rotateY(-9deg);
	        transform: translateX(-6px) rotateY(-9deg)
	    }

	    18.5% {
	        -webkit-transform: translateX(5px) rotateY(7deg);
	        transform: translateX(5px) rotateY(7deg)
	    }

	    31.5% {
	        -webkit-transform: translateX(-3px) rotateY(-5deg);
	        transform: translateX(-3px) rotateY(-5deg)
	    }

	    43.5% {
	        -webkit-transform: translateX(2px) rotateY(3deg);
	        transform: translateX(2px) rotateY(3deg)
	    }

	    50% {
	        -webkit-transform: translateX(0);
	        transform: translateX(0)
	    }
	}

	.headShake {
	    -webkit-animation-name: headShake;
	    animation-name: headShake;
	    -webkit-animation-timing-function: ease-in-out;
	    animation-timing-function: ease-in-out
	}

	@-webkit-keyframes swing {
	    20% {
	        -webkit-transform: rotate3d(0, 0, 1, 15deg);
	        transform: rotate3d(0, 0, 1, 15deg)
	    }

	    40% {
	        -webkit-transform: rotate3d(0, 0, 1, -10deg);
	        transform: rotate3d(0, 0, 1, -10deg)
	    }

	    60% {
	        -webkit-transform: rotate3d(0, 0, 1, 5deg);
	        transform: rotate3d(0, 0, 1, 5deg)
	    }

	    80% {
	        -webkit-transform: rotate3d(0, 0, 1, -5deg);
	        transform: rotate3d(0, 0, 1, -5deg)
	    }

	    to {
	        -webkit-transform: rotate3d(0, 0, 1, 0deg);
	        transform: rotate3d(0, 0, 1, 0deg)
	    }
	}

	@keyframes swing {
	    20% {
	        -webkit-transform: rotate3d(0, 0, 1, 15deg);
	        transform: rotate3d(0, 0, 1, 15deg)
	    }

	    40% {
	        -webkit-transform: rotate3d(0, 0, 1, -10deg);
	        transform: rotate3d(0, 0, 1, -10deg)
	    }

	    60% {
	        -webkit-transform: rotate3d(0, 0, 1, 5deg);
	        transform: rotate3d(0, 0, 1, 5deg)
	    }

	    80% {
	        -webkit-transform: rotate3d(0, 0, 1, -5deg);
	        transform: rotate3d(0, 0, 1, -5deg)
	    }

	    to {
	        -webkit-transform: rotate3d(0, 0, 1, 0deg);
	        transform: rotate3d(0, 0, 1, 0deg)
	    }
	}

	.swing {
	    -webkit-transform-origin: top center;
	    transform-origin: top center;
	    -webkit-animation-name: swing;
	    animation-name: swing
	}

	@-webkit-keyframes tada {
	    from {
	        -webkit-transform: scale3d(1, 1, 1);
	        transform: scale3d(1, 1, 1)
	    }

	    10%,
	    20% {
	        -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
	        transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg)
	    }

	    30%,
	    50%,
	    70%,
	    90% {
	        -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
	        transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
	    }

	    40%,
	    60%,
	    80% {
	        -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
	        transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
	    }

	    to {
	        -webkit-transform: scale3d(1, 1, 1);
	        transform: scale3d(1, 1, 1)
	    }
	}

	@keyframes tada {
	    from {
	        -webkit-transform: scale3d(1, 1, 1);
	        transform: scale3d(1, 1, 1)
	    }

	    10%,
	    20% {
	        -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
	        transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg)
	    }

	    30%,
	    50%,
	    70%,
	    90% {
	        -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
	        transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
	    }

	    40%,
	    60%,
	    80% {
	        -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
	        transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
	    }

	    to {
	        -webkit-transform: scale3d(1, 1, 1);
	        transform: scale3d(1, 1, 1)
	    }
	}

	.tada {
	    -webkit-animation-name: tada;
	    animation-name: tada
	}

	@-webkit-keyframes wobble {
	    from {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }

	    15% {
	        -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
	        transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
	    }

	    30% {
	        -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
	        transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
	    }

	    45% {
	        -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
	        transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
	    }

	    60% {
	        -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
	        transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
	    }

	    75% {
	        -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
	        transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes wobble {
	    from {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }

	    15% {
	        -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
	        transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
	    }

	    30% {
	        -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
	        transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
	    }

	    45% {
	        -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
	        transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
	    }

	    60% {
	        -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
	        transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
	    }

	    75% {
	        -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
	        transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.wobble {
	    -webkit-animation-name: wobble;
	    animation-name: wobble
	}

	@-webkit-keyframes jello {

	    from,
	    11.1%,
	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }

	    22.2% {
	        -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
	        transform: skewX(-12.5deg) skewY(-12.5deg)
	    }

	    33.3% {
	        -webkit-transform: skewX(6.25deg) skewY(6.25deg);
	        transform: skewX(6.25deg) skewY(6.25deg)
	    }

	    44.4% {
	        -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
	        transform: skewX(-3.125deg) skewY(-3.125deg)
	    }

	    55.5% {
	        -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
	        transform: skewX(1.5625deg) skewY(1.5625deg)
	    }

	    66.6% {
	        -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
	        transform: skewX(-0.78125deg) skewY(-0.78125deg)
	    }

	    77.7% {
	        -webkit-transform: skewX(0.39062deg) skewY(0.39062deg);
	        transform: skewX(0.39062deg) skewY(0.39062deg)
	    }

	    88.8% {
	        -webkit-transform: skewX(-0.19531deg) skewY(-0.19531deg);
	        transform: skewX(-0.19531deg) skewY(-0.19531deg)
	    }
	}

	@keyframes jello {

	    from,
	    11.1%,
	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }

	    22.2% {
	        -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
	        transform: skewX(-12.5deg) skewY(-12.5deg)
	    }

	    33.3% {
	        -webkit-transform: skewX(6.25deg) skewY(6.25deg);
	        transform: skewX(6.25deg) skewY(6.25deg)
	    }

	    44.4% {
	        -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
	        transform: skewX(-3.125deg) skewY(-3.125deg)
	    }

	    55.5% {
	        -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
	        transform: skewX(1.5625deg) skewY(1.5625deg)
	    }

	    66.6% {
	        -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
	        transform: skewX(-0.78125deg) skewY(-0.78125deg)
	    }

	    77.7% {
	        -webkit-transform: skewX(0.39062deg) skewY(0.39062deg);
	        transform: skewX(0.39062deg) skewY(0.39062deg)
	    }

	    88.8% {
	        -webkit-transform: skewX(-0.19531deg) skewY(-0.19531deg);
	        transform: skewX(-0.19531deg) skewY(-0.19531deg)
	    }
	}

	.jello {
	    -webkit-transform-origin: center;
	    transform-origin: center;
	    -webkit-animation-name: jello;
	    animation-name: jello
	}

	@-webkit-keyframes heartBeat {
	    0% {
	        -webkit-transform: scale(1);
	        transform: scale(1)
	    }

	    14% {
	        -webkit-transform: scale(1.3);
	        transform: scale(1.3)
	    }

	    28% {
	        -webkit-transform: scale(1);
	        transform: scale(1)
	    }

	    42% {
	        -webkit-transform: scale(1.3);
	        transform: scale(1.3)
	    }

	    70% {
	        -webkit-transform: scale(1);
	        transform: scale(1)
	    }
	}

	@keyframes heartBeat {
	    0% {
	        -webkit-transform: scale(1);
	        transform: scale(1)
	    }

	    14% {
	        -webkit-transform: scale(1.3);
	        transform: scale(1.3)
	    }

	    28% {
	        -webkit-transform: scale(1);
	        transform: scale(1)
	    }

	    42% {
	        -webkit-transform: scale(1.3);
	        transform: scale(1.3)
	    }

	    70% {
	        -webkit-transform: scale(1);
	        transform: scale(1)
	    }
	}

	.heartBeat {
	    -webkit-animation-name: heartBeat;
	    animation-name: heartBeat;
	    -webkit-animation-duration: 1.3s;
	    animation-duration: 1.3s;
	    -webkit-animation-timing-function: ease-in-out;
	    animation-timing-function: ease-in-out
	}

	@-webkit-keyframes bounceIn {

	    from,
	    20%,
	    40%,
	    60%,
	    80%,
	    to {
	        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
	    }

	    0% {
	        opacity: 0;
	        -webkit-transform: scale3d(0.3, 0.3, 0.3);
	        transform: scale3d(0.3, 0.3, 0.3)
	    }

	    20% {
	        -webkit-transform: scale3d(1.1, 1.1, 1.1);
	        transform: scale3d(1.1, 1.1, 1.1)
	    }

	    40% {
	        -webkit-transform: scale3d(0.9, 0.9, 0.9);
	        transform: scale3d(0.9, 0.9, 0.9)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: scale3d(1.03, 1.03, 1.03);
	        transform: scale3d(1.03, 1.03, 1.03)
	    }

	    80% {
	        -webkit-transform: scale3d(0.97, 0.97, 0.97);
	        transform: scale3d(0.97, 0.97, 0.97)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: scale3d(1, 1, 1);
	        transform: scale3d(1, 1, 1)
	    }
	}

	@keyframes bounceIn {

	    from,
	    20%,
	    40%,
	    60%,
	    80%,
	    to {
	        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
	    }

	    0% {
	        opacity: 0;
	        -webkit-transform: scale3d(0.3, 0.3, 0.3);
	        transform: scale3d(0.3, 0.3, 0.3)
	    }

	    20% {
	        -webkit-transform: scale3d(1.1, 1.1, 1.1);
	        transform: scale3d(1.1, 1.1, 1.1)
	    }

	    40% {
	        -webkit-transform: scale3d(0.9, 0.9, 0.9);
	        transform: scale3d(0.9, 0.9, 0.9)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: scale3d(1.03, 1.03, 1.03);
	        transform: scale3d(1.03, 1.03, 1.03)
	    }

	    80% {
	        -webkit-transform: scale3d(0.97, 0.97, 0.97);
	        transform: scale3d(0.97, 0.97, 0.97)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: scale3d(1, 1, 1);
	        transform: scale3d(1, 1, 1)
	    }
	}

	.bounceIn {
	    -webkit-animation-name: bounceIn;
	    animation-name: bounceIn;
	    -webkit-animation-duration: .75s;
	    animation-duration: .75s
	}

	@-webkit-keyframes bounceInDown {

	    from,
	    60%,
	    75%,
	    90%,
	    to {
	        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
	    }

	    0% {
	        opacity: 0;
	        -webkit-transform: translate3d(0, -3000px, 0);
	        transform: translate3d(0, -3000px, 0)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 25px, 0);
	        transform: translate3d(0, 25px, 0)
	    }

	    75% {
	        -webkit-transform: translate3d(0, -10px, 0);
	        transform: translate3d(0, -10px, 0)
	    }

	    90% {
	        -webkit-transform: translate3d(0, 5px, 0);
	        transform: translate3d(0, 5px, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes bounceInDown {

	    from,
	    60%,
	    75%,
	    90%,
	    to {
	        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
	    }

	    0% {
	        opacity: 0;
	        -webkit-transform: translate3d(0, -3000px, 0);
	        transform: translate3d(0, -3000px, 0)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 25px, 0);
	        transform: translate3d(0, 25px, 0)
	    }

	    75% {
	        -webkit-transform: translate3d(0, -10px, 0);
	        transform: translate3d(0, -10px, 0)
	    }

	    90% {
	        -webkit-transform: translate3d(0, 5px, 0);
	        transform: translate3d(0, 5px, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.bounceInDown {
	    -webkit-animation-name: bounceInDown;
	    animation-name: bounceInDown
	}

	@-webkit-keyframes bounceInLeft {

	    from,
	    60%,
	    75%,
	    90%,
	    to {
	        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
	    }

	    0% {
	        opacity: 0;
	        -webkit-transform: translate3d(-3000px, 0, 0);
	        transform: translate3d(-3000px, 0, 0)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: translate3d(25px, 0, 0);
	        transform: translate3d(25px, 0, 0)
	    }

	    75% {
	        -webkit-transform: translate3d(-10px, 0, 0);
	        transform: translate3d(-10px, 0, 0)
	    }

	    90% {
	        -webkit-transform: translate3d(5px, 0, 0);
	        transform: translate3d(5px, 0, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes bounceInLeft {

	    from,
	    60%,
	    75%,
	    90%,
	    to {
	        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
	    }

	    0% {
	        opacity: 0;
	        -webkit-transform: translate3d(-3000px, 0, 0);
	        transform: translate3d(-3000px, 0, 0)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: translate3d(25px, 0, 0);
	        transform: translate3d(25px, 0, 0)
	    }

	    75% {
	        -webkit-transform: translate3d(-10px, 0, 0);
	        transform: translate3d(-10px, 0, 0)
	    }

	    90% {
	        -webkit-transform: translate3d(5px, 0, 0);
	        transform: translate3d(5px, 0, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.bounceInLeft {
	    -webkit-animation-name: bounceInLeft;
	    animation-name: bounceInLeft
	}

	@-webkit-keyframes bounceInRight {

	    from,
	    60%,
	    75%,
	    90%,
	    to {
	        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
	    }

	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(3000px, 0, 0);
	        transform: translate3d(3000px, 0, 0)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: translate3d(-25px, 0, 0);
	        transform: translate3d(-25px, 0, 0)
	    }

	    75% {
	        -webkit-transform: translate3d(10px, 0, 0);
	        transform: translate3d(10px, 0, 0)
	    }

	    90% {
	        -webkit-transform: translate3d(-5px, 0, 0);
	        transform: translate3d(-5px, 0, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes bounceInRight {

	    from,
	    60%,
	    75%,
	    90%,
	    to {
	        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
	    }

	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(3000px, 0, 0);
	        transform: translate3d(3000px, 0, 0)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: translate3d(-25px, 0, 0);
	        transform: translate3d(-25px, 0, 0)
	    }

	    75% {
	        -webkit-transform: translate3d(10px, 0, 0);
	        transform: translate3d(10px, 0, 0)
	    }

	    90% {
	        -webkit-transform: translate3d(-5px, 0, 0);
	        transform: translate3d(-5px, 0, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.bounceInRight {
	    -webkit-animation-name: bounceInRight;
	    animation-name: bounceInRight
	}

	@-webkit-keyframes bounceInUp {

	    from,
	    60%,
	    75%,
	    90%,
	    to {
	        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
	    }

	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(0, 3000px, 0);
	        transform: translate3d(0, 3000px, 0)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: translate3d(0, -20px, 0);
	        transform: translate3d(0, -20px, 0)
	    }

	    75% {
	        -webkit-transform: translate3d(0, 10px, 0);
	        transform: translate3d(0, 10px, 0)
	    }

	    90% {
	        -webkit-transform: translate3d(0, -5px, 0);
	        transform: translate3d(0, -5px, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes bounceInUp {

	    from,
	    60%,
	    75%,
	    90%,
	    to {
	        -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
	    }

	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(0, 3000px, 0);
	        transform: translate3d(0, 3000px, 0)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: translate3d(0, -20px, 0);
	        transform: translate3d(0, -20px, 0)
	    }

	    75% {
	        -webkit-transform: translate3d(0, 10px, 0);
	        transform: translate3d(0, 10px, 0)
	    }

	    90% {
	        -webkit-transform: translate3d(0, -5px, 0);
	        transform: translate3d(0, -5px, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.bounceInUp {
	    -webkit-animation-name: bounceInUp;
	    animation-name: bounceInUp
	}

	@-webkit-keyframes bounceOut {
	    20% {
	        -webkit-transform: scale3d(0.9, 0.9, 0.9);
	        transform: scale3d(0.9, 0.9, 0.9)
	    }

	    50%,
	    55% {
	        opacity: 1;
	        -webkit-transform: scale3d(1.1, 1.1, 1.1);
	        transform: scale3d(1.1, 1.1, 1.1)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: scale3d(0.3, 0.3, 0.3);
	        transform: scale3d(0.3, 0.3, 0.3)
	    }
	}

	@keyframes bounceOut {
	    20% {
	        -webkit-transform: scale3d(0.9, 0.9, 0.9);
	        transform: scale3d(0.9, 0.9, 0.9)
	    }

	    50%,
	    55% {
	        opacity: 1;
	        -webkit-transform: scale3d(1.1, 1.1, 1.1);
	        transform: scale3d(1.1, 1.1, 1.1)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: scale3d(0.3, 0.3, 0.3);
	        transform: scale3d(0.3, 0.3, 0.3)
	    }
	}

	.bounceOut {
	    -webkit-animation-name: bounceOut;
	    animation-name: bounceOut;
	    -webkit-animation-duration: .75s;
	    animation-duration: .75s
	}

	@-webkit-keyframes bounceOutDown {
	    20% {
	        -webkit-transform: translate3d(0, 10px, 0);
	        transform: translate3d(0, 10px, 0)
	    }

	    40%,
	    45% {
	        opacity: 1;
	        -webkit-transform: translate3d(0, -20px, 0);
	        transform: translate3d(0, -20px, 0)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(0, 2000px, 0);
	        transform: translate3d(0, 2000px, 0)
	    }
	}

	@keyframes bounceOutDown {
	    20% {
	        -webkit-transform: translate3d(0, 10px, 0);
	        transform: translate3d(0, 10px, 0)
	    }

	    40%,
	    45% {
	        opacity: 1;
	        -webkit-transform: translate3d(0, -20px, 0);
	        transform: translate3d(0, -20px, 0)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(0, 2000px, 0);
	        transform: translate3d(0, 2000px, 0)
	    }
	}

	.bounceOutDown {
	    -webkit-animation-name: bounceOutDown;
	    animation-name: bounceOutDown
	}

	@-webkit-keyframes bounceOutLeft {
	    20% {
	        opacity: 1;
	        -webkit-transform: translate3d(20px, 0, 0);
	        transform: translate3d(20px, 0, 0)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(-2000px, 0, 0);
	        transform: translate3d(-2000px, 0, 0)
	    }
	}

	@keyframes bounceOutLeft {
	    20% {
	        opacity: 1;
	        -webkit-transform: translate3d(20px, 0, 0);
	        transform: translate3d(20px, 0, 0)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(-2000px, 0, 0);
	        transform: translate3d(-2000px, 0, 0)
	    }
	}

	.bounceOutLeft {
	    -webkit-animation-name: bounceOutLeft;
	    animation-name: bounceOutLeft
	}

	@-webkit-keyframes bounceOutRight {
	    20% {
	        opacity: 1;
	        -webkit-transform: translate3d(-20px, 0, 0);
	        transform: translate3d(-20px, 0, 0)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(2000px, 0, 0);
	        transform: translate3d(2000px, 0, 0)
	    }
	}

	@keyframes bounceOutRight {
	    20% {
	        opacity: 1;
	        -webkit-transform: translate3d(-20px, 0, 0);
	        transform: translate3d(-20px, 0, 0)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(2000px, 0, 0);
	        transform: translate3d(2000px, 0, 0)
	    }
	}

	.bounceOutRight {
	    -webkit-animation-name: bounceOutRight;
	    animation-name: bounceOutRight
	}

	@-webkit-keyframes bounceOutUp {
	    20% {
	        -webkit-transform: translate3d(0, -10px, 0);
	        transform: translate3d(0, -10px, 0)
	    }

	    40%,
	    45% {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 20px, 0);
	        transform: translate3d(0, 20px, 0)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(0, -2000px, 0);
	        transform: translate3d(0, -2000px, 0)
	    }
	}

	@keyframes bounceOutUp {
	    20% {
	        -webkit-transform: translate3d(0, -10px, 0);
	        transform: translate3d(0, -10px, 0)
	    }

	    40%,
	    45% {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 20px, 0);
	        transform: translate3d(0, 20px, 0)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(0, -2000px, 0);
	        transform: translate3d(0, -2000px, 0)
	    }
	}

	.bounceOutUp {
	    -webkit-animation-name: bounceOutUp;
	    animation-name: bounceOutUp
	}

	@-webkit-keyframes fadeInDownBig {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(0, -2000px, 0);
	        transform: translate3d(0, -2000px, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes fadeInDownBig {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(0, -2000px, 0);
	        transform: translate3d(0, -2000px, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.fadeInDownBig {
	    -webkit-animation-name: fadeInDownBig;
	    animation-name: fadeInDownBig
	}

	@-webkit-keyframes fadeInLeftBig {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(-2000px, 0, 0);
	        transform: translate3d(-2000px, 0, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes fadeInLeftBig {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(-2000px, 0, 0);
	        transform: translate3d(-2000px, 0, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.fadeInLeftBig {
	    -webkit-animation-name: fadeInLeftBig;
	    animation-name: fadeInLeftBig
	}

	@-webkit-keyframes fadeInRightBig {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(2000px, 0, 0);
	        transform: translate3d(2000px, 0, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes fadeInRightBig {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(2000px, 0, 0);
	        transform: translate3d(2000px, 0, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.fadeInRightBig {
	    -webkit-animation-name: fadeInRightBig;
	    animation-name: fadeInRightBig
	}

	@-webkit-keyframes fadeInUpBig {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(0, 2000px, 0);
	        transform: translate3d(0, 2000px, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes fadeInUpBig {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(0, 2000px, 0);
	        transform: translate3d(0, 2000px, 0)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.fadeInUpBig {
	    -webkit-animation-name: fadeInUpBig;
	    animation-name: fadeInUpBig
	}

	@-webkit-keyframes fadeOutDownBig {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(0, 2000px, 0);
	        transform: translate3d(0, 2000px, 0)
	    }
	}

	@keyframes fadeOutDownBig {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(0, 2000px, 0);
	        transform: translate3d(0, 2000px, 0)
	    }
	}

	.fadeOutDownBig {
	    -webkit-animation-name: fadeOutDownBig;
	    animation-name: fadeOutDownBig
	}

	@-webkit-keyframes fadeOutLeftBig {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(-2000px, 0, 0);
	        transform: translate3d(-2000px, 0, 0)
	    }
	}

	@keyframes fadeOutLeftBig {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(-2000px, 0, 0);
	        transform: translate3d(-2000px, 0, 0)
	    }
	}

	.fadeOutLeftBig {
	    -webkit-animation-name: fadeOutLeftBig;
	    animation-name: fadeOutLeftBig
	}

	@-webkit-keyframes fadeOutRightBig {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(2000px, 0, 0);
	        transform: translate3d(2000px, 0, 0)
	    }
	}

	@keyframes fadeOutRightBig {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(2000px, 0, 0);
	        transform: translate3d(2000px, 0, 0)
	    }
	}

	.fadeOutRightBig {
	    -webkit-animation-name: fadeOutRightBig;
	    animation-name: fadeOutRightBig
	}

	@-webkit-keyframes fadeOutUpBig {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(0, -2000px, 0);
	        transform: translate3d(0, -2000px, 0)
	    }
	}

	@keyframes fadeOutUpBig {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(0, -2000px, 0);
	        transform: translate3d(0, -2000px, 0)
	    }
	}

	.fadeOutUpBig {
	    -webkit-animation-name: fadeOutUpBig;
	    animation-name: fadeOutUpBig
	}

	@-webkit-keyframes flip {
	    from {
	        -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
	        transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
	        -webkit-animation-timing-function: ease-out;
	        animation-timing-function: ease-out
	    }

	    40% {
	        -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
	        transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
	        -webkit-animation-timing-function: ease-out;
	        animation-timing-function: ease-out
	    }

	    50% {
	        -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
	        transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
	        -webkit-animation-timing-function: ease-in;
	        animation-timing-function: ease-in
	    }

	    80% {
	        -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
	        transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
	        -webkit-animation-timing-function: ease-in;
	        animation-timing-function: ease-in
	    }

	    to {
	        -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
	        transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
	        -webkit-animation-timing-function: ease-in;
	        animation-timing-function: ease-in
	    }
	}

	@keyframes flip {
	    from {
	        -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
	        transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
	        -webkit-animation-timing-function: ease-out;
	        animation-timing-function: ease-out
	    }

	    40% {
	        -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
	        transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
	        -webkit-animation-timing-function: ease-out;
	        animation-timing-function: ease-out
	    }

	    50% {
	        -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
	        transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
	        -webkit-animation-timing-function: ease-in;
	        animation-timing-function: ease-in
	    }

	    80% {
	        -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
	        transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
	        -webkit-animation-timing-function: ease-in;
	        animation-timing-function: ease-in
	    }

	    to {
	        -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
	        transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
	        -webkit-animation-timing-function: ease-in;
	        animation-timing-function: ease-in
	    }
	}

	.flip {
	    -webkit-backface-visibility: visible;
	    backface-visibility: visible;
	    -webkit-animation-name: flip;
	    animation-name: flip
	}

	@-webkit-keyframes flipInX {
	    from {
	        opacity: 0;
	        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
	        transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
	        -webkit-animation-timing-function: ease-in;
	        animation-timing-function: ease-in
	    }

	    40% {
	        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
	        transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
	        -webkit-animation-timing-function: ease-in;
	        animation-timing-function: ease-in
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
	        transform: perspective(400px) rotate3d(1, 0, 0, 10deg)
	    }

	    80% {
	        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
	        transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
	    }

	    to {
	        -webkit-transform: perspective(400px);
	        transform: perspective(400px)
	    }
	}

	@keyframes flipInX {
	    from {
	        opacity: 0;
	        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
	        transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
	        -webkit-animation-timing-function: ease-in;
	        animation-timing-function: ease-in
	    }

	    40% {
	        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
	        transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
	        -webkit-animation-timing-function: ease-in;
	        animation-timing-function: ease-in
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
	        transform: perspective(400px) rotate3d(1, 0, 0, 10deg)
	    }

	    80% {
	        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
	        transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
	    }

	    to {
	        -webkit-transform: perspective(400px);
	        transform: perspective(400px)
	    }
	}

	.flipInX {
	    -webkit-backface-visibility: visible;
	    backface-visibility: visible;
	    -webkit-animation-name: flipInX;
	    animation-name: flipInX
	}

	@-webkit-keyframes flipInY {
	    from {
	        opacity: 0;
	        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
	        transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
	        -webkit-animation-timing-function: ease-in;
	        animation-timing-function: ease-in
	    }

	    40% {
	        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
	        transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
	        -webkit-animation-timing-function: ease-in;
	        animation-timing-function: ease-in
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
	        transform: perspective(400px) rotate3d(0, 1, 0, 10deg)
	    }

	    80% {
	        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
	        transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
	    }

	    to {
	        -webkit-transform: perspective(400px);
	        transform: perspective(400px)
	    }
	}

	@keyframes flipInY {
	    from {
	        opacity: 0;
	        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
	        transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
	        -webkit-animation-timing-function: ease-in;
	        animation-timing-function: ease-in
	    }

	    40% {
	        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
	        transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
	        -webkit-animation-timing-function: ease-in;
	        animation-timing-function: ease-in
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
	        transform: perspective(400px) rotate3d(0, 1, 0, 10deg)
	    }

	    80% {
	        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
	        transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
	    }

	    to {
	        -webkit-transform: perspective(400px);
	        transform: perspective(400px)
	    }
	}

	.flipInY {
	    -webkit-backface-visibility: visible;
	    backface-visibility: visible;
	    -webkit-animation-name: flipInY;
	    animation-name: flipInY
	}

	@-webkit-keyframes flipOutX {
	    from {
	        -webkit-transform: perspective(400px);
	        transform: perspective(400px)
	    }

	    30% {
	        opacity: 1;
	        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
	        transform: perspective(400px) rotate3d(1, 0, 0, -20deg)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
	        transform: perspective(400px) rotate3d(1, 0, 0, 90deg)
	    }
	}

	@keyframes flipOutX {
	    from {
	        -webkit-transform: perspective(400px);
	        transform: perspective(400px)
	    }

	    30% {
	        opacity: 1;
	        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
	        transform: perspective(400px) rotate3d(1, 0, 0, -20deg)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
	        transform: perspective(400px) rotate3d(1, 0, 0, 90deg)
	    }
	}

	.flipOutX {
	    -webkit-animation-name: flipOutX;
	    animation-name: flipOutX;
	    -webkit-animation-duration: .75s;
	    animation-duration: .75s;
	    -webkit-backface-visibility: visible;
	    backface-visibility: visible
	}

	@-webkit-keyframes flipOutY {
	    from {
	        -webkit-transform: perspective(400px);
	        transform: perspective(400px)
	    }

	    30% {
	        opacity: 1;
	        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
	        transform: perspective(400px) rotate3d(0, 1, 0, -15deg)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
	        transform: perspective(400px) rotate3d(0, 1, 0, 90deg)
	    }
	}

	@keyframes flipOutY {
	    from {
	        -webkit-transform: perspective(400px);
	        transform: perspective(400px)
	    }

	    30% {
	        opacity: 1;
	        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
	        transform: perspective(400px) rotate3d(0, 1, 0, -15deg)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
	        transform: perspective(400px) rotate3d(0, 1, 0, 90deg)
	    }
	}

	.flipOutY {
	    -webkit-animation-name: flipOutY;
	    animation-name: flipOutY;
	    -webkit-animation-duration: .75s;
	    animation-duration: .75s;
	    -webkit-backface-visibility: visible;
	    backface-visibility: visible
	}

	@-webkit-keyframes lightSpeedIn {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
	        transform: translate3d(100%, 0, 0) skewX(-30deg)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: skewX(20deg);
	        transform: skewX(20deg)
	    }

	    80% {
	        -webkit-transform: skewX(-5deg);
	        transform: skewX(-5deg)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes lightSpeedIn {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
	        transform: translate3d(100%, 0, 0) skewX(-30deg)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: skewX(20deg);
	        transform: skewX(20deg)
	    }

	    80% {
	        -webkit-transform: skewX(-5deg);
	        transform: skewX(-5deg)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.lightSpeedIn {
	    -webkit-animation-name: lightSpeedIn;
	    animation-name: lightSpeedIn;
	    -webkit-animation-timing-function: ease-out;
	    animation-timing-function: ease-out
	}

	@-webkit-keyframes lightSpeedOut {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
	        transform: translate3d(100%, 0, 0) skewX(30deg)
	    }
	}

	@keyframes lightSpeedOut {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
	        transform: translate3d(100%, 0, 0) skewX(30deg)
	    }
	}

	.lightSpeedOut {
	    -webkit-animation-name: lightSpeedOut;
	    animation-name: lightSpeedOut;
	    -webkit-animation-timing-function: ease-in;
	    animation-timing-function: ease-in
	}

	@-webkit-keyframes rotateIn {
	    from {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, -200deg);
	        transform: rotate3d(0, 0, 1, -200deg);
	        -webkit-transform-origin: center;
	        transform-origin: center
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0);
	        -webkit-transform-origin: center;
	        transform-origin: center
	    }
	}

	@keyframes rotateIn {
	    from {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, -200deg);
	        transform: rotate3d(0, 0, 1, -200deg);
	        -webkit-transform-origin: center;
	        transform-origin: center
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0);
	        -webkit-transform-origin: center;
	        transform-origin: center
	    }
	}

	.rotateIn {
	    -webkit-animation-name: rotateIn;
	    animation-name: rotateIn
	}

	@-webkit-keyframes rotateInDownLeft {
	    from {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, -45deg);
	        transform: rotate3d(0, 0, 1, -45deg);
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0);
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }
	}

	@keyframes rotateInDownLeft {
	    from {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, -45deg);
	        transform: rotate3d(0, 0, 1, -45deg);
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0);
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }
	}

	.rotateInDownLeft {
	    -webkit-animation-name: rotateInDownLeft;
	    animation-name: rotateInDownLeft
	}

	@-webkit-keyframes rotateInDownRight {
	    from {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, 45deg);
	        transform: rotate3d(0, 0, 1, 45deg);
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0);
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }
	}

	@keyframes rotateInDownRight {
	    from {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, 45deg);
	        transform: rotate3d(0, 0, 1, 45deg);
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0);
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }
	}

	.rotateInDownRight {
	    -webkit-animation-name: rotateInDownRight;
	    animation-name: rotateInDownRight
	}

	@-webkit-keyframes rotateInUpLeft {
	    from {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, 45deg);
	        transform: rotate3d(0, 0, 1, 45deg);
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0);
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }
	}

	@keyframes rotateInUpLeft {
	    from {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, 45deg);
	        transform: rotate3d(0, 0, 1, 45deg);
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0);
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }
	}

	.rotateInUpLeft {
	    -webkit-animation-name: rotateInUpLeft;
	    animation-name: rotateInUpLeft
	}

	@-webkit-keyframes rotateInUpRight {
	    from {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, -90deg);
	        transform: rotate3d(0, 0, 1, -90deg);
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0);
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }
	}

	@keyframes rotateInUpRight {
	    from {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, -90deg);
	        transform: rotate3d(0, 0, 1, -90deg);
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0);
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }
	}

	.rotateInUpRight {
	    -webkit-animation-name: rotateInUpRight;
	    animation-name: rotateInUpRight
	}

	@-webkit-keyframes rotateOut {
	    from {
	        opacity: 1;
	        -webkit-transform-origin: center;
	        transform-origin: center
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, 200deg);
	        transform: rotate3d(0, 0, 1, 200deg);
	        -webkit-transform-origin: center;
	        transform-origin: center
	    }
	}

	@keyframes rotateOut {
	    from {
	        opacity: 1;
	        -webkit-transform-origin: center;
	        transform-origin: center
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, 200deg);
	        transform: rotate3d(0, 0, 1, 200deg);
	        -webkit-transform-origin: center;
	        transform-origin: center
	    }
	}

	.rotateOut {
	    -webkit-animation-name: rotateOut;
	    animation-name: rotateOut
	}

	@-webkit-keyframes rotateOutDownLeft {
	    from {
	        opacity: 1;
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, 45deg);
	        transform: rotate3d(0, 0, 1, 45deg);
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }
	}

	@keyframes rotateOutDownLeft {
	    from {
	        opacity: 1;
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, 45deg);
	        transform: rotate3d(0, 0, 1, 45deg);
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }
	}

	.rotateOutDownLeft {
	    -webkit-animation-name: rotateOutDownLeft;
	    animation-name: rotateOutDownLeft
	}

	@-webkit-keyframes rotateOutDownRight {
	    from {
	        opacity: 1;
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, -45deg);
	        transform: rotate3d(0, 0, 1, -45deg);
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }
	}

	@keyframes rotateOutDownRight {
	    from {
	        opacity: 1;
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, -45deg);
	        transform: rotate3d(0, 0, 1, -45deg);
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }
	}

	.rotateOutDownRight {
	    -webkit-animation-name: rotateOutDownRight;
	    animation-name: rotateOutDownRight
	}

	@-webkit-keyframes rotateOutUpLeft {
	    from {
	        opacity: 1;
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, -45deg);
	        transform: rotate3d(0, 0, 1, -45deg);
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }
	}

	@keyframes rotateOutUpLeft {
	    from {
	        opacity: 1;
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, -45deg);
	        transform: rotate3d(0, 0, 1, -45deg);
	        -webkit-transform-origin: left bottom;
	        transform-origin: left bottom
	    }
	}

	.rotateOutUpLeft {
	    -webkit-animation-name: rotateOutUpLeft;
	    animation-name: rotateOutUpLeft
	}

	@-webkit-keyframes rotateOutUpRight {
	    from {
	        opacity: 1;
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, 90deg);
	        transform: rotate3d(0, 0, 1, 90deg);
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }
	}

	@keyframes rotateOutUpRight {
	    from {
	        opacity: 1;
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: rotate3d(0, 0, 1, 90deg);
	        transform: rotate3d(0, 0, 1, 90deg);
	        -webkit-transform-origin: right bottom;
	        transform-origin: right bottom
	    }
	}

	.rotateOutUpRight {
	    -webkit-animation-name: rotateOutUpRight;
	    animation-name: rotateOutUpRight
	}

	@-webkit-keyframes hinge {
	    0% {
	        -webkit-transform-origin: top left;
	        transform-origin: top left;
	        -webkit-animation-timing-function: ease-in-out;
	        animation-timing-function: ease-in-out
	    }

	    20%,
	    60% {
	        -webkit-transform: rotate3d(0, 0, 1, 80deg);
	        transform: rotate3d(0, 0, 1, 80deg);
	        -webkit-transform-origin: top left;
	        transform-origin: top left;
	        -webkit-animation-timing-function: ease-in-out;
	        animation-timing-function: ease-in-out
	    }

	    40%,
	    80% {
	        opacity: 1;
	        -webkit-transform: rotate3d(0, 0, 1, 60deg);
	        transform: rotate3d(0, 0, 1, 60deg);
	        -webkit-transform-origin: top left;
	        transform-origin: top left;
	        -webkit-animation-timing-function: ease-in-out;
	        animation-timing-function: ease-in-out
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(0, 700px, 0);
	        transform: translate3d(0, 700px, 0)
	    }
	}

	@keyframes hinge {
	    0% {
	        -webkit-transform-origin: top left;
	        transform-origin: top left;
	        -webkit-animation-timing-function: ease-in-out;
	        animation-timing-function: ease-in-out
	    }

	    20%,
	    60% {
	        -webkit-transform: rotate3d(0, 0, 1, 80deg);
	        transform: rotate3d(0, 0, 1, 80deg);
	        -webkit-transform-origin: top left;
	        transform-origin: top left;
	        -webkit-animation-timing-function: ease-in-out;
	        animation-timing-function: ease-in-out
	    }

	    40%,
	    80% {
	        opacity: 1;
	        -webkit-transform: rotate3d(0, 0, 1, 60deg);
	        transform: rotate3d(0, 0, 1, 60deg);
	        -webkit-transform-origin: top left;
	        transform-origin: top left;
	        -webkit-animation-timing-function: ease-in-out;
	        animation-timing-function: ease-in-out
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(0, 700px, 0);
	        transform: translate3d(0, 700px, 0)
	    }
	}

	.hinge {
	    -webkit-animation-name: hinge;
	    animation-name: hinge;
	    -webkit-animation-duration: 2s;
	    animation-duration: 2s
	}

	@-webkit-keyframes jackInTheBox {
	    from {
	        opacity: 0;
	        -webkit-transform: scale(0.1) rotate(30deg);
	        transform: scale(0.1) rotate(30deg);
	        -webkit-transform-origin: center bottom;
	        transform-origin: center bottom
	    }

	    50% {
	        -webkit-transform: rotate(-10deg);
	        transform: rotate(-10deg)
	    }

	    70% {
	        -webkit-transform: rotate(3deg);
	        transform: rotate(3deg)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: scale(1);
	        transform: scale(1)
	    }
	}

	@keyframes jackInTheBox {
	    from {
	        opacity: 0;
	        -webkit-transform: scale(0.1) rotate(30deg);
	        transform: scale(0.1) rotate(30deg);
	        -webkit-transform-origin: center bottom;
	        transform-origin: center bottom
	    }

	    50% {
	        -webkit-transform: rotate(-10deg);
	        transform: rotate(-10deg)
	    }

	    70% {
	        -webkit-transform: rotate(3deg);
	        transform: rotate(3deg)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: scale(1);
	        transform: scale(1)
	    }
	}

	.jackInTheBox {
	    -webkit-animation-name: jackInTheBox;
	    animation-name: jackInTheBox
	}

	@-webkit-keyframes rollIn {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
	        transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes rollIn {
	    from {
	        opacity: 0;
	        -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
	        transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
	    }

	    to {
	        opacity: 1;
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.rollIn {
	    -webkit-animation-name: rollIn;
	    animation-name: rollIn
	}

	@-webkit-keyframes rollOut {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
	        transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)
	    }
	}

	@keyframes rollOut {
	    from {
	        opacity: 1
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
	        transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)
	    }
	}

	.rollOut {
	    -webkit-animation-name: rollOut;
	    animation-name: rollOut
	}

	@-webkit-keyframes zoomIn {
	    from {
	        opacity: 0;
	        -webkit-transform: scale3d(0.3, 0.3, 0.3);
	        transform: scale3d(0.3, 0.3, 0.3)
	    }

	    50% {
	        opacity: 1
	    }
	}

	@keyframes zoomIn {
	    from {
	        opacity: 0;
	        -webkit-transform: scale3d(0.3, 0.3, 0.3);
	        transform: scale3d(0.3, 0.3, 0.3)
	    }

	    50% {
	        opacity: 1
	    }
	}

	.zoomIn {
	    -webkit-animation-name: zoomIn;
	    animation-name: zoomIn
	}

	@-webkit-keyframes zoomInDown {
	    from {
	        opacity: 0;
	        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
	        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
	    }
	}

	@keyframes zoomInDown {
	    from {
	        opacity: 0;
	        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
	        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
	    }
	}

	.zoomInDown {
	    -webkit-animation-name: zoomInDown;
	    animation-name: zoomInDown
	}

	@-webkit-keyframes zoomInLeft {
	    from {
	        opacity: 0;
	        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
	        transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
	    }
	}

	@keyframes zoomInLeft {
	    from {
	        opacity: 0;
	        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
	        transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
	    }
	}

	.zoomInLeft {
	    -webkit-animation-name: zoomInLeft;
	    animation-name: zoomInLeft
	}

	@-webkit-keyframes zoomInRight {
	    from {
	        opacity: 0;
	        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
	        transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
	    }
	}

	@keyframes zoomInRight {
	    from {
	        opacity: 0;
	        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
	        transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
	    }
	}

	.zoomInRight {
	    -webkit-animation-name: zoomInRight;
	    animation-name: zoomInRight
	}

	@-webkit-keyframes zoomInUp {
	    from {
	        opacity: 0;
	        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
	        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
	    }
	}

	@keyframes zoomInUp {
	    from {
	        opacity: 0;
	        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
	        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
	    }

	    60% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
	    }
	}

	.zoomInUp {
	    -webkit-animation-name: zoomInUp;
	    animation-name: zoomInUp
	}

	@-webkit-keyframes zoomOut {
	    from {
	        opacity: 1
	    }

	    50% {
	        opacity: 0;
	        -webkit-transform: scale3d(0.3, 0.3, 0.3);
	        transform: scale3d(0.3, 0.3, 0.3)
	    }

	    to {
	        opacity: 0
	    }
	}

	@keyframes zoomOut {
	    from {
	        opacity: 1
	    }

	    50% {
	        opacity: 0;
	        -webkit-transform: scale3d(0.3, 0.3, 0.3);
	        transform: scale3d(0.3, 0.3, 0.3)
	    }

	    to {
	        opacity: 0
	    }
	}

	.zoomOut {
	    -webkit-animation-name: zoomOut;
	    animation-name: zoomOut
	}

	@-webkit-keyframes zoomOutDown {
	    40% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
	        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
	        -webkit-transform-origin: center bottom;
	        transform-origin: center bottom;
	        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
	    }
	}

	@keyframes zoomOutDown {
	    40% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
	        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
	        -webkit-transform-origin: center bottom;
	        transform-origin: center bottom;
	        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
	    }
	}

	.zoomOutDown {
	    -webkit-animation-name: zoomOutDown;
	    animation-name: zoomOutDown
	}

	@-webkit-keyframes zoomOutLeft {
	    40% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
	        transform: scale(0.1) translate3d(-2000px, 0, 0);
	        -webkit-transform-origin: left center;
	        transform-origin: left center
	    }
	}

	@keyframes zoomOutLeft {
	    40% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
	        transform: scale(0.1) translate3d(-2000px, 0, 0);
	        -webkit-transform-origin: left center;
	        transform-origin: left center
	    }
	}

	.zoomOutLeft {
	    -webkit-animation-name: zoomOutLeft;
	    animation-name: zoomOutLeft
	}

	@-webkit-keyframes zoomOutRight {
	    40% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
	        transform: scale(0.1) translate3d(2000px, 0, 0);
	        -webkit-transform-origin: right center;
	        transform-origin: right center
	    }
	}

	@keyframes zoomOutRight {
	    40% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
	        transform: scale(0.1) translate3d(2000px, 0, 0);
	        -webkit-transform-origin: right center;
	        transform-origin: right center
	    }
	}

	.zoomOutRight {
	    -webkit-animation-name: zoomOutRight;
	    animation-name: zoomOutRight
	}

	@-webkit-keyframes zoomOutUp {
	    40% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
	        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
	        -webkit-transform-origin: center bottom;
	        transform-origin: center bottom;
	        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
	    }
	}

	@keyframes zoomOutUp {
	    40% {
	        opacity: 1;
	        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
	        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
	        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
	    }

	    to {
	        opacity: 0;
	        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
	        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
	        -webkit-transform-origin: center bottom;
	        transform-origin: center bottom;
	        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
	    }
	}

	.zoomOutUp {
	    -webkit-animation-name: zoomOutUp;
	    animation-name: zoomOutUp
	}

	@-webkit-keyframes slideInDown {
	    from {
	        visibility: visible;
	        -webkit-transform: translate3d(0, -100%, 0);
	        transform: translate3d(0, -100%, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes slideInDown {
	    from {
	        visibility: visible;
	        -webkit-transform: translate3d(0, -100%, 0);
	        transform: translate3d(0, -100%, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.slideInDown {
	    -webkit-animation-name: slideInDown;
	    animation-name: slideInDown
	}

	@-webkit-keyframes slideInLeft {
	    from {
	        visibility: visible;
	        -webkit-transform: translate3d(-100%, 0, 0);
	        transform: translate3d(-100%, 0, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes slideInLeft {
	    from {
	        visibility: visible;
	        -webkit-transform: translate3d(-100%, 0, 0);
	        transform: translate3d(-100%, 0, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.slideInLeft {
	    -webkit-animation-name: slideInLeft;
	    animation-name: slideInLeft
	}

	@-webkit-keyframes slideInRight {
	    from {
	        visibility: visible;
	        -webkit-transform: translate3d(100%, 0, 0);
	        transform: translate3d(100%, 0, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes slideInRight {
	    from {
	        visibility: visible;
	        -webkit-transform: translate3d(100%, 0, 0);
	        transform: translate3d(100%, 0, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.slideInRight {
	    -webkit-animation-name: slideInRight;
	    animation-name: slideInRight
	}

	@-webkit-keyframes slideInUp {
	    from {
	        visibility: visible;
	        -webkit-transform: translate3d(0, 100%, 0);
	        transform: translate3d(0, 100%, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	@keyframes slideInUp {
	    from {
	        visibility: visible;
	        -webkit-transform: translate3d(0, 100%, 0);
	        transform: translate3d(0, 100%, 0)
	    }

	    to {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.slideInUp {
	    -webkit-animation-name: slideInUp;
	    animation-name: slideInUp
	}

	@-webkit-keyframes slideOutDown {
	    from {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }

	    to {
	        visibility: hidden;
	        -webkit-transform: translate3d(0, 100%, 0);
	        transform: translate3d(0, 100%, 0)
	    }
	}

	@keyframes slideOutDown {
	    from {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }

	    to {
	        visibility: hidden;
	        -webkit-transform: translate3d(0, 100%, 0);
	        transform: translate3d(0, 100%, 0)
	    }
	}

	.slideOutDown {
	    -webkit-animation-name: slideOutDown;
	    animation-name: slideOutDown
	}

	@-webkit-keyframes slideOutLeft {
	    from {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }

	    to {
	        visibility: hidden;
	        -webkit-transform: translate3d(-100%, 0, 0);
	        transform: translate3d(-100%, 0, 0)
	    }
	}

	@keyframes slideOutLeft {
	    from {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }

	    to {
	        visibility: hidden;
	        -webkit-transform: translate3d(-100%, 0, 0);
	        transform: translate3d(-100%, 0, 0)
	    }
	}

	.slideOutLeft {
	    -webkit-animation-name: slideOutLeft;
	    animation-name: slideOutLeft
	}

	@-webkit-keyframes slideOutRight {
	    from {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }

	    to {
	        visibility: hidden;
	        -webkit-transform: translate3d(100%, 0, 0);
	        transform: translate3d(100%, 0, 0)
	    }
	}

	@keyframes slideOutRight {
	    from {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }

	    to {
	        visibility: hidden;
	        -webkit-transform: translate3d(100%, 0, 0);
	        transform: translate3d(100%, 0, 0)
	    }
	}

	.slideOutRight {
	    -webkit-animation-name: slideOutRight;
	    animation-name: slideOutRight
	}

	@-webkit-keyframes slideOutUp {
	    from {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }

	    to {
	        visibility: hidden;
	        -webkit-transform: translate3d(0, -100%, 0);
	        transform: translate3d(0, -100%, 0)
	    }
	}

	@keyframes slideOutUp {
	    from {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }

	    to {
	        visibility: hidden;
	        -webkit-transform: translate3d(0, -100%, 0);
	        transform: translate3d(0, -100%, 0)
	    }
	}

	.slideOutUp {
	    -webkit-animation-name: slideOutUp;
	    animation-name: slideOutUp
	}

	.btn {
	    margin: .375rem;
	    color: inherit;
	    text-transform: uppercase;
	    word-wrap: break-word;
	    white-space: normal;
	    cursor: pointer;
	    border: 0;
	    border-radius: .125rem;
	    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
	    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
	    -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
	    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
	    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
	    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
	    padding: .84rem 2.14rem;
	    font-size: .81rem
	}

	.btn:hover,
	.btn:focus,
	.btn:active {
	    outline: 0;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn.btn-block {
	    margin: inherit
	}

	.btn .fas.right,
	.btn .fab.right,
	.btn .far.right {
	    margin-left: .3rem
	}

	.btn .fas.left,
	.btn .fab.left,
	.btn .far.left {
	    margin-right: .3rem
	}

	.btn.btn-lg {
	    padding: 1rem 2.4rem;
	    font-size: .94rem
	}

	.btn.btn-md {
	    padding: .7rem 1.6rem;
	    font-size: .7rem
	}

	.btn.btn-sm {
	    padding: .5rem 1.6rem;
	    font-size: .64rem
	}

	.btn.disabled:hover,
	.btn.disabled:focus,
	.btn.disabled:active,
	.btn:disabled:hover,
	.btn:disabled:focus,
	.btn:disabled:active {
	    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
	    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.btn[class*="btn-outline-"] {
	    padding-top: .7rem;
	    padding-bottom: .7rem
	}

	.btn[class*="btn-outline-"].btn-lg {
	    padding-top: .88rem;
	    padding-bottom: .88rem
	}

	.btn[class*="btn-outline-"].btn-md {
	    padding-top: .58rem;
	    padding-bottom: .58rem
	}

	.btn[class*="btn-outline-"].btn-sm {
	    padding-top: .38rem;
	    padding-bottom: .38rem
	}

	.btn-link {
	    color: #000;
	    background-color: transparent;
	    -webkit-box-shadow: none;
	    box-shadow: none
	}

	.btn-link:hover,
	.btn-link:focus,
	.btn-link:active {
	    color: #000;
	    background-color: transparent;
	    -webkit-box-shadow: none;
	    box-shadow: none
	}

	.btn-group>.btn:not(:first-child),
	.btn-group>.btn-group:not(:first-child) {
	    margin-left: -.375rem
	}

	.btn-primary {
	    color: #fff;
	    background-color: #4285f4 !important
	}

	.btn-primary:hover {
	    color: #fff;
	    background-color: #5a95f5
	}

	.btn-primary:focus,
	.btn-primary.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-primary:focus,
	.btn-primary:active,
	.btn-primary.active {
	    background-color: #0b51c5
	}

	.btn-primary.dropdown-toggle {
	    background-color: #4285f4 !important
	}

	.btn-primary.dropdown-toggle:hover,
	.btn-primary.dropdown-toggle:focus {
	    background-color: #5a95f5 !important
	}

	.btn-primary:not([disabled]):not(.disabled):active,
	.btn-primary:not([disabled]):not(.disabled).active,
	.show>.btn-primary.dropdown-toggle {
	    background-color: #0b51c5 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-primary:not([disabled]):not(.disabled):active:focus,
	.btn-primary:not([disabled]):not(.disabled).active:focus,
	.show>.btn-primary.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.primary-ic {
	    color: #4285f4 !important
	}

	.primary-ic:hover,
	.primary-ic:focus {
	    color: #4285f4
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-primary {
	    color: #fff
	}

	.btn-outline-primary {
	    color: #4285f4 !important;
	    background-color: transparent !important;
	    border: 2px solid #4285f4 !important
	}

	.btn-outline-primary:hover,
	.btn-outline-primary:focus,
	.btn-outline-primary:active,
	.btn-outline-primary:active:focus,
	.btn-outline-primary.active {
	    color: #4285f4 !important;
	    background-color: transparent !important;
	    border-color: #4285f4 !important
	}

	.btn-outline-primary:not([disabled]):not(.disabled):active,
	.btn-outline-primary:not([disabled]):not(.disabled).active,
	.show>.btn-outline-primary.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #4285f4 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-primary:not([disabled]):not(.disabled):active:focus,
	.btn-outline-primary:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-primary.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-danger {
	    color: #fff;
	    background-color: #ff3547 !important
	}

	.btn-danger:hover {
	    color: #fff;
	    background-color: #ff4f5e
	}

	.btn-danger:focus,
	.btn-danger.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-danger:focus,
	.btn-danger:active,
	.btn-danger.active {
	    background-color: #ce0012
	}

	.btn-danger.dropdown-toggle {
	    background-color: #ff3547 !important
	}

	.btn-danger.dropdown-toggle:hover,
	.btn-danger.dropdown-toggle:focus {
	    background-color: #ff4f5e !important
	}

	.btn-danger:not([disabled]):not(.disabled):active,
	.btn-danger:not([disabled]):not(.disabled).active,
	.show>.btn-danger.dropdown-toggle {
	    background-color: #ce0012 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-danger:not([disabled]):not(.disabled):active:focus,
	.btn-danger:not([disabled]):not(.disabled).active:focus,
	.show>.btn-danger.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.danger-ic {
	    color: #ff3547 !important
	}

	.danger-ic:hover,
	.danger-ic:focus {
	    color: #ff3547
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-danger {
	    color: #fff
	}

	.btn-outline-danger {
	    color: #ff3547 !important;
	    background-color: transparent !important;
	    border: 2px solid #ff3547 !important
	}

	.btn-outline-danger:hover,
	.btn-outline-danger:focus,
	.btn-outline-danger:active,
	.btn-outline-danger:active:focus,
	.btn-outline-danger.active {
	    color: #ff3547 !important;
	    background-color: transparent !important;
	    border-color: #ff3547 !important
	}

	.btn-outline-danger:not([disabled]):not(.disabled):active,
	.btn-outline-danger:not([disabled]):not(.disabled).active,
	.show>.btn-outline-danger.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #ff3547 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-danger:not([disabled]):not(.disabled):active:focus,
	.btn-outline-danger:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-danger.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-warning {
	    color: #fff;
	    background-color: #fb3 !important
	}

	.btn-warning:hover {
	    color: #fff;
	    background-color: #ffc44d
	}

	.btn-warning:focus,
	.btn-warning.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-warning:focus,
	.btn-warning:active,
	.btn-warning.active {
	    background-color: #c80
	}

	.btn-warning.dropdown-toggle {
	    background-color: #fb3 !important
	}

	.btn-warning.dropdown-toggle:hover,
	.btn-warning.dropdown-toggle:focus {
	    background-color: #ffc44d !important
	}

	.btn-warning:not([disabled]):not(.disabled):active,
	.btn-warning:not([disabled]):not(.disabled).active,
	.show>.btn-warning.dropdown-toggle {
	    background-color: #c80 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-warning:not([disabled]):not(.disabled):active:focus,
	.btn-warning:not([disabled]):not(.disabled).active:focus,
	.show>.btn-warning.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.warning-ic {
	    color: #fb3 !important
	}

	.warning-ic:hover,
	.warning-ic:focus {
	    color: #fb3
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-warning {
	    color: #fff
	}

	.btn-outline-warning {
	    color: #fb3 !important;
	    background-color: transparent !important;
	    border: 2px solid #fb3 !important
	}

	.btn-outline-warning:hover,
	.btn-outline-warning:focus,
	.btn-outline-warning:active,
	.btn-outline-warning:active:focus,
	.btn-outline-warning.active {
	    color: #fb3 !important;
	    background-color: transparent !important;
	    border-color: #fb3 !important
	}

	.btn-outline-warning:not([disabled]):not(.disabled):active,
	.btn-outline-warning:not([disabled]):not(.disabled).active,
	.show>.btn-outline-warning.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #fb3 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-warning:not([disabled]):not(.disabled):active:focus,
	.btn-outline-warning:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-warning.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-success {
	    color: #fff;
	    background-color: #00c851 !important
	}

	.btn-success:hover {
	    color: #fff;
	    background-color: #00e25b
	}

	.btn-success:focus,
	.btn-success.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-success:focus,
	.btn-success:active,
	.btn-success.active {
	    background-color: #006228
	}

	.btn-success.dropdown-toggle {
	    background-color: #00c851 !important
	}

	.btn-success.dropdown-toggle:hover,
	.btn-success.dropdown-toggle:focus {
	    background-color: #00e25b !important
	}

	.btn-success:not([disabled]):not(.disabled):active,
	.btn-success:not([disabled]):not(.disabled).active,
	.show>.btn-success.dropdown-toggle {
	    background-color: #006228 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-success:not([disabled]):not(.disabled):active:focus,
	.btn-success:not([disabled]):not(.disabled).active:focus,
	.show>.btn-success.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.success-ic {
	    color: #00c851 !important
	}

	.success-ic:hover,
	.success-ic:focus {
	    color: #00c851
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-success {
	    color: #fff
	}

	.btn-outline-success {
	    color: #00c851 !important;
	    background-color: transparent !important;
	    border: 2px solid #00c851 !important
	}

	.btn-outline-success:hover,
	.btn-outline-success:focus,
	.btn-outline-success:active,
	.btn-outline-success:active:focus,
	.btn-outline-success.active {
	    color: #00c851 !important;
	    background-color: transparent !important;
	    border-color: #00c851 !important
	}

	.btn-outline-success:not([disabled]):not(.disabled):active,
	.btn-outline-success:not([disabled]):not(.disabled).active,
	.show>.btn-outline-success.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #00c851 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-success:not([disabled]):not(.disabled):active:focus,
	.btn-outline-success:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-success.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-info {
	    color: #fff;
	    background-color: #33b5e5 !important
	}

	.btn-info:hover {
	    color: #fff;
	    background-color: #4abde8
	}

	.btn-info:focus,
	.btn-info.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-info:focus,
	.btn-info:active,
	.btn-info.active {
	    background-color: #14799e
	}

	.btn-info.dropdown-toggle {
	    background-color: #33b5e5 !important
	}

	.btn-info.dropdown-toggle:hover,
	.btn-info.dropdown-toggle:focus {
	    background-color: #4abde8 !important
	}

	.btn-info:not([disabled]):not(.disabled):active,
	.btn-info:not([disabled]):not(.disabled).active,
	.show>.btn-info.dropdown-toggle {
	    background-color: #14799e !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-info:not([disabled]):not(.disabled):active:focus,
	.btn-info:not([disabled]):not(.disabled).active:focus,
	.show>.btn-info.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.info-ic {
	    color: #33b5e5 !important
	}

	.info-ic:hover,
	.info-ic:focus {
	    color: #33b5e5
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-info {
	    color: #fff
	}

	.btn-outline-info {
	    color: #33b5e5 !important;
	    background-color: transparent !important;
	    border: 2px solid #33b5e5 !important
	}

	.btn-outline-info:hover,
	.btn-outline-info:focus,
	.btn-outline-info:active,
	.btn-outline-info:active:focus,
	.btn-outline-info.active {
	    color: #33b5e5 !important;
	    background-color: transparent !important;
	    border-color: #33b5e5 !important
	}

	.btn-outline-info:not([disabled]):not(.disabled):active,
	.btn-outline-info:not([disabled]):not(.disabled).active,
	.show>.btn-outline-info.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #33b5e5 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-info:not([disabled]):not(.disabled):active:focus,
	.btn-outline-info:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-info.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-default {
	    color: #fff;
	    background-color: #2bbbad !important
	}

	.btn-default:hover {
	    color: #fff;
	    background-color: #30cfc0
	}

	.btn-default:focus,
	.btn-default.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-default:focus,
	.btn-default:active,
	.btn-default.active {
	    background-color: #186860
	}

	.btn-default.dropdown-toggle {
	    background-color: #2bbbad !important
	}

	.btn-default.dropdown-toggle:hover,
	.btn-default.dropdown-toggle:focus {
	    background-color: #30cfc0 !important
	}

	.btn-default:not([disabled]):not(.disabled):active,
	.btn-default:not([disabled]):not(.disabled).active,
	.show>.btn-default.dropdown-toggle {
	    background-color: #186860 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-default:not([disabled]):not(.disabled):active:focus,
	.btn-default:not([disabled]):not(.disabled).active:focus,
	.show>.btn-default.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.default-ic {
	    color: #2bbbad !important
	}

	.default-ic:hover,
	.default-ic:focus {
	    color: #2bbbad
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-default {
	    color: #fff
	}

	.btn-outline-default {
	    color: #2bbbad !important;
	    background-color: transparent !important;
	    border: 2px solid #2bbbad !important
	}

	.btn-outline-default:hover,
	.btn-outline-default:focus,
	.btn-outline-default:active,
	.btn-outline-default:active:focus,
	.btn-outline-default.active {
	    color: #2bbbad !important;
	    background-color: transparent !important;
	    border-color: #2bbbad !important
	}

	.btn-outline-default:not([disabled]):not(.disabled):active,
	.btn-outline-default:not([disabled]):not(.disabled).active,
	.show>.btn-outline-default.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #2bbbad !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-default:not([disabled]):not(.disabled):active:focus,
	.btn-outline-default:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-default.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-secondary {
	    color: #fff;
	    background-color: #a6c !important
	}

	.btn-secondary:hover {
	    color: #fff;
	    background-color: #b579d2
	}

	.btn-secondary:focus,
	.btn-secondary.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-secondary:focus,
	.btn-secondary:active,
	.btn-secondary.active {
	    background-color: #739
	}

	.btn-secondary.dropdown-toggle {
	    background-color: #a6c !important
	}

	.btn-secondary.dropdown-toggle:hover,
	.btn-secondary.dropdown-toggle:focus {
	    background-color: #b579d2 !important
	}

	.btn-secondary:not([disabled]):not(.disabled):active,
	.btn-secondary:not([disabled]):not(.disabled).active,
	.show>.btn-secondary.dropdown-toggle {
	    background-color: #739 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-secondary:not([disabled]):not(.disabled):active:focus,
	.btn-secondary:not([disabled]):not(.disabled).active:focus,
	.show>.btn-secondary.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.secondary-ic {
	    color: #a6c !important
	}

	.secondary-ic:hover,
	.secondary-ic:focus {
	    color: #a6c
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-secondary {
	    color: #fff
	}

	.btn-outline-secondary {
	    color: #a6c !important;
	    background-color: transparent !important;
	    border: 2px solid #a6c !important
	}

	.btn-outline-secondary:hover,
	.btn-outline-secondary:focus,
	.btn-outline-secondary:active,
	.btn-outline-secondary:active:focus,
	.btn-outline-secondary.active {
	    color: #a6c !important;
	    background-color: transparent !important;
	    border-color: #a6c !important
	}

	.btn-outline-secondary:not([disabled]):not(.disabled):active,
	.btn-outline-secondary:not([disabled]):not(.disabled).active,
	.show>.btn-outline-secondary.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #a6c !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-secondary:not([disabled]):not(.disabled):active:focus,
	.btn-outline-secondary:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-secondary.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-elegant {
	    color: #fff;
	    background-color: #2e2e2e !important
	}

	.btn-elegant:hover {
	    color: #fff;
	    background-color: #3b3b3b
	}

	.btn-elegant:focus,
	.btn-elegant.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-elegant:focus,
	.btn-elegant:active,
	.btn-elegant.active {
	    background-color: #000
	}

	.btn-elegant.dropdown-toggle {
	    background-color: #2e2e2e !important
	}

	.btn-elegant.dropdown-toggle:hover,
	.btn-elegant.dropdown-toggle:focus {
	    background-color: #3b3b3b !important
	}

	.btn-elegant:not([disabled]):not(.disabled):active,
	.btn-elegant:not([disabled]):not(.disabled).active,
	.show>.btn-elegant.dropdown-toggle {
	    background-color: #000 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-elegant:not([disabled]):not(.disabled):active:focus,
	.btn-elegant:not([disabled]):not(.disabled).active:focus,
	.show>.btn-elegant.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.elegant-ic {
	    color: #2e2e2e !important
	}

	.elegant-ic:hover,
	.elegant-ic:focus {
	    color: #2e2e2e
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-elegant {
	    color: #fff
	}

	.btn-outline-elegant {
	    color: #2e2e2e !important;
	    background-color: transparent !important;
	    border: 2px solid #2e2e2e !important
	}

	.btn-outline-elegant:hover,
	.btn-outline-elegant:focus,
	.btn-outline-elegant:active,
	.btn-outline-elegant:active:focus,
	.btn-outline-elegant.active {
	    color: #2e2e2e !important;
	    background-color: transparent !important;
	    border-color: #2e2e2e !important
	}

	.btn-outline-elegant:not([disabled]):not(.disabled):active,
	.btn-outline-elegant:not([disabled]):not(.disabled).active,
	.show>.btn-outline-elegant.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #2e2e2e !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-elegant:not([disabled]):not(.disabled):active:focus,
	.btn-outline-elegant:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-elegant.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-unique {
	    color: #fff;
	    background-color: #880e4f !important
	}

	.btn-unique:hover {
	    color: #fff;
	    background-color: #9f105c
	}

	.btn-unique:focus,
	.btn-unique.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-unique:focus,
	.btn-unique:active,
	.btn-unique.active {
	    background-color: #2c0419
	}

	.btn-unique.dropdown-toggle {
	    background-color: #880e4f !important
	}

	.btn-unique.dropdown-toggle:hover,
	.btn-unique.dropdown-toggle:focus {
	    background-color: #9f105c !important
	}

	.btn-unique:not([disabled]):not(.disabled):active,
	.btn-unique:not([disabled]):not(.disabled).active,
	.show>.btn-unique.dropdown-toggle {
	    background-color: #2c0419 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-unique:not([disabled]):not(.disabled):active:focus,
	.btn-unique:not([disabled]):not(.disabled).active:focus,
	.show>.btn-unique.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.unique-ic {
	    color: #880e4f !important
	}

	.unique-ic:hover,
	.unique-ic:focus {
	    color: #880e4f
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-unique {
	    color: #fff
	}

	.btn-outline-unique {
	    color: #880e4f !important;
	    background-color: transparent !important;
	    border: 2px solid #880e4f !important
	}

	.btn-outline-unique:hover,
	.btn-outline-unique:focus,
	.btn-outline-unique:active,
	.btn-outline-unique:active:focus,
	.btn-outline-unique.active {
	    color: #880e4f !important;
	    background-color: transparent !important;
	    border-color: #880e4f !important
	}

	.btn-outline-unique:not([disabled]):not(.disabled):active,
	.btn-outline-unique:not([disabled]):not(.disabled).active,
	.show>.btn-outline-unique.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #880e4f !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-unique:not([disabled]):not(.disabled):active:focus,
	.btn-outline-unique:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-unique.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-dark-green {
	    color: #fff;
	    background-color: #388e3c !important
	}

	.btn-dark-green:hover {
	    color: #fff;
	    background-color: #3fa044
	}

	.btn-dark-green:focus,
	.btn-dark-green.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-dark-green:focus,
	.btn-dark-green:active,
	.btn-dark-green.active {
	    background-color: #1b451d
	}

	.btn-dark-green.dropdown-toggle {
	    background-color: #388e3c !important
	}

	.btn-dark-green.dropdown-toggle:hover,
	.btn-dark-green.dropdown-toggle:focus {
	    background-color: #3fa044 !important
	}

	.btn-dark-green:not([disabled]):not(.disabled):active,
	.btn-dark-green:not([disabled]):not(.disabled).active,
	.show>.btn-dark-green.dropdown-toggle {
	    background-color: #1b451d !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-dark-green:not([disabled]):not(.disabled):active:focus,
	.btn-dark-green:not([disabled]):not(.disabled).active:focus,
	.show>.btn-dark-green.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.dark-green-ic {
	    color: #388e3c !important
	}

	.dark-green-ic:hover,
	.dark-green-ic:focus {
	    color: #388e3c
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-dark-green {
	    color: #fff
	}

	.btn-outline-dark-green {
	    color: #388e3c !important;
	    background-color: transparent !important;
	    border: 2px solid #388e3c !important
	}

	.btn-outline-dark-green:hover,
	.btn-outline-dark-green:focus,
	.btn-outline-dark-green:active,
	.btn-outline-dark-green:active:focus,
	.btn-outline-dark-green.active {
	    color: #388e3c !important;
	    background-color: transparent !important;
	    border-color: #388e3c !important
	}

	.btn-outline-dark-green:not([disabled]):not(.disabled):active,
	.btn-outline-dark-green:not([disabled]):not(.disabled).active,
	.show>.btn-outline-dark-green.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #388e3c !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-dark-green:not([disabled]):not(.disabled):active:focus,
	.btn-outline-dark-green:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-dark-green.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-mdb-color {
	    color: #fff;
	    background-color: #59698d !important
	}

	.btn-mdb-color:hover {
	    color: #fff;
	    background-color: #63759d
	}

	.btn-mdb-color:focus,
	.btn-mdb-color.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-mdb-color:focus,
	.btn-mdb-color:active,
	.btn-mdb-color.active {
	    background-color: #323a4e
	}

	.btn-mdb-color.dropdown-toggle {
	    background-color: #59698d !important
	}

	.btn-mdb-color.dropdown-toggle:hover,
	.btn-mdb-color.dropdown-toggle:focus {
	    background-color: #63759d !important
	}

	.btn-mdb-color:not([disabled]):not(.disabled):active,
	.btn-mdb-color:not([disabled]):not(.disabled).active,
	.show>.btn-mdb-color.dropdown-toggle {
	    background-color: #323a4e !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-mdb-color:not([disabled]):not(.disabled):active:focus,
	.btn-mdb-color:not([disabled]):not(.disabled).active:focus,
	.show>.btn-mdb-color.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.mdb-color-ic {
	    color: #59698d !important
	}

	.mdb-color-ic:hover,
	.mdb-color-ic:focus {
	    color: #59698d
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-mdb-color {
	    color: #fff
	}

	.btn-outline-mdb-color {
	    color: #59698d !important;
	    background-color: transparent !important;
	    border: 2px solid #59698d !important
	}

	.btn-outline-mdb-color:hover,
	.btn-outline-mdb-color:focus,
	.btn-outline-mdb-color:active,
	.btn-outline-mdb-color:active:focus,
	.btn-outline-mdb-color.active {
	    color: #59698d !important;
	    background-color: transparent !important;
	    border-color: #59698d !important
	}

	.btn-outline-mdb-color:not([disabled]):not(.disabled):active,
	.btn-outline-mdb-color:not([disabled]):not(.disabled).active,
	.show>.btn-outline-mdb-color.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #59698d !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-mdb-color:not([disabled]):not(.disabled):active:focus,
	.btn-outline-mdb-color:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-mdb-color.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-red {
	    color: #fff;
	    background-color: #d32f2f !important
	}

	.btn-red:hover {
	    color: #fff;
	    background-color: #d74444
	}

	.btn-red:focus,
	.btn-red.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-red:focus,
	.btn-red:active,
	.btn-red.active {
	    background-color: #811b1b
	}

	.btn-red.dropdown-toggle {
	    background-color: #d32f2f !important
	}

	.btn-red.dropdown-toggle:hover,
	.btn-red.dropdown-toggle:focus {
	    background-color: #d74444 !important
	}

	.btn-red:not([disabled]):not(.disabled):active,
	.btn-red:not([disabled]):not(.disabled).active,
	.show>.btn-red.dropdown-toggle {
	    background-color: #811b1b !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-red:not([disabled]):not(.disabled):active:focus,
	.btn-red:not([disabled]):not(.disabled).active:focus,
	.show>.btn-red.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.red-ic {
	    color: #d32f2f !important
	}

	.red-ic:hover,
	.red-ic:focus {
	    color: #d32f2f
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-red {
	    color: #fff
	}

	.btn-outline-red {
	    color: #d32f2f !important;
	    background-color: transparent !important;
	    border: 2px solid #d32f2f !important
	}

	.btn-outline-red:hover,
	.btn-outline-red:focus,
	.btn-outline-red:active,
	.btn-outline-red:active:focus,
	.btn-outline-red.active {
	    color: #d32f2f !important;
	    background-color: transparent !important;
	    border-color: #d32f2f !important
	}

	.btn-outline-red:not([disabled]):not(.disabled):active,
	.btn-outline-red:not([disabled]):not(.disabled).active,
	.show>.btn-outline-red.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #d32f2f !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-red:not([disabled]):not(.disabled):active:focus,
	.btn-outline-red:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-red.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-pink {
	    color: #fff;
	    background-color: #ec407a !important
	}

	.btn-pink:hover {
	    color: #fff;
	    background-color: #ee578a
	}

	.btn-pink:focus,
	.btn-pink.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-pink:focus,
	.btn-pink:active,
	.btn-pink.active {
	    background-color: #b41249
	}

	.btn-pink.dropdown-toggle {
	    background-color: #ec407a !important
	}

	.btn-pink.dropdown-toggle:hover,
	.btn-pink.dropdown-toggle:focus {
	    background-color: #ee578a !important
	}

	.btn-pink:not([disabled]):not(.disabled):active,
	.btn-pink:not([disabled]):not(.disabled).active,
	.show>.btn-pink.dropdown-toggle {
	    background-color: #b41249 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-pink:not([disabled]):not(.disabled):active:focus,
	.btn-pink:not([disabled]):not(.disabled).active:focus,
	.show>.btn-pink.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.pink-ic {
	    color: #ec407a !important
	}

	.pink-ic:hover,
	.pink-ic:focus {
	    color: #ec407a
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-pink {
	    color: #fff
	}

	.btn-outline-pink {
	    color: #ec407a !important;
	    background-color: transparent !important;
	    border: 2px solid #ec407a !important
	}

	.btn-outline-pink:hover,
	.btn-outline-pink:focus,
	.btn-outline-pink:active,
	.btn-outline-pink:active:focus,
	.btn-outline-pink.active {
	    color: #ec407a !important;
	    background-color: transparent !important;
	    border-color: #ec407a !important
	}

	.btn-outline-pink:not([disabled]):not(.disabled):active,
	.btn-outline-pink:not([disabled]):not(.disabled).active,
	.show>.btn-outline-pink.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #ec407a !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-pink:not([disabled]):not(.disabled):active:focus,
	.btn-outline-pink:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-pink.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-purple {
	    color: #fff;
	    background-color: #8e24aa !important
	}

	.btn-purple:hover {
	    color: #fff;
	    background-color: #a028bf
	}

	.btn-purple:focus,
	.btn-purple.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-purple:focus,
	.btn-purple:active,
	.btn-purple.active {
	    background-color: #481256
	}

	.btn-purple.dropdown-toggle {
	    background-color: #8e24aa !important
	}

	.btn-purple.dropdown-toggle:hover,
	.btn-purple.dropdown-toggle:focus {
	    background-color: #a028bf !important
	}

	.btn-purple:not([disabled]):not(.disabled):active,
	.btn-purple:not([disabled]):not(.disabled).active,
	.show>.btn-purple.dropdown-toggle {
	    background-color: #481256 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-purple:not([disabled]):not(.disabled):active:focus,
	.btn-purple:not([disabled]):not(.disabled).active:focus,
	.show>.btn-purple.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.purple-ic {
	    color: #8e24aa !important
	}

	.purple-ic:hover,
	.purple-ic:focus {
	    color: #8e24aa
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-purple {
	    color: #fff
	}

	.btn-outline-purple {
	    color: #8e24aa !important;
	    background-color: transparent !important;
	    border: 2px solid #8e24aa !important
	}

	.btn-outline-purple:hover,
	.btn-outline-purple:focus,
	.btn-outline-purple:active,
	.btn-outline-purple:active:focus,
	.btn-outline-purple.active {
	    color: #8e24aa !important;
	    background-color: transparent !important;
	    border-color: #8e24aa !important
	}

	.btn-outline-purple:not([disabled]):not(.disabled):active,
	.btn-outline-purple:not([disabled]):not(.disabled).active,
	.show>.btn-outline-purple.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #8e24aa !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-purple:not([disabled]):not(.disabled):active:focus,
	.btn-outline-purple:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-purple.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-deep-purple {
	    color: #fff;
	    background-color: #512da8 !important
	}

	.btn-deep-purple:hover {
	    color: #fff;
	    background-color: #5b32bc
	}

	.btn-deep-purple:focus,
	.btn-deep-purple.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-deep-purple:focus,
	.btn-deep-purple:active,
	.btn-deep-purple.active {
	    background-color: #2a1758
	}

	.btn-deep-purple.dropdown-toggle {
	    background-color: #512da8 !important
	}

	.btn-deep-purple.dropdown-toggle:hover,
	.btn-deep-purple.dropdown-toggle:focus {
	    background-color: #5b32bc !important
	}

	.btn-deep-purple:not([disabled]):not(.disabled):active,
	.btn-deep-purple:not([disabled]):not(.disabled).active,
	.show>.btn-deep-purple.dropdown-toggle {
	    background-color: #2a1758 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-deep-purple:not([disabled]):not(.disabled):active:focus,
	.btn-deep-purple:not([disabled]):not(.disabled).active:focus,
	.show>.btn-deep-purple.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.deep-purple-ic {
	    color: #512da8 !important
	}

	.deep-purple-ic:hover,
	.deep-purple-ic:focus {
	    color: #512da8
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-deep-purple {
	    color: #fff
	}

	.btn-outline-deep-purple {
	    color: #512da8 !important;
	    background-color: transparent !important;
	    border: 2px solid #512da8 !important
	}

	.btn-outline-deep-purple:hover,
	.btn-outline-deep-purple:focus,
	.btn-outline-deep-purple:active,
	.btn-outline-deep-purple:active:focus,
	.btn-outline-deep-purple.active {
	    color: #512da8 !important;
	    background-color: transparent !important;
	    border-color: #512da8 !important
	}

	.btn-outline-deep-purple:not([disabled]):not(.disabled):active,
	.btn-outline-deep-purple:not([disabled]):not(.disabled).active,
	.show>.btn-outline-deep-purple.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #512da8 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-deep-purple:not([disabled]):not(.disabled):active:focus,
	.btn-outline-deep-purple:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-deep-purple.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-indigo {
	    color: #fff;
	    background-color: #3f51b5 !important
	}

	.btn-indigo:hover {
	    color: #fff;
	    background-color: #4d5ec1
	}

	.btn-indigo:focus,
	.btn-indigo.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-indigo:focus,
	.btn-indigo:active,
	.btn-indigo.active {
	    background-color: #252f69
	}

	.btn-indigo.dropdown-toggle {
	    background-color: #3f51b5 !important
	}

	.btn-indigo.dropdown-toggle:hover,
	.btn-indigo.dropdown-toggle:focus {
	    background-color: #4d5ec1 !important
	}

	.btn-indigo:not([disabled]):not(.disabled):active,
	.btn-indigo:not([disabled]):not(.disabled).active,
	.show>.btn-indigo.dropdown-toggle {
	    background-color: #252f69 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-indigo:not([disabled]):not(.disabled):active:focus,
	.btn-indigo:not([disabled]):not(.disabled).active:focus,
	.show>.btn-indigo.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.indigo-ic {
	    color: #3f51b5 !important
	}

	.indigo-ic:hover,
	.indigo-ic:focus {
	    color: #3f51b5
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-indigo {
	    color: #fff
	}

	.btn-outline-indigo {
	    color: #3f51b5 !important;
	    background-color: transparent !important;
	    border: 2px solid #3f51b5 !important
	}

	.btn-outline-indigo:hover,
	.btn-outline-indigo:focus,
	.btn-outline-indigo:active,
	.btn-outline-indigo:active:focus,
	.btn-outline-indigo.active {
	    color: #3f51b5 !important;
	    background-color: transparent !important;
	    border-color: #3f51b5 !important
	}

	.btn-outline-indigo:not([disabled]):not(.disabled):active,
	.btn-outline-indigo:not([disabled]):not(.disabled).active,
	.show>.btn-outline-indigo.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #3f51b5 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-indigo:not([disabled]):not(.disabled):active:focus,
	.btn-outline-indigo:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-indigo.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-blue {
	    color: #fff;
	    background-color: #1976d2 !important
	}

	.btn-blue:hover {
	    color: #fff;
	    background-color: #2083e4
	}

	.btn-blue:focus,
	.btn-blue.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-blue:focus,
	.btn-blue:active,
	.btn-blue.active {
	    background-color: #0e4377
	}

	.btn-blue.dropdown-toggle {
	    background-color: #1976d2 !important
	}

	.btn-blue.dropdown-toggle:hover,
	.btn-blue.dropdown-toggle:focus {
	    background-color: #2083e4 !important
	}

	.btn-blue:not([disabled]):not(.disabled):active,
	.btn-blue:not([disabled]):not(.disabled).active,
	.show>.btn-blue.dropdown-toggle {
	    background-color: #0e4377 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-blue:not([disabled]):not(.disabled):active:focus,
	.btn-blue:not([disabled]):not(.disabled).active:focus,
	.show>.btn-blue.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.blue-ic {
	    color: #1976d2 !important
	}

	.blue-ic:hover,
	.blue-ic:focus {
	    color: #1976d2
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-blue {
	    color: #fff
	}

	.btn-outline-blue {
	    color: #1976d2 !important;
	    background-color: transparent !important;
	    border: 2px solid #1976d2 !important
	}

	.btn-outline-blue:hover,
	.btn-outline-blue:focus,
	.btn-outline-blue:active,
	.btn-outline-blue:active:focus,
	.btn-outline-blue.active {
	    color: #1976d2 !important;
	    background-color: transparent !important;
	    border-color: #1976d2 !important
	}

	.btn-outline-blue:not([disabled]):not(.disabled):active,
	.btn-outline-blue:not([disabled]):not(.disabled).active,
	.show>.btn-outline-blue.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #1976d2 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-blue:not([disabled]):not(.disabled):active:focus,
	.btn-outline-blue:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-blue.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light-blue {
	    color: #fff;
	    background-color: #82b1ff !important
	}

	.btn-light-blue:hover {
	    color: #fff;
	    background-color: #9cc1ff
	}

	.btn-light-blue:focus,
	.btn-light-blue.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light-blue:focus,
	.btn-light-blue:active,
	.btn-light-blue.active {
	    background-color: #1c71ff
	}

	.btn-light-blue.dropdown-toggle {
	    background-color: #82b1ff !important
	}

	.btn-light-blue.dropdown-toggle:hover,
	.btn-light-blue.dropdown-toggle:focus {
	    background-color: #9cc1ff !important
	}

	.btn-light-blue:not([disabled]):not(.disabled):active,
	.btn-light-blue:not([disabled]):not(.disabled).active,
	.show>.btn-light-blue.dropdown-toggle {
	    background-color: #1c71ff !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light-blue:not([disabled]):not(.disabled):active:focus,
	.btn-light-blue:not([disabled]):not(.disabled).active:focus,
	.show>.btn-light-blue.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.light-blue-ic {
	    color: #82b1ff !important
	}

	.light-blue-ic:hover,
	.light-blue-ic:focus {
	    color: #82b1ff
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-light-blue {
	    color: #fff
	}

	.btn-outline-light-blue {
	    color: #82b1ff !important;
	    background-color: transparent !important;
	    border: 2px solid #82b1ff !important
	}

	.btn-outline-light-blue:hover,
	.btn-outline-light-blue:focus,
	.btn-outline-light-blue:active,
	.btn-outline-light-blue:active:focus,
	.btn-outline-light-blue.active {
	    color: #82b1ff !important;
	    background-color: transparent !important;
	    border-color: #82b1ff !important
	}

	.btn-outline-light-blue:not([disabled]):not(.disabled):active,
	.btn-outline-light-blue:not([disabled]):not(.disabled).active,
	.show>.btn-outline-light-blue.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #82b1ff !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-light-blue:not([disabled]):not(.disabled):active:focus,
	.btn-outline-light-blue:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-light-blue.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-cyan {
	    color: #fff;
	    background-color: #00bcd4 !important
	}

	.btn-cyan:hover {
	    color: #fff;
	    background-color: #00d3ee
	}

	.btn-cyan:focus,
	.btn-cyan.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-cyan:focus,
	.btn-cyan:active,
	.btn-cyan.active {
	    background-color: #00626e
	}

	.btn-cyan.dropdown-toggle {
	    background-color: #00bcd4 !important
	}

	.btn-cyan.dropdown-toggle:hover,
	.btn-cyan.dropdown-toggle:focus {
	    background-color: #00d3ee !important
	}

	.btn-cyan:not([disabled]):not(.disabled):active,
	.btn-cyan:not([disabled]):not(.disabled).active,
	.show>.btn-cyan.dropdown-toggle {
	    background-color: #00626e !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-cyan:not([disabled]):not(.disabled):active:focus,
	.btn-cyan:not([disabled]):not(.disabled).active:focus,
	.show>.btn-cyan.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.cyan-ic {
	    color: #00bcd4 !important
	}

	.cyan-ic:hover,
	.cyan-ic:focus {
	    color: #00bcd4
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-cyan {
	    color: #fff
	}

	.btn-outline-cyan {
	    color: #00bcd4 !important;
	    background-color: transparent !important;
	    border: 2px solid #00bcd4 !important
	}

	.btn-outline-cyan:hover,
	.btn-outline-cyan:focus,
	.btn-outline-cyan:active,
	.btn-outline-cyan:active:focus,
	.btn-outline-cyan.active {
	    color: #00bcd4 !important;
	    background-color: transparent !important;
	    border-color: #00bcd4 !important
	}

	.btn-outline-cyan:not([disabled]):not(.disabled):active,
	.btn-outline-cyan:not([disabled]):not(.disabled).active,
	.show>.btn-outline-cyan.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #00bcd4 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-cyan:not([disabled]):not(.disabled):active:focus,
	.btn-outline-cyan:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-cyan.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-teal {
	    color: #fff;
	    background-color: #00796b !important
	}

	.btn-teal:hover {
	    color: #fff;
	    background-color: #009382
	}

	.btn-teal:focus,
	.btn-teal.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-teal:focus,
	.btn-teal:active,
	.btn-teal.active {
	    background-color: #001311
	}

	.btn-teal.dropdown-toggle {
	    background-color: #00796b !important
	}

	.btn-teal.dropdown-toggle:hover,
	.btn-teal.dropdown-toggle:focus {
	    background-color: #009382 !important
	}

	.btn-teal:not([disabled]):not(.disabled):active,
	.btn-teal:not([disabled]):not(.disabled).active,
	.show>.btn-teal.dropdown-toggle {
	    background-color: #001311 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-teal:not([disabled]):not(.disabled):active:focus,
	.btn-teal:not([disabled]):not(.disabled).active:focus,
	.show>.btn-teal.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.teal-ic {
	    color: #00796b !important
	}

	.teal-ic:hover,
	.teal-ic:focus {
	    color: #00796b
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-teal {
	    color: #fff
	}

	.btn-outline-teal {
	    color: #00796b !important;
	    background-color: transparent !important;
	    border: 2px solid #00796b !important
	}

	.btn-outline-teal:hover,
	.btn-outline-teal:focus,
	.btn-outline-teal:active,
	.btn-outline-teal:active:focus,
	.btn-outline-teal.active {
	    color: #00796b !important;
	    background-color: transparent !important;
	    border-color: #00796b !important
	}

	.btn-outline-teal:not([disabled]):not(.disabled):active,
	.btn-outline-teal:not([disabled]):not(.disabled).active,
	.show>.btn-outline-teal.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #00796b !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-teal:not([disabled]):not(.disabled):active:focus,
	.btn-outline-teal:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-teal.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-green {
	    color: #fff;
	    background-color: #388e3c !important
	}

	.btn-green:hover {
	    color: #fff;
	    background-color: #3fa044
	}

	.btn-green:focus,
	.btn-green.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-green:focus,
	.btn-green:active,
	.btn-green.active {
	    background-color: #1b451d
	}

	.btn-green.dropdown-toggle {
	    background-color: #388e3c !important
	}

	.btn-green.dropdown-toggle:hover,
	.btn-green.dropdown-toggle:focus {
	    background-color: #3fa044 !important
	}

	.btn-green:not([disabled]):not(.disabled):active,
	.btn-green:not([disabled]):not(.disabled).active,
	.show>.btn-green.dropdown-toggle {
	    background-color: #1b451d !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-green:not([disabled]):not(.disabled):active:focus,
	.btn-green:not([disabled]):not(.disabled).active:focus,
	.show>.btn-green.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.green-ic {
	    color: #388e3c !important
	}

	.green-ic:hover,
	.green-ic:focus {
	    color: #388e3c
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-green {
	    color: #fff
	}

	.btn-outline-green {
	    color: #388e3c !important;
	    background-color: transparent !important;
	    border: 2px solid #388e3c !important
	}

	.btn-outline-green:hover,
	.btn-outline-green:focus,
	.btn-outline-green:active,
	.btn-outline-green:active:focus,
	.btn-outline-green.active {
	    color: #388e3c !important;
	    background-color: transparent !important;
	    border-color: #388e3c !important
	}

	.btn-outline-green:not([disabled]):not(.disabled):active,
	.btn-outline-green:not([disabled]):not(.disabled).active,
	.show>.btn-outline-green.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #388e3c !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-green:not([disabled]):not(.disabled):active:focus,
	.btn-outline-green:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-green.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light-green {
	    color: #fff;
	    background-color: #8bc34a !important
	}

	.btn-light-green:hover {
	    color: #fff;
	    background-color: #97c95d
	}

	.btn-light-green:focus,
	.btn-light-green.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light-green:focus,
	.btn-light-green:active,
	.btn-light-green.active {
	    background-color: #577d2a
	}

	.btn-light-green.dropdown-toggle {
	    background-color: #8bc34a !important
	}

	.btn-light-green.dropdown-toggle:hover,
	.btn-light-green.dropdown-toggle:focus {
	    background-color: #97c95d !important
	}

	.btn-light-green:not([disabled]):not(.disabled):active,
	.btn-light-green:not([disabled]):not(.disabled).active,
	.show>.btn-light-green.dropdown-toggle {
	    background-color: #577d2a !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light-green:not([disabled]):not(.disabled):active:focus,
	.btn-light-green:not([disabled]):not(.disabled).active:focus,
	.show>.btn-light-green.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.light-green-ic {
	    color: #8bc34a !important
	}

	.light-green-ic:hover,
	.light-green-ic:focus {
	    color: #8bc34a
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-light-green {
	    color: #fff
	}

	.btn-outline-light-green {
	    color: #8bc34a !important;
	    background-color: transparent !important;
	    border: 2px solid #8bc34a !important
	}

	.btn-outline-light-green:hover,
	.btn-outline-light-green:focus,
	.btn-outline-light-green:active,
	.btn-outline-light-green:active:focus,
	.btn-outline-light-green.active {
	    color: #8bc34a !important;
	    background-color: transparent !important;
	    border-color: #8bc34a !important
	}

	.btn-outline-light-green:not([disabled]):not(.disabled):active,
	.btn-outline-light-green:not([disabled]):not(.disabled).active,
	.show>.btn-outline-light-green.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #8bc34a !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-light-green:not([disabled]):not(.disabled):active:focus,
	.btn-outline-light-green:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-light-green.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-lime {
	    color: #fff;
	    background-color: #afb42b !important
	}

	.btn-lime:hover {
	    color: #fff;
	    background-color: #c3c930
	}

	.btn-lime:focus,
	.btn-lime.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-lime:focus,
	.btn-lime:active,
	.btn-lime.active {
	    background-color: #5f6217
	}

	.btn-lime.dropdown-toggle {
	    background-color: #afb42b !important
	}

	.btn-lime.dropdown-toggle:hover,
	.btn-lime.dropdown-toggle:focus {
	    background-color: #c3c930 !important
	}

	.btn-lime:not([disabled]):not(.disabled):active,
	.btn-lime:not([disabled]):not(.disabled).active,
	.show>.btn-lime.dropdown-toggle {
	    background-color: #5f6217 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-lime:not([disabled]):not(.disabled):active:focus,
	.btn-lime:not([disabled]):not(.disabled).active:focus,
	.show>.btn-lime.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.lime-ic {
	    color: #afb42b !important
	}

	.lime-ic:hover,
	.lime-ic:focus {
	    color: #afb42b
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-lime {
	    color: #fff
	}

	.btn-outline-lime {
	    color: #afb42b !important;
	    background-color: transparent !important;
	    border: 2px solid #afb42b !important
	}

	.btn-outline-lime:hover,
	.btn-outline-lime:focus,
	.btn-outline-lime:active,
	.btn-outline-lime:active:focus,
	.btn-outline-lime.active {
	    color: #afb42b !important;
	    background-color: transparent !important;
	    border-color: #afb42b !important
	}

	.btn-outline-lime:not([disabled]):not(.disabled):active,
	.btn-outline-lime:not([disabled]):not(.disabled).active,
	.show>.btn-outline-lime.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #afb42b !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-lime:not([disabled]):not(.disabled):active:focus,
	.btn-outline-lime:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-lime.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-yellow {
	    color: #fff;
	    background-color: #fbc02d !important
	}

	.btn-yellow:hover {
	    color: #fff;
	    background-color: #fbc846
	}

	.btn-yellow:focus,
	.btn-yellow.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-yellow:focus,
	.btn-yellow:active,
	.btn-yellow.active {
	    background-color: #be8904
	}

	.btn-yellow.dropdown-toggle {
	    background-color: #fbc02d !important
	}

	.btn-yellow.dropdown-toggle:hover,
	.btn-yellow.dropdown-toggle:focus {
	    background-color: #fbc846 !important
	}

	.btn-yellow:not([disabled]):not(.disabled):active,
	.btn-yellow:not([disabled]):not(.disabled).active,
	.show>.btn-yellow.dropdown-toggle {
	    background-color: #be8904 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-yellow:not([disabled]):not(.disabled):active:focus,
	.btn-yellow:not([disabled]):not(.disabled).active:focus,
	.show>.btn-yellow.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.yellow-ic {
	    color: #fbc02d !important
	}

	.yellow-ic:hover,
	.yellow-ic:focus {
	    color: #fbc02d
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-yellow {
	    color: #fff
	}

	.btn-outline-yellow {
	    color: #fbc02d !important;
	    background-color: transparent !important;
	    border: 2px solid #fbc02d !important
	}

	.btn-outline-yellow:hover,
	.btn-outline-yellow:focus,
	.btn-outline-yellow:active,
	.btn-outline-yellow:active:focus,
	.btn-outline-yellow.active {
	    color: #fbc02d !important;
	    background-color: transparent !important;
	    border-color: #fbc02d !important
	}

	.btn-outline-yellow:not([disabled]):not(.disabled):active,
	.btn-outline-yellow:not([disabled]):not(.disabled).active,
	.show>.btn-outline-yellow.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #fbc02d !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-yellow:not([disabled]):not(.disabled):active:focus,
	.btn-outline-yellow:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-yellow.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-amber {
	    color: #fff;
	    background-color: #ffa000 !important
	}

	.btn-amber:hover {
	    color: #fff;
	    background-color: #ffaa1a
	}

	.btn-amber:focus,
	.btn-amber.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-amber:focus,
	.btn-amber:active,
	.btn-amber.active {
	    background-color: #996000
	}

	.btn-amber.dropdown-toggle {
	    background-color: #ffa000 !important
	}

	.btn-amber.dropdown-toggle:hover,
	.btn-amber.dropdown-toggle:focus {
	    background-color: #ffaa1a !important
	}

	.btn-amber:not([disabled]):not(.disabled):active,
	.btn-amber:not([disabled]):not(.disabled).active,
	.show>.btn-amber.dropdown-toggle {
	    background-color: #996000 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-amber:not([disabled]):not(.disabled):active:focus,
	.btn-amber:not([disabled]):not(.disabled).active:focus,
	.show>.btn-amber.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.amber-ic {
	    color: #ffa000 !important
	}

	.amber-ic:hover,
	.amber-ic:focus {
	    color: #ffa000
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-amber {
	    color: #fff
	}

	.btn-outline-amber {
	    color: #ffa000 !important;
	    background-color: transparent !important;
	    border: 2px solid #ffa000 !important
	}

	.btn-outline-amber:hover,
	.btn-outline-amber:focus,
	.btn-outline-amber:active,
	.btn-outline-amber:active:focus,
	.btn-outline-amber.active {
	    color: #ffa000 !important;
	    background-color: transparent !important;
	    border-color: #ffa000 !important
	}

	.btn-outline-amber:not([disabled]):not(.disabled):active,
	.btn-outline-amber:not([disabled]):not(.disabled).active,
	.show>.btn-outline-amber.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #ffa000 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-amber:not([disabled]):not(.disabled):active:focus,
	.btn-outline-amber:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-amber.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-orange {
	    color: #fff;
	    background-color: #f57c00 !important
	}

	.btn-orange:hover {
	    color: #fff;
	    background-color: #ff8910
	}

	.btn-orange:focus,
	.btn-orange.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-orange:focus,
	.btn-orange:active,
	.btn-orange.active {
	    background-color: #8f4800
	}

	.btn-orange.dropdown-toggle {
	    background-color: #f57c00 !important
	}

	.btn-orange.dropdown-toggle:hover,
	.btn-orange.dropdown-toggle:focus {
	    background-color: #ff8910 !important
	}

	.btn-orange:not([disabled]):not(.disabled):active,
	.btn-orange:not([disabled]):not(.disabled).active,
	.show>.btn-orange.dropdown-toggle {
	    background-color: #8f4800 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-orange:not([disabled]):not(.disabled):active:focus,
	.btn-orange:not([disabled]):not(.disabled).active:focus,
	.show>.btn-orange.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.orange-ic {
	    color: #f57c00 !important
	}

	.orange-ic:hover,
	.orange-ic:focus {
	    color: #f57c00
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-orange {
	    color: #fff
	}

	.btn-outline-orange {
	    color: #f57c00 !important;
	    background-color: transparent !important;
	    border: 2px solid #f57c00 !important
	}

	.btn-outline-orange:hover,
	.btn-outline-orange:focus,
	.btn-outline-orange:active,
	.btn-outline-orange:active:focus,
	.btn-outline-orange.active {
	    color: #f57c00 !important;
	    background-color: transparent !important;
	    border-color: #f57c00 !important
	}

	.btn-outline-orange:not([disabled]):not(.disabled):active,
	.btn-outline-orange:not([disabled]):not(.disabled).active,
	.show>.btn-outline-orange.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #f57c00 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-orange:not([disabled]):not(.disabled):active:focus,
	.btn-outline-orange:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-orange.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-deep-orange {
	    color: #fff;
	    background-color: #ff7043 !important
	}

	.btn-deep-orange:hover {
	    color: #fff;
	    background-color: #ff835d
	}

	.btn-deep-orange:focus,
	.btn-deep-orange.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-deep-orange:focus,
	.btn-deep-orange:active,
	.btn-deep-orange.active {
	    background-color: #dc3500
	}

	.btn-deep-orange.dropdown-toggle {
	    background-color: #ff7043 !important
	}

	.btn-deep-orange.dropdown-toggle:hover,
	.btn-deep-orange.dropdown-toggle:focus {
	    background-color: #ff835d !important
	}

	.btn-deep-orange:not([disabled]):not(.disabled):active,
	.btn-deep-orange:not([disabled]):not(.disabled).active,
	.show>.btn-deep-orange.dropdown-toggle {
	    background-color: #dc3500 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-deep-orange:not([disabled]):not(.disabled):active:focus,
	.btn-deep-orange:not([disabled]):not(.disabled).active:focus,
	.show>.btn-deep-orange.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.deep-orange-ic {
	    color: #ff7043 !important
	}

	.deep-orange-ic:hover,
	.deep-orange-ic:focus {
	    color: #ff7043
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-deep-orange {
	    color: #fff
	}

	.btn-outline-deep-orange {
	    color: #ff7043 !important;
	    background-color: transparent !important;
	    border: 2px solid #ff7043 !important
	}

	.btn-outline-deep-orange:hover,
	.btn-outline-deep-orange:focus,
	.btn-outline-deep-orange:active,
	.btn-outline-deep-orange:active:focus,
	.btn-outline-deep-orange.active {
	    color: #ff7043 !important;
	    background-color: transparent !important;
	    border-color: #ff7043 !important
	}

	.btn-outline-deep-orange:not([disabled]):not(.disabled):active,
	.btn-outline-deep-orange:not([disabled]):not(.disabled).active,
	.show>.btn-outline-deep-orange.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #ff7043 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-deep-orange:not([disabled]):not(.disabled):active:focus,
	.btn-outline-deep-orange:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-deep-orange.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-brown {
	    color: #fff;
	    background-color: #795548 !important
	}

	.btn-brown:hover {
	    color: #fff;
	    background-color: #896052
	}

	.btn-brown:focus,
	.btn-brown.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-brown:focus,
	.btn-brown:active,
	.btn-brown.active {
	    background-color: #392822
	}

	.btn-brown.dropdown-toggle {
	    background-color: #795548 !important
	}

	.btn-brown.dropdown-toggle:hover,
	.btn-brown.dropdown-toggle:focus {
	    background-color: #896052 !important
	}

	.btn-brown:not([disabled]):not(.disabled):active,
	.btn-brown:not([disabled]):not(.disabled).active,
	.show>.btn-brown.dropdown-toggle {
	    background-color: #392822 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-brown:not([disabled]):not(.disabled):active:focus,
	.btn-brown:not([disabled]):not(.disabled).active:focus,
	.show>.btn-brown.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.brown-ic {
	    color: #795548 !important
	}

	.brown-ic:hover,
	.brown-ic:focus {
	    color: #795548
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-brown {
	    color: #fff
	}

	.btn-outline-brown {
	    color: #795548 !important;
	    background-color: transparent !important;
	    border: 2px solid #795548 !important
	}

	.btn-outline-brown:hover,
	.btn-outline-brown:focus,
	.btn-outline-brown:active,
	.btn-outline-brown:active:focus,
	.btn-outline-brown.active {
	    color: #795548 !important;
	    background-color: transparent !important;
	    border-color: #795548 !important
	}

	.btn-outline-brown:not([disabled]):not(.disabled):active,
	.btn-outline-brown:not([disabled]):not(.disabled).active,
	.show>.btn-outline-brown.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #795548 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-brown:not([disabled]):not(.disabled):active:focus,
	.btn-outline-brown:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-brown.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-grey {
	    color: #fff;
	    background-color: #616161 !important
	}

	.btn-grey:hover {
	    color: #fff;
	    background-color: #6e6e6e
	}

	.btn-grey:focus,
	.btn-grey.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-grey:focus,
	.btn-grey:active,
	.btn-grey.active {
	    background-color: #2e2e2e
	}

	.btn-grey.dropdown-toggle {
	    background-color: #616161 !important
	}

	.btn-grey.dropdown-toggle:hover,
	.btn-grey.dropdown-toggle:focus {
	    background-color: #6e6e6e !important
	}

	.btn-grey:not([disabled]):not(.disabled):active,
	.btn-grey:not([disabled]):not(.disabled).active,
	.show>.btn-grey.dropdown-toggle {
	    background-color: #2e2e2e !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-grey:not([disabled]):not(.disabled):active:focus,
	.btn-grey:not([disabled]):not(.disabled).active:focus,
	.show>.btn-grey.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.grey-ic {
	    color: #616161 !important
	}

	.grey-ic:hover,
	.grey-ic:focus {
	    color: #616161
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-grey {
	    color: #fff
	}

	.btn-outline-grey {
	    color: #616161 !important;
	    background-color: transparent !important;
	    border: 2px solid #616161 !important
	}

	.btn-outline-grey:hover,
	.btn-outline-grey:focus,
	.btn-outline-grey:active,
	.btn-outline-grey:active:focus,
	.btn-outline-grey.active {
	    color: #616161 !important;
	    background-color: transparent !important;
	    border-color: #616161 !important
	}

	.btn-outline-grey:not([disabled]):not(.disabled):active,
	.btn-outline-grey:not([disabled]):not(.disabled).active,
	.show>.btn-outline-grey.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #616161 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-grey:not([disabled]):not(.disabled):active:focus,
	.btn-outline-grey:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-grey.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-blue-grey {
	    color: #fff;
	    background-color: #78909c !important
	}

	.btn-blue-grey:hover {
	    color: #fff;
	    background-color: #879ca7
	}

	.btn-blue-grey:focus,
	.btn-blue-grey.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-blue-grey:focus,
	.btn-blue-grey:active,
	.btn-blue-grey.active {
	    background-color: #4a5b64
	}

	.btn-blue-grey.dropdown-toggle {
	    background-color: #78909c !important
	}

	.btn-blue-grey.dropdown-toggle:hover,
	.btn-blue-grey.dropdown-toggle:focus {
	    background-color: #879ca7 !important
	}

	.btn-blue-grey:not([disabled]):not(.disabled):active,
	.btn-blue-grey:not([disabled]):not(.disabled).active,
	.show>.btn-blue-grey.dropdown-toggle {
	    background-color: #4a5b64 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-blue-grey:not([disabled]):not(.disabled):active:focus,
	.btn-blue-grey:not([disabled]):not(.disabled).active:focus,
	.show>.btn-blue-grey.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.blue-grey-ic {
	    color: #78909c !important
	}

	.blue-grey-ic:hover,
	.blue-grey-ic:focus {
	    color: #78909c
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-blue-grey {
	    color: #fff
	}

	.btn-outline-blue-grey {
	    color: #78909c !important;
	    background-color: transparent !important;
	    border: 2px solid #78909c !important
	}

	.btn-outline-blue-grey:hover,
	.btn-outline-blue-grey:focus,
	.btn-outline-blue-grey:active,
	.btn-outline-blue-grey:active:focus,
	.btn-outline-blue-grey.active {
	    color: #78909c !important;
	    background-color: transparent !important;
	    border-color: #78909c !important
	}

	.btn-outline-blue-grey:not([disabled]):not(.disabled):active,
	.btn-outline-blue-grey:not([disabled]):not(.disabled).active,
	.show>.btn-outline-blue-grey.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #78909c !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-blue-grey:not([disabled]):not(.disabled):active:focus,
	.btn-outline-blue-grey:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-blue-grey.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-dark {
	    color: #fff;
	    background-color: #212121 !important
	}

	.btn-dark:hover {
	    color: #fff;
	    background-color: #2e2e2e
	}

	.btn-dark:focus,
	.btn-dark.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-dark:focus,
	.btn-dark:active,
	.btn-dark.active {
	    background-color: #000
	}

	.btn-dark.dropdown-toggle {
	    background-color: #212121 !important
	}

	.btn-dark.dropdown-toggle:hover,
	.btn-dark.dropdown-toggle:focus {
	    background-color: #2e2e2e !important
	}

	.btn-dark:not([disabled]):not(.disabled):active,
	.btn-dark:not([disabled]):not(.disabled).active,
	.show>.btn-dark.dropdown-toggle {
	    background-color: #000 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-dark:not([disabled]):not(.disabled):active:focus,
	.btn-dark:not([disabled]):not(.disabled).active:focus,
	.show>.btn-dark.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.dark-ic {
	    color: #212121 !important
	}

	.dark-ic:hover,
	.dark-ic:focus {
	    color: #212121
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-dark {
	    color: #fff
	}

	.btn-outline-dark {
	    color: #212121 !important;
	    background-color: transparent !important;
	    border: 2px solid #212121 !important
	}

	.btn-outline-dark:hover,
	.btn-outline-dark:focus,
	.btn-outline-dark:active,
	.btn-outline-dark:active:focus,
	.btn-outline-dark.active {
	    color: #212121 !important;
	    background-color: transparent !important;
	    border-color: #212121 !important
	}

	.btn-outline-dark:not([disabled]):not(.disabled):active,
	.btn-outline-dark:not([disabled]):not(.disabled).active,
	.show>.btn-outline-dark.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #212121 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-dark:not([disabled]):not(.disabled):active:focus,
	.btn-outline-dark:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-dark.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light {
	    color: #000;
	    background-color: #e0e0e0 !important
	}

	.btn-light:hover {
	    color: #000;
	    background-color: #ededed
	}

	.btn-light:focus,
	.btn-light.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light:focus,
	.btn-light:active,
	.btn-light.active {
	    background-color: #adadad
	}

	.btn-light.dropdown-toggle {
	    background-color: #e0e0e0 !important
	}

	.btn-light.dropdown-toggle:hover,
	.btn-light.dropdown-toggle:focus {
	    background-color: #ededed !important
	}

	.btn-light:not([disabled]):not(.disabled):active,
	.btn-light:not([disabled]):not(.disabled).active,
	.show>.btn-light.dropdown-toggle {
	    background-color: #adadad !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-light:not([disabled]):not(.disabled):active:focus,
	.btn-light:not([disabled]):not(.disabled).active:focus,
	.show>.btn-light.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.light-ic {
	    color: #e0e0e0 !important
	}

	.light-ic:hover,
	.light-ic:focus {
	    color: #e0e0e0
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #000
	}

	table.table a.btn.btn-light {
	    color: #000
	}

	.btn-outline-light {
	    color: #e0e0e0 !important;
	    background-color: transparent !important;
	    border: 2px solid #e0e0e0 !important
	}

	.btn-outline-light:hover,
	.btn-outline-light:focus,
	.btn-outline-light:active,
	.btn-outline-light:active:focus,
	.btn-outline-light.active {
	    color: #e0e0e0 !important;
	    background-color: transparent !important;
	    border-color: #e0e0e0 !important
	}

	.btn-outline-light:not([disabled]):not(.disabled):active,
	.btn-outline-light:not([disabled]):not(.disabled).active,
	.show>.btn-outline-light.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #e0e0e0 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-light:not([disabled]):not(.disabled):active:focus,
	.btn-outline-light:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-light.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-white {
	    color: #000;
	    background-color: #fff !important
	}

	.btn-white:hover {
	    color: #000;
	    background-color: #fff
	}

	.btn-white:focus,
	.btn-white.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-white:focus,
	.btn-white:active,
	.btn-white.active {
	    background-color: #ccc
	}

	.btn-white.dropdown-toggle {
	    background-color: #fff !important
	}

	.btn-white.dropdown-toggle:hover,
	.btn-white.dropdown-toggle:focus {
	    background-color: #fff !important
	}

	.btn-white:not([disabled]):not(.disabled):active,
	.btn-white:not([disabled]):not(.disabled).active,
	.show>.btn-white.dropdown-toggle {
	    background-color: #ccc !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-white:not([disabled]):not(.disabled):active:focus,
	.btn-white:not([disabled]):not(.disabled).active:focus,
	.show>.btn-white.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.white-ic {
	    color: #fff !important
	}

	.white-ic:hover,
	.white-ic:focus {
	    color: #fff
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #000
	}

	table.table a.btn.btn-white {
	    color: #000
	}

	.btn-outline-white {
	    color: #fff !important;
	    background-color: transparent !important;
	    border: 2px solid #fff !important
	}

	.btn-outline-white:hover,
	.btn-outline-white:focus,
	.btn-outline-white:active,
	.btn-outline-white:active:focus,
	.btn-outline-white.active {
	    color: #fff !important;
	    background-color: transparent !important;
	    border-color: #fff !important
	}

	.btn-outline-white:not([disabled]):not(.disabled):active,
	.btn-outline-white:not([disabled]):not(.disabled).active,
	.show>.btn-outline-white.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #fff !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-white:not([disabled]):not(.disabled):active:focus,
	.btn-outline-white:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-white.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-black {
	    color: #fff;
	    background-color: #000 !important
	}

	.btn-black:hover {
	    color: #fff;
	    background-color: #0d0d0d
	}

	.btn-black:focus,
	.btn-black.focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-black:focus,
	.btn-black:active,
	.btn-black.active {
	    background-color: #000
	}

	.btn-black.dropdown-toggle {
	    background-color: #000 !important
	}

	.btn-black.dropdown-toggle:hover,
	.btn-black.dropdown-toggle:focus {
	    background-color: #0d0d0d !important
	}

	.btn-black:not([disabled]):not(.disabled):active,
	.btn-black:not([disabled]):not(.disabled).active,
	.show>.btn-black.dropdown-toggle {
	    background-color: #000 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-black:not([disabled]):not(.disabled):active:focus,
	.btn-black:not([disabled]):not(.disabled).active:focus,
	.show>.btn-black.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.black-ic {
	    color: #000 !important
	}

	.black-ic:hover,
	.black-ic:focus {
	    color: #000
	}

	a.btn:not([href]):not([tabindex]),
	a.btn:not([href]):not([tabindex]):focus,
	a.btn:not([href]):not([tabindex]):hover {
	    color: #fff
	}

	table.table a.btn.btn-black {
	    color: #fff
	}

	.btn-outline-black {
	    color: #000 !important;
	    background-color: transparent !important;
	    border: 2px solid #000 !important
	}

	.btn-outline-black:hover,
	.btn-outline-black:focus,
	.btn-outline-black:active,
	.btn-outline-black:active:focus,
	.btn-outline-black.active {
	    color: #000 !important;
	    background-color: transparent !important;
	    border-color: #000 !important
	}

	.btn-outline-black:not([disabled]):not(.disabled):active,
	.btn-outline-black:not([disabled]):not(.disabled).active,
	.show>.btn-outline-black.dropdown-toggle {
	    background-color: transparent !important;
	    border-color: #000 !important;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn-outline-black:not([disabled]):not(.disabled):active:focus,
	.btn-outline-black:not([disabled]):not(.disabled).active:focus,
	.show>.btn-outline-black.dropdown-toggle:focus {
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.btn.purple-gradient {
	    color: #fff;
	    -webkit-transition: .5s ease;
	    transition: .5s ease
	}

	.btn.purple-gradient:hover,
	.btn.purple-gradient:focus,
	.btn.purple-gradient:active,
	.btn.purple-gradient:active:focus .btn.purple-gradient.active {
	    background: -webkit-gradient(linear, left top, left bottom, from(#ff88ce), to(#8f8bf7));
	    background: linear-gradient(#ff88ce, #8f8bf7)
	}

	.btn.peach-gradient {
	    color: #fff;
	    -webkit-transition: .5s ease;
	    transition: .5s ease
	}

	.btn.peach-gradient:hover,
	.btn.peach-gradient:focus,
	.btn.peach-gradient:active,
	.btn.peach-gradient:active:focus .btn.peach-gradient.active {
	    background: -webkit-gradient(linear, left top, left bottom, from(#ffdf89), to(#fc7b7b));
	    background: linear-gradient(#ffdf89, #fc7b7b)
	}

	.btn.aqua-gradient {
	    color: #fff;
	    -webkit-transition: .5s ease;
	    transition: .5s ease
	}

	.btn.aqua-gradient:hover,
	.btn.aqua-gradient:focus,
	.btn.aqua-gradient:active,
	.btn.aqua-gradient:active:focus .btn.aqua-gradient.active {
	    background: -webkit-gradient(linear, left top, left bottom, from(#3aa2ff), to(#1fffac));
	    background: linear-gradient(#3aa2ff, #1fffac)
	}

	.btn.blue-gradient {
	    color: #fff;
	    -webkit-transition: .5s ease;
	    transition: .5s ease
	}

	.btn.blue-gradient:hover,
	.btn.blue-gradient:focus,
	.btn.blue-gradient:active,
	.btn.blue-gradient:active:focus .btn.blue-gradient.active {
	    background: -webkit-gradient(linear, left top, left bottom, from(#5ed1fc), to(#3647b3));
	    background: linear-gradient(#5ed1fc, #3647b3)
	}

	.btn-warning:focus,
	.btn-warning:not(:disabled):not(.disabled).active,
	.btn-warning:not(:disabled):not(.disabled):active,
	.show>.btn-warning.dropdown-toggle {
	    color: #fff
	}

	.card {
	    font-weight: 400;
	    border: 0;
	    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
	    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.card[class*="border"] {
	    border: 1px solid #9e9e9e;
	    -webkit-box-shadow: none;
	    box-shadow: none
	}

	.card .card-body h1,
	.card .card-body h2,
	.card .card-body h3,
	.card .card-body h4,
	.card .card-body h5,
	.card .card-body h6 {
	    font-weight: 400
	}

	.card .card-body .card-title a {
	    -webkit-transition: 0.2s ease-in-out;
	    transition: 0.2s ease-in-out
	}

	.card .card-body .card-title a:hover {
	    -webkit-transition: 0.2s ease-in-out;
	    transition: 0.2s ease-in-out
	}

	.card .card-body .card-text {
	    font-size: .9rem;
	    font-weight: 400;
	    color: #747373
	}

	.card .md-form label {
	    font-weight: 300
	}

	.dropdown .dropdown-menu .dropdown-item:active {
	    background-color: #757575
	}

	.dropdown-submenu {
	    position: relative
	}

	.dropdown-submenu>.dropdown-menu {
	    top: 0;
	    left: 100%;
	    margin-top: -6px;
	    margin-left: 1px;
	    border-radius: 0 6px 6px 6px
	}

	.dropdown-submenu:hover>.dropdown-menu {
	    display: block
	}

	.md-form.input-group label {
	    top: 0;
	    margin-bottom: 0
	}

	.md-form.input-group .input-group-text {
	    background-color: #e0e0e0
	}

	.md-form.input-group .input-group-text.md-addon {
	    font-weight: 500;
	    background-color: transparent;
	    border: none
	}

	.md-form.input-group .form-control {
	    padding: .375rem .75rem;
	    margin: 0
	}

	.navbar {
	    font-weight: 300;
	    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
	    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.navbar form .md-form input {
	    margin: 0 5px 1px 8px
	}

	.navbar .breadcrumb {
	    padding: .3rem 0 0 1rem;
	    margin: 0;
	    font-size: 15px;
	    font-weight: 300;
	    background-color: inherit
	}

	.navbar .breadcrumb .breadcrumb-item {
	    color: #fff
	}

	.navbar .breadcrumb .breadcrumb-item.active {
	    color: rgba(255, 255, 255, 0.65)
	}

	.navbar .breadcrumb .breadcrumb-item:before {
	    color: rgba(255, 255, 255, 0.65)
	}

	.navbar .navbar-toggler {
	    border-width: 0;
	    outline: 0
	}

	.navbar .nav-flex-icons {
	    -webkit-box-orient: horizontal;
	    -webkit-box-direction: normal;
	    -ms-flex-direction: row;
	    flex-direction: row
	}

	@media (max-width: 992px) {
	    .navbar .container {
	        width: 100%
	    }

	    .navbar .container .navbar-toggler-right {
	        right: 0
	    }
	}

	.navbar .nav-item .nav-link {
	    display: block
	}

	.navbar .nav-item .nav-link.disabled:active {
	    pointer-events: none
	}

	.navbar .nav-item .nav-link .fas,
	.navbar .nav-item .nav-link .fab,
	.navbar .nav-item .nav-link .far {
	    padding-right: 3px;
	    padding-left: 3px
	}

	@media (max-width: 992px) {
	    .navbar .nav-item .nav-link {
	        padding-right: 6px;
	        padding-left: 6px
	    }
	}

	.navbar .dropdown-menu {
	    position: absolute !important;
	    margin-top: 0
	}

	.navbar .dropdown-menu a {
	    padding: 10px;
	    font-size: .9375rem;
	    font-weight: 300
	}

	.navbar .dropdown-menu a:not(.active) {
	    color: #000
	}

	@media (max-width: 600px) {
	    .navbar .dropdown-menu form {
	        width: 17rem
	    }
	}

	@media (min-width: 600px) {
	    .navbar .dropdown-menu form {
	        width: 22rem
	    }
	}

	.navbar.navbar-light .navbar-nav .nav-item .nav-link.disbled {
	    color: rgba(0, 0, 0, 0.3)
	}

	.navbar.navbar-light .navbar-nav .nav-item .nav-link.disbled:hover {
	    color: rgba(0, 0, 0, 0.3)
	}

	.navbar.navbar-light .navbar-toggler-icon {
	    cursor: pointer;
	    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.9)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E")
	}

	.navbar.navbar-light .breadcrumb .nav-item .nav-link,
	.navbar.navbar-light .navbar-nav .nav-item .nav-link {
	    color: #000;
	    -webkit-transition: .35s;
	    transition: .35s
	}

	.navbar.navbar-light .breadcrumb .nav-item .nav-link:hover,
	.navbar.navbar-light .navbar-nav .nav-item .nav-link:hover {
	    color: rgba(0, 0, 0, 0.7)
	}

	.navbar.navbar-light .breadcrumb .nav-item.active>.nav-link,
	.navbar.navbar-light .navbar-nav .nav-item.active>.nav-link {
	    background-color: rgba(0, 0, 0, 0.1)
	}

	.navbar.navbar-light .breadcrumb .nav-item.active>.nav-link:hover,
	.navbar.navbar-light .navbar-nav .nav-item.active>.nav-link:hover {
	    color: #000
	}

	.navbar.navbar-light .navbar-toggler {
	    color: #000
	}

	.navbar.navbar-light form .md-form input {
	    border-bottom: 1px solid #000
	}

	.navbar.navbar-light form .md-form input:focus:not([readonly]) {
	    border-color: #4285f4
	}

	.navbar.navbar-light form .md-form .form-control {
	    color: #000
	}

	.navbar.navbar-light form .md-form .form-control::-webkit-input-placeholder {
	    font-weight: 300;
	    color: #000
	}

	.navbar.navbar-light form .md-form .form-control::-moz-placeholder {
	    font-weight: 300;
	    color: #000
	}

	.navbar.navbar-light form .md-form .form-control:-ms-input-placeholder {
	    font-weight: 300;
	    color: #000
	}

	.navbar.navbar-light form .md-form .form-control::-ms-input-placeholder {
	    font-weight: 300;
	    color: #000
	}

	.navbar.navbar-light form .md-form .form-control::placeholder {
	    font-weight: 300;
	    color: #000
	}

	.navbar.navbar-dark .navbar-nav .nav-item .nav-link.disbled {
	    color: rgba(255, 255, 255, 0.25)
	}

	.navbar.navbar-dark .navbar-nav .nav-item .nav-link.disbled:hover {
	    color: rgba(255, 255, 255, 0.25)
	}

	.navbar.navbar-dark .navbar-toggler-icon {
	    cursor: pointer;
	    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.9)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E")
	}

	.navbar.navbar-dark .breadcrumb .nav-item .nav-link,
	.navbar.navbar-dark .navbar-nav .nav-item .nav-link {
	    color: #fff;
	    -webkit-transition: .35s;
	    transition: .35s
	}

	.navbar.navbar-dark .breadcrumb .nav-item .nav-link:hover,
	.navbar.navbar-dark .navbar-nav .nav-item .nav-link:hover {
	    color: rgba(255, 255, 255, 0.75)
	}

	.navbar.navbar-dark .breadcrumb .nav-item.active>.nav-link,
	.navbar.navbar-dark .navbar-nav .nav-item.active>.nav-link {
	    background-color: rgba(255, 255, 255, 0.1)
	}

	.navbar.navbar-dark .breadcrumb .nav-item.active>.nav-link:hover,
	.navbar.navbar-dark .navbar-nav .nav-item.active>.nav-link:hover {
	    color: #fff
	}

	.navbar.navbar-dark .navbar-toggler {
	    color: #fff
	}

	.navbar.navbar-dark form .md-form input {
	    border-bottom: 1px solid #fff
	}

	.navbar.navbar-dark form .md-form input:focus:not([readonly]) {
	    border-color: #4285f4
	}

	.navbar.navbar-dark form .md-form .form-control {
	    color: #fff
	}

	.navbar.navbar-dark form .md-form .form-control::-webkit-input-placeholder {
	    font-weight: 300;
	    color: #fff
	}

	.navbar.navbar-dark form .md-form .form-control::-moz-placeholder {
	    font-weight: 300;
	    color: #fff
	}

	.navbar.navbar-dark form .md-form .form-control:-ms-input-placeholder {
	    font-weight: 300;
	    color: #fff
	}

	.navbar.navbar-dark form .md-form .form-control::-ms-input-placeholder {
	    font-weight: 300;
	    color: #fff
	}

	.navbar.navbar-dark form .md-form .form-control::placeholder {
	    font-weight: 300;
	    color: #fff
	}

	@media (min-width: 600px) {
	    .navbar.scrolling-navbar {
	        padding-top: 12px;
	        padding-bottom: 12px;
	        -webkit-transition: background 0.5s ease-in-out, padding 0.5s ease-in-out;
	        transition: background 0.5s ease-in-out, padding 0.5s ease-in-out
	    }

	    .navbar.scrolling-navbar .navbar-nav>li {
	        -webkit-transition-duration: 1s;
	        transition-duration: 1s
	    }

	    .navbar.scrolling-navbar.top-nav-collapse {
	        padding-top: 5px;
	        padding-bottom: 5px
	    }
	}

	.pagination .page-item.active .page-link {
	    color: #fff;
	    background-color: #4285f4;
	    border-radius: .125rem;
	    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
	    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
	    -webkit-transition: all 0.2s linear;
	    transition: all 0.2s linear
	}

	.pagination .page-item.active .page-link:hover {
	    background-color: #4285f4
	}

	.pagination .page-item.disabled .page-link {
	    color: #868e96
	}

	.pagination .page-item .page-link {
	    font-size: .9rem;
	    color: #212529;
	    background-color: transparent;
	    border: 0;
	    outline: 0;
	    -webkit-transition: all 0.3s linear;
	    transition: all 0.3s linear
	}

	.pagination .page-item .page-link:hover {
	    background-color: #eee;
	    border-radius: .125rem;
	    -webkit-transition: all 0.3s linear;
	    transition: all 0.3s linear
	}

	.pagination .page-item .page-link:focus {
	    background-color: transparent;
	    -webkit-box-shadow: none;
	    box-shadow: none
	}

	.pagination.pagination-lg .page-item .page-link {
	    font-size: 1rem
	}

	.pagination.pagination-sm .page-item .page-link {
	    font-size: .8rem
	}

	.pagination.pagination-circle .page-item .page-link {
	    margin-right: 2px;
	    margin-left: 2px;
	    border-radius: 50%
	}

	.pagination.pagination-circle .page-item .page-link:hover {
	    border-radius: 50%
	}

	.pagination.pagination-circle .page-item.active .page-link {
	    border-radius: 50%
	}

	.pagination.pg-blue .page-item.active .page-link {
	    background-color: #4285f4
	}

	.pagination.pg-blue .page-item.active .page-link:hover {
	    background-color: #4285f4
	}

	.pagination.pg-red .page-item.active .page-link {
	    background-color: #ff3547
	}

	.pagination.pg-red .page-item.active .page-link:hover {
	    background-color: #ff3547
	}

	.pagination.pg-teal .page-item.active .page-link {
	    background-color: #2bbbad
	}

	.pagination.pg-teal .page-item.active .page-link:hover {
	    background-color: #2bbbad
	}

	.pagination.pg-dark-grey .page-item.active .page-link {
	    background-color: #37474f
	}

	.pagination.pg-dark-grey .page-item.active .page-link:hover {
	    background-color: #37474f
	}

	.pagination.pg-dark .page-item.active .page-link {
	    background-color: #2e2e2e
	}

	.pagination.pg-dark .page-item.active .page-link:hover {
	    background-color: #2e2e2e
	}

	.pagination.pg-blue-grey .page-item.active .page-link {
	    background-color: #3f729b
	}

	.pagination.pg-blue-grey .page-item.active .page-link:hover {
	    background-color: #3f729b
	}

	.pagination.pg-amber .page-item.active .page-link {
	    background-color: #ff6f00
	}

	.pagination.pg-amber .page-item.active .page-link:hover {
	    background-color: #ff6f00
	}

	.pagination.pg-purple .page-item.active .page-link {
	    background-color: #5e35b1
	}

	.pagination.pg-purple .page-item.active .page-link:hover {
	    background-color: #5e35b1
	}

	.badge {
	    color: #fff !important;
	    border-radius: .125rem;
	    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
	    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.badge-pill {
	    padding-right: .6em;
	    padding-left: .6em;
	    border-radius: 10rem
	}

	.badge-primary {
	    color: #fff !important;
	    background-color: #4285f4 !important
	}

	.badge-danger {
	    color: #fff !important;
	    background-color: #ff3547 !important
	}

	.badge-warning {
	    color: #fff !important;
	    background-color: #fb3 !important
	}

	.badge-success {
	    color: #fff !important;
	    background-color: #00c851 !important
	}

	.badge-info {
	    color: #fff !important;
	    background-color: #33b5e5 !important
	}

	.badge-default {
	    color: #fff !important;
	    background-color: #2bbbad !important
	}

	.badge-secondary {
	    color: #fff !important;
	    background-color: #a6c !important
	}

	.badge-dark {
	    color: #fff !important;
	    background-color: #212121 !important
	}

	.badge-light {
	    color: #000 !important;
	    background-color: #e0e0e0 !important
	}

	body.modal-open {
	    padding-right: 0 !important;
	    overflow: auto
	}

	body.modal-open .fixed-top {
	    padding-right: 1rem !important
	}

	body.modal-open .fixed-bottom {
	    padding-right: 0 !important
	}

	body.scrollable {
	    overflow-y: auto
	}

	.modal-dialog .modal-content {
	    border: 0;
	    border-radius: .125rem;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.modal-dialog .modal-content .modal-header {
	    border-top-left-radius: .125rem;
	    border-top-right-radius: .125rem
	}

	.modal-dialog.cascading-modal {
	    margin-top: 10%
	}

	.modal-dialog.cascading-modal .close {
	    color: #fff;
	    text-shadow: none;
	    outline: 0;
	    opacity: 1
	}

	.modal-dialog.cascading-modal .modal-header {
	    padding: 1.5rem;
	    margin: -2rem 1rem 1rem 1rem;
	    text-align: center;
	    border: none;
	    border-radius: .125rem;
	    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)
	}

	.modal-dialog.cascading-modal .modal-header .close {
	    margin-right: 1rem
	}

	.modal-dialog.cascading-modal .modal-header .title {
	    width: 100%;
	    margin-bottom: 0;
	    font-size: 1.25rem
	}

	.modal-dialog.cascading-modal .modal-header .title .fas,
	.modal-dialog.cascading-modal .modal-header .title .fab,
	.modal-dialog.cascading-modal .modal-header .title .far {
	    margin-right: 9px
	}

	.modal-dialog.cascading-modal .modal-header .social-buttons {
	    margin-top: 1.5rem
	}

	.modal-dialog.cascading-modal .modal-header .social-buttons a {
	    font-size: 1rem
	}

	.modal-dialog.cascading-modal .modal-c-tabs .md-tabs {
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    margin: -1.5rem 1rem 0 1rem;
	    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
	    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.modal-dialog.cascading-modal .modal-c-tabs .md-tabs li {
	    -webkit-box-flex: 1;
	    -ms-flex: 1;
	    flex: 1
	}

	.modal-dialog.cascading-modal .modal-c-tabs .md-tabs li a {
	    text-align: center
	}

	.modal-dialog.cascading-modal .modal-c-tabs .tab-content {
	    padding: 1.7rem 0 0 0
	}

	.modal-dialog.cascading-modal .modal-body,
	.modal-dialog.cascading-modal .modal-footer {
	    padding-right: 2rem;
	    padding-left: 2rem;
	    color: #616161
	}

	.modal-dialog.cascading-modal .modal-body .additional-option,
	.modal-dialog.cascading-modal .modal-footer .additional-option {
	    margin-top: 1rem;
	    text-align: center
	}

	.modal-dialog.cascading-modal.modal-avatar {
	    margin-top: 6rem
	}

	.modal-dialog.cascading-modal.modal-avatar .modal-header {
	    margin: -6rem 0 -1rem;
	    -webkit-box-shadow: none;
	    box-shadow: none
	}

	.modal-dialog.cascading-modal.modal-avatar .modal-header img {
	    width: 130px;
	    margin-right: auto;
	    margin-left: auto;
	    -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	    box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
	}

	.modal-dialog.modal-notify .heading {
	    padding: .3rem;
	    margin: 0;
	    font-size: 1.15rem;
	    color: #fff
	}

	.modal-dialog.modal-notify .modal-header {
	    border: 0;
	    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
	    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.modal-dialog.modal-notify .close {
	    opacity: 1
	}

	.modal-dialog.modal-notify .modal-body {
	    padding: 1.5rem;
	    color: #616161
	}

	.modal-dialog.modal-notify.modal-primary .modal-header {
	    background-color: #4285f4
	}

	.modal-dialog.modal-notify.modal-primary .fas,
	.modal-dialog.modal-notify.modal-primary .fab,
	.modal-dialog.modal-notify.modal-primary .far {
	    color: #4285f4
	}

	.modal-dialog.modal-notify.modal-primary .badge {
	    background-color: #4285f4
	}

	.modal-dialog.modal-notify.modal-primary .btn .fas,
	.modal-dialog.modal-notify.modal-primary .btn .fab,
	.modal-dialog.modal-notify.modal-primary .btn .far {
	    color: #fff
	}

	.modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .fas,
	.modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .fab,
	.modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .far {
	    color: #4285f4
	}

	.modal-dialog.modal-notify.modal-danger .modal-header {
	    background-color: #ff3547
	}

	.modal-dialog.modal-notify.modal-danger .fas,
	.modal-dialog.modal-notify.modal-danger .fab,
	.modal-dialog.modal-notify.modal-danger .far {
	    color: #ff3547
	}

	.modal-dialog.modal-notify.modal-danger .badge {
	    background-color: #ff3547
	}

	.modal-dialog.modal-notify.modal-danger .btn .fas,
	.modal-dialog.modal-notify.modal-danger .btn .fab,
	.modal-dialog.modal-notify.modal-danger .btn .far {
	    color: #fff
	}

	.modal-dialog.modal-notify.modal-danger .btn.btn-outline-danger .fas,
	.modal-dialog.modal-notify.modal-danger .btn.btn-outline-danger .fab,
	.modal-dialog.modal-notify.modal-danger .btn.btn-outline-danger .far {
	    color: #ff3547
	}

	.modal-dialog.modal-notify.modal-warning .modal-header {
	    background-color: #fb3
	}

	.modal-dialog.modal-notify.modal-warning .fas,
	.modal-dialog.modal-notify.modal-warning .fab,
	.modal-dialog.modal-notify.modal-warning .far {
	    color: #fb3
	}

	.modal-dialog.modal-notify.modal-warning .badge {
	    background-color: #fb3
	}

	.modal-dialog.modal-notify.modal-warning .btn .fas,
	.modal-dialog.modal-notify.modal-warning .btn .fab,
	.modal-dialog.modal-notify.modal-warning .btn .far {
	    color: #fff
	}

	.modal-dialog.modal-notify.modal-warning .btn.btn-outline-warning .fas,
	.modal-dialog.modal-notify.modal-warning .btn.btn-outline-warning .fab,
	.modal-dialog.modal-notify.modal-warning .btn.btn-outline-warning .far {
	    color: #fb3
	}

	.modal-dialog.modal-notify.modal-success .modal-header {
	    background-color: #00c851
	}

	.modal-dialog.modal-notify.modal-success .fas,
	.modal-dialog.modal-notify.modal-success .fab,
	.modal-dialog.modal-notify.modal-success .far {
	    color: #00c851
	}

	.modal-dialog.modal-notify.modal-success .badge {
	    background-color: #00c851
	}

	.modal-dialog.modal-notify.modal-success .btn .fas,
	.modal-dialog.modal-notify.modal-success .btn .fab,
	.modal-dialog.modal-notify.modal-success .btn .far {
	    color: #fff
	}

	.modal-dialog.modal-notify.modal-success .btn.btn-outline-success .fas,
	.modal-dialog.modal-notify.modal-success .btn.btn-outline-success .fab,
	.modal-dialog.modal-notify.modal-success .btn.btn-outline-success .far {
	    color: #00c851
	}

	.modal-dialog.modal-notify.modal-info .modal-header {
	    background-color: #33b5e5
	}

	.modal-dialog.modal-notify.modal-info .fas,
	.modal-dialog.modal-notify.modal-info .fab,
	.modal-dialog.modal-notify.modal-info .far {
	    color: #33b5e5
	}

	.modal-dialog.modal-notify.modal-info .badge {
	    background-color: #33b5e5
	}

	.modal-dialog.modal-notify.modal-info .btn .fas,
	.modal-dialog.modal-notify.modal-info .btn .fab,
	.modal-dialog.modal-notify.modal-info .btn .far {
	    color: #fff
	}

	.modal-dialog.modal-notify.modal-info .btn.btn-outline-info .fas,
	.modal-dialog.modal-notify.modal-info .btn.btn-outline-info .fab,
	.modal-dialog.modal-notify.modal-info .btn.btn-outline-info .far {
	    color: #33b5e5
	}

	.modal {
	    padding-right: 0 !important
	}

	@media (min-width: 768px) {
	    .modal .modal-dialog.modal-top {
	        top: 0
	    }

	    .modal .modal-dialog.modal-left {
	        left: 0
	    }

	    .modal .modal-dialog.modal-right {
	        right: 0
	    }

	    .modal .modal-dialog.modal-bottom {
	        bottom: 0
	    }

	    .modal .modal-dialog.modal-top-left {
	        top: 10px;
	        left: 10px
	    }

	    .modal .modal-dialog.modal-top-right {
	        top: 10px;
	        right: 10px
	    }

	    .modal .modal-dialog.modal-bottom-left {
	        bottom: 10px;
	        left: 10px
	    }

	    .modal .modal-dialog.modal-bottom-right {
	        right: 10px;
	        bottom: 10px
	    }
	}

	.modal.fade.top:not(.show) .modal-dialog {
	    -webkit-transform: translate3d(0, -25%, 0);
	    transform: translate3d(0, -25%, 0)
	}

	.modal.fade.left:not(.show) .modal-dialog {
	    -webkit-transform: translate3d(-25%, 0, 0);
	    transform: translate3d(-25%, 0, 0)
	}

	.modal.fade.right:not(.show) .modal-dialog {
	    -webkit-transform: translate3d(25%, 0, 0);
	    transform: translate3d(25%, 0, 0)
	}

	.modal.fade.bottom:not(.show) .modal-dialog {
	    -webkit-transform: translate3d(0, 25%, 0);
	    transform: translate3d(0, 25%, 0)
	}

	@media (min-width: 992px) {
	    .modal.modal-scrolling {
	        position: relative
	    }

	    .modal.modal-scrolling .modal-dialog {
	        position: fixed;
	        z-index: 1050
	    }

	    .modal.modal-content-clickable {
	        top: auto;
	        bottom: auto
	    }

	    .modal.modal-content-clickable .modal-dialog {
	        position: fixed
	    }

	    .modal .modal-fluid {
	        width: 100%;
	        max-width: 100%
	    }

	    .modal .modal-fluid .modal-content {
	        width: 100%
	    }

	    .modal .modal-frame {
	        position: absolute;
	        width: 100%;
	        max-width: 100% !important;
	        margin: 0 !important
	    }

	    .modal .modal-frame.modal-bottom {
	        bottom: 0
	    }

	    .modal .modal-full-height {
	        position: absolute;
	        top: 0;
	        right: 0;
	        display: -webkit-box;
	        display: -ms-flexbox;
	        display: flex;
	        width: 400px;
	        height: auto;
	        min-height: 100%;
	        margin: 0
	    }

	    .modal .modal-full-height.modal-top,
	    .modal .modal-full-height.modal-bottom {
	        display: block;
	        width: 100%;
	        max-width: 100%;
	        height: auto
	    }

	    .modal .modal-full-height.modal-top {
	        bottom: auto
	    }

	    .modal .modal-full-height.modal-bottom {
	        top: auto;
	        min-height: 0
	    }

	    .modal .modal-full-height .modal-content {
	        width: 100%
	    }

	    .modal .modal-full-height.modal-lg {
	        width: 90%;
	        max-width: 90%
	    }
	}

	@media (min-width: 992px) and (min-width: 992px) {
	    .modal .modal-full-height.modal-lg {
	        width: 800px;
	        max-width: 800px
	    }
	}

	@media (min-width: 992px) and (min-width: 1200px) {
	    .modal .modal-full-height.modal-lg {
	        width: 1000px;
	        max-width: 1000px
	    }
	}

	@media (min-width: 992px) {
	    .modal .modal-side {
	        position: absolute;
	        right: 10px;
	        bottom: 10px;
	        width: 400px;
	        margin: 0
	    }
	}

	.carousel .carousel-control-prev-icon,
	.carousel .carousel-control-next-icon {
	    width: 20px;
	    height: 20px
	}

	.carousel .carousel-control-prev-icon {
	    background-image: url(../img/svg/arrow_left.svg)
	}

	.carousel .carousel-control-next-icon {
	    background-image: url(../img/svg/arrow_right.svg)
	}

	.carousel .carousel-indicators li {
	    width: .625rem;
	    height: .625rem;
	    cursor: pointer;
	    border-radius: 50%
	}

	.carousel-fade .carousel-item {
	    opacity: 0;
	    -webkit-transition-duration: .6s;
	    transition-duration: .6s;
	    -webkit-transition-property: opacity;
	    transition-property: opacity
	}

	.carousel-fade .carousel-item.active,
	.carousel-fade .carousel-item-next.carousel-item-left,
	.carousel-fade .carousel-item-prev.carousel-item-right {
	    opacity: 1
	}

	.carousel-fade .carousel-item-left.active,
	.carousel-fade .carousel-item-right.active {
	    opacity: 0
	}

	.carousel-fade .carousel-item-next,
	.carousel-fade .carousel-item-prev,
	.carousel-fade .carousel-item.active,
	.carousel-fade .carousel-item-left.active,
	.carousel-fade .carousel-item-prev.active {
	    -webkit-transform: translateX(0);
	    transform: translateX(0)
	}

	@supports (transform-style: preserve-3d) {

	    .carousel-fade .carousel-item-next,
	    .carousel-fade .carousel-item-prev,
	    .carousel-fade .carousel-item.active,
	    .carousel-fade .carousel-item-left.active,
	    .carousel-fade .carousel-item-prev.active {
	        -webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0)
	    }
	}

	.md-form {
	    position: relative;
	    margin-top: 1.5rem;
	    margin-bottom: 1.5rem
	}

	.md-form input:not([type]),
	.md-form input[type="text"]:not(.browser-default),
	.md-form input[type="password"]:not(.browser-default),
	.md-form input[type="email"]:not(.browser-default),
	.md-form input[type="url"]:not(.browser-default),
	.md-form input[type="time"]:not(.browser-default),
	.md-form input[type="date"]:not(.browser-default),
	.md-form input[type="datetime"]:not(.browser-default),
	.md-form input[type="datetime-local"]:not(.browser-default),
	.md-form input[type="tel"]:not(.browser-default),
	.md-form input[type="number"]:not(.browser-default),
	.md-form input[type="search"]:not(.browser-default),
	.md-form input[type="phone"]:not(.browser-default),
	.md-form input[type="search-md"],
	.md-form textarea.md-textarea {
	    -webkit-box-sizing: content-box;
	    box-sizing: content-box;
	    background-color: transparent;
	    border: none;
	    border-bottom: 1px solid #ced4da;
	    border-radius: 0;
	    outline: none;
	    -webkit-box-shadow: none;
	    box-shadow: none;
	    -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
	    transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
	    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
	    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out
	}

	.md-form input:not([type]):focus:not([readonly]),
	.md-form input[type="text"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="password"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="email"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="url"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="time"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="date"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="datetime"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="datetime-local"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="tel"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="number"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="search"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="phone"]:not(.browser-default):focus:not([readonly]),
	.md-form input[type="search-md"]:focus:not([readonly]),
	.md-form textarea.md-textarea:focus:not([readonly]) {
	    border-bottom: 1px solid #4285f4;
	    -webkit-box-shadow: 0 1px 0 0 #4285f4;
	    box-shadow: 0 1px 0 0 #4285f4
	}

	.md-form input:not([type]):focus:not([readonly])+label,
	.md-form input[type="text"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="password"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="email"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="url"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="time"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="date"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="datetime"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="datetime-local"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="tel"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="number"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="search"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="phone"]:not(.browser-default):focus:not([readonly])+label,
	.md-form input[type="search-md"]:focus:not([readonly])+label,
	.md-form textarea.md-textarea:focus:not([readonly])+label {
	    color: #4285f4
	}

	.md-form input:not([type])+label::after,
	.md-form input[type="text"]:not(.browser-default)+label::after,
	.md-form input[type="password"]:not(.browser-default)+label::after,
	.md-form input[type="email"]:not(.browser-default)+label::after,
	.md-form input[type="url"]:not(.browser-default)+label::after,
	.md-form input[type="time"]:not(.browser-default)+label::after,
	.md-form input[type="date"]:not(.browser-default)+label::after,
	.md-form input[type="datetime"]:not(.browser-default)+label::after,
	.md-form input[type="datetime-local"]:not(.browser-default)+label::after,
	.md-form input[type="tel"]:not(.browser-default)+label::after,
	.md-form input[type="number"]:not(.browser-default)+label::after,
	.md-form input[type="search"]:not(.browser-default)+label::after,
	.md-form input[type="phone"]:not(.browser-default)+label::after,
	.md-form input[type="search-md"]+label::after,
	.md-form textarea.md-textarea+label::after {
	    position: absolute;
	    top: 65px;
	    display: block;
	    content: "";
	    opacity: 0;
	    -webkit-transition: 0.2s opacity ease-out, 0.2s color ease-out;
	    transition: 0.2s opacity ease-out, 0.2s color ease-out
	}

	.md-form input:not([type]).valid,
	.md-form input:not([type]):focus.valid,
	.md-form input[type="text"]:not(.browser-default).valid,
	.md-form input[type="text"]:not(.browser-default):focus.valid,
	.md-form input[type="password"]:not(.browser-default).valid,
	.md-form input[type="password"]:not(.browser-default):focus.valid,
	.md-form input[type="email"]:not(.browser-default).valid,
	.md-form input[type="email"]:not(.browser-default):focus.valid,
	.md-form input[type="url"]:not(.browser-default).valid,
	.md-form input[type="url"]:not(.browser-default):focus.valid,
	.md-form input[type="time"]:not(.browser-default).valid,
	.md-form input[type="time"]:not(.browser-default):focus.valid,
	.md-form input[type="date"]:not(.browser-default).valid,
	.md-form input[type="date"]:not(.browser-default):focus.valid,
	.md-form input[type="datetime"]:not(.browser-default).valid,
	.md-form input[type="datetime"]:not(.browser-default):focus.valid,
	.md-form input[type="datetime-local"]:not(.browser-default).valid,
	.md-form input[type="datetime-local"]:not(.browser-default):focus.valid,
	.md-form input[type="tel"]:not(.browser-default).valid,
	.md-form input[type="tel"]:not(.browser-default):focus.valid,
	.md-form input[type="number"]:not(.browser-default).valid,
	.md-form input[type="number"]:not(.browser-default):focus.valid,
	.md-form input[type="search"]:not(.browser-default).valid,
	.md-form input[type="search"]:not(.browser-default):focus.valid,
	.md-form input[type="phone"]:not(.browser-default).valid,
	.md-form input[type="phone"]:not(.browser-default):focus.valid,
	.md-form input[type="search-md"].valid,
	.md-form input[type="search-md"]:focus.valid,
	.md-form textarea.md-textarea.valid,
	.md-form textarea.md-textarea:focus.valid {
	    border-bottom: 1px solid #00c851;
	    -webkit-box-shadow: 0 1px 0 0 #00c851;
	    box-shadow: 0 1px 0 0 #00c851
	}

	.md-form input:not([type]).valid+label:after,
	.md-form input:not([type]):focus.valid+label:after,
	.md-form input[type="text"]:not(.browser-default).valid+label:after,
	.md-form input[type="text"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="password"]:not(.browser-default).valid+label:after,
	.md-form input[type="password"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="email"]:not(.browser-default).valid+label:after,
	.md-form input[type="email"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="url"]:not(.browser-default).valid+label:after,
	.md-form input[type="url"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="time"]:not(.browser-default).valid+label:after,
	.md-form input[type="time"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="date"]:not(.browser-default).valid+label:after,
	.md-form input[type="date"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="tel"]:not(.browser-default).valid+label:after,
	.md-form input[type="tel"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="number"]:not(.browser-default).valid+label:after,
	.md-form input[type="number"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="search"]:not(.browser-default).valid+label:after,
	.md-form input[type="search"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="phone"]:not(.browser-default).valid+label:after,
	.md-form input[type="phone"]:not(.browser-default):focus.valid+label:after,
	.md-form input[type="search-md"].valid+label:after,
	.md-form input[type="search-md"]:focus.valid+label:after,
	.md-form textarea.md-textarea.valid+label:after,
	.md-form textarea.md-textarea:focus.valid+label:after {
	    color: #00c851;
	    content: attr(data-success);
	    opacity: 1
	}

	.md-form input:not([type]).invalid,
	.md-form input:not([type]):focus.invalid,
	.md-form input[type="text"]:not(.browser-default).invalid,
	.md-form input[type="text"]:not(.browser-default):focus.invalid,
	.md-form input[type="password"]:not(.browser-default).invalid,
	.md-form input[type="password"]:not(.browser-default):focus.invalid,
	.md-form input[type="email"]:not(.browser-default).invalid,
	.md-form input[type="email"]:not(.browser-default):focus.invalid,
	.md-form input[type="url"]:not(.browser-default).invalid,
	.md-form input[type="url"]:not(.browser-default):focus.invalid,
	.md-form input[type="time"]:not(.browser-default).invalid,
	.md-form input[type="time"]:not(.browser-default):focus.invalid,
	.md-form input[type="date"]:not(.browser-default).invalid,
	.md-form input[type="date"]:not(.browser-default):focus.invalid,
	.md-form input[type="datetime"]:not(.browser-default).invalid,
	.md-form input[type="datetime"]:not(.browser-default):focus.invalid,
	.md-form input[type="datetime-local"]:not(.browser-default).invalid,
	.md-form input[type="datetime-local"]:not(.browser-default):focus.invalid,
	.md-form input[type="tel"]:not(.browser-default).invalid,
	.md-form input[type="tel"]:not(.browser-default):focus.invalid,
	.md-form input[type="number"]:not(.browser-default).invalid,
	.md-form input[type="number"]:not(.browser-default):focus.invalid,
	.md-form input[type="search"]:not(.browser-default).invalid,
	.md-form input[type="search"]:not(.browser-default):focus.invalid,
	.md-form input[type="phone"]:not(.browser-default).invalid,
	.md-form input[type="phone"]:not(.browser-default):focus.invalid,
	.md-form input[type="search-md"].invalid,
	.md-form input[type="search-md"]:focus.invalid,
	.md-form textarea.md-textarea.invalid,
	.md-form textarea.md-textarea:focus.invalid {
	    border-bottom: 1px solid #f44336;
	    -webkit-box-shadow: 0 1px 0 0 #f44336;
	    box-shadow: 0 1px 0 0 #f44336
	}

	.md-form input:not([type]).invalid+label:after,
	.md-form input:not([type]):focus.invalid+label:after,
	.md-form input[type="text"]:not(.browser-default).invalid+label:after,
	.md-form input[type="text"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="password"]:not(.browser-default).invalid+label:after,
	.md-form input[type="password"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="email"]:not(.browser-default).invalid+label:after,
	.md-form input[type="email"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="url"]:not(.browser-default).invalid+label:after,
	.md-form input[type="url"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="time"]:not(.browser-default).invalid+label:after,
	.md-form input[type="time"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="date"]:not(.browser-default).invalid+label:after,
	.md-form input[type="date"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default).invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="number"]:not(.browser-default).invalid+label:after,
	.md-form input[type="number"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="search"]:not(.browser-default).invalid+label:after,
	.md-form input[type="search"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="phone"]:not(.browser-default).invalid+label:after,
	.md-form input[type="phone"]:not(.browser-default):focus.invalid+label:after,
	.md-form input[type="search-md"].invalid+label:after,
	.md-form input[type="search-md"]:focus.invalid+label:after,
	.md-form textarea.md-textarea.invalid+label:after,
	.md-form textarea.md-textarea:focus.invalid+label:after {
	    color: #f44336;
	    content: attr(data-error);
	    opacity: 1
	}

	.md-form input:not([type]).form-control.valid+label:after,
	.md-form input:not([type]).form-control:focus.valid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="phone"]:not(.browser-default).form-control.valid+label:after,
	.md-form input[type="phone"]:not(.browser-default).form-control:focus.valid+label:after,
	.md-form input[type="search-md"].form-control.valid+label:after,
	.md-form input[type="search-md"].form-control:focus.valid+label:after,
	.md-form textarea.md-textarea.form-control.valid+label:after,
	.md-form textarea.md-textarea.form-control:focus.valid+label:after {
	    top: 4.1rem
	}

	.md-form input:not([type]).form-control.invalid+label:after,
	.md-form input:not([type]).form-control:focus.invalid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="phone"]:not(.browser-default).form-control.invalid+label:after,
	.md-form input[type="phone"]:not(.browser-default).form-control:focus.invalid+label:after,
	.md-form input[type="search-md"].form-control.invalid+label:after,
	.md-form input[type="search-md"].form-control:focus.invalid+label:after,
	.md-form textarea.md-textarea.form-control.invalid+label:after,
	.md-form textarea.md-textarea.form-control:focus.invalid+label:after {
	    top: 4rem
	}

	.md-form input:not([type]).form-control-lg.valid+label:after,
	.md-form input:not([type]).form-control-lg:focus.valid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="phone"]:not(.browser-default).form-control-lg.valid+label:after,
	.md-form input[type="phone"]:not(.browser-default).form-control-lg:focus.valid+label:after,
	.md-form input[type="search-md"].form-control-lg.valid+label:after,
	.md-form input[type="search-md"].form-control-lg:focus.valid+label:after,
	.md-form textarea.md-textarea.form-control-lg.valid+label:after,
	.md-form textarea.md-textarea.form-control-lg:focus.valid+label:after {
	    top: 4.6rem
	}

	.md-form input:not([type]).form-control-lg.invalid+label:after,
	.md-form input:not([type]).form-control-lg:focus.invalid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="phone"]:not(.browser-default).form-control-lg.invalid+label:after,
	.md-form input[type="phone"]:not(.browser-default).form-control-lg:focus.invalid+label:after,
	.md-form input[type="search-md"].form-control-lg.invalid+label:after,
	.md-form input[type="search-md"].form-control-lg:focus.invalid+label:after,
	.md-form textarea.md-textarea.form-control-lg.invalid+label:after,
	.md-form textarea.md-textarea.form-control-lg:focus.invalid+label:after {
	    top: 4.6rem
	}

	.md-form input:not([type]).form-control-sm.valid+label:after,
	.md-form input:not([type]).form-control-sm:focus.valid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="phone"]:not(.browser-default).form-control-sm.valid+label:after,
	.md-form input[type="phone"]:not(.browser-default).form-control-sm:focus.valid+label:after,
	.md-form input[type="search-md"].form-control-sm.valid+label:after,
	.md-form input[type="search-md"].form-control-sm:focus.valid+label:after,
	.md-form textarea.md-textarea.form-control-sm.valid+label:after,
	.md-form textarea.md-textarea.form-control-sm:focus.valid+label:after {
	    top: 3.7rem
	}

	.md-form input:not([type]).form-control-sm.invalid+label:after,
	.md-form input:not([type]).form-control-sm:focus.invalid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="text"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="password"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="email"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="url"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="time"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="date"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="datetime"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="datetime-local"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="tel"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="number"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="search"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="phone"]:not(.browser-default).form-control-sm.invalid+label:after,
	.md-form input[type="phone"]:not(.browser-default).form-control-sm:focus.invalid+label:after,
	.md-form input[type="search-md"].form-control-sm.invalid+label:after,
	.md-form input[type="search-md"].form-control-sm:focus.invalid+label:after,
	.md-form textarea.md-textarea.form-control-sm.invalid+label:after,
	.md-form textarea.md-textarea.form-control-sm:focus.invalid+label:after {
	    top: 3.6rem
	}

	.md-form>input[type="date"]:not(.browser-default) {
	    color: transparent
	}

	.md-form>input[type="date"]:not(.browser-default)+label {
	    -webkit-transform-origin: 0 0;
	    transform-origin: 0 0
	}

	.md-form>input[type]:-webkit-autofill:not(.browser-default):not([type="search"])+label,
	.md-form>input[type="time"]:not(.browser-default)+label {
	    font-size: .8rem;
	    -webkit-transform: translateY(-25px);
	    transform: translateY(-25px);
	    -webkit-transform-origin: 0 0;
	    transform-origin: 0 0
	}

	.md-form .was-validated input[type="text"]:valid+label {
	    color: #00c851 !important
	}

	.md-form .was-validated input[type="text"]:invalid+label {
	    color: #f44336 !important
	}

	.md-form .was-validated .form-control:valid:focus {
	    -webkit-box-shadow: 0 1px 0 0 #00c851 !important;
	    box-shadow: 0 1px 0 0 #00c851 !important
	}

	.md-form .was-validated .form-control:valid {
	    border-color: #00c851 !important
	}

	.md-form .was-validated .form-control:invalid:focus {
	    -webkit-box-shadow: 0 1px 0 0 #f44336 !important;
	    box-shadow: 0 1px 0 0 #f44336 !important
	}

	.md-form .was-validated .form-control:invalid {
	    border-color: #f44336 !important
	}

	.md-form .form-control {
	    height: auto;
	    padding: .6rem 0 .4rem 0;
	    margin: 0 0 .5rem 0;
	    background-color: transparent;
	    border-radius: 0
	}

	.md-form .form-control:focus {
	    -webkit-box-shadow: none;
	    box-shadow: none
	}

	.md-form .form-control:disabled,
	.md-form .form-control[readonly] {
	    background-color: transparent;
	    border-bottom: 1px solid #bdbdbd
	}

	.md-form .form-control.is-valid {
	    border-color: #00c851
	}

	.md-form .form-control.is-valid:focus {
	    border-color: #00c851 !important;
	    -webkit-box-shadow: 0 1px 0 0 #00c851 !important;
	    box-shadow: 0 1px 0 0 #00c851 !important
	}

	.md-form .form-control.is-invalid {
	    border-color: #f44336
	}

	.md-form .form-control.is-invalid:focus {
	    border-color: #f44336 !important;
	    -webkit-box-shadow: 0 1px 0 0 #f44336 !important;
	    box-shadow: 0 1px 0 0 #f44336 !important
	}

	.md-form .form-control.is-valid,
	.md-form .form-control.is-invalid {
	    background-position: center right !important
	}

	.md-form .validate {
	    margin-bottom: 2.5rem
	}

	.md-form label {
	    font-size: 1rem
	}

	.md-form label.active {
	    font-size: 1rem
	}

	.md-form .prefix {
	    top: .25rem;
	    font-size: 1.75rem
	}

	.md-form .prefix~input,
	.md-form .prefix~textarea {
	    width: calc(100% - 2.5rem);
	    margin-left: 2.5rem
	}

	.md-form .prefix~label {
	    margin-left: 2.5rem
	}

	.md-form .prefix~.form-text {
	    margin-left: 2.6rem
	}

	.md-form label {
	    position: absolute;
	    top: 0;
	    left: 0;
	    font-size: 1rem;
	    color: #757575;
	    cursor: text;
	    -webkit-transition: color .2s ease-out, -webkit-transform .2s ease-out;
	    transition: color .2s ease-out, -webkit-transform .2s ease-out;
	    transition: transform .2s ease-out, color .2s ease-out;
	    transition: transform .2s ease-out, color .2s ease-out, -webkit-transform .2s ease-out;
	    -webkit-transform: translateY(12px);
	    transform: translateY(12px);
	    -webkit-transform-origin: 0% 100%;
	    transform-origin: 0% 100%
	}

	.md-form label.active {
	    -webkit-transform: translateY(-14px) scale(0.8);
	    transform: translateY(-14px) scale(0.8)
	}

	.md-form .prefix {
	    position: absolute;
	    -webkit-transition: color 0.2s;
	    transition: color 0.2s
	}

	.md-form .prefix.active {
	    color: #4285f4
	}

	.md-form.form-lg .validate {
	    margin-bottom: 2.8rem
	}

	.md-form.form-lg label {
	    font-size: 1.25rem
	}

	.md-form.form-lg label.active {
	    font-size: 1.15rem
	}

	.md-form.form-lg .prefix {
	    top: .4rem;
	    font-size: 2rem
	}

	.md-form.form-lg .prefix~input,
	.md-form.form-lg .prefix~textarea {
	    width: calc(100% - 3rem);
	    margin-left: 3rem
	}

	.md-form.form-lg .prefix~label {
	    margin-left: 3rem
	}

	.md-form.form-lg .prefix~.form-text {
	    margin-left: 3.1rem
	}

	.md-form.form-sm .validate {
	    margin-bottom: 2.3rem
	}

	.md-form.form-sm label {
	    font-size: .875rem
	}

	.md-form.form-sm label.active {
	    font-size: .95rem
	}

	.md-form.form-sm .prefix {
	    top: .35rem;
	    font-size: 1.5rem
	}

	.md-form.form-sm .prefix~input,
	.md-form.form-sm .prefix~textarea {
	    width: calc(100% - 2rem);
	    margin-left: 2rem
	}

	.md-form.form-sm .prefix~label {
	    margin-left: 2rem
	}

	.md-form.form-sm .prefix~.form-text {
	    margin-left: 2rem
	}

	.md-form textarea.md-textarea {
	    padding: 0;
	    overflow-y: hidden
	}

	.md-form textarea.md-textarea+label {
	    top: -0.6rem
	}

	.md-form textarea.md-textarea-auto {
	    padding: 0;
	    padding-top: 1.5rem
	}

	.md-form textarea.md-textarea-auto+label {
	    top: 0
	}

	.md-form.md-outline {
	    position: relative;
	    margin-top: 1.5rem;
	    margin-bottom: 1.5rem
	}

	.md-form.md-outline input[type="text"],
	.md-form.md-outline input[type="password"],
	.md-form.md-outline input[type="email"],
	.md-form.md-outline input[type="url"],
	.md-form.md-outline input[type="time"],
	.md-form.md-outline input[type="date"],
	.md-form.md-outline input[type="datetime-local"],
	.md-form.md-outline input[type="tel"],
	.md-form.md-outline input[type="number"],
	.md-form.md-outline input[type="search-md"],
	.md-form.md-outline input[type="search"],
	.md-form.md-outline textarea.md-textarea {
	    -webkit-box-sizing: border-box;
	    box-sizing: border-box;
	    background-color: transparent;
	    border: 1px solid #dadce0;
	    border-radius: 4px;
	    outline: none;
	    -webkit-box-shadow: none;
	    box-shadow: none;
	    -webkit-transition: all .3s;
	    transition: all .3s
	}

	.md-form.md-outline input[type="text"]:focus:not([readonly]),
	.md-form.md-outline input[type="password"]:focus:not([readonly]),
	.md-form.md-outline input[type="email"]:focus:not([readonly]),
	.md-form.md-outline input[type="url"]:focus:not([readonly]),
	.md-form.md-outline input[type="time"]:focus:not([readonly]),
	.md-form.md-outline input[type="date"]:focus:not([readonly]),
	.md-form.md-outline input[type="datetime-local"]:focus:not([readonly]),
	.md-form.md-outline input[type="tel"]:focus:not([readonly]),
	.md-form.md-outline input[type="number"]:focus:not([readonly]),
	.md-form.md-outline input[type="search-md"]:focus:not([readonly]),
	.md-form.md-outline input[type="search"]:focus:not([readonly]),
	.md-form.md-outline textarea.md-textarea:focus:not([readonly]) {
	    border-color: #4285f4;
	    -webkit-box-shadow: inset 0 0 0 1px #4285f4;
	    box-shadow: inset 0 0 0 1px #4285f4
	}

	.md-form.md-outline input[type="text"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="password"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="email"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="url"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="time"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="date"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="datetime-local"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="tel"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="number"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="search-md"]:focus:not([readonly])+label,
	.md-form.md-outline input[type="search"]:focus:not([readonly])+label,
	.md-form.md-outline textarea.md-textarea:focus:not([readonly])+label {
	    color: #4285f4
	}

	.md-form.md-outline input[type="text"].valid,
	.md-form.md-outline input[type="text"]:focus.valid,
	.md-form.md-outline input[type="password"].valid,
	.md-form.md-outline input[type="password"]:focus.valid,
	.md-form.md-outline input[type="email"].valid,
	.md-form.md-outline input[type="email"]:focus.valid,
	.md-form.md-outline input[type="url"].valid,
	.md-form.md-outline input[type="url"]:focus.valid,
	.md-form.md-outline input[type="time"].valid,
	.md-form.md-outline input[type="time"]:focus.valid,
	.md-form.md-outline input[type="date"].valid,
	.md-form.md-outline input[type="date"]:focus.valid,
	.md-form.md-outline input[type="datetime-local"].valid,
	.md-form.md-outline input[type="datetime-local"]:focus.valid,
	.md-form.md-outline input[type="tel"].valid,
	.md-form.md-outline input[type="tel"]:focus.valid,
	.md-form.md-outline input[type="number"].valid,
	.md-form.md-outline input[type="number"]:focus.valid,
	.md-form.md-outline input[type="search-md"].valid,
	.md-form.md-outline input[type="search-md"]:focus.valid,
	.md-form.md-outline input[type="search"].valid,
	.md-form.md-outline input[type="search"]:focus.valid,
	.md-form.md-outline textarea.md-textarea.valid,
	.md-form.md-outline textarea.md-textarea:focus.valid {
	    border-color: #00c851;
	    -webkit-box-shadow: inset 0 0 0 1px #00c851;
	    box-shadow: inset 0 0 0 1px #00c851
	}

	.md-form.md-outline input[type="text"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="text"].valid+label:after,
	.md-form.md-outline input[type="text"]:focus.valid+label:after,
	.md-form.md-outline input[type="password"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="password"].valid+label:after,
	.md-form.md-outline input[type="password"]:focus.valid+label:after,
	.md-form.md-outline input[type="email"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="email"].valid+label:after,
	.md-form.md-outline input[type="email"]:focus.valid+label:after,
	.md-form.md-outline input[type="url"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="url"].valid+label:after,
	.md-form.md-outline input[type="url"]:focus.valid+label:after,
	.md-form.md-outline input[type="time"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="time"].valid+label:after,
	.md-form.md-outline input[type="time"]:focus.valid+label:after,
	.md-form.md-outline input[type="date"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="date"].valid+label:after,
	.md-form.md-outline input[type="date"]:focus.valid+label:after,
	.md-form.md-outline input[type="datetime-local"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="datetime-local"].valid+label:after,
	.md-form.md-outline input[type="datetime-local"]:focus.valid+label:after,
	.md-form.md-outline input[type="tel"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="tel"].valid+label:after,
	.md-form.md-outline input[type="tel"]:focus.valid+label:after,
	.md-form.md-outline input[type="number"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="number"].valid+label:after,
	.md-form.md-outline input[type="number"]:focus.valid+label:after,
	.md-form.md-outline input[type="search-md"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="search-md"].valid+label:after,
	.md-form.md-outline input[type="search-md"]:focus.valid+label:after,
	.md-form.md-outline input[type="search"]:focus:not([readonly]).valid+label,
	.md-form.md-outline input[type="search"].valid+label:after,
	.md-form.md-outline input[type="search"]:focus.valid+label:after,
	.md-form.md-outline textarea.md-textarea:focus:not([readonly]).valid+label,
	.md-form.md-outline textarea.md-textarea.valid+label:after,
	.md-form.md-outline textarea.md-textarea:focus.valid+label:after {
	    color: #00c851;
	    content: attr(data-success);
	    opacity: 1
	}

	.md-form.md-outline input[type="text"].invalid,
	.md-form.md-outline input[type="text"]:focus.invalid,
	.md-form.md-outline input[type="password"].invalid,
	.md-form.md-outline input[type="password"]:focus.invalid,
	.md-form.md-outline input[type="email"].invalid,
	.md-form.md-outline input[type="email"]:focus.invalid,
	.md-form.md-outline input[type="url"].invalid,
	.md-form.md-outline input[type="url"]:focus.invalid,
	.md-form.md-outline input[type="time"].invalid,
	.md-form.md-outline input[type="time"]:focus.invalid,
	.md-form.md-outline input[type="date"].invalid,
	.md-form.md-outline input[type="date"]:focus.invalid,
	.md-form.md-outline input[type="datetime-local"].invalid,
	.md-form.md-outline input[type="datetime-local"]:focus.invalid,
	.md-form.md-outline input[type="tel"].invalid,
	.md-form.md-outline input[type="tel"]:focus.invalid,
	.md-form.md-outline input[type="number"].invalid,
	.md-form.md-outline input[type="number"]:focus.invalid,
	.md-form.md-outline input[type="search-md"].invalid,
	.md-form.md-outline input[type="search-md"]:focus.invalid,
	.md-form.md-outline input[type="search"].invalid,
	.md-form.md-outline input[type="search"]:focus.invalid,
	.md-form.md-outline textarea.md-textarea.invalid,
	.md-form.md-outline textarea.md-textarea:focus.invalid {
	    border-color: #f44336;
	    -webkit-box-shadow: inset 0 0 0 1px #f44336;
	    box-shadow: inset 0 0 0 1px #f44336
	}

	.md-form.md-outline input[type="text"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="text"].invalid+label:after,
	.md-form.md-outline input[type="text"]:focus.invalid+label:after,
	.md-form.md-outline input[type="password"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="password"].invalid+label:after,
	.md-form.md-outline input[type="password"]:focus.invalid+label:after,
	.md-form.md-outline input[type="email"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="email"].invalid+label:after,
	.md-form.md-outline input[type="email"]:focus.invalid+label:after,
	.md-form.md-outline input[type="url"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="url"].invalid+label:after,
	.md-form.md-outline input[type="url"]:focus.invalid+label:after,
	.md-form.md-outline input[type="time"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="time"].invalid+label:after,
	.md-form.md-outline input[type="time"]:focus.invalid+label:after,
	.md-form.md-outline input[type="date"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="date"].invalid+label:after,
	.md-form.md-outline input[type="date"]:focus.invalid+label:after,
	.md-form.md-outline input[type="datetime-local"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="datetime-local"].invalid+label:after,
	.md-form.md-outline input[type="datetime-local"]:focus.invalid+label:after,
	.md-form.md-outline input[type="tel"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="tel"].invalid+label:after,
	.md-form.md-outline input[type="tel"]:focus.invalid+label:after,
	.md-form.md-outline input[type="number"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="number"].invalid+label:after,
	.md-form.md-outline input[type="number"]:focus.invalid+label:after,
	.md-form.md-outline input[type="search-md"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="search-md"].invalid+label:after,
	.md-form.md-outline input[type="search-md"]:focus.invalid+label:after,
	.md-form.md-outline input[type="search"]:focus:not([readonly]).invalid+label,
	.md-form.md-outline input[type="search"].invalid+label:after,
	.md-form.md-outline input[type="search"]:focus.invalid+label:after,
	.md-form.md-outline textarea.md-textarea:focus:not([readonly]).invalid+label,
	.md-form.md-outline textarea.md-textarea.invalid+label:after,
	.md-form.md-outline textarea.md-textarea:focus.invalid+label:after {
	    color: #f44336;
	    content: attr(data-error);
	    opacity: 1
	}

	.md-form.md-outline input[type="text"].form-control.valid+label:after,
	.md-form.md-outline input[type="text"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="password"].form-control.valid+label:after,
	.md-form.md-outline input[type="password"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="email"].form-control.valid+label:after,
	.md-form.md-outline input[type="email"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="url"].form-control.valid+label:after,
	.md-form.md-outline input[type="url"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="time"].form-control.valid+label:after,
	.md-form.md-outline input[type="time"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="date"].form-control.valid+label:after,
	.md-form.md-outline input[type="date"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="datetime-local"].form-control.valid+label:after,
	.md-form.md-outline input[type="datetime-local"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="tel"].form-control.valid+label:after,
	.md-form.md-outline input[type="tel"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="number"].form-control.valid+label:after,
	.md-form.md-outline input[type="number"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="search-md"].form-control.valid+label:after,
	.md-form.md-outline input[type="search-md"].form-control:focus.valid+label:after,
	.md-form.md-outline input[type="search"].form-control.valid+label:after,
	.md-form.md-outline input[type="search"].form-control:focus.valid+label:after,
	.md-form.md-outline textarea.md-textarea.form-control.valid+label:after,
	.md-form.md-outline textarea.md-textarea.form-control:focus.valid+label:after {
	    position: absolute;
	    top: 4rem;
	    left: 0
	}

	.md-form.md-outline input[type="text"].form-control.invalid+label:after,
	.md-form.md-outline input[type="text"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="password"].form-control.invalid+label:after,
	.md-form.md-outline input[type="password"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="email"].form-control.invalid+label:after,
	.md-form.md-outline input[type="email"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="url"].form-control.invalid+label:after,
	.md-form.md-outline input[type="url"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="time"].form-control.invalid+label:after,
	.md-form.md-outline input[type="time"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="date"].form-control.invalid+label:after,
	.md-form.md-outline input[type="date"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="datetime-local"].form-control.invalid+label:after,
	.md-form.md-outline input[type="datetime-local"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="tel"].form-control.invalid+label:after,
	.md-form.md-outline input[type="tel"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="number"].form-control.invalid+label:after,
	.md-form.md-outline input[type="number"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="search-md"].form-control.invalid+label:after,
	.md-form.md-outline input[type="search-md"].form-control:focus.invalid+label:after,
	.md-form.md-outline input[type="search"].form-control.invalid+label:after,
	.md-form.md-outline input[type="search"].form-control:focus.invalid+label:after,
	.md-form.md-outline textarea.md-textarea.form-control.invalid+label:after,
	.md-form.md-outline textarea.md-textarea.form-control:focus.invalid+label:after {
	    position: absolute;
	    top: 4rem;
	    left: 0
	}

	.md-form.md-outline>input[type]:-webkit-autofill:not(.browser-default):not([type="search"])+label,
	.md-form.md-outline>input[type="time"]:not(.browser-default)+label {
	    left: 8px;
	    padding-right: 5px;
	    padding-left: 5px;
	    font-size: 1rem;
	    font-weight: 500;
	    background: #fff;
	    -webkit-transform: translateY(-9px) scale(0.8);
	    transform: translateY(-9px) scale(0.8);
	    -webkit-transform-origin: 0 0;
	    transform-origin: 0 0
	}

	.md-form.md-outline>input[type]:-webkit-autofill:not(.browser-default):not([type="search"])+label.active,
	.md-form.md-outline>input[type="time"]:not(.browser-default)+label.active {
	    -webkit-transform: translateY(-9px) scale(0.8);
	    transform: translateY(-9px) scale(0.8);
	    -webkit-transform-origin: 0 0;
	    transform-origin: 0 0
	}

	@-webkit-keyframes autofill {
	    to {
	        color: #495057;
	        background: transparent
	    }
	}

	@keyframes autofill {
	    to {
	        color: #495057;
	        background: transparent
	    }
	}

	.md-form.md-outline input:-webkit-autofill {
	    -webkit-animation-name: autofill;
	    animation-name: autofill;
	    -webkit-animation-fill-mode: both;
	    animation-fill-mode: both
	}

	.md-form.md-outline .form-control {
	    padding: .375rem .75rem
	}

	.md-form.md-outline label {
	    position: absolute;
	    top: 0;
	    left: 0;
	    padding-left: 10px;
	    font-size: 1rem;
	    color: #757575;
	    cursor: text;
	    -webkit-transition: color .2s ease-out, -webkit-transform .2s ease-out;
	    transition: color .2s ease-out, -webkit-transform .2s ease-out;
	    transition: transform .2s ease-out, color .2s ease-out;
	    transition: transform .2s ease-out, color .2s ease-out, -webkit-transform .2s ease-out;
	    -webkit-transform: translateY(9px);
	    transform: translateY(9px);
	    -webkit-transform-origin: 0% 100%;
	    transform-origin: 0% 100%
	}

	.md-form.md-outline label.active {
	    left: 8px;
	    padding-right: 5px;
	    padding-left: 5px;
	    font-weight: 500;
	    background: #fff;
	    -webkit-transform: translateY(-13px) scale(0.8);
	    transform: translateY(-13px) scale(0.8)
	}

	.md-form.md-outline.form-lg .form-control.form-control-lg {
	    padding: .5rem .725rem
	}

	.md-form.md-outline.form-lg label {
	    font-size: 1.25rem;
	    -webkit-transform: translateY(10px);
	    transform: translateY(10px)
	}

	.md-form.md-outline.form-lg label.active {
	    font-size: 1.1rem;
	    -webkit-transform: translateY(-14px) scale(0.8);
	    transform: translateY(-14px) scale(0.8)
	}

	.md-form.md-outline.form-lg .prefix {
	    top: .65rem;
	    font-size: 25px
	}

	.md-form.md-outline.form-lg .prefix~input,
	.md-form.md-outline.form-lg .prefix~textarea {
	    width: calc(100% - 2.2rem);
	    margin-left: 2.2rem
	}

	.md-form.md-outline.form-lg .prefix~label {
	    margin-left: 2.2rem
	}

	.md-form.md-outline.form-lg .prefix~.form-text {
	    margin-left: 2.3rem
	}

	.md-form.md-outline.form-sm .form-control.form-control-sm {
	    padding: .25rem .625rem
	}

	.md-form.md-outline.form-sm label {
	    font-size: .8rem;
	    -webkit-transform: translateY(8px);
	    transform: translateY(8px)
	}

	.md-form.md-outline.form-sm label.active {
	    font-size: .85rem;
	    -webkit-transform: translateY(-12px) scale(0.8);
	    transform: translateY(-12px) scale(0.8)
	}

	.md-form.md-outline.form-sm .prefix {
	    top: .5rem;
	    font-size: 15px
	}

	.md-form.md-outline.form-sm .prefix~input,
	.md-form.md-outline.form-sm .prefix~textarea {
	    width: calc(100% - 1.6rem);
	    margin-left: 1.6rem
	}

	.md-form.md-outline.form-sm .prefix~label {
	    margin-left: 1.6rem
	}

	.md-form.md-outline.form-sm .prefix~.form-text {
	    margin-left: 1.7rem
	}

	.md-form.md-outline .prefix {
	    position: absolute;
	    top: .6rem;
	    font-size: 20px;
	    -webkit-transition: color .2s;
	    transition: color .2s
	}

	.md-form.md-outline .prefix:focus {
	    color: #4285f4
	}

	.md-form.md-outline .prefix~input,
	.md-form.md-outline .prefix~textarea {
	    width: calc(100% - 2rem);
	    margin-left: 2rem
	}

	.md-form.md-outline .prefix~label {
	    margin-left: 2rem
	}

	.md-form.md-outline .prefix~.form-text {
	    margin-left: 2.1rem
	}

	.md-form.md-outline .character-counter {
	    margin-top: -.5rem
	}

	.md-form.md-bg input[type="text"],
	.md-form.md-bg input[type="password"],
	.md-form.md-bg input[type="email"],
	.md-form.md-bg input[type="url"],
	.md-form.md-bg input[type="time"],
	.md-form.md-bg input[type="date"],
	.md-form.md-bg input[type="datetime-local"],
	.md-form.md-bg input[type="tel"],
	.md-form.md-bg input[type="number"],
	.md-form.md-bg input[type="search-md"],
	.md-form.md-bg input[type="search"],
	.md-form.md-bg textarea.md-textarea {
	    -webkit-box-sizing: border-box;
	    box-sizing: border-box;
	    padding: 10px 5px;
	    background: #f5f5f5 no-repeat;
	    background-image: -webkit-gradient(linear, left top, left bottom, from(#4285f4), to(#4285f4)), -webkit-gradient(linear, left top, left bottom, from(#ced4da), to(#ced4da));
	    background-image: linear-gradient(to bottom, #4285f4, #4285f4), linear-gradient(to bottom, #ced4da, #ced4da);
	    background-position: 50% 100%, 50% 100%;
	    background-size: 0 2px, 100% 1px;
	    border: 0;
	    border-top-left-radius: .3rem;
	    border-top-right-radius: .3rem;
	    -webkit-transition: background-size 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
	    transition: background-size 0.3s cubic-bezier(0.64, 0.09, 0.08, 1)
	}

	.md-form.md-bg input[type="text"]:focus:not([readonly]),
	.md-form.md-bg input[type="password"]:focus:not([readonly]),
	.md-form.md-bg input[type="email"]:focus:not([readonly]),
	.md-form.md-bg input[type="url"]:focus:not([readonly]),
	.md-form.md-bg input[type="time"]:focus:not([readonly]),
	.md-form.md-bg input[type="date"]:focus:not([readonly]),
	.md-form.md-bg input[type="datetime-local"]:focus:not([readonly]),
	.md-form.md-bg input[type="tel"]:focus:not([readonly]),
	.md-form.md-bg input[type="number"]:focus:not([readonly]),
	.md-form.md-bg input[type="search-md"]:focus:not([readonly]),
	.md-form.md-bg input[type="search"]:focus:not([readonly]),
	.md-form.md-bg textarea.md-textarea:focus:not([readonly]) {
	    border-bottom: none;
	    -webkit-box-shadow: none;
	    box-shadow: none
	}

	.md-form.md-bg input[type="text"]:focus,
	.md-form.md-bg input[type="password"]:focus,
	.md-form.md-bg input[type="email"]:focus,
	.md-form.md-bg input[type="url"]:focus,
	.md-form.md-bg input[type="time"]:focus,
	.md-form.md-bg input[type="date"]:focus,
	.md-form.md-bg input[type="datetime-local"]:focus,
	.md-form.md-bg input[type="tel"]:focus,
	.md-form.md-bg input[type="number"]:focus,
	.md-form.md-bg input[type="search-md"]:focus,
	.md-form.md-bg input[type="search"]:focus,
	.md-form.md-bg textarea.md-textarea:focus {
	    background-color: #dcdcdc;
	    background-size: 100% 2px, 100% 1px;
	    outline: none
	}

	.md-form.md-bg>input[type="date"]:not(.browser-default) {
	    color: transparent
	}

	.md-form.md-bg>input[type="date"]:not(.browser-default)+label {
	    -webkit-transform-origin: 0 0;
	    transform-origin: 0 0
	}

	.md-form.md-bg>input[type]:-webkit-autofill:not(.browser-default):not([type="search"])+label,
	.md-form.md-bg>input[type="time"]:not(.browser-default)+label {
	    font-size: .8rem;
	    -webkit-transform: translateY(-12px);
	    transform: translateY(-12px);
	    -webkit-transform-origin: 0 0;
	    transform-origin: 0 0
	}

	.md-form.md-bg .form-control {
	    padding: 1.1rem .7rem .4rem !important
	}

	.md-form.md-bg label {
	    top: 0;
	    padding-left: .7rem;
	    font-size: 1rem;
	    -webkit-transition: color .2s ease-out, -webkit-transform .2s ease-out;
	    transition: color .2s ease-out, -webkit-transform .2s ease-out;
	    transition: transform .2s ease-out, color .2s ease-out;
	    transition: transform .2s ease-out, color .2s ease-out, -webkit-transform .2s ease-out;
	    -webkit-transform: translateY(13px);
	    transform: translateY(13px);
	    -webkit-transform-origin: 0% 100%;
	    transform-origin: 0% 100%
	}

	.md-form.md-bg label.active {
	    padding-left: .75rem;
	    font-weight: 500;
	    -webkit-transform: translateY(-3px) scale(0.8);
	    transform: translateY(-3px) scale(0.8)
	}

	.md-form.md-bg.form-lg label {
	    -webkit-transform: translateY(16px);
	    transform: translateY(16px)
	}

	.md-form.md-bg.form-lg label.active {
	    -webkit-transform: translateY(-4px) scale(0.8);
	    transform: translateY(-4px) scale(0.8)
	}

	.md-form.md-bg.form-sm label {
	    -webkit-transform: translateY(11px);
	    transform: translateY(11px)
	}

	.md-form.md-bg.form-sm label.active {
	    -webkit-transform: translateY(-2px) scale(0.8);
	    transform: translateY(-2px) scale(0.8)
	}

	.md-form .form-control.is-invalid,
	.was-validated .md-form .form-control:invalid {
	    padding-right: 0
	}

	.md-form .form-control.is-valid,
	.was-validated .md-form .form-control:valid {
	    padding-right: 0
	}

	.needs-validation .md-form label {
	    left: .3rem
	}

	.custom-file-input:lang(es)~.custom-file-label::after {
	    content: "Elegir"
	}

	.custom-file-input:lang(pl-pl)~.custom-file-label::after {
	    content: "Wybierz"
	}

	.custom-file-input:lang(fr)~.custom-file-label::after {
	    content: "Choisir"
	}

	.custom-file-input:lang(in)~.custom-file-label::after {
	    content: "Pilih"
	}

	.custom-file-input:lang(zh)~.custom-file-label::after {
	    content: "選擇"
	}

	.custom-file-input:lang(de)~.custom-file-label::after {
	    content: "Wählen"
	}

	.custom-file-input:lang(ru)~.custom-file-label::after {
	    content: "Выбрать"
	}

	.md-form>label {
	    max-width: 100%;
	    white-space: nowrap;
	    overflow: hidden;
	    text-overflow: ellipsis
	}

	.md-form .form-control {
	    -webkit-box-sizing: border-box !important;
	    box-sizing: border-box !important
	}

	.md-form .input-prefix {
	    position: absolute;
	    top: 50%;
	    -webkit-transform: translateY(-50%);
	    transform: translateY(-50%);
	    -webkit-transition: color 0.2s;
	    transition: color 0.2s;
	    color: rgba(0, 0, 0, 0.87);
	    pointer-events: none
	}

	.md-form .input-prefix.active {
	    color: #4285f4
	}

	.md-form.input-with-pre-icon label {
	    left: 36px;
	    right: initial
	}

	.md-form.input-with-pre-icon .input-prefix {
	    left: 16px;
	    right: initial
	}

	.md-form.input-with-pre-icon .form-control {
	    padding-left: 2.7rem !important
	}

	.md-form.input-with-post-icon .input-prefix {
	    right: 16px;
	    left: initial
	}

	.md-form.input-with-post-icon .form-control {
	    padding-right: 2.7rem !important
	}

	.md-form.input-with-post-icon.input-with-pre-icon .input-prefix {
	    right: 16px;
	    left: initial
	}

	.md-form.input-with-post-icon.input-with-pre-icon .input-prefix:first-of-type {
	    left: 16px;
	    right: initial
	}

	.md-form.input-with-post-icon.input-with-pre-icon .form-control {
	    padding-left: 2.5rem !important;
	    padding-right: 2.5rem !important
	}

	.edge-header {
	    display: block;
	    height: 278px;
	    background-color: #ccc
	}

	.free-bird {
	    margin-top: -100px
	}

	.juicy-peach-gradient {
	    background-image: -webkit-gradient(linear, left top, right top, from(#ffecd2), to(#fcb69f));
	    background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%)
	}

	.young-passion-gradient {
	    background-image: -webkit-gradient(linear, left top, right top, from(#ff8177), color-stop(0%, #ff867a), color-stop(21%, #ff8c7f), color-stop(52%, #f99185), color-stop(78%, #cf556c), to(#b12a5b));
	    background-image: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%)
	}

	.lady-lips-gradient {
	    background-image: -webkit-gradient(linear, left bottom, left top, from(#ff9a9e), color-stop(99%, #fecfef), to(#fecfef));
	    background-image: linear-gradient(to top, #ff9a9e 0%, #fecfef 99%, #fecfef 100%)
	}

	.sunny-morning-gradient {
	    background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%)
	}

	.rainy-ashville-gradient {
	    background-image: -webkit-gradient(linear, left bottom, left top, from(#fbc2eb), to(#a6c1ee));
	    background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%)
	}

	.frozen-dreams-gradient {
	    background-image: -webkit-gradient(linear, left bottom, left top, from(#fdcbf1), color-stop(1%, #fdcbf1), to(#e6dee9));
	    background-image: linear-gradient(to top, #fdcbf1 0%, #fdcbf1 1%, #e6dee9 100%)
	}

	.warm-flame-gradient {
	    background-image: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%)
	}

	.night-fade-gradient {
	    background-image: -webkit-gradient(linear, left bottom, left top, from(#a18cd1), to(#fbc2eb));
	    background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%)
	}

	.spring-warmth-gradient {
	    background-image: -webkit-gradient(linear, left bottom, left top, from(#fad0c4), to(#ffd1ff));
	    background-image: linear-gradient(to top, #fad0c4 0%, #ffd1ff 100%)
	}

	.winter-neva-gradient {
	    background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%)
	}

	.dusty-grass-gradient {
	    background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%)
	}

	.tempting-azure-gradient {
	    background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%)
	}

	.heavy-rain-gradient {
	    background-image: -webkit-gradient(linear, left bottom, left top, from(#cfd9df), to(#e2ebf0));
	    background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%)
	}

	.amy-crisp-gradient {
	    background-image: linear-gradient(120deg, #a6c0fe 0%, #f68084 100%)
	}

	.mean-fruit-gradient {
	    background-image: linear-gradient(120deg, #fccb90 0%, #d57eeb 100%)
	}

	.deep-blue-gradient {
	    background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%)
	}

	.ripe-malinka-gradient {
	    background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%)
	}

	.cloudy-knoxville-gradient {
	    background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%)
	}

	.morpheus-den-gradient {
	    background-image: -webkit-gradient(linear, left bottom, left top, from(#30cfd0), to(#330867));
	    background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%)
	}

	.rare-wind-gradient {
	    background-image: -webkit-gradient(linear, left bottom, left top, from(#a8edea), to(#fed6e3));
	    background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%)
	}

	.near-moon-gradient {
	    background-image: -webkit-gradient(linear, left bottom, left top, from(#5ee7df), to(#b490ca));
	    background-image: linear-gradient(to top, #5ee7df 0%, #b490ca 100%)
	}

	.schedule-list .hr-bold {
	    border-top: 2px solid #212529
	}

	.schedule-list .font-smaller {
	    font-size: .8rem
	}

	.note {
	    padding: 10px;
	    border-left: 6px solid;
	    border-radius: 5px
	}

	.note strong {
	    font-weight: 600
	}

	.note p {
	    font-weight: 500
	}

	.note-primary {
	    background-color: #dfeefd;
	    border-color: #176ac4
	}

	.note-secondary {
	    background-color: #e2e3e5;
	    border-color: #58595a
	}

	.note-success {
	    background-color: #e2f0e5;
	    border-color: #49a75f
	}

	.note-danger {
	    background-color: #fae7e8;
	    border-color: #e45460
	}

	.note-warning {
	    background-color: #faf4e0;
	    border-color: #c2a442
	}

	.note-info {
	    background-color: #e4f2f5;
	    border-color: #2492a5
	}

	.note-light {
	    background-color: #fefefe;
	    border-color: #0f0f0f
	}

	footer.page-footer {
	    bottom: 0;
	    color: #fff
	}

	footer.page-footer .container-fluid {
	    width: auto
	}

	footer.page-footer .footer-copyright {
	    overflow: hidden;
	    color: rgba(255, 255, 255, 0.6);
	    background-color: rgba(0, 0, 0, 0.2)
	}

	footer.page-footer a {
	    color: #fff
	}

	.media .media-left {
	    padding: 0 10px 10px 0
	}

	.media .media-left img {
	    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
	    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
	}

	.list-group .list-group-item:first-child {
	    border-top-left-radius: .125rem;
	    border-top-right-radius: .125rem
	}

	.list-group .list-group-item:last-child {
	    border-bottom-right-radius: .125rem;
	    border-bottom-left-radius: .125rem
	}

	.list-group a,
	.list-group button {
	    -webkit-transition: .5s;
	    transition: .5s
	}

	.list-group a:hover,
	.list-group button:hover {
	    -webkit-transition: .5s;
	    transition: .5s
	}

	table th {
	    font-size: .9rem;
	    font-weight: 400
	}

	table td {
	    font-size: .9rem;
	    font-weight: 300
	}

	table.table thead th {
	    border-top: none
	}

	table.table th,
	table.table td {
	    padding-top: 1.1rem;
	    padding-bottom: 1rem
	}

	table.table a {
	    margin: 0;
	    color: #212529
	}

	table.table .label-table {
	    height: .94rem;
	    padding: 0;
	    margin: 0;
	    line-height: .94rem
	}

	table.table.btn-table td {
	    vertical-align: middle
	}

	table.table-hover tbody tr:hover {
	    background-color: rgba(0, 0, 0, 0.075);
	    -webkit-transition: .5s;
	    transition: .5s
	}

	table .th-lg {
	    min-width: 9rem
	}

	table .th-sm {
	    min-width: 6rem
	}

	table.table-sm th,
	table.table-sm td {
	    padding-top: .6rem;
	    padding-bottom: .6rem
	}

	.table-scroll-vertical {
	    max-height: 300px;
	    overflow-y: auto
	}

	.table-fixed {
	    table-layout: fixed
	}

	.table-responsive>.table-bordered,
	.table-responsive-sm>.table-bordered,
	.table-responsive-md>.table-bordered,
	.table-responsive-lg>.table-bordered,
	.table-responsive-xl>.table-bordered {
	    border-top: 1px solid #dee2e6
	}

	ul.stepper {
	    padding: 0 1.5rem;
	    padding: 1.5rem;
	    margin: 1em -1.5rem;
	    overflow-x: hidden;
	    overflow-y: auto;
	    counter-reset: section
	}

	ul.stepper li a {
	    padding: 1.5rem;
	    text-align: center
	}

	ul.stepper li a .circle {
	    display: inline-block;
	    width: 1.75rem;
	    height: 1.75rem;
	    margin-right: .5rem;
	    line-height: 1.7rem;
	    color: #fff;
	    text-align: center;
	    background: rgba(0, 0, 0, 0.38);
	    border-radius: 50%
	}

	ul.stepper li a .label {
	    display: inline-block;
	    color: rgba(0, 0, 0, 0.38)
	}

	ul.stepper li.active a .label,
	ul.stepper li.completed a .label {
	    font-weight: 600;
	    color: rgba(0, 0, 0, 0.87)
	}

	.stepper-horizontal {
	    position: relative;
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-box-pack: justify;
	    -ms-flex-pack: justify;
	    justify-content: space-between
	}

	.stepper-horizontal li {
	    position: relative;
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-box-flex: 1;
	    -ms-flex: 1;
	    flex: 1;
	    -webkit-box-align: center;
	    -ms-flex-align: center;
	    align-items: center;
	    -webkit-transition: .5s;
	    transition: .5s
	}

	.stepper-horizontal li a .label {
	    margin-top: .63rem
	}

	.stepper-horizontal li:not(:last-child):after {
	    position: relative;
	    -webkit-box-flex: 1;
	    -ms-flex: 1;
	    flex: 1;
	    height: 1px;
	    margin: .5rem 0 0 0;
	    content: "";
	    background-color: rgba(0, 0, 0, 0.1)
	}

	.stepper-horizontal li:not(:first-child):before {
	    position: relative;
	    -webkit-box-flex: 1;
	    -ms-flex: 1;
	    flex: 1;
	    height: 1px;
	    margin: .5rem 0 0 0;
	    content: "";
	    background-color: rgba(0, 0, 0, 0.1)
	}

	.stepper-horizontal li:hover {
	    background-color: rgba(0, 0, 0, 0.06)
	}

	@media (max-width: 47.9375rem) {
	    .stepper-horizontal {
	        -webkit-box-orient: vertical;
	        -webkit-box-direction: normal;
	        -ms-flex-direction: column;
	        flex-direction: column
	    }

	    .stepper-horizontal li {
	        -webkit-box-orient: vertical;
	        -webkit-box-direction: normal;
	        -ms-flex-direction: column;
	        flex-direction: column;
	        -webkit-box-align: start;
	        -ms-flex-align: start;
	        align-items: flex-start
	    }

	    .stepper-horizontal li a .label {
	        -webkit-box-orient: vertical;
	        -webkit-box-direction: normal;
	        -ms-flex-flow: column nowrap;
	        flex-flow: column nowrap;
	        -webkit-box-ordinal-group: 3;
	        -ms-flex-order: 2;
	        order: 2;
	        margin-top: .2rem
	    }

	    .stepper-horizontal li:not(:last-child):after {
	        position: absolute;
	        top: 3.75rem;
	        left: 2.19rem;
	        width: 1px;
	        height: calc(100% - 40px);
	        content: ""
	    }
	}

	.stepper-horizontal>li:not(:last-of-type) {
	    margin-bottom: 0 !important
	}

	.stepper-vertical {
	    position: relative;
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-box-orient: vertical;
	    -webkit-box-direction: normal;
	    -ms-flex-direction: column;
	    flex-direction: column;
	    -webkit-box-pack: justify;
	    -ms-flex-pack: justify;
	    justify-content: space-between
	}

	.stepper-vertical li {
	    position: relative;
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-box-flex: 1;
	    -ms-flex: 1;
	    flex: 1;
	    -webkit-box-orient: vertical;
	    -webkit-box-direction: normal;
	    -ms-flex-direction: column;
	    flex-direction: column;
	    -webkit-box-align: start;
	    -ms-flex-align: start;
	    align-items: flex-start
	}

	.stepper-vertical li a {
	    position: relative;
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    -ms-flex-item-align: start;
	    align-self: flex-start
	}

	.stepper-vertical li a .circle {
	    -webkit-box-ordinal-group: 2;
	    -ms-flex-order: 1;
	    order: 1
	}

	.stepper-vertical li a .label {
	    -webkit-box-orient: vertical;
	    -webkit-box-direction: normal;
	    -ms-flex-flow: column nowrap;
	    flex-flow: column nowrap;
	    -webkit-box-ordinal-group: 3;
	    -ms-flex-order: 2;
	    order: 2;
	    margin-top: .2rem
	}

	.stepper-vertical li.completed a .label {
	    font-weight: 500
	}

	.stepper-vertical li .step-content {
	    display: block;
	    padding: .94rem;
	    margin-top: 0;
	    margin-left: 3.13rem
	}

	.stepper-vertical li .step-content p {
	    font-size: .88rem
	}

	.stepper-vertical li:not(:last-child):after {
	    position: absolute;
	    top: 3.44rem;
	    left: 2.19rem;
	    width: 1px;
	    height: calc(100% - 40px);
	    content: "";
	    background-color: rgba(0, 0, 0, 0.1)
	}

	.fast.spinner-border {
	    -webkit-animation: spinner-border 0.4s linear infinite;
	    animation: spinner-border 0.4s linear infinite
	}

	.fast.spinner-grow {
	    -webkit-animation: spinner-grow 0.4s linear infinite;
	    animation: spinner-grow 0.4s linear infinite
	}

	.treeview.w-20 {
	    width: 20rem
	}

	.treeview .rotate {
	    margin-top: .2rem;
	    font-size: .8rem;
	    vertical-align: text-top;
	    cursor: pointer;
	    -webkit-user-select: none;
	    -moz-user-select: none;
	    -ms-user-select: none;
	    user-select: none;
	    -webkit-transition: all .1s linear;
	    transition: all .1s linear
	}

	.treeview .rotate.down {
	    -webkit-transform: rotate(90deg);
	    transform: rotate(90deg)
	}

	.treeview .nested {
	    display: none
	}

	.treeview .active {
	    display: block
	}

	.treeview ul {
	    list-style-type: none
	}

	.treeview .ic-w {
	    width: 1.3rem
	}

	.treeview-animated.w-20 {
	    width: 20rem
	}

	.treeview-animated ul {
	    position: relative;
	    padding-left: 1em;
	    list-style: none
	}

	.treeview-animated .treeview-animated-list li {
	    padding: .2em 0 0 .2em
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .nested::before {
	    position: absolute;
	    left: 5px;
	    display: block;
	    width: 5px;
	    height: 100%;
	    content: "";
	    background-color: #808080
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .closed {
	    display: block;
	    padding: .2em .2em .2em .4em;
	    margin-right: 0;
	    border-top-left-radius: .3em;
	    border-bottom-left-radius: .3em
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .closed:hover {
	    background-color: #8cb9ff
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .closed .fa-angle-right {
	    font-size: .8rem;
	    -webkit-transition: all .1s linear;
	    transition: all .1s linear
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .closed .fa-angle-right.down {
	    position: relative;
	    color: #f8f9fa;
	    -webkit-transform: rotate(90deg);
	    transform: rotate(90deg)
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .open {
	    background-color: #32a0ff;
	    -webkit-transition: all .1s linear;
	    transition: all .1s linear
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .open:hover {
	    color: #f8f9fa;
	    background-color: #32a0ff
	}

	.treeview-animated .treeview-animated-list .treeview-animated-items .open span {
	    color: #f8f9fa
	}

	.treeview-animated .treeview-animated-list .treeview-animated-element {
	    padding: .2em .2em .2em .6em;
	    cursor: pointer;
	    border-top-left-radius: 4px;
	    border-bottom-left-radius: 4px;
	    -webkit-transition: all .1s linear;
	    transition: all .1s linear
	}

	.treeview-animated .treeview-animated-list .treeview-animated-element:hover {
	    background-color: #8cb9ff
	}

	.treeview-animated .treeview-animated-list .treeview-animated-element.opened {
	    color: #f8f9fa;
	    background-color: #32a0ff
	}

	.treeview-animated .treeview-animated-list .treeview-animated-element.opened:hover {
	    color: #f8f9fa;
	    background-color: #32a0ff
	}

	.treeview-colorful {
	    font-size: 16px;
	    font-weight: 400;
	    background: rgba(224, 127, 178, 0.2)
	}

	.treeview-colorful.w-20 {
	    width: 20rem
	}

	.treeview-colorful hr {
	    border-color: #a2127a
	}

	.treeview-colorful h6 {
	    font-size: 1.4em;
	    font-weight: 500;
	    color: #a2127a
	}

	.treeview-colorful ul {
	    position: relative;
	    padding-left: 0;
	    list-style: none
	}

	.treeview-colorful .treeview-colorful-list ul {
	    padding-left: 1em;
	    margin-top: .1em;
	    background: rgba(224, 127, 178, 0.2)
	}

	.treeview-colorful .treeview-colorful-element {
	    padding: .2em .2em .2em 1em;
	    cursor: pointer;
	    border: 2px solid transparent;
	    border-right: 0 solid transparent;
	    -webkit-transition: all .1s linear;
	    transition: all .1s linear
	}

	.treeview-colorful .treeview-colorful-element:hover {
	    background-color: #e07fb2
	}

	.treeview-colorful .treeview-colorful-element.opened {
	    color: #ffac47;
	    background-color: #a2127a;
	    border: 2px solid #ffac47;
	    border-right: 0 solid transparent
	}

	.treeview-colorful .treeview-colorful-element.opened:hover {
	    color: #ffac47;
	    background-color: #a2127a
	}

	.treeview-colorful .treeview-colorful-items-header {
	    display: block;
	    padding: .4em;
	    margin-right: 0;
	    border-bottom: 2px solid transparent;
	    -webkit-transition: all .1s linear;
	    transition: all .1s linear
	}

	.treeview-colorful .treeview-colorful-items-header:hover {
	    background-color: #e07fb2
	}

	.treeview-colorful .treeview-colorful-items-header.open {
	    background-color: #a2127a;
	    border-bottom: 2px solid #ffac47;
	    -webkit-transition: all .1s linear;
	    transition: all .1s linear
	}

	.treeview-colorful .treeview-colorful-items-header.open span {
	    color: #ffac47
	}

	.treeview-colorful .treeview-colorful-items-header.open:hover {
	    color: #ffac47;
	    background-color: #a2127a
	}

	.treeview-colorful .treeview-colorful-items-header.open div:hover {
	    background-color: #a2127a
	}

	.treeview-colorful .treeview-colorful-items-header .fa-angle-right {
	    font-size: .8rem;
	    -webkit-transition: all .2s linear;
	    transition: all .2s linear
	}

	.treeview-colorful .treeview-colorful-items-header .fas {
	    position: relative;
	    color: #ffac47;
	    -webkit-transition: all .2s linear;
	    transition: all .2s linear;
	    -webkit-transform: rotate(90deg);
	    transform: rotate(90deg)
	}

	.treeview-colorful .treeview-colorful-items-header .fa-minus-circle {
	    position: relative;
	    color: #ffac47;
	    -webkit-transition: all .2s linear;
	    transition: all .2s linear;
	    -webkit-transform: rotate(180deg);
	    transform: rotate(180deg)
	}

	/*# sourceMappingURL=mdb.min.css.map*/
	</style><style>

	/*!
        * Font Awesome Free 5.9.0 by @fontawesome - https://fontawesome.com
        * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
        */
	.fa,
	.fab,
	.fal,
	.far,
	.fas {
	    -moz-osx-font-smoothing: grayscale;
	    -webkit-font-smoothing: antialiased;
	    display: inline-block;
	    font-style: normal;
	    font-variant: normal;
	    text-rendering: auto;
	    line-height: 1
	}

	.fa-lg {
	    font-size: 1.33333em;
	    line-height: .75em;
	    vertical-align: -.0667em
	}

	.fa-xs {
	    font-size: .75em
	}

	.fa-sm {
	    font-size: .875em
	}

	.fa-1x {
	    font-size: 1em
	}

	.fa-2x {
	    font-size: 2em
	}

	.fa-3x {
	    font-size: 3em
	}

	.fa-4x {
	    font-size: 4em
	}

	.fa-5x {
	    font-size: 5em
	}

	.fa-6x {
	    font-size: 6em
	}

	.fa-7x {
	    font-size: 7em
	}

	.fa-8x {
	    font-size: 8em
	}

	.fa-9x {
	    font-size: 9em
	}

	.fa-10x {
	    font-size: 10em
	}

	.fa-fw {
	    text-align: center;
	    width: 1.25em
	}

	.fa-ul {
	    list-style-type: none;
	    margin-left: 2.5em;
	    padding-left: 0
	}

	.fa-ul>li {
	    position: relative
	}

	.fa-li {
	    left: -2em;
	    position: absolute;
	    text-align: center;
	    width: 2em;
	    line-height: inherit
	}

	.fa-border {
	    border: .08em solid #eee;
	    border-radius: .1em;
	    padding: .2em .25em .15em
	}

	.fa-pull-left {
	    float: left
	}

	.fa-pull-right {
	    float: right
	}

	.fa.fa-pull-left,
	.fab.fa-pull-left,
	.fal.fa-pull-left,
	.far.fa-pull-left,
	.fas.fa-pull-left {
	    margin-right: .3em
	}

	.fa.fa-pull-right,
	.fab.fa-pull-right,
	.fal.fa-pull-right,
	.far.fa-pull-right,
	.fas.fa-pull-right {
	    margin-left: .3em
	}

	.fa-spin {
	    animation: fa-spin 2s infinite linear
	}

	.fa-pulse {
	    animation: fa-spin 1s infinite steps(8)
	}

	@keyframes fa-spin {
	    0% {
	        transform: rotate(0deg)
	    }

	    to {
	        transform: rotate(1turn)
	    }
	}

	.fa-rotate-90 {
	    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
	    transform: rotate(90deg)
	}

	.fa-rotate-180 {
	    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
	    transform: rotate(180deg)
	}

	.fa-rotate-270 {
	    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
	    transform: rotate(270deg)
	}

	.fa-flip-horizontal {
	    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
	    transform: scaleX(-1)
	}

	.fa-flip-vertical {
	    transform: scaleY(-1)
	}

	.fa-flip-both,
	.fa-flip-horizontal.fa-flip-vertical,
	.fa-flip-vertical {
	    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)"
	}

	.fa-flip-both,
	.fa-flip-horizontal.fa-flip-vertical {
	    transform: scale(-1)
	}

	:root .fa-flip-both,
	:root .fa-flip-horizontal,
	:root .fa-flip-vertical,
	:root .fa-rotate-90,
	:root .fa-rotate-180,
	:root .fa-rotate-270 {
	    filter: none
	}

	.fa-stack {
	    display: inline-block;
	    height: 2em;
	    line-height: 2em;
	    position: relative;
	    vertical-align: middle;
	    width: 2.5em
	}

	.fa-stack-1x,
	.fa-stack-2x {
	    left: 0;
	    position: absolute;
	    text-align: center;
	    width: 100%
	}

	.fa-stack-1x {
	    line-height: inherit
	}

	.fa-stack-2x {
	    font-size: 2em
	}

	.fa-inverse {
	    color: #fff
	}

	.fa-500px:before {
	    content: "\f26e"
	}

	.fa-accessible-icon:before {
	    content: "\f368"
	}

	.fa-accusoft:before {
	    content: "\f369"
	}

	.fa-acquisitions-incorporated:before {
	    content: "\f6af"
	}

	.fa-ad:before {
	    content: "\f641"
	}

	.fa-address-book:before {
	    content: "\f2b9"
	}

	.fa-address-card:before {
	    content: "\f2bb"
	}

	.fa-adjust:before {
	    content: "\f042"
	}

	.fa-adn:before {
	    content: "\f170"
	}

	.fa-adobe:before {
	    content: "\f778"
	}

	.fa-adversal:before {
	    content: "\f36a"
	}

	.fa-affiliatetheme:before {
	    content: "\f36b"
	}

	.fa-air-freshener:before {
	    content: "\f5d0"
	}

	.fa-airbnb:before {
	    content: "\f834"
	}

	.fa-algolia:before {
	    content: "\f36c"
	}

	.fa-align-center:before {
	    content: "\f037"
	}

	.fa-align-justify:before {
	    content: "\f039"
	}

	.fa-align-left:before {
	    content: "\f036"
	}

	.fa-align-right:before {
	    content: "\f038"
	}

	.fa-alipay:before {
	    content: "\f642"
	}

	.fa-allergies:before {
	    content: "\f461"
	}

	.fa-amazon:before {
	    content: "\f270"
	}

	.fa-amazon-pay:before {
	    content: "\f42c"
	}

	.fa-ambulance:before {
	    content: "\f0f9"
	}

	.fa-american-sign-language-interpreting:before {
	    content: "\f2a3"
	}

	.fa-amilia:before {
	    content: "\f36d"
	}

	.fa-anchor:before {
	    content: "\f13d"
	}

	.fa-android:before {
	    content: "\f17b"
	}

	.fa-angellist:before {
	    content: "\f209"
	}

	.fa-angle-double-down:before {
	    content: "\f103"
	}

	.fa-angle-double-left:before {
	    content: "\f100"
	}

	.fa-angle-double-right:before {
	    content: "\f101"
	}

	.fa-angle-double-up:before {
	    content: "\f102"
	}

	.fa-angle-down:before {
	    content: "\f107"
	}

	.fa-angle-left:before {
	    content: "\f104"
	}

	.fa-angle-right:before {
	    content: "\f105"
	}

	.fa-angle-up:before {
	    content: "\f106"
	}

	.fa-angry:before {
	    content: "\f556"
	}

	.fa-angrycreative:before {
	    content: "\f36e"
	}

	.fa-angular:before {
	    content: "\f420"
	}

	.fa-ankh:before {
	    content: "\f644"
	}

	.fa-app-store:before {
	    content: "\f36f"
	}

	.fa-app-store-ios:before {
	    content: "\f370"
	}

	.fa-apper:before {
	    content: "\f371"
	}

	.fa-apple:before {
	    content: "\f179"
	}

	.fa-apple-alt:before {
	    content: "\f5d1"
	}

	.fa-apple-pay:before {
	    content: "\f415"
	}

	.fa-archive:before {
	    content: "\f187"
	}

	.fa-archway:before {
	    content: "\f557"
	}

	.fa-arrow-alt-circle-down:before {
	    content: "\f358"
	}

	.fa-arrow-alt-circle-left:before {
	    content: "\f359"
	}

	.fa-arrow-alt-circle-right:before {
	    content: "\f35a"
	}

	.fa-arrow-alt-circle-up:before {
	    content: "\f35b"
	}

	.fa-arrow-circle-down:before {
	    content: "\f0ab"
	}

	.fa-arrow-circle-left:before {
	    content: "\f0a8"
	}

	.fa-arrow-circle-right:before {
	    content: "\f0a9"
	}

	.fa-arrow-circle-up:before {
	    content: "\f0aa"
	}

	.fa-arrow-down:before {
	    content: "\f063"
	}

	.fa-arrow-left:before {
	    content: "\f060"
	}

	.fa-arrow-right:before {
	    content: "\f061"
	}

	.fa-arrow-up:before {
	    content: "\f062"
	}

	.fa-arrows-alt:before {
	    content: "\f0b2"
	}

	.fa-arrows-alt-h:before {
	    content: "\f337"
	}

	.fa-arrows-alt-v:before {
	    content: "\f338"
	}

	.fa-artstation:before {
	    content: "\f77a"
	}

	.fa-assistive-listening-systems:before {
	    content: "\f2a2"
	}

	.fa-asterisk:before {
	    content: "\f069"
	}

	.fa-asymmetrik:before {
	    content: "\f372"
	}

	.fa-at:before {
	    content: "\f1fa"
	}

	.fa-atlas:before {
	    content: "\f558"
	}

	.fa-atlassian:before {
	    content: "\f77b"
	}

	.fa-atom:before {
	    content: "\f5d2"
	}

	.fa-audible:before {
	    content: "\f373"
	}

	.fa-audio-description:before {
	    content: "\f29e"
	}

	.fa-autoprefixer:before {
	    content: "\f41c"
	}

	.fa-avianex:before {
	    content: "\f374"
	}

	.fa-aviato:before {
	    content: "\f421"
	}

	.fa-award:before {
	    content: "\f559"
	}

	.fa-aws:before {
	    content: "\f375"
	}

	.fa-baby:before {
	    content: "\f77c"
	}

	.fa-baby-carriage:before {
	    content: "\f77d"
	}

	.fa-backspace:before {
	    content: "\f55a"
	}

	.fa-backward:before {
	    content: "\f04a"
	}

	.fa-bacon:before {
	    content: "\f7e5"
	}

	.fa-balance-scale:before {
	    content: "\f24e"
	}

	.fa-balance-scale-left:before {
	    content: "\f515"
	}

	.fa-balance-scale-right:before {
	    content: "\f516"
	}

	.fa-ban:before {
	    content: "\f05e"
	}

	.fa-band-aid:before {
	    content: "\f462"
	}

	.fa-bandcamp:before {
	    content: "\f2d5"
	}

	.fa-barcode:before {
	    content: "\f02a"
	}

	.fa-bars:before {
	    content: "\f0c9"
	}

	.fa-baseball-ball:before {
	    content: "\f433"
	}

	.fa-basketball-ball:before {
	    content: "\f434"
	}

	.fa-bath:before {
	    content: "\f2cd"
	}

	.fa-battery-empty:before {
	    content: "\f244"
	}

	.fa-battery-full:before {
	    content: "\f240"
	}

	.fa-battery-half:before {
	    content: "\f242"
	}

	.fa-battery-quarter:before {
	    content: "\f243"
	}

	.fa-battery-three-quarters:before {
	    content: "\f241"
	}

	.fa-battle-net:before {
	    content: "\f835"
	}

	.fa-bed:before {
	    content: "\f236"
	}

	.fa-beer:before {
	    content: "\f0fc"
	}

	.fa-behance:before {
	    content: "\f1b4"
	}

	.fa-behance-square:before {
	    content: "\f1b5"
	}

	.fa-bell:before {
	    content: "\f0f3"
	}

	.fa-bell-slash:before {
	    content: "\f1f6"
	}

	.fa-bezier-curve:before {
	    content: "\f55b"
	}

	.fa-bible:before {
	    content: "\f647"
	}

	.fa-bicycle:before {
	    content: "\f206"
	}

	.fa-biking:before {
	    content: "\f84a"
	}

	.fa-bimobject:before {
	    content: "\f378"
	}

	.fa-binoculars:before {
	    content: "\f1e5"
	}

	.fa-biohazard:before {
	    content: "\f780"
	}

	.fa-birthday-cake:before {
	    content: "\f1fd"
	}

	.fa-bitbucket:before {
	    content: "\f171"
	}

	.fa-bitcoin:before {
	    content: "\f379"
	}

	.fa-bity:before {
	    content: "\f37a"
	}

	.fa-black-tie:before {
	    content: "\f27e"
	}

	.fa-blackberry:before {
	    content: "\f37b"
	}

	.fa-blender:before {
	    content: "\f517"
	}

	.fa-blender-phone:before {
	    content: "\f6b6"
	}

	.fa-blind:before {
	    content: "\f29d"
	}

	.fa-blog:before {
	    content: "\f781"
	}

	.fa-blogger:before {
	    content: "\f37c"
	}

	.fa-blogger-b:before {
	    content: "\f37d"
	}

	.fa-bluetooth:before {
	    content: "\f293"
	}

	.fa-bluetooth-b:before {
	    content: "\f294"
	}

	.fa-bold:before {
	    content: "\f032"
	}

	.fa-bolt:before {
	    content: "\f0e7"
	}

	.fa-bomb:before {
	    content: "\f1e2"
	}

	.fa-bone:before {
	    content: "\f5d7"
	}

	.fa-bong:before {
	    content: "\f55c"
	}

	.fa-book:before {
	    content: "\f02d"
	}

	.fa-book-dead:before {
	    content: "\f6b7"
	}

	.fa-book-medical:before {
	    content: "\f7e6"
	}

	.fa-book-open:before {
	    content: "\f518"
	}

	.fa-book-reader:before {
	    content: "\f5da"
	}

	.fa-bookmark:before {
	    content: "\f02e"
	}

	.fa-bootstrap:before {
	    content: "\f836"
	}

	.fa-border-all:before {
	    content: "\f84c"
	}

	.fa-border-none:before {
	    content: "\f850"
	}

	.fa-border-style:before {
	    content: "\f853"
	}

	.fa-bowling-ball:before {
	    content: "\f436"
	}

	.fa-box:before {
	    content: "\f466"
	}

	.fa-box-open:before {
	    content: "\f49e"
	}

	.fa-boxes:before {
	    content: "\f468"
	}

	.fa-braille:before {
	    content: "\f2a1"
	}

	.fa-brain:before {
	    content: "\f5dc"
	}

	.fa-bread-slice:before {
	    content: "\f7ec"
	}

	.fa-briefcase:before {
	    content: "\f0b1"
	}

	.fa-briefcase-medical:before {
	    content: "\f469"
	}

	.fa-broadcast-tower:before {
	    content: "\f519"
	}

	.fa-broom:before {
	    content: "\f51a"
	}

	.fa-brush:before {
	    content: "\f55d"
	}

	.fa-btc:before {
	    content: "\f15a"
	}

	.fa-buffer:before {
	    content: "\f837"
	}

	.fa-bug:before {
	    content: "\f188"
	}

	.fa-building:before {
	    content: "\f1ad"
	}

	.fa-bullhorn:before {
	    content: "\f0a1"
	}

	.fa-bullseye:before {
	    content: "\f140"
	}

	.fa-burn:before {
	    content: "\f46a"
	}

	.fa-buromobelexperte:before {
	    content: "\f37f"
	}

	.fa-bus:before {
	    content: "\f207"
	}

	.fa-bus-alt:before {
	    content: "\f55e"
	}

	.fa-business-time:before {
	    content: "\f64a"
	}

	.fa-buysellads:before {
	    content: "\f20d"
	}

	.fa-calculator:before {
	    content: "\f1ec"
	}

	.fa-calendar:before {
	    content: "\f133"
	}

	.fa-calendar-alt:before {
	    content: "\f073"
	}

	.fa-calendar-check:before {
	    content: "\f274"
	}

	.fa-calendar-day:before {
	    content: "\f783"
	}

	.fa-calendar-minus:before {
	    content: "\f272"
	}

	.fa-calendar-plus:before {
	    content: "\f271"
	}

	.fa-calendar-times:before {
	    content: "\f273"
	}

	.fa-calendar-week:before {
	    content: "\f784"
	}

	.fa-camera:before {
	    content: "\f030"
	}

	.fa-camera-retro:before {
	    content: "\f083"
	}

	.fa-campground:before {
	    content: "\f6bb"
	}

	.fa-canadian-maple-leaf:before {
	    content: "\f785"
	}

	.fa-candy-cane:before {
	    content: "\f786"
	}

	.fa-cannabis:before {
	    content: "\f55f"
	}

	.fa-capsules:before {
	    content: "\f46b"
	}

	.fa-car:before {
	    content: "\f1b9"
	}

	.fa-car-alt:before {
	    content: "\f5de"
	}

	.fa-car-battery:before {
	    content: "\f5df"
	}

	.fa-car-crash:before {
	    content: "\f5e1"
	}

	.fa-car-side:before {
	    content: "\f5e4"
	}

	.fa-caret-down:before {
	    content: "\f0d7"
	}

	.fa-caret-left:before {
	    content: "\f0d9"
	}

	.fa-caret-right:before {
	    content: "\f0da"
	}

	.fa-caret-square-down:before {
	    content: "\f150"
	}

	.fa-caret-square-left:before {
	    content: "\f191"
	}

	.fa-caret-square-right:before {
	    content: "\f152"
	}

	.fa-caret-square-up:before {
	    content: "\f151"
	}

	.fa-caret-up:before {
	    content: "\f0d8"
	}

	.fa-carrot:before {
	    content: "\f787"
	}

	.fa-cart-arrow-down:before {
	    content: "\f218"
	}

	.fa-cart-plus:before {
	    content: "\f217"
	}

	.fa-cash-register:before {
	    content: "\f788"
	}

	.fa-cat:before {
	    content: "\f6be"
	}

	.fa-cc-amazon-pay:before {
	    content: "\f42d"
	}

	.fa-cc-amex:before {
	    content: "\f1f3"
	}

	.fa-cc-apple-pay:before {
	    content: "\f416"
	}

	.fa-cc-diners-club:before {
	    content: "\f24c"
	}

	.fa-cc-discover:before {
	    content: "\f1f2"
	}

	.fa-cc-jcb:before {
	    content: "\f24b"
	}

	.fa-cc-mastercard:before {
	    content: "\f1f1"
	}

	.fa-cc-paypal:before {
	    content: "\f1f4"
	}

	.fa-cc-stripe:before {
	    content: "\f1f5"
	}

	.fa-cc-visa:before {
	    content: "\f1f0"
	}

	.fa-centercode:before {
	    content: "\f380"
	}

	.fa-centos:before {
	    content: "\f789"
	}

	.fa-certificate:before {
	    content: "\f0a3"
	}

	.fa-chair:before {
	    content: "\f6c0"
	}

	.fa-chalkboard:before {
	    content: "\f51b"
	}

	.fa-chalkboard-teacher:before {
	    content: "\f51c"
	}

	.fa-charging-station:before {
	    content: "\f5e7"
	}

	.fa-chart-area:before {
	    content: "\f1fe"
	}

	.fa-chart-bar:before {
	    content: "\f080"
	}

	.fa-chart-line:before {
	    content: "\f201"
	}

	.fa-chart-pie:before {
	    content: "\f200"
	}

	.fa-check:before {
	    content: "\f00c"
	}

	.fa-check-circle:before {
	    content: "\f058"
	}

	.fa-check-double:before {
	    content: "\f560"
	}

	.fa-check-square:before {
	    content: "\f14a"
	}

	.fa-cheese:before {
	    content: "\f7ef"
	}

	.fa-chess:before {
	    content: "\f439"
	}

	.fa-chess-bishop:before {
	    content: "\f43a"
	}

	.fa-chess-board:before {
	    content: "\f43c"
	}

	.fa-chess-king:before {
	    content: "\f43f"
	}

	.fa-chess-knight:before {
	    content: "\f441"
	}

	.fa-chess-pawn:before {
	    content: "\f443"
	}

	.fa-chess-queen:before {
	    content: "\f445"
	}

	.fa-chess-rook:before {
	    content: "\f447"
	}

	.fa-chevron-circle-down:before {
	    content: "\f13a"
	}

	.fa-chevron-circle-left:before {
	    content: "\f137"
	}

	.fa-chevron-circle-right:before {
	    content: "\f138"
	}

	.fa-chevron-circle-up:before {
	    content: "\f139"
	}

	.fa-chevron-down:before {
	    content: "\f078"
	}

	.fa-chevron-left:before {
	    content: "\f053"
	}

	.fa-chevron-right:before {
	    content: "\f054"
	}

	.fa-chevron-up:before {
	    content: "\f077"
	}

	.fa-child:before {
	    content: "\f1ae"
	}

	.fa-chrome:before {
	    content: "\f268"
	}

	.fa-chromecast:before {
	    content: "\f838"
	}

	.fa-church:before {
	    content: "\f51d"
	}

	.fa-circle:before {
	    content: "\f111"
	}

	.fa-circle-notch:before {
	    content: "\f1ce"
	}

	.fa-city:before {
	    content: "\f64f"
	}

	.fa-clinic-medical:before {
	    content: "\f7f2"
	}

	.fa-clipboard:before {
	    content: "\f328"
	}

	.fa-clipboard-check:before {
	    content: "\f46c"
	}

	.fa-clipboard-list:before {
	    content: "\f46d"
	}

	.fa-clock:before {
	    content: "\f017"
	}

	.fa-clone:before {
	    content: "\f24d"
	}

	.fa-closed-captioning:before {
	    content: "\f20a"
	}

	.fa-cloud:before {
	    content: "\f0c2"
	}

	.fa-cloud-download-alt:before {
	    content: "\f381"
	}

	.fa-cloud-meatball:before {
	    content: "\f73b"
	}

	.fa-cloud-moon:before {
	    content: "\f6c3"
	}

	.fa-cloud-moon-rain:before {
	    content: "\f73c"
	}

	.fa-cloud-rain:before {
	    content: "\f73d"
	}

	.fa-cloud-showers-heavy:before {
	    content: "\f740"
	}

	.fa-cloud-sun:before {
	    content: "\f6c4"
	}

	.fa-cloud-sun-rain:before {
	    content: "\f743"
	}

	.fa-cloud-upload-alt:before {
	    content: "\f382"
	}

	.fa-cloudscale:before {
	    content: "\f383"
	}

	.fa-cloudsmith:before {
	    content: "\f384"
	}

	.fa-cloudversify:before {
	    content: "\f385"
	}

	.fa-cocktail:before {
	    content: "\f561"
	}

	.fa-code:before {
	    content: "\f121"
	}

	.fa-code-branch:before {
	    content: "\f126"
	}

	.fa-codepen:before {
	    content: "\f1cb"
	}

	.fa-codiepie:before {
	    content: "\f284"
	}

	.fa-coffee:before {
	    content: "\f0f4"
	}

	.fa-cog:before {
	    content: "\f013"
	}

	.fa-cogs:before {
	    content: "\f085"
	}

	.fa-coins:before {
	    content: "\f51e"
	}

	.fa-columns:before {
	    content: "\f0db"
	}

	.fa-comment:before {
	    content: "\f075"
	}

	.fa-comment-alt:before {
	    content: "\f27a"
	}

	.fa-comment-dollar:before {
	    content: "\f651"
	}

	.fa-comment-dots:before {
	    content: "\f4ad"
	}

	.fa-comment-medical:before {
	    content: "\f7f5"
	}

	.fa-comment-slash:before {
	    content: "\f4b3"
	}

	.fa-comments:before {
	    content: "\f086"
	}

	.fa-comments-dollar:before {
	    content: "\f653"
	}

	.fa-compact-disc:before {
	    content: "\f51f"
	}

	.fa-compass:before {
	    content: "\f14e"
	}

	.fa-compress:before {
	    content: "\f066"
	}

	.fa-compress-arrows-alt:before {
	    content: "\f78c"
	}

	.fa-concierge-bell:before {
	    content: "\f562"
	}

	.fa-confluence:before {
	    content: "\f78d"
	}

	.fa-connectdevelop:before {
	    content: "\f20e"
	}

	.fa-contao:before {
	    content: "\f26d"
	}

	.fa-cookie:before {
	    content: "\f563"
	}

	.fa-cookie-bite:before {
	    content: "\f564"
	}

	.fa-copy:before {
	    content: "\f0c5"
	}

	.fa-copyright:before {
	    content: "\f1f9"
	}

	.fa-couch:before {
	    content: "\f4b8"
	}

	.fa-cpanel:before {
	    content: "\f388"
	}

	.fa-creative-commons:before {
	    content: "\f25e"
	}

	.fa-creative-commons-by:before {
	    content: "\f4e7"
	}

	.fa-creative-commons-nc:before {
	    content: "\f4e8"
	}

	.fa-creative-commons-nc-eu:before {
	    content: "\f4e9"
	}

	.fa-creative-commons-nc-jp:before {
	    content: "\f4ea"
	}

	.fa-creative-commons-nd:before {
	    content: "\f4eb"
	}

	.fa-creative-commons-pd:before {
	    content: "\f4ec"
	}

	.fa-creative-commons-pd-alt:before {
	    content: "\f4ed"
	}

	.fa-creative-commons-remix:before {
	    content: "\f4ee"
	}

	.fa-creative-commons-sa:before {
	    content: "\f4ef"
	}

	.fa-creative-commons-sampling:before {
	    content: "\f4f0"
	}

	.fa-creative-commons-sampling-plus:before {
	    content: "\f4f1"
	}

	.fa-creative-commons-share:before {
	    content: "\f4f2"
	}

	.fa-creative-commons-zero:before {
	    content: "\f4f3"
	}

	.fa-credit-card:before {
	    content: "\f09d"
	}

	.fa-critical-role:before {
	    content: "\f6c9"
	}

	.fa-crop:before {
	    content: "\f125"
	}

	.fa-crop-alt:before {
	    content: "\f565"
	}

	.fa-cross:before {
	    content: "\f654"
	}

	.fa-crosshairs:before {
	    content: "\f05b"
	}

	.fa-crow:before {
	    content: "\f520"
	}

	.fa-crown:before {
	    content: "\f521"
	}

	.fa-crutch:before {
	    content: "\f7f7"
	}

	.fa-css3:before {
	    content: "\f13c"
	}

	.fa-css3-alt:before {
	    content: "\f38b"
	}

	.fa-cube:before {
	    content: "\f1b2"
	}

	.fa-cubes:before {
	    content: "\f1b3"
	}

	.fa-cut:before {
	    content: "\f0c4"
	}

	.fa-cuttlefish:before {
	    content: "\f38c"
	}

	.fa-d-and-d:before {
	    content: "\f38d"
	}

	.fa-d-and-d-beyond:before {
	    content: "\f6ca"
	}

	.fa-dashcube:before {
	    content: "\f210"
	}

	.fa-database:before {
	    content: "\f1c0"
	}

	.fa-deaf:before {
	    content: "\f2a4"
	}

	.fa-delicious:before {
	    content: "\f1a5"
	}

	.fa-democrat:before {
	    content: "\f747"
	}

	.fa-deploydog:before {
	    content: "\f38e"
	}

	.fa-deskpro:before {
	    content: "\f38f"
	}

	.fa-desktop:before {
	    content: "\f108"
	}

	.fa-dev:before {
	    content: "\f6cc"
	}

	.fa-deviantart:before {
	    content: "\f1bd"
	}

	.fa-dharmachakra:before {
	    content: "\f655"
	}

	.fa-dhl:before {
	    content: "\f790"
	}

	.fa-diagnoses:before {
	    content: "\f470"
	}

	.fa-diaspora:before {
	    content: "\f791"
	}

	.fa-dice:before {
	    content: "\f522"
	}

	.fa-dice-d20:before {
	    content: "\f6cf"
	}

	.fa-dice-d6:before {
	    content: "\f6d1"
	}

	.fa-dice-five:before {
	    content: "\f523"
	}

	.fa-dice-four:before {
	    content: "\f524"
	}

	.fa-dice-one:before {
	    content: "\f525"
	}

	.fa-dice-six:before {
	    content: "\f526"
	}

	.fa-dice-three:before {
	    content: "\f527"
	}

	.fa-dice-two:before {
	    content: "\f528"
	}

	.fa-digg:before {
	    content: "\f1a6"
	}

	.fa-digital-ocean:before {
	    content: "\f391"
	}

	.fa-digital-tachograph:before {
	    content: "\f566"
	}

	.fa-directions:before {
	    content: "\f5eb"
	}

	.fa-discord:before {
	    content: "\f392"
	}

	.fa-discourse:before {
	    content: "\f393"
	}

	.fa-divide:before {
	    content: "\f529"
	}

	.fa-dizzy:before {
	    content: "\f567"
	}

	.fa-dna:before {
	    content: "\f471"
	}

	.fa-dochub:before {
	    content: "\f394"
	}

	.fa-docker:before {
	    content: "\f395"
	}

	.fa-dog:before {
	    content: "\f6d3"
	}

	.fa-dollar-sign:before {
	    content: "\f155"
	}

	.fa-dolly:before {
	    content: "\f472"
	}

	.fa-dolly-flatbed:before {
	    content: "\f474"
	}

	.fa-donate:before {
	    content: "\f4b9"
	}

	.fa-door-closed:before {
	    content: "\f52a"
	}

	.fa-door-open:before {
	    content: "\f52b"
	}

	.fa-dot-circle:before {
	    content: "\f192"
	}

	.fa-dove:before {
	    content: "\f4ba"
	}

	.fa-download:before {
	    content: "\f019"
	}

	.fa-draft2digital:before {
	    content: "\f396"
	}

	.fa-drafting-compass:before {
	    content: "\f568"
	}

	.fa-dragon:before {
	    content: "\f6d5"
	}

	.fa-draw-polygon:before {
	    content: "\f5ee"
	}

	.fa-dribbble:before {
	    content: "\f17d"
	}

	.fa-dribbble-square:before {
	    content: "\f397"
	}

	.fa-dropbox:before {
	    content: "\f16b"
	}

	.fa-drum:before {
	    content: "\f569"
	}

	.fa-drum-steelpan:before {
	    content: "\f56a"
	}

	.fa-drumstick-bite:before {
	    content: "\f6d7"
	}

	.fa-drupal:before {
	    content: "\f1a9"
	}

	.fa-dumbbell:before {
	    content: "\f44b"
	}

	.fa-dumpster:before {
	    content: "\f793"
	}

	.fa-dumpster-fire:before {
	    content: "\f794"
	}

	.fa-dungeon:before {
	    content: "\f6d9"
	}

	.fa-dyalog:before {
	    content: "\f399"
	}

	.fa-earlybirds:before {
	    content: "\f39a"
	}

	.fa-ebay:before {
	    content: "\f4f4"
	}

	.fa-edge:before {
	    content: "\f282"
	}

	.fa-edit:before {
	    content: "\f044"
	}

	.fa-egg:before {
	    content: "\f7fb"
	}

	.fa-eject:before {
	    content: "\f052"
	}

	.fa-elementor:before {
	    content: "\f430"
	}

	.fa-ellipsis-h:before {
	    content: "\f141"
	}

	.fa-ellipsis-v:before {
	    content: "\f142"
	}

	.fa-ello:before {
	    content: "\f5f1"
	}

	.fa-ember:before {
	    content: "\f423"
	}

	.fa-empire:before {
	    content: "\f1d1"
	}

	.fa-envelope:before {
	    content: "\f0e0"
	}

	.fa-envelope-open:before {
	    content: "\f2b6"
	}

	.fa-envelope-open-text:before {
	    content: "\f658"
	}

	.fa-envelope-square:before {
	    content: "\f199"
	}

	.fa-envira:before {
	    content: "\f299"
	}

	.fa-equals:before {
	    content: "\f52c"
	}

	.fa-eraser:before {
	    content: "\f12d"
	}

	.fa-erlang:before {
	    content: "\f39d"
	}

	.fa-ethereum:before {
	    content: "\f42e"
	}

	.fa-ethernet:before {
	    content: "\f796"
	}

	.fa-etsy:before {
	    content: "\f2d7"
	}

	.fa-euro-sign:before {
	    content: "\f153"
	}

	.fa-evernote:before {
	    content: "\f839"
	}

	.fa-exchange-alt:before {
	    content: "\f362"
	}

	.fa-exclamation:before {
	    content: "\f12a"
	}

	.fa-exclamation-circle:before {
	    content: "\f06a"
	}

	.fa-exclamation-triangle:before {
	    content: "\f071"
	}

	.fa-expand:before {
	    content: "\f065"
	}

	.fa-expand-arrows-alt:before {
	    content: "\f31e"
	}

	.fa-expeditedssl:before {
	    content: "\f23e"
	}

	.fa-external-link-alt:before {
	    content: "\f35d"
	}

	.fa-external-link-square-alt:before {
	    content: "\f360"
	}

	.fa-eye:before {
	    content: "\f06e"
	}

	.fa-eye-dropper:before {
	    content: "\f1fb"
	}

	.fa-eye-slash:before {
	    content: "\f070"
	}

	.fa-facebook:before {
	    content: "\f09a"
	}

	.fa-facebook-f:before {
	    content: "\f39e"
	}

	.fa-facebook-messenger:before {
	    content: "\f39f"
	}

	.fa-facebook-square:before {
	    content: "\f082"
	}

	.fa-fan:before {
	    content: "\f863"
	}

	.fa-fantasy-flight-games:before {
	    content: "\f6dc"
	}

	.fa-fast-backward:before {
	    content: "\f049"
	}

	.fa-fast-forward:before {
	    content: "\f050"
	}

	.fa-fax:before {
	    content: "\f1ac"
	}

	.fa-feather:before {
	    content: "\f52d"
	}

	.fa-feather-alt:before {
	    content: "\f56b"
	}

	.fa-fedex:before {
	    content: "\f797"
	}

	.fa-fedora:before {
	    content: "\f798"
	}

	.fa-female:before {
	    content: "\f182"
	}

	.fa-fighter-jet:before {
	    content: "\f0fb"
	}

	.fa-figma:before {
	    content: "\f799"
	}

	.fa-file:before {
	    content: "\f15b"
	}

	.fa-file-alt:before {
	    content: "\f15c"
	}

	.fa-file-archive:before {
	    content: "\f1c6"
	}

	.fa-file-audio:before {
	    content: "\f1c7"
	}

	.fa-file-code:before {
	    content: "\f1c9"
	}

	.fa-file-contract:before {
	    content: "\f56c"
	}

	.fa-file-csv:before {
	    content: "\f6dd"
	}

	.fa-file-download:before {
	    content: "\f56d"
	}

	.fa-file-excel:before {
	    content: "\f1c3"
	}

	.fa-file-export:before {
	    content: "\f56e"
	}

	.fa-file-image:before {
	    content: "\f1c5"
	}

	.fa-file-import:before {
	    content: "\f56f"
	}

	.fa-file-invoice:before {
	    content: "\f570"
	}

	.fa-file-invoice-dollar:before {
	    content: "\f571"
	}

	.fa-file-medical:before {
	    content: "\f477"
	}

	.fa-file-medical-alt:before {
	    content: "\f478"
	}

	.fa-file-pdf:before {
	    content: "\f1c1"
	}

	.fa-file-powerpoint:before {
	    content: "\f1c4"
	}

	.fa-file-prescription:before {
	    content: "\f572"
	}

	.fa-file-signature:before {
	    content: "\f573"
	}

	.fa-file-upload:before {
	    content: "\f574"
	}

	.fa-file-video:before {
	    content: "\f1c8"
	}

	.fa-file-word:before {
	    content: "\f1c2"
	}

	.fa-fill:before {
	    content: "\f575"
	}

	.fa-fill-drip:before {
	    content: "\f576"
	}

	.fa-film:before {
	    content: "\f008"
	}

	.fa-filter:before {
	    content: "\f0b0"
	}

	.fa-fingerprint:before {
	    content: "\f577"
	}

	.fa-fire:before {
	    content: "\f06d"
	}

	.fa-fire-alt:before {
	    content: "\f7e4"
	}

	.fa-fire-extinguisher:before {
	    content: "\f134"
	}

	.fa-firefox:before {
	    content: "\f269"
	}

	.fa-first-aid:before {
	    content: "\f479"
	}

	.fa-first-order:before {
	    content: "\f2b0"
	}

	.fa-first-order-alt:before {
	    content: "\f50a"
	}

	.fa-firstdraft:before {
	    content: "\f3a1"
	}

	.fa-fish:before {
	    content: "\f578"
	}

	.fa-fist-raised:before {
	    content: "\f6de"
	}

	.fa-flag:before {
	    content: "\f024"
	}

	.fa-flag-checkered:before {
	    content: "\f11e"
	}

	.fa-flag-usa:before {
	    content: "\f74d"
	}

	.fa-flask:before {
	    content: "\f0c3"
	}

	.fa-flickr:before {
	    content: "\f16e"
	}

	.fa-flipboard:before {
	    content: "\f44d"
	}

	.fa-flushed:before {
	    content: "\f579"
	}

	.fa-fly:before {
	    content: "\f417"
	}

	.fa-folder:before {
	    content: "\f07b"
	}

	.fa-folder-minus:before {
	    content: "\f65d"
	}

	.fa-folder-open:before {
	    content: "\f07c"
	}

	.fa-folder-plus:before {
	    content: "\f65e"
	}

	.fa-font:before {
	    content: "\f031"
	}

	.fa-font-awesome:before {
	    content: "\f2b4"
	}

	.fa-font-awesome-alt:before {
	    content: "\f35c"
	}

	.fa-font-awesome-flag:before {
	    content: "\f425"
	}

	.fa-font-awesome-logo-full:before {
	    content: "\f4e6"
	}

	.fa-fonticons:before {
	    content: "\f280"
	}

	.fa-fonticons-fi:before {
	    content: "\f3a2"
	}

	.fa-football-ball:before {
	    content: "\f44e"
	}

	.fa-fort-awesome:before {
	    content: "\f286"
	}

	.fa-fort-awesome-alt:before {
	    content: "\f3a3"
	}

	.fa-forumbee:before {
	    content: "\f211"
	}

	.fa-forward:before {
	    content: "\f04e"
	}

	.fa-foursquare:before {
	    content: "\f180"
	}

	.fa-free-code-camp:before {
	    content: "\f2c5"
	}

	.fa-freebsd:before {
	    content: "\f3a4"
	}

	.fa-frog:before {
	    content: "\f52e"
	}

	.fa-frown:before {
	    content: "\f119"
	}

	.fa-frown-open:before {
	    content: "\f57a"
	}

	.fa-fulcrum:before {
	    content: "\f50b"
	}

	.fa-funnel-dollar:before {
	    content: "\f662"
	}

	.fa-futbol:before {
	    content: "\f1e3"
	}

	.fa-galactic-republic:before {
	    content: "\f50c"
	}

	.fa-galactic-senate:before {
	    content: "\f50d"
	}

	.fa-gamepad:before {
	    content: "\f11b"
	}

	.fa-gas-pump:before {
	    content: "\f52f"
	}

	.fa-gavel:before {
	    content: "\f0e3"
	}

	.fa-gem:before {
	    content: "\f3a5"
	}

	.fa-genderless:before {
	    content: "\f22d"
	}

	.fa-get-pocket:before {
	    content: "\f265"
	}

	.fa-gg:before {
	    content: "\f260"
	}

	.fa-gg-circle:before {
	    content: "\f261"
	}

	.fa-ghost:before {
	    content: "\f6e2"
	}

	.fa-gift:before {
	    content: "\f06b"
	}

	.fa-gifts:before {
	    content: "\f79c"
	}

	.fa-git:before {
	    content: "\f1d3"
	}

	.fa-git-alt:before {
	    content: "\f841"
	}

	.fa-git-square:before {
	    content: "\f1d2"
	}

	.fa-github:before {
	    content: "\f09b"
	}

	.fa-github-alt:before {
	    content: "\f113"
	}

	.fa-github-square:before {
	    content: "\f092"
	}

	.fa-gitkraken:before {
	    content: "\f3a6"
	}

	.fa-gitlab:before {
	    content: "\f296"
	}

	.fa-gitter:before {
	    content: "\f426"
	}

	.fa-glass-cheers:before {
	    content: "\f79f"
	}

	.fa-glass-martini:before {
	    content: "\f000"
	}

	.fa-glass-martini-alt:before {
	    content: "\f57b"
	}

	.fa-glass-whiskey:before {
	    content: "\f7a0"
	}

	.fa-glasses:before {
	    content: "\f530"
	}

	.fa-glide:before {
	    content: "\f2a5"
	}

	.fa-glide-g:before {
	    content: "\f2a6"
	}

	.fa-globe:before {
	    content: "\f0ac"
	}

	.fa-globe-africa:before {
	    content: "\f57c"
	}

	.fa-globe-americas:before {
	    content: "\f57d"
	}

	.fa-globe-asia:before {
	    content: "\f57e"
	}

	.fa-globe-europe:before {
	    content: "\f7a2"
	}

	.fa-gofore:before {
	    content: "\f3a7"
	}

	.fa-golf-ball:before {
	    content: "\f450"
	}

	.fa-goodreads:before {
	    content: "\f3a8"
	}

	.fa-goodreads-g:before {
	    content: "\f3a9"
	}

	.fa-google:before {
	    content: "\f1a0"
	}

	.fa-google-drive:before {
	    content: "\f3aa"
	}

	.fa-google-play:before {
	    content: "\f3ab"
	}

	.fa-google-plus:before {
	    content: "\f2b3"
	}

	.fa-google-plus-g:before {
	    content: "\f0d5"
	}

	.fa-google-plus-square:before {
	    content: "\f0d4"
	}

	.fa-google-wallet:before {
	    content: "\f1ee"
	}

	.fa-gopuram:before {
	    content: "\f664"
	}

	.fa-graduation-cap:before {
	    content: "\f19d"
	}

	.fa-gratipay:before {
	    content: "\f184"
	}

	.fa-grav:before {
	    content: "\f2d6"
	}

	.fa-greater-than:before {
	    content: "\f531"
	}

	.fa-greater-than-equal:before {
	    content: "\f532"
	}

	.fa-grimace:before {
	    content: "\f57f"
	}

	.fa-grin:before {
	    content: "\f580"
	}

	.fa-grin-alt:before {
	    content: "\f581"
	}

	.fa-grin-beam:before {
	    content: "\f582"
	}

	.fa-grin-beam-sweat:before {
	    content: "\f583"
	}

	.fa-grin-hearts:before {
	    content: "\f584"
	}

	.fa-grin-squint:before {
	    content: "\f585"
	}

	.fa-grin-squint-tears:before {
	    content: "\f586"
	}

	.fa-grin-stars:before {
	    content: "\f587"
	}

	.fa-grin-tears:before {
	    content: "\f588"
	}

	.fa-grin-tongue:before {
	    content: "\f589"
	}

	.fa-grin-tongue-squint:before {
	    content: "\f58a"
	}

	.fa-grin-tongue-wink:before {
	    content: "\f58b"
	}

	.fa-grin-wink:before {
	    content: "\f58c"
	}

	.fa-grip-horizontal:before {
	    content: "\f58d"
	}

	.fa-grip-lines:before {
	    content: "\f7a4"
	}

	.fa-grip-lines-vertical:before {
	    content: "\f7a5"
	}

	.fa-grip-vertical:before {
	    content: "\f58e"
	}

	.fa-gripfire:before {
	    content: "\f3ac"
	}

	.fa-grunt:before {
	    content: "\f3ad"
	}

	.fa-guitar:before {
	    content: "\f7a6"
	}

	.fa-gulp:before {
	    content: "\f3ae"
	}

	.fa-h-square:before {
	    content: "\f0fd"
	}

	.fa-hacker-news:before {
	    content: "\f1d4"
	}

	.fa-hacker-news-square:before {
	    content: "\f3af"
	}

	.fa-hackerrank:before {
	    content: "\f5f7"
	}

	.fa-hamburger:before {
	    content: "\f805"
	}

	.fa-hammer:before {
	    content: "\f6e3"
	}

	.fa-hamsa:before {
	    content: "\f665"
	}

	.fa-hand-holding:before {
	    content: "\f4bd"
	}

	.fa-hand-holding-heart:before {
	    content: "\f4be"
	}

	.fa-hand-holding-usd:before {
	    content: "\f4c0"
	}

	.fa-hand-lizard:before {
	    content: "\f258"
	}

	.fa-hand-middle-finger:before {
	    content: "\f806"
	}

	.fa-hand-paper:before {
	    content: "\f256"
	}

	.fa-hand-peace:before {
	    content: "\f25b"
	}

	.fa-hand-point-down:before {
	    content: "\f0a7"
	}

	.fa-hand-point-left:before {
	    content: "\f0a5"
	}

	.fa-hand-point-right:before {
	    content: "\f0a4"
	}

	.fa-hand-point-up:before {
	    content: "\f0a6"
	}

	.fa-hand-pointer:before {
	    content: "\f25a"
	}

	.fa-hand-rock:before {
	    content: "\f255"
	}

	.fa-hand-scissors:before {
	    content: "\f257"
	}

	.fa-hand-spock:before {
	    content: "\f259"
	}

	.fa-hands:before {
	    content: "\f4c2"
	}

	.fa-hands-helping:before {
	    content: "\f4c4"
	}

	.fa-handshake:before {
	    content: "\f2b5"
	}

	.fa-hanukiah:before {
	    content: "\f6e6"
	}

	.fa-hard-hat:before {
	    content: "\f807"
	}

	.fa-hashtag:before {
	    content: "\f292"
	}

	.fa-hat-wizard:before {
	    content: "\f6e8"
	}

	.fa-haykal:before {
	    content: "\f666"
	}

	.fa-hdd:before {
	    content: "\f0a0"
	}

	.fa-heading:before {
	    content: "\f1dc"
	}

	.fa-headphones:before {
	    content: "\f025"
	}

	.fa-headphones-alt:before {
	    content: "\f58f"
	}

	.fa-headset:before {
	    content: "\f590"
	}

	.fa-heart:before {
	    content: "\f004"
	}

	.fa-heart-broken:before {
	    content: "\f7a9"
	}

	.fa-heartbeat:before {
	    content: "\f21e"
	}

	.fa-helicopter:before {
	    content: "\f533"
	}

	.fa-highlighter:before {
	    content: "\f591"
	}

	.fa-hiking:before {
	    content: "\f6ec"
	}

	.fa-hippo:before {
	    content: "\f6ed"
	}

	.fa-hips:before {
	    content: "\f452"
	}

	.fa-hire-a-helper:before {
	    content: "\f3b0"
	}

	.fa-history:before {
	    content: "\f1da"
	}

	.fa-hockey-puck:before {
	    content: "\f453"
	}

	.fa-holly-berry:before {
	    content: "\f7aa"
	}

	.fa-home:before {
	    content: "\f015"
	}

	.fa-hooli:before {
	    content: "\f427"
	}

	.fa-hornbill:before {
	    content: "\f592"
	}

	.fa-horse:before {
	    content: "\f6f0"
	}

	.fa-horse-head:before {
	    content: "\f7ab"
	}

	.fa-hospital:before {
	    content: "\f0f8"
	}

	.fa-hospital-alt:before {
	    content: "\f47d"
	}

	.fa-hospital-symbol:before {
	    content: "\f47e"
	}

	.fa-hot-tub:before {
	    content: "\f593"
	}

	.fa-hotdog:before {
	    content: "\f80f"
	}

	.fa-hotel:before {
	    content: "\f594"
	}

	.fa-hotjar:before {
	    content: "\f3b1"
	}

	.fa-hourglass:before {
	    content: "\f254"
	}

	.fa-hourglass-end:before {
	    content: "\f253"
	}

	.fa-hourglass-half:before {
	    content: "\f252"
	}

	.fa-hourglass-start:before {
	    content: "\f251"
	}

	.fa-house-damage:before {
	    content: "\f6f1"
	}

	.fa-houzz:before {
	    content: "\f27c"
	}

	.fa-hryvnia:before {
	    content: "\f6f2"
	}

	.fa-html5:before {
	    content: "\f13b"
	}

	.fa-hubspot:before {
	    content: "\f3b2"
	}

	.fa-i-cursor:before {
	    content: "\f246"
	}

	.fa-ice-cream:before {
	    content: "\f810"
	}

	.fa-icicles:before {
	    content: "\f7ad"
	}

	.fa-icons:before {
	    content: "\f86d"
	}

	.fa-id-badge:before {
	    content: "\f2c1"
	}

	.fa-id-card:before {
	    content: "\f2c2"
	}

	.fa-id-card-alt:before {
	    content: "\f47f"
	}

	.fa-igloo:before {
	    content: "\f7ae"
	}

	.fa-image:before {
	    content: "\f03e"
	}

	.fa-images:before {
	    content: "\f302"
	}

	.fa-imdb:before {
	    content: "\f2d8"
	}

	.fa-inbox:before {
	    content: "\f01c"
	}

	.fa-indent:before {
	    content: "\f03c"
	}

	.fa-industry:before {
	    content: "\f275"
	}

	.fa-infinity:before {
	    content: "\f534"
	}

	.fa-info:before {
	    content: "\f129"
	}

	.fa-info-circle:before {
	    content: "\f05a"
	}

	.fa-instagram:before {
	    content: "\f16d"
	}

	.fa-intercom:before {
	    content: "\f7af"
	}

	.fa-internet-explorer:before {
	    content: "\f26b"
	}

	.fa-invision:before {
	    content: "\f7b0"
	}

	.fa-ioxhost:before {
	    content: "\f208"
	}

	.fa-italic:before {
	    content: "\f033"
	}

	.fa-itch-io:before {
	    content: "\f83a"
	}

	.fa-itunes:before {
	    content: "\f3b4"
	}

	.fa-itunes-note:before {
	    content: "\f3b5"
	}

	.fa-java:before {
	    content: "\f4e4"
	}

	.fa-jedi:before {
	    content: "\f669"
	}

	.fa-jedi-order:before {
	    content: "\f50e"
	}

	.fa-jenkins:before {
	    content: "\f3b6"
	}

	.fa-jira:before {
	    content: "\f7b1"
	}

	.fa-joget:before {
	    content: "\f3b7"
	}

	.fa-joint:before {
	    content: "\f595"
	}

	.fa-joomla:before {
	    content: "\f1aa"
	}

	.fa-journal-whills:before {
	    content: "\f66a"
	}

	.fa-js:before {
	    content: "\f3b8"
	}

	.fa-js-square:before {
	    content: "\f3b9"
	}

	.fa-jsfiddle:before {
	    content: "\f1cc"
	}

	.fa-kaaba:before {
	    content: "\f66b"
	}

	.fa-kaggle:before {
	    content: "\f5fa"
	}

	.fa-key:before {
	    content: "\f084"
	}

	.fa-keybase:before {
	    content: "\f4f5"
	}

	.fa-keyboard:before {
	    content: "\f11c"
	}

	.fa-keycdn:before {
	    content: "\f3ba"
	}

	.fa-khanda:before {
	    content: "\f66d"
	}

	.fa-kickstarter:before {
	    content: "\f3bb"
	}

	.fa-kickstarter-k:before {
	    content: "\f3bc"
	}

	.fa-kiss:before {
	    content: "\f596"
	}

	.fa-kiss-beam:before {
	    content: "\f597"
	}

	.fa-kiss-wink-heart:before {
	    content: "\f598"
	}

	.fa-kiwi-bird:before {
	    content: "\f535"
	}

	.fa-korvue:before {
	    content: "\f42f"
	}

	.fa-landmark:before {
	    content: "\f66f"
	}

	.fa-language:before {
	    content: "\f1ab"
	}

	.fa-laptop:before {
	    content: "\f109"
	}

	.fa-laptop-code:before {
	    content: "\f5fc"
	}

	.fa-laptop-medical:before {
	    content: "\f812"
	}

	.fa-laravel:before {
	    content: "\f3bd"
	}

	.fa-lastfm:before {
	    content: "\f202"
	}

	.fa-lastfm-square:before {
	    content: "\f203"
	}

	.fa-laugh:before {
	    content: "\f599"
	}

	.fa-laugh-beam:before {
	    content: "\f59a"
	}

	.fa-laugh-squint:before {
	    content: "\f59b"
	}

	.fa-laugh-wink:before {
	    content: "\f59c"
	}

	.fa-layer-group:before {
	    content: "\f5fd"
	}

	.fa-leaf:before {
	    content: "\f06c"
	}

	.fa-leanpub:before {
	    content: "\f212"
	}

	.fa-lemon:before {
	    content: "\f094"
	}

	.fa-less:before {
	    content: "\f41d"
	}

	.fa-less-than:before {
	    content: "\f536"
	}

	.fa-less-than-equal:before {
	    content: "\f537"
	}

	.fa-level-down-alt:before {
	    content: "\f3be"
	}

	.fa-level-up-alt:before {
	    content: "\f3bf"
	}

	.fa-life-ring:before {
	    content: "\f1cd"
	}

	.fa-lightbulb:before {
	    content: "\f0eb"
	}

	.fa-line:before {
	    content: "\f3c0"
	}

	.fa-link:before {
	    content: "\f0c1"
	}

	.fa-linkedin:before {
	    content: "\f08c"
	}

	.fa-linkedin-in:before {
	    content: "\f0e1"
	}

	.fa-linode:before {
	    content: "\f2b8"
	}

	.fa-linux:before {
	    content: "\f17c"
	}

	.fa-lira-sign:before {
	    content: "\f195"
	}

	.fa-list:before {
	    content: "\f03a"
	}

	.fa-list-alt:before {
	    content: "\f022"
	}

	.fa-list-ol:before {
	    content: "\f0cb"
	}

	.fa-list-ul:before {
	    content: "\f0ca"
	}

	.fa-location-arrow:before {
	    content: "\f124"
	}

	.fa-lock:before {
	    content: "\f023"
	}

	.fa-lock-open:before {
	    content: "\f3c1"
	}

	.fa-long-arrow-alt-down:before {
	    content: "\f309"
	}

	.fa-long-arrow-alt-left:before {
	    content: "\f30a"
	}

	.fa-long-arrow-alt-right:before {
	    content: "\f30b"
	}

	.fa-long-arrow-alt-up:before {
	    content: "\f30c"
	}

	.fa-low-vision:before {
	    content: "\f2a8"
	}

	.fa-luggage-cart:before {
	    content: "\f59d"
	}

	.fa-lyft:before {
	    content: "\f3c3"
	}

	.fa-magento:before {
	    content: "\f3c4"
	}

	.fa-magic:before {
	    content: "\f0d0"
	}

	.fa-magnet:before {
	    content: "\f076"
	}

	.fa-mail-bulk:before {
	    content: "\f674"
	}

	.fa-mailchimp:before {
	    content: "\f59e"
	}

	.fa-male:before {
	    content: "\f183"
	}

	.fa-mandalorian:before {
	    content: "\f50f"
	}

	.fa-map:before {
	    content: "\f279"
	}

	.fa-map-marked:before {
	    content: "\f59f"
	}

	.fa-map-marked-alt:before {
	    content: "\f5a0"
	}

	.fa-map-marker:before {
	    content: "\f041"
	}

	.fa-map-marker-alt:before {
	    content: "\f3c5"
	}

	.fa-map-pin:before {
	    content: "\f276"
	}

	.fa-map-signs:before {
	    content: "\f277"
	}

	.fa-markdown:before {
	    content: "\f60f"
	}

	.fa-marker:before {
	    content: "\f5a1"
	}

	.fa-mars:before {
	    content: "\f222"
	}

	.fa-mars-double:before {
	    content: "\f227"
	}

	.fa-mars-stroke:before {
	    content: "\f229"
	}

	.fa-mars-stroke-h:before {
	    content: "\f22b"
	}

	.fa-mars-stroke-v:before {
	    content: "\f22a"
	}

	.fa-mask:before {
	    content: "\f6fa"
	}

	.fa-mastodon:before {
	    content: "\f4f6"
	}

	.fa-maxcdn:before {
	    content: "\f136"
	}

	.fa-medal:before {
	    content: "\f5a2"
	}

	.fa-medapps:before {
	    content: "\f3c6"
	}

	.fa-medium:before {
	    content: "\f23a"
	}

	.fa-medium-m:before {
	    content: "\f3c7"
	}

	.fa-medkit:before {
	    content: "\f0fa"
	}

	.fa-medrt:before {
	    content: "\f3c8"
	}

	.fa-meetup:before {
	    content: "\f2e0"
	}

	.fa-megaport:before {
	    content: "\f5a3"
	}

	.fa-meh:before {
	    content: "\f11a"
	}

	.fa-meh-blank:before {
	    content: "\f5a4"
	}

	.fa-meh-rolling-eyes:before {
	    content: "\f5a5"
	}

	.fa-memory:before {
	    content: "\f538"
	}

	.fa-mendeley:before {
	    content: "\f7b3"
	}

	.fa-menorah:before {
	    content: "\f676"
	}

	.fa-mercury:before {
	    content: "\f223"
	}

	.fa-meteor:before {
	    content: "\f753"
	}

	.fa-microchip:before {
	    content: "\f2db"
	}

	.fa-microphone:before {
	    content: "\f130"
	}

	.fa-microphone-alt:before {
	    content: "\f3c9"
	}

	.fa-microphone-alt-slash:before {
	    content: "\f539"
	}

	.fa-microphone-slash:before {
	    content: "\f131"
	}

	.fa-microscope:before {
	    content: "\f610"
	}

	.fa-microsoft:before {
	    content: "\f3ca"
	}

	.fa-minus:before {
	    content: "\f068"
	}

	.fa-minus-circle:before {
	    content: "\f056"
	}

	.fa-minus-square:before {
	    content: "\f146"
	}

	.fa-mitten:before {
	    content: "\f7b5"
	}

	.fa-mix:before {
	    content: "\f3cb"
	}

	.fa-mixcloud:before {
	    content: "\f289"
	}

	.fa-mizuni:before {
	    content: "\f3cc"
	}

	.fa-mobile:before {
	    content: "\f10b"
	}

	.fa-mobile-alt:before {
	    content: "\f3cd"
	}

	.fa-modx:before {
	    content: "\f285"
	}

	.fa-monero:before {
	    content: "\f3d0"
	}

	.fa-money-bill:before {
	    content: "\f0d6"
	}

	.fa-money-bill-alt:before {
	    content: "\f3d1"
	}

	.fa-money-bill-wave:before {
	    content: "\f53a"
	}

	.fa-money-bill-wave-alt:before {
	    content: "\f53b"
	}

	.fa-money-check:before {
	    content: "\f53c"
	}

	.fa-money-check-alt:before {
	    content: "\f53d"
	}

	.fa-monument:before {
	    content: "\f5a6"
	}

	.fa-moon:before {
	    content: "\f186"
	}

	.fa-mortar-pestle:before {
	    content: "\f5a7"
	}

	.fa-mosque:before {
	    content: "\f678"
	}

	.fa-motorcycle:before {
	    content: "\f21c"
	}

	.fa-mountain:before {
	    content: "\f6fc"
	}

	.fa-mouse-pointer:before {
	    content: "\f245"
	}

	.fa-mug-hot:before {
	    content: "\f7b6"
	}

	.fa-music:before {
	    content: "\f001"
	}

	.fa-napster:before {
	    content: "\f3d2"
	}

	.fa-neos:before {
	    content: "\f612"
	}

	.fa-network-wired:before {
	    content: "\f6ff"
	}

	.fa-neuter:before {
	    content: "\f22c"
	}

	.fa-newspaper:before {
	    content: "\f1ea"
	}

	.fa-nimblr:before {
	    content: "\f5a8"
	}

	.fa-node:before {
	    content: "\f419"
	}

	.fa-node-js:before {
	    content: "\f3d3"
	}

	.fa-not-equal:before {
	    content: "\f53e"
	}

	.fa-notes-medical:before {
	    content: "\f481"
	}

	.fa-npm:before {
	    content: "\f3d4"
	}

	.fa-ns8:before {
	    content: "\f3d5"
	}

	.fa-nutritionix:before {
	    content: "\f3d6"
	}

	.fa-object-group:before {
	    content: "\f247"
	}

	.fa-object-ungroup:before {
	    content: "\f248"
	}

	.fa-odnoklassniki:before {
	    content: "\f263"
	}

	.fa-odnoklassniki-square:before {
	    content: "\f264"
	}

	.fa-oil-can:before {
	    content: "\f613"
	}

	.fa-old-republic:before {
	    content: "\f510"
	}

	.fa-om:before {
	    content: "\f679"
	}

	.fa-opencart:before {
	    content: "\f23d"
	}

	.fa-openid:before {
	    content: "\f19b"
	}

	.fa-opera:before {
	    content: "\f26a"
	}

	.fa-optin-monster:before {
	    content: "\f23c"
	}

	.fa-osi:before {
	    content: "\f41a"
	}

	.fa-otter:before {
	    content: "\f700"
	}

	.fa-outdent:before {
	    content: "\f03b"
	}

	.fa-page4:before {
	    content: "\f3d7"
	}

	.fa-pagelines:before {
	    content: "\f18c"
	}

	.fa-pager:before {
	    content: "\f815"
	}

	.fa-paint-brush:before {
	    content: "\f1fc"
	}

	.fa-paint-roller:before {
	    content: "\f5aa"
	}

	.fa-palette:before {
	    content: "\f53f"
	}

	.fa-palfed:before {
	    content: "\f3d8"
	}

	.fa-pallet:before {
	    content: "\f482"
	}

	.fa-paper-plane:before {
	    content: "\f1d8"
	}

	.fa-paperclip:before {
	    content: "\f0c6"
	}

	.fa-parachute-box:before {
	    content: "\f4cd"
	}

	.fa-paragraph:before {
	    content: "\f1dd"
	}

	.fa-parking:before {
	    content: "\f540"
	}

	.fa-passport:before {
	    content: "\f5ab"
	}

	.fa-pastafarianism:before {
	    content: "\f67b"
	}

	.fa-paste:before {
	    content: "\f0ea"
	}

	.fa-patreon:before {
	    content: "\f3d9"
	}

	.fa-pause:before {
	    content: "\f04c"
	}

	.fa-pause-circle:before {
	    content: "\f28b"
	}

	.fa-paw:before {
	    content: "\f1b0"
	}

	.fa-paypal:before {
	    content: "\f1ed"
	}

	.fa-peace:before {
	    content: "\f67c"
	}

	.fa-pen:before {
	    content: "\f304"
	}

	.fa-pen-alt:before {
	    content: "\f305"
	}

	.fa-pen-fancy:before {
	    content: "\f5ac"
	}

	.fa-pen-nib:before {
	    content: "\f5ad"
	}

	.fa-pen-square:before {
	    content: "\f14b"
	}

	.fa-pencil-alt:before {
	    content: "\f303"
	}

	.fa-pencil-ruler:before {
	    content: "\f5ae"
	}

	.fa-penny-arcade:before {
	    content: "\f704"
	}

	.fa-people-carry:before {
	    content: "\f4ce"
	}

	.fa-pepper-hot:before {
	    content: "\f816"
	}

	.fa-percent:before {
	    content: "\f295"
	}

	.fa-percentage:before {
	    content: "\f541"
	}

	.fa-periscope:before {
	    content: "\f3da"
	}

	.fa-person-booth:before {
	    content: "\f756"
	}

	.fa-phabricator:before {
	    content: "\f3db"
	}

	.fa-phoenix-framework:before {
	    content: "\f3dc"
	}

	.fa-phoenix-squadron:before {
	    content: "\f511"
	}

	.fa-phone:before {
	    content: "\f095"
	}

	.fa-phone-alt:before {
	    content: "\f879"
	}

	.fa-phone-slash:before {
	    content: "\f3dd"
	}

	.fa-phone-square:before {
	    content: "\f098"
	}

	.fa-phone-square-alt:before {
	    content: "\f87b"
	}

	.fa-phone-volume:before {
	    content: "\f2a0"
	}

	.fa-photo-video:before {
	    content: "\f87c"
	}

	.fa-php:before {
	    content: "\f457"
	}

	.fa-pied-piper:before {
	    content: "\f2ae"
	}

	.fa-pied-piper-alt:before {
	    content: "\f1a8"
	}

	.fa-pied-piper-hat:before {
	    content: "\f4e5"
	}

	.fa-pied-piper-pp:before {
	    content: "\f1a7"
	}

	.fa-piggy-bank:before {
	    content: "\f4d3"
	}

	.fa-pills:before {
	    content: "\f484"
	}

	.fa-pinterest:before {
	    content: "\f0d2"
	}

	.fa-pinterest-p:before {
	    content: "\f231"
	}

	.fa-pinterest-square:before {
	    content: "\f0d3"
	}

	.fa-pizza-slice:before {
	    content: "\f818"
	}

	.fa-place-of-worship:before {
	    content: "\f67f"
	}

	.fa-plane:before {
	    content: "\f072"
	}

	.fa-plane-arrival:before {
	    content: "\f5af"
	}

	.fa-plane-departure:before {
	    content: "\f5b0"
	}

	.fa-play:before {
	    content: "\f04b"
	}

	.fa-play-circle:before {
	    content: "\f144"
	}

	.fa-playstation:before {
	    content: "\f3df"
	}

	.fa-plug:before {
	    content: "\f1e6"
	}

	.fa-plus:before {
	    content: "\f067"
	}

	.fa-plus-circle:before {
	    content: "\f055"
	}

	.fa-plus-square:before {
	    content: "\f0fe"
	}

	.fa-podcast:before {
	    content: "\f2ce"
	}

	.fa-poll:before {
	    content: "\f681"
	}

	.fa-poll-h:before {
	    content: "\f682"
	}

	.fa-poo:before {
	    content: "\f2fe"
	}

	.fa-poo-storm:before {
	    content: "\f75a"
	}

	.fa-poop:before {
	    content: "\f619"
	}

	.fa-portrait:before {
	    content: "\f3e0"
	}

	.fa-pound-sign:before {
	    content: "\f154"
	}

	.fa-power-off:before {
	    content: "\f011"
	}

	.fa-pray:before {
	    content: "\f683"
	}

	.fa-praying-hands:before {
	    content: "\f684"
	}

	.fa-prescription:before {
	    content: "\f5b1"
	}

	.fa-prescription-bottle:before {
	    content: "\f485"
	}

	.fa-prescription-bottle-alt:before {
	    content: "\f486"
	}

	.fa-print:before {
	    content: "\f02f"
	}

	.fa-procedures:before {
	    content: "\f487"
	}

	.fa-product-hunt:before {
	    content: "\f288"
	}

	.fa-project-diagram:before {
	    content: "\f542"
	}

	.fa-pushed:before {
	    content: "\f3e1"
	}

	.fa-puzzle-piece:before {
	    content: "\f12e"
	}

	.fa-python:before {
	    content: "\f3e2"
	}

	.fa-qq:before {
	    content: "\f1d6"
	}

	.fa-qrcode:before {
	    content: "\f029"
	}

	.fa-question:before {
	    content: "\f128"
	}

	.fa-question-circle:before {
	    content: "\f059"
	}

	.fa-quidditch:before {
	    content: "\f458"
	}

	.fa-quinscape:before {
	    content: "\f459"
	}

	.fa-quora:before {
	    content: "\f2c4"
	}

	.fa-quote-left:before {
	    content: "\f10d"
	}

	.fa-quote-right:before {
	    content: "\f10e"
	}

	.fa-quran:before {
	    content: "\f687"
	}

	.fa-r-project:before {
	    content: "\f4f7"
	}

	.fa-radiation:before {
	    content: "\f7b9"
	}

	.fa-radiation-alt:before {
	    content: "\f7ba"
	}

	.fa-rainbow:before {
	    content: "\f75b"
	}

	.fa-random:before {
	    content: "\f074"
	}

	.fa-raspberry-pi:before {
	    content: "\f7bb"
	}

	.fa-ravelry:before {
	    content: "\f2d9"
	}

	.fa-react:before {
	    content: "\f41b"
	}

	.fa-reacteurope:before {
	    content: "\f75d"
	}

	.fa-readme:before {
	    content: "\f4d5"
	}

	.fa-rebel:before {
	    content: "\f1d0"
	}

	.fa-receipt:before {
	    content: "\f543"
	}

	.fa-recycle:before {
	    content: "\f1b8"
	}

	.fa-red-river:before {
	    content: "\f3e3"
	}

	.fa-reddit:before {
	    content: "\f1a1"
	}

	.fa-reddit-alien:before {
	    content: "\f281"
	}

	.fa-reddit-square:before {
	    content: "\f1a2"
	}

	.fa-redhat:before {
	    content: "\f7bc"
	}

	.fa-redo:before {
	    content: "\f01e"
	}

	.fa-redo-alt:before {
	    content: "\f2f9"
	}

	.fa-registered:before {
	    content: "\f25d"
	}

	.fa-remove-format:before {
	    content: "\f87d"
	}

	.fa-renren:before {
	    content: "\f18b"
	}

	.fa-reply:before {
	    content: "\f3e5"
	}

	.fa-reply-all:before {
	    content: "\f122"
	}

	.fa-replyd:before {
	    content: "\f3e6"
	}

	.fa-republican:before {
	    content: "\f75e"
	}

	.fa-researchgate:before {
	    content: "\f4f8"
	}

	.fa-resolving:before {
	    content: "\f3e7"
	}

	.fa-restroom:before {
	    content: "\f7bd"
	}

	.fa-retweet:before {
	    content: "\f079"
	}

	.fa-rev:before {
	    content: "\f5b2"
	}

	.fa-ribbon:before {
	    content: "\f4d6"
	}

	.fa-ring:before {
	    content: "\f70b"
	}

	.fa-road:before {
	    content: "\f018"
	}

	.fa-robot:before {
	    content: "\f544"
	}

	.fa-rocket:before {
	    content: "\f135"
	}

	.fa-rocketchat:before {
	    content: "\f3e8"
	}

	.fa-rockrms:before {
	    content: "\f3e9"
	}

	.fa-route:before {
	    content: "\f4d7"
	}

	.fa-rss:before {
	    content: "\f09e"
	}

	.fa-rss-square:before {
	    content: "\f143"
	}

	.fa-ruble-sign:before {
	    content: "\f158"
	}

	.fa-ruler:before {
	    content: "\f545"
	}

	.fa-ruler-combined:before {
	    content: "\f546"
	}

	.fa-ruler-horizontal:before {
	    content: "\f547"
	}

	.fa-ruler-vertical:before {
	    content: "\f548"
	}

	.fa-running:before {
	    content: "\f70c"
	}

	.fa-rupee-sign:before {
	    content: "\f156"
	}

	.fa-sad-cry:before {
	    content: "\f5b3"
	}

	.fa-sad-tear:before {
	    content: "\f5b4"
	}

	.fa-safari:before {
	    content: "\f267"
	}

	.fa-salesforce:before {
	    content: "\f83b"
	}

	.fa-sass:before {
	    content: "\f41e"
	}

	.fa-satellite:before {
	    content: "\f7bf"
	}

	.fa-satellite-dish:before {
	    content: "\f7c0"
	}

	.fa-save:before {
	    content: "\f0c7"
	}

	.fa-schlix:before {
	    content: "\f3ea"
	}

	.fa-school:before {
	    content: "\f549"
	}

	.fa-screwdriver:before {
	    content: "\f54a"
	}

	.fa-scribd:before {
	    content: "\f28a"
	}

	.fa-scroll:before {
	    content: "\f70e"
	}

	.fa-sd-card:before {
	    content: "\f7c2"
	}

	.fa-search:before {
	    content: "\f002"
	}

	.fa-search-dollar:before {
	    content: "\f688"
	}

	.fa-search-location:before {
	    content: "\f689"
	}

	.fa-search-minus:before {
	    content: "\f010"
	}

	.fa-search-plus:before {
	    content: "\f00e"
	}

	.fa-searchengin:before {
	    content: "\f3eb"
	}

	.fa-seedling:before {
	    content: "\f4d8"
	}

	.fa-sellcast:before {
	    content: "\f2da"
	}

	.fa-sellsy:before {
	    content: "\f213"
	}

	.fa-server:before {
	    content: "\f233"
	}

	.fa-servicestack:before {
	    content: "\f3ec"
	}

	.fa-shapes:before {
	    content: "\f61f"
	}

	.fa-share:before {
	    content: "\f064"
	}

	.fa-share-alt:before {
	    content: "\f1e0"
	}

	.fa-share-alt-square:before {
	    content: "\f1e1"
	}

	.fa-share-square:before {
	    content: "\f14d"
	}

	.fa-shekel-sign:before {
	    content: "\f20b"
	}

	.fa-shield-alt:before {
	    content: "\f3ed"
	}

	.fa-ship:before {
	    content: "\f21a"
	}

	.fa-shipping-fast:before {
	    content: "\f48b"
	}

	.fa-shirtsinbulk:before {
	    content: "\f214"
	}

	.fa-shoe-prints:before {
	    content: "\f54b"
	}

	.fa-shopping-bag:before {
	    content: "\f290"
	}

	.fa-shopping-basket:before {
	    content: "\f291"
	}

	.fa-shopping-cart:before {
	    content: "\f07a"
	}

	.fa-shopware:before {
	    content: "\f5b5"
	}

	.fa-shower:before {
	    content: "\f2cc"
	}

	.fa-shuttle-van:before {
	    content: "\f5b6"
	}

	.fa-sign:before {
	    content: "\f4d9"
	}

	.fa-sign-in-alt:before {
	    content: "\f2f6"
	}

	.fa-sign-language:before {
	    content: "\f2a7"
	}

	.fa-sign-out-alt:before {
	    content: "\f2f5"
	}

	.fa-signal:before {
	    content: "\f012"
	}

	.fa-signature:before {
	    content: "\f5b7"
	}

	.fa-sim-card:before {
	    content: "\f7c4"
	}

	.fa-simplybuilt:before {
	    content: "\f215"
	}

	.fa-sistrix:before {
	    content: "\f3ee"
	}

	.fa-sitemap:before {
	    content: "\f0e8"
	}

	.fa-sith:before {
	    content: "\f512"
	}

	.fa-skating:before {
	    content: "\f7c5"
	}

	.fa-sketch:before {
	    content: "\f7c6"
	}

	.fa-skiing:before {
	    content: "\f7c9"
	}

	.fa-skiing-nordic:before {
	    content: "\f7ca"
	}

	.fa-skull:before {
	    content: "\f54c"
	}

	.fa-skull-crossbones:before {
	    content: "\f714"
	}

	.fa-skyatlas:before {
	    content: "\f216"
	}

	.fa-skype:before {
	    content: "\f17e"
	}

	.fa-slack:before {
	    content: "\f198"
	}

	.fa-slack-hash:before {
	    content: "\f3ef"
	}

	.fa-slash:before {
	    content: "\f715"
	}

	.fa-sleigh:before {
	    content: "\f7cc"
	}

	.fa-sliders-h:before {
	    content: "\f1de"
	}

	.fa-slideshare:before {
	    content: "\f1e7"
	}

	.fa-smile:before {
	    content: "\f118"
	}

	.fa-smile-beam:before {
	    content: "\f5b8"
	}

	.fa-smile-wink:before {
	    content: "\f4da"
	}

	.fa-smog:before {
	    content: "\f75f"
	}

	.fa-smoking:before {
	    content: "\f48d"
	}

	.fa-smoking-ban:before {
	    content: "\f54d"
	}

	.fa-sms:before {
	    content: "\f7cd"
	}

	.fa-snapchat:before {
	    content: "\f2ab"
	}

	.fa-snapchat-ghost:before {
	    content: "\f2ac"
	}

	.fa-snapchat-square:before {
	    content: "\f2ad"
	}

	.fa-snowboarding:before {
	    content: "\f7ce"
	}

	.fa-snowflake:before {
	    content: "\f2dc"
	}

	.fa-snowman:before {
	    content: "\f7d0"
	}

	.fa-snowplow:before {
	    content: "\f7d2"
	}

	.fa-socks:before {
	    content: "\f696"
	}

	.fa-solar-panel:before {
	    content: "\f5ba"
	}

	.fa-sort:before {
	    content: "\f0dc"
	}

	.fa-sort-alpha-down:before {
	    content: "\f15d"
	}

	.fa-sort-alpha-down-alt:before {
	    content: "\f881"
	}

	.fa-sort-alpha-up:before {
	    content: "\f15e"
	}

	.fa-sort-alpha-up-alt:before {
	    content: "\f882"
	}

	.fa-sort-amount-down:before {
	    content: "\f160"
	}

	.fa-sort-amount-down-alt:before {
	    content: "\f884"
	}

	.fa-sort-amount-up:before {
	    content: "\f161"
	}

	.fa-sort-amount-up-alt:before {
	    content: "\f885"
	}

	.fa-sort-down:before {
	    content: "\f0dd"
	}

	.fa-sort-numeric-down:before {
	    content: "\f162"
	}

	.fa-sort-numeric-down-alt:before {
	    content: "\f886"
	}

	.fa-sort-numeric-up:before {
	    content: "\f163"
	}

	.fa-sort-numeric-up-alt:before {
	    content: "\f887"
	}

	.fa-sort-up:before {
	    content: "\f0de"
	}

	.fa-soundcloud:before {
	    content: "\f1be"
	}

	.fa-sourcetree:before {
	    content: "\f7d3"
	}

	.fa-spa:before {
	    content: "\f5bb"
	}

	.fa-space-shuttle:before {
	    content: "\f197"
	}

	.fa-speakap:before {
	    content: "\f3f3"
	}

	.fa-speaker-deck:before {
	    content: "\f83c"
	}

	.fa-spell-check:before {
	    content: "\f891"
	}

	.fa-spider:before {
	    content: "\f717"
	}

	.fa-spinner:before {
	    content: "\f110"
	}

	.fa-splotch:before {
	    content: "\f5bc"
	}

	.fa-spotify:before {
	    content: "\f1bc"
	}

	.fa-spray-can:before {
	    content: "\f5bd"
	}

	.fa-square:before {
	    content: "\f0c8"
	}

	.fa-square-full:before {
	    content: "\f45c"
	}

	.fa-square-root-alt:before {
	    content: "\f698"
	}

	.fa-squarespace:before {
	    content: "\f5be"
	}

	.fa-stack-exchange:before {
	    content: "\f18d"
	}

	.fa-stack-overflow:before {
	    content: "\f16c"
	}

	.fa-stackpath:before {
	    content: "\f842"
	}

	.fa-stamp:before {
	    content: "\f5bf"
	}

	.fa-star:before {
	    content: "\f005"
	}

	.fa-star-and-crescent:before {
	    content: "\f699"
	}

	.fa-star-half:before {
	    content: "\f089"
	}

	.fa-star-half-alt:before {
	    content: "\f5c0"
	}

	.fa-star-of-david:before {
	    content: "\f69a"
	}

	.fa-star-of-life:before {
	    content: "\f621"
	}

	.fa-staylinked:before {
	    content: "\f3f5"
	}

	.fa-steam:before {
	    content: "\f1b6"
	}

	.fa-steam-square:before {
	    content: "\f1b7"
	}

	.fa-steam-symbol:before {
	    content: "\f3f6"
	}

	.fa-step-backward:before {
	    content: "\f048"
	}

	.fa-step-forward:before {
	    content: "\f051"
	}

	.fa-stethoscope:before {
	    content: "\f0f1"
	}

	.fa-sticker-mule:before {
	    content: "\f3f7"
	}

	.fa-sticky-note:before {
	    content: "\f249"
	}

	.fa-stop:before {
	    content: "\f04d"
	}

	.fa-stop-circle:before {
	    content: "\f28d"
	}

	.fa-stopwatch:before {
	    content: "\f2f2"
	}

	.fa-store:before {
	    content: "\f54e"
	}

	.fa-store-alt:before {
	    content: "\f54f"
	}

	.fa-strava:before {
	    content: "\f428"
	}

	.fa-stream:before {
	    content: "\f550"
	}

	.fa-street-view:before {
	    content: "\f21d"
	}

	.fa-strikethrough:before {
	    content: "\f0cc"
	}

	.fa-stripe:before {
	    content: "\f429"
	}

	.fa-stripe-s:before {
	    content: "\f42a"
	}

	.fa-stroopwafel:before {
	    content: "\f551"
	}

	.fa-studiovinari:before {
	    content: "\f3f8"
	}

	.fa-stumbleupon:before {
	    content: "\f1a4"
	}

	.fa-stumbleupon-circle:before {
	    content: "\f1a3"
	}

	.fa-subscript:before {
	    content: "\f12c"
	}

	.fa-subway:before {
	    content: "\f239"
	}

	.fa-suitcase:before {
	    content: "\f0f2"
	}

	.fa-suitcase-rolling:before {
	    content: "\f5c1"
	}

	.fa-sun:before {
	    content: "\f185"
	}

	.fa-superpowers:before {
	    content: "\f2dd"
	}

	.fa-superscript:before {
	    content: "\f12b"
	}

	.fa-supple:before {
	    content: "\f3f9"
	}

	.fa-surprise:before {
	    content: "\f5c2"
	}

	.fa-suse:before {
	    content: "\f7d6"
	}

	.fa-swatchbook:before {
	    content: "\f5c3"
	}

	.fa-swimmer:before {
	    content: "\f5c4"
	}

	.fa-swimming-pool:before {
	    content: "\f5c5"
	}

	.fa-symfony:before {
	    content: "\f83d"
	}

	.fa-synagogue:before {
	    content: "\f69b"
	}

	.fa-sync:before {
	    content: "\f021"
	}

	.fa-sync-alt:before {
	    content: "\f2f1"
	}

	.fa-syringe:before {
	    content: "\f48e"
	}

	.fa-table:before {
	    content: "\f0ce"
	}

	.fa-table-tennis:before {
	    content: "\f45d"
	}

	.fa-tablet:before {
	    content: "\f10a"
	}

	.fa-tablet-alt:before {
	    content: "\f3fa"
	}

	.fa-tablets:before {
	    content: "\f490"
	}

	.fa-tachometer-alt:before {
	    content: "\f3fd"
	}

	.fa-tag:before {
	    content: "\f02b"
	}

	.fa-tags:before {
	    content: "\f02c"
	}

	.fa-tape:before {
	    content: "\f4db"
	}

	.fa-tasks:before {
	    content: "\f0ae"
	}

	.fa-taxi:before {
	    content: "\f1ba"
	}

	.fa-teamspeak:before {
	    content: "\f4f9"
	}

	.fa-teeth:before {
	    content: "\f62e"
	}

	.fa-teeth-open:before {
	    content: "\f62f"
	}

	.fa-telegram:before {
	    content: "\f2c6"
	}

	.fa-telegram-plane:before {
	    content: "\f3fe"
	}

	.fa-temperature-high:before {
	    content: "\f769"
	}

	.fa-temperature-low:before {
	    content: "\f76b"
	}

	.fa-tencent-weibo:before {
	    content: "\f1d5"
	}

	.fa-tenge:before {
	    content: "\f7d7"
	}

	.fa-terminal:before {
	    content: "\f120"
	}

	.fa-text-height:before {
	    content: "\f034"
	}

	.fa-text-width:before {
	    content: "\f035"
	}

	.fa-th:before {
	    content: "\f00a"
	}

	.fa-th-large:before {
	    content: "\f009"
	}

	.fa-th-list:before {
	    content: "\f00b"
	}

	.fa-the-red-yeti:before {
	    content: "\f69d"
	}

	.fa-theater-masks:before {
	    content: "\f630"
	}

	.fa-themeco:before {
	    content: "\f5c6"
	}

	.fa-themeisle:before {
	    content: "\f2b2"
	}

	.fa-thermometer:before {
	    content: "\f491"
	}

	.fa-thermometer-empty:before {
	    content: "\f2cb"
	}

	.fa-thermometer-full:before {
	    content: "\f2c7"
	}

	.fa-thermometer-half:before {
	    content: "\f2c9"
	}

	.fa-thermometer-quarter:before {
	    content: "\f2ca"
	}

	.fa-thermometer-three-quarters:before {
	    content: "\f2c8"
	}

	.fa-think-peaks:before {
	    content: "\f731"
	}

	.fa-thumbs-down:before {
	    content: "\f165"
	}

	.fa-thumbs-up:before {
	    content: "\f164"
	}

	.fa-thumbtack:before {
	    content: "\f08d"
	}

	.fa-ticket-alt:before {
	    content: "\f3ff"
	}

	.fa-times:before {
	    content: "\f00d"
	}

	.fa-times-circle:before {
	    content: "\f057"
	}

	.fa-tint:before {
	    content: "\f043"
	}

	.fa-tint-slash:before {
	    content: "\f5c7"
	}

	.fa-tired:before {
	    content: "\f5c8"
	}

	.fa-toggle-off:before {
	    content: "\f204"
	}

	.fa-toggle-on:before {
	    content: "\f205"
	}

	.fa-toilet:before {
	    content: "\f7d8"
	}

	.fa-toilet-paper:before {
	    content: "\f71e"
	}

	.fa-toolbox:before {
	    content: "\f552"
	}

	.fa-tools:before {
	    content: "\f7d9"
	}

	.fa-tooth:before {
	    content: "\f5c9"
	}

	.fa-torah:before {
	    content: "\f6a0"
	}

	.fa-torii-gate:before {
	    content: "\f6a1"
	}

	.fa-tractor:before {
	    content: "\f722"
	}

	.fa-trade-federation:before {
	    content: "\f513"
	}

	.fa-trademark:before {
	    content: "\f25c"
	}

	.fa-traffic-light:before {
	    content: "\f637"
	}

	.fa-train:before {
	    content: "\f238"
	}

	.fa-tram:before {
	    content: "\f7da"
	}

	.fa-transgender:before {
	    content: "\f224"
	}

	.fa-transgender-alt:before {
	    content: "\f225"
	}

	.fa-trash:before {
	    content: "\f1f8"
	}

	.fa-trash-alt:before {
	    content: "\f2ed"
	}

	.fa-trash-restore:before {
	    content: "\f829"
	}

	.fa-trash-restore-alt:before {
	    content: "\f82a"
	}

	.fa-tree:before {
	    content: "\f1bb"
	}

	.fa-trello:before {
	    content: "\f181"
	}

	.fa-tripadvisor:before {
	    content: "\f262"
	}

	.fa-trophy:before {
	    content: "\f091"
	}

	.fa-truck:before {
	    content: "\f0d1"
	}

	.fa-truck-loading:before {
	    content: "\f4de"
	}

	.fa-truck-monster:before {
	    content: "\f63b"
	}

	.fa-truck-moving:before {
	    content: "\f4df"
	}

	.fa-truck-pickup:before {
	    content: "\f63c"
	}

	.fa-tshirt:before {
	    content: "\f553"
	}

	.fa-tty:before {
	    content: "\f1e4"
	}

	.fa-tumblr:before {
	    content: "\f173"
	}

	.fa-tumblr-square:before {
	    content: "\f174"
	}

	.fa-tv:before {
	    content: "\f26c"
	}

	.fa-twitch:before {
	    content: "\f1e8"
	}

	.fa-twitter:before {
	    content: "\f099"
	}

	.fa-twitter-square:before {
	    content: "\f081"
	}

	.fa-typo3:before {
	    content: "\f42b"
	}

	.fa-uber:before {
	    content: "\f402"
	}

	.fa-ubuntu:before {
	    content: "\f7df"
	}

	.fa-uikit:before {
	    content: "\f403"
	}

	.fa-umbrella:before {
	    content: "\f0e9"
	}

	.fa-umbrella-beach:before {
	    content: "\f5ca"
	}

	.fa-underline:before {
	    content: "\f0cd"
	}

	.fa-undo:before {
	    content: "\f0e2"
	}

	.fa-undo-alt:before {
	    content: "\f2ea"
	}

	.fa-uniregistry:before {
	    content: "\f404"
	}

	.fa-universal-access:before {
	    content: "\f29a"
	}

	.fa-university:before {
	    content: "\f19c"
	}

	.fa-unlink:before {
	    content: "\f127"
	}

	.fa-unlock:before {
	    content: "\f09c"
	}

	.fa-unlock-alt:before {
	    content: "\f13e"
	}

	.fa-untappd:before {
	    content: "\f405"
	}

	.fa-upload:before {
	    content: "\f093"
	}

	.fa-ups:before {
	    content: "\f7e0"
	}

	.fa-usb:before {
	    content: "\f287"
	}

	.fa-user:before {
	    content: "\f007"
	}

	.fa-user-alt:before {
	    content: "\f406"
	}

	.fa-user-alt-slash:before {
	    content: "\f4fa"
	}

	.fa-user-astronaut:before {
	    content: "\f4fb"
	}

	.fa-user-check:before {
	    content: "\f4fc"
	}

	.fa-user-circle:before {
	    content: "\f2bd"
	}

	.fa-user-clock:before {
	    content: "\f4fd"
	}

	.fa-user-cog:before {
	    content: "\f4fe"
	}

	.fa-user-edit:before {
	    content: "\f4ff"
	}

	.fa-user-friends:before {
	    content: "\f500"
	}

	.fa-user-graduate:before {
	    content: "\f501"
	}

	.fa-user-injured:before {
	    content: "\f728"
	}

	.fa-user-lock:before {
	    content: "\f502"
	}

	.fa-user-md:before {
	    content: "\f0f0"
	}

	.fa-user-minus:before {
	    content: "\f503"
	}

	.fa-user-ninja:before {
	    content: "\f504"
	}

	.fa-user-nurse:before {
	    content: "\f82f"
	}

	.fa-user-plus:before {
	    content: "\f234"
	}

	.fa-user-secret:before {
	    content: "\f21b"
	}

	.fa-user-shield:before {
	    content: "\f505"
	}

	.fa-user-slash:before {
	    content: "\f506"
	}

	.fa-user-tag:before {
	    content: "\f507"
	}

	.fa-user-tie:before {
	    content: "\f508"
	}

	.fa-user-times:before {
	    content: "\f235"
	}

	.fa-users:before {
	    content: "\f0c0"
	}

	.fa-users-cog:before {
	    content: "\f509"
	}

	.fa-usps:before {
	    content: "\f7e1"
	}

	.fa-ussunnah:before {
	    content: "\f407"
	}

	.fa-utensil-spoon:before {
	    content: "\f2e5"
	}

	.fa-utensils:before {
	    content: "\f2e7"
	}

	.fa-vaadin:before {
	    content: "\f408"
	}

	.fa-vector-square:before {
	    content: "\f5cb"
	}

	.fa-venus:before {
	    content: "\f221"
	}

	.fa-venus-double:before {
	    content: "\f226"
	}

	.fa-venus-mars:before {
	    content: "\f228"
	}

	.fa-viacoin:before {
	    content: "\f237"
	}

	.fa-viadeo:before {
	    content: "\f2a9"
	}

	.fa-viadeo-square:before {
	    content: "\f2aa"
	}

	.fa-vial:before {
	    content: "\f492"
	}

	.fa-vials:before {
	    content: "\f493"
	}

	.fa-viber:before {
	    content: "\f409"
	}

	.fa-video:before {
	    content: "\f03d"
	}

	.fa-video-slash:before {
	    content: "\f4e2"
	}

	.fa-vihara:before {
	    content: "\f6a7"
	}

	.fa-vimeo:before {
	    content: "\f40a"
	}

	.fa-vimeo-square:before {
	    content: "\f194"
	}

	.fa-vimeo-v:before {
	    content: "\f27d"
	}

	.fa-vine:before {
	    content: "\f1ca"
	}

	.fa-vk:before {
	    content: "\f189"
	}

	.fa-vnv:before {
	    content: "\f40b"
	}

	.fa-voicemail:before {
	    content: "\f897"
	}

	.fa-volleyball-ball:before {
	    content: "\f45f"
	}

	.fa-volume-down:before {
	    content: "\f027"
	}

	.fa-volume-mute:before {
	    content: "\f6a9"
	}

	.fa-volume-off:before {
	    content: "\f026"
	}

	.fa-volume-up:before {
	    content: "\f028"
	}

	.fa-vote-yea:before {
	    content: "\f772"
	}

	.fa-vr-cardboard:before {
	    content: "\f729"
	}

	.fa-vuejs:before {
	    content: "\f41f"
	}

	.fa-walking:before {
	    content: "\f554"
	}

	.fa-wallet:before {
	    content: "\f555"
	}

	.fa-warehouse:before {
	    content: "\f494"
	}

	.fa-water:before {
	    content: "\f773"
	}

	.fa-wave-square:before {
	    content: "\f83e"
	}

	.fa-waze:before {
	    content: "\f83f"
	}

	.fa-weebly:before {
	    content: "\f5cc"
	}

	.fa-weibo:before {
	    content: "\f18a"
	}

	.fa-weight:before {
	    content: "\f496"
	}

	.fa-weight-hanging:before {
	    content: "\f5cd"
	}

	.fa-weixin:before {
	    content: "\f1d7"
	}

	.fa-whatsapp:before {
	    content: "\f232"
	}

	.fa-whatsapp-square:before {
	    content: "\f40c"
	}

	.fa-wheelchair:before {
	    content: "\f193"
	}

	.fa-whmcs:before {
	    content: "\f40d"
	}

	.fa-wifi:before {
	    content: "\f1eb"
	}

	.fa-wikipedia-w:before {
	    content: "\f266"
	}

	.fa-wind:before {
	    content: "\f72e"
	}

	.fa-window-close:before {
	    content: "\f410"
	}

	.fa-window-maximize:before {
	    content: "\f2d0"
	}

	.fa-window-minimize:before {
	    content: "\f2d1"
	}

	.fa-window-restore:before {
	    content: "\f2d2"
	}

	.fa-windows:before {
	    content: "\f17a"
	}

	.fa-wine-bottle:before {
	    content: "\f72f"
	}

	.fa-wine-glass:before {
	    content: "\f4e3"
	}

	.fa-wine-glass-alt:before {
	    content: "\f5ce"
	}

	.fa-wix:before {
	    content: "\f5cf"
	}

	.fa-wizards-of-the-coast:before {
	    content: "\f730"
	}

	.fa-wolf-pack-battalion:before {
	    content: "\f514"
	}

	.fa-won-sign:before {
	    content: "\f159"
	}

	.fa-wordpress:before {
	    content: "\f19a"
	}

	.fa-wordpress-simple:before {
	    content: "\f411"
	}

	.fa-wpbeginner:before {
	    content: "\f297"
	}

	.fa-wpexplorer:before {
	    content: "\f2de"
	}

	.fa-wpforms:before {
	    content: "\f298"
	}

	.fa-wpressr:before {
	    content: "\f3e4"
	}

	.fa-wrench:before {
	    content: "\f0ad"
	}

	.fa-x-ray:before {
	    content: "\f497"
	}

	.fa-xbox:before {
	    content: "\f412"
	}

	.fa-xing:before {
	    content: "\f168"
	}

	.fa-xing-square:before {
	    content: "\f169"
	}

	.fa-y-combinator:before {
	    content: "\f23b"
	}

	.fa-yahoo:before {
	    content: "\f19e"
	}

	.fa-yammer:before {
	    content: "\f840"
	}

	.fa-yandex:before {
	    content: "\f413"
	}

	.fa-yandex-international:before {
	    content: "\f414"
	}

	.fa-yarn:before {
	    content: "\f7e3"
	}

	.fa-yelp:before {
	    content: "\f1e9"
	}

	.fa-yen-sign:before {
	    content: "\f157"
	}

	.fa-yin-yang:before {
	    content: "\f6ad"
	}

	.fa-yoast:before {
	    content: "\f2b1"
	}

	.fa-youtube:before {
	    content: "\f167"
	}

	.fa-youtube-square:before {
	    content: "\f431"
	}

	.fa-zhihu:before {
	    content: "\f63f"
	}

	.sr-only {
	    border: 0;
	    clip: rect(0, 0, 0, 0);
	    height: 1px;
	    margin: -1px;
	    overflow: hidden;
	    padding: 0;
	    position: absolute;
	    width: 1px
	}

	.sr-only-focusable:active,
	.sr-only-focusable:focus {
	    clip: auto;
	    height: auto;
	    margin: 0;
	    overflow: visible;
	    position: static;
	    width: auto
	}

	@font-face {
	    font-family: "Font Awesome 5 Brands";
	    font-style: normal;
	    font-weight: normal;
	    font-display: auto;
	    src: url(../webfonts/fa-brands-400.eot);
	    src: url(../webfonts/fa-brands-400.eot?#iefix) format("embedded-opentype"), url(../webfonts/fa-brands-400.woff2) format("woff2"), url(../webfonts/fa-brands-400.woff) format("woff"), url(../webfonts/fa-brands-400.ttf) format("truetype"), url(../webfonts/fa-brands-400.svg#fontawesome) format("svg")
	}

	.fab {
	    font-family: "Font Awesome 5 Brands"
	}

	@font-face {
	    font-family: "Font Awesome 5 Free";
	    font-style: normal;
	    font-weight: 400;
	    font-display: auto;
	    src: url(../webfonts/fa-regular-400.eot);
	    src: url(../webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"), url(../webfonts/fa-regular-400.woff2) format("woff2"), url(../webfonts/fa-regular-400.woff) format("woff"), url(../webfonts/fa-regular-400.ttf) format("truetype"), url(../webfonts/fa-regular-400.svg#fontawesome) format("svg")
	}

	.far {
	    font-weight: 400
	}

	@font-face {
	    font-family: "Font Awesome 5 Free";
	    font-style: normal;
	    font-weight: 900;
	    font-display: auto;
	    src: url(../webfonts/fa-solid-900.eot);
	    src: url(../webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"), url(../webfonts/fa-solid-900.woff2) format("woff2"), url(../webfonts/fa-solid-900.woff) format("woff"), url(../webfonts/fa-solid-900.ttf) format("truetype"), url(../webfonts/fa-solid-900.svg#fontawesome) format("svg")
	}

	.fa,
	.far,
	.fas {
	    font-family: "Font Awesome 5 Free"
	}

	.fa,
	.fas {
	    font-weight: 900
	}

	</style><style>@font-face {
	    font-family: Poppins-Regular;
	    src: url(../fonts/poppins/Poppins-Regular.ttf)
	}

	@font-face {
	    font-family: Poppins-Medium;
	    src: url(../fonts/poppins/Poppins-Medium.ttf)
	}

	@font-face {
	    font-family: Poppins-Bold;
	    src: url(../fonts/poppins/Poppins-Bold.ttf)
	}

	@font-face {
	    font-family: Poppins-SemiBold;
	    src: url(../fonts/poppins/Poppins-SemiBold.ttf)
	}

	* {
	    margin: 0;
	    padding: 0;
	    box-sizing: border-box
	}

	body,
	html {
	    height: 100%;
	    font-family: lato, sans-serif;
	    font-size: 15px;
	    padding-top: 10px
	}

	element.style {}

	a {
	    color: #007bff;
	    text-decoration: none;
	    background-color: transparent;
	    -webkit-text-decoration-skip: objects
	}

	*,
	::after,
	::before {
	    box-sizing: border-box
	}

	.pink-color {
	    color: #ff6e8b
	}

	a {
	    font-family: lato, sans-serif;
	    font-size: 17px;
	    line-height: 1.7;
	    color: #666;
	    margin: 0;
	    transition: all .4s;
	    -webkit-transition: all .4s;
	    -o-transition: all .4s;
	    -moz-transition: all .4s
	}

	a:focus {
	    outline: none !important
	}

	a:hover {
	    text-decoration: none;
	    color: #fff
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
	    margin: 0
	}

	p {
	    font-family: lato, sans-serif;
	    font-size: 14px;
	    line-height: 1.7;
	    color: #fff;
	    margin: 0
	}

	ul,
	li {
	    margin: 0;
	    list-style-type: none
	}

	input {
	    outline: none;
	    border: none
	}

	textarea {
	    outline: none;
	    border: none
	}

	textarea:focus,
	input:focus {
	    border-color: transparent !important
	}

	input:focus::-webkit-input-placeholder {
	    color: transparent
	}

	input:focus:-moz-placeholder {
	    color: transparent
	}

	input:focus::-moz-placeholder {
	    color: transparent
	}

	input:focus:-ms-input-placeholder {
	    color: transparent
	}

	textarea:focus::-webkit-input-placeholder {
	    color: transparent
	}

	textarea:focus:-moz-placeholder {
	    color: transparent
	}

	textarea:focus::-moz-placeholder {
	    color: transparent
	}

	textarea:focus:-ms-input-placeholder {
	    color: transparent
	}

	input::-webkit-input-placeholder {
	    color: #fff
	}

	input:-moz-placeholder {
	    color: #fff
	}

	input::-moz-placeholder {
	    color: #fff
	}

	input:-ms-input-placeholder {
	    color: #fff
	}

	textarea::-webkit-input-placeholder {
	    color: #fff
	}

	textarea:-moz-placeholder {
	    color: #fff
	}

	textarea::-moz-placeholder {
	    color: #fff
	}

	textarea:-ms-input-placeholder {
	    color: #fff
	}

	label {
	    margin: 0;
	    display: block
	}

	button {
	    outline: none !important;
	    border: none;
	    background: 0 0
	}

	button:hover {
	    cursor: pointer
	}

	iframe {
	    border: none !important
	}

	.limiter {
	    width: 100%;
	    margin: -10% auto auto
	}

	.container-login100 {
	    width: 100%;
	    min-height: 100vh;
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    flex-wrap: wrap;
	    justify-content: center;
	    align-items: center;
	    padding: 15px;
	    background-repeat: no-repeat;
	    background-position: center;
	    background-size: cover;
	    position: relative;
	    z-index: 1
	}

	.container-login100::before {
	    content: "";
	    display: block;
	    position: absolute;
	    z-index: -1;
	    width: 100%;
	    height: 100%;
	    top: 0;
	    left: 0;
	    background-color: rgba(255, 255, 255, .1)
	}

	.wrap-login100 {
	    width: 500 px;
	    border-radius: 10px;
	    box-shadow: grey 0 0 5px;
	    padding: 34px 55px;
	    background: #9152f8;
	    background: -webkit-linear-gradient(top, #7579ff, #b224ef);
	    background: -o-linear-gradient(top, #7579ff, #b224ef);
	    background: -moz-linear-gradient(top, #7579ff, #b224ef);
	    background: linear-gradient(top, #7579ff, #b224ef)
	}

	.grecaptcha-badge {
	    z-index: 9999
	}

	body:not(#sign, #logi, #forget, #reset) .grecaptcha-badge {
	    z-index: 9999;
	    display: none
	}

	.login100-form {
	    width: 100%
	}

	.login100-form-logo {
	    font-size: 60px;
	    color: #333;
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    width: 120px;
	    height: 120px;
	    border-radius: 50%;
	    background-color: #fff;
	    margin: 0 auto
	}

	.login100-form-title {
	    font-family: Poppins-Medium;
	    font-size: 30px;
	    color: #fff;
	    line-height: 1.2;
	    text-align: center;
	    text-transform: uppercase;
	    display: block
	}

	.wrap-input100 {
	    width: 100%;
	    position: relative;
	    border-bottom: 2px solid rgba(255, 255, 255, .24);
	    margin-bottom: 30px
	}

	.wrap-input110 {
	    width: 100%;
	    position: relative;
	    margin-top: 20px
	}

	.input100 {
	    font-family: Poppins-Regular;
	    font-size: 16px;
	    color: #fff;
	    line-height: 1.2;
	    display: block;
	    width: 100%;
	    height: 45px;
	    background: 0 0;
	    padding: 0 5px 0 38px
	}

	.focus-input100 {
	    position: absolute;
	    display: block;
	    width: 100%;
	    height: 100%;
	    top: 0;
	    left: 0;
	    pointer-events: none
	}

	.focus-input100::before {
	    content: "";
	    display: block;
	    position: absolute;
	    bottom: -2px;
	    left: 0;
	    width: 0;
	    height: 2px;
	    -webkit-transition: all .4s;
	    -o-transition: all .4s;
	    -moz-transition: all .4s;
	    transition: all .4s;
	    background: #fff
	}

	.focus-input100::after {
	    font-family: Material-Design-Iconic-Font;
	    font-size: 22px;
	    color: #fff;
	    content: attr(data-placeholder);
	    display: block;
	    width: 100%;
	    position: absolute;
	    top: 6px;
	    left: 0;
	    padding-left: 5px;
	    -webkit-transition: all .4s;
	    -o-transition: all .4s;
	    -moz-transition: all .4s;
	    transition: all .4s
	}

	.input100:focus {
	    padding-left: 5px
	}

	.input100:focus+.focus-input100::after {
	    top: -22px;
	    font-size: 18px
	}

	.input100:focus+.focus-input100::before {
	    width: 100%
	}

	.has-val.input100+.focus-input100::after {
	    top: -22px;
	    font-size: 18px
	}

	.has-val.input100+.focus-input100::before {
	    width: 100%
	}

	.has-val.input100 {
	    padding-left: 5px
	}

	.txt1 {
	    font-family: Poppins-Regular;
	    font-size: 13px;
	    color: #e5e5e5 !important;
	    line-height: 1.5
	}

	.contact100-form-checkbox {
	    padding-left: 5px;
	    padding-top: 5px;
	    padding-bottom: 35px
	}

	.input-checkbox100 {
	    display: none
	}

	.label-checkbox100 {
	    font-family: Poppins-Regular;
	    font-size: 13px;
	    color: #fff;
	    line-height: 1.2;
	    display: block;
	    position: relative;
	    padding-left: 26px;
	    cursor: pointer
	}

	.label-checkbox100::before {
	    content: "\f26b";
	    font-family: Material-Design-Iconic-Font;
	    font-size: 13px;
	    color: transparent;
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    position: absolute;
	    width: 16px;
	    height: 16px;
	    border-radius: 2px;
	    background: #fff;
	    left: 0;
	    top: 50%;
	    -webkit-transform: translateY(-50%);
	    -moz-transform: translateY(-50%);
	    -ms-transform: translateY(-50%);
	    -o-transform: translateY(-50%);
	    transform: translateY(-50%)
	}

	.input-checkbox100:checked+.label-checkbox100::before {
	    color: #555
	}

	.container-login100-form-btn {
	    width: 100%;
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    flex-wrap: wrap;
	    justify-content: center
	}

	.login100-form-btn {
	    font-family: Poppins-Medium;
	    font-size: 16px;
	    color: #555;
	    line-height: 1.2;
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    padding: 0 20px;
	    min-width: 120px;
	    height: 50px;
	    border-radius: 25px;
	    background: #9152f8;
	    background: -webkit-linear-gradient(bottom, #7579ff, #b224ef);
	    background: -o-linear-gradient(bottom, #7579ff, #b224ef);
	    background: -moz-linear-gradient(bottom, #7579ff, #b224ef);
	    background: linear-gradient(bottom, #7579ff, #b224ef);
	    position: relative;
	    z-index: 1;
	    -webkit-transition: all .4s;
	    -o-transition: all .4s;
	    -moz-transition: all .4s;
	    transition: all .4s
	}

	.login100-form-btn::before {
	    content: "";
	    display: block;
	    position: absolute;
	    z-index: -1;
	    width: 100%;
	    height: 100%;
	    border-radius: 25px;
	    background-color: #fff;
	    top: 0;
	    left: 0;
	    opacity: 1;
	    -webkit-transition: all .4s;
	    -o-transition: all .4s;
	    -moz-transition: all .4s;
	    transition: all .4s
	}

	.login100-form-btn:hover {
	    color: #fff
	}

	.login100-form-btn:hover:before {
	    opacity: 0
	}

	.bg-light {
	    box-shadow: 0 0 17.55px 9.45px rgba(0, 0, 0, .05);
	    background-color: #637988 !important
	}

	nav .navbar-brand {
	    font-size: 1.7rem
	}

	.navbar-nav .nav-item:hover {
	    background-color: var(--color-dropdown);
	    cursor: pointer
	}

	li.nav-item.dropdown {
	    font-size: 15px
	}

	.home_nav .navbar-nav .nav-link {
	    padding-right: .3rem;
	    padding-left: .3rem
	}

	.nav-item:nth-child(3) .nav-link i {
	    color: #ff8b6e
	}

	.nav-item:nth-child(4) .nav-link i {
	    color: #c80abd
	}

	.nav-item:nth-child(5) .nav-link i {
	    color: #f39c12
	}

	.navbar-nav .dropdown-menu {
	    box-sizing: border-box;
	    justify-content: center
	}

	.dropdown-item {
	    display: block;
	    width: 100%;
	    padding: .25rem 1.5rem;
	    clear: both;
	    font-weight: 400;
	    color: #212529;
	    text-align: inherit;
	    white-space: nowrap;
	    background-color: transparent;
	    border: 0
	}

	.navbar-nav .dropdown-menu .dropdown-item:hover {
	    background-color: rgba(171, 205, 239, .3)
	}

	ul.profile {
	    margin-right: 33px
	}

	.header {
	    margin: 30px
	}

	.header .row>div:nth-child(1) .card-stats {
	    background-color: #adb
	}

	.header .row>div:nth-child(2) .card-stats {
	    background-color: #ad7
	}

	.header .row>div:nth-child(3) .card-stats {
	    background-color: #bbc
	}

	.header .row>div:nth-child(4) .card-stats {
	    background-color: #f39c12
	}

	.card-body .col-md-2 {
	    padding: 0;
	    position: ab
	}

	.card-body .col-md-2 .icon {
	    width: 34px;
	    height: 34px;
	    position: relative
	}

	.card-body .col-md-2 .icon i {
	    position: absolute;
	    top: 8px;
	    left: 8px
	}

	.header .row>div:nth-child(4) .card-stats .col-md-2 .icon i {
	    position: absolute;
	    top: 8px;
	    left: 12px
	}

	.main-home .card a,
	.main-home .card a:hover {
	    color: #fff;
	    font-weight: 600
	}

	.main-home .card .card-header {
	    font-size: 17px;
	    height: 54.5px
	}

	.well ul {
	    background-color: #ecf0f1;
	    line-height: 1.8;
	    color: #2c3e50;
	    font-size: 15px;
	    padding: 15px 25px
	}

	.well ul li {
	    list-style-type: disc
	}

	#ticket_data tbody tr {
	    cursor: pointer
	}

	.panel-default {
	    border-color: #ecf0f1
	}

	.panel {
	    background-color: #fff;
	    border: 1px solid transparent;
	    border-radius: 4px;
	    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
	    box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
	}

	.panel-body {
	    padding: 15px
	}

	.panel-footer {
	    padding: 10px 15px;
	    background-color: #ecf0f1;
	    border-top: 1px solid #ecf0f1;
	    border-bottom-right-radius: 3px;
	    border-bottom-left-radius: 3px
	}

	.panel-footer .label-info {
	    background-color: #3498db
	}

	.panel-footer .label-danger {
	    background-color: #e74c3c
	}

	.panel-footer .label {
	    display: inline;
	    padding: .2em .6em .3em;
	    font-size: 100%;
	    font-weight: 700;
	    line-height: 1;
	    color: #fff;
	    text-align: center;
	    white-space: nowrap;
	    vertical-align: baseline;
	    border-radius: .25em
	}

	.box-content {
	    margin-bottom: 27px
	}

	.box {
	    padding: 9px;
	    border-radius: 3px;
	    min-height: 20px;
	    padding: 19px;
	    margin-bottom: 20px;
	    background-color: #ecf0f1;
	    border: 1px solid transparent;
	    border-radius: 4px;
	    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
	    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
	}

	.box p {
	    font-size: 16px;
	    color: #000;
	    margin: 10px 0
	}

	#addReply span {
	    cursor: pointer
	}

	.bseller ul {}

	.bseller ul li {
	    list-style-type: disc
	}

	.bs-component .box table td a:hover {
	    color: #000
	}

	.home_nav {
	    flex: 8 !important;
	    flex-grow: 8 !important;
	    flex-shrink: 1 !important;
	    flex-basis: 0% !important
	}

	.mr-auto,
	.mx-auto {
	    margin-right: auto !important
	}

	.ml-auto,
	.mx-auto {
	    margin-left: auto !important
	}

	.order-0 {
	    order: 0
	}

	.navbar-dark .navbar-brand {
	    color: #fff
	}

	.navbar-brand {
	    display: inline-block;
	    padding-top: .3125rem;
	    padding-bottom: .3125rem;
	    margin-right: 1rem;
	    font-size: 1.25rem;
	    line-height: inherit;
	    white-space: nowrap
	}

	.navbar-toggler:not(:disabled):not(.disabled) {
	    cursor: pointer
	}

	element.style {}

	.navbar-toggler:not(:disabled):not(.disabled) {
	    cursor: pointer
	}

	.navbar-dark .navbar-toggler {
	    color: rgba(0, 0, 0, .69);
	    border-color: rgba(22, 20, 20, .1)
	}

	.fa,
	.fas {
	    font-weight: 900
	}

	.fa,
	.far,
	.fas {
	    font-family: "font awesome 5 free"
	}

	.fa,
	.fab,
	.fal,
	.far,
	.fas {
	    -moz-osx-font-smoothing: grayscale;
	    -webkit-font-smoothing: antialiased;
	    display: inline-block;
	    font-style: normal;
	    font-variant: normal;
	    text-rendering: auto;
	    line-height: 1
	}

	.user_nav {
	    flex: 5 !important
	}

	.form-control,
	.form-control:focus,
	.input-group-addon {
	    border-color: #e1e1e1
	}

	.form-control,
	.btn {
	    border-radius: 3px
	}

	.signup-form {
	    width: 390px;
	    margin: 0 auto;
	    padding: 30px 0;
	    font-family: roboto, sans-serif
	}

	.signup-form form {
	    color: #999;
	    border-radius: 3px;
	    margin-bottom: 15px;
	    background: #fff;
	    box-shadow: 0 3px 4px 0 rgba(0, 0, 0, .14), 0 3px 3px -2px rgba(0, 0, 0, .12), 0 1px 8px 0 rgba(0, 0, 0, .2);
	    padding: 30px
	}

	.signup-form h2 {
	    color: #333;
	    font-weight: 700;
	    margin-top: 0
	}

	.signup-form h3 {
	    color: #333;
	    font-weight: 700;
	    margin-top: 0
	}

	.signup-form hr {
	    margin: 0 -30px 20px
	}

	.signup-form .form-group {
	    margin-bottom: 20px
	}

	.signup-form .form-group2 {
	    width: 100%;
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    flex-wrap: wrap;
	    justify-content: center
	}

	.signup-form label {
	    font-weight: 400;
	    font-size: 13px
	}

	.signup-form .form-control {
	    min-height: 38px;
	    box-shadow: none !important
	}

	.signup-form .input-group-addon {
	    max-width: 42px;
	    text-align: center
	}

	.signup-form input[type=checkbox] {
	    margin-top: 2px
	}

	.signup-form .btn {
	    font-size: 14px;
	    background: #19aa8d;
	    border: none;
	    min-width: 140px
	}

	.signup-form .btn:hover,
	.signup-form .btn:focus {
	    background: #179b81;
	    outline: none
	}

	.signup-form a {
	    color: #fff;
	    text-decoration: underline
	}

	.signup-form a:hover {
	    text-decoration: none
	}

	.signup-form form a {
	    color: #19aa8d;
	    text-decoration: none
	}

	.signup-form form a:hover {
	    text-decoration: underline
	}

	.signup-form .fa {
	    font-size: 21px
	}

	.signup-form .fa-paper-plane {
	    font-size: 18px
	}

	.signup-form .fa-check {
	    color: #fff;
	    left: 17px;
	    top: 18px;
	    font-size: 7px;
	    position: absolute
	}

	.login-logo,
	.register-logo {
	    font-size: 35px;
	    text-align: center;
	    width: 200px;
	    margin-top: 1%;
	    margin-left: auto;
	    margin-right: auto;
	    margin-bottom: 4px;
	    font-weight: 300;
	    border-radius: 50%;
	    box-shadow: 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12), 0 2px 4px -1px rgba(0, 0, 0, .2)
	}

	li {
	    display: list-item
	}

	.navbar.navbar-light .breadcrumb .nav-item .nav-link,
	.navbar.navbar-light .navbar-nav .nav-item .nav-link {
	    font-size: 15px
	}

	</style><style>.p-t-27 {
	    padding-top: 27px
	}

	.p-b-34 {
	    padding-bottom: 34px
	}

	.m-b-10 {
	    margin-bottom: 10px
	}

	.m-l-r-auto {
	    margin-left: auto;
	    margin-right: auto
	}

	.m-l-auto {
	    margin-left: auto
	}

	.m-r-auto {
	    margin-right: auto
	}

	.text-white {
	    color: #fff
	}

	.text-black {
	    color: #000
	}

	.text-hov-white:hover {
	    color: #fff
	}

	.text-up {
	    text-transform: uppercase
	}

	.text-center {
	    text-align: center
	}

	.text-left {
	    text-align: left
	}

	.text-right {
	    text-align: right
	}

	.text-middle {
	    vertical-align: middle
	}

	.dis-none {
	    display: none
	}

	.dis-block {
	    display: block
	}

	.dis-inline {
	    display: inline
	}

	.dis-inline-block {
	    display: inline-block
	}

	.dis-flex {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex
	}

	.pos-relative {
	    position: relative
	}

	.pos-absolute {
	    position: absolute
	}

	.pos-fixed {
	    position: fixed
	}

	.float-l {
	    float: left
	}

	.float-r {
	    float: right
	}

	.sizefull {
	    width: 100%;
	    height: 100%
	}

	.w-full {
	    width: 100%
	}

	.h-full {
	    height: 100%
	}

	.max-w-full {
	    max-width: 100%
	}

	.max-h-full {
	    max-height: 100%
	}

	.min-w-full {
	    min-width: 100%
	}

	.min-h-full {
	    min-height: 100%
	}

	.top-0 {
	    top: 0
	}

	.bottom-0 {
	    bottom: 0
	}

	.left-0 {
	    left: 0
	}

	.right-0 {
	    right: 0
	}

	.top-auto {
	    top: auto
	}

	.bottom-auto {
	    bottom: auto
	}

	.left-auto {
	    left: auto
	}

	.right-auto {
	    right: auto
	}

	.op-0-0 {
	    opacity: 0
	}

	.op-0-1 {
	    opacity: .1
	}

	.op-0-2 {
	    opacity: .2
	}

	.op-0-3 {
	    opacity: .3
	}

	.op-0-4 {
	    opacity: .4
	}

	.op-0-5 {
	    opacity: .5
	}

	.op-0-6 {
	    opacity: .6
	}

	.op-0-7 {
	    opacity: .7
	}

	.op-0-8 {
	    opacity: .8
	}

	.op-0-9 {
	    opacity: .9
	}

	.op-1-0 {
	    opacity: 1
	}

	.bgwhite {
	    background-color: #fff
	}

	.bgblack {
	    background-color: #000
	}

	.wrap-pic-w img {
	    width: 100%
	}

	.wrap-pic-max-w img {
	    max-width: 100%
	}

	.wrap-pic-h img {
	    height: 100%
	}

	.wrap-pic-max-h img {
	    max-height: 100%
	}

	.wrap-pic-cir {
	    border-radius: 50%;
	    overflow: hidden
	}

	.wrap-pic-cir img {
	    width: 100%
	}

	.hov-pointer:hover {
	    cursor: pointer
	}

	.hov-img-zoom {
	    display: block;
	    overflow: hidden
	}

	.hov-img-zoom img {
	    width: 100%;
	    -webkit-transition: all .6s;
	    -o-transition: all .6s;
	    -moz-transition: all .6s;
	    transition: all .6s
	}

	.hov-img-zoom:hover img {
	    -webkit-transform: scale(1.1);
	    -moz-transform: scale(1.1);
	    -ms-transform: scale(1.1);
	    -o-transform: scale(1.1);
	    transform: scale(1.1)
	}

	.bo-cir {
	    border-radius: 50%
	}

	.of-hidden {
	    overflow: hidden
	}

	.visible-false {
	    visibility: hidden
	}

	.visible-true {
	    visibility: visible
	}

	.trans-0-1 {
	    -webkit-transition: all .1s;
	    -o-transition: all .1s;
	    -moz-transition: all .1s;
	    transition: all .1s
	}

	.trans-0-2 {
	    -webkit-transition: all .2s;
	    -o-transition: all .2s;
	    -moz-transition: all .2s;
	    transition: all .2s
	}

	.trans-0-3 {
	    -webkit-transition: all .3s;
	    -o-transition: all .3s;
	    -moz-transition: all .3s;
	    transition: all .3s
	}

	.trans-0-4 {
	    -webkit-transition: all .4s;
	    -o-transition: all .4s;
	    -moz-transition: all .4s;
	    transition: all .4s
	}

	.trans-0-5 {
	    -webkit-transition: all .5s;
	    -o-transition: all .5s;
	    -moz-transition: all .5s;
	    transition: all .5s
	}

	.trans-0-6 {
	    -webkit-transition: all .6s;
	    -o-transition: all .6s;
	    -moz-transition: all .6s;
	    transition: all .6s
	}

	.trans-0-9 {
	    -webkit-transition: all .9s;
	    -o-transition: all .9s;
	    -moz-transition: all .9s;
	    transition: all .9s
	}

	.trans-1-0 {
	    -webkit-transition: all 1s;
	    -o-transition: all 1s;
	    -moz-transition: all 1s;
	    transition: all 1s
	}

	.flex-w {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-wrap: wrap;
	    -moz-flex-wrap: wrap;
	    -ms-flex-wrap: wrap;
	    -o-flex-wrap: wrap;
	    flex-wrap: wrap
	}

	.flex-l {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: flex-start
	}

	.flex-r {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: flex-end
	}

	.flex-c {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: center
	}

	.flex-sa {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: space-around
	}

	.flex-sb {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: space-between
	}

	.flex-t {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -ms-align-items: flex-start;
	    align-items: flex-start
	}

	.flex-b {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -ms-align-items: flex-end;
	    align-items: flex-end
	}

	.flex-m {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -ms-align-items: center;
	    align-items: center
	}

	.flex-str {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -ms-align-items: stretch;
	    align-items: stretch
	}

	.flex-row {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: row;
	    -moz-flex-direction: row;
	    -ms-flex-direction: row;
	    -o-flex-direction: row;
	    flex-direction: row
	}

	.flex-row-rev {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: row-reverse;
	    -moz-flex-direction: row-reverse;
	    -ms-flex-direction: row-reverse;
	    -o-flex-direction: row-reverse;
	    flex-direction: row-reverse
	}

	.flex-col {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: column;
	    -moz-flex-direction: column;
	    -ms-flex-direction: column;
	    -o-flex-direction: column;
	    flex-direction: column
	}

	.flex-col-rev {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: column-reverse;
	    -moz-flex-direction: column-reverse;
	    -ms-flex-direction: column-reverse;
	    -o-flex-direction: column-reverse;
	    flex-direction: column-reverse
	}

	.flex-c-m {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: center;
	    -ms-align-items: center;
	    align-items: center
	}

	.flex-c-t {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: center;
	    -ms-align-items: flex-start;
	    align-items: flex-start
	}

	.flex-c-b {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: center;
	    -ms-align-items: flex-end;
	    align-items: flex-end
	}

	.flex-c-str {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: center;
	    -ms-align-items: stretch;
	    align-items: stretch
	}

	.flex-l-m {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: flex-start;
	    -ms-align-items: center;
	    align-items: center
	}

	.flex-r-m {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: flex-end;
	    -ms-align-items: center;
	    align-items: center
	}

	.flex-sa-m {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: space-around;
	    -ms-align-items: center;
	    align-items: center
	}

	.flex-sb-m {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    justify-content: space-between;
	    -ms-align-items: center;
	    align-items: center
	}

	.flex-col-l {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: column;
	    -moz-flex-direction: column;
	    -ms-flex-direction: column;
	    -o-flex-direction: column;
	    flex-direction: column;
	    -ms-align-items: flex-start;
	    align-items: flex-start
	}

	.flex-col-r {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: column;
	    -moz-flex-direction: column;
	    -ms-flex-direction: column;
	    -o-flex-direction: column;
	    flex-direction: column;
	    -ms-align-items: flex-end;
	    align-items: flex-end
	}

	.flex-col-c {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: column;
	    -moz-flex-direction: column;
	    -ms-flex-direction: column;
	    -o-flex-direction: column;
	    flex-direction: column;
	    -ms-align-items: center;
	    align-items: center
	}

	.flex-col-l-m {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: column;
	    -moz-flex-direction: column;
	    -ms-flex-direction: column;
	    -o-flex-direction: column;
	    flex-direction: column;
	    -ms-align-items: flex-start;
	    align-items: flex-start;
	    justify-content: center
	}

	.flex-col-r-m {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: column;
	    -moz-flex-direction: column;
	    -ms-flex-direction: column;
	    -o-flex-direction: column;
	    flex-direction: column;
	    -ms-align-items: flex-end;
	    align-items: flex-end;
	    justify-content: center
	}

	.flex-col-c-m {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: column;
	    -moz-flex-direction: column;
	    -ms-flex-direction: column;
	    -o-flex-direction: column;
	    flex-direction: column;
	    -ms-align-items: center;
	    align-items: center;
	    justify-content: center
	}

	.flex-col-str {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: column;
	    -moz-flex-direction: column;
	    -ms-flex-direction: column;
	    -o-flex-direction: column;
	    flex-direction: column;
	    -ms-align-items: stretch;
	    align-items: stretch
	}

	.flex-col-sb {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: column;
	    -moz-flex-direction: column;
	    -ms-flex-direction: column;
	    -o-flex-direction: column;
	    flex-direction: column;
	    justify-content: space-between
	}

	.flex-col-rev-l {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: column-reverse;
	    -moz-flex-direction: column-reverse;
	    -ms-flex-direction: column-reverse;
	    -o-flex-direction: column-reverse;
	    flex-direction: column-reverse;
	    -ms-align-items: flex-start;
	    align-items: flex-start
	}

	.flex-col-rev-r {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: column-reverse;
	    -moz-flex-direction: column-reverse;
	    -ms-flex-direction: column-reverse;
	    -o-flex-direction: column-reverse;
	    flex-direction: column-reverse;
	    -ms-align-items: flex-end;
	    align-items: flex-end
	}

	.flex-col-rev-c {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: column-reverse;
	    -moz-flex-direction: column-reverse;
	    -ms-flex-direction: column-reverse;
	    -o-flex-direction: column-reverse;
	    flex-direction: column-reverse;
	    -ms-align-items: center;
	    align-items: center
	}

	.flex-col-rev-str {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-flex-direction: column-reverse;
	    -moz-flex-direction: column-reverse;
	    -ms-flex-direction: column-reverse;
	    -o-flex-direction: column-reverse;
	    flex-direction: column-reverse;
	    -ms-align-items: stretch;
	    align-items: stretch
	}

	.ab-c-m {
	    position: absolute;
	    top: 50%;
	    left: 50%;
	    -webkit-transform: translate(-50%, -50%);
	    -moz-transform: translate(-50%, -50%);
	    -ms-transform: translate(-50%, -50%);
	    -o-transform: translate(-50%, -50%);
	    transform: translate(-50%, -50%)
	}

	.ab-c-t {
	    position: absolute;
	    top: 0;
	    left: 50%;
	    -webkit-transform: translateX(-50%);
	    -moz-transform: translateX(-50%);
	    -ms-transform: translateX(-50%);
	    -o-transform: translateX(-50%);
	    transform: translateX(-50%)
	}

	.ab-c-b {
	    position: absolute;
	    bottom: 0;
	    left: 50%;
	    -webkit-transform: translateX(-50%);
	    -moz-transform: translateX(-50%);
	    -ms-transform: translateX(-50%);
	    -o-transform: translateX(-50%);
	    transform: translateX(-50%)
	}

	.ab-l-m {
	    position: absolute;
	    left: 0;
	    top: 50%;
	    -webkit-transform: translateY(-50%);
	    -moz-transform: translateY(-50%);
	    -ms-transform: translateY(-50%);
	    -o-transform: translateY(-50%);
	    transform: translateY(-50%)
	}

	.ab-r-m {
	    position: absolute;
	    right: 0;
	    top: 50%;
	    -webkit-transform: translateY(-50%);
	    -moz-transform: translateY(-50%);
	    -ms-transform: translateY(-50%);
	    -o-transform: translateY(-50%);
	    transform: translateY(-50%)
	}

	.ab-t-l {
	    position: absolute;
	    left: 0;
	    top: 0
	}

	.ab-t-r {
	    position: absolute;
	    right: 0;
	    top: 0
	}

	.ab-b-l {
	    position: absolute;
	    left: 0;
	    bottom: 0
	}

	.ab-b-r {
	    position: absolute;
	    right: 0;
	    bottom: 0
	}

	</style><style>@font-face {
	    font-family: Material-Design-Iconic-Font;
	    src: url(../fonts/Material-Design-Iconic-Font.woff2?v=2.2.0) format('woff2'), url(../fonts/Material-Design-Iconic-Font.woff?v=2.2.0) format('woff'), url(../fonts/Material-Design-Iconic-Font.ttf?v=2.2.0) format('truetype')
	}

	.zmdi {
	    display: inline-block;
	    font: normal normal normal 14px/1 'Material-Design-Iconic-Font';
	    font-size: inherit;
	    text-rendering: auto;
	    -webkit-font-smoothing: antialiased;
	    -moz-osx-font-smoothing: grayscale
	}

	.zmdi-hc-lg {
	    font-size: 1.33333333em;
	    line-height: .75em;
	    vertical-align: -15%
	}

	.zmdi-hc-2x {
	    font-size: 2em
	}

	.zmdi-hc-3x {
	    font-size: 3em
	}

	.zmdi-hc-4x {
	    font-size: 4em
	}

	.zmdi-hc-5x {
	    font-size: 5em
	}

	.zmdi-hc-fw {
	    width: 1.28571429em;
	    text-align: center
	}

	.zmdi-hc-ul {
	    padding-left: 0;
	    margin-left: 2.14285714em;
	    list-style-type: none
	}

	.zmdi-hc-ul>li {
	    position: relative
	}

	.zmdi-hc-li {
	    position: absolute;
	    left: -2.14285714em;
	    width: 2.14285714em;
	    top: .14285714em;
	    text-align: center
	}

	.zmdi-hc-li.zmdi-hc-lg {
	    left: -1.85714286em
	}

	.zmdi-hc-border {
	    padding: .1em .25em;
	    border: solid .1em #9e9e9e;
	    border-radius: 2px
	}

	.zmdi-hc-border-circle {
	    padding: .1em .25em;
	    border: solid .1em #9e9e9e;
	    border-radius: 50%
	}

	.zmdi.pull-left {
	    float: left;
	    margin-right: .15em
	}

	.zmdi.pull-right {
	    float: right;
	    margin-left: .15em
	}

	.zmdi-hc-spin {
	    -webkit-animation: zmdi-spin 1.5s infinite linear;
	    animation: zmdi-spin 1.5s infinite linear
	}

	.zmdi-hc-spin-reverse {
	    -webkit-animation: zmdi-spin-reverse 1.5s infinite linear;
	    animation: zmdi-spin-reverse 1.5s infinite linear
	}

	@-webkit-keyframes zmdi-spin {
	    0% {
	        -webkit-transform: rotate(0deg);
	        transform: rotate(0deg)
	    }

	    100% {
	        -webkit-transform: rotate(359deg);
	        transform: rotate(359deg)
	    }
	}

	@keyframes zmdi-spin {
	    0% {
	        -webkit-transform: rotate(0deg);
	        transform: rotate(0deg)
	    }

	    100% {
	        -webkit-transform: rotate(359deg);
	        transform: rotate(359deg)
	    }
	}

	@-webkit-keyframes zmdi-spin-reverse {
	    0% {
	        -webkit-transform: rotate(0deg);
	        transform: rotate(0deg)
	    }

	    100% {
	        -webkit-transform: rotate(-359deg);
	        transform: rotate(-359deg)
	    }
	}

	@keyframes zmdi-spin-reverse {
	    0% {
	        -webkit-transform: rotate(0deg);
	        transform: rotate(0deg)
	    }

	    100% {
	        -webkit-transform: rotate(-359deg);
	        transform: rotate(-359deg)
	    }
	}

	.zmdi-hc-rotate-90 {
	    -webkit-transform: rotate(90deg);
	    -ms-transform: rotate(90deg);
	    transform: rotate(90deg)
	}

	.zmdi-hc-rotate-180 {
	    -webkit-transform: rotate(180deg);
	    -ms-transform: rotate(180deg);
	    transform: rotate(180deg)
	}

	.zmdi-hc-rotate-270 {
	    -webkit-transform: rotate(270deg);
	    -ms-transform: rotate(270deg);
	    transform: rotate(270deg)
	}

	.zmdi-hc-flip-horizontal {
	    -webkit-transform: scale(-1, 1);
	    -ms-transform: scale(-1, 1);
	    transform: scale(-1, 1)
	}

	.zmdi-hc-flip-vertical {
	    -webkit-transform: scale(1, -1);
	    -ms-transform: scale(1, -1);
	    transform: scale(1, -1)
	}

	.zmdi-hc-stack {
	    position: relative;
	    display: inline-block;
	    width: 2em;
	    height: 2em;
	    line-height: 2em;
	    vertical-align: middle
	}

	.zmdi-hc-stack-1x,
	.zmdi-hc-stack-2x {
	    position: absolute;
	    left: 0;
	    width: 100%;
	    text-align: center
	}

	.zmdi-hc-stack-1x {
	    line-height: inherit
	}

	.zmdi-hc-stack-2x {
	    font-size: 2em
	}

	.zmdi-hc-inverse {
	    color: #fff
	}

	.zmdi-3d-rotation:before {
	    content: '\f101'
	}

	.zmdi-airplane-off:before {
	    content: '\f102'
	}

	.zmdi-airplane:before {
	    content: '\f103'
	}

	.zmdi-album:before {
	    content: '\f104'
	}

	.zmdi-archive:before {
	    content: '\f105'
	}

	.zmdi-assignment-account:before {
	    content: '\f106'
	}

	.zmdi-assignment-alert:before {
	    content: '\f107'
	}

	.zmdi-assignment-check:before {
	    content: '\f108'
	}

	.zmdi-assignment-o:before {
	    content: '\f109'
	}

	.zmdi-assignment-return:before {
	    content: '\f10a'
	}

	.zmdi-assignment-returned:before {
	    content: '\f10b'
	}

	.zmdi-assignment:before {
	    content: '\f10c'
	}

	.zmdi-attachment-alt:before {
	    content: '\f10d'
	}

	.zmdi-attachment:before {
	    content: '\f10e'
	}

	.zmdi-audio:before {
	    content: '\f10f'
	}

	.zmdi-badge-check:before {
	    content: '\f110'
	}

	.zmdi-balance-wallet:before {
	    content: '\f111'
	}

	.zmdi-balance:before {
	    content: '\f112'
	}

	.zmdi-battery-alert:before {
	    content: '\f113'
	}

	.zmdi-battery-flash:before {
	    content: '\f114'
	}

	.zmdi-battery-unknown:before {
	    content: '\f115'
	}

	.zmdi-battery:before {
	    content: '\f116'
	}

	.zmdi-bike:before {
	    content: '\f117'
	}

	.zmdi-block-alt:before {
	    content: '\f118'
	}

	.zmdi-block:before {
	    content: '\f119'
	}

	.zmdi-boat:before {
	    content: '\f11a'
	}

	.zmdi-book-image:before {
	    content: '\f11b'
	}

	.zmdi-book:before {
	    content: '\f11c'
	}

	.zmdi-bookmark-outline:before {
	    content: '\f11d'
	}

	.zmdi-bookmark:before {
	    content: '\f11e'
	}

	.zmdi-brush:before {
	    content: '\f11f'
	}

	.zmdi-bug:before {
	    content: '\f120'
	}

	.zmdi-bus:before {
	    content: '\f121'
	}

	.zmdi-cake:before {
	    content: '\f122'
	}

	.zmdi-car-taxi:before {
	    content: '\f123'
	}

	.zmdi-car-wash:before {
	    content: '\f124'
	}

	.zmdi-car:before {
	    content: '\f125'
	}

	.zmdi-card-giftcard:before {
	    content: '\f126'
	}

	.zmdi-card-membership:before {
	    content: '\f127'
	}

	.zmdi-card-travel:before {
	    content: '\f128'
	}

	.zmdi-card:before {
	    content: '\f129'
	}

	.zmdi-case-check:before {
	    content: '\f12a'
	}

	.zmdi-case-download:before {
	    content: '\f12b'
	}

	.zmdi-case-play:before {
	    content: '\f12c'
	}

	.zmdi-case:before {
	    content: '\f12d'
	}

	.zmdi-cast-connected:before {
	    content: '\f12e'
	}

	.zmdi-cast:before {
	    content: '\f12f'
	}

	.zmdi-chart-donut:before {
	    content: '\f130'
	}

	.zmdi-chart:before {
	    content: '\f131'
	}

	.zmdi-city-alt:before {
	    content: '\f132'
	}

	.zmdi-city:before {
	    content: '\f133'
	}

	.zmdi-close-circle-o:before {
	    content: '\f134'
	}

	.zmdi-close-circle:before {
	    content: '\f135'
	}

	.zmdi-close:before {
	    content: '\f136'
	}

	.zmdi-cocktail:before {
	    content: '\f137'
	}

	.zmdi-code-setting:before {
	    content: '\f138'
	}

	.zmdi-code-smartphone:before {
	    content: '\f139'
	}

	.zmdi-code:before {
	    content: '\f13a'
	}

	.zmdi-coffee:before {
	    content: '\f13b'
	}

	.zmdi-collection-bookmark:before {
	    content: '\f13c'
	}

	.zmdi-collection-case-play:before {
	    content: '\f13d'
	}

	.zmdi-collection-folder-image:before {
	    content: '\f13e'
	}

	.zmdi-collection-image-o:before {
	    content: '\f13f'
	}

	.zmdi-collection-image:before {
	    content: '\f140'
	}

	.zmdi-collection-item-1:before {
	    content: '\f141'
	}

	.zmdi-collection-item-2:before {
	    content: '\f142'
	}

	.zmdi-collection-item-3:before {
	    content: '\f143'
	}

	.zmdi-collection-item-4:before {
	    content: '\f144'
	}

	.zmdi-collection-item-5:before {
	    content: '\f145'
	}

	.zmdi-collection-item-6:before {
	    content: '\f146'
	}

	.zmdi-collection-item-7:before {
	    content: '\f147'
	}

	.zmdi-collection-item-8:before {
	    content: '\f148'
	}

	.zmdi-collection-item-9-plus:before {
	    content: '\f149'
	}

	.zmdi-collection-item-9:before {
	    content: '\f14a'
	}

	.zmdi-collection-item:before {
	    content: '\f14b'
	}

	.zmdi-collection-music:before {
	    content: '\f14c'
	}

	.zmdi-collection-pdf:before {
	    content: '\f14d'
	}

	.zmdi-collection-plus:before {
	    content: '\f14e'
	}

	.zmdi-collection-speaker:before {
	    content: '\f14f'
	}

	.zmdi-collection-text:before {
	    content: '\f150'
	}

	.zmdi-collection-video:before {
	    content: '\f151'
	}

	.zmdi-compass:before {
	    content: '\f152'
	}

	.zmdi-cutlery:before {
	    content: '\f153'
	}

	.zmdi-delete:before {
	    content: '\f154'
	}

	.zmdi-dialpad:before {
	    content: '\f155'
	}

	.zmdi-dns:before {
	    content: '\f156'
	}

	.zmdi-drink:before {
	    content: '\f157'
	}

	.zmdi-edit:before {
	    content: '\f158'
	}

	.zmdi-email-open:before {
	    content: '\f159'
	}

	.zmdi-email:before {
	    content: '\f15a'
	}

	.zmdi-eye-off:before {
	    content: '\f15b'
	}

	.zmdi-eye:before {
	    content: '\f15c'
	}

	.zmdi-eyedropper:before {
	    content: '\f15d'
	}

	.zmdi-favorite-outline:before {
	    content: '\f15e'
	}

	.zmdi-favorite:before {
	    content: '\f15f'
	}

	.zmdi-filter-list:before {
	    content: '\f160'
	}

	.zmdi-fire:before {
	    content: '\f161'
	}

	.zmdi-flag:before {
	    content: '\f162'
	}

	.zmdi-flare:before {
	    content: '\f163'
	}

	.zmdi-flash-auto:before {
	    content: '\f164'
	}

	.zmdi-flash-off:before {
	    content: '\f165'
	}

	.zmdi-flash:before {
	    content: '\f166'
	}

	.zmdi-flip:before {
	    content: '\f167'
	}

	.zmdi-flower-alt:before {
	    content: '\f168'
	}

	.zmdi-flower:before {
	    content: '\f169'
	}

	.zmdi-font:before {
	    content: '\f16a'
	}

	.zmdi-fullscreen-alt:before {
	    content: '\f16b'
	}

	.zmdi-fullscreen-exit:before {
	    content: '\f16c'
	}

	.zmdi-fullscreen:before {
	    content: '\f16d'
	}

	.zmdi-functions:before {
	    content: '\f16e'
	}

	.zmdi-gas-station:before {
	    content: '\f16f'
	}

	.zmdi-gesture:before {
	    content: '\f170'
	}

	.zmdi-globe-alt:before {
	    content: '\f171'
	}

	.zmdi-globe-lock:before {
	    content: '\f172'
	}

	.zmdi-globe:before {
	    content: '\f173'
	}

	.zmdi-graduation-cap:before {
	    content: '\f174'
	}

	.zmdi-home:before {
	    content: '\f175'
	}

	.zmdi-hospital-alt:before {
	    content: '\f176'
	}

	.zmdi-hospital:before {
	    content: '\f177'
	}

	.zmdi-hotel:before {
	    content: '\f178'
	}

	.zmdi-hourglass-alt:before {
	    content: '\f179'
	}

	.zmdi-hourglass-outline:before {
	    content: '\f17a'
	}

	.zmdi-hourglass:before {
	    content: '\f17b'
	}

	.zmdi-http:before {
	    content: '\f17c'
	}

	.zmdi-image-alt:before {
	    content: '\f17d'
	}

	.zmdi-image-o:before {
	    content: '\f17e'
	}

	.zmdi-image:before {
	    content: '\f17f'
	}

	.zmdi-inbox:before {
	    content: '\f180'
	}

	.zmdi-invert-colors-off:before {
	    content: '\f181'
	}

	.zmdi-invert-colors:before {
	    content: '\f182'
	}

	.zmdi-key:before {
	    content: '\f183'
	}

	.zmdi-label-alt-outline:before {
	    content: '\f184'
	}

	.zmdi-label-alt:before {
	    content: '\f185'
	}

	.zmdi-label-heart:before {
	    content: '\f186'
	}

	.zmdi-label:before {
	    content: '\f187'
	}

	.zmdi-labels:before {
	    content: '\f188'
	}

	.zmdi-lamp:before {
	    content: '\f189'
	}

	.zmdi-landscape:before {
	    content: '\f18a'
	}

	.zmdi-layers-off:before {
	    content: '\f18b'
	}

	.zmdi-layers:before {
	    content: '\f18c'
	}

	.zmdi-library:before {
	    content: '\f18d'
	}

	.zmdi-link:before {
	    content: '\f18e'
	}

	.zmdi-lock-open:before {
	    content: '\f18f'
	}

	.zmdi-lock-outline:before {
	    content: '\f190'
	}

	.zmdi-lock:before {
	    content: '\f191'
	}

	.zmdi-mail-reply-all:before {
	    content: '\f192'
	}

	.zmdi-mail-reply:before {
	    content: '\f193'
	}

	.zmdi-mail-send:before {
	    content: '\f194'
	}

	.zmdi-mall:before {
	    content: '\f195'
	}

	.zmdi-map:before {
	    content: '\f196'
	}

	.zmdi-menu:before {
	    content: '\f197'
	}

	.zmdi-money-box:before {
	    content: '\f198'
	}

	.zmdi-money-off:before {
	    content: '\f199'
	}

	.zmdi-money:before {
	    content: '\f19a'
	}

	.zmdi-more-vert:before {
	    content: '\f19b'
	}

	.zmdi-more:before {
	    content: '\f19c'
	}

	.zmdi-movie-alt:before {
	    content: '\f19d'
	}

	.zmdi-movie:before {
	    content: '\f19e'
	}

	.zmdi-nature-people:before {
	    content: '\f19f'
	}

	.zmdi-nature:before {
	    content: '\f1a0'
	}

	.zmdi-navigation:before {
	    content: '\f1a1'
	}

	.zmdi-open-in-browser:before {
	    content: '\f1a2'
	}

	.zmdi-open-in-new:before {
	    content: '\f1a3'
	}

	.zmdi-palette:before {
	    content: '\f1a4'
	}

	.zmdi-parking:before {
	    content: '\f1a5'
	}

	.zmdi-pin-account:before {
	    content: '\f1a6'
	}

	.zmdi-pin-assistant:before {
	    content: '\f1a7'
	}

	.zmdi-pin-drop:before {
	    content: '\f1a8'
	}

	.zmdi-pin-help:before {
	    content: '\f1a9'
	}

	.zmdi-pin-off:before {
	    content: '\f1aa'
	}

	.zmdi-pin:before {
	    content: '\f1ab'
	}

	.zmdi-pizza:before {
	    content: '\f1ac'
	}

	.zmdi-plaster:before {
	    content: '\f1ad'
	}

	.zmdi-power-setting:before {
	    content: '\f1ae'
	}

	.zmdi-power:before {
	    content: '\f1af'
	}

	.zmdi-print:before {
	    content: '\f1b0'
	}

	.zmdi-puzzle-piece:before {
	    content: '\f1b1'
	}

	.zmdi-quote:before {
	    content: '\f1b2'
	}

	.zmdi-railway:before {
	    content: '\f1b3'
	}

	.zmdi-receipt:before {
	    content: '\f1b4'
	}

	.zmdi-refresh-alt:before {
	    content: '\f1b5'
	}

	.zmdi-refresh-sync-alert:before {
	    content: '\f1b6'
	}

	.zmdi-refresh-sync-off:before {
	    content: '\f1b7'
	}

	.zmdi-refresh-sync:before {
	    content: '\f1b8'
	}

	.zmdi-refresh:before {
	    content: '\f1b9'
	}

	.zmdi-roller:before {
	    content: '\f1ba'
	}

	.zmdi-ruler:before {
	    content: '\f1bb'
	}

	.zmdi-scissors:before {
	    content: '\f1bc'
	}

	.zmdi-screen-rotation-lock:before {
	    content: '\f1bd'
	}

	.zmdi-screen-rotation:before {
	    content: '\f1be'
	}

	.zmdi-search-for:before {
	    content: '\f1bf'
	}

	.zmdi-search-in-file:before {
	    content: '\f1c0'
	}

	.zmdi-search-in-page:before {
	    content: '\f1c1'
	}

	.zmdi-search-replace:before {
	    content: '\f1c2'
	}

	.zmdi-search:before {
	    content: '\f1c3'
	}

	.zmdi-seat:before {
	    content: '\f1c4'
	}

	.zmdi-settings-square:before {
	    content: '\f1c5'
	}

	.zmdi-settings:before {
	    content: '\f1c6'
	}

	.zmdi-shield-check:before {
	    content: '\f1c7'
	}

	.zmdi-shield-security:before {
	    content: '\f1c8'
	}

	.zmdi-shopping-basket:before {
	    content: '\f1c9'
	}

	.zmdi-shopping-cart-plus:before {
	    content: '\f1ca'
	}

	.zmdi-shopping-cart:before {
	    content: '\f1cb'
	}

	.zmdi-sign-in:before {
	    content: '\f1cc'
	}

	.zmdi-sort-amount-asc:before {
	    content: '\f1cd'
	}

	.zmdi-sort-amount-desc:before {
	    content: '\f1ce'
	}

	.zmdi-sort-asc:before {
	    content: '\f1cf'
	}

	.zmdi-sort-desc:before {
	    content: '\f1d0'
	}

	.zmdi-spellcheck:before {
	    content: '\f1d1'
	}

	.zmdi-storage:before {
	    content: '\f1d2'
	}

	.zmdi-store-24:before {
	    content: '\f1d3'
	}

	.zmdi-store:before {
	    content: '\f1d4'
	}

	.zmdi-subway:before {
	    content: '\f1d5'
	}

	.zmdi-sun:before {
	    content: '\f1d6'
	}

	.zmdi-tab-unselected:before {
	    content: '\f1d7'
	}

	.zmdi-tab:before {
	    content: '\f1d8'
	}

	.zmdi-tag-close:before {
	    content: '\f1d9'
	}

	.zmdi-tag-more:before {
	    content: '\f1da'
	}

	.zmdi-tag:before {
	    content: '\f1db'
	}

	.zmdi-thumb-down:before {
	    content: '\f1dc'
	}

	.zmdi-thumb-up-down:before {
	    content: '\f1dd'
	}

	.zmdi-thumb-up:before {
	    content: '\f1de'
	}

	.zmdi-ticket-star:before {
	    content: '\f1df'
	}

	.zmdi-toll:before {
	    content: '\f1e0'
	}

	.zmdi-toys:before {
	    content: '\f1e1'
	}

	.zmdi-traffic:before {
	    content: '\f1e2'
	}

	.zmdi-translate:before {
	    content: '\f1e3'
	}

	.zmdi-triangle-down:before {
	    content: '\f1e4'
	}

	.zmdi-triangle-up:before {
	    content: '\f1e5'
	}

	.zmdi-truck:before {
	    content: '\f1e6'
	}

	.zmdi-turning-sign:before {
	    content: '\f1e7'
	}

	.zmdi-wallpaper:before {
	    content: '\f1e8'
	}

	.zmdi-washing-machine:before {
	    content: '\f1e9'
	}

	.zmdi-window-maximize:before {
	    content: '\f1ea'
	}

	.zmdi-window-minimize:before {
	    content: '\f1eb'
	}

	.zmdi-window-restore:before {
	    content: '\f1ec'
	}

	.zmdi-wrench:before {
	    content: '\f1ed'
	}

	.zmdi-zoom-in:before {
	    content: '\f1ee'
	}

	.zmdi-zoom-out:before {
	    content: '\f1ef'
	}

	.zmdi-alert-circle-o:before {
	    content: '\f1f0'
	}

	.zmdi-alert-circle:before {
	    content: '\f1f1'
	}

	.zmdi-alert-octagon:before {
	    content: '\f1f2'
	}

	.zmdi-alert-polygon:before {
	    content: '\f1f3'
	}

	.zmdi-alert-triangle:before {
	    content: '\f1f4'
	}

	.zmdi-help-outline:before {
	    content: '\f1f5'
	}

	.zmdi-help:before {
	    content: '\f1f6'
	}

	.zmdi-info-outline:before {
	    content: '\f1f7'
	}

	.zmdi-info:before {
	    content: '\f1f8'
	}

	.zmdi-notifications-active:before {
	    content: '\f1f9'
	}

	.zmdi-notifications-add:before {
	    content: '\f1fa'
	}

	.zmdi-notifications-none:before {
	    content: '\f1fb'
	}

	.zmdi-notifications-off:before {
	    content: '\f1fc'
	}

	.zmdi-notifications-paused:before {
	    content: '\f1fd'
	}

	.zmdi-notifications:before {
	    content: '\f1fe'
	}

	.zmdi-account-add:before {
	    content: '\f1ff'
	}

	.zmdi-account-box-mail:before {
	    content: '\f200'
	}

	.zmdi-account-box-o:before {
	    content: '\f201'
	}

	.zmdi-account-box-phone:before {
	    content: '\f202'
	}

	.zmdi-account-box:before {
	    content: '\f203'
	}

	.zmdi-account-calendar:before {
	    content: '\f204'
	}

	.zmdi-account-circle:before {
	    content: '\f205'
	}

	.zmdi-account-o:before {
	    content: '\f206'
	}

	.zmdi-account:before {
	    content: '\f207'
	}

	.zmdi-accounts-add:before {
	    content: '\f208'
	}

	.zmdi-accounts-alt:before {
	    content: '\f209'
	}

	.zmdi-accounts-list-alt:before {
	    content: '\f20a'
	}

	.zmdi-accounts-list:before {
	    content: '\f20b'
	}

	.zmdi-accounts-outline:before {
	    content: '\f20c'
	}

	.zmdi-accounts:before {
	    content: '\f20d'
	}

	.zmdi-face:before {
	    content: '\f20e'
	}

	.zmdi-female:before {
	    content: '\f20f'
	}

	.zmdi-male-alt:before {
	    content: '\f210'
	}

	.zmdi-male-female:before {
	    content: '\f211'
	}

	.zmdi-male:before {
	    content: '\f212'
	}

	.zmdi-mood-bad:before {
	    content: '\f213'
	}

	.zmdi-mood:before {
	    content: '\f214'
	}

	.zmdi-run:before {
	    content: '\f215'
	}

	.zmdi-walk:before {
	    content: '\f216'
	}

	.zmdi-cloud-box:before {
	    content: '\f217'
	}

	.zmdi-cloud-circle:before {
	    content: '\f218'
	}

	.zmdi-cloud-done:before {
	    content: '\f219'
	}

	.zmdi-cloud-download:before {
	    content: '\f21a'
	}

	.zmdi-cloud-off:before {
	    content: '\f21b'
	}

	.zmdi-cloud-outline-alt:before {
	    content: '\f21c'
	}

	.zmdi-cloud-outline:before {
	    content: '\f21d'
	}

	.zmdi-cloud-upload:before {
	    content: '\f21e'
	}

	.zmdi-cloud:before {
	    content: '\f21f'
	}

	.zmdi-download:before {
	    content: '\f220'
	}

	.zmdi-file-plus:before {
	    content: '\f221'
	}

	.zmdi-file-text:before {
	    content: '\f222'
	}

	.zmdi-file:before {
	    content: '\f223'
	}

	.zmdi-folder-outline:before {
	    content: '\f224'
	}

	.zmdi-folder-person:before {
	    content: '\f225'
	}

	.zmdi-folder-star-alt:before {
	    content: '\f226'
	}

	.zmdi-folder-star:before {
	    content: '\f227'
	}

	.zmdi-folder:before {
	    content: '\f228'
	}

	.zmdi-gif:before {
	    content: '\f229'
	}

	.zmdi-upload:before {
	    content: '\f22a'
	}

	.zmdi-border-all:before {
	    content: '\f22b'
	}

	.zmdi-border-bottom:before {
	    content: '\f22c'
	}

	.zmdi-border-clear:before {
	    content: '\f22d'
	}

	.zmdi-border-color:before {
	    content: '\f22e'
	}

	.zmdi-border-horizontal:before {
	    content: '\f22f'
	}

	.zmdi-border-inner:before {
	    content: '\f230'
	}

	.zmdi-border-left:before {
	    content: '\f231'
	}

	.zmdi-border-outer:before {
	    content: '\f232'
	}

	.zmdi-border-right:before {
	    content: '\f233'
	}

	.zmdi-border-style:before {
	    content: '\f234'
	}

	.zmdi-border-top:before {
	    content: '\f235'
	}

	.zmdi-border-vertical:before {
	    content: '\f236'
	}

	.zmdi-copy:before {
	    content: '\f237'
	}

	.zmdi-crop:before {
	    content: '\f238'
	}

	.zmdi-format-align-center:before {
	    content: '\f239'
	}

	.zmdi-format-align-justify:before {
	    content: '\f23a'
	}

	.zmdi-format-align-left:before {
	    content: '\f23b'
	}

	.zmdi-format-align-right:before {
	    content: '\f23c'
	}

	.zmdi-format-bold:before {
	    content: '\f23d'
	}

	.zmdi-format-clear-all:before {
	    content: '\f23e'
	}

	.zmdi-format-clear:before {
	    content: '\f23f'
	}

	.zmdi-format-color-fill:before {
	    content: '\f240'
	}

	.zmdi-format-color-reset:before {
	    content: '\f241'
	}

	.zmdi-format-color-text:before {
	    content: '\f242'
	}

	.zmdi-format-indent-decrease:before {
	    content: '\f243'
	}

	.zmdi-format-indent-increase:before {
	    content: '\f244'
	}

	.zmdi-format-italic:before {
	    content: '\f245'
	}

	.zmdi-format-line-spacing:before {
	    content: '\f246'
	}

	.zmdi-format-list-bulleted:before {
	    content: '\f247'
	}

	.zmdi-format-list-numbered:before {
	    content: '\f248'
	}

	.zmdi-format-ltr:before {
	    content: '\f249'
	}

	.zmdi-format-rtl:before {
	    content: '\f24a'
	}

	.zmdi-format-size:before {
	    content: '\f24b'
	}

	.zmdi-format-strikethrough-s:before {
	    content: '\f24c'
	}

	.zmdi-format-strikethrough:before {
	    content: '\f24d'
	}

	.zmdi-format-subject:before {
	    content: '\f24e'
	}

	.zmdi-format-underlined:before {
	    content: '\f24f'
	}

	.zmdi-format-valign-bottom:before {
	    content: '\f250'
	}

	.zmdi-format-valign-center:before {
	    content: '\f251'
	}

	.zmdi-format-valign-top:before {
	    content: '\f252'
	}

	.zmdi-redo:before {
	    content: '\f253'
	}

	.zmdi-select-all:before {
	    content: '\f254'
	}

	.zmdi-space-bar:before {
	    content: '\f255'
	}

	.zmdi-text-format:before {
	    content: '\f256'
	}

	.zmdi-transform:before {
	    content: '\f257'
	}

	.zmdi-undo:before {
	    content: '\f258'
	}

	.zmdi-wrap-text:before {
	    content: '\f259'
	}

	.zmdi-comment-alert:before {
	    content: '\f25a'
	}

	.zmdi-comment-alt-text:before {
	    content: '\f25b'
	}

	.zmdi-comment-alt:before {
	    content: '\f25c'
	}

	.zmdi-comment-edit:before {
	    content: '\f25d'
	}

	.zmdi-comment-image:before {
	    content: '\f25e'
	}

	.zmdi-comment-list:before {
	    content: '\f25f'
	}

	.zmdi-comment-more:before {
	    content: '\f260'
	}

	.zmdi-comment-outline:before {
	    content: '\f261'
	}

	.zmdi-comment-text-alt:before {
	    content: '\f262'
	}

	.zmdi-comment-text:before {
	    content: '\f263'
	}

	.zmdi-comment-video:before {
	    content: '\f264'
	}

	.zmdi-comment:before {
	    content: '\f265'
	}

	.zmdi-comments:before {
	    content: '\f266'
	}

	.zmdi-check-all:before {
	    content: '\f267'
	}

	.zmdi-check-circle-u:before {
	    content: '\f268'
	}

	.zmdi-check-circle:before {
	    content: '\f269'
	}

	.zmdi-check-square:before {
	    content: '\f26a'
	}

	.zmdi-check:before {
	    content: '\f26b'
	}

	.zmdi-circle-o:before {
	    content: '\f26c'
	}

	.zmdi-circle:before {
	    content: '\f26d'
	}

	.zmdi-dot-circle-alt:before {
	    content: '\f26e'
	}

	.zmdi-dot-circle:before {
	    content: '\f26f'
	}

	.zmdi-minus-circle-outline:before {
	    content: '\f270'
	}

	.zmdi-minus-circle:before {
	    content: '\f271'
	}

	.zmdi-minus-square:before {
	    content: '\f272'
	}

	.zmdi-minus:before {
	    content: '\f273'
	}

	.zmdi-plus-circle-o-duplicate:before {
	    content: '\f274'
	}

	.zmdi-plus-circle-o:before {
	    content: '\f275'
	}

	.zmdi-plus-circle:before {
	    content: '\f276'
	}

	.zmdi-plus-square:before {
	    content: '\f277'
	}

	.zmdi-plus:before {
	    content: '\f278'
	}

	.zmdi-square-o:before {
	    content: '\f279'
	}

	.zmdi-star-circle:before {
	    content: '\f27a'
	}

	.zmdi-star-half:before {
	    content: '\f27b'
	}

	.zmdi-star-outline:before {
	    content: '\f27c'
	}

	.zmdi-star:before {
	    content: '\f27d'
	}

	.zmdi-bluetooth-connected:before {
	    content: '\f27e'
	}

	.zmdi-bluetooth-off:before {
	    content: '\f27f'
	}

	.zmdi-bluetooth-search:before {
	    content: '\f280'
	}

	.zmdi-bluetooth-setting:before {
	    content: '\f281'
	}

	.zmdi-bluetooth:before {
	    content: '\f282'
	}

	.zmdi-camera-add:before {
	    content: '\f283'
	}

	.zmdi-camera-alt:before {
	    content: '\f284'
	}

	.zmdi-camera-bw:before {
	    content: '\f285'
	}

	.zmdi-camera-front:before {
	    content: '\f286'
	}

	.zmdi-camera-mic:before {
	    content: '\f287'
	}

	.zmdi-camera-party-mode:before {
	    content: '\f288'
	}

	.zmdi-camera-rear:before {
	    content: '\f289'
	}

	.zmdi-camera-roll:before {
	    content: '\f28a'
	}

	.zmdi-camera-switch:before {
	    content: '\f28b'
	}

	.zmdi-camera:before {
	    content: '\f28c'
	}

	.zmdi-card-alert:before {
	    content: '\f28d'
	}

	.zmdi-card-off:before {
	    content: '\f28e'
	}

	.zmdi-card-sd:before {
	    content: '\f28f'
	}

	.zmdi-card-sim:before {
	    content: '\f290'
	}

	.zmdi-desktop-mac:before {
	    content: '\f291'
	}

	.zmdi-desktop-windows:before {
	    content: '\f292'
	}

	.zmdi-device-hub:before {
	    content: '\f293'
	}

	.zmdi-devices-off:before {
	    content: '\f294'
	}

	.zmdi-devices:before {
	    content: '\f295'
	}

	.zmdi-dock:before {
	    content: '\f296'
	}

	.zmdi-floppy:before {
	    content: '\f297'
	}

	.zmdi-gamepad:before {
	    content: '\f298'
	}

	.zmdi-gps-dot:before {
	    content: '\f299'
	}

	.zmdi-gps-off:before {
	    content: '\f29a'
	}

	.zmdi-gps:before {
	    content: '\f29b'
	}

	.zmdi-headset-mic:before {
	    content: '\f29c'
	}

	.zmdi-headset:before {
	    content: '\f29d'
	}

	.zmdi-input-antenna:before {
	    content: '\f29e'
	}

	.zmdi-input-composite:before {
	    content: '\f29f'
	}

	.zmdi-input-hdmi:before {
	    content: '\f2a0'
	}

	.zmdi-input-power:before {
	    content: '\f2a1'
	}

	.zmdi-input-svideo:before {
	    content: '\f2a2'
	}

	.zmdi-keyboard-hide:before {
	    content: '\f2a3'
	}

	.zmdi-keyboard:before {
	    content: '\f2a4'
	}

	.zmdi-laptop-chromebook:before {
	    content: '\f2a5'
	}

	.zmdi-laptop-mac:before {
	    content: '\f2a6'
	}

	.zmdi-laptop:before {
	    content: '\f2a7'
	}

	.zmdi-mic-off:before {
	    content: '\f2a8'
	}

	.zmdi-mic-outline:before {
	    content: '\f2a9'
	}

	.zmdi-mic-setting:before {
	    content: '\f2aa'
	}

	.zmdi-mic:before {
	    content: '\f2ab'
	}

	.zmdi-mouse:before {
	    content: '\f2ac'
	}

	.zmdi-network-alert:before {
	    content: '\f2ad'
	}

	.zmdi-network-locked:before {
	    content: '\f2ae'
	}

	.zmdi-network-off:before {
	    content: '\f2af'
	}

	.zmdi-network-outline:before {
	    content: '\f2b0'
	}

	.zmdi-network-setting:before {
	    content: '\f2b1'
	}

	.zmdi-network:before {
	    content: '\f2b2'
	}

	.zmdi-phone-bluetooth:before {
	    content: '\f2b3'
	}

	.zmdi-phone-end:before {
	    content: '\f2b4'
	}

	.zmdi-phone-forwarded:before {
	    content: '\f2b5'
	}

	.zmdi-phone-in-talk:before {
	    content: '\f2b6'
	}

	.zmdi-phone-locked:before {
	    content: '\f2b7'
	}

	.zmdi-phone-missed:before {
	    content: '\f2b8'
	}

	.zmdi-phone-msg:before {
	    content: '\f2b9'
	}

	.zmdi-phone-paused:before {
	    content: '\f2ba'
	}

	.zmdi-phone-ring:before {
	    content: '\f2bb'
	}

	.zmdi-phone-setting:before {
	    content: '\f2bc'
	}

	.zmdi-phone-sip:before {
	    content: '\f2bd'
	}

	.zmdi-phone:before {
	    content: '\f2be'
	}

	.zmdi-portable-wifi-changes:before {
	    content: '\f2bf'
	}

	.zmdi-portable-wifi-off:before {
	    content: '\f2c0'
	}

	.zmdi-portable-wifi:before {
	    content: '\f2c1'
	}

	.zmdi-radio:before {
	    content: '\f2c2'
	}

	.zmdi-reader:before {
	    content: '\f2c3'
	}

	.zmdi-remote-control-alt:before {
	    content: '\f2c4'
	}

	.zmdi-remote-control:before {
	    content: '\f2c5'
	}

	.zmdi-router:before {
	    content: '\f2c6'
	}

	.zmdi-scanner:before {
	    content: '\f2c7'
	}

	.zmdi-smartphone-android:before {
	    content: '\f2c8'
	}

	.zmdi-smartphone-download:before {
	    content: '\f2c9'
	}

	.zmdi-smartphone-erase:before {
	    content: '\f2ca'
	}

	.zmdi-smartphone-info:before {
	    content: '\f2cb'
	}

	.zmdi-smartphone-iphone:before {
	    content: '\f2cc'
	}

	.zmdi-smartphone-landscape-lock:before {
	    content: '\f2cd'
	}

	.zmdi-smartphone-landscape:before {
	    content: '\f2ce'
	}

	.zmdi-smartphone-lock:before {
	    content: '\f2cf'
	}

	.zmdi-smartphone-portrait-lock:before {
	    content: '\f2d0'
	}

	.zmdi-smartphone-ring:before {
	    content: '\f2d1'
	}

	.zmdi-smartphone-setting:before {
	    content: '\f2d2'
	}

	.zmdi-smartphone-setup:before {
	    content: '\f2d3'
	}

	.zmdi-smartphone:before {
	    content: '\f2d4'
	}

	.zmdi-speaker:before {
	    content: '\f2d5'
	}

	.zmdi-tablet-android:before {
	    content: '\f2d6'
	}

	.zmdi-tablet-mac:before {
	    content: '\f2d7'
	}

	.zmdi-tablet:before {
	    content: '\f2d8'
	}

	.zmdi-tv-alt-play:before {
	    content: '\f2d9'
	}

	.zmdi-tv-list:before {
	    content: '\f2da'
	}

	.zmdi-tv-play:before {
	    content: '\f2db'
	}

	.zmdi-tv:before {
	    content: '\f2dc'
	}

	.zmdi-usb:before {
	    content: '\f2dd'
	}

	.zmdi-videocam-off:before {
	    content: '\f2de'
	}

	.zmdi-videocam-switch:before {
	    content: '\f2df'
	}

	.zmdi-videocam:before {
	    content: '\f2e0'
	}

	.zmdi-watch:before {
	    content: '\f2e1'
	}

	.zmdi-wifi-alt-2:before {
	    content: '\f2e2'
	}

	.zmdi-wifi-alt:before {
	    content: '\f2e3'
	}

	.zmdi-wifi-info:before {
	    content: '\f2e4'
	}

	.zmdi-wifi-lock:before {
	    content: '\f2e5'
	}

	.zmdi-wifi-off:before {
	    content: '\f2e6'
	}

	.zmdi-wifi-outline:before {
	    content: '\f2e7'
	}

	.zmdi-wifi:before {
	    content: '\f2e8'
	}

	.zmdi-arrow-left-bottom:before {
	    content: '\f2e9'
	}

	.zmdi-arrow-left:before {
	    content: '\f2ea'
	}

	.zmdi-arrow-merge:before {
	    content: '\f2eb'
	}

	.zmdi-arrow-missed:before {
	    content: '\f2ec'
	}

	.zmdi-arrow-right-top:before {
	    content: '\f2ed'
	}

	.zmdi-arrow-right:before {
	    content: '\f2ee'
	}

	.zmdi-arrow-split:before {
	    content: '\f2ef'
	}

	.zmdi-arrows:before {
	    content: '\f2f0'
	}

	.zmdi-caret-down-circle:before {
	    content: '\f2f1'
	}

	.zmdi-caret-down:before {
	    content: '\f2f2'
	}

	.zmdi-caret-left-circle:before {
	    content: '\f2f3'
	}

	.zmdi-caret-left:before {
	    content: '\f2f4'
	}

	.zmdi-caret-right-circle:before {
	    content: '\f2f5'
	}

	.zmdi-caret-right:before {
	    content: '\f2f6'
	}

	.zmdi-caret-up-circle:before {
	    content: '\f2f7'
	}

	.zmdi-caret-up:before {
	    content: '\f2f8'
	}

	.zmdi-chevron-down:before {
	    content: '\f2f9'
	}

	.zmdi-chevron-left:before {
	    content: '\f2fa'
	}

	.zmdi-chevron-right:before {
	    content: '\f2fb'
	}

	.zmdi-chevron-up:before {
	    content: '\f2fc'
	}

	.zmdi-forward:before {
	    content: '\f2fd'
	}

	.zmdi-long-arrow-down:before {
	    content: '\f2fe'
	}

	.zmdi-long-arrow-left:before {
	    content: '\f2ff'
	}

	.zmdi-long-arrow-return:before {
	    content: '\f300'
	}

	.zmdi-long-arrow-right:before {
	    content: '\f301'
	}

	.zmdi-long-arrow-tab:before {
	    content: '\f302'
	}

	.zmdi-long-arrow-up:before {
	    content: '\f303'
	}

	.zmdi-rotate-ccw:before {
	    content: '\f304'
	}

	.zmdi-rotate-cw:before {
	    content: '\f305'
	}

	.zmdi-rotate-left:before {
	    content: '\f306'
	}

	.zmdi-rotate-right:before {
	    content: '\f307'
	}

	.zmdi-square-down:before {
	    content: '\f308'
	}

	.zmdi-square-right:before {
	    content: '\f309'
	}

	.zmdi-swap-alt:before {
	    content: '\f30a'
	}

	.zmdi-swap-vertical-circle:before {
	    content: '\f30b'
	}

	.zmdi-swap-vertical:before {
	    content: '\f30c'
	}

	.zmdi-swap:before {
	    content: '\f30d'
	}

	.zmdi-trending-down:before {
	    content: '\f30e'
	}

	.zmdi-trending-flat:before {
	    content: '\f30f'
	}

	.zmdi-trending-up:before {
	    content: '\f310'
	}

	.zmdi-unfold-less:before {
	    content: '\f311'
	}

	.zmdi-unfold-more:before {
	    content: '\f312'
	}

	.zmdi-apps:before {
	    content: '\f313'
	}

	.zmdi-grid-off:before {
	    content: '\f314'
	}

	.zmdi-grid:before {
	    content: '\f315'
	}

	.zmdi-view-agenda:before {
	    content: '\f316'
	}

	.zmdi-view-array:before {
	    content: '\f317'
	}

	.zmdi-view-carousel:before {
	    content: '\f318'
	}

	.zmdi-view-column:before {
	    content: '\f319'
	}

	.zmdi-view-comfy:before {
	    content: '\f31a'
	}

	.zmdi-view-compact:before {
	    content: '\f31b'
	}

	.zmdi-view-dashboard:before {
	    content: '\f31c'
	}

	.zmdi-view-day:before {
	    content: '\f31d'
	}

	.zmdi-view-headline:before {
	    content: '\f31e'
	}

	.zmdi-view-list-alt:before {
	    content: '\f31f'
	}

	.zmdi-view-list:before {
	    content: '\f320'
	}

	.zmdi-view-module:before {
	    content: '\f321'
	}

	.zmdi-view-quilt:before {
	    content: '\f322'
	}

	.zmdi-view-stream:before {
	    content: '\f323'
	}

	.zmdi-view-subtitles:before {
	    content: '\f324'
	}

	.zmdi-view-toc:before {
	    content: '\f325'
	}

	.zmdi-view-web:before {
	    content: '\f326'
	}

	.zmdi-view-week:before {
	    content: '\f327'
	}

	.zmdi-widgets:before {
	    content: '\f328'
	}

	.zmdi-alarm-check:before {
	    content: '\f329'
	}

	.zmdi-alarm-off:before {
	    content: '\f32a'
	}

	.zmdi-alarm-plus:before {
	    content: '\f32b'
	}

	.zmdi-alarm-snooze:before {
	    content: '\f32c'
	}

	.zmdi-alarm:before {
	    content: '\f32d'
	}

	.zmdi-calendar-alt:before {
	    content: '\f32e'
	}

	.zmdi-calendar-check:before {
	    content: '\f32f'
	}

	.zmdi-calendar-close:before {
	    content: '\f330'
	}

	.zmdi-calendar-note:before {
	    content: '\f331'
	}

	.zmdi-calendar:before {
	    content: '\f332'
	}

	.zmdi-time-countdown:before {
	    content: '\f333'
	}

	.zmdi-time-interval:before {
	    content: '\f334'
	}

	.zmdi-time-restore-setting:before {
	    content: '\f335'
	}

	.zmdi-time-restore:before {
	    content: '\f336'
	}

	.zmdi-time:before {
	    content: '\f337'
	}

	.zmdi-timer-off:before {
	    content: '\f338'
	}

	.zmdi-timer:before {
	    content: '\f339'
	}

	.zmdi-android-alt:before {
	    content: '\f33a'
	}

	.zmdi-android:before {
	    content: '\f33b'
	}

	.zmdi-apple:before {
	    content: '\f33c'
	}

	.zmdi-behance:before {
	    content: '\f33d'
	}

	.zmdi-codepen:before {
	    content: '\f33e'
	}

	.zmdi-dribbble:before {
	    content: '\f33f'
	}

	.zmdi-dropbox:before {
	    content: '\f340'
	}

	.zmdi-evernote:before {
	    content: '\f341'
	}

	.zmdi-facebook-box:before {
	    content: '\f342'
	}

	.zmdi-facebook:before {
	    content: '\f343'
	}

	.zmdi-github-box:before {
	    content: '\f344'
	}

	.zmdi-github:before {
	    content: '\f345'
	}

	.zmdi-google-drive:before {
	    content: '\f346'
	}

	.zmdi-google-earth:before {
	    content: '\f347'
	}

	.zmdi-google-glass:before {
	    content: '\f348'
	}

	.zmdi-google-maps:before {
	    content: '\f349'
	}

	.zmdi-google-pages:before {
	    content: '\f34a'
	}

	.zmdi-google-play:before {
	    content: '\f34b'
	}

	.zmdi-google-plus-box:before {
	    content: '\f34c'
	}

	.zmdi-google-plus:before {
	    content: '\f34d'
	}

	.zmdi-google:before {
	    content: '\f34e'
	}

	.zmdi-instagram:before {
	    content: '\f34f'
	}

	.zmdi-language-css3:before {
	    content: '\f350'
	}

	.zmdi-language-html5:before {
	    content: '\f351'
	}

	.zmdi-language-javascript:before {
	    content: '\f352'
	}

	.zmdi-language-python-alt:before {
	    content: '\f353'
	}

	.zmdi-language-python:before {
	    content: '\f354'
	}

	.zmdi-lastfm:before {
	    content: '\f355'
	}

	.zmdi-linkedin-box:before {
	    content: '\f356'
	}

	.zmdi-paypal:before {
	    content: '\f357'
	}

	.zmdi-pinterest-box:before {
	    content: '\f358'
	}

	.zmdi-pocket:before {
	    content: '\f359'
	}

	.zmdi-polymer:before {
	    content: '\f35a'
	}

	.zmdi-share:before {
	    content: '\f35b'
	}

	.zmdi-stackoverflow:before {
	    content: '\f35c'
	}

	.zmdi-steam-square:before {
	    content: '\f35d'
	}

	.zmdi-steam:before {
	    content: '\f35e'
	}

	.zmdi-twitter-box:before {
	    content: '\f35f'
	}

	.zmdi-twitter:before {
	    content: '\f360'
	}

	.zmdi-vk:before {
	    content: '\f361'
	}

	.zmdi-wikipedia:before {
	    content: '\f362'
	}

	.zmdi-windows:before {
	    content: '\f363'
	}

	.zmdi-aspect-ratio-alt:before {
	    content: '\f364'
	}

	.zmdi-aspect-ratio:before {
	    content: '\f365'
	}

	.zmdi-blur-circular:before {
	    content: '\f366'
	}

	.zmdi-blur-linear:before {
	    content: '\f367'
	}

	.zmdi-blur-off:before {
	    content: '\f368'
	}

	.zmdi-blur:before {
	    content: '\f369'
	}

	.zmdi-brightness-2:before {
	    content: '\f36a'
	}

	.zmdi-brightness-3:before {
	    content: '\f36b'
	}

	.zmdi-brightness-4:before {
	    content: '\f36c'
	}

	.zmdi-brightness-5:before {
	    content: '\f36d'
	}

	.zmdi-brightness-6:before {
	    content: '\f36e'
	}

	.zmdi-brightness-7:before {
	    content: '\f36f'
	}

	.zmdi-brightness-auto:before {
	    content: '\f370'
	}

	.zmdi-brightness-setting:before {
	    content: '\f371'
	}

	.zmdi-broken-image:before {
	    content: '\f372'
	}

	.zmdi-center-focus-strong:before {
	    content: '\f373'
	}

	.zmdi-center-focus-weak:before {
	    content: '\f374'
	}

	.zmdi-compare:before {
	    content: '\f375'
	}

	.zmdi-crop-16-9:before {
	    content: '\f376'
	}

	.zmdi-crop-3-2:before {
	    content: '\f377'
	}

	.zmdi-crop-5-4:before {
	    content: '\f378'
	}

	.zmdi-crop-7-5:before {
	    content: '\f379'
	}

	.zmdi-crop-din:before {
	    content: '\f37a'
	}

	.zmdi-crop-free:before {
	    content: '\f37b'
	}

	.zmdi-crop-landscape:before {
	    content: '\f37c'
	}

	.zmdi-crop-portrait:before {
	    content: '\f37d'
	}

	.zmdi-crop-square:before {
	    content: '\f37e'
	}

	.zmdi-exposure-alt:before {
	    content: '\f37f'
	}

	.zmdi-exposure:before {
	    content: '\f380'
	}

	.zmdi-filter-b-and-w:before {
	    content: '\f381'
	}

	.zmdi-filter-center-focus:before {
	    content: '\f382'
	}

	.zmdi-filter-frames:before {
	    content: '\f383'
	}

	.zmdi-filter-tilt-shift:before {
	    content: '\f384'
	}

	.zmdi-gradient:before {
	    content: '\f385'
	}

	.zmdi-grain:before {
	    content: '\f386'
	}

	.zmdi-graphic-eq:before {
	    content: '\f387'
	}

	.zmdi-hdr-off:before {
	    content: '\f388'
	}

	.zmdi-hdr-strong:before {
	    content: '\f389'
	}

	.zmdi-hdr-weak:before {
	    content: '\f38a'
	}

	.zmdi-hdr:before {
	    content: '\f38b'
	}

	.zmdi-iridescent:before {
	    content: '\f38c'
	}

	.zmdi-leak-off:before {
	    content: '\f38d'
	}

	.zmdi-leak:before {
	    content: '\f38e'
	}

	.zmdi-looks:before {
	    content: '\f38f'
	}

	.zmdi-loupe:before {
	    content: '\f390'
	}

	.zmdi-panorama-horizontal:before {
	    content: '\f391'
	}

	.zmdi-panorama-vertical:before {
	    content: '\f392'
	}

	.zmdi-panorama-wide-angle:before {
	    content: '\f393'
	}

	.zmdi-photo-size-select-large:before {
	    content: '\f394'
	}

	.zmdi-photo-size-select-small:before {
	    content: '\f395'
	}

	.zmdi-picture-in-picture:before {
	    content: '\f396'
	}

	.zmdi-slideshow:before {
	    content: '\f397'
	}

	.zmdi-texture:before {
	    content: '\f398'
	}

	.zmdi-tonality:before {
	    content: '\f399'
	}

	.zmdi-vignette:before {
	    content: '\f39a'
	}

	.zmdi-wb-auto:before {
	    content: '\f39b'
	}

	.zmdi-eject-alt:before {
	    content: '\f39c'
	}

	.zmdi-eject:before {
	    content: '\f39d'
	}

	.zmdi-equalizer:before {
	    content: '\f39e'
	}

	.zmdi-fast-forward:before {
	    content: '\f39f'
	}

	.zmdi-fast-rewind:before {
	    content: '\f3a0'
	}

	.zmdi-forward-10:before {
	    content: '\f3a1'
	}

	.zmdi-forward-30:before {
	    content: '\f3a2'
	}

	.zmdi-forward-5:before {
	    content: '\f3a3'
	}

	.zmdi-hearing:before {
	    content: '\f3a4'
	}

	.zmdi-pause-circle-outline:before {
	    content: '\f3a5'
	}

	.zmdi-pause-circle:before {
	    content: '\f3a6'
	}

	.zmdi-pause:before {
	    content: '\f3a7'
	}

	.zmdi-play-circle-outline:before {
	    content: '\f3a8'
	}

	.zmdi-play-circle:before {
	    content: '\f3a9'
	}

	.zmdi-play:before {
	    content: '\f3aa'
	}

	.zmdi-playlist-audio:before {
	    content: '\f3ab'
	}

	.zmdi-playlist-plus:before {
	    content: '\f3ac'
	}

	.zmdi-repeat-one:before {
	    content: '\f3ad'
	}

	.zmdi-repeat:before {
	    content: '\f3ae'
	}

	.zmdi-replay-10:before {
	    content: '\f3af'
	}

	.zmdi-replay-30:before {
	    content: '\f3b0'
	}

	.zmdi-replay-5:before {
	    content: '\f3b1'
	}

	.zmdi-replay:before {
	    content: '\f3b2'
	}

	.zmdi-shuffle:before {
	    content: '\f3b3'
	}

	.zmdi-skip-next:before {
	    content: '\f3b4'
	}

	.zmdi-skip-previous:before {
	    content: '\f3b5'
	}

	.zmdi-stop:before {
	    content: '\f3b6'
	}

	.zmdi-surround-sound:before {
	    content: '\f3b7'
	}

	.zmdi-tune:before {
	    content: '\f3b8'
	}

	.zmdi-volume-down:before {
	    content: '\f3b9'
	}

	.zmdi-volume-mute:before {
	    content: '\f3ba'
	}

	.zmdi-volume-off:before {
	    content: '\f3bb'
	}

	.zmdi-volume-up:before {
	    content: '\f3bc'
	}

	.zmdi-n-1-square:before {
	    content: '\f3bd'
	}

	.zmdi-n-2-square:before {
	    content: '\f3be'
	}

	.zmdi-n-3-square:before {
	    content: '\f3bf'
	}

	.zmdi-n-4-square:before {
	    content: '\f3c0'
	}

	.zmdi-n-5-square:before {
	    content: '\f3c1'
	}

	.zmdi-n-6-square:before {
	    content: '\f3c2'
	}

	.zmdi-neg-1:before {
	    content: '\f3c3'
	}

	.zmdi-neg-2:before {
	    content: '\f3c4'
	}

	.zmdi-plus-1:before {
	    content: '\f3c5'
	}

	.zmdi-plus-2:before {
	    content: '\f3c6'
	}

	.zmdi-sec-10:before {
	    content: '\f3c7'
	}

	.zmdi-sec-3:before {
	    content: '\f3c8'
	}

	.zmdi-zero:before {
	    content: '\f3c9'
	}

	.zmdi-airline-seat-flat-angled:before {
	    content: '\f3ca'
	}

	.zmdi-airline-seat-flat:before {
	    content: '\f3cb'
	}

	.zmdi-airline-seat-individual-suite:before {
	    content: '\f3cc'
	}

	.zmdi-airline-seat-legroom-extra:before {
	    content: '\f3cd'
	}

	.zmdi-airline-seat-legroom-normal:before {
	    content: '\f3ce'
	}

	.zmdi-airline-seat-legroom-reduced:before {
	    content: '\f3cf'
	}

	.zmdi-airline-seat-recline-extra:before {
	    content: '\f3d0'
	}

	.zmdi-airline-seat-recline-normal:before {
	    content: '\f3d1'
	}

	.zmdi-airplay:before {
	    content: '\f3d2'
	}

	.zmdi-closed-caption:before {
	    content: '\f3d3'
	}

	.zmdi-confirmation-number:before {
	    content: '\f3d4'
	}

	.zmdi-developer-board:before {
	    content: '\f3d5'
	}

	.zmdi-disc-full:before {
	    content: '\f3d6'
	}

	.zmdi-explicit:before {
	    content: '\f3d7'
	}

	.zmdi-flight-land:before {
	    content: '\f3d8'
	}

	.zmdi-flight-takeoff:before {
	    content: '\f3d9'
	}

	.zmdi-flip-to-back:before {
	    content: '\f3da'
	}

	.zmdi-flip-to-front:before {
	    content: '\f3db'
	}

	.zmdi-group-work:before {
	    content: '\f3dc'
	}

	.zmdi-hd:before {
	    content: '\f3dd'
	}

	.zmdi-hq:before {
	    content: '\f3de'
	}

	.zmdi-markunread-mailbox:before {
	    content: '\f3df'
	}

	.zmdi-memory:before {
	    content: '\f3e0'
	}

	.zmdi-nfc:before {
	    content: '\f3e1'
	}

	.zmdi-play-for-work:before {
	    content: '\f3e2'
	}

	.zmdi-power-input:before {
	    content: '\f3e3'
	}

	.zmdi-present-to-all:before {
	    content: '\f3e4'
	}

	.zmdi-satellite:before {
	    content: '\f3e5'
	}

	.zmdi-tap-and-play:before {
	    content: '\f3e6'
	}

	.zmdi-vibration:before {
	    content: '\f3e7'
	}

	.zmdi-voicemail:before {
	    content: '\f3e8'
	}

	.zmdi-group:before {
	    content: '\f3e9'
	}

	.zmdi-rss:before {
	    content: '\f3ea'
	}

	.zmdi-shape:before {
	    content: '\f3eb'
	}

	.zmdi-spinner:before {
	    content: '\f3ec'
	}

	.zmdi-ungroup:before {
	    content: '\f3ed'
	}

	.zmdi-500px:before {
	    content: '\f3ee'
	}

	.zmdi-8tracks:before {
	    content: '\f3ef'
	}

	.zmdi-amazon:before {
	    content: '\f3f0'
	}

	.zmdi-blogger:before {
	    content: '\f3f1'
	}

	.zmdi-delicious:before {
	    content: '\f3f2'
	}

	.zmdi-disqus:before {
	    content: '\f3f3'
	}

	.zmdi-flattr:before {
	    content: '\f3f4'
	}

	.zmdi-flickr:before {
	    content: '\f3f5'
	}

	.zmdi-github-alt:before {
	    content: '\f3f6'
	}

	.zmdi-google-old:before {
	    content: '\f3f7'
	}

	.zmdi-linkedin:before {
	    content: '\f3f8'
	}

	.zmdi-odnoklassniki:before {
	    content: '\f3f9'
	}

	.zmdi-outlook:before {
	    content: '\f3fa'
	}

	.zmdi-paypal-alt:before {
	    content: '\f3fb'
	}

	.zmdi-pinterest:before {
	    content: '\f3fc'
	}

	.zmdi-playstation:before {
	    content: '\f3fd'
	}

	.zmdi-reddit:before {
	    content: '\f3fe'
	}

	.zmdi-skype:before {
	    content: '\f3ff'
	}

	.zmdi-slideshare:before {
	    content: '\f400'
	}

	.zmdi-soundcloud:before {
	    content: '\f401'
	}

	.zmdi-tumblr:before {
	    content: '\f402'
	}

	.zmdi-twitch:before {
	    content: '\f403'
	}

	.zmdi-vimeo:before {
	    content: '\f404'
	}

	.zmdi-whatsapp:before {
	    content: '\f405'
	}

	.zmdi-xbox:before {
	    content: '\f406'
	}

	.zmdi-yahoo:before {
	    content: '\f407'
	}

	.zmdi-youtube-play:before {
	    content: '\f408'
	}

	.zmdi-youtube:before {
	    content: '\f409'
	}

	.zmdi-3d-rotation:before {
	    content: '\f101'
	}

	.zmdi-airplane-off:before {
	    content: '\f102'
	}

	.zmdi-airplane:before {
	    content: '\f103'
	}

	.zmdi-album:before {
	    content: '\f104'
	}

	.zmdi-archive:before {
	    content: '\f105'
	}

	.zmdi-assignment-account:before {
	    content: '\f106'
	}

	.zmdi-assignment-alert:before {
	    content: '\f107'
	}

	.zmdi-assignment-check:before {
	    content: '\f108'
	}

	.zmdi-assignment-o:before {
	    content: '\f109'
	}

	.zmdi-assignment-return:before {
	    content: '\f10a'
	}

	.zmdi-assignment-returned:before {
	    content: '\f10b'
	}

	.zmdi-assignment:before {
	    content: '\f10c'
	}

	.zmdi-attachment-alt:before {
	    content: '\f10d'
	}

	.zmdi-attachment:before {
	    content: '\f10e'
	}

	.zmdi-audio:before {
	    content: '\f10f'
	}

	.zmdi-badge-check:before {
	    content: '\f110'
	}

	.zmdi-balance-wallet:before {
	    content: '\f111'
	}

	.zmdi-balance:before {
	    content: '\f112'
	}

	.zmdi-battery-alert:before {
	    content: '\f113'
	}

	.zmdi-battery-flash:before {
	    content: '\f114'
	}

	.zmdi-battery-unknown:before {
	    content: '\f115'
	}

	.zmdi-battery:before {
	    content: '\f116'
	}

	.zmdi-bike:before {
	    content: '\f117'
	}

	.zmdi-block-alt:before {
	    content: '\f118'
	}

	.zmdi-block:before {
	    content: '\f119'
	}

	.zmdi-boat:before {
	    content: '\f11a'
	}

	.zmdi-book-image:before {
	    content: '\f11b'
	}

	.zmdi-book:before {
	    content: '\f11c'
	}

	.zmdi-bookmark-outline:before {
	    content: '\f11d'
	}

	.zmdi-bookmark:before {
	    content: '\f11e'
	}

	.zmdi-brush:before {
	    content: '\f11f'
	}

	.zmdi-bug:before {
	    content: '\f120'
	}

	.zmdi-bus:before {
	    content: '\f121'
	}

	.zmdi-cake:before {
	    content: '\f122'
	}

	.zmdi-car-taxi:before {
	    content: '\f123'
	}

	.zmdi-car-wash:before {
	    content: '\f124'
	}

	.zmdi-car:before {
	    content: '\f125'
	}

	.zmdi-card-giftcard:before {
	    content: '\f126'
	}

	.zmdi-card-membership:before {
	    content: '\f127'
	}

	.zmdi-card-travel:before {
	    content: '\f128'
	}

	.zmdi-card:before {
	    content: '\f129'
	}

	.zmdi-case-check:before {
	    content: '\f12a'
	}

	.zmdi-case-download:before {
	    content: '\f12b'
	}

	.zmdi-case-play:before {
	    content: '\f12c'
	}

	.zmdi-case:before {
	    content: '\f12d'
	}

	.zmdi-cast-connected:before {
	    content: '\f12e'
	}

	.zmdi-cast:before {
	    content: '\f12f'
	}

	.zmdi-chart-donut:before {
	    content: '\f130'
	}

	.zmdi-chart:before {
	    content: '\f131'
	}

	.zmdi-city-alt:before {
	    content: '\f132'
	}

	.zmdi-city:before {
	    content: '\f133'
	}

	.zmdi-close-circle-o:before {
	    content: '\f134'
	}

	.zmdi-close-circle:before {
	    content: '\f135'
	}

	.zmdi-close:before {
	    content: '\f136'
	}

	.zmdi-cocktail:before {
	    content: '\f137'
	}

	.zmdi-code-setting:before {
	    content: '\f138'
	}

	.zmdi-code-smartphone:before {
	    content: '\f139'
	}

	.zmdi-code:before {
	    content: '\f13a'
	}

	.zmdi-coffee:before {
	    content: '\f13b'
	}

	.zmdi-collection-bookmark:before {
	    content: '\f13c'
	}

	.zmdi-collection-case-play:before {
	    content: '\f13d'
	}

	.zmdi-collection-folder-image:before {
	    content: '\f13e'
	}

	.zmdi-collection-image-o:before {
	    content: '\f13f'
	}

	.zmdi-collection-image:before {
	    content: '\f140'
	}

	.zmdi-collection-item-1:before {
	    content: '\f141'
	}

	.zmdi-collection-item-2:before {
	    content: '\f142'
	}

	.zmdi-collection-item-3:before {
	    content: '\f143'
	}

	.zmdi-collection-item-4:before {
	    content: '\f144'
	}

	.zmdi-collection-item-5:before {
	    content: '\f145'
	}

	.zmdi-collection-item-6:before {
	    content: '\f146'
	}

	.zmdi-collection-item-7:before {
	    content: '\f147'
	}

	.zmdi-collection-item-8:before {
	    content: '\f148'
	}

	.zmdi-collection-item-9-plus:before {
	    content: '\f149'
	}

	.zmdi-collection-item-9:before {
	    content: '\f14a'
	}

	.zmdi-collection-item:before {
	    content: '\f14b'
	}

	.zmdi-collection-music:before {
	    content: '\f14c'
	}

	.zmdi-collection-pdf:before {
	    content: '\f14d'
	}

	.zmdi-collection-plus:before {
	    content: '\f14e'
	}

	.zmdi-collection-speaker:before {
	    content: '\f14f'
	}

	.zmdi-collection-text:before {
	    content: '\f150'
	}

	.zmdi-collection-video:before {
	    content: '\f151'
	}

	.zmdi-compass:before {
	    content: '\f152'
	}

	.zmdi-cutlery:before {
	    content: '\f153'
	}

	.zmdi-delete:before {
	    content: '\f154'
	}

	.zmdi-dialpad:before {
	    content: '\f155'
	}

	.zmdi-dns:before {
	    content: '\f156'
	}

	.zmdi-drink:before {
	    content: '\f157'
	}

	.zmdi-edit:before {
	    content: '\f158'
	}

	.zmdi-email-open:before {
	    content: '\f159'
	}

	.zmdi-email:before {
	    content: '\f15a'
	}

	.zmdi-eye-off:before {
	    content: '\f15b'
	}

	.zmdi-eye:before {
	    content: '\f15c'
	}

	.zmdi-eyedropper:before {
	    content: '\f15d'
	}

	.zmdi-favorite-outline:before {
	    content: '\f15e'
	}

	.zmdi-favorite:before {
	    content: '\f15f'
	}

	.zmdi-filter-list:before {
	    content: '\f160'
	}

	.zmdi-fire:before {
	    content: '\f161'
	}

	.zmdi-flag:before {
	    content: '\f162'
	}

	.zmdi-flare:before {
	    content: '\f163'
	}

	.zmdi-flash-auto:before {
	    content: '\f164'
	}

	.zmdi-flash-off:before {
	    content: '\f165'
	}

	.zmdi-flash:before {
	    content: '\f166'
	}

	.zmdi-flip:before {
	    content: '\f167'
	}

	.zmdi-flower-alt:before {
	    content: '\f168'
	}

	.zmdi-flower:before {
	    content: '\f169'
	}

	.zmdi-font:before {
	    content: '\f16a'
	}

	.zmdi-fullscreen-alt:before {
	    content: '\f16b'
	}

	.zmdi-fullscreen-exit:before {
	    content: '\f16c'
	}

	.zmdi-fullscreen:before {
	    content: '\f16d'
	}

	.zmdi-functions:before {
	    content: '\f16e'
	}

	.zmdi-gas-station:before {
	    content: '\f16f'
	}

	.zmdi-gesture:before {
	    content: '\f170'
	}

	.zmdi-globe-alt:before {
	    content: '\f171'
	}

	.zmdi-globe-lock:before {
	    content: '\f172'
	}

	.zmdi-globe:before {
	    content: '\f173'
	}

	.zmdi-graduation-cap:before {
	    content: '\f174'
	}

	.zmdi-home:before {
	    content: '\f175'
	}

	.zmdi-hospital-alt:before {
	    content: '\f176'
	}

	.zmdi-hospital:before {
	    content: '\f177'
	}

	.zmdi-hotel:before {
	    content: '\f178'
	}

	.zmdi-hourglass-alt:before {
	    content: '\f179'
	}

	.zmdi-hourglass-outline:before {
	    content: '\f17a'
	}

	.zmdi-hourglass:before {
	    content: '\f17b'
	}

	.zmdi-http:before {
	    content: '\f17c'
	}

	.zmdi-image-alt:before {
	    content: '\f17d'
	}

	.zmdi-image-o:before {
	    content: '\f17e'
	}

	.zmdi-image:before {
	    content: '\f17f'
	}

	.zmdi-inbox:before {
	    content: '\f180'
	}

	.zmdi-invert-colors-off:before {
	    content: '\f181'
	}

	.zmdi-invert-colors:before {
	    content: '\f182'
	}

	.zmdi-key:before {
	    content: '\f183'
	}

	.zmdi-label-alt-outline:before {
	    content: '\f184'
	}

	.zmdi-label-alt:before {
	    content: '\f185'
	}

	.zmdi-label-heart:before {
	    content: '\f186'
	}

	.zmdi-label:before {
	    content: '\f187'
	}

	.zmdi-labels:before {
	    content: '\f188'
	}

	.zmdi-lamp:before {
	    content: '\f189'
	}

	.zmdi-landscape:before {
	    content: '\f18a'
	}

	.zmdi-layers-off:before {
	    content: '\f18b'
	}

	.zmdi-layers:before {
	    content: '\f18c'
	}

	.zmdi-library:before {
	    content: '\f18d'
	}

	.zmdi-link:before {
	    content: '\f18e'
	}

	.zmdi-lock-open:before {
	    content: '\f18f'
	}

	.zmdi-lock-outline:before {
	    content: '\f190'
	}

	.zmdi-lock:before {
	    content: '\f191'
	}

	.zmdi-mail-reply-all:before {
	    content: '\f192'
	}

	.zmdi-mail-reply:before {
	    content: '\f193'
	}

	.zmdi-mail-send:before {
	    content: '\f194'
	}

	.zmdi-mall:before {
	    content: '\f195'
	}

	.zmdi-map:before {
	    content: '\f196'
	}

	.zmdi-menu:before {
	    content: '\f197'
	}

	.zmdi-money-box:before {
	    content: '\f198'
	}

	.zmdi-money-off:before {
	    content: '\f199'
	}

	.zmdi-money:before {
	    content: '\f19a'
	}

	.zmdi-more-vert:before {
	    content: '\f19b'
	}

	.zmdi-more:before {
	    content: '\f19c'
	}

	.zmdi-movie-alt:before {
	    content: '\f19d'
	}

	.zmdi-movie:before {
	    content: '\f19e'
	}

	.zmdi-nature-people:before {
	    content: '\f19f'
	}

	.zmdi-nature:before {
	    content: '\f1a0'
	}

	.zmdi-navigation:before {
	    content: '\f1a1'
	}

	.zmdi-open-in-browser:before {
	    content: '\f1a2'
	}

	.zmdi-open-in-new:before {
	    content: '\f1a3'
	}

	.zmdi-palette:before {
	    content: '\f1a4'
	}

	.zmdi-parking:before {
	    content: '\f1a5'
	}

	.zmdi-pin-account:before {
	    content: '\f1a6'
	}

	.zmdi-pin-assistant:before {
	    content: '\f1a7'
	}

	.zmdi-pin-drop:before {
	    content: '\f1a8'
	}

	.zmdi-pin-help:before {
	    content: '\f1a9'
	}

	.zmdi-pin-off:before {
	    content: '\f1aa'
	}

	.zmdi-pin:before {
	    content: '\f1ab'
	}

	.zmdi-pizza:before {
	    content: '\f1ac'
	}

	.zmdi-plaster:before {
	    content: '\f1ad'
	}

	.zmdi-power-setting:before {
	    content: '\f1ae'
	}

	.zmdi-power:before {
	    content: '\f1af'
	}

	.zmdi-print:before {
	    content: '\f1b0'
	}

	.zmdi-puzzle-piece:before {
	    content: '\f1b1'
	}

	.zmdi-quote:before {
	    content: '\f1b2'
	}

	.zmdi-railway:before {
	    content: '\f1b3'
	}

	.zmdi-receipt:before {
	    content: '\f1b4'
	}

	.zmdi-refresh-alt:before {
	    content: '\f1b5'
	}

	.zmdi-refresh-sync-alert:before {
	    content: '\f1b6'
	}

	.zmdi-refresh-sync-off:before {
	    content: '\f1b7'
	}

	.zmdi-refresh-sync:before {
	    content: '\f1b8'
	}

	.zmdi-refresh:before {
	    content: '\f1b9'
	}

	.zmdi-roller:before {
	    content: '\f1ba'
	}

	.zmdi-ruler:before {
	    content: '\f1bb'
	}

	.zmdi-scissors:before {
	    content: '\f1bc'
	}

	.zmdi-screen-rotation-lock:before {
	    content: '\f1bd'
	}

	.zmdi-screen-rotation:before {
	    content: '\f1be'
	}

	.zmdi-search-for:before {
	    content: '\f1bf'
	}

	.zmdi-search-in-file:before {
	    content: '\f1c0'
	}

	.zmdi-search-in-page:before {
	    content: '\f1c1'
	}

	.zmdi-search-replace:before {
	    content: '\f1c2'
	}

	.zmdi-search:before {
	    content: '\f1c3'
	}

	.zmdi-seat:before {
	    content: '\f1c4'
	}

	.zmdi-settings-square:before {
	    content: '\f1c5'
	}

	.zmdi-settings:before {
	    content: '\f1c6'
	}

	.zmdi-shield-check:before {
	    content: '\f1c7'
	}

	.zmdi-shield-security:before {
	    content: '\f1c8'
	}

	.zmdi-shopping-basket:before {
	    content: '\f1c9'
	}

	.zmdi-shopping-cart-plus:before {
	    content: '\f1ca'
	}

	.zmdi-shopping-cart:before {
	    content: '\f1cb'
	}

	.zmdi-sign-in:before {
	    content: '\f1cc'
	}

	.zmdi-sort-amount-asc:before {
	    content: '\f1cd'
	}

	.zmdi-sort-amount-desc:before {
	    content: '\f1ce'
	}

	.zmdi-sort-asc:before {
	    content: '\f1cf'
	}

	.zmdi-sort-desc:before {
	    content: '\f1d0'
	}

	.zmdi-spellcheck:before {
	    content: '\f1d1'
	}

	.zmdi-storage:before {
	    content: '\f1d2'
	}

	.zmdi-store-24:before {
	    content: '\f1d3'
	}

	.zmdi-store:before {
	    content: '\f1d4'
	}

	.zmdi-subway:before {
	    content: '\f1d5'
	}

	.zmdi-sun:before {
	    content: '\f1d6'
	}

	.zmdi-tab-unselected:before {
	    content: '\f1d7'
	}

	.zmdi-tab:before {
	    content: '\f1d8'
	}

	.zmdi-tag-close:before {
	    content: '\f1d9'
	}

	.zmdi-tag-more:before {
	    content: '\f1da'
	}

	.zmdi-tag:before {
	    content: '\f1db'
	}

	.zmdi-thumb-down:before {
	    content: '\f1dc'
	}

	.zmdi-thumb-up-down:before {
	    content: '\f1dd'
	}

	.zmdi-thumb-up:before {
	    content: '\f1de'
	}

	.zmdi-ticket-star:before {
	    content: '\f1df'
	}

	.zmdi-toll:before {
	    content: '\f1e0'
	}

	.zmdi-toys:before {
	    content: '\f1e1'
	}

	.zmdi-traffic:before {
	    content: '\f1e2'
	}

	.zmdi-translate:before {
	    content: '\f1e3'
	}

	.zmdi-triangle-down:before {
	    content: '\f1e4'
	}

	.zmdi-triangle-up:before {
	    content: '\f1e5'
	}

	.zmdi-truck:before {
	    content: '\f1e6'
	}

	.zmdi-turning-sign:before {
	    content: '\f1e7'
	}

	.zmdi-wallpaper:before {
	    content: '\f1e8'
	}

	.zmdi-washing-machine:before {
	    content: '\f1e9'
	}

	.zmdi-window-maximize:before {
	    content: '\f1ea'
	}

	.zmdi-window-minimize:before {
	    content: '\f1eb'
	}

	.zmdi-window-restore:before {
	    content: '\f1ec'
	}

	.zmdi-wrench:before {
	    content: '\f1ed'
	}

	.zmdi-zoom-in:before {
	    content: '\f1ee'
	}

	.zmdi-zoom-out:before {
	    content: '\f1ef'
	}

	.zmdi-alert-circle-o:before {
	    content: '\f1f0'
	}

	.zmdi-alert-circle:before {
	    content: '\f1f1'
	}

	.zmdi-alert-octagon:before {
	    content: '\f1f2'
	}

	.zmdi-alert-polygon:before {
	    content: '\f1f3'
	}

	.zmdi-alert-triangle:before {
	    content: '\f1f4'
	}

	.zmdi-help-outline:before {
	    content: '\f1f5'
	}

	.zmdi-help:before {
	    content: '\f1f6'
	}

	.zmdi-info-outline:before {
	    content: '\f1f7'
	}

	.zmdi-info:before {
	    content: '\f1f8'
	}

	.zmdi-notifications-active:before {
	    content: '\f1f9'
	}

	.zmdi-notifications-add:before {
	    content: '\f1fa'
	}

	.zmdi-notifications-none:before {
	    content: '\f1fb'
	}

	.zmdi-notifications-off:before {
	    content: '\f1fc'
	}

	.zmdi-notifications-paused:before {
	    content: '\f1fd'
	}

	.zmdi-notifications:before {
	    content: '\f1fe'
	}

	.zmdi-account-add:before {
	    content: '\f1ff'
	}

	.zmdi-account-box-mail:before {
	    content: '\f200'
	}

	.zmdi-account-box-o:before {
	    content: '\f201'
	}

	.zmdi-account-box-phone:before {
	    content: '\f202'
	}

	.zmdi-account-box:before {
	    content: '\f203'
	}

	.zmdi-account-calendar:before {
	    content: '\f204'
	}

	.zmdi-account-circle:before {
	    content: '\f205'
	}

	.zmdi-account-o:before {
	    content: '\f206'
	}

	.zmdi-account:before {
	    content: '\f207'
	}

	.zmdi-accounts-add:before {
	    content: '\f208'
	}

	.zmdi-accounts-alt:before {
	    content: '\f209'
	}

	.zmdi-accounts-list-alt:before {
	    content: '\f20a'
	}

	.zmdi-accounts-list:before {
	    content: '\f20b'
	}

	.zmdi-accounts-outline:before {
	    content: '\f20c'
	}

	.zmdi-accounts:before {
	    content: '\f20d'
	}

	.zmdi-face:before {
	    content: '\f20e'
	}

	.zmdi-female:before {
	    content: '\f20f'
	}

	.zmdi-male-alt:before {
	    content: '\f210'
	}

	.zmdi-male-female:before {
	    content: '\f211'
	}

	.zmdi-male:before {
	    content: '\f212'
	}

	.zmdi-mood-bad:before {
	    content: '\f213'
	}

	.zmdi-mood:before {
	    content: '\f214'
	}

	.zmdi-run:before {
	    content: '\f215'
	}

	.zmdi-walk:before {
	    content: '\f216'
	}

	.zmdi-cloud-box:before {
	    content: '\f217'
	}

	.zmdi-cloud-circle:before {
	    content: '\f218'
	}

	.zmdi-cloud-done:before {
	    content: '\f219'
	}

	.zmdi-cloud-download:before {
	    content: '\f21a'
	}

	.zmdi-cloud-off:before {
	    content: '\f21b'
	}

	.zmdi-cloud-outline-alt:before {
	    content: '\f21c'
	}

	.zmdi-cloud-outline:before {
	    content: '\f21d'
	}

	.zmdi-cloud-upload:before {
	    content: '\f21e'
	}

	.zmdi-cloud:before {
	    content: '\f21f'
	}

	.zmdi-download:before {
	    content: '\f220'
	}

	.zmdi-file-plus:before {
	    content: '\f221'
	}

	.zmdi-file-text:before {
	    content: '\f222'
	}

	.zmdi-file:before {
	    content: '\f223'
	}

	.zmdi-folder-outline:before {
	    content: '\f224'
	}

	.zmdi-folder-person:before {
	    content: '\f225'
	}

	.zmdi-folder-star-alt:before {
	    content: '\f226'
	}

	.zmdi-folder-star:before {
	    content: '\f227'
	}

	.zmdi-folder:before {
	    content: '\f228'
	}

	.zmdi-gif:before {
	    content: '\f229'
	}

	.zmdi-upload:before {
	    content: '\f22a'
	}

	.zmdi-border-all:before {
	    content: '\f22b'
	}

	.zmdi-border-bottom:before {
	    content: '\f22c'
	}

	.zmdi-border-clear:before {
	    content: '\f22d'
	}

	.zmdi-border-color:before {
	    content: '\f22e'
	}

	.zmdi-border-horizontal:before {
	    content: '\f22f'
	}

	.zmdi-border-inner:before {
	    content: '\f230'
	}

	.zmdi-border-left:before {
	    content: '\f231'
	}

	.zmdi-border-outer:before {
	    content: '\f232'
	}

	.zmdi-border-right:before {
	    content: '\f233'
	}

	.zmdi-border-style:before {
	    content: '\f234'
	}

	.zmdi-border-top:before {
	    content: '\f235'
	}

	.zmdi-border-vertical:before {
	    content: '\f236'
	}

	.zmdi-copy:before {
	    content: '\f237'
	}

	.zmdi-crop:before {
	    content: '\f238'
	}

	.zmdi-format-align-center:before {
	    content: '\f239'
	}

	.zmdi-format-align-justify:before {
	    content: '\f23a'
	}

	.zmdi-format-align-left:before {
	    content: '\f23b'
	}

	.zmdi-format-align-right:before {
	    content: '\f23c'
	}

	.zmdi-format-bold:before {
	    content: '\f23d'
	}

	.zmdi-format-clear-all:before {
	    content: '\f23e'
	}

	.zmdi-format-clear:before {
	    content: '\f23f'
	}

	.zmdi-format-color-fill:before {
	    content: '\f240'
	}

	.zmdi-format-color-reset:before {
	    content: '\f241'
	}

	.zmdi-format-color-text:before {
	    content: '\f242'
	}

	.zmdi-format-indent-decrease:before {
	    content: '\f243'
	}

	.zmdi-format-indent-increase:before {
	    content: '\f244'
	}

	.zmdi-format-italic:before {
	    content: '\f245'
	}

	.zmdi-format-line-spacing:before {
	    content: '\f246'
	}

	.zmdi-format-list-bulleted:before {
	    content: '\f247'
	}

	.zmdi-format-list-numbered:before {
	    content: '\f248'
	}

	.zmdi-format-ltr:before {
	    content: '\f249'
	}

	.zmdi-format-rtl:before {
	    content: '\f24a'
	}

	.zmdi-format-size:before {
	    content: '\f24b'
	}

	.zmdi-format-strikethrough-s:before {
	    content: '\f24c'
	}

	.zmdi-format-strikethrough:before {
	    content: '\f24d'
	}

	.zmdi-format-subject:before {
	    content: '\f24e'
	}

	.zmdi-format-underlined:before {
	    content: '\f24f'
	}

	.zmdi-format-valign-bottom:before {
	    content: '\f250'
	}

	.zmdi-format-valign-center:before {
	    content: '\f251'
	}

	.zmdi-format-valign-top:before {
	    content: '\f252'
	}

	.zmdi-redo:before {
	    content: '\f253'
	}

	.zmdi-select-all:before {
	    content: '\f254'
	}

	.zmdi-space-bar:before {
	    content: '\f255'
	}

	.zmdi-text-format:before {
	    content: '\f256'
	}

	.zmdi-transform:before {
	    content: '\f257'
	}

	.zmdi-undo:before {
	    content: '\f258'
	}

	.zmdi-wrap-text:before {
	    content: '\f259'
	}

	.zmdi-comment-alert:before {
	    content: '\f25a'
	}

	.zmdi-comment-alt-text:before {
	    content: '\f25b'
	}

	.zmdi-comment-alt:before {
	    content: '\f25c'
	}

	.zmdi-comment-edit:before {
	    content: '\f25d'
	}

	.zmdi-comment-image:before {
	    content: '\f25e'
	}

	.zmdi-comment-list:before {
	    content: '\f25f'
	}

	.zmdi-comment-more:before {
	    content: '\f260'
	}

	.zmdi-comment-outline:before {
	    content: '\f261'
	}

	.zmdi-comment-text-alt:before {
	    content: '\f262'
	}

	.zmdi-comment-text:before {
	    content: '\f263'
	}

	.zmdi-comment-video:before {
	    content: '\f264'
	}

	.zmdi-comment:before {
	    content: '\f265'
	}

	.zmdi-comments:before {
	    content: '\f266'
	}

	.zmdi-check-all:before {
	    content: '\f267'
	}

	.zmdi-check-circle-u:before {
	    content: '\f268'
	}

	.zmdi-check-circle:before {
	    content: '\f269'
	}

	.zmdi-check-square:before {
	    content: '\f26a'
	}

	.zmdi-check:before {
	    content: '\f26b'
	}

	.zmdi-circle-o:before {
	    content: '\f26c'
	}

	.zmdi-circle:before {
	    content: '\f26d'
	}

	.zmdi-dot-circle-alt:before {
	    content: '\f26e'
	}

	.zmdi-dot-circle:before {
	    content: '\f26f'
	}

	.zmdi-minus-circle-outline:before {
	    content: '\f270'
	}

	.zmdi-minus-circle:before {
	    content: '\f271'
	}

	.zmdi-minus-square:before {
	    content: '\f272'
	}

	.zmdi-minus:before {
	    content: '\f273'
	}

	.zmdi-plus-circle-o-duplicate:before {
	    content: '\f274'
	}

	.zmdi-plus-circle-o:before {
	    content: '\f275'
	}

	.zmdi-plus-circle:before {
	    content: '\f276'
	}

	.zmdi-plus-square:before {
	    content: '\f277'
	}

	.zmdi-plus:before {
	    content: '\f278'
	}

	.zmdi-square-o:before {
	    content: '\f279'
	}

	.zmdi-star-circle:before {
	    content: '\f27a'
	}

	.zmdi-star-half:before {
	    content: '\f27b'
	}

	.zmdi-star-outline:before {
	    content: '\f27c'
	}

	.zmdi-star:before {
	    content: '\f27d'
	}

	.zmdi-bluetooth-connected:before {
	    content: '\f27e'
	}

	.zmdi-bluetooth-off:before {
	    content: '\f27f'
	}

	.zmdi-bluetooth-search:before {
	    content: '\f280'
	}

	.zmdi-bluetooth-setting:before {
	    content: '\f281'
	}

	.zmdi-bluetooth:before {
	    content: '\f282'
	}

	.zmdi-camera-add:before {
	    content: '\f283'
	}

	.zmdi-camera-alt:before {
	    content: '\f284'
	}

	.zmdi-camera-bw:before {
	    content: '\f285'
	}

	.zmdi-camera-front:before {
	    content: '\f286'
	}

	.zmdi-camera-mic:before {
	    content: '\f287'
	}

	.zmdi-camera-party-mode:before {
	    content: '\f288'
	}

	.zmdi-camera-rear:before {
	    content: '\f289'
	}

	.zmdi-camera-roll:before {
	    content: '\f28a'
	}

	.zmdi-camera-switch:before {
	    content: '\f28b'
	}

	.zmdi-camera:before {
	    content: '\f28c'
	}

	.zmdi-card-alert:before {
	    content: '\f28d'
	}

	.zmdi-card-off:before {
	    content: '\f28e'
	}

	.zmdi-card-sd:before {
	    content: '\f28f'
	}

	.zmdi-card-sim:before {
	    content: '\f290'
	}

	.zmdi-desktop-mac:before {
	    content: '\f291'
	}

	.zmdi-desktop-windows:before {
	    content: '\f292'
	}

	.zmdi-device-hub:before {
	    content: '\f293'
	}

	.zmdi-devices-off:before {
	    content: '\f294'
	}

	.zmdi-devices:before {
	    content: '\f295'
	}

	.zmdi-dock:before {
	    content: '\f296'
	}

	.zmdi-floppy:before {
	    content: '\f297'
	}

	.zmdi-gamepad:before {
	    content: '\f298'
	}

	.zmdi-gps-dot:before {
	    content: '\f299'
	}

	.zmdi-gps-off:before {
	    content: '\f29a'
	}

	.zmdi-gps:before {
	    content: '\f29b'
	}

	.zmdi-headset-mic:before {
	    content: '\f29c'
	}

	.zmdi-headset:before {
	    content: '\f29d'
	}

	.zmdi-input-antenna:before {
	    content: '\f29e'
	}

	.zmdi-input-composite:before {
	    content: '\f29f'
	}

	.zmdi-input-hdmi:before {
	    content: '\f2a0'
	}

	.zmdi-input-power:before {
	    content: '\f2a1'
	}

	.zmdi-input-svideo:before {
	    content: '\f2a2'
	}

	.zmdi-keyboard-hide:before {
	    content: '\f2a3'
	}

	.zmdi-keyboard:before {
	    content: '\f2a4'
	}

	.zmdi-laptop-chromebook:before {
	    content: '\f2a5'
	}

	.zmdi-laptop-mac:before {
	    content: '\f2a6'
	}

	.zmdi-laptop:before {
	    content: '\f2a7'
	}

	.zmdi-mic-off:before {
	    content: '\f2a8'
	}

	.zmdi-mic-outline:before {
	    content: '\f2a9'
	}

	.zmdi-mic-setting:before {
	    content: '\f2aa'
	}

	.zmdi-mic:before {
	    content: '\f2ab'
	}

	.zmdi-mouse:before {
	    content: '\f2ac'
	}

	.zmdi-network-alert:before {
	    content: '\f2ad'
	}

	.zmdi-network-locked:before {
	    content: '\f2ae'
	}

	.zmdi-network-off:before {
	    content: '\f2af'
	}

	.zmdi-network-outline:before {
	    content: '\f2b0'
	}

	.zmdi-network-setting:before {
	    content: '\f2b1'
	}

	.zmdi-network:before {
	    content: '\f2b2'
	}

	.zmdi-phone-bluetooth:before {
	    content: '\f2b3'
	}

	.zmdi-phone-end:before {
	    content: '\f2b4'
	}

	.zmdi-phone-forwarded:before {
	    content: '\f2b5'
	}

	.zmdi-phone-in-talk:before {
	    content: '\f2b6'
	}

	.zmdi-phone-locked:before {
	    content: '\f2b7'
	}

	.zmdi-phone-missed:before {
	    content: '\f2b8'
	}

	.zmdi-phone-msg:before {
	    content: '\f2b9'
	}

	.zmdi-phone-paused:before {
	    content: '\f2ba'
	}

	.zmdi-phone-ring:before {
	    content: '\f2bb'
	}

	.zmdi-phone-setting:before {
	    content: '\f2bc'
	}

	.zmdi-phone-sip:before {
	    content: '\f2bd'
	}

	.zmdi-phone:before {
	    content: '\f2be'
	}

	.zmdi-portable-wifi-changes:before {
	    content: '\f2bf'
	}

	.zmdi-portable-wifi-off:before {
	    content: '\f2c0'
	}

	.zmdi-portable-wifi:before {
	    content: '\f2c1'
	}

	.zmdi-radio:before {
	    content: '\f2c2'
	}

	.zmdi-reader:before {
	    content: '\f2c3'
	}

	.zmdi-remote-control-alt:before {
	    content: '\f2c4'
	}

	.zmdi-remote-control:before {
	    content: '\f2c5'
	}

	.zmdi-router:before {
	    content: '\f2c6'
	}

	.zmdi-scanner:before {
	    content: '\f2c7'
	}

	.zmdi-smartphone-android:before {
	    content: '\f2c8'
	}

	.zmdi-smartphone-download:before {
	    content: '\f2c9'
	}

	.zmdi-smartphone-erase:before {
	    content: '\f2ca'
	}

	.zmdi-smartphone-info:before {
	    content: '\f2cb'
	}

	.zmdi-smartphone-iphone:before {
	    content: '\f2cc'
	}

	.zmdi-smartphone-landscape-lock:before {
	    content: '\f2cd'
	}

	.zmdi-smartphone-landscape:before {
	    content: '\f2ce'
	}

	.zmdi-smartphone-lock:before {
	    content: '\f2cf'
	}

	.zmdi-smartphone-portrait-lock:before {
	    content: '\f2d0'
	}

	.zmdi-smartphone-ring:before {
	    content: '\f2d1'
	}

	.zmdi-smartphone-setting:before {
	    content: '\f2d2'
	}

	.zmdi-smartphone-setup:before {
	    content: '\f2d3'
	}

	.zmdi-smartphone:before {
	    content: '\f2d4'
	}

	.zmdi-speaker:before {
	    content: '\f2d5'
	}

	.zmdi-tablet-android:before {
	    content: '\f2d6'
	}

	.zmdi-tablet-mac:before {
	    content: '\f2d7'
	}

	.zmdi-tablet:before {
	    content: '\f2d8'
	}

	.zmdi-tv-alt-play:before {
	    content: '\f2d9'
	}

	.zmdi-tv-list:before {
	    content: '\f2da'
	}

	.zmdi-tv-play:before {
	    content: '\f2db'
	}

	.zmdi-tv:before {
	    content: '\f2dc'
	}

	.zmdi-usb:before {
	    content: '\f2dd'
	}

	.zmdi-videocam-off:before {
	    content: '\f2de'
	}

	.zmdi-videocam-switch:before {
	    content: '\f2df'
	}

	.zmdi-videocam:before {
	    content: '\f2e0'
	}

	.zmdi-watch:before {
	    content: '\f2e1'
	}

	.zmdi-wifi-alt-2:before {
	    content: '\f2e2'
	}

	.zmdi-wifi-alt:before {
	    content: '\f2e3'
	}

	.zmdi-wifi-info:before {
	    content: '\f2e4'
	}

	.zmdi-wifi-lock:before {
	    content: '\f2e5'
	}

	.zmdi-wifi-off:before {
	    content: '\f2e6'
	}

	.zmdi-wifi-outline:before {
	    content: '\f2e7'
	}

	.zmdi-wifi:before {
	    content: '\f2e8'
	}

	.zmdi-arrow-left-bottom:before {
	    content: '\f2e9'
	}

	.zmdi-arrow-left:before {
	    content: '\f2ea'
	}

	.zmdi-arrow-merge:before {
	    content: '\f2eb'
	}

	.zmdi-arrow-missed:before {
	    content: '\f2ec'
	}

	.zmdi-arrow-right-top:before {
	    content: '\f2ed'
	}

	.zmdi-arrow-right:before {
	    content: '\f2ee'
	}

	.zmdi-arrow-split:before {
	    content: '\f2ef'
	}

	.zmdi-arrows:before {
	    content: '\f2f0'
	}

	.zmdi-caret-down-circle:before {
	    content: '\f2f1'
	}

	.zmdi-caret-down:before {
	    content: '\f2f2'
	}

	.zmdi-caret-left-circle:before {
	    content: '\f2f3'
	}

	.zmdi-caret-left:before {
	    content: '\f2f4'
	}

	.zmdi-caret-right-circle:before {
	    content: '\f2f5'
	}

	.zmdi-caret-right:before {
	    content: '\f2f6'
	}

	.zmdi-caret-up-circle:before {
	    content: '\f2f7'
	}

	.zmdi-caret-up:before {
	    content: '\f2f8'
	}

	.zmdi-chevron-down:before {
	    content: '\f2f9'
	}

	.zmdi-chevron-left:before {
	    content: '\f2fa'
	}

	.zmdi-chevron-right:before {
	    content: '\f2fb'
	}

	.zmdi-chevron-up:before {
	    content: '\f2fc'
	}

	.zmdi-forward:before {
	    content: '\f2fd'
	}

	.zmdi-long-arrow-down:before {
	    content: '\f2fe'
	}

	.zmdi-long-arrow-left:before {
	    content: '\f2ff'
	}

	.zmdi-long-arrow-return:before {
	    content: '\f300'
	}

	.zmdi-long-arrow-right:before {
	    content: '\f301'
	}

	.zmdi-long-arrow-tab:before {
	    content: '\f302'
	}

	.zmdi-long-arrow-up:before {
	    content: '\f303'
	}

	.zmdi-rotate-ccw:before {
	    content: '\f304'
	}

	.zmdi-rotate-cw:before {
	    content: '\f305'
	}

	.zmdi-rotate-left:before {
	    content: '\f306'
	}

	.zmdi-rotate-right:before {
	    content: '\f307'
	}

	.zmdi-square-down:before {
	    content: '\f308'
	}

	.zmdi-square-right:before {
	    content: '\f309'
	}

	.zmdi-swap-alt:before {
	    content: '\f30a'
	}

	.zmdi-swap-vertical-circle:before {
	    content: '\f30b'
	}

	.zmdi-swap-vertical:before {
	    content: '\f30c'
	}

	.zmdi-swap:before {
	    content: '\f30d'
	}

	.zmdi-trending-down:before {
	    content: '\f30e'
	}

	.zmdi-trending-flat:before {
	    content: '\f30f'
	}

	.zmdi-trending-up:before {
	    content: '\f310'
	}

	.zmdi-unfold-less:before {
	    content: '\f311'
	}

	.zmdi-unfold-more:before {
	    content: '\f312'
	}

	.zmdi-apps:before {
	    content: '\f313'
	}

	.zmdi-grid-off:before {
	    content: '\f314'
	}

	.zmdi-grid:before {
	    content: '\f315'
	}

	.zmdi-view-agenda:before {
	    content: '\f316'
	}

	.zmdi-view-array:before {
	    content: '\f317'
	}

	.zmdi-view-carousel:before {
	    content: '\f318'
	}

	.zmdi-view-column:before {
	    content: '\f319'
	}

	.zmdi-view-comfy:before {
	    content: '\f31a'
	}

	.zmdi-view-compact:before {
	    content: '\f31b'
	}

	.zmdi-view-dashboard:before {
	    content: '\f31c'
	}

	.zmdi-view-day:before {
	    content: '\f31d'
	}

	.zmdi-view-headline:before {
	    content: '\f31e'
	}

	.zmdi-view-list-alt:before {
	    content: '\f31f'
	}

	.zmdi-view-list:before {
	    content: '\f320'
	}

	.zmdi-view-module:before {
	    content: '\f321'
	}

	.zmdi-view-quilt:before {
	    content: '\f322'
	}

	.zmdi-view-stream:before {
	    content: '\f323'
	}

	.zmdi-view-subtitles:before {
	    content: '\f324'
	}

	.zmdi-view-toc:before {
	    content: '\f325'
	}

	.zmdi-view-web:before {
	    content: '\f326'
	}

	.zmdi-view-week:before {
	    content: '\f327'
	}

	.zmdi-widgets:before {
	    content: '\f328'
	}

	.zmdi-alarm-check:before {
	    content: '\f329'
	}

	.zmdi-alarm-off:before {
	    content: '\f32a'
	}

	.zmdi-alarm-plus:before {
	    content: '\f32b'
	}

	.zmdi-alarm-snooze:before {
	    content: '\f32c'
	}

	.zmdi-alarm:before {
	    content: '\f32d'
	}

	.zmdi-calendar-alt:before {
	    content: '\f32e'
	}

	.zmdi-calendar-check:before {
	    content: '\f32f'
	}

	.zmdi-calendar-close:before {
	    content: '\f330'
	}

	.zmdi-calendar-note:before {
	    content: '\f331'
	}

	.zmdi-calendar:before {
	    content: '\f332'
	}

	.zmdi-time-countdown:before {
	    content: '\f333'
	}

	.zmdi-time-interval:before {
	    content: '\f334'
	}

	.zmdi-time-restore-setting:before {
	    content: '\f335'
	}

	.zmdi-time-restore:before {
	    content: '\f336'
	}

	.zmdi-time:before {
	    content: '\f337'
	}

	.zmdi-timer-off:before {
	    content: '\f338'
	}

	.zmdi-timer:before {
	    content: '\f339'
	}

	.zmdi-android-alt:before {
	    content: '\f33a'
	}

	.zmdi-android:before {
	    content: '\f33b'
	}

	.zmdi-apple:before {
	    content: '\f33c'
	}

	.zmdi-behance:before {
	    content: '\f33d'
	}

	.zmdi-codepen:before {
	    content: '\f33e'
	}

	.zmdi-dribbble:before {
	    content: '\f33f'
	}

	.zmdi-dropbox:before {
	    content: '\f340'
	}

	.zmdi-evernote:before {
	    content: '\f341'
	}

	.zmdi-facebook-box:before {
	    content: '\f342'
	}

	.zmdi-facebook:before {
	    content: '\f343'
	}

	.zmdi-github-box:before {
	    content: '\f344'
	}

	.zmdi-github:before {
	    content: '\f345'
	}

	.zmdi-google-drive:before {
	    content: '\f346'
	}

	.zmdi-google-earth:before {
	    content: '\f347'
	}

	.zmdi-google-glass:before {
	    content: '\f348'
	}

	.zmdi-google-maps:before {
	    content: '\f349'
	}

	.zmdi-google-pages:before {
	    content: '\f34a'
	}

	.zmdi-google-play:before {
	    content: '\f34b'
	}

	.zmdi-google-plus-box:before {
	    content: '\f34c'
	}

	.zmdi-google-plus:before {
	    content: '\f34d'
	}

	.zmdi-google:before {
	    content: '\f34e'
	}

	.zmdi-instagram:before {
	    content: '\f34f'
	}

	.zmdi-language-css3:before {
	    content: '\f350'
	}

	.zmdi-language-html5:before {
	    content: '\f351'
	}

	.zmdi-language-javascript:before {
	    content: '\f352'
	}

	.zmdi-language-python-alt:before {
	    content: '\f353'
	}

	.zmdi-language-python:before {
	    content: '\f354'
	}

	.zmdi-lastfm:before {
	    content: '\f355'
	}

	.zmdi-linkedin-box:before {
	    content: '\f356'
	}

	.zmdi-paypal:before {
	    content: '\f357'
	}

	.zmdi-pinterest-box:before {
	    content: '\f358'
	}

	.zmdi-pocket:before {
	    content: '\f359'
	}

	.zmdi-polymer:before {
	    content: '\f35a'
	}

	.zmdi-share:before {
	    content: '\f35b'
	}

	.zmdi-stackoverflow:before {
	    content: '\f35c'
	}

	.zmdi-steam-square:before {
	    content: '\f35d'
	}

	.zmdi-steam:before {
	    content: '\f35e'
	}

	.zmdi-twitter-box:before {
	    content: '\f35f'
	}

	.zmdi-twitter:before {
	    content: '\f360'
	}

	.zmdi-vk:before {
	    content: '\f361'
	}

	.zmdi-wikipedia:before {
	    content: '\f362'
	}

	.zmdi-windows:before {
	    content: '\f363'
	}

	.zmdi-aspect-ratio-alt:before {
	    content: '\f364'
	}

	.zmdi-aspect-ratio:before {
	    content: '\f365'
	}

	.zmdi-blur-circular:before {
	    content: '\f366'
	}

	.zmdi-blur-linear:before {
	    content: '\f367'
	}

	.zmdi-blur-off:before {
	    content: '\f368'
	}

	.zmdi-blur:before {
	    content: '\f369'
	}

	.zmdi-brightness-2:before {
	    content: '\f36a'
	}

	.zmdi-brightness-3:before {
	    content: '\f36b'
	}

	.zmdi-brightness-4:before {
	    content: '\f36c'
	}

	.zmdi-brightness-5:before {
	    content: '\f36d'
	}

	.zmdi-brightness-6:before {
	    content: '\f36e'
	}

	.zmdi-brightness-7:before {
	    content: '\f36f'
	}

	.zmdi-brightness-auto:before {
	    content: '\f370'
	}

	.zmdi-brightness-setting:before {
	    content: '\f371'
	}

	.zmdi-broken-image:before {
	    content: '\f372'
	}

	.zmdi-center-focus-strong:before {
	    content: '\f373'
	}

	.zmdi-center-focus-weak:before {
	    content: '\f374'
	}

	.zmdi-compare:before {
	    content: '\f375'
	}

	.zmdi-crop-16-9:before {
	    content: '\f376'
	}

	.zmdi-crop-3-2:before {
	    content: '\f377'
	}

	.zmdi-crop-5-4:before {
	    content: '\f378'
	}

	.zmdi-crop-7-5:before {
	    content: '\f379'
	}

	.zmdi-crop-din:before {
	    content: '\f37a'
	}

	.zmdi-crop-free:before {
	    content: '\f37b'
	}

	.zmdi-crop-landscape:before {
	    content: '\f37c'
	}

	.zmdi-crop-portrait:before {
	    content: '\f37d'
	}

	.zmdi-crop-square:before {
	    content: '\f37e'
	}

	.zmdi-exposure-alt:before {
	    content: '\f37f'
	}

	.zmdi-exposure:before {
	    content: '\f380'
	}

	.zmdi-filter-b-and-w:before {
	    content: '\f381'
	}

	.zmdi-filter-center-focus:before {
	    content: '\f382'
	}

	.zmdi-filter-frames:before {
	    content: '\f383'
	}

	.zmdi-filter-tilt-shift:before {
	    content: '\f384'
	}

	.zmdi-gradient:before {
	    content: '\f385'
	}

	.zmdi-grain:before {
	    content: '\f386'
	}

	.zmdi-graphic-eq:before {
	    content: '\f387'
	}

	.zmdi-hdr-off:before {
	    content: '\f388'
	}

	.zmdi-hdr-strong:before {
	    content: '\f389'
	}

	.zmdi-hdr-weak:before {
	    content: '\f38a'
	}

	.zmdi-hdr:before {
	    content: '\f38b'
	}

	.zmdi-iridescent:before {
	    content: '\f38c'
	}

	.zmdi-leak-off:before {
	    content: '\f38d'
	}

	.zmdi-leak:before {
	    content: '\f38e'
	}

	.zmdi-looks:before {
	    content: '\f38f'
	}

	.zmdi-loupe:before {
	    content: '\f390'
	}

	.zmdi-panorama-horizontal:before {
	    content: '\f391'
	}

	.zmdi-panorama-vertical:before {
	    content: '\f392'
	}

	.zmdi-panorama-wide-angle:before {
	    content: '\f393'
	}

	.zmdi-photo-size-select-large:before {
	    content: '\f394'
	}

	.zmdi-photo-size-select-small:before {
	    content: '\f395'
	}

	.zmdi-picture-in-picture:before {
	    content: '\f396'
	}

	.zmdi-slideshow:before {
	    content: '\f397'
	}

	.zmdi-texture:before {
	    content: '\f398'
	}

	.zmdi-tonality:before {
	    content: '\f399'
	}

	.zmdi-vignette:before {
	    content: '\f39a'
	}

	.zmdi-wb-auto:before {
	    content: '\f39b'
	}

	.zmdi-eject-alt:before {
	    content: '\f39c'
	}

	.zmdi-eject:before {
	    content: '\f39d'
	}

	.zmdi-equalizer:before {
	    content: '\f39e'
	}

	.zmdi-fast-forward:before {
	    content: '\f39f'
	}

	.zmdi-fast-rewind:before {
	    content: '\f3a0'
	}

	.zmdi-forward-10:before {
	    content: '\f3a1'
	}

	.zmdi-forward-30:before {
	    content: '\f3a2'
	}

	.zmdi-forward-5:before {
	    content: '\f3a3'
	}

	.zmdi-hearing:before {
	    content: '\f3a4'
	}

	.zmdi-pause-circle-outline:before {
	    content: '\f3a5'
	}

	.zmdi-pause-circle:before {
	    content: '\f3a6'
	}

	.zmdi-pause:before {
	    content: '\f3a7'
	}

	.zmdi-play-circle-outline:before {
	    content: '\f3a8'
	}

	.zmdi-play-circle:before {
	    content: '\f3a9'
	}

	.zmdi-play:before {
	    content: '\f3aa'
	}

	.zmdi-playlist-audio:before {
	    content: '\f3ab'
	}

	.zmdi-playlist-plus:before {
	    content: '\f3ac'
	}

	.zmdi-repeat-one:before {
	    content: '\f3ad'
	}

	.zmdi-repeat:before {
	    content: '\f3ae'
	}

	.zmdi-replay-10:before {
	    content: '\f3af'
	}

	.zmdi-replay-30:before {
	    content: '\f3b0'
	}

	.zmdi-replay-5:before {
	    content: '\f3b1'
	}

	.zmdi-replay:before {
	    content: '\f3b2'
	}

	.zmdi-shuffle:before {
	    content: '\f3b3'
	}

	.zmdi-skip-next:before {
	    content: '\f3b4'
	}

	.zmdi-skip-previous:before {
	    content: '\f3b5'
	}

	.zmdi-stop:before {
	    content: '\f3b6'
	}

	.zmdi-surround-sound:before {
	    content: '\f3b7'
	}

	.zmdi-tune:before {
	    content: '\f3b8'
	}

	.zmdi-volume-down:before {
	    content: '\f3b9'
	}

	.zmdi-volume-mute:before {
	    content: '\f3ba'
	}

	.zmdi-volume-off:before {
	    content: '\f3bb'
	}

	.zmdi-volume-up:before {
	    content: '\f3bc'
	}

	.zmdi-n-1-square:before {
	    content: '\f3bd'
	}

	.zmdi-n-2-square:before {
	    content: '\f3be'
	}

	.zmdi-n-3-square:before {
	    content: '\f3bf'
	}

	.zmdi-n-4-square:before {
	    content: '\f3c0'
	}

	.zmdi-n-5-square:before {
	    content: '\f3c1'
	}

	.zmdi-n-6-square:before {
	    content: '\f3c2'
	}

	.zmdi-neg-1:before {
	    content: '\f3c3'
	}

	.zmdi-neg-2:before {
	    content: '\f3c4'
	}

	.zmdi-plus-1:before {
	    content: '\f3c5'
	}

	.zmdi-plus-2:before {
	    content: '\f3c6'
	}

	.zmdi-sec-10:before {
	    content: '\f3c7'
	}

	.zmdi-sec-3:before {
	    content: '\f3c8'
	}

	.zmdi-zero:before {
	    content: '\f3c9'
	}

	.zmdi-airline-seat-flat-angled:before {
	    content: '\f3ca'
	}

	.zmdi-airline-seat-flat:before {
	    content: '\f3cb'
	}

	.zmdi-airline-seat-individual-suite:before {
	    content: '\f3cc'
	}

	.zmdi-airline-seat-legroom-extra:before {
	    content: '\f3cd'
	}

	.zmdi-airline-seat-legroom-normal:before {
	    content: '\f3ce'
	}

	.zmdi-airline-seat-legroom-reduced:before {
	    content: '\f3cf'
	}

	.zmdi-airline-seat-recline-extra:before {
	    content: '\f3d0'
	}

	.zmdi-airline-seat-recline-normal:before {
	    content: '\f3d1'
	}

	.zmdi-airplay:before {
	    content: '\f3d2'
	}

	.zmdi-closed-caption:before {
	    content: '\f3d3'
	}

	.zmdi-confirmation-number:before {
	    content: '\f3d4'
	}

	.zmdi-developer-board:before {
	    content: '\f3d5'
	}

	.zmdi-disc-full:before {
	    content: '\f3d6'
	}

	.zmdi-explicit:before {
	    content: '\f3d7'
	}

	.zmdi-flight-land:before {
	    content: '\f3d8'
	}

	.zmdi-flight-takeoff:before {
	    content: '\f3d9'
	}

	.zmdi-flip-to-back:before {
	    content: '\f3da'
	}

	.zmdi-flip-to-front:before {
	    content: '\f3db'
	}

	.zmdi-group-work:before {
	    content: '\f3dc'
	}

	.zmdi-hd:before {
	    content: '\f3dd'
	}

	.zmdi-hq:before {
	    content: '\f3de'
	}

	.zmdi-markunread-mailbox:before {
	    content: '\f3df'
	}

	.zmdi-memory:before {
	    content: '\f3e0'
	}

	.zmdi-nfc:before {
	    content: '\f3e1'
	}

	.zmdi-play-for-work:before {
	    content: '\f3e2'
	}

	.zmdi-power-input:before {
	    content: '\f3e3'
	}

	.zmdi-present-to-all:before {
	    content: '\f3e4'
	}

	.zmdi-satellite:before {
	    content: '\f3e5'
	}

	.zmdi-tap-and-play:before {
	    content: '\f3e6'
	}

	.zmdi-vibration:before {
	    content: '\f3e7'
	}

	.zmdi-voicemail:before {
	    content: '\f3e8'
	}

	.zmdi-group:before {
	    content: '\f3e9'
	}

	.zmdi-rss:before {
	    content: '\f3ea'
	}

	.zmdi-shape:before {
	    content: '\f3eb'
	}

	.zmdi-spinner:before {
	    content: '\f3ec'
	}

	.zmdi-ungroup:before {
	    content: '\f3ed'
	}

	.zmdi-500px:before {
	    content: '\f3ee'
	}

	.zmdi-8tracks:before {
	    content: '\f3ef'
	}

	.zmdi-amazon:before {
	    content: '\f3f0'
	}

	.zmdi-blogger:before {
	    content: '\f3f1'
	}

	.zmdi-delicious:before {
	    content: '\f3f2'
	}

	.zmdi-disqus:before {
	    content: '\f3f3'
	}

	.zmdi-flattr:before {
	    content: '\f3f4'
	}

	.zmdi-flickr:before {
	    content: '\f3f5'
	}

	.zmdi-github-alt:before {
	    content: '\f3f6'
	}

	.zmdi-google-old:before {
	    content: '\f3f7'
	}

	.zmdi-linkedin:before {
	    content: '\f3f8'
	}

	.zmdi-odnoklassniki:before {
	    content: '\f3f9'
	}

	.zmdi-outlook:before {
	    content: '\f3fa'
	}

	.zmdi-paypal-alt:before {
	    content: '\f3fb'
	}

	.zmdi-pinterest:before {
	    content: '\f3fc'
	}

	.zmdi-playstation:before {
	    content: '\f3fd'
	}

	.zmdi-reddit:before {
	    content: '\f3fe'
	}

	.zmdi-skype:before {
	    content: '\f3ff'
	}

	.zmdi-slideshare:before {
	    content: '\f400'
	}

	.zmdi-soundcloud:before {
	    content: '\f401'
	}

	.zmdi-tumblr:before {
	    content: '\f402'
	}

	.zmdi-twitch:before {
	    content: '\f403'
	}

	.zmdi-vimeo:before {
	    content: '\f404'
	}

	.zmdi-whatsapp:before {
	    content: '\f405'
	}

	.zmdi-xbox:before {
	    content: '\f406'
	}

	.zmdi-yahoo:before {
	    content: '\f407'
	}

	.zmdi-youtube-play:before {
	    content: '\f408'
	}

	.zmdi-youtube:before {
	    content: '\f409'
	}

	.zmdi-import-export:before {
	    content: '\f30c'
	}

	.zmdi-swap-vertical-:before {
	    content: '\f30c'
	}

	.zmdi-airplanemode-inactive:before {
	    content: '\f102'
	}

	.zmdi-airplanemode-active:before {
	    content: '\f103'
	}

	.zmdi-rate-review:before {
	    content: '\f103'
	}

	.zmdi-comment-sign:before {
	    content: '\f25a'
	}

	.zmdi-network-warning:before {
	    content: '\f2ad'
	}

	.zmdi-shopping-cart-add:before {
	    content: '\f1ca'
	}

	.zmdi-file-add:before {
	    content: '\f221'
	}

	.zmdi-network-wifi-scan:before {
	    content: '\f2e4'
	}

	.zmdi-collection-add:before {
	    content: '\f14e'
	}

	.zmdi-format-playlist-add:before {
	    content: '\f3ac'
	}

	.zmdi-format-queue-music:before {
	    content: '\f3ab'
	}

	.zmdi-plus-box:before {
	    content: '\f277'
	}

	.zmdi-tag-backspace:before {
	    content: '\f1d9'
	}

	.zmdi-alarm-add:before {
	    content: '\f32b'
	}

	.zmdi-battery-charging:before {
	    content: '\f114'
	}

	.zmdi-daydream-setting:before {
	    content: '\f217'
	}

	.zmdi-more-horiz:before {
	    content: '\f19c'
	}

	.zmdi-book-photo:before {
	    content: '\f11b'
	}

	.zmdi-incandescent:before {
	    content: '\f189'
	}

	.zmdi-wb-iridescent:before {
	    content: '\f38c'
	}

	.zmdi-calendar-remove:before {
	    content: '\f330'
	}

	.zmdi-refresh-sync-disabled:before {
	    content: '\f1b7'
	}

	.zmdi-refresh-sync-problem:before {
	    content: '\f1b6'
	}

	.zmdi-crop-original:before {
	    content: '\f17e'
	}

	.zmdi-power-off:before {
	    content: '\f1af'
	}

	.zmdi-power-off-setting:before {
	    content: '\f1ae'
	}

	.zmdi-leak-remove:before {
	    content: '\f38d'
	}

	.zmdi-star-border:before {
	    content: '\f27c'
	}

	.zmdi-brightness-low:before {
	    content: '\f36d'
	}

	.zmdi-brightness-medium:before {
	    content: '\f36e'
	}

	.zmdi-brightness-high:before {
	    content: '\f36f'
	}

	.zmdi-smartphone-portrait:before {
	    content: '\f2d4'
	}

	.zmdi-live-tv:before {
	    content: '\f2d9'
	}

	.zmdi-format-textdirection-l-to-r:before {
	    content: '\f249'
	}

	.zmdi-format-textdirection-r-to-l:before {
	    content: '\f24a'
	}

	.zmdi-arrow-back:before {
	    content: '\f2ea'
	}

	.zmdi-arrow-forward:before {
	    content: '\f2ee'
	}

	.zmdi-arrow-in:before {
	    content: '\f2e9'
	}

	.zmdi-arrow-out:before {
	    content: '\f2ed'
	}

	.zmdi-rotate-90-degrees-ccw:before {
	    content: '\f304'
	}

	.zmdi-adb:before {
	    content: '\f33a'
	}

	.zmdi-network-wifi:before {
	    content: '\f2e8'
	}

	.zmdi-network-wifi-alt:before {
	    content: '\f2e3'
	}

	.zmdi-network-wifi-lock:before {
	    content: '\f2e5'
	}

	.zmdi-network-wifi-off:before {
	    content: '\f2e6'
	}

	.zmdi-network-wifi-outline:before {
	    content: '\f2e7'
	}

	.zmdi-network-wifi-info:before {
	    content: '\f2e4'
	}

	.zmdi-layers-clear:before {
	    content: '\f18b'
	}

	.zmdi-colorize:before {
	    content: '\f15d'
	}

	.zmdi-format-paint:before {
	    content: '\f1ba'
	}

	.zmdi-format-quote:before {
	    content: '\f1b2'
	}

	.zmdi-camera-monochrome-photos:before {
	    content: '\f285'
	}

	.zmdi-sort-by-alpha:before {
	    content: '\f1cf'
	}

	.zmdi-folder-shared:before {
	    content: '\f225'
	}

	.zmdi-folder-special:before {
	    content: '\f226'
	}

	.zmdi-comment-dots:before {
	    content: '\f260'
	}

	.zmdi-reorder:before {
	    content: '\f31e'
	}

	.zmdi-dehaze:before {
	    content: '\f197'
	}

	.zmdi-sort:before {
	    content: '\f1ce'
	}

	.zmdi-pages:before {
	    content: '\f34a'
	}

	.zmdi-stack-overflow:before {
	    content: '\f35c'
	}

	.zmdi-calendar-account:before {
	    content: '\f204'
	}

	.zmdi-paste:before {
	    content: '\f109'
	}

	.zmdi-cut:before {
	    content: '\f1bc'
	}

	.zmdi-save:before {
	    content: '\f297'
	}

	.zmdi-smartphone-code:before {
	    content: '\f139'
	}

	.zmdi-directions-bike:before {
	    content: '\f117'
	}

	.zmdi-directions-boat:before {
	    content: '\f11a'
	}

	.zmdi-directions-bus:before {
	    content: '\f121'
	}

	.zmdi-directions-car:before {
	    content: '\f125'
	}

	.zmdi-directions-railway:before {
	    content: '\f1b3'
	}

	.zmdi-directions-run:before {
	    content: '\f215'
	}

	.zmdi-directions-subway:before {
	    content: '\f1d5'
	}

	.zmdi-directions-walk:before {
	    content: '\f216'
	}

	.zmdi-local-hotel:before {
	    content: '\f178'
	}

	.zmdi-local-activity:before {
	    content: '\f1df'
	}

	.zmdi-local-play:before {
	    content: '\f1df'
	}

	.zmdi-local-airport:before {
	    content: '\f103'
	}

	.zmdi-local-atm:before {
	    content: '\f198'
	}

	.zmdi-local-bar:before {
	    content: '\f137'
	}

	.zmdi-local-cafe:before {
	    content: '\f13b'
	}

	.zmdi-local-car-wash:before {
	    content: '\f124'
	}

	.zmdi-local-convenience-store:before {
	    content: '\f1d3'
	}

	.zmdi-local-dining:before {
	    content: '\f153'
	}

	.zmdi-local-drink:before {
	    content: '\f157'
	}

	.zmdi-local-florist:before {
	    content: '\f168'
	}

	.zmdi-local-gas-station:before {
	    content: '\f16f'
	}

	.zmdi-local-grocery-store:before {
	    content: '\f1cb'
	}

	.zmdi-local-hospital:before {
	    content: '\f177'
	}

	.zmdi-local-laundry-service:before {
	    content: '\f1e9'
	}

	.zmdi-local-library:before {
	    content: '\f18d'
	}

	.zmdi-local-mall:before {
	    content: '\f195'
	}

	.zmdi-local-movies:before {
	    content: '\f19d'
	}

	.zmdi-local-offer:before {
	    content: '\f187'
	}

	.zmdi-local-parking:before {
	    content: '\f1a5'
	}

	.zmdi-local-parking:before {
	    content: '\f1a5'
	}

	.zmdi-local-pharmacy:before {
	    content: '\f176'
	}

	.zmdi-local-phone:before {
	    content: '\f2be'
	}

	.zmdi-local-pizza:before {
	    content: '\f1ac'
	}

	.zmdi-local-post-office:before {
	    content: '\f15a'
	}

	.zmdi-local-printshop:before {
	    content: '\f1b0'
	}

	.zmdi-local-see:before {
	    content: '\f28c'
	}

	.zmdi-local-shipping:before {
	    content: '\f1e6'
	}

	.zmdi-local-store:before {
	    content: '\f1d4'
	}

	.zmdi-local-taxi:before {
	    content: '\f123'
	}

	.zmdi-local-wc:before {
	    content: '\f211'
	}

	.zmdi-my-location:before {
	    content: '\f299'
	}

	.zmdi-directions:before {
	    content: '\f1e7'
	}

	</style><style>@font-face {
	    font-family: flexslider-icon;
	    src: url(/layout/fonts/flexslider-icon.eot);
	    src: url(/layout/fonts/flexslider-icon.eot?#iefix) format('embedded-opentype'), url(/layout/fonts/flexslider-icon.woff) format('woff'), url(/layout/fonts/flexslider-icon.ttf) format('truetype'), url(/layout/fonts/flexslider-icon.svg#flexslider-icon) format('svg');
	    font-weight: 400;
	    font-style: normal
	}

	.flex-container a:hover,
	.flex-slider a:hover {
	    outline: none
	}

	.slides,
	.slides>li,
	.flex-control-nav,
	.flex-direction-nav {
	    margin: 0;
	    padding: 0;
	    list-style: none
	}

	.flex-pauseplay span {
	    text-transform: capitalize
	}

	.flexslider {
	    margin: 0;
	    padding: 0
	}

	.flexslider .slides>li {
	    display: none;
	    -webkit-backface-visibility: hidden
	}

	.flexslider .slides img {
	    width: 100%;
	    display: block
	}

	.flexslider .slides:after {
	    content: "\0020";
	    display: block;
	    clear: both;
	    visibility: hidden;
	    line-height: 0;
	    height: 0
	}

	html[xmlns] .flexslider .slides {
	    display: block
	}

	* html .flexslider .slides {
	    height: 1%
	}

	.no-js .flexslider .slides>li:first-child {
	    display: block
	}

	.flexslider {
	    margin: 0 0 60px;
	    background: #fff;
	    border: 4px solid #fff;
	    position: relative;
	    zoom: 1;
	    -webkit-border-radius: 4px;
	    -moz-border-radius: 4px;
	    border-radius: 4px;
	    -webkit-box-shadow: ''0 1px 4px rgba(0, 0, 0, .2);
	    -moz-box-shadow: ''0 1px 4px rgba(0, 0, 0, .2);
	    -o-box-shadow: ''0 1px 4px rgba(0, 0, 0, .2);
	    box-shadow: ''0 1px 4px rgba(0, 0, 0, .2)
	}

	.flexslider .slides {
	    zoom: 1
	}

	.flexslider .slides img {
	    height: auto;
	    -moz-user-select: none
	}

	.flex-viewport {
	    max-height: 2000px;
	    -webkit-transition: all 1s ease;
	    -moz-transition: all 1s ease;
	    -ms-transition: all 1s ease;
	    -o-transition: all 1s ease;
	    transition: all 1s ease
	}

	.loading .flex-viewport {
	    max-height: 300px
	}

	@-moz-document url-prefix() {
	    .loading .flex-viewport {
	        max-height: none
	    }
	}

	.carousel li {
	    margin-right: 5px
	}

	.flex-direction-nav {
	    *height: 0
	}

	.flex-direction-nav a {
	    text-decoration: none;
	    display: block;
	    width: 40px;
	    height: 60px;
	    margin: -20px 0 0;
	    position: absolute;
	    top: 50%;
	    z-index: 10;
	    overflow: hidden;
	    opacity: 0;
	    cursor: pointer;
	    color: rgba(0, 0, 0, .8);
	    text-shadow: 1px 1px 0 rgba(255, 255, 255, .3);
	    -webkit-transition: all .3s ease-in-out;
	    -moz-transition: all .3s ease-in-out;
	    -ms-transition: all .3s ease-in-out;
	    -o-transition: all .3s ease-in-out;
	    transition: all .3s ease-in-out
	}

	.flex-direction-nav a:before {
	    font-family: flexslider-icon;
	    font-size: 40px;
	    display: inline-block;
	    content: '\f001';
	    color: rgba(0, 0, 0, .8);
	    text-shadow: 1px 1px 0 rgba(255, 255, 255, .3)
	}

	.flex-direction-nav a.flex-next:before {
	    content: '\f002'
	}

	.flex-direction-nav .flex-prev {
	    left: -50px
	}

	.flex-direction-nav .flex-next {
	    right: -50px;
	    text-align: right
	}

	.flexslider:hover .flex-direction-nav .flex-prev {
	    opacity: .7;
	    left: 10px
	}

	.flexslider:hover .flex-direction-nav .flex-prev:hover {
	    opacity: 1
	}

	.flexslider:hover .flex-direction-nav .flex-next {
	    opacity: .7;
	    right: 10px
	}

	.flexslider:hover .flex-direction-nav .flex-next:hover {
	    opacity: 1
	}

	.flex-direction-nav .flex-disabled {
	    opacity: 0 !important;
	    filter: alpha(opacity=0);
	    cursor: default;
	    z-index: -1
	}

	.flex-pauseplay a {
	    display: block;
	    width: 20px;
	    height: 20px;
	    position: absolute;
	    bottom: 5px;
	    left: 10px;
	    opacity: .8;
	    z-index: 10;
	    overflow: hidden;
	    cursor: pointer;
	    color: #000
	}

	.flex-pauseplay a:before {
	    font-family: flexslider-icon;
	    font-size: 20px;
	    display: inline-block;
	    content: '\f004'
	}

	.flex-pauseplay a:hover {
	    opacity: 1
	}

	.flex-pauseplay a.flex-play:before {
	    content: '\f003'
	}

	.flex-control-nav {
	    width: 100%;
	    position: absolute;
	    bottom: -40px;
	    text-align: center
	}

	.flex-control-nav li {
	    margin: 0 6px;
	    display: inline-block;
	    zoom: 1;
	    *display: inline
	}

	.flex-control-paging li a {
	    width: 11px;
	    height: 11px;
	    display: block;
	    background: #666;
	    background: rgba(0, 0, 0, .5);
	    cursor: pointer;
	    text-indent: -9999px;
	    -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, .3);
	    -moz-box-shadow: inset 0 0 3px rgba(0, 0, 0, .3);
	    -o-box-shadow: inset 0 0 3px rgba(0, 0, 0, .3);
	    box-shadow: inset 0 0 3px rgba(0, 0, 0, .3);
	    -webkit-border-radius: 20px;
	    -moz-border-radius: 20px;
	    border-radius: 20px
	}

	.flex-control-paging li a:hover {
	    background: #333;
	    background: rgba(0, 0, 0, .7)
	}

	.flex-control-paging li a.flex-active {
	    background: #000;
	    background: rgba(0, 0, 0, .9);
	    cursor: default
	}

	.flex-control-thumbs {
	    margin: 5px 0 0;
	    position: static;
	    overflow: hidden
	}

	.flex-control-thumbs li {
	    width: 25%;
	    float: left;
	    margin: 0
	}

	.flex-control-thumbs img {
	    width: 100%;
	    height: auto;
	    display: block;
	    opacity: .7;
	    cursor: pointer;
	    -moz-user-select: none;
	    -webkit-transition: all 1s ease;
	    -moz-transition: all 1s ease;
	    -ms-transition: all 1s ease;
	    -o-transition: all 1s ease;
	    transition: all 1s ease
	}

	.flex-control-thumbs img:hover {
	    opacity: 1
	}

	.flex-control-thumbs .flex-active {
	    opacity: 1;
	    cursor: default
	}

	@media screen and (max-width:860px) {
	    .flex-direction-nav .flex-prev {
	        opacity: 1;
	        left: 10px
	    }

	    .flex-direction-nav .flex-next {
	        opacity: 1;
	        right: 10px
	    }

	}

	</style>
	<style>
	  .lds-dual-ring {
	    display: inline-block;
	    width: 80px;
	    height: 80px;
	}

	.lds-dual-ring:after {
	    content: " ";
	    display: block;
	    width: 64px;
	    height: 64px;
	    margin: 8px;
	    border-radius: 50%;
	    border: 6px solid #fff;
	    border-color: #fff transparent #fff transparent;
	    animation: lds-dual-ring 1.2s linear infinite;
	}

	@keyframes lds-dual-ring {
	    0% {
	        transform: rotate(0deg);
	    }

	    100% {
	        transform: rotate(360deg);
	    }
	}

  	</style>
  
<script type="text/javascript">
             function ajaxinfo() {
                $.ajax({
                    type: 'GET',
                    url: 'ajaxinfo.html',
                    timeout: 10000,

                    success: function(data) {
                        if (data != '01') {
                            var data = JSON.parse(data);
                            for (var prop in data) {
                                $("#" + prop).html(data[prop]).show();
                            }
                        } else {
                            window.location = "logout.html";
                        }
                    }
                });

            }
            setInterval(function() {
                ajaxinfo()
            }, 3000);

            ajaxinfo();

$(document).keydown(function(event){
    if(event.which=="17")
        cntrlIsPressed = true;
});

$(document).keyup(function(){
    cntrlIsPressed = false;
});

var cntrlIsPressed = false;


function pageDiv(n,t,u,x){
  if(cntrlIsPressed){
    window.open(u, '_blank');
    return false;
  }
        var obj = { Title: t, Url: u };
        if ( ("/"+obj.Url) != location.pathname) {
        	if (x != 1) {history.pushState(obj, obj.Title, obj.Url);}
        	else{history.replaceState(obj, obj.Title, obj.Url);}

    	}
      document.title = obj.Title;
    $("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show();
    $.ajax({
    type:       'GET',
    url:        'divPage'+n+'.html',
    success:    function(data)
    {
        $("#mainDiv").html(data).show();
        newTableObject = document.getElementById('table');
        sorttable.makeSortable(newTableObject);
        $(".sticky-header").floatThead({top:60});
        if(x==0){ajaxinfo();}
      }});
    if (typeof stopCheckBTC === 'function') { 
    var a = stopCheckBTC();
     }

}

$(window).on("popstate", function(e) {
        location.replace(document.location);

});


function setTooltip(btn, message) {
  console.log("hide-1");
  $(btn).tooltip('hide')
    .attr('data-original-title', message)
    .tooltip('show');
     console.log("show");
}

function hideTooltip(btn) {
  setTimeout(function() {$(btn).tooltip('hide'); console.log("hide-2");}, 1000);
}
</script>
		<style>
            .navbar {
                background-color: #001f3f;
            }
        </style>
</head>
<body style="padding-top: 70px; padding-bottom: 70px;">

<nav class="navbar navbar-default navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    <div class="navbar-brand" onClick="location.href='index.html'" onMouseOver="this.style.cursor='pointer'"><b><span class="glyphicon glyphicon-fire"></span> Jerux SHOP <small><span class="glyphicon glyphicon-refresh"></span></small></b></div></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul class="nav navbar-nav">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hosts <span class="glyphicon glyphicon-chevron-down" id="alhosts"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="rdp.html" onclick="pageDiv(1,'RDP - JeruxShop','rdp.html',0); return false;">RDPs <span class="label label-primary label-as-badge" id="rdp"></span></a></li>
            <li><a href="cPanel.html" onclick="pageDiv(2,'cPanel - JeruxShop','cPanel.html',0); return false;">cPanels <span class="label label-primary label-as-badge" id="cpanel"></span></a></li>
            <li><a href="shell.html" onclick="pageDiv(3,'Shell - JeruxShop','shell.html',0); return false;">Shells <span class="label label-primary label-as-badge" id="shell"></span></a></li>  
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Send <span class="glyphicon glyphicon-chevron-down" id="mail"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="mailer.html" onclick="pageDiv(4,'PHP Mailer - JeruxShop','mailer.html',0); return false;">Mailers <span class="label label-primary label-as-badge" id="mailer"></span></a></li>
            <li><a href="smtp.html" onclick="pageDiv(5,'SMTP - JeruxShop','smtp.html',0); return false;">SMTPs <span class="label label-primary label-as-badge" id="smtp"></span></a></li>  
          </ul>
        </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Leads <span class="glyphicon glyphicon-chevron-down" id="all_leads"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="leads.html" onclick="pageDiv(6,'Leads - JeruxShop','leads.html',0); return false;">Leads <span class="label label-primary label-as-badge" id="leads"></span></a></li>
          </ul>
        </li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accounts <span class="glyphicon glyphicon-chevron-down" id="accounts"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="premium.html" onclick="pageDiv(7,'Premium/Dating/Shop - JeruxShop','premium.html',0); return false;">Premium/Dating/Shop <span class="label label-primary label-as-badge" id="premium"></span></a></li>
            <li><a href="banks.html" onclick="pageDiv(8,'Banks - JeruxShop','banks.html',0); return false;">Banks <span class="label label-primary label-as-badge" id="banks"></span></a></li>  
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Others <span class="glyphicon glyphicon-chevron-down" id="accounts"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="scampage.html" onclick="pageDiv(9,'Scampages - JeruxShop','scampage.html',0); return false;">Scampage <span class="label label-primary label-as-badge" id="scams"></span></a></li>
            <li><a href="tutorial.html" onclick="pageDiv(10,'Tutorials - JeruxShop','tutorial.html',0); return false;">Tutorial <span class="label label-primary label-as-badge" id="tutorials"></span></a></li>  
          </ul>
        </li>
                      
      </ul>
      <ul class="nav navbar-nav navbar-right">
                        <?php
$uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$q = mysqli_query($dbcon, "SELECT resseller FROM users WHERE username='$uid'") or die(mysqli_error());
$r         = mysqli_fetch_assoc($q);
$reselerif = $r['resseller'];
if ($reselerif == "1") {
    $uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
    $q = mysqli_query($dbcon, "SELECT soldb FROM resseller WHERE username='$uid'") or die(mysqli_error());
    $r = mysqli_fetch_assoc($q);

    echo '<li><a href="https://jerux.to/seller/index.html"><span class="badge" title="Seller Panel"><span class="glyphicon glyphicon-cloud"></span><span id="seller"></span></span></a></li>';
} else {
} ?>      
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tickets <span id="alltickets">
<?php
$sze112  = mysqli_query($dbcon, "SELECT * FROM ticket WHERE uid='$uid' and seen='1'");
$r844941 = mysqli_num_rows($sze112);
if ($r844941 == "1") {
    echo '<span class="label label-danger">1</span>';
}
?>
</span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="tickets.html" onclick="pageDiv(11,'Tickets - JeruxShop','tickets.html',0); return false;">Tickets <span class="label label-info"><span id="tickets"></span></span>	<?php
$s1 = mysqli_query($dbcon, "SELECT * FROM ticket WHERE uid='$uid' and seen='1'");
$r1 = mysqli_num_rows($s1);
if ($r1 == "1") {
    echo '<span class="label label-success"> 1 New</span>';
}
?></span></a></li>
            <li><a href="reports.html" onclick="pageDiv(12,'Reports - JeruxShop','reports.html',0); return false;">Reports <span class="label label-info"><span id="reports"></span></span> <?php
$s1 = mysqli_query($dbcon, "SELECT * FROM reports WHERE uid='$uid' and seen='1'");
$r1 = mysqli_num_rows($s1);
if ($r1 == "1") {
    echo '<span class="label label-success"> 1 New</span>';
}
?></span> </a></li>

           </ul>
        </li>

        <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - JeruxShop','addBalance.html',0); return false;"><span class="badge"><b><span id="balance"></span></b> <span class="glyphicon glyphicon-plus"></span><span> </a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account  <span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="setting.html" onclick="pageDiv(14,'Setting - JeruxShop','setting.html',0); return false;">Setting <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
            <li><a href="orders.html" onclick="pageDiv(15,'Orders - JeruxShop','orders.html',0); return false;">My Orders <span class="glyphicon glyphicon-shopping-cart pull-right"></span></a></li>
            <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - JeruxShop','addBalance.html',0); return false;">Add Balance <span class="glyphicon glyphicon-usd pull-right"></span></a></li>
            
            <li class="divider"></li>
            <li><a href="logout.html" >Logout <span class="glyphicon glyphicon-off pull-right"></span></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<div id="mainDiv">


</div>
</body>
</html>

