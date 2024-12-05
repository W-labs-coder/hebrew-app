@extends('layouts.app')

@section('content')
    <section>
        <div>
            <p class="fw700 fs18">נגישות</p>
            <p class="fs14 me-lg-5" style="color : #777">
                שפר את הנגישות של החנות שלך כדי ליצור חוויה מכילה עבור כל המשתמשים.
            </p>
        </div>





        <div class="d-flex flex-column jcs"
            style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">
            <div style="background: #021341; border-radius:10px; padding:16px">
                <div class="d-flex jcb aic">
                    <div class="d-flex aic gap-2">
                        @include('components.svgs.alert3-svg')
                        <div>
                            <p class="fs14 d-flex me-5" style="color : #FBFBFB !important">
                                תוסף הנגישות שלנו מאפשר לכם לשפר את רמת הנגישות שלכם עבור גולשים בעלי מוגבלויות. במדינת
                                ישראל ישנו תקן נגישות שצריך לעמוד בו והאתר צריך לכלול גם הצהרת נגישות.
                            </p>
                            <p class="fs14 d-flex me-5" style="color : #C6C6C6 !important">
                                שימו לב: האפליקציה בעברית אינה מתחייבת או מתחייבת לעמוד בתקן כלשהו, ​​והיא מיועדת אך ורק
                                ככלי המציע יכולות לשיפור נגישות האתר וכן הצהרת נגישות המבוססת על תבנית שכתבנו.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div style="background-color:#FBFBFB; line-height:21px !important; border:1px solid #C6C6C6; border-radius:10px; padding:16px"
                class="d-flex jcb ais">

                <div>
                    <form method="POST" style="gap:8px" class="d-flex flex-column">
                        @csrf

                        @php
                            $options = [
                                [
                                    'id' => '1',
                                    'value' => 'Order confirmation',
                                    'name' => 'Order confirmation',
                                ],
                            ];
                        @endphp
                        @include('components.form.select_input', [
                            'isRequired' => false,
                            'label' => 'מיקום האייקון:',
                            'w' => '488px',
                            'id' => 'status',
                            'name' => 'status',
                            'options' => $options,
                            'option_val' => 'name',
                            'option_val2' => 'id',
                            'show_default' => true,
                            'placeholder' => 'ימין למטה',
                            'login' => true,
                        ])

                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'כותרת עזרה (מופיעה בעת מעבר עכבר):',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'כלי נגישות',
                            'login' => true,
                            'w' => '488px',
                        ])

                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'דואר אלקטרוני של בעל האתר:',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'הקלד את האימייל שלך כאן...',
                            'login' => true,
                            'w' => '488px',
                        ])

                        @include('components.form.select_input', [
                            'isRequired' => false,
                            'label' => 'צורת האייקון:',
                            'w' => '488px',
                            'id' => 'status',
                            'name' => 'status',
                            'options' => $options,
                            'option_val' => 'name',
                            'option_val2' => 'id',
                            'show_default' => true,
                            'placeholder' => 'עיגול',
                            'login' => true,
                        ])

                        @include('components.form.select_input', [
                            'isRequired' => false,
                            'label' => 'גודל האייקון:',
                            'w' => '488px',
                            'id' => 'status',
                            'name' => 'status',
                            'options' => $options,
                            'option_val' => 'name',
                            'option_val2' => 'id',
                            'show_default' => true,
                            'placeholder' => 'קטן',
                            'login' => true,
                        ])

                        @include('components.form.select_input', [
                            'isRequired' => false,
                            'label' => 'סוג האייקון:',
                            'w' => '488px',
                            'id' => 'status',
                            'name' => 'status',
                            'options' => $options,
                            'option_val' => 'name',
                            'option_val2' => 'id',
                            'show_default' => true,
                            'placeholder' => 'סוג 1',
                            'login' => true,
                        ])


                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'ריווח האייקון ימין-שמאל (בפיקסלים):',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'הקלד מספר כאן...',
                            'login' => true,
                            'w' => '488px',
                        ])



                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'ריווח האייקון למעלה-למטה (בפיקסלים):',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'הקלד מספר כאן...',
                            'login' => true,
                            'w' => '488px',
                        ])

                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'רמת שכבה (z-Index):',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'הקלד מספר כאן...',
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
                <div class="d-flex flex-column ais" style="gap:8px">
                    <p class="fw700 fs14">
                        תצוגה מקדימה חיה
                    </p>
                    <div class="d-flex flex-column" style="box-shadow: 0px 0px 0px 1px #00000014; box-shadow: 0px 4px 10px -8px #00000033; height:262px; width:222px; border-radius: 10px; border:1px solid #C6C6C6">

                        <div style="height:180px" class="d-flex aic jcc">
                            @include('components.svgs.accessibility-variant-icon-svg')
                        </div>

                        <div style="background: #E1E1E1">
                            <div class="d-flex jcb" style="border-top: 1px solid #C6C6C6; padding: 8px 16px">
                                <p class="fs14">
                                    צבע רקע:
                                </p>
                                <div style="height:25px; width:25px; background:#0D0D0D; border-radius:4px"></div>
                            </div>
                            <div class="d-flex jcb" style="border-top: 1px solid #C6C6C6; padding: 8px 16px">
                                <p class="fs14">
                                    צבע אייקון:
                                </p>
                                <div style="height:25px; width:25px; background:#FFF; border-radius:4px"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


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
                    'שלב 1 - עצבו את כפתור הנגישות באמצעות האפשרויות למעלה.',
                    'שלב 2 - לחצו על כפתור "הצהרת נגישות" כדי ליצור את תבנית ההצרה שלכם.',
                    'שלב 3 - מלאו את הפרטים הנדרשים, אשרו את התנאים ולחצו על "יצירת תוכן דף".',
                    'שלב 4 - בשלב זה המערכת יצרה עבורכם את תוכן הצהרת הנגישות, כעת לחצו על "העתק טקסט" כדי להעתיק את התוכן ולאחר מכן לחצו על "מעבר ליצירת עמוד" כדי ליצור עמוד חדש בשופיפיי.',
                    'שלב 5 - הדביקו ביצירת העמוד את תוכן הצהרת הנגישות, צרו את העמוד ושמרו את הקישור שלו.',
                    'שלב 6 - הדביקו את הקישור לעמוד ההצהרה בהגדרות הנגישות באפליקציה ולחצו על כפתור "שמירה"',
                    'שלב 7 - הכנסו ל"הגדרות האפליקציה בערכת הנושא"',
                    'שלב 8 - וודאו שהאפליקציה מופעלת וש"Activate accessibility" מסומן.',
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
