<!DOCTYPE html>
<html lang="en">
<head>
    @include('website.layouts.head')
    <style>
        .cert {
            border: 3px solid #4a9783;
            border-right: 3px solid #f9bd6b;
            border-left: 4px solid #f8bd6b;
            width: 700px;
            font-family: arial;
            color: #383737;
            margin: auto;
        }

        .crt_title {
            margin-top: 30px;
            margin-bottom: 10px;
            font-family: "Satisfy", cursive;
            font-size: 35px;
            letter-spacing: 1px;
            color: #4a9787;
        }

        .crt_logo img {
            width: 167px;
            height: 167px;
            margin: auto;
        }

        .colorGreen {
            color: #f6b06d;
        }

        .crt_user {
            display: inline-block;
            width: 80%;
            padding: 5px 25px;
            margin-bottom: 0px;
            padding-bottom: 0px;
            font-family: "Satisfy", cursive;
            font-size: 40px;
            border-bottom: 1px dashed #cecece;
        }

        .afterName {
            font-weight: 100;
            color: #000000;
            line-height: 37px !important;
            text-align: left !important;
            font-size: 17px;
            padding: 23px !important;
            /*font-family: "Satisfy", cursive;*/
        }

        .end {
            font-weight: 100;
            color: #000000;
            line-height: 37px !important;
            text-align: left !important;
            font-size: 17px;
            padding: 23px !important;
        }

        .colorGrey {
            color: grey;
        }

        .certSign {
            width: 200px;
        }

        p {
            font-size: 15px;
            line-height: 61px;
            font-weight: 300;
            color: #000000;
        }

        @media (max-width: 700px) {
            .cert {
                width: 100%;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
</head>

<body style="padding: 23px;">

<table class="cert">
    <tr>
        <td align="center" class="crt_logo">
            <img style="height: 126px;width: 141px;" src="{{optional($certification->oppo->volEntity)->logo_path}}"
                 alt="logo">
        </td>
        <td align="center" class="crt_logo"><img src="{{asset('website/logo.png')}}" alt="logo"></td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <h1 class="crt_title">Volunteering Work Certificate</h1>
                <p>The Community Service at {{optional($certification->oppo->volEntity)->VOL_ENTITY_NAME}}  would like to express its thanks and appreciation to</p>
                <h1 class="colorGreen crt_user">{{optional($certification->volunteer)->full_name}}</h1>
                <p class="afterName">ID Number ({{optional($certification->volunteer)->VOL_NATIONAL_ID}}) School ({{optional($certification->volunteer)->VOL_SCHOOL_NAME}}) Role (Volunteer) In
                    recognition of this outstanding volunteer work and effort in the volunteer opportunity
                    ({{optional($certification->oppo)->OPP_NAME}}) in {{optional($certification->oppo)->OPP_CITY}}
                    from {{optional($certification->oppo)->OPP_START_DATE}}  to {{optional($certification->oppo)->OPP_FINISH_DATE}}  with a rate of ({{optional($certification->oppo)->OPP_TOTAL_HOUR}}) volunteering hours.
                    Wishing further success in the future </p>


        </td>
    </tr>
    <tr>
        <td>
            <p class="end">{{optional($certification->oppo->volEntity)->VOL_ENTITY_NAME}}</p>
        </td>
        <td>
            <p style="text-align: right !important;" class="end">Helping Hands team </p>
        </td>
    </tr>
    <tr>
        <td align="center">
            <img src="https://camo.githubusercontent.com/805e05b94844e39d7edd518f492c8599c71835b3/687474703a2f2f692e696d6775722e636f6d2f646e5873344e442e706e67"
                 class="certSign" alt="sign">
        </td>
        <td>
            <p style="font-size:12px !important; margin-bottom:-26px;">Certification ID: {{$certification->CER_ID}}</p>
        </td>
    </tr>
</table>


@include('website.layouts.foot')
<script>
    @if(!isset($noprint))
        window.onload = function () {
        window.print();
    }
    @endif
</script>
</body>
</html>
