@extends('layouts.enroll.layout')

@section('is-courses-nav', 'active')

@section('content')
    <div class="main-body">
        {{ \Diglactic\Breadcrumbs\Breadcrumbs::render('enroll', $courseTag) }}

        @includeWhen(isset($errors), 'partials.errors')
        @includeWhen(session()->has('messages'), 'partials.alerts')

        <div id="smartwizard">
            <ul class="nav list-inline">
                <li class="nav-item">
                    <a class="nav-link" href="#step-1" data-step="1">
                        <span class="d-none d-md-block">Sandbox</span>
                        <i class="fa-solid fa-box d-block d-sm-block d-md-none"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#step-2" data-step="2">
                        <span class="d-none d-md-block">Start your journey</span>
                        <i class="fa fa-play d-block d-sm-block d-md-none"></i>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                    <p class="text-center">Checking your sandbox status ...</p>
                </div>
                <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2"></div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2021-2022 - weblabs.app</p>
    </footer>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){

            let wizard = $('#smartwizard');
            loader('show');

            wizard.on("stepContent", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
                let step = anchorObject.data('step');
                let ajaxURL = "{{ get_route('web.enrollStep', ['courseTag' => $courseTag, 'step' => ':step']) }}";
                ajaxURL = ajaxURL.replace(':step', step);

                // Return a promise object
                return new Promise((resolve, reject) => {

                    // Ajax call to fetch your content
                    $.ajax({
                        method  : "GET",
                        url     : ajaxURL,
                        beforeSend: function( xhr ) {
                            // Show the loader
                            wizard.smartWizard("loader", "show");
                        },
                        complete: function (response, status) {
                            if (status === "abort") {
                                return false;
                            }
                            // Resolve the Promise with the tab content
                            resolve(response);

                            // Hide the loader
                            wizard.smartWizard("loader", "hide");
                            loader('hide');
                        },
                        error: function (xhr, call = false) {
                            if (call !== true) {
                                return;
                            }
                            // Reject the Promise with error message to show as tab content
                            reject( "An error loading the resource" );

                            // Hide the loader
                            wizard.smartWizard("loader", "hide");

                            return {
                                message: translate(...getErrorFromResponse(xhr)),
                                status: TOAST_STATUS.DANGER
                            }
                        }
                    });

                });
            });

            wizard.on("showStep", function(e, anchorObject) {
                $(anchorObject).find('span').addClass('font-weight-bold');
            });

            wizard.on("leaveStep", function(e, anchorObject, currentStepIndex, nextStepIndex) {
                $(anchorObject).find('span').removeClass('font-weight-bold');

                if(anchorObject.prevObject.length - 1 === nextStepIndex){
                    $('#start-course').removeClass('disabled').bind('click');
                }else{
                    $('#start-course').addClass('disabled').unbind('click');
                }
            });

            // SmartWizard initialize
            ((wizard) => {
                if (window.history) {
                    window.history.pushState('', document.title, window.location.href.replace(window.location.hash, ''));
                } else {
                    window.location.hash = '';
                }

                let btnFinish = $('<a></a>').text('Start learning')
                    .attr('id', 'start-course')
                    .addClass('btn btn-info disabled')
                    .attr('href', 'javascript:continueLearning(\'{{ $courseTag }}\', \'{{ $lastLessonTag }}\')')
                    .unbind('click');

                wizard.smartWizard({
                    autoAdjustHeight: true,
                    theme: 'default',
                    toolbarSettings: {
                        toolbarPosition: 'bottom',
                        toolbarExtraButtons: [btnFinish]
                    },
                    transition: {
                        animation: 'fade', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
                        speed: '400',
                    },
                });
            })(wizard);
        });
    </script>
@endpush
