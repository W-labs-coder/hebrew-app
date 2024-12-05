@extends('layouts.app')

@section('content')
    <section>
        <div>

            <p class="fs32 fw600 text-center mb-0" style="color: #0D0D0D">
                שותפים, עסקאות והכנסות
            </p>
            <p class="fs32 fw600 text-center mb-0" style="color: #0D0D0D">
                ללא הגבלה
            </p>
            <p style="color : #777777" class=" fs14 text-center">
                אנחנו אוהבים לשמור על זה פשוט, מחירים ברורים שמתפתחים עם העסק שלך
            </p>
        </div>
        <div class="d-lg-flex jcb aic">
            <div>

                <p class="fw600 fs18" style="color:#0D0D0D">השווה בין התוכניות</p>
            </div>
            <div class="d-flex aic gap-4">
                <div>
                    <p class="" style="">תקופת חיוב</p>
                </div>
                <div id="toggleContainer"
                    style="background: #E1E1E1; height:45px; border-radius: 12px; padding:4px 16px 4px 4px;"
                    class="d-flex aic gap-4">
                    <div id="yearly" class="d-flex aic gap-4">
                        <p class="fs14" style="background-color: #FBB105; border-radius:24px; padding:2px 8px">חסוך 20%
                        </p>
                        <p style="color: #777777;" class="fs14">שנתי</p>
                    </div>
                    <div id="monthly" class="d-flex aic jcc"
                        style="background: #FBFBFB; box-shadow: 0px 1px 4px -2px #00000021; border-radius:8px; height:37px; width:115px">
                        <p class="fs14">חודשי</p>
                    </div>
                </div>

            </div>
        </div>
        <div style="border: 1px solid #C6C6C6; padding:24px; border-radius:12px; margin-top:24px; background:#FBFBFB">
            <div class="row ais my-3 jcc">
                @foreach ($subscriptions as $subscription)

                <div class="col-lg-3 col-md-3 col-sm-12 m-3 p-0 basic-plan"
                    style="background:{{ $subscription->name == 'professional' ? '#FBB105' : '#C6C6C6' }}; border-radius:12px; cursor:pointer">
                    <p class="fs14 text-center" style="padding: {{ $subscription->name == 'professional' ? '15px 0px' : '26px 0px' }}">{{ $subscription->name == 'professional' ? 'מקצוען' : '' }}</p>
                    <div style='background:#FBFBFB; border-radius:12px; padding:16px; margin:1px; gap:10px;'
                        class="d-flex jcs  flex-column">

                        <div>
                            <p class=" fs14"> {{  }}בְּסִיסִי</p>
                        </div>
                        <div class="d-flex jcb aie">
                            <p class="fw600 fs32">$39</p>
                            <p class=" fs14" style="color: #777777">חויב מדי חודש</p>
                        </div>
                        <div style="border: 1px solid #FBB105; padding:24px 8px; border-radius:36px; height:37px;"
                            class="d-flex aic jcc">
                            <p class=" fs14 text-center">
                                התחל ניסיון חינם של 3 ימים
                            </p>
                        </div>
                        <p class="fw600 fs16">
                            החבילה הבסיסית, מתאימה לרוב החנויות
                        </p>
                        @php
                            $benefits = [
                                'כל אפשרויות החבילה הבסיסית',
                                'כפתור נגישות בהתאמה אישית',
                                'מחולל הצהרת נגישות',
                            ];
                        @endphp

                        @foreach ($benefits as $benefit)
                            <div class="d-flex aic gap-2">
                                @include('components.svgs.check-svg')
                                <p class=" fs14" style="color: #777777">{{ $benefit }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                @endforeach
                {{-- basic Plan --}}
                <div class="col-lg-3 col-md-3 col-sm-12 m-3 p-0 basic-plan"
                    style="background:#C6C6C6; border-radius:12px; cursor:pointer">
                    <p class="fs14 text-center" style="padding:26px 0px"></p>
                    <div style='background:#FBFBFB; border-radius:12px; padding:16px; margin:1px; gap:10px;'
                        class="d-flex jcs  flex-column">

                        <div>
                            <p class=" fs14">בְּסִיסִי</p>
                        </div>
                        <div class="d-flex jcb aie">
                            <p class="fw600 fs32">$39</p>
                            <p class=" fs14" style="color: #777777">חויב מדי חודש</p>
                        </div>
                        <div style="border: 1px solid #FBB105; padding:24px 8px; border-radius:36px; height:37px;"
                            class="d-flex aic jcc">
                            <p class=" fs14 text-center">
                                התחל ניסיון חינם של 3 ימים
                            </p>
                        </div>
                        <p class="fw600 fs16">
                            החבילה הבסיסית, מתאימה לרוב החנויות
                        </p>
                        @php
                            $benefits = [
                                'כל אפשרויות החבילה הבסיסית',
                                'כפתור נגישות בהתאמה אישית',
                                'מחולל הצהרת נגישות',
                            ];
                        @endphp

                        @foreach ($benefits as $benefit)
                            <div class="d-flex aic gap-2">
                                @include('components.svgs.check-svg')
                                <p class=" fs14" style="color: #777777">{{ $benefit }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- End Basic Plan --}}
                {{-- Professional Plan --}}
                <div class="col-lg-3 col-md-3 col-sm-12 m-3 p-0 professional-plan"
                    style="background:#FBB105; border-radius:12px; cursor:pointer">
                    <p class="fs14 text-center" style="padding:15px 0px">הכי פופולרי</p>
                    <div style='background:#FBFBFB; border-radius:12px; padding:16px; margin:1px; gap:10px;'
                        class="d-flex jcs  flex-column">
                        <div>
                            <p class=" fs14">מקצוען</p>
                        </div>
                        <div class="d-flex jcb aie">
                            <p class="fw600 fs32">$69</p>
                            <p class=" fs14" style="color: #777777">חויב מדי חודש</p>
                        </div>
                        <div style="border: 1px solid #FBB105; padding:24px 8px; border-radius:36px; height:37px; background-color:#FBB105"
                            class="d-flex aic jcc">
                            <p class=" fs14 text-center">
                                התחל ניסיון חינם של 3 ימים
                            </p>
                        </div>
                        <p class="fw600 fs16">
                            חבילה עבור חנויות מתקדמות
                        </p>
                        @php
                            $benefits = [
                                'יישור מימין לשמאל (RTL)',
                                'תרגום לעברית',
                                'תרגום של התראות (מיילים)',
                                'גופנים בעברית',
                                'שינוי טקסט לכפתור "קנה עכשיו"',
                            ];
                        @endphp

                        @foreach ($benefits as $benefit)
                            <div class="d-flex aic gap-2">
                                @include('components.svgs.check-svg')
                                <p class=" fs14" style="color: #777777">{{ $benefit }}</p>
                            </div>
                        @endforeach
                    </div>

                </div>
                {{-- End Professional Plan --}}
                {{-- Premium Plan --}}
                <div class="col-lg-3 col-md-3 col-sm-12 m-3 p-0 premium-plan"
                    style="background:#C6C6C6; border-radius:12px; cursor:pointer">
                    <p class="fs14 text-center" style="padding:26px 0px"></p>
                    <div style='background:#FBFBFB; border-radius:12px; padding:16px; margin:1px; gap:10px;'
                        class="d-flex jcs  flex-column">
                        <div>
                            <p class=" fs14">פּרֶמיָה</p>
                        </div>
                        <div class="d-flex jcb aie">
                            <p class="fw600 fs32">$99</p>
                            <p class=" fs14" style="color: #777777">חויב מדי חודש</p>
                        </div>
                        <div style="border: 1px solid #FBB105; padding:24px 8px; border-radius:36px; height:37px;"
                            class="d-flex aic jcc">
                            <p class=" fs14 text-center">
                                התחל ניסיון חינם של 3 ימים
                            </p>
                        </div>
                        <p class="fw600 fs16">
                            חבילה לחנויות מתקדמות ביותר
                        </p>
                        @php
                            $benefits = [
                                'כל אפשרויות החבילה הבסיסית',
                                'כפתור נגישות בהתאמה אישית',
                                'מחולל הצהרת נגישות',
                                'גופנים בעברית',
                                'שינוי טקסט לכפתור "קנה עכשיו"',
                                'עדכוני תבניות',
                                'עמוד ביטולי עסקאות',
                                'שירות תמיכה',
                            ];
                        @endphp

                        @foreach ($benefits as $benefit)
                            <div class="d-flex aic gap-2">
                                @include('components.svgs.check-svg')
                                <p class=" fs14" style="color: #777777">{{ $benefit }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- End Premium Plan --}}
            </div>
        </div>
    </section>
@endsection


<script type="text/javascript">
    $(document).ready(function() {
        // Check if 'plan' parameter is in the URL
        const urlParams = new URLSearchParams(window.location.search);
        let plan = urlParams.get('plan');

        // If no 'plan' parameter, default to 'monthly'
        if (!plan) {
            plan = 'monthly';
            updateURL(plan);
        }

        // Set the initial active state based on the URL
        setActive(plan);

        $('#monthly, #yearly').click(function() {
            $('#monthly, #yearly').removeClass('active');
            $(this).addClass('active');
            updateURL($(this).attr('id'));
        });

        function setActive(type) {
            $('#' + type).addClass('active');
        }

        function updateURL(type) {
            const url = new URL(window.location);
            url.searchParams.set('plan', type);
            window.history.pushState({}, '', url);
        }
    });
</script>
