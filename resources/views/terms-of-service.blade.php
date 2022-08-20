@extends('layouts.terms-of-service.layout')

@section('body')
    <div class="row text-center overflow-hidden">
        <div class=" col-md-12 m-auto">
            <img class="mb-4" src="{{ asset('images/code_64.png') }}" alt="" width="72" height="72">
        </div>
        <div class="col-md-12 pr-5 pl-5">
            <div class="card">
                <div class="card-header">
                    Terms of Service
                </div>
                <div class="card-body">
                    <div class="text-left mt-3">
                        <h3>Website Terms and Conditions of Use</h3>
                        <h4>1. Terms</h4>
                        <p>By accessing this Website, accessible from https://weblabs.app, you are agreeing to be bound by these Website Terms and Conditions of Use and agree that you are responsible for the agreement with any applicable local laws. If you disagree with any of these terms, you are prohibited from accessing this site. The materials contained in this Website are protected by copyright and trade mark law.</p>
                        <h4>2. Use License</h4>
                        <p>Permission is granted to temporarily download one copy of the materials on Web Labs's Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>
                        <ul>
                            <li>modify or copy the materials;</li>
                            <li>use the materials for any commercial purpose or for any public display;</li>
                            <li>attempt to reverse engineer any software contained on Web Labs's Website;</li>
                            <li>remove any copyright or other proprietary notations from the materials; or</li>
                            <li>transferring the materials to another person or "mirror" the materials on any other server.</li>
                        </ul>
                        <p>This will let Web Labs to terminate upon any violations of these restrictions. Upon termination, your viewing right will also be terminated and you should destroy any downloaded materials in your possession whether it is printed or electronic format.</p>
                        <h4>3. Disclaimer</h4>
                        <p>All the materials on Web Labs’s Website are provided "as is". Web Labs makes no warranties, may it be expressed or implied, therefore negates all other warranties. Furthermore, Web Labs does not make any representations concerning the accuracy or reliability of the use of the materials on its Website or otherwise relating to such materials or any sites linked to this Website.</p>
                        <h4>4. Limitations</h4>
                        <p>Web Labs or its suppliers will not be hold accountable for any damages that will arise with the use or inability to use the materials on Web Labs’s Website, even if Web Labs or an authorize representative of this Website has been notified, orally or written, of the possibility of such damage. Some jurisdiction does not allow limitations on implied warranties or limitations of liability for incidental damages, these limitations may not apply to you.</p>
                        <h4>5. Revisions and Errata</h4>
                        <p>The materials appearing on Web Labs’s Website may include technical, typographical, or photographic errors. Web Labs will not promise that any of the materials in this Website are accurate, complete, or current. Web Labs may change the materials contained on its Website at any time without notice. Web Labs does not make any commitment to update the materials.</p>
                        <h4>6. Links</h4>
                        <p>Web Labs has not reviewed all the sites linked to its Website and is not responsible for the contents of any such linked site. The presence of any link does not imply endorsement by Web Labs of the site. The use of any linked website is at the user’s own risk.</p>
                        <h4>7. Site Terms of Use Modifications</h4>
                        <p>Web Labs may revise these Terms of Use for its Website at any time without prior notice. By using this Website, you are agreeing to be bound by the current version of these Terms and Conditions of Use.</p>
                        <h4>8. Your Privacy</h4>
                        <p>Please read our <a href="{{ get_route('web.privacyPage') }}">Privacy Policy</a>.</p>
                        <h4>9. Governing Law</h4>
                        <p>Any claim related to Web Labs's Website shall be governed by the laws of Jordan without regards to its conflict of law provisions.</p>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <a class="btn btn-secondary" href="{{ get_route('web.homePage') }}">Go Home</a>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2022-2023 - weblabs.app</p>
    </footer>
@endsection