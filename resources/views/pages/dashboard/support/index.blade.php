@extends('layouts.app')

@section('content')
    <section>
        <div>
            <p class="fw700 fs18">תמיכה</p>
            <p class="fs14 me-lg-5" style="color : #777">
            פנה לצוות התמיכה שלנו לקבלת עזרה בכל שאלה או בעיה.
            </p>
        </div>

        <div class="d-flex flex-column jcs"
            style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">


            <div style="background-color:#FBFBFB; line-height:21px !important; border:1px solid #C6C6C6; border-radius:10px; padding:16px; gap:8px"
                class="d-flex jcc ais flex-column">

                <p class="fs14 fw700">
                    האם אתה נתקל בבעיה כלשהי?
                </p>
                <p class="fs14">
                    או שאתה יכול ליצור קשר בכתובת
                </p>

<div class="d-lg-flex aic gap-3">
<div class="d-flex aic gap-2">
    @include('components.svgs.mail-icon-svg')
    <a href="#" class="fs14" style="color: #063DD0; text-decoration: none">
        Support@hebrewapp.com
    </a>
</div>
<div class="d-flex aic" gap-2>
    @include('components.svgs.whatsapp-icon-svg')
    <a href="#" class="fs14" style="color: #063DD0; text-decoration: none">
        +234 1234 5678
    </a>
</div>
</div>

            </div>

        </div>
    </section>
@endsection
