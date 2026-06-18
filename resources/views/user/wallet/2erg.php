<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add money</title>
    <style>
        .dflexcenter {
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        .btncontainer {
            margin-top: 20px;
        }

        button {
            background-color: green;
            border: none;
            color: white;
            padding: 10px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 10px;
        }
    </style>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Dosis');

        :root {
            /* generic */
            --gutterSm: 0.4rem;
            --gutterMd: 0.8rem;
            --gutterLg: 1.6rem;
            --gutterXl: 2.4rem;
            --gutterXx: 7.2rem;
            --colorPrimary400: lightgrey;
            --colorPrimary600: lightgray;
            --colorPrimary800: #4527a0;
            --fontFamily: "Dosis", sans-serif;
            --fontSizeSm: 1.2rem;
            --fontSizeMd: 1.6rem;
            --fontSizeLg: 2.1rem;
            --fontSizeXl: 2.8rem;
            --fontSizeXx: 3.6rem;
            --lineHeightSm: 1.1;
            --lineHeightMd: 1.8;
            --transitionDuration: 300ms;
            --transitionTF: cubic-bezier(0.645, 0.045, 0.355, 1);

            /* floated labels */
            --inputPaddingV: var(--gutterMd);
            --inputPaddingH: var(--gutterLg);
            --inputFontSize: var(--fontSizeLg);
            --inputLineHeight: var(--lineHeightMd);
            --labelScaleFactor: 0.8;
            --labelDefaultPosY: 50%;
            --labelTransformedPosY: calc((var(--labelDefaultPosY)) - (var(--inputPaddingV) * var(--labelScaleFactor)) - (var(--inputFontSize) * var(--inputLineHeight)));
            --inputTransitionDuration: var(--transitionDuration);
            --inputTransitionTF: var(--transitionTF);
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            font-size: 10px;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            /* width: 100vw;
            height: 100vh; */
            height: 100vh;
            color: #455A64;
            /* background-color: #7E57C2; */
            font-family: var(--fontFamily);
            font-size: var(--fontSizeMd);
            line-height: var(--lineHeightMd);
            padding: 10px;
        }

        .Wrapper {
            flex: 0 0 80%;
            max-width: 80%;
        }

        .Title {
            margin: 0 0 var(--gutterXx) 0;
            padding: 0;
            color: #fff;
            font-size: var(--fontSizeXx);
            font-weight: 400;
            line-height: var(--lineHeightSm);
            text-align: center;
            text-shadow: -0.1rem 0.1rem 0.2rem var(--colorPrimary800);
        }

        .Input {
            position: relative;
        }

        .Input-text {
            display: block;
            margin: 0;
            padding: var(--inputPaddingV) var(--inputPaddingH);
            color: inherit;
            width: 100%;
            font-family: inherit;
            font-size: var(--inputFontSize);
            font-weight: inherit;
            line-height: var(--inputLineHeight);
            border: none;
            border-radius: 0.4rem;
            transition: box-shadow var(--transitionDuration);
        }

        .Input-text::placeholder {
            color: #B0BEC5;
        }

        .Input-text:focus {
            outline: none;
            box-shadow: 0.2rem 0.8rem 1.6rem var(--colorPrimary600);
        }

        .Input-label {
            display: block;
            position: absolute;
            bottom: 50%;
            left: 1rem;
            color: grey;
            font-family: inherit;
            font-size: var(--inputFontSize);
            font-weight: inherit;
            line-height: var(--inputLineHeight);
            opacity: 0;
            transform:
                translate3d(0, var(--labelDefaultPosY), 0) scale(1);
            transform-origin: 0 0;
            transition:
                opacity var(--inputTransitionDuration) var(--inputTransitionTF),
                transform var(--inputTransitionDuration) var(--inputTransitionTF),
                visibility 0ms var(--inputTransitionDuration) var(--inputTransitionTF),
                z-index 0ms var(--inputTransitionDuration) var(--inputTransitionTF);
        }

        .Input-text:placeholder-shown+.Input-label {
            visibility: hidden;
            z-index: -1;
        }

        .Input-text:not(:placeholder-shown)+.Input-label,
        .Input-text:focus:not(:placeholder-shown)+.Input-label {
            visibility: visible;
            z-index: 1;
            opacity: 1;
            transform:
                translate3d(0, var(--labelTransformedPosY), 0) scale(var(--labelScaleFactor));
            transition:
                transform var(--inputTransitionDuration),
                visibility 0ms,
                z-index 0ms;
        }
    </style>

    <style>
        .containe {
            background-color: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 2px 3px 15px lightgrey;
        }

        .containe form {
            min-width: 280px;
            /* min-height: 200px;   */
        }

        .containe form input {
            min-width: 100%;
        }
    </style>
</head>

<body class="dflexcenter">

    <div class="containe dflexcenter">
        @if(session('amount'))
        <div>
            <form action="{{ route('wallet.add-money') }}" method="POST" class="dflexcenter">
                @csrf

                <div class="headerText" >
                    dor, sit amet consectetur adipisicing elit. Non minus consequatur necessitatibu
                </div>
                <h1>{{ session('amount') }}</h1>


                <div>
                    <center>
                        Address:
                    </center>
                    <b>
                        23454b5h675897654b3nv4
                    </b>
                </div>

                <br>
                <input type="hidden" name="amount" value="{{ session('amount') }}">
                <input type="hidden" name="token" value="{{ session('token') }}">
                <div class="Wrapper">
                    <div class="Input">
                        <input type="text" class="transaction_id  Input-text" name="transaction_id" placeholder="Enter Transaction id">
                        <label for="input" class="Input-label">Transaction ID</label>
                    </div>
                </div>

                <div class="btncontainer">
                    <button class="addMoney">submit</button>
                </div>
            </form>
        </div>
        @else
        <div>
            <form action="{{ route('wallet.get-transaction-token') }}" method="POST" class="dflexcenter" style="padding-top: 20px;">
                @csrf


                <div style="padding-bottom: 20px;">
                    <center>
                        freee text
                    </center>
                    
                </div>



                <div class="Wrapper">
                    <div class="Input">
                        <input type="text" class="transaction_id  Input-text" name="amount" placeholder="Enter Amount">
                        <label for="input" class="Input-label">Amount</label>
                    </div>
                </div>

                <div class="btncontainer">
                    <button class="addMoney">submit</button>
                </div>
            </form>
        </div>
        @endif


    </div>
    @if(session('error'))
    @dump(session('error'))
    @endif


</body>

</html>