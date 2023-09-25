@extends('backend.mastaring.master')
@section('user.index','active')
@section('menu','menu-open')
@section('content')
<div class="card"> 
      <h3 class="p-3">Your Survey Report</h3><hr>
    <div class="card-body"> 
        <p class="text-bold m-0">1. Are you married?</p>
        <p class="ml-3">Answer: {{@$data->registerSurvey->married}}</p>

        <p class="text-bold m-0">2. Do you have children under the age of 21?</p>
        <p class="ml-3">Answer: {{@$data->registerSurvey->children}}</p>

        <p class="text-bold m-0">3. Do you have children 21 years of age or older?</p>
        <p class="ml-3">Answer: {{@$data->registerSurvey->children1}}</p>

        <p class="text-bold m-0">4. Do you have any family in the U.S.?</p>
        <p class="ml-3">Answer: {{@$data->registerSurvey->family}}</p>

        <p class="text-bold m-0">5. Have you ever lived in the U.S.?</p>
        <p class="ml-3">Answer: {{@$data->registerSurvey->lived}}</p>

        <p class="text-bold m-0">6. Have you already applied for an immigrant visa?</p>
        <p class="ml-3">Answer: {{@$data->registerSurvey->visa}}</p>

        <p class="text-bold m-0">7. Have you submitted a form l-485 to acquire a Green Card?</p>
        <p class="ml-3">Answer: {{@$data->registerSurvey->green}}</p>

        <p class="text-bold m-0">8. Have you ever been barred from entering the U.S.?</p>
        <p class="ml-3">Answer: {{@$data->registerSurvey->entearing}}</p>

        <p class="text-bold m-0">9. Do you have any past or outstareIng immigration issues with the U.S</p>
        <p class="ml-3">Answer: {{@$data->registerSurvey->removal}}</p>

        <p class="text-bold m-0">10. Have you entered or attempted to enter the U.S. illegally?</p>
        <p class="ml-3">Answer: {{@$data->registerSurvey->illegally}}</p>

        <p class="text-bold m-0">11. Were you ever removed from the U.S. under any legal order?</p>
        <p class="ml-3">Answer: {{@$data->registerSurvey->remove}}</p>
 
        <p class="text-bold m-0">12. Have you ever renounced U.S. citizenship?</p>
        <p class="ml-3">Answer: {{@$data->registerSurvey->citizen}}</p>

        <p class="text-bold m-0">13. Have you ever participated in any criminal activity or enterprise?</p>
        <p class="ml-3">Answer: {{@$data->registerSurvey->criminal}}</p>

        <p class="text-bold m-0">14. Do you intend on engaging any criminal activity or enterprise in the U.S.?</p>
        <p class="ml-3">Answer: {{@$data->registerSurvey->enterprise}}</p>

        <p class="text-bold m-0">15. Do you intend to engage in any activity against the U.S. or U.S. allies?</p>
        <p class="ml-3">Answer: {{@$data->registerSurvey->engage}}</p>
    </div> 
</div>
@endsection 
 