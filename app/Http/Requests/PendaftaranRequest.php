<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendaftaranRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_murid' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pendaftaran',
            'tanggal_lahir' => 'required|date',
            'nomor_telepon_rumah' => 'required|string|max:15',
            'nama_orang_tua_wali' => 'required|string|max:255',
            'pekerjaan_orang_tua' => 'required|string|max:255',
            'Pendidikan_terakhir' => 'required|string|max:255',
            // 'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'dojo_terakhir' => 'nullable|string|max:255',
            'sabuk_terakhir' => 'nullable|string|in:belum_pernah,putih,kuning,hijau,biru,coklat,hitam',
            'perguruan' => 'nullable|string|max:255'
        ];
    }

    public function attributes()
    {
        return [
            'nama_murid' => 'nama',
            'email' => 'email',
            'tanggal_lahir' => 'Tanggal Lahir',
            'nomor_telepon_rumah' => 'Nomor Telepon',
            'nama_orang_tua_wali' => 'Nama Orang Tua/Wali',
            'pekerjaan_orang_tua' => 'Pekerjaan Orang Tua/Wali',
            'Pendidikan_terakhir' => 'Pendidikan Terakhir',
            'dojo_terakhir' => 'Asal Dojo',
            'sabuk_terakhir' => 'Sabuk/Kyu Terakhir',
            'perguruan' => 'Asal Perguruan'
        ];
    }
}
