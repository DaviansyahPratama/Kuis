<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    public function index()
    {
        // Data pegawai
        $name = "Daviansyah Pratama";
        $birthDate = Carbon::create(2006,4, 18);
        $tgl_harus_wisuda = Carbon::create(2027, 7, 20);

        // Hitung umur
        $my_age = $birthDate->age;

        // Hobi minimal 5 item
        $hobbies = ["Mandi", "Makan", "Main Gitar", "Nyannyi", "Gaming"];

        // Hitung jarak hari ke wisuda
        $time_to_study_left = now()->diffInDays($tgl_harus_wisuda, false);

        // Semester
        $current_semester = 3;

        // Pesan motivasi
        $message = $current_semester < 3
            ? "Yang Penting Jangan lupa minum "
            : "Sama jangan lupa makan";

        // Cita-cita
        $future_goal = "Menjadi Engineer";

        // Kirim data ke view
        return view('pegawai', [
            'name' => $name,
            'my_age' => $my_age,
            'hobbies' => $hobbies,
            'tgl_harus_wisuda' => $tgl_harus_wisuda->toDateString(),
            'time_to_study_left' => $time_to_study_left,
            'current_semester' => $current_semester,
            'message' => $message,
            'future_goal' => $future_goal
        ]);
    }
}
