@extends('layouts.app')

@section('content')
    <section>
        <div>
            <p class="fw700 fs18">
                מיקוד אוטומטי
            </p>
            <p class="fs14 me-lg-5" style="color : #777">
                ללכוד אוטומטית מיקוד מכתובות לקוחות לחוויית תשלום חלקה יותר.
            </p>
        </div>

        <div class="d-flex flex-column jcs"
            style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">
            <div style="background: #021341; border-radius:10px; padding:16px">
                <div class="d-flex jcb aic">
                    <div class="d-flex aic gap-2">
                        @include('components.svgs.alert3-svg')
                        <div>
                            <p class="fs14" style="color : #FBFBFB !important">
                                שימו לב! המיקוד האוטומטי מבוסס על העתקת הכתובת שהלקוח רשם אל אתר דואר ישראל. אם המערכת מצאה באתר את המיקוד, הוא יוזן אוטומטית אל ההזמנה. אנו לא אחראיים על טעויות או מיקוד לא מדויק מאחר ומדובר בנתון חיצוני שאינו תלוי בנו.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div style="background-color:#FBFBFB; line-height:21px !important; border:1px solid #C6C6C6; border-radius:10px; padding:16px"
                class="d-flex  ais flex-column">


                <form method="POST" class="d-flex flex-column" style="gap:16px">
                    @csrf


                    <div class="d-flex-flex-column" style="gap:16px">
                        <p class="fs14 fw700">
                            איתור מיקוד אוטומטי
                        </p>
                        <p class="fs14" style="width:488px !important">
                          נמאס לכם לחפש את מיקוד הכתובת שהלקוח הזין? יש לנו חדשות טובות: באמצעות אפשרות זו תוכלו להפעיל הזנה אוטומטית של מיקוד לכל הזמנה!
                        </p>
                    </div>



                    <div style="background: #E1E1E1; border-radius:10px; border-radius:10px; gap:16px; padding:16px; width:488px"
                        class="d-inline-flex flex-column ais jcc">
                        <p class="fw700 fs14">
                            איך זה עובד
                        </p>

                        @php
                            $options = [
                                ' לקוח פותח הזמנה חדשה באתר',
                                'אם הוא הזין כתובת ומיקוד בעצמו, האפליקציה לא נוגעת בהזמנה',
                                'אם הלקוח לא הזין מיקוד אלא רק כתובת, ומערכת איתור המיקוד האוטומטי הופעלה, האפליקציה תחפש את הכתובת באתר דואר ישראל בשמכם ותזין את המיקוד שנמצא אל תוך ההזמנה!'
                            ];
                        @endphp

                        @foreach ($options as $option)
                            <div class="d-flex ais gap-3" style="justify-content: flex-start">
                                <div>
                                    @include('components.svgs.check-dark-svg')
                                </div>
                                <p class="fs14" style="color: #0D0D0D !important;">
                                    {{ $option }}
                                </p>

                            </div>
                        @endforeach

                    </div>

                    <div>
                        @include('components.form.select_input', [
                            'isRequired' => false,
                            'label' => 'איתור מיקוד אוטומטי',
                            'w' => '488px',
                            'id' => 'status',
                            'name' => 'status',
                            'options' => [],
                            'option_val' => 'name',
                            'option_val2' => 'id',
                            'show_default' => true,
                            'placeholder' => 'מכובה',
                            'login' => true,
                        ])
                    </div>

                    <div>

                        @include('components.form.button', [
                            'text' => 'לְהַצִיל',
                            'h' => '37px',
                            'w' => '',
                            'br' => '24px',
                            'color' => '#0D0D0D',
                            'bg' => '#FBB105',
                            'border' => '1px solid #FBB105',
                            'type' => 'submit',
                            'formId' => 'addProductForm',
                            'button_id' => 'addProductBtn',
                        ])
                    </div>
                </form>




            </div>
            <div style="background-color:#FBFBFB; line-height:21px !important; border:1px solid #C6C6C6; border-radius:10px; padding:16px"
                class="d-flex  ais flex-column">


                <form method="POST" class="d-flex flex-column" style="gap:16px">
                    @csrf


                    <div class="d-flex-flex-column" style="gap:16px">
                        <p class="fs14 fw700">
                            תיקון מיקוד אוטומטי
                        </p>
                        <p class="fs14" style="width:488px !important">
                         נמאס לכם שהלקוחות טועים במיקוד או ממציאים ספרות? יש לנו חדשות טובות: באמצעות אפשרות זו תוכלו להפעיל תיקון אוטומטי של מיקוד לכל הזמנה נכנסת – גם אם הלקוח הזין מיקוד לא תקין!
                        </p>
                    </div>



                    <div style="background: #E1E1E1; border-radius:10px; border-radius:10px; gap:16px; padding:16px; width:488px"
                        class="d-inline-flex flex-column ais jcc">
                        <p class="fw700 fs14">
                            איך זה עובד
                        </p>

                        @php
                            $options = [
                                ' לקוח פותח הזמנה חדשה באתר',
                                'האפליקציה לוקחת את כתובת הלקוח מתוך ההזמנה ושולחת את הכתובת לבדיקה מול דואר ישראל.',
                                'אם הלקוח הזין מיקוד לא תקין, ומערכת תיקון המיקוד האוטומטי הופעלה, האפליקציה תזין את המיקוד התקין שנמצא אל תוך ההזמנה!'
                            ];
                        @endphp

                        @foreach ($options as $option)
                            <div class="d-flex ais gap-3" style="justify-content: flex-start">
                                <div>
                                    @include('components.svgs.check-dark-svg')
                                </div>
                                <p class="fs14" style="color: #0D0D0D !important;">
                                    {{ $option }}
                                </p>

                            </div>
                        @endforeach

                    </div>

                    <div>
                        @include('components.form.select_input', [
                            'isRequired' => false,
                            'label' => 'תיקון מיקוד אוטומטי',
                            'w' => '488px',
                            'id' => 'status',
                            'name' => 'status',
                            'options' => [],
                            'option_val' => 'name',
                            'option_val2' => 'id',
                            'show_default' => true,
                            'placeholder' => 'מכובה',
                            'login' => true,
                        ])
                    </div>

                    <div>

                        @include('components.form.button', [
                            'text' => 'לְהַצִיל',
                            'h' => '37px',
                            'w' => '',
                            'br' => '24px',
                            'color' => '#0D0D0D',
                            'bg' => '#FBB105',
                            'border' => '1px solid #FBB105',
                            'type' => 'submit',
                            'formId' => 'addProductForm',
                            'button_id' => 'addProductBtn',
                        ])
                    </div>
                </form>




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


            <div style="background: #021341; border-radius:10px; border-radius:10px; gap:16px; padding:16px"
                class="d-inline-flex flex-column ais jcc">

                @php
                    $options = [
                        'שלב 1 - הפעילו את מערכת ביטולי עסקאות ע"י לחיצה על הכפתור למעלה, כך שיופיע טקסט "מופעל".',
                        'שלב 2 - העתיקו את הקישור לעמוד דרך כפתור "העתק".',
                        'שלב 3 - שלבו את הקישור במקום בולט בתפריטי האתר כך שהלקוחות יוכלו לגשת אליו.',
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
