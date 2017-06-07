<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico">

    <title><?php $this->pageTitle(); ?> | <?php $this->siteName(); ?></title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">

    <style type="text/css">
        * { box-sizing: border-box; }

        // fonts
        @font-face {
            font-family: 'CA Sans';
            src: url("assets/fonts/ca-sans/CSSansWebRegular/ca_sans_web-regular.eot");
            src: url("assets/fonts/ca-sans/CSSansWebRegular/ca_sans_web-regular.eot?#iefix") format("embedded-opentype"),
            url("assets/fonts/ca-sans/CSSansWebRegular/ca_sans_web-regular.svg#CASans-Regular") format("svg"),
            url("assets/fonts/ca-sans/CSSansWebRegular/ca_sans_web-regular.woff") format("woff");
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: 'CA Sans';
            src: url("assets/fonts/ca-sans/CSSansWebBold/ca_sans_web-bold.eot");
            src: url("assets/fonts/ca-sans/CSSansWebBold/ca_sans_web-bold.eot?#iefix") format("embedded-opentype"),
            url("assets/fonts/ca-sans/CSSansWebBold/ca_sans_web-bold.svg#CASans-Regular") format("svg"),
            url("assets/fonts/ca-sans/CSSansWebBold/ca_sans_web-bold.woff") format("woff");
            font-weight: 700;
            font-style: normal
        }

        html, button, input, select, textarea,
        .pure-g [class *= "pure-u"] {
            /* Set your content font stack here: */
            /*font-family: Georgia, Times, "Times New Roman", serif;*/
            font-family: "CA Sans";
        }

        html, body {
            display: block;
            height: 100%;
            min-height: 100%;
            margin: 0;
        }

        body-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            min-width: 17.5rem;
            display: flex;
            flex-direction: column;
            flex: 1 0 auto;
        }

        header {
            background-color: #e88007;
            position: relative;
            width: 100%;
            color: white;
        }
        header logo { }
        header logo icon {
            display: block;
            background: url(assets/images/logo.png) no-repeat;
            width: 190px;
            height: 170px;
            margin: 0.5em auto;
        }

        header text { text-align: center; }
        header h1 { font-size: 2em; margin-bottom: 0; }
        header h3 { font-size: 1em; margin-top: 0; }

        article {
            color: #444444;
        }
        article content {
            display: block;
            max-width: 1024px;
            /*-webkit-box-direction: normal;*/
        }

        .flex-column {
            flex: 1 1 0%;
            display: flex;
            flex-direction: column;
            align-content: flex-start;
            -webkit-box-direction: normal;
            -webkit-box-flex: 1;
        }

        .center-center {
            align-items: center;
            -webkit-align-items: center;
            align-content: center;
            -webkit-align-content: center;
            -webkit-box-pack: center;
            -webkit-box-align: center;
            -webkit-justify-content: center;
            justify-content: center;
            max-width: 100%;
        }

        .horizontal-center {
            margin: 0 auto !important;
            display: block !important;
        }

        @media screen and (max-width: 48em) {
            article content {
                max-width: 100%;
            }
        }

        @media screen and (min-width: 64em) {
            header logo.pure-u-lg-1-2 {
                width: 190px;
                /*height: 170px;*/
            }
            header text.pure-u-lg-1-2 {
                width: 80%;
            }
            header h1 { font-size: 4em; }
            header h3 { font-size: 1em; }
        }
    </style>
</head>
<body>
    <body-wrapper>
        <header class="pure-g">
            <logo class="pure-u-1 pure-u-lg-1-2"><icon></icon></logo>
            <text class="pure-u-1 pure-u-lg-1-2">
                <h1><?php $this->headerText(); ?></h1>
                <h3><?php $this->subHeaderText(); ?></h3>
            </text>
        </header>

        <article class="flex-column center-center">
            <content class="pure-g"><?php $this->pageContent(); ?></content>
        </article>
    </body-wrapper>
</body>
</html>