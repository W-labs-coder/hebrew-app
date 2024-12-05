@extends('layouts.app')

@section('content')
    <section>
        <div>
            <p class="fw700 fs18">כפתור שפה ודינאמי</p>
            <p class="fs14 me-lg-5" style="color : #777">
                שפר את חוויית המשתמש על ידי התאמת הגדרות תרגום השפה של החנות שלך.
            </p>
        </div>



        <div class="d-flex flex-column jcs"
            style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">

            <div style="background: #FDCED2; border-radius:10px; padding:16px">
                <div class="d-flex jcb aic">
                    <div class="d-flex aic gap-2">
                        @include('components.svgs.alert-icon-danger-svg')
                        <div class="me-lg-5">
                            <p class="fs14" style="">
                                שימו לב! תרגום השפה מחליף את ערכת השפה הקיימת באתר ודורסת אותה. במקרה הצורך אנא שמרו את ערכת
                                השפה הנוכחית שלכם לצורך גיבוי.
                            </p>
                        </div>
                    </div>
                    @include('components.svgs.cancel-dark-icon-svg')
                </div>
            </div>


            <div
                style="background-color:#FBFBFB; line-height:21px !important; border:1px solid #C6C6C6; border-radius:10px; padding:16px ">

                <p class="fs14 fw700">
                    אנא בחרו את שפת האתר הרצויה:
                </p>
                <p class="fs14">
                    בחרו את השפה שאליה תרצו לשנות את ערכת הנושא ולאחר מכן לחצו על "שמירה".
                </p>
                <p class="fs14">
                    פעולה זה לא תשנה את השפה באופן מיידי - ראו המשך הדרכה למטה
                </p>


                <form method="POST" style="gap: 8px;" class="d-flex flex-column">
                    @csrf
                    @php
                        $options = [
                            [
                                'id' => '1',
                                'value' => 'שפה עברית',
                                'name' => 'שפה עברית',
                            ],
                        ];
                    @endphp
                    @include('components.form.select_input', [
                        'isRequired' => false,
                        'label' => '',
                        'w' => '488px',
                        'id' => 'status',
                        'name' => 'status',
                        'options' => $options,
                        'option_val' => 'name',
                        'option_val2' => 'id',
                        'show_default' => true,
                        'placeholder' => 'שפה עברית',
                        'login' => true,
                    ])
                    @include('components.form.button', [
                        'text' => 'לְהַצִיל',
                        'h' => '37px',
                        'w' => '83px',
                        'br' => '24px',
                        'color' => '#0D0D0D',
                        'bg' => '#FBB105',
                        'border' => '1px solid #FBB105',
                        'type' => 'submit',
                        'formId' => 'addProductForm',
                        'button_id' => 'addProductBtn',
                    ])
                </form>

                <div style="background: #021341; border-radius:10px; border-radius:10px; gap:16px; padding:16px; margin-top:16px"
                    class="d-inline-flex flex-column ais jcc">

                    @php
                        $options = [
                            'שלב 1 - בחרו את בשפה העברית ולחצו על כפתור ה"שמירה" באפליקציה.',
                            'שלב 2 - לחצו על הכפתור התחתון (הגדרת שפות) כדי לנווט למסך הגדרות השפה.',
                            'שלב 3 - לחצו על הכפתור של ה-3 נקודות ליד השפה המוגדרת כברירת מחדל, ובחרו ב-"Change Default"',
                            'שלב 4 - בחר את השפה העברית מהרשימה.',
                            'שלב 5 - לחץ על כפתור "שמור".',
                        ];
                    @endphp

                    <div class="">
                        <p class="fw700 fs14" style="color: #FBFBFB !important">
                            הדרכה לשימוש במסך זה:
                        </p>
                    </div>

                    @foreach ($options as $option)
                        <div class="d-flex aic gap-3" style="justify-content: flex-start">
                            @include('components.svgs.check-light-svg')
                            <p class="fs14" style="color: #FBFBFB !important;">
                                {{ $option }}
                            </p>

                        </div>
                    @endforeach

                </div>


            </div>
        </div>




        <div class="d-flex flex-column jcs"
            style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">

            <div
                style="background-color:#FBFBFB; line-height:21px !important; border:1px solid #C6C6C6; border-radius:10px; padding:16px ">


                <form method="POST" style="gap: 8px;" class="d-flex flex-column">
                    @csrf
                    @include('components.form.text_input', [
                        'isRequired' => false,
                        'label' => 'שינוי הטקסט של כפתור קנייה:',
                        'id' => '',
                        'name' => '',
                        'placeholder' => 'הקלד כאן כדי לשנות טקסט...',
                        'login' => true,
                        'w' => '488px',
                    ])
                    @include('components.form.text_input', [
                        'isRequired' => false,
                        'label' => 'גודל הטקסט בפיקסלים:',
                        'id' => '',
                        'name' => '',
                        'placeholder' => 'הקלד את הדמות המועדפת עליך...',
                        'login' => true,
                        'w' => '488px',
                    ])
                    @include('components.form.button', [
                        'text' => 'לְהַצִיל',
                        'h' => '37px',
                        'w' => '83px',
                        'br' => '24px',
                        'color' => '#0D0D0D',
                        'bg' => '#FBB105',
                        'border' => '1px solid #FBB105',
                        'type' => 'submit',
                        'formId' => 'addProductForm',
                        'button_id' => 'addProductBtn',
                    ])
                </form>
            </div>
        </div>




        <div style="background: #021341; border-radius:10px; border-radius:10px; gap:16px; padding:16px; margin-top:16px"
            class="d-inline-flex flex-column ais jcc">

            @php
                $options = [
                    'שלב 1 - כתבו את הטקסט שאתם מעוניינים שיופיע על כפתור קנייה.',
                    'שלב 2 - לחצו "שמירה"',
                    'שלב 3 - הכנסו ל"הגדרות האפליקציה בהערכת נושא"',
                    'שלב 4 - וודאו שהאפליקציה מופעלת ושמסומן "Translation"',
                ];
            @endphp

            @foreach ($options as $option)
                <div class="d-flex aic gap-3" style="justify-content: flex-start">
                    @include('components.svgs.check-light-svg')
                    <p class="fs14" style="color: #FBFBFB !important;">
                        {{ $option }}
                    </p>

                </div>
            @endforeach

        </div>




        <div class="d-flex flex-column jcs"
            style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">
            <p class="fw700 fs18">
                הדרכה לשימוש במסך זה:
            </p>
            <div style="border : 3px solid #C6C6C6; border-radius:12px; height:419px; background-color:#FBFBFB;"
                class="d-flex aic jcc">
                <div class="d-flex flex-column aic jcc">
                    @include('components.svgs.video-svg')
                    <p class="fs14" style="color : #777">כאן יופיע תוכן הווידאו</p>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column jcs"
            style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">
            <div style="border : 3px solid #C6C6C6; border-radius:12px; height:419px; background-color:#FBFBFB;"
                class="d-flex aic jcc">
                <div class="d-flex flex-column aic jcc">
                    @include('components.svgs.video-svg')
                    <p class="fs14" style="color : #777">כאן יופיע תוכן הווידאו</p>
                </div>
            </div>
        </div>
    </section>
@endsection
