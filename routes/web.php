<?php


// Admin Controller
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\adminHomeController;
use App\Http\Controllers\Admin\adminLoginController;
use App\Http\Controllers\Admin\WhyChooseItemsController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminTermController;
use App\Http\Controllers\Admin\AdminPrivacyPageController;
use App\Http\Controllers\Admin\AdminContactPageController;
use App\Http\Controllers\Admin\AdminPackageController;
use App\Http\Controllers\Admin\AdminOtherPageController;
use App\Http\Controllers\Admin\AdminJobLocationController;
use App\Http\Controllers\Admin\AdminJobTypeController;
use App\Http\Controllers\Admin\AdminJobExperienceController;
use App\Http\Controllers\Admin\AdminJobGenderController;
use App\Http\Controllers\Admin\AdminJobSalaryRangeController;
use App\Http\Controllers\Admin\AdminCompanyLocationController;
use App\Http\Controllers\Admin\AdminCompanySizeController;
use App\Http\Controllers\Admin\AdminCompanyIndustryController;
use App\Http\Controllers\Admin\AdminProfileController;




use App\Http\Controllers\HomePageContentController;
use App\Http\Controllers\JobCategoryController;
// Front Controller
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AllJobsController;
use App\Http\Controllers\Front\chooseItemController;
use App\Http\Controllers\Front\PostController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\SignupController;
use App\Http\Controllers\Front\ForgetPasswordController;
use App\Http\Controllers\Front\CompanyController;


Route::get('/admin',[adminHomeController::class,'index'])->name('admin');
Route::get('/login',[adminLoginController::class,'index'])->name('login');
Route::get('/logout',[adminLoginController::class,'logout'])->name('logout');
Route::get('/forgat_password',[adminLoginController::class,'forgat_password'])->name('forgat_password');
Route::post('/admin/forget/password',[adminLoginController::class,'admin_reset_password'])->name('admin_reset_password');
Route::get('/reset/password/{token}/{email}',[adminLoginController::class,'reset_password'])->name('reset_password');
Route::post('/reset/password/submit',[adminLoginController::class,'reset_password_submit'])->name('reset_password_submit');
Route::post('/admin/login_submit',[adminLoginController::class,'admin_login_submit'])->name('admin_login_submit');
Route::get('/admin/logout',[adminLoginController::class,'logout'])->name('logout');


Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile');
Route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');

// Home page
Route::get('/home/page/content',[HomePageContentController::class,'home_page_content'])->name('home_page_content');
Route::post('/home/page/content/update',[HomePageContentController::class,'home_page_content_update'])->name('home_page_content_update');
Route::get('/all/jobs/category',[AllJobsController::class,'index'])->name('all_jobs_category');
Route::get('/all/jobs',[AllJobsController::class,'all_jobs'])->name('all_jobs');



// LoginController
Route::get('front/login',[LoginController::class,'index'])->name('front_login');
Route::post('company/login',[LoginController::class,'company_login'])->name('company_login');
Route::get('company/logout',[LoginController::class,'company_logout'])->name('company_logout');
Route::post('candidate/login',[LoginController::class,'front_candidate_login'])->name('front_candidate_login');


Route::middleware(['company:company'])->group(function () {
    Route::get('company/dashboard',[CompanyController::class,'index'])->name('company_dashboard');
    Route::get('company/profile/edit',[CompanyController::class,'company_profile_edit'])->name('company_profile_edit');
    Route::post('/company/edit-profile/update', [CompanyController::class, 'edit_profile_update'])->name('company_edit_profile_update');

    
    Route::get('/company/make-payment', [CompanyController::class, 'make_payment'])->name('company_make_payment');
    Route::get('/company/orders', [CompanyController::class, 'orders'])->name('company_orders');

    Route::post('/company/paypal/payment', [CompanyController::class, 'paypal'])->name('company_paypal');
    Route::get('/company/paypal/success', [CompanyController::class, 'paypal_success'])->name('company_paypal_success');
    Route::get('/company/paypal/cancel', [CompanyController::class, 'paypal_cancel'])->name('company_paypal_cancel');

    Route::post('/company/stripe/payment', [CompanyController::class, 'stripe'])->name('company_stripe');
    Route::get('/company/stripe/success', [CompanyController::class, 'stripe_success'])->name('company_stripe_success');
    Route::get('/company/stripe/cancel', [CompanyController::class, 'stripe_cancel'])->name('company_stripe_cancel');

    Route::get('/company/photos', [CompanyController::class, 'photos'])->name('company_photos');
    Route::post('/company/photos/submit', [CompanyController::class, 'photos_submit'])->name('company_photos_submit');
    Route::get('/company/photos/delete/{id}', [CompanyController::class, 'photos_delete'])->name('company_photos_delete');

    Route::get('/company/videos', [CompanyController::class, 'videos'])->name('company_videos');
    Route::post('/company/videos/submit', [CompanyController::class, 'videos_submit'])->name('company_videos_submit');
    Route::get('/company/videos/delete/{id}', [CompanyController::class, 'videos_delete'])->name('company_videos_delete');

    Route::get('/company/create-job', [CompanyController::class, 'jobs_create'])->name('company_jobs_create');
    Route::post('/company/create-job-submit', [CompanyController::class, 'jobs_create_submit'])->name('company_jobs_create_submit');

    Route::get('/company/jobs', [CompanyController::class, 'jobs'])->name('company_jobs');
    Route::get('/company/job-edit/{id}', [CompanyController::class, 'jobs_edit'])->name('company_jobs_edit');
    Route::post('/company/job-update/{id}', [CompanyController::class, 'jobs_update'])->name('company_jobs_update');
    Route::get('/company/job-delete/{id}', [CompanyController::class, 'jobs_delete'])->name('company_jobs_delete');

});

// SignupController
Route::get('signup',[SignupController::class,'index'])->name('front_signup');
Route::post('company/signup',[SignupController::class,'company_sign_up'])->name('company_signup_submit');
Route::post('candidate/signup',[SignupController::class,'candidate_sign_up'])->name('candidate_signup_submit');
Route::get('/company/verify/{token}/{email}',[SignupController::class,'company_signup_verify'])->name('company_signup_verify');
Route::get('/candidate_signup_verify/{token}/{email}',[SignupController::class,'candidate_signup_verify'])->name('candidate_signup_verify');
Route::get('candidate/front/reset/password/{token}/{email}',[SignupController::class,'candidate_password_verify'])->name('candidate_password_verify');




// ForgetPasswordController
Route::get('forget/password',[ForgetPasswordController::class,'index'])->name('front_Forget_password');
Route::get('candidate/forget/password',[ForgetPasswordController::class,'front_candidate_Forget_password'])->name('front_candidate_Forget_password');
Route::post('forget/password/submit',[ForgetPasswordController::class,'company_forget_password'])->name('company_forget_password');
Route::get('front/reset/password/{token}/{email}',[ForgetPasswordController::class,'company_forget_password_submit'])->name('company_forget_password_submit');
Route::post('candidate/forget/password/submit',[ForgetPasswordController::class,'candidate_forget_password'])->name('candidate_forget_password');
Route::get('candidate/front/reset/password/{token}/{email}',[ForgetPasswordController::class,'candidate_password_verify'])->name('candidate_password_verify');
Route::post('candidate/forget/password/submit',[ForgetPasswordController::class,'candidate_reset_password_submit'])->name('candidate_reset_password_submit');


Route::middleware(['candidate:candidate'])->group(function() {
    Route::get('/candidate/dashboard', [CandidateController::class, 'dashboard'])->name('candidate_dashboard');
    Route::get('/candidate/edit-profile', [CandidateController::class, 'edit_profile'])->name('candidate_edit_profile');
    Route::post('/candidate/edit-profile/update', [CandidateController::class, 'edit_profile_update'])->name('candidate_edit_profile_update');
    Route::get('/candidate/edit-password', [CandidateController::class, 'edit_password'])->name('candidate_edit_password');
    Route::post('/candidate/edit-password/update', [CandidateController::class, 'edit_password_update'])->name('candidate_edit_password_update');

    Route::get('/candidate/education/view', [CandidateController::class, 'education'])->name('candidate_education');
    Route::get('/candidate/education/create', [CandidateController::class, 'education_create'])->name('candidate_education_create');
    Route::post('/candidate/education/store', [CandidateController::class, 'education_store'])->name('candidate_education_store');
    Route::get('/candidate/education/edit/{id}', [CandidateController::class, 'education_edit'])->name('candidate_education_edit');
    Route::post('/candidate/education/update/{id}', [CandidateController::class, 'education_update'])->name('candidate_education_update');
    Route::get('/candidate/education/delete/{id}', [CandidateController::class, 'education_delete'])->name('candidate_education_delete');

    Route::get('/candidate/skill/view', [CandidateController::class, 'skill'])->name('candidate_skill');
    Route::get('/candidate/skill/create', [CandidateController::class, 'skill_create'])->name('candidate_skill_create');
    Route::post('/candidate/skill/store', [CandidateController::class, 'skill_store'])->name('candidate_skill_store');
    Route::get('/candidate/skill/edit/{id}', [CandidateController::class, 'skill_edit'])->name('candidate_skill_edit');
    Route::post('/candidate/skill/update/{id}', [CandidateController::class, 'skill_update'])->name('candidate_skill_update');
    Route::get('/candidate/skill/delete/{id}', [CandidateController::class, 'skill_delete'])->name('candidate_skill_delete');

    Route::get('/candidate/experience/view', [CandidateController::class, 'experience'])->name('candidate_experience');
    Route::get('/candidate/experience/create', [CandidateController::class, 'experience_create'])->name('candidate_experience_create');
    Route::post('/candidate/experience/store', [CandidateController::class, 'experience_store'])->name('candidate_experience_store');
    Route::get('/candidate/experience/edit/{id}', [CandidateController::class, 'experience_edit'])->name('candidate_experience_edit');
    Route::post('/candidate/experience/update/{id}', [CandidateController::class, 'experience_update'])->name('candidate_experience_update');
    Route::get('/candidate/experience/delete/{id}', [CandidateController::class, 'experience_delete'])->name('candidate_experience_delete');

    Route::get('/candidate/award/view', [CandidateController::class, 'award'])->name('candidate_award');
    Route::get('/candidate/award/create', [CandidateController::class, 'award_create'])->name('candidate_award_create');
    Route::post('/candidate/award/store', [CandidateController::class, 'award_store'])->name('candidate_award_store');
    Route::get('/candidate/award/edit/{id}', [CandidateController::class, 'award_edit'])->name('candidate_award_edit');
    Route::post('/candidate/award/update/{id}', [CandidateController::class, 'award_update'])->name('candidate_award_update');
    Route::get('/candidate/award/delete/{id}', [CandidateController::class, 'award_delete'])->name('candidate_award_delete');

    Route::get('/candidate/resume/view', [CandidateController::class, 'resume'])->name('candidate_resume');
    Route::get('/candidate/resume/create', [CandidateController::class, 'resume_create'])->name('candidate_resume_create');
    Route::post('/candidate/resume/store', [CandidateController::class, 'resume_store'])->name('candidate_resume_store');
    Route::get('/candidate/resume/edit/{id}', [CandidateController::class, 'resume_edit'])->name('candidate_resume_edit');
    Route::post('/candidate/resume/update/{id}', [CandidateController::class, 'resume_update'])->name('candidate_resume_update');
    Route::get('/candidate/resume/delete/{id}', [CandidateController::class, 'resume_delete'])->name('candidate_resume_delete');


    Route::get('/candidate/bookmark-add/{id}', [CandidateController::class, 'bookmark_add'])->name('candidate_bookmark_add');
    Route::get('/candidate/bookmark-view', [CandidateController::class, 'bookmark_view'])->name('candidate_bookmark_view');
    Route::get('/candidate/bookmark-delete/{id}', [CandidateController::class, 'bookmark_delete'])->name('candidate_bookmark_delete');

    Route::get('/candidate/apply/{id}', [CandidateController::class, 'apply'])->name('candidate_apply');
    Route::post('/candidate/apply-submit/{id}', [CandidateController::class, 'apply_submit'])->name('candidate_apply_submit');
    Route::get('/candidate/applications', [CandidateController::class, 'applications'])->name('candidate_applications');

});



// JobCategoryController
Route::prefix('job/')->group(function () {
    Route::get('category',[JobCategoryController::class,'index'])->name('home_job_category');
    Route::get('category/create',[JobCategoryController::class,'create'])->name('home_job_category_create');
    Route::post('category/add',[JobCategoryController::class,'add'])->name('home_job_category_add');
    Route::get('category/edit/{id}',[JobCategoryController::class,'edit'])->name('home_job_category_edit');
    Route::post('category/update/{id}',[JobCategoryController::class,'update'])->name('home_job_category_update');
    Route::get('category/delete/{id}',[JobCategoryController::class,'delete'])->name('home_job_category_delete');
});


// WhyChooseItemsController
Route::prefix('why/')->group(function () {
    Route::get('choose/items',[WhyChooseItemsController::class,'index'])->name('admin_why_choose_items');
    Route::get('choose/items/create',[WhyChooseItemsController::class,'create'])->name('admin_why_choose_items_create');
    Route::post('choose/items/add',[WhyChooseItemsController::class,'add'])->name('admin_why_choose_items_add');
    Route::get('choose/items/edit/{id}',[WhyChooseItemsController::class,'edit'])->name('admin_why_choose_items_edit');
    Route::post('choose/items/update/{id}',[WhyChooseItemsController::class,'update'])->name('admin_why_choose_items_update');
    Route::get('choose/items/delete/{id}',[WhyChooseItemsController::class,'delete'])->name('admin_why_choose_items_delete');
});

// AdminPostController
Route::prefix('post/')->group(function () {
    Route::get('index',[AdminPostController::class,'index'])->name('admin_post');
    Route::get('create',[AdminPostController::class,'create'])->name('admin_post_create');
    Route::post('add',[AdminPostController::class,'add'])->name('admin_post_add');
    Route::get('edit/{id}',[AdminPostController::class,'edit'])->name('admin_post_edit');
    Route::post('update/{id}',[AdminPostController::class,'update'])->name('admin_post_update');
    Route::get('delete/{id}',[AdminPostController::class,'delete'])->name('admin_post_delete');

});

// AdminTermController
Route::prefix('admin/')->group(function () {
    Route::get('term-page', [AdminTermController::class, 'index'])->name('admin_term_page');
    Route::post('term-page/update', [AdminTermController::class, 'update'])->name('admin_term_page_update');

});

// AdminPrivacyPageController
Route::prefix('admin/')->group(function () {
    Route::get('privacy-page', [AdminPrivacyPageController::class, 'index'])->name('admin_privacy_page');
    Route::post('privacy-page/update', [AdminPrivacyPageController::class, 'update'])->name('admin_privacy_page_update');

});

// AdminContactPageController
Route::prefix('admin/')->group(function () {
    Route::get('contact-page', [AdminContactPageController::class, 'index'])->name('admin_contact_page');
    Route::post('contact-page/update', [AdminContactPageController::class, 'update'])->name('admin_contact_page_update');

});


// AdminPackageController
Route::prefix('admin/')->group(function () {
    Route::get('package/view', [AdminPackageController::class, 'index'])->name('admin_package');
    Route::get('package/create', [AdminPackageController::class, 'create'])->name('admin_package_create');
    Route::post('package/store', [AdminPackageController::class, 'store'])->name('admin_package_store');
    Route::get('package/edit/{id}', [AdminPackageController::class, 'edit'])->name('admin_package_edit');
    Route::post('package/update/{id}', [AdminPackageController::class, 'update'])->name('admin_package_update');
    Route::get('package/delete/{id}', [AdminPackageController::class, 'delete'])->name('admin_package_delete');
});

// AdminContactPageController
Route::prefix('admin/')->group(function () {
    Route::get('other-page', [AdminOtherPageController::class, 'index'])->name('admin_other_page');
    Route::post('other-page/update', [AdminOtherPageController::class, 'update'])->name('admin_other_page_update'); 

});

// AdminJobLocationController
Route::prefix('admin/')->group(function () {
    Route::get('job-location/view', [AdminJobLocationController::class, 'index'])->name('admin_job_location');
    Route::get('job-location/create', [AdminJobLocationController::class, 'create'])->name('admin_job_location_create');
    Route::post('job-location/store', [AdminJobLocationController::class, 'store'])->name('admin_job_location_store');
    Route::get('job-location/edit/{id}', [AdminJobLocationController::class, 'edit'])->name('admin_job_location_edit');
    Route::post('job-location/update/{id}', [AdminJobLocationController::class, 'update'])->name('admin_job_location_update');
    Route::get('job-location/delete/{id}', [AdminJobLocationController::class, 'delete'])->name('admin_job_location_delete');
});

// AdminJobTypeController
Route::prefix('admin/')->group(function () {
    Route::get('job-type/view', [AdminJobTypeController::class, 'index'])->name('admin_job_type');
    Route::get('job-type/create', [AdminJobTypeController::class, 'create'])->name('admin_job_type_create');
    Route::post('job-type/store', [AdminJobTypeController::class, 'store'])->name('admin_job_type_store');
    Route::get('job-type/edit/{id}', [AdminJobTypeController::class, 'edit'])->name('admin_job_type_edit');
    Route::post('job-type/update/{id}', [AdminJobTypeController::class, 'update'])->name('admin_job_type_update');
    Route::get('job-type/delete/{id}', [AdminJobTypeController::class, 'delete'])->name('admin_job_type_delete');

});

// AdminJobExperienceController
Route::prefix('admin/')->group(function () {
    Route::get('job-experience/view', [AdminJobExperienceController::class, 'index'])->name('admin_job_experience');
    Route::get('job-experience/create', [AdminJobExperienceController::class, 'create'])->name('admin_job_experience_create');
    Route::post('job-experience/store', [AdminJobExperienceController::class, 'store'])->name('admin_job_experience_store');
    Route::get('job-experience/edit/{id}', [AdminJobExperienceController::class, 'edit'])->name('admin_job_experience_edit');
    Route::post('job-experience/update/{id}', [AdminJobExperienceController::class, 'update'])->name('admin_job_experience_update');
    Route::get('job-experience/delete/{id}', [AdminJobExperienceController::class, 'delete'])->name('admin_job_experience_delete');

});

// AdminJobGenderController
Route::prefix('admin/')->group(function () {
    Route::get('job-gender/view', [AdminJobGenderController::class, 'index'])->name('admin_job_gender');
    Route::get('job-gender/create', [AdminJobGenderController::class, 'create'])->name('admin_job_gender_create');
    Route::post('job-gender/store', [AdminJobGenderController::class, 'store'])->name('admin_job_gender_store');
    Route::get('job-gender/edit/{id}', [AdminJobGenderController::class, 'edit'])->name('admin_job_gender_edit');
    Route::post('job-gender/update/{id}', [AdminJobGenderController::class, 'update'])->name('admin_job_gender_update');
    Route::get('job-gender/delete/{id}', [AdminJobGenderController::class, 'delete'])->name('admin_job_gender_delete');

});

// AdminJobSalaryRangeController
Route::prefix('admin/')->group(function () {
    Route::get('job-salary-range/view', [AdminJobSalaryRangeController::class, 'index'])->name('admin_job_salary_range');
    Route::get('job-salary-range/create', [AdminJobSalaryRangeController::class, 'create'])->name('admin_job_salary_range_create');
    Route::post('job-salary-range/store', [AdminJobSalaryRangeController::class, 'store'])->name('admin_job_salary_range_store');
    Route::get('job-salary-range/edit/{id}', [AdminJobSalaryRangeController::class, 'edit'])->name('admin_job_salary_range_edit');
    Route::post('job-salary-range/update/{id}', [AdminJobSalaryRangeController::class, 'update'])->name('admin_job_salary_range_update');
    Route::get('job-salary-range/delete/{id}', [AdminJobSalaryRangeController::class, 'delete'])->name('admin_job_salary_range_delete');

});

// AdminCompanyLocationController
Route::prefix('admin/')->group(function () {
    Route::get('company-location/view', [AdminCompanyLocationController::class, 'index'])->name('admin_company_location');
    Route::get('company-location/create', [AdminCompanyLocationController::class, 'create'])->name('admin_company_location_create');
    Route::post('company-location/store', [AdminCompanyLocationController::class, 'store'])->name('admin_company_location_store');
    Route::get('company-location/edit/{id}', [AdminCompanyLocationController::class, 'edit'])->name('admin_company_location_edit');
    Route::post('company-location/update/{id}', [AdminCompanyLocationController::class, 'update'])->name('admin_company_location_update');
    Route::get('company-location/delete/{id}', [AdminCompanyLocationController::class, 'delete'])->name('admin_company_location_delete');

});

    // AdminCompanySizeController
Route::prefix('admin/')->group(function () {
    Route::get('company-size/view', [AdminCompanySizeController::class, 'index'])->name('admin_company_size');
    Route::get('company-size/create', [AdminCompanySizeController::class, 'create'])->name('admin_company_size_create');
    Route::post('company-size/store', [AdminCompanySizeController::class, 'store'])->name('admin_company_size_store');
    Route::get('company-size/edit/{id}', [AdminCompanySizeController::class, 'edit'])->name('admin_company_size_edit');
    Route::post('company-size/update/{id}', [AdminCompanySizeController::class, 'update'])->name('admin_company_size_update');
    Route::get('company-size/delete/{id}', [AdminCompanySizeController::class, 'delete'])->name('admin_company_size_delete');

});


// AdminCompanyIndustryController
Route::prefix('admin/')->group(function () {
    Route::get('company-industry/view', [AdminCompanyIndustryController::class, 'index'])->name('admin_company_industry');
    Route::get('company-industry/create', [AdminCompanyIndustryController::class, 'create'])->name('admin_company_industry_create');
    Route::post('company-industry/store', [AdminCompanyIndustryController::class, 'store'])->name('admin_company_industry_store');
    Route::get('company-industry/edit/{id}', [AdminCompanyIndustryController::class, 'edit'])->name('admin_company_industry_edit');
    Route::post('company-industry/update/{id}', [AdminCompanyIndustryController::class, 'update'])->name('admin_company_industry_update');
    Route::get('company-industry/delete/{id}', [AdminCompanyIndustryController::class, 'delete'])->name('admin_company_industry_delete');

});

    
// php artisan make:controller Admin/AdminJobSalaryRangeController











































Route::get('details/{id}',[PostController::class,'details'])->name('admin_post_details');
Route::get('all/blogs',[PostController::class,'index'])->name('blogs');
Route::get('job/location',[JobCategoryController::class,'home_job_location'])->name('home_job_location');






// Front Controller

Route::get('/',[HomeController::class,'index']);


Route::get('/jobs',[HomeController::class,'jobs'])->name('jobs');

Route::get('/companies',[HomeController::class,'companies'])->name('companies');

Route::get('/pricing',[HomeController::class,'pricing'])->name('pricing');

Route::get('/FAQ',[HomeController::class,'FAQ'])->name('FAQ');

Route::get('/blog',[HomeController::class,'blog'])->name('blog');

Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::get('/term',[HomeController::class,'term'])->name('term');

Route::get('/privacy',[HomeController::class,'privacy'])->name('privacy');

Route::get('/contact',[HomeController::class,'contact'])->name('contact');