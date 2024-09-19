<?php

namespace App\Http\Controllers;

use App\Models\GradingStudent;
use Illuminate\Http\Request;
use Exception;

class PartnerController extends Controller
{
    public function index()
    {
        try {
            $hasPending = GradingStudent::where('status', 'UNVERIFIED')->exists();
            $dataGrade = GradingStudent::with('user', 'm_partner')->get();
            return view('pages.partner.index', [
                'students' => $dataGrade,
                'hasPending' => $hasPending,
            ]);
        } catch (Exception $error) {
            // return view('pages.company.index')->withErrors($error->getMessage());
        }
    }

    // public function storeNote(Request $request)
    // {
    //     // Validasi input
    //     $validated = $request->validate([
    //         'id' => 'required|exists:grading_student,id',
    //         'note' => 'nullable|string|max:255',
    //     ]);

    //     // dd($validated);

    //     try {
    //         // Temukan data student berdasarkan ID
    //         $student = GradingStudent::find($validated['id']);

    //         // Update atau tambahkan catatan note
    //         $student->note = $validated['note'];
    //         $student->save();

    //         if(is_null($student->note)){
    //         return redirect()->route('getStudentPartner')->with('success', 'Anda menghapus atau mengosongkan catatan');

    //         }

    //         // Redirect ke halaman index dengan pesan sukses
    //         return redirect()->route('getStudentPartner')->with('success', 'Catatan berhasil disimpan');
    //     } catch (Exception $error) {
    //         // return redirect()->route('getStudentPartner')->with('error', $error->getMessage());
    //     }
    // }


    public function storeNote(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'id' => 'required|exists:grading_student,id',
            'note' => 'nullable|string|max:255',
            'textarea-value' => 'nullable|string'
        ]);

        try {
            // Temukan data student berdasarkan ID
            $student = GradingStudent::find($validated['id']);

            // Periksa jika note kosong
            if (empty($validated['note']) && !empty($validated['textarea-value'])) {
                // Hapus catatan dari database
                $student->note = null;
                $student->status = 'PENDING';
                $student->save();

                // Redirect ke halaman index dengan pesan sukses
                return redirect()->route('getStudentPartner')->with('success', 'Anda menghapus catatan');
            } else if (empty($validated['note'])) {
                return redirect()->route('getStudentPartner')->with('error', 'Anda belum mengisi catatan');
            } else {
                // Update atau tambahkan catatan note
                $student->note = $validated['note'];
                $student->status = 'UNVERIFIED';
                $student->save();

                // Redirect ke halaman index dengan pesan sukses
                return redirect()->route('getStudentPartner')->with('success', 'Catatan berhasil disimpan');
            }
        } catch (Exception $error) {
            // Tangani kesalahan jika terjadi
            return redirect()->route('getStudentPartner')->with('error', $error->getMessage());
        }
    }

    public function verifyAllStudents(Request $request)
    {
        try {
            // Mengubah status semua student menjadi 'verified'
            GradingStudent::query()->update(['status' => 'verified']);

            return redirect()->route('getStudentPartner')->with('success', 'Semua data telah berhasil diverifikasi.');
        } catch (Exception $error) {
            return redirect()->route('getStudentPartner')->with('error', 'Terjadi kesalahan saat verifikasi.');
        }
    }
}
