/**
 * @description      :
 * @author           : Ridho Fauzan
 * @group            :
 * @created          : 07/09/2025 - 23:51:38
 *
 * MODIFICATION LOG
 * - Version         : 1.0.0
 * - Date            : 07/09/2025
 * - Author          : Ridho Fauzan
 * - Modification    :
 **/
// console.log("200 - connection success");

$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#formModalLabel").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $(".modal-content form").attr(
      "action",
      "http://localhost/mvc-vanila-php/public/mahasiswa/tambah"
    );

    $("#nama").val("");
    $("#nrp").val("");
    $("#email").val("");
    $("#jurusan").val("");
    $("#id").val("");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#formModalLabel").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-content form").attr(
      "action",
      "http://localhost/mvc-vanila-php/public/mahasiswa/ubah"
    );

    const id = $(this).data("id");
    // console.log(id);

    $.ajax({
      url: "http://localhost/mvc-vanila-php/public/mahasiswa/getUbah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        // console.log(data);
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
