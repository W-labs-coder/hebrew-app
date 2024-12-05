@extends('layouts.app')

@section('content')
    <section>
        <div>
            <p class="fw700 fs18">
                אמצעי תשלום
            </p>
            <p class="fs14 me-lg-5" style="color : #777">
                בחר את שיטת התשלום המועדפת עליך לחוויית תשלום חלקה.
            </p>
        </div>





        <div class="d-flex flex-column jcs"
            style="margin: 16px 0; border:1px solid #C6C6C6; border-radius:16px; padding:16px; gap:16px; background-color: #FBFBFB">
            <div style="background-color:#FBFBFB; line-height:21px !important; border:1px solid #C6C6C6; border-radius:10px; padding:16px"
                class="d-flex jcb ais">

                <div>
                    <form method="POST" style="gap:24px" class="d-flex flex-column">
                        @csrf

                        <div>
                            <p class="fw700 fs14">
                                בחירת צבע רקע:
                            </p>

                            @include('components.form.radio', [
                                'name' => 'background_color',
                                'id' => 'transparent',
                                'value' => 'transparent',
                                'label' => 'צבע רקע שקוף',
                            ])

                            @include('components.form.radio', [
                                'name' => 'background_color',
                                'id' => 'white',
                                'value' => 'white',
                                'label' => 'צבע רקע לבן',
                            ])
                        </div>


                        <div>
                            <p class="fs14 fw700">
                                גודל מותאם אישית:
                            </p>
                            @php
                                $options = [
                                    [
                                        'id' => '1',
                                        'value' => '1',
                                        'name' => '1',
                                    ],
                                ];
                            @endphp
                            <div class="d-lg-flex gap-3 aic jcs">
                                @include('components.form.select_input', [
                                    'isRequired' => false,
                                    'label' => '',
                                    'w' => '232px',
                                    'id' => 'status',
                                    'name' => 'status',
                                    'options' => $options,
                                    'option_val' => 'name',
                                    'option_val2' => 'id',
                                    'show_default' => true,
                                    'placeholder' => '36',
                                    'login' => true,
                                ])

                                <p class="fw700 fs14 text-center">
                                    x
                                </p>

                                @include('components.form.select_input', [
                                    'isRequired' => false,
                                    'label' => '',
                                    'w' => '232px',
                                    'id' => 'status',
                                    'name' => 'status',
                                    'options' => $options,
                                    'option_val' => 'name',
                                    'option_val2' => 'id',
                                    'show_default' => true,
                                    'placeholder' => '60',
                                    'login' => true,
                                ])
                            </div>
                        </div>

                        <div>
                            @include('components.form.text_input', [
                                'isRequired' => false,
                                'label' => 'בחירת טקסט שיופיע מעל אמצעי התשלום:',
                                'id' => '',
                                'name' => '',
                                'placeholder' => 'הקלד כאן...',
                                'login' => true,
                                'w' => '488px',
                            ])
                        </div>


                        <div>
                            <p class="fw700 fs14">
                                בחירת אמצעי תשלום:
                            </p>


                            @php
                                $processors = [
                                    [
                                        'name' => 'American Express',
                                        'icon' => 'american_express.png',
                                    ],
                                    [
                                        'name' => 'Diners',
                                        'icon' => 'diners.png',
                                    ],
                                    [
                                        'name' => 'Apple Pay',
                                        'icon' => 'apple_pay.png',
                                    ],
                                    [
                                        'name' => 'Bit',
                                        'icon' => 'bit.png',
                                    ],
                                    [
                                        'name' => 'Iscracard',
                                        'icon' => 'iscracard.png',
                                    ],
                                    [
                                        'name' => 'Google Pay',
                                        'icon' => 'google_pay.png',
                                    ],
                                    [
                                        'name' => 'Visa',
                                        'icon' => 'visa.png',
                                    ],
                                    [
                                        'name' => 'Master Card',
                                        'icon' => 'master_card.png',
                                    ],
                                    [
                                        'name' => 'Paypal',
                                        'icon' => 'paypal.png',
                                    ],
                                ];
                            @endphp

                            <div class="row">
                                @foreach ($processors as $processor)
                                    <div class="col-3">
                                        @include('components.form.checkbox', [
                                            'name' => 'processor',
                                            'id' => $processor['name'],
                                            'value' => $processor['name'],
                                            'label' => $processor['name'],
                                            'image' => $processor['icon'],
                                        ])
                                    </div>
                                @endforeach
                            </div>

                        </div>

                        <div>
                            <p class="fw700 fs14 mb-1">
                                מותאם אישית
                            </p>

                            <input type="hidden" name="cutom_payment" id="custom_payment" type="file" accept="image/*">
                            @include('components.form.button', [
                                'text' => 'הוסף שיטת תשלום',
                                'h' => '37px',
                                'w' => '',
                                'br' => '24px',
                                'color' => '#fff',
                                'bg' => '#021341',
                                'border' => '1px solid #021341',
                                'type' => 'button',
                                'formId' => 'addProductForm',
                                'button_id' => 'customPaymentButton',
                                'right_icon' => 'upload-icon-svg',
                            ])
                        </div>


                        <div>
                            <p class="fw700 fs14">
                                החזר כספי מובטח:
                            </p>
                            <p class="my-2 fs14">
                                בחר כל סגנון סמל
                            </p>


                            @php
                                $features = [
                                    [
                                        'name' => 'delivery',
                                        'icon' => 'delivery-svg',
                                    ],
                                    [
                                        'name' => 'package',
                                        'icon' => 'package-svg',
                                    ],
                                    [
                                        'name' => 'airplane',
                                        'icon' => 'airplane-svg',
                                    ],
                                    [
                                        'name' => 'sent',
                                        'icon' => 'paper-plane-svg',
                                    ],
                                ];
                            @endphp


                            <div class="row jcs">
                                @foreach ($features as $feature)
                                    <div class="col-2">
                                        @include('components.form.checkbox', [
                                            'name' => 'feature',
                                            'id' => $feature['name'],
                                            'value' => $feature['name'],
                                            'label' => '',
                                            'icon' => $feature['icon'],
                                        ])
                                    </div>
                                @endforeach
                            </div>

                        </div>

                        <div>
                            @include('components.form.select_input', [
                            'isRequired' => false,
                            'label' => 'בחר דרישות משלוח חינם:',
                            'w' => '488px',
                            'id' => 'status',
                            'name' => 'status',
                            'options' => [],
                            'option_val' => 'name',
                            'option_val2' => 'id',
                            'show_default' => true,
                            'placeholder' => 'Free shipping from $5',
                            'login' => true,
                        ])
                        </div>

                        <div>
                            <p class="fw700 fs14">
                                משלוח חינם מ:
                            </p>
                            <p class="fs14 my-2">
                                בחר כל סגנון סמל
                            </p>

                            @php
                                $features = [
                                    [
                                        'name' => 'appointment',
                                        'icon' => 'appointment-icon-svg',
                                    ],
                                    [
                                        'name' => 'calendar',
                                        'icon' => 'calendar-icon-svg',
                                    ],
                                ];
                            @endphp


                            <div class="row jcs">
                                @foreach ($features as $feature)
                                    <div class="col-2">
                                        @include('components.form.checkbox', [
                                            'name' => 'feature',
                                            'id' => $feature['name'],
                                            'value' => $feature['name'],
                                            'label' => '',
                                            'icon' => $feature['icon'],
                                        ])
                                    </div>
                                @endforeach
                            </div>

                        </div>

                        <div>
                              @include('components.form.text_input', [
                            'isRequired' => false,
                            'label' => 'כמה ימי אחריות יש?',
                            'id' => '',
                            'name' => '',
                            'placeholder' => 'הקלד מספר ימי אחריות להחזר כספי כאן...',
                            'login' => true,
                            'w' => '488px',
                        ])
                        </div>

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
                    @include('components.svgs.payment-image-svg')
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
                    'שלב 1 - בחרו את צבע הרקע של אמצעי התשלום.',
                    'שלב 2 - רשמו את הטקסט שיופיע מעל אמצעי התשלום.',
                    'שלב 3 - בחרו את אמצעי התשלום שתרצו שיופיעו באתר.',
                    'שלב 4 - לחצו על כפתור "שמירה".',
                    'שלב 5 - לחצו על כפתור "הגדרות האפליקציה בערכת הנושא".',
                    'שלב 6 - וודאו שהאפליקציה מופעלת וש"Activate footer banners" מסומן כדי להפעיל את אמצעי התשלום בתחתית האתר.'
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



{{-- <script type="text/javascript">
    $('document').ready(() {
        $('#customPaymentButton').click(() {
            $('#custom_payment').open()
        })
    })
</script> --}}
