<div class="row p-md-3">
        @switch($step)
                @case(1)
                @include('enroll-steps.step-sandbox')
                @break
                @case(2)
                @include('enroll-steps.step-start-journey')
                @break
                @case(3)
                <h1>Step 3</h1>
                @break
                @default
                <h1>Unknown</h1>
                @break
        @endswitch
</div>
