<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class SurveyController extends Controller
{
    public function submitForm(Request $request) {
        try {
            $request->validate([
                "student_name" => "required | string",
                "student_email" => "required | string",
                "student_phone" => "required | string",
                "feedback" => "required",
            ]);
            $dataSurvey = Survey::create([
                "student_name" => $request->get("student_name"),
                "student_email" => $request->get("student_email"),
                "student_phone" => $request->get("student_phone"),
                "feedback" => $request->get("feedback"),
            ]);
            Session::put("message", "Bạn đã gửi thông tin khảo sát thành công !!");
        } catch (\Exception $exception) {
            Session::put("errorMessage", "Có lỗi trong quá trình gửi thông tin khảo sát, vui lòng thử lại !!");
        }
        return redirect()->back();
    }
}
