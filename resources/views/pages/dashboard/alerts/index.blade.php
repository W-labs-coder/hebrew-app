@extends('layouts.app')

@section('content')
    <section>
        <div>
            <p class="fw700 fs18">התראות</p>
            <p class="fs14 me-lg-5" style="color : #777">
                התאם אישית התראות כדי לעדכן את הלקוחות שלך בכל שלב
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
                                לקוחות יקרים! הוספנו עבורכם התראות נוספות מתורגמות לעברית לשימושכם 💙
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div style="background-color:#FBFBFB; line-height:21px !important; border:1px solid #C6C6C6; border-radius:10px; padding:16px"
                class="d-flex  ais flex-column">


                <form method="POST" class="d-flex flex-column" style="gap:16px">
                    @csrf


                    <div class="d-flex-flex-column" style="gap:8px">
                        <p class="fs14 fw700">
                            שנו את השפה והסגנון של ההתראות בחנות:
                        </p>
                        <p class="fs14" style="width:488px !important">
                            אנא בחרו את ההתראה אותה תרצו לתרגם.שנו בגוף ההודעה את הטקסט עצמו ותרגישו חופשי להוסיף את הטאץ'
                            של המותג שלכם!
                        </p>

                        @include('components.form.select_input', [
                            'isRequired' => false,
                            'label' => '',
                            'w' => '488px',
                            'id' => 'status',
                            'name' => 'status',
                            'options' => [],
                            'option_val' => 'name',
                            'option_val2' => 'id',
                            'show_default' => true,
                            'placeholder' => 'בחר מרשימת ההתראות',
                            'login' => true,
                        ])
                    </div>
                    <div class="d-flex-flex-column" style="gap:8px">
                        <p class="fs14 fw700">
                            התאם אישית את הדואר
                        </p>
                        <p class="fs14 me-5">
                            צור התראה מותאמת אישית בדוא"ל כדי לשמור את הלקוחות שלך מעודכנים
                        </p>

                        @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => '',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'נושא המייל...',
                            'login' => true,
                            'w' => '488px',
                        ])
                    </div>
                    <div class="d-flex-flex-column" style="gap:8px">
                        <p class="fs14 fw700">
                            גוף המייל
                        </p>
                        <p class="fs14 me-5">
                            כאן תוכל לשנות ולעצב את המייל שהלקוח שלך יקבל - ראה הוראות למטה
                        </p>

                        @include('components.form.text_area_input', [
                            'isRequired' => false,
                            'label' => '',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'נושא המייל...',
                            'login' => true,
                            'w' => '488px',
                            'border' => '1px solid #C6C6C6',
                            'h' => '289px',
                        ])
                    </div>
                    <div>

                        @include('components.form.button', [
                            'text' => 'העתק טקסט',
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


                <div style="background: #021341; border-radius:10px; padding:16px; width:488px !important; margin-top:16px">
                    <div class="d-flex jcb aic" style="margin-bottom:8px">
                        <div class="d-flex ais gap-2">
                            @include('components.svgs.alert3-svg')
                            <div>
                                <p class="fs14" style="color : #FBFBFB !important">
                                   לאחר שערכתם את הטקסט בחלון למעלה, לחצו "העתקת טקסט" והכנסו לניהול ההתראות, שם תדביקו את הטקסט:
                                </p>
                            </div>
                        </div>
                    </div>
                    @include('components.form.button', [
                            'text' => 'ניהול התראות',
                            'h' => '37px',
                            'w' => '',
                            'br' => '24px',
                            'color' => '#0D0D0D',
                            'bg' => '#FBB105',
                            'border' => '1px solid #FBB105',
                            'type' => 'button',
                            'formId' => 'addProductForm',
                            'button_id' => 'addProductBtn',
                        ])
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
                    'שלב 1 - בחרו התראה מהרשימה.',
                    'שלב 2 - שנו את גוף המייל.',
                    'שלב 3 - לחצו "העתקת טקסט".',
                    'שלב 4 - עברו למסך ניהול התראות.',
                    'שלב 5 - מחקו את מה שיש שם, הדביקו את מה שהעתקתם.'
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
