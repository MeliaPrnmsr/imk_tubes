// ADMIN
// ADMIN
// ADMIN


//admin_detailpendaftaran
const inputNamaPendaftar = document.getElementById("nama_pendaftar");
const validasiInputNamaPendaftar = document.getElementById("validasi-nama-pendaftar");
const regexInputNamaPendaftar = /^[A-Za-z\s.]+$/;

const inputPasswordPendaftar = document.getElementById("password");
const validasiInputPasswordPendaftar = document.getElementById("validasi-password");
const regexInputPasswordPendaftar = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d_]{8,}$/;

const inputNoTelpPendaftar = document.getElementById("no_telp_rumah");
const validasiInputNoTelpPendaftar = document.getElementById("validasi-no-telp");
const regexInputNoTelpPendaftar= new RegExp ("^08\\d{10}$");

const inputPekerjaanOrtu = document.getElementById("pekerjaan_orang_tua");
const validasiInputPekerjaanOrtu = document.getElementById("validasi-pekerjaan-ortu");
const regexInputPekerjaanOrtu= /^[A-Za-z\s-]+$/;

const inputPendidikanTerakhir = document.getElementById("pendidikan_terakhir");
const validasiInputPendidikanTerakhir = document.getElementById("validasi-pendidikan-terakhir");
const regexInputPendidikanTerakhir = /^(TK|SD|SMP|SMA|SMK|D3|D4|S1|S2|S3)$/i;

const inputEmailPendaftar = document.getElementById("email_pendaftar");
const validasiInputEmailPendaftar = document.getElementById("validasi-email-pendaftar");
const regexInputEmailPendaftar= new RegExp (/^\S+@\S+\.\S+$/);

//admin_tambahinformasi
const inputJudulInformasi = document.getElementById("nama_informasi");
const validasiInputJudulInformasi = document.getElementById("validasi-nama-informasi");
const regexInputJudulInformasi = /^.{1,100}$/;

const inputDeskripsiInformasi = document.getElementById("deskripsi_informasi");
const validasiInputDeskripsiInformasi = document.getElementById("validasi-deskripsi-informasi");
const regexInputDeskripsiInformasi = /^.{1,3000}$/;

//admin_tambahmurid
const inputNamaMurid = document.getElementById("nama_murid");
const validasiInputNamaMurid = document.getElementById("validasi-nama-murid");
const regexInputNamaMurid = /^[A-Za-z\s.]+$/;

const inputNoTelpMurid = document.getElementById("no_telp");
const validasiInputNoTelpMurid = document.getElementById("validasi-no-telp-murid");
const regexInputNoTelpMurid = new RegExp ("^08\\d{10}$");

const inputAlamatMurid = document.getElementById("alamat_murid");
const validasiInputAlamatMurid = document.getElementById("validasi-alamat-murid");
const regexInputAlamatMurid = /^.{1,255}$/;

//admin_tambahdojo (done)
const inputNamaDojo = document.getElementById("nama_dojo");
const validasiInputNamaDojo = document.getElementById("validasi-nama-dojo");
const regexInputNamaDojo = /^[A-Za-z\s.]+$/;

const inputAlamatDojo = document.getElementById("alamat_dojo");
const validasiInputAlamatDojo = document.getElementById("validasi-alamat-dojo");
const regexInputAlamatDojo = /^.{1,255}$/;

//admin_editjadwal
const inputCatatanJadwal = document.getElementById("catatan_jadwal");
const validasiInputCatatanJadwal = document.getElementById("validasi-catatan-jadwal");
const regexInputCatatanJadwal = /^.{1,255}$/;

const inputTempatJadwal = document.getElementById("tempat_jadwal");
const validasiInputTempatJadwal = document.getElementById("validasi-tempat-jadwal");
const regexInputTempatJadwal = /^.{1,255}$/;

//admin_tambahmateri
const inputJudulMateri = document.getElementById("judul_materi");
const validasiInputJudulMateri = document.getElementById("validasi-judul-materi");
const regexInputJudulMateri = /^.{1,100}$/;

const inputJudulsubMateri = document.getElementById("judul_sub_materi");
const validasiInputJudulsubMateri = document.getElementById("validasi-judul-submateri");
const regexInputJudulsubMateri = /^.{1,100}$/;

const inputDeskripsiMateri = document.getElementById("deskripsi_materi");
const validasiInputDeskripsiMateri = document.getElementById("validasi-deskripsi-materi");
const regexInputDeskripsiMateri = /^.{1,3000}$/;

//admin_tambahpelatih
const inputNamaPelatih = document.getElementById("nama_pelatih");
const validasiInputNamaPelatih = document.getElementById("validasi-nama-pelatih");
const regexInputNamaPelatih = /^[A-Za-z\s.]+$/;

const inputPasswordPelatih = document.getElementById("password_pelatih");
const validasiInputPasswordPelatih = document.getElementById("validasi-password-pelatih");
const regexInputPasswordPelatih = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d_]{8,}$/;

const inputNoTelpPelatih = document.getElementById("no_telp_pelatih");
const validasiInputNoTelpPelatih = document.getElementById("validasi-no-telp");
const regexInputNoTelpPelatih= new RegExp ("^08\\d{10}$");

const inputEmailPelatih = document.getElementById("email_pelatih");
const validasiInputEmailPelatih = document.getElementById("validasi-email_pelatih");
const regexInputEmailPelatih = new RegExp (/^\S+@\S+\.\S+$/); 

const inputAlamatPelatih = document.getElementById("alamat_pelatih");
const validasiInputAlamatPelatih = document.getElementById("validasi-alamat-pelatih");
const regexInputAlamatPelatih = /^.{1,255}$/;

//admin_tambahjadwal
const inputTambahCatatan = document.getElementById("tambah_catatan");
const validasiInputTambahCatatan = document.getElementById("validasi-catatan-tambah-jadwal");
const regexInputTambahCatatan = /^.{1,255}$/;

const inputTempatLatihan = document.getElementById("tempat_latihan");
const validasiInputTempatLatihan = document.getElementById("validasi-tempat-latihan");
const regexInputTempatLatihan = /^.{1,255}$/;

//admin_editmurid
const inputEditMurid_nama = document.getElementById("nama_editmurid");
const validasiInputEditMurid_nama = document.getElementById("validasi-nama-editmurid");
const regexInputEditMurid_nama = /^[A-Za-z\s.]+$/;

const inputEditMurid_NoTelp = document.getElementById("no_telp_editmurid");
const validasiInputEditMurid_NoTelp = document.getElementById("validasi-no-telp-editmurid");
const regexInputEditMurid_NoTelp= new RegExp ("^08\\d{10}$");

const inputEditMurid_namaOrtu = document.getElementById("nama_ortu");
const validasiInputEditMurid_namaOrtu = document.getElementById("validasi-nama-ortu");
const regexInputEditMurid_namaOrtu = /^[A-Za-z\s.]+$/;

//admin_editpelatih
const inputEditPelatih_nama = document.getElementById("nama_editpelatih");
const validasiInputEditPelatih_nama = document.getElementById("validasi-nama-editpelatih");
const regexInputEditPelatih_nama = /^[A-Za-z\s.]+$/;

const inputEditPelatih_NoTelp = document.getElementById("no_telp_editpelatih");
const validasiInputEditPelatih_NoTelp = document.getElementById("validasi-no-telp-editpelatih");
const regexInputEditPelatih_NoTelp= new RegExp ("^08\\d{10}$");

const inputEditPelatih_alamat = document.getElementById("alamat_editpelatih");
const validasiInputEditPelatih_alamat = document.getElementById("validasi-alamat-editpelatih");
const regexInputEditPelatih_alamat = /^.{1,255}$/;

//admin_editdojo
const inputEditDojo_nama = document.getElementById("editdojo_nama");
const validasiInputEditDojo_nama = document.getElementById("validasi-editdojo-nama");
const regexInputEditDojo_nama = /^[A-Za-z\s.]+$/;

const inputEditDojo_alamat = document.getElementById("editdojo_alamat");
const validasiInputEditDojo_alamat = document.getElementById("validasi-editdojo-alamat");
const regexInputEditDojo_alamat = /^.{1,255}$/;

//admin_editinformasi
const inputEditInformasi_judul = document.getElementById("editinformasi_judul");
const validasiInputEditInformasi_judul = document.getElementById("validasi-editinformasi-judul");
const regexInputEditInformasi_judul = /^.{1,100}$/;

const inputEditInformasi_deskripsi = document.getElementById("editinformasi_deskripsi");
const validasiInputEditInformasi_deskripsi = document.getElementById("validasi-editinformasi-deskripsi");
const regexInputEditInformasi_deskripsi = /^.{1,3000}$/;

//MURID
//MURID
//MURID

//murid_editprofile
const inputEditProfile_nama = document.getElementById("editprofile_nama");
const validasiInputEditProfile_nama = document.getElementById("validasi-editprofile-nama");
const regexInputEditProfile_nama= /^[A-Za-z\s.]+$/;

const inputEditProfile_noTelp = document.getElementById("editprofile_notelp");
const validasiInputEditProfile_noTelp = document.getElementById("validasi-editprofile-notelp");
const regexInputEditProfile_noTelp = new RegExp ("^08\\d{10}$");

const inputEditProfile_tempatLahir = document.getElementById("editprofile_tempatLahir");
const validasiInputEditProfile_tempatLahir = document.getElementById("validasi-editprofile-tempatLahir");
const regexInputEditProfile_tempatLahir = /^[A-Za-z\s-]+$/;

const inputEditProfile_email = document.getElementById("editprofile_email");
const validasiInputEditProfile_email = document.getElementById("validasi-editprofile-email");
const regexInputEditProfile_email = new RegExp (/^\S+@\S+\.\S+$/);

const inputEditProfile_dojo = document.getElementById("editprofile_dojo");
const validasiInputEditProfile_dojo = document.getElementById("validasi-editprofile-dojo");
const regexInputEditProfile_dojo = /^[A-Za-z\s.]+$/;


//murid_forum
const inputMurid_forum = document.getElementById("murid_forum");
const validasiInputMurid_forum = document.getElementById("validasi-murid-forum");
const regexInputMurid_forum = /^.{1,3000}$/;

// PELATIH
// PELATIH
// PELATIH

//pelatih_editmurid
const inputPelatihEditMurid_nama = document.getElementById("p_editMurid_nama");
const validasiInputPelatihEditMurid_nama = document.getElementById("validasi-p-editMurid-nama");
const regexInputPelatihEditMurid_nama= /^[A-Za-z\s.]+$/;

const inputPelatihEditMurid_noTelp = document.getElementById("p_editMurid_notelp");
const validasiPelatihEditMurid_noTelp = document.getElementById("validasi-p-editMurid-notelp");
const regexInputPelatihEditMurid_noTelp = new RegExp ("^08\\d{10}$");

const inputPelatihEditMurid_Tgl = document.getElementById("p_editMurid_tgl");
const validasiInputpelatihEditMurid_Tgl = document.getElementById("validasi-p-editMurid-tgl");
const regexInputPelatihEditMurid_Tgl = /^.{1,255}$/;

//pelatih_forum
const inputPelatih_forum = document.getElementById("pelatih_forum");
const validasiInputPelatih_forum = document.getElementById("validasi-pelatih-forum");
const regexInputPelatih_forum = /^.{1,3000}$/;

//pelatih_editprofil
const inputPelatihEditProfil_nama = document.getElementById("p_editProfil_nama");
const validasiInputPelatihEditProfil_nama = document.getElementById("validasi-p-editProfil-nama");
const regexInputPelatihEditProfil_nama= /^[A-Za-z\s.]+$/;

const inputPelatihEditProfil_noTelp = document.getElementById("p_editProfil_notelp");
const validasiPelatihEditProfil_noTelp = document.getElementById("validasi-p-editProfil-notelp");
const regexInputPelatihEditProfil_noTelp = new RegExp ("^08\\d{10}$");

const inputPelatihEditProfil_TempatLahir = document.getElementById("p_editProfil_tempatLahir");
const validasiInputPelatihEditProfil_Tempatlahir = document.getElementById("validasi-p-editProfil-tempatLahir");
const regexInputPelatihEditProfil_TempatLahir = /^.{1,255}$/;

const inputPelatihEditProfil_Email = document.getElementById("p_editProfil_email");
const validasiInputPelatihEditProfil_Email = document.getElementById("validasi-p-editProfil-email");
const regexInputPelatihEditProfil_Email = new RegExp (/^\S+@\S+\.\S+$/); 

const inputPelatihEditProfil_Pengcab = document.getElementById("p_editProfil_pengcab");
const validasiInputpelatihEditProfil_Pengcab = document.getElementById("validasi-p-editProfil-pengcab");
const regexInputPelatihEditProfil_Pengcab = /^.{1,255}$/;

const inputPelatihEditProfil_Dojo = document.getElementById("p_editProfil_dojo");
const validasiInputpelatihEditProfil_Dojo = document.getElementById("validasi-p-editProfil-dojo");
const regexInputPelatihEditProfil_Dojo = /^.{1,255}$/;


// ADMIN
// ADMIN

//admin_detailpendaftaran (done)
if (inputNamaPendaftar) {
    validasi(inputNamaPendaftar, validasiInputNamaPendaftar, regexInputNamaPendaftar);
}
if (inputPasswordPendaftar) {
    validasi(inputPasswordPendaftar, validasiInputPasswordPendaftar, regexInputPasswordPendaftar);
}
if (inputNoTelpPendaftar) {
    validasi(inputNoTelpPendaftar, validasiInputNoTelpPendaftar, regexInputNoTelpPendaftar);
}
if (inputPekerjaanOrtu) {
    validasi(inputPekerjaanOrtu, validasiInputPekerjaanOrtu, regexInputPekerjaanOrtu);
}
if (inputPendidikanTerakhir) {
    validasi(inputPendidikanTerakhir, validasiInputPendidikanTerakhir, regexInputPendidikanTerakhir);
}

if (inputEmailPendaftar) {
    validasi(inputEmailPendaftar, validasiInputEmailPendaftar, regexInputEmailPendaftar);
}

// admin_tambahinformasi (done)
if (inputJudulInformasi) {
    validasi(inputJudulInformasi, validasiInputJudulInformasi, regexInputJudulInformasi);
}
if (inputDeskripsiInformasi) {
    validasi(inputDeskripsiInformasi, validasiInputDeskripsiInformasi, regexInputDeskripsiInformasi);
}

//admin_tambahmurid (done)
if (inputNamaMurid) {
    validasi(inputNamaMurid, validasiInputNamaMurid, regexInputNamaMurid);
}
if (inputNoTelpMurid) {
    validasi(inputNoTelpMurid, validasiInputNoTelpMurid, regexInputNoTelpMurid);
}
if (inputAlamatMurid) {
    validasi(inputAlamatMurid, validasiInputAlamatMurid, regexInputAlamatMurid);
}

//admin_tambahdojo (done)
if (inputNamaDojo) {
    validasi(inputNamaDojo, validasiInputNamaDojo, regexInputNamaDojo);
}
if (inputAlamatDojo) {
    validasi(inputAlamatDojo, validasiInputAlamatDojo, regexInputAlamatDojo);
}

//admin_editjadwal (done)
if (inputCatatanJadwal) {
    validasi(inputCatatanJadwal, validasiInputCatatanJadwal, regexInputCatatanJadwal);
}
if (inputTempatJadwal) {
    validasi(inputTempatJadwal, validasiInputTempatJadwal, regexInputTempatJadwal);
}

//admin_tambahmateri (done)
if (inputJudulMateri) {
    validasi(inputJudulMateri, validasiInputJudulMateri, regexInputJudulMateri);
}
if (inputJudulsubMateri) {
    validasi(inputJudulsubMateri, validasiInputJudulsubMateri, regexInputJudulsubMateri);
}
if (inputDeskripsiMateri) {
    validasi(inputDeskripsiMateri, validasiInputDeskripsiMateri, regexInputDeskripsiMateri);
}

//admin_tambahpelatih
if (inputNamaPelatih) {
    validasi(inputNamaPelatih, validasiInputNamaPelatih, regexInputNamaPelatih);
}
if (inputPasswordPelatih) {
    validasi(inputPasswordPelatih, validasiInputPasswordPelatih, regexInputPasswordPelatih);
}
if (inputNoTelpPelatih) {
    validasi(inputNoTelpPelatih, validasiInputNoTelpPelatih, regexInputNoTelpPelatih);
}
if (inputAlamatPelatih) {
    validasi(inputAlamatPelatih, validasiInputAlamatPelatih, regexInputAlamatPelatih);
}
if (inputEmailPelatih) {
    validasi(inputEmailPelatih, validasiInputEmailPelatih, regexInputEmailPelatih);
}

//admin_tambahjadwal (done)
if (inputTambahCatatan) {
    validasi(inputTambahCatatan, validasiInputTambahCatatan, regexInputTambahCatatan);
}
if (inputTempatLatihan) {
    validasi(inputTempatLatihan, validasiInputTempatLatihan, regexInputTempatLatihan);
}

//admin_editmurid (done)
if (inputEditMurid_nama) {
    validasi(inputEditMurid_nama, validasiInputEditMurid_nama, regexInputEditMurid_nama);
}
if (inputEditMurid_NoTelp) {
    validasi(inputEditMurid_NoTelp, validasiInputEditMurid_NoTelp, regexInputEditMurid_NoTelp);
}
if (inputEditMurid_namaOrtu) {
    validasi(inputEditMurid_namaOrtu, validasiInputEditMurid_namaOrtu, regexInputEditMurid_namaOrtu);
}

//admin_editpelatih (done)
if (inputEditPelatih_nama) {
    validasi(inputEditPelatih_nama, validasiInputEditPelatih_nama, regexInputEditPelatih_nama);
}
if (inputEditPelatih_NoTelp) {
    validasi(inputEditPelatih_NoTelp, validasiInputEditPelatih_NoTelp, regexInputEditPelatih_NoTelp);
}
if (inputEditPelatih_alamat) {
    validasi(inputEditPelatih_alamat, validasiInputEditPelatih_alamat, regexInputEditPelatih_alamat);
}

//admin_editdojo (done)
if (inputEditDojo_nama) {
    validasi(inputEditDojo_nama, validasiInputEditDojo_nama, regexInputEditDojo_nama);
}
if (inputEditDojo_alamat) {
    validasi(inputEditDojo_alamat, validasiInputEditDojo_alamat, regexInputEditDojo_alamat);
}

//admin_editinformasi (done)
if (inputEditInformasi_judul) {
    validasi(inputEditInformasi_judul, validasiInputEditInformasi_judul, regexInputEditInformasi_judul);
}
if (inputEditInformasi_deskripsi) {
    validasi(inputEditInformasi_deskripsi, validasiInputEditInformasi_deskripsi, regexInputEditInformasi_deskripsi);
}

//MURID
//MURID
//MURID

//murid_editprofile
if (inputEditProfile_nama) {
    validasi(inputEditProfile_nama, validasiInputEditProfile_nama, regexInputEditProfile_nama);
}
if (inputEditProfile_noTelp) {
    validasi(inputEditProfile_noTelp, validasiInputEditProfile_noTelp, regexInputEditProfile_noTelp);
}
if (inputEditProfile_tempatLahir) {
    validasi(inputEditProfile_tempatLahir, validasiInputEditProfile_tempatLahir, regexInputEditProfile_tempatLahir);
}
if (inputEditProfile_email) {
    validasi(inputEditProfile_email, validasiInputEditProfile_email, regexInputEditProfile_email);
}
if (inputEditProfile_dojo) {
    validasi(inputEditProfile_dojo, validasiInputEditProfile_dojo, regexInputEditProfile_dojo);
}

//murid_forum
if (inputMurid_forum) {
    validasi(inputMurid_forum, validasiInputMurid_forum, regexInputMurid_forum);
}

//PELATIH
//PELATIH
//PELATIH

//pelatih_editmurid
if (inputPelatihEditMurid_nama) {
    validasi(inputPelatihEditMurid_nama, validasiInputPelatihEditMurid_nama, regexInputPelatihEditMurid_nama);
}
if (inputPelatihEditMurid_noTelp) {
    validasi(inputPelatihEditMurid_noTelp, validasiPelatihEditMurid_noTelp, regexInputPelatihEditMurid_noTelp);
}
if (inputPelatihEditMurid_Tgl) {
    validasi(inputPelatihEditMurid_Tgl, validasiInputpelatihEditMurid_Tgl, regexInputPelatihEditMurid_Tgl);
}

//pelatih_forum
if (inputPelatih_forum) {
    validasi(inputPelatih_forum, validasiInputPelatih_forum, regexInputPelatih_forum);
}

//pelatih_editprofil
if (inputPelatihEditProfil_nama) {
    validasi(inputPelatihEditProfil_nama, validasiInputPelatihEditProfil_nama, regexInputPelatihEditProfil_nama);
}
if (inputPelatihEditProfil_noTelp) {
    validasi(inputPelatihEditProfil_noTelp, validasiPelatihEditProfil_noTelp, regexInputPelatihEditProfil_noTelp);
}
if (inputPelatihEditProfil_Pengcab) {
    validasi(inputPelatihEditProfil_Pengcab, validasiInputpelatihEditProfil_Pengcab, regexInputPelatihEditProfil_Pengcab);
}
if (inputPelatihEditProfil_TempatLahir) {
    validasi(inputPelatihEditProfil_TempatLahir, validasiInputPelatihEditProfil_Tempatlahir , regexInputPelatihEditProfil_TempatLahir);
}
if (inputPelatihEditProfil_Dojo) {
    validasi(inputPelatihEditProfil_Dojo, validasiInputpelatihEditProfil_Dojo, regexInputPelatihEditProfil_Dojo);
}
if (inputPelatihEditProfil_Email) {
    validasi(inputPelatihEditProfil_Email, validasiInputPelatihEditProfil_Email, regexInputPelatihEditProfil_Email);
}


function validasi(elementHtml, validasiInput, regex) {
    elementHtml.addEventListener("input", () => {
        if (elementHtml.value === "") {
            validasiInput.classList.remove("text-green-500");
            validasiInput.classList.remove("text-red-500");
            elementHtml.classList.add("focus:ring-indigo-600");
            elementHtml.classList.remove("focus:ring-red-600");
            elementHtml.classList.remove("focus:ring-green-600");
            elementHtml.classList.add("ring-grey-300");
            elementHtml.classList.remove("ring-red-600");
            elementHtml.classList.remove("ring-green-600");
            validasiInput.innerHTML = "";
        } else if (regex.test(elementHtml.value)) {
            validasiInput.classList.add("text-green-500");
            validasiInput.classList.remove("text-red-500");
            elementHtml.classList.remove("focus:ring-indigo-600");
            elementHtml.classList.remove("focus:ring-red-600");
            elementHtml.classList.add("focus:ring-green-600");
            elementHtml.classList.remove("ring-grey-300");
            elementHtml.classList.remove("ring-red-600");
            elementHtml.classList.add("ring-green-600");
            validasiInput.innerHTML = "Valid";
        } else {
            validasiInput.classList.add("text-red-500");
            validasiInput.classList.remove("text-green-500");
            elementHtml.classList.remove("focus:ring-indigo-600");
            elementHtml.classList.remove("focus:ring-green-600");
            elementHtml.classList.add("focus:ring-red-600");
            elementHtml.classList.remove("ring-grey-300");
            elementHtml.classList.remove("ring-green-600");
            elementHtml.classList.add("ring-red-600");
            validasiInput.innerHTML = "Invalid";
        }
    });
}