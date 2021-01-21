<html>
    <head>
        <title>Form User</title>
        <style>
            body {
                font-family:tahoma;
                font-size:12px;
            }

            #signup-step {
                margin:auto;
                padding:0;
                width:53%
            }

            #signup-step li {
                list-style:none; 
                float:left;
                padding:5px 10px;
                border-top:#004C9C 1px solid;
                border-left:#004C9C 1px solid;
                border-right:#004C9C 1px solid;
                border-radius:5px 5px 0 0;
            }

            .active {
                color:#FFF;
            }

            #signup-step li.active {
                background-color:#004C9C;
            }

            #signup-form {
                clear:both;
                border:1px #004C9C solid;
                padding:20px;
                width:50%;
                margin:auto;
            }

            .demoInputBox {
                padding: 10px;
                border: #CDCDCD 1px solid;
                border-radius: 4px;
                background-color: #FFF;
                width: 50%;
            }

            .signup-error {
                color:#FF0000; 
                padding-left:15px;
            }

            .message {
                color: #00FF00;
                font-weight: bold;
                width: 100%;
                padding: 10;
            }

            .btnAction {
                padding: 5px 10px;
                background-color: #F00;
                border: 0;
                color: #FFF;
                cursor: pointer;
                margin-top:15px;
            }

            label {
                line-height:35px;
            }

        </style>

        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>

        <script>
            function validate() {
                var output = true;
                $(".signup-error").html('');

                if ($("#personal-field").css('display') != 'none') {
                    if (!($("#name").val())) {
                        output = false;
                        $("#name-error").html("Name Required!");
                    }
                    if (!($("#instansi").val())) {
                        output = false;
                        $("#instansi-error").html("Universitas/Instansi/Lembaga Required!");
                    }
                    if (!($("#address").val())) {
                        output = false;
                        $("#address-error").html("Alamat Rumah Required!");
                    }
                    if (!($("#jurusan").val())) {
                        output = false;
                        $("#jurusan-error").html("Jurusan/Program Required!");
                    }
                    if (!($("#status").val())) {
                        output = false;
                        $("#status-error").html("Status Required!");
                    }
                    if (!($("#NIK").val())) {
                        output = false;
                        $("#NIK-error").html("NIP/NIM/NIK Required!");
                    }
                    if (!($("#perihal").val())) {
                        output = false;
                        $("#perihal-error").html("Perihal Penelitian Required!");
                    }
                    if (!($("#lokasi_penelitian").val())) {
                        output = false;
                        $("#lokasi_penelitian-error").html("Lokasi/Tempat Penelitian Required!");
                    }

                    if (!($("#tembusan_surat").val())) {
                        output = false;
                        $("#tembusan_surat-error").html("Tembusan Surat Required!");
                    }
                    if (!($("#anggota_tim").val())) {
                        output = false;
                        $("#anggota_tim-error").html("Anggota Tim Peneliti Required!");
                    }
                }

                if ($("#upload-field").css('display') != 'none') {
                    if (!($("#surat_pengantar").val())) {
                        output = false;
                        $("#surat_pengantar-error").html("Surat Pengantar Required!");
                    }

                    if (!($("#proposal_penelitian").val())) {
                        output = false;
                        $("#proposal_penelitian-error").html("Proposal Penelitian Required!");
                    }
                    if (!($("#fotocopy_KTP").val())) {
                        output = false;
                        $("#fotocopy_KTP-error").html("Fotocopy KTP Required!");
                    }
                    if (!($("#surat_kesediaan_penelitian").val())) {
                        output = false;
                        $("#surat_kesediaan_penelitian-error").html("Surat Kesediaan Tempat Penelitian Required!");
                    }

                    
                }

                if ($("#download-field").css('display') != 'none') {
                    if (!($("#phone").val())) {
                        output = false;
                        $("#phone-error").html("Phone required!");
                    }

                    if (!($("#email").val())) {
                        output = false;
                        $("#email-error").html("Email required!");
                    }

                    if (!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                        $("#email-error").html("Invalid Email!");
                        output = false;
                    }

                    if (!($("#address").val())) {
                        output = false;
                        $("#address-error").html("Address required!");
                    }
                }

                return output;
            }

            $(document).ready(function () {
                $("#next").click(function () {
                    var output = validate();
                    if (output === true) {
                        var current = $(".active");
                        var next = $(".active").next("li");
                        if (next.length > 0) {
                            $("#" + current.attr("id") + "-field").hide();
                            $("#" + next.attr("id") + "-field").show();
                            $("#back").show();
                            $("#finish").hide();
                            $(".active").removeClass("active");
                            next.addClass("active");
                            if ($(".active").attr("id") == $("li").last().attr("id")) {
                                $("#next").hide();
                                $("#finish").show();
                            }
                        }
                    }
                });


                $("#back").click(function () {
                    var current = $(".active");
                    var prev = $(".active").prev("li");
                    if (prev.length > 0) {
                        $("#" + current.attr("id") + "-field").hide();
                        $("#" + prev.attr("id") + "-field").show();
                        $("#next").show();
                        $("#finish").hide();
                        $(".active").removeClass("active");
                        prev.addClass("active");
                        if ($(".active").attr("id") == $("li").first().attr("id")) {
                            $("#back").hide();
                        }
                    }
                });

                $("input#finish").click(function (e) {
                    var output = validate();
                    var current = $(".active");

                    if (output === true) {
                        return true;
                    } else {
                        //prevent refresh
                        e.preventDefault();
                        $("#" + current.attr("id") + "-field").show();
                        $("#back").show();
                        $("#finish").show();
                    }
                });
            });
        </script>

    </head>
    <body>

        <ul id="signup-step">
            <li id="personal" class="active">Informasi Data Diri</li>
            <li id="upload">Upload Berkas</li>
            <li id="download">Download Surat</li>
        </ul>

        <?php
        if (isset($success)) {
            echo '<div>User record inserted successfully</div>';
        }

        $attributes = array('name' => 'frmRegistration', 'id' => 'signup-form');
        echo form_open($this->uri->uri_string(), $attributes);
        ?>
        <div id="personal-field">
            <label><b>Nama Pemohon</b></label><span id="name-error" class="signup-error"></span>
            <div><input type="text" name="name" id="name" class="demoInputBox"/></div>

            <label><b>Universitas/Instansi/Lembaga</b></label><span id="instansi-error" class="signup-error"></span>
            <div><input type="text" name="instansi" id="instansi" class="demoInputBox"/></div>

            <label><b>Alamat Rumah</b></label><span id="address-error" class="signup-error"></span>
            <div><textarea type="text" name="address" id="address" class="demoInputBox" rows="5" cols="50"/></textarea></div>

            <label><b>Jurusan/Program</b></label><span id="jurusan-error" class="signup-error"></span>
            <div><input type="text" name="jurusan" id="jurusan" class="demoInputBox"/></div>

            <label><b>Status</b></label><span id="status-error" class="signup-error"></span>
            <div><input type="text" name="status" id="status" class="demoInputBox"/></div>

            <label><b>NIP/NIM/NIK</b></label><span id="NIK-error" class="signup-error"></span>
            <div><input type="text" name="NIK" id="NIK" class="demoInputBox"/></div>

            <label><b>Perihal Penelitian</b></label><span id="perihal-error" class="signup-error"></span>
            <div><input type="text" name="perihal" id="perihal" class="demoInputBox"/></div>

            <label><b>Waktu/Lama Penelitian</b></label>
            <div><input type="date" value="yyyy-mm-dd" name="waktu_mulai_penelitian" id="waktu_mulai_penelitian" class="demoInputBox"/></div><br>
            <div><input type="date" value="yyyy-mm-dd" name="waktu_selesai_penelitian" id="waktu_mulai_penelitian" class="demoInputBox"/></div>

            <label><b>Lokasi/Tempat Penelitian</b></label><span id="lokasi_penelitian-error" class="signup-error"></span>
            <div><input type="text" name="lokasi_penelitian" id="lokasi_penelitian" class="demoInputBox"/></div>

            <label><b>Tembusan Surat</b></label><span id="tembusan_surat-error" class="signup-error"></span>
            <div><input type="text" name="tembusan_surat" id="tembusan_surat" class="demoInputBox"/></div>

            <label><b>Anggota Tim Peniliti</b></label><span id="anggota_tim-error" class="signup-error"></span>
            <div><textarea type="text" name="anggota_tim" id="anggota_tim" class="demoInputBox" rows="5" cols="50"/></textarea></div>

        </div>

        <div id="upload-field" style="display:none;">
            <label><b>Surat Pengantar</b></label><span id="surat_pengantar-error" class="signup-error"></span>
            <div><input type="file" name="surat_pengantar" id="surat_pengantar" class="demoInputBox"/></div>
            <label><b>Proposal Penelitian</b></label><span id="proposal_penelitian-error" class="signup-error"></span>
            <div><input type="file" name="proposal_penelitian" id="proposal_penelitian" class="demoInputBox"/></div>
            <label><b>Fotocopy KTP</b></label><span id="fotocopy_KTP-error" class="signup-error"></span>
            <div><input type="file" name="fotocopy_KTP" id="fotocopy_KTP" class="demoInputBox"/></div>
            <label><b>Surat Kesediaan Tempat Penelitian</b></label><span id="surat_kesediaan_penelitian-error" class="signup-error"></span>
            <div><input type="file" name="surat_kesediaan_penelitian" id="surat_kesediaan_penelitian" class="demoInputBox"/></div>
            <label><b>Surat Pernyataan</b></label>
            <div><input type="file" name="surat_pernyataan" id="surat_pernyataan" class="demoInputBox"/></div>
        </div>

        <div id="download-field" style="display:none;">
            <label><b>Unduh Surat</b></label><span id="" class="signup-error"></span>
            <div><input type="text" name="" id="" class="demoInputBox"/></div>
        </div> 

        <div>
            <input class="btnAction" type="button" name="back" id="back" value="Back" style="display:none;">
            <input class="btnAction" type="button" name="next" id="next" value="Next" >
            <input class="btnAction" type="submit" name="finish" id="finish" value="Finish" style="display:none;">
        </div>
        <?php echo form_close(); ?>

    </body>
    </html>