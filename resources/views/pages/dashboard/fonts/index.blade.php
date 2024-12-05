@extends('layouts.app')

@section('content')
    <section>
        <div>
            <p class="fw700 fs18">גופנים</p>
            <p class="fs14 me-lg-5" style="color : #777">
            התאם אישית את חווית הקריאה שלך על ידי בחירת סגנון הגופן המועדף עליך
            </p>
        </div>

        <div class="d-flex flex-column jcs"
            style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">


            <div style="background-color:#FBFBFB; line-height:21px !important; border:1px solid #C6C6C6; border-radius:10px; padding:16px"
                class="d-flex jcb aic">

                <div>
                    <form method="POST">
                        @csrf
                        @php
                            $options = [
                                [
                                    'id' => '1',
                                    'value' => 'Order confirmation',
                                    'name' => 'Order confirmation',
                                ],
                                [
                                    'id' => '2',
                                    'value' => 'Draft order invoice',
                                    'name' => 'Draft order invoice',
                                ],
                                [
                                    'id' => '3',
                                    'value' => 'Shipping confirmation',
                                    'name' => 'Shipping confirmation',
                                ],
                                [
                                    'id' => '4',
                                    'value' => 'Picked up by customer',
                                    'name' => 'Picked up by customer',
                                ],
                                [
                                    'id' => '5',
                                    'value' => 'Ready for local pickup',
                                    'name' => 'Ready for local pickup',
                                ],
                                [
                                    'id' => '6',
                                    'value' => 'Order out for local delivery',
                                    'name' => 'Order out for local delivery',
                                ],
                                [
                                    'id' => '7',
                                    'value' => 'Order locally delivered',
                                    'name' => 'Order locally delivered',
                                ],
                                [
                                    'id' => '8',
                                    'value' => 'New gift card',
                                    'name' => 'New gift card',
                                ],
                                [
                                    'id' => '9',
                                    'value' => 'Order edited',
                                    'name' => 'Order edited',
                                ],
                                [
                                    'id' => '10',
                                    'value' => 'Order cancelled',
                                    'name' => 'Order cancelled',
                                ],
                                [
                                    'id' => '11',
                                    'value' => 'Order payment receipt',
                                    'name' => 'Order payment receipt',
                                ],
                                [
                                    'id' => '12',
                                    'value' => 'Shipping update',
                                    'name' => 'Shipping update',
                                ],
                            ];
                        @endphp
                        <div>
                            <p class="fs14 fw700">
                                בחרו שפה וגופן:
                            </p>
                            <p class="fs14" style="color : #777777">
                                בחרו את השפה (במסך שפות) שתרצו להשתמש בה ולאחר מכן גם את הגופן, לסיום לחצו על "שמירה".
                            </p>
                        </div>
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
                            'placeholder' => 'בחר גופן',
                            'login' => true,
                        ])


                        <div class="d-flex flex-column" style="gap:24px">
                            <p class="fs14">
                                כך נראה הפונט שבחרת מהרשימה.
                            </p>

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
                        </div>
                    </form>
                </div>
                <div>
                    @include('components.svgs.fonts-image-svg')
                </div>


            </div>

            <p class="fs14" style="margin-top: 10px">
                נתקלים בקושי למצוא את הגופן המועדף עליכם? צרו קשר ואנחנו נדאג להוסיף אותו בשבילכם.
            </p>
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
                   'שלב 1 - בחרו את הפונט המועדף עליכם מרשימת הגופנים.',
                   'שלב 2 - לחצו "שמירה".',
                   'שלב 3 - הכנסו ל"הגדרות האפליקציה בערכת הנושא".',
                   'שלב 4 - וודאו שהאפליקציה מופעלת וש"Activate Font" מסומן.'
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
