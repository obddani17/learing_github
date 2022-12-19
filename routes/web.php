<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gethodteacher;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\posthodsubjects;
use App\Http\Controllers\forgetcontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\adminpagecontroller;
use App\Http\Controllers\Addstudentcontroller;
use App\Http\Controllers\Addteachercontroller;
use App\Http\Controllers\subject_teacher_controller;
use App\Http\Controllers\get_teacher_to_suddent_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/t', function () {
    //     return view('teacher_page');
    // });
    #########################begin teacher page################################## 
    
    Route::get('/tr', function () {
        return view('teacherpages/Teacher_recoeding');
    });
    Route::post('ts',[get_teacher_to_suddent_controller::class, 'index'])->name('getstudent');
    Route::post('ty',[get_teacher_to_suddent_controller::class, 'indexx'])->name('postresult');
    Route::get('/t', function () {
        return view('teacherpages/teacher_page1');
    });

    Route::post('t',[get_teacher_to_suddent_controller::class, 'veiwss'])->name('get_student');
    #########################end teacher page################################## 
// Route::get('/ss', function () {
//     return view('secretary-add-student');
// });

// Route::get('/s', function () {
    //     return view('secretarypages/secretary');
    // });
    ############################## begin secretaries page#########################
    // Route::group(['middleware' => 'checkAuth'],function(){


        Route::get('/ss',[Addstudentcontroller::class, 'index']);
        Route::post('ss',[Addstudentcontroller::class, 'addstud'])->name('addstudent');
        Route::get('/s',[Addteachercontroller::class, 'index'])->middleware('checkAuth');
        Route::post('s',[Addteachercontroller::class, 'addteach'])->name('addteacher');
    // });
    
    ############################## end secretaries page#########################
// Route::get('/scc', function () {
//     return view('secretarypages/secretary_record');
// });

// Route::get('/sas', function () {
//     return view('secretarypages/secretary-add-student');
// });

Route::get('/sc', function () {
    return view('studentpages/student_complaint');
});

Route::get('/sr', function () {
    return view('studentpages/student_result');
});



// Route::post('hod_a_su',[posthodsubjects::class, 'addsubject'])->name('addsubject');
// Route::get('/ss',[Addstudentcontroller::class, 'addstud']);
################# bigns HOD page ###########################

Route::get('/hod_a_t',[gethodteacher::class, 'index']);

// Route::get('/hod_a_t', function () {
    //     return view('HOD/HOD-add-teacher');
    // });
    Route::get('/hod_a_j',[subject_teacher_controller::class, 'index']);
    Route::post('hod_a_j',[subject_teacher_controller::class, 'indexx'])->name('addsubject_teacher');
    // Route::get('/hod_a_j', function () {
    //     return view('HOD/HOD-add-jusitfiy');
    // });
    // Route::get('/hod_a_s', function () {
    //     return view('HOD/HOD-add-subject');
    // });
    // Route::get('/hod_a', function () {
    //     return view('HOD/dd');
    // });
    // Route::post('hod_a',[posthodsubjects::class, 'indexx'])->name('addsubject');
    
    Route::get('/hod_a_su',[posthodsubjects::class, 'index']);
    Route::post('hod_a_su',[posthodsubjects::class, 'indexx'])->name('addsubject');
//     Route::get('/hod_a_su', function () {
//         return view('HOD/HOD-add-subjectes');
// });
Route::get('/hod_r', function () {
    return view('HOD/HOD-Result');
});
Route::get('/hod', function () {
    return view('HOD/HOD');
});
################# end  HOD page ###########################
######################begin recording page##########################
Route::get('/rec_c_m', function () {
    return view('RECORD/committee_add-marks');
});
Route::get('/rec_c_r', function () {
    return view('RECORD/committee_record');
});
Route::get('/rec_c_arc', function () {
    return view('RECORD/complaint-of-ARC');
});
Route::get('/rec_c_chm', function () {
    return view('RECORD/complaint-of-CHM');
});
Route::get('/rec_c_com', function () {
    return view('RECORD/complaint-of-COM');
});
Route::get('/rec_c_cvl', function () {
    return view('RECORD/complaint-of-CVL');
});
Route::get('/rec_c_elc', function () {
    return view('RECORD/complaint-of-ELC');
});
Route::get('/rec_c_ptl', function () {
    return view('RECORD/complaint-of-PTL');
});




######################end recording page##########################

######################### begin admin page############################
Route::get('/admin_h', function () {
    return view('ADMIN/Home');
});

// Route::get('/admin_i_h', function () {
//     return view('ADMIN/Insert-HOD');
// });
Route::get('/admin_i_h',[adminpagecontroller::class, 'gethod']);
Route::post('/admin_i_h',[adminpagecontroller::class, 'addHOD'])->name('addHODs');

Route::get('/admin_i_s', function () {
    return view('ADMIN/Insert-Student');
});
Route::get('/admin_i_t_r', function () {
    return view('ADMIN/Insert-Teacher-recording');
});

Route::get('/admin_i_t', function () {
    return view('ADMIN/Insert-Teacher');
});
Route::get('/admin_i_t',[adminpagecontroller::class, 'getteacher']);
Route::post('/admin_i_t',[adminpagecontroller::class, 'addteacher'])->name('addteachers');

Route::get('/admin_p_s', function () {
    return view('ADMIN/profile-settings');
});
Route::get('/admin_r', function () {
    return view('ADMIN/Results');
});
Route::post('/admin_t',[adminpagecontroller::class, 'updateteacher'])->name('updateteachers');
Route::get('/admin_t',[adminpagecontroller::class, 'index']);

// Route::get('/admin_t', function () {
//     return view('ADMIN/Teacher');
// });
Route::get('/admin_v', function () {
    return view('ADMIN/Vaildation');
});

######################### end admin page############################
######################### begin login page############################
Route::get('/', function () {
    return view('LOGIN/index');
});
// Route::get('/w', function () {
//     return view('mail');
// });
Route::get('/w',[homecontroller::class, 'index']);
Route::post('/',[logincontroller::class, 'index'])->name('login');


Route::post('/new',[registercontroller::class, 'regester'])->name('new_register');
Route::post('/wen',[registercontroller::class, 'index'])->name('register');
Route::post('restart_p',[registercontroller::class, 'checknumber'])->name('check');
Route::post('forget',[forgetcontroller::class, 'indexxx'])->name('forgget');

Route::get('/forget', function () {
    return view('LOGIN/forget');
});
Route::get('/register', function () {
    return view('LOGIN/new_register');
});

Route::get('/new', function () {
    return view('LOGIN/new_password');
});

Route::get('/restart_p', function () {
    return view('LOGIN/restart_password');
});

// Route::get('/admin_v', function () {
//     return view('LOGIN/Vaildation');
// });





######################### end admin page############################
